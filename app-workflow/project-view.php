<div id="workflow-project-view"
	class="module-grid"
	data-grid-template-columns-md="[main] 1fr [side] 350px"
	data-grid-template-rows-md="repeat(auto-fill,minmax(0,min-content))"
	>

	<!-- Toolbar -->
	<?php app_get_component('components/toolbar-side-view', null, false, array('post'=>'project')) ?>
	
	
	<!-- Main-->
	<div class="module no-padding no-border background-transparent"
		data-grid-column-md="main"
		data-grid-row-md="1 / span 6">

		<?php app_get_component('components/project-main-view'); ?>
	</div>

	<!-- Team Info -->
	<?php app_get_component('components/module-side-team-view', null, false, array('post'=>'project')) ?>

	<!-- Time Tracker -->
	<?php app_get_component('components/module-side-time-view', null, false, array('post'=>'project')) ?>

	<!-- Categries Boards/Tags -->
	<?php app_get_component('components/module-side-flux-view', null, false, array('post'=>'project')) ?>

	<!-- Followers/Wiki/Reminders -->
	<?php app_get_component('components/module-side-followers-view', null, false, array('post'=>'project')) ?>



</div>