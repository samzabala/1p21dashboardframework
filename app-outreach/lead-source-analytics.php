
<div id="outreach-lead-source-analytics-heading" class="flex-grid flex-grid-compact justify-content-space-between align-items-center">
	<div class="flex-col-12  flex-col-md-4">
		<h1 class="no-margin">
			<?= ucwords(str_replace('-',' ',FWAPPS_TEMPLATE)) ?>
		</h1>
	</div>
	<div class="flex-col-xs-12 flex-col-md-8 text-align-right">

		<div class="module-functions">
			
			<div class="module-function">
				<?php app_get_component('components/function-filter-date-range') ?>
			</div>

			<div class="module-function">
				<?php app_get_component('components/module-function-dropdown','',false,array(
					'title' => 'Stage',
					'count' => 1,
					'items' => array(
						'Outreach',
						'Pitched',
						'Proposal Sent',
						'Contract Sent'
					),
				)) ?>
			</div>
	
			<div class="module-function">
	
				<button class="btn btn-primary-outline">
					Export to XLSX
					<input type="file" class="sr-only" />
					
				</button>
			</div>

		</div>
		



	</div>
</div>
<div class="flex-grid flex-grid-fixed">
	<div class="flex-col-xs-12 flex-col-lg-6 flex-lg">
		<div id="outreach-lead-source-analytics-chart" class="module flex-1-1">

			<div class="module-header">
				<h3 class="no-margin-y padding-y">Marketing Channel Performance Chart</h3>
			</div>
			<div class="module-content flex-lg align-items-stretch flex-1-1 flex-direction-column">

				<div style="width: 100%; height: 100%;">


					<?php app_get_component('components/leads-source-chart'); ?>


				</div>


			</div>
		</div>
	</div>
	<div class="flex-col-xs-12 flex-col-lg-6 flex-lg">
		<div id="outreach-lead-source-analytics-table" class="module flex-1-1 align-items-start">

			<div class="module-header">
				<h3 class="no-margin-y padding-y">Marketing Channel Performance</h3>
			</div>
			<div class="table-wrapper">

				<table class="text-vertical-align-middle">
					<tr>
						<th class="text-nowrap text-align-right" width="120">
							Source
						</th>
						<th class="text-nowrap text-align-center" width="50">
							Leads
						</th>
						<th class="text-nowrap text-align-center" width="50">
							MQLs
						</th>
						<th class="text-nowrap text-align-center" width="50">
							% MQLs
						</th>
						<th class="text-nowrap text-align-center" width="50">
							SQLs
						</th>
						<th class="text-nowrap text-align-center" width="50">
							% SQLs
						</th>
						<th class="text-nowrap text-align-center" width="50">
							New Clients
						</th>
						<th class="text-nowrap text-align-center" width="50">
							New Client %
						</th>
						
					</tr>

					<!-- @LOOP row -->
						<tr>
							<td class="text-align-right">
								<span class="REPLACE">Organic</span>
							</td>
							<td class="text-align-center">
								<span class="REPLACE">234</span>
							</td>
							<td class="text-align-center">
								<span class="REPLACE">666</span>
							</td>
							<td class="text-align-center">
								<span class="REPLACE">31%</span>
							</td>
							<td class="text-align-center">
								<span class="REPLACE">666</span>
							</td>
							<td class="text-align-center">
								<span class="REPLACE">69%</span>
							</td>

							<td class="text-align-center">
								<!-- classes to add
									color-primary if positive 
									color-error if negative 
								-->
								<strong class="color-primary">
									<span class="REPLACE">69</span>
								</strong>
							</td>

							<td class="text-align-center">
								<!-- classes to add
									color-primary if positive 
									color-error if negative 
								-->
								<strong class="color-primary">
									<span class="REPLACE">69%</span>
								</strong>
							</td>
							
						</tr>

						<!-- @PLACEHOLDER: DELETE WHEN READY -->
							<?php for($j=1; $j<=19; $j++){ ?>

										
								<tr>
									<td class="text-align-right">
										<span class="REPLACE">Organic</span>
									</td>
									<td class="text-align-center">
										<span class="REPLACE">234</span>
									</td>
									<td class="text-align-center">
										<span class="REPLACE">666</span>
									</td>
									<td class="text-align-center">
										<span class="REPLACE">31%</span>
									</td>
									<td class="text-align-center">
										<span class="REPLACE">666</span>
									</td>
									<td class="text-align-center">
										<span class="REPLACE">69%</span>
									</td>

									<td class="text-align-center">
										<!-- classes to add
											color-primary if positive 
											color-error if negative 
										-->
										<strong class="color-primary">
											<span class="REPLACE">69</span>
										</strong>
									</td>

									<td class="text-align-center">
										<!-- classes to add
											color-primary if positive 
											color-error if negative 
										-->
										<strong class="color-primary">
											<span class="REPLACE">69%</span>
										</strong>
									</td>
									
								</tr>
							
							<?php } ?>
				</table>
			</div>


		</div>
	</div>
</div>
