<div
	id="last-activity"
	class="module-grid">


	<!-- header -->

		<div
			id="last-activity-header"
			class="module">

			<div class="module-header module-header-break">

				<?php app_get_component('components/module-functions-accordion-toggle'); ?>

				<div class="flex-0-0">
					<h3 class="no-margin special-secondary text-clip-background background-gradient">Last Activity</h3>
					<a href="<?php app_create_link(array('template'=>'profile')) ?>" class="no-margin color-neutral color-primary-hover no-margin profile-name">
						<span class="REPLACE">Profile Name</span>
					</a>
				</div>

				<div class="module-functions accordion accordion-mobile">
					<?php app_get_component('components/filter-dropdown-date'); ?>
				</div>

			</div>

		</div>
	

	<!-- ditribution -->
		<div
			id="last-activity-distribution"
			class="module">

			<div class="module-header module-header-break">

				<?php app_get_component('components/module-functions-accordion-toggle'); ?>

				<h3 class="module-title">Link Activity Distribution</h3>
				
				<div class="module-functions accordion accordion-mobile">
					<?php app_get_component('components/filter-dropdown-projects'); ?>
				</div>
			</div>

			<div class="module-content align-self-center">
				<div class="p">
						<img class="REPLACE" style="margin:0 auto" src="/PLACEHOLDER/charts/seo/chart-07.png" alt="" />
				</div>
			</div>

		</div>

	

	<!-- on page -->
		<div
			id="last-activity-on-page"
			class="module">

			<div class="module-header module-header-break">


				<?php app_get_component('components/module-functions-accordion-toggle'); ?>

				
				<h3 class="module-title">On-Page Update Distribution</h3>
				<div class="module-functions accordion accordion-mobile">

				<?php app_get_component('components/filter-dropdown-projects'); ?>
				</div>
			</div>

			<div class="module-content align-self-center">
				<div class="p">
						<img class="REPLACE" style="margin:0 auto" src="/PLACEHOLDER/charts/seo/chart-07.png" alt="" />
				</div>
			</div>

		</div>


	<!-- TABLE -->
		<div
			class="module">

			<div class="module-content">

				<div class="module-header module-header-break">
					
					<?php app_get_component('components/module-functions-accordion-toggle'); ?>
					
					<h3 class="module-title">
						Last Activity
					</h3>

					<div class="module-functions accordion accordion-mobile">
						<?php app_get_component('components/filter-input-search'); ?>
						<?php app_get_component('components/modal-export'); ?>
					</div>

				</div>

			<!-- @IF associated projects  are available -->
				<div class="table-wrapper">
					
					<table class="text-vertical-align-middle">
						<tr>
							<th class="dashboard-table-cell-name">Account</th>
							<th class="text-align-center">
								<a href="#" class="dashboard-sort-table-toggle color-inherit">AVG HR Rank <i class="symbol symbol-caret-down symbol-caret-toggle-up"></i></a>
							</th>
							<th class="text-align-center">AVG Rank</th>
							<th>Last Todo Date</th>
							<th>Last On-Page Date</th>
							<th>Last Link Date</th>
							<th>Last Link</th>
							<th>Last Activity</th>
						</tr>

						<!-- @LOOP tr-->
						<tr>
							<td class="dashboard-table-cell-name">
								<?php app_get_component('components/project-link') ?>
							</td>
							
							<td class="text-align-center">

								<span class="project-avg-hr-rank font-weight-900 text-transform-uppercase">
									<span class="REPLACE">12</span>
								</span>

								<!-- @NOTE value influences whether to use .color-error and .color-success -->
								<span class="project-avg-hr-rank-change color-error font-weight-900 text-transform-uppercase">
									(<span class="REPLACE">-5.5</span>)
								</span>

							</td>

							<td class="text-align-center">

								<span class="project-avg-rank font-weight-900 text-transform-uppercase">
									<span class="REPLACE">12</span>
								</span>

								<!-- @NOTE value influences whether to use .color-error and .color-success -->
								<span class="project-avg-rank-change color-success font-weight-900 text-transform-uppercase">
									(<span class="REPLACE">+1.2</span>)
								</span>
							</td>

							<td>
								<span class="profile-last-to-do-date">
									<span class="REPLACE">04-20-69</span>
								</span>
							</td>

							<td>
								<span class="profile-last-on-page-date">
									<span class="REPLACE">04-20-69</span>
								</span>
							</td>

							<td>
								<span class="profile-last-link-date">
									<span class="REPLACE">04-20-69</span>
								</span>
							</td>

							<td>
								<span class="profile-last-link-duration">
									<span class="REPLACE">69</span> Days
								</span>
							</td>

							<td>
								<span class="profile-last-activity-duration font-weight-700">
									<span class="REPLACE">69</span> Days
								</span>
							</td>

						</tr>



							<!-- @PLACEHOLDER duplicate of above delete everything below when ready -->
								<?php for($i=1; $i<=4; $i++){ ?>
									


									<tr>
										<td class="dashboard-table-cell-name">
											<?php app_get_component('components/project-link') ?>
										</td>
										
										<td class="text-align-center">

											<span class="project-avg-hr-rank font-weight-900 text-transform-uppercase">
												<span class="REPLACE">12</span>
											</span>

											<!-- @NOTE value influences whether to use .color-error and .color-success -->
											<span class="project-avg-hr-rank-change color-error font-weight-900 text-transform-uppercase">
												(<span class="REPLACE">-5.5</span>)
											</span>

										</td>

										<td class="text-align-center">
											

											<span class="project-avg-rank font-weight-900 text-transform-uppercase">
												<span class="REPLACE">12</span>
											</span>

											<!-- @NOTE value influences whether to use .color-error and .color-success -->
											<span class="project-avg-rank-change color-success font-weight-900 text-transform-uppercase">
												(<span class="REPLACE">+1.2</span>)
											</span>
										</td>



										<td>
											<span class="profile-last-to-do-date">
												<span class="REPLACE">04-20-69</span>
											</span>
										</td>
										<td>
											<span class="profile-last-on-page-date">
												<span class="REPLACE">04-20-69</span>
											</span>
										</td>
										<td>
											<span class="profile-last-link-date">
												<span class="REPLACE">04-20-69</span>
											</span>
										</td>
										<td>
											<span class="profile-last-link-duration">
												<span class="REPLACE">69</span> Days
											</span>
										</td>
										<td>
											<span class="profile-last-activity-duration font-weight-700">
												<span class="REPLACE">69</span> Days
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
				<?php app_get_component('components/pagination') ?>
			</div>

		</div>
	
</div>