<!-- Find Bubble Step No. to skip through the shiet  -->

<script>
/*

Bubble Step No. 1. DATASETUP - JSON format
	Each object represents a client.

	`name` has to contain  the y label to use or client name in human readibilitiness eee. must be unique too

	`items` are instances of data under the client

		each item will have the following properties

		`date` - date of data, iso 6801 is recommended, but I'm 85% sure the script should be ably to format whatever date string is given. If not I can modify the script to handle this even further

		`size` - integer to be used to calculate represent the scale of the bubbles


	Doesn't matter if passed client data is one or more, the chart should be able to handle multiple instances


	If structure is not possible, let me know so I can modify the script to accept form of data structure
	*/

var placeholderData = [
   {
      "name": "Bill Black",
      "items": [
         {
            "date": "2020-01-08",
            "size": 100
         },
         {
            "date": "2020-01-13",
            "size": 100
         },
         {
            "date": "2020-01-16",
            "size": 100
         },
         {
            "date": "2020-02-03",
            "size": 100
         }
      ]
   },
   {
      "name": "Eric Ratinoff",
      "items": [
         {
            "date": "2020-01-27",
            "size": 200
         },
         {
            "date": "2020-01-28",
            "size": 200
         },
         {
            "date": "2020-01-29",
            "size": 100
         },
         {
            "date": "2020-02-03",
            "size": 100
         }
      ]
   },
   {
      "name": "Fine Law",
      "items": [
         {
            "date": "2020-01-13",
            "size": 100
         },
         {
            "date": "2020-01-16",
            "size": 300
         },
         {
            "date": "2020-01-20",
            "size": 100
         },
         {
            "date": "2020-01-21",
            "size": 200
         },
         {
            "date": "2020-02-03",
            "size": 100
         },
         {
            "date": "2020-02-04",
            "size": 100
         }
      ]
   },
   {
      "name": "Fine Law - Trucking Site",
      "items": [
         {
            "date": "2020-01-16",
            "size": 100
         }
      ]
   },
   {
      "name": "Hanson & Mouri",
      "items": [
         {
            "date": "2020-01-14",
            "size": 100
         },
         {
            "date": "2020-01-17",
            "size": 200
         },
         {
            "date": "2020-01-20",
            "size": 100
         },
         {
            "date": "2020-01-23",
            "size": 100
         },
         {
            "date": "2020-02-03",
            "size": 100
         }
      ]
   },
   {
      "name": "Harting Simkins & Ryan",
      "items": [
         {
            "date": "2020-01-08",
            "size": 200
         },
         {
            "date": "2020-01-14",
            "size": 100
         },
         {
            "date": "2020-01-16",
            "size": 300
         },
         {
            "date": "2020-01-20",
            "size": 200
         },
         {
            "date": "2020-01-23",
            "size": 100
         },
         {
            "date": "2020-01-27",
            "size": 100
         },
         {
            "date": "2020-02-03",
            "size": 100
         }
      ]
   },
   {
      "name": "Kovacich Snipes, P.C.",
      "items": [
         {
            "date": "2020-01-14",
            "size": 100
         },
         {
            "date": "2020-01-17",
            "size": 100
         },
         {
            "date": "2020-02-03",
            "size": 100
         }
      ]
   },
   {
      "name": "Mike Love & Associates, LLC",
      "items": [
         {
            "date": "2020-01-08",
            "size": 100
         },
         {
            "date": "2020-01-15",
            "size": 100
         },
         {
            "date": "2020-01-17",
            "size": 100
         },
         {
            "date": "2020-01-23",
            "size": 100
         },
         {
            "date": "2020-02-03",
            "size": 100
         }
      ]
   },
   {
      "name": "Mike Love & Associates, LLC - Clear Lake",
      "items": [
         {
            "date": "2020-01-16",
            "size": 100
         }
      ]
   },
   {
      "name": "Mike Love & Associates, LLC Nacogdoches",
      "items": [
         {
            "date": "2020-01-16",
            "size": 200
         }
      ]
   },
   {
      "name": "Zoldan Law Group",
      "items": [
         {
            "date": "2020-01-20",
            "size": 100
         },
         {
            "date": "2020-01-23",
            "size": 100
         },
         {
            "date": "2020-02-04",
            "size": 100
         },
         {
            "date": "2020-02-05",
            "size": 100
         }
      ]
   }
];
</script>


<!-- 
Bubble Step No. 2. DOM ELEMENT
an element with a unique id to render the graph to. add color and background helpers for more fancyness as desired. chart markup shouls look like this: 
 -->

<div id="chart-demo" class="background-theme color-theme"></div>
<!-- 
Bubble Step No. 3. Script that must be copy pasted
this is the hellhole. Copy everything in the following script tag and paste where needed
-->

<script src="https://d3js.org/d3.v5.min.js"></script>
<script>
//////////////////////////////START COPY HERE//////////////////////////////
	"use strict";
	(function(window){
		/*
		selector - string | selector for where to append graph
		settings - obj |arguments to pass to render our boi
		incomingData -json | settingsay of client/s and their to render 


			*/



		const D3BubbleChart = function(selector,incomingData,settings){

			if (!selector || !incomingData ){
				return false;
			}

			const _ = this;
			
				//hELP
			_.selector = selector;
			_.initData = incomingData || null;
			_.rawData = _.initData || false;
			_.data = [];
			//get bitch args
			_.setArgs = (settings)=>{

				if(settings){

					const args = {};


					var defaults = _.args || {
						dateRange: [],
						bubbleDomain: [],
						palette: [
							'#fec87c', '#fb1818', '#f7bc00', '#006943', '#b6e4b6', '#0480fe', '#a168d9', '#fd7f03', '#16b900', '#01c6ab', '#0037b4', '#5e01a8', '#fe85d6', '#fff200', '#d7c368', '#e18256', '#313f76', '#547b80', '#8f4139', '#ecc65f', '#d069a9', '#008eb0', '#5f6046', '#c26558', '#4db7ff', '#5a3b00', '#e1e43c', '#6154a4', '#9e005d', '#000000'
						],
					}

					for(var def in defaults){
						args[def] = defaults[def];
					}

					for (var prop in settings) {
						if(args.hasOwnProperty(prop) && settings[prop] !== undefined) {
							// Push each value from `obj` into `extended`
							
							// catch boolean
							if(settings[prop] == 'false' || settings[prop] == 'true') {
								settings[prop] = settings[prop] == 'true' ? true : false;
							}

							args[prop] = settings[prop];
						}
					}

					_.args = args;
				}
			};

			//parse data
			_.setData = (dat)=>{

				if(dat){
					_.rawData = dat;
					// _.data = d3.nest()
					// 	.entries(_.rawData);
					_.data = _.rawData;
					
					_.data.forEach((client)=>{
						client.items.forEach((item,i)=>{
							item.size = parseFloat(item.size);
						})
					});
				}
			}
			

			_.makeSlug = (string)=>{
				return 'bubble-'+selector.replace('#','');
			}

			//render .... things
			_.wrap = (text, width) => {
				text.each(function() {
					var text = d3.select(this),
					txtContent = (text.text().length > 42) ? text.text().substring(0, 42) + '...' : text.text(),
						words = txtContent.split(/\s+/).reverse(),
						word,
						line = [],
						lineNumber = 0,
						lineHeight = 1, // ems
						y = text.attr("y"),
						dy = parseFloat(text.attr("dy")),
						tspan = text.text(null)
							.append("tspan")
							.attr("x", width * -.125)
							.attr("y", y)
							.attr("dy", dy + "em");

					while (word = words.pop()) {
						line.push(word);
						tspan.text(line.join(" "));
					
						if (tspan.node().getComputedTextLength() > (width * .75)) {
							line.pop();
							tspan.text(line.join(" "));
							line = [word];
							tspan = text.append("tspan")
								.attr("x", width * -.125)
								.attr("y", y)
								.attr("dy", ++lineNumber * lineHeight + dy + "em")
								.text(word);
						}
					}
				});
			}

			_.initBubbles = () => {

				_.date = {
					parser : d3.timeParse("%Y-%m-%d"),
					locale : d3.timeFormatLocale({
							"decimal": ".",
							"thousands": ",",
							"grouping": [3],
							"currency": ["$", ""],
							"dateTime": "%a %b %e %X %Y",
							"date": "%m/%d/%Y",
							"time": "%H:%M:%S",
							"periods": ["AM", "PM"],
							"days": ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
							"shortDays": ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
							"months": ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
							"shortMonths": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]
						})
					};

				_.setArgs(settings);
				
				_.x = {},
							//mhmm

				_.y = {},
					//mhmm

				_.getColor = null,
					//will be set up to be able to return appropro palette

				_.getBubbleSize = null

			//do things if we have our things

				_.stripeHeight = 65;
					// height of sub graph

				_.minBubble = 7;
					//smallest booble size render

				_.maxBubble = _.stripeHeight * .625;
					//largest booble size render

				_.padding = [(_.maxBubble),(_.stripeHeight/2),(_.stripeHeight * 1.5) + (_.maxBubble),270];
					//space for axis text

				_.width = 1440;
					//size but will be setup as aspect ratio

				_.height = _.rawData.length > 3 ? _.rawData.length * _.stripeHeight : 550;
					//size but will be setup as aspect ratio

				_.canvasWidth = (_.width + _.padding[1] + _.padding[3]);
					//size including axis labels and things

				_.canvasOuterHeight = (_.height + _.padding[0] + _.padding[2]);
					//size including axis labels and things

				_.duration = 500;
					//how long animation takes
			



				//select the dootdoot and set it up for the svg that will bear our bois
				_.container = d3.select(_.selector)
					.html('')
					.style('position','relative')
					.style('padding-bottom', function(){
						return  (( _.canvasOuterHeight / _.canvasWidth ) * 100) +'%'; //responsive
					});

				//append svg where we render the bois
				_.svg  = _.container.append('svg')
						.attr('viewBox','0 0 ' + _.canvasWidth + ' ' + _.canvasOuterHeight ) 
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
				_.transition = d3.transition(_.duration);

				if(_.selector && _.rawData){

					//actual graph canvas
					_.g = _.svg.append('g')
						.attr('transform','translate('+ _.padding[3] +','+ _.padding[0] + ')')
						.attr('class','chart-canvas')
						;

					//axis scales
					_.x.scale = d3.scaleTime()
						.range([0,_.width]);
						
					_.x.axis = d3.axisBottom(_.x.scale)
						.tickFormat(_.date.locale.format('%b %d'))
						.ticks((_.args.dateRange[0].getMonth() == _.args.dateRange[1].getMonth()) ? d3.timeDay : 31)
						.tickSize(0)
						;


					//scales and range
					_.y.scale = d3.scaleBand()
						.range([0,_.height]);

					_.y.axis = d3.axisLeft(_.y.scale)
						.tickSize(0);


					

					//color scale
					_.getColor = d3.scaleOrdinal()
						.range(_.args.palette)
						.domain(_.initData.map((dis)=>{
							return dis.name; //so pallete isnt disloyal 
						}));



					// bubble area scale
					_.getBubbleSize = d3.scaleLinear()
						.range([_.minBubble,_.maxBubble]);


					
				
					// axis
					_.x.render = _.g.append('g')
						.attr('class','x-axis-render')
						.attr('transform','translate(0,'+(_.height + _.padding[2] * .33) +')')
						;
					_.y.render = _.g.append('g')
						.attr('class','y-axis-render')
						;

					//here we gooo
					_.chart = _.g.append('g')
						.attr('class','chart-area')

					_.updateBubbles(_.rawData,_.args);

					
				}else{
					//nothing's here, give user the feedback that nothings here
					_.svg.append('text')
						.text('No data available')
						.style('text-align','center')
						.attr('dominant-baseline','middle')
						.attr('text-anchor','middle')
						.attr('font-size','2em')
						.attr('x',_.canvasWidth /2)
						.attr('y',_.canvasOuterHeight /2)
						;
				
				return _;
						
				}
			}


			_.updateBubbles = (dat,settings)=>{
				
				_.setArgs(settings);
				_.setData(dat);


				// console.log('UPDOOTDOOT',_.data)
				//update domains and shit
					_.x.scale
						.domain((function(){
								let toReturn = _.args.dateRange;

								if(!_.args.dateRange.length){
									var min = d3.min(_.data.map(
											(client)=>{
												return d3.min(client.items.map(
													(item)=>{
														return item.date;
													}
												));
											}
										));

									var max = d3.max(_.data.map(
										(client)=>{
											return d3.max(client.items.map(
												(item)=>{
													return item.date;
												}
											));
										}
									));
									toReturn = [min,max];
								}
								return toReturn;
							}()));

					_.y.scale
						.domain(_.data.map((dis)=>{
							return dis.name;
						}));

					// bubble area scale
					_.getBubbleSize
						.domain((function(){
							let toReturn = _.args.bubbleDomain;
							if(!_.args.bubbleDomain.length){
								var min = d3.min(_.data.map(
									(client)=>{
										return d3.min(client.items.map(
											(item)=>{
												return item.size;
											}
										));
									}
								));

								var max = d3.max(_.data.map(
									(client)=>{
										return d3.max(client.items.map(
											(item)=>{
												return item.size;
											}
										));
									}
								));
								return [min,max];
							}

							return toReturn;
							
						}()));


				_.x.render.transition(1000).call(_.x.axis)
					.attr('font-family',null)
					.attr('font-size',null)
						.selectAll('.tick text')
							.attr('text-anchor','end')
							.style('transform','rotate(-45deg) translate(-.5em,-.5em)')
					;

				_.x.render.selectAll('path')
					.attr('stroke','none')

				_.y.render.call(_.y.axis)
					.attr('font-family',null)
					.attr('font-size',null)
					.attr('font-weight','700')
					;

				_.y.render.selectAll('path')
					.attr('stroke','none')

					_.y.render.selectAll('.tick text')
						.call(_.wrap, _.padding[3]);
					
				

				_.stripe = _.chart.selectAll('g.stripe')
					.data(_.data,dis=>{
						return dis.name
					})
					;

					_.stripe.exit()
						.selectAll('circle')
						.transition(_.transition)
							.attr('r',0)
							.remove();
					_.stripe.exit()
						.select('line')
						.transition(_.transition)
							.remove();
				
					_.stripe.exit()
						.style('opacity','1')
						.transition(_.transition)
							.style('opacity','0')
							.remove()


					let stripe_enter = _.stripe
						.enter()
						.append('g')
						.style('opacity',0)
						.attr('transform',(dis)=>{
							return 'translate(0,'+( _.y.scale(dis.name) +(_.y.scale.bandwidth() / 2) )+')';
						})
						
						stripe_enter.append('line')
							.attr('stroke','currentColor')
							.attr('stroke-opacity',.2)
							.attr('x1',0)
							.attr('y1',0)

							.attr('x2',_.width)
							.attr('y2',0)
							;


					let stripe_merge = _.stripe.merge(stripe_enter);

						stripe_merge
							.attr('class',(dis,i)=>{
								return 'stripe stripe-'+dis.name.toLowerCase().split(' ')[0]
							})
							.transition(_.transition)
								.style('opacity',1)
								.attr('transform',(dis)=>{
									return 'translate(0,'+( _.y.scale(dis.name) +(_.y.scale.bandwidth() / 2) )+')';
								})
								.attr('fill',(dis,i)=>{
									return _.getColor(dis.name);
								})
							

						
						
				_.bubble = stripe_merge.selectAll('circle')
					.data((dis)=>{
							var toReturn = dis.items.filter((item)=>{
								var filter = (_.date.parser(item.date) >= _.x.scale.domain()[0] && _.date.parser(item.date) <= _.x.scale.domain()[1]);
								return filter;
							})
							
							return toReturn;
						}
					);

					_.bubble.exit()
						.transition(_.transition)
						.attr('r',0)
						.remove()
						;
				let bubble_enter = _.bubble
					.enter()
					.append('circle')

					//updated bois
					.attr('r',0)
					.attr('cx',(dis)=>{
						return _.x.scale(_.date.parser(dis.date))
					})
					.attr('cy',(dis)=>{
						return _.y.scale(_.date.parser(dis.date))
					})


				let bubble_merge = _.bubble.merge(bubble_enter)
				//fw integration
					.attr('data-toggle','tooltip-hover')
					.attr('data-tooltip-placement','right')
					.attr('data-tooltip-content',(dis)=>{
						const percentage = (dis.size/ _.getBubbleSize.domain()[1]).toFixed(1);
						return `<b> ${ _.date.locale.format('%B %e')(_.date.parser(dis.date)) }</b><br>${dis.size} (${percentage}%)`
					})
					
					.on('mousemove',function(){
						frameWork.positionToolTip(d3.event.pageX,d3.event.pageY);
					})
					.on('mouseenter',function(){
						frameWork.positionToolTip(d3.event.pageX,d3.event.pageY);
					})
					.attr('class',(dis)=>{
						return `date-${dis.date} size-${dis.size} bubble stroke-theme-polar`
					})
					.attr('stroke-width',1)
					.transition(_.transition)

					.attr('cx',(dis)=>{
						return _.x.scale(_.date.parser(dis.date))
					})
					.attr('cy',(dis)=>{
						return _.y.scale(_.date.parser(dis.date))
					})
					.attr('r',(dis)=>{
						
						// return _.getBubbleSize(dis.size) < _.stripeHeight ? _.getBubbleSize(dis.size) : _.stripeHeight;

						return _.getBubbleSize(dis.size)
					})
					;

				return _;


			}




			
			_.initBubbles()
			
		}

		window.D3BubbleChart = D3BubbleChart;
	}(window));

//////////////////////////////END COPY HERE//////////////////////////////
</script>










<script>
(function(){
	var max =600;
	var month = 0;

/*
Bubble Step No. 4. Initiating
this Version loads d3 as well instead of manually embedding script. may cause the graph to fail if d3.js.org is randomly down
*/
	//store graph in a variable to allow updates
	var graph = new D3BubbleChart(
		'#chart-demo',
		placeholderData,
		{
			dateRange: [
				new Date(2020,month,1),
				new Date(2020,month+1,1)
			],
			bubbleDomain:[0,max],
			// palette: ['#e18256', '#313f76', '#547b80', '#8f4139']
		},
	);

	var usePlaceholder = true;
	var sideChickData = [{
      "name": "Fine Law",
      "items": [
         {
            "date": "2020-01-13",
            "size": 100
         },
         {
            "date": "2020-01-16",
            "size": 300
         },
         {
            "date": "2020-01-20",
            "size": 100
         },
         {
            "date": "2020-01-21",
            "size": 200
         },
         {
            "date": "2020-02-03",
            "size": 100
         },
         {
            "date": "2020-02-04",
            "size": 100
         }
      ]
   }];

// // // //debug dont use this
setTimeout(function(){
	
var intervalId = setInterval(function(){
	max -= 100;
	month = (month == 1) ? 0 : 1;
	usePlaceholder = !usePlaceholder;


	if(max === 100){
      clearInterval(intervalId);
	}

	var newData = (!usePlaceholder ? sideChickData : placeholderData);

/*
Bubble Step No. 5 - Updating
updateBubbles allows you to modify arguments and render a different variation of the data
*/

	graph.updateBubbles(
		// newData,
		null,
		{
			bubbleDomain:[0,max],
			dateRange: [
				new Date(2020,month,1),
				new Date(2020,month+2,1)
			]
			// palette:['#fff200', '#d7c368', '#e18256', '#313f76', '#547b80', '#8f4139', '#ecc65f', '#d069a9', '#008eb0', '#5f6046', '#c26558', '#4db7ff', '#5a3b00', '#e1e43c', '#6154a4', '#9e005d', '#000000']
		}
	)
	;


	}, 2000);
},2000);

}())


</script>


