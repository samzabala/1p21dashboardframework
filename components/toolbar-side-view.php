<?php
$defs = array(
	//@param post - type of single achuchuchu
	'post' => 'task', //project,client,note,whatever
);

$args = app_parse_args($data,$defs);


?>
<div class="module no-padding background-transparent position-relative no-shadow no-border"
	data-grid-area-md="auto / side"
>

	<div class="grid grid-flex grid-constricted-y grid-compact justify-content-space-between">
		<div class="grid-col flex-1-1">
			<!-- @if <?=$args['post']?> is not marked as complete yet -->
				<a href="#" class="toolbar toolbar-small toolbar-horizontal toolbar-block color-inherit">
					<div class="toolbar-tile flex-0-0">
						<span class="well well-compact btn btn-symbol btn-small btn-neutral background-success-hover">
							<i class="symbol symbol-check"></i>
						</span>
					</div>
					<div class="toolbar-tile flex-1-1 ">
						<span class="flex-1-1 btn-no-shadow btn no-padding-x">
								Mark <?=$args['post']?> as complete
						</span>
					</div>
				</a>
			<!-- @else <?=$args['post']?> marked as complete -->
				
					<span class="toolbar toolbar-small toolbar-horizontal toolbar-block color-inherit ">
						<div class="toolbar-tile flex-0-0">
							<span class="well well-compact btn btn-symbol btn-small btn-success btn-no-interaction">
								<i class="symbol symbol-check"></i>
							</span>
						</div>
						<div class="toolbar-tile flex-1-1 "">
							<span class="flex-1-1 btn-no-shadow btn no-padding-x">
								<?=$args['post']?> completed
							</span>
						</div>
					</span>
				
		</div>

		<div class="grid-col flex-0-0">
			<a
				class="btn btn-link background-theme btn-symbol"
				data-toggle="dropdown">
					<i class="symbol symbol-kebab-horizontal"></i>
			</a>
			<ul class="dropdown dropdown-top-flush dropdown-center-x" data-dropdown-width="100%">
						<li>
							<a
								class="color-inherit color-primary-hover js-edit-time-record"
								href="<?=app_create_link(array('template'=>$args['post'].'-edit')) ?>"
								data-record-id="REPLACEwithPostTypeID">
									Edit
							</a>
						</li>
						<li>
							<a
								href="#"
								class="color-inherit color-primary-hover js-edit-time-record"
								data-record-id="REPLACEwithPostTypeID"
								data-record-idx="REPLACEwithPostTypeIDX">
									Delete
							</a>
						</li>
					</ul>
		</div>
	</div>
		
</div>