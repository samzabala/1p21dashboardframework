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
			
					
					<!-- @else no entries. -->
						<!-- @if user can add ppl -->

							<a href="#modal-add-member" class="zone zone-primary">
								It feels so lonely. Add new members <i class="symbol symbol-plus"></i>
							</a>
						<!-- @else user cant add ppl -->
							<p>Nothing here :| </p>
				</div>


				<div class="accordion" id="activity-log-week">

					<!-- @if there are entries -->
						
						<div class="table-wrapper">

							<table class="data-log-week text-vertical-align-middle accordion-group">

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
								
								
								
								<!-- @LOOP TR -->
								<!-- @NOTE
								there is a tables within a table because tables are hell
										-->
								<?php app_get_component('components/table-weekly-profile-accordion') ?>
								


								<!-- @PLACEHOLDER: DELETE WHEN READY -->
								<?php for($h=1; $h<=9; $h++){ ?>
									<?php include FWAPPS_ROOT_PATH.'/components/table-weekly-profile-accordion.php'; ?>
								<?php } ?>

							</table>
						</div>
			
						
					<!-- @else no entries. -->
						<!-- @if user can add ppl -->

						<a href="#modal-add-member" class="zone zone-primary">
								It feels so lonely. Add new members <i class="symbol symbol-plus"></i>
							</a>
						<!-- @else user cant add ppl -->
							<p>Nothing here :| </p>
				</div>
			</div>
		</div>
	</div>

</div>