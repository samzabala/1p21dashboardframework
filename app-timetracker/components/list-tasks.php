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
	$placeholder_tasks = array(
		'Homepage Design' => 'asinine-attorney.com',
		'Program Website' => 'spy-family.net',
		'Bugherd' => 'www.smashbros.com',
		'Pre-Launch QC' => 'animal-crossing.com',
		'Content Integration' => 'jollibeefoods.com',
	);
	$placeholder_subtasks = array(
		'A subtask to complete this one task first',
		'Another subtask to complete this one task first',
		'Other subtask to complete this one task first',
		'So much subtasks',
		'I know who dies in the Attack on Titan ending... Neji',
		'Ask your papa for a pistol with a silencer',
		'Step on poop',
		'More anime references to soothe your weeb soul',
	);
	?>
 <div class="table-wrapper">
	<table class="timetracker-table border-style-solid-bottom border-width-thin-bottom border-color-neutral-alpha-3">
	
		<!--
		@if this task has entries
		@loop template / tr and tbody
		:NOTE: tag is commented out for front end demo to work because tables are weird
		-->
		<!-- <template> -->
			<tr>
				<td class="hide-mobile no-border-bottom timetracker-td timetracker-td-w timetracker-td-w-75 padding-left">
					
					<!-- @if has subtasks -->
						<a href="#entry-subtasks-REPLACEID" class="btn btn-small btn-primary-outline btn-symbol btn-round " data-toggle-accordion>
							<i class="symbol symbol-arrow-down symbol-arrow-up-toggle"></i>
						</a>
					<!-- @else -->
						<span class="spacer">&nbsp;</span>
				</td>
				<td class="no-border-bottom timetracker-td">
					<a href="<?= app_create_link(array('template' => 'task-detail')); ?>" class="h4 color-inherit font-weight-400 no-margin-y display-inline-block">
						<span class="REPLACE">
							Dev Site Edits
						</span>	
					</a>

					
					<span class="hide-nonmobile no-margin-x no-margin-bottom outreach-table-mobile-label h6 color-neutral">Project</span>
					<a href="<?= app_create_link(array('template' => 'project-detail')); ?>" class="tag tag-neutral display-inline-block font-weight-400">
						<span class="REPLACE">
							ace-attorney.com (SEO)
						</span>	
					</a>
				</td>
				<td class="no-border-bottom timetracker-td timetracker-td-w timetracker-td-w-150">
					<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Date Created</span>
					<i class="symbol symbol-file"></i>
					<span class="REPLACE">April 20</span>
				</td>
				<td class="no-border-bottom timetracker-td timetracker-td-w timetracker-td-w-150">
					<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Date Due</span>
						<!-- @if has a due task -->
							<!-- 
								span	
									@classes to add
									'color-error-dark' => priority task/ 24 hours or less due
							-->
							
							<span>
								<!-- @if completed -->
									<i class="symbol symbol-success"></i>

								<!-- @else -->
									<i class="symbol symbol-calendar"></i>
								<span class="REPLACE">April 20</span>
							</span>
						<!-- @ else -->
							<div class="color-neutral">
								<i class="symbol symbol-minus"></i>
								No Due Date
							</div>

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
			<!-- @if has subtasks -->
				<tbody class="accordion" id="entry-subtasks-REPLACEID">
					<!--@loop .tr  -->
						<tr>
							<td class="hide-mobile padding-left">
								<span class="spacer">&nbsp;</span>
							</td>
							<td class="timetracker-td">
								<a href="<?= app_create_link(array('template' => 'task-detail')); ?>" class="no-margin-y display-inline-block color-inherit">
									<span class="REPLACE">
										Float left everything
									</span>	
								</a>
							</td>
							<td class="no-border-bottom timetracker-td timetracker-td-w timetracker-td-w-150">
								<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Date Created</span>
								<i class="symbol symbol-file"></i>
								<span class="REPLACE">April 20</span>
							</td>
							<td class="no-border-bottom timetracker-td timetracker-td-w timetracker-td-w-150">
								<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Date Due</span>
								<!-- @if has a due task -->
									<!-- 
										span	
											@classes to add
											'color-error-dark' => priority task/ 24 hours or less due
									-->
									
									<span>
										<!-- @if completed -->
											<i class="symbol symbol-success"></i>

										<!-- @else -->
											<i class="symbol symbol-calendar"></i>
										<span class="REPLACE">April 20</span>
									</span>
								<!-- @ else -->
									<div class="color-neutral">
										<i class="symbol symbol-minus"></i>
										No Due Date
									</div>

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
								<div class="tag tag-primary">
									<span class="REPLACE">In Progress</span>
								</div>
							</td>
						</tr>
				</tbody>



			<?php $h = 0; foreach($placeholder_tasks as $task => $proj): ?>
				<tr>
					<td class="hide-mobile no-border-bottom timetracker-td timetracker-td-w timetracker-td-w-75 padding-left">
						<?php if( $h % 2 == 0): ?>
							<a href="#entry-subtasks-<?=$h ?>" class="btn btn-small btn-primary-outline btn-symbol btn-round " data-toggle-accordion>
								<i class="symbol symbol-arrow-down symbol-arrow-up-toggle"></i>
							</a>
						<?php else: ?>
							&nbsp;
						<?php endif; ?>
					</td>
					<td class="no-border-bottom timetracker-td">
						<a href="<?= app_create_link(array('template' => 'task-detail')); ?>" class="h4 color-inherit font-weight-400 no-margin-y display-inline-block">
							<span class="REPLACE">
								<?= $task; ?>
							</span>	
						</a>

						
						<span class="hide-nonmobile no-margin-x no-margin-bottom outreach-table-mobile-label h6 color-neutral">Project</span>
						<a href="<?= app_create_link(array('template' => 'project-detail')); ?>" class="tag tag-neutral display-inline-block font-weight-400">
							<span class="REPLACE">
								<?= $proj; ?>
							</span>	
						</a>
					</td>
					<td class="no-border-bottom timetracker-td timetracker-td-w timetracker-td-w-150">
						<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Date Created</span>
						<i class="symbol symbol-file"></i>
						<span class="REPLACE">April 20</span>
					</td>
					<td class="no-border-bottom timetracker-td timetracker-td-w timetracker-td-w-150">
						<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Date Due</span>
						<!-- @if has a due task -->
								
								<span class="<?= $h % 4 == 0 ? 'color-error-dark' : ''; ?>">
									<?php if($h % 2 !== 0 ): ?>
										<i class="symbol symbol-success"></i>
									<?php else: ?>
										<i class="symbol symbol-calendar"></i>
									<?php endif; ?>
									<span class="REPLACE">April 20</span>
								</span>

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
				<?php if( $h % 2 == 0): ?>
					<tbody class="accordion" id="entry-subtasks-<?=$h ?>">
						<?php $i = 0; foreach($placeholder_subtasks as $subtask): ?>
							<!--@loop .tr  -->
								<tr>
									<td class="hide-mobile padding-left">
										<span class="spacer">&nbsp;</span>
									</td>
									<td class="timetracker-td">
										<a href="<?= app_create_link(array('template' => 'task-detail')); ?>" class="no-margin-y display-inline-block color-inherit">
											<span class="REPLACE">
												<?= $subtask ?>
											</span>	
										</a>
									</td>
									<td class="no-border-bottom timetracker-td timetracker-td-w timetracker-td-w-150">
										<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Date Created</span>
										<i class="symbol symbol-file"></i>
										<span class="REPLACE">April 20</span>
									</td>
									<td class="no-border-bottom timetracker-td timetracker-td-w timetracker-td-w-150">
										<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Date Due</span>
										<!-- @if has a due task -->
								
											<span class="<?= $i % 4 == 0 ? 'color-error-dark' : ''; ?>">
												<?php if($i % 2 !== 0 ): ?>
													<i class="symbol symbol-success"></i>
												<?php else: ?>
													<i class="symbol symbol-calendar"></i>
												<?php endif; ?>
												<span class="REPLACE">April 20</span>
											</span>
										<!-- @ else -->
											&nbsp;
	
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
										
										<tag class="tag tag-<?= $placeholder_color[$i] ?>">
											<span class="REPLACE"><?= $placeholder_stuff[$placeholder_color[$i]] ?></span>
										</tag>
									</td>
								</tr>
						<?php $i < (count($placeholder_color) - 1) ? $i++ : $i = 0; endforeach; ?>
					</tbody>
				<?php endif; ?>

			<?php $h < (count($placeholder_color) - 1) ? $h++ : $h = 0; endforeach; ?>

	</table>
</div>