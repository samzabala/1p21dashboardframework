<div id="profiles">

	<h2 class="module-grid-title profile-category"><span class="REPLACE">Profile Type</span></h2>
	<div
	id="profile-category"
	class="module-grid"
	data-grid-template-columns-md="repeat(3, 1fr)"
	data-grid-template-columns-lg="repeat(4, 1fr)"
	>
		<?php app_get_component_part('components/profile-card'); ?>


		<!-- PLACEHOLDER: DELETE WHEN READY -->

			<?php
			for($i=1; $i<=4; $i++){
				app_get_component_part('components/profile-card');
			} ?>

	</div>




	<!-- PLACEHOLDER: duplicate of our boi above. delete when reade -->
		<h2 class="module-grid-title profile-category"><span class="REPLACE">Profile Type</span></h2>
		<div
		id="profile-category"
		class="module-grid"
		data-grid-template-columns-md="repeat(3, 1fr)"
		data-grid-template-columns-lg="repeat(4, 1fr)"
		>
			<?php app_get_template_part('components/profile-card'); ?>


			<!-- PLACEHOLDER: DELETE WHEN READY -->

			<?php
			for($i=1; $i<=4; $i++){
				app_get_component_part('components/profile-card');
			} ?>

		</div>
</div>