<!-- EDIT -->

	<!-- 

	@NOTE change `task-REPLACEwithPostTypeID-edit` to `task-new` if task to edit is new/

	For board to render for new tasks, feel free to copy paste if needed. This board will have the exact markup structure but attributes will change, particularly these on the `.board` block:
			id => `task-new-edit` // feel free to change as fit

			There will be comments along the way as well
	-->

	<div id="note-REPLACEwithPostTypeID-edit" data-board-align="left" class="board" data-board-classes="dashboard-board-column-layout" data-board-resize="true"  data-board-width="1240px">
		<form method="get" class="dashboard-board-column-layout-container  background-theme-contrast">
			<div class="no-scrollbar dashboard-board-partition dashboard-board-column-layout-main  background-theme">
				<div class="container">

					<?php app_get_component('components/task-main-edit')?>
						
				</div>
			</div>
			<div class="no-scrollbar dashboard-board-partition dashboard-board-column-layout-side">
				<div class="container container-wide">

					<div class="module-grid">
						<!-- Toolbar  -->
						<?php app_get_component('components/toolbar-side-edit','',false,array(
							'is_in_board_modal' => true
						)) ?>

						<!-- Team Info -->
						<?php app_get_component('components/module-side-team-edit','',false,array(
							'is_in_board_modal' => true
						)) ?>

						<!-- Time Tracker -->
						<?php app_get_component('components/module-side-time-edit','',false,array(
							'is_in_board_modal' => true
						)) ?>

						<!-- Categries Boards/Tags -->
						<?php app_get_component('components/module-side-flux-edit','',false,array(
							'is_in_board_modal' => true
						)) ?>

						<!-- Followers/Wiki/Reminders -->
						<?php app_get_component('components/module-side-followers-edit','',false,array(
							'is_in_board_modal' => true
						)) ?>
					</div>

				</div>
			</div>
		</form>
	</div>