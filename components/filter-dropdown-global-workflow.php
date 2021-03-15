<div data-dropdown-width="100%" class="text-align-left dropdown no-padding-top dropdown-top-flush dropdown-right filter-dropdown-global">

		<div class="flex-grid flex-grid-fixed flex-grid-compact no-margin-bottom align-items-center">
			<div class="flex-col-xs-12 flex-col-md-4">
				<label for="filter-client" class="input-label no-padding-x" >Client</label>
			</div>
			<div class="flex-col-xs-12 flex-col-md-8 position-relative">
				<input
					id="filter-client"
					name="filter-client"
					placeholder="Type and select client..."
					class="input input-tags input-select input-block"
					type="text"
					data-tags-callback-on-keyup="REPLACEfnToFilterTag(event)" 
					data-tags-callback-name-filter="REPLACEfnToFilterTag" />

				<div class="dropdown" data-dropdown-width="100%">
					<!-- @PLACEHOLDER. delete for dynamic readiness  -->
						<li><a href="#">Matching item</a></li>
						<li><a href="#">Matching item</a></li>
						<li><a href="#">Matching item</a></li>
						<li><a href="#">Matching item</a></li>
						<li><a href="#">Matching item</a></li>
						<li><a href="#">Matching item</a></li>
				</div>
			</div>
		</div>

		<div class="flex-grid flex-grid-fixed flex-grid-compact no-margin-bottom align-items-center">
			<div class="flex-col-xs-12 flex-col-md-4">
				<label for="filter-acctmanager" class="input-label no-padding-x" >Account Manager</label>
			</div>
			<div class="flex-col-xs-12 flex-col-md-8 position-relative">
				<input
					id="filter-acctmanager"
					name="filter-acctmanager"
					placeholder="Type and select manager..."
					class="input input-tags input-select input-block"
					type="text"
					data-tags-callback-on-keyup="REPLACEfnToFilterTag(event)" 
					data-tags-callback-name-filter="REPLACEfnToFilterTag" />

				<div class="dropdown" data-dropdown-width="100%">
					<!-- @PLACEHOLDER. delete for dynamic readiness  -->
						<li><a href="#">Matching item</a></li>
						<li><a href="#">Matching item</a></li>
						<li><a href="#">Matching item</a></li>
						<li><a href="#">Matching item</a></li>
						<li><a href="#">Matching item</a></li>
						<li><a href="#">Matching item</a></li>
				</div>
			</div>
		</div>

		<div class="flex-grid flex-grid-fixed flex-grid-compact no-margin-bottom align-items-center">
			<div class="flex-col-xs-12 flex-col-md-4">
				<label for="filter-projectmanager" class="input-label no-padding-x" >Project Manager</label>
			</div>
			<div class="flex-col-xs-12 flex-col-md-8 position-relative">
				<input
					id="filter-projectmanager"
					name="filter-projectmanager"
					placeholder="Type and select manager..."
					class="input input-tags input-select input-block"
					type="text"
					data-tags-callback-on-keyup="REPLACEfnToFilterTag(event)" 
					data-tags-callback-name-filter="REPLACEfnToFilterTag" />

				<div class="dropdown" data-dropdown-width="100%">
					<!-- @PLACEHOLDER. delete for dynamic readiness  -->
						<li><a href="#">Matching item</a></li>
						<li><a href="#">Matching item</a></li>
						<li><a href="#">Matching item</a></li>
						<li><a href="#">Matching item</a></li>
						<li><a href="#">Matching item</a></li>
						<li><a href="#">Matching item</a></li>
				</div>
			</div>
		</div>
		
		<div class="flex-grid flex-grid-fixed flex-grid-compact no-margin-bottom align-items-center">
			<div class="flex-col-xs-12 flex-col-md-4">
				<label for="filter-project" class="input-label no-padding-x" >Project Name</label>
			</div>
			<div class="flex-col-xs-12 flex-col-md-8 position-relative">
				<input
					id="filter-project"
					name="filter-project"
					placeholder="Type and select project..."
					class="input input-tags input-select input-block"
					type="text"
					data-tags-callback-on-keyup="REPLACEfnToFilterTag(event)" 
					data-tags-callback-name-filter="REPLACEfnToFilterTag" />

				<div class="dropdown" data-dropdown-width="100%">
					<!-- @PLACEHOLDER. delete for dynamic readiness  -->
						<li><a href="#">Matching item</a></li>
						<li><a href="#">Matching item</a></li>
						<li><a href="#">Matching item</a></li>
						<li><a href="#">Matching item</a></li>
						<li><a href="#">Matching item</a></li>
						<li><a href="#">Matching item</a></li>
				</div>
			</div>
		</div>


		
		<div class="flex-grid flex-grid-fixed flex-grid-compact align-items-center">
			<div class="flex-col-xs-12 flex-col-md-4">
				<label class="input-label no-padding-x" >Date Range</label>
			</div>
			<div class="flex-col-xs-12 flex-col-md-4 position-relative">
				<button
					id="filter-date-a"
					name="filter-date-a"
					class="input input-block input-select"
					data-toggle="dropdown" />
					<!-- @if filter-data-a has value -->
						<span class="current-value">Apr 20, 2069</span>
					<!-- @else -->
						<!-- <span class="color-neutral">From</span> -->
				</button>
				<div class="dropdown no-padding dropdown-left dropdown-top-flush overflow-hidden">
					<input
						id="filter-date-a"
						name="filter-date-a"
						placeholder="Type and select project..."
						class="input input-calendar border-color-transparent input-block"
						type="text"/>
					<button class="btn btn-block btn-no-radius btn-primary-outline border-color-transparent" data-toggle="dropdown">Done</button>
				</div>
			</div>
			<div class="flex-col-xs-12 flex-col-md-4 position-relative">
				<button
					id="filter-date-b"
					name="filter-date-b"
					class="input input-block input-select"
					data-toggle="dropdown" />
					<!-- @if filter-data-a has value -->
						<span class="current-value">Apr 20, 2069</span>
					<!-- @else -->
						<!-- <span class="color-neutral">To</span> -->
				</button>
				<div class="dropdown no-padding dropdown-right dropdown-top-flush overflow-hidden">

					<input
						id="filter-date-a"
						name="filter-date-a"
						placeholder="Type and select project..."
						class="input input-calendar border-color-transparent input-block"
						type="text"/>
					<button class="btn btn-block btn-no-radius btn-primary-outline border-color-transparent" data-toggle="dropdown">Done</button>
				</div>
			</div>
		</div>
		<div class="p text-align-right">
			<button class="btn btn-neutral-outline" type="reset">Clear Filters</button>
			<button  class="btn btn-primary" type="submit">Search</button>
		</div>
	</div>