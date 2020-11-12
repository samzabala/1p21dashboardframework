
window.jQuery && jQuery.noConflict();
Turbolinks.start();
(function($,fw,window){
	document.addEventListener("turbolinks:load", function() {
		fw.reInit();
	})

	//toggle our boi
	$('body').on('click','.dashboard-sidenav-toggle',function(e){	
		e.preventDefault();	
		$(this).toggleClass('open')
		$('#dashboard-block-sidebar').toggleClass('open');	
	});
	$('body').on('click','.dashboard-table-row-accordion-header *[data-toggle="accordion"]',function(e){	
		const clicked  = $(e.target);

		$('.dashboard-table-row-accordion-header tr td:last-child').removeClass('table-cell-primary');
		// console.log('opeen',clicked.hasClass('open'))
		if(clicked.hasClass('open')){
			clicked.closest('tr').children('td:last-child').addClass('table-cell-primary');
		}else{

			clicked.closest('tr').children('td:last-child').removeClass('table-cell-primary');
		}	
	});

	// @TODO kwan sort table scriptoboi goes here with .dashboard-sort-table-toggle



}(jQuery,fw,window));