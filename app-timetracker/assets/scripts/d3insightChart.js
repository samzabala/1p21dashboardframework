import * as d3 from 'd3';

//color palette for dots
const COLOR_PALETTE = {
	min: 'var(--fw-color-secondary)',
	max: 'var(--fw-color-success)',
	line: 'var(--fw-color-neutral)'
}

//size of the chart 
const CHART_CANVAS = {
	w: 300,
	h: 30,
	marginX: 16,
	marginY: 5
}
//size of the boops
const DOT_SIZE = 8;

//transition
const TRANSITION_DURATION = 100;



class d3insightChart {

	constructor(element) {
		if(!element) return false;
		const self = this;
		self.element = element;
	}

	get container(){
		return d3.select(this.element);
	}

	get min(){
		return this.element.getAttribute('data-td-min');
	}

	get max(){
		return this.element.getAttribute('data-td-max');
	}

	get data(){
		const self = this;
		return [{
			name: 'entry',
			min: self.min,
			max: self.max,
		}]
	}

	get totalMin(){
		return this.element.getAttribute('data-td-totalMin');
	}

	get totalMax(){
		return this.element.getAttribute('data-td-totalMax');
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

	get axis(){
		return d3.axisBottom(this.scale)
			.tickValues(this.domain)
			.tickSize(CHART_CANVAS.h * .125)
	}

	get gAxis(){
		// too small for ticks so no need for axis callback for now
		return this.svg.select('g.axis').size() ?
		this.svg.select('g.axis') :
		this.svg.append('g')
			.attr('class','axis');
	}

	get line(){
		return this.gShapes.selectAll('line')
			.data(this.data,d=>d.name)
			;
	}

	get lineEnter(){
		return this.line.enter();
	}

	get minDot(){
		return this.gShapes.selectAll('circle.min-dot')
			.data(this.data,d=>d.name);
	}

	get minDotEnter(){
		return this.minDot.enter();
	}

	get maxDot(){
		return this.gShapes.selectAll('circle.max-dot')
			.data(this.data,d=>d.name);
	}

	get maxDotEnter(){
		return this.maxDot.enter();
	}

	get domain(){
		return [this.totalMin,this.totalMax];
	}

	get scale(){
		return d3.scaleLinear()
			.domain(this.domain)
			.range(this.range);
	}

	get range(){
		return [0,CHART_CANVAS.w];
	}

	render(){
		const self = this;

		this.container
			.html('')
			.append('svg');

		this.svg
			.attr('viewBox',`0 0 ${CHART_CANVAS.w + (CHART_CANVAS.marginX * 2)} ${CHART_CANVAS.h + (CHART_CANVAS.marginY * 2)}` )
			.attr('width',
				`${CHART_CANVAS.w + (CHART_CANVAS.marginX * 2)}`
			) 
			.attr('height',
				`${CHART_CANVAS.h + (CHART_CANVAS.marginY * 2)}`
			) 
			.attr('font-size','1em')
			.attr('font-family','inherit')
			.style('text-transform','uppercase')
			.style('color','inherit')
			.style('vertical-align','middle')
			.style('display','inline-block')
			.style('line-height',1)
			.style('margin','auto')
			.style('width','auto')
			.attr('version','1.1')
			.attr('x','0px')
			.attr('y','0px')
			.attr("preserveAspectRatio", "xMidYMid meet") //responsive
			.attr('xml:space','preserve');

		this.gAxis
			.call(this.axis)
			.attr('font-size','12')
			.attr('transform',`translate(
				${ CHART_CANVAS.marginX }, ${
					CHART_CANVAS.marginY + (CHART_CANVAS.h * .5 )
				})`
			)
			// .call(gA => gA.select('.domain').remove())
			.call(gA => {
				gA.selectAll('.tick line')
					.attr('transform',`translate(0,${CHART_CANVAS.h * -.125})`)
					;
			})
			;

		this.gShapes
			.attr('transform',`translate(
				${ CHART_CANVAS.marginX }, ${
					CHART_CANVAS.marginY + (CHART_CANVAS.h * .5 )
				})`
			)
			;

		this.line
			.exit()
			.remove()
			;

		this.lineEnter
			.append('line')
			.attr('stroke-width',DOT_SIZE * .5)
			.attr('stroke',COLOR_PALETTE.line)
			.attr('x1',0)
			.attr('x2',0)
			;

		this.line.merge(this.lineEnter)
			.transition()
			.duration(TRANSITION_DURATION)
			.attr('x1',d=> self.scale(d.min))
			.attr('x2',d=> self.scale(d.max))
			;

		this.minDot
			.exit()
			.remove()
			;

		this.minDotEnter
			.append('circle')
			.attr('class','min-dot')
			.attr('fill',COLOR_PALETTE.min)
			.attr('r',0)
			.attr('cx',0)
			.attr('cy',0)
			;

		this.minDot.merge(this.minDotEnter)
			.attr('data-toggle-tooltip-hover',true)
			.attr('data-tooltip-placement','top')
			.attr('data-tooltip-content',d =>
				`Min: ${d.min} ${d.min == 1 ? 'hr' : 'hrs'}`
			)
			.transition()
			.duration(TRANSITION_DURATION)
			.attr('r',DOT_SIZE)
			.attr('cx',d => self.scale(d.min))

			
		this.maxDotEnter
			.append('circle')
			.attr('class','max-dot')
			.attr('fill',COLOR_PALETTE.max)
			.attr('r',0)
			.attr('cx',0)
			.attr('cy',0)
			;

		this.maxDot.merge(this.maxDotEnter)
			.attr('data-toggle-tooltip-hover',true)
			.attr('data-tooltip-placement','top')
			.attr('data-tooltip-content',d =>
				`Max: ${d.max} ${d.max == 1 ? 'hr' : 'hrs'}`
			)
			.transition()
			.duration(TRANSITION_DURATION)
			.attr('r',DOT_SIZE)
			.attr('cx',d => self.scale(d.max))
			;
			
	}
}


export default d3insightChart;