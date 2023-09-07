<!-- @PLACEHOLDER -->
<?php

	$placeholder_color = array(
		'neutral',
		'primary',
		'secondary',
		'error',
		'success',
	);
	$placeholder_stuff = array(
		'neutral' => 'Backlog',
		'primary' => 'In Progress',
		'secondary' => 'Review',
		'error' => 'On Hold',
		'success' => 'Complete',
	);
	$placeholder_tasks = array(
		'Homepage Design' => ['Wrong Only Law, LLP','asinine-attorney.com'],
		'Program Website' => ['WISE Agency','spy-family.net'],
		'Bugherd' => ['Super Mario Bros.','www.smashbros.com'],
		'Pre-Launch QC' => ['Nook Inc.','animal-crossing.com'],
		'Content Integration' => ['Jollibee Food Corporation','jollibeefoods.com'],
	);

?>

<div class="module" data-grid-area="latest">
	<div class="module-header">

		<h5 class="margin-small-top margin-bottom h5">Latest Time Log</h5>

		<div class="module-functions no-margin no-padding flex-xs flex-wrap justify-content-space-between align-items-center">
			<?php app_get_component('components/pagination-per-page') ?>
			<?php app_get_component('components/pagination-number') ?>
		</div>
	</div>
	<div class="module-content align-self-stretch">


		<!-- @if has logs -->
			<div class="table-wrapper ">

				<table class="timetracker-table text-vertical-align-middle">
					<tr>
						<th>Date</th>
						<th>Start</th>
						<th>End</th>
						<th>Total</th>
						<th>Task</th>
						<th>Category</th>
						<th class="text-align-center">Status</th>
						<th>Project/Client</th>
						<th class="text-align-center">Comments</th>
					</tr>

					<tr>
						<td class="timetracker-td timetracker-td-w timetracker-td-w-150">
							<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Date</span>
							<span class="REPLACE">04/20/1969</span>
						</td>
						<td class="timetracker-td timetracker-td-w timetracker-td-w-100">
							<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Start</span>
							<span class="REPLACE">08:00 AM</span>
						</td>
						<td class="timetracker-td timetracker-td-w timetracker-td-w-100">
							<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">End</span>
							<span class="REPLACE">09:01 AM</span>
						</td>
						<td class="timetracker-td timetracker-td-w timetracker-td-w-100">
							<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Total</span>
							<span class="REPLACE">1hr 1m</span>
						</td>
						<td class="timetracker-td timetracker-td-w timetracker-td-w-200">
							<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Task</span>
							<a href="<?= app_create_link(array('template' => 'task-detail')); ?>" class="color-inherit">
								<span class="REPLACE">Internal Designs & Chop</span>
							</a>
						</td>
						<td>
							<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Category</span>
							<span class="REPLACE">Design</span>
						</td>
						<td class="text-align-center">
							<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Status</span>
							<!-- @NOTE
								.tag
									classes to add
										`tag-neutral` => default/backlog/maintenance backlog/production backlog
										`tag-primary` => when in progress/production
										`tag-secondary` => when in review
										`tag-error` => when on hold
										`tag-success` => completed
							-->

							<div class="tag tag-neutral">
								<span class="REPLACE">Backlog</span>
							</div>
						</td>
						<td class="timetracker-td timetracker-td-w timetracker-td-w-200">
							<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Project/Client</span>
							<div class="text-wrap-ellipsis font-weight-700">
								<a href="<?= app_create_link(array('template' => 'project-detail')); ?>" class="color-inherit">
									<span class="REPLACE">Wright & Co. Law</span>
								</a>
							</div>
							<a href="<?= app_create_link(array('template' => 'client-detail')); ?>" class="color-inherit">
								<span class="REPLACE">ace-attorney.com</span>
							</a>
						</td>
						<td class="text-align-center">
							<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Comments</span>
							<a href="#" data-toggle-modal-default class="btn btn-symbol btn-link"><i class="symbol symbol-file"></i></a>
							<div class="modal modal-default" data-modal-width="500px">
								<?php app_get_component('components/_DEMO-html-markup'); ?>
							</div>
						</td>
					</tr>

					<!-- @PLACEHOLDER: Delete when ready -->
						<?php $h = 1; foreach($placeholder_tasks as $tsk => [$cli,$proj]): ?>

							<tr>
								<td class="timetracker-td timetracker-td-w timetracker-td-w-150">
									<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Date</span>
									<span class="REPLACE">04/20/1969</span>
								</td>
								<td class="timetracker-td timetracker-td-w timetracker-td-w-100">
									<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Start</span>
									<span class="REPLACE">08:00 AM</span>
								</td>
								<td class="timetracker-td timetracker-td-w timetracker-td-w-100">
									<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">End</span>
									<span class="REPLACE">09:01 AM</span>
								</td>
								<td class="timetracker-td timetracker-td-w timetracker-td-w-100">
									<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Total</span>
									<span class="REPLACE">1hr 1m</span>
								</td>
								<td class="timetracker-td timetracker-td-w timetracker-td-w-200">
									<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Task</span>
									<a href="<?= app_create_link(array('template' => 'task-detail')); ?>" class="color-inherit">
										<span class="REPLACE">Internal Designs & Chop</span>
									</a>
								</td>
								<td>
									<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Category</span>
									<span class="REPLACE">Design</span>
								</td>
								<td class="text-align-center">
									<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Status</span>
									<!-- @NOTE
										.tag
											classes to add
												`tag-neutral` => default/backlog/maintenance backlog/production backlog
												`tag-primary` => when in progress/production
												`tag-secondary` => when in review
												`tag-error` => when on hold
												`tag-success` => completed
									-->

									<span class="tag tag-<?= $placeholder_color[$h] ?>">
										<span class="REPLACE"><?= $placeholder_stuff[$placeholder_color[$h]] ?></span>
									</span>
								</td>
								<td class="timetracker-td timetracker-td-w timetracker-td-w-200">
									<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Project/Client</span>
									<div class="text-wrap-ellipsis font-weight-700">
										<a href="<?= app_create_link(array('template' => 'project-detail')); ?>" class="color-inherit">
											<span class="REPLACE">Wright & Co. Law</span>
										</a>
									</div>
									<a href="<?= app_create_link(array('template' => 'client-detail')); ?>" class="color-inherit">
										<span class="REPLACE">ace-attorney.com</span>
									</a>
								</td>
								<td class="text-align-center">
									<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Comments</span>
									<a href="#" data-toggle-modal-default class="btn btn-symbol btn-link"><i class="symbol symbol-file"></i></a>
									<div class="modal modal-default" data-modal-width="500px">
										<?php app_get_component('components/_DEMO-html-markup'); ?>
									</div>
								</td>
							</tr>
						<?php $h < (count($placeholder_color) - 1) ? $h++ : $h = 0; endforeach; ?>

				</table>
			</div>

		<!-- @else  -->

			<div class="color-neutral font-style-italic">
				None yet
			</div>
	</div>
	<div class="module-footer">
		<div class="module-functions no-margin no-padding flex-xs flex-wrap justify-content-space-between align-items-center">
			<?php app_get_component('components/pagination-per-page') ?>
			<?php app_get_component('components/pagination-number') ?>
		</div>
	</div>
</div>