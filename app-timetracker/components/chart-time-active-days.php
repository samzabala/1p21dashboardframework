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
<div ref="chartContainer" id="your-analytics-active-days-<?=$args['id'] ?>"></div>

<!-- FOR DEMO ONLY. DO NOT COPY -->
	<script src="https://d3js.org/d3.v7.min.js"></script>
	<script src="<?=FWAPPS_ROOT_URL.'/app-'.FWAPPS_APP; ?>/assets/scripts/charts/insights-your-analytics/demo-only.mine.min.js"></script>
	<script src="<?=FWAPPS_ROOT_URL.'/app-'.FWAPPS_APP; ?>/assets/scripts/charts/insights-your-analytics/d3ActiveDays.mine.js"></script>
	
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
	(function(d3ActiveDays,demo_only,window){

	///////////////////// STEP 2 -  Setup
	
	
		//@REPLACE `document.getElementById('#your-analytics-allocation-<?=$args['id'] ?>')` to match this.$refs.chartContainer
		const chartContainer = document.getElementById('your-analytics-active-days-<?=$args['id'] ?>'); 
	
		const chart = new d3ActiveDays(chartContainer);

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


		let 
			timeByMode = 'week',
			latestDate = demo_only.DateToString([demo_only.Today]),
			startDate = null,
			meta = 'task_category';
		function DEMOToggleChart(e) {


			const args = {
				timeByMode: chart.renderTimeByMode,
				latestDate: chart.renderLatestDate,
				startDate: chart.renderStartDate
			};

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

			} else {
			}

			if(timeByMode == 'day') {
				timeByMode = 'week'
			}



		const [tMin,tMax] = demo_only.TimeRange(timeByMode,_data,latestDate,startDate);
		const [lMin,lMax] = demo_only.DayRange(latestDate);

		const dataWeekDiff = d3.timeDay.count(
			tMin,
			d3.min([lMax,tMax])
		) / demo_only.TheDays.length;

		const dataByDateTotal = demo_only.DataGroupByDate(demo_only.FilterData(
				timeByMode,
				_data,
				latestDate,
				startDate
			))
			.map(dat => {
				return {
					date: dat.date,
					total_hours: demo_only.FloatToTime(
						d3.sum(
							dat.entries,
							d => {
								return demo_only.TimeToFloat(d.total_hours)
							}
	
						)
					)
				};
			});

			newData = demo_only.TheDays.map(day => {
				const entries = dataByDateTotal
					.filter( d => demo_only.TheDays[ demo_only.DateToObj([d.date]).getDay() ] == day)
					;

				const totalSum = demo_only.FloatToTime(
					d3.sum(
						entries,
						d => {
							return demo_only.TimeToFloat(d.total_hours);
						}
					)
				);


				const count = d3.max([
					dataWeekDiff,
					entries.length,
					1
				]);



				const avg = count > 0 ? demo_only.FloatToTime( demo_only.TimeToFloat(totalSum) / count ) : '00:00';

				return {
					dow: day,
					total_secs: demo_only.StringToMins(avg) * 60,

				}
			});

			args.data = newData;

			console.warn('active days replicate crData',args.data);

			
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


		
	}(window.d3ActiveDays,window.demo_only,window));
	
	</script>