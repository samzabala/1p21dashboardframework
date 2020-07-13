

<!-- NOTE this field is only for searching valid users -->
<div class="modal" data-modal-max-width="600px" data-modal-close="false">
		<input id="filter-user-ids-to-add" type="hidden">
	<label for="filter-user" class="input-label sr-only">Search</label>
	<div class="input-group input-group-block input-group-horizontal p">
		<!-- @NOTE
			replace placeholder with appropriate verbage based on input field it fills in eg Team Leades: Choos Team Leads, Assigned To: Choose Asignee, etc
		-->
		<input id="filter-user" name="filter-user" type="text" class="input input-block input-large input-single-line" data-toggle="dropdown" placeholder="Choose PLACEHOLDER" />
		<button class="btn btn-symbol btn-default" onclick="REPLACEwithFunctionToClearSearchBox"><i class="symbol symbol-close"></i></button>
	</div>
	<ul class="dashboard-list-group-users list-group list-group-toggle font-size-large">
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
		<li class="flex-xs flex-wrap align-items-center justify-content-space-between">
			<span class="flex-1-1">
				<?php app_get_component('components/profile-image-small') ?>
				<span class="REPLACE">Profile Name</span>
			</span>

			<i class="color-primary symbol float-right symbol-check-toggle font-size-normalize"></i>
		</li>

			<!-- placeholder -->
			<?php for($i=1; $i<10; $i++){ ?>
						
				<li class="flex-xs flex-wrap align-items-center justify-content-space-between">
					<span class="flex-1-1">
						<?php app_get_component('components/profile-image-small') ?>
						<span class="REPLACE">Profile Name</span>
					</span>

					<i class="color-primary symbol float-right symbol-check-toggle font-size-normalize"></i>
				</li>
			<?php } ?>

	</ul>
	<div data-toggle="modal-close" class="btn btn-primary-outline btn-block">Done</div>
</div>