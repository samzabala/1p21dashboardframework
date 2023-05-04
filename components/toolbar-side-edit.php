<?php
$defs = array(
	//@param post - type of single achuchuchu
	'post' => 'task', //project,client,note,whatever
);

$args = app_parse_args($data,$defs);


?>
<div class="module no-padding background-transparent position-relative no-shadow no-border"
	grid-area-xs="toolbar"
	grid-area-md="none"
>
	<div class="grid grid-flex grid-constricted-y grid-compact justify-content-space-between">
		<div class="grid-col flex-1-1">
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
		<div class="grid-col flex-1-1">

			<!-- @NOTE onclick event should revert to previous history state or previously viewed page. feel free modify as needed -->
			<button data-toggle="board" href="#" onclick="event.preventDefault(); console.log('work u sonofabitch'); history.back(); " class="btn btn-neutral-outline btn-block">Cancel</button>
		</div>

		<!-- @NOTE comment out for now. this contains future features such ass project templates, saving drafts etc. -->

		<div class="grid-col flex-0-0">
			<a
				class="btn btn-link background-theme btn-symbol"
				data-toggle="dropdown">
					<i class="symbol symbol-kebab-horizontal"></i>
			</a>
			<ul class="dropdown dropdown-top-flush dropdown-center-x" data-dropdown-width="100%">
						<li>
							<a
								href="#"
								class="color-inherit color-primary-hover">
									Save as Draft
							</a>
						</li>

				<?php if($args['post'] == 'project'): ?>
						<li>
							<a
								href="#"
								class="color-inherit color-primary-hover">
									Save as project template
							</a>
						</li>
				<?php endif; ?>


				<!-- @PLACEHOLDER.  -->

					<li>
						<a
							href="#"
							data-record-id="REPLACEwithPostTypeID">
								Do other thing
						</a>
					</li>

					<li>
						<a
							href="#"
							data-record-id="REPLACEwithPostTypeID">
								Delete probably
						</a>
					</li>

			</ul>
		</div>
	</div>
</div>