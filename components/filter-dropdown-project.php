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
	<ul data-dropdown-width="100%" class="text-align-left dropdown dropdown-top-flush dropdown-center-x">
		<p class="input-wrapper input-wrapper-horizontal input-wrapper-block">
			<label class="input-label" >Client</label>
			<input class="input input-single-line input-small input-tags input-select" type="text" value="Hasson Law Offices">
		</p>
		<p class="input-wrapper input-wrapper-horizontal input-wrapper-block">
			<label class="input-label" >Account Manager</label>
			<input class="input input-single-line input-small input-tags input-select" type="text" placeholder="Type and select manager..." data-toggle="dropdown">
			<div class="dropdown am-dropdown">
				<?= app_get_component('components/list-group-toggle-users-small-multiple'); ?>
			</div>
		</p>
		<p class="input-wrapper input-wrapper-horizontal input-wrapper-block">
			<label class="input-label" >Project Manager</label>
			<input class="input input-single-line input-small input-tags input-select" type="text" value="Megan B.,Derrick T.">
		</p>
		<p class="input-wrapper input-wrapper-horizontal input-wrapper-block">
			<label class="input-label" >Project Name</label>
			<input class="input input-single-line input-small input-tags input-select" type="text" placeholder="Type and select project...">
		</p>
		<p class="input-wrapper input-wrapper-horizontal input-wrapper-block">
			<label class="input-label" >Date Range</label>
			<input class="input input-single-line input-small input-c input-select" type="text" placeholder="From">
			<input class="input input-single-line input-small input-c input-select" type="text" placeholder="To">
		</p>
	</ul>
</div>