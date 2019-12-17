<div
	id="project-scoreboard"
	class="module-grid"

	data-grid-template-rows="minmax(130px, auto) minmax(120px,min-content) repeat( auto-fit, minmax(130px, auto) )"
	data-grid-template-columns="repeat( 2, 1fr )"
	data-grid-template-areas="
		'info info'
		'linksbuilt onpage'
		'average averagehr'
		'ranking ranking'
		'keywords keywords'
		'table table'"

	data-grid-template-rows-md="auto repeat( 4, minmax(150px, 1fr) )"
	data-grid-template-columns-md="1fr 275px"
	data-grid-template-areas-md="
		'info info'
		'ranking linksbuilt'
		'ranking onpage'
		'ranking average'
		'ranking averagehr'
		'keywords keywords'
		'table table'"

	data-grid-template-columns-lg="1fr 260px">
		
	<!-- info -->
		<div
			id="project-scoreboard-info"
			class="module"
			data-grid-area="info">

			<div class="flex-grid flex-grid-fixed flex-grid-no-gutter-y">

				<div class="flex-col-md-7 align-self-center">
					<h3 class="special-secondary background-gradient text-clip-background project-site no-margin text-wrap-ellipsis">
						<span class="REPLACE">sitedomainurlintheweb.com</span>
					</h3>
					<p class="color-neutral no-margin project-name"><span class="REPLACE">Client Name</span></p>
				</div>
				
				<div class="flex-col-md-5 text-align-right flex-xs align-items-center">
					
				
					<div class="project-meta flex-grid flex-grid-compact flex-grid-no-gutter-y flex-1-1 align-items-center">
						<ul class="project-meta-traffic no-margin-bottom unstyled flex-child flex-1-1">

						<!-- Search Traffic -->
							<li>
								<span class="font-size-small color-neutral text-transform-uppercase font-weight-700">Organic Search Traffic:</span>
								<!-- <br class="laptop-only"> -->
								<span class="font-weight-700 project-search-traffic"><span class="REPLACE">0</span></span>
							</li>


						<!-- Search Traffic Change-->
							<li>
								<span class="font-size-small color-neutral text-transform-uppercase font-weight-700">Organic Search Traffic Change:</span>
								<!-- <br class="laptop-only"> -->
								<span class="font-weight-700 project-search-traffic"><span class="REPLACE">0.0%</span></span>
							</li>

						</ul>

						<ul class="project-meta-keywords no-margin-bottom unstyled flex-child flex-1-1">


						<!-- Keywords moved + -->
							<li>
								<span class="font-size-small color-neutral text-transform-uppercase font-weight-700">Keywords Moved <span class="change-indicator color-success">+</span> :</span>
								<!-- <br class="laptop-only"> -->
								<span class="font-weight-700 project-search-traffic"><span class="REPLACE">0</span></span>
							</li>

						<!-- Keywords moved - -->
							<li>
								<span class="font-size-small color-neutral text-transform-uppercase font-weight-700">Keywords Moved <span class="change-indicator color-error">-</span> :</span>
								<!-- <br class="laptop-only"> -->
								<span class="font-weight-700 project-search-traffic"><span class="REPLACE">0</span></span>
							</li>

						</ul>
					</div>
					
				</div>

			</div>

		</div>



	<!-- Links Built -->
		<div
				id="project-scoreboard-links-built"
				class="module module-no-gutter text-align-center text-leading-compact"
				data-grid-area="linksbuilt">
				
				<div class="module-content">
					
					<span class="special-primary no-margin-y project-count-links-built">
						<span class="REPLACE">88</span>
					</span>
					<span class="font-size-small color-neutral">Links Built</span>

				</div>
				
					
			</div>


	<!-- On Page -->

		<div
			id="project-scoreboard-on-page"
			class="module module-no-gutter text-align-center text-leading-compact"
			data-grid-area="onpage">
			
			<span class="module-content">

					
				<span class="special-primary no-margin-y project-count-on-page">
					<span class="REPLACE">32</span>
				</span>
				<span class="font-size-small color-neutral">On-Page</span>

			</span>
			
		</div>


	<!-- Avg -->

		<div
			id="project-scoreboard-average"
			class="module module-no-gutter text-align-center text-leading-compact"
			data-grid-area="average">
			
			<div class="module-content">
					
				<span class="special-primary no-margin-y project-count-average">
					<span class="REPLACE">33.2</span>
				</span>
				<span class="font-size-small color-neutral">Average Rank</span>

			</div>
			
		</div>

	<!-- Acg HR -->
		<div
			id="project-scoreboard-averagehr"
			class="module module-no-gutter text-align-center text-leading-compact"
			data-grid-area="averagehr">
			
			<div class="module-content">
					
				<span class="special-primary no-margin-y project-count-averagehr">
					<span class="REPLACE">1.1</span>
				</span>
				<span class="font-size-small color-neutral">Average HR Rank</span>

			</div>
			
		</div>



	<!-- Ranking -->
		<div
			id="project-scoreboard-ranking"
			class="module"
			data-grid-area="ranking">
			<div class="module-header module-header-break">
			
				<?php app_get_component('components/module-functions-accordion-toggle'); ?>

				<h3 class="module-title">Rankings Chart</h3>
				<div class="module-functions accordion accordion-mobile">
					<?php app_get_component('components/filter-dropdown-date'); ?>
				</div>
			</div>
			<div class="module-content align-self-center">
				<div class="p text-align-center">
					<img class="REPLACE" style="margin:0 auto" src="/placeholder/charts/seo/chart-08.png" alt="" />
				</div>
				<ul class="no-margin text-align-right inline no-margin-bottom">
					<li>
						<span class="legend legend-accent"></span> Average Rank
					</li>

					<li>
						<span class="legend legend-primary"></span> Average HR Rank
					</li>
				</ul>
			</div>
		</div>

	<!-- Ranking -->
		<div
			id="project-scoreboard-keywords"
			class="module"
			data-grid-area="keywords">

			<div class="module-header module-header-break">
				
				<?php app_get_component('components/module-functions-accordion-toggle'); ?>

				<h3 class="module-title">Rankings Chart</h3>
				<div class="module-functions accordion accordion-mobile">
					<?php app_get_component('components/filter-dropdown-keywords'); ?>
					<?php app_get_component('components/filter-dropdown-date'); ?>
					<?php app_get_component('components/filter-toggle-my'); ?>
				</div>
			</div>

			<div class="module-content align-self-center">
				<div class="p text-align-center">
					<img class="REPLACE" style="margin:0 auto" src="/placeholder/charts/seo/chart-09.png" alt="" />
				</div>
				
				
				<ul class="average-legend unstyled flex-grid flex-grid-compact flex-grid-fixed">
					<!--
						@DYNAMIC: li
						@NOTE background-color on .legend will be replaced dynamically based on graph
					-->
					<li class="flex-col-sm-6 flex-col-md-4 flex-col-lg-3">
							<span class="legend" style="background-color: #fb1818"></span>
							<span class="project-keyword"><span class="REPLACE">Keyword</span></span>
					</li>



						<!-- @PLACEHOLDER: DELETE WHEN READY -->

							<?php 
								$placeholder_colors = array(null,'#fec87c','#fb1818','#f7bc00','#006943','#b6e4b6','#0480fe','#a168d9','#fd7f03','#16b900','#01c6ab','#0037b4','#5e01a8','#fe85d6');
							?>
							<?php for($i=1; $i<=(count($placeholder_colors) - 1); $i++){ ?>
								

								
								<li class="flex-col-sm-6 flex-col-md-4 flex-col-lg-3">
									<span class="legend" style="background-color:<?=$placeholder_colors[$i] ?>"></span>
									<span class="project-keyword"><span class="REPLACE">Keyword</span></span>
								
								</li>
							<?php } ?>



				</ul>

			</div>
		</div>





	<!-- TABLE -->
		<div
			id="project-scoreboard-table"
			class="module"
			data-grid-area="table">
			<div class="module-content">

			<!-- @IF associated projects  are available -->
				<div class="table-wrapper">
					<table class="text-vertical-align-middle">
						<tr>
							<th>Keyword</th>
							<th class="dashboard-table-cell-url">Ranking Page</th>
							<th class="text-align-center">Map Result</th>
							<th class="text-align-center">Prev 90</th>
							<th class="text-align-center">Prev 60</th>
							<th class="text-align-center">Prev 30</th>
							<th>Last Checked</th>
							<th>Change (30 Days)</th>

							<th class="dashboard-table-cell-thumbnail">Rank</th>
						</tr>


						<tr>
							<td>
								<div class="project-query">
									<span class="REPLACE">Keyword</span>
								</div>
							</td>
							<td class="dashboard-table-cell-url">
								
								<a class="text-wrap-break project-page-link text-wrap-ellipsis-multiple" href="#REPLACE-project-page-url" target="_blank" >
									<span class="REPLACE">#REPLACE-project-page-url-project-page-url-project-page-url-project-page-url-project-page-url-page-urg-page-url-page-url-page-url</span>
								</a>
							</td>
							<td class="text-align-center">
								<a class="font-size-large color-neutral project-map-result" href="#REPLACE-project-map-result-url" target="_blank" >
									<i class="symbol symbol-map"></i>
								</a>
							</td>
							<td class="text-align-center">
								<span class="project-count-prev-90">
									<span class="REPLACE">11</span>
								</span>
							</td>
							<td class="text-align-center">
								<span class="project-count-prev-90">
									<span class="REPLACE">15</span>
								</span>
							</td>
							<td class="text-align-center">
								<span class="project-count-prev-90">
									<span class="REPLACE">69</span>
								</span>
							</td>
							<td>
								<span class="project-last-checked-date">
									<span class="REPLACE">04-20-69</span>
								</span>
							</td>
							<td>
								<!--
									@DYNAMIC
										classes
											color-error | color-success
											- changes based on .project-count-change value
								-->
								<span class="project-count-change color-error font-weight-700">
									<span class="REPLACE">-1</span>
								</span>
							</td>

							<td class="dashboard-table-cell-thumbnail">
								<span class="thumbnail thumbnail-small background-intensity-5">
								<span class="project-rank thumbnail-text">
									<span class="REPLACE">69</span>
								</span>
								</span>
							</td>
						</tr>



							<!-- @PLACEHOLDER duplicate of above delete everything below when ready -->
								<?php for($i=1; $i<=4; $i++){ ?>
									<tr>
										<td>
											<div class="project-query">
												<span class="REPLACE">Keyword</span>
											</div>
										</td>
										<td class="dashboard-table-cell-url">
											
											<a class="text-wrap-break project-page-link text-wrap-ellipsis-multiple" href="#REPLACE-project-page-url" target="_blank" >
												<span class="REPLACE">#REPLACE-project-page-url-project-page-url-project-page-url-project-page-url-project-page-url-page-urg-page-url-page-url-page-url</span>
											</a>
										</td>
										<td class="text-align-center">
											<a class="font-size-large color-neutral project-map-result" href="#REPLACE-project-map-result-url" target="_blank" >
												<i class="symbol symbol-map"></i>
											</a>
										</td>
										<td class="text-align-center">
											<span class="project-count-prev-90">
												<span class="REPLACE">11</span>
											</span>
										</td>
										<td class="text-align-center">
											<span class="project-count-prev-90">
												<span class="REPLACE">15</span>
											</span>
										</td>
										<td class="text-align-center">
											<span class="project-count-prev-90">
												<span class="REPLACE">69</span>
											</span>
										</td>
										<td>
											<span class="project-last-checked-date">
												<span class="REPLACE">04-20-69</span>
											</span>
										</td>
										<td>
											<!--
												@DYNAMIC
													classes
														color-error | color-success
														- changes based on .project-count-change value
											-->
											<span class="project-count-change color-success font-weight-700">
												<span class="REPLACE">+<?=$i ?></span>
											</span>
										</td>

										<td class="dashboard-table-cell-thumbnail">
											<span class="thumbnail thumbnail-small background-intensity-<?=$i ?>">
											<span class="project-rank thumbnail-text">
												<span class="REPLACE"><?= $i * 10 ?></span>
											</span>
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