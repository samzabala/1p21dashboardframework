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
(function(_1p21,Vue,window){
	
	// const dashboard = {};
	// dashboard.sidebar
	// dashboard.content
 
		new Vue ({
			el: "#dashboard",
			data: {
				sideNav: {
					open: false
				}
			}
		});
	


}(_1p21,Vue,window));