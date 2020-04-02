<div
	id="activity-log"
	class="module-grid">
		<div
			id="activity-log-header"
			class="module">

			<div class="module-header module-header-break">

				<div class="flex-0-0">
					<h3 class="no-margin special-secondary text-clip-background background-gradient">Activity Log</h3>
					<a href="<?php app_create_link(array('template'=>'profile')) ?>" class="no-margin color-neutral color-primary-hover no-margin profile-name">
						<span class="REPLACE">Profile Name</span>
					</a>
				</div>

				<div class="module-functions">
					<?php app_get_component('components/filter-dropdown-date-single'); ?>
				</div>

			</div>

			<div class="module-content">

				<hr class="no-margin-y">

				<div class="flex-grid flex-grid-fixed flex-grid-compact  ">

					<!-- total -->
					<div class="log-total flex-col-xs-12 flex-col-sm-6 flex-col-md-3">
						<h5 class="no-margin-bottom text-transform-uppercase">Total Time</h5>

						<!--
							
							NOTE: replace `color-secondary` with `color-success` class if timer is running for color scheme, if not, remove the class
							
							
							-->
						<p class="log-total-time no-margin-top h3 color-secondary font-weight-300 no-margin-bottom">
							<span class="REPLACE">6 hours 9 minutes</span>
						</p>
						
					</div>

					<!-- start -->
					<div class="log-start flex-col-xs-6 flex-col-sm-3 flex-col-md-2">
						<h5 class="no-margin-bottom text-transform-uppercase">Total Time</h5>
						<p class="log-start-time no-margin-top h3 font-weight-300 no-margin-bottom">
							<span class="REPLACE">8:00am</span>
						</p>
						
					</div>

					<!-- end -->
					<div class="log-end flex-col-xs-6 flex-col-sm-3 flex-col-md-2">
						<h5 class="no-margin-bottom text-transform-uppercase">Total Time</h5>

						<p class="log-end-time no-margin-top h3 font-weight-300 no-margin-bottom">
							<span class="REPLACE">--</span>
						</p>
						
					</div>



					<!-- toggle -->
					<div class="log-toggle flex-col-xs-12  flex-col-md-5 flex-md">

					<div class="flex-grid flex-grid-compact align-items-center justify-content-flex-end flex-grid-no-gutter-y">
							<div class=" flex-child">
								<?php app_get_component('components/modal-track-time'); ?>
							</div>

							<div class=" flex-child">
								<p class="special-secondary no-margin-y">
									<span class="hours">00</span>
									<span class="separator">:</span>
									<span class="minutes">00</span>
								</p>
							</div>
					</div>


					
						
					</div>


				</div>
			</div>

		</div>



		<div
			id="activity-log-details"
			class="module">

			<div class="module-content">

				<div class="table-wrapper">
					<table>
						<tr>
							<th>Start Time</th>
							<th>End Time</th>
							<th>Task / Project</th>
							<th>Client</th>
							<th colspan="2">Total Time</th>
							<th class="dashboard-table-cell-action text-align-center">Action</th>
						</tr>
						
						<!-- @LOOP TR-->
							<tr>

								<td>
									<span class="log-start-time">
										<span class="REPLACE">6:00am</span>
									</span>
								</td>



								<td>
									<span class="log-end-time">
										<span class="REPLACE">9:00am</span>
									</span>
								</td>


								<td class="dashboard-table-cell-has-notes">
									<a href="<?=DASHBOARD_ROOT_URL ?>?template=project&env=<?=DASHBOARD_SLUG ?>" class="project-name color-inherit color-primary-hover">
										<span class="REPLACE">Project Name w/tooltip</span>
									</a>


									<!-- 

										NOTE: Replace data-tooltip-content with notes
										-->
									<span
										class="dashboard-table-cell-notes-tag tag tag-primary"
										data-toggle="tooltip-hover"
										data-tooltip-placement="top"
										data-tooltip-content="<span class='REPLACE'>Project notes go here</span>"
										>
											Notes
										</span>

								</td>

								<td>
									<a href="<?=DASHBOARD_ROOT_URL ?>?template=project&env=<?=DASHBOARD_SLUG ?>" class="client-name color-inherit color-primary-hover">
										<strong>
											<span class="REPLACE">Client Name</span>
										</strong>
									</a>
								</td>

								<td>
									<span class="log-total-time">
										<span class="REPLACE">9:00am</span>
									</span>
								</td>



								<td class="text-align-right">


									<!-- @NOTE 
										which btn  to add a `display-none` to when...

										- active timer;
											.dashboard-log-toggle-play

										- paused timer
											.dashboard-log-toggle-pause

										- stopped timer
											.dashboard-log-toggle-pause
											.dashboard-log-toggle-stop

								
								
								
									-->
									

										<a href="#" class="
											btn btn-symbol btn-success
											dashboard-log-toggle-play
											">
											<i class="symbol symbol-play"></i>
										</a>

										<a href="#" class="
											btn btn-symbol btn-secondary
											dashboard-log-toggle-pause
											display-none
											">
											<i class="symbol symbol-pause"></i>
										</a>


										<a href="#" class="
											btn btn-symbol btn-accent
											dashboard-log-toggle-stop
											display-none
											">
											<i class="symbol symbol-stop"></i>
										</a>
								</td>


								<td class="dashboard-table-cell-action text-align-center position-relative">
									
									<span class="btn color-primary color-secondary-hover btn-no-shadow btn-symbol"
									data-toggle="tooltip-click"
									data-tooltip-placement="bottom"
									data-tooltip-center-x="true"
									data-tooltip-allow-interaction="true"
									data-tooltip-width="150px"
									data-tooltip-classes="dashboard-actions-tooltip text-leading-expanded"
									data-tooltip-content="
										<ul class='unstyled no-margin-y'>
											<li>
												<a
													class='color-inherit color-primary-hover js-edit-time-record'
													href='#modal-track-time'
													data-toggle='modal'
													data-modal-disable-overlay='false'
													data-modal-callback='toggleDurationReq()'
													data-record-id='TASKID'>
														Edit
												</a>
											</li>
											<li>
												<a
													href='#'
													class='color-inherit color-primary-hover js-edit-time-record'
													data-record-id='TASKID'
													data-record-idx='IDX'>
														Delete
												</a>
											</li>
										</ul>"


									
										>
										<i class="symbol symbol-kebab-horizontal"></i>
									</span> 
									
								</td>

							</tr>



								<!-- @PLACEHOLDER: DELETE WHEN READY -->
									<?php for($i=1; $i<=4; $i++){ ?>

										<tr>

											<td>
												<span class="log-start-time">
													<span class="REPLACE">6:00am</span>
												</span>
											</td>



											<td>
												<span class="log-end-time">
													<span class="REPLACE">9:00am</span>
												</span>
											</td>


											<td class="dashboard-table-cell-has-notes">
												<a href="<?=DASHBOARD_ROOT_URL ?>?template=project&env=<?=DASHBOARD_SLUG ?>" class="project-name color-inherit color-primary-hover">
													<span class="REPLACE">Project paused </span>
												</a>


												<!-- 

													NOTE: Replace data-tooltip-content with notes
													-->
												<span
													class="dashboard-table-cell-notes-tag tag tag-primary"
													data-toggle="tooltip-hover"
													data-tooltip-placement="top"
													data-tooltip-content="<span class='REPLACE'>Project notes go here</span>"
													>
														Notes
													</span>

											</td>

											<td>
												<a href="<?=DASHBOARD_ROOT_URL ?>?template=project&env=<?=DASHBOARD_SLUG ?>" class="client-name color-inherit color-primary-hover">
													<strong>
														<span class="REPLACE">Client Name</span>
													</strong>
												</a>
											</td>

											<td>
												<span class="log-total-time">
													<span class="REPLACE">9:00am</span>
												</span>
											</td>



											<td class="text-align-right">

													<a href="#" class="
														btn btn-symbol btn-success
														dashboard-log-toggle-play 
														">
														<i class="symbol symbol-play"></i>
													</a>

													<a href="#" class="
														btn btn-symbol btn-secondary
														dashboard-log-toggle-pause
														display-none
														">
														<i class="symbol symbol-pause"></i>
													</a>


													<a href="#" class="
														btn btn-symbol btn-accent
														dashboard-log-toggle-stop
														">
														<i class="symbol symbol-stop"></i>
													</a>
											</td>


											<td class="dashboard-table-cell-action text-align-center position-relative">
												
												<span class="btn color-primary color-secondary-hover btn-no-shadow btn-symbol" data-toggle="dropdown"><i class="symbol symbol-kebab-horizontal"></i></span> 
												<!--
													@NOTE:
													style issues: on last querry pagination items, change .dropdown-top-flush to .dropdown-bottom-flush to avoid scroll issues
												-->
												<ul data-dropdown-width="200px" class="dropdown dropdown-top-flush dropdown-right text-align-left">

													<!-- @PLACEHOLDER: DELETE WHEN READY -->
													<li class="REPLACE"><a href="#">Edit</a></li>
													<li class="REPLACE"><a href="#">Delete</a></li>
													<li class="REPLACE"><a href="#">View Details</a></li>

												</ul>

											</td>

										</tr>


										<tr>

											<td>
												<span class="log-start-time">
													<span class="REPLACE">6:00am</span>
												</span>
											</td>



											<td>
												<span class="log-end-time">
													<span class="REPLACE">9:00am</span>
												</span>
											</td>


											<td class="dashboard-table-cell-has-notes">
												<a href="<?=DASHBOARD_ROOT_URL ?>?template=project&env=<?=DASHBOARD_SLUG ?>" class="project-name color-inherit color-primary-hover">
													<span class="REPLACE">Project active tracking </span>
												</a>


												<!-- 

													NOTE: Replace data-tooltip-content with notes
													-->
												<span
													class="dashboard-table-cell-notes-tag tag tag-primary"
													data-toggle="tooltip-hover"
													data-tooltip-placement="top"
													data-tooltip-content="<span class='REPLACE'>Project notes go here</span>"
													>
														Notes
													</span>

											</td>

											<td>
												<a href="<?=DASHBOARD_ROOT_URL ?>?template=project&env=<?=DASHBOARD_SLUG ?>" class="client-name color-inherit color-primary-hover">
													<strong>
														<span class="REPLACE">Client Name</span>
													</strong>
												</a>
											</td>

											<td>
												<span class="log-total-time">
													<span class="REPLACE">9:00am</span>
												</span>
											</td>



											<td class="text-align-right">


												<!-- @NOTE 
													which btn  to add a `display-none` to when...

													- active timer;
														.dashboard-log-toggle-play

													- paused timer
														.dashboard-log-toggle-pause

													- stopped timer
														.dashboard-log-toggle-pause
														.dashboard-log-toggle-stop

											
											
											
												-->
												

													<a href="#" class="
														btn btn-symbol btn-success
														dashboard-log-toggle-play display-none
														">
														<i class="symbol symbol-play"></i>
													</a>

													<a href="#" class="
														btn btn-symbol btn-secondary
														dashboard-log-toggle-pause
														">
														<i class="symbol symbol-pause"></i>
													</a>


													<a href="#" class="
														btn btn-symbol btn-accent
														dashboard-log-toggle-stop
														">
														<i class="symbol symbol-stop"></i>
													</a>
											</td>


											<td class="dashboard-table-cell-action text-align-center position-relative">
												
												<span class="btn color-primary color-secondary-hover btn-no-shadow btn-symbol" data-toggle="dropdown"><i class="symbol symbol-kebab-horizontal"></i></span> 
												<!--
													@NOTE:
													style issues: on last querry pagination items, change .dropdown-top-flush to .dropdown-bottom-flush to avoid scroll issues
												-->
												<ul data-dropdown-width="200px" class="dropdown dropdown-top-flush dropdown-right text-align-left">

													<!-- @PLACEHOLDER: DELETE WHEN READY -->
													<li class="REPLACE"><a href="#">Edit</a></li>
													<li class="REPLACE"><a href="#">Delete</a></li>
													<li class="REPLACE"><a href="#">View Details</a></li>

												</ul>

											</td>

										</tr>

									<?php } ?>





					</table>
				</div>		
				<div class="module-footer text-align-right">
					<div class="module-functions">
					<!-- NOTE: for best practices, iff the modal function or .modal markup was already declared before, just include the button instead -->
					<?php app_get_component('components/modal-track-time'); ?>
					</div>
				</div>
			</div>

		</div>
</div>