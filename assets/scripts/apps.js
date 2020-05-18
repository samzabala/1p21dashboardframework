

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
	$('body').on('click','.dashboard-table-row-accordion-header *[data-toggle="accordion"]',function(e){	
		const clicked  = $(e.target);

		$('.dashboard-table-row-accordion-header tr td:last-child').removeClass('table-cell-primary');

		if(clicked.hasClass('open')){
			clicked.closest('tr').children('td:last-child').removeClass('table-cell-primary');
		}else{

			clicked.closest('tr').children('td:last-child').addClass('table-cell-primary');
		}	
	});


	// @TODO kwan sort table scriptoboi goes here with .dashboard-sort-table-toggle



}(jQuery,frameWork,window));