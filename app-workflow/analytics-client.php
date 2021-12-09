<div id="workflow-analytics-client" class="position-relative">
	<div class="flex-grid flex-grid-compact justify-content-space-between">
		<div class="flex-child">
			<p class="no-margin special-secondary text-clip-background background-gradient">
				Time by Client
			</p>
		</div>
		<div class="flex-child align-items-center position-static  flex-md flex-direction-row-reverse">
			<?php app_get_component('components/filter-dropdown-date-span'); ?>
		</div>
		<div class="flex-col-12">

			<div>
				<?php app_get_component('components/function-filter-analytics-client'); ?>
			</div>
			<!-- 
				@NOTE
				colors from markup
					Development => #0072d7
					Design => #fcbe00
					SEO => #07c48c
					Paid Search => #d14a94
					Video => #5b19aa
					Other => #fe7a31

			-->
			<ul class="unstyled flex-grid flex-grid-compact flex-grid-fixed">
				<li class="flex-col-xs-6 flex-col-md-3 flex-col-lg-2">
					<span class="legend" style="background-color: #0072d7"></span>
					<span>Development</span>
				</li>
				<li class="flex-col-xs-6 flex-col-md-3 flex-col-lg-2">
					<span class="legend" style="background-color: #fcbe00"></span>
					<span>Design</span>
				</li>
				<li class="flex-col-xs-6 flex-col-md-3 flex-col-lg-2">
					<span class="legend" style="background-color: #07c48c"></span>
					<span>SEO</span>
				</li>
				<li class="flex-col-xs-6 flex-col-md-3 flex-col-lg-2">
					<span class="legend" style="background-color: #d14a94"></span>
					<span>Paid Search</span>
				</li>
				<li class="flex-col-xs-6 flex-col-md-3 flex-col-lg-2">
					<span class="legend" style="background-color: #5b19aa"></span>
					<span>Video</span>
				</li>
				<li class="flex-col-xs-6 flex-col-md-3 flex-col-lg-2">
					<span class="legend" style="background-color: #fe7a31"></span>
					<span>Other</span>
				</li>
			</ul>
		</div>
	</div>
</div>

<div id="workflow-analytics-client" class="module">
	<div class="module-content">
	<table class="table analytics-xyz-time">

		<tr>
			<th class="text-nowrap">Client</th>
			<th class="text-nowrap" colspan="2">Total Time</th>
		</tr>
		

		<!-- @LOOP tr -->
			<tr>
				<td class="dashboard-table-cell-max">
					<span class="REPLACE">
						Client Name
					</span>
				</td>

				<td>
					<div class="progress">
						<!-- @LOOP .progress-bar -->
							<!-- 
								@NOTE
									colors from markup
										Development => #0072d7
										Design => #fcbe00
										SEO => #07c48c
										Paid Search => #d14a94
										Video => #5b19aa
										Other => #fe7a31

									ATTRS
										data-tooltip-badge-background => colors from markup

									STYLE
										background-color => colors from markup
										width => type corresponding to colors from markup
							-->
							<div class="progress-bar"
							data-toggle="tooltip-hover"
							data-tooltip-placement="top"
							data-tooltip-badge="true"
							data-tooltip-classes="text-align-center"
							data-tooltip-center-y="true"
							data-tooltip-center-x="true"
							data-tooltip-badge-background="REPLACEWithColor"
							data-tooltip-content="
								<strong><span class='REPLACE'>69hrs 1min</span></strong>
								<br>
								<span><span class='REPLACEWithType'>Task Type</span></span>
							"
								style="
									background-color: REPLACEWithColor;
									width: REPLACEWithWidth;">
							</div>


						<!-- @PLACEHOLDER: Celete when ready -->
						<?php 
							$placeholder_colors = array(
								'Development' => '#0072d7',
								'Design' => '#fcbe00',
								'SEO' => '#07c48c',
								'Paid Search' => '#d14a94',
								'Video' => '#5b19aa',
								'Other' => '#fe7a31',
							);
							$counter = 1;
						?>
						<?php foreach($placeholder_colors as $type=>$color){ ?>
							<div class="progress-bar"
								data-toggle="tooltip-hover"
								data-tooltip-placement="top"
								data-tooltip-badge="true"
								data-tooltip-classes="text-align-center"
								data-tooltip-center-y="true"
								data-tooltip-center-x="true"
								data-tooltip-badge-background="<?=$color ?>"
								data-tooltip-content="
									<strong><span class='REPLACE'>69hrs 1min</span></strong>
									<br>
									<span><span class='REPLACEWithType'><?=$type ?></span></span>
								"
									style="
										background-color: <?=$color ?>;
										width: <?=100/($counter * 3) ?>%;">
							</div>
							<?php 
							$counter++;} ?>
					</div>
				</td>

				<td class="tot-time-legend">
					62 hrs 24 mins
				</td>
			</tr>



				<!-- @PLACEHOLDER: DELETE WHEN READY -->
					<?php for($i=1; $i<=3; $i++){ ?>

						<tr>
							<td class="dashboard-table-cell-max">
								<span class="REPLACE">
									Client Name
								</span>
							</td>

							<td>
								<div class="progress">

									<!-- @PLACEHOLDER: Celete when ready -->
									<?php 
										$i_counter = 5;
									?>
									<?php foreach($placeholder_colors as $type=>$color){ ?>
										<div class="progress-bar"
											data-toggle="tooltip-hover"
											data-tooltip-placement="top"
											data-tooltip-badge="true"
											data-tooltip-classes="text-align-center"
											data-tooltip-center-y="true"
											data-tooltip-center-x="true"
											data-tooltip-badge-background="<?=$color ?>"
											data-tooltip-content="
												<strong><span class='REPLACE'>69hrs 1min</span></strong>
												<br>
												<span><span class='REPLACEWithType'><?=$type ?></span></span>
											"
												style="
													background-color: <?=$color ?>;
													width: <?=100/($i_counter * $i) ?>%;">
										</div>
										<?php 
										$i_counter++;} ?>
								</div>
							</td>

							<td class="tot-time-legend">
								62 hrs 24 mins
							</td>
						</tr>
					<?php } ?>

		</table>
	</div>
</div>