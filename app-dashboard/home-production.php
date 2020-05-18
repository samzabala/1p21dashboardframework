<div
	id="home-production"
	class="module-grid"

	data-grid-template-rows-md="repeat( auto-fit, minmax(585px, auto) )"
	data-grid-template-columns-md="1fr 270px"
	data-grid-template-areas-md="
	'average average'
	'total status'
	'priority priority'"

	data-grid-template-columns-lg="440px 1fr 270px"
	data-grid-template-areas-lg="
	'average average status'
	'total priority status'">

	
	<!-- AVERAGE TIMEE -->
		<div
			id="home-production-average"
			class="module"
			data-grid-area-md="average">

			<div class="module-header module-header-break">

				<?php app_get_component('components/module-functions-accordion-toggle'); ?>

				<h3 class="module-title">
					Average Project Time for <span class="current-year"><span class="REPLACE">2018</span></span>
				</h3>

				<div class="module-functions accordion accordion-mobile">
					<?php app_get_component('components/filter-dropdown-date-span')?>
					<?php app_get_component('components/filter-toggle-my')?>
				</div>
			</div>

			<div class="module-content align-self-center">
				<div class="p text-align-center">
					<img class="REPLACE" style="margin:0 auto;" src="/placeholder/charts/prod/chart-01.png" alt="" />
				</div>

				<ul class="no-margin text-align-right inline no-margin-bottom">
					<li>
						<span class="legend legend-secondary"></span> Average Design Time
					</li>

					<li>
						<span class="legend legend-primary"></span> Average Developer Time
					</li>
				</ul>

			</div>
			
		</div>


	<!-- Status -->
		<div
			id="home-production-status"
			class="module"
			data-grid-area-md="status">
			
			<div class="module-header text-align-center">
				<h3 class="module-title">
					Project Status
				</h3>
			</div>
			
			<div class="module-content flex-sm flex-direction-column">

				<div class="flex-1-1 text-align-center flex-grid flex-grid-compact flex-grid-fixed align-items-center">
					
					<div class="flex-col-6 flex-col-md-12 flex-md align-items-center">
						
						<div class="flex-1-1">
							<div class="special-primary no-margin-y production-count-design">
								<span class="REPLACE">40</span>
							</div>

							<div class="color-neutral">
								<span class="REPLACE">Projects in Design</span>
							</div>
						</div>

					</div>
					
					<div class="hide-mobile flex-col-md-12">
						<hr class="no-margin-y">
					</div>
					
					<div class="flex-col-6 flex-col-md-12 flex-md align-items-center">
						
						<div class="flex-1-1">
							<div class="special-primary no-margin-y production-count-dev">
								<span class="REPLACE">12</span>
							</div>

							<div class="color-neutral">
								<span class="REPLACE">Projects in Dev</span>
							</div>
						</div>

					</div>
					
					<div class="hide-mobile flex-col-md-12">
						<hr class="no-margin-y">
					</div>
					
					<div class="flex-col-6 flex-col-md-12 flex-md align-items-center">
						
						<div class="flex-1-1">
							<div class="special-primary no-margin-y production-count-dev">
								<span class="REPLACE">12</span>
							</div>

							<div class="color-neutral">
								<span class="REPLACE">Projects in Dev</span>
							</div>
						</div>

					</div>
					
					<div class="hide-mobile flex-col-md-12">
						<hr class="no-margin-y">
					</div>
					
					<div class="flex-col-6 flex-col-md-12 flex-md align-items-center">
						
						<div class="flex-1-1">
							<div class="special-primary no-margin-y production-count-dev">
								<span class="REPLACE">12</span>
							</div>

							<div class="color-neutral">
								<span class="REPLACE">Projects in Dev</span>
							</div>
						</div>

					</div>

				</div>


			</div>
			
			<div class="overflow-hidden module-footer module-no-gutter">
				<div class="btn btn-block font-size-normalize btn-large btn-no-radius btn-primary">Generate <span class="current-year"><span class="REPLACE">2018</span></span> Report</div>
			</div>

		</div>



	<!-- Total -->
		<div
			id="home-production-total"
			class="module"
			data-grid-area-md="total">
			
			<div class="module-header">
				<h3 class="module-title">
					Total Projects in <span class="current-year"><span class="REPLACE">2018</span></span>
				</h3>
			</div>
			
			<div class="module-content align-self-center">

				<div class="p text-align-center">
					<img class="REPLACE" style="width:500px;margin:0 auto" src="/placeholder/charts/prod/chart-02.png" alt="" />
				</div>

				<ul class="unstyled no-margin text-align-center flex-sm flex-wrap justify-content-space-evenly">
					<li>
						<i class="symbol symbol-square color-primary"></i> In Progress
					</li>

					<li>
						<i class="symbol symbol-square color-secondary"></i> Completed
					</li>

					<li>
						<i class="symbol symbol-square color-neutral"></i> Hiatus
					</li>
				</ul>

			</div>

		</div>


	<!-- Priority -->
		<div
			id="home-production-priority"
			class="module"
			data-grid-area-md="priority">
			
			<div class="module-header">
				<h3 class="module-title">
					Priority Projects
				</h3>
			</div>
			
			<div class="module-content">

				<!-- @IF associated projects  are available -->
					<div class="table-wrapper">
						
						<table class="text-vertical-align-middle">
							
							<tr>
								<th class="dashboard-table-cell-name">Client Name</th>
								<th>Status</th>
								<th>Due Date</th>
							</tr>

							<!-- @LOOP -->
							<tr>
								<td class="dashboard-table-cell-name">
									<?php app_get_component('components/project-link'); ?>
								</td>

								<td>
									<!-- @NOTE .tag-COLOR_SCHEME will change to .task-status -->
									<span class="tag tag-secondary">
										<span class="task-status"><span class="REPLACE">Task Status<span></span>
									</span>
								</td>

								<td>
									
									<span class="project-due-date">
										<span class="REPLACE">4-20-69</span>
									</span>
								</td>
							</tr>


								<!-- @PLACEHOLDER: DELETE WHEN READY -->
									<?php for($i=1; $i<=3; $i++){ ?>
										<tr>
											<td class="dashboard-table-cell-name">
												<?php app_get_component('components/project-link'); ?>
											</td>

											<td>
												<span class="tag tag-caution">
													<span class="task-status"><span class="REPLACE">Task Status<span></span>
												</span>
											</td>

											<td>
												
												<span class="project-due-date">
													<span class="REPLACE">4-20-69</span>
												</span>
											</td>
										</tr>
									<?php } ?>



						</table>
						
					</div>

				<!-- @ELSE NO assigned tasks are available -->
					<p class="color-neutral notification-no-result no-margin-y">Oooh nothing here :/</p>
			</div>
			
			<div class="module-footer">
				<?php app_get_component('components/pagination'); ?>
			</div>

		</div>

		
</div>