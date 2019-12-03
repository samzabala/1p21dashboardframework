window.jQuery && jQuery.noConflict();
(function($,window){
	//1p21 shit
	var _1p21 = window._1p21 || {};

	//framework shit
	_1p21.fw = _1p21.fw || {};

	//internal shit
	var _ = {};

	_1p21.fw.lazyLoad = _1p21.fw.lazyLoad || true;

	var _ = {};

	if(!$) {
		throw new Error('jQuery not found bro, what did you do?');
	}

	if(!$.trumbowyg) {
		throw new Error('Trumbowyg is not included. woa boi');
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


	$.trumbowyg.svgPath = '/assets/fonts/icons.svg';
	$.trumbowyg.hideButtonTexts = true;

	// console.log('init',$.fn.trumbowyg.prototype);
	_.reverseArray = function(arr) {
		var newArray = [];
		for (var i = arr.length - 1; i >= 0; i--) {
			newArray.push(arr[i]);
		}
		return newArray;
	}

	_.parseArgs = function(arr,defaults) {
		var args = defaults;
		for (var prop in arr) {
			if(arr.hasOwnProperty(prop) && arr[prop] !== null) {
				// Push each value from `obj` into `extended`
				args[prop] = arr[prop];
			}
		}

		return args;
	}



	_.getTheToggled = function(clicked,toggleMode){
		toggleMode = toggleMode || null;
		var selector = '.'+toggleMode || null;
				
		if( clicked.attr('href') ){
			return $( clicked.attr('href') );

		}else if( clicked.attr('data-href') ){
			return $( clicked.attr('data-href') )
			
		}else if( clicked.next(selector).first().length > 0 ){
			return clicked.next(selector).first();

		}else if(clicked.closest('[data-toggle="'+toggleMode+'"]').length){
			return _.getTheToggled(clicked.closest('[data-toggle="'+toggleMode+'"]'),toggleMode)
		}else{

			return false;
		}
	};

	_.br_vals = {
		xxs: 0,
		xs: parseFloat( getComputedStyle(document.documentElement).getPropertyValue('--br-xs') ) || 600,
		sm: parseFloat( getComputedStyle(document.documentElement).getPropertyValue('--br-sm') ) || 1200,
		md: parseFloat( getComputedStyle(document.documentElement).getPropertyValue('--br-md') ) || 1600,
		lg: 9999999
	};
	_.br_arr = Object.keys(_.br_vals);
	// _.br_to_loop =  ['xs','sm','md','lg'];

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

	_.palette = ['primary','accent','base','neutral','error','caution','success']

	_1p21.fw.initGrid = function(moduleGrid){
		console.log('grid bitch is running');
		

		var availablePropetiesParent = [
			'grid-template-columns',
			'grid-template-rows',
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
				var propsSet = false;
				var propSetBr = false;
				var smallestStyledBr = false;
				
				//check for breakpointz first
				_.reverseArray(_.br_arr).forEach(function(br){
					
					
					if( modElement.data(prop+'-'+br) && !propsSet ) {
						smallestStyledBr = br;
						
						if( _1p21.fw.validateBr(br,'above') ){
							
							
							modElement.css(prop, modElement.data(prop+'-'+br));
							
							propsSet = true;
							propSetBr = true;
						}

					}
				});
	
				if(modElement.data(prop) && !propsSet) {

					if(!propsSet && !propSetBr) {
						console.log(modElement.data(prop));
						modElement.css(prop, modElement.data(prop))
						propsSet = true;
					}
				}else{
					if(
						modElement.prop('style')[prop.toCamelCase()] !== null
						&& smallestStyledBr
						&& !_1p21.fw.validateBr(smallestStyledBr,'above')
					){
						modElement.css(prop,'');
					}
				}
			}); 
		}


		renderProps(moduleGrid,availablePropetiesParent);

		//chchchchchildren

		moduleGrid.children('.module').each(function(){
			var moduleChild = $(this);
			renderProps(moduleChild,availablePropertiesChildren);
		});
		
	}



	//will run. right away. boi
	//lazyload
	_1p21.fw.loadImages = function() {
		//css images
		// images
		$('*[data-src]').each(function () {
			// $('img, picture > source')

			var img = $(this),
					imgSrc = $(this).data('src'),
					imgSrcset = $(this).data('srcset');

			if(
				img.is('img')
				|| ( img.is('source') && img.closest('picture').length )
			){
				if(img.attr('data-src').getFileExtension() == 'svg' ){
					var imgID = img.attr('id');
					var imgClass = img.attr('class');
					$.get(imgSrc, function(data) {
						var svg = $(data).find('svg');
						if (typeof imgID !== 'undefined') {
							svg = svg.attr('id', imgID);
						}
						if (typeof imgClass !== 'undefined') {
							svg = svg.attr('class', imgClass + ' replaced-svg');
						}
						svg = svg.removeAttr('xmlns:a');
						img.replaceWith(svg);
					}, 'xml');
				}else {
					(imgSrc !== 'undefined') && img.attr('src', imgSrc);
					(imgSrcset !== 'undefined') && img.attr('srcset', imgSrcset);
				}
			}else{
				// img.css('background-image', 'url(' + imgSrc + ')');
			}

			img.addClass('lazy-loaded');
		});

		//css images
		$('body').addClass('lazy-initialized');
	}



	_1p21.fw.createToolTip = function(triggerer) {
		if(triggerer) {
			var arr =  {
				placement: triggerer.data('tooltip-placement'),
				badge: triggerer.data('tooltip-badge'),
				badgeBg: triggerer.data('tooltip-badge-background'),
				badgeSize: triggerer.data('tooltip-badge-size'),
				content: triggerer.data('tooltip-content'),
				classes: triggerer.data('tooltip-classes'),
				centerX: triggerer.data('tooltip-center-x'),
				centerY: triggerer.data('tooltip-center-y'),
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
			
			var args = _.parseArgs(arr,defaults);

			console.log(args);

			_1p21.fw.destroyToolTip();


			$('body').append(function(){
				var html = '<div class="tooltip tooltip-'+ args.placement+' '+args.classes+'">';
				if( args.badge ) {
					html += '<span class="badge tooltip-badge';
					if(args.badgeSize == 'small' || args.badgeSize == 'large' ) {
						html += ' badge-'+args.badgeSize;
					}
					if(args.badgeBg) {
						if(_.palette.includes(args.badgeBg)) {
							html += ' badge-'+args.badgeBg;
						}else{

							html += '" style="background-color:'+args.badgeBg+';';
						}
					}
					
					html += '"></span>'
				}
				html += args.content
				html += '</div>';

				return html;
			});

			var tooltip = $('body').children('.tooltip').first();
				tooltip.fadeIn()
				tooltip.addClass('open');

			var toolPoint = parseFloat(window.getComputedStyle( tooltip[0], ':before').getPropertyValue('width'));
				toolPoint = Math.sqrt((toolPoint * toolPoint) * 2) * .5;

				isNaN(toolPoint) && (toolPoint = 15);

			var pos = {
				x: function(){
					var toReturn = triggerer.offset().left + ((triggerer.outerWidth() * .5) - (tooltip.outerWidth() * .5));
					var offset = 0;

					if(args.centerX){

						switch(args.placement){
							case 'right':
								toReturn = triggerer.offset().left + ( triggerer.outerWidth() * .5) + toolPoint;
									break;
							case 'left':
								toReturn = triggerer.offset().left - (tooltip.outerWidth() + toolPoint) + (triggerer.outerWidth() * .5);
								break;
						}
						
					}else{

						switch(args.placement){
							case 'right':
								toReturn = triggerer.offset().left + triggerer.outerWidth() + toolPoint;
								break;
							case 'left':
								toReturn = triggerer.offset().left - (tooltip.outerWidth() + toolPoint);
								break;
						}

					}

					if(
						(tooltip.find('.tooltip-badge').first().length > 0)
						&& (
							(
								args.placement == 'left'
								|| args.placement == 'right'
							)
						)
					) {
						offset = (args.placement == 'left' ) ? (tooltip.find('.tooltip-badge').first().outerWidth() * -.5) : tooltip.find('.tooltip-badge').first().outerWidth() * .5;
					}
					

					toReturn += offset;
					
					return toReturn;
				},
				y: function(){
					var toReturn = (triggerer.offset().top + (triggerer.outerHeight() * .5)) - (tooltip.outerHeight() * .5); // left and right
					var offset = 0;
					if(args.centerY){
						
						switch(args.placement){
							case 'top':
								toReturn = (triggerer.offset().top - (tooltip.outerHeight() + toolPoint) + (triggerer.outerHeight() * .5));
								break;
							case 'bottom':
								toReturn = (triggerer.offset().top + ((triggerer.outerHeight() * .5)) + toolPoint);
								break;
						}

					}else{
						
						switch(args.placement){
							case 'top':
								toReturn = triggerer.offset().top - (tooltip.outerHeight() + toolPoint);
								break;
							case 'bottom':
								toReturn = triggerer.offset().top + (triggerer.outerHeight() + toolPoint);
								break;
						}
					}

					if(
						(tooltip.find('.tooltip-badge').first().length > 0)
						&& (
							args.placement == 'top'
							|| args.placement == 'bottom'
						)
					) {
						offset = (args.placement == 'top' ) ? (tooltip.find('.tooltip-badge').first().outerWidth() * -.5) : tooltip.find('.tooltip-badge').first().outerWidth() * .5;
					}

					toReturn += offset;

					return toReturn;
				}
			}

			tooltip.css({
				'top': pos.y(),
				'left': pos.x()
			})

		}

	}

	_1p21.fw.destroyToolTip = function(){
		$('body').children('.tooltip').hide().remove();
	}


	_1p21.fw.createModal = function(triggerer){
		
		var contentWrap =  _.getTheToggled(triggerer,'modal');

		_1p21.fw.destroyModal();

		if(triggerer && contentWrap) {

			var arr =  {
				header: contentWrap.data('modal-title') || triggerer.data('modal-title') || null,
				close: contentWrap.data('modal-close') || triggerer.data('modal-close') || null,
				maxWidth: contentWrap.data('modal-max-width') || triggerer.data('modal-max-width') || null
			};

			var defaults = {
				header: '',
				close: true,
				maxWidth: null
			};
			
			var args = _.parseArgs(arr,defaults);


			var id = contentWrap.attr('id') || 'the-modal';

			$('body').append(function(){
				var html = '<div id="'+id+'" class="modal-wrapper">';
						//overlay 
						html += '<a href="#" class="modal-close-overlay" data-toggle="modal-close"></a>';

						html += '<div class="modal-popup">';

							if(args.header !== '') {
								html += '<div class="modal-header"><h1 class="modal-heading">'+ args.header +'</h1></div>';
							}

							if(args.close !== false) {
								html += '<a href="#" class="modal-close" data-toggle="modal-close"><i class="symbol symbol-close"></i></a>';
							}

							html += '<div class="modal-popup-content">' + contentWrap.html() + '</div>';
						
						
						
						html += '</div>';
				
				html +='</div>';

				return html;
			});

			var modal = $('body').children('.modal-wrapper').first();

				$('body').addClass('body-modal-active');

				if(args.maxWidth) {
					modal.find('.modal-popup').css('max-width',args.maxWidth)
				}

				modal.fadeIn()
				modal.addClass('active');
		}
	}

	_1p21.fw.destroyModal = function(){
		console.log('bye bye modal');
		$('body').children('.modal-wrapper').removeClass('active').fadeOut().remove();
		$('body').removeClass('body-modal-active');
	}



	_.readyGrid = function(){

		$('.module-grid:not(.module-grid-custom)').each(function(){
			_1p21.fw.initGrid($(this));
		});
	}
	_.functions_on_load.push(_.readyGrid);
	_.functions_on_resize.push(_.readyGrid);



	$(window).load(function(){

		_1p21.fw.lazyLoad && _1p21.fw.loadImages();

		_.functions_on_load.forEach(function(fn){
			fn();
		})


		var resizeTimerInternal;
		$(window).on('resize', function() {
		
			clearTimeout(resizeTimerInternal)
		
			resizeTimerInternal = setTimeout(function() {
				_.functions_on_resize.forEach(function(fn){
					fn();
				})
			}, 100)
		
		});
	
		$('body').on('click','*[data-toggle="accordion"]',function(e){
			
			e.preventDefault();
			// console.log(e.target);

			var selector =  _.getTheToggled($(this),'accordion');


			if( selector ){
				
				if( selector.hasClass('open') && $(this).hasClass('open') ){

					selector.slideUp(); 
					$(this).removeClass('open'); 
					selector.removeClass('open'); 
				}else{

					if(selector.closest('.accordion-group:not(.accordion-group-multiple)').length) {
						// console.log('bitch ass');
						selector.siblings('.accordion').slideUp(); 
						$(this).siblings('.open').removeClass('open'); 
						selector.siblings('.accordion').removeClass('open'); 
					}

					selector.slideDown(); 
					$(this).addClass('open'); 
					selector.addClass('open'); 
				}
			}
		});


		$('body').on('click','*[data-toggle="dropdown"]',function(e){
			e.preventDefault();


			var selector =  _.getTheToggled($(this),'dropdown');
			console.log(
				'drodpdown',_.getTheToggled($(this),'dropdown'),"\n",
				'clicked', $(this)
			);

			if( selector ){
				if($(this).data('dropdown-width')) {
					var width = $(this).data('dropdown-width');
					selector.css('width',width);
				}
				
				if( selector.hasClass('open') && $(this).hasClass('open') ){

					selector.slideUp(); 
					$(this).parent().removeClass('open'); 
					$(this).removeClass('open'); 
					selector.removeClass('open'); 
				}else{

					if(selector.closest('li , .nav-item').length) {
						selector.closest('li , .nav-item').siblings('li,.nav-item').find('.dropdown').slideUp(); 
						$(this).closest('li , .nav-item').siblings('li,.nav-item').find('*[data-toggle="dropdown"]').removeClass('open'); 
						selector.closest('li , .nav-item').siblings('li,.nav-item').find('.dropdown').removeClass('open'); 
					}

					selector.slideDown(); 
					$(this).closest('li,.nav-item').addClass('open'); 
					$(this).addClass('open'); 
					selector.addClass('open'); 
				}
			}
			
		});


		$('body').on('click','.btn-group-toggle > .btn',function(e){
			e.preventDefault();

			$(this).siblings('.btn-toggle-reset').removeClass('active');

			if(
				(!$(this).closest('.btn-group-toggle-multiple').length)
				|| ($(this).hasClass('btn-toggle-reset'))
			){
				$(this).siblings('.btn').removeClass('active');
				$(this).addClass('active');
			}else{
				$(this).toggleClass('active');
			}
		});
		


		$('body').on('click','*[data-toggle="tooltip-click"]',function(e){
			e.preventDefault();
			_1p21.fw.createToolTip($(this));
		});

		$('body').on('click','*',function(e){
				e.stopPropagation();
				if( !$(this).is('[data-toggle="tooltip-click"]') && !$(this).is('[data-toggle="tooltip-click"] *')  )
				_1p21.fw.destroyToolTip();
		});


			$('body').on('mouseenter','*[data-toggle="tooltip-hover"]',function(e){
				_1p21.fw.createToolTip($(this));
			});

			$('body').on('mouseleave','*[data-toggle="tooltip-hover"]',function(e){
				_1p21.fw.destroyToolTip();
			});

		$('body').on('click','*[data-toggle="modal-open"]',function(e){
			e.preventDefault();
			_1p21.fw.createModal($(this));
		});

		$('body').on('click','*[data-toggle="modal-close"]',function(e){
			e.preventDefault();
			_1p21.fw.destroyModal();
		});

		$('body').on('click','*[data-toggle="modal"]',function(e){
			($('body > .modal-wrapper').length) ? _1p21.fw.destroyModal() : _1p21.fw.createModal($(this));
		});


		$('.input-trumbowyg:not(.input-trumbowyg-custom)').each(function(){
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
		})

		$('body').removeClass('body-loading').addClass('body-loaded');

	})



	//put boi on global
	window._1p21 = _1p21;


}(jQuery,window));