<div class="module">
	<div class="module-content">



		<div class="h5 no-margin-top">
			<div class="flex-grid flex-grid-compact flex-grid-no-gutter-y justify-content-space-between align-items-center">
				<div class="flex-child">
					<h5 class="no-margin-y">Followers</h5>
				</div>
				<div class="flex-child">
					<a href="#board-track-time"  data-toggle="board" data-board-title="Add Time Entry" class="btn btn-primary-outline btn-small">Follow <i class="symbol symbol-plus"></i></a>
					&nbsp;
					<a href="#task-side-followers-view" data-toggle="accordion" class="border-color-transparent btn no-padding-x btn-no-shadow btn-small color-neutral color-primary-hover open"><i class="symbol symbol-arrow-down symbol-arrow-up-toggle"></i></a>
				</div>
			</div>
		</div>


	
		
		<div id="task-side-followers-view" class="accordion open" data-accordion-change-hash="false">
			<!-- if has followers -->
				<div class="task-followers">
					
					<?php app_get_component('components/profile-named') ?>
						<!-- @PLACEHOLDER: DELETE WHEN READY -->
						<?php for($i=1; $i<=3; $i++){ ?>
					<?php app_get_component('components/profile-named') ?>
						<?php } ?>
				</div>
			<!-- @else -->

				<p class="color-neutral font-style-italic">
					No followers available.
				</p>
		</div>



		<hr>



		<div class="h5 no-margin-y">
			<div class="flex-grid flex-grid-compact flex-grid-no-gutter-y justify-content-space-between align-items-center">
				<div class="flex-child">
					<h5 class="no-margin-y">Wiki/How-Tos</h5>
				</div>
				<div class="flex-child">
					<a href="#task-side-wiki-view" data-toggle="accordion" class="border-color-transparent btn no-padding-x btn-no-shadow btn-small color-neutral color-primary-hover open"><i class="symbol symbol-arrow-down symbol-arrow-up-toggle"></i></a>
				</div>
			</div>
		</div>

	
		
		<div id="task-side-wiki-view" class="accordion open" data-accordion-change-hash="false">

					
			<!-- @else -->
				<p class="color-neutral font-style-italic">
					No set tags.

					<!-- @if user can edit task -->
						<br>
						<a class="color-inherit" href="#task-REPLACEwithPostTypeID-edit" data-toggle="board">Edit task to add tags.</a>
				</p>
		</div>
	</div>
</div>