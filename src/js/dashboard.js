function generate(config) {
	return new Promise((resolve, reject) => {
	  fetch("./template.hbs")
		.then(function(response) {
		  console.log(response);
		  return response.text();
		})
		.then(function(source) {
		  const template = Handlebars.compile(source);
		  const html = template(config);
		  resolve(html);
		});
	});
  }