<div class="module-function filter-dropdown-project">
	<!-- @NOTE REPLACE LABEL HOWEVER NEEDED -->
	<!-- @IF label the filter -->
	<div class="input-group input-group-horizontal input-group-block-mobile text-align-left">
		<button class="btn btn-default" data-toggle="dropdown">
			<span>Filter (3)</span>
			<i class="symbol symbol-caret-down symbol-caret-up-toggle"></i>
		</button>
		<input type="text" class="input input-single-line" name="workflow-filter-projects" placeholder="Search projects...">
		<button type="submit" class="btn btn-default btn-symbol"><i class="symbol symbol-search"></i></button>
	</div>
	<!-- @REPLACE  #profile-assigned-date > li -->
	<div data-dropdown-width="100%" class="text-align-left dropdown dropdown-top-flush dropdown-center-x filter-dropdown">
		<div class="p input-wrapper input-wrapper-horizontal input-wrapper-block">
			<label class="input-label" >Client</label>
			<input class="input input-single-line input-small input-tags input-select" type="text" value="Hasson Law Offices">
			<div class="dropdown am-dropdown">
				<?= app_get_component('components/list-group-toggle-users-small-multiple'); ?>
				<a href="#" class="dropdown-done">Done</a>
			</div>
		</div>
		<div class="p input-wrapper input-wrapper-horizontal input-wrapper-block position-relative">
			<label class="input-label" >Account Manager</label>
			<input class="input input-single-line input-small input-tags input-select" type="text" placeholder="Type and select manager..." data-toggle="dropdown">
			<div class="dropdown am-dropdown">
				<?= app_get_component('components/list-group-toggle-users-small-multiple'); ?>
				<a href="#" class="dropdown-done">Done</a>
			</div>
		</div>
		<div class="p input-wrapper input-wrapper-horizontal input-wrapper-block">
			<label class="input-label" >Project Manager</label>
			<input class="input input-single-line input-small input-tags input-select" type="text" value="Megan B.,Derrick T.">
			<div class="dropdown am-dropdown">
				<?= app_get_component('components/list-group-toggle-users-small-multiple'); ?>
				<a href="#" class="dropdown-done">Done</a>
			</div>
		</div>
		<div class="p input-wrapper input-wrapper-horizontal input-wrapper-block">
			<label class="input-label" >Project Name</label>
			<input class="input input-single-line input-small input-tags input-select" type="text" placeholder="Type and select project...">
			<div class="dropdown am-dropdown">
				<?= app_get_component('components/list-group-toggle-users-small-multiple'); ?>
				<a href="#" class="dropdown-done">Done</a>
			</div>
		</div>
		<div class="p input-wrapper input-wrapper-horizontal input-wrapper-block">
			<label class="input-label" >Date Range</label>
			<div class="flex-grid flex-grid-no-gutter-x flex-grid-no-gutter-y">
				<div class="flex-col-6 position-relative no-margin">
					<input class="input input-single-line input-small input-c input-select" type="text" placeholder="From" data-toggle="dropdown">
					<div class="dropdown calendar-dropdown">
						<input type="date" class="input input-small input-calendar">
					</div>
				</div>
				<div class="flex-col-6 position-relative no-margin">
					<input class="input input-single-line input-small input-c input-select" type="text" placeholder="To" data-toggle="dropdown">
					<div class="dropdown calendar-dropdown">
						<input type="date" class="input input-small input-calendar">
					</div>
				</div>
			</div>
		</div>
		<div class="p text-align-right">
			<button class="btn btn-small btn-neutral-outline">Clear Filters</button>
			<button  class="btn btn-primary " type="submit">Add Filters</button>
		</div>
	</div>
</div>