typeof Turbolinks == 'object' && Turbolinks.start();
(function(fw,window){
	
	document.addEventListener("turbolinks:before-render", function(e) {
		fw.Initiator.setLoadingState();
	})
	document.addEventListener("turbolinks:load", function() {
		fw.Initiator.restart();
	})


}(fw,window));