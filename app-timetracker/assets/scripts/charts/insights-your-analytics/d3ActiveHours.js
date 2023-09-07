import * as d3 from 'd3';
import {
	DateToObj,
	DateToString,
	TimeToFloat,
	FloatToTime,
	DayRange,
	TheHours,
	TimeRange,
	DataSplitByHour,
	MinsToString
} from '../helpers.js';
import TTChart from './../ttChart.js';


//size of the chart 
const CHART_CANVAS = {
	w: 315,
	h: 100,
	marginLeft: 2,
	marginBottom: 48,
	marginTop: 16,
	marginRight: 2
}

const CHART_COLOR = 'var(--fw-color-primary)';
const STATIC_BAR_BANDWIDTH = 24;


class d3ActiveHours extends TTChart {
	
	constructor(element) {
		if(!element) return false;

		super(element);

		this.renderTimeByMode = 'day';

		this.range.x = [];
		this.range.y = [];

		this.domain.x = [];
		this.domain.y = [];
		
		this.scale.x = null;
		this.scale.y = null;


		this.init();
	}

	get barBandwidth(){
		return d3.min([STATIC_BAR_BANDWIDTH,this.scale['x'].bandwidth()])
	}

	get frontData() {
		return this.renderData;
	}

	set frontData(data) {

		const self = this;

		
		if(self.supportCrData) {
			self.renderData = data;

		} else {
			const [tMin,tMax] = TimeRange(self.timeByMode,self.rawData,self.latestDate,self.startDate);
			const [lMin,lMax] = DayRange(self.latestDate);
	
			const domain = self.domain;
	
			const dataDayDiff = d3.timeHour.count(
				tMin,
				d3.min([lMax,tMax])
			) / TheHours.length;
	
	
			const dataSplitByHourTotal =  Object.values(
				DataSplitByHour(data)
					.reduce((acc, d) => {
						const date = DateToObj([d.date,FloatToTime(Math.floor(TimeToFloat(d.start_time)))]);
	
						
	
						if (!acc[date]) {
							acc[date] = {
								date: d.date,
								total_hours: d.total_hours,
								start_time: FloatToTime( Math.floor(TimeToFloat(d.start_time)) )
							};
						} else {
							acc[date].total_hours = FloatToTime( TimeToFloat(acc[date].total_hours) + TimeToFloat(d.total_hours) );
						}
	
						return acc;
					}, {})
				)
				;
	
			const group = TheHours.map(hour => {
				const entries = dataSplitByHourTotal
					.filter( d => Math.floor(TimeToFloat(d.start_time)) == TimeToFloat(hour) )
					;
	
					const totalSum = FloatToTime(
						d3.sum(
							entries,
							d => {
								return TimeToFloat(d.total_hours);
							}
						)
					);
	
	
					const count = d3.max([
						dataDayDiff,
						entries.length,
						1
					]);
	
	
					const avg = count > 0 ? FloatToTime( TimeToFloat(totalSum) / count ) : '00:00';
	
					return {
						start_time: hour,
						count: count,
						total_hours: totalSum,
						__avg: avg,
		
					}
			})
			.filter(d => TimeToFloat(d.total_hours) > 0);		
	
			
			this.renderData = group;
		}
	}

	updateData(data){

		const self = this;
		
		if(self.supportCrData) {

			const group = [];

			for (const hour in data) {

				const to_push = {};

				to_push.start_time = FloatToTime(parseInt(hour));
				to_push.total_hours = FloatToTime( data[hour] );
				

				group.push(to_push);
			}


			self.rawData = group;
			self.renderData = self.rawData;

		} else {

			self.rawData = self._preData;
			self.frontData = self.rawData;
		}

	}

	updateDomain(){
		super.updateDomain();

		const self = this;

		Object.keys(self.domain).forEach(ax => {
			switch(ax) {
				case 'x':
					const dat = self.frontData;
					const first = TheHours.indexOf(
						FloatToTime(
							d3.min([
								...dat.map(d => TimeToFloat(d.start_time)),
								7
							])
						)
					);
					const last = TheHours.indexOf(
						FloatToTime(
							d3.max([
								...dat.map(d => TimeToFloat(d.start_time)),
								7 + 12
							])
						)
					);
					self.domain[ax] = TheHours.slice(first, d3.min([last + 1, TheHours.length]));
					break;
				case 'y':
					self.domain[ax] = [
						0,
						d3.max(
							self.frontData,
							d => TimeToFloat( self.supportCrData ? d.total_hours : d.__avg )
						)
					]
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
				case 'x':
					self.range[ax] = [0,self.canvas.w];
					break;
				case 'y':
					self.range[ax] = [self.canvas.h,0];
					break;
			}
		});
	}

	// updateScale(){
	// 	super.updateScale();

	// 	const self = this;

	// 	Object.keys(self.scale).forEach(ax => {
	// 		switch(ax) {
	// 		}
	// 	});

	// }


	
	axis(ax) {
		const domain = this.domain;

		const self = this;
		switch(ax){
			case 'x':

				return d3.axisBottom(self.scale[ax])
					.tickValues(domain[ax])
					.tickFormat((d) => {
						const p = d3.timeParse("%H:%M")(d)
						return d3.timeFormat("%-I%p")(p)
							// .slice(0, -1)
							;
					})
					;
		}

	}

	get xAxis() {
		// why is it a path ew. only uses text
		return this.gShapes.select('g.axis-x').size() ?
		this.gShapes.select('g.axis-x') :
		this.gShapes.append('g')
			.attr('class','axis axis-x');
		
	}

	get xFauxAxis() {
		return this.gShapes.select('line.faux-axis-x').size() ?
		this.gShapes.select('line.faux-axis-x') :
		this.gShapes.append('line')
			.attr('class','f-a f-a-y faux-axis faux-axis-x');
	}

	get bar() {
		const self = this;
		return self.gShapes.selectAll('rect.shape-bar')
			.data(self.frontData, d => d.start_time);
	}
	
	init() {
		super.init();

		// this.svg
		// 	.style('color',CHART_COLOR)
	}

	update(args) {

		// if(args.timeByMode && args.timeByMode == 'day') {
		// 	args.timeByMode = 'week'
		// }

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
		


		self.xAxis
			.call(self.axis('x'))
			.attr('font-size','10')
			.style('color','inherit')
			// .style('font-weight','inherit')
			.style('text-transform','lowercase')
			.attr('transform',`translate(
				0, ${self.canvas.h})`
			)
			.call(gA => {
				gA.selectAll('.domain')
					.attr('stroke', CHART_COLOR)
					.attr('opacity',0)
					;
				gA.selectAll('.tick line')
					.attr('opacity', 0)
					;
				gA.selectAll('.tick text')
					.attr('dx', '.8em')
					.attr('text-anchor', 'start')
					.attr('alignment-baseline', 'top')
					.attr('transform', 'rotate(45)' )
					;
			})
			;

		self.xFauxAxis
			.attr('stroke',CHART_COLOR)
			.attr('opacity',.5)
			.attr('x1',0) 
			.attr('y1',self.canvas.h)
			.attr('x2',0 + self.canvas.w) 
			.attr('y2',self.canvas.h)

		self.gShapes
			.attr('transform',`translate(
				${ self.canvas.marginLeft }, ${
					self.canvas.marginTop
				})`
			)
			;



			
		self.bar
			.exit()
			.remove()
			;

		self.bar
			.enter()
			.append('rect')
			.attr('class','shape-bar')
			;

		self.bar.merge(self.bar.enter())
			.attr('data-toggle-tooltip-hover',true)
			.attr('data-tooltip-placement','top')
			.attr('fill',CHART_COLOR)
			.attr('data-tooltip-content',d => {


				return `<div class="padding-small">
				<h6 class="color-neutral no-margin">Activity</h6>
					Total hours: ${(TimeToFloat(self.supportCrData ? d.total_hours : d.__avg) ).toFixed(2) }
				</div>`
			
			})
			.attr('width', self.barBandwidth)
			.attr('x', d => {
				return self.scale['x'](d.start_time) + ( (self.scale['x'].bandwidth() - self.barBandwidth) * .5 )
			})
			.attr('height', (d) => self.canvas.h - self.scale['y']( TimeToFloat( self.supportCrData ? d.total_hours : d.__avg ) ))
			.attr('y', (d) => {
				return (
					self.scale['y']( TimeToFloat( self.supportCrData ? d.total_hours : d.__avg ))
				)
			})
			;

	}
}


export default d3ActiveHours;