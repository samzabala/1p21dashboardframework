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

	_1p21.db.mainNav = new Vue ({
		el: '#dashboard-block-main-nav',
		computed: {
			sideNav : _1p21.db.sideNav.$data.open
		},
		methods: {
			navStatus: function(){
				return _1p21.db.sideNav.$data.open;
			},
			toggleNav : function(e) {
				_1p21.db.sideNav.$data.open = !_1p21.db.sideNav.$data.open
			}
		}
	})



	// Vue
	
	window._1p21 = _1p21;


}(Vue,window));