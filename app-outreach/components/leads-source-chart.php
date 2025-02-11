<!-- Step 1 - div -->
<div id="chart-container" class=""></div>



<!-- DEMO ONLY -->
<script src='https://cdn.plot.ly/plotly-3.0.0.min.js'></script>

<script>
	// DEMO ONLY
	const REPLACEWithVueRef = document.querySelector('#chart-container'); //REPLACE with vue ref

	// Step 2 - labels on y axis
		const yData = [
			'Content',
			'Email',
			'Organic',
			'Linkedin',
			'Partnerships',
			'Google',
			'Referral',
			'Facebook Ads',
			'Events',
			'Twitter',
		];

	
	
	// Step 3 - Setup Data and its args
		const data = [

			/*
			@NOTE: DATA MUST FOLLOW THIS FORMAT PER DEMO:
			https://plotly.com/javascript/bar-charts/#grouped-bar-chart

				{
				
					name: "{REPLACE WITH LEAD SOURCE TYPE}"
					x: [
						{REPLACE WITH DATA for Content},
						{REPLACE WITH DATA for Email},
						{REPLACE WITH DATA for Organic},
						{REPLACE WITH DATA for Linkedin}
						{REPLACE WITH DATA for Partnerships}
						{REPLACE WITH DATA for Google},
						{REPLACE WITH DATA for Referral},
						{REPLACE WITH DATA for Facebook Ads},
						{REPLACE WITH DATA for Events}
						{REPLACE WITH DATA for Twiter}
					],

					// these arguments will be the same throughought
						y: yData,
						type: 'bar',
						orientation: 'h'
				}
			*/


			// LEADS
				{
					name: "Leads",
					marker: { color: '#457ec1' },
					x: [26, 54, 76, 40, 82, 75, 76, 87, 65, 16], // REPLACE with actual data for y axis

					// same throughought. DO NOT CHANGE
						y: yData,
						type: 'bar',
						orientation: 'h'
				},

			// MQLS
				{
					name: "MQLs",
					marker: { color: '#32ba9b' },
					x: [33, 96, 73, 61, 88, 24, 16, 48, 13, 47], // REPLACE with actual data for y axis

					// same throughought. DO NOT CHANGE
						y: yData,
						type: 'bar',
						orientation: 'h'
				},


			// SQLS
				{
					name: "SQLs",
					marker: { color: '#fdba29' },
					x: [94, 28, 44, 89, 38, 32, 12, 83, 32, 7], // REPLACE with actual data for y axis

					// same throughought. DO NOT CHANGE
						y: yData,
						type: 'bar',
						orientation: 'h'
				},


			// New Clients
				{
					name: "New Clients",
					marker: { color: '#f57f45' },
					x: [44, 35, 47, 81, 21, 32, 68, 21, 97, 24], // REPLACE with actual data for y axis

					// same throughought. DO NOT CHANGE
						y: yData,
						type: 'bar',
						orientation: 'h'
				},


		]
		;


	// Step 4 - Initiate Graph
		Plotly.newPlot(
			REPLACEWithVueRef,
			data,

			// layout settings
				{
					barmode: 'group',
					useResizeHandler: true,
					autosize: true,
					height: 900,
					margin: {
						// autoexpand: true,
						l: 90,
						r: 0,
						t: 0,
						b: 90,
						pad: 0,
					},
					showlegend: true,
					legend: {
						orientation: 'h',
						xanchor: 'left',
						x: -.015,
						y: -.05,
						indentation: 0

					},
					xaxis: {
						ticks: 'outside',
						showgrid: true,
						zeroline: true,
						showline: true,
						zerolinewidth: 1,
						zerolinecolor: '#000000',
					},
					yaxis: {
						ticks: 'outside',
						zeroline: true,
						zerolinewidth: 1,
						zerolinecolor: '#000000',
					}
				},
				
			// config settings
				{
					responsive: true,
				}
		);
</script>