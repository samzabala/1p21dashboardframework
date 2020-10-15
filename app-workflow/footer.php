
					
					<?php app_debug_block(); ?>







				</div>
			
				
			</div>

		</main>
	</div>


	<!-- SCRIPT -->
		<!-- DEPENDENCIES OF DEPENDENCIES -->
		<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
		<?php app_inline_script(FWAPPS_ROOT_PATH.'/assets/plugins/jquery.js'); ?>
	
		<!-- DEPENDENCIES -->
		<?php 
		
		if(FWAPPS_JS == 'vanilla') {
			app_inline_script(FWAPPS_ROOT_PATH.'/assets/plugins/framework/dist/framework.min.js'); 
		}else{
			app_inline_script(FWAPPS_ROOT_PATH.'/assets/plugins/framework/dist/framework.plugged.min.js');
		}
		
		?>
	



		<!-- THE BOI -->
		<?php app_inline_script(FWAPPS_ROOT_PATH.'/assets/scripts/apps.js'); ?>


		<script src="/_fortesting.js"></script>


		<script type="text/javascript"
			src="https://cdn.datatables.net/v/dt/dt-1.10.21/b-1.6.2/b-colvis-1.6.2/datatables.min.js">
		</script>
		<link rel="stylesheet" type="text/css"
			href="https://cdn.datatables.net/1.10.21/css/dataTables.min.css"/>
		<script>
			(function(jQuery){
				jQuery('.data-log-today').DataTable({
					sDom: `<"text-align-right hide-mobile"
						<"#activity-log-column-settings.accordion dashboard-table-column-toggle"B>>t`,
					searching: false,
					ordering: false,
					// paging: false,
					lengthMenu : [

						[25, 50, 100,150,200, -1],
						[25, 50, 100,150,200, "All"]
					],
					// columnDefs: [
					// 	{ targets: [1], visible: false },
					// ],
					buttons:{
						dom: {
							button: {
								tag: 'button',
								className: 'btn btn-default',
							},
							container: {
								className: 'btn-group btn-group-horizontal p hide-mobile btn-block btn-no-shadow',
							}
						},
						buttons: [
							{ extend: 'columnsToggle' },
						],
						},
						stateSave: true,
						stateDuration: 60 * 60 * 24 * 30,
						initComplete: function() {
							jQuery(this).removeClass('dataTable');
							console.log(jQuery(this)); 
						}
				});
			}(jQuery));
		</script>

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

</html>