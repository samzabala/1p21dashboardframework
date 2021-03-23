					
					
					<!-- Debug use only dont pootpoot -->
					<?php app_debug_block() ?>






				</div>
			
				
			</div>

		</main>
	</div>


	<!-- SCRIPT -->
		<!-- DEPENDENCIES OF DEPENDENCIES -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	
		<!-- DEPENDENCIES -->
		<?php app_inline_script(FWAPPS_ROOT_PATH.'/assets/plugins/framework/dist/js/framework.legacy.plugged.js'); ?>
		<?php //app_inline_script(FWAPPS_ROOT_PATH.'/assets/plugins/framework/dist/framework.min.js'); ?>
	



		<!-- THE BOI -->
		<?php app_inline_script(FWAPPS_ROOT_PATH.'/assets/legacy/scripts/apps.js'); ?>


		<script src="/_fortesting.js"></script>




</body>





	<!-- @PLACEHOLDER for debugging framework. delete when ready. or repurpose or... idk -->
		<script>

			// duh
			function setCookie(cname, cvalue, exdays) {
				var d = new Date();
				d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
				var expires = "expires="+d.toUTCString();
				document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
			}
			// duh
			function getCookie(cname) {
				var name = cname + "=";
				var decodedCookie = decodeURIComponent(document.cookie);
				var ca = decodedCookie.split(';');
				for(var i = 0; i <ca.length; i++) {
					var c = ca[i];
					while (c.charAt(0) == ' ') {
					c = c.substring(1);
					}
					if (c.indexOf(name) == 0) {
					return c.substring(name.length, c.length);
					}
				}
				return "";
			}

			//toggle darkmode. although placeholder, this can be repurposed too :)
			function placeholderScriptDarkMode(event) {
				console.log( getCookie('_1p21fw_dark'));
				event.preventDefault();
				setCookie('_1p21fw_dark',( getCookie('_1p21fw_dark') == '1' ? '0' : '1' ),69 );

				document.documentElement.classList.toggle('theme-inverse');
			}

			(function(){
				getCookie('_1p21fw_dark') == '1' && (document.documentElement.classList.add('theme-inverse') )
			}())

		</script>




		<link rel="stylesheet"
				href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css"/>
		<script src="https://cdn.datatables.net/v/dt/dt-1.10.21/b-1.6.2/b-colvis-1.6.2/datatables.min.js">
		</script>
		<script>
			(function($){
				var $sponsorships = $(`#sponsorship-table table`).DataTable({
					dom: '<"p cf" lfp><"table-wrapper" t>',
	drawCallback: function() {
		// this.removeClass('dataTable');
		const dTWrapper = this.closest('.dataTables_wrapper');
		const pagination = dTWrapper.find('.dataTables_paginate');
		const length = dTWrapper.find('.dataTables_length');
		const filter = dTWrapper.find('.dataTables_filter');

		//length control
		if(length.length){

			length
				// .removeClass('dataTables_length')
				.addClass('input-group input-group-horizontal');

			length
				.children('label')
				.addClass('input-label background-transparent')
		}

		//pagination
		if(pagination.length){
			//modfy container classes
			pagination
				.addClass('btn-group btn-group-horizontal float-right');

			//modify pagination into a butn-group
			pagination.children('span').children().detach().appendTo(pagination);
			pagination.children('span').remove();
			pagination.find('.paginate_button.next').detach().appendTo(pagination);
			pagination.children().each((i,butt)=>{
				butt.classList.remove('paginate_button');
				butt.classList.add('btn');
				butt.classList.add('btn-default');
				if(butt.classList.contains('current')){
					butt.classList.remove('current');
					butt.classList.add('active')
				}
			})
		}

		//filter control
		if(filter.length){
			filter
				.addClass('input-group input-group-horizontal float-right');
			filter
				.children('label')
				.addClass('input-label background-transparent')
		}
	}
					// paging: false,
					// ordering: true,
					// searching: false
				});
			}(jQuery))
		</script>

</html>