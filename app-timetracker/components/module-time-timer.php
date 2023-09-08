<!-- .@NOTE
	imports:
	

	classes to add
		.module

			when timer is in default state/stopped 	=> `background-gradient-90-from-secondary-to-primary`
			when timer is running					=> `background-gradient-90-from-secondary-to-success`


-->
<?php
$defs = array(
	'is_active' => false,
	'task_notes' => '',
	'task_name' => '',
	'task_project' => '',
	'task_client' => '',
	'task_category' => '',
	'task_status' => '',
);

$args = app_parse_args($data,$defs);
?>
<form id="timetracker-timer" class="module no-border module-expanded theme-inverse margin-large-y 
<?=$args['is_active'] ? 'background-gradient-90-from-secondary-to-success' : 'background-gradient-90-from-secondary-to-primary' ?>">
	<div class="module-content no-padding">
		<div class="flex-grid flex-grid-fixed flex-grid-no-gutter flex-direction-row-reverse">
			<div class="flex-col-xs-12 flex-col-md-8  flex-col-lg-9 flex-md  flex-direction-column">
				<div class="flex-grid flex-grid-no-gutter">
					<div class="flex-col-xs-12 flex-col-md-4 flex-0-0">
						<div class="padding-y padding-large-x border-style-solid-bottom border-width-thin-bottom border-color-background-alpha-2 h4 color-inherit no-margin">
							<label for="timer-task-project" class="sr-only">Project</label>
							<input class="input input-blend input-block no-padding" name="task-project" id="timer-task-project" type="text" placeholder="Enter Project Name" list="projects" 
								<?=$args['task_project'] ? 'value="'.$args['task_project'].'"' : '' ?>
							/>
							<datalist id="projects">
								<!-- @if has input value -->
									<option data-value="REPLACEWithInputValue" ref="createNew">Create new Project `REPLACEWithInputValue`</option>

								<!-- @loop option -->
									<option data-value="REPLACEWithProjectName">REPLACEWithClientName</option>
											
									<!-- @PLACEHOLDER. delete when ready -->
										<option data-value="A Project">A Project</a></li>
										<option data-value="Another Project">Another Project</a></li>
										<option data-value="This other Project">This other Project</a></li>
										<option data-value="Other Other Project">Other Other Project</a></li>
										<option data-value="Oh Lordy that's a lot of Projects">Oh Lordy that's a lot of Projects</a></li>
										<option data-value="Chemical X">Chemical X</a></li>
										<option data-value="Mekeni Mekeni Dugdug Doremi (Repeat)">Mekeni Mekeni Dugdug Doremi (Repeat)</a></li>
										<option data-value="Tongtongtongtongpakitongkitong">Tongtongtongtongpakitongkitong</a></li>
										<option data-value="Bababa ba? Bababa!">Bababa ba? Bababa!</a></li>
							</datalist>
						</div>
					</div>
					<div class="flex-child flex-0-0 hide-mobile spacer border-style-solid-right border-width-thin-right border-color-background-alpha-2"></div>
					<div class="flex-child flex-1-1">
						<div class="padding-y padding-large-x border-style-solid-bottom border-width-thin-bottom border-color-background-alpha-2 h4 font-weight-400 color-inherit no-margin">

							<label for="timer-task-client" class="sr-only">Client</label>
							<input class="input input-blend input-block no-padding" name="task-client" id="timer-task-client" type="text" placeholder="Enter Client Name" list="clients" 
								<?=$args['task_client'] ? 'value="'.$args['task_client'].'"' : '' ?>
							/>
							<datalist id="clients">
								<!-- @if has input value -->
									<option data-value="REPLACEWithInputValue" ref="createNew">Create new Client `REPLACEWithInputValue`</option>
	
								<!-- @loop option -->
									<option data-value="REPLACEWithClientName">REPLACEWithClientName</option>
												
									<!-- @PLACEHOLDER. delete when ready -->
										<option data-value="Wright & Co Law Offices">Wright & Co Law Offices</option>
										<option data-value="1Point21 Internal">1Point21 Internal</option>
										<option data-value="Samurai Jack">Samurai Jack</option>
										<option data-value="Ghost Stories American Dub">Ghost Stories American Dub</option>
										<option data-value="Inuyasha">Inuyasha</option>
										<option data-value="Mang Inasal">Mang Inasal</option>
										<option data-value="Jollibee">Jollibee</option>
										<option data-value="The Mandalorian">The Mandalorian</option>
										<option data-value="Ranking of Kings">Ranking of Kings</option>
										<option data-value="Eren Yeager">Eren Yeager</option>
										<option data-value="Not Eren Yeager">Not Eren Yeager</option>
										<option data-value="Beyonce">Beyonce</option>
										<option data-value="Liza Soberano">Liza Soberano</option>
							</datalist>
						</div>
					</div>
					<div class="flex-col-xs-12 flex-col-lg-2 flex-0-0 align-self-stretch flex-xs align-items-stretch">
						<label class="padding-right border-style-solid-bottom border-width-thin-bottom border-color-background-alpha-2 flex-xs align-items-center justify-content-flex-end padding-y padding-right flex-1-0">
							<span class="font-weight-700">Sync to Wrike</span>
							<input class="margin-small-left font-size-large input input-inline" type="checkbox" style="width: 1em;" />
						</label>
					</div>
				</div>

				<div class="padding-large flex-1-1 flex-md flex-direction-column">
				<div class="h3 no-margin-y">
						<label for="timer-task-name" class="sr-only">Task Name</label>
						<input class="input input-blend input-block no-padding" name="task-name" id="timer-task-name" type="text" placeholder="Click Here to Enter Task Title" list="tasks" 
							<?=$args['task_name'] ? 'value="'.$args['task_name'].'"' : '' ?>
						/>
						<datalist id="tasks">
							<!-- @if has input value -->
								<option data-value="REPLACEWithInputValue" ref="createNew">Create new Task `REPLACEWithInputValue`</option>

							<!-- @loop option -->
								<option data-value="REPLACEWithTaskName">REPLACEWithTaskName</option>
										
								<!-- @PLACEHOLDER. delete when ready -->
									<option data-value="A Task">A Task</a></li>
									<option data-value="Another Task">Another Task</a></li>
									<option data-value="This other Task">This other Task</a></li>
									<option data-value="Other Other Task">Other Other Task</a></li>
									<option data-value="Oh Lordy that's a lot of Tasks">Oh Lordy that's a lot of Tasks</a></li>
									<option data-value="Make the walls go RUMBLING. RUMBLING">Make the walls go RUMBLING. RUMBLING</a></li>
									<option data-value="Float left everything">Float left everything</a></li>
									<option data-value="Suntukan sa Ace Hardware">Suntukan sa Ace Hardware</a></li>
									<option data-value="Poop">Poop</a></li>
						</datalist>
					</div>
					<div class="h3 font-weight-400 no-margin-bottom margin-small-top flex-1-1 flex-md  flex-direction-column">
						<label for="timer-task-notes" class="sr-only">Task Notes</label>
						<textarea class="input input-blend input-block no-border-bottom flex-1-1" name="task-notes" id="timer-task-notes" rows="4" placeholder="Add task description here."
						><?=$args['task_notes'] ? $args['task_notes'] : '' ?></textarea>
					</div>
				</div>
			</div>
			<div class="flex-col-xs-12 flex-col-md-4 flex-col-lg-3 background-background-alpha-2  flex-md">
				<div class="padding-small-y">
					<div class="padding-large-y text-align-center flex-1-1 flex-md flex-direction-column-reverse align-items-center justify-content-center">
	
						<div class="padding-large-x">
	
							<div class="flex-grid flex-grid-compact flex-grid-no-gutter-y flex-grid-fixed justify-content-center">
								<div class="flex-col-xs-12 flex-col-sm-5 flex-col-md-12 flex-col-lg-10">
									<label for="timer-task-category" class="sr-only">Task Category</label>
									<select class="input input-single-line input-select input-block background-transparent border-color-theme input-round margin-small-bottom" name="task-category" id="timer-task-category" placeholder="Select Category">
									
										<option value="">Select Task Category</option>
			
			
											<!-- @loop option -->
												<!-- @PLACEHOLDER. delete when ready -->
												<?php $cat = array(
													'SEO',
													'Design',
													'Dev',
													'Meeting',
													'Other stuff I can\'t think of at the moment',
												); foreach($cat as $c): ?>
													<option value="<?= urlencode($c) ?>" <?= strtoupper($c) == strtoupper($args['task_category']) ? 'selected' : '' ?>><?=$c ?></optioon>
												<?php endforeach; ?>
									</select>
								</div>
								<div class="flex-col-xs-12 flex-col-sm-5 flex-col-md-12 flex-col-lg-10">
									<label for="timer-task-Status" class="sr-only">Task Status</label>
									
									
									<div class="position-relative">
										<!-- @PLACEHOLDER -->
										<?php $stat = array(
											'Default Workflow' => array(
												'Backlog',
												'Cancelled',
												'Completed',
												'Completed on Staging',
												'Dev - In Progress',
												'Launch',
												'On Hold',
												'Production',
												'QA+Integration',
												'Review',
												'Review (Internal)',
												'Review (SEO)',
												'SEO - In Progress',
												'SEO In Progress',
											),
											'Maintenance Request' => array(
												'Completed',
												'Maintenance Request',
												'Review',
											),
											'Monthly Content Workflow' => array(
												'Backlog for Population',
												'Client MC Overview',
												'Content Has Been Populated',
												'Foundation',
												'MC Awaiting Client Approval',
												'MC Client Cancelled',
												'MC Delivered',
												'MC In Progress',
												'MC Needs Topics',
												'MC Populated and Complete',
												'MC Populated and in Tracker',
												'MC Ready to Write',
												'Ready For Population Team',
												'[Floater] MC Overview',
											),
											'New Site Content Order' => array(
												'Backlog',
												'Completed',
												'Delivered for Review',
												'In Review',
												'Order Created Pending Review',
												'Pending Client Review',
												'Ready to Populate',
												'Ready to Write',
												'Writing In Progress',
											),
											'Other' => array(
												'Waiting on Client Approval LP',
												'Zebra',
											),
											'Paid Workflow' => array(
												'Advertiser Verification Needed',
												'Building Campaigns',
												'Client Meetings Or Updates',
												'Completed',
												'For Review/QA',
												'LSA Call Recording Review',
												'LSA Lead Reporting',
												'LSA Optimizations',
												'LSA Setup',
												'Landing Page Content',
												'Launched',
												'Need Final URL To Begin Setup',
												'Optimizations',
												'PPC Pages To Launch - DT',
												'Reporting',
												'Tracking Codes',
												'Waiting for Assets/LP URL',
												'Waiting on Client Approval',
												'Waiting-PPC Survey/Lead Docket',
											),
											'SEO Workflow' => array(
												'Backlog',
												'Blocked',
												'Completed',
												'In Progress',
												'Review',
											),
										);
										$active_sub = array($stat['Default Workflow']);
										if($args['task_status']):
											$active_sub = array_filter($stat,function($k) use ($args){
												return in_array($args['task_status'],$k);
											});
										endif;


										?>
										<a href="#" data-toggle-dropdown class="input input-single-line input-select input-block background-transparent border-color-theme input-round text-decoration-none justify-content-space-between">
											<div class="text-wrap-ellipsis">

												<!-- @if has selection -->
													<?php if($args['task_status']): ?>
														<span class="REPLACE"><?= $args['task_status']; ?></span>
													<?php else: ?>
														Select Status
													<?php endif; ?>
											</div>
										</a>
										<div class="dropdown dropdown-top-flush dropdown-left theme-default color-theme no-padding-x overflow-visible" data-dropdown-width="100%">
											<div class="list-group list-group-interactive list-group-compact" >
												<!-- selected -->
												<!-- @if current status is within a status group  -->
													
													<!-- @loop label as sibling status -->
													<!--
														@NOTE:
															classes to add
																'active' => if active
													-->
														
														<label class="list-group-item pointer-reference no-border-y flex-xs justify-content-space-between flex-wrap align-items-center dropdown-purger">
															<input type="radio" class="sr-only">
															<span class="flex-1-1">
																<span class="REPLACE">Status</span>
															</span>
															<i class="symbol symbol-check only-toggle flex-0-0"></i>
														</label>

														<!-- @PLACEHOLDER: Delete when ready -->
															<?php foreach($active_sub as $g): foreach($g as $s): ?>
																	
																	<label class="list-group-item pointer-reference no-border-y flex-xs justify-content-space-between flex-wrap align-items-center dropdown-purger">
																		<input type="radio" class="sr-only">
																		<span class="flex-1-1">
																			<span class="REPLACE"><?= $s; ?></span>
																		</span>
																		<i class="symbol symbol-check only-toggle flex-0-0"></i>
																	</label>

															<?php endforeach; endforeach; ?>


												<!-- All -->


													<!-- @loop  div -->
														<div class="position-relative">
															<a href="#" data-toggle-dropdown class="list-group-item pointer-reference no-border-y flex-xs justify-content-space-between flex-wrap align-items-center">
																<span class="flex-1-1">
																	<span class="REPLACE">Group Folder</span>
																</span>
																<i class="symbol symbol-arrow-right"></i>
															</a>
															<div class="dropdown dropdown-bottom dropdown-left-flush theme-default color-theme no-padding-x overflow-visible" data-dropdown-width="100%">
																<div class="list-group list-group-interactive list-group-compact">
																	<!-- @loop  div -->
																		<div class="position-relative">
																			<a href="#" data-toggle-dropdown class="list-group-item pointer-reference no-border-y flex-xs justify-content-space-between flex-wrap align-items-center dropdown-purger">
																				<span class="flex-1-1">Status</span>
																			</a>
																		</div>
																</div>
															</div>
														</div>

														<!-- @PLACEHOLDER: Delete when Ready -->
														<?php foreach($stat as $g => $st): ?>

															<div class="position-relative">
																<a href="#" data-toggle-dropdown class="list-group-item pointer-reference no-border-y flex-xs justify-content-space-between flex-wrap align-items-center">
																	<span class="flex-1-1"><?= $g ?></span>
																	<i class="symbol symbol-arrow-right"></i>
																</a>
																<div class="dropdown dropdown-bottom dropdown-left-flush theme-default color-theme no-padding-x overflow-visible" data-dropdown-width="100%">
																	<div class="list-group list-group-interactive list-group-compact">
																			<?php foreach($st as $s): ?>
																				<div class="position-relative">
																					<label class="list-group-item pointer-reference no-border-y flex-xs justify-content-space-between flex-wrap align-items-center dropdown-purger">
																						<input type="radio" class="sr-only">
																						<span class="flex-1-1"><?=$s; ?></span>
																						<i class="symbol symbol-check only-toggle flex-0-0"></i>
																					</label>
																				</div>
																			<?php endforeach; ?>
																	</div>
																</div>
															</div>
														<?php endforeach; ?>


											</div>
										</div>
									</div>
		
								</div>
		
		
							</div>
						</div>
	
						<div class="special-primary text-leading-whole inline-flex margin-large-y">
							<div class="hours">
								<span class="REPLACE">00</span>
							</div>
							:<div class="minutes">
								<span class="REPLACE">00</span>
							</div>
							:<div class="seconds">
								<span class="REPLACE">00</span>
							</div>
						</div>
	
						<div class="margin-small-top">
							<!-- @NOTE button
						
								classes to add
	
								'active' => if timer is active
								'' => if timer is NOT active
							-->
							<button class="timetracker-timer-toggle btn btn-round btn-symbol color-theme color-theme-polar-hover color-theme-polar-focus border-color-background background-background-alpha-2 background-background-focus background-background-hover background-theme-polar-active color-accent-alpha-8-active
							<?=$args['is_active'] ? 'active' : '' ?>">
								<i class="symbol symbol-play symbol-pause-toggle"></i>
							</button>
						</div>
	
					</div>
				</div>
			</div>

		</div>
	</div>
</form>