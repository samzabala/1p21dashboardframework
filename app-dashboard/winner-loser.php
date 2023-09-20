<div class="module p">
	<div class="module-header module-header-break no-margin-bottom">
		<div class="h3 no-margin-y">Winners &amp; Losers Report</div>
		<div class="module-functions">
			<?php app_get_component('components/module-function-vs-date'); ?>
		</div>
	</div>
	<div class="module-content no-padding-bottom">
		<hr class="no-margin-bottom">
		<div class="flex-grid flex-grid-fixed">
			<div class="flex-col-xs-12 flex-col-md-4">
				<div class="background-theme-contrast module">
					<h5 class="no-margin-top">Homerun Keywords improved</h5>
					<div class="special-primary no-margin-top color-primary">
						<span class="REPLACE">8</span>
					</div>
					<h4 class="font-weight-400 no-margin-y">
						<span class="REPLACE">thejandalawfirm.com</span>
					</h4>
				</div>
			</div>
			<div class="flex-col-xs-12 flex-col-md-4">
				<div class="background-theme-contrast module">
					<h5 class="no-margin-top">Net Rankings Improved</h5>
					<div class="special-primary no-margin-top color-primary">
						<span class="REPLACE">133</span>
					</div>
					<h4 class="font-weight-400 no-margin-y">
						<span class="REPLACE">psblaw.com</span>
					</h4>
				</div>
			</div>
			<div class="flex-col-xs-12 flex-col-md-4">
				<div class="background-theme-contrast module">
					<h5 class="no-margin-top">Net Keywords Improved</h5>
					<div class="special-primary no-margin-top color-primary">
						<span class="REPLACE">44</span>
					</div>
					<h4 class="font-weight-400 no-margin-y">
						<span class="REPLACE">dolanzimmerman.com</span>
					</h4>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="module p">
	<div class="module-header">
		<div class="module-functions">
			<?php app_get_component('components/module-function-winner-loser-filter'); ?>
		</div>
	</div>
	<div class="module-content">
		<div class="table-wrapper">
			<table class="table text-vertical-align-middle">
				<tr class="text-nowrap">
					<th class=" text-transform-none ">
						Domain
					</th>
					<th class=" text-transform-none text-align-center">
						<!-- @NOTE a
							@classes to add
								`active` => sort is enabled
						-->
						<a href="#" class="color-inherit">
								TTL KW Tracked
							<i class="color-primary symbol symbol-caret-down symbol-caret-up-toggle"></i>
						</a>
					</th>
					<th class=" text-transform-none text-align-center">
						<!-- @NOTE a
							@classes to add
								`active` => sort is enabled
						-->
						<a href="#" class="color-inherit">
							<span class="color-success">
								# KW +
							</span>
							<i class="color-primary symbol symbol-caret-down symbol-caret-up-toggle"></i>
						</a>
					</th>
					<th class=" text-transform-none text-align-center">
						<!-- @NOTE a
							@classes to add
								`active` => sort is enabled
						-->
						<a href="#" class="color-inherit">
							<span class="color-success">
								HR KW +
							</span>
							<i class="color-primary symbol symbol-caret-down symbol-caret-up-toggle"></i>
						</a>
					</th>
					<th class=" text-transform-none text-align-center">
						<!-- @NOTE a
							@classes to add
								`active` => sort is enabled
						-->
						<a href="#" class="color-inherit">
							<span class="color-error">
								# KW -
							</span>
							<i class="color-primary symbol symbol-caret-down symbol-caret-up-toggle"></i>
						</a>
					</th>
					<th class=" text-transform-none text-align-center">
						<!-- @NOTE a
							@classes to add
								`active` => sort is enabled
						-->
						<a href="#" class="color-inherit">
							<span class="color-error">
								HR KW -
							</span>
							<i class="color-primary symbol symbol-caret-down symbol-caret-up-toggle"></i>
						</a>
					</th>
					<th class=" text-transform-none text-align-center">
						<!-- @NOTE a
							@classes to add
								`active` => sort is enabled
						-->
						<a href="#" class="color-inherit">
							Net Ranking +/-
							<i class="color-primary symbol symbol-caret-down symbol-caret-up-toggle"></i>
						</a>
					</th>
					<th class=" text-transform-none text-align-center">
						<!-- @NOTE a
							@classes to add
								`active` => sort is enabled
						-->
						<a href="#" class="color-inherit">
							Net # KW +/-
							<i class="color-primary symbol symbol-caret-down symbol-caret-up-toggle"></i>
						</a>
					</th>
					<th class=" text-transform-none text-align-center">
						Last 7 Days
					</th>
				</tr>

				<!-- @LOOP tr -->
					<tr>
						<td>
							<a href="#">
								<span class="REPLACE">domain.com</span>
							</a>
						</td>
						<td class="text-align-center">
							<span class="REPLACE">69</span>
						</td>
						<td class="text-align-center color-success">
							<span class="REPLACE">420</span>
						</td>
						<td class="text-align-center color-success">
							<span class="REPLACE">1</span>
						</td>
						<td class="text-align-center color-error">
							<span class="REPLACE">69</span>
						</td>
						<td class="text-align-center color-error">
							<span class="REPLACE">420</span>
						</td>
						<!-- @NOTE td
							classes to add
								`color-success` => if more than 0
								`color-error` => if less than 0
						-->
						<td class="text-align-center color-success">
							<span class="REPLACE">+2</span>
						</td>
						<!-- @NOTE td
							classes to add
								`color-success` => if more than 0
								`color-error` => if less than 0
						-->
						<td class="text-align-center color-error">
							<span class="REPLACE">-3</span>
						</td>
						<td class="text-align-center color-error">

						<div class="flex-xs justify-content-center">
							<div class="flex-0-0">
								<?php app_get_component('components/chart-7-days'); ?>
							</div>
						</div>


						</td>
					</tr>

						<!-- @PLACEHOLDER delete when ready -->
							<?php for($h=0; $h<4; $h++){ ?>
								<?php for($i=1; $i<=5; $i++){ ?>

									<tr>
										<td>
											<a href="#">
												<span class="REPLACE">domain.com</span>
											</a>
										</td>
										<td class="text-align-center">
											<span class="REPLACE">69</span>
										</td>
										<td class="text-align-center color-success">
											<span class="REPLACE">420</span>
										</td>
										<td class="text-align-center color-success">
											<span class="REPLACE">1</span>
										</td>
										<td class="text-align-center color-error">
											<span class="REPLACE">69</span>
										</td>
										<td class="text-align-center color-error">
											<span class="REPLACE">10</span>
										</td>
										<?php if( $i % 2 == 0){ ?> 
											<td class="text-align-center color-success">
												<span class="REPLACE">+2</span>
											</td>
											<td class="text-align-center color-error">
												<span class="REPLACE">-3</span>
											</td>
										<?php } else { ?>
											<td class="text-align-center color-error">
												<span class="REPLACE">-3</span>
											</td>
											<td class="text-align-center color-success">
												<span class="REPLACE">+2</span>
											</td>
										<?php } ?>
										<td class="text-align-center color-error">

											<div class="flex-xs justify-content-center">
												<div class="flex-0-0">
													<?php app_get_component('components/chart-7-days','',false,array(
														'id' => 'chart-'.$h.'-'.$i,
														'has_decreased' => ($i % 2 == 0)
													)); ?>
												</div>
											</div>
										</td>
									</tr>
								<?php } ?>
							<?php } ?>
			</table>
		</div>
	</div>
</div>