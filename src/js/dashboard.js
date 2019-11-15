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

(function($,Handlebars,_1p21,window){
	console.log('init dashy');
	console.log($('.dashboard-sidenav-toggle'));
	$('body').on('click','.dashboard-sidenav-toggle',function(e){
		e.preventDefault();
		console.log('hola bitchacho');
		$('#dashboard-block-sidebar').toggleClass('open');
	});


}(jQuery,Handlebars,_1p21,window));