<!-- Find Chart Step No. to skip through the shiet  -->

<script>
/*

Chart Step No. 1. DATASETUP - JSON format
	Each object represents aan employee.

	`name` has to contains the name of tje team member. needed for axis labeling

	`department` is department where member belongs


	`items` are instances of data under the member

		each item will have the following properties
		
			`Task Cat Title`: sum of amount of hours spent on the task category


	If structure is not possible, let me know so I can modify the script to accept form of data structure
	*/

var placeholderData = [
	{
		"name": "Cristian R",
		"department": "developers",
		"items": [
			{
				"task_cat":"AC Task",
				"duration": 20
			},
			{
				"task_cat":"Software Development",
				"duration": 30
			},
			{
				"task_cat":"Internal Project Development",
				"duration": 35
			},
			{
				"task_cat":"Email Inbox Management",
				"duration": 15
			}
		]
	},
	{
		"name": "Sam Z",
		"department": "developers",
		"items": [
			{
				"task_cat":"AC Task",
				"duration": 40
			},
			{
				"task_cat":"Software Development",
				"duration": 20
			},
			{
				"task_cat":"Bugherds",
				"duration": 69
			},
			{
				"task_cat":"Research, Education & Training",
				"duration": 10
			}
		]
	},
	{
		"name": "Nadia R",
		"department": "developers",
		"items": [
			{
				"task_cat":"AC Task",
				"duration": 40
			},
			{
				"task_cat":"Software Development",
				"duration": 20
			},
			{
				"task_cat":"Bugherds",
				"duration": 69
			},
			{
				"task_cat":"Research, Education & Training",
				"duration": 16
			}
		]
	},
	{
		"name": "Mark S",
		"department": "developers",
		"items": [
			{
				"task_cat":"AC Task",
				"duration": 40
			},
			{
				"task_cat":"Software Development",
				"duration": 20
			},
			{
				"task_cat":"Bugherds",
				"duration": 69
			},
			{
				"task_cat":"Research, Education & Training",
				"duration": 50
			}
		]
	},


	{
		"name": "Jenna E",
		"department": "designers",
		"items": [
			{
				"task_cat":"Client Homepage Design",
				"duration": 20
			},
			{
				"task_cat":"Client Internal Page Design",
				"duration": 30
			},
			{
				"task_cat":"Meetings",
				"duration": 30
			},
			{
				"task_cat":"Research, Education & Training",
				"duration": 80
			},
			{
				"task_cat":"Bugherds",
				"duration": 1
			},
			{
				"task_cat":"Maintenance Task",
				"duration": 1
			},
			{
				"task_cat":"AC Tasks Management",
				"duration": 11
			}
		]
	},
	{
		"name": "Stacy W",
		"department": "designers",
		"items": [
			{
				"task_cat":"Client Homepage Design",
				"duration": 20
			},
			{
				"task_cat":"Client Internal Page Design",
				"duration": 10
			},
			{
				"task_cat":"Meetings",
				"duration": 40
			},
			{
				"task_cat":"Research, Education & Training",
				"duration": 80
			},
			{
				"task_cat":"Bugherds",
				"duration": 90
			},
			{
				"task_cat":"Maintenance Task",
				"duration": 1
			},
			{
				"task_cat":"AC Tasks Management",
				"duration": 1
			}
		]
	},


	{
		"name": "Alana R.",
		"department": "seo",
		"items": [
			{
				"task_cat":"Link Building",
				"duration": 90
			},
			{
				"task_cat":"On-Page SEO",
				"duration": 10
			},
			{
				"task_cat":"Research",
				"duration": 40
			},
			{
				"task_cat":"Campaign Analysis",
				"duration": 80
			},
			{
				"task_cat":"Website Content Posts",
				"duration": 90
			},
			{
				"task_cat":"Maintenance Task",
				"duration": 1
			},
			{
				"task_cat":"AC Tasks Management",
				"duration": 1
			}
		]
	},

	{
		"name": "Adam H.",
		"department": "seo",
		"items": [
			{
				"task_cat":"Link Building",
				"duration": 20
			},
			{
				"task_cat":"On-Page SEO",
				"duration": 10
			},
			{
				"task_cat":"Research",
				"duration": 22
			},
			{
				"task_cat":"Campaign Analysis",
				"duration": 80
			},
			{
				"task_cat":"Website Content Posts",
				"duration": 90
			},
			{
				"task_cat":"Maintenance Task",
				"duration": 9
			},
			{
				"task_cat":"AC Tasks Management",
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

			this.selector = selector;
			this.data = [];

			this.barHeight = 10;
			this.padding = [10,10,10,50];
			this.width = 1800;
			this.height = (()=>{
				return this.data.length 
					? (this.data.length * this.barHeight )
					: 800
			})();

			this.CanvasWidth = this.width + this.padding[1] + this.padding[3];
			this.CanvasHeight = this.height + this.padding[0] + this.padding[2];

			this.init = ()=> {

				const WBC = this;

				//select the dootdoot and set it up for the svg that will bear our bois
				this.container = d3.select(this.selector)
					.html('');

				//append svg where we render the bois
				this.svg  = this.container.append('svg')
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

				return this.update(incomingData);
			}

			this.xMin = ()=>{
				return d3.min(this.data,(dis)=>{
					return d3.min(dis.items,(dit)=>{
						return dit.duration;
					});
				});
			}

			this.xMax = ()=>{
				return d3.max(this.data,(dis)=>{
					let sum = 0;
					dis.items.forEach(dit=>{
						sum += parseFloat(dit.duration);
					});
					return sum;
				});
			}

			this.colorDomain = ()=>{
				var colDomain = [];

				this.data.forEach((member)=>{
					member.items.forEach(item=>{
						if(!colDomain.includes(item.task_cat)){
							colDomain.push(item.task_cat);
						}
					})
				});
				

				return colDomain;
			}

			this.parsedData = (data)=>{
				data = data || this.data;
				data.forEach((member,i)=>{
					const name = member.name;

					member.items.forEach((item,j)=>{
						data[i].items[j]._name = name;
					})
				})

				return data;
			}






			this.update = (newData,department) => {
				const WBC = this;

				newData  = newData || WBC.data;
				WBC.data = newData;

				department = department || false;


				WBC.x = d3.scaleLinear()
					.range([
						this.padding[3],
						this.width - this.padding[1]
					])
					.domain([
						this.xMin(),
						this.xMax()
					])
					;

				
				WBC.y = d3.scaleBand()
					.range([
						this.padding[0],
						this.height - this.padding[2]
					])
					.domain(this.data.map(d => d.name))
					.padding(.1)
					;

				WBC.color = d3.scaleOrdinal()
					.range([
						'#fec87c', '#fb1818', '#f7bc00', '#006943', '#b6e4b6', '#0480fe', '#a168d9', '#fd7f03', '#16b900', '#01c6ab', '#0037b4', '#5e01a8', '#fe85d6', '#fff200', '#d7c368', '#e18256', '#313f76', '#547b80', '#8f4139', '#ecc65f', '#d069a9', '#008eb0', '#5f6046', '#c26558', '#4db7ff', '#5a3b00', '#e1e43c', '#6154a4', '#9e005d', '#000000'
					])
					.domain(this.colorDomain)
					;
				

				WBC.container
					.style('position','relative')
					.style('padding-bottom', function(){
						return  (( (WBC.CanvasHeight) / (WBC.CanvasWidth) ) * 100) +'%'; //responsive
					});


				WBC.svg
					.attr('viewBox','0 0 ' + WBC.CanvasWidth + ' ' + WBC.CanvasHeight )
					;

				console.log(WBC.parsedData());

				WBC.member = WBC.svg.selectAll('g.chart-team-member')
					.data(
						WBC.parsedData(),
						(dat)=>{
							
							if(
								(
									department
									&& dat.department == department
								) || (
									!department
								)
							){
								return dat.name
							}
						}
					)
					;

				WBC.member_enter = WBC.member.enter()
					.append('g')
					.attr('class','chart-team-member')
					
				WBC.member.exit()
					.remove()
					;

				WBC.member_merge = WBC.member.merge(WBC.member_enter);

				WBC.member_merge
					.attr('transform',(d)=>{
						const coordY = WBC.y(d.name);

						return `translate(${WBC.padding[3]},${coordY})`;
					})

				WBC.shape = WBC.member_merge
					.selectAll('rect')
					.data((d)=>{
						var filteredItems = [];
						var instances = d.items.reduce(function(acc,dis){
							if(!acc.includes(dis.task_cat)){
								acc.push(dis.task_cat);
								filteredItems.push(dis);
							}
							
							return acc;
						},[]);
						
						console.warn(filteredItems);

						return filteredItems;
					})
					;

				WBC.shape_enter = WBC.shape.enter()
					.append('rect')

				WBC.shape_merge = WBC.shape.merge(WBC.shape_enter)
					.attr('x',(d,i)=>{
						return WBC.x(d.duration)
					})
					.attr('height',(d)=>{
						console.log(WBC.y.bandwidth());
						return WBC.y.bandwidth()
					})
					.attr('width',(d)=>{
						return WBC.x(d.duration);
					})
					.attr('fill',(d)=>{
						return WBC.color(d.task_cat)
					})
					;


				return this;

			}
			
			this.init();
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
	// 	newData
	// );
</script>