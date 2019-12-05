				<br>
				<ul class="inline">
				
					<?=app_debug_li(); ?>
				</ul>

				</div>
			
			</div>

		</main>
	</div>


		<!-- MODALS -->

			<!-- SCOREBOARD MODALS -->

			<?php if(DASHBOARD_SLUG == 'scoreboard'): ?>
				<!-- last activiyu @placeholder -->
				<div class="modal" id="modal-last-activity" data-modal-max-width="800px" data-modal-title="Last Activity">
					
					placeholder

				</div>
			<?php endif; ?>
	

	<!-- SCRIPT -->
		<!-- DEPENDENCIES OF DEPENDENCIES -->
		<script src="<?= DASHBOARD_ROOT_URL.'/assets/plugins/jquery.js'; ?>"></script>
		<script src="<?= DASHBOARD_ROOT_URL.'/assets/plugins/trumbowyg.js'; ?>"></script>
		<script src="<?= DASHBOARD_ROOT_URL.'/assets/plugins/trumbowyg.upload.js'; ?>"></script>
	
		<!-- DEPENDENCIES -->
		<script src="<?= DASHBOARD_ROOT_URL.'/assets/plugins/framework/js/framework.plugged.js'; ?>"></script>
		<!-- <script src="<?= DASHBOARD_ROOT_URL.'/assets/plugins/framework/js/framework.js'; ?>"></script> -->
	
		<!-- THE BOI -->
		<script src="<?= DASHBOARD_ROOT_URL.'/assets/scripts/dashboard.js'; ?>"></script>

</body>
</html>