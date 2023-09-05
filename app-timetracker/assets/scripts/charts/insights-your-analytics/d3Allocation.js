import * as d3 from 'd3';
import {
	DateToObj,
	TimeToFloat,
	FloatToTime,
	DataGroupByMeta,
	MinsToString
} from '../helpers.js';
import TTChart from './../ttChart.js';


//size of the chart 
const CHART_CANVAS = {
	w: 385,
	h: 240,
	marginLeft: 0,
	marginBottom: 32,
	marginTop: 16,
	marginRight: 0
}


class d3Allocation extends TTChart {
	
	constructor(element) {
		if(!element) return false;

		super(element);

		const self = this;


		this.range.p = [];
		this.domain.p = [];
		this.scale.p = null;


		this.init();
	}

	get radius() {
		return Math.min(this.canvas.w, this.canvas.h) * .5;
	}

	get frontData() {
		return this.renderData;
	}

	set frontData(data) {
		const self = this;
		self.renderData = DataGroupByMeta(data,self.meta)
			.sort((a,b) => TimeToFloat(a.total_hours) < TimeToFloat(b.total_hours) ? 1 : -1);
	}

	

	updateData(data){
		super.updateData(data);

		const self = this;


		if(self.supportCrData){
			const group = [];

			let start_time = '00:00';
			for (const meta in data) {

				const to_push = {};

				to_push[self.meta] = meta;
				to_push.total_hours = FloatToTime( data[meta] );
				to_push.start_time = start_time;
				
				start_time = FloatToTime(TimeToFloat(start_time) + TimeToFloat(to_push.total_hours));

				group.push(to_push);
			}
	
			self.rawData = group;
			self.frontData = self.rawData;
		} else {
			self.rawData = self._preData;
			self.frontData = self.rawData;
		}

	}

	updateDomain() {
		super.updateDomain();

		const self = this;
		const flatData = self.flatData;
		const flatFrontData = self.flatFrontData;

		Object.keys(self.domain).forEach(ax => {
			switch(ax) {
				case 'p':
					self.domain[ax] = [
						0,
						d3.sum(
							flatData,
							d => TimeToFloat(d.total_hours).toFixed(15)
						)
					];

					break;
			}
		});
	}

	updateCanvas() {
		super.updateCanvas();
		this.canvas = CHART_CANVAS;
	}

	updateRange() {
		super.updateRange();

		const self = this;

		Object.keys(self.range).forEach(ax => {
			switch(ax) {
				case 'p':
					self.range[ax] = [0,100];
					break;
			}
		});

	}

	updateScale(){
		super.updateScale();

		const self = this;

		Object.keys(self.scale).forEach(ax => {
			switch(ax) {
				case 'p':
					self.scale[ax] = d3.scaleLinear()
						.domain(this.domain[ax])
						.range(this.range[ax])
						break;
					break;
			}
		});

	}

	get pi(){
		const self = this;
		return d3.pie()
			.value(d=> {
				return TimeToFloat(d.total_hours);
			})
			.sort((d,e) => d3.ascending(d[self.meta],e[self.meta]))
	}

	get LegendList() {
		return this.container.select('ul.legends').size() ?
			this.container.select('ul.legends') :
			this.container.append('ul')
				.attr('class','legends list-group');
	}

	get legendItem() {
		const self = this;
		return this.LegendList.selectAll('li')
			.data(self.pi( self.frontData ));
	}

	get cut() {
		const self = this;
		return self.gShapes.selectAll('path.shape-cut')
			.data(self.pi( self.frontData ));
	}
	
	init() {
		super.init();
	}

	update(args) {

		super.update(args);
		
		this.updateData(args.data);

		this.updateDomain();
		this.updateCanvas();
		this.updateRange();
		this.updateScale();

	}

	render(args){
		super.render(args);
	}

	draw() {

		super.draw();

		const self = this;


		self.gShapes
			.attr('transform',`translate(
				${ self.canvas.w * .5 + self.canvas.marginLeft}, ${
					self.canvas.h * .5 + self.canvas.marginTop
				})`
			)
			;

		self.cut
			.exit()
			.remove()
			;

		self.cut
			.enter()
			.append('path')
			.attr('class','shape-cut')
			;

		
		self.cut.merge(self.cut.enter())
			.attr('fill',d => {
				return self.scale['color'](d.data[self.meta])
			})
			.attr('d', d3.arc()
			  .innerRadius(self.radius * .6)
			  .outerRadius(self.radius)
			)
			.attr('data-toggle-tooltip-hover',true)
			.attr('data-tooltip-placement','top')
			.attr('data-tooltip-content',dis => {

				const d = dis.data; 


				return `<div class="padding-small">
				<i class="margin-small-right legend" style="background-color: ${self.scale['color'](d[self.meta])}"></i> ${d[self.meta]} <br>
				<i class="margin-small-right symbol symbol-timer"></i> ${d[self.meta]}: ${ Math.floor(self.scale['p']( TimeToFloat(d.total_hours) )) }% <br>
				</div>`
			
			})
			;


		self.legendItem
			.exit()
			.remove()
			;
			
		self.legendItem
			.enter()
			.append('li')
			;

		
		self.legendItem.merge(self.legendItem.enter())
			.html(dis => {

				const d = dis.data; 


				return `
				<div class="flex-xs justify-content-space-between">
					<span class="flex-1-1 text-wrap-ellipsis"><i class="margin-small-right legend" style="background-color: ${self.scale['color'](d[self.meta])}"></i> ${d[self.meta]}</span>
					<strong class="flex-0-0">${self.scale['p']( TimeToFloat(d.total_hours) ).toFixed(2) }%</strong>
				</div>
				`;
			})
			;



	}
}


export default d3Allocation;