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
		'Unbreak my heart',
		'Say you love me again',
		'Undo this hurt',
		'Forget the lyrics for this part',
		'Bugherds',
		'Uncry these tears',
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
				<a href="<?= app_create_link(array('template' => 'task-detail')); ?>" class="btn btn-block-mobile color-primary-hover color-primary-focus">
					<span>
						<i class="symbol symbol-window-success"></i>
						Add Task +
					</span>
				</a>
			</div>
		</div>
		<hr class="hide-nonmobile no-margin-y">
	</div>
	<div class="module-content no-padding-x no-padding-bottom">
			<table class="timetracker-table">
			
				<!--@loop .tr  -->
					<tr>
						<td class="text-align-center no-border-bottom timetracker-td timetracker-td-w timetracker-td-w-100">
							<div class="display-inline-block position-relative">
								<div class="display-inline-block" data-toggle-dropdown>
									<!-- @if has user assigned -->
										<div class="thumbnail-cluster">
											<!-- @query limit to 2 user results -->

												<!-- @if theres 2 or less assignees -->
														<!-- @loop <component> -->
															<?php app_get_component('components/thumbnail-micro','',false,array(
																'image' => FWAPPS_ROOT_URL.'/placeholder/profiles/team-des-jenn.jpg',
															)); ?>

												<!-- @else if theres more than 2 assignees -->
													<!-- @NOTE first user only -->
														<?php app_get_component('components/thumbnail-micro','',false,array(
															'image' => FWAPPS_ROOT_URL.'/placeholder/profiles/team-des-jenn.jpg',
														)); ?>
													<!-- @NOTE: the rest of the assignees -->
														<?php app_get_component('components/thumbnail-micro','',false,array(
															'image' => false,
															'initials' => '+ <span class="REPLACE">2</span>',
													)); ?>
										</div>

									<!-- @else -->
										<div class="thumbnail thumbnail-micro background-neutral-alpha-2">
											<span class="thumbnail-text">+</span>
										</div>
								</div>
								<?php app_get_component('components/dropdown-list-group-search','',false,array(
									'search_placeholder' => 'Search User',
									'allow_multiple' => true,
									'list' => array(
										'Phoenix Wright',
										'Pigeon Wrong',
										'Miles Edgeworth',
										'Kilometer Dulluselessness',
										'Piolo Pascual',
										'Pedro Pascal',
										'Loid Forger',
										'Yor Forger',
										'Yuri Briar',
										'Fiona Frost',
										'Mario',
										'Luigi',
										'Bowser',
									)
								)); ?>
							</div>
						</td>
						<td class="no-border-bottom timetracker-td">
							<a href="<?= app_create_link(array('template' => 'task-detail')); ?>" class="h4 color-inherit font-weight-400 no-margin-y display-inline-block">
								<span class="REPLACE">
									Make everything float left
								</span>	
							</a>
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



					<?php $h = 0; foreach($placeholder_proj as $proj): ?>
						<tr>
							<td class="text-align-center no-border-bottom timetracker-td timetracker-td-w timetracker-td-w-100">
								<div class="display-inline-block position-relative">
									<div class="display-inline-block" data-toggle-dropdown>
										<?php if($h % 4 == 0): ?>
											<div class="thumbnail-cluster">
													<?php app_get_component('components/thumbnail-micro','',false,array(
														'image' => FWAPPS_ROOT_URL.'/placeholder/profiles/team-des-jenn.jpg',
													)); ?>
													<?php app_get_component('components/thumbnail-micro','',false,array(
														'image' => FWAPPS_ROOT_URL.'/placeholder/profiles/team-des-jenn.jpg',
													)); ?>
											</div>

										<?php elseif($h % 3 == 0): ?>

											<div class="thumbnail-cluster">
													<?php app_get_component('components/thumbnail-micro','',false,array(
														'image' => FWAPPS_ROOT_URL.'/placeholder/profiles/team-des-jenn.jpg',
													)); ?>
											</div>
										<?php elseif($h % 2 == 0): ?>

											<div class="thumbnail-cluster">
													<?php app_get_component('components/thumbnail-micro','',false,array(
														'image' => FWAPPS_ROOT_URL.'/placeholder/profiles/team-des-jenn.jpg',
													)); ?>

												<!-- @if theres mopre than 2 assignees -->
												<?php app_get_component('components/thumbnail-micro','',false,array(
													'image' => false,
													'initials' => '+<span class="REPLACE">2</span>',
												)); ?>
											</div>
										<?php else: ?>
											<div class="thumbnail thumbnail-micro background-neutral-alpha-2 ">
												<span class="thumbnail-text color-neutral">+</span>
											</div>
										<?php endif; ?>
									</div>
									<?php app_get_component('components/dropdown-list-group-search','',false,array(
										'search_placeholder' => 'Search User',
										'allow_multiple' => true,
										'list' => array(
											'Phoenix Wright',
											'Pigeon Wrong',
											'Miles Edgeworth',
											'Kilometer Dulluselessness',
											'Piolo Pascual',
											'Pedro Pascal',
											'Loid Forger',
											'Yor Forger',
											'Yuri Briar',
											'Fiona Frost',
											'Mario',
											'Luigi',
											'Bowser',
										)
									)); ?>
								</div>
							</td>
							<td class="no-border-bottom timetracker-td">
								<a href="<?= app_create_link(array('template' => 'task-detail')); ?>" class="h4 color-inherit font-weight-400 no-margin-y display-inline-block">
									<span class="REPLACE">
										<?= $proj; ?>
									</span>	
								</a>
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
					<?php $h < (count($placeholder_color) - 1) ? $h++ : $h = 0; endforeach; ?>

			</table>
	</div>
</div>

