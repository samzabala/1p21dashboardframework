<?php
$defs = array(
	//@param post - type of single achuchuchu
	'post' => 'task', //project,client,note,whatever
);

$args = app_parse_args($data,$defs);

?>
<div id="add-attacment" class="modal" data-modal-width="600px" data-modal-title="Add <?=$args['post']?> attachment">
	<form action="">
		<!-- HIDEN INPUT TYPES HERE -->

		<?php app_get_component('components/attachment-field', null, false, array('post'=> $args['post']));?>

		<div class="text-align-right">

			<button type="submit" class="btn btn-neutral-outline" data-toggle="modal-close">Cancel</button>
			<button type="submit" class="btn btn-primary">Submit</button>
		</div>

	</form>
</div>