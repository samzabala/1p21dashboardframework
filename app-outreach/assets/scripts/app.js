typeof Turbolinks == 'object' && Turbolinks.start();
(function(FrameWork,window){
	
	document.addEventListener("turbolinks:before-render", function(e) {
		FrameWork.Initiator.setLoadingState();
	})
	document.addEventListener("turbolinks:load", function() {
		FrameWork.Initiator.restart();
	})


}(framework,window));