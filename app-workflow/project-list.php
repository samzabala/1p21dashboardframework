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
			<div class="flex-child align-items-center position-relative">
				<?= app_get_component('components/filter-dropdown-project'); ?>
				<div class="module-function modal-add-member">
					<a href="<?=app_create_link(array('template'=>'project-new')) ?>" class="btn btn-primary" title="Add Project">
						Add Project&nbsp;<i class="symbol symbol-plus"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
	<div
		id="workflow-dash-fav-projects"
		class="module"
		data-grid-area-md="favoriteprojects">
		<div class="module-header">
			<h3 class="module-title open" data-toggle="accordion" data-href="#favorite-projects">
				Favorite Projects <i class="symbol symbol-caret-down symbol-caret-up-toggle"></i>
			</h3>
		</div>
		<div class="module-content accordion open" id="favorite-projects">
			<div class="table-wrapper dashboard-table-wrapper-gutterless">
				<table class="table-small data-open-tasks">
					<tr>
						<th class="text-nowrap table-cell-no-gutter" >&nbsp;</th>
						<th class="text-nowrap">Project</th>
						<th class="text-nowrap">Client</th>
						<th class="text-nowrap">Type</th>
						<th class="text-nowrap">Tags</th>
						<th class="text-nowrap text-align-center">PM</th>
						<th class="text-nowrap text-align-center">AM</th>
						<th class="text-nowrap table-cell-no-gutter" >&nbsp;</th>
					</tr>
					<?php for($i=1; $i<=2; $i++){ ?>
						<tr>
							<td class="dashboard-table-cell-fave table-cell-no-gutter">
								<a href="#" class=" task-favorite color-primary-hover color-neutral color-primary-active" >
									<i class="symbol symbol-star-stroke symbol-star-toggle"></i>
								</a>
							</td>
							<td>
								<a href="<?=app_create_link(array('template'=>'project')) ?>" class="open-task text-wrap-ellipsis">
									<span class="REPLACE">jensenphelanlawfrim.com</span>
								</a>
							</td>
							<td>
								<a href="<?=app_create_link(array('template'=>'project')) ?>" class="open-project text-wrap-ellipsis">
									<span class="REPLACE">Jensen Phelan Law Firm PC (JEN) </span>
								</a>
							</td>
							<td class="dashboard-table-cell-max">
								<span href="<?=app_create_link(array('template'=>'project')) ?>" class="open-client text-wrap-ellipsis">
									<span class="REPLACE">LS360 SEO</span>
								</span>
							</td>
							<td class="dashboard-table-cell-max">
								<span class="p tag tag-secondary">
									<span class="tag-text">
										<span class="REPLACE">Design</span>
									</span>
								</span>
								<span class="p tag tag-accent">
									<span class="tag-text">
										<span class="REPLACE">Seo</span>
									</span>
								</span>
							</td>
							<td class="dashboard-table-cell-thumbnail text-align-center position-relative">
								<a class="thumbnail thumbnail-small" href="<?=app_create_link(array('template'=>'profile')) ?>">
									<div class="thumbnail-image">
										<img class="profile-image REPLACE" data-src="<?=FWAPPS_ROOT_URL ?>/placeholder/profiles/team-des-jenn.jpg" alt="">
									</div>
									<span class="thumbnail-text profile-name-initial">
										<span class="REPLACE">PN</span>
									</span>
								</a>
							</td>
							<td class="dashboard-table-cell-thumbnail text-align-center position-relative">
								<a class="thumbnail thumbnail-small" href="<?=app_create_link(array('template'=>'profile')) ?>">
									<div class="thumbnail-image">
										<img class="profile-image REPLACE" data-src="<?=FWAPPS_ROOT_URL ?>/placeholder/profiles/team-des-jenn.jpg" alt="">
									</div>
									<span class="thumbnail-text profile-name-initial">
										<span class="REPLACE">PN</span>
									</span>
								</a>
							</td>
							<td class="dashboard-table-cell-fave table-cell-no-gutter">&nbsp;</td>
						</tr>
					<?php } ?>
				</table>
			</div>
		</div>
	</div>
	<div
		id="workflow-dash-projects"
		class="module"
		data-grid-area-md="projects">
		<div class="module-header">
			<h3 class="module-title open" data-toggle="accordion" data-href="#projects">
				Projects <i class="symbol symbol-caret-down symbol-caret-up-toggle"></i>
			</h3>
		</div>
		<div class="module-content accordion open" id="projects">
				<div class="table-wrapper dashboard-table-wrapper-gutterless">
					<table class="table-small data-open-tasks">
						<tr>
							<th class="text-nowrap table-cell-no-gutter" >&nbsp;</th>
							<th class="text-nowrap">Project</th>
							<th class="text-nowrap">Client</th>
							<th class="text-nowrap">Type</th>
							<th class="text-nowrap">Tags</th>
							<th class="text-nowrap text-align-center">PM</th>
							<th class="text-nowrap text-align-center">AM</th>
							<th class="text-nowrap table-cell-no-gutter" >&nbsp;</th>
						</tr>
						<?php for($i=1; $i<=15; $i++){ ?>
							<tr>
								<td class="dashboard-table-cell-fave table-cell-no-gutter">
									<a href="#" class=" task-favorite color-primary-hover color-neutral color-primary-active" >
										<i class="symbol symbol-star-stroke symbol-star-toggle"></i>
									</a>
								</td>
								<td>
									<a href="<?=app_create_link(array('template'=>'project')) ?>" class="open-task text-wrap-ellipsis">
										<span class="REPLACE">jensenphelanlawfrim.com</span>
									</a>
								</td>
								<td>
									<a href="<?=app_create_link(array('template'=>'project')) ?>" class="open-project text-wrap-ellipsis">
										<span class="REPLACE">Jensen Phelan Law Firm PC (JEN) </span>
									</a>
								</td>
								<td class="dashboard-table-cell-max">
									<span href="<?=app_create_link(array('template'=>'project')) ?>" class="open-client text-wrap-ellipsis">
										<span class="REPLACE">LS360 SEO</span>
									</span>
								</td>
								<td class="dashboard-table-cell-max">
									<span class="p tag tag-secondary">
										<span class="tag-text">
											<span class="REPLACE">Design</span>
										</span>
									</span>
									<span class="p tag tag-accent">
										<span class="tag-text">
											<span class="REPLACE">Seo</span>
										</span>
									</span>
								</td>
								<td class="dashboard-table-cell-thumbnail text-align-center position-relative">
									<a class="thumbnail thumbnail-small" href="<?=app_create_link(array('template'=>'profile')) ?>">
										<div class="thumbnail-image">
											<img class="profile-image" data-src="<?=FWAPPS_ROOT_URL ?>/placeholder/profiles/team-des-jenn.jpg" alt="">
										</div>
										<span class="thumbnail-text profile-name-initial">
											<span class="REPLACE">PN</span>
										</span>
									</a>
								</td>
								<td class="dashboard-table-cell-thumbnail text-align-center position-relative">
									<a class="thumbnail thumbnail-small" href="<?=app_create_link(array('template'=>'profile')) ?>">
										<div class="thumbnail-image">
											<img class="profile-image" data-src="<?=FWAPPS_ROOT_URL ?>/placeholder/profiles/team-des-jenn.jpg" alt="">
										</div>
										<span class="thumbnail-text profile-name-initial">
											<span class="REPLACE">PN</span>
										</span>
									</a>
								</td>
								<td class="dashboard-table-cell-fave table-cell-no-gutter">&nbsp;</td>
							</tr>
						<?php } ?>
				</table>
			</div>
		</div>
	</div>
</section>