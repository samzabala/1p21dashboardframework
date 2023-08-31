
<div class="module" data-grid-area="overview">
	<div class="module-content">
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