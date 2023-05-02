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
	$placeholder_subfolders = array(
		'Maintenance Task Requests',
		'domain.com (SEO)',
		'anotherdomain.com (SEO)',
		'somuchdomains.com (PPC)',
		'helpmuchdomainssuchwow.com (PPC)',
		'wevebeenreachingouttoyouforyourextendedcarwarranty.com (PPC)',
	);
	$placeholder_proj = array(
		'asinine-attorney.com' => 'Wrong Only Law, LLP',
		'spy-family.net' => 'WISE Agency',
		'www.smashbros.com' => 'Super Mario Bros.',
		'animal-crossing.com' => 'Nook Inc.',
		'jollibeefoods.com' => 'Jollibee Food Corporation',
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
					
					<!-- @if has subfolders -->
						<a href="#entry-subfolders-REPLACEID" class="btn btn-small btn-primary-outline btn-symbol btn-round " data-toggle-accordion>
							<i class="symbol symbol-arrow-down symbol-arrow-up-toggle"></i>
						</a>
					<!-- @else -->
						<span class="spacer">&nbsp;</span>
				</td>
				<td class="no-border-bottom timetracker-td">
					<a href="<?= app_create_link(array('template' => 'project-detail')); ?>" class="h4 color-inherit font-weight-400 no-margin-y display-inline-block">
						<span class="REPLACE">
							ace-attorney.com (SEO)
						</span>	
					</a>

					
					<span class="hide-nonmobile no-margin-x no-margin-bottom outreach-table-mobile-label h6 color-neutral">Client</span>
					<a href="<?= app_create_link(array('template' => 'client-detail')); ?>" class="tag tag-neutral display-inline-block font-weight-400">
						<span class="REPLACE">
							Wright & Co. Law
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

					<div class="tag tag-neutral">
						<span class="REPLACE">Backlog</span>
					</div>
				</td>
			</tr>
			<!-- @if has subfolders -->
				<tbody class="accordion" id="entry-subfolders-REPLACEID">
					<!--@loop .tr  -->
						<tr>
							<td class="hide-mobile padding-left">
								<span class="spacer">&nbsp;</span>
							</td>
							<td class="timetracker-td">
								<a href="<?= app_create_link(array('template' => 'project-detail')); ?>" class="no-margin-y display-inline-block color-inherit">
									<span class="REPLACE">
										Maintenance Task Requests
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
								<div class="tag tag-primary">
									<span class="REPLACE">In Progress</span>
								</div>
							</td>
						</tr>
				</tbody>



			<?php $h = 0; foreach($placeholder_proj as $proj => $cli): ?>
				<tr>
					<td class="hide-mobile no-border-bottom timetracker-td timetracker-td-w timetracker-td-w-75 padding-left">
						
							<a href="#entry-subfolders-<?=$h ?>" class="btn btn-small btn-primary-outline btn-symbol btn-round " data-toggle-accordion>
								<i class="symbol symbol-arrow-down symbol-arrow-up-toggle"></i>
							</a>
					</td>
					<td class="no-border-bottom timetracker-td">
						<a href="<?= app_create_link(array('template' => 'project-detail')); ?>" class="h4 color-inherit font-weight-400 no-margin-y display-inline-block">
							<span class="REPLACE">
								<?= $proj; ?>
							</span>	
						</a>

						
						<span class="hide-nonmobile no-margin-x no-margin-bottom outreach-table-mobile-label h6 color-neutral">Client</span>
						<a href="<?= app_create_link(array('template' => 'client-detail')); ?>" class="tag tag-neutral display-inline-block font-weight-400">
							<span class="REPLACE">
								<?= $cli; ?>
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
								
								<span class="<?= $h % 4 == 0 ? 'color-error-dark' : ''; ?>">
									<?php if($h % 2 !== 0 ): ?>
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

						<tag class="tag tag-<?= $placeholder_color[$h] ?>">
							<span class="REPLACE"><?= $placeholder_stuff[$placeholder_color[$h]] ?></span>
						</tag>
					</td>
				</tr>
					<tbody class="accordion" id="entry-subfolders-<?=$h ?>">
						<?php $i = 0; foreach($placeholder_subfolders as $subfolders): ?>
							<!--@loop .tr  -->
								<tr>
									<td class="hide-mobile padding-left">
										<span class="spacer">&nbsp;</span>
									</td>
									<td class="timetracker-td">
										<a href="<?= app_create_link(array('template' => 'project-detail')); ?>" class="no-margin-y display-inline-block color-inherit">
											<span class="REPLACE">
												<?= $subfolders ?>
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
											<span class="<?= $i % 3 == 0 ? 'color-error-dark' : ''; ?>">
												<?php if($i % 3 !== 0 ): ?>
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
										
										<tag class="tag tag-<?= $placeholder_color[$i] ?>">
											<span class="REPLACE"><?= $placeholder_stuff[$placeholder_color[$i]] ?></span>
										</tag>
									</td>
								</tr>
						<?php $i < (count($placeholder_color) - 1) ? $i++ : $i = 0; endforeach; ?>
					</tbody>
			<?php $h < (count($placeholder_color) - 1) ? $h++ : $h = 0; endforeach; ?>

	</table>
</div>