(function($,Handlebars,window){
	var _1p21 = window._1p21 || {};

	_1p21.lazyLoad = _1p21.lazyLoad || true;

	var _ = {};

	if(!$) {
		throw new Error('jQuery not found bro, what did you do?');
	}



	$.trumbowyg.svgPath = false;

	String.prototype.getFileExtension = function() {
		return this.split('.').pop();
	}

	_.palette = ['primary','accent','base','neutral','error','caution','success']

	_1p21.initLayout = function(selector,arr){
		defaults = {
			//column setup
			modules : [
				{
					//idk setup the grid
					id : '',

				}
			]
		}
	}

	_1p21.initTemplate = function(templateSrc,data,selector) {

		function renderTemplate(sourceMarkup) {
			var template = Handlebars.compile(sourceMarkup);
			console.log(sourceMarkup,template(data));
			$(selector).html(template(data));
		}

		var parsedTemplate = '';
		//IF EXTERNAL FILE
		if(templateSrc.getFileExtension == 'hbs'){
		
			$.ajax({
				url: path, //ex. js/templates/mytemplate.handlebars
				cache: true,
				success: renderTemplate(data)
			  });    
		}else{
			//EMBEDDED
			renderTemplate(templateSrc)
		}

		console.log(parsedTemplate,data);
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

	$(window).load(function(){

		_1p21.lazyLoad && _1p21.loadImages();

		//toggles
		/*
		accordion
		modal
		
		*/

		$('.trumbowyg:not(.trumbowyg-custom)').each(function(){
			$('#trumbowyg-demo').trumbowyg({
				btns: [['strong', 'em',], ['insertImage']],
				prefix: 'trumbowyg-',
				autogrow: true
			});
		})
	
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
						console.log('bitch ass');
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


		_1p21.createToolTip = function(triggerer,arr) {
			if(triggerer) {
				var defaults = {

					placement: 'left',
					badge: false,
					badgeBg: 'primary',
					badgeSize: '',
					content: '',
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

				console.log(args);

				_1p21.destroyToolTip(triggerer,'siblings');


				triggerer.after(function(){
					var html = '<div class="tooltip tooltip-'+ args.placement+'">';
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

				var tooltip = triggerer.next('.tooltip');
					tooltip.fadeIn()
					tooltip.addClass('open');



				var pos = {
					x: function(){
						var toReturn = 0;

						if(args.centerX){
							switch(args.placement){
								case 'top':
								case 'bottom':
										toReturn = triggerer.offset().left + ((triggerer.outerWidth() * .5) - (tooltip.outerWidth() * .5));
									break;
								case 'right':
										toReturn = triggerer.offset().left + ( triggerer.outerWidth() * .5);
										break;
								default: //left
										toReturn = triggerer.offset().left - ( triggerer.outerWidth() * .5) ;
									break;
							}
							
						}else{
							switch(args.placement){
								case 'top':
								case 'bottom':
										toReturn = triggerer.offset().left + ((triggerer.outerWidth() * .5) - (tooltip.outerWidth() * .5));

										break;
								case 'right':
									toReturn = triggerer.offset().left + triggerer.outerWidth();
									break;
								default: //left
									toReturn = triggerer.offset().left - tooltip.outerWidth();
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
							toReturn += (args.placement == 'left' ) ? (tooltip.find('.tooltip-badge').first().outerWidth() * -1) : tooltip.find('.tooltip-badge').first().outerWidth();
						}
						
						return toReturn;
					},
					y: function(){
						var toReturn = 0;
						if(args.centerY){
							
							switch(args.placement){
								case 'top':
										toReturn = (triggerer.offset().top) - tooltip.outerHeight()  + (triggerer.outerHeight() * .5);
									break;
								case 'bottom':
										toReturn = (triggerer.offset().top) - (triggerer.outerHeight() * .5);
									break;
								case 'right':
								default: //left
									toReturn  = (triggerer.offset().top + (triggerer.outerHeight() * .5)) - (tooltip.outerHeight() * .5)
									break;
							}
							

						}else{
							
							switch(args.placement){
								case 'top':
										toReturn = triggerer.offset().top - tooltip.outerHeight();
									break;
								case 'bottom':
										toReturn = triggerer.offset().top + triggerer.outerHeight();
									break;
								case 'right':
								default: //left
									toReturn  = (triggerer.offset().top + (triggerer.outerHeight() * .5)) - (tooltip.outerHeight() * .5)
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
							toReturn += (args.placement == 'top' ) ? (tooltip.find('.tooltip-badge').first().outerWidth() * -1) : tooltip.find('.tooltip-badge').first().outerWidth();
						}


						return toReturn;
					}
				}

				triggerer.next('.tooltip').css({
					'top': pos.y(),
					'left': pos.x()
				})

			}

		}

		_1p21.destroyToolTip = function(triggerer,method){
			method = method || 'next';
			triggerer[method]('.tooltip').fadeOut(null,function(){
				$(this).remove()
			});
		}



		$('body').on('click','*[data-toggle="tooltip-click"]',function(e){
			var self = $(this);
			var args =  {
				placement: self.data('tooltip-placement'),
				badge: self.data('tooltip-badge'),
				badgeBg: self.data('background'),
				badgeSize: self.data('tooltip-badge-size'),
				content: self.data('tooltip-content'),
				centerX: self.data('tooltip-center-x'),
				centerY: self.data('tooltip-center-y'),
			}


			if(self.next('.tooltip').length > 0) {
				_1p21.destroyToolTip(self);
			}else{
				_1p21.createToolTip(self,args);
			}


			
		});



		$('body').on('mouseenter','*[data-toggle="tooltip-hover"]',function(e){
			var self = $(this);
			var args =  {
				placement: self.data('tooltip-placement'),
				badge: self.data('tooltip-badge'),
				badgeBg: self.data('tooltip-badge-background'),
				badgeSize: self.data('tooltip-badge-size'),
				content: self.data('tooltip-content'),
				centerX: self.data('tooltip-center-x'),
				centerY: self.data('tooltip-center-y')
			}

			_1p21.createToolTip(self,args);

			
		});

		$('body').on('mouseleave','*[data-toggle="tooltip-hover"]',function(e){
			var self = $(this);
			_1p21.destroyToolTip(self);
		});

	})



	//put boi on global
	window._1p21 = _1p21;


}(jQuery,Handlebars,window));