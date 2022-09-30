
<div id="outreach-contacts-heading" class="flex-grid justify-content-space-between align-items-center">
	<div class="flex-col-xs-12 flex-col-md-4">
		<h1 class="no-margin">Leads</h1>
	</div>
	<div class="flex-col-xs-12 flex-col-md-4 text-align-right">
		<?php app_get_component('components/function-input-search') ?>
		<div class="module-function function-add">
			<a  href="#mb-editor-company" data-modal-title="Add company" data-toggle-modal-board class="btn btn-primary btn-block-mobile">
				Add New <i class="symbol symbol-plus"></i>
			</a>
		</div>
	</div>
</div>

<div id="outreach-companies" class="module">

	<div class="module-header">
		<div class="module-functions no-margin no-padding flex-xs flex-wrap justify-content-space-between">

			<hr class="hide-nonmobile">
			
			<?php app_get_component('components/pagination-view-per-page') ?>
			<?php app_get_component('components/function-filter-companies') ?>

			<?php app_get_component('components/pagination') ?>
		</div>
	</div>
	<table class="table-fixed outreach-table">
		<tr>
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
				Email
			</th>
			<th class="text-nowrap">
				Phone
			</th>
			<th class="text-nowrap" width="85">
				Status
			</th>
			<th class="text-nowrap text-align-center" width="120">
				Owner
			</th>
			<th class="filter-sortable text-nowrap text-align-center" width="120">
				<a href="#" class="color-inherit text-decoration-none">
					Last Activity <i class="symbol symbol-caret-down symbol-caret-up-toggle"></i>
				</a>
			</th>
			<th class="filter-sortable text-nowrap text-align-center" width="120">
				<a href="#" class="color-inherit text-decoration-none">
					Created <i class="symbol symbol-caret-down symbol-caret-up-toggle"></i>
				</a>
			</th>
		</tr>

		<!-- @LOOP row -->
		<tr>
			<td>
                <h5 class="lead-name no-margin-y">
                    <a class="color-inherit" href="<?= app_create_link(array('template'=>'contact-detail')) ?>">
                        <span class="REPLACE">Phoenix Wright</span>
                    </a>
                </h5>
			</td>
            <td>
                <span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Email</span>
                <!-- @if has email -->
                    <a href="#m-editor-email" data-toggle-modal-default class="contact-email color-inherit text-wrap-ellipsis">
                        <span class="RELPACE">naruhodo@ace-attorney.com</span>
                    </a>
                <!-- @else -->
                    <span class="color-neutral">
                        N/A
                    </span>
            </td>
			<td>
				<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Phone</span>
				<!-- @if has phone -->
					<a tel="#REPLACEwithPhoneNumber">
						<span class="RELPACE">(555) 555 - 5555</span>
					</a>
				<!-- @else -->
					<span class="color-neutral">
						Not Available
					</span>
			</td>
			<td class="text-align-center" width="85">
				<div class="lead-status">
					<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Status</span>
					<!-- @NOTE
						.tag
						classes to add => task status tag
							`tag-error` => Overdue 
							`tag-caution` => Pending
							`tag-success` => Completed
				
					-->
					<span class="tag tag-small tag-error">
						<span class="REPLACE">Overdue</span>
					</span>
				</div>
			</td>
			<td class="text-align-center" width="120">
				<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Account Owner</span>
				<a href="<?=app_create_link(array('template' => 'profile')); ?>" class="company-acct-owner text-align-center">
					<?php app_get_component('components/profile-image-micro') ?>
				</a>
			</td>
			<td class="text-align-center" width="120">
				<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Last Activity</span>
				<p class="leads-last-activity">
					<span class="REPLACE">04/20/69</span>
				</p>
			</td>
			<td class="text-align-center" width="100">
                <span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Created</span>
				<p class="leads-created">
					<span class="REPLACE">04/20/69</span>
				</p>
			</td>
		</tr>

			<!-- @PLACEHOLDER: DELETE WHEN READY -->
				<?php for($i=1; $i<=4; $i++){ ?>
                    <tr>
                        <td>
                            <h5 class="lead-name no-margin-y">
                                <a class="color-inherit" href="<?= app_create_link(array('template'=>'contact-detail')) ?>">
                                    <span class="REPLACE">Phoenix Wright</span>
                                </a>
                            </h5>
                        </td>
                        <td>
                            <span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Email</span>
                            <!-- @if has email -->
                                <a href="#m-editor-email" data-toggle-modal-default class="contact-email color-inherit text-wrap-ellipsis">
                                    <span class="RELPACE">naruhodo@ace-attorney.com</span>
                                </a>
                            <!-- @else -->
                                <span class="color-neutral">
                                    N/A
                                </span>
                        </td>
                        <td>
                            <span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Phone</span>
                            <!-- @if has phone -->
                                <a tel="#REPLACEwithPhoneNumber">
                                    <span class="RELPACE">(555) 555 - 5555</span>
                                </a>
                            <!-- @else -->
                                <span class="color-neutral">
                                    Not Available
                                </span>
                        </td>
                        <td class="text-align-center" width="85">
                            <div class="lead-status">
                                <span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Status</span>
                                <!-- @NOTE
                                    .tag
                                    classes to add => task status tag
                                        `tag-error` => Overdue 
                                        `tag-caution` => Pending
                                        `tag-success` => Completed
                            
                                -->
                                <span class="tag tag-small tag-error">
                                    <span class="REPLACE">Overdue</span>
                                </span>
                            </div>
                        </td>
                        <td class="text-align-center" width="120">
                            <span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Account Owner</span>
                            <a href="<?=app_create_link(array('template' => 'profile')); ?>" class="company-acct-owner text-align-center">
                                <?php app_get_component('components/profile-image-micro') ?>
                            </a>
                        </td>
                        <td class="text-align-center" width="120">
                            <span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Last Activity</span>
                            <p class="leads-last-activity">
                                <span class="REPLACE">04/20/69</span>
                            </p>
                        </td>
                        <td class="text-align-center" width="100">
                            <span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Created</span>
                            <p class="leads-created">
                                <span class="REPLACE">04/20/69</span>
                            </p>
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