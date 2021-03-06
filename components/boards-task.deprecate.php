

<!-- NOTE: all modules with forms/accordions elements with id or name attributes will be reused by the incoming edit project board as well -->


<!--
	@NOTE on each module-side-*-edit.php components, we need to have prefixes prepended to input field names/id attributes, etc to avoid conflicting instances of user filter components
	
	(ie when the project edit board and task edit board markups are both present in one page. This is guaranteed to occur on some or all of the incoming project-view templates being built by nadia)

	Keep an eye out for these strings to make sense of why the fuc sam did??. Feel free to change the structure of the naming system as well to whatever is comfortable on your end, but keep in mind prefixes will be primarily important to avoid ui/ front end conflicts if there are ids/names that fall out of this standardized syntax, feel free to fix too:


	REPLACEwithPostType

		definition:
			=> either `project` ot `task`, depending which editing board the module is placed.
			so if it's in the task-id-edit board, the a field <?=$args['post']?>-team-lead-to-add-id the field's name is `edit-task-lead-sales-rep-id`

		
		logic:
			if board's for viewing/editing/adding a task
				REPLACEwithPostType = `task`
			
				if board's for editing a project (thank god only editing)
				REPLACEwithPostType = `project`
		

		example front end render:

				<label for="edit-task-title" class="input-label sr-only">Title</label>
				<input type="text" placeholder="Enter title" id="edit-task-title" name="edit-task-title" class=" input input-single-line input-large">

			vs

				<label for="edit-project-title" class="input-label sr-only">Title</label>
				<input type="text" placeholder="Enter title" id="edit-project-title" name="edit-project-title" class=" input input-single-line input-large">



	REPLACEMODE 

		definition:
			depending on which board editor (new task vs edit task) contains the form

			both Add new task or edit new task boards will be present together on pages. This is to ensure eding the task from the view board works.  REPLACEMODE prefix is to resolve any front end conflicts, like input field and label relations or modals and accordions

		logic:
			if board's id is `task-69-edit`
				REPLACEMODE = `edit`

			if board's id is `task-69-new`
				REPLACEMODE = `new`


		example front end render:

				<label for="edit-task-title" class="input-label sr-only">Title</label>
				<input type="text" placeholder="Enter title" id="edit-task-title" name="edit-task-title" class=" input input-single-line input-large">

			vs

				<label for="new-task-title" class="input-label sr-only">Title</label>
				<input type="text" placeholder="Enter title" id="new-task-title" name="new-task-title" class=" input input-single-line input-large">



	filter-FIELDNAME
		definition:
			prefix for input fields that will only extend a valid input fields' capabilities (ie, search for a user name to append to team or search for valid tags to append to labels and tags)
	

		example front end render:'
				field that will contain tags to add to actuial field
					<input id="filter-edit-task-tags" name="filter-edit-task-tags" type="text" class="input input-block input-large input-single-line" placeholder="Search for tag" />
				field that will actually submit to the database
					<input id="edit-task-tags" name="edit-task-tags" type="hidden" />

	REPLACEwithCorrespondingInputFieldName
		definition:
			coimplete name of the filter-* field is connected tofield that will actually submit to the database
	

		example front end render:'

			code on html/php demo version
				field that will contain tags to add to actuial field
					<input id="filter-edit-task-tags" name="filter-edit-task-tags" type="text" class="input input-block input-large input-single-line" placeholder="Search for tag" />
				field that will actually submit to the database
					<input id="edit-task-tags" name="edit-task-tags" type="hidden" />

			vs

				field that will contain tags to add to actuial field
					<input id="filter-REPLACEwithCorrespondingInputFieldName" name="filter-REPLACEwithCorrespondingInputFieldName" type="text" class="input input-block input-large input-single-line" placeholder="Search for tag" />
				field that will actually submit to the database
					<input id="REPLACEwithCorrespondingInputFieldName" name="REPLACEwithCorrespondingInputFieldName" type="hidden" />


 -->


<!-- VIEW  -->
	<!-- @NOTE data-board-resize feature will be built after for building ya boi faster -->
		<div id="task-REPLACEwithPostTypeID-view" data-board-align="left" class="board" data-board-classes="dashboard-board-column-layout" data-board-resize="true" data-board-width="1240px">

			<div class="dashboard-board-column-layout-container  background-theme-contrast">
				<div class="dashboard-board-partition dashboard-board-column-layout-main  background-theme">
					<div class="container">

						
						<?php app_get_component('components/task-main-view'); ?>
					</div>
				</div>
				<div class="dashboard-board-partition dashboard-board-column-layout-side">
					<div class="container container-wide">
						<div class="module-grid">
							<!-- Time Tracker -->
							<?php app_get_component('components/toolbar-side-view') ?>

							<!-- Team Info -->
							<?php app_get_component('components/module-side-team-view') ?>

							<!-- Time Tracker -->
							<?php app_get_component('components/module-side-time-view') ?>

							<!-- Categries Boards/Tags -->
							<?php app_get_component('components/module-side-flux-view') ?>

							<!-- Followers/Wiki/Reminders -->
							<?php app_get_component('components/module-side-followers-view') ?>
						</div>

					</div>
				</div>
			</div>

		</div>

<!-- EDIT -->

	<!-- 

	@NOTE change `task-REPLACEwithPostTypeID-edit` to `task-new` if task to edit is new/

	For board to render for new tasks, feel free to copy paste if needed. This board will have the exact markup structure but attributes will change, particularly these on the `.board` block:
			id => `task-new-edit` // feel free to change as fit

			There will be comments along the way as well
	-->

	<div id="task-REPLACEwithPostTypeID-edit" data-board-align="left" class="board" data-board-classes="dashboard-board-column-layout" data-board-resize="true"  data-board-width="1240px">
		<?php app_get_component('components/boards-task-form') ?>
	</div>



<!-- ADD -->
	<div id="task-new" data-board-align="left" class="board" data-board-classes="dashboard-board-column-layout" data-board-resize="true"  data-board-width="1240px">

		<!-- Shares the same markup structure almost with edit. commented out so front end demo can work but you get the picture -->
		<?php //app_get_component('components/boards-task-form') ?>


					<!-- @PLACEHOLDER -->
						<pre>DO NOT COPY THIS SECTION<br><br><br>View <a href="#task-REPLACEwithPostTypeID-edit" data-toggle="board">Form render on edit board</a></pre>

	</div>