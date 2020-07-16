<!-- 
<?php
app_get_component('components/board-add-edit-project');
app_get_component('components/board-view-task');
app_get_component('components/board-add-edit-task');
?> -->
<section id="workflow-projects">
	<div id="workflow-dash-projects-heading" class="position-relative">
		<div class="flex-grid flex-grid-compact justify-content-space-between">
			<div class="flex-child">
				<p class="no-margin special-secondary text-clip-background background-gradient">
					Projects
				</p>
			</div>
			<div class="flex-child">
				<div class="module-function filter-input-group-timetracked">
					<form action="" class=" filter-profile input-group input-group-horizontal input-group-block-mobile text-align-left">
						<select name="timeetrack-filter-meta-key" id="" class="input input-single-line input-select">
							<option value="">Filter by</option>
							<option value="author">Author</option>
							<option value="client">Client</option>
							<option value="project">Project</option>
							<option value="task">Task</option>
						</select>
						<input type="text" class="input input-tags flex-1-1" name="timetrack-filter-meta-value" placeholder="Type in a keyword...">
						<button type="submit" class="btn btn-default btn-symbol"><i class="symbol symbol-search"></i></button>
					</form>
				</div>
				<div class="module-function modal-add-member">
					<a href="#modal-add-project" data-toggle="modal"  class="btn btn-primary" title="Add Project">
						Add Project&nbsp;<i class="symbol symbol-plus"></i>
					</a>
					<div class="modal" id="modal-add-project" data-modal-max-width="550px" data-modal-title="New Project">
						hello
					</div>
				</div>
			</div>
		</div>
	</div>
	<div
		id="workflow-dash-fav-projects"
		class="module"
		data-grid-area-md="opentasks">
		<div class="module-header">
			<h3 class="module-title open" data-toggle="accordion" data-href="#open-tasks">
				Favorite Projects <i class="symbol symbol-caret-down symbol-caret-up-toggle"></i>
			</h3>
		</div>
		<div class="module-content accordion open" id="open-tasks">
				<div class="table-wrapper dashboard-table-wrapper-gutterless">
					<table class="table-small data-open-tasks">
						<tr>
							<th class="text-nowrap table-cell-no-gutter" >&nbsp;</th>
							<th class="text-nowrap">Task</th>
							<th class="text-nowrap">Project</th>
							<th class="text-nowrap">Client</th>
							<th class="text-nowrap">Days Open</th>
							<th class="text-nowrap text-align-center">PM</th>
							<th class="text-nowrap text-align-center">AM</th>
						</tr>
						<?php for($i=1; $i<=2; $i++){ ?>
							<tr>
								<td class="dashboard-table-cell-fave table-cell-no-gutter">
									<a href="#" class=" task-favorite color-primary-hover color-neutral color-primary-active" >
										<i class="symbol symbol-star-stroke symbol-star-toggle"></i>
									</a>
								</td>
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
								<td>
									<span class="open-days-open text-nowrap">
										<span class="REPLACE">69</span> days
									</span>
								</td>
								<td class="dashboard-table-cell-action text-align-center position-relative">
									<a class="thumbnail thumbnail-small" href="<?=app_create_link(array('template'=>'profile')) ?>">
										<div class="thumbnail-image">
											<img class="profile-image" data-src="<?=FWAPPS_ROOT_URL ?>/placeholder/profiles/team-des-jenn.jpg" alt="">
										</div>
										<span class="thumbnail-text profile-name-initial">
											<span class="REPLACE">PN</span>
										</span>
									</a>
								</td>
								<td class="dashboard-table-cell-action text-align-center position-relative">
									<a class="thumbnail thumbnail-small" href="<?=app_create_link(array('template'=>'profile')) ?>">
										<div class="thumbnail-image">
											<img class="profile-image" data-src="<?=FWAPPS_ROOT_URL ?>/placeholder/profiles/team-des-jenn.jpg" alt="">
										</div>
										<span class="thumbnail-text profile-name-initial">
											<span class="REPLACE">PN</span>
										</span>
									</a>
								</td>
							</tr>
						<?php } ?>
				</table>
			</div>
		</div>
	</div>
	<div
		id="workflow-dash-projects"
		class="module"
		data-grid-area-md="opentasks">
		<div class="module-header">
			<h3 class="module-title open" data-toggle="accordion" data-href="#open-tasks">
				Projects <i class="symbol symbol-caret-down symbol-caret-up-toggle"></i>
			</h3>
		</div>
		<div class="module-content accordion open" id="open-tasks">
				<div class="table-wrapper dashboard-table-wrapper-gutterless">
					<table class="table-small data-open-tasks">
						<tr>
							<th class="text-nowrap" >&nbsp;</th>
							<th class="text-nowrap">Task</th>
							<th class="text-nowrap">Project</th>
							<th class="text-nowrap">Client</th>
							<th class="text-nowrap">Days Open</th>
							<th class="text-nowrap text-align-center">PM</th>
							<th class="text-nowrap text-align-center">AM</th>
						</tr>
						<?php for($i=1; $i<=15; $i++){ ?>
							<tr>
								<td class="dashboard-table-cell-fave">
									<a href="#" class=" task-favorite color-primary-hover color-neutral color-primary-active" >
										<i class="symbol symbol-star-stroke symbol-star-toggle"></i>
									</a>
								</td>
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
								<td>
									<span class="open-days-open text-nowrap">
										<span class="REPLACE">69</span> days
									</span>
								</td>
								<td class="dashboard-table-cell-action text-align-center position-relative">
									<a class="thumbnail thumbnail-small" href="<?=app_create_link(array('template'=>'profile')) ?>">
										<div class="thumbnail-image">
											<img class="profile-image" data-src="<?=FWAPPS_ROOT_URL ?>/placeholder/profiles/team-des-jenn.jpg" alt="">
										</div>
										<span class="thumbnail-text profile-name-initial">
											<span class="REPLACE">PN</span>
										</span>
									</a>
								</td>
								<td class="dashboard-table-cell-action text-align-center position-relative">
									<a class="thumbnail thumbnail-small" href="<?=app_create_link(array('template'=>'profile')) ?>">
										<div class="thumbnail-image">
											<img class="profile-image" data-src="<?=FWAPPS_ROOT_URL ?>/placeholder/profiles/team-des-jenn.jpg" alt="">
										</div>
										<span class="thumbnail-text profile-name-initial">
											<span class="REPLACE">PN</span>
										</span>
									</a>
								</td>
							</tr>
						<?php } ?>
				</table>
			</div>
		</div>
	</div>
</section>