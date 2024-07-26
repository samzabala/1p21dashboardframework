
<div id="outreach-sales-rep-heading" class="flex-grid justify-content-space-between align-items-center">
	<div class="flex-col-xs-12 flex-col-md-3">
		<h1 class="no-margin">
			Sales Rep Performance Tracking
		</h1>
	</div>
	<div class="flex-col-xs-12 flex-col-sm-9 flex-sm align-items-flex-end justify-content-flex-end">
		<div class="module-functions">
			<div class="module-function">
				<?php app_get_component('components/module-function-dropdown','',false,array(
					'title' => 'User',
					'slug' => 'acctowner',
					'count' => 1,
					'items' => array(
						'All Users',
						'Franky Franklin',
						'Fiona Frost',
						'Donovan Desmond',
						'Miles Medgeworth',
						'Becky Blackbell',
					),
				)) ?>
			</div>

			<div class="module-function">
				<?php app_get_component('components/function-select-month') ?>
			</div>
				
			<div class="module-function">
				<?php app_get_component('components/function-filter-date-range') ?>
			</div>
			<div class="module-function">
				<label class="btn btn-primary-outline">
					Export to CSV
					<input type="file" class="sr-only" />
					
				</label>
			</div>
		</div>
	</div>
</div>

<div id="outreach-contacts" class="module">

	<div class="module-header">
		<div class="module-functions no-margin no-padding flex-xs flex-wrap justify-content-space-between">
			<?php app_get_component('components/pagination-view-per-page') ?>
			<?php app_get_component('components/pagination') ?>
		</div>
	</div>
	<div class="table-wrapper">

		<table class="table-fixed outreach-table">
			<tr>
				
				<th class="text-nowrap text-align-center" width="120">
					<span class="sr-only">Sales Rep</span>&nbsp;
				</th>
				<th class="filter-sortable text-nowrap">
					<a href="#" class="color-inherit text-decoration-none">
						Name <i class="symbol symbol-caret-down symbol-caret-up-toggle"></i>
					</a>
				</th>
				<th class="text-nowrap text-align-center">
					MQLs Given
				</th>
				<th class="text-nowrap text-align-center">
					SQLs accepted
				</th>
				<th class="text-nowrap text-align-center">
					SQLs accepted %
				</th>
				<th class="text-nowrap text-align-center">
					Wins
				</th>
				<th class="text-nowrap text-align-center">
					Losses
				</th>
				<th class="text-nowrap text-align-center">
					MRR Booked
				</th>
				<th class="text-nowrap text-align-center">
					OTR Booked
				</th>
				<th class="text-nowrap text-align-center">
					Avg. MRR Deal Size
				</th>
				<th class="text-nowrap text-align-center">
					YTD win Rate
				</th>
				<th class="text-nowrap text-align-center">
					Pipeline value
				</th>
				<th class="text-nowrap text-align-center">
					100 Score
				</th>
			
			</tr>

			<!-- @LOOP row -->
			<tr>
				<td class="text-align-center" width="120">
					<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Sales Rep</span>
					<a href="<?=app_create_link(array('template' => 'profile')); ?>" class="company-acct-owner text-align-center">
						<?php app_get_component('components/profile-image-micro') ?>
					</a>
				</td>
				<td class="text-nowrap text-align-center">

					<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">MQLs Given</span>
					<span class="REPLACE">1</span>
				</td>
				<td class="text-nowrap text-align-center">

					<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">SQLs accepted</span>
					<span class="REPLACE">0</span>
				</td>
				<td class="text-nowrap text-align-center">

					<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">SQLs accepted %</span>
					<span class="REPLACE">69%</span>
				</td>
				<td class="text-nowrap text-align-center">

					<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Wins</span>
					<span class="REPLACE">0</span>
				</td>
				<td class="text-nowrap text-align-center">

					<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Losses</span>
					<span class="REPLACE">0</span>
				</td>
				<td class="text-nowrap text-align-center">

					<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">MRR Booked</span>
					<span class="REPLACE">$57</span>
				</td>
				<td class="text-nowrap text-align-center">

					<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">OTR Booked</span>
					<span class="REPLACE">$13</span>
				</td>
				<td class="text-nowrap text-align-center">

					<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Avg. MRR Deal Size</span>
					<span class="REPLACE">$0</span>
				</td>
				<td class="text-nowrap text-align-center">

					<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Avg. MRR Deal Size</span>
					<span class="REPLACE">$0</span>
				</td>
				<td class="text-nowrap text-align-center">

					<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">YTD win Rate</span>
					<span class="REPLACE">99%</span>
				</td>
				<td class="text-nowrap text-align-center">

					<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Pipeline value</span>
					<span class="REPLACE">$69</span>
				</td>
				<td class="text-nowrap text-align-center">

					<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">100 Score</span>
					<span class="REPLACE">100</span>
				</td>
			</tr>

				<!-- @PLACEHOLDER: DELETE WHEN READY -->
					<?php for($i=1; $i<=4; $i++){ ?>
										
							<tr>
								<td class="text-align-center" width="120">
									<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Sales Rep</span>
									<a href="<?=app_create_link(array('template' => 'profile')); ?>" class="company-acct-owner text-align-center">
										<?php app_get_component('components/profile-image-micro') ?>
									</a>
								</td>
								<td class="text-nowrap text-align-center">

									<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">MQLs Given</span>
									<span class="REPLACE">1</span>
								</td>
								<td class="text-nowrap text-align-center">

									<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">SQLs accepted</span>
									<span class="REPLACE">0</span>
								</td>
								<td class="text-nowrap text-align-center">

									<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">SQLs accepted %</span>
									<span class="REPLACE">69%</span>
								</td>
								<td class="text-nowrap text-align-center">

									<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Wins</span>
									<span class="REPLACE">0</span>
								</td>
								<td class="text-nowrap text-align-center">

									<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Losses</span>
									<span class="REPLACE">0</span>
								</td>
								<td class="text-nowrap text-align-center">

									<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">MRR Booked</span>
									<span class="REPLACE">$57</span>
								</td>
								<td class="text-nowrap text-align-center">

									<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">OTR Booked</span>
									<span class="REPLACE">$13</span>
								</td>
								<td class="text-nowrap text-align-center">

									<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Avg. MRR Deal Size</span>
									<span class="REPLACE">$0</span>
								</td>
								<td class="text-nowrap text-align-center">

									<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Avg. MRR Deal Size</span>
									<span class="REPLACE">$0</span>
								</td>
								<td class="text-nowrap text-align-center">

									<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">YTD win Rate</span>
									<span class="REPLACE">99%</span>
								</td>
								<td class="text-nowrap text-align-center">

									<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Pipeline value</span>
									<span class="REPLACE">$69</span>
								</td>
								<td class="text-nowrap text-align-center">

									<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">100 Score</span>
									<span class="REPLACE">100</span>
								</td>
							</tr>
					<?php } ?>
		</table>
	</div>
</div>

<div id="outreach-sales-rep-heading" class="flex-grid justify-content-space-between align-items-center margin-large-top">
	<div class="flex-col-xs-12">
		<h1 class="no-margin">
			MRR Sales
		</h1>
	</div>
</div>
<div id="outreach-contacts" class="module">

	<div class="module-header">
		<div class="module-functions no-margin no-padding flex-xs flex-wrap justify-content-space-between">
			<?php app_get_component('components/pagination-view-per-page') ?>
			<?php app_get_component('components/pagination') ?>
		</div>
	</div>
	<div class="table-wrapper">

		<table class="table-fixed outreach-table">
			<tr>
				<th class="text-nowrap text-align-center" width="50">
					<span class="sr-only">Sales Rep</span>&nbsp;
				</th>
				<th class="text-nowrap" width="150">
					Name
				</th>
				<th class="text-nowrap" width="150">
					Company
				</th>
				<th class="text-nowrap" width="100">
					Date
				</th>
				<th class="text-nowrap" width="100">
					Product
				</th>
				<th class="text-nowrap" width="100">
					Monthly Value
				</th>
				<th class="text-nowrap" width="100">
					Annual Value
				</th>
				
			</tr>

			<!-- @LOOP row -->
				<tr>
					<td class="text-align-center" width="120">
						<a href="<?=app_create_link(array('template' => 'profile')); ?>" class="company-acct-owner text-align-center">
							<?php app_get_component('components/profile-image-micro') ?>
						</a>
					</td>
					<td>
						<span class="REPLACE">Itadori Yuji</span>
					</td>
					<td>
						<a class="color-inherit" href="<?= app_create_link(array('template'=>'company-detail')) ?>">

							<h5 class="company-name no-margin-y">
								<span class="REPLACE">Wright & Co. Law</span>
							</h5>
							<div class="company-domain text-wrap-ellipsis">
								<span class="REPLACE">ace-attorney.comace-attorney.comace-attorney.comace-attorney.comace-attorney.comace-attorney.comace-attorney.comace-attorney.comace-attorney.com</span>
							</div>
						</a>
					</td>
					<td>
						<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Date</span>
						<span class="REPLACE">06/12/1989</span>
					</td>
					<td>
						<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Product</span>
						<span class="REPLACE">SEO</span>
					</td>
					<td>
						<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Monthly Value</span>
						<span class="REPLACE">$123,456</span>
					</td>
					<td>
						<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Monthly Value</span>
						<span class="REPLACE">$123,456</span>
					</td>
					
				</tr>

				<!-- @PLACEHOLDER: DELETE WHEN READY -->
				 <?php 
				 $placeholders = array(
					'Fushiguro Megumi',
					'Nobara Kugisaki',
					'Okotsu Yuta',
					'Zenin Maki',
					'Inumaki Toge',
					'Panda',
					'Megan Thee Stallion',
				 )
				 
				 ?>
					<?php foreach($placeholders as $name){ ?>
										
							
							<tr>
								<td class="text-align-center" width="120">
									<a href="<?=app_create_link(array('template' => 'profile')); ?>" class="company-acct-owner text-align-center">
										<?php app_get_component('components/profile-image-micro') ?>
									</a>
								</td>
								<td>
									<span class="REPLACE"><?=$name ?></span>
								</td>
								<td>
									<a class="color-inherit" href="<?= app_create_link(array('template'=>'company-detail')) ?>">

										<h5 class="company-name no-margin-y">
											<span class="REPLACE">Wright & Co. Law</span>
										</h5>
										<div class="company-domain text-wrap-ellipsis">
											<span class="REPLACE">ace-attorney.comace-attorney.comace-attorney.comace-attorney.comace-attorney.comace-attorney.comace-attorney.comace-attorney.comace-attorney.com</span>
										</div>
									</a>
								</td>
								<td>
									<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Date</span>
									<span class="REPLACE">06/12/1989</span>
								</td>
								<td>
									<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Product</span>
									<span class="REPLACE">SEO</span>
								</td>
								<td>
									<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Monthly Value</span>
									<span class="REPLACE">$123,456</span>
								</td>
								<td>
									<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Monthly Value</span>
									<span class="REPLACE">$123,456</span>
								</td>
								
							</tr>

					<?php } ?>
		</table>
	</div>
</div>