<div id="projects" class="module-grid">
	<div class="module">
			
		<div class="module-header">
			
			<div class="module-functions flex-align-items-center flex-md flex-justify-content-space-between">

				<?php app_get_component_part('components/filter-status'); ?>

				<?php app_get_component_part('components/filter-production-meta'); ?>

				<?php app_get_component_part('components/filter-date'); ?>

				<?php app_get_component_part('components/modal-add-task'); ?>
				
				
			</div>

		</div>

		<div class="module-content">

			<!-- @if associated projects  are available -->
				<div class="table-wrapper">
					<table class="text-vertical-align-middle">
						<tr>
							<th>Client Name</th>

							<th>Project Level</th>

							<th>
								<a href="#" class="color-inherit">Started <i class="symbol symbol-caret-down symbol-caret-toggle-up"></i></a>
							</th>
							<th>Time</th>

							<th>Status</th>

							<th width="90px" class="table-cell-no-gutter text-align-center">Des</th>

							<th width="90px" class="table-cell-no-gutter text-align-center">Dev</th>

							<th width="90px" class="table-cell-no-gutter text-align-center">PM</th>

							<th width="90px" class="table-cell-no-gutter text-align-center">SLS</th>

							<th width="110px" class="text-align-center table-cell-no-gutter">Action</th>
						</tr>


						<!--
							@loop tr
							@dynamic 
							content .project-task-name. .project-name
						-->
						<tr>
							<td>
								<?php app_get_component_part('components/project-link'); ?>
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
								</span>
							</td>

							<td width="90px" class="table-cell-no-gutter text-align-center">
								<?php app_get_component_part('components/profile-image-inline'); ?>
							</td>

							<td width="90px" class="table-cell-no-gutter text-align-center">
								<?php app_get_component_part('components/profile-image-inline'); ?>
							</td>

							<td width="90px" class="table-cell-no-gutter text-align-center">
								<?php app_get_component_part('components/profile-image-inline'); ?>
							</td>

							<td width="90px" class="table-cell-no-gutter text-align-center">
								<?php app_get_component_part('components/profile-image-inline'); ?>
							</td>

							<td width="110px" class="text-align-center table-cell-no-gutter">
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
					</table>
					
				</div>
		

			<!-- @else NO assigned tasks are available -->
				<p class="color-neutral">Oooh nothing here :/</p>

		</div>

		<div class="module-footer">
			<?php app_get_component_part('components/pagination'); ?>
		</div>

	</div>
</div>



<style scoped>
	.module-header .filter-date {
		margin-right: auto;
	}
</style>