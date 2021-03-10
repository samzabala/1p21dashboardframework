<?php
$defs = array(
	//@param post - type of single achuchuchu
	'post' => 'task', //project,client,note,whatever
);

$args = app_parse_args($data,$defs);
?>

<input type="hidden"  name="<?=$args['post']?>-attachments-to-delete" />
<?php app_get_component('components/attachment-grid-view'); ?>