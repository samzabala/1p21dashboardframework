<!--
Imports JS:

Modal from framework/src/js/imports/form

-->
<div class="position-relative">

	<div class="input-group input-group-horizontal input-block">
		<input
			type="text" size="12" class="input input-single-line"
			placeholder="Vendor Name"
			id="company-vendor-history-row[REPLACE]-name"
			name="company-vendor-history-row[REPLACE]-name"
			value="REPLACEwithrowvalue" />
		<a href="#company-vendor-history-row-REPLACE-dropdown-start-date" class="btn btn-default" data-toggle-dropdown>
			<span class="REPLACE">2010</span>
		</a>
		<span class="btn btn-default color-neutral btn-no-interaction">-</span>
		<a href="#company-vendor-history-row-REPLACE-dropdown-end-date" class="btn btn-default" data-toggle-dropdown>
			<span class="REPLACE">Present</span>
		</a>
	</div>
	
	
	<div id="company-vendor-history-row-REPLACE-dropdown-start-date" class="dropdown dropdown-right dropdown-top-flush" data-dropdown-width="100%">
			<div class="input-wrapper input-wrapper-vertical input-wrapper-block p">
				<label for="" class="input-label">Start Date</label>
				<input
					type="text" size="12" class="input input-calendar input-block no-border no-padding"
					placeholder="1990 - Present"
					id="company-vendor-history-row[REPLACE]-date-start"
					name="company-vendor-history-row[REPLACE]-date-start"
					value="2069-04-20" />
			</div>
	</div>

	<div id="company-vendor-history-row-REPLACE-dropdown-end-date" class="dropdown dropdown-right dropdown-top-flush" data-dropdown-width="100%">
			

			<div class="input-wrapper input-wrapper-vertical input-wrapper-block">
				<label for="company-vendor-history-row[REPLACE]-date-end" class="input-label">End Date</label>
				<input
					type="text" size="12" class="input input-calendar input-block no-border no-padding"
					placeholder="1990 - Present"
					id="company-vendor-history-row[REPLACE]-date-end"
					name="company-vendor-history-row[REPLACE]-date-end"
					value="2069-04-20" />
				<br>
			</div>
	</div>
</div>