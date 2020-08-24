<!-- New project vs edit project may look identical depending on how little input may have been made -->
	<h1 class="no-margin-top">
		<!-- @if a new project -->
			Add New Project
		<!-- if editing existing project -->
			Edit Project
	</h1>


<!-- if editing existing project -->
	<input type="hidden" id="project-entry-id" name="project-entry-id" />

<!-- Title -->
	<div class="project-heading">
		<div class="input-wrapper p input-wrapper-block input-wrapper-vertical">
			<label for="project-title" class="input-label sr-only">Title</label>
			<input type="text" placeholder="Enter title" id="project-title" name="project-title" class=" input input-single-line input-large">
		</div>
	</div>
	
<!-- Description -->
	<div class="project-description">
		<!-- @NOTE use tinymce here -->
		<div class="input-wrapper input-wrapper-block input-wrapper-vertical p">
			<label for="project-body" class="input-label sr-only">Description</label>
			<textarea name="project-body" id="project-body" cols="30" rows="10" class="input input-multiple-line">use tinymce in place</textarea>
		</div>
	</div>

<!-- @NOTE .project-time-meta is not needed for now if not possible to program yet. ok to comment out for now -->
<div class="project-time-meta">
	<div class="input-wrapper p input-wrapper-vertical input-wrapper-block">
		<div class="input-toggle">
			<input type="checkbox" class="input" name="project-apply-template" id="project-apply-template">
			<label for="project-apply-template" class="input-label input-toggle-label">
				Apply Project Template
			</label>
		</div>
	</div>

	<!-- 

	@NOTE
		.flex-grid
			classes to add
				`input-disabled` => when input[name=project-apply-template] is checked
	-->
	<div class="input-wrapper p input-wrapper-block input-wrapper-horizontal">
		<button class="btn  btn-default  btn-block justify-content-space-between" data-toggle="dropdown">

		<!-- @NOTE @DYNAMIC : update text to the value set to tthe input field -->
			<span class="project-template-value">
				<span class="REPLACE">
					Template name
				</span>
			</span>

			<i class="symbol symbol-arrow-down color-primary"></i>
		</button>
		<div class="dropdown dropdown-top-flush dropdown-left" data-dropdown-width="100%">
			<!-- @PLACEHOLDER. delete qwhen ready -->
			<ul>
				<li><a href="#">360 Site</a></li>
				<li><a href="#">QL Site</a></li>
				<li><a href="#">Some kind of project</a></li>
				<li><a href="#">Another type or project</a></li>
			</ul>
		</div>
	</div>



	<hr>
</div>


<!-- Attachments -->
<div class="project-attachments">
	<div class="flex-grid flex-grid-compact justify-content-space-between align-items-center">
		<div class="flex-col-xs-12">
			<h4 class="no-margin-y">
				Attachments
			</h4>
		</div>

		<!-- <div class="flex-col-xs-6 text-align-right">
			<a href="#" onClick="REPLACEfnToTriggerprojectAttachmentsToAdd(event)" class="btn btn-primary-outline btn-small ">Add Attachment <i class="symbol symbol-plus"></i></a>
		</div>
			-->
	</div>

	<!-- @if attachments have rows -->
		<?php app_get_component('components/attachment-grid-for-edit'); ?>
		
		<?php app_get_component('components/attachment-field'); ?>
	
	
</div>