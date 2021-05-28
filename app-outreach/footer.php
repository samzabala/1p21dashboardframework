

<!-- boards that appear -->
<?app_get_component('components/modal-board-form-contact') ?>
<?app_get_component('components/modal-board-form-task') ?>
<?app_get_component('components/modal-board-form-event') ?>
<?app_get_component('components/modal-board-form-email') ?>
<?app_get_component('components/modal-board-form-company') ?>



		<?php if(FWAPPS_TEMPLATE !== 'login' && FWAPPS_TEMPLATE !== 'login-forgot' && FWAPPS_TEMPLATE !== 'login-reset'): ?>
					
							<?php app_debug_block(); ?>
						</div>
					</div>
				</main>
			</div>
		<?php endif; ?>
	</body>
</html>