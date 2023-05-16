

<!-- 
@IMPORT

SCSS:
		@import 'framework/src/scss/_modal';
JS:
		import Modal from 'framework/src/js/modal.js';
 -->
<?php
//args. feel free to modify as needed
$defs = array(
	'has_data' => false,
	'can_edit' => true,
	'assignees' => 1,
);

$args = app_parse_args($data,$defs);
?>






<!-- @PLACEHOLDER -->
<?php  $placeholder_status = array(
	'Blocked' => 'error',
	'Cancelled' => 'error',
	'Completed' => 'success',
	'Completed on Staging' => 'success',
	'Dev - In Progress' => 'primary',
	'In Progress' => 'primary',
	'Launch' => 'success',
	'Maintenance Request' => 'neutral',
	'On Hold' => 'error',
	'Production' => 'primary',
	'QA+Integration' => 'neutral',
	'Review' => 'secondary',
	'Review (Internal)' => 'secondary',
	'Review (SEO)' => 'secondary',
	'SEO - In Progress' => 'primary',
	'SEO In Progress' => 'primary',
); ?>
<div class="timetracker-module-subheader flex-md flex-wrap align-items-center">
	<!-- status -->
		<?php if(str_contains(FWAPPS_TEMPLATE,'project-detail') || str_contains(FWAPPS_TEMPLATE,'task-detail')): ?>
			<form class="flex-0-0 border-style-solid-top border-color-theme-polar-contrast border-width-thin-top position-relative flex-xs">

				<!-- @NOTE hidden input types here -->

				<!-- @NOTE
					.btn
						classes to add (@NOTE: should match up with the colors we set up originally through task.js: /1p21_timetracker_web/time_tracker_webapp/static/vue/src/lib/task.js)
							`btn-neutral-glassy` => default/backlog/maintenance backlog/production backlog
							`btn-primary-glassy` => when in progress/production
							`btn-secondary-glassy` => when in review
							`btn-error-glassy` => when on hold
							`btn-success-glassy` => completed
				-->
				<a href="#" class="btn btn-block-mobile no-radius btn-primary-glassy" data-toggle-dropdown >
					<span>
						&bull;&nbsp;
						<span class="color-theme">
							<span class="REPLACE">In Progress</span>
						</span>&nbsp;
						<i class="symbol symbol-arrow-down"></i>
					</span>
				</a>
				<div class="dropdown dropdown-top-flush dropdown-left no-padding" data-dropdown-width="max(100%,300px)" data-dropdown-max-height="400px">
					<div class="list-group
						<?= 'list-group-toggle';  //@PLACEHOLDER: DO NOT include this line of code, this is for demo purposes only ?>"
					>
						<!--
							@NOTE

							.list-group-item
								classes to add:
									`active` => when the contained input for status is checked
						-->
						<!-- @loop .list-group-item -->
							<label class="list-group-item pointer-reference">
								<span class=" flex-grid flex-nowrap flex-grid-no-gutter justify-content-space-between flex-wrap align-items-center">
									<span class="flex-child flex-1-1">
										
										<input type="radio" class="sr-only" value="">

										<span class="text-wrap-ellipsis">
											<!-- @NOTE
												span
													classes to add (@NOTE: should match up with the colors we set up originally through task.js: /1p21_timetracker_web/time_tracker_webapp/static/vue/src/lib/task.js)
														`color-neutral` => default/backlog/maintenance backlog/production backlog
														`color-primary` => when in progress/production
														`color-secondary` => when in review
														`color-error` => when on hold
														`color-success` => completed
											-->
											<span class="color-neutral">&bull;&nbsp;</span>


											<span class="REPLACE">Backlog</span>
										</span>
									</span>
									<span class="flex-child flex-0-0">
										<i class="symbol symbol-check only-toggle flex-0-0"></i>
									</span>
								</span>
							</label>
							
							<?php foreach($placeholder_status as $stat=>$col): ?>
								<label class="list-group-item pointer-reference">
									<span class=" flex-grid flex-nowrap flex-grid-no-gutter justify-content-space-between flex-wrap align-items-center">
										<span class="flex-child flex-1-1">
											
											<input type="radio" class="sr-only" value="">

											<span class="text-wrap-ellipsis">
												<!-- @NOTE
													span
														classes to add (@NOTE: should match up with the colors we set up originally through task.js: /1p21_timetracker_web/time_tracker_webapp/static/vue/src/lib/task.js)
															`color-neutral` => default/backlog/maintenance backlog/production backlog
															`color-primary` => when in progress/production
															`color-secondary` => when in review
															`color-error` => when on hold
															`color-success` => completed
												-->
												<span class="color-<?=$col; ?>">&bull;&nbsp;</span>


												<span class="REPLACE"><?=$stat; ?></span>
											</span>
										</span>
										<span class="flex-child flex-0-0">
											<i class="symbol symbol-check only-toggle flex-0-0"></i>
										</span>
									</span>
								</label>
							<?php endforeach; ?>
						
					</div>
				</div>
			</form>
		<?php endif; ?>

	<!-- Owners  -->
		<form class="flex-0-0 border-style-solid-top border-color-theme-polar-contrast border-width-thin-top  position-relative">

			<!-- @NOTE hidden input types here -->

			<div class="btn btn-block-mobile no-radius font-weight-400" 
				<?php if($args['can_edit']): ?>
					data-toggle-dropdown
				<?php endif; ?>
			>
				<span>
					<i class="symbol symbol-users"></i>
					
					<!-- @if has owners -->
					<?php if($args['has_data']): ?>
						<span class="REPLACE">69</span> Owners
						
					<!-- @else -->
					<?php else: ?>

						<!-- @if can edit info -->
						<?php if($args['can_edit']): ?>
							Owners +

						<!-- @else -->
						<?php else: ?>
							No Owners

						<?php endif; ?>


					<?php endif; ?>
				</span>
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
		</form>
		

	<!-- Parent Project -->
		<?php if(str_contains(FWAPPS_TEMPLATE,'project-detail')): ?>
			<form class="flex-0-0 border-style-solid-top border-color-theme-polar-contrast border-width-thin-top  position-relative">

				<!-- @NOTE hidden input types here -->

				<div class="btn btn-block-mobile no-radius font-weight-400"
					<?php if($args['can_edit']): ?>
						data-toggle-dropdown
					<?php endif; ?>
				>
					<span>
						<i class="symbol symbol-folder"></i> 
						
						<!-- @if has parent project -->
						<?php if($args['has_data']): ?>
							<span class="REPLACE">capcom.com (SEO)</span>

						<!-- @else -->
						<?php else: ?>

							<!-- @if can edit info -->
							<?php if($args['can_edit']): ?>
								<span class="hide-mobile">Select Parent Project</span> +

							<!-- @else -->
							<?php else: ?>
								No Parent

							<?php endif; ?>


						<?php endif; ?>
					</span>
				</div>

				<!-- @if can edit info -->
				<?php if($args['can_edit']): ?>
					<?php app_get_component('components/dropdown-list-group-search','',false,array(
						'search_placeholder' => 'Search User',
						'allow_multiple' => false,
						'list' => array(
							'asinine-attorney.com',
							'spy-family.net',
							'www.smashbros.com',
							'animal-crossing.com',
							'jollibeefoods.com',
						)
					)); ?>
				<?php endif; ?>
			</form>
		<?php endif; ?>
	

	<!-- Assignee + Assignee edit-->
		<?php if(str_contains(FWAPPS_TEMPLATE,'task-detail')): ?>
			<div class="flex-0-0 border-style-solid-top border-color-theme-polar-contrast border-width-thin-top flex-xs align-items-center justify-content-center position-relative ">
				
			
				<!-- @if has user assigned -->
				<?php if($args['has_data']): ?>

					<div class="padding-small-left padding-small-y flex-xs align-items-center">
						<!-- @query limit to 2 user results -->

							<!-- @if theres 2 or less assignees -->
							<?php if($args['assignees'] <= 2): ?>
								
								<!-- @loop .div -->
								<?php for($i = 0; $i < $args['assignees']; $i++): ?>
								
									<div class="position-relative margin-small-right">
										<?php app_get_component('components/thumbnail-micro','',false,array(
											'image' => FWAPPS_ROOT_URL.'/placeholder/profiles/team-des-jenn.jpg',
										)); ?>
										<span class="hide-mobile">
											<span class="REPLACE">Profile</span>
											&nbsp;
										</span>
									</div>


								<?php endfor; ?>
									
							<!-- @else if theres more than 2 assignees -->
							<?php else: ?>

								<!-- @NOTE first user only -->
									<div class="position-relative margin-small-right">
										<?php app_get_component('components/thumbnail-micro','',false,array(
											'image' => FWAPPS_ROOT_URL.'/placeholder/profiles/team-dev-nadia.jpg',
										)); ?>
										<span class="hide-mobile">
											<span class="REPLACE">Profile</span>
											&nbsp;
										</span>
									</div>



								<!-- @NOTE: the rest of the assignees -->
								<div class="margin-small-right">

									<a href="#" data-toggle-modal-default data-modal-width="300px" data-modal-title="Asignees" class="thumbnail thumbnail-micro">
										<span class="thumbnail-text">
											+<span class="REPLACE"><?= $args['assignees'] - 1; ?></span>
										</span>
									</a>
									<div class="modal modal-default display-inline">
										<ul class="list-group">
											<!-- @loop li -->
												<li>
													<span class="flex-grid flex-grid-compact flex-grid-no-gutter-y flex-nowrap">
														<span class="flex-child flex-0-0">
															<?php app_get_component('components/thumbnail-micro','',false,array(
																'image' => FWAPPS_ROOT_URL.'/placeholder/profiles/team-des-jenn.jpg',
															)); ?>
														</span>
														<span class="flex-child flex-1-1 align-self-center">
															<span class="text-wrap-ellipsis">
																<span class="REPLACE">Profile Name</span>
															</span>
														</span>
													</span>
												</li>


												<!-- @PLACEHOLDER: Delete when ready -->
													<?php for($i = 0; $i < $args['assignees']; $i++): ?>
														<li>
															<span class="flex-grid flex-grid-compact flex-grid-no-gutter-y flex-nowrap">
																<span class="flex-child flex-0-0">
																	<?php app_get_component('components/thumbnail-micro','',false,array(
																		'image' => FWAPPS_ROOT_URL.'/placeholder/profiles/team-dev-nadia.jpg',
																	)); ?>
																</span>
																<span class="flex-child flex-1-1 align-self-center">
																	<span class="text-wrap-ellipsis">
																		Peaches Peaches Peaches Peaches Peaches
																	</span>
																</span>
															</span>
														</li>
													<?php endfor; ?>

										</ul>
									</div>
									<span class="hide-mobile">
										<span class="sr-only">Other assignees</span>
										&nbsp;
									</span>

								</div>

							<?php endif; ?>

					</div>

				<?php else: ?>

					<!-- @if is unable edit info -->
					<?php if(!$args['can_edit']): ?>
						<div class="padding-small-left padding-small-y flex-xs align-items-center">
							<span class="margin-small-right">
								<div class="thumbnail thumbnail-micro background-neutral-alpha-2 ">
									<span class="thumbnail-text color-neutral"><i class="symbol symbol-close"></i></span>
								</div>
							</span>
							No Asignees
						</div>

					<?php endif; ?>

				<?php endif; ?>
					
			<!-- toggle -->
				<!-- @if can edit info -->
				<?php if($args['can_edit']): ?>
					<form class="flex-xs align-items-center">
	
						<!-- @if has user assigned -->
						<?php if($args['has_data']): ?>
							<a href="task-asignee-edit" data-toggle-dropdown class="btn btn-link no-padding-x color-inherit color-primary-hover color-primary-focus">
								<i class="symbol symbol-plus"></i>
								<span class="sr-only">Add Asignee</span>
							</a>
	
						<!-- @else -->
						<?php else: ?>
							<a href="task-asignee-edit" data-toggle-dropdown class="padding-small-x padding-small-y flex-xs align-items-center text-decoration-none color-inherit">
								<span class="margin-small-right">
									<div class="thumbnail thumbnail-micro background-neutral-alpha-2 ">
										<span class="thumbnail-text color-neutral"><i class="symbol symbol-plus"></i></span>
									</div>
								</span>
								Add Assignee
							</a>
	
						<?php endif; ?>
	
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
					</form>

				<?php endif; ?>
			
			</div>
			<div class="spacer align-self-stretch hide-mobile padding-small-right border-style-solid-top border-color-theme-polar-contrast border-width-thin-top ">
				&nbsp;
			</div>
		<?php endif; ?>
		

	<!-- Task Project -->
		<?php if(str_contains(FWAPPS_TEMPLATE,'task-detail')): ?>
			<form class="flex-0-0 border-style-solid-top border-color-theme-polar-contrast border-width-thin-top  position-relative">

				<!-- @NOTE hidden input types here -->

				<div class="btn btn-block-mobile no-radius font-weight-400 padding-small-x"
					<?php if($args['can_edit']): ?>
						data-toggle-dropdown
					<?php endif; ?>
				>
					<span>
						<i class="symbol symbol-window-success"></i> 
						
						<!-- @if has parent task -->
						<?php if($args['has_data']): ?>

							<span class="timetracker-text-wrap-ellipsis-inline text-wrap-ellipsis">
								<span class="REPLACE">Convert all the font families to papyrus</span>
							</span>

						<!-- @else -->
						<?php else: ?>

							<!-- @if can edit info -->
							<?php if($args['can_edit']): ?>
								Add Parent task +

							<!-- @else -->
							<?php else: ?>
								No Parent

							<?php endif; ?>

						<?php endif; ?>
					</span>
				</div>

				<?php if($args['can_edit']): ?>
					<?php app_get_component('components/dropdown-list-group-search','',false,array(
						'search_placeholder' => 'Search Task',
						'allow_multiple' => false,
						'list' => array(
							'Convert all the font families to papyrus',
							'Or comic sans',
							'Step on poop',
							'Put box shadows on everything',
							'Another task',
							'Other task',
							'There is a lot of tasks wowowee',
							'A buttload of tasks',
							'Change everything by starting an attack because Fire Nation baby',
							'Be needed by the world the most, then vanish',
							'Be discovered in a huge iceberg 100 years later',
							'Defeat the fatherlord',
							'You mean the firelord',
							'That\'s what I said',
						)
					)); ?>
				<?php endif; ?>
			</form>
		<?php endif; ?>

	<!-- Category -->
		<?php if(str_contains(FWAPPS_TEMPLATE,'task-detail')): ?>
			<form class="flex-1-1 border-style-solid-top border-color-theme-polar-contrast border-width-thin-top position-relative">

				<!-- @NOTE hidden input types here -->

				<div class="btn btn-block-mobile no-radius font-weight-400 padding-small-x"
					<?php if($args['can_edit']): ?>
						data-toggle-dropdown
					<?php endif; ?>
				>
					<span>
						<i class="symbol symbol-grid"></i> 
						
						<!-- @if has parent task -->
						<?php if($args['has_data']): ?>

							<span class="timetracker-text-wrap-ellipsis-inline text-wrap-ellipsis">
								<span class="REPLACE">Production</span>
							</span>

						<!-- @else -->
						<?php else: ?>
							
							<!-- @if can edit info -->
							<?php if($args['can_edit']): ?>
								Add Category +

							<!-- @else -->
							<?php else: ?>
								No Category

							<?php endif; ?>

						<?php endif; ?>
					</span>
				</div>

				<?php if($args['can_edit']): ?>
					<?php app_get_component('components/dropdown-list-group-search','',false,array(
						'search_placeholder' => 'Search Category',
						'allow_multiple' => false,
						'list' => array(
							'Production',
							'SEO',
							'Sales',
							'Maintenance Task',
							'Meetings',
							'Other categories I cant remember at the moment but also this is edge case hoowaw'
							
						)
					)); ?>
				<?php endif; ?>
			</form>
		<?php endif; ?>

	<!-- other functionalities and data but on the right -->
		<div class="flex-1-0 border-style-solid-top border-color-theme-polar-contrast border-width-thin-top align-self-stretch flex-md align-items-center justify-content-flex-end">

			<!-- Due date + time -->
				<?php if(str_contains(FWAPPS_TEMPLATE,'task-detail')): ?>
					<form class="flex-0-0 position-relative text-align-center">
						
						<!-- @NOTE hidden input types here -->
						<div class="btn btn-block-mobile no-radius font-weight-400 padding-small-x"
							<?php if($args['can_edit']): ?>
								data-toggle-dropdown
							<?php endif; ?>
						>
							<span class="timetracker-text-wrap-ellipsis-inline text-wrap-ellipsis">
								<i class="symbol symbol-calendar"></i> 
								
								<!-- @if has data -->
								<?php if($args['has_data']): ?>

										<span class="REPLACE">June 12 - 4:55pm</span>

								<!-- @else -->
								<?php else: ?>
								
									<!-- @if can edit info -->
									<?php if($args['can_edit']): ?>
										Add Due Date +

									<!-- @else -->
									<?php else: ?>
										No Due Date

									<?php endif; ?>

								<?php endif; ?>
							</span>
						</div>

						<?php if($args['can_edit']): ?>
							<div class="dropdown dropdown-right dropdown-top-flush padding-x padding-small-y no-padding-top" data-dropdown-width="max(100%,300px)" data-dropdown-max-height="400px">

								<label class="input-wrapper input-wrapper-vertical input-wrapper-block p">
									<span class="input-label font-weight-700">Due Date</span>
									<input type="date" class="input input-single-line" />
								</label>
								<label class="input-wrapper input-wrapper-vertical input-wrapper-block p">
									<span class="input-label font-weight-700">Due Time</span>
									<input type="time" class="input input-single-line" />
								</label>

							</div>
						<?php endif; ?>
						
					</form>

				<?php endif; ?>

			<!-- Total Time -->
				<?php if(FWAPPS_TEMPLATE == 'task-detail'): ?>

					<div class="flex-0-0 position-relative">
						
						<a href="<?= app_create_link(array('template' => 'task-detail-time')) ?>" class="btn btn-block-mobile no-radius font-weight-400 padding-small-x">
							<span>
								<i class="symbol symbol-time"></i> 
								<span class="REPLACE">04:20</span>
							</span>
						</a>
					
					</div>

				<?php endif; ?>


			<!-- Sync to wrike -->
				<?php if($args['can_edit']): ?>

					<form class="flex-0-0 padding-x">
						<div class=" input-wrapper input-wrapper-horizontal input-wrapper-block justify-content-flex-end">
							<label class="input-toggle input-toggle-primary input-toggle-reverse padding-small-y">
								<input type="checkbox" class="input"> 
								<span class="input-label input-toggle-label font-weight-700">
										Sync on Wrike
								</span>
							</label>
						</div>
					</form>

				<?php endif; ?>

			
		</div>
</div>