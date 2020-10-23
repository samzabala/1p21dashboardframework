<?php
$defs = array(
	//@param post - type of single achuchuchu
	'post' => 'note', //project,client,note,whatever
);

$args = app_parse_args($data,$defs);


?>
<div class="module no-padding background-transparent position-relative no-shadow"
	grid-area-xs="toolbar"
	grid-area-md="none"
>
	<div class="flex-grid flex-grid-no-gutter-y flex-grid-compact justify-content-space-between">
		<div class="flex-child flex-1-1">
			<!--
				@NOTE
				change `Create Task` if task alrerady exists and is just being edited
			-->
			<button type="submit" class="btn btn-primary btn-block">
				<!-- @if task is new -->
					Create <?=$args['post']?>
				<!-- @else if task already exists and is just being edited -->
					<!-- Save edits <i class="symbol symbol-edit"></i></button> -->
			</button>
		</div>

		<div class="flex-child flex-1-1">

			<!-- @NOTE onclick event should revert to previous history state or previously viewed page. feel free modify as needed -->
			<button data-toggle="board" href="#" onclick="event.preventDefault(); console.log('work u sonofabitch'); history.back(); " class="btn btn-neutral-outline btn-block">Cancel</button>
		</div>
		<!-- @NOTE: future feature comment out for now -->
		<!-- @NOTE onclick event should revert to previous history state or previously viewed page. feel free modify as needed -->
		<!-- <div class="flex-child flex-1-1">
			<button data-toggle="board" href="#" onclick="event.preventDefault(); console.log('work u sonofabitch'); history.back(); " class="btn btn-neutral-outline btn-block">Save Draft</button>
		</div> -->

		<!-- @NOTE comment out for now. this contains future features such ass project templates, saving drafts etc. -->

		<div class="flex-child flex-0-0">
			<a
				class="btn btn-link background-theme btn-symbol"
				title="Delete"
				data-toggle="dropdown">
					<i class="symbol symbol-delete"></i>
			</a>
		</div>

		
	</div>
</div>