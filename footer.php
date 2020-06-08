					
					
					<!-- Debug use only dont pootpoot -->
					<div class="dev-debug-block">
						<br>
						
						<ul class="inline text-align-center">
						
							<?=app_debug_li(); ?>
						</ul>

						<hr>

						<table>
							<tr>
								<th>Current App:</th>
								<th>Templates pulled :</th>
							</th>
							<tr>
								<td><code><?= FWAPPS_APP; ?></code></td>

								<?php
									$template = FWAPPS_TEMPLATE;
									$slug = FWAPPS_SLUG;
								?>
								<td>
									
								<code><?=$GLOBALS['FWAPPS_CURR_TEMPLATE'] ?>.php</code>
								</td>
							</tr>
					</div>







				</div>
			
				
			</div>

		</main>
	</div>


	<!-- SCRIPT -->
		<!-- DEPENDENCIES OF DEPENDENCIES -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.19.1/trumbowyg.min.js"></script> -->


		<?php //app_inline_script(FWAPPS_ROOT_PATH.'/assets/scripts/trumbowyg.upload.1p21.js'); ?>
	
		<!-- DEPENDENCIES -->
		<?php app_inline_script(FWAPPS_ROOT_PATH.'/assets/plugins/framework/dist/framework.plugged.min.js'); ?>
		<?php //app_inline_script(FWAPPS_ROOT_PATH.'/assets/plugins/framework/dist/framework.min.js'); ?>
	



		<!-- THE BOI -->
		<?php app_inline_script(FWAPPS_ROOT_PATH.'/assets/scripts/apps.js'); ?>


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

</html>