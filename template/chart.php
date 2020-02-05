<script>
/*

Step 1. DATASETUP - JSON format
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

	// data template
		{
			"name":"Flanagan Law Firm",
			"items" : [
				{ "date": "2020-01-01", "size": "100" },
				{ "date": "2020-01-08", "size": "400" },
				{ "date": "2020-01-09", "size": "100" },
				{ "date": "2020-01-10", "size": "100" },
				{ "date": "2020-01-11", "size": "400" },
				{ "date": "2020-01-13", "size": "600" },
				{ "date": "2020-01-16", "size": "400" },
				{ "date": "2020-01-21", "size": "600" },
				{ "date": "2020-01-24", "size": "400" }
			]
		}, 



// this is now placeholders
		{
			"name":"Butler Wooten & Peak LLP",
			"items" : [
				{ "date": "2020-01-03", "size": "400" },
				{ "date": "2020-01-05", "size": "100" },
				{ "date": "2020-01-06", "size": "400" },
				{ "date": "2020-01-10", "size": "100" },
				{ "date": "2020-01-11", "size": "400" },
				{ "date": "2020-01-13", "size": "600" },
				{ "date": "2020-01-15", "size": "100" },
				{ "date": "2020-01-17", "size": "400" },
				{ "date": "2020-01-18", "size": "100" },
				{ "date": "2020-01-20", "size": "400" },
				{ "date": "2020-01-22", "size": "100" },
				{ "date": "2020-01-24", "size": "100" },
				{ "date": "2020-01-26", "size": "600" },
				{ "date": "2020-01-29", "size": "100" }
			]
		}, {
			"name":"Sullivan Papain Block McGrath & Cannovo PC",
			"items" : [
				{ "date": "2020-01-02", "size": "400" },
				{ "date": "2020-01-03", "size": "100" },
				{ "date": "2020-01-05", "size": "400" },
				{ "date": "2020-01-09", "size": "200" },
				{ "date": "2020-01-10", "size": "400" },
				{ "date": "2020-01-15", "size": "400" },
				{ "date": "2020-01-16", "size": "100" },
				{ "date": "2020-01-17", "size": "100" },
				{ "date": "2020-01-20", "size": "600" },
				{ "date": "2020-01-21", "size": "100" }
			]
		}, {
			"name":"Drake Law Firm",
			"items" : [
				{ "date": "2020-01-03", "size": "400" },
				{ "date": "2020-01-05", "size": "100" },
				{ "date": "2020-01-06", "size": "400" },
				{ "date": "2020-01-10", "size": "100" },
				{ "date": "2020-01-14", "size": "600" },
				{ "date": "2020-01-16", "size": "100" },
				{ "date": "2020-01-18", "size": "100" },
				{ "date": "2020-01-20", "size": "400" },
				{ "date": "2020-01-24", "size": "100" },
				{ "date": "2020-01-26", "size": "400" },
				{ "date": "2020-01-29", "size": "100" }
			]
		}, {
			"name":"Jay Knipsel",
			"items" : [
				{ "date": "2020-01-03", "size": "100" },
				{ "date": "2020-01-04", "size": "100" },
				{ "date": "2020-01-10", "size": "100" },
				{ "date": "2020-01-11", "size": "400" },
				{ "date": "2020-01-14", "size": "100" },
				{ "date": "2020-01-15", "size": "100" },
				{ "date": "2020-01-16", "size": "100" },
				{ "date": "2020-01-17", "size": "400" },
				{ "date": "2020-01-18", "size": "100" },
				{ "date": "2020-01-19", "size": "100" },
				{ "date": "2020-01-20", "size": "400" },
				{ "date": "2020-01-22", "size": "600" },
				{ "date": "2020-01-23", "size": "500" }
			]
		}, {
			"name":"Another Client",
			"items" : [
				{ "date": "2020-01-03", "size": "400" },
				{ "date": "2020-01-05", "size": "100" },
				{ "date": "2020-01-06", "size": "400" },
				{ "date": "2020-01-10", "size": "100" },
				{ "date": "2020-01-12", "size": "600" },
				{ "date": "2020-01-14", "size": "400" },
				{ "date": "2020-01-15", "size": "100" },
				{ "date": "2020-01-16", "size": "100" },
				{ "date": "2020-01-18", "size": "100" },
				{ "date": "2020-01-20", "size": "400" },
				{ "date": "2020-01-22", "size": "100" },
				{ "date": "2020-01-24", "size": "100" },
				{ "date": "2020-01-26", "size": "100" }
			]
		}, {
			"name":"Tiano O'Dell",
			"items" : [
				{ "date": "2020-01-05", "size": "100" },
				{ "date": "2020-01-06", "size": "400" },
				{ "date": "2020-01-10", "size": "100" },
				{ "date": "2020-01-13", "size": "600" },
				{ "date": "2020-01-16", "size": "100" },
				{ "date": "2020-01-17", "size": "100" },
				{ "date": "2020-01-20", "size": "400" },
				{ "date": "2020-01-23", "size": "100" },
				{ "date": "2020-01-25", "size": "400" }
			]
		}, {
			"name":"Boyd Law",
			"items" : [
				{ "date": "2020-01-02", "size": "100" },
				{ "date": "2020-01-04", "size": "100" },
				{ "date": "2020-01-05", "size": "100" },
				{ "date": "2020-01-08", "size": "200" },
				{ "date": "2020-01-16", "size": "100" },
				{ "date": "2020-01-18", "size": "100" },
				{ "date": "2020-01-19", "size": "300" },
				{ "date": "2020-01-20", "size": "600" },
				{ "date": "2020-01-23", "size": "500" },
				{ "date": "2020-01-28", "size": "400" }
			]
		}
];
</script>


<!-- 
Step 2. DOM ELEMENT
an element with a unique id to render the graph too. add color and background helpers for more fancyness as desired
 -->
<div id="chart-demo" class="background-theme color-theme"></div>


<script>
// Step 3. Script that must be copy pasted
// this is the hellhole.

(function(){
	/*
	selector - string | selector for where to append graph
	arr - obj |arguments to pass to render our boi
	incomingJSON -json | array of client/s and their to render 


		*/
	window.d3WasLoadedForBubbles = 0;


	const renderD3Bubbles = function(selector,arr,incomingJSON){

		const initBubbles = function(selector,arr,incomingJSON){

			const defaults = {
				dateRange: [],
				bubbleDomain: [],
				palette: [
					'#fec87c', '#fb1818', '#f7bc00', '#006943', '#b6e4b6', '#0480fe', '#a168d9', '#fd7f03', '#16b900', '#01c6ab', '#0037b4', '#5e01a8', '#fe85d6', '#fff200', '#d7c368', '#e18256', '#313f76', '#547b80', '#8f4139', '#ecc65f', '#d069a9', '#008eb0', '#5f6046', '#c26558', '#4db7ff', '#5a3b00', '#e1e43c', '#6154a4', '#9e005d', '#000000'
				],
			}

			const args = {};

			for(var def in defaults){
				args[def] = defaults[def];
			}


			for (var prop in arr) {
				if(arr.hasOwnProperty(prop) && arr[prop] !== undefined) {
					// Push each value from `obj` into `extended`
					
					// catch boolean
					if(arr[prop] == 'false' || arr[prop] == 'true') {
						arr[prop] = arr[prop] == 'true' ? true : false;
					}

					args[prop] = arr[prop];
				}
			}

			var data = false;
			var date = {
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

			//filter/validate data
			if(incomingJSON){
				data = d3.nest().entries(incomingJSON);
				data.forEach(function(dis,client){
					data[client].items.forEach(function(item,i){
						item.size = +item.size;
						item.date = date.parser(item.date);

						if( item.date < args.dateRange[0] || item.date > args.dateRange[1]){
							data[client].items.splice(i);
						}
					})
				});
			}


			//do things if we have our things
			if(selector && data){

				//settings
				const

					stripeHeight = 65,
						// height of sub graph

					minBubble = 7,
						//smallest booble size render

					maxBubble = stripeHeight * .3,
						//largest booble size render

					padding = [(stripeHeight/2),(stripeHeight/2),(stripeHeight * 1.5),270],
						//space for axis text

					width = args.dateRange[1] ? (stripeHeight * args.dateRange[1].getDate() * .65) : 31,
						//size but will be setup as aspect ratio

					height = incomingJSON.length ? incomingJSON.length * stripeHeight : 550,
						//size but will be setup as aspect ratio

					outerWidth = (width + padding[1] + padding[3]),
						//size including axis labels and things

					outerHeight = (height + padding[0] + padding[2]),
						//size including axis labels and things

					duration = 500
						//how long animation takes
				;


				let

					x = {},
						//mhmm

					y = {},
						//mhmm

					getColor,
						//will be set up to be able to return appropro palette

					getBubbleSize
						//will be set up to be able to return appropro size
	
				;



				//select the dootdoot and set it up for the svg that will bear our bois
				var container = d3.select(selector);
				container
					.html('')
					.style('position','relative')
					.style('padding-bottom', function(){
						return  (( outerHeight / outerWidth ) * 100) +'%'; //responsive
					});

				//append svg where we render the bois
				var svg  = container.append('svg')
					.attr('viewBox','0 0 ' + outerWidth + ' ' + outerHeight ) 
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
					.attr('width',outerWidth) //so svg has a reference of "actual size" or responsive common sense
					.attr('height',outerHeight) //so svg has a reference of "actual size" or responsive common sense
					;


				var transition = d3.transition(duration);
				//actual graph canvas
				var g = svg.append('g')
					.attr('transform','translate('+ padding[3] +','+ padding[0] + ')')
					.attr('class','chart-canvas')
					;

				//axis scales
				x.scale = d3.scaleTime()
					.domain((function(){
							let toReturn = args.dateRange;

							if(args.dateRange == null){
								var min = d3.min(data.map(
										function(client){
											return d3.min(client.items.map(
												function(item){
													return item.date;
												}
											));
										}
									));

								var max = d3.max(data.map(
									function(client){
										return d3.max(client.items.map(
											function(item){
												return item.date;
											}
										));
									}
								));;

								toReturn = [min,max];

							}

							console.log(args.dateRange)


							return toReturn;
						}()))
					.range([0,width])
					;
					
				x.axis = d3.axisBottom(x.scale)
					.tickFormat(date.locale.format('%b %d'))
					.ticks(d3.timeDay)
					.tickSize(0)
					;

				y.scale = d3.scaleBand()
					.domain(data.map(function(dis){
						return dis.name;
					}))
					.range([0,height])
					;

				y.axis = d3.axisLeft(y.scale)
					.tickSize(0)
					;


				

				//color scale
				getColor = d3.scaleOrdinal()
						.domain(data.map(function(dis){
							return dis.name;
						}))
						.range(args.palette)



				// bubble area scale
				getBubbleSize = d3.scaleLinear()
							.domain((function(){
								var min = d3.min(data.map(
										function(client){
											return d3.min(client.items.map(
												function(item){
													return item.size;
												}
											));
										}
									));

								var max = d3.max(data.map(
									function(client){
										return d3.max(client.items.map(
											function(item){
												return item.size;
											}
										));
									}
								));


								return [min,max];
							}()))
							.range([minBubble,maxBubble])
							;


				//render .... things
				function wrap(text, width) {
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
					
					// axis
					x.render = g.append('g')
						.attr('class','x-axis-render')
						.attr('transform','translate(0,'+(height + padding[2] * .33) +')')
						;
					y.render = g.append('g')
						.attr('class','y-axis-render')
						;

					x.render.call(x.axis)
						.attr('font-family',null)
						.attr('font-size',null)
							.selectAll('.tick text')
								.attr('text-anchor','end')
								.style('transform','rotate(-45deg) translate(-.5em,-.5em)')
						;

					x.render.selectAll('path')
						.attr('stroke','none')

					y.render.call(y.axis)
						.attr('font-family',null)
						.attr('font-size',null)
						.attr('font-weight','700')
						;

					y.render.selectAll('path')
						.attr('stroke','none')

						y.render.selectAll('.tick text')
							.call(wrap, padding[3]);
						
					

					//here we gooo
					var chart = g.append('g')
						.attr('class','chart-canvas')

					var stripe = chart.selectAll('g')
						.data(data)
						.enter()
						.append('g')
						.attr('transform',function(dis){
							return 'translate(0,'+( y.scale(dis.name) +(y.scale.bandwidth() / 2) )+')';
						})
						.attr('class',function(dis,i){
							return 'stripe-'+dis.name.toLowerCase().split(' ')[0]
						})
						.attr('fill',function(dis,i){
							return getColor(i);
						})
						;
					var line = stripe.append('line')
						.attr('stroke','currentColor')
						.attr('stroke-opacity',.2)
						.attr('x1',0)
						.attr('y1',0)

						.attr('x2',width)
						.attr('y2',0)
						;


					var bubble = stripe.selectAll('circle')
						.data(function(dis){
							return dis.items
						})
						;
					bubble.enter()
						.append('circle')

						//fw integration
						.attr('data-toggle','tooltip-hover')
						.attr('data-tooltip-placement','right')
						.attr('data-tooltip-content',function(dis){
							return '<b>' + date.locale.format('%B %e')(dis.date) + '</b>'
							+ '<br>'
							+ d3.format(",.1%")(dis.size)
						})
						
						.on('mousemove',function(){
							frameWork.positionToolTip(d3.event.pageX,d3.event.pageY);
						})
						.on('mouseenter',function(){
							frameWork.positionToolTip(d3.event.pageX,d3.event.pageY);
						})
						.attr('class','chart-item stroke-theme-polar')
						.attr('cx',function(dis){
							return x.scale(dis.date)
						})
						.attr('cy',function(dis){
							return y.scale(dis.date)
						})
						.attr('stroke-width',1)
						.attr('r',0)
						.transition(transition)
						.attr('r',function(dis){
							return getBubbleSize(dis.size)
						})
						;
			}else{
				//nothing's here, give user the feedback that nothings here
				var notFound = svg.append('text')
					.text('No data available')
					.style('text-align','center')
					.attr('dominant-baseline','middle')
					.attr('text-anchor','middle')
					.attr('font-size','2em')
					.attr('x',outerWidth /2)
					.attr('y',outerHeight /2)
					;
					
			}
		}




		document.addEventListener("DOMContentLoaded", function() {
			jQuery(document).ready(function($) {
				if(!window.d3WasLoadedForBubbles){
					$.when(
					$.getScript('https://d3js.org/d3.v5.min.js'),
					$.Deferred(function( deferred ){
						$( deferred.resolve );
					})
					)
					.done(function(){
						initBubbles(selector,arr,incomingJSON)
					})
				}else{						
					initBubbles(selector,arr,incomingJSON)
				}
			});
		});
		
	}

	window.renderD3Bubbles = renderD3Bubbles;
}());
</script>


<script>

/*
 Step 4. Initiating
 Version that loads d3 as well instead of manually embedding script. may cause the graph to fail if d3.js.org is randomly down
*/
(function(){

//add scripts to render the graphs here
renderD3Bubbles(
	'#chart-demo',
	{
		dateRange: [
			new Date(2020,0,1),
			new Date(2020,0+1,0)
		],
		bubbleDomain:[0,1000]
	},
	placeholderData
);

}())

// var gotContacts = 0;
// function getContacts(){
//     if (!gotContacts){
//         $.getScript('/javascripts/contacts.js', function() {
//             gotContacts = 1;
//             doSomethingWithContacts();
//         });
//     }else{
//         doSomethingWithContacts();
//     }
// }


</script>


<!-- Module setup -->

<div class="module">
	<div class="module-header">
		<h1 class="module-title">Lord pls po sana gumana</h1>
		<div class="module-functions">
		
		</div>
	</div>
	
	<div class="module-content">
		<div id="chart-module-demo" class="background-theme color-theme"></div>
		<script>
		function moduleUpdateBubbleGraph(idSelector,dateRange,dateToRender)
		renderD3Bubbles(
				'#chart-demo',
				{
					dateRange: [
						new Date(2020,0,1),
						new Date(2020,0+1,0)
					],
					bubbleDomain:[0,1000]
				},
				dateToRender
		);
	</script>
	</div>
</div>