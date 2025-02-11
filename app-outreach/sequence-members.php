
<div id="outreach-sequences-heading" class="flex-grid justify-content-space-between align-items-center">
	<div class="flex-col-12  flex-col-md-8">
		<h1 class="no-margin">
			Sequence Members:
			<a href="<?= app_create_link(array('template' => 'sequence-detail')) ?>">
				My least favorite sequence
			</a>
		</h1>
	</div>
	<div class="flex-col-12  flex-col-md-4 text-align-right">
		<?php app_get_component('components/function-input-search') ?>
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
			<th class="outreach-table-mobile-th  text-align-center" width="50">
				<label class="input-label">
					<input type="checkbox" class="input-inline">
					<span class="hide-nonmobile">Select all members</span>
				</label>
            </th>
			<th class="outreach-table-cell-actions text-align-center" width="50">
				<div class="bulk-actions position-relative">
					<?php app_get_component('components/modal-actions','',false,array(
						'links' => array(
							'Bulk Add to'
								=> 'href="#m-sequence-addto" data-toggle-modal-default',
							'Bulk Delete from Sequence'
								=> 'href="#"'
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
			<th class="text-nowrap">
				Contact
			</th>
			<th class="text-nowrap text-align-center">
				Date Added
			</th>
			<th class="text-nowrap">
				Steps Completed
			</th>
			<th class="text-nowrap text-align-center">
				Last Action
			</th>
			<th class="text-nowrap" width="250">
				Reply
			</th>
			<th class="outreach-table-mobile-th  outreach-table-cell-actions text-align-center" width="50">
				<div class="bulk-actions position-relative">
					<?php app_get_component('components/modal-actions','',false,array(
						'links' => array(
							'Bulk Add to'
								=> 'href="#m-sequence-addto" data-toggle-modal-default',
							'Bulk Delete from Sequence'
								=> 'href="#"'
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
						<span class="hide-nonmobile">Select Member</span>
					</label>
				</td>
				<td class="outreach-table-cell-actions text-align-center" width="50">
					<div class="company-actions position-relative">
						<?php app_get_component('components/modal-actions','',false,array(
							'links' => array(
								'Edit Details'
									=> 'class="dropdown-purger" href="'.app_create_link(array('template'=>'sequence-detail')).'"',
								'Add to'
									=> 'href="#m-sequence-addto" data-toggle-modal-default',
								'Delete'
									=> 'href="#"'
							)
						)) ?>
					</div>
				</td>
				<td>
					
					<a class="color-inherit" href="<?= app_create_link(array('template'=>'company-detail')) ?>">

						<h5 class="company-name no-margin-y">
							<span class="REPLACE">Wright & Co. Law</span>
						</h5>
				</td>
				<td>
					<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Contact</span>
					<a href="<?= app_create_link(array('template'=>'contact-detail')) ?>">

						<p class="color-theme no-margin-y">
							<!-- @if contact target is known -->
								<span class="REPLACE">Phoenix Wright</span>
							<!-- @else -->
								<span class="color-neutral font-style-italic">[Unknown]</span>
						</p>
						<div class="text-wrap-ellipsis">
							<span class="REPLACE">hello@ace-attorney.com</span>
						</div>
					</a>
				</td>
				<td class="text-align-center">
					<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Date Added</span>
					<span class="REPLACE">04/20/69</span>
				</td>
				<td class="text-nowrap">
					<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Steps Completed</span>
					<!-- /* @NOTE
						- Requires framework tooltip for hover tooltips to render
							`import Tooltip from '../imports/tooltip'`;
					*/ -->
					<span class="color-neutral-lightest"
						data-toggle-tooltip-hover
						data-tooltip-width="min(100%,360px)"
						data-tooltip-classes="padding-small"
						data-tooltip-inverse="true"
						data-tooltip-placement="bottom"
						data-tooltip-content="
							<h3 class='no-margin-top color-inherit'>Scheduled email</h3>
							<p class='no-margin-bottom'>
								This event will fire on <span class='REPLACE'>06/12/98</span> at <span class='REPLACE'>05:00PM</span>
							</p>
						"
					>
						<!-- @loop i: increment based on count($steps) -->
						<!-- @NOTE:
								classes to add:
									`color-primary` => step corresponding to increment is completed

						-->
							<i class="symbol symbol-square"></i>
							<!-- @PLACEHOLDER: Delete when ready -->
							<i class="symbol symbol-square"></i><i class="symbol symbol-square"></i><i class="symbol symbol-square"></i><i class="symbol symbol-square"></i>
					</span>
				</td>
				<td class="text-align-center">
					<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Last Action</span>
					<span class="REPLACE">04/20/69</span>
				</td>
				<td width="250">
					<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Reply</span>
					<!-- @if replied -->
					<span class="tag tag-success">Yes</span>
					<!-- @else -->
						&nbsp;
				</td>
				<td class="outreach-table-cell-actions text-align-center" width="50">
					<div class="company-actions position-relative">
						<?php app_get_component('components/modal-actions','',false,array(
							'links' => array(
								'Edit Details'
									=> 'class="dropdown-purger" href="'.app_create_link(array('template'=>'sequence-detail')).'"',
								'Add to'
									=> 'href="#m-sequence-addto" data-toggle-modal-default',
								'Delete from Sequence'
									=> 'href="#"'
							)
						)) ?>
					</div>
				</td>
			</tr>

				<!-- @PLACEHOLDER: DELETE WHEN READY -->
					<?php for($i=1; $i<=10; $i++){ ?>
						<tr>
							<td class="text-align-center">
								<label class="input-label">
									<input type="checkbox" class="input-inline" name="allCompaniesSelected">
									<span class="hide-nonmobile">Select Member</span>
								</label>
							</td>
							<td class="outreach-table-cell-actions text-align-center" width="50">
								<div class="company-actions position-relative">
									<?php app_get_component('components/modal-actions','',false,array(
										'links' => array(
											'Edit Details'
												=> 'class="dropdown-purger" href="'.app_create_link(array('template'=>'sequence-detail')).'"',
											'Add to'
												=> 'href="#m-sequence-addto" data-toggle-modal-default',
											'Delete'
												=> 'href="#"'
										)
									)) ?>
								</div>
							</td>
							<td>
								
								<a class="color-inherit" href="<?= app_create_link(array('template'=>'company-detail')) ?>">

									<h5 class="company-name no-margin-y">
										<span class="REPLACE">Wrong Only Law</span>
									</h5>
							</td>
							<td>
								<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Contact</span>
								<a href="<?= app_create_link(array('template'=>'contact-detail')) ?>">

									<p class="color-theme no-margin-y">
										<span class="REPLACE">Pigeon Wrong</span>
									</p>
									<div class="text-wrap-ellipsis">
										<span class="REPLACE">bye@asinine-attorney.com</span>
									</div>
								</a>
							</td>
							<td class="text-align-center">
								<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Date Added</span>
								<span class="REPLACE">04/20/69</span>
							</td>
							<td class="text-nowrap">
								<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Steps Completed</span>
								<span class="color-neutral-lightest"
									data-toggle-tooltip-hover
									data-tooltip-width="min(100%,360px)"
									data-tooltip-classes="padding-small"
									data-tooltip-inverse="true"
									data-tooltip-placement="bottom"
									data-tooltip-content="
										<h3 class='no-margin-top color-inherit'>Scheduled email</h3>
										<p class='no-margin-bottom'>
											This event will fire on <span class='REPLACE'>06/12/98</span> at <span class='REPLACE'>05:00PM</span>
										</p>
									"
								>
									<!-- @loop i: increment based on count($steps) -->
									<!-- @NOTE:
											classes to add:
												`color-primary` => step corresponding to increment is completed

									-->
										<i class="symbol symbol-square color-primary"></i><i class="symbol symbol-square color-primary"></i><i class="symbol symbol-square<?= $i > 2 ? ' color-primary' : '' ?>"></i><i class="symbol symbol-square <?= $i % 2 > 0 && $i > 2 ? ' color-primary' : '' ?>"></i>
								</span>
							</td>
							<td class="text-align-center">
								<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Last Action</span>
								<span class="REPLACE">04/20/69</span>
							</td>
							<td width="250">
								<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Reply</span>
								<!-- @if replied -->
								<span class="tag tag-success">Yes</span>
								<!-- @else -->
									&nbsp;
							</td>
							<td class="outreach-table-cell-actions text-align-center" width="50">
								<div class="company-actions position-relative">
									<?php app_get_component('components/modal-actions','',false,array(
										'links' => array(
											'Edit Details'
												=> 'class="dropdown-purger" href="'.app_create_link(array('template'=>'sequence-detail')).'"',
											'Add to'
												=> 'href="#m-sequence-addto" data-toggle-modal-default',
											'Delete from Sequence'
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
									<span class="hide-nonmobile">Select Member</span>
								</label>
							</td>
							<td class="outreach-table-cell-actions text-align-center" width="50">
								<div class="company-actions position-relative">
									<?php app_get_component('components/modal-actions','',false,array(
										'links' => array(
											'Edit Details'
												=> 'class="dropdown-purger" href="'.app_create_link(array('template'=>'sequence-detail')).'"',
											'Add to'
												=> 'href="#m-sequence-addto" data-toggle-modal-default',
											'Delete'
												=> 'href="#"'
										)
									)) ?>
								</div>
							</td>
							<td>
								
								<a class="color-inherit" href="<?= app_create_link(array('template'=>'company-detail')) ?>">

									<h5 class="company-name no-margin-y">
										<span class="REPLACE">Professional Company Name</span>
									</h5>
							</td>
							<td>
								<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Contact</span>
								<a href="<?= app_create_link(array('template'=>'contact-detail')) ?>">

									<p class="color-theme no-margin-y">
										<span class="REPLACE">Pedro Pascal</span>
									</p>
									<div class="text-wrap-ellipsis">
										<span class="REPLACE">coolSluttyDaddy@state-of-mind.com</span>
									</div>
								</a>
							</td>
							<td class="text-align-center">
								<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Date Added</span>
								<span class="REPLACE">04/20/69</span>
							</td>
							<td class="text-nowrap">
								<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Steps Completed</span>
								<span class="color-neutral-lightest"
									data-toggle-tooltip-hover
									data-tooltip-width="min(100%,360px)"
									data-tooltip-classes="padding-small"
									data-tooltip-inverse="true"
									data-tooltip-placement="bottom"
									data-tooltip-content="
										<h3 class='no-margin-top color-inherit'>Scheduled email</h3>
										<p class='no-margin-bottom'>
											This event will fire on <span class='REPLACE'>06/12/98</span> at <span class='REPLACE'>05:00PM</span>
										</p>
									"
								>
									<!-- @loop i: increment based on count($steps) -->
									<!-- @NOTE:
											classes to add:
												`color-primary` => step corresponding to increment is completed

									-->
										<i class="symbol symbol-square color-primary"></i><i class="symbol symbol-square color-primary"></i><i class="symbol symbol-square<?= $i > 2 ? ' color-primary' : '' ?>"></i><i class="symbol symbol-square <?= $i % 2 > 0 && $i > 2 ? ' color-primary' : '' ?>"></i>
								</span>
							</td>
							<td class="text-align-center">
								<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Last Action</span>
								<span class="REPLACE">04/20/69</span>
							</td>
							<td width="250">
								<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Reply</span>
								<!-- @if replied -->
								<span class="tag tag-success">Yes</span>
								<!-- @else -->
									&nbsp;
							</td>
							<td class="outreach-table-cell-actions text-align-center" width="50">
								<div class="company-actions position-relative">
									<?php app_get_component('components/modal-actions','',false,array(
										'links' => array(
											'Edit Details'
												=> 'class="dropdown-purger" href="'.app_create_link(array('template'=>'sequence-detail')).'"',
											'Add to'
												=> 'href="#m-sequence-addto" data-toggle-modal-default',
											'Delete from Sequence'
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
									<span class="hide-nonmobile">Select Member</span>
								</label>
							</td>
							<td class="outreach-table-cell-actions text-align-center" width="50">
								<div class="company-actions position-relative">
									<?php app_get_component('components/modal-actions','',false,array(
										'links' => array(
											'Edit Details'
												=> 'class="dropdown-purger" href="'.app_create_link(array('template'=>'sequence-detail')).'"',
											'Add to'
												=> 'href="#m-sequence-addto" data-toggle-modal-default',
											'Delete'
												=> 'href="#"'
										)
									)) ?>
								</div>
							</td>
							<td>
								
								<a class="color-inherit" href="<?= app_create_link(array('template'=>'company-detail')) ?>">

									<h5 class="company-name no-margin-y">
										<span class="REPLACE">Ngalan na Di Malaswa</span>
									</h5>
							</td>
							<td>
								<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Contact</span>
								<a href="<?= app_create_link(array('template'=>'contact-detail')) ?>">

									<p class="color-theme no-margin-y">
										<span class="REPLACE">Piolo Pascual</span>
									</p>
									<div class="text-wrap-ellipsis">
										<span class="REPLACE">papa.p@abscbnnews.com</span>
									</div>
								</a>
							</td>
							<td class="text-align-center">
								<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Date Added</span>
								<span class="REPLACE">04/20/69</span>
							</td>
							<td class="text-nowrap">
								<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Steps Completed</span>
								<span class="color-neutral-lightest"
									data-toggle-tooltip-hover
									data-tooltip-width="min(100%,360px)"
									data-tooltip-classes="padding-small"
									data-tooltip-inverse="true"
									data-tooltip-placement="bottom"
									data-tooltip-content="
										<h3 class='no-margin-top color-inherit'>Scheduled email</h3>
										<p class='no-margin-bottom'>
											This event will fire on <span class='REPLACE'>06/12/98</span> at <span class='REPLACE'>05:00PM</span>
										</p>
									"
								>
									<!-- @loop i: increment based on count($steps) -->
									<!-- @NOTE:
											classes to add:
												`color-primary` => step corresponding to increment is completed

									-->
										<i class="symbol symbol-square color-primary"></i><i class="symbol symbol-square color-primary"></i><i class="symbol symbol-square<?= $i > 2 ? ' color-primary' : '' ?>"></i><i class="symbol symbol-square <?= $i % 2 > 0 && $i > 2 ? ' color-primary' : '' ?>"></i>
								</span>
							</td>
							<td class="text-align-center">
								<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Last Action</span>
								<span class="REPLACE">04/20/69</span>
							</td>
							<td width="250">
								<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Reply</span>
								<!-- @if replied -->
								<span class="tag tag-success">Yes</span>
								<!-- @else -->
									&nbsp;
							</td>
							<td class="outreach-table-cell-actions text-align-center" width="50">
								<div class="company-actions position-relative">
									<?php app_get_component('components/modal-actions','',false,array(
										'links' => array(
											'Edit Details'
												=> 'class="dropdown-purger" href="'.app_create_link(array('template'=>'sequence-detail')).'"',
											'Add to'
												=> 'href="#m-sequence-addto" data-toggle-modal-default',
											'Delete from Sequence'
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