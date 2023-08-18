import * as d3 from 'd3';

export const RandomString = (length) => {
	const charset = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
	let randomString = "";
  
	for (let i = 0; i < length; i++) {
	  const randomIndex = Math.floor(Math.random() * charset.length);
	  randomString += charset[randomIndex];
	}
  
	return randomString;
  }

export const MinsToString = (floatNum) => {
	if( typeof floatNum === 'string' ) return floatNum;
	if( floatNum <= 0 ) return '00:00';

	// Calculate hours and minutes
	const hours = floatNum / 60;
	// // const minutes = Math.round((floatNum - hours) * 60);
	// const minutes = floatNum % 60;


	// Format into HH:MM
	return FloatToTime(hours);
}

export const StringToMins = (timeString) => {
	if( Number(timeString) === timeString ) return timeString;

	// Split the input into hours and minutes
	const parts = timeString.split(":");
	const inputHours = parseInt(parts[0], 10);
	const inputMinutes = parseInt(parts[1], 10);

	// Convert hours to minutes and add the input minutes
	return inputHours * 60 + inputMinutes;
	
}

export const TimeToFloat = (timeString) => {
	if( Number(timeString) === timeString ) return timeString;
	const timeParts = timeString.split(':');
  
	// If the timeString does not have a ':' separator, it means it only has hours
	let hours = 0;
	let minutes = 0;
  
	if (timeParts.length === 2) {
		hours = parseInt(timeParts[0], 10);
		minutes = parseInt(timeParts[1], 10);
	} else if (timeParts.length === 1) {
		hours = parseInt(timeString, 10);
	}

	// Ensure both hours and minutes are valid integers
	if (isNaN(hours)) hours = 0;
	if (isNaN(minutes)) minutes = 0;
  
	// Convert minutes to decimal
	const decimalMinutes = minutes / 60;

	if (isNaN(decimalMinutes)) minutes = 0;
  
	// Add decimal minutes to the hours to get the result
	const floatNum = hours + decimalMinutes;
	return floatNum;
}


export const FloatToTime = (floatNum) => {
	if( typeof floatNum === 'string' ) return floatNum;
	if( floatNum <= 0 ) return '00:00';
	const hours = Math.floor(floatNum); // Extract the integer part as hours
	const minutes = Math.round((floatNum - hours) * 60); // Calculate the remaining minutes
  
	return `${hours.toString().padStart(2, '0')}:${minutes.toString().padStart(2, '0')}`;
}

export const DateToObj = ([date,time],format)  => {
	if(date instanceof Date){
		if(time) {
			return d3.timeHour.offset(date, (TimeToFloat(time) - date.getHours()));
		} else {
			return date;
		}
	};

	format = format || (time ? "%Y-%m-%dT%H:%M" : "%Y-%m-%d");

	if(time){
		return d3.timeParse("%Y-%m-%dT%H:%M")(`${date}T${time}`);
	}else{
		return d3.timeParse("%Y-%m-%d")(date);
	}
}

export const DateToString = ([date,time],format)  => {
	if(typeof date === 'string'){
		date = DateToObj([date,time]);
	};
	if(time){
		format = format || "%Y-%m-%dT%H:%M";
	}else{
		format = format || "%Y-%m-%d";
	}
	return d3.timeFormat(format)(date);
}


// Custom comparator function for date sorting
export const DateOrder = (a, b) => d3.ascending(DateToObj([a.date]), DateToObj([b.date]));

// Custom comparator function for start time sorting
export const StartTimeOrder = (a, b) => d3.ascending(TimeToFloat(a.start_time), TimeToFloat(b.start_time));

export const CheckDomainBound = ([date,time],timeByMode,data,latestDate,startDate) => {

	const [min,max] = TimeRange(
		timeByMode,
		data,
		latestDate,
		startDate
	);

	return (
		DateToObj([date,time]) >= min
		&& DateToObj([date,time]) <= max
	)

}

export const DayRange = (date) => {
	const min = d3.timeHour.floor(DateToObj([date]))
	const max = d3.timeSecond.offset(d3.timeDay.offset(d3.timeDay.floor(min),1),-1);


	return [min,max];
	
}


export const TimeRange = (
	timeByMode,
	data,
	latestDate,
	startDate
) => {
	let to_return;


	const [rMinDay,rMaxDay] = DayRange(DateToObj([latestDate]));
	const [sMinDay,sMaxDay] = startDate ? DayRange(DateToObj([startDate])) : [false,false];





	if(sMinDay) {
		to_return = [sMinDay,rMaxDay];
	} else {

		switch(timeByMode){
	
			case 'day':
				// to_return = [rMinDay,rMaxDay];
				to_return = [
					d3.timeHour.offset(
						latestDate,
						d3.min(
							data,
							(d,i) => {
								return i > 0 
									? TimeToFloat(d.start_time)
									: 7;
							}
						)
					),
					d3.timeHour.offset(
						latestDate,
						d3.max(
							data,
							(d,i) => {
								return i > 0 
									? Math.ceil(TimeToFloat(d.start_time) + TimeToFloat(d.total_hours))
									: 7 + 12;
							} 
						)
					),
				];
				break;
				
	
			case 'week':
				to_return = [
					d3.timeMonday(rMinDay),
					d3.timeSecond.offset(d3.timeDay.offset(d3.timeMonday(rMaxDay), 7 ),-1)
				];
				break;
				
	
			case 'month':

				to_return = [
					d3.timeMonth.floor(rMinDay),
					d3.timeSecond.offset(d3.timeMonth.offset(d3.timeMonth.floor(rMaxDay), 1),-1)
				];
				break;
	
			case 'year':
				to_return = [
					// 	d3.timeMonth.offset(self.latestDate,-11),
					// 	self.latestDate
					d3.timeYear.floor(rMinDay),
					sMinDay ? d3.timeDay.offset(d3.timeMonth.offset(d3.timeMonth.floor(rMaxDay), 1),-1) : d3.timeSecond.offset(d3.timeYear.ceil(rMaxDay), -1)
				];
				break;
	
			case 'all':
			default:
				to_return = [
					// 	d3.timeMonth.offset(self.latestDate,-11),
					// 	self.latestDate
					d3.min(data,d => DateToObj([d.date])),
					rMaxDay,
				];
				break;
				
	
			// case 'custom_w':
			// 	to_return = [
			// 		sMinDay ? d3.timeMonday(sMinDay) : d3.timeWeek.offset(d3.timeMonday(rMinDay),-3),
			// 		d3.timeSecond.offset(d3.timeDay.offset(d3.timeMonday(rMaxDay), 7 ),-1),
			// 	];
			// 	break;
				
	
			// case 'custom':
			// 	to_return = [
			// 		sMinDay ? sMinDay : d3.timeMonth.floor(rMinDay),
			// 		sMinDay ? rMaxDay : d3.timeSecond.offset(d3.timeMonth.offset(d3.timeMonth.floor(rMaxDay), 1),-1)
			// 	];
			// 	break;


			
	
		}
	}



	return to_return;
}

export const TimeTicks = (timeByMode,data,latestDate,startDate) => {

	const to_return = [];

	let [start,end] = TimeRange(
		timeByMode,
		data,
		latestDate,
		startDate
	);

	while ( start <= end ) {
		to_return.push(start);
		
		switch(timeByMode) {
			case 'year':
				start = d3.timeMonth.offset(d3.timeMonth.floor(start),1);
				break;
			// case 'custom_w':
			// 	start = d3.timeMonday.offset(start,1);
			// 	break;
			// case 'custom':
			case 'week':
				start = d3.timeDay.offset(start,7);
			default:
				start = d3.timeDay.offset(start,1);
				break;
			case 'day':
				start = d3.timeHour.offset(start,1);
				break;
		}
	}



	return to_return;
}

export const EarliestStart = (data) => {
	return FloatToTime(d3.min(data,d => TimeToFloat(d.start_time)));
}

export const InTesting = () => {
	const hostname = window.location.hostname;
	const desiredSuffixes = ['.local', '.stage.1p21.io'];
  
	for (const suffix of desiredSuffixes) {
	  if (hostname.endsWith(suffix)) {
		return true;
	  }
	}
  
	return false;
  }

export const Today = (InTesting() ? new Date(window.__DEMO_TT_CHARTS_TODAY) : new Date());

export const FilterData = (timeByMode,data,latestDate,startDate) => {

	const [domainMin,domainMax] = TimeRange(
		timeByMode,
		data,
		latestDate,
		startDate
	);
	const [todayMin,todayMax] = DayRange(Today);
	

	return data
		.filter(d => {
			
			return (
				// CheckDomainBound([d.date,d.start_time],timeByMode,data,latestDate,startDate)
				// && 
				DateToObj([d.date,d.start_time]) >= domainMin
				&& DateToObj([d.date,d.start_time]) <= domainMax
				&& DateToObj([d.date,d.start_time]) <= todayMax
				&& TimeToFloat(d.total_hours) > 0
			)
		})
		.sort((a,b) => {
			const dateComparison = DateOrder(a, b);
			const startTimeComparison = StartTimeOrder(a, b);
			return dateComparison !== 0 ? dateComparison : startTimeComparison;
		});
}

export const TheDays = [
	'Sunday',
	'Monday',
	'Tuesday',
	'Wednesday',
	'Thursday',
	'Friday',
	'Saturday',
];

export const TheHours = Array.from({ length: 24 }, (_, hour) => FloatToTime(hour));

export const DataSplitByHour = (data) => {

	data = data
		.reduce((acc, d) => {
			const startTimeFloat = TimeToFloat(d.start_time);
			const totalHoursFloat = TimeToFloat(d.total_hours);
		
			const splitCheck = startTimeFloat + totalHoursFloat;
			if (splitCheck - Math.floor(splitCheck) > 0 || totalHoursFloat > 1 || splitCheck > 1) {
				const hoursSplit = [];
		
				const startFraction = 1 - (startTimeFloat - Math.floor(startTimeFloat));
				let hourSum = totalHoursFloat;
		
				if (startFraction > 0 && 1 - startFraction + hourSum > 1) {
					hoursSplit.push(startFraction);
					hourSum -= startFraction;
				}
		
				const wholeHours = Math.floor(hourSum);
				const endFraction = hourSum - wholeHours;
		
				hoursSplit.push(...Array(wholeHours).fill(1));

				if (endFraction > 0) {
					hoursSplit.push(endFraction);
				}
		
				const entries = hoursSplit.map((h, i) => {
					const dupe = { ...d };
					const startOffset = hoursSplit.slice(0, i).reduce((s, t) => s + t, 0);
					dupe.__og_total_hours = d.total_hours;
					dupe.total_hours = FloatToTime(h);
					dupe.start_time = FloatToTime(startTimeFloat + startOffset);
					dupe.__og_start_time = d.start_time;
					return dupe;
				});
		
				acc.push(...entries);
			} else {
				acc.push(d);
			}
		
			return acc;
		}, [])
		;

	return data.filter(d => TimeToFloat(d.total_hours) > 0);
}


export const DataGroupByDate = (data) => {
	let result = Object.values(
		data.reduce((acc, d) => {
			acc[d.date] = acc[d.date] || { date: d.date, entries: [] };
			acc[d.date].entries.push(d);
			return acc;
		}, {})
	  )

	return result;
}

export const DataGroupByMeta = (data,metaKey,sortByMeta) => {
	sortByMeta = sortByMeta || false;
	let result = [...data];
	result = result
		.reduce((acc,d) => {
			if(!acc.some((a) => a.includes(d[metaKey]))){
				const arr = [
					d[metaKey], //meta
					DateToString([d.date]), //date
					0, // total_hours
					0, // start_time
				];


				// // @offsetBarToActualStartMinute
				// if(self.timeByMode == 'day'){
				// 	let startMinutes = TimeToFloat(d.start_time) - Math.floor(TimeToFloat(d.start_time));
				// 	let trueStart = (TimeToFloat(d.start_time)) + TimeToFloat(d.total_hours);
				// 	let offsetStart = startMinutes + TimeToFloat(d.total_hours);
					
				// 	if(
				// 		startMinutes > 0
				// 		&& TimeToFloat(d.total_hours) < 1
				// 		&& (offsetStart).toFixed(4) <= 1
				// 		&& (startMinutes - TimeToFloat(d.total_hours) + 1).toFixed(4) < 1
				// 	) {
				// 		arr[2] += startMinutes;
				// 	}
				// };

				//suport splits
				if(d['__og_total_hours']) {
					arr.push(d['__og_total_hours'])
				}else{
					arr.push(d.total_hours)
				};
				if(d['__og_start_time']) {
					arr.push(d['__og_start_time'])
				}else{
					arr.push(d.start_time)
				};

				acc.push(arr);
			}

			const i = acc.findIndex(m => m[0] === d[metaKey]);

			acc[i][2] += TimeToFloat(d.total_hours);

			return acc;
		},[])
		.sort((a,b)=> {
			if(sortByMeta){
				return a[0].toUpperCase().localeCompare(b[0].toUpperCase())
			} else {
				return 0;
			}
		});
		;

		// console.warn('grouped',...result);


	result = result
		.map((d,i,dat) => {
			if(i > 0 && i <= dat.length){
				d[3] = dat.slice(0, i).reduce((s, t) => s + t[2], d[3]);
			}
			return d;
		})

		;

	// console.warn('recalc start',...result);

	return result.map( d => {
		const to_return = {};

		to_return[metaKey] = d[0];
		to_return['date'] = d[1];
		to_return['total_hours'] = FloatToTime(d[2]);
		to_return['start_time'] = FloatToTime(d[3]) ;
		if(d[4]) to_return['__og_total_hours'] = FloatToTime(d[4]);
		if(d[5]) to_return['__og_start_time'] = FloatToTime(d[5]);

		return to_return;
	});
}

//color palette for dots
export const ColorPalette = [
	'#E07C39',
	'#0037b4',
	'#2699fb',
	'#EFBC3D',
	'#042377',
	'#d92d2d',
	
	'#fec87c',
	'#6154a4',
	'#a168d9',
	'#fff200',
	'#fd7f03',
	'#fb1818',
	'#008eb0',
	'#8f4139',
	'#006943',
	'#16b900',
	'#5e01a8',
	'#fe85d6',
	'#01c6ab',
	'#313f76',
	'#547b80',
	'#d069a9',
	'#5f6046',
	'#c26558',
	'#4db7ff',
	'#5a3b00',
	'#e1e43c',
	'#e18256',
	'#9e005d',
	'#000000',
];