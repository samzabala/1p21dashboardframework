<?php
$defs = array(
	//@param post - type of single achuchuchu
	//is_in_board_modal -> attributes to add/remove whther or not the boi is within a modal
		//@NOTE this attribute is specifically [data-grid-area-md="auto / side"]. should only be present if the markup is within a static page. this attroibute should not be present when being used in a board modal
	'post' => 'task', //project,client,note,whatever
	'is_in_onpage' => false
	
);

$args = app_parse_args($data,$defs);
?>
<!-- NOTE this field is only for extending field capabilities -->
<div class="modal" data-modal-width="600px">

	<?php if($args['is_in_onpage']): ?>
		<form action="">
	<?php endif; ?>
	
		<div class="input-wrapper input-wrapper-vertical input-wrapper-block p">
			<label for="filter-tags-REPLACEwithCorrespondingInputFieldName" class="input-label">Search Existing Tags</label>

			<input id="filter-tags-REPLACEwithCorrespondingInputFieldName" name="filter-tags-REPLACEwithCorrespondingInputFieldName" type="text" class="input input-block input-large input-single-line" placeholder="Search for tag" />
			
			<div class="input-group input-block input-group-horizontal">
			</div>
		</div>

		<div class="dashboard-list-group-clip-text list-group list-group-toggle list-group-toggle-multiple">

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

					<i class="color-primary symbol symbol-check-toggle font-size-normalize"></i>
				</a>

					<!-- placeholder -->
					<?php for($i=1; $i<20; $i++){ $j = 1; ?>
								
						<a href="#" class="list-group-item flex-xs flex-wrap align-items-center justify-content-space-between">
							<span class="flex-1-1">
								<span class="REPLACE">Tag Te<?php while($j <= $i): echo 'e'; $j++; endwhile; ?>xt</span>
							</span>

							<i class="color-primary symbol symbol-check-toggle font-size-normalize"></i>
						</a>
					<?php } ?>

		</div>


		<hr>

		<!-- Ability to create new tags -->

			<!-- @if add tag successful and could be done async, render and add new tags in `list-group` and set as active-->
				<?php app_get_component('components/alert','function',false,array(
					'type'		=> 'success',
					'content'	=> 'The tag/s `<span class="REPLACE">New Tags Text</span>` has been added'
				)); ?>

			<div class="input-wrapper input-wrapper-vertical input-wrapper-block p">
				<label for="filter-tags-new-REPLACEwithCorrespondingInputFieldName" class="input-label">Create New Tags</label>
				<div class="input-group input-block input-group-horizontal p">

					<input id="filter-tags-new-REPLACEwithCorrespondingInputFieldName" name="filter-tags-new-REPLACEwithCorrespondingInputFieldName" type="text" class="input input-block input-tags" placeholder="Type new tag/s" />
					<button class="btn btn-primary">Create tags</button>
				</div>
			</div>

			<button data-toggle="modal-close" class="btn btn-primary-outline btn-block" onclick="REPLACEWithFnThatMakesChangesToCorrespondingInputFieldName">Set tags</button>
	
	<?php if($args['is_in_onpage']): ?>
		</form>
	<?php endif; ?>
</div>