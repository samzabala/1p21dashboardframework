// function generate(config) {
// 	return new Promise((resolve, reject) => {
// 	  fetch("./template.hbs")
// 		.then(function(response) {
// 		  console.log(response);
// 		  return response.text();
// 		})
// 		.then(function(source) {
// 		  const template = Handlebars.compile(source);
// 		  const html = template(config);
// 		  resolve(html);
// 		});
// 	});
//   }
window.jQuery && jQuery.noConflict();
(function($,window){
	//1p21 shit
	var _1p21 = window._1p21 || {};

	//dashboard shit
	_1p21.db = _1p21.db || {};

	
	$ && ($.trumbowyg.svgPath = '/framework/icons/icons.svg');
	$ && ($.trumbowyg.hideButtonTexts = true);

	//toggle our boi
	$('body').on('click','.dashboard-sidenav-toggle',function(e){	
		e.preventDefault();	
		console.log('hola bitchacho');	
		$(this).toggleClass('open')
		$('#dashboard-block-sidebar').toggleClass('open');	
	});

	window._1p21 = _1p21;


}(jQuery,window));