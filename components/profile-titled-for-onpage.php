
<div class="p profile-row pointer-reference">
	<div class="grid grid-flex grid-compact grid-fixed align-items-center grid-constricted-y">
		<div class="grid-col-xs-10">

			<div
			class="align-items-center grid grid-flex grid-compact grid-constricted-y grid-fixed justify-content-flex-start">
				<div class="flex-0-0 grid-col grid-col hide-mobile">
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

		<div class="grid-col-xs-2 text-align-right">
			<form action="" class="display-inline">
				<!-- INPUT HIDDEN TYPES HERE -->
				<button href="#" class="hide-idle btn btn-symbol btn-small btn-link" onclick="REPLACEwithFnToDeleteSetProfile"><i class="symbol symbol-close"></i></button>
			</form>
		</div>
	</div>
</div>