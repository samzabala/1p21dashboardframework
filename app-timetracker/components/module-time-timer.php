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
		<div class="flex-grid flex-grid-fixed flex-grid-no-gutter">
			<div class="flex-col-xs-12 flex-col-md-8  flex-col-lg-9 flex-md  flex-direction-column">
				<div class="flex-grid flex-grid-no-gutter flex-grid-fixed">
					<div class="flex-col-xs-12 flex-col-md-5 flex-col-lg-3">
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
									<select class="input input-single-line input-select input-block background-transparent border-color-theme input-round" name="task-status" id="timer-task-status" placeholder="Select Status">
			
										<option value="">Select Status</option>
											<!-- @loop option -->
													<!-- @PLACEHOLDER. delete when ready -->
													<?php $stat = array(
														'Backlog',
														'In Progress',
														'Review',
														'Completed',
													); foreach($stat as $s): ?>
														<option value="<?= urlencode($s) ?>" <?= strtoupper($s) == strtoupper($args['task_status']) ? 'selected' : '' ?>><?=$s ?></optioon>
													<?php endforeach; ?>
			
									</select>
		
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