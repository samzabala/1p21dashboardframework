<?php
//args/props. feel free to modify as needed
$defs = array(
	//@param id - string - unique identifier for element. not needed. for placeholder demo only
		'id' => 'REPLACEID',
	//@param id - string - unique identifier for element. not needed. for placeholder demo only
		'has_decreased' => true,
);

$args = app_parse_args($data,$defs);
?>

<div id="<?= $args['id'] ?>"></div>

		<!-- @NOTE: will reuse highcharts since it's already built in -->
		<!-- 1) Import highcharts -->
		<script src="https://code.highcharts.com/highcharts.js"></script>
		<script>
			((Highcharts) => {

				// 2) Setup `hasDecreased` const as a condition variable for when the chart has decreased or not to set color of line;
					const hasDecreased = <?= $args['has_decreased'] ? 'true' : 'false' ?>; 

				// 3) Copy the parameters below and replace the @REPLACE commented parameters
					const settings = {
						chart: {
							type: 'line',
							width: 160,
							height: 80,
						},
						title: false,
						legend:{ enabled:false },
						credits: {
							enabled: false
						},
						// tooltip: {
						// 	enabled: false,
						// },
						plotOptions: {
							series: {
								label: {
									connectorAllowed: false
								},
								marker: {
									enabled: false
								}
							}
						},
						yAxis: {
							visible: false,
						},
						xAxis: {
							visible: false,
							categories:
								[
									'6 days ago',
									'5 days ago',
									'4 days ago',
									'3 days ago',
									'2 days ago',
									'1 day ago',
									'Today',
								],
						},

						// settings to modify to app
							colors: [ hasDecreased ? '#c00' : '#0c0' ],
							series: [{
								name: 'Rank',
								data:
									// @REPLACE with dynamic coordinates
										(
											hasDecreased 
											? [69.1,-69.1,99,56,-47,23,18]
											: [29.1,-89.1,-19,56,-20,70,90]
										)
							}]
					};


				// 3)  Setup settings to callback. @NOTE: Will need to manipulate the passed id

				Highcharts.chart('<?= $args['id'] ?>',settings);



			})(window.Highcharts)
		</script>