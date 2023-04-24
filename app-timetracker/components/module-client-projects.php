<!-- @PLACEHOLDER delete when ready -->
	<?
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
	$placeholder_proj = array(
		'asinine-attorney.com (SEO)',
		'stepladder.asinine-attorney.com (PPC)',
		'ladder.asinine-attorney.com (PPC)',
		'metaldetectortrauma.ace-attorney.com (PPC)',
		'parrotsnitchedonme.ace-attorney.com (PPC)',
	);
	?>

<div class="module margin-large-top margin-bottom">
	<div class="module-header module-header-break align-items-center no-margin-bottom">
		<div class="flex-1-1 padding-right"> <!-- flex-xs -->
			<p class="h4  no-margin-top">
				Projects
			</p>
		</div>
		<hr class="hide-nonmobile no-margin-y">
		<div class="module-functions flex-xs align-items-center justify-content-flex-end no-margin-y">
			<div class="module-function">
				<a href="<?= app_create_link(array('template' => 'project-detail')); ?>" class="btn btn-block-mobile color-primary-hover color-primary-focus">
					<span>
						<i class="symbol symbol-folder"></i>
						Add Project +
					</span>
				</a>
			</div>
		</div>
		<hr class="hide-nonmobile no-margin-y">
	</div>
	<div class="module-content no-padding-x no-padding-bottom">
		<div class="table-wrapper">
			<table class="timetracker-table">
			
				<!--@loop .tr  -->
					<tr>
						<td class="no-border-bottom timetracker-td">
							<a href="<?= app_create_link(array('template' => 'project-detail')); ?>" class="h4 color-inherit font-weight-400 no-margin-y display-inline-block">
								<span class="REPLACE">
									ace-attorney.com (SEO)
								</span>	
							</a>
						</td>
						<td class="no-border-bottom timetracker-td timetracker-td-w timetracker-td-w-200 text-align-center">
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
					</tr>



					<?php $h = 0; foreach($placeholder_proj as $proj): ?>
						<tr>
							<td class="no-border-bottom timetracker-td">
								<a href="<?= app_create_link(array('template' => 'project-detail')); ?>" class="h4 color-inherit font-weight-400 no-margin-y display-inline-block">
									<span class="REPLACE">
										<?= $proj; ?>
									</span>	
								</a>
							</td>
							<td class="no-border-bottom timetracker-td timetracker-td-w timetracker-td-w-200 text-align-center">
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

								<tag class="tag tag-<?= $placeholder_color[$h] ?>">
									<span class="REPLACE"><?= $placeholder_stuff[$placeholder_color[$h]] ?></span>
								</tag>
							</td>
						</tr>
					<?php $h++; endforeach; ?>

			</table>
		</div>
	</div>
</div>