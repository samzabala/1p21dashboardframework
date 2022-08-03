<!-- 

@NOTE:
for accordions to work, index increments on id attribute should be appended
eg:
log-week-profile-ID => log-week-profile-1, log-week-profile-69, log-week-profile-666 ..etc
look for `-ID`

 -->
<tbody class="dashboard-table-row-accordion-header  log-week-profile-summary-header ">
	<tr>
		<td class="dashboard-table-cell-max color-primary font-weight-700 color-primary no-padding-left">
			<div class="flex-grid flex-grid-no-gutter align-items-center">
				<div class="flex-child">
					<a href="#log-week-profile-<?= isset($h) ? $h : 'ID' ?>" data-toggle="accordion"  class="btn btn-no-shadow btn-symbol">
					<i class="symbol symbol-caret-down  symbol-caret-up-toggle"></i>
					</a>
				</div>
				<div class="flex-child">	
					<?php app_get_component('components/table-profile-named') ?>
				</div>
			</div>
		</td>


		
		<!-- @LOOP TD-->
		<td class="dashboard-table-cell-date text-nowrap text-align-center">
			<!--

				@NOTE: these are classes to add
				.log-week-day-total 
						if total exceeds 8.5 hours =>.color-primary
						if time is less 7.5 hours =>.color-error
				
				
				-->
			<span class="log-week-day-total font-weight-700">
				<span class="REPLACE">8hr 01m</span>
			</span>
		</td>
		

			<!-- @PLACEHOLDER: DELETE WHEN READY -->
				<?php for($i=1; $i<=2; $i++){ ?>
							

			
					<td class="dashboard-table-cell-date text-nowrap text-align-center">
						<span class=" log-week-day-total font-weight-700 color-error">
							<span class="REPLACE">6hr 09m</span>
						</span>
					</td>

			
					<td class="dashboard-table-cell-date text-nowrap text-align-center">
						<span class=" log-week-day-total font-weight-700 color-primary">
							<span class="REPLACE">66hr 06m</span>
						</span>
					</td>

			
					<td class="dashboard-table-cell-date text-nowrap text-align-center">
						<span class="log-week-day-total font-weight-700">
							<span class="REPLACE">8hr 15m</span>
						</span>
					</td>
							
				<?php } ?>

		<!--

			@NOTE: these are classes to add
			.log-week-total 
					if total exceeds 40.25 hours =>.color-primary
					if time is less 40 hours =>.color-error
			
			
			-->
		<td class="dashboard-table-cell-date text-nowrap text-align-center">
			<span class="log-week-total font-weight-700">
				<span class="REPLACE">40hr 20m</span>
			</span>
		</td>
	</tr>
</tbody>

<!-- TABLE OF TASKS -->
<tbody id="log-week-profile-<?= isset($h) ? $h : 'ID' ?>" class="dashboard-table-row-accordion-body log-week-profile-summary-accordion table-col-separation accordion table-large" >

	<tr>
		<td  class="dashboard-table-cell-max task-info">
			<?php app_get_component('components/project-link-timetracker') ?>
		</td>


		<!-- @LOOP TD-->
		<td class="dashboard-table-cell-date text-nowrap text-align-center">
			<span class="log-week-task-day-total">
				<span class="REPLACE">8hr 01m</span>
			</span>
		</td>


			<!-- @PLACEHOLDER: DELETE WHEN READY -->
				<?php for($i=1; $i<=2; $i++){ ?>
							

			
					<td class="dashboard-table-cell-date text-nowrap text-align-center">
						<span class="log-week-task-day-total">
							<span class="REPLACE">6hr 09m</span>
						</span>
					</td>


							

			
					<td class="dashboard-table-cell-date text-nowrap text-align-center">
						<span class=" log-week-task-day-total">
							<span class="REPLACE">66hr 06m</span>
						</span>
					</td>



			
					<td class="dashboard-table-cell-date text-nowrap text-align-center">
						<span class=" log-week-task-day-total">
							<span class="REPLACE">8hr 15m</span>
						</span>
					</td>
							
				<?php } ?>

		<!--

			@NOTE: these are classes to add
			.log-week-total 
					if total exceeds 40.25 hours =>.color-primary
					if time is less 40 hours =>.color-error
			
			
			-->
		<td class="dashboard-table-cell-date text-nowrap text-align-center table-cell-primary">
			<span class="log-week-task-total font-weight-700">
				<span class="REPLACE">666hr 69m</span>
			</span>
		</td>

	</tr>



	<!-- @PLACEHOLDER: DELETE WHEN READY -->
		<?php for($j=1; $j<=4; $j++){ ?>
			<tr>

				<td  class="dashboard-table-cell-max task-info">
					<?php app_get_component('components/project-link-timetracker') ?>
				</td>


				<!-- @LOOP TD-->
				<td class="dashboard-table-cell-date text-nowrap text-align-center">
					<!--
			
						@NOTE: these are classes to add
						.log-week-task-day-total 
								if total exceeds 8.5 hours =>.color-primary
								if time is less 7.5 hours =>.color-error
						
						
						-->
					<span class="log-week-task-day-total">
						<span class="REPLACE">8hr 01m</span>
					</span>
				</td>
				

					<!-- @PLACEHOLDER: DELETE WHEN READY -->
						<?php for($i=1; $i<=2; $i++){ ?>
									

					
							<td class="dashboard-table-cell-date text-nowrap text-align-center">
								<span class="log-week-task-day-total">
									<span class="REPLACE">6hr 09m</span>
								</span>
							</td>


									

					
							<td class="dashboard-table-cell-date text-nowrap text-align-center">
								<span class=" log-week-task-day-total">
									<span class="REPLACE">66hr 06m</span>
								</span>
							</td>



					
							<td class="dashboard-table-cell-date text-nowrap text-align-center">
								<span class=" log-week-task-day-total">
									<span class="REPLACE">8hr 15m</span>
								</span>
							</td>
									
						<?php } ?>

				<!--

				@NOTE: these are classes to add
				.log-week-total 
						if total exceeds 40.25 hours =>.color-primary
						if time is less 40 hours =>.color-error
				
				
				-->
				<td class="dashboard-table-cell-date text-nowrap text-align-center table-cell-primary">
					<span class="log-week-task-total font-weight-700 color-error">
						<span class="REPLACE">666hr 69m</span>
					</span>
				</td>

			</tr>
			
		<?php } ?>

	
</tbody>