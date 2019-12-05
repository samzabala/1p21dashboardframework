<div id="profiles">

	<h2 class="module-grid-title profile-REPLACEsubcategory"><span class="REPLACE">Profile Subcategory</span></h2>
	<div
	id="profile-REPLACEsubcategory"
	class="module-grid"
	data-grid-template-columns-md="repeat(3, 1fr)"
	data-grid-template-columns-lg="repeat(4, 1fr)"
	>
		<?php app_get_component('components/profile-card'); ?>


		<!-- @PLACEHOLDER: DELETE WHEN READY -->

			<?php for($i=1; $i<=3; $i++){ ?>
				<?php app_get_component('components/profile-card'); ?>
			<?php } ?>

	</div>




	<!-- @PLACEHOLDER: DELETE WHEN READY -->
		<h2 class="module-grid-title profile-category"><span class="REPLACE">Profile Type</span></h2>
		<div
		id="profile-category"
		class="module-grid"
		data-grid-template-columns-md="repeat(3, 1fr)"
		data-grid-template-columns-lg="repeat(4, 1fr)"
		>
			<?php app_get_template_part('components/profile-card'); ?>


			<!-- @PLACEHOLDER: DELETE WHEN READY -->

				<?php for($i=1; $i<=3; $i++){ ?>
					<?php app_get_component('components/profile-card'); ?>
				<?php } ?>

		</div>
</div>