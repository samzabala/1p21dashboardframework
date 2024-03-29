<tr class="position-relative">
	<td width="250">
		<!-- @if has contact profile -->
			<a href="<?=app_create_link(array('template'=>'contact-detail')) ?>" class="flex-grid flex-grid-compact flex-grid-no-gutter-y color-inherit">
				<div class="flex-child flex-0-0 hide-mobile">
					<?php app_get_component('components/profile-image','micro') ?>
				</div>
				<div class="flex-child flex-1-1">
					<div class="contact-profile-name text-leading-compact">
						<strong>
							<span class="REPLACE">Miles Edgeworth</span>
						</strong>
						<br>
						<small class="color-neutral contact-profile-title">
							<span class="REPLACE">Partner</span>
						</small>
					</div>
				</div>
			</a>
	</td>
	<td width="250">
		<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Email</span>
		<!-- @if has email -->
			<a href="#m-editor-email" class="text-wrap-ellipsis" data-toggle-modal-default data-modal-title="Compose email">
				<span class="REPLACE">ace@attorney.com</span>
			</a>
		<!-- @else -->
			<span class="color-neutral font-style-italic">
				Not Available
			</span>
	</td>
	<td>
		<span class="hide-nonmobile no-margin-top outreach-table-mobile-label h6 color-neutral">Social</span>
		<?php app_get_component('components/list-social') ?>
	</td>
	<td class="outreach-table-cell-actions">
		
		<?php app_get_component('components/dropdown-actions','',false,array(
			'links' => array(
				'Edit name or description' => 'class="tooltip-purger" data-toggle-modal-board href="#mb-editor-contact" data-modal-title="Edit Contact"',
				'Copy Link' => 'href="#"',
				'Share' => 'href="#"'
			)
		)) ?>
	</td>
</tr>