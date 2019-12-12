<div
	id="unique-links"
	class="module-grid">

	<!-- chart -->

		<div
			id="unique-links-chart"
			class="module">

			<div class="module-header module-header-break">
			
			<?php app_get_component('components/module-functions-accordion-toggle'); ?>

			<h3 class="flex-0-0 no-margin special-secondary text-clip-background background-gradient">Unique Links</h3>
				<div class="module-functions accordion accordion-mobile">
					<?php app_get_component('components/filter-dropdown-date'); ?>
				</div>
			</div>

			<div class="module-content align-self-center">

				<div class="p">
						<img class="REPLACE" style="margin:0 auto" src="/PLACEHOLDER/charts/seo/chart-06.png" alt="" />
				</div>

				<ul class="average-legend unstyled flex-grid flex-grid-compact no-margin-bottom">
					
				<!--
						@DYNAMIC: li
						@NOTE background-color on .legend will be replaced dynamically based on graph
					-->
					<li class="flex-child">
							<span class="legend" style="background-color: #fb1818"></span>
							<span class="link-content-type"><span class="REPLACE">Content Type</span></span>
					</li>


					
					<!-- @PLACEHOLDER: DELETE WHEN READY -->

						<?php 
							$placeholder_colors = array(null,'#fec87c','#fb1818','#f7bc00','#006943','#b6e4b6','#0480fe','#a168d9','#fd7f03','#16b900','#01c6ab','#0037b4','#5e01a8','#fe85d6');
						?>
						<?php for($i=1; $i<=(count($placeholder_colors) - 1); $i++){ ?>
							

							
							<li class="flex-child">
								<span class="legend" style="background-color:<?=$placeholder_colors[$i] ?>"></span>
								<span class="link-content-type"><span class="REPLACE">Content Type <?=$i * 13 ?></span></span>
							
							</li>
						<?php } ?>



				</ul>


			</div>

		</div>

	
	<!-- list -->
		<div
			id="unique-links-list"
			class="module">
			<div class="module-header module-header-break">
			
				<?php app_get_component('components/module-functions-accordion-toggle'); ?>

				<h3 class="module-title">
					List of Unique Links
				</h3>
				<div class="module-functions accordion accordion-mobile">
					<?php app_get_component('components/filter-input-search'); ?>
					<?php app_get_component('components/modal-export'); ?>
				</div>
			</div>
			<div class="module-content">
				<!-- @IF associated projects  are available -->
					<div class="table-wrapper">
						<table class="text-vertical-align-middle">
							<tr>
								<th class="dashboard-table-cell-name">Client Name</th>
								
								<th>
									<a href="#" class="dashboard-sort-table-toggle color-inherit">Added &amp; Created <i class="symbol symbol-caret-down symbol-caret-toggle-up"></i></a>
								</th>

								<th class="dashboard-table-cell-url">Page Title &amp; Linking Page</th>
								
								<th>Anchor or Alt</th>
								
								<th>Link Type &amp; Category</th>

								<th class="dashboard-table-cell-thumbnail">SEO</th>
								
								<th class="text-align-center">UR & DR</th>
							</tr>


							<!-- @LOOP -->
							<tr>
								<td class="dashboard-table-cell-name">
									<?php app_get_component('components/project-link') ?>
								</td>

								<td>
									
									<span class="project-added-date">
										<strong>A</strong>
										&nbsp;
										<span class="REPLACE">04-20-69</span>
									</span>

									<br>

									<span class="project-created-date">
										<strong>C</strong>
										&nbsp;
										<span class="REPLACE">04-20-69</span>
									</span>
								</td>

								<td class="dashboard-table-cell-url">
									<span class="project-page-title">
										<span class="REPLACE">Page Title</span>
									</span>
									<a class="project-page-link text-wrap-ellipsis-multiple" href="#REPLACE-project-page-url" target="_blank" >
										<span class="REPLACE">#REPLACE-project-page-url-project-page-url-project-page-url-project-page-url-project-page-url-page-urg-page-url-page-url-page-url</span>
									</a>
								</td>
								
								<td>
									<span class="project-link-title-alt text-wrap-ellipsis-multiple">
										<span class="REPLACE">Possibly an alt, possibly a title. you may never know</span>
									</span>
								</td>

								<td>
									<span class="project-link-type">
										<span class="REPLACE">Type</span>
									</span>
									<br>
									<span class="project-link-category">
										<span class="REPLACE">Categoree</span>
									</span>
								</td>

								<td class="dashboard-table-cell-thumbnail">
									<?php app_get_component('components/profile-image-small') ?>
								</td>

								<td class="text-align-center"> 

									<span class="project-ur">
										<strong>UR</strong>
										<span class="REPLACE">54</span>
									</span>
									<br>
									<span class="project-dr">
										<strong>DR</strong>
										<span class="REPLACE">69</span>
									</span>
									</td>
								</td>
								
							</tr>



								<!-- @PLACEHOLDER duplicate of above delete everything below when ready -->
									<?php for($i=1; $i<=4; $i++){ ?>

										<tr>
											<td class="dashboard-table-cell-name">
												<?php app_get_component('components/project-link') ?>
											</td>

											<td>
												
												<span class="project-added-date">
													<strong>A</strong>
													&nbsp;
													<span class="REPLACE">04-20-69</span>
												</span>

												<br>

												<span class="project-created-date">
													<strong>C</strong>
													&nbsp;
													<span class="REPLACE">04-20-69</span>
												</span>
											</td>

											<td class="dashboard-table-cell-url">
												<span class="project-page-title">
													<span class="REPLACE">Page Title</span>
												</span>
												<a class="project-page-link text-wrap-ellipsis-multiple" href="#REPLACE-project-page-url" target="_blank" >
													<span class="REPLACE">#REPLACE-project-page-url-project-page-url-project-page-url-project-page-url-project-page-url-page-urg-page-url-page-url-page-url</span>
												</a>
											</td>
											
											<td>
												<span class="project-link-title-alt text-wrap-ellipsis-multiple">
													<span class="REPLACE">Possibly an alt, possibly a title. you may never know</span>
												</span>
											</td>

											<td>
												<span class="project-link-type">
													<span class="REPLACE">Type</span>
												</span>
												<br>
												<span class="project-link-category">
													<span class="REPLACE">Categoree</span>
												</span>
											</td>

											<td class="dashboard-table-cell-thumbnail">
												<?php app_get_component('components/profile-image-small') ?>
											</td>

											<td class="text-align-center"> 

												<span class="project-ur">
													<strong>UR</strong>
													<span class="REPLACE"><?= $i * 14 - $i * $i ?></span>
												</span>
												<br>
												<span class="project-dr">
													<strong>DR</strong>
													<span class="REPLACE"><?= $i * 14 - $i * $i * 2 ?></span>
												</span>
												</td>
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