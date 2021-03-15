
window.jQuery && jQuery.noConflict();
typeof Turbolinks == 'object' && Turbolinks.start();
(function($,fw,window){
	
	document.addEventListener("turbolinks:render", function(e) {
		fw.Initiator.setLoadingState();
	})
	document.addEventListener("turbolinks:load", function() {
		fw.Initiator.restart();
	})

	//toggle our boi
	$('body').on('click','.outreach-sidenav-toggle',function(e){	
		e.preventDefault();	
		$(this).toggleClass('open')
		$('#outreach-block-sidebar').toggleClass('open');	
	});
	// @TODO kwan sort table scriptoboi goes here with .outreach-sort-table-toggle



}(jQuery,frameWork,window));