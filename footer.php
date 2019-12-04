
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
	<?= app_inline_script( DASHBOARD_ROOT_PATH.'/assets/scripts/jquery.min.js'); ?>
	<?= app_inline_script( DASHBOARD_ROOT_PATH.'/assets/scripts/trumbowyg.min.js'); ?>
	<?= app_inline_script( DASHBOARD_ROOT_PATH.'/assets/scripts/trumbowyg.upload.min.js'); ?>
	<?= app_inline_script( DASHBOARD_ROOT_PATH.'/assets/scripts/framework.plugged.min.js'); ?>
	<!-- <?= app_inline_script( DASHBOARD_ROOT_PATH.'/assets/scripts/framework.min.js'); ?> -->

	<?= app_inline_script( DASHBOARD_ROOT_PATH.'/assets/scripts/dashboard.min.js'); ?>

	<script>
	</script>
</body>
</html>