import * as d3 from 'd3';
// import Tooltip from './../../../../assets/plugins/framework/src/js/imports/tooltip';
import { 
	RandomString,
	TimeToFloat,
	FloatToTime,
	DateToObj,
	DateToString,
	DayRange,
	TimeRange,
	FilterData,
	ColorPalette,
} from './helpers.js';

const CHART_TEXT_COLOR = 'var(--fw-color-neutral-dark)';


export default class TTChart {
	constructor(element) {
	  if (!element) {
		return;
	  }


		this.element = element;
		
		this.instanceId = `TTCHart-${RandomString(8)}`

		this.supportCrData = true;
		

		this._preData = []; //actually passed
		this.rawData = []; //filtered to timebymode
		this.renderData = []; //however the chart is gonna look like, thots and prayers

		this.renderMeta = 'meta';
		
		this.canvas = {
			w: 300,
			h: 400,
			marginLeft: 0,
			marginBottom: 0,
			marginTop: 0,
			marginRight: 0
		}

		this.range = {
			color: [],
			T: [],
		};

		this.domain = {
			color: [],
			T: [],
		};

		this.scale = {
			color: null,
			T: null,
		};
		
		this.init();
	}

	// static ValidMeta = [
	// 	'task_category',
	// 	'project',
	// 	'client',
	// ];

	static timeByLimits = [
		// 'day',
		'week',
		'month',
		'year',
		'all',

	]

	
	get data (){
		return this.rawData;
	}


	set data(data){


		// not custom and single level data, but almost.. idk words. but ya we can just plug
		// if( Array.isArray(data) ) {


		// }
	}

	updateData(data) {
		this._preData = data;
	}
	

	get flatFrontData() {
		return Array.isArray(this.renderData) 
			? this.renderData
			: Object.entries(this.renderData)
				.flatMap(([key, entries]) => entries.map(en => en))
	}

	get flatData() {
		return Array.isArray(this.rawData) 
			? this.rawData
			: Object.entries(this.rawData)
				.flatMap(([key, entries]) => entries.map(en => en))
	}
	
	updateDomain(){ //@TODO make a helper out of whatever
		const self = this;

		const [minlatestDate,maxlatestDate] = DayRange(self.latestDate);
		
		const flatFrontData = self.flatFrontData;
		const flatData = self.flatData;

		
		Object.keys(self.domain).forEach(ax => {
			switch(ax){
				case 'T':
					if(!self.supportCrData) {
						self.domain[ax] = TimeRange(self.timeByMode,flatData,self.latestDate,self.startDate);
					}
					break;

				
				case 'S':
					self.domain[ax] = [
						0,
						d3.min(
							flatData,
							d => TimeToFloat(d.start_time).toFixed(15)
						)
					];
					break;

				case 'color':
					self.domain[ax] = flatData
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
		})
			
	}

	updateCanvas() {
		this.canvas = CHART_CANVAS;
	}

	updateRange(){
		const self = this;

		Object.keys(self.range).forEach(ax => {
			switch(ax) {
				case 'color':
					self.range[ax] = ColorPalette;
					break;
			}
		});

	}

	updateScale(){
		const self = this;

		Object.keys(self.scale).forEach(ax => {
			switch(ax) {
				case 'T':
					if(!self.supportCrData) {
						self.scale[ax] = d3.scaleTime()
							.domain(this.domain[ax])
							.range(this.range[ax])
					}
						break;
				case 'S':
					self.scale[ax] = d3.scaleLinear()
						.domain(this.domain[ax])
						.range(this.range[ax])
						break;
				case 'x':
					self.scale[ax] = d3.scaleBand()
						.domain(this.domain[ax])
						.range(this.range[ax])
						.paddingOuter(.5)
						.paddingInner(.5)
					break;
				case 'y':
					self.scale[ax] = d3.scaleLinear()
						.domain(this.domain[ax])
						.range(this.range[ax])
						break;
					break;
				case 'color':
					self.scale[ax] = d3.scaleOrdinal()
						.domain(this.domain[ax])
						.range(this.range[ax])
					break;
			}
		});

	}

	updateCanvas() {
		// yes;
	}
	
	get timeByMode(){
		return this.renderTimeByMode;
	}
	set timeByMode(timeByMode){;


		if(TTChart.timeByLimits.indexOf(timeByMode > -1) && this.renderTimeByMode !== timeByMode) {
			this.renderTimeByMode = timeByMode;
		}
	}

	get latestDate(){
		return this.renderLatestDate;
	}
	set latestDate(date){
		this.renderLatestDate = DateToObj([date]);
	}

	get startDate(){
		return this.renderStartDate;
	}
	set startDate(date){


		if(DateToObj([date])){
			this.renderStartDate = DateToObj([date])
		} else {
			this.renderStartDate = null
		};
	}

	get meta(){
		return this.renderMeta;
	}
	set meta(meta){
		this.renderMeta = meta;
	}

	prettySplitTime(string) {
		const time = TimeToFloat(string);
		
		const hours = Math.floor(time);
		const mins = Math.floor((time - Math.floor(time) ) * 60);

		let to_return = `${hours}h`;
		
		if(mins > 0) to_return+= ` ${mins}m`;

		return to_return;
	}

	get container(){
		return d3.select(this.element);
	}

	get svg(){
		return this.container.select('svg').size() ?
		this.container.select('svg') :
		this.container.append('svg');
	}
	

	get gShapes(){
		return this.svg.select('g.shapes').size() ?
		this.svg.select('g.shapes') :
		this.svg.append('g')
			.attr('class','shapes');
	}
	
	init() {

		if(!self.supportCrData) {
			this.renderLatestDate = DateToString([new Date()]);
			this.renderStartDate = null;
			this.renderTimeByMode = 'day';
		}


		this.container
			.style('position','relative')
			.html('')
			.append('svg');


		this.svg
			.attr('font-size','1em')
			.attr('font-family','inherit')
			// .style('teT-transform','uppercase')
			.style('user-select','none')
			.style('color',CHART_TEXT_COLOR)
			.attr('id',this.instanceId)
			.style('vertical-align','middle')
			.style('display','block')
			.style('line-height',1)
			.style('margin','auto')
			.style('width','100%')
			.style('max-width','100%')
			.attr('version','1.1')
			.attr('x','0px')
			.attr('y','0px')
			.attr("preserveAspectRatio", "xMidYMid meet") //responsive
			.attr('xml:space','preserve');
	}

	update(args) {

		args = args || {};

		const data = 
			(
				typeof args.data == 'object'
				|| Array.isArray(args.data)
			) ? args.data : this._preData;

		
		let meta,latestDate,timeByMode,startDate;


	
		meta = args.meta || this.meta;
		latestDate = args.latestDate || DateToString([this.latestDate]);

		timeByMode = args.timeByMode || this.timeByMode; //switch timeBy's when custom so the x axis doesnt get crowded

		startDate = (args.startDate && args.timeByMode !== 'all' )
				? args.startDate
					: this.startDate && args.timeByMode !== 'all'
				? DateToString([this.startDate]) 
					: null
				;

		this.meta = meta;
		this.latestDate = latestDate;

		this.timeByMode = timeByMode;
		this.startDate = startDate;

		this._preData = data;

	}

	render(args){

		this.update(args);
		this.draw();
	}

	draw() {
		this.svg
			.attr('viewBox',`0 0 ${this.canvas.w + (this.canvas.marginLeft + this.canvas.marginRight)} ${this.canvas.h + (this.canvas.marginTop + this.canvas.marginBottom)}` )
			.attr('width',
				`${this.canvas.w + (this.canvas.marginLeft + this.canvas.marginRight)}`
			) 
			.attr('height',
				`${this.canvas.h + (this.canvas.marginTop + this.canvas.marginBottom)}`
			) 
	}
}