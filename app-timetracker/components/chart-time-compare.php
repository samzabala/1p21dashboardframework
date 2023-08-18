<?php
//args/props. feel free to modify as needed
$defs = array(
	//@param id - string - unique identifier for element. not needed. for placeholder demo only
		'id' => 'REPLACEID',


	
	/* @param data - @PLACEHOLDER */
		'data_l' => file_get_contents('placeholder/data/time-entries.json'),
		'data_r' => file_get_contents('placeholder/data/time-entries-b.json'),
	
);

$args = app_parse_args($data,$defs);
?>
<!-- Step 1: html -->
<div ref="chartContainer" id="compare-<?=$args['id'] ?>"></div>

<!-- FOR DEMO ONLY. DO NOT COPY -->
	<script src="https://d3js.org/d3.v7.min.js"></script>
	<script src="<?=FWAPPS_ROOT_URL.'/app-'.FWAPPS_APP; ?>/assets/scripts/charts/insights-your-analytics/demo-only.mine.min.js"></script>
	<script src="<?=FWAPPS_ROOT_URL.'/app-'.FWAPPS_APP; ?>/assets/scripts/charts/insights-your-analytics/d3Compare.mine.js"></script>
	
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
	(function(d3Compare,window){

	///////////////////// STEP 2 -  Setup
	
	
		//@REPLACE `document.getElementById('#compare-<?=$args['id'] ?>')` to match this.$refs.chartContainer
		const chartContainer = document.getElementById('compare-<?=$args['id'] ?>'); 
	
		const chart = new d3Compare(chartContainer);


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
		const _data_l = <?=$args['data_l'] ?>;
		const _data_r = <?=$args['data_r'] ?>;


		let toggleData_l = true;
		let toggleData_r = true;

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
				toggleData_l = !toggleData_l;
				toggleData_r = !toggleData_r;


			
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

			const data_l = demo_only.FilterData(
				timeByMode,
				(toggleData_l ? _data_r : _data_l),
				latestDate,
				startDate
			);
			const data_r = demo_only.FilterData(
				timeByMode,
				(toggleData_r ? _data_l : _data_r),
				latestDate,
				startDate
			);


			const comboData = [
				...data_l,
				...data_r
			];

			newData = comboData.reduce((acc, d) => {
				
				if (!acc.hasOwnProperty(d[meta])) {
					acc[d[meta]] = {};
				}
				return acc;
			}, {});

			
			for(m in newData) {


				newData[m].self = d3.sum(
					data_l.filter(d => d[meta] == m ),
					d => demo_only.StringToMins( d.total_hours)
				);



				newData[m].other = d3.sum(
					data_r.filter(d => d[meta] == m ),
					d => demo_only.StringToMins( d.total_hours)
				);


				

			}

			

			args.data = newData;

			console.warn('compare replicate crData',args.data);
			
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


		const dropdownItem = document.querySelectorAll('.list-group-item');

		dropdownItem.forEach(dI => {
			dI.addEventListener('click',DEMOToggleChart);

		})


		
	}(window.d3Compare,window));
	
	</script>