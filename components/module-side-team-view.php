<?php
$defs = array(
	//@param post - type of single achuchuchu
	'post' => 'task', //project,client,note,whatever
);

$args = app_parse_args($data,$defs);


?>
<div class="module"
	data-grid-area-md="auto / side"
>
	<div class="module-content">

		<!-- PROJECT + ACC HEADER-->
			<div class="h5 no-margin-top">
				<div class="flex-grid flex-grid-compact flex-grid-no-gutter-y justify-content-space-between align-items-center">
					<div class="flex-child">
						<h5 class="no-margin-y">Project</h5>
					</div>
					<div class="flex-child">
						<a href="#post-side-team-view" data-toggle="accordion" class="border-color-transparent btn no-padding-x btn-no-shadow btn-small color-neutral color-primary-hover open"><i class="symbol symbol-arrow-down symbol-arrow-up-toggle"></i></a>
					</div>
				</div>
			</div>

		
			<p class="<?=$args['post']?>-project no-margin-bottom">
				<a href="#REPLACElinkToProject" class="">
					<span class="REPLACE">flux.1p21.io/project-name</span>
				</a>
			</p>

		<!-- ACC -->
			<div id="post-side-team-view" class="accordion open" data-accordion-change-hash="false">

				<!-- CLIENT -->
					<h5>Client</h5>
						<p class="<?=$args['post']?>-client">
							
							<a href="#REPLACElinkToClient" class="color-neutral color-secondary-hover">
								<span class="REPLACE">Client Name</span>
							</a>
						</p>



				<!-- TEAM LEADS -->
					<h5>Team Leads</h5>
						<!-- @if hasteam leads -->
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
								No team members yet.
							</span>

								<!-- @if user can edit project -->
								<br>

								<a
									<?php if(FWAPPS_TEMPLATE == 'project-view'): //only when in its own basic page annd not in a board modal ?>
										href="<?=app_create_link(array('template'=>'project-edit')) ?>"
									<?php else: ?>
										href="#project-REPLACEwithPostTypeID-edit"
										data-toggle="board"
									<?php endif; ?>
								>Edit project to add team leads.</a>
						</p>

					<hr class="no-margin-bottom">

					<!-- ASSIGNEES + DUE + PRIORITOOT-->
						<div class="flex-grid flex-grid-fixed flex-grid-no-gutter">


							<?php if($args['post'] == 'task'): ?>
								<div class="flex-col-xs-12">
									
									<h5>Assigned To</h5>
									<p class="task-assignees">
										<!-- @if assigned to anyone -->
											<!-- @LOOP a w/ conditional comma -->
											<a href="<?= app_create_link(array('template'=>'profile')); ?>"><span class="REPLACE">Profile Name</span></a>
											,
													<!-- @PLACEHOLDER: DELETE WHEN READY -->
													<?php for($i=1; $i<=3; $i++){ ?>
														<a href="<?= app_create_link(array('template'=>'profile')); ?>"><span class="REPLACE">Profile Name</span></a><?=$i < 3 ? ',' : '' ?>
													<?php } ?>
													
										<!-- @else unassigned -->
											<span class="color-neutral font-style-italic">
												Unassigned.

												<!-- @if user can edit task -->
												<br>
												<a
													href="<?=app_create_link(array('template'=>$args['post'].'-edit')) ?>"
												>Edit task to assign</a>
											</span>
									</p>
								</div>
							<?php endif; ?>
							
								<div class="flex-col-xs-6 flex-col-md-7">
									<h5>Due on</h5>
									<p class="color-neutral task-due-date no-margin-bottom">
										<!-- @if has due date -->
											<span class="REPLACE">
												4/20/69 at 6:09pm
											</span>
										<!-- @else -->
											Unspecified
									</p>
								</div>
								<?php if($args['post'] == 'task' ): ?>
									<div class="flex-col-xs-6 flex-col-md-5">
										
										<h5>Priority</h5>
										<p class="color-neutral task-priority no-margin-bottom">
											<span class="REPLACE">
												Low
											</span>
										</p>
									</div>
								<?php endif; ?>
							</div>

		</div>

	</div>
</div>