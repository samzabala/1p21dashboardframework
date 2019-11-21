window.jQuery && jQuery.noConflict();
(function($,window){
	//1p21 shit
	var _1p21 = window._1p21 || {};

	//framework shit
	_1p21.fw = _1p21.fw || {};

	//internal shit
	var _ = {};

	$ && ($.trumbowyg.svgPath = '/assets/fonts/icons.svg');
	$ && ($.trumbowyg.hideButtonTexts = true);

	_1p21.fw.lazyLoad = _1p21.fw.lazyLoad || true;

	
	
	_.reverseArray = function(arr) {
	var newArray = [];
	for (var i = arr.length - 1; i >= 0; i--) {
		newArray.push(arr[i]);
	}
	return newArray;
	}


	String.prototype.getFileExtension = function() {
		return this.split('.').pop();
	}
	String.prototype.toCamelCase = function(){

		var str = this;

		return str.replace(/(?:^\w|[A-Z]|\b\w)/g, function(word, index) {
			return index == 0 ? word.toLowerCase() : word.toUpperCase();
		}).replace(/-|\s/g, '');

	}

	//polyifiulls
	if (!Element.prototype.matches) {
		Element.prototype.matches = Element.prototype.msMatchesSelector || 
									Element.prototype.webkitMatchesSelector;
	}
	
	if (!Element.prototype.closest) {
		Element.prototype.closest = function(s) {
			var el = this;
		
			do {
			if (el.matches(s)) return el;
			el = el.parentElement || el.parentNode;
			} while (el !== null && el.nodeType === 1);
			return null;
		};
	}
	
	//maxs

	_.br_vals = {
		xxs: 0,
		xs: parseFloat( getComputedStyle(document.documentElement).getPropertyValue('--br-xs') ) || 600,
		sm: parseFloat( getComputedStyle(document.documentElement).getPropertyValue('--br-sm') ) || 1200,
		md: parseFloat( getComputedStyle(document.documentElement).getPropertyValue('--br-md') ) || 1600,
		lg: 9999999
	};
	_.br_arr = Object.keys(_.br_vals);
	_.br_to_loop =  ['xs','sm','md','lg'];


	_.functions_on_load = [];
	_.functions_on_resize = [];


	_1p21.fw.validateBr = function(breakpoint,mode) {
		mode = mode || 'below'; //below,within,above
		var currIndex = _.br_arr.indexOf(breakpoint);

		switch(mode) {
			case 'below': //max-width
				return window.outerWidth <= _.br_vals[breakpoint];
			case 'within':
				return (
					window.outerWidth <= _.br_vals[breakpoint] //max
				) && (
					window.outerWidth > _.br_vals[ _.br_arr[currIndex - 1] ] //min
				)
			case 'above':
				return (currIndex > 0) ? ( window.outerWidth > _.br_vals[ _.br_arr[currIndex - 1] ] ) : (window.outerWidth > _.br_vals[ _.br_arr[currIndex] ]);
		}
	}


	 _1p21.fw.addEvent = function(parent, evt, selector, handler) {
		parent = parent || selector;
		parent.addEventListener(evt, function(event) {
		  if (event.target.matches(selector + ', ' + selector + ' *')) {
			handler.apply(event.target.closest(selector), arguments);
		  }
		}, false);
	  }

	/*
	Element to slide gets the following CSS:
		max-height: 0;
		opacity: 0;
		overflow: hidden;
		transition: max-height 0.4s ease 0s;
	*/

	/**
	 * Like jQuery's slideDown function - uses CSS3 transitions
	 * @param  {Node} elem Element to show and hide
	 */
	function slideDown(elem) {
		elem.style.display = 'block';
	}

	/**
	 * Slide element up (like jQuery's slideUp)
	 * @param  {Node} elem Element
	 * @return {[type]}      [description]
	 */
	function slideUp(elem) {
		elem.style.display = 'none';
	}

	/**
	 * Call once after timeout
	 * @param  {Number}   seconds  Number of seconds to wait
	 * @param  {Function} callback Callback function
	 */
	function once (seconds, callback) {
		var counter = 0;
		var time = window.setInterval( function () {
			counter++;
			if ( counter >= seconds ) {
				callback();
				window.clearInterval( time );
			}
		}, 400 );
	}

	

	_1p21.fw.getSiblings = function (elem) {

		// Setup siblings array and get the first sibling
		var siblings = [];
		var sibling = elem.parentNode.firstChild;
	
		// Loop through each sibling and push to the array
		while (sibling) {
			if (sibling.nodeType === 1 && sibling !== elem) {
				siblings.push(sibling);
			}
			sibling = sibling.nextSibling
		}
	
		return siblings;
	
	};

	_.palette = ['primary','accent','base','neutral','error','caution','success']

	_1p21.fw.initGrid = function(moduleGrid){
		
		var availablePropetiesParent = [
			'grid-template-rows',
			'grid-template-columns',
			'grid-template-areas',


			'grid-column-start',
			'grid-template-end',
			'grid-template',
			'grid-column-gap',
			'grid-row-gap',
			'justify-items',
			'align-items',
			'justify-content',
			'align-content',
			'place-content',
			'grid-auto-columns',
			'grid-auto-rows',
			'grid-auto-flow',
			'grid'
		];



		var availablePropertiesChildren = [
			'grid-area',

			'grid-column',
			'grid-row',
			
			'grid-column-start',
			'grid-column-end',
			'grid-row-start',
			'grid-row-end',
			'justify-self',
			'align-self',
			'place-self',
		];
		
		function renderProps(modElement,props){

			props.forEach(function(prop){
				// modElement.style[prop.toCamelCase()] = '';
				var propsSet = false;
				var propSetBr = false;
				var smallestStyledBr = null;
				
				//check for breakpointz first
				_.reverseArray(_.br_to_loop).forEach(function(br){
					
					if( modElement.hasAttribute('data-'+prop+'-'+br) && !propsSet) {
						smallestStyledBr = br;
						if( _1p21.fw.validateBr(br,'above') ){
							modElement.style[prop.toCamelCase()] = modElement.getAttribute('data-'+prop+'-'+br)
							propsSet = true;
							propSetBr = true;
						}

					}
				});

				if( modElement.hasAttribute('data-'+prop) && !propsSet ){
				
					//check for all breakpoint
					if(!propsSet && !propSetBr) {
						modElement.style[prop.toCamelCase()] = modElement.getAttribute('data-'+prop)
						propsSet = true;
					}

				}else{
					
					if(
						modElement.style[prop.toCamelCase()] !== null
						&& smallestStyledBr
						&& !_1p21.fw.validateBr(smallestStyledBr,'above')
					){
						modElement.style[prop.toCamelCase()] = null;
					}
				}
				
			}); 
		}

		renderProps(moduleGrid,availablePropetiesParent);
		
		var moduleChildren = Array.from(moduleGrid.children).filter(function(child){
			return child.matches('.module');
		})


		moduleChildren.forEach(function(child){
			renderProps(child,availablePropertiesChildren);
		});
		
	}

	// //will run. right away. boi
	// //lazyload
	_1p21.fw.loadImages = function() {
		//css images
		// images
		var toLazy = document.querySelectorAll('*[data-src]');

		toLazy.forEach(function(img){

			var imgSrc = img.getAttribute('data-src'),
				imgSrcset = img.getAttribute('data-srcset');

			if(img.matches('img') || img.closest('picture').length) {

				if(imgSrc.getFileExtension() == 'svg' ){
					var imgID = img.getAttribute('id') || null;
					var imgClass = img.getAttribute('class') || null;

					fetch(imgSrc)
					.then(response => response.text())
					.then((markup)=> {

						var parser = new DOMParser();
						var doc = parser.parseFromString(markup, "text/html");

						var svg = doc.querySelector('svg');

							if (typeof imgID !== null) {
								svg.setAttribute('id', imgID);
							}
							if (typeof imgClass !== null) {
								svg.setAttribute('class', imgClass + ' replaced-svg');
							}

							svg.removeAttribute('xmlns:a');
							img.replaceWith(svg);
							

					})
					
				}else {
					(img.hasAttribute('data-src')) && img.setAttribute('src', imgSrc);
					(img.hasAttribute('data-srcset')) && img.setAttribute('srcset', imgSrcset);
				}
			}else{
				img.style.backgroundImage = 'url(' + imgSrc + ')';
			}
			img.classList.add('lazy-loaded');

		});
		
		document.querySelector('body').classList.add('lazy-initialized');
	}

	function readyGrid(){
		
		var grids = document.querySelectorAll('.module-grid:not(.module-grid-custom)');
		grids.forEach(function(grid){
			_1p21.fw.initGrid(grid);
		});
	}

	_.functions_on_load.push(readyGrid);
	_.functions_on_resize.push(readyGrid);

	window.addEventListener('load',function(){

		_1p21.fw.lazyLoad && _1p21.fw.loadImages();

		_.functions_on_load.forEach(function(fn){
			fn();
		});

		var resizeTimerInternal;
		window.addEventListener('resize', function() {
		
			clearTimeout(resizeTimerInternal)
		
			resizeTimerInternal = setTimeout(function() {
				_.functions_on_resize.forEach(function(fn){
					fn();
				});
			}, 50)
		
		});

		$ && $('.input-trumbowyg:not(.input-trumbowyg-custom)').each(function(){
			$(this).trumbowyg({
				btns: [
					['viewHTML'],
					['strong', 'em',],
					['insertImage'],
					['link'],
					['unorderedList', 'orderedList'],
					['upload'],
					['fullscreen']
				],
				removeformatPasted: true,
				tagsToRemove: ['script']
			});
		});

		_.getTheToggled = function(clicked,selector){
				
			if( clicked.getAttribute('href') ){
				return document.querySelector( clicked.getAttribute('href') );

			}else if( clicked.getAttribute('data-href') ){
				return document.querySelector( clicked.getAttribute('data-href') )
				
			}else{
				var possibleSiblings = clicked.nextElementSibling;

				while (possibleSiblings) {
					if (possibleSiblings.matches(selector)){
						return possibleSiblings;
					}
					possibleSiblings = possibleSiblings.nextElementSibling
				}

				return possibleSiblings;
			}
		};

		
		_1p21.fw.addEvent(document.body,'click','*[data-toggle="accordion"]',function(e){
			e.preventDefault();
			var clicked = e.target;
			var selector = _.getTheToggled(e.target,'.accordion');
			var selectorAncestor = selector.closest('.accordion-group');
			var selectorSiblings = _1p21.fw.getSiblings(selector).filter(function(sibling){
					return sibling.matches('.accordion');
				});
			var clickedSiblings = _1p21.fw.getSiblings(selector).filter(function(sibling){
					return sibling.matches('*[data-toggle="accordion"]');
				})

			if( selector ){
						
				if(
					selector.classList.contains('open')
					&& clicked.classList.contains('open')
				){

					slideUp(selector); 
					clicked.classList.remove('open'); 
					selector.classList.remove('open'); 

				}else{
					
					if(selectorAncestor && !selectorAncestor.matches('.accordion-group-multiple') ) {
						
						selectorSiblings.forEach(function(sibling){
							slideUp(sibling)
							sibling.classList.remove('open');
						});

						clickedSiblings.forEach(function(sibling){
							sibling.classList.remove('open');
						});
					
					}; 

					slideDown(selector); 
					clicked.classList.add('open'); 
					selector.classList.add('open'); 
				}
			}
		});

		_1p21.fw.addEvent(document.body,'click','*[data-toggle="dropdown"]',function(e){
			e.preventDefault();
			var clicked = e.target;
				selector = _.getTheToggled(clicked,'.dropdown');
				console.log(clicked,selector);
				var selectorAncestor = selector.closest('li,.nav-item');


				if( selector ){
					if(
						selector.classList.contains('open')
						&& clicked.classList.contains('open')
					){

						selectorAncestor && selectorAncestor.classList.remove('open');
	
						slideUp(selector);  
						clicked.classList.remove('open'); 
						selector.classList.remove('open'); 

					}else{

						if (selectorAncestor ){
							var selectorUncles = _1p21.fw.getSiblings(selectorAncestor)
								.filter(function(sibling){
									return sibling.matches('li,.nav-item');
								});
								selectorUncles.forEach(function(sibling){
									slideUp( sibling.querySelector('.dropdown') );
									sibling.querySelector('.dropdown').classList.remove('open');
									sibling.querySelector('*[data-toggle="dropdown"]').classList.remove('open');
								});
						}


						slideDown(selector); 
						clicked.classList.add('open'); 
						selector.classList.add('open'); 
					}
				}
		})

		// btn group
		_1p21.fw.addEvent(document.body,'click','.btn-group-toggle .btn',function(e){
			
			e.preventDefault();
			var clicked = e.target;
			var selectorSiblings = _1p21.fw.getSiblings(clicked);

			var resetter = _1p21.fw.getSiblings(clicked).filter(function(butt){
				return butt.classList.contains('btn-toggle-reset');
			});

			resetter.forEach(function(butt){
				butt.classList.remove('active');
			})

			if(
				(!clicked.closest('.btn-group-toggle-multiple'))
				|| (clicked.classList.contains('btn-toggle-reset'))
			){
				selectorSiblings.forEach(function(sibling){
					sibling.classList.remove('active')
				})
				clicked.classList.add('active');
			}else{
				clicked.classList.toggle('active');
			}
		})

		//tooltip
		_1p21.fw.addEvent(document.body,'click','*[data-toggle="tooltip-click"]',function(e){
			e.preventDefault();
			_1p21.fw.createToolTip(e.target);
		});
			
			_1p21.fw.addEvent(document.body,'mouseenter','*[data-toggle="tooltip-hover"]',function(e){
				_1p21.fw.createToolTip(this);
			});

			_1p21.fw.addEvent(document.body,'mouseleave','*[data-toggle="tooltip-hover"]',function(e){
				_1p21.fw.destroyToolTip();
			});

		_1p21.fw.createToolTip = function(triggerer) {
			if(triggerer) {
				_1p21.fw.destroyToolTip();
				var arr =  {
					placement: triggerer.getAttribute('data-tooltip-placement') || null,
					badge: triggerer.getAttribute('data-tooltip-badge') || null,
					badgeBg: triggerer.getAttribute('data-tooltip-badge-background') || null,
					badgeSize: triggerer.getAttribute('data-tooltip-badge-size') || null,
					content: triggerer.getAttribute('data-tooltip-content') || null,
					classes: triggerer.getAttribute('data-tooltip-classes') || null,
					centerX: triggerer.getAttribute('data-tooltip-center-x') || null,
					centerY: triggerer.getAttribute('data-tooltip-center-y') || null,
				};

				var defaults = {

					placement: 'left',
					badge: false,
					badgeBg: 'primary',
					badgeSize: '',
					classes: '',
					content: '<em class="color-neutral tooltip-placeholder">No info...</em>',
					centerX: false,
					centerY: false,

				};
				
				var args = defaults;
				for (var prop in arr) {
					if(arr.hasOwnProperty(prop) && arr[prop] !== '' && arr[prop] !== null) {
						// Push each value from `obj` into `extended`
						args[prop] = arr[prop];
					}
				}

				var toolTip = document.createElement('div');
				document.querySelector('body').appendChild(toolTip);
				
				toolTip.className = 'tooltip tooltip-'+ args.placement+' '+ args.classes;

				var ttHtml = ''


				if( args.badge ) {
					ttHtml += '<span class="badge tooltip-badge';
					if(args.badgeSize == 'small' || args.badgeSize == 'large' ) {
						ttHtml += ' badge-'+args.badgeSize;
					}
					if(args.badgeBg) {
						if(_.palette.includes(args.badgeBg)) {
							ttHtml += ' badge-'+args.badgeBg;
						}else{

							ttHtml += '" style="background-color:'+args.badgeBg+';';
						}
					}
					
					ttHtml += '"></span>'
				}
				ttHtml += args.content;
				ttHtml += '</div>';

				toolTip.innerHTML += ttHtml;


				// var tooltip = $('body').children('.tooltip').first();
					toolTip.classList.add('open');

				var toolPoint = parseFloat(window.getComputedStyle( toolTip, ':before').getPropertyValue('width'));
					toolPoint = Math.sqrt((toolPoint * toolPoint) * 2) * .5;
					isNaN(toolPoint) && (toolPoint = 15);



					var triggererProps = {
						top: triggerer.getBoundingClientRect().top + window.pageYOffset,
						left: triggerer.getBoundingClientRect().left + window.pageXOffset,
						height: triggerer.getBoundingClientRect().height,
						width: triggerer.getBoundingClientRect().width,
					};

					var toolTipProps = {
						height: toolTip.getBoundingClientRect().height,
						width: toolTip.getBoundingClientRect().width,
					};

					var toolTipBadge = toolTip.querySelector('.tooltip-badge');

					var pos = {
						x: function(){
							var toReturn = triggererProps.left + ((triggererProps.width * .5) - (toolTipProps.width * .5));
							var offset = 0;

							if(args.centerX){

								switch(args.placement){
									case 'right':
										toReturn = triggererProps.left + ( triggererProps.width * .5) + toolPoint;
											break;
									case 'left':
										toReturn = triggererProps.left - (toolTipProps.width + toolPoint) + (triggererProps.width * .5);
										break;
								}
								
							}else{

								switch(args.placement){
									case 'right':
										toReturn = triggererProps.left + triggererProps.width + toolPoint;
										break;
									case 'left':
										toReturn = triggererProps.left - (toolTipProps.width + toolPoint);
										break;
								}

							}

							if(
								( toolTipBadge )
								&& (
									(
										args.placement == 'left'
										|| args.placement == 'right'
									)
								)
							) {

								offset = (args.placement == 'left' ) ? (toolTipBadge.getBoundingClientRect().width * -.5) : toolTipBadge.getBoundingClientRect().width * .5;
							}
							

							toReturn += offset;
							
							return toReturn;
						},
						y: function(){
							var toReturn = (triggererProps.top + (triggererProps.height * .5)) - (toolTipProps.height * .5); // left and right
							var offset = 0;
							if(args.centerY){
								
								switch(args.placement){
									case 'top':
										toReturn = (triggererProps.top - (toolTipProps.height + toolPoint) + (triggererProps.height * .5));
										break;
									case 'bottom':
										toReturn = (triggererProps.top + ((triggererProps.height * .5)) + toolPoint);
										break;
								}

							}else{
								
								switch(args.placement){
									case 'top':
										toReturn = triggererProps.top - (toolTipProps.height + toolPoint);
										break;
									case 'bottom':
										toReturn = triggererProps.top + (triggererProps.height + toolPoint);
										break;
								}
							}

							if(
								( toolTipBadge )
								&& (
									args.placement == 'top'
									|| args.placement == 'bottom'
								)
							) {
								offset = (args.placement == 'top' ) ? (toolTipBadge.getBoundingClientRect().width * -.5) : toolTipBadge.getBoundingClientRect().width * .5;
							}

							toReturn += offset;

							return toReturn;
						}
					}

				toolTip.style.top = pos.y()+'px';
				toolTip.style.left = pos.x()+'px';
				_1p21.fw.activeToolTipTrigger = triggerer

			}

		}

		_1p21.fw.destroyToolTip = function(){
			var toolTip = document.querySelector('body > .tooltip');
			toolTip && toolTip.parentNode.removeChild(toolTip);
		}

		document.querySelector('body').classList.remove('body-loading');
		document.querySelector('body').classList.add('body-loaded');

	})

	//put boi on global
	window._1p21 = _1p21;


}(window.jQuery, window));