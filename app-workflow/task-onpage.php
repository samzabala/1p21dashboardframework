<div id="workflow-task-view"
	class="module-grid"
	data-grid-template-columns-md="[main] 1fr [side] 350px"
	data-grid-template-rows-md="repeat(auto-fill,minmax(0,min-content))"
	>

	<!-- Toolbar -->
	<?php app_get_component('components/toolbar-side-view','on-page') ?>

	<!-- Main-->
	<div
		class="module align-self-start"
		data-grid-column-md="main"
		data-grid-row-md="1 / span 6">
		<div class="module-content">
			<?php app_get_component('components/task-main-view','on-page'); ?>
		</div>
	</div>

	<!-- Team Info -->
	<?php app_get_component('components/module-side-team-view','on-page') ?>

	<!-- Time Tracker -->
	<?php app_get_component('components/module-side-time-view','on-page') ?>

	<!-- Categries Boards/Tags -->
	<?php app_get_component('components/module-side-flux-view','on-page') ?>

	<!-- Followers/Wiki/Reminders -->
	<?php app_get_component('components/module-side-followers-view','on-page') ?>
</div>