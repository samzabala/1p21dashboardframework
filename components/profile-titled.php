
<div class="p profile-row">
	<div
	class="align-items-center flex-grid flex-grid-compact flex-grid-no-gutter-y flex-grid-fixed justify-content-flex-start">
		<div class="flex-0-0 flex-child hide-mobile">
			<?php app_get_component('components/profile-image-small'); ?>
		</div>
		<a href="<?=app_create_link(array('template'=>'profile')) ?>"  class="color-inherit flex-col-8">
			<span class="text-wrap-ellipsis no-margin-y">
				<span class="REPLACE">Profile name</span>
			</span>
			<span class="text-wrap-ellipsis color-neutral">
				<span class="REPLACE">Project profile title</span>
			</span>

		</a>
	</div>
</div>