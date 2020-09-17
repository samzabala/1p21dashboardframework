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
					href='#modal-share-with'
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

<div class="modal" id="modal-share-with" data-modal-width="600px" data-modal-title="Share">



		<!-- @if user has rights to share this notes -->
		<form method="get">

			<div class="input-wrapper input-wrapper-vertical input-wrapper-block p">
				<label for="email" class="input-label">Share with:</label>
				<input type="text" class="input input-tags" placeholder="Type and search team members..." />
			</div>



			<div class="input-wrapper input-wrapper-vertical input-wrapper-block p">
			
				<p class="input-label">Share Access Level:</p>
				<div class="flex-grid flex-grid-compact flex-grid-no-gutter-y">
					<label class="flex-child">
						<input name="share-note-access" type="radio" class="input input-inline" value="read">
						Read only
					</label>
					<label class="flex-child">
						<input name="share-note-access" type="radio" class="input input-inline" value="readwrite">
						Read-Write
					</label>
				</div>
			</div>

			<div class="text-align-right">
				<button class="flex-0-0 btn btn-neutral-outline" data-toggle="modal-close">Cancel</button>
				<button type="submit" class="flex-0-0 btn btn-primary">Share</button>
			</div>
		</form>
</div>