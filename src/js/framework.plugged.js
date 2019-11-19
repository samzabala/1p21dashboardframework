jQuery.noConflict();
(function($,window){
	var _1p21 = window._1p21 || {};

	_1p21.lazyLoad = _1p21.lazyLoad || true;

	var _ = {};

	if(!$) {
		throw new Error('jQuery not found bro, what did you do?');
	}

	if(!$.trumbowyg) {
		throw new Error('Trumbowyg is not included. woa boi');
	}



	$.trumbowyg.svgPath = '/assets/fonts/icons.svg';
	$.trumbowyg.hideButtonTexts = true;

	// console.log('init',$.fn.trumbowyg.prototype);
	function reverseArray(arr) {
	var newArray = [];
	for (var i = arr.length - 1; i >= 0; i--) {
		newArray.push(arr[i]);
	}
	return newArray;
	}


	String.prototype.getFileExtension = function() {
		return this.split('.').pop();
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

	_1p21.validateBr = function(breakpoint,mode) {
		mode = mode || 'below'; //below,within,above

		var currIndex = _.br_arr.indexOf(breakpoint);

		console.log(breakpoint,'prev',_.br_vals[ _.br_arr[currIndex - 1] ]);

		switch(mode) {
			case 'below':
				return window.innerWidth <= _.br_vals[breakpoint];
				break;
			case 'within':
				return (
					window.innerWidth <= _.br_vals[breakpoint]
				) && (
					window.innerWidth > _.br_vals[ _.br_arr[currIndex - 1] ]
				)
				break;
			case 'above':
				return window.innerWidth > _.br_vals[ _.br_arr[currIndex - 1] ];
				break;
		}
		

	}

	_.functions_on_load = [];
	_.functions_on_resize = [];

	_.palette = ['primary','accent','base','neutral','error','caution','success']

	_1p21.initGrid = function(moduleGrid){
		console.log('grid bitch is running');
		

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
				var propsSet = false;
				
				//check for breakpointz first
				reverseArray(_.br_arr).forEach(function(br){
					
					if( modElement.data(prop+'-'+br) && !propsSet ) {
						if( _1p21.validateBr(br,'below') ){
							console.log('i was here',br);
							modElement.css(prop, modElement.data(prop+'-'+br));
							propsSet = true;
						}

					}
				})
	
				if(modElement.data(prop) && !propsSet) {
					
					modElement.css(prop, modElement.data(prop))
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
	_1p21.loadImages = function() {
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


	function readyGrid(){

		$('.module-grid:not(.module-grid-custom)').each(function(){
			_1p21.initGrid($(this));
		});
	}
	_.functions_on_load.push(readyGrid);
	_.functions_on_resize.push(readyGrid);

	$(window).load(function(){

		_1p21.lazyLoad && _1p21.loadImages();

		//toggles
		/*
		accordion
		modal
		
		*/

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


		$('.input-trumbowyg:not(.input-trumbowyg-custom)').each(function(){
			$(this).trumbowyg({
				// btns: [
				// 	['viewHTML'],
				// 	['undo', 'redo'], // Only supported in Blink browsers
				// 	['formatting'],
				// 	['strong', 'em', 'del'],
				// 	// ['superscript', 'subscript'],
				// 	['link'],
				// 	['insertImage'],
				// 	// ['justifyLeft', 'justifyCenter', 'justifyRight', 'justifyFull'],
				// 	['unorderedList', 'orderedList'],
				// 	['horizontalRule'],
				// 	['removeformat'],
				// 	['fullscreen'],
				// 	['upload']
				// ],
				btns: [
					['viewHTML'],
					['strong', 'em',],
					['insertImage'],
					['link'],
					['unorderedList', 'orderedList'],
					['upload'],
					['fullscreen']
				],
				// prefix: 'input-trumbowyg-',
				// autogrow: true,
				// autogrowOnEnter: true,
				removeformatPasted: true,
				tagsToRemove: ['script']
			});
		})

		// document.querySelectorAll('.input-editor').forEach(function(input){
		// 	var editor = new Quill(input, {
		// 		debug: 'info',
		// 		modules : {
		// 			toolbar: [
		// 				['bold', 'italic', 'underline', 'strike'],        // toggled buttons
		// 				['blockquote', 'code-block'],             // custom button values
		// 				[{ 'list': 'ordered'}, { 'list': 'bullet' }],        // outdent/indent

		// 				[{ 'size': ['small', false, 'large', 'huge'] }],  // custom dropdown
		// 				[{ 'header': [1, 2, 3, 4, 5, 6, false] }],

		// 				[{ 'color': [] }, { 'background': [] }],          // dropdown with defaults from theme
		// 				[{ 'font': [] }],
		// 				[{ 'align': [] }],

		// 				['clean']       
		// 			],
		// 		},
		// 		theme: 'snow'
		// 	});
		// 	_1p21.editors.push(editor);
		// })
	
		$('body').on('click','*[data-toggle="accordion"]',function(e){
			
			e.preventDefault();
			// console.log(e.target);

			var selector =  (function(clicked){
				console.log( clicked );
				if( clicked.attr('href') ){
					return $( clicked.attr('href') );

				}else if( clicked.attr('data-href') ){
					return $( clicked.attr('data-href') )
					
				}else if( clicked.next('.accordion').first().length > 0 ){
					return clicked.next('.accordion').first();

				}else{
					return false;
				}
			}( $(this) ));


			if( selector ){
				console.log(selector)
				
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
			// console.log(e.target);

			var selector =  (function(clicked){
				if( clicked.attr('href') ){
					return $( clicked.attr('href') );

				}else if( clicked.attr('data-href') ){
					return $( clicked.attr('data-href') )
					
				}else if( clicked.next('.dropdown').first().length > 0 ){
					return clicked.next('.dropdown').first();

				}else{
					return false;
				}
			}( $(this) ));

			if( selector ){
				
				if( selector.hasClass('open') && $(this).hasClass('open') ){

					selector.slideUp(); 
					$(this).closest('li , .nav-item').removeClass('open'); 
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


		$('body').on('click','.btn-group-toggle .btn',function(e){
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


		_1p21.createToolTip = function(triggerer) {
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
				
				var args = defaults;
				for (var prop in arr) {
					if(arr.hasOwnProperty(prop) && arr[prop]) {
						// Push each value from `obj` into `extended`
						args[prop] = arr[prop];
					}
				}

				_1p21.destroyToolTip();


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

		_1p21.destroyToolTip = function(){
			$('body').children('.tooltip').hide().remove();
		}



		$('body').on('click','*[data-toggle="tooltip-click"]',function(e){
			var self = $(this);
			_1p21.createToolTip(self);
			
		});



		$('body').on('mouseenter','*[data-toggle="tooltip-hover"]',function(e){
			var self = $(this);

			_1p21.createToolTip(self);

			
		});

		$('body').on('mouseleave','*[data-toggle="tooltip-hover"]',function(e){
			var self = $(this);
			_1p21.destroyToolTip();
		});




		$('body').removeClass('body-loading').addClass('body-loaded');

	})



	//put boi on global
	window._1p21 = _1p21;


}(jQuery,window));