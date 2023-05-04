<div class="filter-sponsorships-meta display-block module-function text-align-left">
	<form action="/sponsorships/improved" method="get" class="flex-1-1">
		<div class="filter-sponsorships input-group input-group-horizontal input-group-responsive">
			<span class="input input-label">Filters</span>
			<!-- @note hidden start fields here -->
			<input type="text" placeholder="Website" name="filter-website" class="input input-box" />
			
			
			<input type="text" placeholder="Client" name="filter-client" class="input input-box" />
			
			
			<!-- @placeholder option:not([selected]) -->
			<select class="input input-box input-box-select"  name="filter-creator">
				<option value="" selected>Created By</option>

				<!-- REPLACE with actual values -->
					<option value="ReplaceWithseouserid">First Name Last Name</option>
					<option value="ReplaceWithseouserid">First Name Last Name</option>
					<option value="ReplaceWithseouserid">First Name Last Name</option>
					<option value="ReplaceWithseouserid">First Name Last Name</option>
					<option value="ReplaceWithseouserid">First Name Last Name</option>
					<option value="ReplaceWithseouserid">First Name Last Name</option>
			</select>
			
			
			
			<input type="text" placeholder="Geo Area" name="filter-geoarea" class="input input-box" />

			<!-- @note hidden fields end here -->
			<button class="btn btn-primary">Apply Filters</button>
		</div>


		<div class="dropdown dropdown-right dropdown-top-flush no-padding"  name="filter-type" data-dropdown-width="275px">
			<!-- @NOTE: remove `list-group-toggle-allow-no-active` if at least one selected item is desired -->
			<ul class="list-group list-group-interactive list-group-compact list-group-toggle-allow-no-active list-group-toggle list-group-toggle-multiple">
				<!-- @PLACEHOLDER. replace as needed -->
				<li class="active"><a href="#" data-value="organic">Organic</a></li>
				<li><a href="#" data-value="featuredsnippets">Featured Snippets</a></li>
				<li><a href="#" data-value="mappack">Map Pack</a></li>
				<li><a href="#" data-value="eh">Something else</a></li>
			</ul>
		</div>
	</form>
</div>