
<div id="profile-production" class="module-grid"

	data-grid-template-rows-md=" repeat( auto-fit, minmax(75px, min-content) )"
	data-grid-template-columns-md="350px 1fr"
	data-grid-template-areas-md="
		'profile-card availability'
		'profile-card avgtime'
		'updates updates'
		'assigned assigned'
		'ass ass'"

	data-grid-template-columns-lg="350px 1fr 1fr"
	data-grid-template-areas-lg="
		'profile-card avgtime availability'
		'profile-card avgtime updates'
		'assigned assigned assigned'
		'ass ass ass'"
		>

	<!-- Availability -->
		<div
			id="profile-production-availability"
			class=" module module-no-gutter overflow-hidden"
			data-grid-area-md="availability">

			<div class="flex-xs">
				<div class="flex-1-1 flex-grid flex-grid-no-gutter">

					<div class="hide-mobile flex-col-md-4 align-self-center">
						<h3 class="module-title text-align-center">Availability</h3>
					</div>
					
					<div class="flex-col-12 flex-col-md-8 text-align-right flex-xs">
						
						<!--
							@DYNAMIC:
							classes:  .btn-success, .badge-success
						-->
						<div class="btn btn-large btn-success font-weight-500 btn-no-interaction btn-no-shadow btn-no-radius flex-1-1">
							<span class="badge badge-large badge-success "></span >
							<span class="availability-status">
								<span class="REPLACE">Available for Project</span>
							</span>
						</div>
						
					</div>
				</div>
			</div>

		</div>

	<!-- Profile card -->
	<?php app_get_component('components/profile-card'); ?>


	<!-- Average Time -->
		<div
			id="profile-production-average"
			class="module"
			data-grid-area-md="avgtime">

			<div class="module-header">
				<h3 class="module-title">
					<span class="profile-name-first"><span class="REPLACE">Profile</span></span>'s Average Time
				</h3>
			</div>

			<div class="module-content align-self-center">

				<div class="p text-align-center">
					<img class="REPLACE" style="width:600px;margin:0 auto" src="/PLACEHOLDER/charts/prod/chart-03.png" alt="">
				</div>

				<ul class="text-align-center inline no-margin-bottom">
					<li>
						<span class="legend legend-primary"></span> Avg <span class="profile-category"><span class="REPLACE">Designer</span></span> Time
					</li>
					<li>
						<span class="legend legend-neutral"></span> Whole Project Time
					</li>
				</ul>

			</div>
			
		</div>

	<!-- Recent Updates -->
		<div
			id="profile-production-updates"
			class="module"
			data-grid-area-md="updates">
			
			<div class="module-header">
				<h3 class="module-title">Recent Updates</h3>
			</div>
			
			<div class="module-content">
				<table class="table text-vertical-align-middle">
					<!-- @LOOP tr -->
					<tr class="updated-project">

						<td class="text-align-left">
							<?php app_get_component('components/project-link'); ?>
						</td>

						<td class="project-update-date text-align-right text-vertical-align-middle">
							<span class="REPLACE">04-20-19</span>
						</td>

					</tr>


						<!-- @PLACEHOLDER: DELETE WHEN READY -->

						<?php for($i=1; $i<=3; $i++){ ?>
							<tr class="updated-project">

								<td class="text-align-left">
									<?php app_get_component('components/project-link'); ?>
								</td>

								<td class="project-update-date text-align-right text-vertical-align-middle">
									<span class="REPLACE">04-20-19</span>
								</td>

							</tr>
						<?php } ?>


					
				</table>
			</div>

		</div>

	<!-- Assigned tasks -->
	<div
		id="profile-production-assigned"
		class="module"
		data-grid-area-md="assigned">

		<div class="module-header module-header-break">
			
			<?php app_get_component('components/module-functions-accordion-toggle'); ?>

			<h3 class="module-title">Assigned Tasks</h3>

			<div class="module-functions accordion accordion-mobile">
				<?php app_get_component('components/filter-toggle-status'); ?>
			</div>

		</div>

		<div class="module-content">
		
			<!-- @IF assigned tasks are available -->
				<div class="table-wrapper">
					
					<table class="text-vertical-align-middle">
						
						<tr>
							<th>Domain</th>
							<th>Task</th>
							<th>
								<a href="#" class="dashboard-sort-table-toggle color-inherit">Started <i class="symbol symbol-caret-down symbol-caret-toggle-up"></i></a>
							</th>
							<th>
								<a href="#" class="dashboard-sort-table-toggle color-inherit">Status <i class="symbol symbol-caret-down symbol-caret-toggle-up"></i></a>
							</th>
							<th class="dashboard-table-cell-action text-align-center">Action</th>
						</tr>
						
						<!-- @LOOP TR-->
						<tr>

							<td>
								<a href="<?=DASHBOARD_ROOT_URL ?>?template=project&env=<?=DASHBOARD_SLUG ?>" class="project-name color-inherit color-primary-hover">
									<span class="REPLACE">Client Name</span>
								</a>
							</td>

							<td>
								<a href="<?=DASHBOARD_ROOT_URL ?>?template=project&env=<?=DASHBOARD_SLUG ?>" class="project-task-name color-inherit color-primary-hover">
									<span class="REPLACE">Task Name</span>
								</a>
							</td>

							<td>
								<span class="task-date">
									<span class="REPLACE">4-20-19</span>
								</span>
							</td>

							<td>
								
								<!-- @NOTE .tag-COLOR_SCHEME will change to .task-status -->
								<span class="task-status tag tag-accent">
									<span class="REPLACE">Task Status</span>
								</spanpan>
							</td>

							<td class="dashboard-table-cell-action text-align-center position-relative">
								
								<span class="btn color-primary color-accent-hover btn-no-shadow btn-symbol" data-toggle="dropdown"><i class="symbol symbol-kebab-horizontal"></i></span>

								<!--
									@NOTE:
									style issues: on last querry pagination items, change .dropdown-top-flush to .dropdown-bottom-flush to avoid scroll issues
								-->
								<ul data-dropdown-width="200" class="dropdown dropdown-top-flush dropdown-right text-align-left">

									<!-- @PLACEHOLDER: DELETE WHEN READY -->
									<li class="REPLACE"><a href="#">Do something</a></li>
									<li class="REPLACE"><a href="#">Do another thing</a></li>
									<li class="REPLACE"><a href="#">Do the other thing</a></li>

								</ul>

							</td>

						</tr>


							<!-- @PLACEHOLDER: DELETE WHEN READY -->
								<?php for($i=1; $i<=3; $i++){ ?>
									<tr>

										<td>
											<a href="<?=DASHBOARD_ROOT_URL ?>?template=project&env=<?=DASHBOARD_SLUG ?>" class="project-name color-inherit color-primary-hover">
												<span class="REPLACE">Client Name</span>
											</a>
										</td>

										<td>
											<a href="<?=DASHBOARD_ROOT_URL ?>?template=project&env=<?=DASHBOARD_SLUG ?>" class="project-task-name color-inherit color-primary-hover">
												<span class="REPLACE">Task Name</span>
											</a>
										</td>

										<td>
											<span class="task-date">
												<span class="REPLACE">4-20-19</span>
											</span>
										</td>

										<td>
											
											<!-- @NOTE .tag-COLOR_SCHEME will change to .task-status -->
											<span class="task-status tag tag-accent">
												<span class="REPLACE">Task Status</span>
											</spanpan>
										</td>

										<td class="dashboard-table-cell-action text-align-center position-relative">
											
											<span class="btn color-primary color-accent-hover btn-no-shadow btn-symbol" data-toggle="dropdown"><i class="symbol symbol-kebab-horizontal"></i></span>

											<!--
												@NOTE:
												style issues: on last querry pagination items, change .dropdown-top-flush to .dropdown-bottom-flush to avoid scroll issues
											-->
											<ul data-dropdown-width="200" class="dropdown dropdown-top-flush dropdown-right text-align-left">

												<!-- @PLACEHOLDER: DELETE WHEN READY -->
												<li class="REPLACE"><a href="#">Do something</a></li>
												<li class="REPLACE"><a href="#">Do another thing</a></li>
												<li class="REPLACE"><a href="#">Do the other thing</a></li>

											</ul>

										</td>

									</tr>
								<?php } ?>

								

					</table>
					
				</div>
		

			<!-- @ELSE NO assigned tasks are available -->
				<p class="color-neutral notification-no-result no-margin-y">Oooh nothing here :/</p>


			
		</div>
		
		<div class="module-footer">
			<?php app_get_component('components/pagination'); ?>
		</div>

	</div>


	<div
		id="profile-production-associated"
		class="module"
		data-grid-area-md="ass">
			
		<div class="module-header">
			
			<?php app_get_component('components/module-functions-accordion-toggle'); ?>
			
			<h3 class="module-title">Associated Projects</h3>
			
			<div class="module-functions accordion accordion-mobile align-items-center">
				<div class="flex-grid flex-grid-no-gutter-y">

					<div class="flex-col-md-9 flex-1-1">
						<?php app_get_component('components/filter-toggle-status'); ?>
						<?php app_get_component('components/filter-production-meta'); ?>
						<?php app_get_component('components/filter-dropdown-date'); ?>
					</div>

					<div class="flex-col-md-3 flex-1-0 text-align-right">
						<?php app_get_component('components/modal-add-task'); ?>
					</div>

				</div>
			</div>

		</div>

		<div class="module-content">

			<!-- @IF associated projects  are available -->
				<div class="table-wrapper">
					<table class="text-vertical-align-middle">
						<tr>
							<th class="dashboard-table-cell-name">Client Name</th>

							<th>Project Level</th>

							<th>
								<a href="#" class="dashboard-sort-table-toggle color-inherit">Started <i class="symbol symbol-caret-down symbol-caret-toggle-up"></i></a>
							</th>
							<th>Time</th>

							<th>Status</th>

							<th class="dashboard-table-cell-thumbnail">Des</th>

							<th class="dashboard-table-cell-thumbnail">Dev</th>

							<th class="dashboard-table-cell-thumbnail">PM</th>

							<th class="dashboard-table-cell-action text-align-center">Action</th>
						</tr>


						<!-- @LOOP tr-->
						<tr>
							<td class="dashboard-table-cell-name">
								<?php app_get_component('components/project-link'); ?>
							</td>
							<td>
								<a class="color-inherit project-level color-primary-hover" href="<?=app_create_link(array('template'=>'projects')); ?>">
									<span class="REPLACE">Project Level</span>
								</a>
							</td>

							<td>
								<span class="project-started">
									<span class="REPLACE">4-20-69</span>
								</span>
							</td>
							<td>
								<span class="task-duration"><span class="REPLACE">140</span></span> Days
							</td>

							<td>
								<!-- @NOTE .tag-COLOR_SCHEME will change to .task-status -->
								<span class="tag tag-accent">
									<span class="task-status"><span class="REPLACE">Task Status<span></span>
								</span>
							</td>

							<td class="dashboard-table-cell-thumbnail">
								<?php app_get_component('components/profile-image-small'); ?>
							</td>

							<td class="dashboard-table-cell-thumbnail">
								<?php app_get_component('components/profile-image-small'); ?>
							</td>

							<td class="dashboard-table-cell-thumbnail">
								<?php app_get_component('components/profile-image-small'); ?>
							</td>

							<td class="dashboard-table-cell-action text-align-center">
								<span class="btn color-primary color-accent-hover btn-no-shadow btn-symbol" data-toggle="dropdown"><i class="symbol symbol-kebab-horizontal"></i></span>

								<!--
									@NOTE:
									style issues: on last querry pagination items, change .dropdown-top-flush to .dropdown-bottom-flush to avoid scroll issues
								-->
								<ul data-dropdown-width="200" class="dropdown dropdown-top-flush dropdown-right text-align-left">

									<!-- @PLACEHOLDER: DELETE WHEN READY -->
									<li class="REPLACE"><a href="#">Do something</a></li>
									<li class="REPLACE"><a href="#">Do another thing</a></li>
									<li class="REPLACE"><a href="#">Do the other thing</a></li>

								</ul>
							</td>
						</tr>


							<!-- @PLACEHOLDER duplicate of above delete everything below when ready -->
								<?php for($i=1; $i<=3; $i++){ ?>
										<tr>
											<td class="dashboard-table-cell-name">
												<?php app_get_component('components/project-link'); ?>
											</td>
											<td>
												<a class="color-inherit project-level color-primary-hover" href="<?=app_create_link(array('template'=>'projects')); ?>">
													<span class="REPLACE">Project Level</span>
												</a>
											</td>

											<td>
												<span class="project-started">
													<span class="REPLACE">4-20-69</span>
												</span>
											</td>
											<td>
												<span class="task-duration"><span class="REPLACE">140</span></span> Days
											</td>

											<td>
												<!-- @NOTE .tag-COLOR_SCHEME will change to .task-status -->
												<span class="tag tag-accent">
													<span class="task-status"><span class="REPLACE">Task Status<span></span>
												</span>
											</td>

											<td class="dashboard-table-cell-thumbnail">
												<?php app_get_component('components/profile-image-small'); ?>
											</td>

											<td class="dashboard-table-cell-thumbnail">
												<?php app_get_component('components/profile-image-small'); ?>
											</td>

											<td class="dashboard-table-cell-thumbnail">
												<?php app_get_component('components/profile-image-small'); ?>
											</td>

											<td class="dashboard-table-cell-action text-align-center">
												<span class="btn color-primary color-accent-hover btn-no-shadow btn-symbol" data-toggle="dropdown"><i class="symbol symbol-kebab-horizontal"></i></span>

												<!--
													@NOTE:
													style issues: on last querry pagination items, change .dropdown-top-flush to .dropdown-bottom-flush to avoid scroll issues
												-->
												<ul data-dropdown-width="200" class="dropdown dropdown-top-flush dropdown-right text-align-left">

													<!-- @PLACEHOLDER: DELETE WHEN READY -->
													<li class="REPLACE"><a href="#">Do something</a></li>
													<li class="REPLACE"><a href="#">Do another thing</a></li>
													<li class="REPLACE"><a href="#">Do the other thing</a></li>

												</ul>
											</td>
										</tr>
									<?php } ?>



					</table>
					
				</div>
		

			<!-- @ELSE NO assigned tasks are available -->
				<p class="color-neutral notification-no-result no-margin-y">Oooh nothing here :/</p>

		</div>

		<div class="module-footer">
			<?php app_get_component('components/pagination'); ?>
		</div>

	</div>

</div>


<style scoped>
	#profile-production-associated .module-header .filter-dropdown-date {
		margin-right: auto;
	}
</style>