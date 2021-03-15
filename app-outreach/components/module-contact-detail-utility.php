<div class="module module-large" data-grid-area-md="auto / side">
	<div class="text-align-center">
	<div class="p">
		<?php app_get_component('components/profile-image-small') ?>
	</div>

		<h1 class="contact-name no-margin-top">
			<span class="REPLACE">Phoenix Wright</span>
		</h1>
		<div class="font-size-small p">
			<a href="<?=app_create_link(array('template'=>'company-detail')) ?>" class="color-inherit contact-company no-margin">
				Wright &amp; Co Law Offices
			</a>
			<br>
			<a href="#mb-editor-email" data-toggle-modal-board class="contact-email">
				<span class="REPLACE">REPLACE@email.com</span>
			</a>
		</div>
	</div>

	<?php app_get_component('components/toolbar-contact') ?>

	
	<hr class="no-margin-bottom">

	<div class="flex-grid flex-grid-compact">
		<div class="contact-last-contacted flex-col-8">
			<div class="flex-grid flex-grid-compact flex-grid-no-gutter-y">
				<div class="flex-child flex-0-0">
						<span class="btn-no-interaction btn btn-success-glassy btn-round btn-symbol">
							<i class="symbol symbol-calendar-alt"></i>
						</span>
				</div>
				<div class="flex-child flex-1-1">
					<!-- @if last contact available -->
						<span class="font-size-small color-neutral">Last Contacted</span>
						<h5 class="no-margin-y">
							<span class="REPLACE">June 12, 1898</span>
						</h5>
					<!-- @else -->

						<p class="color-neutral no-margin-y">
							<span class="REPLACE">Not contacted yet</span>
						</p>
				</div>
			</div>
		</div>
		<div class="contact-status flex-col-4">

			<span class="font-size-small color-neutral">Status</span>
			<h5 class="no-margin-y">
				<span class="REPLACE">Client</span>
			</h5>
		</div>
	</div>
	
</div>