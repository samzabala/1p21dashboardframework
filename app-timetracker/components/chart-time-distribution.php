<?php
//args/props. feel free to modify as needed
$defs = array(
	//@param id - string - unique identifier for element. not needed. for placeholder demo only
		'id' => 'REPLACEID',


	//@param totalMin - number - the minimum range of the chart
		'totalMin' => 0,
	//@param totalMax - number - the maximum range of the chart
		'totalMax' => 40,
	//@param min - number - minimum hours from data row
		'min' => 9,
	//@param max - number - maximum hours from data row
		'max' => 32,
	
);

$args = app_parse_args($data,$defs);
?>
	<!-- Step 1: html -->
	<!-- 
	vue component attributes will look like this
		:data-td-min="min"
		:data-td-max="max"
		:data-td-totalMin="totalMin"
		:data-td-totalMax="totalMax"
	 -->
<span ref="chartContainer" id="time-distribution-<?=$args['id'] ?>"
	data-td-min="<?=$args['min'] ?>"
	data-td-max="<?=$args['max'] ?>"
	data-td-totalMin="<?=$args['totalMin'] ?>"
	data-td-totalMax="<?=$args['totalMax'] ?>"
>
	<span>
		min:
		<span class="REPLACE">0</span>
	</span>
	&ndash;

	<span>
		max:
		<span class="REPLACE">0</span>
	</span>
</span>


<!-- FOR DEMO ONLY. DO NOT COPY -->
	<script src="https://d3js.org/d3.v7.min.js"></script>
	<script src="<?=FWAPPS_ROOT_URL.'/app-'.FWAPPS_APP; ?>/assets/scripts/d3insightChart.mine.js"></script>
	
<script>

///////////////////// STEP 1 -  Imports
/* @NOTE
	- Requires d3:
		1) terminal:
			`npm install d3`
		2) on component:
			`import d3insightChart from './assets/scripts/d3insightChart.js'`;
	- Requires framework tooltip for hover tooltips to render
			`import Tooltip from '../imports/tooltip'`;
*/

// IIFE
(function(d3insightChart,window){


///////////////////// STEP 2 -  Setup


	//@REPLACE `document.getElementById('#time-distribution-<?=$args['id'] ?>')` to match this.$refs.chartContainer
	const chartContainer = document.getElementById('time-distribution-<?=$args['id'] ?>'); 

	//setup the chart in a variable like so
	const chart = new d3insightChart(chartContainer);

	//ready the chart: can be called on mounted()
	chart.render();

}(window.d3insightChart,window));

</script>