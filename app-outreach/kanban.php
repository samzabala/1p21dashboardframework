<div
	id="outreach-kanban" class="">
		<div id="outreach-kanban-wrapper" class="background-theme-contrast padding-top background-theme-contrast flex-xs flex-direction-column">
			<div class="flex-0-0">
				<div class="container container-fluid">
					<!-- @NOTE: #outreach-contacts-heading is the same markup as the copmany table templates except the toggle underneath the heading -->
					<div id="outreach-contacts-heading" class="grid grid-flex justify-content-space-between align-items-center">
						<div class="grid-col-xs-12 grid-col-md-4">
							<h1 class="no-margin">Prospecting Funnel</h1>
							<a href="#m-editor-swimlane" data-toggle-modal-default data-modal-title="Add new Swimlane">Add new swimlane</a>
						</div>
						<div class="grid-col-xs-12 grid-col-md-4 text-align-right">
							<?php app_get_component('components/function-input-search') ?>
							<div class="module-function function-add">
								<a  href="#mb-editor-company" data-modal-title="Add company" data-toggle-modal-board class="btn btn-primary btn-block-mobile">
									Add New <i class="symbol symbol-plus"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- 
				@NOTES for draggable.module-content
					@demo reference from: https://sortablejs.github.io/Vue.Draggable/#/simple
					@markup: reference from https://github.com/SortableJS/Vue.Draggable/blob/master/example/components/simple.vue

				remaining attributes to add that will be based on data
					:list="list"
					:disabled="!enabled"
					:move="checkMove"
					@start="dragging = true"
					@end="dragging = false"
			-->
            <draggable
				grid-template-rows="1fr"
				data-grid-auto-columns="300px"
				data-grid-template-columns="300px"
				data-grid-auto-flow="column"

				class="overflow-x-scroll flex-1-1 module-grid module-grid-compact padding-x padding-bottom"
				draggable=".outreach-kanban"
				ghost-class="disabled"
			>
			<!-- @loop .module.outreach-kanban -->
                <!-- kanban: outreach -->
					<?php app_get_component('components/kanban-swimlane','',false,array(
						'title' => 'Outreach',
						'title_background' => '#3981DC'
					)) ?>
				<!-- kanban: pitched -->
					<?php app_get_component('components/kanban-swimlane','',false,array(
						'title' => 'Pitched',
						'title_background' => '#3981DC', // var(--fw-theme-primary)
						'placeholder_amount' => 20
					)) ?>
				<!-- kanban: proposal sent -->
					<?php app_get_component('components/kanban-swimlane','',false,array(
						'title' => 'Proposal Sent',
						'title_background' => '#3981DC', // var(--fw-theme-primary)
						'placeholder_amount' => 20
					)) ?>
				<!-- kanban: contract sent -->
					<?php app_get_component('components/kanban-swimlane','',false,array(
						'title' => 'Contract Sent',
						'title_background' => '#3981DC', // var(--fw-theme-primary)
						'placeholder_amount' => 20
					)) ?>
				<!-- kanban: won -->
					<?php app_get_component('components/kanban-swimlane','',false,array(
						'title' => 'Closed and Won',
						'title_background' => '#6CC6A7', // var(--fw-theme-success)
						'placeholder_amount' => 20
					)) ?>
				<!-- kanban: lost -->
					<?php app_get_component('components/kanban-swimlane','',false,array(
						'title' => 'Closed and Lost',
						'title_background' => '#3981DC', // var(--fw-theme-primary)
						'placeholder_amount' => 20
					)) ?>
				<!-- kanban: new -->
					<?php //app_get_component('components/kanban-swimlane') ?>
			</draggable>
		</div>
</div>