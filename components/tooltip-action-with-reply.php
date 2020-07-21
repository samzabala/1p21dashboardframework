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
						class='color-inherit color-primary-hover'
						href='#comment-form' data-toggle='modal' data-modal-title='Reply to REPLACEWITHUSERCOMMENTAUTHOR'>
							Reply
					</a>
				</li>

			<!-- @if user made the comment -->
				<li>
					<a
						class='color-inherit color-primary-hover'
						href='#comment-form' data-toggle='modal' data-modal-title='Edit comment'>
							Edit
					</a>
				</li>
				<li>
					<a
						href='#'
						class='color-inherit color-primary-hover'>
							Delete
					</a>
				</li>
		</ul>"


	
		>
		<i class="symbol symbol-kebab-horizontal"></i>
	</span> 

	<div class="modal" id="comment-form" data-modal-max-width="600px" data-modal-change-hash="false">
		<?php app_get_component('components/comment-form') ?>
	</div>
	
	<!-- @TODO MODAL TO REPLY/EDIT -->