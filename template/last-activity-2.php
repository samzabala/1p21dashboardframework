<div
	id="last-activity"
	class="module-grid"
	data-grid-template-columns-md="1fr 1fr"
	data-grid-template-areas-md="
	'header header'
	'distributionpie onpagepie'
	'clientkey clientkey'
	'distributionbubble distributionbubble'
	'onpagebubble onpagebubble'
	'lastactivity lastactivity'">


	<!-- header -->

		<div
			id="last-activity-header"
			class="module"
			data-grid-area-md="header">

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

	<!-- ditribution pie -->

		<div class="module"
			id="last-activity-distribution-pie"
			class="module"
			data-grid-area-md="distributionpie">
			
			<div class="module-header">
				<h3 class="module-title">Link Activity Distribution</h3>
			</div>
			
			<div class="module-content align-self-center">


			<div class="p text-align-center">
					<img class="REPLACE" style="width:500px;margin:0 auto" src="/placeholder/charts/seo/chart-10.png" alt="" />
				</div>
			</div>
		</div>


	<!-- ditribution pie -->

		<div class="module"
			id="last-activity-on-page-pie"
			class="module"
			data-grid-area-md="onpagepie">
			
			<div class="module-header">
				<h3 class="module-title">On-Page Update Distribution</h3>
			</div>
			
			<div class="module-content align-self-center">


			<div class="p text-align-center">
					<img class="REPLACE" style="width:500px;margin:0 auto" src="/placeholder/charts/seo/chart-11.png" alt="" />
				</div>
			</div>
		</div>

	<!-- Client Key -->

	<div
			id="profile-scoreboard-client-key"
			class="module"
			data-grid-area-md="clientkey">
			
			<div class="module-header module-header-break">
				<h3 class="module-title">Client Key</h3>
			</div>
			
			
			<div class="module-content">

				<ul class=" no-margin-y average-legend unstyled flex-grid flex-grid-compact flex-grid-fixed">
					<!--
						@NOTE background-color on .legend will be replaced dynamically based on color-coded graph item and the profile it represents
					-->
					<li class="flex-col-xs-6 flex-col-md-3 flex-col-lg-2">
						<span class="legend" style="background-color: #fb1818"></span>
						<span class="profile-first-name"><span class="REPLACE">Profile</span></span>
					</li>


						<!-- @PLACEHOLDER: DELETE WHEN READY -->

						<?php 
							$placeholder_colors = array(
								'#fec87c',
								'#fb1818',
								'#f7bc00',
								'#006943',
								'#b6e4b6',
								'#0480fe',
								'#a168d9',
								'#fd7f03',
								'#16b900',
								'#01c6ab',
								'#0037b4',
								'#5e01a8',
								'#fe85d6',
								'#fff200',
								'#d7c368',
								'#e18256',
								'#313f76',
								'#547b80',
								'#8f4139',
								'#ecc65f',
								'#d069a9',
								'#008eb0',
								'#5f6046',
								'#c26558',
								'#4db7ff',
								'#5a3b00',
								'#e1e43c',
								'#6154a4',
								'#9e005d',
								'#000000'
							);
						?>
						<?php for($i=1; $i<=(count($placeholder_colors)); $i++){ ?>
							

							<li class="flex-col-xs-6 flex-col-md-3 flex-col-lg-2">
								<span class="legend" style="background-color: <?=$placeholder_colors[$i]?>"></span>
								<span class="profile-first-name"><span class="REPLACE">Profile</span></span>
							</li>
						<?php } ?>
				</ul>
				
				<!-- @ELSE NO accounts are available -->
					<p class="color-neutral notification-no-result no-margin-y">Oooh nothing here :/</p>


			</div>

		</div>
	

	<!-- ditribution bubble -->
		<div
			id="last-activity-distribution-bubble"
			class="module"
			data-grid-area-md="distributionbubble">

			<div class="module-header module-header-break">

				<?php app_get_component('components/module-functions-accordion-toggle'); ?>

				<h3 class="module-title">Link Activity Distribution</h3>
				
				<div class="module-functions accordion accordion-mobile">
					<?php app_get_component('components/filter-dropdown-projects'); ?>
				</div>
			</div>

			<div class="module-content align-self-center">
				<div class="p">
						<img class="REPLACE" style="margin:0 auto" src="/placeholder/charts/seo/chart-12.png" alt="" />
				</div>
			</div>

		</div>


	

	<!-- on page bubble -->
		<div
			id="last-activity-on-page-bubble"
			class="module"
			data-grid-area-md="onpagebubble">

			<div class="module-header module-header-break">


				<?php app_get_component('components/module-functions-accordion-toggle'); ?>

				
				<h3 class="module-title">On-Page Update Distribution</h3>
				<div class="module-functions accordion accordion-mobile">

				<?php app_get_component('components/filter-dropdown-projects'); ?>
				</div>
			</div>

			<div class="module-content align-self-center">
				<div class="p">
						<img class="REPLACE" style="margin:0 auto" src="/placeholder/charts/seo/chart-12.png" alt="" />
				</div>
			</div>

		</div>

	

	<!-- last activity table -->
		<div
			class="module"
			data-grid-area-md="lastactivity">

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