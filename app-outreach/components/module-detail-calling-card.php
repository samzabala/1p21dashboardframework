<?php
$defs = array(
	//@param post - type of single achuchuchu
	'has_module_title' => false,
	'has_preferred' => false,
	'has_address' => false,
	'has_phone' => false,
	'has_cell' => false,
	'has_fax' => false,
	'has_url' => false,
	'has_undergrad' => false,
	'has_primary' => false,
	'has_social' => false,
	'has_acct_owner' => false,
);

$args = app_parse_args($data,$defs);
?>
<div class="module" >
	<?php if($args['has_module_title']): ?>
	<div class="module-header">
		<div class="module-title">Contact Information</div>
	</div>
	<?php endif; ?>
	<div class="module-content">
		<table class="table-fixed">

		<tbody class="switch">
			<div class="switch-on">
				<!-- @NOT YET: waiting on mockup -->
			</div>
			<div class="switch-off">

				<?php if($args['has_preferred']): ?>
					<tr class="calling-card-preferred">
						<td colspan="4">
							<span class="color-neutral font-weight-700 font-size-small text-leading-compact">
								<span class="REPLACE">Preffered Contact Method</span>
							</span>
						</td>
						<td colspan="6">
							<!-- @if has info -->
								<span class="REPLACE">Phone</span>
							<!-- @else -->
								<span class="color-neutral">N/A</span>
						</td>
					</tr>
				<?php endif; ?>

				<?php if($args['has_address']): ?>
					<tr class="calling-card-address">
						<td colspan="4">
							<span class="color-neutral font-weight-700 font-size-small text-leading-compact">
								<span class="REPLACE">Address</span>
							</span>
						</td>
						<td colspan="6">
							<!-- @if has info -->
								<span class="REPLACE">420 Fake Street<br>San Diego, CA 69696</span>
							<!-- @else -->
								<span class="color-neutral">No info</span>
						</td>
					</tr>
				<?php endif; ?>

				<?php if($args['has_phone']): ?>
					<tr class="calling-card-phone">
						<td colspan="4">
							<span class="color-neutral font-weight-700 font-size-small text-leading-compact">
								<span class="REPLACE">Phone</span>
							</span>
						</td>
						<td colspan="6">
							<!-- @if has info -->
								<a href="tel:REPLACEWithNumber" class="color-inherit">
									<span class="REPLACE">(619) 555 0420</span>
								</a>
							<!-- @else -->
								<span class="color-neutral">No info</span>
						</td>
					</tr>
				<?php endif; ?>

				<?php if($args['has_cell']): ?>
					<tr class="calling-card-cell">
						<td colspan="4">
							<span class="color-neutral font-weight-700 font-size-small text-leading-compact">
								<span class="REPLACE">Cell</span>
							</span>
						</td>
						<td colspan="6">
							<!-- @if has info -->
								<a href="tel:REPLACEWithNumber" class="color-inherit">
									<span class="REPLACE">(619) 555 0420</span>
								</a>
							<!-- @else -->
								<span class="color-neutral">No info</span>
						</td>
					</tr>
				<?php endif; ?>

				<?php if($args['has_fax']): ?>
					<tr class="calling-card-fax">
						<td colspan="4">
							<span class="color-neutral font-weight-700 font-size-small text-leading-compact">
								<span class="REPLACE">Fax</span>
							</span>
						</td>
						<td colspan="6">
							<!-- @if has info -->
								<span class="REPLACE">(619) 555 0420</span>
							<!-- @else -->
								<span class="color-neutral">No info</span>
						</td>
					</tr>
				<?php endif; ?>

				<?php if($args['has_url']): ?>
					<tr class="calling-card-url">
						<td colspan="4">
							<span class="color-neutral font-weight-700 font-size-small text-leading-compact">
								<span class="REPLACE">Phone</span>
							</span>
						</td>
						<td colspan="6">
							<!-- @if has info -->
								<a href="#REPLACEwithurl" class="text-wrap-ellipsis color-inherit">
									<span class="REPLACE">www.domaindomaindomaindomaindomaindomaindomain.com</span>
								</a>
							<!-- @else -->
								<span class="color-neutral">No info</span>
						</td>
					</tr>
				<?php endif; ?>

				<?php if($args['has_undergrad']): ?>
					<tr class="calling-card-undergrad">
						<td colspan="4">
							<span class="color-neutral font-weight-700 font-size-small text-leading-compact">
								<span class="REPLACE">Undergrad</span>
							</span>
						</td>
						<td colspan="6">
							<!-- @if has info -->
								<span class="REPLACE">Ateneo De La Salle</span>
							<!-- @else -->
								<span class="color-neutral">No info</span>
						</td>
					</tr>
				<?php endif; ?>

				<?php if($args['has_primary']): ?>
					<tr class="calling-card-primary">
						<td colspan="4">
							<span class="color-neutral font-weight-700 font-size-small text-leading-compact">
								<span class="REPLACE">Primary</span>
							</span>
						</td>
						<td colspan="6">
							<!-- @if has info -->
								<span class="REPLACE">
									First Name Last Name
								</span>
								<br>
								<a href="#m-editor-email" data-toggle-modal-default class="text-wrap-ellipsis">
									<span class="REPLACE">REPLACE@emailemailemailemailemailemail.com</span>
								</a>
							<!-- @else -->
								<span class="color-neutral">Not Set</span>
						</td>
					</tr>
				<?php endif; ?>

				<?php if($args['has_social']): ?>
					<tr class="calling-card-social">
						<td colspan="4">
							<span class="color-neutral font-weight-700 font-size-small text-leading-compact">
								<span class="REPLACE">Social</span>
							</span>
						</td>
						<td colspan="6">
							<?php app_get_component('components/list-social-invert') ?>
						</td>
					</tr>
				<?php endif; ?>

				<?php if($args['has_acct_owner']): ?>
					<tr class="calling-card-social">
						<td colspan="4">
							<span class="color-neutral font-weight-700 font-size-small text-leading-compact">
								<span class="REPLACE">Acct Owner</span>
							</span>
						</td>
						<td colspan="6">
							<a href="<?=app_create_link(array('template'=>'profile')) ?>" class="color-inherit">
								<?php app_get_component('components/profile-image-micro') ?>
								<span class="REPLACE">
									Profile name
								</span>
							</a>
						</td>
					</tr>
				<?php endif; ?>

			</div>
		</tbody>
		</table>
	</div>
</div>