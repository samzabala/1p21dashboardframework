<div class="module"><div class="module-content">


<div id="chart-demo" class="background-neutral">
</div>
<script>
(function(){
	document.addEventListener("DOMContentLoaded", function() {

		

		renderChart = function(selector,chartMonthIndex,chartYear,incomingJSON){
			chartMonthIndex = parseInt(chartMonthIndex) || null;
			chartYear = parseInt(chartYear) || null;

			var minBubble = 10,
				maxBubble = 80,
				width = 1440, //size but will be setup as aspect ratio
				height = incomingJSON.length * maxBubble, //size but will be setup as aspect ratio
				padding = [0,0,50,550], //space for axis text
				outerWidth = (width + padding[1] + padding[3]),
				outerHeight = (height + padding[0] + padding[2])
				;


			if(selector && incomingJSON){

				//filter/validate data
				var data = incomingJSON
				data.forEach(function(dis,client){
					data[client].items.forEach(function(item,i){
						item.size = +item.size;
					})
				});

				console.log(data);

				//select the dootdoot
				container = d3.select(selector);
				container
				.style('position','relative')
					.style('padding-bottom', function(){
						return  (( outerHeight / outerWidth ) * 100) +'%';
					});

				//append svg
				svg  = container.append('svg')
					.attr('viewBox','0 0 ' + outerWidth + ' ' + outerHeight )
					.style('position','absolute')
					.style('top','0')
					.style('left','0')
					.style('bottom','0')
					.style('right','0')
					.attr('font-size','1em')
					.style('line-height',1)
					.style('margin','auto')
					.attr('version','1.1')
					.attr('x','0px')
					.attr('y','0px')
					.attr("preserveAspectRatio", "xMidYMid meet")
					.attr('xml:space','preserve')
					.attr('width',outerWidth)
					.attr('height',outerHeight);

				


				var g = svg.append('g')
					.attr('transform','translate('+ padding[3] +','+ padding[0] + ')');

				var x = d3.scalePoint()
					.domain([
						new Date(chartYear,chartMonthIndex,1),
						new Date(chartYear,(chartMonthIndex+1),1,-1,-1,-1)
					])
					.range([0,width])
					;

				var y = d3.scaleBand()
					.domain(function(dis){
						return dis.name
					})
					.range([0,height])
					;
					console.log((function(){
						return d3.min(
							data.map(function(client){
								return d3.min(client.items.size)
							})
						)
					}()) );

				var bubble = data.map(function(dis){
					return d3.scaleLinear()
						.domain([minBubble,maxBubble])
						.range([
							function(){
								return d3.min(
									data.map(function(items){
										return d3.min(items.size)
									})
								)
							}
						])
				});


			}else{
				var notFound = svg.append('text')
					.text('No data available')
					.style('text-align','center')
					.attr('dominant-baseline','middle')
					.attr('text-anchor','middle')
					.attr('font-size','2em')
					.attr('x',outerWidth /2)
					.attr('y',outerHeight /2)
					

			}
		}

		jQuery(document).ready(function($) {
			$.when(
			$.getScript('https://d3js.org/d3.v5.min.js'),
			$.getScript('https://cdnjs.cloudflare.com/ajax/libs/d3-tip/0.9.1/d3-tip.min.js'),
			$.Deferred(function( deferred ){
				$( deferred.resolve );
			})
			)
			.done(function(){
				renderChart(
					'#chart-demo',
					0,
					2020,
					[
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
						}, {
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
					]
				)
			})
		});
	});
}());
</script>


</div></div>