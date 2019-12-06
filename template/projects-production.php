<div id="projects-production" class="module-grid">
	<div class="module">
			
		<div class="module-header">
			
			<?php app_get_component('components/module-functions-accordion-toggle'); ?>
				
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

							<th class="dashboard-table-cell-thumbnail">SLS</th>

							<th class="dashboard-table-cell-action text-align-center">Action</th>
						</tr>


						<!-- @LOOP tr -->
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

							<td class="dashboard-table-cell-thumbnail">
								<?php app_get_component('components/profile-image-small'); ?>
							</td>

							<td class="dashboard-table-cell-action text-align-center">
								<span class="btn color-primary color-accent-hover btn-no-shadow btn-symbol" data-toggle="dropdown" data-dropdown-width="200"><i class="symbol symbol-kebab-horizontal"></i></span>

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

									<td class="dashboard-table-cell-thumbnail">
										<?php app_get_component('components/profile-image-small'); ?>
									</td>

									<td class="dashboard-table-cell-action text-align-center">
										<span class="btn color-primary color-accent-hover btn-no-shadow btn-symbol" data-toggle="dropdown" data-dropdown-width="200"><i class="symbol symbol-kebab-horizontal"></i></span>

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
		

			<!-- @ELSE NO assigned tasks are available -->
				<p class="color-neutral notification-no-result no-margin-y">Oooh nothing here :/</p>

		</div>

		<div class="module-footer">
			<?php app_get_component('components/pagination'); ?>
		</div>

	</div>
</div>



<style scoped>
	.module-header .filter-dropdown-date {
		margin-right: auto;
	}
</style>