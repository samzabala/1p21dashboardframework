<ul class="dashboard-list-group-thumbed list-group list-group-toggle-multiple list-group-toggle list-group-toggle-allow-no-active list-group-compact">
	<!--
		@NOTE
		@dynamic @loop li 
			cclasses to add:
				`display-none` => if doesnt contain input value string


			order by priority meta
			1: alphabetical
			2: string match to searchbar
			3: currwently active member

	-->
	<li class="flex-xs flex-wrap align-items-center justify-content-space-between">
		<a href="#" class="flex-1-1">
			<?php app_get_component('components/profile-image-small-span') ?>
			<span class="REPLACE">Profile Name</span>
		</a>

		<i class="color-primary symbol float-right symbol-check-toggle font-size-normalize"></i>
	</li>

		<!-- placeholder -->
		<?php for($i=1; $i<10; $i++){ ?>
			<li class="flex-xs flex-wrap align-items-center justify-content-space-between">
				<a href="#" class="flex-1-1">
					<?php app_get_component('components/profile-image-small-span') ?>
					<span class="REPLACE">Profile Name</span>
				</a>

				<i class="color-primary symbol float-right symbol-check-toggle font-size-normalize"></i>
			</li>

		<?php } ?>

</ul>