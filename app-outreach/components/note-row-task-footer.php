<div class="grid grid-flex align-items-center">
	<div class="grid-col-xs-12 grid-col-sm-6">
		<div class="flex-md justify-content-flex-start align-items-center">
			<i class="font-size-large color-primary symbol symbol-calendar"></i> <strong class="margin-small-x">Due:</strong>
			<br class="hide-nonmobile">
			<div>
				<span class="REPLACE">6/12/98</span> at <pan class="REPLACE">4:00 PM</pan>
			</div>
		</div>
	</div>
	<div class="grid-col-xs-12 grid-col-sm-6">
		<div class="flex-md justify-content-flex-end align-items-center">
			<i class="font-size-large color-primary symbol symbol-bell"></i> <strong class="margin-small-x">Reminder:</strong>
			<br class="hide-nonmobile">
			<div>
				<span class="REPLACE">6/12/98</span> at <span class="REPLACE">4:00 PM</span>
			</div>
		</div>
	</div>
	<div class="grid-col-xs-12 grid-col-sm-6">
		<div class="flex-md justify-content-flex-start align-items-center">
			<strong class="margin-small-right">Assignee:</strong>
			<br class="hide-nonmobile">
			<!-- @if has assignee -->
				<?php app_get_component('components/profile-image','micro'); ?>
			<!-- @else -->
				<span class="color-neutral font-style-italic">Unassigned</span>
		</div>
		
	</div>
	<div class="grid-col-xs-12 grid-col-sm-6">
		<div class="flex-md justify-content-flex-end align-items-center">
			<!-- @if not complete yet -->
				<a href="" class="btn btn-primary-outline">Mark as Complete</a>
			<!-- @else -->
				<span class="btn btn-no-interaction btn-success-glassy border-color-success">Completed</span>
		</div>
	</div>
</div>