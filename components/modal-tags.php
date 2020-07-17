

<!-- NOTE this field is only for searching valid tagss -->
<div class="modal" data-modal-max-width="600px">

	<!-- @NOTE might need to have suffixes appended to input field name to avoid conflicting other innstances of tags filter components -->

	<div class="input-wrapper input-wrapper-vertical input-wrapper-block p">
		<label for="filter-tags-REPLACEwithCorrespondingInputFieldName" class="input-label sr-only">Search Tags</label>

		<input id="filter-tags-REPLACEwithCorrespondingInputFieldName" name="filter-tags-REPLACEwithCorrespondingInputFieldName" type="text" class="input input-block input-large input-single-line" placeholder="Search for tag" />
		
		<div class="input-group input-group-block input-group-horizontal">
		</div>
	</div>

	<div class="dashboard-list-group-text list-group list-group-toggle list-group-toggle-multiple">

		<!-- If value matches a string in existing tags -->
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
			<a href="#" class="list-group-item flex-xs flex-wrap align-items-center justify-content-space-between">
				<span class="flex-1-1">
					<span class="REPLACE">Tag Text</span>
				</span>

				<i class="color-primary symbol float-right symbol-check-toggle font-size-normalize"></i>
			</a>

				<!-- placeholder -->
				<?php for($i=1; $i<20; $i++){ $j = 1; ?>
							
					<a href="#" class="list-group-item flex-xs flex-wrap align-items-center justify-content-space-between">
						<span class="flex-1-1">
							<span class="REPLACE">Tag Te<?php while($j <= $i): echo 'e'; $j++; endwhile; ?>xt</span>
						</span>

						<i class="color-primary symbol float-right symbol-check-toggle font-size-normalize"></i>
					</a>
				<?php } ?>

	</div>


	<hr>

	<!-- Ability to create new tags -->

		<!-- @if add tag successful and could be done async-->
			<div class="alert alert-success p">
				<span class="alert-close" data-toggle="alert-close"><i class="symbol symbol-close"></i></span>
				The tag/s `<span class="REPLACE">New Tags Text</span>` has been added
			</div>

		<div class="input-wrapper input-wrapper-vertical input-wrapper-block p">
			<label for="filter-tags-new-REPLACEwithCorrespondingInputFieldName" class="input-label">Create New Tag</label>
			<div class="input-group input-group-block input-group-horizontal p">

				<input id="filter-tags-new-REPLACEwithCorrespondingInputFieldName" name="filter-tags-new-REPLACEwithCorrespondingInputFieldName" type="text" class="input input-block input-tags" placeholder="Type a new tag" />
				<button class="btn btn-primary">Create tags</button>
			</div>
		</div>

		<button data-toggle="modal-close" class="btn btn-primary-outline btn-block" onclick="REPLACEWithFnThatMakesChangesToCorrespondingInputFieldName">Set Tags</button>
</div>