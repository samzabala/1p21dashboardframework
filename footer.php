				<br>
				<ul class="inline">
				
					<?=app_debug_li(); ?>
				</ul>

				</div>
			
				
			</div>

		</main>
	</div>


	<!-- SCRIPT -->
		<!-- DEPENDENCIES OF DEPENDENCIES -->
		<?php app_inline_script(DASHBOARD_ROOT_PATH.'/assets/plugins/jquery.js'); ?>
		<?php app_inline_script(DASHBOARD_ROOT_PATH.'/assets/plugins/trumbowyg.js'); ?>
		<?php app_inline_script(DASHBOARD_ROOT_PATH.'/assets/plugins/trumbowyg.upload.1p21.js'); ?>
	
		<!-- DEPENDENCIES -->
		<?php app_inline_script(DASHBOARD_ROOT_PATH.'/assets/plugins/framework/js/framework.plugged.js'); ?>
		<!-- <?php app_inline_script(DASHBOARD_ROOT_PATH.'/assets/plugins/framework/js/framework.js'); ?> -->
	
		<!-- THE BOI -->
		<?php app_inline_script(DASHBOARD_ROOT_PATH.'/assets/scripts/dashboard.js'); ?>










</body>





	<!-- @PLACEHOLDER for debugging framework. delete when ready. or repurpose or... idk -->
		<script>

			function setCookie(cname, cvalue, exdays) {
				var d = new Date();
				d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
				var expires = "expires="+d.toUTCString();
				document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
			}
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
			function placeholderScriptDarkMode(event) {
				console.log( getCookie('_1p21fw_dark'));
				event.preventDefault();
				setCookie('_1p21fw_dark',( getCookie('_1p21fw_dark') == '1' ? '0' : '1' ),69 );

				document.body.classList.toggle('body-inverse');
			}
			(function(){
				getCookie('_1p21fw_dark') == '1' && (document.body.classList.add('body-inverse') )
			}())
		</script>

		<style>
			img[src*="PLACEHOLDER/profiles"] {
				opacity:0!important;
			}
		</style>

</html>