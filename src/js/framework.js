(function($,Handlebars,window){
	var _1p21 = window._1p21 || {};

	_1p21.lazyLoad = _1p21.lazyLoad || true;


	if(!$) {
		throw new Error('jQuery not found bro, what did you do?');
	}

	String.prototype.getFileExtension = function() {
		return this.split('.').pop();
	}

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
	
		$('body').on('click','*[data-toggle="accordion"]',function(e){
			console.log($(this));
			e.preventDefault();
			// console.log(e.target);
	
			$(this).siblings('.toggle-accordion').first().slideToggle(); 
			$(this).toggleClass('open'); 
			$(this).siblings('.toggle-accordion').first().toggleClass('open'); 
		})
	})



	//put boi on global
	window._1p21 = _1p21;


}(jQuery,Handlebars,window));