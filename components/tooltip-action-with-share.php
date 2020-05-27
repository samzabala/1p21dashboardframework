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
					href='#modal-track-time'
					data-toggle='modal'
					data-record-id='TASKID'>
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

<div class="modal" id="modal-share-with" data-modal-max-width="400px" data-modal-title="Share">



		<!-- @if user has rights to share this notes -->
		<form method="get">

			<div class="input-wrapper input-wrapper-vertical input-wrapper-block">
				<label for="task-title" class="input-label">Share with:</label>

				
				<div class="input-group input-group-horizontal input-group-block">
					<input type="email" class="input input-single-line" />
					<button type="submit" class="flex-0-0 btn btn-primary">Share</button>
				</div>
			</div>
		</form>
</div>