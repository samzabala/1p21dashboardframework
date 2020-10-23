<?php
$defs = array(
	//@param post - type of single achuchuchu
	'post' => 'task', //project,client,note,whatever
	'is_in_board_modal' => false,
);

$args = app_parse_args($data,$defs);


?>
<div class="module"
	data-grid-area-md="auto / side"
>
	<div class="module-content">

		<!-- PROJECT + ACC HEADER-->

			<div class="switch p">
				<div class="switch-off pointer-reference position-relative">
					<div class="flex-grid flex-grid-compact flex-grid-no-gutter-y justify-content-space-between align-items-center">
						<div class="flex-child">
							<h5 class="input-label">Project</h5>
						</div>
						<div class="flex-child">
							<a class="only-hover btn btn-small btn-primary-outline" data-toggle="switch-on">
								Edit Project <i class="symbol symbol-pencil"></i>
							</a>

							<a href="#<?=$args['post']?>-side-team-onpage" data-toggle="accordion" class="border-color-transparent btn no-padding-x btn-no-shadow btn-small color-neutral color-primary-hover open"><i class="symbol symbol-arrow-down symbol-arrow-up-toggle"></i></a>
						</div>
					</div>

					<p class="<?=$args['post']?>-project no-margin-bottom">
						<a href="<?=app_create_link(array('template'=>'project-view')) ?>">
							<span class="REPLACE">Project Name</span>
						</a>
					</p>
					
				</div>
				<form class="switch-on">
					<!-- @HIDDEN INPUT TYPES HERE -->
					<div class="flex-grid flex-grid-compact flex-grid-no-gutter-y justify-content-space-between align-items-center">
						<div class="flex-child">
							<label class="input-label h5 no-margin-bottom" for="<?=$args['post']?>-project">Project</label>
						</div>
						<div class="flex-child">

							<a href="#<?=$args['post']?>-side-team-onpage" data-toggle="accordion" class="border-color-transparent btn no-padding-x btn-no-shadow btn-small color-neutral color-primary-hover open"><i class="symbol symbol-arrow-down symbol-arrow-up-toggle"></i></a>
						</div>
					</div>
					<div class="input-wrapper input-wrapper-block input-wrapper-vertical p">

						<div class="input-group input-group-horizontal input-block">
							<input id="<?=$args['post']?>-project" name="<?=$args['post']?>-project" type="text" class="input input-single-line input-select" data-toggle="dropdown" placeholder="Type or select..." />

							<!-- @HIDDEN INPUT TYPES HERE -->

							<button type="submit" class="btn btn-primary btn-symbol" data-toggle="switch-off">
								<i class="symbol symbol-check"></i>
							</button>
						</div>
						<div class="dropdown dropdown-top-flush dashboard-dropdown-maxed no-padding" data-dropdown-width="100%" data-dropdown-max-height="322px">
							<div class="list-group list-group-interactive list-group-toggle list-group-toggle-allow-no-active">

								<!--
									@NOTE Jenna took note of the ability to create new clients as well but the design includes redundant buttons if built out. This is a stable front end variation of the ui 

									How it functions:

									User clicks and the custom input is ni place
								-->
								<a href="#" class="list-group-item font-weight-700 color-primary post-new">
									Create new project
									`<span class="current-value"><span class="REPLACE">current input value</span></span>`
								</a>
								<!-- 
								@NOTE
									.list-group-item/li
										classes to add
											if project id is in the corresponding project id field => `active`

								-->
								<!-- @PLACEHOLDER -->
									<a href="#" class="list-group-item">Project Name</a>
									<a href="#" class="list-group-item">Project Name</a>
									<a href="#" class="list-group-item">Project Name</a>
									<a href="#" class="list-group-item">Project Name</a>
									<a href="#" class="list-group-item">Project Name</a>
									<a href="#" class="list-group-item">Project Name</a>
									<a href="#" class="list-group-item">Project Name</a>
									<a href="#" class="list-group-item">Project Name</a>
									<a href="#" class="list-group-item">Project Name</a>
									<a href="#" class="list-group-item">Project Name</a>
				
							</div>
							
						</div>
					</div>
				</form>
			</div>

		<!-- ACC -->
			<div id="<?=$args['post']?>-side-team-onpage" class="accordion open" data-accordion-change-hash="false">
				<!-- CLIENT -->
					<?php if($args['post'] !== 'client'): ?>
						<div class="switch p">
							<div class="switch-off pointer-reference position-relative">
								<div class="flex-grid flex-grid-compact flex-grid-no-gutter-y justify-content-space-between align-items-center">
									<div class="flex-child">
										<h5 class="input-label">Client</h5>
									</div>
									<div class="flex-child">
										<a class="only-hover btn btn-small btn-primary-outline" data-toggle="switch-on">
											Edit Client<i class="symbol symbol-pencil"></i>
										</a>
									</div>
								</div>

								<p class="<?=$args['post']?>-client no-margin-bottom">
									<a href="<?=app_create_link(array('template'=>'client-view')) ?>" class="color-neutral color-primary-hover">
										<span class="REPLACE">Client Name</span>
									</a>
								</p>
								
							</div>
							<form class="switch-on">
								<!-- @HIDDEN INPUT TYPES HERE -->
								
								<div class="input-wrapper input-wrapper-block input-wrapper-vertical p">

									<label class="input-label h5 no-margin-bottom" for="<?=$args['post']?>-client">Client</label>

									<div class="input-group input-group-horizontal input-block">
										<input id="<?=$args['post']?>-client" name="<?=$args['post']?>-client" type="text" class="input input-single-line input-select" data-toggle="dropdown" placeholder="Type or select..." />

										<!-- @HIDDEN INPUT TYPES HERE -->

										<button type="submit" class="btn btn-primary btn-symbol" data-toggle="switch-off">
											<i class="symbol symbol-check"></i>
										</button>
									</div>

									<div class="dropdown dropdown-top-flush dashboard-dropdown-maxed no-padding" data-dropdown-width="100%" data-dropdown-max-height="322px">
										<ul class="list-group list-group-interactive list-group-toggle list-group-toggle-allow-no-active">

											

											<!--
												@NOTE Jenna took note of the ability to create new clients as well but the design includes redundant buttons if built out. This is a stable front end variation of the ui 

												How it functions:

												User clicks and the custom input is ni place
											-->
											<a href="#" class="list-group-item font-weight-700 color-primary post-new">
												Create new client
												`<span class="current-value"><span class="REPLACE">current input value</span></span>`
											</a>

											<!-- @PLACEHOLDER -->
												<!-- 
												@NOTE
													.list-group-item/li
														classes to add
															if client id is in the corresponding client id field => `active`

												-->
												<a href="#" class="list-group-item">Client Name</a>
												<a href="#" class="list-group-item">Client Name</a>
												<a href="#" class="list-group-item">Client Name</a>
												<a href="#" class="list-group-item">Client Name</a>
												<a href="#" class="list-group-item">Client Name</a>
												<a href="#" class="list-group-item">Client Name</a>
												<a href="#" class="list-group-item">Client Name</a>
												<a href="#" class="list-group-item">Client Name</a>
												<a href="#" class="list-group-item">Client Name</a>
												<a href="#" class="list-group-item">Client Name</a>
							
										</ul>
										
									</div>
									
								</div>
							</form>
						</div>
					<?php endif; ?>


				<!-- PROJECT TYPE -->
					<?php if($args['post'] == 'project'): ?>
						<div class="switch p">
							<div class="switch-off pointer-reference position-relative">
								<div class="flex-grid flex-grid-compact flex-grid-no-gutter-y justify-content-space-between align-items-center">
									<div class="flex-child">
										<h5 class="input-label">Project Type</h5>
									</div>
									<div class="flex-child">
										<p class="<?=$args['post']?>-project-type no-margin-bottom">
											<!-- @if has project type -->
												<span class="REPLACE">
													Project Type
												</span>
											<!-- @else -->
												<span class="color-neutral font-style-italic">
													Not Set
												</span>
										</p>
									</div>
								</div>

								<p class="<?=$args['post']?>-project no-margin-bottom">
									<span class="REPLACE"></span>
								</p>
								
							</div>
							<form class="switch-on">
								<!-- @HIDDEN INPUT TYPES HERE -->
								
								<div class="input-wrapper input-wrapper-block input-wrapper-vertical p">

									<label class="input-label h5 no-margin-bottom" for="<?=$args['post']?>-project-type">Client</label>

									<div class="input-group input-group-horizontal input-block">
										<input id="<?=$args['post']?>-project-type" name="<?=$args['post']?>-project-type" type="text" class="input input-single-line input-select" data-toggle="dropdown" placeholder="Type or select..." />

										<!-- @HIDDEN INPUT TYPES HERE -->

										<button type="submit" class="btn btn-primary btn-symbol" data-toggle="switch-off">
											<i class="symbol symbol-check"></i>
										</button>
									</div>

									<div class="dropdown dropdown-top-flush dashboard-dropdown-maxed no-padding" data-dropdown-width="100%" data-dropdown-max-height="322px">
										<div class="list-group list-group-interactive list-group-toggle list-group-toggle-allow-no-active">

											<!--
												@NOTE Jenna took note of the ability to create new clients as well but the design includes redundant buttons if built out. This is a stable front end variation of the ui 

												How it functions:

												User clicks and the custom input is ni place
											-->
											<a href="#" class="list-group-item font-weight-700 color-primary post-new">
												Create new project type
												`<span class="current-value"><span class="REPLACE">current input value</span></span>`
											</a>
											<!-- 
											@NOTE
												.list-group-item/li
													classes to add
														if project id is in the corresponding project id field => `active`

											-->
											<!-- @PLACEHOLDER -->
												<a href="#" class="list-group-item">Project Type</a>
												<a href="#" class="list-group-item">Project Type</a>
												<a href="#" class="list-group-item">Project Type</a>
												<a href="#" class="list-group-item">Project Type</a>
												<a href="#" class="list-group-item">Project Type</a>
												<a href="#" class="list-group-item">Project Type</a>
												<a href="#" class="list-group-item">Project Type</a>
												<a href="#" class="list-group-item">Project Type</a>
												<a href="#" class="list-group-item">Project Type</a>
												<a href="#" class="list-group-item">Project Type</a>
							
										</div>
										
									</div>
									
								</div>
							</form>
						</div>
					<?php endif; ?>

				<!-- TEAM LEADS -->
					<h5 class="input-label">Team Leads</h5>
						<!-- @if hasteam leads -->
							<div class="project-leads">

								<?php if($args['post'] == 'project'): ?>

									<!-- @LOOP component -->
									<?php app_get_component('components/profile-titled-for-onpage') ?>
										<!-- @PLACEHOLDER: DELETE WHEN READY -->
										<?php for($i=1; $i<5; $i++){ ?>
											<?php app_get_component('components/profile-titled-for-onpage'); ?>
										<?php } ?>

								<?php else: ?>

									<!-- @LOOP component -->
									<?php app_get_component('components/profile-titled') ?>
										<!-- @PLACEHOLDER: DELETE WHEN READY -->
										<?php for($i=1; $i<5; $i++){ ?>
											<?php app_get_component('components/profile-titled'); ?>
										<?php } ?>

								<?php endif; ?>
							</div>
								
						<!-- @else -->
							<p>
								<span class="color-neutral font-style-italic">
									No team members yet.
								</span>
							</p>

					<?php if($args['post'] == 'project'): ?>
						<div>
							<a href="#" data-toggle="modal" class="btn btn-primary-outline btn-small">Team Member <i class="symbol symbol-plus"></i></a>
							<?php app_get_component('components/modal-workflow-edit-team-leads',null,false,array(
								'post'=>$args['post'],
								'is_in_onpage' => true
							)); ?>
						</div>
					<?php endif; ?>


				<hr class="no-margin-bottom">

				<!-- ASSIGNEES + DUE + PRIORITOOT-->
					<div class="<?=$args['post']; ?>-status position-relative module-content">
						<div class="flex-grid flex-grid-fixed flex-grid-compact">

							<?php if($args['post'] == 'task'): ?>
								<div class="flex-col-xs-12 pointer-reference">

									<div class="flex-grid flex-grid-compact flex-grid-no-gutter-y justify-content-space-between align-items-center">
										<div class="flex-child">
											<h5 class="input-label">Assigned To</h5>
										</div>
										<div class="flex-child">
											
											<!-- @if user can edit -->
												<a href="#" data-toggle="modal" class="hide-idle btn btn-primary-outline btn-small hide-idle">Edit Assignee <i class="symbol symbol-pencil"></i></a>
												<?php app_get_component('components/modal-workflow-edit-users',null,false,array(
													'post'=>$args['post'],
													'is_in_onpage' => true
												));  ?>
												<!-- Should we able to use multiple assignees in the future, use this component instead -->
												<?php /* app_get_component('components/modal-workflow-edit-users-multiple',null,false,array(
													'post'=>$args['post'],
													'is_in_onpage' => true
												));  */ ?>
										</div>
									</div>
									<p class="task-assignee">
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
											</span>
									</p>



								</div>
							<?php endif; ?>


							<div class="flex-col-xs-6 flex-col-md-8">
								<h5 class="input-label">Due on</h5>
								<div class="p color-neutral no-margin-bottom">
									<!--  @if date is set -->
										<a href="#" class="pointer-reference text-decoration-none" data-toggle="dropdown">
											<span class="task-due">
												<!--
													@NOTE 
													.task-due-* will contain dynamic text depending on their corresponding input field values
												-->
												<span class="task-due-date">
													<span class="REPLACE">4/20/69</span>
												</span>
												at
												<span class="task-due-time">
													<span class="REPLACE">6:09pm</span>
												</span>
											</span>
											<i class="hide-idle symbol symbol-pencil"></i>
										</a>

									<!-- @else -->
										<a class="color-neutral text-decoration-none" href="#" data-toggle="dropdown">
											Set
										</a>

									<div class="dropdown dropdown-top-flush dropdown-center-x"  data-dropdown-width="100%">
										<div class="input-wrapper input-wrapper-horizontal input-wrapper-block p">
											<label class="input-label flex-1-0" for="<?=$args['post']?>-due-time">Time Due</label>
											<input id="<?=$args['post']?>-due-time" name="<?=$args['post']?>-due-time" type="time" size="7" class="input input-single-line " data-toggle="dropdown" placeholder="--:-- --" />
										</div>

										<hr class="no-margin">

										<div class="input-wrapper input-wrapper-vertical input-wrapper-block">
											<label class="input-label sr-only" for="<?=$args['post']?>-due-date">Date Due</label>
											<input type="text" name="<?=$args['post']?>-due-date" id="<?=$args['post']?>-due-date" data-calendar-disabled-dates="past" class="no-padding-x input-calendar input-no-radius border-color-transparent input-block">

											<button data-toggle="dropdown" class="btn btn-primary-outline btn-block ">Done</button>
										</div>
									</div>
								</div>
							</div>

						<?php if($args['post'] == 'task' ): ?>

							<div class="flex-col-xs-6 flex-col-md-4">

								<h5 class="input-label">Priority</h5>
								<div class="color-neutral no-margin-bottom">

									<input type="hidden" name="<?=$args['post']?>-priority" id="<?=$args['post']?>-priority">
									<a href="#" data-toggle="dropdown">
										<!--  @if priority is set -->
											<a href="#" class="pointer-reference  text-decoration-none" data-toggle="dropdown">
												<span class="task-priority">
													<!-- @NOTE dynamic. text will change based on selected settngs -->
													<span class="REPLACE">Low</span>
												</span>
												<i class="hide-idle symbol symbol-pencil"></i>
											</a>

										<!-- @else -->
											<a class="color-neutral text-decoration-none" href="#" data-toggle="dropdown">
												Set
											</a>
									</a>

									<div class="dropdown dropdown-top-flush dropdown-center-x no-padding" data-dropdown-width="100%">
										<div class="list-group list-group-interactive list-group-toggle">
											<a class="list-group-item active">
												<span>Low</span>
												<i class="color-primary symbol symbol-check-toggle font-size-normalize"></i>
											</a>
											<a class="list-group-item">
												<span>Medium</span>
												<i class="color-primary symbol symbol-check-toggle font-size-normalize"></i>
											</a>
											<a class="list-group-item">
												<span>High</span>
												<i class="color-primary symbol symbol-check-toggle font-size-normalize"></i>
											</a>
											<a class="list-group-item">
												<span>Urgent</span>
												<i class="color-primary symbol symbol-check-toggle font-size-normalize"></i>
											</a>
										</div>
										<button data-toggle="dropdown" class="btn btn-primary-outline btn-block btn-no-radius border-color-transparent">Done</button>
									</div>
								</div>
							</div>

						<?php endif; ?>
					</div>
				
				</div>



			</div>

	</div>
</div>