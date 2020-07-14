

<!-- NOTE this field is only for searching valid users -->
<div class="dropdown dropdown-center-x no-padding" data-dropdown-width="100%">

	<!-- @NOTE might need to have suffixes appended to input field name to avoid conflicting other innstances of user filter components -->
	<input name="filter-ids-to-add-REPLACEwithCorrespondingInputFieldName" type="hidden">

	<div class="input-wrapper input-wrapper-vertical input-wrapper-block input-no-radius">
		<label for="filter-user-REPLACEwithCorrespondingInputFieldName" class="input-label sr-only">Search</label>
		<!-- @NOTE
			replace placeholder with appropriate verbage based on input field it fills in eg Team Leades: Choos Team Leads, Assigned To: Choose Asignee, etc
		-->
		<input id="filter-user-REPLACEwithCorrespondingInputFieldName" name="filter-user-REPLACEwithCorrespondingInputFieldName" type="text" class="input input-block input-single-line border-color-transparent" placeholder="Search for PLACEHOLDER" />
	</div>

	<div class="dashboard-list-group-users list-group list-group-toggle  list-group-toggle-multiple list-group-compact">
		<!--
			@NOTE
			@dynamic @loop li 
				cclasses to add:
					`display-none` => if doesnt contain input value string


				order by priority meta
				1: alphabetical
				2: string match to searchbar
				3: currwently active member

		-->
		
		<a href=#" class="list-group-item flex-xs flex-wrap align-items-center justify-content-space-between">
			<span class="flex-1-1">
				<?php app_get_component('components/profile-image-small-span') ?>
				<span class="REPLACE">Profile Name</span>
			</span>

			<i class="color-primary symbol float-right symbol-check-toggle font-size-normalize"></i>
		</a>

			<!-- placeholder -->
			<?php for($i=1; $i<10; $i++){ ?>
						
				<a href=#" class="list-group-item flex-xs flex-wrap align-items-center justify-content-space-between">
					<span class="flex-1-1">
						<?php app_get_component('components/profile-image-small-span') ?>
						<span class="REPLACE">Profile Name</span>
					</span>

					<i class="color-primary symbol float-right symbol-check-toggle font-size-normalize"></i>
				</a>
			<?php } ?>

	</div>
	<button data-toggle="dropdown" class="btn btn-primary-outline btn-block border-color-transparent btn-no-radius">Done</button>
</div>