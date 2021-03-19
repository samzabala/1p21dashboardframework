<div class="position-relative">

	<div class="input-group input-group-horizontal input-block">
		<input
			type="text" size="12" class="input input-single-line"
			placeholder="Vendor Name"
			id="company-vendor-history-row[REPLACE]-name"
			name="company-vendor-history-row[REPLACE]-name"
			value="REPLACEwithrowvalue" />
		<a href="#" class="btn btn-default" data-toggle-dropdown>
			<span class="REPLACE">REPLACEwithrowvalue</span>
		</a>
	</div>
	
	
	<div class="dropdown dropdown-right dropdown-top-flush" data-dropdown-width="100%">
		<div class="">
			<div class="input-wrapper input-wrapper-vertical input-wrapper-block p">
				<label for="" class="input-label">Start Date</label>
				<input
					type="text" size="12" class="input input-calendar input-block no-radius-bottom"
					placeholder="1990 - Present"
					id="company-vendor-history-row[REPLACE]-date-start"
					name="company-vendor-history-row[REPLACE]-date-start"
					value="2069-04-20" />
			</div>

			<div class="input-wrapper input-wrapper-vertical input-wrapper-block">
			
				<div class="flex-grid flex-grid-compact flex-grid-no-gutter-y">
					<div class="flex-col-6">

						<label for="company-vendor-history-row[REPLACE]-date-end" class="input-label">End Date</label>
					</div>
					<div class="flex-col-6">

						<div class="input-wrapper input-wrapper-horizontal input-wrapper-block text-align-right">
							<label for="company-vendor-history-row[REPLACE]-date-present" class="input-label no-padding-right">
								<input type="checkbox" class="input input-line" 
									id="company-vendor-history-row[REPLACE]-date-present"
									name="company-vendor-history-row[REPLACE]-date-present" />

								Present Vendor
									
							</label>
						</div>
					</div>
				</div>

				<!-- @NOTE
					.input-wrapper
						classes to add:
						`#company-vendor-history-row[REPLACE]-date-end` => if input#company-vendor-history-row[REPLACE]-date-present is checked

				-->
				<input
					type="text" size="12" class="input input-calendar input-block no-radius-bottom"
					placeholder="1990 - Present"
					id="company-vendor-history-row[REPLACE]-date-end"
					name="company-vendor-history-row[REPLACE]-date-end"
					value="2069-04-20" />
				<br>
			</div>
		</div>
		<a href="#" data-toggle-dropdown class="btn btn-primary btn-block">Set</a>
	</div>
</div>