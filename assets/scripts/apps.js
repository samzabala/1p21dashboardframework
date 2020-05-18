

window.jQuery && jQuery.noConflict();
(function($,fw,window){
	//1p21 shit

	// fw.trumbowyg.defaults = {
	// 	btns: [
	// 		['viewHTML'],
	// 		['strong', 'em',],
	// 		['insertImage'],
	// 		['link'],
	// 		['unorderedList', 'orderedList'],
	// 		['upload'],
	// 		['fullscreen']
	// 	],
	// 	// svgPath:false,
	// 	// hideButtonTexts:true,
	// 	removeformatPasted: true,
	// 	tbwresize: true,
	// 	tagsToRemove: ['script']
	// }

	//toggle our boi
	$('body').on('click','.dashboard-sidenav-toggle',function(e){	
		e.preventDefault();	
		$(this).toggleClass('open')
		$('#dashboard-block-sidebar').toggleClass('open');	
	});

	// @TODO kwan sort table scriptoboi goes here with .dashboard-sort-table-toggle



}(jQuery,frameWork,window));