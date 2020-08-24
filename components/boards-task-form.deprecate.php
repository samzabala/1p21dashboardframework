



<form method="get" class="dashboard-board-column-layout-container  background-theme-contrast">
	<div class="dashboard-board-partition dashboard-board-column-layout-main  background-theme">
		<div class="container">

			<?php app_get_component('components/task-main-edit')?>
				
		</div>
	</div>
	<div class="dashboard-board-partition dashboard-board-column-layout-side">
		<div class="container container-wide">

			<div class="module-grid">
				<!-- Toolbar  -->
				<?php app_get_component('components/toolbar-side-edit') ?>

				<!-- Team Info -->
				<?php app_get_component('components/module-side-team-edit') ?>

				<!-- Time Tracker -->
				<?php app_get_component('components/module-side-time-edit') ?>

				<!-- Categries Boards/Tags -->
				<?php app_get_component('components/module-side-flux-edit') ?>

				<!-- Followers/Wiki/Reminders -->
				<?php app_get_component('components/module-side-followers-edit') ?>
			</div>

		</div>
	</div>
</form>