<?php
$defs = array(
	//@param post - type of single achuchuchu
	'post' => 'note', //project,client,note,whatever
);

$args = app_parse_args($data,$defs);


?>
<div class="module no-padding background-transparent position-relative no-shadow no-border"
	grid-area-xs="toolbar"
	grid-area-md="none"
>
	<div class="grid grid-flex grid-constricted-y grid-compact justify-content-space-between">
		<div class="grid-col flex-1-1">
			<a href="<?=app_create_link(array('template'=>'note-edit')) ?>" class="btn btn-primary btn-block">
					Edit <?=$args['post']?> <i class="symbol symbol-edit"></i>
			</a>
		</div>

		<div class="grid-col flex-0-0">
			<a
				class="btn btn-link background-theme btn-symbol"
				title="Delete"
				data-toggle="dropdown">
					<i class="symbol symbol-delete"></i>
			</a>
		</div>

		
	</div>
</div>