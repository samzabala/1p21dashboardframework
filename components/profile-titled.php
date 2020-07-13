
<div class="p profile-row">
	<div
	class="flex-grid flex-grid-compact align-items-center flex-grid-fixed flex-nowrap align-items-center flex-grid-no-gutter-y">
		<div class="flex-child hide-mobile">
			<?php app_get_component('components/profile-image-small'); ?>
		</div>
		<a href="<?=app_create_link(array('template'=>'profile')) ?>"  class="color-inherit flex-child">
			<span class="text-wrap-ellipsis no-margin-y">
				<span class="REPLACE">Profile name</span>
			</span>
			<span class="text-wrap-ellipsis color-neutral">
				<span class="REPLACE">Project profile title</span>
			</span>

		</a>
	</div>
</div>