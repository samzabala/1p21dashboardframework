<!-- @NOTE

Depending on which template/page the user is viewing: both Add new task or edit new task boards may need to be present. This is to resolve any front end conflicts, like input field and label relations or modals and accordions

REPLACEMODE depending on which board editor contains the form

	if board's id is `task-REPLACEwithPostTypeID-edit`
		REPLACEMODE = `edit`


	if board's id is `task-new`
		REPLACEMODE = `new`

	example:

		<label for="edit-task-title" class="input-label sr-only">Title</label>
		<input type="text" placeholder="Enter title" id="edit-task-title" name="edit-task-title" class=" input input-single-line input-large">

	vs

		<label for="new-task-title" class="input-label sr-only">Title</label>
		<input type="text" placeholder="Enter title" id="new-task-title" name="new-task-title" class=" input input-single-line input-large">


 -->

<form method="get" class="dashboard-board-column-layout-container  background-theme-contrast">
	<div class="dashboard-board-partition dashboard-board-column-layout-main  background-theme">
		<div class="container">

			<!-- New task vs edit task may look identical depending on how little input may have been made -->
			<h1 class="no-margin-top">
				<!-- @if a new task -->
					Add New Task
				<!-- if editing existing task -->
					Edit Task
			</h1>

			<input type="hidden" id="task-entry-mode" name="REPLACEMODE" />

			<!-- if editing existing task -->
				<input type="hidden" id="REPLACEMODE-task-entry-id" name="task-entry-id" />

			<!-- Title -->
				<div class="task-heading">
					<div class="input-wrapper p input-wrapper-block input-wrapper-vertical">
						<label for="REPLACEMODE-task-title" class="input-label sr-only">Title</label>
						<input type="text" placeholder="Enter title" id="REPLACEMODE-task-title" name="REPLACEMODE-task-title" class=" input input-single-line input-large">
					</div>
					




				</div>
				
			<!-- Description -->
				<div class="task-description">
					<!-- @NOTE use tinymce here -->
					<div class="input-wrapper input-wrapper-block input-wrapper-vertical p">


						<label for="REPLACEMODE-task-body" class="input-label sr-only">Description</label>
						<textarea name="REPLACEMODE-task-body" id="REPLACEMODE-task-body" cols="30" rows="10" class="input input-multiple-line">use tinymce in place</textarea>
					</div>
				</div>

				<!-- @NOTE .task-time-meta is not needed for now if not possible to program yet. ok to comment out for now -->
				<div class="task-time-meta">
					<div class="input-wrapper p input-wrapper-vertical input-wrapper-block">
						<div class="input-toggle">
							<input type="checkbox" class="input" name="REPLACEMODE-task-enable-delay" id="REPLACEMODE-task-enable-delay">
							<label for="REPLACEMODE-task-enable-delay" class="input-label input-toggle-label">
								Delay task requests
							</label>
						</div>
					</div>

					<!-- 

					@NOTE
						.flex-grid
							classes to add
								`input-disabled` => when input[name=task-enable-delay] is checked
					-->
					<div class="flex-grid flex-grid-compact flex-grid-no-gutter-y">
						<div class="flex-col-xs-12  flex-col-md-8">
							<div class="input-wrapper p input-wrapper-block input-wrapper-horizontal">
								<button class="btn  btn-default  btn-block justify-content-space-between" data-toggle="dropdown">

								<!-- @NOTE @DYNAMIC : update text to the value set to tthe input field -->
									<span class="task-delay-date-value">
										<span class="REPLACE">
											Saturday, April 20, 2069
										</span>
									</span>

									<i class="symbol symbol-arrow-down color-primary"></i>
								</button>
								<div class="dropdown dropdown-top-flush dropdown-left no-padding">
									<input type="text" class="input-calendar border-color-transparent" name="REPLACEMODE-task-delay-date" id="REPLACEMODE-task-delay-date">
								</div>
							</div>
						</div>
						<div class="flex-col-xs-12  flex-col-md-4">

							<div class="input-wrapper p input-wrapper-block input-wrapper-vertical">
								<label for="REPLACEMODE-task-delay-time" class="input-label sr-only">Time</label>
								<input type="time" placeholder="Enter title" id="REPLACEMODE-task-delay-time" name="REPLACEMODE-task-delay-time" class="input-round input input-single-line">
							</div>
						</div>
					</div>



					<hr>
				</div>


			<!-- Attachments -->
				<div class="task-attachments">
					<!-- Stable version -->
					<h4 class="no-margin-y">
						Attachments
					</h4>

					<!-- Design Version -->
					<!--
					<div class="flex-grid flex-grid-no-gutter justify-content-space-between align-items-center">


						<div class="flex-col-xs-6">
							<h4 class="no-margin-y">
								Attachments
							</h4>
						</div>


						<div class="flex-col-xs-6 text-align-right">
							<a href="#" onClick="REPLACEfnToTriggertaskAttachmentsToAdd(event)" class="btn btn-primary-outline btn-small ">Add Attachment <i class="symbol symbol-plus"></i></a>
						</div>
					</div>
					-->
				
					<!-- @if attachments have rows -->
						<?php app_get_component('components/attachment-grid-for-edit'); ?>
						
						<?php app_get_component('components/attachment-field'); ?>
					
					
				</div>
				
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