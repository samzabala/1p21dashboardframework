<span class="btn color-primary color-secondary-hover btn-no-shadow btn-symbol"
	data-toggle="tooltip-click"
	data-tooltip-placement="bottom"
	data-tooltip-center-x="true"
	data-tooltip-allow-interaction="true"
	data-tooltip-width="150px"
	data-tooltip-classes="dashboard-actions-tooltip text-leading-expanded"
	data-tooltip-content="
		<ul class='unstyled no-margin-y'>
		
			<li>
				<a
					href='#share-note-REPLACEWithNoteId'
					data-toggle='modal'
					class='color-inherit color-primary-hover'>
						Share
				</a>
			</li>
			<li>
				<a
					class='color-inherit color-primary-hover js-edit-time-record'
					<?php if(FWAPPS_TEMPLATE == 'project-view'): ?>
						href='#note-REPLACEwithPostTypeID-edit'
						data-toggle='board'
						data-record-id='TASKID'
					<?php else: ?>
						href='#modal-track-time'
						data-toggle='modal'
						data-record-id='TASKID'
					<?php endif; ?>>
						Edit
				</a>
			</li>
			<li>
				<a
					href='#'
					class='color-inherit color-primary-hover js-edit-time-record'
					data-record-id='TASKID'
					data-record-idx='IDX'>
						Delete
				</a>
			</li>
		</ul>"


	
		>
		<i class="symbol symbol-kebab-horizontal"></i>
	</span> 
<?php app_get_component('components/modal-share-notes-with','',false,array(
	'is_in_note_edit_form' => false
)) ?>