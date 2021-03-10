<!--

	@interactive
		.module-functions accordion accordion-mobile *,
	@DYNAMIC
		dom element
			.progress-bar
 -->
 <div id="profile-scoreboard" class="module-grid"
	data-grid-template-columns="repeat( 3, 1fr )"
	data-grid-template-rows="minmax(330px, auto) minmax(120px,min-content) repeat( auto-fit, minmax(330px, auto) )"
	data-grid-template-areas="
		'profile-card profile-card profile-card'
		'linksbuilt onpage todos'
		'overall overall overall'
		'distribution distribution distribution'
		'clientkey clientkey clientkey'
		'campaign campaign campaign'
		'average average average'
		'accounts accounts accounts'"


	data-grid-template-rows-md="repeat( auto-fit, minmax(140px, min-content) )"
	data-grid-template-columns-md="350px 1fr 1fr 1fr"
	data-grid-template-areas-md="
		'profile-card linksbuilt onpage todos'
		'profile-card overall overall overall'
		'distribution distribution clientkey clientkey'
		'campaign campaign clientkey clientkey'
		'average average average average'
		'accounts accounts accounts accounts'"
		
	data-grid-template-rows-lg="repeat( 3, minmax(180px, auto) ) repeat( auto-fit, minmax(180px, 1fr) )"
	data-grid-template-columns-lg="350px 3fr 2fr 150px"
	data-grid-template-areas-lg="
		'profile-card overall overall linksbuilt'
		'profile-card overall overall onpage'
		'profile-card overall overall todos'
		'distribution distribution clientkey clientkey'
		'campaign campaign clientkey clientkey'
		'average average average average'
		'accounts accounts accounts accounts'"
	>

	<!-- Profile card -->
		<?php app_get_component('components/profile-card',FWAPPS_SLUG); ?>

	<!-- Links Built -->
		<a
			id="profile-scoreboard-links-built"
			class="color-inherit color-primary-hover module module-no-gutter-x text-align-center text-leading-compact"
			href="<?= app_create_link(array('template'=>'unique-links')); ?>"
			data-grid-area="linksbuilt">
				
				<span class="module-content">
					<span class="special-primary  no-margin-y profile-count-links-built">
						<span class="REPLACE">88</span>
					</span>
					<span class="font-size-small color-neutral">Links Built</span>
				</span>
				
		</a>

	<!-- On Page -->
		<a
			id="profile-scoreboard-on-page"
			class="color-inherit color-primary-hover module module-no-gutter-x text-align-center text-leading-compact"
			href="<?= app_create_link(array('template'=>'projects')); ?>"
			data-grid-area="onpage">
				
			<span class="module-content">
					
				<span class="special-primary  no-margin-y profile-count-on-page">
					<span class="REPLACE">32</span>
				</span>
				<span class="font-size-small color-neutral">On-Page</span>

			</span>
			
			
		</a>


	<!-- Todos -->
		<a
			id="profile-scoreboard-to-dos"
			class="color-inherit color-primary-hover module module-no-gutter-x text-align-center text-leading-compact"
			href="<?= app_create_link(array('template'=>'projects')); ?>"
			data-grid-area="todos">
				
				<span class="module-content">
							
					<span class="special-primary  no-margin-y profile-count-on-page">
						<span class="REPLACE">32</span>
					</span>
					<span class="font-size-small color-neutral">To-dos</span>

				</span>
				
		</a>

	<!-- Overall Actions -->
		<div
			id="profile-scoreboard-overall-actions"
			class="module"
			data-grid-area="overall">
		
			<div class="module-header module-header-break">
				
				<?php app_get_component('components/module-functions-accordion-toggle'); ?>

				<h3 class="module-title">Overall Actions</h3>

				<div class="module-functions accordion accordion-mobile">
					<?php app_get_component('components/filter-dropdown-date'); ?>
				</div>

			</div>
			
			<div class="module-content align-self-center">

				<div class="p">
					<img class="REPLACE" style="margin:0 auto" src="/placeholder/charts/seo/chart-03.png" alt="">
				</div>

				<ul class="text-align-right inline no-margin-bottom">
					<li>
						<span class="legend legend-secondary"></span> Unique Links Built
					</li>

					<li>
						<span class="legend legend-primary"></span> On-Page Updates
					</li>
				</ul>
				
			</div>

		</div>
	
	<!-- Activity Distribution -->
		<div
			id="profile-scoreboard-activity-distribution"
			class="module"
			data-grid-area="distribution">

			<div class="module-header module-header-break">
				
				<?php app_get_component('components/module-functions-accordion-toggle'); ?>

				<h3 class="module-title">Activity Distribution</h3>
				<div class="module-functions accordion accordion-mobile">
					<?php app_get_component('components/linkto-last-activity'); ?>
				</div>
			</div>

			<div class="module-content flex-xs flex-direction-column justify-content-space-around">
				
				<p class="progress-title no-margin-top">Link Activity Distribution</p>
				
				<!-- @NOTE this wont use high charts, -->
				<div id ="lnk-act-dist" class="progress p">

					<!--
						@LOOP progress-bar
						@DYNAMIC all attrbutes EXCEPT class


					-->
					<div class="progress-bar"

						style="width: 45%; background-color:#fb1818;"

						data-toggle="tooltip-hover"
						data-tooltip-placement="top"
						data-tooltip-badge="true"
						data-tooltip-classes="text-align-center"
						data-tooltip-center-y="true"
						data-tooltip-center-x="true"
						data-tooltip-badge-background="#fb1818"
						data-tooltip-content="<strong>Percentage</strong><br><span class='font-size-small'>Client Name</span>"></div>

					
						<!-- @PLACEHOLDER: DELETE WHEN READY -->
							<?php 
								$placeholder_colors = array(null,'#fec87c','#fb1818','#f7bc00','#006943','#b6e4b6','#0480fe','#a168d9','#fd7f03','#16b900','#01c6ab','#0037b4','#5e01a8','#fe85d6');
							?>
							<?php for($i=1; $i<=(count($placeholder_colors) - 1); $i++){ ?>
								<div class="progress-bar"
								
									style="width: <?=100/($i * 5) ?>%; background-color:<?= $placeholder_colors[$i] ?>;"

									data-toggle="tooltip-hover"
									data-tooltip-placement="top"
									data-tooltip-badge="true"
									data-tooltip-classes="text-align-center"
									data-tooltip-center-y="true"
									data-tooltip-center-x="true"
									data-tooltip-badge-background="<?= $placeholder_colors[$i] ?>"
									data-tooltip-content="<strong>Placeholder loop boi <?=$i ?></strong><br><span class='font-size-small'>This is just placeholder</span>"></div>
							<?php } ?>




				</div>



				<p class="progress-title">Link On-Page Distribution</p>
				<div class="progress">
					
					<!--
						@LOOP progress-bar
						@DYNAMIC all attrbutes EXCEPT class
					-->
					<div class="progress-bar"

						style="width: 30%; background-color:#fb1818;"

						data-toggle="tooltip-hover"
						data-tooltip-placement="top"
						data-tooltip-badge="true"
						data-tooltip-classes="text-align-center"
						data-tooltip-center-y="true"
						data-tooltip-center-x="true"
						data-tooltip-badge-background="#fb1818"
						data-tooltip-content="<strong>Percentage</strong><br><span class='font-size-small'>Client Name</span>"></div>





						<!-- @PLACEHOLDER: DELETE WHEN READY -->
							<?php 
								$placeholder_colors = array(null,'#fec87c','#fb1818','#f7bc00','#006943','#b6e4b6','#0480fe','#a168d9','#fd7f03','#16b900','#01c6ab','#0037b4','#5e01a8','#fe85d6');
							?>
							<?php for($i=1; $i<=(count($placeholder_colors) - 1); $i++){ ?>
								<div class="progress-bar"
								
									style="width: <?=100/($i * 5) ?>%; background-color:<?= $placeholder_colors[$i] ?>;"

									data-toggle="tooltip-hover"
									data-tooltip-placement="top"
									data-tooltip-badge="true"
									data-tooltip-classes="text-align-center"
									data-tooltip-center-y="true"
									data-tooltip-center-x="true"
									data-tooltip-badge-background="<?= $placeholder_colors[$i] ?>"
									data-tooltip-content="<strong>Placeholder loop boi <?=$i ?></strong><br><span class='font-size-small'>This is just placeholder</span>"></div>
							<?php } ?>

						


				</div>

			</div>

		</div>

	<!-- Client Key -->

		<div
			id="profile-scoreboard-client-key"
			class="module"
			data-grid-area="clientkey">
			
			<div class="module-header module-header-break">
				<h3 class="module-title">Client Key</h3>
			</div>
			
			
			<div>
				<!-- @if client keys are there -->
					<!-- @LOOP p 
						@DYNAMIC
							attr style background color
					-->
					<p>
						<span class="legend" style="background-color:#ca8a01"></span>
						<span class="client-name">
							<span class="REPLACE">Client Name</span>
						</span>
					</p>




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
						<?php for($i=1; $i<=(count($placeholder_colors) - 20); $i++){ ?>
							

							<p>
								<span class="legend" style="background-color:<?=$placeholder_colors[$i] ?>"></span>
								<span class="client-name">
									<span class="REPLACE">Client Name</span>
								</span>
							</p>
						<?php } ?>
				
				<!-- @ELSE NO accounts are available -->
					<p class="color-neutral notification-no-result no-margin-y">Oooh nothing here :/</p>


			</div>

		</div>



	<!-- Campaign Actions -->
		<div
			id="profile-scoreboard-campaign-actions"
			class="module"
			data-grid-area="campaign">

			<div class="module-header module-header-break">
				<h3 class="module-title">Campaign Actions</h3>
			</div>

			<div class="module-content align-self-center">
				<img class="REPLACE" style="margin:0 auto" src="/placeholder/charts/seo/chart-05.png" alt="">
			</div>

		</div>


	
	<!-- Average Rank By Account -->
		<div
			id="profile-scoreboard-avg-rank"
			class="module"
			data-grid-area="average">
			<div class="module-header module-header-break">
				
				<?php app_get_component('components/module-functions-accordion-toggle'); ?>

				<h3 class="module-title">Average Rank By Account</h3>
				
				<div class="module-functions accordion accordion-mobile">

					<?php app_get_component('components/filter-toggle'); ?>

					<?php app_get_component('components/filter-dropdown-accounts'); ?>

					<?php app_get_component('components/filter-toggle-my')?>

				</div>
			</div>

			<div class="module-content align-self-center">
				<div>
					<img class="REPLACE" style="margin:0 auto" src="/placeholder/charts/seo/chart-09.png" alt="" />
				</div>

			</div>

		</div>

	



	<!-- Table of things -->
		<div
			id="profile-scoreboard-accounts"
			class="module"
			data-grid-area="accounts">
			
				<div class="module-content">
					
					<!-- @IF accounts  are available -->
						<div class="table-wrapper">

							<table class="text-vertical-align-middle">
								
								<tr class="text-align-center font-size-small">
									<th class="dashboard-table-cell-name text-align-left">
										Account
									</th>

									<th class="dashboard-table-cell-thumbnail">
										Priority
									</th>

									<th><a href="#" class="dashboard-sort-table-toggle color-inherit">AVG HR Rank <i class="symbol symbol-caret-down symbol-caret-toggle-up"></i></a></th>

									<th>AVG Rank</th>

									<th>On-page</th>

									<th>Content</th>

									<th>Social</th>

									<th>To-dos</th>

									<th>Top 10s</th>

									<th>Links</th>

									<th>Unique Links</th>

									<th>Total</th>
								</tr>


								<!-- @LOOP tr -->
								<tr class="text-align-center">
									
									<td class="dashboard-table-cell-name text-align-left">
										<?php app_get_component('components/project-link'); ?>
									</td>

									<!-- @NOTE: @DYNAMIC class .background-intensity-REPLACE -->
									<td class="dashboard-table-cell-thumbnail" class="text-align-center">
										<div class="thumbnail project-priority thumbnail-micro background-intensity-5">
											<span class="thumbnail-text">
												<span class="REPLACE">5</span>
											</span>
										</div>
									</td>

									<td>

										<span class="project-avg-hr-rank font-weight-900 text-transform-uppercase">
											<span class="REPLACE">12</span>
										</span>

										<!-- @NOTE value influences whether to use .color-error and .color-success -->
										<span class="project-avg-hr-rank-change color-error font-weight-900 text-transform-uppercase">
											(<span class="REPLACE">-5.5</span>)
										</span>

									</td>

									<td>
										

										<span class="project-avg-rank font-weight-900 text-transform-uppercase">
											<span class="REPLACE">12</span>
										</span>

										<!-- @NOTE value influences whether to use .color-error and .color-success -->
										<span class="project-avg-rank-change color-success font-weight-900 text-transform-uppercase">
											(<span class="REPLACE">+1.2</span>)
										</span>
									</td>

									<td>
										<span class="project-on-page">
											<span class="REPLACE">0</span>
										</span>
									</td>

									<td>
										<span class="project-content">
											<span class="REPLACE">12</span>
										</span>
									</td>

									<td>
										<span class="project-social">
											<span class="REPLACE">5</span>
										</span>
									</td>

									<td>
										<span class="project-to-dos">
											<span class="REPLACE">0</span>
										</span>
									</td>

									<td>
										<span class="project-top-10">
											<span class="REPLACE">69</span>
										</span>
									</td>

									<td>
										<span class="project-links">
											<span class="REPLACE">69</span>
										</span>
									</td>

									<td>
										<span class="project-unique">
											<span class="REPLACE">69</span>
										</span>
									</td>

									<td>
										<span class="project-total font-weight-900">
											<span class="REPLACE">69</span>
										</span>
									</td>
								</tr>
								
									<!-- @PLACEHOLDER: DELETE WHEN READY -->

										<?php for($i=1; $i<=4; $i++){ ?>
											<tr class="text-align-center">
										
												<td class="dashboard-table-cell-name text-align-left">
													<?php app_get_component('components/project-link'); ?>
												</td>

												<!-- @NOTE: @DYNAMIC class .background-intensity-REPLACE -->
												<td class="dashboard-table-cell-thumbnail" class="text-align-center">
													<div class="thumbnail project-priority thumbnail-micro background-intensity-<?=$i ?>">
														<span class="thumbnail-text">
															<span class="REPLACE"><?=$i ?></span>
														</span>
													</div>
												</td>

												<td>

													<span class="project-avg-hr-rank font-weight-900 text-transform-uppercase">
														<span class="REPLACE">12</span>
													</span>

													<!-- @NOTE value influences whether to use .color-error and .color-success -->
													<span class="project-avg-hr-rank-change color-error font-weight-900 text-transform-uppercase">
														(<span class="REPLACE">-5.5</span>)
													</span>

												</td>

												<td>
													

													<span class="project-avg-rank font-weight-900 text-transform-uppercase">
														<span class="REPLACE">12</span>
													</span>

													<!-- @NOTE value influences whether to use .color-error and .color-success -->
													<span class="project-avg-rank-change color-success font-weight-900 text-transform-uppercase">
														(<span class="REPLACE">+1.2</span>)
													</span>
												</td>

												<td>
													<span class="project-on-page">
														<span class="REPLACE">0</span>
													</span>
												</td>

												<td>
													<span class="project-content">
														<span class="REPLACE">12</span>
													</span>
												</td>

												<td>
													<span class="project-social">
														<span class="REPLACE">5</span>
													</span>
												</td>

												<td>
													<span class="project-to-dos">
														<span class="REPLACE">0</span>
													</span>
												</td>

												<td>
													<span class="project-top-10">
														<span class="REPLACE">69</span>
													</span>
												</td>

												<td>
													<span class="project-links">
														<span class="REPLACE">69</span>
													</span>
												</td>

												<td>
													<span class="project-unique">
														<span class="REPLACE">69</span>
													</span>
												</td>

												<td>
													<span class="project-total font-weight-900">
														<span class="REPLACE">69</span>
													</span>
												</td>
											</tr>
											<?php } ?>



							</table>
							
						</div>
				

					<!-- @ELSE NO accounts are available -->
						<p class="color-neutral notification-no-result no-margin-y">Oooh nothing here :/</p>

				</div>
				<div class="module-footer">
					<?php app_get_component('components/pagination'); ?>
				</div>
		</div>



</div>
