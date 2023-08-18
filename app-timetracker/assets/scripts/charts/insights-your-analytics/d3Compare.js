import * as d3 from 'd3';
import {
	DateToObj,
	DateToString,
	TimeToFloat,
	FloatToTime,
	DayRange,
	TheHours,
	TimeRange,
	FilterData,
	DataGroupByMeta,
	MinsToString
} from '../helpers.js';
import TTChart from './../ttChart.js';


//size of the chart 
const CHART_CANVAS = {
	w: 1240,
	// h: 0, // gonna be dynamic but... min hEIGHT
	marginLeft: 24,
	marginBottom: 16,
	marginTop: 16,
	marginRight: 24
}

const CHART_COLOR_L = 'var(--fw-color-primary)';
const CHART_COLOR_R = 'var(--fw-color-error)';

const BAR_BANDWIDTH = 48; //15
const BAR_TEXT_PADDING = 10;

const BAR_TEXT_INSIDE_COLOR = 'white';

const GRID_TICK_COLOR = 'var(--fw-color-primary-alpha-2)';

const MAX_TICK_LABEL_LENGTH  = 32;

const AXIS_WIDTH = 250;


class d3Compare extends TTChart {
	
	constructor(element) {
		if(!element) return false;

		super(element);

		const self = this;
		

		self._preData = {}; //actually passed
		self.rawData = {
			l: [],
			r: []
		}; //filtered to timebymode
		self.renderData = {
			l: [],
			r: []
		}; //however the chart is gonna look like, thots and prayers


		this.renderTimeByMode = 'week';

		this.domain.x = [];

		this.range.xL = [];
		this.range.xR = [];
		
		this.scale.xL = null;
		this.scale.xR = null;

		this.range.y = []; // MAKE THIS DYNAMIC
		this.domain.y = [];
		this.scale.y = null;


		this.init();
	}

	get frontData() {
		return this.renderData;
	}

	set frontData(data) {
		this.renderData.l = DataGroupByMeta(data.l,this.meta);
		this.renderData.r = DataGroupByMeta(data.r,this.meta);
	}

	get allFrontData() {
		return [...this.renderData.l,...this.renderData.r];
	}

	get barBandwidth(){
		return this.scale['y'].bandwidth()
	}

	get graphWidth() {
		return (this.canvas.w - AXIS_WIDTH) * .5;
	}

	textWidth(el) {
		return el.getBBox().width + + (BAR_TEXT_PADDING * 2)
	}

	updateData(data) {
		
		const self = this;

		self.rawData.l = [];
		self.rawData.r = [];

		if(self.supportCrData) {

			let compareKeys;// 0,1


			for(const meta in data){

				if(!compareKeys){
					compareKeys = Object.keys(data[meta]);
				}

				const to_push_l = {};
				to_push_l[self.meta] = meta;
				to_push_l.total_hours = MinsToString(data[meta][compareKeys[0]]);

				self.rawData.l.push(to_push_l);

				const to_push_r = {};
				to_push_r[self.meta] = meta;
				to_push_r.total_hours = MinsToString(data[meta][compareKeys[1]]);

				self.rawData.r.push(to_push_r);
			}



			self.frontData = self.rawData;


		} else {

			this._preData = data;
	
			const data_l = (data.l && data.l.length) ? data.l : this._preData.l;
	
			if( Array.isArray(data_l) ) {
				this.rawData.l = FilterData(
					this.timeByMode,
					data_l,
					this.latestDate,
					this.startDate
				);
			}
	
			const data_r = (data.r && data.r.length) ? data.r : this._preData.r;
	
			if( Array.isArray(data_r) ) {
				this.rawData.r = FilterData(
					this.timeByMode,
					data_r,
					this.latestDate,
					this.startDate
				);
			}
		}

	}

	updateDomain() {
		super.updateDomain();

		const self = this;
		const flatFrontData = self.flatFrontData;

		Object.keys(self.domain).forEach(ax => {
			switch(ax) {
				case 'x':
					self.domain[ax] = [
						0,
						d3.max(
							flatFrontData,
							d => TimeToFloat(d.total_hours)
						)
					];
					break;
				case 'y':
					self.domain[ax] = flatFrontData
						.reduce((acc,d) => {
							if(!acc.includes(d[self.meta])) {
								acc.push(d[self.meta])
							}
							return acc;
						},[])
						.sort((a,b) => a.toUpperCase().localeCompare(b.toUpperCase()))
						;
					break;
			}
		});
	}

	updateCanvas() {
		super.updateCanvas();

		const self = this;

		Object.keys(self.canvas).forEach(k => {
			switch(k) {
				case 'h':
					self.canvas[k] = d3.max([
						BAR_BANDWIDTH,
						(self.domain.y.length + .5) * BAR_BANDWIDTH, // +.5 for outerPadding
					]);
					break;
				default:
					self.canvas[k] = CHART_CANVAS[k] || self.canvas[k];
					break;
			}
		});
	}

	updateRange() {
		super.updateRange();

		const self = this;

		Object.keys(self.range).forEach(ax => {
			switch(ax) {
				case 'x':
				case 'xR':
					self.range[ax] = [
						0,
						self.graphWidth
					];
					break;
				case 'xL':
					self.range[ax] = [
						self.graphWidth,
						0
					];
					break;
				case 'y':
					self.range[ax] = [
						0,
						self.canvas.h
					];
					break;
			}
		});
	}

	updateScale(){
		super.updateScale();

		const self = this;

		Object.keys(self.scale).forEach(ax => {
			switch(ax) {
				case 'y':
					self.scale[ax] = d3.scaleBand()
						.domain(this.domain[ax])
						.range(this.range[ax])
						.paddingOuter(.5)
						.paddingInner(.5)
					break;
				case 'x':
				case 'xL':
				case 'xR':
					self.scale[ax] = d3.scaleLinear()
						.domain(this.domain['x'])
						.range(this.range[ax])
						break;
					break;
			}
		});

	}

	
	axis(ax,isGrid) {
		const self = this;
		switch(ax){
			case 'xL':
			case 'xR':
				return d3.axisTop(self.scale[ax])
					.tickSize( isGrid ? self.canvas.h : 6)
					;

			case 'y':
				return d3.axisLeft(self.scale[ax])
					.tickFormat(d => (
						d.length >= MAX_TICK_LABEL_LENGTH
							? `${ d.substring(0, MAX_TICK_LABEL_LENGTH - 1) }...`
							: d
					))
					.tickSize(0)
					// .tickSize(AXIS_WIDTH)
				;

		}
		
	}



	get graphs() {
		return self.gShapes.selectAll('g.time-graph')

	}

	get graphL(){
		return this.gShapes.select('g.graph-l').size() ?
		this.gShapes.select('g.graph-l') :
		this.gShapes.append('g')
			.attr('class','graph-l');
	}


	get graphR(){
		return this.gShapes.select('g.graph-r').size() ?
		this.gShapes.select('g.graph-r') :
		this.gShapes.append('g')
			.attr('class','graph-r');
	}

	get barL() {
		const self = this;
		return self.graphL.selectAll('rect.shape-bar')
			.data(self.frontData.l, d => d[self.meta]);
	}

	get barR() {
		const self = this;
		return self.graphR.selectAll('rect.shape-bar')
			.data(self.frontData.r, d => d[self.meta]);
	}

	get textL() {
		const self = this;
		return self.graphL.selectAll('text.shape-text')
			.data(self.frontData.l, d => d[self.meta]);
	}

	get textR() {
		const self = this;
		return self.graphR.selectAll('text.shape-text')
			.data(self.frontData.r, d => d[self.meta]);
	}

	get xLGrid() {
		return this.gShapes.select('g.grid-xL').size() ?
		this.gShapes.select('g.grid-xL') :
		this.gShapes.append('g')
			.attr('class','grid grid-xL');
		
	}

	get xRGrid() {
		return this.gShapes.select('g.grid-xR').size() ?
		this.gShapes.select('g.grid-xR') :
		this.gShapes.append('g')
			.attr('class','grid grid-xR');
		
	}

	get yLFauxAxis() {
		return this.gShapes.select('line.faux-axis-yL').size() ?
		this.gShapes.select('line.faux-axis-yL') :
		this.gShapes.append('line')
			.attr('class','faux-axis faux-axis-yL');
	}

	get yRFauxAxis() {
		return this.gShapes.select('line.faux-axis-yR').size() ?
		this.gShapes.select('line.faux-axis-yR') :
		this.gShapes.append('line')
			.attr('class','faux-axis faux-axis-yR');
	}




	get yAxis() {
		return this.gShapes.select('g.axis-y').size() ?
		this.gShapes.select('g.axis-y') :
		this.gShapes.append('g')
			.attr('class','axis axis-y');
	}

	// get graphLStartX() {
	// 	return 
		
	// }
	// get graphRStartX() {
	// 	return 
	// }
	
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

		this.data = args.data;

		super.render(args);
	}

	draw() {

		super.draw();

		const self = this;

		// grid muna
		self.xLGrid
			.call(self.axis('xL',true))
			.attr('transform',`translate(
				0, ${self.canvas.h})`
			)
			.call(gA => {
				gA.selectAll('.domain')
					.attr('opacity', 0)
					;
				gA.selectAll('.tick line')
					.attr('stroke', GRID_TICK_COLOR)
					;
				gA.selectAll('.tick text')
					.attr('opacity', 0)
					;
			})
			;
		self.xRGrid
			.call(self.axis('xR',true))
			.attr('transform',`translate(
				${ (self.graphWidth + AXIS_WIDTH) }, ${self.canvas.h })`
			)
			.call(gA => {
				gA.selectAll('.domain')
					.attr('opacity', 0)
					;
				gA.selectAll('.tick line')
					.attr('stroke', GRID_TICK_COLOR)
					;
				gA.selectAll('.tick text')
					.attr('opacity', 0)
					;
			})
			;

		//faux axis naman
			self.yLFauxAxis
				.attr('stroke','currentColor')
				.attr('x1',self.graphWidth ) 
				.attr('y1',0)
				.attr('x2',self.graphWidth ) 
				.attr('y2',self.canvas.h)
			self.yRFauxAxis
				.attr('stroke','currentColor')
				.attr('x1',self.graphWidth + AXIS_WIDTH) 
				.attr('y1',0)
				.attr('x2',self.graphWidth + AXIS_WIDTH) 
				.attr('y2',self.canvas.h)

		//si totooong axis naman
			self.yAxis
				.call(self.axis('y'))
				.attr('font-size','1em')
				.attr('line-height','1')
				// .style('color','inherit')
				// .style('font-weight','inherit')
				// .style('text-transform','uppercase')
				.attr('text-anchor', 'middle')
				.attr('dominant-baseline', 'middle')
				.attr('transform',`translate(
					${ ( self.canvas.w  * .5) }, 0)`
				)
				.call(gA => {
					gA.selectAll('.domain')
						.attr('opacity', 0)
						;
					// gA.selectAll('.tick line')
					// 	.attr('opacity', 0)
					// 	;
					gA.selectAll('.tick text')
						.attr('dy',0)
						.classed('cut-tick-label',d=> d.length >= MAX_TICK_LABEL_LENGTH)
						;

					gA.selectAll('.tick text.cut-tick-label')
						.attr('data-toggle-tooltip-hover',true)
						.attr('data-tooltip-placement','top')
						.attr('data-tooltip-content',d => d)
				});
				

		self.gShapes
			.attr('transform',`translate(
				${ self.canvas.marginLeft }, ${
					self.canvas.marginTop
				})`
			)
			;


		// thots and prayers
		self.graphR
			.attr('transform',`translate(${self.graphWidth + AXIS_WIDTH},0)`);

		self.barL
			.exit()
			.remove()
			;

		self.barL
			.enter()
			.append('rect')
			.attr('class','shape-bar')
			.attr('fill',CHART_COLOR_L)

		self.barL.merge(self.barL.enter())
			.attr('height', self.barBandwidth)
			.attr('y', (d) => self.scale['y']( d[self.meta] ) + ((self.scale['y'].bandwidth() - self.barBandwidth) * .5) )
			.attr('x', d => self.scale['xL']( TimeToFloat(d.total_hours) ))
			.attr('width', d => self.graphWidth - self.scale['xL']( TimeToFloat(d.total_hours) ))
			;

		self.barR
			.exit()
			.remove()
			;

		self.barR
			.enter()
			.append('rect')
			.attr('class','shape-bar')
			.attr('fill',CHART_COLOR_R)

		self.barR.merge(self.barR.enter())
			.attr('height', self.barBandwidth)
			.attr('y', (d) => self.scale['y']( d[self.meta] ) + ((self.scale['y'].bandwidth() - self.barBandwidth) * .5) )
			.attr('x', 0 )
			.attr('width', d => self.scale['xR']( TimeToFloat(d.total_hours) ) )
			;



		self.textL
			.exit()
			.remove()
			;

		self.textL
			.enter()
			.append('text')
			.attr('class','shape-text')
			.style('font-weight','bolder')
			.attr('dominant-baseline', 'middle')
			.attr('dy',0)

		self.textL.merge(self.textL.enter())
			.text(d => self.prettySplitTime(d.total_hours) )
			.attr('fill',(d,i,dat) => {
				const textWidth = self.textWidth(dat[i]);
				const barWidth = self.graphWidth - self.scale['xL']( TimeToFloat(d.total_hours) );
				return (textWidth) <= barWidth ? BAR_TEXT_INSIDE_COLOR : CHART_COLOR_L;
			})
			.attr('text-anchor', (d,i,dat) => {
				const textWidth = self.textWidth(dat[i]);
				const barWidth = self.graphWidth - self.scale['xL']( TimeToFloat(d.total_hours) );
				return (textWidth) <= barWidth ? 'start' : 'end';
			})
			.attr('y', (d) => self.scale['y']( d[self.meta] ) + (self.scale['y'].bandwidth() * .5) )
			.attr('x', (d,i,dat)=> {
				const textWidth = self.textWidth(dat[i]);
				const barWidth = self.graphWidth - self.scale['xL']( TimeToFloat(d.total_hours) );
				return (textWidth) <= barWidth
					? self.scale['xL']( TimeToFloat(d.total_hours) ) + BAR_TEXT_PADDING
					: self.scale['xL']( TimeToFloat(d.total_hours) ) - BAR_TEXT_PADDING
			})
			;

		



		self.textR
			.exit()
			.remove()
			;

		self.textR
			.enter()
			.append('text')
			.attr('class','shape-text')
			.style('font-weight','bolder')
			.attr('dominant-baseline', 'middle')
			.attr('dy',0)

		self.textR.merge(self.textR.enter())
			.text(d => self.prettySplitTime(d.total_hours) )
			.attr('fill',(d,i,dat) => {
				const textWidth = self.textWidth(dat[i]);
				const barWidth = self.scale['xR']( TimeToFloat(d.total_hours) );
				return (textWidth) <= barWidth ? BAR_TEXT_INSIDE_COLOR : CHART_COLOR_R;
			})
			.attr('text-anchor', (d,i,dat) => {
				const textWidth = self.textWidth(dat[i]);
				const barWidth = self.scale['xR']( TimeToFloat(d.total_hours) );
				return (textWidth) <= barWidth ? 'end' : 'start';
			})
			.attr('y', (d) => self.scale['y']( d[self.meta] ) + (self.scale['y'].bandwidth() * .5) )
			.attr('x', (d,i,dat)=> {
				const textWidth = self.textWidth(dat[i]);
				const barWidth = self.scale['xR']( TimeToFloat(d.total_hours) );
				return (textWidth) <= barWidth
					? barWidth - BAR_TEXT_PADDING
					: barWidth + BAR_TEXT_PADDING
			})
			;

		

	}
}


export default d3Compare;