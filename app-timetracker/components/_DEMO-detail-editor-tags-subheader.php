


<h1 class="margin-large-top padding-large-top">DO NOT COPY OVER - Demo: Editor tags / subheader</h1>



<div class="module margin-large-top">
	<div class="module-header module-header-break padding-top no-margin-bottom padding-bottom align-items-center">
		<div class="flex-1-1 padding-right"> <!-- flex-xs -->
			<p class="h3 color-theme flex-1-1 no-margin-y">
				<input id="project-name" value="Editor tags / subheader when contains info" type="text" placeholder="Click here to add a task name" class="input input-blend input-block" />
			</p>
			<?php if( str_contains(FWAPPS_TEMPLATE,'task-detail')): ?>
				<?php app_get_component('components/detail-tags','',false,array(
					'has_data' => true,
				)); ?>
			<?php endif; ?>
		</div>
		<div class="module-functions flex-0-0 flex-nowrap flex-xs align-items-center justyify-content-space-between">
			<div class="module-function">
				<label class="input-toggle input-toggle-primary input-toggle-reverse margin-right text-nowrap">
					<input type="checkbox" checked class="input"> 
					<span class="input-label input-toggle-label font-weight-700">
							Sync on Wrike
					</span>
				</label>
			</div>
			<div class="module-function">
				<div class="color-neutral text-nowrap">
					Created on <span class="REPLACE">April 20, 1969</span>
				</div>
			</div>

			<!-- @if can do actions -->
				<div class="module-function text-align-right">
					<div class="display-inline-block position-relative">
						<?php app_get_component('components/dropdown-actions','',false,array(
							'links' => array(
								'<i class="symbol symbol-hyperlink"></i> Copy Link'
									=> 'class="dropdown-purger" href="#"',
								'<i class="symbol symbol-delete"></i> Delete'
									=> 'class="dropdown-purger" href="#m-delete-project" data-toggle-modal-default ',
							)
						)) ?>
					</div>
				</div>
		</div>
	</div>
	<div class="module-content no-padding">
		<?php app_get_component('components/detail-subheader','new',false,array(
			'has_data' => true,
			'members' => 6,
		)) ?>
	</div>
</div>

<div class="module margin-large-top">
	<div class="module-header module-header-break padding-top no-margin-bottom padding-bottom align-items-center">
		<div class="flex-1-1 padding-right"> <!-- flex-xs -->
			<p class="h3 color-theme flex-1-1 no-margin-y">
				<span class="REPLACE">Editor tags / subheader cannot be edited</span>
			</p>
			<?php if( str_contains(FWAPPS_TEMPLATE,'task-detail')): ?>
				<?php app_get_component('components/detail-tags','',false,array(
					'can_edit' => false,
				)); ?>
			<?php endif; ?>
		</div>
		<div class="module-functions flex-0-0 flex-nowrap flex-xs align-items-center justyify-content-space-between">
			<div class="module-function">
				<div class="color-neutral text-nowrap">
					Created on <span class="REPLACE">April 20, 1969</span>
				</div>
			</div>

			<!-- @if can do actions -->
				<div class="module-function text-align-right">
					<div class="display-inline-block position-relative">
						<?php app_get_component('components/dropdown-actions','',false,array(
							'links' => array(
								'<i class="symbol symbol-hyperlink"></i> Copy Link'
									=> 'class="dropdown-purger" href="#"',
							)
						)) ?>
					</div>
				</div>
		</div>
	</div>
	<div class="module-content no-padding">
		<?php app_get_component('components/detail-subheader','new',false,array(
			'can_edit' => false,
		)) ?>
	</div>
</div>

<div class="module margin-large-top">
	<div class="module-header module-header-break padding-top no-margin-bottom padding-bottom align-items-center">
		<div class="flex-1-1 padding-right"> <!-- flex-xs -->
			<p class="h3 color-theme flex-1-1 no-margin-y">
				<span class="REPLACE">Editor tags / subheader cannot be edited but has info</span>
			</p>
			<?php if( str_contains(FWAPPS_TEMPLATE,'task-detail')): ?>
				<?php app_get_component('components/detail-tags','',false,array(
					'has_data' => true,
					'can_edit' => false,
				)); ?>
			<?php endif; ?>
		</div>
		<div class="module-functions flex-0-0 flex-nowrap flex-xs align-items-center justyify-content-space-between">
			<div class="module-function">
				<div class="input-label font-weight-700 text-nowrap">
					<span class="REPLACE">Synced to Wrike</span>
				</div>
			</div>
			<div class="module-function">
				<div class="color-neutral text-nowrap">
					Created on <span class="REPLACE">April 20, 1969</span>
				</div>
			</div>

			<!-- @if can do actions -->
				<div class="module-function text-align-right">
					<div class="display-inline-block position-relative">
						<?php app_get_component('components/dropdown-actions','',false,array(
							'links' => array(
								'<i class="symbol symbol-hyperlink"></i> Copy Link'
									=> 'class="dropdown-purger" href="#"',
							)
						)) ?>
					</div>
				</div>
		</div>
	</div>
	<div class="module-content no-padding">
		<?php app_get_component('components/detail-subheader','new',false,array(
			'has_data' => true,
			'can_edit' => false,
			'members' => 6,
		)) ?>
	</div>
</div>



<div class="module margin-large-top">
	<div class="module-header module-header-break padding-top no-margin-bottom padding-bottom align-items-center">
		<div class="flex-1-1 padding-right"> <!-- flex-xs -->
			<p class="h3 color-theme flex-1-1 no-margin-y">
				<span class="REPLACE">Not Billable</span>
			</p>
			<?php if( str_contains(FWAPPS_TEMPLATE,'task-detail')): ?>
				<?php app_get_component('components/detail-tags','',false,array(
					'can_edit' => true,
					// 'has_data' => true,
					'is_billable' => false
				)); ?>
			<?php endif; ?>
		</div>
		<div class="module-functions flex-0-0 flex-nowrap flex-xs align-items-center justyify-content-space-between">
			<div class="module-function">
				<div class="color-neutral text-nowrap">
					Created on <span class="REPLACE">April 20, 1969</span>
				</div>
			</div>

			<!-- @if can do actions -->
				<div class="module-function text-align-right">
					<div class="display-inline-block position-relative">
						<?php app_get_component('components/dropdown-actions','',false,array(
							'links' => array(
								'<i class="symbol symbol-hyperlink"></i> Copy Link'
									=> 'class="dropdown-purger" href="#"',
							)
						)) ?>
					</div>
				</div>
		</div>
	</div>
	<div class="module-content no-padding">
		<?php app_get_component('components/detail-subheader','new',false,array(
				'can_edit' => true,
				// 'has_data' => true,
				'is_billable' => false
		)) ?>
	</div>
</div>
<?php if(FWAPPS_TEMPLATE == 'task-detail'): ?>
	<div class="module margin-large-top">
		<div class="module-header module-header-break padding-top no-margin-bottom padding-bottom align-items-center">
			<div class="flex-1-1 padding-right"> <!-- flex-xs -->
				<p class="h3 color-theme flex-1-1 no-margin-y">
					<input id="project-name" value="2 assignees" type="text" placeholder="Click here to add a task name" class="input input-blend input-block" />
				</p>
				<?php if( str_contains(FWAPPS_TEMPLATE,'task-detail')): ?>
					<?php app_get_component('components/detail-tags','',false,array(
						'has_data' => true,
					)); ?>
				<?php endif; ?>
			</div>
			<div class="module-functions flex-0-0 flex-nowrap flex-xs align-items-center justyify-content-space-between">
				<div class="module-function">
					<!-- @if can edit -->
					
						<label class="input-toggle input-toggle-primary input-toggle-reverse margin-right text-nowrap">
							<input type="checkbox" class="input"> 
							<span class="input-label input-toggle-label font-weight-700">
									Sync on Wrike
							</span>
						</label>
				</div>
				<div class="module-function">
					<div class="color-neutral text-nowrap">
						Created on <span class="REPLACE">April 20, 1969</span>
					</div>
				</div>

				<!-- @if can do actions -->
					<div class="module-function text-align-right">
						<div class="display-inline-block position-relative">
							<?php app_get_component('components/dropdown-actions','',false,array(
								'links' => array(
									'<i class="symbol symbol-hyperlink"></i> Copy Link'
										=> 'class="dropdown-purger" href="#"',
									'<i class="symbol symbol-delete"></i> Delete'
										=> 'class="dropdown-purger" href="#m-delete-project" data-toggle-modal-default ',
								)
							)) ?>
						</div>
					</div>
			</div>
		</div>
		<div class="module-content no-padding">
			<?php app_get_component('components/detail-subheader','new',false,array(
				'has_data' => true,
				'assignees' => 2,
				'members' => 2,
			)) ?>
		</div>
	</div>

	<div class="module margin-large-top">
		<div class="module-header module-header-break padding-top no-margin-bottom padding-bottom align-items-center">
			<div class="flex-1-1 padding-right"> <!-- flex-xs -->
				<p class="h3 color-theme flex-1-1 no-margin-y">
					<input id="project-name" value="edge case assignees" type="text" placeholder="Click here to add a task name" class="input input-blend input-block" />
				</p>
				<?php if( str_contains(FWAPPS_TEMPLATE,'task-detail')): ?>
					<?php app_get_component('components/detail-tags','',false,array(
						'has_data' => true,
					)); ?>
				<?php endif; ?>
			</div>
			<div class="module-functions flex-0-0 flex-nowrap flex-xs align-items-center justyify-content-space-between">
				<div class="module-function">
					<!-- @if can edit -->
						<label class="input-toggle input-toggle-primary input-toggle-reverse margin-right text-nowrap">
							<input type="checkbox" class="input"> 
							<span class="input-label input-toggle-label font-weight-700">
									Sync on Wrike
							</span>
						</label>
				</div>
				<div class="module-function">
					<div class="color-neutral text-nowrap">
						Created on <span class="REPLACE">April 20, 1969</span>
					</div>
				</div>

				<!-- @if can do actions -->
					<div class="module-function text-align-right">
						<div class="display-inline-block position-relative">
							<?php app_get_component('components/dropdown-actions','',false,array(
								'links' => array(
									'<i class="symbol symbol-hyperlink"></i> Copy Link'
										=> 'class="dropdown-purger" href="#"',
									'<i class="symbol symbol-delete"></i> Delete'
										=> 'class="dropdown-purger" href="#m-delete-project" data-toggle-modal-default ',
								)
							)) ?>
						</div>
					</div>
			</div>
		</div>
		<div class="module-content no-padding">
			<?php app_get_component('components/detail-subheader','new',false,array(
				'has_data' => true,
				'assignees' => 8,
				'members' => 5,
			)) ?>
		</div>
	</div>
<?php endif; ?>