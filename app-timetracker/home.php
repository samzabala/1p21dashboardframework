<div
	id="timetracker-home"
	class="module-grid"
	data-grid-template-columns-lg="2fr 500px"
	data-grid-template-rows-lg="min-content minmax( 0px, min-content)"
	data-grid-template-areas-lg="
	'overview watch'
	'opentasks opentasks'
	'activitylog activitylog'">
	



		<!-- timetracker -->

		<!-- @NOTE:
	
		classes to add:
			#timetracker-home-watch
				when timer is running => ` theme-inverse background-gradient-225`
				when timer is paused => ` theme-inverse background-secondary`
				when timer is in default state/stopped => ``
	
		-->

		<div
			id="timetracker-home-watch"
			class="module position-relative"
			data-grid-area-lg="watch">
			<div class="module-header module-header-break no-margin-bottom position-relative">
				<h3 class="module-title">Time Tracker</h3>

				<!-- @NOTE: this triggers the browser extension/app. while thaty's in progreess we can comment this out for now -->
				<a href="#" class="position-absolute btn btn-symbol btn-no-shadow" id="timetracker-app-trigger">
					<img data-src="<?=FWAPPS_ROOT_URL ?>/app-<?=FWAPPS_APP;?>/assets/images/icon-popper.svg" alt="Trigger App/ Browser Extension">
				</a>
			</div>
			<div class="module-content align-self-center">
				
				<div class="flex-grid flex-grid-compact flex-grid-fixed align-items-center justify-content-space-between">
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
								.watch-btn.timetracker-toggle-play 
									when timer is running => `display-none`
									when timer is paused => `btn-theme-polar background-gradient-45 background-image-none-hover background-theme-polar-hover color-secondary-hover`
									when timer is in default state/stopped => `btn-secondary background-gradient-45 background-image-none-hover background-primary-hover`


							other attributes

								when there is a previous entry => (
									href = `#modal-track-time`
									onclick	=> NULL
								)
								when no previous entry OR previous entry was stopped =>  (
										href => `#` 
										onclick	=> `somethingthatstartsthetimerforpreviousentry()`
									)

						-->
						<a href="#"  class="watch-btn timetracker-toggle-play btn btn-symbol btn-symbol-round well
						btn-secondary background-gradient-45 background-image-none-hover background-primary-hover
							">
							<i class="symbol symbol-play"></i>
						</a>

						


						<!-- pause butt..on -->
						<!-- @NOTE:

						button commented out so it doesn't scare ppl. make sure to comment back in and modify when ready :)

						classes to add:
							.watch-btn.timetracker-toggle-pause
								when timer is running => ``
								when timer is paused => `display-none`
								when timer is in default state/stopped  => `display-none`
						-->
						
						<!--

						<a href="#"class="watch-btn timetracker-toggle-pause btn btn-symbol btn-symbol-round well
						btn-theme-outline background-secondary-hover color-background-hover">
							<i class="symbol symbol-pause"></i>
						</a>

						-->


						<!-- spacer -->
						<span class="font-size-large">&nbsp;&nbsp;&nbsp;</span>



						<!-- stop butt..on -->
						<!-- @NOTE:
						classes to add:
							.watch-btn.timetracker-toggle-stop
								when timer is running => `btn-theme-outline`
								when timer is paused => `btn-theme-outline`
								when timer is in default state  => `btn-neutral`
								when timer is in default stopped AND  there was no previous entry OR previous entry was stopped => `btn-neutral btn-disabled`
				
						-->
						<a href="#"class="watch-btn timetracker-toggle-stop btn btn-symbol btn-symbol-round well
						btn-neutral
						">
							<i class="symbol symbol-stop"></i>
						</a>



					</div>
				</div>
				<hr class="no-margin-top">

				<div class="watch-last-entry flex-grid flex-grid-compact flex-grid-fixed no-margin-top flex-grid-fixed flex-grid-no-gutter-y justify-content-space-between">


					<!-- @if there was a previous entry OR previous entry was stopped -->
						<div class="flex-col-10">

							<h4 class="watch-client color-primary color-inherit-inverse text-wrap-ellipsis no-margin-y">
								<span class="REPLACE">Client Name but really long Client Name but really long Client Name but really long Client Name but really long Client Name but really long </span>
							</h4>


							<p class="watch-project text-wrap-ellipsis no-margin-bottom">
								<span class="REPLACE">Project with a really long name Project with a really long name </span>
							</p>
							
							<p class="watch-task color-neutral color-inherit-inverse h5 text-wrap-ellipsis no-margin-y text-leading-expanded font-weight-400">
							<span class="REPLACE">Task with a really long name Task with a really long name </span>
							</p>
							
						</div>
						<div class="flex-col-2 text-align-right">
							<a href="#modal-track-time" class="btn color-primary color-secondary-hover color-inherit-inverse btn-no-shadow btn-symbol" data-toggle="modal">
								<i class="symbol symbol-kebab-horizontal"></i>
							</a> 
						</div>
					</div>

				<!--
					
					@else there was no previous entry OR previous entry was stopped
					@NOTE: element is commented out because it looks broken and may scare ppl. should display nicely when the conditional logic is placed :D 
				-->
					<!-- 


					<div class="flexc-col-12">
						<a href="#modal-track-time" data-toggle="modal" class="no-margin-y zone-primary zone">
							Awesome! You have no previous time logs yet.<br> You can start tracking your time here. <i class="symbol symbol-plus"></i>
						</a>
					</div>


					-->
			</div>
		</div>



		
		<!-- overview -->

		<div
			id="timetracker-home-overview"
			class="module align-items-center"
			data-grid-area-lg="overview">

			<div class="module-header module-header-break no-margin-bottom">
				<div class="flex-0-0">
					<div class="flex-grid flex-grid-no-gutter-y flex-grid-compact align-items-center">
						<div class="flex-child flex-0-0">
							
							<?php app_get_component('components/profile-image-small'); ?>
						</div>
						<div class="flex-child flex-0-0">
							
							<h3 class="no-margin special-secondary text-clip-background background-gradient">
								<a href="<?php app_create_link(array('template'=>'profile')) ?>" class="no-margin color-neutral color-primary-hover no-margin profile-name">
									<span class="REPLACE">Profile Name</span>
								</a>
							</h3>
						</div>
					</div>
					
				</div>

				<div class="module-functions">
					<?php app_get_component('components/filter-dropdown-date-span-maxmonth'); ?>
				</div>

			</div>

			<div class="module-content">

				<hr class="no-margin-bottom">


				<div class="flex-grid flex-grid-fixed flex-grid-compact">

					<!-- stats -->
					<div class="flex-col-xs-12 flex-col-sm-8 flex-col-md-7">
						<div class="flex-grid flex-grid-fixed flex-grid-compact flex-grid-no-gutter-y">


							<!-- total -->
							<div class="overview-total flex-col-xs-12 flex-col-md-4">
								<h5 class=" text-transform-uppercase">Total Time</h5>

								<!--
									
									@NOTE: these are classes to add
									.overview-total-time 
											if total exceeds 8.5 hours =>.color-primary
											if time is less 7.5 hours =>.color-error
									
									
									-->
								<p class="overview-total-time color-primary no-margin-top h1 font-weight-300 no-margin-bottom inline-flex">

									<span class="overview-total-time-hours">
										<span class="REPLACE">00</span>
									</span>

									<span>:</span>

									<span class="overview-total-time-minutes">
										<span class="REPLACE">00</span>
									</span>
									
									&nbsp;hrs

								</p>
								
							</div>

							<!-- start -->
							<div class="overview-start flex-col-xs-6 flex-col-sm-6 flex-col-md-4">
								<h5 class=" text-transform-uppercase">Start Time</h5>
								<p class="overview-start-time color-neutral no-margin-top h1 font-weight-300 no-margin-bottom inline-flex">

									<span class="overview-start-time-hours">
										<span class="REPLACE">00</span>
									</span>

									<span>:</span>

									<span class="overview-start-time-minutes">
										<span class="REPLACE">00</span>
									</span>

									<span class="overview-start-time-meridiem">
										<span class="REPLACE">am</span>
									</span>

								</p>
								
							</div>

							<!-- end -->
							<div class="overview-end flex-col-xs-6 flex-col-sm-6 flex-col-md-4">
								<h5 class=" text-transform-uppercase">End Time</h5>

								<p class="overview-end-time no-margin-top h1 font-weight-300 no-margin-bottom inline-flex color-neutral">

									<span class="overview-end-time-hours">
										<span class="REPLACE">00</span>
									</span>

									<span>:</span>

									<span class="overview-end-time-minutes">
										<span class="REPLACE">00</span>
									</span>
									
									<span class="overview-end-time-meridiem">
										<span class="REPLACE">am</span>
									</span>

								</p>
							</div>
						</div>
					</div>





					<!-- chart -->
					<div class="overview-chart flex-col-xs-12  flex-col-sm-4 flex-col-md-5">

						<div class="flex-grid flex-grid-compact justify-content-flex-end flex-grid-no-gutter-y">
								<div class="flex-col-xs-12 flex-col-md-6">
									<h5 class=" text-transform-uppercase">Weekly Overview</h5>
									<span>Your time data for <br class="hide-xs">this current week.</span>
								</div>

								<div class="flex-col-xs-12 flex-col-md-6">
									<div>
										<img data-src="/placeholder/charts/timetracker/chart-time-log.png" alt="" style="margin-top: .5rem;" class="REPLACE">
									</div>
								</div>
						</div>
						
					</div>

					

				</div>
			</div>

		</div>


		<!-- open tasks -->
		<!-- 
			@NOTE:
			may need to modify the cookie feature that tracks whether accordion was closed or opened the last time
		 -->
		<div
			id="timetracker-home-open-tasks"
			class="module"
			data-grid-area-lg="opentasks"
			>
			<div class="module-header">
				<h3 class="module-title open" data-toggle="accordion" data-href="#open-tasks">
					Open Tasks <i class="symbol symbol-caret-down symbol-caret-up-toggle"></i>
				</h3>
			</div>
			<div class="module-content accordion open" id="open-tasks">
				<!-- @if there are entries -->
			
					<div class="table-wrapper">

						<table class="table-small data-open-tasks">
							<tr>
								<th class="text-nowrap">Task</th>
								<th class="text-nowrap">Project</th>
								<th class="text-nowrap">Client</th>
								<th class="text-align-center text-nowrap">Notes</th>
								<th class="text-nowrap">Start Date</th>
								<th class="text-nowrap">Total Time</th>
								<th colspan="2"><span class="sr-only">Actions</span></th>
							</tr>
							
							<!-- @LOOP TR-->
							<!-- @NOTE
								classes to add
									tr 
										if timer is paused => `table-row-primary`
									-->
								<tr class="">



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
													
													<a href="#" class="open-timer-btn timetracker-toggle-play btn btn-symbol btn-small btn-symbol-round well well-compact
													btn-primary background-gradient-45 background-image-none-hover display-none
														">
														<i class="symbol symbol-play"></i>
													</a>
													
													<a href="#"class="open-timer-btn timetracker-toggle-pause btn btn-symbol btn-small btn-symbol-round well well-compact btn-secondary">
														<i class="symbol symbol-pause"></i>
													</a>


													<!-- spacer -->
													<span class="font-size-large">&nbsp;</span>

													<a href="#"class="open-timer-btn timetracker-toggle-stop btn btn-symbol btn-small btn-symbol-round well well-compact
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
													
													<a href="#" class="open-task-timer-btn timetracker-toggle-play btn btn-symbol btn-small btn-symbol-round well well-compact
													btn-primary background-gradient-45 background-image-none-hover
														">
														<i class="symbol symbol-play"></i>
													</a>

													<a href="#"class="open-task-timer-btn timetracker-toggle-pause btn btn-symbol btn-small btn-symbol-round well well-compact btn-secondary 
													display-none">
														<i class="symbol symbol-pause"></i>
													</a>


													<!-- spacer -->
													<span class="font-size-large">&nbsp;</span>

													<a href="#"class="open-task-timer-btn timetracker-toggle-stop btn btn-symbol btn-small btn-symbol-round well well-compact
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
					<a href="#modal-track-time" class="zone zone-primary">
						Awesome! You have no open tasks. Click here to start a task <i class="symbol symbol-plus"></i>
					</a>
			</div>
		</div>


		

		<!-- activity log -->
		<div
			id="timetracker-home-activity-log"
			class="module"
			data-grid-area-lg="activitylog"
			>
			<div class="module-header module-header-break no-margin-bottom">

				<?php app_get_component('components/module-functions-accordion-toggle'); ?>

				<h3 class="module-title">
					Activity Log
				</h3>
				<div class="module-functions no-margin-top accordion accordion-mobile">
					<?php app_get_component('components/filter-input-group-timetracked'); ?>
					<?php app_get_component('components/filter-dropdown-date-single'); ?>
					<?php app_get_component('components/modal-track-time'); ?>
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
							<div class="table-wrapper">

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
										<th class="text-nowrap"><div class="sr-only">Actions</div></th>
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



											<!--
						
											@NOTE: these are classes to add
											.log-today-total-time
													if total exceeds 8.5 hours =>.color-primary
													if time is less 7.5 hours =>.color-error
											
											
											-->
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
															<span class="font-weight-700 log-today-total-time text-nowrap color-error">
																<span class="REPLACE">6h 09m
															</span>
														</td>


														<td class="text-align-center text-nowrap">
															
														</td>


														<td class="dashboard-table-cell-action text-align-center position-relative">
															
															<?php app_get_component('components/tooltip-action') ?>
															
														</td>

													</tr>
													
												<?php } ?>





								</table>
							</div>
				
						
						<!-- @else no entries -->
							<a href="#modal-track-time" class="zone zone-primary">
								Start Your First Project of the Day <i class="symbol symbol-plus"></i>
							</a>
					</div>


					<div class="accordion" id="activity-log-week">

						<!-- @if there are entries -->
							
							<div class="table-wrapper">

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
										<td class="dashboard-table-cell-date text-nowrap text-align-center">
											<span class="log-week-total font-weight-700">
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
									<tr>

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
											<span class="log-week-task-day-total font-weight-700">
												<span class="REPLACE">8hr 01m</span>
											</span>
										</td>
										

											<!-- @PLACEHOLDER: DELETE WHEN READY -->
												<?php for($i=1; $i<=2; $i++){ ?>
															

											
													<td class="dashboard-table-cell-date text-nowrap text-align-center">
														<span class="log-week-task-day-total font-weight-700 color-error">
															<span class="REPLACE">6hr 09m</span>
														</span>
													</td>


															

											
													<td class="dashboard-table-cell-date text-nowrap text-align-center">
														<span class=" log-week-task-day-total font-weight-700 color-primary">
															<span class="REPLACE">66hr 06m</span>
														</span>
													</td>



											
													<td class="dashboard-table-cell-date text-nowrap text-align-center">
														<span class=" log-week-task-day-total font-weight-700">
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
										<td class="dashboard-table-cell-date text-nowrap text-align-center">
											<span class="log-week-task-total font-weight-700">
												<span class="REPLACE">666hr 69m</span>
											</span>
										</td>

									</tr>



										<!-- @PLACEHOLDER: DELETE WHEN READY -->
											<?php for($j=1; $j<=4; $j++){ ?>
												<tr>

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
														<span class="log-week-task-day-total font-weight-700">
															<span class="REPLACE">8hr 01m</span>
														</span>
													</td>
													

														<!-- @PLACEHOLDER: DELETE WHEN READY -->
															<?php for($i=1; $i<=2; $i++){ ?>
																		

														
																<td class="dashboard-table-cell-date text-nowrap text-align-center">
																	<span class="log-week-task-day-total font-weight-700 color-error">
																		<span class="REPLACE">6hr 09m</span>
																	</span>
																</td>


																		

														
																<td class="dashboard-table-cell-date text-nowrap text-align-center">
																	<span class=" log-week-task-day-total font-weight-700 color-primary">
																		<span class="REPLACE">66hr 06m</span>
																	</span>
																</td>



														
																<td class="dashboard-table-cell-date text-nowrap text-align-center">
																	<span class=" log-week-task-day-total font-weight-700">
																		<span class="REPLACE">8hr 15m</span>
																	</span>
																</td>
																		
															<?php } ?>

													
													<td class="dashboard-table-cell-date text-nowrap text-align-center">
														<span class="log-week-task-total font-weight-700 color-primary">
															<span class="REPLACE">666hr 69m</span>
														</span>
													</td>

												</tr>
												
											<?php } ?>





								</table>
							</div>
				
							
						<!-- @else no entries -->
						<a href="#modal-track-time" class="zone zone-primary">
								Start Your First Project of the week <i class="symbol symbol-plus"></i>
							</a>
					</div>
				</div>
			</div>
		</div>
	
</div>