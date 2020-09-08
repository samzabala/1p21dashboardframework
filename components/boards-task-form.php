



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