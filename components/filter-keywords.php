<div class="filter-keywords-meta display-block module-function text-align-left">
	<form action="/keywords/improved" method="get" class="flex-1-1">
		<div class=" filter-profile input-group input-group-horizontal input-group-responsive input-block">
			<span class="input-label">Filters</span>
			<!-- @note hidden start fields here -->
			<input type="text" placeholder="Keyword" name="filter-keyword" class="input input-single-line" />
			
			
			<input type="text" placeholder="Domain" name="filter-domain" class="input input-single-line" />
			
			
			<!-- @placeholder option:not([selected]) -->
			<select class="input input-select"  name="filter-tops">
				<option value="" selected>All Results</option>
				<option value="">Top 10 only</option>
			</select>
			
			<!-- @placeholder option:not([selected]) -->
			<a href="#" data-toggle="dropdown" class="input input-select">Result Type</a>

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