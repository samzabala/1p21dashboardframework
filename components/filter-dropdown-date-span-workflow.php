
<div class="module-function filter-dropdown-date-span position-static">

<span class="text-align-left">

	<span class="btn-group btn-group-horizontal  background-theme">

	<!-- @NOTE this will shift to the previous day -->
		<button class="btn color-primary color-secondary-hover btn-symbol"><i class="symbol symbol-arrow-left"></i></button>

		<button class="btn"  data-toggle="dropdown">
			<span class="current">
			<!-- 
				@NOTE this will change to active span
			-->
				<span class="REPLACE">Saturday, April 20, 2069</span>
			</span>
		</button>

	<!-- @NOTE this will shift to the next day -->
		<button class="btn color-primary color-secondary-hover btn-symbol"><i class="symbol symbol-arrow-right"></i></button>
	</span>

	<div class="dropdown dropdown-right" data-dropdown-width="100%">
		<div class="flex-grid flex-wrap flex-grid-fixed flex-grid-no-gutter-y">

			<div class="flex-col-md-8 flex-col-lg-9">
				<div class="flex-grid  flex-grid-compact flex-wrap flex-grid-fixed flex-grid-no-gutter-y">


					<div class="flex-col-md-6">

						<div class=" input-wrapper input-wrapper-vertical input-wrapper-responsive input-wrapper-block">
							<label class="input-label">From</label>
							<input type="date" class="input input-calendar input-no-shadow " data-calendar-text-input="false" />
						</div>
					</div>


					<div class="flex-col-md-6">

						<div class=" input-wrapper input-wrapper-vertical input-wrapper-responsive input-wrapper-block">
							<label class="input-label">To</label>
							<input type="date" class="input input-calendar input-no-shadow " data-calendar-text-input="false" data-calendar-disabled-dates="future" />
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





