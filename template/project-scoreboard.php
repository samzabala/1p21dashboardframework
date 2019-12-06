<div
	id="project-scoreboard"
	class="module-grid"

	data-grid-template-rows="minmax(130px, auto) 100px repeat( auto-fit, minmax(130px, auto) )"
	data-grid-template-columns="repeat( 4, 1fr )"
	data-grid-template-areas="
		'info info info info'
		'linksbuilt onpage average averagehr'
		'ranking ranking ranking ranking'
		'keywords keywords keywords keywords'
		'table table table table'"

	data-grid-template-rows-md="repeat( auto-fit, minmax(130px, auto) )"
	data-grid-template-columns-md="1fr 150px"
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
					<p class="special-secondary background-gradient text-clip-background project-site no-margin"><span class="REPLACE">sitedomainurlintheweb.com</span></p>
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
				class="module module-no-gutter text-align-center"
				data-grid-area="linksbuilt">
				
				<div class="module-content">
					
					<span class="special-primary count-links-built">
						<span class="REPLACE">88</span>
					</span>
					<span class="font-size-small color-neutral">Links Built</span>

				</div>
				
					
			</div>

		<!-- On Page -->
			<div
				id="project-scoreboard-on-page"
				class="module module-no-gutter text-align-center"
				data-grid-area="onpage">
				
				<div class="module-content">
						
					<span class="special-primary count-on-page">
						<span class="REPLACE">32</span>
					</span>
					<span class="font-size-small color-neutral">On-Page</span>

				</div>
				
			</div>

		<!-- Avg -->
			<div
				id="project-scoreboard-average"
				class="module module-no-gutter text-align-center"
				data-grid-area="average">
				
				<div class="module-content">
						
					<span class="special-primary count-average">
						<span class="REPLACE">33.2</span>
					</span>
					<span class="font-size-small color-neutral">Average Rank</span>

				</div>
				
				
			</div>

		<!-- Acg HR -->
			<div
				id="project-scoreboard-averagehr"
				class="module module-no-gutter text-align-center"
				data-grid-area="averagehr">
				
				<div class="module-content">
						
					<span class="special-primary count-averagehr">
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
						<h3 class="module-title">Rankings Chart</h3>
						<div class="module-functions">
							<?php app_get_component('components/filter-dropdown-date'); ?>
						</div>
					</div>
					<div class="module-content flex-xs flex-wrap align-items-center">
						<div class="flex-1-1">
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
					<div class="module-footer">

					</div>
				</div>

		<!-- Ranking -->
			<div
				id="project-scoreboard-keywords"
				class="module"
				data-grid-area="keywords">
				<div class="module-header module-header-break">
					<h3 class="module-title">Rankings Chart</h3>
					<div class="module-functions">
						<?php app_get_component('components/filter-dropdown-keywords'); ?>
						<?php app_get_component('components/filter-dropdown-date'); ?>
						<?php app_get_component('components/filter-toggle-my'); ?>
					</div>
				</div>
				<div class="module-content flex-xs flex-wrap align-items-center">
					<div class="flex-1-1">
						<div class="p text-align-center">
							<img class="REPLACE" style="margin:0 auto" src="/placeholder/charts/seo/chart-09.png" alt="" />
						</div>
						
						
						<ul class="average-legend unstyled no-margin-bottom flex-grid flex-grid-compact">
							<!--
								@dynamic: li
								@NOTE background-color on .legend will be replaced dynamically based on graph
							-->
							<li class="flex-0-1 flex-col-sm-6 flex-col-md-4 flex-col-lg-3">
									<span class="legend" style="background-color: #fb1818"></span>
									<span class="project-keyword"><span class="REPLACE">Keyword</span></span>
							</li>





							<!-- @PLACEHOLDER: DELETE WHEN READY -->

								<?php 
									$placeholder_colors = array(null,'#fec87c','#fb1818','#f7bc00','#006943','#b6e4b6','#0480fe','#a168d9','#fd7f03','#16b900','#01c6ab','#0037b4','#5e01a8','#fe85d6');
								?>
								<?php for($i=1; $i<=(count($placeholder_colors) - 1); $i++){ ?>
									

									
									<li class="flex-0-1 flex-col-sm-6 flex-col-md-4 flex-col-lg-3">
										<span class="legend" style="background-color:<?=$placeholder_colors[$i] ?>"></span>
										<span class="project-keyword"><span class="REPLACE">Keyword</span></span>
									
									</li>
								<?php } ?>
					</div>
				</div>
				<div class="module-footer">

				</div>
			</div>

</div>


	<!-- BITCH -->
	<div
			id="project-scoreboard-"
			class="module"
			data-grid-area="">
			<div class="module-header">
				<h3 class="module-title"></h3>
				<div class="module-functions">

				</div>
			</div>
			<div class="module-content">

			</div>
			<div class="module-footer">

			</div>
		</div>