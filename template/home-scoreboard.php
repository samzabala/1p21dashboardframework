<div class="module-grid" id="home-scoreboard">
	<!-- average -->
		<div
			id="home-scoreboard-average"
			class="module">

			<div class="module-header module-header-break">

				<h3 class="module-title">Average Rank by SEO</h3>

				<div class="module-functions">

					<?php app_get_component('components/filter-toggle'); ?>

					<?php app_get_component('components/filter-seo'); ?>

					<?php app_get_component('components/filter-date'); ?>

					<?php app_get_component('components/filter-toggle-my'); ?>

				</div>

			</div>

			<div class="module-content flex-xs flex-wrap align-items-center">

				<div class="flex-1-1">
					
					<div class="p">
						<img class="REPLACE" style="margin:0 auto" src="/placeholder/charts/seo/chart-01.png" alt="" />
					</div>


					<ul class="average-legend unstyled flex-grid flex-grid-compact">
						<!--
							@dynamic: li
							@NOTE background-color on .legend will be replaced dynamically based on graph
						-->
						<li class="flex-0-1 flex-col-sm-6 flex-col-md-4 flex-col-lg-2">
								<span class="legend" style="background-color: #fb1818"></span>
								<span class="profile-first-name"><span class="REPLACE">Profile</span></span>
						</li>


						
						<!-- @PLACEHOLDER: DELETE WHEN READY -->

							<?php 
								$placeholder_colors = array(null,'#fec87c','#fb1818','#f7bc00','#006943','#b6e4b6','#0480fe','#a168d9','#fd7f03','#16b900','#01c6ab','#0037b4','#5e01a8','#fe85d6');
							?>
							<?php for($i=1; $i<=(count($placeholder_colors) - 1); $i++){ ?>
								

								
								<li class="flex-0-1 flex-col-sm-6 flex-col-md-4 flex-col-lg-2">
									<span class="legend" style="background-color: <?=$placeholder_colors[$i]?>"></span>
									<span class="profile-first-name"><span class="REPLACE">Profile</span></span>
								</li>
							<?php } ?>



						</ul>


				</div>
			</div>
		</div>
	
	
	<!-- Unique Links -->
		<div id="home-scoreboard-unique" class="module">
			<div class="module-header module-header-break">
				<h3 class="module-title">Unique Links Built by SEO</h3>
				<div class="module-functions">
					
					<?php app_get_component('components/filter-seo'); ?>

					<?php app_get_component('components/filter-date'); ?>

					<?php app_get_component('components/filter-toggle-my'); ?>
				</div>
			</div>
			<div class="module-content flex-xs flex-wrap align-items-center">

				<div class="flex-1-1">
					
					<div class="p">
						<img class="REPLACE" style="margin:0 auto" src="/placeholder/charts/seo/chart-01.png" alt="" />
					</div>


					<ul class="average-legend unstyled no-margin-bottom flex-grid flex-grid-compact">
						<!--
							@dynamic: li
							@NOTE background-color on .legend will be replaced dynamically based on graph
						-->
						<li class="flex-0-1 flex-col-sm-6 flex-col-md-4 flex-col-lg-2">
								<span class="legend" style="background-color: #fb1818"></span>
								<span class="profile-first-name"><span class="REPLACE">Profile</span></span>
						</li>


						<!-- @PLACEHOLDER: DELETE WHEN READY -->

							<?php 
								$placeholder_colors = array(null,'#fec87c','#fb1818','#f7bc00','#006943','#b6e4b6','#0480fe','#a168d9','#fd7f03','#16b900','#01c6ab','#0037b4','#5e01a8','#fe85d6');
							?>
							<?php for($i=1; $i<=(count($placeholder_colors) - 1); $i++){ ?>
								

								
								<li class="flex-0-1 flex-col-sm-6 flex-col-md-4 flex-col-lg-2">
									<span class="legend" style="background-color: <?=$placeholder_colors[$i]?>"></span>
									<span class="profile-first-name"><span class="REPLACE">Profile</span></span>
								</li>
							<?php } ?>

					</ul>

				</div>
			</div>
			<div class="module-footer">
				
			</div>
		</div>

	<!-- accounts  -->
		<div id="home-scoreboard-accounts" class="module">
			<div class="module-content">
				
				<!-- @if accounts  are available -->
					<div class="table-wrapper">

						<table class="text-vertical-align-middle">
							
							<tr class="text-align-center font-size-small">

								<th>#</th>

								<th class="dashboard-table-cell-thumbnail">
									
									<a href="#" class="color-inherit">SEO <i class="symbol symbol-caret-down symbol-caret-toggle-up"></i></a>
								</th>

								<th>Accts</th>

								<th>AVG HR Rank</th>

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


							<!--
								@loop tr
								@dynamic 
								content
									.project-task-name.
									.project-name
									.project-started
									.task-status
							-->
							<tr class="text-align-center">
								
								<td>
									<span class="profile-rank"><span class="REPLACE">01</span></span>
								</td>

								<!-- @NOTE: @dynamic class .background-intensity-REPLACE -->
								<td class="dashboard-table-cell-thumbnail" class="text-align-center">
									<?php app_get_component('components/profile-image-inline');?>
								</td>

								<td>
									<span class="profile-count-account"><span class="REPLACE">333</span></span>
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

								<?php for($i=1; $i<=9; $i++){ ?>
									<tr class="text-align-center">
									
										<td>
											<span class="profile-rank"><span class="REPLACE">01</span></span>
										</td>

										<!-- @NOTE: @dynamic class .background-intensity-REPLACE -->
										<td class="dashboard-table-cell-thumbnail" class="text-align-center">
											<?php app_get_component('components/profile-image-inline');?>
										</td>

										<td>
											<span class="profile-count-account"><span class="REPLACE">333</span></span>
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
			

				<!-- @else NO accounts are available -->
					<p class="color-neutral">Oooh nothing here :/</p>
			</div>

			<div class="module-footer">
				<?php app_get_component('components/pagination')?>
			</div>
		</div>

</div>