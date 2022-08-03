<div
class="flex-grid flex-grid-compact align-items-center flex-grid-no-gutter-y flex-grid-fixed flex-nowrap align-items-center">
	<div class="flex-child hide-mobile">
		<?php app_get_component('components/profile-image-small'); ?>
	</div>
	<div class="flex-child text-wrap-ellipsis h4 font-weight-400 no-margin-y color-primary-hover">
		<a class="color-inherit" href="<?=app_create_link(array('template'=>'profile')) ?>">
			<span class="REPLACE">Profile name</span>
		</a>
	</div>
</div>