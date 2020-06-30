

<div id="workflow-dash-heading" class="position-relative">
	<div class="flex-grid flex-grid-compact justify-content-space-between">
		<div class="flex-child">

		<!-- 

		@NOTE

		@dynamic change `Morning` too `Afternoon` or evening as needed
		 -->

			<p class="no-margin special-secondary text-clip-background background-gradient">
				Good Morning McFly
			</p>

		</div>
		<div class="flex-child">
			<a href="<?=app_create_link(array('template'=> 'analytics')); ?>" class="btn btn-primary-outline ">
				My Analytics
			</a>

			<?php app_get_component('components/filter-dropdown-date-span-workflow') ?>
		</div>
	</div>

</div>

<div id="workflow-dash"
	class="module-grid"
	data-grid-template-columns-md="repeat(3,1fr)"
	data-grid-template-columns-lg="260px 1fr 1fr 460px"
	data-grid-template-rows-md="min-content minmax( 0px, min-content)"
	
	data-grid-template-areas-md="
		'watch watch watch'
		'profile-card weekly today'
		'fave fave fave'
		'opentasks opentasks opentasks'
		'activitylog activitylog activitylog'"
	
	data-grid-template-areas-lg="
		'profile-card weekly today watch'
		'fave fave fave fave'
		'opentasks opentasks opentasks opentasks'
		'activitylog activitylog activitylog activitylog'"

	>
	
	<div class="module"
			data-grid-area-md="profile-card"
		>
			<div class="module-content text-align-center justify-content-center flex-direction-column flex-xs align-items-center">

				<div class="p">
				
					<?php app_get_component('components/profile-image'); ?>
				</div>
				
				<p class="no-margin-y lead">
					<a href="<?=FWAPPS_ROOT_URL ?>?template=profile&env=<?=FWAPPS_SLUG ?>" class="profile-name-full  color-inherit">
						<span class="REPLACE">Profile Name</span>
					</a>
				</p>

				<p class="profile-title color-neutral font-weight-700">
					<span class="REPLACE">Profile Title</span>
				</p>

				<!-- @if profile card user matches currently logged in -->
					<div class="position-relative">
						<button href="#" class="btn btn-primary btn-small " data-toggle="dropdown">
							<!-- @note. replace with selected status -->
							<span class="REPLACE">Available for projects</span>
						</button>
						<div class="dropdown dropdown-top-flush dropdown-center-x no-padding">
						<ul class="list-group list-group-interactive list-group-toggle text-align-left">
							
							<li class="active flex-xs flex-wrap align-items-center justify-content-space-between">
								<a href="#">Available for project</a> <i class="color-primary symbol symbol-check-toggle"></i>
							</li>
								<!-- @PLACEHOLDER. modify list items as needed -->
									<li class=" flex-xs flex-wrap align-items-center justify-content-space-between">
										<a href="#">Unavailable for project</a>  <i class="color-primary symbol symbol-check-toggle"></i>
									</li>
									<li class=" flex-xs flex-wrap align-items-center justify-content-space-between">
										<a href="#">Fired</a>  <i class="color-primary symbol symbol-check-toggle"></i>
									</li>
						</ul>
						</div>
					</div>

				<!-- @ELSE user does not match logged in-->
						<span class="btn btn-primary btn-small btn-no-interaction">
							<!-- @note. replace with selected status -->
							<span class="REPLACE">Available for projects</span>
						</span>
		</div>

	</div>

	<div class="module"
		id="workflow-dash-weekly"
		data-grid-area-md="weekly">
		<div class="module-content">
			<h5 class="no-margin">Weekly Hours</h5>
			<div class="p">

				<?php app_get_component('components/filter-dropdown-date-weekly-workflow') ?>
			</div>



			<div class="text-leading-expanded">


				<!-- @loop .weekly-hours-row -->
					<div class=" flex-grid flex-grid-compact flex-grid-no-gutter-y align-items-center weekly-hours-row">


						<!-- @DYNAMIC change day to single letter -->
						<!-- 
							@NOTE

							classes to add 

								.weekly-hours-row-day
									`color-neutral` => if the day is not equal to today

						-->
						<div class="flex-child flex-0-0 weekly-hours-row-day font-weight-700 color-neutral">
							<span class="REPLACE">D</span>
						</div>
						
						<!-- 

							@NOTE dynamic


								.progress-bar	
									classes to switch
										progress-bar-primary 	=> if time is 8.5 hrs or less
										progress-bar-secondary 	=> if time is more than 8.5 hours

									style
										width		=> calculate based on total time out of 8 hrs
						-->
						<div class="flex-child flex-1-1">
							<div class="progress progress-small">
								<div class="progress-bar progress-bar-primary" style="width:69%;"></div>
							</div>
						</div>

						<!-- @DYNAMIC change day to single letter -->
						<!-- @NOTE
						
							.weekly-hours-row-total
								classes to add:
									color-primary 	=> if time is 8.5 hrs or less
									color-secondary 	=> if time is more than 8.5 hours
						-->
						<div class="flex-child flex-0-0 weekly-hours-row-total">
							<span class="REPLACE">
								6h 9m
							</span>
						</div>

					</div>

						
						<!-- @PLACEHOLDER: DELETE WHEN READY -->
						<?php for($i=1; $i<=3; $i++){ ?>
							<div class=" flex-grid flex-grid-compact flex-grid-no-gutter-y align-items-center weekly-hours-row">


								
								<!-- @DYNAMIC change day to single letter -->
								<div class="flex-child flex-0-0 weekly-hours-row-day font-weight-700 <?= ($i == 2 )? ' color-neutral' : '' ?>">
									<span class="REPLACE">D</span>
								</div>
								
								<!-- 

									@NOTE dynamic


										.progress-bar	
											classes to switch
												progress-bar-primary 	=> if time is 8.5 hrs or less
												progress-bar-secondary 	=> if time is more than 8.5 hours

											style
												width		=> calculate based on total time out of 8 hrs
								-->
								<div class="flex-child flex-1-1">
									<div class="progress progress-small">
										<div class="progress-bar progress-bar-primary" style="width:69%;"></div>
									</div>
								</div>

								<!-- @DYNAMIC change day to single letter -->
								<!-- @NOTE
								
									.weekly-hours-row-total
										classes to add:
											color-primary 	=> if time is 8.5 hrs or less
											color-secondary 	=> if time is more than 8.5 hours
								-->
								<div class="flex-child flex-0-0 weekly-hours-row-total">
									<span class="REPLACE">
										6h 9m
									</span>
								</div>

							</div>


							<div class=" flex-grid flex-grid-compact flex-grid-no-gutter-y align-items-center weekly-hours-row">


								
								<!-- @DYNAMIC change day to single letter -->
								<div class="flex-child flex-0-0 weekly-hours-row-day font-weight-700 color-neutral">
									<span class="REPLACE">D</span>
								</div>
								
								<!-- 

									@NOTE dynamic


										.progress-bar	
											classes to switch
												progress-bar-primary 	=> if time is 8.5 hrs or less
												progress-bar-secondary 	=> if time is more than 8.5 hours

											style
												width		=> calculate based on total time out of 8 hrs
								-->
								<div class="flex-child flex-1-1">
									<div class="progress progress-small">
										<div class="progress-bar progress-bar-secondary" style="width:100%;"></div>
									</div>
								</div>

								<!-- @DYNAMIC change day to single letter -->
								<!-- @NOTE
								
									.weekly-hours-row-total
										classes to add:
											color-neutral 	=> if day is not equal to today
											color-secondary 	=> if time is more than 8.5 hours
								-->
								<div class="color-secondary flex-child flex-0-0 weekly-hours-row-total">
									<span class="REPLACE">
										9h 9m
									</span>
								</div>

							</div>
						<?php } ?>
			</div>
		</div>
	</div>




	<div class="module"
		id="workflow-dash-today"
		data-grid-area-md="today">
		<div class="module-content">

			<div class="chart-today-time p">
				<!-- @NOTE

					.today-total-halo
						`border-color-primary`	=> if time is equal or less than 8.5 hrs
						`border-color-secondary`	=> if time exceeds 8.5 hrs
					.today-total-text
						clases to add:
						`color-primary`	=> if time is equal or less than 8.5 hrs
						`color-secondary`	=> if time exceeds 8.5 hrs
					

				-->

				<div
					class="today-total-halo margin-auto-x text-align-center ratio ratio-1-by-1 radius-ellipse border-width-thick border-style-solid
					border-color-primary
					">
					<div class="ratio-child-contain text-nowrap">
						<h5 class="no-margin-top">Today's Time</h5>


						<span
						class="today-total-text special-secondary no-margin
						color-primary">
							<span class="REPLACE">
								6h 9m
							</span>
						</span>
					</div>
				</div>
			</div>


				<div class="flex-grid flex-grid-compact flex-grid-fixed align-items-center no-margin-y  text-align-center">

					<div class="flex-col-6">
						<h5 class="no-margin">Start Time</h5>
						<p class="lead today-start no-margin">
							<span class="REPLACE">
								8:00am
							</span>
						</p>
					</div>


					<div class="flex-col-6">
							<h5 class="no-margin">End Time</h5>
							<p class="lead today-end no-margin">
								<span class="REPLACE">
									3:00am
								</span>
							</p>
					</div>

				</div>

		</div>
	</div>


	<!-- timetracker -->

		<!-- @NOTE:
	
		classes to add:
			#timetracker-home-watch
				when timer is running => ` theme-inverse background-gradient-225`
				when timer is in default state/stopped => ``
	
		-->
	<div
		id="workflow-dash-watch"
		class="module position-relative"
		data-grid-area-md="watch">
		<div class="module-header module-header-break no-margin-bottom position-relative">
			<div class="align-items-center flex-grid flex-grid-no-gutter flex-grid-fixed justify-content-space-between">
				<div class="flex-col-7">
					<h3 class="module-title">Time Tracker</h3>
				</div>
				<div class="flex-col-5 text-align-right">
					<a href="#board-track-time" class="btn color-primary color-secondary-hover color-inherit-inverse btn-no-shadow btn-symbol" data-toggle="board">
						<i class="symbol symbol-kebab-horizontal"></i>
					</a> 


				
				<!-- @NOTE: this triggers the browser extension/app. while thaty's in progreess we can comment this out for now -->
				<a href="#" class=" btn btn-symbol btn-no-shadow color-neutral color-inherit-inverse color-secondary-hover" id="workflow-app-trigger">
					<img data-src="<?=FWAPPS_ROOT_URL ?>/app-<?=FWAPPS_APP;?>/assets/images/icon-popper.svg" alt="Trigger App/ Browser Extension">
				</a>
				</div>
			</div>
			
		</div>
		<div class="flex-wrap flex-xs justify-content-space-around module-content no-margin-top">
			
			
			<div class="flex-1-1 flex-grid flex-grid-fixed flex-grid-compact align-items-center justify-content-space-between ">
				<div class="flex-child">
					<div class="watch-time special-primary text-leading-whole inline-flex no-margin-y">

						<span class="watch-time-hours">
							<span class="REPLACE">00</span>
						</span>

						<span>:</span>

						<span class="watch-time-minutes">
							<span class="REPLACE">00</span>
						</span>


						<span>:</span>

						<span class="watch-time-minutes">
							<span class="REPLACE">00</span>
						</span>
					</div>
				</div>

				<div class="flex-child">

					<!-- play butt..on -->
					<!-- @NOTE:
						classes to add:
							.watch-btn.workflow-toggle-play 
								when timer is running => `display-none`
								when timer is in default state/stopped => ``


						other attributes

							when there is a previous entry => (
								href => `#` 
								onclick	=> `somethingthatstartsthetimerforpreviousentry()`
							)

							when no previous entry OR previous entry was stopped =>  (
								href = `#board-track-time`
								onclick	=> NULL
								)

					-->
					<a href="#"  class="watch-btn workflow-toggle-play btn btn-symbol  well btn-secondary background-gradient-45 background-image-none-hover background-primary-hover
						">
						<i class="symbol symbol-play"></i>
					</a>

					


					<!-- pause butt..on -->
					<!-- @NOTE:

					button commented out so it doesn't scare ppl. make sure to comment back in and modify when ready :)

					classes to add:
						.watch-btn.workflow-toggle-pause
							when timer is running => ``
							when timer is in default state/stopped  => `display-none`
					-->
					<!-- 
					<a href="#"class="watch-btn workflow-toggle-pause btn btn-symbol  well btn-secondary">
						<i class="symbol symbol-pause"></i>
					</a> -->


					<!-- spacer -->
					<span class="font-size-large">&nbsp;&nbsp;&nbsp;</span>



					<!-- stop butt..on -->
					<!-- @NOTE:
					classes to add:
						.watch-btn.workflow-toggle-stop
							when timer is running => `btn-theme-outline`
							when timer is in default state  => `btn-neutral`
							when timer is in default stopped AND  there was no previous entry OR previous entry was stopped => `btn-neutral btn-disabled`
			
					-->
					<a href="#"class="watch-btn workflow-toggle-stop btn btn-symbol  well
					btn-neutral
					">
						<i class="symbol symbol-stop"></i>
					</a>



				</div>
			</div>

			<div class="flex-1-1 flex-grid flex-grid-fixed flex-grid-compact no-margin-bottom align-items-center">



			<!-- @if there was a previous entry OR previous entry was stopped -->
				<div class="watch-last-entry flex-col-12">

					<h4 class="watch-project color-primary color-inherit-inverse text-wrap-ellipsis no-margin-y">
						<span class="REPLACE">Project with a really long name Project with a really long name </span>
					</h4>


					<p class="watch-client text-wrap-ellipsis no-margin-bottom">
						<span class="REPLACE">Client Name but really long Client Name but really long Client Name but really long Client Name but really long Client Name but really long </span>
					</p>
					
					<p class="watch-task color-neutral color-inherit-inverse h5 text-wrap-ellipsis no-margin-y text-leading-expanded font-weight-400">
						<span class="REPLACE">Task with a really long name Task with a really long name </span>
					</p>
				</div>

				<!--
					
					@else there was no previous entry 
				-->
				

					<div class="flex-col-12">
						<a href="#board-track-time" data-toggle="board" class="display-block">
							<h4 class="watch-project color-neutral no-margin-y">
								Add Project +
							</h4>


							<p class="watch-client color-neutral no-margin-bottom">
								Add Client +
							</p>
							
							<p class="watch-task color-neutral h5 no-margin-y text-leading-expanded font-weight-400">
								Add Task +
							</p>
						</a>
					</div>
			</div>
		</div>
	</div>


	<!-- fave tasks -->
		<!-- 
			@NOTE:
			may need to modify the cookie feature that tracks whether accordion was closed or opened the last time
		 -->
		 <div
		id="workflow-dash-fave-tasks"
		class="module"
		data-grid-area-md="fave"
		>
		<div class="module-header">
			<h3 class="module-title open" data-toggle="accordion" data-href="#fave-tasks">
				Favorite Tasks <i class="symbol symbol-caret-down symbol-caret-up-toggle"></i>
			</h3>
		</div>
		<div class="module-content accordion open" id="fave-tasks">
			<!-- @if there are entries -->
		
				<div class="table-wrapper dashboard-table-wrapper-gutterless">

					<table class="table-small data-fave-tasks">
						<tr>
							<th class="text-nowrap" >&nbsp;</th>
							<th class="text-nowrap">Task</th>
							<th class="text-nowrap">Project</th>
							<th class="text-nowrap">Client</th>
							<th class="text-align-center text-nowrap">Notes</th>
							<th class="text-nowrap">Start Date</th>
							<th class="text-nowrap">Days Open</th>
							<th colspan="2"><span class="sr-only">Actions</span>&nbsp;</th>
						</tr>
						
						<!-- @LOOP TR-->
						<!-- @NOTE
							classes to add
								tr 
									if timer is paused => `table-row-primary`
								-->
							<tr class="">

								<td class="dashboard-table-cell-fave">
								<!-- 

								@NOTE
								classes to add
									.task-favorite
										if it is a fave => `active`
										if not			=> ''
								 -->
									<a href="#" class="task-favorite color-primary-hover color-neutral color-primary-active" >
										
										<i class="symbol symbol-star-stroke symbol-star-toggle"></i>
									</a>
								</td>

								<td class="dashboard-table-cell-max">
									<a href="<?=app_create_link(array('template'=>'project')) ?>" class="fave-task text-wrap-ellipsis">
										<span class="REPLACE">Task Name but really long Task Name but really long Task Name but really long Task Name but really long Task Name but really long Task Name but really long </span>
									</a>
								</td>
								


								<td class="dashboard-table-cell-max">
									<a href="<?=app_create_link(array('template'=>'project')) ?>" class="open-project text-wrap-ellipsis">
										<span class="REPLACE">Project Name but really long Project Name but really long Project Name but really long Project Name but really long Project Name but really long Project Name but really long Project Name but really long </span>
									</a>
								</td>

								<td class="dashboard-table-cell-max">
									<span href="<?=app_create_link(array('template'=>'project')) ?>" class="open-client text-wrap-ellipsis">
										<span class="REPLACE">Client Name  but really long Client Name  but really long Client Name  but really long Client Name  but really long Client Name  but really long Client Name  but really long Client Name  but really long Client Name  but really long </span>
									</span>
								</td>

								<td class="text-align-center">
									<?php app_get_component('components/table-modal-notes') ?>
								</td>

								<td>
									<span class="open-start-date text-nowrap">
										<span class="REPLACE">4/20/69</span>
									</span>
								</td>


								<td>
									<span class="open-days-open text-nowrap">
										<span class="REPLACE">69</span> days
									</span>
								</td>


								<td class="text-align-center text-nowrap">
									<?php app_get_component('components/table-timer-toggle') ?>
								</td>


								<td class="dashboard-table-cell-action text-align-center position-relative">
									
									<?php app_get_component('components/tooltip-action') ?>
									
								</td>

							</tr>



								<!-- @PLACEHOLDER: DELETE WHEN READY -->
									<?php for($i=1; $i<=4; $i++){ ?>
										
										<tr class="table-row-primary">


											<td class="dashboard-table-cell-fave">
											<!-- 

											@NOTE
											classes to add
												.task-favorite
													if it is a fave => `active`
													if not			=> ''
											-->
												<a href="#" class=" task-favorite color-primary-hover color-neutral color-primary-active" >
													
													<i class="symbol symbol-star-stroke symbol-star-toggle"></i>
												</a>
											</td>


											<td class="dashboard-table-cell-max">
												<a href="<?=app_create_link(array('template'=>'project')) ?>" class="fave-task text-wrap-ellipsis">
													<span class="REPLACE">active boi</span>
												</a>
											</td>
											


											<td class="dashboard-table-cell-max">
												<a href="<?=app_create_link(array('template'=>'project')) ?>" class="open-project text-wrap-ellipsis">
													<span class="REPLACE">Project Name but really long Project Name but really long Project Name but really long Project Name but really long Project Name but really long Project Name but really long Project Name but really long </span>
												</a>
											</td>

											<td class="dashboard-table-cell-max">
												<span href="<?=app_create_link(array('template'=>'project')) ?>" class="open-client text-wrap-ellipsis">
													<span class="REPLACE">Client Name  but really long Client Name  but really long Client Name  but really long Client Name  but really long Client Name  but really long Client Name  but really long Client Name  but really long Client Name  but really long </span>
												</span>
											</td>

											<td class="text-align-center">
												
												<?php app_get_component('components/table-modal-notes') ?>
											</td>

											<td>
												<span class="open-start-date text-nowrap">
													<span class="REPLACE">4/20/69</span>
												</span>
											</td>


											<td>
												<span class="open-days-open text-nowrap">
													<span class="REPLACE">69</span> days
												</span>
											</td>


											<td class="text-align-center text-nowrap">
												
												<a href="#" class="open-timer-btn workflow-toggle-play btn btn-symbol btn-small  well well-compact
												btn-primary background-gradient-45 background-image-none-hover display-none
													">
													<i class="symbol symbol-play"></i>
												</a>
												
												<a href="#"class="open-timer-btn workflow-toggle-pause btn btn-symbol btn-small  well well-compact btn-secondary">
													<i class="symbol symbol-pause"></i>
												</a>


												<!-- spacer -->
												<span class="font-size-large">&nbsp;</span>

												<a href="#"class="open-timer-btn workflow-toggle-stop btn btn-symbol btn-small  well well-compact
												btn-neutral background-success-hover
												">
													<i class="symbol symbol-check"></i>
												</a>
											</td>


											<td class="dashboard-table-cell-action text-align-center position-relative">
												<?php app_get_component('components/tooltip-action') ?>
												
											</td>

										</tr>

										
										<tr class="">



											<td class="dashboard-table-cell-fave">
											<!-- 

											@NOTE
											classes to add
												.task-favorite
													if it is a fave => `active`
													if not			=> ''
											-->
												<a href="#" class=" active task-favorite color-primary-hover color-neutral color-primary-active" >
													
													<i class="symbol symbol-star-stroke symbol-star-toggle"></i>
												</a>
											</td>


											<td class="dashboard-table-cell-max">
												<a href="<?=app_create_link(array('template'=>'project')) ?>" class="fave-task-task text-wrap-ellipsis">
													<span class="REPLACE">inactyive boi </span>
												</a>
											</td>
											


											<td class="dashboard-table-cell-max">
												<a href="<?=app_create_link(array('template'=>'project')) ?>" class="fave-task-project text-wrap-ellipsis">
													<span class="REPLACE">Project Name but really long Project Name but really long Project Name but really long Project Name but really long Project Name but really long Project Name but really long Project Name but really long </span>
												</a>
											</td>

											<td class="dashboard-table-cell-max">
												<span href="<?=app_create_link(array('template'=>'project')) ?>" class="fave-task-client text-wrap-ellipsis">
													<span class="REPLACE">Client Name  but really long Client Name  but really long Client Name  but really long Client Name  but really long Client Name  but really long Client Name  but really long Client Name  but really long Client Name  but really long </span>
												</span>
											</td>

											<td class="text-align-center">
												
												<?php app_get_component('components/table-modal-notes') ?>
											</td>

											<td>
												<span class="fave-task-start-date text-nowrap">
													<span class="REPLACE">4/20/69</span>
												</span>
											</td>


											<td>
												<span class="fave-task-days-open text-nowrap">
													<span class="REPLACE">69</span> days
												</span>
											</td>


											<td class="text-align-center text-nowrap">
												
												<a href="#" class="fave-task-timer-btn workflow-toggle-play btn btn-symbol btn-small  well well-compact
												btn-primary background-gradient-45 background-image-none-hover
													">
													<i class="symbol symbol-play"></i>
												</a>

												<a href="#"class="fave-task-timer-btn workflow-toggle-pause btn btn-symbol btn-small  well well-compact btn-secondary 
												display-none">
													<i class="symbol symbol-pause"></i>
												</a>


												<!-- spacer -->
												<span class="font-size-large">&nbsp;</span>

												<a href="#"class="fave-task-timer-btn workflow-toggle-stop btn btn-symbol btn-small  well well-compact
												btn-neutral background-success-hover
												">
													<i class="symbol symbol-check"></i>
												</a>
											</td>


											<td class="dashboard-table-cell-action text-align-center position-relative">
												
												
												<?php app_get_component('components/tooltip-action') ?>
												
											</td>

										</tr>
										
									<?php } ?>





					</table>
				</div>
			<!-- @else no entries -->
				<p class="p color-neutral font-style-italic">No favorites yet.</p>
		</div>
	</div>

	<!-- open tasks -->
		<!-- 
			@NOTE:
			may need to modify the cookie feature that tracks whether accordion was closed or opened the last time
		 -->
	<div
		id="workflow-dash-open-tasks"
		class="module"
		data-grid-area-md="opentasks"
		>
		<div class="module-header">
			<h3 class="module-title open" data-toggle="accordion" data-href="#open-tasks">
				Open Tasks <i class="symbol symbol-caret-down symbol-caret-up-toggle"></i>
			</h3>
		</div>
		<div class="module-content accordion open" id="open-tasks">
			<!-- @if there are entries -->
		
				<div class="table-wrapper dashboard-table-wrapper-gutterless">

					<table class="table-small data-open-tasks">
						<tr>
							<th class="text-nowrap" >&nbsp;</th>
							<th class="text-nowrap">Task</th>
							<th class="text-nowrap">Project</th>
							<th class="text-nowrap">Client</th>
							<th class="text-align-center text-nowrap">Notes</th>
							<th class="text-nowrap">Start Date</th>
							<th class="text-nowrap">Days Open</th>
							<th colspan="2"><span class="sr-only">Actions</span>&nbsp;</th>
						</tr>
						
						<!-- @LOOP TR-->
						<!-- @NOTE
							classes to add
								tr 
									if timer is paused => `table-row-primary`
								-->
							<tr class="">

								<td class="dashboard-table-cell-fave">
								<!-- 

								@NOTE
								classes to add
									.task-favorite
										if it is a fave => `active`
										if not			=> ''
								 -->
									<a href="#" class="task-favorite color-primary-hover color-neutral color-primary-active" >
										
										<i class="symbol symbol-star-stroke symbol-star-toggle"></i>
									</a>
								</td>

								<td class="dashboard-table-cell-max">
									<a href="<?=app_create_link(array('template'=>'project')) ?>" class="open-task text-wrap-ellipsis">
										<span class="REPLACE">Task Name but really long Task Name but really long Task Name but really long Task Name but really long Task Name but really long Task Name but really long </span>
									</a>
								</td>
								


								<td class="dashboard-table-cell-max">
									<a href="<?=app_create_link(array('template'=>'project')) ?>" class="open-project text-wrap-ellipsis">
										<span class="REPLACE">Project Name but really long Project Name but really long Project Name but really long Project Name but really long Project Name but really long Project Name but really long Project Name but really long </span>
									</a>
								</td>

								<td class="dashboard-table-cell-max">
									<span href="<?=app_create_link(array('template'=>'project')) ?>" class="open-client text-wrap-ellipsis">
										<span class="REPLACE">Client Name  but really long Client Name  but really long Client Name  but really long Client Name  but really long Client Name  but really long Client Name  but really long Client Name  but really long Client Name  but really long </span>
									</span>
								</td>

								<td class="text-align-center">
									<?php app_get_component('components/table-modal-notes') ?>
								</td>

								<td>
									<span class="open-start-date text-nowrap">
										<span class="REPLACE">4/20/69</span>
									</span>
								</td>


								<td>
									<span class="open-days-open text-nowrap">
										<span class="REPLACE">69</span> days
									</span>
								</td>


								<td class="text-align-center text-nowrap">
									<?php app_get_component('components/table-timer-toggle') ?>
								</td>


								<td class="dashboard-table-cell-action text-align-center position-relative">
									
									<?php app_get_component('components/tooltip-action') ?>
									
								</td>

							</tr>



								<!-- @PLACEHOLDER: DELETE WHEN READY -->
									<?php for($i=1; $i<=4; $i++){ ?>
										
										<tr class="table-row-primary">


											<td class="dashboard-table-cell-fave">
											<!-- 

											@NOTE
											classes to add
												.task-favorite
													if it is a fave => `active`
													if not			=> ''
											-->
												<a href="#" class=" task-favorite color-primary-hover color-neutral color-primary-active" >
													
													<i class="symbol symbol-star-stroke symbol-star-toggle"></i>
												</a>
											</td>


											<td class="dashboard-table-cell-max">
												<a href="<?=app_create_link(array('template'=>'project')) ?>" class="open-task text-wrap-ellipsis">
													<span class="REPLACE">active boi</span>
												</a>
											</td>
											


											<td class="dashboard-table-cell-max">
												<a href="<?=app_create_link(array('template'=>'project')) ?>" class="open-project text-wrap-ellipsis">
													<span class="REPLACE">Project Name but really long Project Name but really long Project Name but really long Project Name but really long Project Name but really long Project Name but really long Project Name but really long </span>
												</a>
											</td>

											<td class="dashboard-table-cell-max">
												<span href="<?=app_create_link(array('template'=>'project')) ?>" class="open-client text-wrap-ellipsis">
													<span class="REPLACE">Client Name  but really long Client Name  but really long Client Name  but really long Client Name  but really long Client Name  but really long Client Name  but really long Client Name  but really long Client Name  but really long </span>
												</span>
											</td>

											<td class="text-align-center">
												
												<?php app_get_component('components/table-modal-notes') ?>
											</td>

											<td>
												<span class="open-start-date text-nowrap">
													<span class="REPLACE">4/20/69</span>
												</span>
											</td>


											<td>
												<span class="open-days-open text-nowrap">
													<span class="REPLACE">69</span> days
												</span>
											</td>


											<td class="text-align-center text-nowrap">
												
												<a href="#" class="open-timer-btn workflow-toggle-play btn btn-symbol btn-small  well well-compact
												btn-primary background-gradient-45 background-image-none-hover display-none
													">
													<i class="symbol symbol-play"></i>
												</a>
												
												<a href="#"class="open-timer-btn workflow-toggle-pause btn btn-symbol btn-small  well well-compact btn-secondary">
													<i class="symbol symbol-pause"></i>
												</a>


												<!-- spacer -->
												<span class="font-size-large">&nbsp;</span>

												<a href="#"class="open-timer-btn workflow-toggle-stop btn btn-symbol btn-small  well well-compact
												btn-neutral background-success-hover
												">
													<i class="symbol symbol-check"></i>
												</a>
											</td>


											<td class="dashboard-table-cell-action text-align-center position-relative">
												<?php app_get_component('components/tooltip-action') ?>
												
											</td>

										</tr>

										
										<tr class="">



											<td class="dashboard-table-cell-fave">
											<!-- 

											@NOTE
											classes to add
												.task-favorite
													if it is a fave => `active`
													if not			=> ''
											-->
												<a href="#" class=" active task-favorite color-primary-hover color-neutral color-primary-active" >
													
													<i class="symbol symbol-star-stroke symbol-star-toggle"></i>
												</a>
											</td>


											<td class="dashboard-table-cell-max">
												<a href="<?=app_create_link(array('template'=>'project')) ?>" class="open-task-task text-wrap-ellipsis">
													<span class="REPLACE">inactyive boi </span>
												</a>
											</td>
											


											<td class="dashboard-table-cell-max">
												<a href="<?=app_create_link(array('template'=>'project')) ?>" class="open-task-project text-wrap-ellipsis">
													<span class="REPLACE">Project Name but really long Project Name but really long Project Name but really long Project Name but really long Project Name but really long Project Name but really long Project Name but really long </span>
												</a>
											</td>

											<td class="dashboard-table-cell-max">
												<span href="<?=app_create_link(array('template'=>'project')) ?>" class="open-task-client text-wrap-ellipsis">
													<span class="REPLACE">Client Name  but really long Client Name  but really long Client Name  but really long Client Name  but really long Client Name  but really long Client Name  but really long Client Name  but really long Client Name  but really long </span>
												</span>
											</td>

											<td class="text-align-center">
												
												<?php app_get_component('components/table-modal-notes') ?>
											</td>

											<td>
												<span class="open-task-start-date text-nowrap">
													<span class="REPLACE">4/20/69</span>
												</span>
											</td>


											<td>
												<span class="open-task-days-open text-nowrap">
													<span class="REPLACE">69</span> days
												</span>
											</td>


											<td class="text-align-center text-nowrap">
												
												<a href="#" class="open-task-timer-btn workflow-toggle-play btn btn-symbol btn-small  well well-compact
												btn-primary background-gradient-45 background-image-none-hover
													">
													<i class="symbol symbol-play"></i>
												</a>

												<a href="#"class="open-task-timer-btn workflow-toggle-pause btn btn-symbol btn-small  well well-compact btn-secondary 
												display-none">
													<i class="symbol symbol-pause"></i>
												</a>


												<!-- spacer -->
												<span class="font-size-large">&nbsp;</span>

												<a href="#"class="open-task-timer-btn workflow-toggle-stop btn btn-symbol btn-small  well well-compact
												btn-neutral background-success-hover
												">
													<i class="symbol symbol-check"></i>
												</a>
											</td>


											<td class="dashboard-table-cell-action text-align-center position-relative">
												
												
												<?php app_get_component('components/tooltip-action') ?>
												
											</td>

										</tr>
										
									<?php } ?>





					</table>
				</div>
			<!-- @else no entries -->
				<a href="#board-track-time" class="zone zone-primary">
					Awesome! You have no open tasks. Click here to start a task <i class="symbol symbol-plus"></i>
				</a>
		</div>
	</div>


	<!-- activity log -->
	<div
		id="timetracker-home-activity-log"
		class="module"
		data-grid-area-md="activitylog"
		>
		<div class="module-header module-header-break no-margin-bottom">

			<?php app_get_component('components/module-functions-accordion-toggle'); ?>

			<h3 class="module-title">
				Activity Log
			</h3>
			<div class="module-functions no-margin-top accordion accordion-mobile">
				<?php app_get_component('components/filter-input-group-timetracked'); ?>
				<?php app_get_component('components/board-track-time'); ?>
			</div>
		</div>
		<div class="module-content">

			

		<div class="accordion-group accordion-group-no-close">
				<!-- @NOTE: on of the .tabs li  along with paired `.accordion` must be `.open`. in this case today is default. modify if needed -->
				<ul class="tabs	tabs-responsive">
					<li class="tab open" data-toggle="accordion" data-href="#activity-log-today"> 
						<a href="#activity-log-today" >Today's Activity</a>
					</li>
					<li class="tab" data-toggle="accordion" data-href="#activity-log-week">
						<a href="#activity-log-week" >Weekly Timesheet</a>
					</li>
				</ul>

				<br>

				<div class="accordion open" id="activity-log-today">

					<!-- @if there are entries -->
						<div class="table-wrapper dashboard-table-wrapper-gutterless">

							<table class="table-small data-log-today">
								<tr>
									<th class="text-nowrap">Start Time</th>
									<th class="text-nowrap">End Time</th>
									<th class="text-nowrap">Task</th>
									<th class="text-nowrap">Project</th>
									<th class="text-nowrap">Client</th>
									<th class="text-nowrap text-align-center">Notes</th>
									<th class="text-nowrap">Total Time</th>
									<th class="text-nowrap text-align-center">Status</th>
									<th class="text-nowrap"><span class="sr-only">Actions</span>&nbsp;</th>
								</tr>
								
								<!-- @LOOP TR-->
								<!-- @NOTE
									classes to add
										tr 
											if timer is paused => `table-row-primary`
										-->
									<tr class="">

										<td>
											<span class="log-today-start-time">
												<span class="REPLACE">
													6:00am
												</span>
											</span>
										</td>
										<td>
											<span class="log-today-end-time">
												<span class="REPLACE">
													9:00pm
												</span>
											</span>
										</td>


										<td class="dashboard-table-cell-max">
											<a href="<?=app_create_link(array('template'=>'project')) ?>" class="log-today-task text-wrap-ellipsis">
												<span class="REPLACE">Task Name but really long Task Name but really long Task Name but really long Task Name but really long Task Name but really long Task Name but really long </span>
											</a>
										</td>
										


										<td class="dashboard-table-cell-max">
											<a href="<?=app_create_link(array('template'=>'project')) ?>" class="log-today-project text-wrap-ellipsis">
												<span class="REPLACE">Project Name but really long Project Name but really long Project Name but really long Project Name but really long Project Name but really long Project Name but really long Project Name but really long </span>
											</a>
										</td>

										<td class="dashboard-table-cell-max">
											<span href="<?=app_create_link(array('template'=>'project')) ?>" class="log-today-client text-wrap-ellipsis">
												<span class="REPLACE">Client Name  but really long Client Name  but really long Client Name  but really long Client Name  but really long Client Name  but really long Client Name  but really long Client Name  but really long Client Name  but really long </span>
											</span>
										</td>

										<td class="text-align-center">
											
											<?php app_get_component('components/table-modal-notes'); ?>
										</td>


										<td>
											<span class="font-weight-700 log-today-total-time text-nowrap">
												<span class="REPLACE">6h 09m
											</span>
										</td>


										<td class="text-align-center text-nowrap">
											<?php app_get_component('components/table-timer-toggle') ?>
										</td>


										<td class="dashboard-table-cell-action text-align-center position-relative">
											
											<?php app_get_component('components/tooltip-action') ?>
											
										</td>

									</tr>



										<!-- @PLACEHOLDER: DELETE WHEN READY -->
											<?php for($i=1; $i<=4; $i++){ ?>
												
												<tr class="">

													<td>
														<span class="log-today-start-time">
															<span class="REPLACE">
																6:00am
															</span>
														</span>
													</td>
													<td>
														<span class="log-today-end-time">
															<span class="REPLACE">
																9:00pm
															</span>
														</span>
													</td>


													<td class="dashboard-table-cell-max">
														<a href="<?=app_create_link(array('template'=>'project')) ?>" class="log-today-task text-wrap-ellipsis">
															<span class="REPLACE">ya boi is done now no take backs </span>
														</a>
													</td>
													


													<td class="dashboard-table-cell-max">
														<a href="<?=app_create_link(array('template'=>'project')) ?>" class="log-today-project text-wrap-ellipsis">
															<span class="REPLACE">cant restart this particular entry anymore</span>
														</a>
													</td>

													<td class="dashboard-table-cell-max">
														<span href="<?=app_create_link(array('template'=>'project')) ?>" class="log-today-client text-wrap-ellipsis">
															<span class="REPLACE">bye bye buttons</span>
														</span>
													</td>

													<td class="text-align-center">
														
														<?php app_get_component('components/table-modal-notes'); ?>
													</td>
													<td>
														<span class="font-weight-700 log-today-total-time text-nowrap">
															<span class="REPLACE">6h 09m
														</span>
													</td>


													<td class="text-align-center text-nowrap">
														&nbsp;
													</td>


													<td class="dashboard-table-cell-action text-align-center position-relative">
														
														<?php app_get_component('components/tooltip-action') ?>
														
													</td>

												</tr>

												<tr class="table-row-primary">

													<td>
														<span class="log-today-start-time">
															<span class="REPLACE">
																6:00am
															</span>
														</span>
													</td>
													<td>
														<span class="log-today-end-time">
															<span class="REPLACE">
																9:00pm
															</span>
														</span>
													</td>


													<td class="dashboard-table-cell-max">
														<a href="<?=app_create_link(array('template'=>'project')) ?>" class="log-today-task text-wrap-ellipsis">
															<span class="REPLACE">ya boi is still running </span>
														</a>
													</td>
													


													<td class="dashboard-table-cell-max">
														<a href="<?=app_create_link(array('template'=>'project')) ?>" class="log-today-project text-wrap-ellipsis">
															<span class="REPLACE">cant restart this particular entry anymore</span>
														</a>
													</td>

													<td class="dashboard-table-cell-max">
														<span href="<?=app_create_link(array('template'=>'project')) ?>" class="log-today-client text-wrap-ellipsis">
															<span class="REPLACE">hi butts</span>
														</span>
													</td>

													<td class="text-align-center">
														
														<?php app_get_component('components/table-modal-notes'); ?>
													</td>
													<td>
														<span class="font-weight-700 log-today-total-time text-nowrap">
															<span class="REPLACE">6h 09m
														</span>
													</td>


													<td class="text-align-center text-nowrap">
														
												
														<a href="#" class="open-task-timer-btn workflow-toggle-play btn btn-symbol btn-small  well well-compact
														btn-primary background-gradient-45 background-image-none-hover 
														display-none
															">
															<i class="symbol symbol-play"></i>
														</a>

														<a href="#"class="open-task-timer-btn workflow-toggle-pause btn btn-symbol btn-small  well well-compact btn-secondary">
															<i class="symbol symbol-pause"></i>
														</a>


														<!-- spacer -->
														<span class="font-size-large">&nbsp;</span>

														<a href="#"class="open-task-timer-btn workflow-toggle-stop btn btn-symbol btn-small  well well-compact
														btn-neutral background-success-hover
														">
															<i class="symbol symbol-check"></i>
														</a>
													</td>


													<td class="dashboard-table-cell-action text-align-center position-relative">
														
														<?php app_get_component('components/tooltip-action') ?>
														
													</td>

												</tr>
												
											<?php } ?>





							</table>
						</div>
			
					
					<!-- @else no entries -->
						<a href="#board-track-time" class="zone zone-primary">
							Start Your First Project of the Day <i class="symbol symbol-plus"></i>
						</a>
				</div>


				<div class="accordion" id="activity-log-week">

					<!-- @if there are entries -->
						
						<div class="table-wrapper dashboard-table-wrapper-gutterless">

							<table class="table-col-separation data-log-week text-vertical-align-middle">

								<tr>
									<th class="text-nowrap dashboard-table-cell-max">
											Project & Task
									</th>


									<!-- @LOOP TD-->
									<!-- 
										@NOTE. 
										all th.dashboard-table-cell-date will generate a weekspan based on the set dropdown date
										-->
									<th class="dashboard-table-cell-date text-nowrap text-align-center">
										<!-- @NOTE 3 day letter -->
										<span class="log-week-day-name">
											<span class="REPLACE">Day</span>
										</span>
										<br>
										<span class="log-week-day-date font-weight-400">
											<span class="REPLACE">6/9</span>
										</span>
									</th>
									
										<?php for($i=1; $i<=6; $i++){ ?>
													

									
											<th class="dashboard-table-cell-date text-nowrap text-align-center">
												<!-- @NOTE 3 letter day -->
												<span class="log-week-day-name">
													<span class="REPLACE">Fri</span>
												</span>
												<br>
												<span class="log-week-day-date font-weight-400">
													<span class="REPLACE">4/20</span>
												</span>
											</th>
													
										<?php } ?>

									<th class="dashboard-table-cell-date text-nowrap text-align-center background-primary color-background">Total</th>
								</tr>
								<tr class="log-week-summary table-row-primary">
									
									<td class="dashboard-table-cell-max color-primary font-weight-700 color-primary text-transform-uppercase">
										Total
									</td>


									
									<!-- @LOOP TD-->
									<td class="dashboard-table-cell-date text-nowrap text-align-center">
										<!--
								
											@NOTE: these are classes to add
											.log-week-day-total 
													if total exceeds 8.5 hours =>.color-primary
													if time is less 7.5 hours =>.color-error
											
											
											-->
										<span class="log-week-day-total font-weight-700">
											<span class="REPLACE">8hr 01m</span>
										</span>
									</td>
									

										<!-- @PLACEHOLDER: DELETE WHEN READY -->
											<?php for($i=1; $i<=2; $i++){ ?>
														

										
												<td class="dashboard-table-cell-date text-nowrap text-align-center">
													<span class=" log-week-day-total font-weight-700 color-error">
														<span class="REPLACE">6hr 09m</span>
													</span>
												</td>

										
												<td class="dashboard-table-cell-date text-nowrap text-align-center">
													<span class=" log-week-day-total font-weight-700 color-primary">
														<span class="REPLACE">66hr 06m</span>
													</span>
												</td>

										
												<td class="dashboard-table-cell-date text-nowrap text-align-center">
													<span class="log-week-day-total font-weight-700">
														<span class="REPLACE">8hr 15m</span>
													</span>
												</td>
														
											<?php } ?>

									<!--
								
										@NOTE: these are classes to add
										.log-week-total 
												if total exceeds 40.25 hours =>.color-primary
												if time is less 40 hours =>.color-error
										
										
										-->
									<td class="dashboard-table-cell-date text-nowrap text-align-center font-weight-700">
										<span class="log-week-total">
											<span class="REPLACE">40hr 20m</span>
										</span>
									</td>
								</tr>
								
								<!-- @LOOP TR-->
								<!-- @NOTE
									classes to add
										tr 
											if timer is paused => `table-row-primary`
										-->
								<tr class="table-large">

									<td  class="dashboard-table-cell-max task-info">
										<?php app_get_component('components/project-link-timetracker') ?>
									</td>


									<!-- @LOOP TD-->
									<td class="dashboard-table-cell-date text-nowrap text-align-center">
										
										<span class="log-week-task-day-total">
											<span class="REPLACE">8hr 01m</span>
										</span>
									</td>
									

										<!-- @PLACEHOLDER: DELETE WHEN READY -->
											<?php for($i=1; $i<=2; $i++){ ?>
														

										
												<td class="dashboard-table-cell-date text-nowrap text-align-center">
													<span class="log-week-task-day-total">
														<span class="REPLACE">6hr 09m</span>
													</span>
												</td>


														

										
												<td class="dashboard-table-cell-date text-nowrap text-align-center">
													<span class=" log-week-task-day-total">
														<span class="REPLACE">66hr 06m</span>
													</span>
												</td>



										
												<td class="dashboard-table-cell-date text-nowrap text-align-center">
													<span class=" log-week-task-day-total">
														<span class="REPLACE">8hr 15m</span>
													</span>
												</td>
														
											<?php } ?>



									<!--
								
									@NOTE: these are classes to add
									.log-week-total 
											if total exceeds 40.25 hours =>.color-primary
											if time is less 40 hours =>.color-error
									
									
									-->
									<td class="dashboard-table-cell-date text-nowrap text-align-center table-cell-primary">
										<span class="log-week-task-total font-weight-700">
											<span class="REPLACE">666hr 69m</span>
										</span>
									</td>

								</tr>



									<!-- @PLACEHOLDER: DELETE WHEN READY -->
										<?php for($j=1; $j<=4; $j++){ ?>
											<tr class="table-large">

												<td  class="dashboard-table-cell-max task-info">
													<?php app_get_component('components/project-link-timetracker') ?>
												</td>


												<!-- @LOOP TD-->
												<td class="dashboard-table-cell-date text-nowrap text-align-center">
													<!--
											
														@NOTE: these are classes to add
														.log-week-task-day-total 
																if total exceeds 8.5 hours =>.color-primary
																if time is less 7.5 hours =>.color-error
														
														
														-->
													<span class="log-week-task-day-total">
														<span class="REPLACE">8hr 01m</span>
													</span>
												</td>
												

													<!-- @PLACEHOLDER: DELETE WHEN READY -->
														<?php for($i=1; $i<=2; $i++){ ?>
																	

													
															<td class="dashboard-table-cell-date text-nowrap text-align-center">
																<span class="log-week-task-day-total">
																	<span class="REPLACE">6hr 09m</span>
																</span>
															</td>


																	

													
															<td class="dashboard-table-cell-date text-nowrap text-align-center">
																<span class=" log-week-task-day-total">
																	<span class="REPLACE">66hr 06m</span>
																</span>
															</td>



													
															<td class="dashboard-table-cell-date text-nowrap text-align-center">
																<span class=" log-week-task-day-total ">
																	<span class="REPLACE">8hr 15m</span>
																</span>
															</td>
																	
														<?php } ?>

												
												<td class="dashboard-table-cell-date text-nowrap text-align-center table-cell-primary color-error font-weight-700">
													<span class="log-week-task-total">
														<span class="REPLACE">666hr 69m</span>
													</span>
												</td>

											</tr>
											
										<?php } ?>





							</table>
						</div>
			
						
					<!-- @else no entries -->
					<a href="#board-track-time" class="zone zone-primary">
							Start Your First Project of the week <i class="symbol symbol-plus"></i>
						</a>
				</div>
			</div>
		</div>
	</div>
	

</div>





<!-- DO NOT COPY EVERYTHING BELOW -->

<div class="module-grid" style="width: 500px;">

<h1>DO NOT COPY THIS SECTION</h1>

<h2>STATE 1: Stopped timer + no entry</h2>

<p>
	Notes:<br><br>

	Play button and placeholder will trigger the same board
</p>
<div class="p">

	<!-- timetracker -->

		<!-- @NOTE:
	
		classes to add:
			#timetracker-home-watch
				when timer is running => ` theme-inverse background-gradient-225`
				when timer is in default state/stopped => ``
	
		-->
		<div
		class="module position-relative">
		<div class="module-header module-header-break no-margin-bottom position-relative">
			<div class="align-items-center flex-grid flex-grid-no-gutter flex-grid-fixed justify-content-space-between">
				<div class="flex-col-7">
					<h3 class="module-title">Time Tracker</h3>
				</div>
				<div class="flex-col-5 text-align-right">
					<a href="#board-track-time" class="btn color-primary color-secondary-hover color-inherit-inverse btn-no-shadow btn-symbol" data-toggle="board">
						<i class="symbol symbol-kebab-horizontal"></i>
					</a> 


				
				<!-- @NOTE: this triggers the browser extension/app. while thaty's in progreess we can comment this out for now -->
				<a href="#" class=" btn btn-symbol btn-no-shadow color-neutral color-inherit-inverse color-secondary-hover" id="workflow-app-trigger">
					<img data-src="<?=FWAPPS_ROOT_URL ?>/app-<?=FWAPPS_APP;?>/assets/images/icon-popper.svg" alt="Trigger App/ Browser Extension">
				</a>
				</div>
			</div>
			
		</div>
		<div class="flex-wrap flex-xs justify-content-space-around module-content no-margin-top">
			
			
			<div class="flex-1-1 flex-grid flex-grid-fixed flex-grid-compact align-items-center justify-content-space-between ">
				<div class="flex-child">
					<div class="watch-time special-primary text-leading-whole inline-flex no-margin-y">

						<span class="watch-time-hours">
							<span class="REPLACE">00</span>
						</span>

						<span>:</span>

						<span class="watch-time-minutes">
							<span class="REPLACE">00</span>
						</span>


						<span>:</span>

						<span class="watch-time-minutes">
							<span class="REPLACE">00</span>
						</span>
					</div>
				</div>

				<div class="flex-child">

					<!-- play butt..on -->
					<!-- @NOTE:
						classes to add:
							.watch-btn.workflow-toggle-play 
								when timer is running => `display-none`
								when timer is in default state/stopped => ``


						other attributes

							when there is a previous entry => (
								href => `#` 
								onclick	=> `somethingthatstartsthetimerforpreviousentry()`
							)

							when no previous entry OR previous entry was stopped =>  (
								href = `#board-track-time`
								onclick	=> NULL
								)

					-->
					<a href="#board-track-time"  class="watch-btn workflow-toggle-play btn btn-symbol  well btn-secondary background-gradient-45 background-image-none-hover background-primary-hover
						">
						<i class="symbol symbol-play"></i>
					</a>

					


					<!-- pause butt..on -->
					<!-- @NOTE:

					button commented out so it doesn't scare ppl. make sure to comment back in and modify when ready :)

					classes to add:
						.watch-btn.workflow-toggle-pause
							when timer is running => ``
							when timer is in default state/stopped  => `display-none`
					-->
					
					<a href="#"class="watch-btn workflow-toggle-pause btn btn-symbol  well btn-secondary
					display-none">
						<i class="symbol symbol-pause"></i>
					</a>


					<!-- spacer -->
					<span class="font-size-large">&nbsp;&nbsp;&nbsp;</span>



					<!-- stop butt..on -->
					<!-- @NOTE:
					classes to add:
						.watch-btn.workflow-toggle-stop
							when timer is running => `btn-theme-outline`
							when timer is in default state  => `btn-neutral`
							when timer is in default stopped AND  there was no previous entry OR previous entry was stopped => `btn-neutral btn-disabled`
			
					-->
					<a href="#"class="watch-btn workflow-toggle-stop btn btn-symbol  well
					btn-neutral btn-disabled
					">
						<i class="symbol symbol-stop"></i>
					</a>



				</div>
			</div>

			<div class="flex-1-1 flex-grid flex-grid-fixed flex-grid-compact no-margin-bottom align-items-center">


				<!--
					
					@else there was no previous entry 
				-->
				

					<div class="flex-col-12">
						<a href="#board-track-time" data-toggle="board" class="display-block">
							<h4 class="watch-project color-neutral no-margin-y">
								Add Project +
							</h4>


							<p class="watch-client color-neutral no-margin-bottom">
								Add Client +
							</p>
							
							<p class="watch-task color-neutral h5 no-margin-y text-leading-expanded font-weight-400">
								Add Task +
							</p>
						</a>
					</div>
			</div>
		</div>
	</div>


</div>


<h2>STATE 1.5: board toggled. if the user successfuly inputs a timer log, watch goes to state 2</h2>


<h2>STATE 2:Active timer w previous entry</h2>

<p>
	Notes:<br><br>

	pause button will stop timer and chang ewatch  state to state 3<br><br>

	kebab stays and is still accessible allowing user to add new entry on top of the page<br>
</p>


<div class="p">
	
	<!-- timetracker -->

		<!-- @NOTE:
	
		classes to add:
			#timetracker-home-watch
				when timer is running => ` theme-inverse background-gradient-225`
				when timer is in default state/stopped => ``
	
		-->
		<div
		id="workflow-dash-watch"
		class="module position-relative theme-inverse background-gradient-225">
		<div class="module-header module-header-break no-margin-bottom position-relative">
			<div class="align-items-center flex-grid flex-grid-no-gutter flex-grid-fixed justify-content-space-between">
				<div class="flex-col-7">
					<h3 class="module-title">Time Tracker</h3>
				</div>
				<div class="flex-col-5 text-align-right">
					<a href="#board-track-time" class="btn color-primary color-secondary-hover color-inherit-inverse btn-no-shadow btn-symbol" data-toggle="board">
						<i class="symbol symbol-kebab-horizontal"></i>
					</a> 


				
				<!-- @NOTE: this triggers the browser extension/app. while thaty's in progreess we can comment this out for now -->
				<a href="#" class=" btn btn-symbol btn-no-shadow color-neutral color-inherit-inverse color-secondary-hover" id="workflow-app-trigger">
					<img data-src="<?=FWAPPS_ROOT_URL ?>/app-<?=FWAPPS_APP;?>/assets/images/icon-popper.svg" alt="Trigger App/ Browser Extension">
				</a>
				</div>
			</div>
			
		</div>
		<div class="flex-wrap flex-xs justify-content-space-around module-content no-margin-top">
			
			
			<div class="flex-1-1 flex-grid flex-grid-fixed flex-grid-compact align-items-center justify-content-space-between ">
				<div class="flex-child">
					<div class="watch-time special-primary text-leading-whole inline-flex no-margin-y">

						<span class="watch-time-hours">
							<span class="REPLACE">00</span>
						</span>

						<span>:</span>

						<span class="watch-time-minutes">
							<span class="REPLACE">00</span>
						</span>


						<span>:</span>

						<span class="watch-time-minutes">
							<span class="REPLACE">00</span>
						</span>
					</div>
				</div>

				<div class="flex-child">

					<!-- play butt..on -->
					<!-- @NOTE:
						classes to add:
							.watch-btn.workflow-toggle-play 
								when timer is running => `display-none`
								when timer is in default state/stopped => ``


						other attributes

							when there is a previous entry => (
								href => `#` 
								onclick	=> `somethingthatstartsthetimerforpreviousentry()`
							)

							when no previous entry OR previous entry was stopped =>  (
								href = `#board-track-time`
								onclick	=> NULL
								)

					-->
					<a href="#"  class="watch-btn workflow-toggle-play btn btn-symbol  well btn-secondary background-gradient-45 background-image-none-hover background-primary-hover display-none
						">
						<i class="symbol symbol-play"></i>
					</a>

					


					<!-- pause butt..on -->
					<!-- @NOTE:

					button commented out so it doesn't scare ppl. make sure to comment back in and modify when ready :)

					classes to add:
						.watch-btn.workflow-toggle-pause
							when timer is running => ``
							when timer is in default state/stopped  => `display-none`
					-->
					
					<a href="#"class="watch-btn workflow-toggle-pause btn btn-symbol  well btn-secondary">
						<i class="symbol symbol-pause"></i>
					</a>


					<!-- spacer -->
					<span class="font-size-large">&nbsp;&nbsp;&nbsp;</span>



					<!-- stop butt..on -->
					<!-- @NOTE:
					classes to add:
						.watch-btn.workflow-toggle-stop
							when timer is running => `btn-theme-outline`
							when timer is in default state  => `btn-neutral`
							when timer is in default stopped AND  there was no previous entry OR previous entry was stopped => `btn-neutral btn-disabled`
			
					-->
					<a href="#"class="watch-btn workflow-toggle-stop btn btn-symbol  well
					btn-theme-outline
					">
						<i class="symbol symbol-stop"></i>
					</a>



				</div>
			</div>

			<div class="flex-1-1 flex-grid flex-grid-fixed flex-grid-compact no-margin-bottom align-items-center">



			<!-- @if there was a previous entry OR previous entry was stopped -->
				<div class="watch-last-entry flex-col-12">

					<h4 class="watch-project color-primary color-inherit-inverse text-wrap-ellipsis no-margin-y">
						<span class="REPLACE">Project with a really long name Project with a really long name </span>
					</h4>


					<p class="watch-client text-wrap-ellipsis no-margin-bottom">
						<span class="REPLACE">Client Name but really long Client Name but really long Client Name but really long Client Name but really long Client Name but really long </span>
					</p>
					
					<p class="watch-task color-neutral color-inherit-inverse h5 text-wrap-ellipsis no-margin-y text-leading-expanded font-weight-400">
						<span class="REPLACE">Task with a really long name Task with a really long name </span>
					</p>
				</div>
			</div>
		</div>
	</div>


</div>



<h2>STATE 3:Stopped timer w/ previous entry</h2>

<p>
	Notes:<br><br>

	Play button will automatically resume the previous entry NOT the board, changing state back to state 2<br><br>
	Clicking the kebab will open the board to start a new entry/ timer<br>
</p>


<div class="p">
		<!-- timetracker -->

		<!-- @NOTE:
	
		classes to add:
			#timetracker-home-watch
				when timer is running => ` theme-inverse background-gradient-225`
				when timer is in default state/stopped => ``
	
		-->
		<div
		class="module position-relative">
		<div class="module-header module-header-break no-margin-bottom position-relative">
			<div class="align-items-center flex-grid flex-grid-no-gutter flex-grid-fixed justify-content-space-between">
				<div class="flex-col-7">
					<h3 class="module-title">Time Tracker</h3>
				</div>
				<div class="flex-col-5 text-align-right">
					<a href="#board-track-time" class="btn color-primary color-secondary-hover color-inherit-inverse btn-no-shadow btn-symbol" data-toggle="board">
						<i class="symbol symbol-kebab-horizontal"></i>
					</a> 


				
				<!-- @NOTE: this triggers the browser extension/app. while thaty's in progreess we can comment this out for now -->
				<a href="#" class=" btn btn-symbol btn-no-shadow color-neutral color-inherit-inverse color-secondary-hover" id="workflow-app-trigger">
					<img data-src="<?=FWAPPS_ROOT_URL ?>/app-<?=FWAPPS_APP;?>/assets/images/icon-popper.svg" alt="Trigger App/ Browser Extension">
				</a>
				</div>
			</div>
			
		</div>
		<div class="flex-wrap flex-xs justify-content-space-around module-content no-margin-top">
			
			
			<div class="flex-1-1 flex-grid flex-grid-fixed flex-grid-compact align-items-center justify-content-space-between ">
				<div class="flex-child">
					<div class="watch-time special-primary text-leading-whole inline-flex no-margin-y">

						<span class="watch-time-hours">
							<span class="REPLACE">00</span>
						</span>

						<span>:</span>

						<span class="watch-time-minutes">
							<span class="REPLACE">00</span>
						</span>


						<span>:</span>

						<span class="watch-time-minutes">
							<span class="REPLACE">00</span>
						</span>
					</div>
				</div>

				<div class="flex-child">

					<!-- play butt..on -->
					<!-- @NOTE:
						classes to add:
							.watch-btn.workflow-toggle-play 
								when timer is running => `display-none`
								when timer is in default state/stopped => ``


						other attributes

							when there is a previous entry => (
								href => `#` 
								onclick	=> `somethingthatstartsthetimerforpreviousentry()`
							)

							when no previous entry OR previous entry was stopped =>  (
								href = `#board-track-time`
								onclick	=> NULL
								)

					-->
					<a href="#"  class="watch-btn workflow-toggle-play btn btn-symbol  well btn-secondary background-gradient-45 background-image-none-hover background-primary-hover
						">
						<i class="symbol symbol-play"></i>
					</a>

					


					<!-- pause butt..on -->
					<!-- @NOTE:

					button commented out so it doesn't scare ppl. make sure to comment back in and modify when ready :)

					classes to add:
						.watch-btn.workflow-toggle-pause
							when timer is running => ``
							when timer is in default state/stopped  => `display-none`
					-->
					
					<a href="#"class="watch-btn workflow-toggle-pause btn btn-symbol  well btn-secondary
					display-none">
						<i class="symbol symbol-pause"></i>
					</a>


					<!-- spacer -->
					<span class="font-size-large">&nbsp;&nbsp;&nbsp;</span>



					<!-- stop butt..on -->
					<!-- @NOTE:
					classes to add:
						.watch-btn.workflow-toggle-stop
							when timer is running => `btn-theme-outline`
							when timer is in default state  => `btn-neutral`
							when timer is in default stopped AND  there was no previous entry OR previous entry was stopped => `btn-neutral btn-disabled`
			
					-->
					<a href="#"class="watch-btn workflow-toggle-stop btn btn-symbol  well
					btn-neutral
					">
						<i class="symbol symbol-stop"></i>
					</a>



				</div>
			</div>

			<div class="flex-1-1 flex-grid flex-grid-fixed flex-grid-compact no-margin-bottom align-items-center">


				<!-- @if there was a previous entry OR previous entry was stopped -->
				<div class="watch-last-entry flex-col-12">

					<h4 class="watch-project color-primary color-inherit-inverse text-wrap-ellipsis no-margin-y">
						<span class="REPLACE">Project with a really long name Project with a really long name </span>
					</h4>


					<p class="watch-client text-wrap-ellipsis no-margin-bottom">
						<span class="REPLACE">Client Name but really long Client Name but really long Client Name but really long Client Name but really long Client Name but really long </span>
					</p>
					
					<p class="watch-task color-neutral color-inherit-inverse h5 text-wrap-ellipsis no-margin-y text-leading-expanded font-weight-400">
						<span class="REPLACE">Task with a really long name Task with a really long name </span>
					</p>
				</div>
			</div>
		</div>
	</div>
</div>

<p>
	Task Panil
</p>




<ul class="nav-list">
	<!-- MY TIME -->
	<li class="nav-item">
		<a href="<?=app_create_link(array('template'=> '_DEMO-task')); ?>">
			
			<span class="nav-item-text">DEMO - Task</span>
		</a>
	</li>

	
</ul>

								</div>