
<div id="outreach-contacts-heading" class="flex-grid justify-content-space-between align-items-center">
	<div class="flex-col-xs-12 flex-col-sm-4">
		<h5 class="no-margin text-transform-uppercase">Sales Tracking</h5>
		<h1 class="no-margin">
			<span class="REPLACE">
				Tom Nook
			</span>
		</h1>
	</div>
	<div class="flex-col-xs-12 flex-col-sm-4 flex-sm flex-direction-column-reverse align-items-flex-end justify-content-center">
		<div class="flex-sm align-items-flex-end margin-small-top">
			<h5 class="no-margin-top text-transform-uppercase color-neutral margin-small-right">Projected Sales:</h5>
			<div class="special-secondary no-margin display-inline-block color-primary">
				<span class="REPLACE">$69,100</span>
			</div>
		</div>
		<hr class="only-xs">
		<?php app_get_component('components/function-select-month') ?>
	</div>
</div>

<div id="outreach-contacts" class="module">

	<div class="module-header">
		<div class="module-functions no-margin no-padding flex-xs flex-wrap justify-content-space-between">
			<?php app_get_component('components/pagination-view-per-page') ?>
			<?php app_get_component('components/function-filter-salestrack') ?>
			<?php app_get_component('components/pagination') ?>
		</div>
	</div>
	<table class="table-fixed outreach-table">
		<tr>
			<th class="text-align-center outreach-table-mobile-th" width="50">
				<form action="">
					<input type="checkbox" class="input-inline" name="select-task-all" class="salestrack-selector" id="select-task-all">
					<label for="select-salestrack-all" class="input-label hide-nonmobile">Select All Sales</label>
				</form>
			</th>
			<th class="text-nowrap" width="200">Company</th>
			<th class="text-nowrap text-align-center" width="100">Status</th>
			<th class="text-nowrap">Product</th>
			<th class="text-nowrap">Monthly Value</th>
			<th class="text-nowrap">Annual Value</th>
			<th class="text-nowrap">Est. Close %</th>
			<th class="text-nowrap">PMV</th>
			<th class="text-nowrap">&nbsp; <span class="sr-only">Deal Options</span></th>
			<th class="text-nowrap text-align-right outreach-table-cell-actions outreach-table-mobile-th" width="50">
				<div class="salestracking-actions position-relative">
					<?php app_get_component('components/dropdown-actions','',false,array(
						'links' => array(
							'Change Status for Selected'
								=> 'href="#m-salestrack-status-all" data-toggle-modal-default ',
							'Delete Selected'
								=> 'href="#"'
						)
					)) ?>
				</div>
				<div class="modal modal-default" id="m-salestrack-status-all" data-modal-width="400px" data-modal-title="Set Status to">
					<form action="">
						<div class="input-wrapper input-wrapper-block input-wrapper-vertical p">
							<label for="" class="input-label sr-only">Change Status To</label>
							<select name="salestrack-status" id="" class="input-select">
								<option value="">Select</option>
								<option value="client">Client</option>
								<option value="lead">Lead</option>
								<option value="prospect">Prospect</option>
							</select>
						</div>
						<button class="btn btn-primary btn-block">Save</button>
					</form>
				</div>
			</th>
		</tr>

		<!-- @LOOP row -->
		<tr>
			<td class="text-align-center" width="50">
				<form action="" class="salestrack-c">
					<input type="checkbox" class="input-inline" name="select-salestrack-REPLACEID" class="salestrack-selector" id="select-salestrack-REPLACEID">
					<label for="select-salestrack-REPLACEID" class="input-label color-neutral hide-nonmobile">Select Sale</label>
				</form>
			</td>
			<td>
				<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Company</span>

				<a href="<?= app_create_link(array('template'=>'company-detail')) ?>" class="salestracking-company-name font-weight-700 color-inherit text-wrap-ellipsis">
					<span class="RELPACE">Wright & Co. Law Offices</span>
				</a>
				<div class="salestracking-company-domain text-wrap-ellipsis">
					<span class="REPLACE">ace-attorney.comace-attorney.comace-attorney.comace-attorney.comace-attorney.comace-attorney.comace-attorney.comace-attorney.comace-attorney.com</span>
				</div>
			</td>
			<td class="text-align-center" width="100">
				<div class="salestracking-clienttype">
					<div class="salestracking-status">
						<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Status</span>
						<!-- @NOTE
							.tag
							classes to add => task status tag
								`tag-error` => Lead 
								`tag-caution` => Hot Prospect
								`tag-primary` => Client
					
						-->
						<span class="tag tag-small tag-error">
							<span class="REPLACE">Lead</span>
						</span>
					</div>
				</div>
			</td>
			<td>
				<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Product</span>
				<!-- @if has product -->
					<span class="salestracking-product">
						<span class="REPLACE">Compete+ Website</span>
					</span>
				<!-- @else -->
					<span class="color-neutral">
						Not Available
					</span>
			</td>
			<td>
				<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Monthly Value</span>
					<!-- @if has monthly -->
						<span class="salestracking-monthly">
							<span class="REPLACE">$69,420</span>
						</span>
					<!-- @else -->
						<span class="color-neutral">
							Not Available
						</span>
			</td>
			<td>
				<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Annual Value</span>
					<!-- @if has annual -->
						<span class="salestracking-annual">
							<span class="REPLACE">$69,420</span>
						</span>
					<!-- @else -->
						<span class="color-neutral">
							Not Available
						</span>
			</td>
			<td>
				<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Est. Close %</span>
					<!-- @if has estclose -->
						<span class="salestracking-estclose">
							<span class="REPLACE">69%</span>
						</span>
					<!-- @else -->
						<span class="color-neutral">
							Not Available
						</span>
			</td>
			<td>
				<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">PMV</span>
					<!-- @if has estclose -->
						<span class="salestracking-estclose">
							<span class="REPLACE">$69,420</span>
						</span>
					<!-- @else -->
						<!-- <span class="color-neutral">
							Not Available
						</span> -->
			</td>
			<td>
				<!--@if not closed yet -->
					<a href="#" class="btn btn-primary">Closed Deal</a>
				<!-- @else -->
					<span class="btn btn-neutral btn-disabled">Closed Deal</span>
			</td>
			<td class="outreach-table-cell-actions text-align-center" width="50">
				<div class="salestracking-actions position-relative">
					<?php app_get_component('components/dropdown-actions','',false,array(
						'links' => array(
							'Edit Details'
								=> 'class="dropdown-purger" href="#m-editor-proposed-products" data-toggle-modal-default data-modal-title="Edit Sale"',
							'Change Status'
								=> 'href="#m-salestrack-status-REPLACEID" data-toggle-modal-default ',
							'Delete'
								=> 'href="#"'
						)
					)) ?>
				</div>
				<div class="modal modal-default" id="m-salestrack-status-REPLACEID" data-modal-width="400px" data-modal-title="Set Status to">
					<form action="">
						<div class="input-wrapper input-wrapper-block input-wrapper-vertical p">
							<label for="" class="input-label sr-only">Change Status To</label>
							<select name="salestrack-status" id="" class="input-select">
								<option value="">Select</option>
								<option value="client">Client</option>
								<option value="lead">Lead</option>
								<option value="prospect">Prospect</option>
							</select>
						</div>
						<button class="btn btn-primary btn-block">Save</button>
					</form>
				</div>
			</td>
		</tr>

			<!-- @PLACEHOLDER: DELETE WHEN READY -->
				<?php for($i=1; $i<=4; $i++){ ?>
					<tr>
						<td class="text-align-center" width="50">
							<form action="" class="salestrack-c">
								<input type="checkbox" class="input-inline" name="select-salestrack-<?= $i; ?>" class="salestrack-selector" id="select-salestrack-<?= $i; ?>">
								<label for="select-salestrack-<?= $i; ?>" class="input-label color-neutral hide-nonmobile">Select Sale</label>
							</form>
						</td>
						<td>
							<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Company</span>

							<a href="<?= app_create_link(array('template'=>'company-detail')) ?>" class="salestracking-company-name font-weight-700 color-inherit text-wrap-ellipsis">
								<span class="RELPACE">Wright & Co. Law Offices</span>
							</a>
							<div class="salestracking-company-domain text-wrap-ellipsis">
								<span class="REPLACE">ace-attorney.comace-attorney.comace-attorney.comace-attorney.comace-attorney.comace-attorney.comace-attorney.comace-attorney.comace-attorney.com</span>
							</div>
						</td>
						<td class="text-align-center" width="100">
							<div class="salestracking-clienttype">
								<div class="salestracking-status">
									<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Status</span>
									<!-- @NOTE
										.tag
										classes to add => task status tag
											`tag-error` => Lead 
											`tag-caution` => Hot Prospect
											`tag-primary` => Client
								
									-->
									<span class="tag tag-small tag-error">
										<span class="REPLACE">Lead</span>
									</span>
								</div>
							</div>
						</td>
						<td>
							<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Product</span>
							<!-- @if has product -->
								<span class="salestracking-product">
									<span class="REPLACE">Compete+ Website</span>
								</span>
							<!-- @else -->
								<!-- <span class="color-neutral">
									Not Available
								</span> -->
						</td>
						<td>
							<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Monthly Value</span>
								<!-- @if has monthly -->
									<span class="salestracking-monthly">
										<span class="REPLACE">$69,420</span>
									</span>
								<!-- @else -->
									<!-- <span class="color-neutral">
										Not Available
									</span> -->
						</td>
						<td>
							<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Annual Value</span>
								<!-- @if has annual -->
									<span class="salestracking-annual">
										<span class="REPLACE">$69,420</span>
									</span>
								<!-- @else -->
									<!-- <span class="color-neutral">
										Not Available
									</span> -->
						</td>
						<td>
							<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Est. Close %</span>
								<!-- @if has estclose -->
									<span class="salestracking-estclose">
										<span class="REPLACE">69%</span>
									</span>
								<!-- @else -->
									<span class="color-neutral">
										Not Available
									</span>
						</td>
						<td>
							<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">PMV</span>
								<!-- @if has estclose -->
									<span class="salestracking-estclose">
										<span class="REPLACE">$69,420</span>
									</span>
								<!-- @else -->
									<!-- <span class="color-neutral">
										Not Available
									</span> -->
						</td>
						<td>
							<!--@if not closed yet -->
								<a href="#" class="btn btn-primary">Closed Deal</a>
							<!-- @else -->
								<!-- <span class="btn btn-neutral btn-disabled">Closed Deal</span> -->
						</td>
						<td class="outreach-table-cell-actions text-align-center" width="50">
							<div class="salestracking-actions position-relative">
								<?php app_get_component('components/dropdown-actions','',false,array(
									'links' => array(
										'Edit Details'
											=> 'class="dropdown-purger" href="#m-editor-proposed-products" data-toggle-modal-default data-modal-title="Edit Sale"',
										'Change Status'
											=> 'href="#m-salestrack-status-'.$i.'" data-toggle-modal-default ',
										'Delete'
											=> 'href="#"'
									)
								)) ?>
							</div>

							<div class="modal modal-default" id="m-salestrack-status-<?=$i ?>" data-modal-width="400px" data-modal-title="Set Status to">
								<form action="">
									<div class="input-wrapper input-wrapper-block input-wrapper-vertical p">
										<label for="" class="input-label sr-only">Change Status To</label>
										<select name="salestrack-status" id="" class="input-select">
											<option value="">Select</option>
											<option value="client">Client</option>
											<option value="lead">Lead</option>
											<option value="prospect">Prospect</option>
										</select>
									</div>
									<button class="btn btn-primary btn-block">Save</button>
								</form>
							</div>
						</td>
					</tr>
				<?php } ?>
	</table>
	<?php app_get_component('components/modal-form-proposed-products') ?>

	<div class="module-footer">
		<div class="module-functions no-margin no-padding flex-xs flex-wrap justify-content-space-between">
			<?php app_get_component('components/pagination-view-per-page') ?>
			<?php app_get_component('components/pagination') ?>
		</div>
	</div>
</div>
