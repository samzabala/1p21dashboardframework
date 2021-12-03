

<!-- boards that appear -->
<?php if(FWAPPS_TEMPLATE !== 'debug'): ?>
<?php app_get_component('components/modal-board-form-contact') ?>
<?php app_get_component('components/modal-board-form-task') ?>
<?php app_get_component('components/modal-board-form-event') ?>
<?php app_get_component('components/modal-board-form-email') ?>
<?php app_get_component('components/modal-board-form-company') ?>
<?php app_get_component('components/modal-board-detail-task') ?>
<?php app_get_component('components/modal-board-detail-event') ?>
<?php endif; ?>



		<?php if(FWAPPS_TEMPLATE !== 'login' && FWAPPS_TEMPLATE !== 'login-forgot' && FWAPPS_TEMPLATE !== 'login-reset'): ?>
					
							<?php app_debug_block(); ?>
						</div>
					</div>
				</main>
			</div>
		<?php endif; ?>
	</body>
</html>