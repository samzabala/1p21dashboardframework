<div
class="grid grid-flex grid-compact align-items-center grid-constricted-y grid-fixed flex-nowrap align-items-center">
	<div class="grid-col hide-mobile">
		<?php app_get_component('components/profile-image-small'); ?>
	</div>
	<div class="grid-col text-wrap-ellipsis h4 font-weight-400 no-margin-y color-primary-hover">
		<a class="color-inherit" href="<?=app_create_link(array('template'=>'profile')) ?>">
			<span class="REPLACE">Profile name</span>
		</a>
	</div>
</div>