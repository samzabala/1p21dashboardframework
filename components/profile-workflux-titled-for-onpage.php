
<div class="p profile-row pointer-reference">
	<div class="flex-grid flex-grid-compact flex-grid-fixed align-items-center flex-grid-no-gutter">
		<div class="flex-col-xs-10">

			<div
			class="align-items-center flex-grid flex-grid-compact flex-grid-no-gutter-y flex-grid-fixed justify-content-flex-start">
				<div class="flex-0-0 flex-child hide-mobile">
					<?php app_get_component('components/profile-workflux-image-small'); ?>
				</div>
				<a href="<?=app_create_link(array('template'=>'workflux')) ?>"  class="color-inherit flex-0-1 flex-col-8">	
					<span class="text-wrap-ellipsis no-margin-y task-in-workflux-name">
						<span class="REPLACE">Workflux Board Name</span>
					</span>
					<span class="text-wrap-ellipsis color-neutral task-in-workflux-list">
						<span class="REPLACE">Workflux List name containing this task</span>
					</span>
				</a>
			</div>
		</div>

		<div class="flex-col-xs-2 text-align-right">
			
			<!-- @if user can edit -->
			
				<form action="">
					<!-- @HIDDEN INPUT TYPES HERE -->
					<button type="submit" href="#" class="hide-idle btn btn-symbol btn-small btn-link" onclick="REPLACEwithFnToDeleteSetProfile"><i class="symbol symbol-close"></i></button>
				</form>
		</div>
	</div>
</div>