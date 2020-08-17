<div id="scoreboard-keywords"
class="module-grid">
	<!-- keyword header/stats -->
		<div
			id="scoreboard-keywords-stats"
			class="module">

			<div class="module-header module-header-break align-items-center no-margin-bottom">
			
				<?php app_get_component('components/module-functions-accordion-toggle'); ?>

				<h3 class="module-title">Keywords That
					<!-- @NOTE will change depending on whether lost or improved is being viewed-->
					<span class="REPLACE">
						<?=FWAPPS_TEMPLATE == 'keywords-lost' ? 'Lost' : 'Improved'; ?>
					</span>
					Ranking</h3>
				<div class="flex-1-0 module-functions accordion accordion-mobile">
					<?php app_get_component('components/filter-dropdown-date-compare'); ?>
				</div>
			</div>

			<div class="module-content">
				<div class="flex-grid flex-grid-compact flex-grid-fixed justify-content space-between">

					<!-- Total -->
						<div class="keywords-total flex-col-sm-6 flex-col-md-4 flex-col-lg-2">
							<h5 class="no-margin-top">
								Total
								<span class="REPLACE">
									<?=FWAPPS_TEMPLATE == 'keywords-lost' ? 'Lost' : 'Improved'; ?>
								</span>
							</h5>
							<p class="keywords-total-count special-secondary no-margin-y text-clip-background background-gradient">
								<span class="REPLACE">6,969</span>
							</p>
							<!--
								@NOTE
								.keywords-total-change
									classes to change/add
										`color-success` -> if change is positive or > 0
										`color-error` -> if change is negative or < 0
										`color-neutral`	-> if change is just 0
							-->
							<p class="keywords-total-change h3 no-margin-y
							color-success">
								(<span>
									<span class="REPLACE">+69%</span>
								</span>)
							</p>
						</div>

					
					<!-- homerun -->
						<div class="keywords-homerun flex-col-sm-6 flex-col-md-3 flex-col-lg-2">
							<h5 class="no-margin-top">
								Home Run
								<span class="REPLACE">
									<?=FWAPPS_TEMPLATE == 'keywords-lost' ? 'Lost' : 'Improved'; ?>
								</span>
							</h5>
							<p class="keywords-homerun-count special-secondary no-margin-y text-clip-background background-gradient">
								<span class="REPLACE">6,669</span>
							</p>
							<!--
								@NOTE
								.keywords-homerun-change
									classes to change/add
										`color-success` -> if change is positive or > 0
										`color-error` -> if change is negative or < 0
										`color-neutral`	-> if change is just 0
							-->
							<p class="keywords-homerun-change h3 no-margin-y
							color-error">
								(<span>
									<span class="REPLACE">-69%</span>
								</span>)
							</p>
						</div>

					
					<!-- top10 -->
						<div class="keywords-top10 flex-col-sm-6 flex-col-md-3 flex-col-lg-2">
							<h5 class="no-margin-top">
								<span class="REPLACE">
									<?=FWAPPS_TEMPLATE == 'keywords-lost' ? 'Lost' : 'New'; ?>
								</span> Top 10s
							</h5>
							<p class="keywords-top10-count special-secondary no-margin-y text-clip-background background-gradient">
								<span class="REPLACE">420</span>
							</p>
							<!--
								@NOTE
								.keywords-top10-change
									classes to change/add
										`color-success` -> if change is positive or > 0
										`color-error` -> if change is negative or < 0
										`color-neutral`	-> if change is just 0
							-->
							<p class="keywords-top10-change h3 no-margin-y
							color-success">
								(<span>
									<span class="REPLACE">+420%</span>
								</span>)
							</p>
						</div>


					<!-- hrtop10 -->
						<div class="keywords-hrtop10 flex-col-sm-6 flex-col-md-3 flex-col-lg-2">
							<h5 class="no-margin-top">
								<span class="REPLACE">
									<?=FWAPPS_TEMPLATE == 'keywords-lost' ? 'Lost' : 'New'; ?>
								</span> HR Top 10s
							</h5>
							<p class="keywords-hrtop10-count special-secondary no-margin-y text-clip-background background-gradient">
								<span class="REPLACE">666</span>
							</p>
							<!--
								@NOTE
								.keywords-hrtop10-change
									classes to change/add
										`color-success` -> if change is positive or > 0
										`color-error` -> if change is negative or < 0
										`color-neutral`	-> if change is just 0
							-->
							<p class="keywords-hrtop10-change h3 no-margin-y
							color-neutral">
								(<span>
									<span class="REPLACE">0%</span>
								</span>)
							</p>
						</div>

					


					<!-- featuredsnippets -->
						<div class="keywords-featuredsnippets flex-col-sm-6 flex-col-md-3 flex-col-lg-2">
							<h5 class="no-margin-top">
								Featured Snippets
							</h5>
							<p class="keywords-featuredsnippets-count special-secondary no-margin-y text-clip-background background-gradient">
								<span class="REPLACE">69</span>
							</p>
							<!--
								@NOTE
								.keywords-featuredsnippets-change
									classes to change/add
										`color-success` -> if change is positive or > 0
										`color-error` -> if change is negative or < 0
										`color-neutral`	-> if change is just 0
							-->
							<p class="keywords-featuredsnippets-change h3 no-margin-y
							color-success">
								(<span>
									<span class="REPLACE">+666%</span>
								</span>)
							</p>
						</div>


					<!-- local -->
						<div class="keywords-local flex-col-sm-6 flex-col-md-3 flex-col-lg-2">
							<h5 class="no-margin-top">
								Local
							</h5>
							<p class="keywords-local-count special-secondary no-margin-y text-clip-background background-gradient">
								<span class="REPLACE">69</span>
							</p>
							<!--
								@NOTE
								.keywords-local-change
									classes to change/add
										`color-success` -> if change is positive or > 0
										`color-error` -> if change is negative or < 0
										`color-neutral`	-> if change is just 0
							-->
							<p class="keywords-local-change h3 no-margin-y
							color-error">
								(<span>
									<span class="REPLACE">-420%</span>
								</span>)
							</p>
						</div>
				</div>
			</div>

		</div>


	
	<!-- keyword tables -->
	<div class="module">
		<div class="module-header">
			<div class="module-functions text-align-right">

			<?php app_get_component('components/filter-keywords') ?>
			</div>
		</div>
		<div class="module-content">
			<!-- @if there are entries -->
					
				<div class="table-wrapper">

					<table class="table text-vertical-align-middle">
						<tr>
							<th class="dashboard-table-cell-max text-nowrap" >Keyword</th>
							<th class="text-nowrap">Domain</th>
							<th class="text-nowrap text-align-center">Top 10</th>
							<th class="text-nowrap text-align-center">Previous Rank</th>
							<th class="text-nowrap text-align-center">Current Rank</th>
							<th class="text-nowrap text-align-center">Change</th>
							<th class="dashboard-table-cell-max text-nowrap">Result Type</th>
						</tr>
						
						<!-- @LOOP TR-->
							<tr class="">

								<td>
									<span class="text-leading-compact">
										<span class="row-keywords display-block text-wrap-ellipsis">
											<span class="REPLACE">key word keyword key key word woooooord keyword</span>
										</span>
										<a href="#REPLACE" target="_blank" class="row-client-url display-block no-margin text-wrap-ellipsis">
											<span class="REPLACE">sitedomainurlintheweb.com/something-somthing/oooeee/this-url-is-long</span>
										</a>
									</span>
								</td>



								<td class="dashboard-table-cell-max">
									<span class="text-leading-compact color-inherit color-primary-hover">
										<a href="<?=app_create_link( array('template'=>'project') ); ?>" class="row-client-domain display-block no-margin text-wrap-ellipsis">
											<span class="REPLACE">sitedomainurlintheweb.com</span>
										</a>
									</span>
								</td>


								<td class="text-align-center">
									<span class="text-leading-compact color-inherit color-primary-hover">
										<!-- @NOTE
											.row-is-top10
												classes to add:
													`` => if it is top 10
													`display-none`	=> if NOT in top 10
										-->
										<span class="row-is-top10 color-sucess">
											<i class="symbol symbol-check"></i>
										</span>
									</span>
								</td>

								<td class="text-align-center">
									<span class="row-prev-rank">
										<span class="REPLACE">69</span>
									</span>
								</td>

								<td class="text-align-center">
									<span class="row-current-rank">
										<span class="REPLACE">666</span>
									</span>
								</td>

								<td class="text-align-center">

										<!--
											@NOTE
											.row-change
												classes to change/add
													`color-success` -> if change is positive or > 0
													`color-error` -> if change is negative or < 0
													`color-neutral`	-> if change is just 0
										-->
									<span class="row-change font-weight-700 color-success">
										<span class="REPLACE">+420</span>
									</span>
								</td>

								<td>

										<!--
											@NOTE
											.row-change
												classes to change/add
													`color-success` -> if change is positive or > 0
													`color-error` -> if change is negative or < 0
													`color-neutral`	-> if change is just 0
										-->
									<span class="row-result-type">
										<span class="REPLACE">Organic</span>
									</span>
								</td>

							</tr>



								<!-- @PLACEHOLDER: DELETE WHEN READY -->
									<?php for($i=1; $i<=4; $i++){ ?>
										
										<tr>

											<td>
												<span class="text-leading-compact">
													<span class="row-keywords display-block text-wrap-ellipsis">
														<span class="REPLACE">key word keyword key key word woooooord keyword</span>
													</span>
													<a href="#REPLACE" target="_blank" class="row-client-url display-block no-margin text-wrap-ellipsis">
														<span class="REPLACE">sitedomainurlintheweb.com/something-somthing/oooeee/this-url-is-long</span>
													</a>
												</span>
											</td>



											<td class="dashboard-table-cell-max">
												<span class="text-leading-compact color-inherit color-primary-hover">
													<a href="<?=app_create_link( array('template'=>'project') ); ?>" class="row-client-domain display-block no-margin text-wrap-ellipsis">
														<span class="REPLACE">sitedomainurlintheweb.com</span>
													</a>
												</span>
											</td>


											<td class="text-align-center">
												<span class="text-leading-compact color-inherit color-primary-hover">
													<!-- @NOTE
														.row-is-top10
															classes to add:
																`` => if it is top 10
																`display-none`	=> if NOT in top 10
													-->
													<span class="row-is-top10 btn-small btn btn-symbol btn-success btn-no-interaction display-none">
														<i class="symbol symbol-check"></i>
													</span>
												</span>
											</td>

											<td class="text-align-center">
												<span class="row-prev-rank">
													<span class="REPLACE">69</span>
												</span>
											</td>

											<td class="text-align-center">
												<span class="row-current-rank">
													<span class="REPLACE">666</span>
												</span>
											</td>

											<td class="text-align-center">

													<!--
														@NOTE
														.row-change
															classes to change/add
																`color-success` -> if change is positive or > 0
																`color-error` -> if change is negative or < 0
																`color-neutral`	-> if change is just 0
													-->
												<span class="row-change font-weight-700 color-error">
													<span class="REPLACE">-69</span>
												</span>
											</td>

											<td>

													<!--
														@NOTE
														.row-change
															classes to change/add
																`color-success` -> if change is positive or > 0
																`color-error` -> if change is negative or < 0
																`color-neutral`	-> if change is just 0
													-->
												<span class="row-result-type">
													<span class="REPLACE">Organic</span>
												</span>
											</td>

										</tr>
										
									<?php } ?>





					</table>
				</div>
			<!-- @else no entries -->
				<p class="color-neutral font-style-italic">
					Sorry. no entries available :/
				</p>
		</div>

		<div class="module-footer text-align-right">
			<?php app_get_component('components/pagination') ?>
			<?php app_get_component('components/pagination-view-per-page') ?>
		</div>
	</div>

	
</div>