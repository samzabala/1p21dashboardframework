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
	<div class="module-content">
		<div class="flex-grid flex-grid-fixed flex-grid-compact flex-direction-row-reverse">

			<div class="flex-col-xs-12 flex-col-md-4 flex-col-lg-3">
                <div class="timetracker-timer-wrapper padding-y padding-x">
                    <div class="flex-grid flex-grid-compact justify-content-space-between align-items-center">
                        <div class="flex-child flex-1-1 text-align-center">
                            <div class="special-secondary text-leading-whole inline-flex no-margin ">
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
                        </div>
                        <div class="flex-child">
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
				<hr class="only-mobile background-theme-polar no-margin-bottom">
			</div>
			<div class="flex-col-xs-12 flex-col-md-8 flex-col-lg-9">
				<div class="lead margin-large-top">
					<label for="timer-task-notes" class="sr-only">Task Notes</label>
					<textarea class="input input-blend input-block no-border-bottom" name="task-notes" id="timer-task-notes" rows="4" placeholder="What are you working on?"
					><?=$args['task_notes'] ? $args['task_notes'] : '' ?></textarea>
				</div>
			</div>
		</div>
	</div>
	<div class="module-footer background-background-alpha-2 padding-y">
		<div class="flex-grid flex-grid-fixed flex-grid-compact align-items-flex-end">
			<div class="flex-col-xs-12 flex-col-md-4 margin-auto-right">
				<div class="h4 color-inherit no-margin-top">
					<label for="timer-task-client" class="sr-only">Client</label>
					<input class="input input-blend input-block" name="task-client" id="timer-task-client" type="text" placeholder="Type Client Name" list="clients" 
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
				<div class="flex-grid flex-grid-fixed flex-grid-compact justify-content-flex-start flex-grid-no-gutter-y">
					<span class="flex-col-xs-6 padding-small-right">
						<label for="timer-task-project" class="sr-only">Project</label>
						<input class="input input-blend input-block" name="task-project" id="timer-task-project" type="text" placeholder="Type Project Name" list="projects" 
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
					</span>
					<span class="flex-col-xs-6">
						<div class="border-style-solid-left border-width-thin-left padding-left">
							
							<label for="timer-task-name" class="sr-only">Task Name</label>
							<input class="input input-blend input-block" name="task-name" id="timer-task-name" type="text" placeholder="Type Task Name" list="tasks" 
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
					</span>
				</div>
			</div>
			<div class="flex-col-xs-12 flex-col-sm-6 flex-col-md-3 flex-col-lg-3">
				<label for="timer-task-category" class="h5 no-margin-top margin-bottom-small color-inherit">Task Category</label>
				<input class="input input-blend input-block-mobile" name="task-category" id="timer-task-category" type="text" placeholder="Select Category" list="categories" 
					<?=$args['task_category'] ? 'value="'.$args['task_category'].'"' : '' ?>
				/>
				<datalist id="categories">
					<!-- @if has input value -->
						<option data-value="REPLACEWithInputValue" ref="createNew">Create new Category `REPLACEWithInputValue`</option>

					<!-- @loop option -->
						<option data-value="REPLACEWithTaskCategory">REPLACEWithTaskCategory</option>
								
						<!-- @PLACEHOLDER. delete when ready -->
									<option data-calue="SEO">SEO</optioon>
									<option data-calue="Design">Design</optioon>
									<option data-calue="Dev">Dev</optioon>
									<option data-calue="Meeting">Meeting</optioon>
									<option data-calue="Other stuff I can't think of at the moment">Other stuff I can't think of at the moment</optioon>
				</datalist>
			</div>
			<div class="flex-col-xs-12 flex-col-sm-6 flex-col-md-3 flex-col-lg-2">

			<label for="timer-task-Status" class="h5 no-margin-top margin-bottom-small color-inherit">Task Status</label>
				<select class="input input-blend input-block-mobile" name="task-status" id="timer-task-status" type="text" placeholder="Select Status">
					<option value="">Select Status</option>
					<!-- @PLACEHOLDER. delete when ready -->
						<option <?=$args['task_status'] == 'backlog' ? 'selected' : '' ?> value="backlog">Backlog</option>
						<option <?=$args['task_status'] == 'inprogress' ? 'selected' : '' ?> value="inprogress">In Progress</option>
						<option <?=$args['task_status'] == 'review' ? 'selected' : '' ?> value="review">Review</option>
						<option <?=$args['task_status'] == 'completed' ? 'selected' : '' ?> value="completed">Completed</option>

				</select>
			</div>
		</div>
	</div>
</form>