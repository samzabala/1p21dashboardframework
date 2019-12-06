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
		<!-- <?php app_inline_script(DASHBOARD_ROOT_PATH.'/assets/plugins/framework/js/framework.plugged.js'); ?> -->
		<?php app_inline_script(DASHBOARD_ROOT_PATH.'/assets/plugins/framework/js/framework.js'); ?>
	
		<!-- THE BOI -->
		<?php app_inline_script(DASHBOARD_ROOT_PATH.'/assets/scripts/dashboard.js'); ?>

</body>
</html>