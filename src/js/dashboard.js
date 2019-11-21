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
(function(Vue,window){
	//1p21 shit
	var _1p21 = window._1p21 || {};

	//framework shit
	_1p21.db = _1p21.db || {};
 
	_1p21.db.sideNav = new Vue ({
			el: "#dashboard-block-sidebar",
			data: {
				open: false
			}
		});
	
	window._1p21 = _1p21;


}(Vue,window));