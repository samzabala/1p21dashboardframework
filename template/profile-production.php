<!--

	@interactive
		.module-functions *,
	@dynamic
		content
			.task-status
			.task-duration
			.task-date
			.project-task-name
			.project-started
 -->
<div id="profile-production" class="module-grid"
	data-grid-template-rows-lg="75px repeat( auto-fit, minmax(75px, auto) )"
	data-grid-template-columns-lg="350px 1fr 1fr"
	data-grid-template-areas-lg="
		'profile-card avgtime availability'
		'profile-card avgtime updated'
		'assigned assigned assigned'
		'ass ass ass'"
	data-grid-template-rows-md=" repeat( auto-fit, minmax(75px, auto) )"
	data-grid-template-columns-md="350px 1fr"
	data-grid-template-areas-md="
		'profile-card availability'
		'profile-card avgtime'
		'updated updated'
		'assigned assigned'
		'ass ass'"
		>

	<!-- Availability -->
		<div
			id="availability"
			class="
				module
				module-no-gutter
				flex-xs
				flex-wrap"
			data-grid-area-md="availability">
		
			<div
				class="
					module-header
					flex-sm
					flex-align-items-center
					mobile-hide">

				<h3
				class="module-title text-align-center">Availability</h3>
			</div>
			<!--
				@dynamic:
				classes:  .btn-success, .badge-success
				content span.availability-status
			-->
			<div class="btn
				btn-large
				btn-success
				font-weight-500
				btn-no-interaction
				btn-no-shadow
				btn-no-radius
				flex-1-1">
				<span class="badge badge-large badge-success "></span >
				<span class="availability-status"> Available for Project</span>
			</div>
		</div>

	<!-- Profile card -->
	<?php app_get_component_part('components/profile-card',DASHBOARD_SLUG); ?>


	<!-- Average Time -->
		<div
			id="average-time"
			class="module"
			data-grid-area-md="avgtime">
			<div class="module-header">
				<h3 class="module-title">
					<span class="profile-name-first">Jenn</span>'s Average Time
				</h3>
			</div>
			<div class="module-content flex-xs flex-align-items-center">

				<!--
					@placeholder:
					attributes to keep: class
				-->
				<img class="flex-0-0" style="width: 400px;margin:0 auto" src="/placeholder/charts/prod/chart-03.png" alt="">
			</div>
		</div>

	<!-- Recent Updates -->
		<div
			id="recent-updates"
			class="module"
			data-grid-area-md="updated">
			<div class="module-header">
				<h3 class="module-title">
					Recent Updates
				</h3>
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
							<a href="<?=DASHBOARD_ROOT_URL ?>?template=project&env=<?=DASHBOARD_SLUG ?>" class="color-inherit">

								<span class="project-site-name text-block text-no-margin">site.com</span>
								<span class="project-name text-block text-small color-neutral">Client Name</span>
							</a>
						</td>
						<td class="text-align-right text-vertical-align-middle">
							<span class="project-update-date">04-20-19</span>
						</td>
					</tr>

					
				</table>
			</div>
		</div>

	<!-- Assigned tasks -->
	<div
		id="assigned-tasks"
		class="module"
		data-grid-area-md="assigned">
		<div class="module-header module-header-break">
			<div class="module-title">
				Assigned Tasks
			</div>
			<div class="module-functions">
				<div class="btn-group filter-status btn-group-horizontal btn-group-block-mobile btn-group-toggle">
					<a href="#" class="btn btn-default active">Current</a>
					<a href="#" class="btn btn-default">Completed</a>
				</div>
			</div>
		</div>
		<div class="module-content">
		
			<!-- @if assigned tasks are available -->
				<div class="table-wrapper">
					<table class="text-vertical-align-middle">
						<tr>
							<th>
								Domain
							</th>
							<th>
								Task
							</th>

							<th>
								<a href="#" class="color-inherit">Started <i class="symbol symbol-caret-down symbol-caret-toggle-up"></i></a>
							</th>

							<th>
								<a href="#" class="color-inherit">Status <i class="symbol symbol-caret-down symbol-caret-toggle-up"></i></a>
							</th>

							<th width="110px" class="text-align-center table-cell-no-gutter">
								Action
							</th>
						</tr>
						
						<!--
							@loop tr
							@dynamic 
							content .project-task-name. .project-name
						-->
						<tr>
							<td>
								<a href="<?=DASHBOARD_ROOT_URL ?>?template=project&env=<?=DASHBOARD_SLUG ?>" class="project-name text-block text-small color-inherit">Client Name</a>
							</td>
							<td>
								<a href="<?=DASHBOARD_ROOT_URL ?>?template=project&env=<?=DASHBOARD_SLUG ?>" class="project-task-name text-small color-neutral">
									Task Name
								</a>
							</td>
							<td>
								<span class="task-date">4-20-19</span>
							</td>
							<td>
								<!-- 
									@dynamic class .tag-accent
								 -->
								<span class="task-status tag tag-accent">Task Status</span>
							</td>
							<td width="110px" class="text-align-center position-relative table-cell-no-gutter">
								<span class="btn color-primary color-accent-hover btn-no-shadow" data-toggle="dropdown" data-dropdown-width="200"><i class="symbol symbol-kebab-horizontal"></i></span>

								<!--
									NOTE:
									style issues: on last querry pagination items, change .dropdown-top-flush to .dropdown-bottom-flush to avoid scroll issues
								-->
								<ul class="dropdown dropdown-top-flush dropdown-right text-align-left">

									<!-- @placeholder -->
									<li><a href="#">Do something</a></li>
									<li><a href="#">Do another thing</a></li>
									<li><a href="#">Do the other thing</a></li>

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


	<div

	id="associated-tasks"
	class="module"
	data-grid-area-md="ass">
		
		<div class="module-header">
			<div class="module-title">
				Associated Projects
			</div>
			<div class="module-functions flex-align-items-center flex-md flex-justify-content-space-between">

				<div class="btn-group filter-status btn-group-horizontal btn-group-block-mobile btn-group-toggle">
					<a href="#" class="btn btn-default active">Current</a>
					<a href="#" class="btn btn-default">Completed</a>
				</div>


				<div class=" filter-profile input-group input-group-horizontal input-group-responsive">
					<!-- @placeholder option:not([selected]) -->
					<select class="input input-single-line" >
						<option value="" selected>Designer</option>
						<option value="VAL">VAL</option>
					</select>
					
					<select class="input input-single-line" >
						<option value="" selected>Developer</option>
						<option value="VAL">VAL</option>
					</select>
					
					<select class="input input-single-line" >
						<option value="" selected>Status</option>
						<option value="VAL">VAL</option>
					</select>
					
					<select class="input input-single-line" >
						<option value="" selected>Project Level</option>
						<option value="VAL">VAL</option>
					</select>
				</div>

				<div class="input-wrapper filter-date">
					<button class="btn-group btn-group-block-mobile btn-group-horizontal btn-group-unite" data-dropdown-width="100%" data-toggle="dropdown">
						<span class="btn btn-default">Jan 2018</span>
						<span class="btn btn-primary btn-symbol"><i class="symbol symbol-arrow-down"></i></span>
					</button>
					<!-- @placeholder  #profile-assigned-date > li -->
					<ul class="text-align-left dropdown dropdown-top-flush dropdown-center-x">
						<li>
							Dates here
						</li>
					</ul>
				</div>
				
				<a href="#modal-add-task" data-toggle="modal" class="btn btn-primary"><span>Add Task</span> <i class="symbol symbol-plus"></i></a>
			</div>
		</div>

		<div class="module-content">
			<!-- @if associated projects  are available -->
			<div class="table-wrapper">
					<table class="text-vertical-align-middle">
						<tr>
							<th>
								Client Name
							</th>
							<th>
								Project Level
							</th>

							<th>
								<a href="#" class="color-inherit">Started <i class="symbol symbol-caret-down symbol-caret-toggle-up"></i></a>
							</th>
							<th>
								Time
							</th>

							<th>
								Status
							</th>

							<th width="70px" class="table-cell-no-gutter text-align-center">
								Des
							</th>

							<th width="70px" class="table-cell-no-gutter text-align-center">
								Dev
							</th>

							<th width="70px" class="table-cell-no-gutter text-align-center">
								PM
							</th>

							<th width="110px" class="text-align-center table-cell-no-gutter">
								Action
							</th>
						</tr>


						<!--
							@loop tr
							@dynamic 
							content .project-task-name. .project-name
						-->
						<tr>
							<td>
								<span class="project-site-name text-block text-no-margin">site.com</span>
								<span class="project-name text-block text-small color-neutral">Client Name</span>
							</td>
							<td>
								Project Level
							</td>

							<td>
								<span class="project-started">4-20-69</span>
							</td>
							<td>
								<span class="task-duration">140</span> Days
							</td>

							<td>
								
								<span class="task-status tag tag-accent">Task Status</span>
							</td>

							<td width="70px" class="table-cell-no-gutter text-align-center">
								<?php app_get_component_part('components/profile-image-inline'); ?>
							</td>

							<td width="70px" class="table-cell-no-gutter text-align-center">
								<?php app_get_component_part('components/profile-image-inline'); ?>
							</td>

							<td width="70px" class="table-cell-no-gutter text-align-center">
								<?php app_get_component_part('components/profile-image-inline'); ?>
							</td>

							<td width="110px" class="text-align-center table-cell-no-gutter">
								<span class="btn color-primary color-accent-hover btn-no-shadow" data-toggle="dropdown" data-dropdown-width="200"><i class="symbol symbol-kebab-horizontal"></i></span>

								<!--
									NOTE:
									style issues: on last querry pagination items, change .dropdown-top-flush to .dropdown-bottom-flush to avoid scroll issues
								-->
								<ul class="dropdown dropdown-top-flush dropdown-right text-align-left">

									<!-- @placeholder -->
									<li><a href="#">Do something</a></li>
									<li><a href="#">Do another thing</a></li>
									<li><a href="#">Do the other thing</a></li>

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
	#associated-tasks .module-header .filter-date {
		margin-right: auto;
	}
	
</style>