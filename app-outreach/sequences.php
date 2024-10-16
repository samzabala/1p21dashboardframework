
<div id="outreach-sequences-heading" class="flex-grid justify-content-space-between align-items-center margin-bottom">
	<div class="flex-col-12 flex-col-md-8">
		<h1 class="no-margin">
			Sequences
		</h1>
	</div>
	<div class="flex-col-12  flex-col-md-4 text-align-right">
		<div class="module-functions">
		<?php app_get_component('components/function-input-search') ?>
		
			<div class="module-function">
				<a href="#" class="btn btn-primary-outline">
					Upload in bulk&nbsp;<i class="symbol symbol-upload"></i>
				</a>
			</div>
			
			<div class="module-function">
				
				<a href="#" data-toggle-modal-default class="btn btn-primary">
					Add new&nbsp;<i class="symbol symbol-plus"></i>
				</a>
				
				<?php app_get_component('components/modal-form-sequence-addmember') ?>
				</div>

			</div>

		</div>
	</div>
</div>

<div id="outreach-companies" class="module">

	<div class="module-header">
		<div class="module-functions no-margin no-padding flex-xs flex-wrap justify-content-space-between">

			<hr class="hide-nonmobile">
			
			<?php app_get_component('components/pagination-view-per-page') ?>

			<?php app_get_component('components/pagination') ?>
		</div>
	</div>
	<table class="table-fixed outreach-table">
		<tr>
			<th class="outreach-table-mobile-th text-align-center" width="50">
				<label class="input-label">
					<input type="checkbox" class="input-inline">
					<span class="hide-nonmobile">Select all sequences</span>
				</label>
            </th>
			<th class="outreach-table-cell-actions text-align-center" width="50">
				<div class="bulk-actions position-relative">
					<?php app_get_component('components/modal-actions','',false,array(
						'links' => array(
							'Bulk add to'
								=> 'href="#m-sequence-addto" data-toggle-modal-default',
							'Remove Selected'
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
			<th class="filter-sortable text-nowrap">
				<a href="#" class="color-inherit text-decoration-none">
					Name <i class="symbol symbol-caret-down symbol-caret-up-toggle"></i>
				</a>
			</th>
			<th class="text-nowrap text-align-center">
				Members
			</th>
			<th class="text-nowrap text-align-center">
				Emails Sent
			</th>
			<th class="text-nowrap text-align-center">
				Opens
			</th>
			<th class="text-nowrap text-align-center">
				Replies
			</th>
			<th class="text-nowrap" width="250">
				Sharing
			</th>
			<th class="outreach-table-mobile-th outreach-table-cell-actions text-align-center" width="50">
				<div class="bulk-actions position-relative">
					<?php app_get_component('components/modal-actions','',false,array(
						'links' => array(
							'Bulk add to'
								=> 'href="#m-sequence-addto" data-toggle-modal-default',
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
						<span class="hide-nonmobile">Select Sequence</span>
					</label>
				</td>
				<td class="outreach-table-cell-actions text-align-center" width="50">
					<div class="company-actions position-relative">
						<?php app_get_component('components/modal-actions','',false,array(
							'links' => array(
								'Edit Details'
									=> 'class="dropdown-purger" href="'.app_create_link(array('template'=>'sequence-detail')).'"',
								'View Members'
									=> 'class="dropdown-purger" href="'.app_create_link(array('template'=>'sequence-members')).'"',
								'Add to'
									=> 'href="#m-sequence-addto" data-toggle-modal-default',
								'Delete'
									=> 'href="#"'
							)
						)) ?>
					</div>
				</td>
				<td>
					<a class="color-inherit" href="<?= app_create_link(array('template'=>'sequence-detail')) ?>">
						<h5 class="company-name no-margin-y">
							<span class="REPLACE">My very special sequence</span>
						</h5>
					</a>
				</td>
				<td class="text-align-center">
					<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Members</span>
					<!-- @if has memebrs -->
						<a href="<?= app_create_link(array('template'=>'sequence-members')) ?>">
							<span class="REPLACE">69</span>
						</a>
					<!-- @else -->
						<span class="color-neutral">&mdash;</span>
				</td>
				<td class="text-align-center">
					<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Emails Sent</span>
					<!-- @if has emails sent -->
						<span class="REPLACE">666</span>
					<!-- @else -->
						<span class="color-neutral">&mdash;</span>
				</td>
				<td class="text-align-center">
					<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Opens</span>
					<!-- @if has opens -->
						<span class="REPLACE">666</span>
					<!-- @else -->
						<span class="color-neutral">&mdash;</span>
				</td>
				<td class="text-align-center">
					<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Replies</span>
					<!-- @if has replies -->
						<span class="REPLACE">666</span>
					<!-- @else -->
						<span class="color-neutral">&mdash;</span>
				</td>
				<td width="250">
					<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Sharing</span>
					<span class="REPLACE">Private</span>
				</td>
				<td class="outreach-table-cell-actions text-align-center" width="50">
					<div class="company-actions position-relative">
						<?php app_get_component('components/modal-actions','',false,array(
							'links' => array(
								'Edit Details'
									=> 'class="dropdown-purger" href="'.app_create_link(array('template'=>'sequence-detail')).'"',
								'View Members'
									=> 'class="dropdown-purger" href="'.app_create_link(array('template'=>'sequence-members')).'"',
								'Add to'
									=> 'href="#m-sequence-addto" data-toggle-modal-default',
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
									<span class="hide-nonmobile">Select Sequence</span>
								</label>
							</td>
							<td class="outreach-table-cell-actions text-align-center" width="50">
								<div class="company-actions position-relative">
									<?php app_get_component('components/modal-actions','',false,array(
										'links' => array(
											'Edit Details'
												=> 'class="dropdown-purger" href="'.app_create_link(array('template'=>'sequence-detail')).'"',
								'View Members'
									=> 'class="dropdown-purger" href="'.app_create_link(array('template'=>'sequence-members')).'"',
											'Add to'
												=> 'href="#m-sequence-addto" data-toggle-modal-default',
											'Delete'
												=> 'href="#"'
										)
									)) ?>
								</div>
							</td>
							<td>
								<a class="color-inherit" href="<?= app_create_link(array('template'=>'sequence-detail')) ?>">

									<h5 class="company-name no-margin-y">
										<span class="REPLACE">Another special sequence</span>
									</h5>
								</a>
							</td>
							<td class="text-align-center">
								<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Members</span>
								<!-- @if has memebrs -->
									<a href="<?= app_create_link(array('template'=>'sequence-members')) ?>">
										<span class="REPLACE">420</span>
									</a>
								<!-- @else -->
							</td>
							<td class="text-align-center">
								<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Emails Sent</span>
									<span class="REPLACE">1</span>
							</td>
							<td class="text-align-center">
								<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Opens</span>
								<!-- @if has memebrs -->
									<span class="REPLACE">12</span>
								<!-- @else -->
							</td>
							<td class="text-align-center">
								<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Replies</span>
								<!-- @if has memebrs -->
								<!-- @else -->
									<span class="color-neutral">&mdash;</span>
							</td>
							<td width="250">
								<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Sharing</span>
								<span class="REPLACE">Private</span>
							</td>
							<td class="outreach-table-cell-actions text-align-center" width="50">
								<div class="company-actions position-relative">
									<?php app_get_component('components/modal-actions','',false,array(
										'links' => array(
											'Edit Details'
												=> 'class="dropdown-purger" href="'.app_create_link(array('template'=>'sequence-detail')).'"',
								'View Members'
									=> 'class="dropdown-purger" href="'.app_create_link(array('template'=>'sequence-members')).'"',
											'Add to'
												=> 'href="#m-sequence-addto" data-toggle-modal-default',
											'Delete'
												=> 'href="#"'
										)
									)) ?>
								</div>
							</td>
						</tr>
						<tr>
							<td class="text-align-center">
								<label class="input-label">
									<input type="checkbox" class="input-inline" name="allCompaniesSelected">
									<span class="hide-nonmobile">Select Sequence</span>
								</label>
							</td>
							<td class="outreach-table-cell-actions text-align-center" width="50">
								<div class="company-actions position-relative">
									<?php app_get_component('components/modal-actions','',false,array(
										'links' => array(
											'Edit Details'
												=> 'class="dropdown-purger" href="'.app_create_link(array('template'=>'sequence-detail')).'"',
								'View Members'
									=> 'class="dropdown-purger" href="'.app_create_link(array('template'=>'sequence-members')).'"',
											'Add to'
												=> 'href="#m-sequence-addto" data-toggle-modal-default',
											'Delete'
												=> 'href="#"'
										)
									)) ?>
								</div>
							</td>
							<td>
								<a class="color-inherit" href="<?= app_create_link(array('template'=>'sequence-detail')) ?>">

									<h5 class="company-name no-margin-y">
										<span class="REPLACE">Other special sequence</span>
									</h5>
								</a>
							</td>
							<td class="text-align-center">
								<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Members</span>
								<!-- @if has memebrs -->
								<!-- @else -->
									<span class="color-neutral">&mdash;</span>
							</td>
							<td class="text-align-center">
								<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Emails Sent</span>
								<!-- @if has memebrs -->
									<span class="REPLACE">1</span>
								<!-- @else -->
							</td>
							<td class="text-align-center">
								<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Opens</span>
								<!-- @if has memebrs -->
									<span class="REPLACE">420</span>
							</td>
							<td class="text-align-center">
								<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Replies</span>
								<!-- @if has memebrs -->
									<span class="REPLACE">666</span>
								<!-- @else -->
							</td>
							<td width="250">
								<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Sharing</span>
								<span class="REPLACE">Private</span>
							</td>
							<td class="outreach-table-cell-actions text-align-center" width="50">
								<div class="company-actions position-relative">
									<?php app_get_component('components/modal-actions','',false,array(
										'links' => array(
											'Edit Details'
												=> 'class="dropdown-purger" href="'.app_create_link(array('template'=>'sequence-detail')).'"',
								'View Members'
									=> 'class="dropdown-purger" href="'.app_create_link(array('template'=>'sequence-members')).'"',
											'Add to'
												=> 'href="#m-sequence-addto" data-toggle-modal-default',
											'Delete'
												=> 'href="#"'
										)
									)) ?>
								</div>
							</td>
						</tr>
						<tr>
							<td class="text-align-center">
								<label class="input-label">
									<input type="checkbox" class="input-inline" name="allCompaniesSelected">
									<span class="hide-nonmobile">Select Sequence</span>
								</label>
							</td>
							<td class="outreach-table-cell-actions text-align-center" width="50">
								<div class="company-actions position-relative">
									<?php app_get_component('components/modal-actions','',false,array(
										'links' => array(
											'Edit Details'
												=> 'class="dropdown-purger" href="'.app_create_link(array('template'=>'sequence-detail')).'"',
								'View Members'
									=> 'class="dropdown-purger" href="'.app_create_link(array('template'=>'sequence-members')).'"',
											'Add to'
												=> 'href="#m-sequence-addto" data-toggle-modal-default',
											'Delete'
												=> 'href="#"'
										)
									)) ?>
								</div>
							</td>
							<td>
								<a class="color-inherit" href="<?= app_create_link(array('template'=>'sequence-detail')) ?>">

									<h5 class="company-name no-margin-y">
										<span class="REPLACE">My least favorite sequence</span>
									</h5>
								</a>
							</td>
							<td class="text-align-center">
								<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Members</span>
									<span class="color-neutral">&mdash;</span>
							</td>
							<td class="text-align-center">
								<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Emails Sent</span>
									<span class="color-neutral">&mdash;</span>
							</td>
							<td class="text-align-center">
								<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Opens</span>
									<span class="color-neutral">&mdash;</span>
							</td>
							<td class="text-align-center">
								<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Replies</span>
									<span class="color-neutral">&mdash;</span>
							</td>
							<td width="250">
								<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Sharing</span>
								<span class="REPLACE">Others can see and use it</span>
							</td>
							<td class="outreach-table-cell-actions text-align-center" width="50">
								<div class="company-actions position-relative">
									<?php app_get_component('components/modal-actions','',false,array(
										'links' => array(
											'Edit Details'
												=> 'class="dropdown-purger" href="'.app_create_link(array('template'=>'sequence-detail')).'"',
								'View Members'
									=> 'class="dropdown-purger" href="'.app_create_link(array('template'=>'sequence-members')).'"',
											'Add to'
												=> 'href="#m-sequence-addto" data-toggle-modal-default',
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