
				</div>
			</div>

		</main>
	</div>


		<!-- MODALS -->

			<!-- add task @placeholder -->
			<div class="modal" id="modal-add-task" data-modal-max-width="800px" data-modal-title="Add New Task">
				
				<form method="get">
					<div class="special-form">

						<div class="input-wrapper input-wrapper-vertical input-wrapper-block">

							<label for="task-title" class="sr-only">Title</label>
							<input id="task-title" type="text" class="input-large input-single-line font-weight-600" placeholder="Enter title here">
						</div>


						<div class="input-wrapper input-wrapper-vertical input-wrapper-block">
							<label for="task-description" class="sr-only">Content</label>

							<textarea id="task-description" class="input input-trumbowyg">
							</textarea>
						</div>
					</div>

					<button class="btn btn-primary" type="submit">Post</button>
					<button class="btn btn-default" data-toggle="modal-close">Cancel</button>
				</form>

			</div>

			<!-- last activiyu @placeholder -->
			<div class="modal" id="modal-last-activity" data-modal-max-width="800px" data-modal-title="Last Activity">
				
				placeholder

			</div>
	

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