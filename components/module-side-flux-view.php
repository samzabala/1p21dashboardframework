<div class="module">
	<div class="module-content">

		<div class="h5 no-margin-top">
			<div class="flex-grid flex-grid-compact flex-grid-no-gutter-y justify-content-space-between align-items-center">
				<div class="flex-child">
					<h5 class="no-margin-y">Workflux Boards</h5>
				</div>
				<div class="flex-child">
					<a href="#task-side-flux-view-REPLACEwithTaskId" data-toggle="accordion" class="color-neutral"><i class="symbol symbol-arrow-down"></i></a>
				</div>
			</div>
		</div>

	
		
		<div id="task-side-flux-view-REPLACEwithTaskId" class="accordion" data-accordion-change-hash="false">
	
			<!-- @if hasteam leads -->
			<div class="task-fluxboards">

				<!-- @LOOP component -->
				<?php app_get_component('components/profile-fluxboard-titled') ?>
					<!-- @PLACEHOLDER: DELETE WHEN READY -->
					<?php for($i=1; $i<2; $i++){ ?>
						<?php app_get_component('components/profile-fluxboard-titled'); ?>
					<?php } ?>
			</div>
					
			<!-- @else -->
			<p class="color-neutral font-style-italic">
				No associated workflux boards.

				<!-- @if user can edit task -->
				<a class="color-inherit" href="#task-editor-REPLACEwithTaskId" data-toggle="board">Edit task to add to workflux boards.</a>
			</p>
		</div>

		<hr>



		<div class="h5 no-margin-y">
			<div class="flex-grid flex-grid-compact flex-grid-no-gutter-y justify-content-space-between align-items-center">
				<div class="flex-child">
					<h5 class="no-margin-y">Label &amp; Tags</h5>
				</div>
				<div class="flex-child">
					<a href="#task-side-tags-view-REPLACEwithTaskId" data-toggle="accordion" class="color-neutral"><i class="symbol symbol-arrow-down"></i></a>
				</div>
			</div>
		</div>

	
		
		<div id="task-side-tags-view-REPLACEwithTaskId" class="accordion" data-accordion-change-hash="false">
		atin cu pung singsing
		</div>


	</div>
</div>