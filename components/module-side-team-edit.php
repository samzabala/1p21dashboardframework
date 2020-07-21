<div class="module position-relative">
	<div class="module-content">


		<!-- @if module is not in project edit board and in the task board -->
			<!-- PROJECT -->
				<div class="input-wrapper input-wrapper-block input-wrapper-vertical p">

					<label class="input-label" for="REPLACEMODE-REPLACEwithPostType-project">Project</label>

					<input id="REPLACEMODE-REPLACEwithPostType-project-id" name="REPLACEMODE-REPLACEwithPostType-project-id" type="hidden" value="" />
					<input id="REPLACEMODE-REPLACEwithPostType-project" name="REPLACEMODE-REPLACEwithPostType-project" type="text" class="input input-single-line input-select" data-toggle="dropdown" placeholder="Type and select project..." />
					<div class="dropdown dropdown-top-flush dashboard-dropdown-maxed no-padding" data-dropdown-width="100%" data-dropdown-max-height="322px">
						<div class="list-group list-group-interactive list-group-toggle list-group-toggle-allow-no-active">

							<!--
								@NOTE Jenna took note of the ability to create new clients as well but the design includes redundant buttons if built out. This is a stable front end variation of the ui 

								How it functions:

								User clicks and the custom input is ni place
							-->
							<a href="#" class="list-group-item font-weight-700 color-primary task-project-new">
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


		<!-- CLIENT -->
			<div class="input-wrapper input-wrapper-block input-wrapper-vertical p">
				
				<label class="input-label" for="REPLACEMODE-REPLACEwithPostType-client">Client</label>


				<input id="REPLACEMODE-REPLACEwithPostType-client-id" name="REPLACEMODE-REPLACEwithPostType-client-id" type="hidden" value="" />
				<input id="REPLACEMODE-REPLACEwithPostType-client" name="REPLACEMODE-REPLACEwithPostType-client" type="text" class="input input-single-line input-select" data-toggle="dropdown"  placeholder="Type and select client..." />

				<div class="dropdown dropdown-top-flush dashboard-dropdown-maxed no-padding" data-dropdown-width="100%" data-dropdown-max-height="322px">
					<ul class="list-group list-group-interactive list-group-toggle list-group-toggle-allow-no-active">

						

						<!--
							@NOTE Jenna took note of the ability to create new clients as well but the design includes redundant buttons if built out. This is a stable front end variation of the ui 

							How it functions:

							User clicks and the custom input is ni place
						-->
						<a href="#" class="list-group-item font-weight-700 color-primary task-project-new">
							Create new client
							`<span class="current-value"><span class="REPLACE">current input value</span></span>`
						</a>

						<!-- @PLACEHOLDER -->
							<!-- 
							@NOTE
								.list-group-item/li
									classes to add
										if project id is in the corresponding project id field => `active`

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


		<!-- @if module is included in project board and not in task board -->
			<!-- TEAM LEADS -->
				<div class="input-wrapper input-wrapper-block input-wrapper-vertical p">

					<h5 class="input-label">Team Leads</h5>
					<div class="task-leads">

					<!-- @NOTE if using the design based layout, add hidden fields here -->
						<input id="REPLACEMODE-REPLACEwithPostType-leads-id" name="REPLACEMODE-REPLACEwithPostType-leads-id" type="hidden" value="" />
						<input id="REPLACEMODE-REPLACEwithPostType-leads-title" name="REPLACEMODE-REPLACEwithPostType-leads-title" type="hidden" value="" />
					
						<!-- @LOOP component -->
							<?php app_get_component('components/profile-titled-for-edit') ?>
								<!-- @PLACEHOLDER: DELETE WHEN READY -->
								<?php for($i=1; $i<9; $i++){ ?>
									<?php app_get_component('components/profile-titled-for-edit'); ?>
								<?php } ?>
					</div>

					<!--
						NOTE:
						there's a layout based on the design with minor tweaks
						and one that full-proofs the profile and its related title.
						Not sure how team member titles will map out if each title will be a required data row or if it's an optional one
					-->
					<!-- design based layout -->
					<div>
						<a href="#" data-toggle="modal" class="btn btn-primary-outline btn-small">Team Member <i class="symbol symbol-plus"></i></a>
						<?php app_get_component('components/modal-workflow-edit-team-leads'); ?>
					</div>



					<!-- db alt layout -->
					<div>
						<a href="#" data-toggle="modal"  class="btn btn-primary-outline btn-small">Team Members <i class="symbol symbol-edit"></i></a>
						<?php app_get_component('components/modal-workflow-edit-team-leads-alt'); ?>
					</div>
				</div>



		<!-- ASSIGNEES + DUE + PRIORITOOT-->
			<div class="flex-grid flex-grid-fixed flex-grid-compact">
				<div class="flex-col-xs-12">

					<h5 class="input-label">Assigned To</h5>
					<p class="task-assignee">
						<!-- @if assigned to anyone -->
							<!-- @LOOP a w/ conditional comma -->
							<span class="profile"><span class="REPLACE">Profile Name</span></span>,
									<!-- @PLACEHOLDER: DELETE WHEN READY -->
									<?php for($i=1; $i<=3; $i++){ ?>
										<span class="profile"><span class="REPLACE">Profile Name</span></span><?=$i < 3 ? ',' : '' ?>
									<?php } ?>
						<!-- else -->
							Unassigned
					</p>


					<input type="hidden" name="REPLACEMODE-REPLACEwithPostType-assignees-id" id="REPLACEMODE-REPLACEwithPostType-assignees-id">
					<a href="#" data-toggle="modal" class="btn btn-primary-outline btn-small">Edit assignee <i class="symbol symbol-edit"></i></a>
					<?php app_get_component('components/modal-workflow-edit-users'); ?>
					<!-- Should we able to use multiple assignees in the future, use this component instead -->
					<?php // app_get_component('components/modal-workflow-edit-users-multiple'); ?>

				</div>

				<div class="flex-col-xs-6 flex-col-md-8">
					<h5 class="input-label">Due on</h5>
					<div class="p color-neutral no-margin-bottom">
						<a href="#" data-toggle="dropdown">
								<!-- @NOTE
									.task-due
										if no task due date AND no time => `display-none`
										if due date or due time has value  => ``
								-->
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

								<!-- @NOTE
								.task-due-unset
									if no task due date AND no time => ``
									if due date or due time has value =>  `display-none`
								-->
								<span class="task-due-unset">
									Set
								</span>
						</a>
						<div class="dropdown dropdown-top-flush dropdown-center-x"  data-dropdown-width="100%">
							<div class="input-wrapper input-wrapper-horizontal input-wrapper-block p">
								<label class="input-label flex-1-0" for="REPLACEMODE-REPLACEwithPostType-due-time">Time Due</label>
								<input id="REPLACEMODE-REPLACEwithPostType-due-time" name="REPLACEMODE-REPLACEwithPostType-due-time" type="time" size="7" class="input input-single-line " data-toggle="dropdown" placeholder="--:-- --" />
							</div>

							<hr class="no-margin">

							<div class="input-wrapper input-wrapper-vertical input-wrapper-block">
								<label class="input-label sr-only" for="REPLACEMODE-REPLACEwithPostType-due-date">Date Due</label>
								<input type="text" name="REPLACEMODE-REPLACEwithPostType-due-date" id="REPLACEMODE-REPLACEwithPostType-due-date" data-calendar-disabled-dates="past" class="no-padding-x input-calendar input-no-radius border-color-transparent input-block">

								<button data-toggle="dropdown" class="btn btn-primary-outline btn-block ">Done</button>
							</div>
						</div>
					</div>
				</div>

				<div class="flex-col-xs-6 flex-col-md-4">

					<h5 class="input-label">Priority</h5>
					<div class="color-neutral no-margin-bottom">

						<input type="hidden" name="REPLACEMODE-REPLACEwithPostType-priority" id="REPLACEMODE-REPLACEwithPostType-priority">
						<a href="#" data-toggle="dropdown">
							<!-- @NOTE
								.task-priority
									if no priority => `display-none`
									if task has priority set => ``
							-->
							<span class="task-priority">
								<!-- @NOTE dynamic. text will change based on selected settngs -->
								<span class="REPLACE">Low</span>
							</span>


							<!-- @NOTE
								.task-priority-unset
									if no priority => ``
									if task has priority set => `display-none`
							-->
							<span class="task-priority-unset">
								Set
							</span>
						</a>
						<div class="dropdown dropdown-top-flush dropdown-center-x no-padding" data-dropdown-width="100%">
							<div class="list-group list-group-interactive list-group-toggle">
								<a class="list-group-item active">
									<span>Low</span>
									<i class="color-primary symbol float-right symbol-check-toggle font-size-normalize"></i>
								</a>
								<a class="list-group-item">
									<span>Medium</span>
									<i class="color-primary symbol float-right symbol-check-toggle font-size-normalize"></i>
								</a>
								<a class="list-group-item">
									<span>High</span>
									<i class="color-primary symbol float-right symbol-check-toggle font-size-normalize"></i>
								</a>
								<a class="list-group-item">
									<span>Urgent</span>
									<i class="color-primary symbol float-right symbol-check-toggle font-size-normalize"></i>
								</a>
							</div>
							<button data-toggle="dropdown" class="btn btn-primary-outline btn-block btn-no-radius border-color-transparent">Done</button>
						</div>
					</div>
				</div>
			
			</div>


		<!--  -->
	</div>
</div>