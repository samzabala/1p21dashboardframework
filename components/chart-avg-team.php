<!-- Find Chart Step No. to skip through the shiet  -->

<script>
/*

Chart Step No. 1. DATASETUP - JSON format
	Each object represents aan employee.

	`name` has to contains the name of tje team member. needed for axis labeling

	`department` is department where member belongs

	`items` are instances of data under the member

		each item will have the following properties

		`task_cat` - type of task

		`date` - date of duration

		`duration` - integer to be used to calculate represent the width of bars


	If structure is not possible, let me know so I can modify the script to accept form of data structure
	*/

var placeholderData = [
	{
		"name": "Cristian R",
		"department": "developers",
		"items": [
			{
				"task_cat": "AC Task",
				"date": "2069-04-20",
				"duration": 20
			},
			{
				"task_cat": "Software Development",
				"date": "2069-04-20",
				"duration": 30
			},
			{
				"task_cat": "Internal Project Development",
				"date": "2069-04-20",
				"duration": 1
			},
			{
				"task_cat": "Email Innbox Management",
				"date": "2069-04-20",
				"duration": 1
			}
		]
	},
	{
		"name": "Sam Z",
		"department": "developers",
		"items": [
			{
				"task_cat": "AC Task",
				"date": "2069-04-20",
				"duration": 40
			},
			{
				"task_cat": "Software Development",
				"date": "2069-04-20",
				"duration": 20
			},
			{
				"task_cat": "Bugherds",
				"date": "2069-04-20",
				"duration": 69
			},
			{
				"task_cat": "Research, Education & Training",
				"date": "2069-04-20",
				"duration": 10
			}
		]
	},
	{
		"name": "Nadia R",
		"department": "developers",
		"items": [
			{
				"task_cat": "AC Task",
				"date": "2069-04-20",
				"duration": 40
			},
			{
				"task_cat": "Software Development",
				"date": "2069-04-20",
				"duration": 20
			},
			{
				"task_cat": "Bugherds",
				"date": "2069-04-20",
				"duration": 69
			},
			{
				"task_cat": "Research, Education & Training",
				"date": "2069-04-20",
				"duration": 1
			}
		]
	},
	{
		"name": "Mark S",
		"department": "developers",
		"items": [
			{
				"task_cat": "AC Task",
				"date": "2069-04-20",
				"duration": 40
			},
			{
				"task_cat": "Software Development",
				"date": "2069-04-20",
				"duration": 20
			},
			{
				"task_cat": "Bugherds",
				"date": "2069-04-20",
				"duration": 69
			},
			{
				"task_cat": "Research, Education & Training",
				"date": "2069-04-20",
				"duration": 50
			}
		]
	},


	{
		"name": "Jenna E",
		"department": "designers",
		"items": [
			{
				"task_cat": "Client Homepage Design",
				"date": "2069-04-20",
				"duration": 20
			},
			{
				"task_cat": "Client Internal Page Design",
				"date": "2069-04-20",
				"duration": 30
			},
			{
				"task_cat": "Meetings",
				"date": "2069-04-20",
				"duration": 30
			},
			{
				"task_cat": "Research, Education & Training",
				"date": "2069-04-20",
				"duration": 80
			},
			{
				"task_cat": "Bugherds",
				"date": "2069-04-20",
				"duration": 1
			},
			{
				"task_cat": "Maintenance Task",
				"date": "2069-04-20",
				"duration": 1
			},
			{
				"task_cat": "AC Tasks Management",
				"date": "2069-04-20",
				"duration": 1
			}
		]
	},
	{
		"name": "Stacy W",
		"department": "designers",
		"items": [
			{
				"task_cat": "Client Homepage Design",
				"date": "2069-04-20",
				"duration": 20
			},
			{
				"task_cat": "Client Internal Page Design",
				"date": "2069-04-20",
				"duration": 10
			},
			{
				"task_cat": "Meetings",
				"date": "2069-04-20",
				"duration": 40
			},
			{
				"task_cat": "Research, Education & Training",
				"date": "2069-04-20",
				"duration": 80
			},
			{
				"task_cat": "Bugherds",
				"date": "2069-04-20",
				"duration": 90
			},
			{
				"task_cat": "Maintenance Task",
				"date": "2069-04-20",
				"duration": 1
			},
			{
				"task_cat": "AC Tasks Management",
				"date": "2069-04-20",
				"duration": 1
			}
		]
	},


	{
		"name": "Alana R.",
		"department": "seo",
		"items": [
			{
				"task_cat": "Link Building",
				"date": "2069-04-20",
				"duration": 90
			},
			{
				"task_cat": "On-Page SEO",
				"date": "2069-04-20",
				"duration": 10
			},
			{
				"task_cat": "Research",
				"date": "2069-04-20",
				"duration": 40
			},
			{
				"task_cat": "Campaign Analysis",
				"date": "2069-04-20",
				"duration": 80
			},
			{
				"task_cat": "Website Content Posts",
				"date": "2069-04-20",
				"duration": 90
			},
			{
				"task_cat": "Maintenance Task",
				"date": "2069-04-20",
				"duration": 1
			},
			{
				"task_cat": "AC Tasks Management",
				"date": "2069-04-20",
				"duration": 1
			}
		]
	},

	{
		"name": "Adam H.",
		"department": "seo",
		"items": [
			{
				"task_cat": "Link Building",
				"date": "2069-04-20",
				"duration": 20
			},
			{
				"task_cat": "On-Page SEO",
				"date": "2069-04-20",
				"duration": 10
			},
			{
				"task_cat": "Research",
				"date": "2069-04-20",
				"duration": 22
			},
			{
				"task_cat": "Campaign Analysis",
				"date": "2069-04-20",
				"duration": 80
			},
			{
				"task_cat": "Website Content Posts",
				"date": "2069-04-20",
				"duration": 90
			},
			{
				"task_cat": "Maintenance Task",
				"date": "2069-04-20",
				"duration": 9
			},
			{
				"task_cat": "AC Tasks Management",
				"date": "2069-04-20",
				"duration": 1
			}
		]
	},



];
</script>

<!-- 
Chart Step No. 2. + D3 Library + DOM ELEMENT
an element with a unique id to render the graph to. add color and background helpers for more fancyness as desired. chart markup shouls look like this: 
 -->
<script src="https://d3js.org/d3.v5.min.js"></script>
<div id="avg-all-chart" class="background-theme color-theme"></div>
<!-- 
Chart Step No 3. Script that must be copy pasted
this is the hellhole. Copy everything in the following script tag and paste where needed
-->
<script>

// Chart Step No. 3. SCRIPT MINI LIBRARY
//////////////////////////////START COPY HERE//////////////////////////////
"use strict";
	(function(window){
		const WorkflowBarChart = function(selector,incomingData,settings){


			if (!selector || !incomingData ){
				return false;
			}
			const WBC = this;//hELP
			WBC.selector = selector;
			WBC.initData = incomingData;
			WBC.data = [];

			WBC.barHeight = 64;

			WBC.padding = [10,10,10,50];

			WBC.width = 1500;

			WBC.height = (()=>{
				return this.data.length 
					? (this.data.length * this.barHeight )
					: (this.initData.length  * this.barHeight)
			})();

			WBC.CanvasWidth = WBC.width + WBC.padding[0] + WBC.padding[2];
			WBC.CanvasHeight = WBC.height + WBC.padding[1] + WBC.padding[3];
			

			WBC.init = ()=> {



				//select the dootdoot and set it up for the svg that will bear our bois
				WBC.container = d3.select(WBC.selector)
					.html('')
					.style('position','relative')
					.style('padding-bottom', function(){
						return  (( (WBC.CanvasHeight) / (WBC.CanvasWidth) ) * 100) +'%'; //responsive
					});


				

				//append svg where we render the bois
				WBC.svg  = WBC.container.append('svg')
						.attr('viewBox','0 0 ' + WBC.CanvasWidth + ' ' + WBC.CanvasHeight ) 
						.style('position','absolute')
						.style('top','0')
						.style('left','0')
						.style('bottom','0')
						.style('right','0')
						.attr('font-size','1em')
						.attr('font-family','inherit')
						.style('text-transform','uppercase')
						.attr('color','inherit')
						.style('line-height',1)
						.style('margin','auto')
						.attr('version','1.1')
						.attr('x','0px')
						.attr('y','0px')
						.attr("preserveAspectRatio", "xMidYMid meet") //responsive
						.attr('xml:space','preserve')
						// .attr('width',_.canvasWidth) //so svg has a reference of "actual size" or responsive common sense
						// .attr('height',_.canvasOuterHeight) //so svg has a reference of "actual size" or responsive common sense
						;
			}

			WBC.update = (department,dateRange) => {

			}
			
			WBC.init();

			return WBC;
		}

	window.WorkflowBarChart = WorkflowBarChart;
	}(window));
</script>


<script>
	/*
// Chart Step No. 4. Initiating
this Version loads d3 as well instead of manually embedding script. may cause the graph to fail if d3.js.org is randomly down
*/

	//store graph in a variable to allow updates
	var graph = new WorkflowBarChart(
		'#avg-all-chart',
		placeholderData
	);
	
	// graph.updateBubbles(
	// 	// newData,
	// 	null,
	// 	{
	// 		bubbleDomain:[0,max],
	// 		dateRange: [
	// 			new Date(2020,month,1),
	// 			new Date(2020,month+2,1)
	// 		]
	// 		// palette:['#fff200', '#d7c368', '#e18256', '#313f76', '#547b80', '#8f4139', '#ecc65f', '#d069a9', '#008eb0', '#5f6046', '#c26558', '#4db7ff', '#5a3b00', '#e1e43c', '#6154a4', '#9e005d', '#000000']
	// 	}
	// );
</script>