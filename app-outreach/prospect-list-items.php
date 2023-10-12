
<div id="outreach-contacts-heading" class="flex-grid justify-content-space-between align-items-center">
	<div class="flex-col-12  flex-col-md-8">
		<h1 class="no-margin">
			Custom Prospects List:
			<a href="<?= app_create_link(array('template' => 'prospect-lists')) ?>">
				<span class="REPLACE">List Name</span>
			</a>
		</h1>
	</div>
	<div class="flex-col-xs-12 flex-col-md-4 text-align-right">
		<div class="module-functions">

			
			<?php app_get_component('components/function-input-search') ?>

			<div class="module-function function-add">
				<a href="#" data-toggle-modal-default class="btn btn-primary btn-block-mobile">
					Add New&nbsp;<i class="symbol symbol-plus"></i>
				</a>
				<div class="modal modal-default" data-modal-width="480px" data-modal-title="Add to Prospect List">

				<form action="">
					<ul class="list-group">
						<!-- @if has items -->
							<!-- @loop li -->
								<li>
									<div class="flex-xs align-items-center">
										<div class="flex-1-1">
											<div class="text-wrap-ellispis">
												<span class="REPLACE">Wright & Co Law</span>
											</div>
										</div>
										<div class="flex-0-0">
											<a href="#" title="Delete">
												<i class="symbol symbol-close"></i>
											</a>
										</div>
									</div>
								</li>
									<!-- @PLACEHOLDER -->
									<?php for($i=1; $i<=4; $i++){ ?>
	
										<li>
											<div class="flex-xs align-items-center">
												<div class="flex-1-1">
													<div class="text-wrap-ellispis">
														<span class="REPLACE">Wrong Only Law</span>
													</div>
												</div>
												<div class="flex-0-0">
													<a href="#" title="Delete">
														<i class="symbol symbol-close"></i>
													</a>
												</div>
											</div>
										</li>
									<?php } ?>
	
						<li class="no-border-bottom">
							<input type="text"  name="share_with" id="share_with" class=" input input-single-line input-block" placeholder="Type to select company..." list="companies">
							<datalist id="companies">
								<option value="A Company" />
								<option value="Another Company" />
								<option value="Other Company" />
							</datalist>
						</li>
					</ul>

					<div class="text-align-right">
						<a href="#" data-modal-toggle-default-close class="btn btn-neutral-glassy btn-block-mobile">Cancel</a>
						<span class="spacer">&nbsp;</span>
						<button class="btn btn-primary btn-block-mobile">Add</button>
					</div>

				</form>


				</div>
			</div>
		</div>
	</div>
</div>

<div id="outreach-prospect-lists-items" class="module">

	<div class="module-header">
		<div class="module-functions no-margin no-padding flex-xs flex-wrap justify-content-space-between">

			<hr class="hide-nonmobile">
			
			<?php app_get_component('components/pagination-view-per-page') ?>

			<?php app_get_component('components/pagination') ?>
		</div>
	</div>
	<table class="table-fixed outreach-table">
		<tr>
			<th class="text-align-center" width="50">
				<label class="input-label">
					<input type="checkbox" class="input-inline" name="allCompaniesSelected">
					<span class="hide-nonmobile">Select all prospect lists</span>
				</label>
            </th>
			<th class="outreach-table-cell-actions text-align-center" width="50">
				<div class="bulk-actions position-relative">
					<?php app_get_component('components/modal-actions','',false,array(
						'links' => array(
							'Delete Selected'
								=> 'href="#"',
						)
					)) ?>
				</div>
			</th>
			<!--
				th a
					@NOTE: for sortable column headers
					classes to add

					`` => if column is sorted descending
					`active` => if column is sorted ascending

				th a i
					classes to add
					`display-none` => if column is not set to sort
			-->
			<th class="filter-sortable text-nowrap outreach-table-cell-columnwidth-300">
				<a href="#" class="color-inherit text-decoration-none">
					Name <i class="symbol symbol-caret-down symbol-caret-up-toggle"></i>
				</a>
			</th>
			<th class="text-nowrap outreach-table-cell-columnwidth-300">
				Notes
			</th>
			<th class="text-nowrap text-align-center">
				Stage
			</th>
			<th class="text-nowrap text-align-center" width="200">
				Owner
			</th>
			<th class="text-nowrap text-align-center">
				Tags
			</th>
			<th class="text-nowrap text-align-center">
				Last Activity
			</th>
			<th class="outreach-table-cell-actions text-align-center" width="50">
				<div class="bulk-actions position-relative">
					<?php app_get_component('components/modal-actions','',false,array(
						'links' => array(
							'Delete Selected'
								=> 'href="#"',
						)
					)) ?>
				</div>
			</th>
		</tr>

		<!-- @LOOP row -->
			<tr>
				<td class="text-align-center">
					<label class="input-label">
						<input type="checkbox" class="input-inline" name="allCompaniesSelected">
						<span class="hide-nonmobile">Select company</span>
					</label>
				</td>
				<td class="outreach-table-cell-actions text-align-center" width="50">
					<div class="company-actions position-relative">
						<?php app_get_component('components/modal-actions','',false,array(
							'links' => array(
								'Edit'
									=> 'href="#"',
								'Remove from Prospects List'
									=> 'href="#"',
								'Delete'
									=> 'href="#"'
							)
						)) ?>
					</div>
				</td>
				<td class="outreach-table-cell-columnwidth-300">
					<a class="color-inherit" href="<?= app_create_link(array('template'=>'company-detail')) ?>">

						<h5 class="company-name no-margin-y">
							<span class="REPLACE">Wright & Co. Law</span>
						</h5>
						<div class="company-domain text-wrap-ellipsis">
							<span class="REPLACE">ace-attorney.comace-attorney.comace-attorney.comace-attorney.comace-attorney.comace-attorney.comace-attorney.comace-attorney.comace-attorney.com</span>
						</div>
					</a>
				</td>
				<td class="outreach-table-cell-columnwidth-300">
					<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Notes</span>
					<div class="text-wrap-ellipsis">
						<span class="REPLACE">Notes Notes Notes Notes Notes Notes Notes Notes Notes Notes Notes Notes Notes Notes Notes Notes Notes Notes Notes Notes Notes Notes Notes Notes Notes Notes Notes Notes Notes Notes Notes Notes Notes Notes Notes Notes Notes Notes Notes Notes Notes Notes Notes Notes Notes Notes Notes Notes Notes Notes </span>
					</div>
				</td>
				<td class="text-align-center">
					<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Stage</span>
					<!-- @if has stage -->
						<span class="REPLACE">A stage</span>

				</td>
				<td class="text-align-center" width="120">
					<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Account Owner</span>
					<a href="<?=app_create_link(array('template' => 'profile')); ?>" class="company-acct-owner text-align-center">
						<?php app_get_component('components/profile-image-micro') ?>
					</a>
				</td>
				<td class="text-align-center" width="120">
					<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Tags</span>
					
					<!-- @if has tags -->
						<span class="tag outreach-palette-tag-company">
							<span class="REPLACE">Tag content here</span>
						</span>

					<!-- @else -->
						<p class="color-neutral font-style-italic">
							No tags yet
						</p>
				</td>
				<td class="text-align-center" width="100">
					<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Last Activity</span>
					<span class="REPLACE">02/22/1986</span>
				</td>
				<td class="outreach-table-cell-actions text-align-center" width="50">
					<div class="company-actions position-relative">
						<?php app_get_component('components/modal-actions','',false,array(
							'links' => array(
								'Edit'
									=> 'href="#"',
								'Remove from Prospects List'
									=> 'href="#"',
								'Delete'
									=> 'href="#"'
							)
						)) ?>
					</div>
				</td>
			</tr>

				<!-- @PLACEHOLDER: DELETE WHEN READY -->
					<?php for($i=1; $i<=4; $i++){ ?>
						<tr>
							<td class="text-align-center">
								<label class="input-label">
									<input type="checkbox" class="input-inline" name="allCompaniesSelected">
									<span class="hide-nonmobile">Select company</span>
								</label>
							</td>
							<td class="outreach-table-cell-actions text-align-center" width="50">
								<div class="company-actions position-relative">
									<?php app_get_component('components/modal-actions','',false,array(
										'links' => array(
											'Edit'
												=> 'href="#"',
											'Remove from Prospects List'
												=> 'href="#"',
											'Delete'
												=> 'href="#"'
										)
									)) ?>
								</div>
							</td>
							<td class="outreach-table-cell-columnwidth-300">
								<a class="color-inherit" href="<?= app_create_link(array('template'=>'company-detail')) ?>">

									<h5 class="company-name no-margin-y">
										<span class="REPLACE">Wright & Co. Law</span>
									</h5>
									<div class="company-domain text-wrap-ellipsis">
										<span class="REPLACE">ace-attorney.comace-attorney.comace-attorney.comace-attorney.comace-attorney.comace-attorney.comace-attorney.comace-attorney.comace-attorney.com</span>
									</div>
								</a>
							</td>
							<td class="outreach-table-cell-columnwidth-300">
								<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Notes</span>
								<div class="text-wrap-ellipsis">
									<span class="REPLACE">Notes Notes Notes Notes Notes Notes Notes Notes Notes Notes Notes Notes Notes Notes Notes Notes Notes Notes Notes Notes Notes Notes Notes Notes Notes Notes Notes Notes Notes Notes Notes Notes Notes Notes Notes Notes Notes Notes Notes Notes Notes Notes Notes Notes Notes Notes Notes Notes Notes Notes </span>
								</div>
							</td>
							<td class="text-align-center">
								<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Stage</span>
								<!-- @if has stage -->
									<span class="REPLACE">A stage</span>

							</td>
							<td class="text-align-center" width="120">
								<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Account Owner</span>
								<a href="<?=app_create_link(array('template' => 'profile')); ?>" class="company-acct-owner text-align-center">
									<?php app_get_component('components/profile-image-micro') ?>
								</a>
							</td>
							<td class="text-align-center" width="120">
								<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Tags</span>
								
								<!-- @if has tags -->
									<span class="tag outreach-palette-tag-company">
										<span class="REPLACE">Tag content here</span>
									</span>
							</td>
							<td class="text-align-center" width="100">
								<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Last Activity</span>
								<span class="REPLACE">02/22/1986</span>
							</td>
							<td class="outreach-table-cell-actions text-align-center" width="50">
								<div class="company-actions position-relative">
									<?php app_get_component('components/modal-actions','',false,array(
										'links' => array(
											'Edit'
												=> 'href="#"',
											'Remove from Prospects List'
												=> 'href="#"',
											'Delete'
												=> 'href="#"'
										)
									)) ?>
								</div>
							</td>
						</tr>
					<?php } ?>
	</table>

	<div class="module-footer">
		<div class="module-functions no-margin no-padding flex-xs flex-wrap justify-content-space-between">
			<?php app_get_component('components/pagination-view-per-page') ?>
			<?php app_get_component('components/pagination') ?>
		</div>
	</div>

</div>