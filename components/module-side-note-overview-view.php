<?php
$defs = array(
	//@param post - type of single achuchuchu
	//is_in_board_modal -> attributes to add/remove whther or not the boi is within a modal
		//@NOTE this attribute is specifically [data-grid-area-md="auto / side"]. should only be present if the markup is within a static page. this attroibute should not be present when being used in a board modal
	'post' => 'note', //project,client,note,whatever
	'is_in_board_modal' => false,
);

$args = app_parse_args($data,$defs);

?>
<div class="module position-relative"
	<?php if($args['is_in_board_modal'] == false): //only when in its own basic page ?>
		data-grid-area-md="auto / side"
	<?php endif; ?>
>
	<div class="module-content">

		<!-- Client -->
			<h5>Client</h5>
			<p class="<?=$args['post']?>-client">
				<span class="REPLACE">Client Name</span>
			</p>

		<!-- Project -->
			<h5>Project</h5>
			<p class="<?=$args['post']?>-project">
				<span class="REPLACE">Project Name</span>
			</p>

		<!-- Task -->
			<h5>Task</h5>
			<p class="<?=$args['post']?>-task">
				<span class="REPLACE">Task Name</span>
			</p>

		<hr class="no-margin-y">


		<!-- Sher -->
			<div class="h5 no-margin-y">
				<div class="grid grid-flex grid-compact grid-constricted-y justify-content-space-between align-items-center">
					<div class="grid-col">
						<h5 class="input input-label">Shared With:</h5>
					</div>
				</div>
			</div>

			<!-- @if users shared with -->
			<!-- @note: profile title will be based on the project the note is attached to -->
					<div class="project-leads">

					<!-- @LOOP component -->
						<?php app_get_component('components/profile-titled') ?>
							<!-- @PLACEHOLDER: DELETE WHEN READY -->
							<?php for($i=1; $i<9; $i++){ ?>
								<?php app_get_component('components/profile-titled'); ?>
							<?php } ?>
					</div>

			<!-- @else -->
				<p>
					<span class="color-neutral font-style-italic">
						Not shared yet
					</span>
				</p>
	</div>
</div>