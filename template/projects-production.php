<div id="projects-production" class="module-grid">
	<div class="module">
			
		<div class="module-header">
			
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

							<th class="dashboard-table-cell-thumbnail text-align-center">SLS</th>

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

									<!-- @placeholder -->
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

											<!-- @placeholder -->
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
	.module-header .filter-date {
		margin-right: auto;
	}
</style>