
<div class="p profile-row">
	<div
	class="align-items-center grid grid-flex grid-compact grid-constricted-y grid-fixed justify-content-flex-start">
		<div class="flex-0-0 grid-col hide-mobile">
			<?php app_get_component('components/profile-image-small'); ?>
		</div>
		<a href="<?=app_create_link(array('template'=>'profile')) ?>"  class="color-inherit grid-col-8">
			<span class="text-wrap-ellipsis no-margin-y">
				<span class="REPLACE">Profile name</span>
			</span>
			<span class="text-wrap-ellipsis color-neutral">
				<span class="REPLACE">Project profile title</span>
			</span>

		</a>
	</div>
</div>