<form action="">
	<div id="workflow-note-edit"
		class="module-grid"
		data-grid-template-columns-md="[main] 1fr [side] 350px"
		data-grid-template-rows-md="repeat(auto-fill,minmax(0,min-content))"
		>


		<!-- Main-->
		<div
			class="module align-self-start"
			data-grid-column-md="main"
			data-grid-row-md="1 / span 6">
			<div class="module-content">
				<?php app_get_component('components/note-main-view'); ?>
			</div>
		</div>
		<!-- Side stuff -->
			<?php app_get_component('components/module-side-note-overview-view') ?>
	</div>
</form>
