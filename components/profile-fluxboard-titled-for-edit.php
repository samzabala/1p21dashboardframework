
<div class="p profile-row">
	<div class="flex-grid flex-grid-compact flex-grid-fixed align-items-center flex-grid-no-gutter-y">
		<div class="flex-col-xs-10">

			<div
			class="align-items-center flex-grid flex-grid-compact flex-grid-no-gutter-y flex-grid-fixed justify-content-flex-start">
				<div class="flex-0-0 flex-child hide-mobile">
					<?php app_get_component('components/profile-image-small-span'); ?>
				</div>
				<a href="<?=app_create_link(array('template'=>'workflux')) ?>"  class="color-inherit flex-0-1 flex-col-8">
					
					<span class="text-wrap-ellipsis no-margin-y">
						<span class="REPLACE">Workflux Board Name</span>
					</span>
					<span class="text-wrap-ellipsis color-neutral">
						<span class="REPLACE">Task Priority Within Workflux Board</span>
					</span>

				</a>
			</div>
		</div>

		<div class="flex-col-xs-2 text-align-right">
			<a href="#" class="btn btn-symbol btn-small btn-link"><i class="symbol symbol-close"></i></a>
		</div>
	</div>
</div>