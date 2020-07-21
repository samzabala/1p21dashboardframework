<div class="list-group list-group-toggle-multiple list-group-toggle list-group-toggle-allow-no-active font-size-large">
	<!-- @if workflux has rows or matchs -->
		<!-- 
		@NOTE
			.list-group-item/li
				classes to add
					if workflux id is in the corresponding workflux id field => `active`

		-->
		<a href="#" class="list-group-item flex-wrap align-items-center justify-content-space-between">
			<span class="flex-1-1">
				<?php app_get_component('components/profile-workflux-image-small-span') ?>
				<span class="REPLACE">Workflux Board Name</span>
			</span>

			<i class="color-primary symbol float-right symbol-check-toggle font-size-normalize"></i>
		</a>

			<!-- placeholder -->
			<?php for($i=1; $i<10; $i++){ ?>
				
				<a href="#" class="list-group-item flex-wrap align-items-center justify-content-space-between">
					<span class="flex-1-1">
						<?php app_get_component('components/profile-workflux-image-small-span') ?>
						<span class="REPLACE">Workflux Board Name</span>
					</span>

					<i class="color-primary symbol float-right symbol-check-toggle font-size-normalize"></i>
				</a>
			<?php } ?>
			
	<!-- @else -->
		<span href="#" class="list-group-item list-group-item-no-interaction color-neutral font-style-italic">
			No matching workflux boards available
		</span>
</div>