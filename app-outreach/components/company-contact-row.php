<tr>
	<tbody class="switch">
		<tr class="switch-off">

		</tr>
		<tr class="switch-on">

		</tr>
	</tbody>
	<td>
		<!-- @if has contact profile -->
			<a href="<?=app_create_link(array('template'=>'contact-detail')) ?>" class="flex-grid flex-grid-compact flex-grid-no-gutter-y color-inherit">
				<div class="flex-child flex-0-0 hide-mobile">
					<?app_get_component('components/profile-image','micro') ?>
				</div>
				<div class="flex-child flex-1-1">
					<div class="contact-profile-name text-leading-compact">
						<span class="REPLACE">Miles Edgewworth</span>
						<br>
						<small class="color-neutral contact-profile-title">
							<span class="REPLACE">Partner</span>
						</small>
					</div>
				</div>
			</a>
		
		<!-- @else -->
			&nbsp;
	</td>
	<td>
		<!-- @if has email -->
			<a href="#mb-editor-email" data-toggle-modal-board data-modal-title="Compose email">
				<span class="REPLACE">ace@attorney.com</span>
			</a>
		<!-- @else -->
			&nbsp;
	</td>
	<td>
		<?app_get_component('components/list-social') ?>
	</td>
	<td>
		
		<?app_get_component('components/tooltip-actions','',false,array(
			'links' => array(
				'Edit name or description' => 'class="tooltip-purger" data-toggle-modal-board href="#mb-editor-contact" data-modal-title="Edit Contact"',
				'Copy Link' => 'href="#"',
				'Share' => 'href="#"'
			)
		)) ?>
	</td>
</tr>