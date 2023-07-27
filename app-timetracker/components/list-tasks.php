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
	$placeholder_ppl = array(
		array('JA',FWAPPS_ROOT_URL.'/placeholder/profiles/team-des-jenn.jpg'),
		array('NR',FWAPPS_ROOT_URL.'/placeholder/profiles/team-dev-nadia.jpg'),
		array('GC',FWAPPS_ROOT_URL.'/placeholder/profiles/team-dev-garrett.jpg'),
		array('JE',FWAPPS_ROOT_URL.'/placeholder/profiles/team-des-jenna.jpg'),
		array('SZ',FWAPPS_ROOT_URL.'/placeholder/files/shrek.jpg'),
	);
	?>
 <div class="table-wrapper">
	<table class="timetracker-table border-style-solid-bottom border-width-thin-bottom border-color-neutral-alpha-3 text-vertical-align-middle">

		<tr class="hide-mobile">
			<th class="font-weight-700 color-theme text-align-center color-theme timetracker-td timetracker-td-w timetracker-td-w-50">
				<label class="input-label no-padding">
					<input type="checkbox" class="input-inline">
					<span class="hide-nonmobile">Select all tasks</span>
				</label>
			</th>
			<th class="font-weight-700 color-theme">
				Task and Project

				<!-- a @NOTES: classes to add:
					'active' => when ascending order
					'' => when descending order
				-->
				<a href="#" class="color-inherit"><i class="symbol symbol-caret-down symbol-caret-up-toggle"></i></a>
			</th>
			<th class="font-weight-700 color-theme text-align-center no-border-bottom timetracker-td timetracker-td-w timetracker-td-w-150">
				Creator
			</th>
			<th class="font-weight-700 color-theme text-align-center no-border-bottom timetracker-td timetracker-td-w timetracker-td-w-150">
				Assignee
			</th>
			<th class="font-weight-700 color-theme">
				Created
				<!-- a @NOTES: classes to add:
					'active' => when ascending order
					'' => when descending order
				-->
				<a href="#" class="color-inherit"><i class="symbol symbol-caret-down symbol-caret-up-toggle"></i></a>
			</th>
			<th class="font-weight-700 color-theme">
				Due
				<!-- a @NOTES: classes to add:
					'active' => when ascending order
					'' => when descending order
				-->
				<a href="#" class="color-inherit"><i class="symbol symbol-caret-down symbol-caret-up-toggle"></i></a>
			</th>
			<th class="font-weight-700 color-theme text-align-center">Status</th>
			<th class="font-weight-700 color-theme text-align-center">Subtasks</th>
			<th class="no-border-bottom timetracker-td-actions text-align-center" width="50">
				<div class="bulk-actions position-relative">
					<?php app_get_component('components/modal-actions','',false,array(
						'links' => array(
							'Bulk delete'
								=> '#',
							'Bulk update'
								=> '#',
							'Bulk Favorite'
								=> '#',
						)
					)) ?>
				</div>
			</th>
		</tr>
	
		<!--
		@if this task has entries
		@loop template / tr and tbody
		:NOTE: tag is commented out for front end demo to work because tables are weird
		-->
		<!-- <template> -->
			<tr>
				<td class="text-align-center no-border-bottom timetracker-td text-align-center timetracker-td timetracker-td-w timetracker-td-w-50">
					<label class="input-label no-padding">
						<input type="checkbox" class="input-inline">
						<span class="hide-nonmobile">Select task</span>
					</label>
				</td>
				<td class="no-border-bottom timetracker-td">
					<a href="<?= app_create_link(array('template' => 'task-detail')); ?>" class="h4 color-inherit font-weight-400 no-margin-y display-inline-block">
						<span class="REPLACE">
							Dev Site Edits
						</span>	
					</a>

					<br>
					
					<span class="hide-nonmobile no-margin-x no-margin-bottom outreach-table-mobile-label h6 color-neutral">Project</span>
					<a href="<?= app_create_link(array('template' => 'project-detail')); ?>" class="color-neutral-dark">
						<span class="REPLACE">
							ace-attorney.com (SEO)
						</span>	
					</a>
				</td>
				<td class="text-align-center no-border-bottom timetracker-td timetracker-td-w timetracker-td-w-150">
					<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Creator</span>
					<?php app_get_component('components/thumbnail-small'); ?>
				</td>
				<td class="text-align-center no-border-bottom timetracker-td timetracker-td-w timetracker-td-w-150">
					<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Assignee</span>
					<?php app_get_component('components/thumbnail-small'); ?>
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
				<td class="no-border-bottom timetracker-td timetracker-td-w timetracker-td-w-75 text-align-center">
					
					<!-- @if has subtasks -->
						<a class="hide-nonmobile" href="#entry-subtasks-REPLACEID"  data-toggle-accordion>
							<i class="symbol symbol-arrow-down symbol-arrow-up-toggle"></i> View subtasks
						</a>
						<a href="#entry-subtasks-REPLACEID" class="hide-mobile btn btn-small btn-primary-outline btn-symbol btn-round " data-toggle-accordion>
							<i class="symbol symbol-arrow-down symbol-arrow-up-toggle"></i>
						</a>
					<!-- @else -->
						<span class="spacer">&nbsp;</span>
				</td>
				<td class="no-border-bottom timetracker-td-actions text-align-center" width="50">
					<div class="bulk-actions position-relative">
						<?php app_get_component('components/modal-actions','',false,array(
							'links' => array(
								'Edit Time'
									=> '#',
								'Delete'
									=> '#',
								'Favorite'
									=> '#',
							)
						)) ?>
					</div>
				</td>
			</tr>
			<!-- @if has subtasks -->
				<tbody class="accordion" id="entry-subtasks-REPLACEID">
					<!--@loop .tr  -->
						<tr class="background-primary-alpha-1">
							<td class="hide-mobile padding-left">
								<span class="spacer">&nbsp;</span>
							</td>
							<td class="timetracker-td">
								<span class="flex-md">
									<label class="input-label no-padding margin-right">
										<input type="checkbox" class="input-inline">
										<span class="hide-nonmobile">Select subproject</span>
									</label>
									<br class="hide-nonmobile">
									<br class="hide-nonmobile">
									<a href="<?= app_create_link(array('template' => 'task-detail')); ?>" class="no-margin-y display-inline-block color-inherit">
										<span class="REPLACE">
											Float left everything
										</span>	
									</a>
								</span>
							</td>
							<td class="text-align-center no-border-bottom timetracker-td timetracker-td-w timetracker-td-w-150">
								<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Creator</span>
								<?php app_get_component('components/thumbnail-small'); ?>
							</td>
							<td class="text-align-center no-border-bottom timetracker-td timetracker-td-w timetracker-td-w-150">
								<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Assignee</span>
								<?php app_get_component('components/thumbnail-small'); ?>
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
							<td class="hide-mobile padding-left">
								<span class="spacer">&nbsp;</span>
							</td>

							<td class="no-border-bottom timetracker-td-actions text-align-center" width="50">
								<div class="bulk-actions position-relative">
									<?php app_get_component('components/modal-actions','',false,array(
										'links' => array(
											'Edit Time'
												=> '#',
											'Delete'
												=> '#',
											'Favorite'
												=> '#',
										)
									)) ?>
								</div>
							</td>
						</tr>
				</tbody>



			<?php $h = 0; foreach($placeholder_tasks as $task => $proj): ?>
				<tr>
					<td class="text-align-center no-border-bottom timetracker-td text-align-center timetracker-td timetracker-td-w timetracker-td-w-50">
						<label class="input-label no-padding">
							<input type="checkbox" class="input-inline">
							<span class="hide-nonmobile">Select task</span>
						</label>
					</td>
					<td class="no-border-bottom timetracker-td">
						<a href="<?= app_create_link(array('template' => 'task-detail')); ?>" class="h4 color-inherit font-weight-400 no-margin-y display-inline-block">
							<span class="REPLACE">
								<?= $task; ?>
							</span>	
						</a>

						<br>
						
						<span class="hide-nonmobile no-margin-x no-margin-bottom outreach-table-mobile-label h6 color-neutral">Project</span>
						<a href="<?= app_create_link(array('template' => 'project-detail')); ?>" class="color-neutral-dark">
							<span class="REPLACE">
								<?= $proj; ?>
							</span>	
						</a>
					</td>
					<td class="text-align-center no-border-bottom timetracker-td timetracker-td-w timetracker-td-w-150">
						<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Creator</span>
						<?php app_get_component('components/thumbnail-small','',false,array(
							'initials' => $placeholder_ppl[$h][0],
							'image' => $placeholder_ppl[$h][1]
						)); ?>
					</td>
					<td class="text-align-center no-border-bottom timetracker-td timetracker-td-w timetracker-td-w-150">
						<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Assignee</span>
						<?php app_get_component('components/thumbnail-small','',false,array(
							'initials' => $placeholder_ppl[$h][0],
							'image' => $placeholder_ppl[$h][1]
						)); ?>
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
					<td class="no-border-bottom timetracker-td timetracker-td-w timetracker-td-w-75 text-align-center">
						<?php if( $h % 2 == 0): ?>

							<a class="hide-nonmobile" href="#entry-subtasks-<?=$h ?>"  data-toggle-accordion>
								<i class="symbol symbol-arrow-down symbol-arrow-up-toggle"></i> View subtasks
							</a>
							<a href="#entry-subtasks-<?=$h ?>" class="hide-mobile btn btn-small btn-primary-outline btn-symbol btn-round " data-toggle-accordion>
								<i class="symbol symbol-arrow-down symbol-arrow-up-toggle"></i>
							</a>
						<?php else: ?>
							&nbsp;
						<?php endif; ?>
					</td>
					<td class="no-border-bottom timetracker-td-actions text-align-center" width="50">
						<div class="bulk-actions position-relative">
							<?php app_get_component('components/modal-actions','',false,array(
								'links' => array(
									'Edit Time'
										=> '#',
									'Delete'
										=> '#',
									'Favorite'
										=> '#',
								)
							)) ?>
						</div>
					</td>
				</tr>
				<?php if( $h % 2 == 0): ?>
					<tbody class="accordion" id="entry-subtasks-<?=$h ?>">
						<?php $i = 0; foreach($placeholder_subtasks as $subtask): ?>
							<!--@loop .tr  -->
								<tr class="background-primary-alpha-1">
									<td class="hide-mobile padding-left">
										<span class="spacer">&nbsp;</span>
									</td>
									<td class="timetracker-td">

										<span class="flex-md">
											<label class="input-label no-padding margin-right">
												<input type="checkbox" class="input-inline">
												<span class="hide-nonmobile">Select subproject</span>
											</label>
											<br class="hide-nonmobile">
											<br class="hide-nonmobile">
											<a href="<?= app_create_link(array('template' => 'task-detail')); ?>" class="no-margin-y display-inline-block color-inherit">
												<span class="REPLACE">
													<?= $subtask ?>
												</span>	
											</a>
										</span>
									</td>
									<td class="text-align-center no-border-bottom timetracker-td timetracker-td-w timetracker-td-w-150">
										<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Creator</span>
										<?php app_get_component('components/thumbnail-small','',false,array(
											'initials' => $placeholder_ppl[$h][0],
											'image' => $placeholder_ppl[$h][1]
										)); ?>
									</td>
									<td class="text-align-center no-border-bottom timetracker-td timetracker-td-w timetracker-td-w-150">
										<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Assignee</span>
										<?php app_get_component('components/thumbnail-small','',false,array(
											'initials' => $placeholder_ppl[$h][0],
											'image' => $placeholder_ppl[$h][1]
										)); ?>
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
									<td class="hide-mobile padding-left">
										<span class="spacer">&nbsp;</span>
									</td>
									<td class="no-border-bottom timetracker-td-actions text-align-center" width="50">
										<div class="bulk-actions position-relative">
											<?php app_get_component('components/modal-actions','',false,array(
												'links' => array(
													'Edit Time'
														=> '#',
													'Delete'
														=> '#',
													'Favorite'
														=> '#',
												)
											)) ?>
										</div>
									</td>
								</tr>
						<?php $i < (count($placeholder_color) - 1) ? $i++ : $i = 0; endforeach; ?>
					</tbody>
				<?php endif; ?>

			<?php $h < (count($placeholder_color) - 1) ? $h++ : $h = 0; endforeach; ?>

	</table>
</div>