<?php
$defs = array(
	//@param post - type of single achuchuchu
	'post' => 'task', //project,client,note,whatever
);

$args = app_parse_args($data,$defs);


?>



<!-- @TODO finalize apporpriate or remove uneeded conditional statement here -->
<?php if($args['post'] == 'task' || $args['post'] == 'project'): ?>
<div class="module" 
	data-grid-area-md="auto / side"
>
	<div class="module-content">
		<div class="input-wrapper input-wrapper-horizontal input-wrapper-block">
			<label class="input-label flex-1-0" for="<?=$args['post']?>-time-estimate" class="no-margin-y flex-1-0">Time Estimate</label>
			<input type="text" name="<?=$args['post']?>-time-estimate" size="5" id="<?=$args['post']?>-time-estimate" class="input input-single-line" placeholder="00:00">
		</div>
	</div>
</div>
<?php endif; ?>