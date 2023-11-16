<?php
$defs = array(
	'status' => '',
	'can_edit' => false
);
$args = app_parse_args($data,$defs);


//@PLACEHOLDER: For demo only
   $placeholder_stuff = array(
	   'Backlog' => 'neutral',
	   'In Progress' => 'primary',
	   'Review' => 'secondary',
	   'On Hold' => 'error',
	   'Completed' => 'success',
   );
	$stat = array(
		'Default Workflow' => array(
			'Backlog',
			'Cancelled',
			'Completed',
			'Completed on Staging',
			'Dev - In Progress',
			'Launch',
			'On Hold',
			'Production',
			'QA+Integration',
			'Review',
			'Review (Internal)',
			'Review (SEO)',
			'SEO - In Progress',
			'SEO In Progress',
		),
		'Maintenance Request' => array(
			'Completed',
			'Maintenance Request',
			'Review',
		),
		'Monthly Content Workflow' => array(
			'Backlog for Population',
			'Client MC Overview',
			'Content Has Been Populated',
			'Foundation',
			'MC Awaiting Client Approval',
			'MC Client Cancelled',
			'MC Delivered',
			'MC In Progress',
			'MC Needs Topics',
			'MC Populated and Complete',
			'MC Populated and in Tracker',
			'MC Ready to Write',
			'Ready For Population Team',
			'[Floater] MC Overview',
		),
		'New Site Content Order' => array(
			'Backlog',
			'Completed',
			'Delivered for Review',
			'In Review',
			'Order Created Pending Review',
			'Pending Client Review',
			'Ready to Populate',
			'Ready to Write',
			'Writing In Progress',
		),
		'Other' => array(
			'Waiting on Client Approval LP',
			'Zebra',
		),
		'Paid Workflow' => array(
			'Advertiser Verification Needed',
			'Building Campaigns',
			'Client Meetings Or Updates',
			'Completed',
			'For Review/QA',
			'LSA Call Recording Review',
			'LSA Lead Reporting',
			'LSA Optimizations',
			'LSA Setup',
			'Landing Page Content',
			'Launched',
			'Need Final URL To Begin Setup',
			'Optimizations',
			'PPC Pages To Launch - DT',
			'Reporting',
			'Tracking Codes',
			'Waiting for Assets/LP URL',
			'Waiting on Client Approval',
			'Waiting-PPC Survey/Lead Docket',
		),
		'SEO Workflow' => array(
			'Backlog',
			'Blocked',
			'Completed',
			'In Progress',
			'Review',
		),
	);


$active_sub = array($stat['Default Workflow']);
?>









<div class="display-inline-block position-relative">



	<!-- @NOTE
		.tag
			classes to add
				`neutral` => default/backlog/maintenance backlog/production backlog / no status
				`primary` => when in progress/production
				`secondary` => when in review
				`error` => when on hold
				`success` => completed


			@NOTES for interaction
				on click, will set the task status then, the item to class active, then close the modal: new Modal(refToTaskModal).close()
	-->


	<!-- @if can edit -->
	<?php if($args['can_edit']):?>



		<a href="#" data-toggle-modal-default class="tag no-margin-y
			tag-<?= $args['status'] ? $placeholder_stuff[ $args['status'] ]  : 'neutral' // DEMO only ?>
		">
			<?php if(!empty($args['status'])): ?>
			<!-- @if has status -->
				<span class="REPLACE"><?=$args['status'] ?></span>

			<!-- @else -->
			<?php else: ?>

				Select Status

			<?php endif; ?>
			
		</a>

	<!-- @else -->
	<?php else: ?>
		
		<span class="tag no-margin-y
			tag-<?= $args['status'] ? $placeholder_stuff[ $args['status'] ]  : 'neutral' // DEMO only ?>
		">
	
			<?php if(!empty($args['status'])): ?>
			<!-- @if has status -->

				<span class="REPLACE"><?=$args['status'] ?></span>

			<!-- @else -->
			<?php else: ?>

				No Status

			<?php endif; ?>

		</span>

	<?php endif; ?>


	<!-- @if can edit -->
		<div class="modal modal-default modal-constricted" data-modal-width="480px">
			
			<div class="padding-small-x">
				
				<label class="input-wrapper input-wrapper-vertical input-wrapper-block">
					<span class="input-label font-weight-700">Select to change Workflows</span>


					<!-- @NOTE
							@NOTES for interaction
								on change, swaps items in list-group with its children items
					-->
					<select name="" class="input-select">
					<?php foreach($stat as $g => $st): ?>
		
						<option value=""><?= $g ?></option>
		
					<?php endforeach; ?>
					</select>
				</label>

				<h4 class="">Select Task Status</h4>
			</div>

			
			<div class="list-group list-group-interactive list-group-compact" >
				<!-- selected -->
				<!-- @if workflow group has items  -->
					
					<!-- @loop label as sibling status -->
					<!--
						@NOTE:
							classes to add
								'active' => if active


						@NOTE interaction
							on click on item, should update the item, set item as an .active class,  then close the modal: new Modal($ref).close()
					-->
						
						<label class="list-group-item background-transparent background-primary-alpha-2-hover background-primary-alpha-2-toggle background-primary-alpha-2-hover pointer-reference no-border-y flex-xs justify-content-space-between flex-wrap align-items-center dropdown-purger">
							<input type="radio" class="sr-only">
							<span class="flex-1-1">
								<span class="REPLACE">Status Name</span>
							</span>
							<i class="symbol symbol-check only-toggle flex-0-0"></i>
						</label>

						<!-- @PLACEHOLDER: Delete when ready -->
							<?php foreach($active_sub as $g): foreach($g as $s): ?>
									
									<label class="list-group-item background-transparent background-primary-alpha-2-hover background-primary-alpha-2-toggle 
									<?= $args['status'] == $s ? 'active' : '' ?>
									background-primary-alpha-2-hover pointer-reference no-border-y flex-xs justify-content-space-between flex-wrap align-items-center dropdown-purger">
										<input type="radio" class="sr-only">
										<span class="flex-1-1">
											<span class="REPLACE"><?= $s; ?></span>
										</span>
										<i class="symbol symbol-check only-toggle flex-0-0"></i>
									</label>

							<?php endforeach; endforeach; ?>

			</div>
		</div>
</div>