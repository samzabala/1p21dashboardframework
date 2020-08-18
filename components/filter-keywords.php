<div class="module-function filter-keywords-meta text-align-left">
	<form action="/keywords/improved" method="get">
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


		<div class="dropdown dropdown-right dropdown-top-flush"  name="filter-type" data-dropdown-width="275px">
			<option value="" selected>Result type</option>
			<!-- @PLACEHOLDER. replace as needed -->
			<option value="organic">Organic</option>
			<option value="featuredsnippets">Featured Snippets</option>
			<option value="mappack">Map Pack</option>
			<option value="eh">Something else</option>
		</div>
	</form>
</div>