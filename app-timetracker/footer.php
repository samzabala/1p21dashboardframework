
<?php if(FWAPPS_TEMPLATE !== 'login' ): ?>

	

				<?php app_debug_block(); ?>
				</div>
			</main>
		
			
		</div>
	<!-- boards that appear -->
	<?php if(FWAPPS_TEMPLATE !== 'debug'): ?>

		<!-- global modals -->
		<?php app_get_component('components/modal-delete','',false,array(
			'type' => 'client'
		)); ?>
		<?php app_get_component('components/modal-delete','',false,array(
			'type' => 'project'
		)); ?>
		<?php app_get_component('components/modal-delete','',false,array(
			'type' => 'task'
		)); ?>
		
	<?php endif; ?>

<?php endif; ?>
	</body>
</html>