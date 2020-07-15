<div class="module position-relative">
	<div class="module-content">
		<div class="input-wrapper input-wrapper-block input-wrapper-vertical p">
			<label class="input-label" for="task-project-REPLACEwithTaskId">Project</label>
			
			<input id="task-project-REPLACEwithTaskId" name="task-project-REPLACEwithTaskId" type="text" class="input input-single-line input-select" data-toggle="dropdown" placeholder="Type and select project..." />
			<div class="dropdown dropdown-top-flush dashboard-dropdown-maxed no-padding" data-dropdown-width="100%" data-dropdown-max-height="322px">
				<ul class="list-group list-group-compact">

					<!--
						@NOTE Jenna took note of the ability to create new clients as well but the design includes redundant buttons if built out. This is a stable front end variation of the ui 

						How it functions:

						User clicks and the custom input project 
					-->
					<li class="font-weight-700 color-primary task-project-new">
						<a href="#">
							Create new client
							`<span class="current-value"><span class="REPLACE">current input value</span></span>`
						</a>
					</li>

					<!-- @PLACEHOLDER -->
						<li><a href="#">Project Name</a></li>
						<li><a href="#">Project Name</a></li>
						<li><a href="#">Project Name</a></li>
						<li><a href="#">Project Name</a></li>
						<li><a href="#">Project Name</a></li>
						<li><a href="#">Project Name</a></li>
						<li><a href="#">Project Name</a></li>
						<li><a href="#">Project Name</a></li>
						<li><a href="#">Project Name</a></li>
						<li><a href="#">Project Name</a></li>
	
				</ul>
				
			</div>
		</div>


		<div class="input-wrapper input-wrapper-block input-wrapper-vertical p">
			<label class="input-label" for="task-client-REPLACEwithTaskId">Client</label>
			
			<input id="task-client-REPLACEwithTaskId" name="task-client-REPLACEwithTaskId" type="text" class="input input-single-line input-select" data-toggle="dropdown"  placeholder="Type and select client..." />
			<div class="dropdown dropdown-top-flush dashboard-dropdown-maxed no-padding" data-dropdown-width="100%" data-dropdown-max-height="322px">
				<ul class="list-group list-group-compact">

					<!-- @NOTE Jenna took note of the ability to create new clients as well but the design includes redundant buttons if built out. This is a stable front end variation of the ui -->
					<li class="font-weight-700 color-primary task-client-new">
						<a href="#">
							Create new client
							`<span class="current-value"><span class="REPLACE">current input value</span></span>`
						</a>
					</li>



					<!-- @PLACEHOLDER -->
						<li><a href="#">client Name</a></li>
						<li><a href="#">client Name</a></li>
						<li><a href="#">client Name</a></li>
						<li><a href="#">client Name</a></li>
						<li><a href="#">client Name</a></li>
						<li><a href="#">client Name</a></li>
						<li><a href="#">client Name</a></li>
						<li><a href="#">client Name</a></li>
						<li><a href="#">client Name</a></li>
						<li><a href="#">client Name</a></li>
	
				</ul>
				
			</div>
		</div>

		<div class="input-wrapper input-wrapper-block input-wrapper-vertical p">
			<label class="input-label" for="task-leads-REPLACEwithTaskId" class="no-margin-y">Team Leads</label>
			<input id="task-leads-REPLACEwithTaskId" name="task-leads-REPLACEwithTaskId" type="hidden" class="input input-single-line input-select" data-toggle="dropdown" />
			<div class="task-leads">
				<!-- @LOOP component -->
					<?php app_get_component('components/profile-titled-for-edit') ?>
						<!-- @PLACEHOLDER: DELETE WHEN READY -->
						<?php for($i=1; $i<9; $i++){ ?>
							<?php app_get_component('components/profile-titled-for-edit'); ?>
						<?php } ?>
			
			
				<a href="#" data-toggle="modal" class="btn btn-primary-outline btn-small">Team Member <i class="symbol symbol-plus"></i></a>
				<?php app_get_component('components/modal-users-multiple'); ?>
			</div>
		</div>



		<div class="flex-grid flex-grid-fixed flex-grid-compact">
			<div class="flex-col-xs-12">
				<input type="hidden" name="task-assignees-REPLACEwithTaskId" id="task-assignees-REPLACEwithTaskId">
				<h5 class="input-label">Assigned To</h5>
				<p class="task-assignees-REPLACEwithTaskId">
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

				<a href="#" data-toggle="modal" class="btn btn-primary-outline btn-small">Edit assignees <i class="symbol symbol-edit"></i></a>
				<?php app_get_component('components/modal-users-multiple'); ?>

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
							<label class="input-label flex-1-0" for="task-due-time-REPLACEwithTaskId">Time Due</label>
							<input id="task-due-time-REPLACEwithTaskId" name="task-due-time-REPLACEwithTaskId" type="time" size="7" class="input input-single-line " data-toggle="dropdown" placeholder="Type or select task-due-time..." />
						</div>

						<hr class="no-margin">

						<div class="input-wrapper input-wrapper-vertical input-wrapper-block">
							<label class="input-label sr-only" for="task-due-date-REPLACEwithTaskId">Date Due</label>
							<input type="text" name="task-due-date-REPLACEwithTaskId" id="task-due-date-REPLACEwithTaskId" data-calendar-disabled-dates="past" class="no-padding-x input-calendar input-no-radius border-color-transparent input-block">

							<button data-toggle="dropdown" class="btn btn-primary-outline btn-block ">Done</button>
						</div>
					</div>
				</div>
			</div>

			<div class="flex-col-xs-6 flex-col-md-4">
				<h5 class="input-label">Priority</h5>
				<input type="hidden" name="task-priority-REPLACEwithTaskId" id="task-priority-REPLACEwithTaskId">
				<div class="color-neutral no-margin-bottom">
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
							<a class="list-group-item">
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