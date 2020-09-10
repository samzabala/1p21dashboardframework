<!-- New note vs edit note may look identical depending on how little input may have been made -->
<h1 class="no-margin-top">
		<!-- @if a new note -->
			Add New Note
		<!-- if editing existing note -->
			Edit Note
	</h1>


<!-- if editing existing note -->
	<input type="hidden" id="note-entry-id" name="note-entry-id" />

<!-- Title -->
	<div class="note-heading">
		<div class="input-wrapper p input-wrapper-block input-wrapper-vertical">
			<label for="note-title" class="input-label sr-only">Title</label>
			<input type="text" placeholder="Enter title" id="note-title" name="note-title" class=" input input-single-line input-large">
		</div>
	</div>
	
<!-- Description -->
	<div class="note-description">
		<!-- @NOTE use tinymce here -->
		<div class="input-wrapper input-wrapper-block input-wrapper-vertical p">
			<label for="note-body" class="input-label sr-only">Description</label>
			<textarea name="note-body" id="note-body" cols="30" rows="10" class="input input-multiple-line">use tinymce in place</textarea>
		</div>
	</div>

<!-- Attachments -->
	<div class="note-attachments" id="attachments">
		<div class="flex-grid flex-grid-compact justify-content-space-between align-items-center">
			<div class="flex-col-xs-12">
				<h4 class="no-margin-y">
					Attachments
				</h4>
			</div>

			<!-- <div class="flex-col-xs-6 text-align-right">
				<a href="#" onClick="REPLACEfnToTriggernoteAttachmentsToAdd(event)" class="btn btn-primary-outline btn-small ">Add Attachment <i class="symbol symbol-plus"></i></a>
			</div>
				-->
		</div>

		<!-- @if attachments have rows -->
			<?php app_get_component('components/attachment-grid-for-edit'); ?>
			
			<?php app_get_component('components/attachment-field'); ?>
		
		
	</div>