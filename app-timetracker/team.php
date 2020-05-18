<div
	id="timetracker-team"
	class="module-grid">

	<!-- activity log -->
	<div
		id="timetracker-team-activity-log"
		class="module"
		>
		<div class="module-header module-header-break no-margin-bottom">

			<?php app_get_component('components/module-functions-accordion-toggle'); ?>

			<h3 class="module-title">
				Activity Log
			</h3>
			<div class="module-functions no-margin-top accordion accordion-mobile">
				<?php app_get_component('components/filter-input-group-timetracked'); ?>
				<?php app_get_component('components/modal-add-member-full-button'); ?>
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

							<table class="table data-log-today">
								<tr>
									<th class="text-nowrap dashboard-table-cell-max">Team Member</th>
									<th class="text-nowrap text-align-center">Tasks Completed</th>
									<th class="text-nowrap text-align-center">Tasks</th>
									<th class="text-nowrap text-align-center">Projects</th>
									<th class="text-nowrap text-align-center">Clients</th>
									<th class="text-nowrap text-align-center">Start Time</th>
									<th class="text-nowrap text-align-center">End Time</th>
									<th class="text-nowrap text-align-center">Total Hours</th>
								</tr>
								
								<!-- @LOOP TR-->
								<!-- @NOTE
									classes to add
										tr 
											if timer is paused => `table-row-primary`
										-->
									<tr class="text-vertical-align-middle">

										<td class="dashboard-table-cell-max">
											<?php app_get_component('components/table-profile-named'); ?>
										</td>

										<td class="text-align-center">
											<span class="log-today-stat-tasks-completed">
												<span class="REPLACE">
													69
												</span>
											</span>
										</td>

										<td class="text-align-center">
											<span class="log-today-stat-tasks">
												<span class="REPLACE">
													4
												</span>
											</span>
										</td>

										<td class="text-align-center">
											<span class="log-today-stat-projects">
												<span class="REPLACE">
													2
												</span>
											</span>
										</td>

										<td class="text-align-center">
											<span class="log-today-stat-clients">
												<span class="REPLACE">
													0
												</span>
											</span>
										</td>

										<td class="text-align-center">
											<span class="log-today-start-time">
												<span class="REPLACE">
													6:00am
												</span>
											</span>
										</td>

										<td class="text-align-center">
											<span class="log-today-end-time">
												<span class="REPLACE">
													9:00pm
												</span>
											</span>
										</td>


										<td class="text-align-center">
											<span class="font-weight-700 log-today-total-time text-nowrap">
												<span class="REPLACE">6h 09m
											</span>
										</td>

									</tr>



										<!-- @PLACEHOLDER: DELETE WHEN READY -->
											<?php for($i=1; $i<=4; $i++){ ?>
												<tr class="text-vertical-align-middle">

													<td class="dashboard-table-cell-max">
													<?php app_get_component('components/table-profile-named'); ?>
													</td>

													<td class="text-align-center">
														<span class="log-today-stat-tasks-completed">
															<span class="REPLACE">
																69
															</span>
														</span>
													</td>

													<td class="text-align-center">
														<span class="log-today-stat-tasks">
															<span class="REPLACE">
																4
															</span>
														</span>
													</td>

													<td class="text-align-center">
														<span class="log-today-stat-projects">
															<span class="REPLACE">
																2
															</span>
														</span>
													</td>

													<td class="text-align-center">
														<span class="log-today-stat-clients">
															<span class="REPLACE">
																0
															</span>
														</span>
													</td>

													<td class="text-align-center">
														<span class="log-today-start-time">
															<span class="REPLACE">
																6:00am
															</span>
														</span>
													</td>

													<td class="text-align-center">
														<span class="log-today-end-time">
															<span class="REPLACE">
																9:00pm
															</span>
														</span>
													</td>


													<td class="text-align-center">
														<span class="font-weight-700 log-today-total-time text-nowrap">
															<span class="REPLACE">6h 09m
														</span>
													</td>

												</tr>
												
											<?php } ?>





							</table>
						</div>
			
					
					<!-- @else no entries -->
						<p>Nothing here :| </p>
				</div>


				<div class="accordion" id="activity-log-week">

					<!-- @if there are entries -->
						
						<div class="table-wrapper">

							<table class="table-col-separation data-log-week text-vertical-align-middle">

								<tr>
									<th class="text-nowrap dashboard-table-cell-max">
										Team Member
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
								
								
								
								<!-- @LOOP 2  TR tags-->
								<!-- @NOTE
								these are two rows oh lordy
										-->
									<tr class="log-week-profile-summary">
									
										<td class="dashboard-table-cell-max color-primary font-weight-700 color-primary text-transform-uppercase">
										<?php app_get_component('components/table-profile-named') ?>
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

												<!--
								
												@NOTE: these are classes to add
												.log-week-total 
														if total exceeds 40.25 hours =>.color-primary
														if time is less 40 hours =>.color-error
												
												
												-->
												<td class="dashboard-table-cell-date text-nowrap text-align-center color-error">
													<span class="log-week-task-total font-weight-700">
														<span class="REPLACE">666hr 69m</span>
													</span>
												</td>

											</tr>
											
										<?php } ?>





							</table>
						</div>
			
						
					<!-- @else no entries -->
						<p>Nothing here :| </p>
				</div>
			</div>
		</div>
	</div>

</div>