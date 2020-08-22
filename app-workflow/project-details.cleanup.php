<!-- 
<?php
app_get_component('components/board-add-edit-project');
app_get_component('components/board-view-task');
app_get_component('components/board-add-edit-task');
?> -->
<div id="workflow-project-detail"
	class="module-grid"
	data-grid-template-columns-md="[main] 1fr [side] 350px"
	data-grid-template-rows-md="repeat(auto-fill,minmax(0,min-content))"
	>
    

	<!-- Toolbar -->
	<?php app_get_component('components/toolbar-side-view') ?>
	
	
	<div class="module no-padding no-border background-transparent"
		data-grid-column-md="main"
		data-grid-row-md="1 / span 6">

		<?php app_get_component('components/project-main-view'); ?>
	</div>

	<!-- Team Info -->
	<?php app_get_component('components/module-side-team-edit') ?>

	<!-- Time Tracker -->
	<?php app_get_component('components/module-side-time-edit') ?>

	<!-- Categries Boards/Tags -->
	<?php app_get_component('components/module-side-flux-edit') ?>

	<!-- Followers/Wiki/Reminders -->
	<?php app_get_component('components/module-side-followers-edit') ?>


</div>