
<div class="module-function filter-dropdown-date-span position-static">

	<span class="text-align-left">

		<button class="btn-group  btn-group-horizontal btn-group-unite" data-toggle="dropdown">
			<span class="btn btn-default">
				<span class="date-a">
				<!-- 
					@NOTE this will change dynamicalyy
				-->
					<span class="REPLACE">Jan 2018</span>
				</span>
				-

				<span class="date-b">
				<!-- 
					@NOTE this will change dynamicalyy
				-->
					<span class="REPLACE">Jan 2018</span>
				</span>
			</span>
			<span class="btn btn-primary btn-symbol"><i class="symbol symbol-arrow-down"></i></span>
		</button>

		<div class="dropdown dropdown-right" data-dropdown-width="100%">
			<div class="flex-grid flex-wrap flex-grid-fixed flex-grid-no-gutter-y">

				<div class="flex-col-md-8 flex-col-lg-9">
					<div class="flex-grid  flex-grid-compact flex-wrap flex-grid-fixed flex-grid-no-gutter-y">


						<div class="flex-col-md-6">

							<div class=" input-wrapper input-wrapper-vertical input-wrapper-responsive input-wrapper-block">
								<label class="input-label">From</label>
								<input type="date" class="input input-calendar" data-calendar-text-input="true" />
							</div>
						</div>


						<div class="flex-col-md-6">

							<div class=" input-wrapper input-wrapper-vertical input-wrapper-responsive input-wrapper-block">
								<label class="input-label">To</label>
								<input type="date" class="input input-calendar" data-calendar-text-input="true" data-calendar-disabled-dates="future" />
							</div>
						</div>
					</div>

				</div>

				
				<div class="flex-col-md-4 flex-col-lg-3">
					<div class="input-label">Other</div>
					<div class="p">

						<ul class="unstyled p font-weight-600">
							<!-- @PLACEHOLDER: replace as needed -->
							<li><a href="#">Jan 2018</a></li>
							<li><a href="#">Feb 2018</a></li>
							<li><a href="#">March 2018</a></li>
							<li><a href="#">April 2018</a></li>
							<li><hr class="dropdown-separator"></li>
							<li><a href="#">Today</a></li>
							<li><a href="#">Last 3 days</a></li>
							<li><a href="#">Last week</a></li>
							<li><a href="#">Last Month</a></li>
							<li><a href="#">Last Year</a></li>
						</ul>
					</div>
					
					<div class="p">
						<button class="btn btn-default">Reset</button>
						<br class="only-mobile">
						<button data-toggle="dropdown" class="btn btn-primary">Apply</button>
					</div>
				</div>
			</div>
		</div>

	</span>

</div>





