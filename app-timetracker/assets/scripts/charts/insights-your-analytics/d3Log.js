import * as d3 from 'd3';
import { 
	TimeToFloat,
	FloatToTime,
	DateToObj,
	DateToString,
	TimeRange,
	Today,
	DataSplitByHour,
	DataGroupByMeta,
	MinsToString
} from './../helpers.js';
import TTChart from './../ttChart.js';

const TODAY_TICK_COLOR = 'var(--fw-color-primary)';
const SCROLL_THUMB_COLOR = 'var(--fw-color-theme)';
const GRID_TICK_COLOR = 'var(--fw-color-primary-alpha-2)';

//size of the chart 
const CHART_CANVAS = {
	w: 645,
	h: 550,
	marginLeft: 48,
	marginBottom: 36,
	marginTop: 16,
	marginRight: 24
};

// god help me
const STATIC_BAR_BANDWIDTH = 24;

const BAR_BANDWIDTH = 36; //15

let panorama_drag_offset = 0;
let panorama_current_x = 0;
let panoramaMax = 0;


class d3Log extends TTChart {
	
	constructor(element) {
		if(!element) return false;

		super(element);

		this.range.x = [];
		this.range.S = [];
		this.range.y = [];

		this.domain.x = [];
		this.domain.S = [];
		this.domain.y = [];

		this.scale.x = null;
		this.scale.S = null;
		this.scale.y = null;

		this.groupBy = 'hour';


		this.init();
	}

	get barBandwidth(){
		return d3.min([STATIC_BAR_BANDWIDTH,this.scale['x'].bandwidth()])
		// return this.scale['x'].bandwidth()
	}

	groupByDomain = {
		hour: [0,1],
		day: [0,1], // 8
		date: [0,1], // 8
		week: [0,1], // 40
		month: [0,1], //130
		year: [0,1], //1920
	}
	

	freeRangeMaxBars = 12;

	timeTicksCall(){
		return Object.keys(this._preData).map(d => DateToObj([d]))
	}

	get timeTicks () {
		// return TimeTicks(this.timeByMode,this.data,this.latestDate,this.startDate);

		if(this.supportCrData) {
			return Object.keys(this._preData).map(d => DateToObj([d]))
		} else {
			const self = this;
	
			const to_return = [];
	
			let [start,end] = TimeRange(
				self.timeByMode,
				self.data,
				self.latestDate,
				self.startDate
			)

			while ( start <= end ) {
				to_return.push(start);
				
				switch(self.groupBy) {
					case 'hour':
						start = d3.timeHour.offset(start,1);
						break;
					case 'day':
					case 'date':
						start = d3.timeDay.offset(start,1);
						break;
					case 'week':
						start = d3.timeDay.offset(start,7);
						break;
					case 'month':
						start = d3.timeMonth.offset(d3.timeMonth.floor(start),1);
						break;
					case 'year':
					default:
						start = d3.timeYear.offset(d3.timeYear.floor(start),1);
						break;
				}
			}
	
			return to_return;

		}
	}

	checkTickBound([rDate,rTime],tick) {
		let to_return;
		

		switch(this.groupBy){
			case 'year':
				to_return =
					DateToObj([rDate,rTime]).getYear() == tick.getYear()
					;
				break;
			case 'month':
				to_return =
					DateToObj([rDate,rTime]).getMonth() == tick.getMonth()
					&& DateToObj([rDate,rTime]).getYear() == tick.getYear()
					;
				break;
			case 'week':
				to_return = 
					DateToObj([rDate,rTime]) >= tick
					&& DateToObj([rDate,rTime]) < d3.timeDay.offset(tick,7)
					;
				break;
			case 'date':
			case 'day':
			default:
				to_return = DateToString([rDate]) === DateToString([tick]);
				break;
				
			case 'hour':

				to_return = 
					DateToString([rDate]) == DateToString([tick])
					&& DateToObj([rDate,rTime]).getHours() >= tick.getHours()
					&& DateToObj([rDate,rTime]).getHours() < tick.getHours() + 1
					;
				break;
		}


		return to_return;

	
	}


	prettyDate([date,time],format = {}) { //@TODO groupBy this
		const self = this;

		const timeTicks = self.timeTicks;

		const end = timeTicks[ timeTicks.length - 1 ];
	

		const hF = format.hour || `%-I%p`;
		const dyF = format.day || '%m/%d';
		const dtF = format.date || '%m/%d';
		const dtFF = format.dateFirst || (
			(self.groupBy == 'date' && timeTicks.length <= self.freeRangeMaxBars)
				? '%m/%d'
				: false
			);
		const wF = format.week || '%m/%d';
		const wLF = format.weekLast || false;
		const mF = format.month || '%m/%d';
		const mFF = format.monthFirst || (
			self.startDate
				? '%m/%d'
				: false
			);
		const yF = format.year || '%m/%d';

		switch(self.groupBy) {
			case 'hour':
				return DateToString([date,time],hF);
			case 'day':
				return DateToString([date,time],dyF);
			case 'date':
				return dtFF && d3.timeDay(date).getDate() == 1
					? DateToString([date,time],dtFF)
					: DateToString([date,time],dtF);
			case 'week':
				// return `${(DateToString([date,false],wF))}`;
				return `${(DateToString([date,false],wF))}${(
					wLF
						? ' - '
						+ DateToString([d3.timeDay.offset(DateToObj([date]),6),false],wLF)
						: ''
				)}`;
			case 'month':
				return dtFF && d3.timeDay(date).getMonth() == 1
					? DateToString([date,time],mFF)
					: DateToString([date,time],mF);
			case 'year':
				return DateToString([date,time],yF);
		}

	}
	

	get frontData (){
		return this.renderData;
	}

	set frontData(data) {
		const self = this;

		// if(self.supportCrData) {

		// 	console.warn(data);
		// 	self.renderData = data;

		// } else {
			const timeTicks = self.timeTicks;
	
			const sortByMeta = (
				self.groupBy !== 'hour'
				// && self.groupBy !== 'day'
			);
			
	
			//split up by a whole hour the entries that have total_hours that exceed an hour
			if(!sortByMeta){
				data = DataSplitByHour(data);
			}
	
			const group = timeTicks.map(tick => { 
				const to_push = {
					date: DateToString([tick]),
					entries: []
				};
	
				to_push.time =  FloatToTime(tick.getHours());
	
				to_push.entries = DataGroupByMeta(
						data.filter( d => {
							return self.checkTickBound([d.date,self.supportCrData ? null : d.start_time], tick);
						} ),
						self.meta,
						sortByMeta
					)
				;
	
	
				return to_push;
			});
			self.renderData = group;
		// }

	}

	updateGroupBy(){
		const self = this;

		if(self.supportCrData) {
			const timeTicks = self.timeTicks;

			const startDate = timeTicks[0];
			const nextTick = timeTicks[1];
			const nextNextTick = timeTicks[2];
			const lastTick = timeTicks[ self.timeTicks.length - 1 ];

			let dayDiff = 0,
			nextYearDiff = 0,
			nextMonthDiff = 0,
			nextWeekDiff = 0,
			nextDayDiff = 0,
			nextNextYearDiff = 0,
			nextNextMonthDiff = 0,
			nextNextWeekDiff = 0;

			// console.warn('--------------------------ilang beh',startDate,lastTick);


			// const yearDiff = d3.timeYear.count(startDate,lastTick);
			// const monthDiff = d3.timeMonth.count(startDate,lastTick);
			// const weekDiff = d3.timeWeek.count(startDate,lastTick);
			dayDiff = d3.timeDay.count(startDate,lastTick);


			if(timeTicks.length >= 2){
				nextYearDiff = d3.timeYear.count(startDate,nextTick);
				nextMonthDiff = d3.timeMonth.count(startDate,nextTick);
				nextWeekDiff = d3.timeWeek.count(startDate,nextTick);
				nextDayDiff = d3.timeDay.count(startDate,nextTick);
			}


			if(timeTicks.length >= 3){
				nextNextYearDiff = d3.timeYear.count(nextTick,nextNextTick);
				nextNextMonthDiff = d3.timeMonth.count(nextTick,nextNextTick);
				nextNextWeekDiff = d3.timeWeek.count(nextTick,nextNextTick);
				// const nextNextDayDiff = d3.timeDay.count(nextTick,nextNextTick);
			}
			
			if(
				nextYearDiff > 0
				&& (
					nextNextYearDiff > 0
					|| timeTicks.length < 3
				)
			){
				self.groupBy = 'year';
			}else if(
				nextMonthDiff > 0
				&& (
					nextNextMonthDiff > 0
					|| timeTicks.length < 3
				)
			) {
				self.groupBy = 'month';
			}else if(
				nextWeekDiff > 0
				&& (
					nextNextWeekDiff > 0
					|| timeTicks.length < 3
				)
			) {
				self.groupBy = 'week';
			}else if(
				nextDayDiff > 0
				&& timeTicks.length > 7
			){
				self.groupBy = 'date';
			}else  {
				self.groupBy = 'day';
			}
			
		} else {

			if(
				self.renderStartDate
			) {
					const startDate = DateToObj([self.renderStartDate]);
					const latestDate = DateToObj([self.renderLatestDate]);
		
					const yearDiff = d3.timeYear.count(startDate,latestDate);
					const monthDiff = d3.timeMonth.count(startDate,latestDate);
					const weekDiff = d3.timeWeek.count(startDate,latestDate);
					const dayDiff = d3.timeDay.count(startDate,latestDate);
	
					if(dayDiff == 0){
						self.groupBy = 'hour';
					}else if(dayDiff <= 7) {
						self.groupBy = 'day';
					}else if(dayDiff <= self.freeRangeMaxBars) {
						self.groupBy = 'date';
					} else if(weekDiff <= self.freeRangeMaxBars) {
						self.groupBy = 'week';
					} else if(monthDiff <= self.freeRangeMaxBars) {
						self.groupBy = 'month';
					} else{
						self.groupBy = 'year';
					}
	
			} else {
				switch(self.renderTimeByMode){
					case 'day':
						self.groupBy = 'hour';
						break;
					case 'week':
						self.groupBy = 'day';
						break;
					case 'month':
						self.groupBy = 'date';
						break;
					case 'year':
						self.groupBy = 'month';
						break;
					case 'all':
					default:
						self.groupBy = 'year';
						break;
				}
			}
		}


	}

	updateData(data){
		super.updateData(data);

		const self = this;


		if(self.supportCrData){

			self.updateGroupBy();



			const group = [];
			for (const date in data) {
				let start_time = 0;
				

				let dat = data[date];

				Object.keys(dat).forEach(m => {
					const to_push = {};

					const d = dat[m];



					to_push[self.meta] = m;
					to_push.date = date;
					to_push.start_time = FloatToTime(start_time);
					to_push.total_hours = MinsToString( dat[m] / 60 );

					start_time = FloatToTime( TimeToFloat(start_time) + TimeToFloat(to_push.total_hours) );


					group.push(to_push);

				})

				
			}
	
			self.rawData = group;
			self.frontData = self.rawData;


		} else {
			self.rawData = self._preData;
			self.frontData = self.rawData;

			self.updateGroupBy();
		}

	}

	updateDomain(){
		super.updateDomain();

		const self = this;

		const timeTicks = self.timeTicks;

		Object.keys(self.domain).forEach(ax => {
			switch(ax) {
				case 'x':
					self.domain[ax] = timeTicks;
					break;
				case 'S':
				case 'y':
					const offset = d3.min(
						self.frontData.filter(dat=>dat.entries.length),
						date => d3.min(
							date.entries,
							d => TimeToFloat(d.start_time))
					);

					self.domain[ax] = [
						0,
						d3.max(
							self.frontData.filter(dat=>dat.entries.length),
							date => {
								return d3.max(
									[
										...date.entries,
										{
											total_hours: FloatToTime( self.groupByDomain[self.groupBy][1] ),
											start_time: TimeToFloat(offset)
										}
								],
									(d,i) => {

										return Math.ceil(
											TimeToFloat(d.total_hours) + (TimeToFloat(d.start_time) - offset)
										)
									}
								)
							}
						)
					];

					if(ax == 'S'){
						self.domain[ax][0] += offset;
						self.domain[ax][1] += offset;
					}
					break;
			}
		});
	}

	updateCanvas() {
		super.updateCanvas();
		const self = this;
		self.canvas = CHART_CANVAS;
	}

	updateRange() {
		super.updateRange();

		const self = this;

		Object.keys(self.range).forEach(ax => {
			switch(ax) {
				case 'T':
				case 'x':
					self.range[ax] = [
						0,
						d3.max([
							self.canvas.w,
							self.startDate ? self.panoramaWidth : self.canvas.w,
						])
					];
					break;
				case 'S':
					self.range[ax] = [0,self.canvas.h];
					break;
				case 'y':
					self.range[ax] = [self.canvas.h,0];
					break;
			}
		});

	}

	updateScale(){
		super.updateScale();

		const self = this;

		// Object.keys(self.scale).forEach(ax => {
		// 	switch(ax) {
		// 	}
		// });

	}
	
	axis(ax,isGrid) {
		const domain = this.domain;
		const self = this;
		switch(ax){
			case 'y':
				return d3.axisLeft(self.scale[ax])
					.tickFormat(d => (
						( self.groupBy == 'hour' )
							? `${Math.floor(d * 60)}m`
							// ? `${FloatToTime(d)}` // @offsetBarToActualStartMinute
							: d
					))
					// .tickValues(
					// 	d3.range(
					// 		domain[ax][0],
					// 		domain[ax][1] + 1,
					// 	(
					// 		self.groupBy == 'year'
					// 			? self.groupByDomain.month[1]
					// 		: self.groupBy == 'month'
					// 			? self.groupByDomain.week[1]
					// 		: self.groupBy == 'week'
					// 			? self.groupByDomain.date[1]
					// 		: self.groupBy == 'hour'
					// 			? .25
					// 		: 1
					// 	))
					// )
					.tickSize( isGrid ? self.canvas.w : 6)
					;
			case 'x':

				return d3.axisBottom(self.scale[ax])
					.tickValues(domain['x'])
					// .tickFormat((d,i,dat) => {
					// 	if(
					// 		!self.startDate
					// 		|| (
					// 			self.startDate
					// 			&& (
					// 				dat.length <= TTChart.freeRangeMaxBars
					// 				|| (
					// 					dat.length > TTChart.freeRangeMaxBars
					// 					&& i % (TTChart.freeRangeMaxBars * 2) == 0
					// 				)
					// 			)
					// 		)
					// 	) {
					// 		return self.prettyDate(d);
					// 	} else {
					// 		return  '';
					// 	}
					// })
					.tickFormat((d,i) => self.prettyDate([d]))
					;
		}

	}

	get defs(){
		return this.svg.select('defs').size() ?
			this.svg.select('defs') :
			this.svg.append('defs')
	}

	get clipMask(){
		return this.defs.select(`clipPath#${this.instanceId}-clip-mask`).size() ?
			this.defs.select(`clipPath#${this.instanceId}-clip-mask`) :
			this.defs.append('clipPath')
				.attr('id',`${this.instanceId}-clip-mask`)
	}

	get panoramaClipGroup() {

		return this.svg.select('g.panorama-clip-group').size() ?
			this.svg.select('g.panorama-clip-group') :
			this.svg.append('g')
				.attr('class','panorama-clip-group')
	}

	get panorama() {

		return this.panoramaClipGroup.select('g.panorama').size() ?
			this.panoramaClipGroup.select('g.panorama') :
			this.panoramaClipGroup.append('g')
				.attr('class','panorama')
	}

	get panoramaHitSpace(){

		return this.panorama.select('rect.panorama-hit-space').size() ?
			this.panorama.select('rect.panorama-hit-space') :
			this.panorama.insert('rect')
				.attr('class','panorama-hit-space')
				.attr('fill','currentColor')
				.attr('fill-opacity',0)
				// .attr('fill-opacity',.1)

	}

	get gShapes(){
		return this.panorama.select('g.shapes').size() ?
		this.panorama.select('g.shapes') :
		this.panorama.append('g')
			.attr('class','shapes');
	}


	get clipMaskShape() {
		return this.clipMask.select('rect').size() ?
			this.clipMask.select('rect') :
			this.clipMask.append('rect')
				// .attr('fill','black')

	}


	get gTimeBars() {
		const self = this;
		const data = self.frontData;
		return self.gShapes.selectAll('g.time-bars')
			.data(data,d => [d.date,d.time,d.entries.length]);

	}

	get bar() {
		const self = this;
		return self.gTimeBars.selectAll('rect.shape-bar')
			.data(d=> d.entries);
	}

	get barEnter(){
		return this.bar.enter()
	}

	get yAxis() {
		// too small for ticks so no need for axis callback for now
		return this.svg.select('g.axis-y').size() ?
		this.svg.select('g.axis-y') :
		this.svg.append('g')
			.attr('class','axis axis-y');

	}

	get xAxis() {
		// too small for ticks so no need for axis callback for now
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

	get panoramaWidth() {
		return (this.domain.x.length + .5) * BAR_BANDWIDTH;  // + .5 for outerPadding
	}

	get canScroll() {
		return this.canvas.w < this.panoramaWidth;
	}
	
	get zoomContainer() {
		return this.container.select('div.chart-zoom').size() ?
		this.container.select('div.chart-zoom') :
		this.container.append('div')
			.attr('class','chart-zoom flex-xs align-items-center position-absolute offset-0-x offset-0-bottom')
			.html(
				`<span>-</span>
				<input class="margin-small-x flex-1-1" type="range" step="1" max="${Object.keys(TTChart.zoomToMode).length - 1}" min="0" />
				<span>+</span>`
			)

		
	}

	get zoomSlider() {
		// too small for ticks so no need for axis callback for now
		return this.zoomContainer.select('input');
	}

	dragstart(e){
		d3.select(this).raise();
		d3.select(this)
			.style('cursor', 'grabbing')

		panorama_drag_offset = e.x;

		if(d3.select(this).attr('transform')) {

			var match = d3.select(this).attr('transform')
				.match(/translate\(([^,]+),[^)]+\)/)
				;
  
			if (match && match.length > 1) {
				panorama_current_x = parseFloat(match[1]);
			}
		}
	}
	dragging(e,d){
		const offset = e.x - panorama_drag_offset;
		
		const x = panorama_current_x + offset;
		
		if(
			x < 0
			&& x >= (panoramaMax * -1)
		){
			d3.select(this)
				.attr('transform',`translate(${x},0)`);
		}
	}
	dragend(e){
		d3.select(this)
			.style('cursor', 'grab')
		
	}
	
	init() {
		super.init();
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

		self.panoramaClipGroup
			.remove()
			;

		self.clipMaskShape
			.attr('width',self.canvas.w)
			.attr('height',self.canvas.h + self.canvas.marginBottom)
			.attr('x',self.canvas.marginLeft)
			.attr('y',self.canvas.marginTop)
			;
	



		if(self.canScroll) {
			//hit space for drag
			self.panorama
				.style('cursor', 'grab')
				.call(
					d3.drag()
					.on('start',self.dragstart)
					.on('drag',self.dragging)
					.on('end',self.dragend)
				)
				;
			self.panoramaHitSpace
				.attr('x',self.canvas.marginLeft)
				.attr('y',self.canvas.marginTop)
				.attr('width',self.range['x'][1])
				.attr('height',self.canvas.h)
				;

			panoramaMax = self.range['x'][1] - self.canvas.w;


		self.svg
			.classed("margin-bottom", this.startDate)
			;
	

			// self.zoomSlider
			// 	.attr('value',TTChart.zoomToMode.indexOf(self.timeByMode))
			// 	// .attr('min',0) //@TODO parse dis
			// 	.on('change',(e) => {
			// 		self.render({
			// 			data: self._preData,
			// 			timeByMode: TTChart.zoomToMode[e.target.value]
			// 		})
			// 	})
			// 	;

		} else {
			// self.zoomSlider.remove();
		}
		
		//axis + grid
		self.yAxis
			.call(self.axis('y',true))
			.attr('font-size','10')
			// .style('color','inherit')
			// .style('font-weight','inherit')
			.attr('transform',
				`translate(${ self.canvas.w + self.canvas.marginLeft }, ${self.canvas.marginTop} )`
			)
			.call(gA => {
				gA.selectAll('.domain')
					.attr('opacity', 0)
					;
				gA.selectAll('.tick line')
					.attr('stroke', GRID_TICK_COLOR)
					;
				gA.selectAll('.tick text')
					.attr('transform', 
						`translate(-16,0)`
					)
					;
			})
			;
		// self.xAxis.html('')

		self.xFauxAxis
			.attr('stroke','currentColor')
			.attr('opacity',.5)
			.attr('x1',0) 
			.attr('y1',self.canvas.h)
			.attr('x2',self.range['x'][1]) 
			.attr('y2',self.canvas.h)
			;

		self.xAxis
			.call(self.axis('x'))
			.attr('font-size','10')
			// .style('color','inherit')
			// .style('font-weight','inherit')
			.style('text-transform','uppercase')
			.attr('transform',
				`translate(0, ${self.canvas.h})`
			)
			.call(gA => {
				gA.selectAll('.domain')
					.attr('opacity', 0)
					;
				gA.selectAll('.tick')
					.style('color','inherit')
					.style('font-weight','inherit')
					.filter( tck => self.checkTickBound([Today,Today.getHours()],tck))
					.style('color', TODAY_TICK_COLOR)
					.style('font-weight', 'bolder')
					;
				gA.selectAll('.tick line')
					.attr('opacity', 0)
					;
				gA.selectAll('.tick text')
					.attr('text-anchor', 'start')
					.attr('alignment-baseline', 'top')
					.attr('transform', 'rotate(45)' )
					;
			})
			;

		// // self.yAxis.html('')
		// self.yAxis
		// 	.call(self.axis('y'))
		// 	.attr('font-size','12')
		// 	// .style('color','inherit')
		// 	// .style('font-weight','inherit')
		// 	.attr('transform',`translate(
		// 		${ self.canvas.marginLeft }, ${self.canvas.marginTop})`
		// 	)
		// 	.call(gA => {
		// 		gA.selectAll('.domain')
		// 			.attr('opacity', 0)
		// 			;
		// 		gA.selectAll('.tick line')
		// 			.attr('opacity', 0)
		// 			;
		// 	})
		// 	;

		self.panoramaClipGroup
			.attr('clip-path',`url(#${self.instanceId}-clip-mask)`)
			;

		self.gShapes
			.attr('transform',`translate(
				${ self.canvas.marginLeft }, ${
					self.canvas.marginTop
				})`
			)
			;

		self.gTimeBars
			.exit()
			.remove()
			;

		self.gTimeBars
			.enter()
			.append('g')
			.attr('class',d => {
				
				return `time-bars time-${d.date}`;
			})
		self.gTimeBars.merge(self.gTimeBars.enter())
			.attr('transform',d =>{
				const offset = self.scale['x'](DateToObj([d.date,d.time])) + ( (self.scale['x'].bandwidth() - self.barBandwidth) * .5 );


				return `translate(${offset},0)`
			})
			;

			
		self.bar
			.exit()
			.remove()
			;

		self.bar
			.enter()
			.append('rect')
			.attr('class','shape-bar')
			// .style('cursor','auto')
			;
			
		self.bar.merge(self.bar.enter())
			.attr('data-toggle-tooltip-hover',true)
			.attr('data-tooltip-placement','top')
			.attr('fill',d => self.scale['color'](d[self.meta]))
			.attr('data-tooltip-content',d => {

				return `<div class="padding-small">
				<h6 class="color-neutral no-margin-top">
					${
						( self.groupBy == 'day' ) ? DateToString([d.date],'%A')+' &ndash; ' : ''
					}${self.prettyDate(
						[
							d.date,
							self.groupBy == 'hour' ? d.__og_start_time : null
						],
						{
							hour: '%B %e, %Y - %-I:%M%p',
							day: '%B %e, %Y',
							date: '%B %e, %Y',
							week: '%B %e, %Y',
							weekLast: '%B %e, %Y',
							month: '%B %Y',
							year: '%Y',
						}
					)}
				</h6>
				<i class="margin-small-right legend" style="background-color: ${self.scale['color'](d[self.meta])}"></i> ${d[self.meta]} <br>
				<i class="margin-small-right symbol symbol-timer"></i> Total time: ${d.__og_total_hours ? d.__og_total_hours : d.total_hours} <br>
				</div>`
			
			})
			// .attr('width',self.scale['x'].bandwidth())
			.attr('width', self.barBandwidth)
			.attr('height', (d) => self.canvas.h - self.scale['y']( TimeToFloat(d.total_hours) ))
			.attr('y', (d) => {
				return (
					self.scale['y']( TimeToFloat(d.total_hours)) - self.scale['S']( TimeToFloat(d.start_time) )
				)
			})
			;

	}
}


export default d3Log;