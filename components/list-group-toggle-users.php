<div class="dashboard-list-group-clip-thumbed list-group list-group-toggle list-group-toggle-allow-no-active font-size-large">
	<!-- @if profile matches or has rows -->
		<a href="#" class="list-group-item flex-xs flex-wrap align-items-center justify-content-space-between">
			<span class="flex-1-1">
				<?php app_get_component('components/profile-image-small-span') ?>
				<span class="REPLACE">Profile Name</span>
			</span>

			<i class="color-primary symbol float-right symbol-check-toggle font-size-normalize"></i>
		</a>

			<!-- placeholder -->
			<?php for($i=1; $i<10; $i++){ ?>
			
				<a href="#" class="list-group-item flex-xs flex-wrap align-items-center justify-content-space-between">
					<span class="flex-1-1">
						<?php app_get_component('components/profile-image-small-span') ?>
						<span class="REPLACE">Profile Name</span>
					</span>

					<i class="color-primary symbol float-right symbol-check-toggle font-size-normalize"></i>
				</a>

			<?php } ?>
	<!-- @else -->
	<span href="#" class="list-group-item list-group-item-no-interaction color-neutral font-style-italic">
		No matching users available
	</span>
</div>