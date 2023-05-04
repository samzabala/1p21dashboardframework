
<div id="outreach-templates-heading">
	<div  class="grid grid-flex justify-content-space-between align-items-center">
		<div class="grid-col-xs-12 grid-col-sm-4">
			<h1 class="no-margin">
				Email Templates
			</h1>
		</div>
		<div class="grid-col-xs-12 grid-col-sm-4 text-align-right">
			<?php app_get_component('components/function-input-search') ?>
			<div class="module-function function-add">
				<a  href="#m-editor-template" data-modal-title="New Template" data-toggle-modal-default class="btn btn-primary btn-block-mobile">
					New Template <i class="symbol symbol-plus"></i>
				</a>
			</div>
		</div>
	</div>
</div>



<div id="outreach-templates" class="module">

	<div class="module-header">
		<div class="module-functions no-margin no-padding flex-xs flex-wrap justify-content-space-between">
			<?php app_get_component('components/pagination-view-per-page') ?>
			<?php app_get_component('components/pagination') ?>
		</div>
	</div>

		<table class="table-layout-fixed outreach-table">
			<tr>
				<th class="text-nowrap">Name</th>
				<th class="text-nowrap text-align-center">Date</th>
				<th class="text-nowrap">Type</th>
				<th class="text-nowrap">Subject</th>
				<th class="text-nowrap text-align-center" width="50">&nbsp;<span class="sr-only">Actions</span></th>
			</tr>

			<!-- @loop tr -->
				<tr>
					<td>

						<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Template Name</span>
						<!-- @if has template name -->
							<div class="text-wrap-ellipsis">
								<strong>
									<a class="color-inherit" href="#m-editor-template" data-toggle-modal-default >
									<span class="REPLACE">A template for your template needs</span>
								</a>
								</strong>
							</div>
							<!-- @else -->
								<span class="color-neutral">Untitled</span>
					</td>
					
					<td class="text-align-center" width="120">
						<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Date</span>
							<span class="REPLACE">04/20/69</span>
					</td>

					<td width="200">
						<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Type</span>
							<span class="REPLACE">Template Type</span>
					</td>


					<td>

						<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Subject</span>
						<!-- @if has template name -->
							<div class="text-wrap-ellipsis">
									<span class="REPLACE">HOLD IT! the one who actually committed the crime.. IS YOU!</span>
							<!-- @else -->
								<span class="color-neutral">Untitled</span>
					</td>
					
					<td class="outreach-table-cell-actions text-align-center">
						<div class="email-actions position-relative">
							<?php app_get_component('components/modal-actions','',false,array(
								'links' => array(
									'Edit Template'
										=> 'href="#m-editor-template" data-toggle-modal-default ',
									'Delete'
										=> 'href="#"',
								)
							)) ?>
						</div>
					</td>
				</tr>

					<!-- @PLACEHOLDER: DELETE WHEN READY -->
						<?php for($i=1; $i<=4; $i++){ ?>
							<tr>
								<td>

									<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Template Name</span>
									<!-- @if has template name -->
										<div class="text-wrap-ellipsis">
											<strong>
												<a class="color-inherit" href="#m-editor-template" data-toggle-modal-default >
												<span class="REPLACE">A template for your template needs</span>
											</a>
											</strong>
										</div>
										<!-- @else -->
											<span class="color-neutral">Untitled</span>
								</td>
								
								<td class="text-align-center" width="120">
									<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Date</span>
										<span class="REPLACE">04/20/69</span>
								</td>

								<td width="200">
									<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Type</span>
										<span class="REPLACE">Template Type</span>
								</td>


								<td>

									<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Subject</span>
									<!-- @if has template name -->
										<div class="text-wrap-ellipsis">
												<span class="REPLACE">HOLD IT! the one who actually committed the crime.. IS YOU!</span>
										<!-- @else -->
											<span class="color-neutral">Untitled</span>
								</td>
								
								<td class="outreach-table-cell-actions text-align-center">
									<div class="email-actions position-relative">
										<?php app_get_component('components/modal-actions','',false,array(
											'links' => array(
												'Edit Template'
													=> 'href="#m-editor-template" data-toggle-modal-default ',
												'Delete'
													=> 'href="#"',
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