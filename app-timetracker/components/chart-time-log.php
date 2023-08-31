<?php
//args/props. feel free to modify as needed
$defs = array(
	//@param id - string - unique identifier for element. not needed. for placeholder demo only
		'id' => 'REPLACEID',
	/* @param data - @PLACEHOLDER */
		'data' => file_get_contents('placeholder/data/time-entries.json'),
	
);

$args = app_parse_args($data,$defs);
?>
<!-- Step 1: html -->
<div ref="chartContainer" id="your-analytics-time-log-<?=$args['id'] ?>"></div>

<!-- FOR DEMO ONLY. DO NOT COPY -->
	<script src="https://d3js.org/d3.v7.min.js"></script>
	<script src="<?=FWAPPS_ROOT_URL.'/app-'.FWAPPS_APP; ?>/assets/scripts/charts/insights-your-analytics/demo-only.mine.min.js"></script>
	<script src="<?=FWAPPS_ROOT_URL.'/app-'.FWAPPS_APP; ?>/assets/scripts/charts/insights-your-analytics/d3Log.mine.js"></script>
	
	<script>
	
	///////////////////// STEP 1 -  Imports
	/* @NOTE
		- Requires d3:
			1) terminal:
				`npm install d3`
			1.5) Copy all of the script folder to the app's file structure:
				app-timetracker/assets/scripts/charts
			2) on component:
				`import d3Log from 'app-timetracker/assets/scripts/charts/insights-your-analytics/d3Log.js'`; //update the path
		- Requires framework tooltip for hover tooltips to render
				`import Tooltip from '../imports/tooltip'`;
	*/
	
	// IIFE
	(function(d3Log,demo_only,window){

	///////////////////// STEP 2 -  Setup
	
	
		//@REPLACE `document.getElementById('#your-analytics-time-log-<?=$args['id'] ?>')` to match this.$refs.chartContainer
		const chartContainer = document.getElementById('your-analytics-time-log-<?=$args['id'] ?>'); 
	
		const chart = new d3Log(chartContainer);


		// setup the chart in an object with keys to pass:
		/*
		@param data => json data - data containing array of single level entries following this format:
			{
				"task_category": "String",
				"project": "String",
				"client": "String",
				"total_hours": "HH:MM" 
			}
			@NOTE also works with the data format coming from the app so you do not need to follow this format

		@param latestDate => YYYY-MM-DD string - reference date for the timeBy of the chart or the latest date
			will default to today's date or the latest date for a range
			- For ranges that don't contain today, simply offset from today's date
				ie: if today is 2023-12-08
					- last year is 2024-12-08
					- last month is 2023-11-08
					- last week is 2023-12-01
					- yesterday is 2023-12-01
			@NOTE you dont need this paramter anymore

		@param timeByMode => lowercase string: day,week,month,year',all - the data of timeBy to display based on latestDate: ie,
			day -> the day's worth of data, this week's data, etc.
			week -> render the entries for days that fall under the same week as the set latestDate
			month -> render the entries for days that fall under the same month as the set latestDate
			year -> render the entries for days that fall under the same year as the set latestDate
			all -> render thEM ALLLLL

			NOTE: 
			This filters the data passed to include only the entries that have dates that fall into the timeBy range and renders the proper axes to correspond to the range of the data.
			This allows the chart to use the same data being passed for the other insight d3 charts as well for consistency
			@NOTE you dont need this paramter anymore
			
		@param meta => lowercase string: task_category, project, client - info to represent colors for
			@NOTE you dont need this paramter anymore

		@param startDate => YYYY-MM-DD string - minimum date for the range.
			NOTE: Setting this will also override timeBy displayed dates depending on the difference of dates as well.
			@NOTE you dont need this paramter anymore
		*/


		//ready the chart: can be called on updated()
		/* 
		chart.render({
			data: data,
			timeByMode: 'week',
			latestDate: '2023-12-08'
		});*/
		

		
		
		////////////////////////////////////////////// STOP HERE !!!!! FOR DEMO ONLY DO NOT COPY

		//@REPLACE $args['data'] to match json data to render
		// @NOTE - number of data
			// 'day' => best to pass data entries from the week the day is in, closest past monday to closest future sunday
			// 'custom' => best to pass
		const _data = <?=$args['data'] ?>;
		
		const  checkTickBound = ([rDate,rTime],tick,groupBy) => {
			let to_return;

			
			

			switch(groupBy){
				case 'year':
					to_return =
						demo_only.DateToObj([rDate,rTime]).getYear() == demo_only.DateToObj([tick]).getYear()
						;
					break;
				case 'month':
					to_return =
						demo_only.DateToObj([rDate,rTime]).getMonth() == demo_only.DateToObj([tick]).getMonth()
						&& demo_only.DateToObj([rDate,rTime]).getYear() == demo_only.DateToObj([tick]).getYear()
						;
					break;
				case 'week':
					to_return = 
						demo_only.DateToObj([rDate,rTime]) >= demo_only.DateToObj([tick])
						&& demo_only.DateToObj([rDate,rTime]) <= d3.timeDay.offset(demo_only.DateToObj([tick]),6)
						;
					break;
				case 'date':
				case 'day':
				default:
					to_return = demo_only.DateToString([rDate]) === demo_only.DateToString([tick]);
					break;
					
				case 'hour':

					to_return = 
						demo_only.DateToString([rDate]) == demo_only.DateToString([tick])
						&& demo_only.DateToObj([rDate,rTime]).getHours() >= demo_only.DateToObj([tick]).getHours()
						&& demo_only.DateToObj([rDate,rTime]).getHours() < demo_only.DateToObj([tick]).getHours() + 1
						;
					break;
			}


			return to_return;


		}

		let 
			timeByMode = 'week',
			latestDate = demo_only.DateToString([demo_only.Today]),
			startDate = null,
			meta = 'task_category';


		function DEMOToggleChart(e) {


			const args = {};

			let newData;

			if(e){

				if(e.target.tagName === 'SELECT') {
					meta = e.target.value;
				} else {
					if(e.target.hasAttribute('data-DEMO-chart-chart-meta')){
						meta =  e.target.getAttribute('data-DEMO-chart-meta');
					}
					
					if(e.target.hasAttribute('data-DEMO-chart-timeBy')){
						timeByMode = e.target.getAttribute('data-DEMO-chart-timeBy');
					}
					if(e.target.hasAttribute('data-DEMO-chart-date')){
						latestDate = e.target.getAttribute('data-DEMO-chart-date');
					}
					if(e.target.hasAttribute('data-DEMO-chart-date-start')){
						startDate = e.target.getAttribute('data-DEMO-chart-date-start') == 'false'
							? false
							: e.target.getAttribute('data-DEMO-chart-date-start');
					}
				}

			} else {;
			}


			if(timeByMode == 'day') {
				timeByMode = 'week'
			}


			const _newData = demo_only.FilterData(
				timeByMode,
				_data,
				latestDate,
				startDate
			);

			let groupBy;

			const freeRangeMaxBars = 12;



			if(
				startDate
			) {
					const _d_startDate = demo_only.DateToObj([startDate]);
					const _d_latestDate = demo_only.DateToObj([latestDate]);
		
					const yearDiff = d3.timeYear.count(_d_startDate,_d_latestDate);
					const monthDiff = d3.timeMonth.count(_d_startDate,_d_latestDate);
					const weekDiff = d3.timeWeek.count(_d_startDate,_d_latestDate);
					const dayDiff = d3.timeDay.count(_d_startDate,_d_latestDate);
	
					if(dayDiff == 0){
						groupBy = 'hour';
					}else if(dayDiff <= 7) {
						groupBy = 'day';
					}else if(dayDiff <= freeRangeMaxBars) {
						groupBy = 'date';
					} else if(weekDiff <= freeRangeMaxBars) {
						groupBy = 'week';
					} else if(monthDiff <= freeRangeMaxBars) {
						groupBy = 'month';
					} else{
						groupBy = 'year';
					}
		
					// console.warn('ilang tangina',freeRangeMaxBars);
					// console.warn('y:',yearDiff);
					// console.warn('m:',monthDiff);
					// console.warn('w:',weekDiff);
					// console.warn('d:',dayDiff);
					// console.warn(groupBy);
	
			} else {
				switch(timeByMode){
					case 'day':
						groupBy = 'hour';
						break;
					case 'week':
						groupBy = 'day';
						break;
					case 'month':
						groupBy = 'date';
						break;
					case 'year':
						groupBy = 'month';
						break;
					case 'all':
					default:
						groupBy = 'year';
						break;
				}
			}

			// console.warn('GROUP BY:',groupBy);

			let timeTicks = [];

			let [start,end] = demo_only.TimeRange(
				timeByMode,
				_newData,
				latestDate,
				startDate
			)

			// console.warn('start end',start,end);
// 
			while ( start <= end ) {
				timeTicks.push(start);
				
				switch(groupBy) {
					case 'hour':
						start = d3.timeHour.offset(start,1);
						break;
					case 'day':
					case 'date':
						start = d3.timeDay.offset(start,1);
						break;
					case 'week':
						start = d3.timeDay.offset(start,7);
						break;
					case 'month':
						start = d3.timeMonth.offset(d3.timeMonth.floor(start),1);
						break;
					case 'year':
					default:
						start = d3.timeYear.offset(d3.timeYear.floor(start),1);
						break;
				}
			}
			// console.warn('TIME TICKS:',timeTicks);
			// 	console.warn('new data:',_newData);



			const group = timeTicks.map(tick => { 
				const to_push = {
					date: demo_only.DateToString([tick])
				};



				const entries = demo_only.DataGroupByMeta(
						_newData.filter( d => checkTickBound([d.date,d.start_time], tick,groupBy)),
						meta,
						true
					)
				;

				to_push.entries = entries;


				// console.warn(meta,'meta');


				return to_push;
			});


		newData = group.reduce((acc,dat) => {
			const date = dat.date;

			
			if (!acc[date]) {

				acc[date] = {};

				dat.entries.forEach(d => {
					acc[date][d[meta]] = demo_only.StringToMins(d.total_hours) * 60;
					// acc[date]['_' + d[meta]] = d.total_hours;
				});

				
			}


			return acc;
		}, {});

			args.data = {...newData};

			console.warn('Log: replicate crData',args.data);
			console.warn('ideal groupBy',groupBy);

			// console.warn(
			// timeByMode,
			// latestDate,
			// startDate,
			// meta
			// );

			
			chart.render({...args});
			
		} 

		DEMOToggleChart();


		const togglers = document.querySelectorAll('[data-DEMOToggleUpdate]');
		togglers.forEach(el=>{
			if(el.tagName === 'SELECT') {
				el.addEventListener('change',DEMOToggleChart);
			} else {
				el.addEventListener('click',DEMOToggleChart);
			}
		});


		
	}(window.d3Log,window.demo_only,window));
	
	</script>
	
