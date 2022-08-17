<div class="h2 font-weight-300 time-today margin-bottom">
	<span class="REPLACE">Sunday, June 12, 1898</span>
</div>
<div class="module">
	<div class="module-content">
		<div class="flex-grid flex-grid-compact justify-content-space-between align-items-center text-align-center">
			<div class="flex-col-xs-12 flex-col-md-4 flex-col-lg-3">
				<div class="inline-flex align-items-center">
					<span class="h5 no-margin-y font-weight-400 margin-small-right">Today</span>
					<span class="h3 font-weight-600 no-margin color-inherit">
						<span class="REPLACE">04:20</span>
					</span>
				</div>
				<span class="separator margin-small-x">|</span>
				<div class="inline-flex align-items-center">
					<span class="h5 no-margin-y font-weight-400 margin-small-right">This Week</span>
					<span class="h3 font-weight-600 no-margin color-inherit">
						<span class="REPLACE">69:01</span>
					</span>
				</div>
			</div>
			<div class="flex-col-xs-12 flex-col-md-8">
				<div class="table-wrapper">
					<table class="table-fixed">
						<tr>

						<!-- @LOOP TD-->
							<td class="no-border">
							<!-- @NOTE 3 day letter -->
								<!-- classes to add
								`background-primary color-background` => if day is today
							 -->
								<span class="overview-day-name display-inline-block font-weight-700 padding-small-x radius">
									<span class="REPLACE">Day</span>
								</span>
								<br>
								<span class="overview-day-total">
									<span class="REPLACE">06:09</span>
								</span>
							</td>
						
							<?php for($i=1; $i<=6; $i++){ ?>
								<td class="no-border">
								<!-- @NOTE 3 day letter -->
									<span class="overview-day-name display-inline-block font-weight-700 padding-small-x radius <?= $i == 5 ? 'background-primary color-background' : ''; ?>">
										<span class="REPLACE">FRI</span>
									</span>
									<br>
									<span class="overview-day-total">
										<span class="REPLACE">06:09</span>
									</span>
								</td>
										
							<?php } ?>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>