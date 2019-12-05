<!--

	@interactive
		.module-functions *,
	@dynamic
		content
			.task-*
			.project-*
			.profile-*
 -->
<div id="profile-production" class="module-grid"
	data-grid-template-rows-lg="75px repeat( auto-fit, minmax(75px, auto) )"
	data-grid-template-columns-lg="350px 1fr 1fr"
	data-grid-template-areas-lg="
		'profile-card avgtime availability'
		'profile-card avgtime updates'
		'assigned assigned assigned'
		'ass ass ass'"
	data-grid-template-rows-md=" repeat( auto-fit, minmax(75px, auto) )"
	data-grid-template-columns-md="350px 1fr"
	data-grid-template-areas-md="
		'profile-card availability'
		'profile-card avgtime'
		'updates updates'
		'assigned assigned'
		'ass ass'"
		>

	<!-- Availability -->
		<div
			id="profile-production-availability"
			class=" module module-no-gutter flex-xs flex-wrap"
			data-grid-area-md="availability">
		
			<div class="flex-align-self-center mobile-hide module-header no-margin-bottom">
				<h3 class="module-title text-align-center">Availability</h3>
			</div>
			<!--
				@dynamic:
				classes:  .btn-success, .badge-success
				content span.availability-status
			-->
			<div class="module-content module-no-gutter module-no-border-radius flex-1-1 module-no-gutter flex-xs flex-wrap">

				<div class="btn btn-large btn-success font-weight-500 btn-no-interaction btn-no-shadow btn-no-radius flex-1-1">
					<span class="badge badge-large badge-success "></span >
					<span class="availability-status">Available for Project</span>
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
					<span class="profile-name-first"><span class="REPLACE">Jenn</span></span>'s Average Time
				</h3>
			</div>

			<div class="module-content flex-xs flex-wrap flex-align-items-center">

				<!--
					@placeholder:
					attributes to keep: class
				-->
				<div class="flex-1-1 text-align-center">

					<div class="p">
						<img class="REPLACE" style="width: 400px;margin:0 auto" src="/placeholder/charts/prod/chart-03.png" alt="">
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
				<table class="table-small">
					<!-- 
						@dynamic
						@loop tr
						content  .project-site-name, .project-name, .project-update-date
					 -->
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

			<h3 class="module-title">Assigned Tasks</h3>

			<div class="module-functions">
				<?php app_get_component('components/filter-toggle-status'); ?>
			</div>

		</div>

		<div class="module-content">
		
			<!-- @if assigned tasks are available -->
				<div class="table-wrapper">
					
					<table class="text-vertical-align-middle">
						
						<tr>
							<th>Domain</th>

							<th>Task</th>

							<th>
								<a href="#" class="color-inherit">Started <i class="symbol symbol-caret-down symbol-caret-toggle-up"></i></a>
							</th>

							<th>
								<a href="#" class="color-inherit">Status <i class="symbol symbol-caret-down symbol-caret-toggle-up"></i></a>
							</th>

							<th class="dashboard-table-cell-action text-align-center">Action</th>
						</tr>
						
						<!--
							@loop tr
							@dynamic 
							content
								.project-task-name.
								.project-name
								.task-date
								.task-status
						-->
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
								<a href="<?=app_create_link(array('template'=>'projects')); ?>" class="task-status tag tag-accent">
									<span class="REPLACE">Task Status</span>
								</span>
							</td>

							<td class="dashboard-table-cell-action text-align-center position-relative">
								
								<span class="btn color-primary color-accent-hover btn-no-shadow" data-toggle="dropdown" data-dropdown-width="200"><i class="symbol symbol-kebab-horizontal"></i></span>

								<!--
									@NOTE:
									style issues: on last querry pagination items, change .dropdown-top-flush to .dropdown-bottom-flush to avoid scroll issues
								-->
								<ul class="dropdown dropdown-top-flush dropdown-right text-align-left">

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
										<a href="<?=app_create_link(array('template'=>'projects')); ?>" class="task-status tag tag-accent">
											<span class="REPLACE">Task Status</span>
										</span>
									</td>

									<td class="dashboard-table-cell-action text-align-center position-relative">
										
										<span class="btn color-primary color-accent-hover btn-no-shadow" data-toggle="dropdown" data-dropdown-width="200"><i class="symbol symbol-kebab-horizontal"></i></span>

										<!--
											@NOTE:
											style issues: on last querry pagination items, change .dropdown-top-flush to .dropdown-bottom-flush to avoid scroll issues
										-->
										<ul class="dropdown dropdown-top-flush dropdown-right text-align-left">

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
		

			<!-- @else NO assigned tasks are available -->
				<p class="color-neutral">Oooh nothing here :/</p>


			
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
			
			<h3 class="module-title">Associated Projects</h3>
			
			<div class="module-functions flex-align-items-center flex-md flex-justify-content-space-between">

				<?php app_get_component('components/filter-toggle-status'); ?>

				<?php app_get_component('components/filter-production-meta'); ?>

				<?php app_get_component('components/filter-date'); ?>

				<?php app_get_component('components/modal-add-task'); ?>
				
				
			</div>

		</div>

		<div class="module-content">

			<!-- @if associated projects  are available -->
				<div class="table-wrapper">
					<table class="text-vertical-align-middle">
						<tr>
							<th class="dashboard-table-cell-name">Client Name</th>

							<th>Project Level</th>

							<th>
								<a href="#" class="color-inherit">Started <i class="symbol symbol-caret-down symbol-caret-toggle-up"></i></a>
							</th>
							<th>Time</th>

							<th>Status</th>

							<th class="dashboard-table-cell-thumbnail text-align-center">Des</th>

							<th class="dashboard-table-cell-thumbnail text-align-center">Dev</th>

							<th class="dashboard-table-cell-thumbnail text-align-center">PM</th>

							<th class="dashboard-table-cell-action text-align-center">Action</th>
						</tr>


						<!--
							@loop tr
							@dynamic 
							content .project-task-name. .project-name
						-->
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
								<a href="<?=app_create_link(array('template'=>'projects')); ?>" class="tag tag-accent">
									<span class="task-status">Task Status</span>
								</a>
							</td>

							<td class="dashboard-table-cell-thumbnail text-align-center">
								<?php app_get_component('components/profile-image-inline'); ?>
							</td>

							<td class="dashboard-table-cell-thumbnail text-align-center">
								<?php app_get_component('components/profile-image-inline'); ?>
							</td>

							<td class="dashboard-table-cell-thumbnail text-align-center">
								<?php app_get_component('components/profile-image-inline'); ?>
							</td>

							<td class="dashboard-table-cell-action text-align-center">
								<span class="btn color-primary color-accent-hover btn-no-shadow" data-toggle="dropdown" data-dropdown-width="200"><i class="symbol symbol-kebab-horizontal"></i></span>

								<!--
									@NOTE:
									style issues: on last querry pagination items, change .dropdown-top-flush to .dropdown-bottom-flush to avoid scroll issues
								-->
								<ul class="dropdown dropdown-top-flush dropdown-right text-align-left">

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
											<a href="<?=app_create_link(array('template'=>'projects')); ?>" class="tag tag-accent">
												<span class="task-status">Task Status</span>
											</a>
										</td>

										<td class="dashboard-table-cell-thumbnail text-align-center">
											<?php app_get_component('components/profile-image-inline'); ?>
										</td>

										<td class="dashboard-table-cell-thumbnail text-align-center">
											<?php app_get_component('components/profile-image-inline'); ?>
										</td>

										<td class="dashboard-table-cell-thumbnail text-align-center">
											<?php app_get_component('components/profile-image-inline'); ?>
										</td>

										<td class="dashboard-table-cell-action text-align-center">
											<span class="btn color-primary color-accent-hover btn-no-shadow" data-toggle="dropdown" data-dropdown-width="200"><i class="symbol symbol-kebab-horizontal"></i></span>

											<!--
												@NOTE:
												style issues: on last querry pagination items, change .dropdown-top-flush to .dropdown-bottom-flush to avoid scroll issues
											-->
											<ul class="dropdown dropdown-top-flush dropdown-right text-align-left">

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
		

			<!-- @else NO assigned tasks are available -->
				<p class="color-neutral">Oooh nothing here :/</p>

		</div>

		<div class="module-footer">
			<?php app_get_component('components/pagination'); ?>
		</div>

	</div>

</div>


<style scoped>
	#profile-production-associated .module-header .filter-date {
		margin-right: auto;
	}
</style>