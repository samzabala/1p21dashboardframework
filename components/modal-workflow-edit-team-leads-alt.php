


<!-- NOTE this field is an extension of the editor's fields -->
<div class="modal" data-modal-width="600px">

	<!--
		@NOTE might need to have suffixes appended to input field name to avoid conflicting other innstances of user filter components

		@Cristian My understanding is the team leads data would be set under the project's data and not the task and if the user whill have the ability to edit either only in the project itself, the task, or both but just in case, I setup a placeholder prefix you can replace with the appropriate term...

		REPLACEwithPostType definition:
			=> either `project` ot `task`, depending which editing board the modal is placed.
			so if it's in the task-id-edit board, the a field <?=$args['post']?>-team-lead-to-add-id the field's name is `edit-task-lead-sales-rep-id`
	-->
	
	<div class="input-wrapper input-wrapper-vertical input-wrapper-block position-relative p">
		<h5 class="input-label">Sales Rep</h5>
		<!-- @NOTE
			replace placeholder with appropriate verbiage based on input field it fills in eg Team Leades: Choos Team Leads, Assigned To: Choose Asignee, etc
		-->
		<input id="<?=$args['post']?>-lead-sales-rep-id" name="<?=$args['post']?>-lead-sales-rep-id" type="hidden" />
		
		<a href="#" data-toggle="dropdown" class="input input-single-line input-select flex-xs align-items-center justify-content-space-between">
			<!-- if has user -->
				<span class="team-lead-name">
					<span class="REPLACE">Profile Name</span>
				</span>
			<!-- @else -->
				<span class="team-lead-unset">
				Not Set
				</span>
		</a>

		<div class="dropdown dropdown-top-flush dropdown-center-x no-padding" data-dropdown-width="100%">
			<!-- Note: only render users in the sales dept -->
			<?php app_get_component('components/list-group-toggle-users-small') ?>
			<button class="btn btn-block btn-primary btn-no-radius" data-toggle="dropdown">Set sales rep</button>
		</div>
	</div>
	
	<div class="input-wrapper input-wrapper-vertical input-wrapper-block position-relative p">
		<h5 class="input-label">Account Manager</h5>
		<!-- @NOTE
			replace placeholder with appropriate verbiage based on input field it fills in eg Team Leades: Choos Team Leads, Assigned To: Choose Asignee, etc
		-->
		<input id="<?=$args['post']?>-lead-account-manager-id" name="<?=$args['post']?>-lead-account-manager-id" type="hidden" />
		
		<a href="#" data-toggle="dropdown" class="input input-single-line input-select flex-xs align-items-center justify-content-space-between">
			<!-- if has user -->
				<span class="team-lead-name">
					<span class="REPLACE">Profile Name</span>
				</span>
			<!-- @else -->
				<span class="team-lead-unset">
				Not Set
				</span>
		</a>

		<div class="dropdown dropdown-top-flush dropdown-center-x no-padding" data-dropdown-width="100%">
			<!-- Note: only render users in the management dept -->
			<?php app_get_component('components/list-group-toggle-users-small') ?>

			<button class="btn btn-block btn-primary btn-no-radius" data-toggle="dropdown">Set account manager</button>
		</div>
	</div>
	
	<div class="input-wrapper input-wrapper-vertical input-wrapper-block position-relative p">
		<h5 class="input-label">Project Manager</h5>
		<!-- @NOTE
			replace placeholder with appropriate verbiage based on input field it fills in eg Team Leades: Choos Team Leads, Assigned To: Choose Asignee, etc
		-->
		<input id="<?=$args['post']?>-lead-project-manager-id" name="<?=$args['post']?>-lead-project-manager-id" type="hidden" />
		
		<a href="#" data-toggle="dropdown" class="input input-single-line input-select flex-xs align-items-center justify-content-space-between">
			<!-- if has user -->
				<span class="team-lead-name">
					<span class="REPLACE">Profile Name</span>
				</span>
			<!-- @else -->
				<span class="team-lead-unset">
				Not Set
				</span>
		</a>

		<div class="dropdown dropdown-top-flush dropdown-center-x no-padding" data-dropdown-width="100%">
			<!-- Note: only render users in the management dept -->
			<?php app_get_component('components/list-group-toggle-users-small') ?>

			<button class="btn btn-block btn-primary btn-no-radius" data-toggle="dropdown">Set project manager</button>
		</div>
	</div>
	
	<div class="input-wrapper input-wrapper-vertical input-wrapper-block position-relative p">
		<h5 class="input-label">Lead Designer</h5>
		<!-- @NOTE
			replace placeholder with appropriate verbiage based on input field it fills in eg Team Leades: Choos Team Leads, Assigned To: Choose Asignee, etc
		-->
		<input id="<?=$args['post']?>-lead-designer-id" name="<?=$args['post']?>-lead-designer-id" type="hidden" />
		
		<a href="#" data-toggle="dropdown" class="input input-single-line input-select flex-xs align-items-center justify-content-space-between">
			<!-- if has user -->
				<span class="team-lead-name">
					<span class="REPLACE">Profile Name</span>
				</span>
			<!-- @else -->
				<span class="team-lead-unset">
				Not Set
				</span>
		</a>

		<div class="dropdown dropdown-top-flush dropdown-center-x no-padding" data-dropdown-width="100%">
			<!-- Note: only render users in the designer -->
			<?php app_get_component('components/list-group-toggle-users-small') ?>

			<button class="btn btn-block btn-primary btn-no-radius" data-toggle="dropdown">Set lead designer</button>
		</div>
	</div>


	<div class="input-wrapper input-wrapper-vertical input-wrapper-block position-relative p">
		<h5 class="input-label">Lead Developer</h5>
		<!-- @NOTE
			replace placeholder with appropriate verbiage based on input field it fills in eg Team Leades: Choos Team Leads, Assigned To: Choose Asignee, etc
		-->
		<input id="<?=$args['post']?>-lead-developer-id" name="<?=$args['post']?>-lead-developer-id" type="hidden" />
		
		<a href="#" data-toggle="dropdown" class="input input-single-line input-select flex-xs align-items-center justify-content-space-between">
			<!-- if has user -->
				<span class="team-lead-name">
					<span class="REPLACE">Profile Name</span>
				</span>
			<!-- @else -->
				<span class="team-lead-unset">
				Not Set
				</span>
		</a>

		<div class="dropdown dropdown-top-flush dropdown-center-x no-padding" data-dropdown-width="100%">
			<!-- Note: only render users in the developer -->
			<?php app_get_component('components/list-group-toggle-users-small') ?>

			<button class="btn btn-block btn-primary btn-no-radius" data-toggle="dropdown">Set lead developer</button>
		</div>
	</div>

	<!-- Other team members: multiple list group toggle list for team members that dont need to be lead -->
		<br>
		<hr>


		<div class="input-wrapper input-wrapper-vertical input-wrapper-block position-relative p">
			<h5 class="input-label">Select other team members</h5>
			
			<input id="<?=$args['post']?>-lead-others-id" name="<?=$args['post']?>-lead-others-id" type="hidden" />

			<div class="input-wrapper input-wrapper-vertical input-wrapper-block p">
				<label for="filter-<?=$args['post']?>-lead-others-id" class="input-label sr-only">Search</label>
				<input id="filter-<?=$args['post']?>-lead-others-id" name="filter-<?=$args['post']?>-lead-others-id" type="text" class="input input-block input-single-line" placeholder="Search for team member" />
			</div>
			<?php app_get_component('components/list-group-toggle-users-small-multiple') ?>
		</div>
		
		<div data-toggle="modal-close" class="btn btn-primary-outline btn-block" onclick="REPLACEWithFnThatMakesChangesToCorrespondingInputFieldName">Set Team Leads</div>
		
</div>