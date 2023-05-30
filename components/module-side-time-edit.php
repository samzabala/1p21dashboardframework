<?php
$defs = array(
	//@param post - type of single achuchuchu
	//is_in_board_modal -> attributes to add/remove whther or not the boi is within a modal
		//@NOTE this attribute is specifically [data-grid-area-md="auto / side"]. should only be present if the markup is within a static page. this attroibute should not be present when being used in a board modal
	'post' => 'task', //project,client,note,whatever
	'is_in_board_modal' => false,
);

$args = app_parse_args($data,$defs);

?>
<div class="module"
	<?php if($args['is_in_board_modal'] == false): //only when in its own basic page ?>
		data-grid-area-md="auto / side"
	<?php endif; ?>
>
	<div class="module-content">
		<div class="input-wrapper input-wrapper-horizontal input-wrapper-block">
			<label class="input input-label flex-1-0" for="<?=$args['post']?>-time-estimate" class="no-margin-y flex-1-0">Time Estimated</label>
			<input type="text" name="<?=$args['post']?>-time-estimate" size="5" id="<?=$args['post']?>-time-estimate" class="input input-box" placeholder="00:00">
		</div>
	</div>
</div>