

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
	'members' => 0,
	'is_billable' => true,
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
<?php
$placeholder_members = array(
	array(
		'image' => FWAPPS_ROOT_URL.'/placeholder/profiles/team-des-jenna.jpg',
		'name' => 'Jenna Edwards',
		'title' => 'Senior Designer'
	),

	array(
		'image' => FWAPPS_ROOT_URL.'/placeholder/profiles/team-man-derrick.jpg',
		'name' => 'Derrick Tran',
		'title' => 'Project Manager'
	),

	array(
		'image' => FWAPPS_ROOT_URL.'/placeholder/profiles/team-dev-nadia.jpg',
		'name' => 'Nadia Rodriguez',
		'title' => 'Developer'
	),

	array(
		'image' => FWAPPS_ROOT_URL.'/placeholder/profiles/team-seo-ahmed.jpg',
		'name' => 'Ahmed Abouabdalla',
		'title' => 'SEO'
	),
);

?>



<div class="timetracker-module-subheader">
	<div class="flex-grid flex-grid-no-gutter flex-wrap align-items-stretch justify-content-start">

		<!-- status -->
			<?php if(str_contains(FWAPPS_TEMPLATE,'project-detail') || str_contains(FWAPPS_TEMPLATE,'task-detail')): ?>
				<form class="flex-child flex-1-0 border-style-solid-top border-color-theme-polar-contrast border-width-thin-top position-relative flex-xs">

					<!-- @NOTE hidden input types here -->

					<!-- @NOTE
						.btn
							classes to add (@NOTE: should match up with the colors we set up originally through task.js: /1p21_timetracker_web/time_tracker_webapp/static/vue/src/lib/task.js)
								`btn-neutral-glassy` => default/backlog/maintenance backlog/production backlog
								`btn-primary-glassy` => when in progress/production
								`btn-secondary-glassy` => when in review
								`btn-error-glassy` => when on hold
								`btn-success-glassy` => completed
								`cursor-default` => when user cannot edit
					-->
					<a href="#" data-toggle-dropdown class="btn btn-block btn-no-interaction no-radius overflow-hidden justify-content-center btn-primary-glassy
						<?= !$args['can_edit'] ? 'cursor-default' : '' ?>
					" >
						<span class="text-nowrap">
							<span class="color-base-alpha-5 margin-small-right hide-mobile">Status</span>
							<span class="hide-nonmobile">&bull;&nbsp;</span>
							<span class="color-theme">
								<span class="REPLACE">In Progress</span>
							</span>&nbsp;
							<i class="symbol symbol-arrow-down"></i>
						</span>
					</a>

					<!-- @if can edit -->
						<?php if($args['can_edit']): ?>
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
											<span class=" flex-grid flex-grid-no-gutter justify-content-space-between align-items-center flex-nowrap">
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
												<span class=" flex-grid flex-grid-no-gutter justify-content-space-between align-items-center flex-nowrap">
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
						<?php endif; ?>
				</form>
			<?php endif; ?>

		<!-- Type -->
			<?php if(str_contains(FWAPPS_TEMPLATE,'project-detail')): ?>

				<form class="flex-col-xs-12 flex-col-sm-9 flex-col-md-4 flex-col-lg-5 flex-0-3 border-style-solid-top border-color-theme-polar-contrast border-width-thin-top position-relative flex-xs">
				
					<!-- @NOTE hidden input types here -->

					<!-- @NOTE
						.btn
							`cursor-default` => when user cannot edit
					-->
					<a href="#" data-toggle-dropdown class="btn btn-block btn-no-interaction no-radius font-weight-400 overflow-hidden justify-content-flex-start flex-0-0
						<?= !$args['can_edit'] ? 'cursor-default' : '' ?>
					" >
	
						<i class="position-relative offset-micro-top inline-flex-xs  margin-small-top-negate margin-micro-right flex-0-0">
							<?php app_get_component('components/icon-project-type'); ?>
						</i>

						<span class="margin-right text-nowrap">
							Project Type +
						</span>

						<span class="flex-xs justify-content-space-between align-items-center flex-1-1 text-align-left">
							<span class="color-theme text-wrap-ellipsis font-weight-700">
								<?php if($args['has_data']): ?>
									<span class="REPLACE">Complete +</span>
								<?php else: ?>

									<?php if($args['can_edit']): ?>
										<!-- Leave Blank! -->
									<?php else: ?>
										<span class="color-neutral font-weight-400">Not set yet</span>
									<?php endif; ?>

								<?php endif; ?>
							</span>&nbsp;
							<?php if($args['can_edit']): ?>
								<i class="symbol symbol-arrow-down"></i>
							<?php endif; ?>
						</span>
					</a>

					

					<!-- @if can edit -->
						<?php if($args['can_edit']): ?>
							<?php app_get_component('components/dropdown-list-group','',false,array(
								'allow_multiple' => false,
								'list' => array(
									'Compete + ',
									'Compete',
									'PPC',
									'Premium Quick Launch',
									'Quick Launch',
									'A Project Type',
									'Another Project Type',
									'Other Project Type'
								)
							)); ?>
						<?php endif; ?>

					<span class="flex-0-0 divider border-style-solid-right border-color-theme-polar-contrast border-width-thin-right align-self-stretch hide-mobile"></span>
				</form>

			<?php endif; ?>

		<!-- Client -->
			<?php if(str_contains(FWAPPS_TEMPLATE,'project-detail')): ?>

				<form class="flex-col-xs-12 flex-col-sm-9 flex-col-md-4 flex-col-lg-5 flex-0-3 border-style-solid-top border-color-theme-polar-contrast border-width-thin-top position-relative flex-xs">
				
					<!-- @NOTE hidden input types here -->
					
					<!-- @NOTE
						.btn
							`cursor-default` => when user cannot edit
					-->
					<a href="#" data-toggle-dropdown class="btn btn-block btn-no-interaction no-radius font-weight-400 overflow-hidden justify-content-flex-start flex-0-0
						<?= !$args['can_edit'] ? 'cursor-default' : '' ?>
					" >
	
						<i class="position-relative offset-micro-top inline-flex-xs  margin-small-top-negate margin-micro-right flex-0-0">
							<?php app_get_component('components/icon-client'); ?>
						</i>

						<span class="margin-right text-nowrap">
							Client +
						</span>

						<span class="flex-xs justify-content-space-between align-items-center flex-1-1 text-align-left">
							<span class="color-theme text-wrap-ellipsis font-weight-700">
								<?php if($args['has_data']): ?>
									<span class="REPLACE">Wright Anything Agency</span>
								<?php else: ?>

									<?php if($args['can_edit']): ?>
										<!-- Leave Blank! -->
									<?php else: ?>
										<span class="color-neutral font-weight-400">Not set yet</span>
									<?php endif; ?>

								<?php endif; ?>
							</span>&nbsp;
						</span>
					</a>

					<!-- @if can edit -->
						<?php if($args['can_edit']): ?>
							<?php app_get_component('components/dropdown-list-group-search','',false,array(
								'search_placeholder' => 'Search Client',
								'allow_multiple' => false,
								'list' => array(
									'Wright & Co. Law',
									'Wrong Only Law, LLP',
									'WISE Agency',
									'Super Mario Bros.',
									'Nook Inc.',
									'Jollibee Food Corporation',
									'Bread',
									'A Company',
									'Another Company',
								)
							)); ?>
						<?php endif; ?>

					<span class="flex-0-0 divider border-style-solid-right border-color-theme-polar-contrast border-width-thin-right align-self-stretch hide-mobile"></span>
				</form>

			<?php endif; ?>
			

		<!-- Parent Project -->
			<?php if(str_contains(FWAPPS_TEMPLATE,'project-detail')): ?>

				<form class="flex-col-xs-12 flex-col-md-6 border-style-solid-top border-color-theme-polar-contrast border-width-thin-top position-relative flex-xs">
					
					<!-- @NOTE hidden input types here -->
					
				
					<!-- @NOTE
						.btn
							`cursor-default` => when user cannot edit
					-->
					<a href="#" data-toggle-dropdown class="btn btn-block btn-no-interaction no-radius font-weight-400 overflow-hidden justify-content-flex-start flex-0-0
						<?= !$args['can_edit'] ? 'cursor-default' : '' ?>
					" >
	
						<i class="position-relative offset-micro-top inline-flex-xs  margin-small-top-negate margin-micro-right flex-0-0">
							<?php app_get_component('components/icon-parent-project'); ?>
						</i>

						<span class="margin-right text-nowrap">
							Parent Project +
						</span>

						<span class="flex-xs justify-content-space-between align-items-center flex-1-1 text-align-left">
							<?php if($args['has_data']): ?>
								<span class="color-theme text-wrap-ellipsis font-weight-700">
									<span class="REPLACE">capcom.com (SEO)</span>
								</span>
							<?php else: ?>


								<?php if($args['can_edit']): ?>
									<!-- Leave Blank! -->
								<?php else: ?>
									<span class="color-neutral font-weight-400">Not set yet</span>
								<?php endif; ?>

							<?php endif; ?>
						</span>
					</a>

					<!-- @if can edit -->
						<?php if($args['can_edit']): ?>
							
							<?php app_get_component('components/dropdown-list-group-search','',false,array(
								'search_placeholder' => 'Search Client',
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

					<span class="flex-0-0 divider border-style-solid-right border-color-theme-polar-contrast border-width-thin-right align-self-stretch hide-mobile"></span>
				</form>

			<?php endif; ?>
		
			

		<!-- Owners  -->

			<?php if(str_contains(FWAPPS_TEMPLATE,'project-detail')): ?>

				<form class="flex-col-xs-12 flex-col-md-6 border-style-solid-top border-color-theme-polar-contrast border-width-thin-top position-relative flex-xs">
						
					<!-- @NOTE hidden input types here -->
					
				
					<!-- @NOTE
						.btn
							`cursor-default` => when user cannot edit
					-->
					<a href="#" data-toggle-dropdown class="btn-group btn-group-horizontal btn-block-mobile btn-no-interaction no-shadow no-radius font-weight-400 overflow-hidden justify-content-flex-start flex-0-0
						<?= !$args['can_edit'] ? 'cursor-default' : '' ?>
					" >
						<div class="btn flex-0-0 font-weight-400 justify-content-flex-start">

							<i class="position-relative offset-micro-top inline-flex-xs  margin-small-top-negate margin-micro-right flex-0-0">
								<?php app_get_component('components/icon-owners'); ?>
							</i>

							<span class="margin-right text-nowrap">
								Owners +
							</span>
						</div>
						
						<div class="btn no-padding-y no-border-left flex-1-0 font-weight-400 justify-content-flex-start align-items-center overflow-hidden no-padding-left">

							<!-- @if has user assigned -->
							<?php if($args['has_data']): ?>
								
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

										<!-- @if can edit -->
											<?php if($args['can_edit']): ?>
												<div class="thumbnail thumbnail-micro background-neutral-lightest">
													<span class="thumbnail-text color-neutral">
														<i class="symbol symbol-plus"></i>
													</span>
												</div>
											<?php else: ?>
												<div class="thumbnail thumbnail-micro background-neutral-lightest">
													<span class="thumbnail-text color-neutral">
														+ <span class="REPLACE">20</span>
													</span>
												</div>
											<?php endif; ?>
								</div>

							<?php else: ?>

								<?php if($args['can_edit']): ?>
									<!-- Leave Blank! -->
								<?php else: ?>
									<span class="color-neutral font-weight-400">Not set yet</span>
								<?php endif; ?>

							<?php endif; ?>

						</div>
					</a>

					<!-- @if can edit -->
						<?php if($args['can_edit']): ?>

							<?php app_get_component('components/dropdown-list-users-search','',false,array(
								'position_placeholder' => 'Select Job Position',
								'list_position' => array(
									'Job Position',
									'Another Position',
									'Other Position',
									'Account Manager',
									'Super Spy',
									'Assassin',
									'Telepath',
									'Lawyer',
									'Writer',
									'Judge',
									'Diplomat',
									'Nobel Prize Winner Physicist',
									'President',
									'Doctor',
									'Beach',
									'Reporter',
									'Mermaid',
									'Beach',
									'Weird'
								),
								'search_placeholder' => 'Search Members',
								'allow_multiple' => true,
								'list_users' => array(
									array(
										'image' => FWAPPS_ROOT_URL.'/placeholder/profiles/team-des-jenn.jpg',
										'name' => 'Jenn Aquino',
										'title' => 'Associate Director'
									),

									array(
										'image' => FWAPPS_ROOT_URL.'/placeholder/profiles/team-dev-garrett.jpg',
										'name' => 'Garrett Cullen',
										'title' => 'Developer'
									),
									array(
										'image' => FWAPPS_ROOT_URL.'/placeholder/profiles/team-des-jenna.jpg',
										'name' => 'Jenna Edwards',
										'title' => 'Senior Designer'
									),
									array(
										'image' => FWAPPS_ROOT_URL.'/placeholder/profiles/team-des-stacy.jpg',
										'name' => 'Stacy Garcia',
										'title' => 'Designer'
									),

									array(
										'image' => FWAPPS_ROOT_URL.'/placeholder/files/shrek.jpg',
										'name' => 'Nikky Hwang',
										'title' => 'Developer'
									),

									array(
										'image' => FWAPPS_ROOT_URL.'/placeholder/profiles/team-des-chuy.jpg',
										'name' => 'Jesus Maldonado',
										'title' => 'Designer'
									),

									array(
										'image' => FWAPPS_ROOT_URL.'/placeholder/files/shrek.jpg',
										'name' => 'Paola Moreno',
										'title' => 'Designer'
									),

									array(
										'image' => FWAPPS_ROOT_URL.'/placeholder/profiles/team-dev-nadia.jpg',
										'name' => 'Nadia Rodriguez',
										'title' => 'Developer'
									),

									array(
										'image' => FWAPPS_ROOT_URL.'/placeholder/files/shrek.jpg',
										'name' => 'Mark Silva',
										'title' => 'Developer'
									),

									array(
										'image' => FWAPPS_ROOT_URL.'/placeholder/profiles/team-dev-sam.jpg',
										'name' => 'Sam Zabala',
										'title' => 'Developer'
									),

									array(
										'image' => FWAPPS_ROOT_URL.'/placeholder/files/donk.jpg',
										'name' => 'Shrek 2',
										'title' => 'Best Shrek Installment'
									),
								)
							)); ?>

						<?php endif; ?>
				</form>

			<?php endif; ?>


		<!-- Members -->
		<?php if(str_contains(FWAPPS_TEMPLATE,'project-detail') || str_contains(FWAPPS_TEMPLATE,'client-detail')): ?>

			<form class="flex-col-xs-12 flex-col-md-9 flex-1-1 border-style-solid-top border-color-theme-polar-contrast border-width-thin-top position-relative flex-xs flex-nowrap">
						
				<!-- @NOTE hidden input types here -->

				<!-- @NOTE
					.btn
						`cursor-default` => when user cannot edit
				-->
				<a href="#subheader-members-dropdown" data-toggle-dropdown class="btn btn-no-interaction no-radius font-weight-400 no-padding-right overflow-hidden justify-content-flex-start flex-0-0 align-self-flex-start padding-y 
					<?= !$args['can_edit'] ? 'cursor-default' : '' ?>
				" >

					<i class="position-relative offset-micro-top inline-flex-xs  margin-small-top-negate margin-micro-right flex-0-0">
						<?php app_get_component('components/icon-members'); ?>
					</i>

					<span class="margin-right text-nowrap">
						Team Members +
					</span>
				</a>


				<!-- @if can edit -->
				<?php if($args['can_edit']): ?>

					<!-- @NOTE
						needs an id attribute for 2nd instance of data-toggle-dropdown for this info block to work
				
					-->
					<?php app_get_component('components/dropdown-list-users-search','',false,array(
						'id' => 'subheader-members-dropdown',
						'position_placeholder' => 'Select Job Position',
						'list_position' => array(
							'Job Position',
							'Another Position',
							'Other Position',
							'Account Manager',
							'Super Spy',
							'Assassin',
							'Telepath',
							'Lawyer',
							'Writer',
							'Judge',
							'Diplomat',
							'Nobel Prize Winner Physicist',
							'President',
							'Doctor',
							'Beach',
							'Reporter',
							'Mermaid',
							'Beach',
							'Weird'
						),
						'search_placeholder' => 'Search Members',
						'allow_multiple' => true,
						'list_users' => array(
							array(
								'image' => FWAPPS_ROOT_URL.'/placeholder/profiles/team-des-jenn.jpg',
								'name' => 'Jenn Aquino',
								'title' => 'Associate Director'
							),

							array(
								'image' => FWAPPS_ROOT_URL.'/placeholder/profiles/team-dev-garrett.jpg',
								'name' => 'Garrett Cullen',
								'title' => 'Developer'
							),
							array(
								'image' => FWAPPS_ROOT_URL.'/placeholder/profiles/team-des-jenna.jpg',
								'name' => 'Jenna Edwards',
								'title' => 'Senior Designer'
							),
							array(
								'image' => FWAPPS_ROOT_URL.'/placeholder/profiles/team-des-stacy.jpg',
								'name' => 'Stacy Garcia',
								'title' => 'Designer'
							),

							array(
								'image' => FWAPPS_ROOT_URL.'/placeholder/files/shrek.jpg',
								'name' => 'Nikky Hwang',
								'title' => 'Developer'
							),

							array(
								'image' => FWAPPS_ROOT_URL.'/placeholder/profiles/team-des-chuy.jpg',
								'name' => 'Jesus Maldonado',
								'title' => 'Designer'
							),

							array(
								'image' => FWAPPS_ROOT_URL.'/placeholder/files/shrek.jpg',
								'name' => 'Paola Moreno',
								'title' => 'Designer'
							),

							array(
								'image' => FWAPPS_ROOT_URL.'/placeholder/profiles/team-dev-nadia.jpg',
								'name' => 'Nadia Rodriguez',
								'title' => 'Developer'
							),

							array(
								'image' => FWAPPS_ROOT_URL.'/placeholder/files/shrek.jpg',
								'name' => 'Mark Silva',
								'title' => 'Developer'
							),

							array(
								'image' => FWAPPS_ROOT_URL.'/placeholder/profiles/team-dev-sam.jpg',
								'name' => 'Sam Zabala',
								'title' => 'Developer'
							),

							array(
								'image' => FWAPPS_ROOT_URL.'/placeholder/files/donk.jpg',
								'name' => 'Shrek 2',
								'title' => 'Best Shrek Installment'
							),
						)
					)); ?>

				<?php endif; ?>

			
				

				<div class="align-self-center flex-xs align-items-center flex-wrap flex-1-1">

					<!-- @if has users assigned -->
					<?php if($args['has_data']): ?>
						
						
						<!-- @loop div -->
						<div class="flex-0-0 position-relative flex-xs align-items-center flex-nowrap radius-small padding-micro margin-micro-y margin-micro-x background-neutral-alpha-1 pointer-reference">
							<div class="flex-0-0">

								<?php app_get_component('components/thumbnail-small','',false,array(
									'image' => $placeholder_members[0]['image'],
								)); ?>
							</div>
							<div class="flex-1-1 hide-mobile text-align-left">
								<div class="margin-small-left padding-small-right">
									<p class="no-margin"><span class="REPLACE"><?=$placeholder_members[0]['name'] ?></span></p>
									<p class="no-margin color-neutral"><?=$placeholder_members[0]['title'] ?></p>
								</div>
							</div>

							<!-- @if can edit -->
							<?php if($args['can_edit']): ?>
								<a href="#" class="timetracker-btn-micro btn btn-small btn-symbol btn-neutral btn-round position-absolute offset-small-right-negate offset-small-top-negate only-hover">
									<i class="symbol symbol-close"></i>
								</a>
							<?php endif; ?>
						</div>


						<!-- @PLACEHOLDER: Delete when ready -->
						<?php for($i = 1; $i < $args['members'] && $i < count($placeholder_members); $i++): ?>

						
						
							<!-- @loop div -->
							<div class="flex-0-0 position-relative flex-xs align-items-center flex-nowrap radius-small padding-micro margin-micro-y margin-micro-x background-neutral-alpha-1 pointer-reference">
								<div class="flex-0-0">

									<?php app_get_component('components/thumbnail-small','',false,array(
										'image' => $placeholder_members[$i]['image'],
									)); ?>
								</div>
								<div class="flex-1-1 hide-mobile text-align-left">
									<div class="margin-small-left padding-small-right">
										<p class="no-margin"><span class="REPLACE"><?=$placeholder_members[$i]['name'] ?></span></p>
										<p class="no-margin color-neutral"><?=$placeholder_members[$i]['title'] ?></p>
									</div>
								</div>

								<!-- @if can edit -->
								<?php if($args['can_edit']): ?>
									<a href="#" class="timetracker-btn-micro btn btn-small btn-symbol btn-neutral btn-round position-absolute offset-small-right-negate offset-small-top-negate only-hover">
										<i class="symbol symbol-close"></i>
									</a>
								<?php endif; ?>
							</div>
						<?php endfor; ?>

					<?php else: ?>

						<?php if($args['can_edit']): ?>
							<!-- Leave Blank! -->
						<?php else: ?>
							<span class="color-neutral font-weight-400">Not set yet</span>
						<?php endif; ?>

					<?php endif; ?>







					<!-- @if can edit -->

					<?php if($args['can_edit']): ?>
						<div class="padding-small-y">
							<a href="#subheader-members-dropdown" data-toggle-dropdown class="thumbnail thumbnail-small background-neutral-alpha-2 margin-micro-x">
								<span class="thumbnail-text color-neutral"><i class="symbol symbol-plus"></i></span>
								<span class="sr-only">Add member</span>
							</a>
						</div>
					<?php endif; ?>


				</div>

				<span class="flex-0-0 divider border-style-solid-right border-color-theme-polar-contrast border-width-thin-right align-self-stretch hide-mobile"></span>

					
			</form>

		<?php endif; ?>


	<!-- Billable Accordion Toggle -->
		<?php if(str_contains(FWAPPS_TEMPLATE,'project-detail')): ?>

				<!-- @NOTE
					[data-toggle-accordion]
						`cursor-default` => when user cannot edit
				-->
			<div data-toggle-accordion class="flex-child flex-1-0 border-style-solid-top border-color-theme-polar-contrast border-width-thin-top position-relative flex-xs color-inherit text-decoration-none pointer-reference
				<?= !$args['can_edit'] ? 'cursor-default' : '' ?>
			">

				
				<div class="btn btn-block btn-no-interaction no-radius font-weight-400 overflow-hidden justify-content-flex-start flex-0-0  background-neutral-alpha-1" >

					<i class="position-relative offset-micro-top inline-flex-xs  margin-small-top-negate margin-micro-right flex-0-0">
						<?php app_get_component('components/icon-billable'); ?>
					</i>

					<span class="margin-right text-nowrap">
						Billing Type
					</span>

					<span class="flex-xs justify-content-space-between align-items-center flex-1-1 text-align-left">
						<span class="color-theme text-wrap-ellipsis font-weight-700 flex-1-1">

							<span class="REPLACE">
								<?= $args['is_billable'] ? 'Billable' : 'Non-Billable' ?> 
							</span>

						</span>&nbsp;
						<?php if($args['can_edit']): ?>
							<i class="symbol symbol-arrow-down"></i>
						<?php endif; ?>
					</span>
				</div>

				<span class="flex-0-0 divider border-style-solid-right border-color-theme-polar-contrast border-width-thin-right align-self-stretch hide-mobile"></span>
			</div>

			<?php endif; ?>


	<!--  Billable -->
	<?php if(str_contains(FWAPPS_TEMPLATE,'project-detail')): ?>

		<!-- @if user can edit -->
		<?php if($args['can_edit']): ?>

			<form class="accordion flex-col-xs-12 flex-0-0 border-style-solid-top border-color-theme-polar-contrast border-width-thin-top position-relative flex-xs">
				
				<!-- @NOTE hidden input types here -->

				<div class="padding-x flex-1-1">

					<div class="flex-grid flex-grid-expanded flex-grid-no-gutter-y align-items-flex-start">
						<div class="flex-col-xs-12 flex-col-md-6 flex-col-lg-5 flex-0-0">
							<div class="flex-grid flex-grid-compact flex-grid-no-gutter-y">
								<div class="flex-col-xs-12 flex-col-sm-6">
									<label class="input-wrapper input-wrapper-vertical input-wrapper-block p">
										<span class="input-label">Billing Type</span>
										<select name="" class="input input-single-line input-block">
											<option value="" <?= !$args['is_billable'] ? 'selected' : '' ?> >Non-Billable</option>
											<option value="billable"  <?= $args['is_billable'] ? 'selected' : '' ?>>Billable</option>
										</select>
									</label>
								</div>

								<!-- NOTE:
									classes to add
										'disabled' => if billing type is non-billable
								-->
								<div class="flex-col-xs-12 flex-col-sm-6
									<?= $args['is_billable'] ? '' : 'disabled' ?> 
								">

									<label class="input-wrapper input-wrapper-vertical input-wrapper-block p">
										<span class="input-label">Hourly Cost</span>
										<div class="input-group input-group-horizontal input-block">
											<span class="btn btn-no-interaction btn btn-default font-weight-400 padding-micro-right no-shadow">$</span>
											<input class="input input-single-line input-block no-border-left padding-micro-left no-shadow" placeholder="00.00" step=".01" type="number"
											<?= $args['has_data'] ? 'value="31"' : '' ?>
											>
										</div>
									</label>

								</div>
							</div>
						</div>

						<!-- NOTE:
							classes to add
								'disabled' => if billing type is non-billable
						-->
						<div class="flex-col-xs-12 flex-col-lg-7 flex-0-0
							<?= $args['is_billable'] ? '' : 'disabled' ?> 
						">
							<div class="input-wrapper input-wrapper-vertical input-wrapper-block p">
								<span class="input-label">Budget</span>
								<div class="input-group input-group-horizontal input-block input-group-responsive text-nowrap">
									
									<select name="" class="input input-single-line flex-1-0">
										<option value="">Select</option>

										<!-- @PLACEHOLDER  -->
										<option value="" 
											<?= $args['has_data'] ? 'selected' : '' ?>>Total Project Hours</option>
										<option value="">A Budget Type</option>
										<option value="">Another Budget Type</option>
										<option value="">Other Budget Type</option>
									</select>

									<input class="input input-single-line flex-1-0" placeholder="00" step="1" type="number"
										<?= $args['has_data'] ? 'value="31"' : '' ?>
									>

									<label class="input input-single-line  flex-1-0 flex-xs justify-content-space-between">
										Reset Budget Monthly <input type="checkbox" class="margin-small-left input input-inline align-self-center"
											<?= $args['has_data'] ? 'checked' : '' ?>
										>
									</label>
								</div>
							</div>
		
						</div>



						<!-- NOTE:
							classes to add
								'disabled' => if billing type is non-billable
						-->
						<div class="flex-col-xs-12 flex-col-md-6 flex-col-lg-5 flex-1-0
							<?= $args['is_billable'] ? '' : 'disabled' ?> 
						">
							<div class="flex-grid flex-grid-no-gutter-y flex-nowrap">
								<div class="flex-child flex-0-0 align-self-flex-end">
									<label class="input-wrapper input-wrapper-vertical input-wrapper-block p">
										<span class="input-label">Alerts</span>
										<select name="" class="input input-single-line input-block">
											<option value="">No</option>
											<option value=""<?= $args['has_data'] ? 'selected' : '' ?>  >Yes</option>
										</select>
									</label>
								</div>
								<div class="flex-child flex-1-0 align-self-flex-end">
									<label class="p">
										<span class="input-label padding-small-right">When project is at</span>
										<!-- @NOTE:
											attributes to add
											disabled => when alerts is no
										-->
										<input class="input input-single-line color-inherit font-weight-400 no-padding-x text-align-center" placeholder="00" step="1" max="100" min="1" type="number"
											<?= $args['has_data'] ? 'value="31"' : '' ?>
										style="width: 7ch;" 
										>
										<span class="input-label padding-small-left">% of budget</span>
									</label>

								</div>
							</div>
						</div>
						


						<!-- NOTE:
							classes to add
								'disabled' => if billing type is non-billable AND alerts is no
						-->
						<div class="flex-col-xs-12 flex-col-md-6 flex-col-lg-7 flex-1-1
							<?= $args['is_billable'] ? '' : 'disabled' ?> 
						">
							<div class="input-wrapper input-wrapper-vertical input-wrapper-block p">
								<span class="input-label">Alert Assignees</span>
								
								<!-- @NOTE hidden input types here -->
								
								<!-- @NOTE
									.btn
										`cursor-default` => when user cannot edit
								-->
								<a href="#" data-toggle-dropdown class="input input-select input-block text-decoration-none color-inherit
									<?= !$args['can_edit'] ? 'cursor-default' : '' ?>
								">
									<?php if($args['has_data']): ?>
										<span class="REPLACE">Jenna Edwards, Derrick Tran, Mike Perez</span>
									<?php else: ?>
											<span class="color-neutral font-weight-400">Select</span>
									<?php endif; ?>
								</a>

								<!-- @if can edit -->
									<?php if($args['can_edit']): ?>

										<?php app_get_component('components/dropdown-list-users-search','',false,array(
											'position_placeholder' => 'Select Job Position',
											'list_position' => array(
												'Job Position',
												'Another Position',
												'Other Position',
												'Account Manager',
												'Super Spy',
												'Assassin',
												'Telepath',
												'Lawyer',
												'Writer',
												'Judge',
												'Diplomat',
												'Nobel Prize Winner Physicist',
												'President',
												'Doctor',
												'Beach',
												'Reporter',
												'Mermaid',
												'Beach',
												'Weird'
											),
											'search_placeholder' => 'Search Members',
											'allow_multiple' => true,
											'list_users' => array(
												array(
													'image' => FWAPPS_ROOT_URL.'/placeholder/profiles/team-des-jenn.jpg',
													'name' => 'Jenn Aquino',
													'title' => 'Associate Director'
												),

												array(
													'image' => FWAPPS_ROOT_URL.'/placeholder/profiles/team-dev-garrett.jpg',
													'name' => 'Garrett Cullen',
													'title' => 'Developer'
												),
												array(
													'image' => FWAPPS_ROOT_URL.'/placeholder/profiles/team-des-jenna.jpg',
													'name' => 'Jenna Edwards',
													'title' => 'Senior Designer'
												),
												array(
													'image' => FWAPPS_ROOT_URL.'/placeholder/profiles/team-des-stacy.jpg',
													'name' => 'Stacy Garcia',
													'title' => 'Designer'
												),

												array(
													'image' => FWAPPS_ROOT_URL.'/placeholder/files/shrek.jpg',
													'name' => 'Nikky Hwang',
													'title' => 'Developer'
												),

												array(
													'image' => FWAPPS_ROOT_URL.'/placeholder/profiles/team-des-chuy.jpg',
													'name' => 'Jesus Maldonado',
													'title' => 'Designer'
												),

												array(
													'image' => FWAPPS_ROOT_URL.'/placeholder/files/shrek.jpg',
													'name' => 'Paola Moreno',
													'title' => 'Designer'
												),

												array(
													'image' => FWAPPS_ROOT_URL.'/placeholder/profiles/team-dev-nadia.jpg',
													'name' => 'Nadia Rodriguez',
													'title' => 'Developer'
												),

												array(
													'image' => FWAPPS_ROOT_URL.'/placeholder/files/shrek.jpg',
													'name' => 'Mark Silva',
													'title' => 'Developer'
												),

												array(
													'image' => FWAPPS_ROOT_URL.'/placeholder/profiles/team-dev-sam.jpg',
													'name' => 'Sam Zabala',
													'title' => 'Developer'
												),

												array(
													'image' => FWAPPS_ROOT_URL.'/placeholder/files/donk.jpg',
													'name' => 'Shrek 2',
													'title' => 'Best Shrek Installment'
												),
											)
										)); ?>

										<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			</form>
		<?php endif; ?>

	<?php endif; ?>
	

		










































		<!-- DO NOT COPY THESE CHILDREN ELEMENTS BELOW FOR NOW -->
			<!-- @NOTE: Do not include for now -->
			<!-- Assignee + Assignee edit-->
			<?php if(str_contains(FWAPPS_TEMPLATE,'task-detail')): ?>
				
				
				<form class="flex-col-xs-9 flex-col-sm-6 flex-col-md-4 flex-1-0 border-style-solid-top border-color-theme-polar-contrast border-width-thin-top position-relative flex-xs">
					
					<!-- @NOTE hidden input types here -->
				
					<!-- @NOTE
						.btn
							`cursor-default` => when user cannot edit
					-->
					<a href="#" data-toggle-dropdown class="btn-group btn-group-horizontal btn-block-mobile btn-no-interaction no-shadow no-radius font-weight-400 overflow-hidden justify-content-flex-start flex-1-1
						<?= !$args['can_edit'] ? 'cursor-default' : '' ?>
					" >
						<div class="btn flex-0-0 font-weight-400 justify-content-flex-start">

							<i class="position-relative offset-micro-top inline-flex-xs  margin-small-top-negate margin-micro-right flex-0-0">
								<?php app_get_component('components/icon-members'); ?>
							</i>

							<span class="margin-right text-nowrap">
								Assignees +
							</span>
						</div>
						
						<div class="btn no-padding-y no-border-left flex-1-0 font-weight-400 justify-content-flex-start align-items-center overflow-hidden no-padding-left">

							<!-- @if has user assigned -->
							<?php if($args['has_data']): ?>
								
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
												<div class="thumbnail thumbnail-micro background-neutral-lightest">
													<span class="thumbnail-text color-neutral">
														<i class="symbol symbol-plus"></i>
													</span>
												</div>
								</div>

							<?php else: ?>

								<?php if($args['can_edit']): ?>
									<!-- Leave Blank! -->
								<?php else: ?>
									<span class="color-neutral font-weight-400">Not set yet</span>
								<?php endif; ?>

							<?php endif; ?>

						</div>
					</a>

					<!-- @if can edit -->
						<?php if($args['can_edit']): ?>

							<?php app_get_component('components/dropdown-list-users-search','',false,array(
								'position_placeholder' => 'Select Job Position',
								'list_position' => array(
									'Job Position',
									'Another Position',
									'Other Position',
									'Account Manager',
									'Super Spy',
									'Assassin',
									'Telepath',
									'Lawyer',
									'Writer',
									'Judge',
									'Diplomat',
									'Nobel Prize Winner Physicist',
									'President',
									'Doctor',
									'Beach',
									'Reporter',
									'Mermaid',
									'Beach',
									'Weird'
								),
								'search_placeholder' => 'Search Members',
								'allow_multiple' => true,
								'list_users' => array(
									array(
										'image' => FWAPPS_ROOT_URL.'/placeholder/profiles/team-des-jenn.jpg',
										'name' => 'Jenn Aquino',
										'title' => 'Associate Director'
									),

									array(
										'image' => FWAPPS_ROOT_URL.'/placeholder/profiles/team-dev-garrett.jpg',
										'name' => 'Garrett Cullen',
										'title' => 'Developer'
									),
									array(
										'image' => FWAPPS_ROOT_URL.'/placeholder/profiles/team-des-jenna.jpg',
										'name' => 'Jenna Edwards',
										'title' => 'Senior Designer'
									),
									array(
										'image' => FWAPPS_ROOT_URL.'/placeholder/profiles/team-des-stacy.jpg',
										'name' => 'Stacy Garcia',
										'title' => 'Designer'
									),

									array(
										'image' => FWAPPS_ROOT_URL.'/placeholder/files/shrek.jpg',
										'name' => 'Nikky Hwang',
										'title' => 'Developer'
									),

									array(
										'image' => FWAPPS_ROOT_URL.'/placeholder/profiles/team-des-chuy.jpg',
										'name' => 'Jesus Maldonado',
										'title' => 'Designer'
									),

									array(
										'image' => FWAPPS_ROOT_URL.'/placeholder/files/shrek.jpg',
										'name' => 'Paola Moreno',
										'title' => 'Designer'
									),

									array(
										'image' => FWAPPS_ROOT_URL.'/placeholder/profiles/team-dev-nadia.jpg',
										'name' => 'Nadia Rodriguez',
										'title' => 'Developer'
									),

									array(
										'image' => FWAPPS_ROOT_URL.'/placeholder/files/shrek.jpg',
										'name' => 'Mark Silva',
										'title' => 'Developer'
									),

									array(
										'image' => FWAPPS_ROOT_URL.'/placeholder/profiles/team-dev-sam.jpg',
										'name' => 'Sam Zabala',
										'title' => 'Developer'
									),

									array(
										'image' => FWAPPS_ROOT_URL.'/placeholder/files/donk.jpg',
										'name' => 'Shrek 2',
										'title' => 'Best Shrek Installment'
									),
								)
							)); ?>

						<?php endif; ?>


					<span class="flex-0-0 divider border-style-solid-right border-color-theme-polar-contrast border-width-thin-right align-self-stretch hide-mobile"></span>
				</form>

			<?php endif; ?>
				

			<!-- @NOTE: Do not include for now -->
			<!-- Task Project -->
				<?php if(str_contains(FWAPPS_TEMPLATE,'task-detail')): ?>
					<form class="flex-col-xs-12 flex-col-sm-6 flex-col-md-3 border-style-solid-top border-color-theme-polar-contrast border-width-thin-top position-relative flex-xs">

						<!-- @NOTE hidden input types here -->

						<!-- @NOTE
							.btn
								`cursor-default` => when user cannot edit
						-->
						<a href="#" data-toggle-dropdown class="btn btn-block btn-no-interaction no-radius font-weight-400 overflow-hidden justify-content-flex-start flex-0-0
							<?= !$args['can_edit'] ? 'cursor-default' : '' ?>
						" >
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
						</a>

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

						<span class="flex-0-0 divider border-style-solid-right border-color-theme-polar-contrast border-width-thin-right align-self-stretch"></span>
					</form>
				<?php endif; ?>

			<!-- @NOTE: Do not include for now -->
			<!-- Category -->
				<?php if(str_contains(FWAPPS_TEMPLATE,'task-detail')): ?>
					<form class="flex-col-xs-12 flex-col-sm-6 flex-col-md-3 border-style-solid-top border-color-theme-polar-contrast border-width-thin-top position-relative flex-xs">

						<!-- @NOTE hidden input types here -->

						<!-- @NOTE
						.btn
							`cursor-default` => when user cannot edit
						-->
						<a href="#" data-toggle-dropdown class="btn btn-block btn-no-interaction no-radius font-weight-400 overflow-hidden justify-content-flex-start flex-0-0
							<?= !$args['can_edit'] ? 'cursor-default' : '' ?>
						" >
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
						</a>

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

						<span class="flex-0-0 divider border-style-solid-right border-color-theme-polar-contrast border-width-thin-right align-self-stretch hide-mobile"></span>
					</form>
				<?php endif; ?>

				<!-- Billable -->
				<?php if(str_contains(FWAPPS_TEMPLATE,'task-detail')): ?>

					<form class="flex-child flex-1-1 border-style-solid-top border-color-theme-polar-contrast border-width-thin-top position-relative flex-xs align-items-center">

					<div class="padding-x flex-1-1">
						<?php if($args['can_edit']): ?>

							<!-- @NOTE hidden input types here -->

							
							<label class="input input-toggle">
								<input type="checkbox" class="input">
								<span class="input-toggle-label">Billable?</span>
							</label>
						<?php else: ?>
							<strong>Billable</strong>
						<?php endif; ?>
					</div>

						<span class="flex-0-0 divider border-style-solid-right border-color-theme-polar-contrast border-width-thin-right align-self-stretch"></span>
					</form>
				<?php endif; ?>


			
			<!-- @NOTE: Do not include for now -->
			<!-- Due date + time -->
				<?php if(str_contains(FWAPPS_TEMPLATE,'task-detail')): ?>
					<form class="flex-child flex-0-0 border-style-solid-top border-color-theme-polar-contrast border-width-thin-top position-relative flex-xs">
						
						<!-- @NOTE hidden input types here -->

						<!-- @NOTE
						.btn
							`cursor-default` => when user cannot edit
						-->
						<a href="#" data-toggle-dropdown class="btn btn-block btn-no-interaction no-radius font-weight-400 overflow-hidden justify-content-flex-start flex-0-0
							<?= !$args['can_edit'] ? 'cursor-default' : '' ?>
						" >
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
						</a>

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

						<span class="flex-0-0 divider border-style-solid-right border-color-theme-polar-contrast border-width-thin-right align-self-stretch"></span>
						
					</form>

				<?php endif; ?>


			<!-- @NOTE: Do not include for now -->
			<!-- Total Time -->
			<?php if(FWAPPS_TEMPLATE == 'task-detail'): ?>

				<div class="flex-child flex-0-0 border-style-solid-top border-color-theme-polar-contrast border-width-thin-top position-relative flex-xs">
					
					<a href="<?= app_create_link(array('template' => 'task-detail-time')) ?>" class="btn btn-block no-radius font-weight-400 padding-small-x">
						<span>
							<i class="symbol symbol-time"></i> 
							<span class="REPLACE">04:20</span>
						</span>
					</a>

				</div>

			<?php endif; ?>


		<!-- END OF DO NOT COPY THESE CHILDREN ELEMENTS BELOW FOR NOW -->
		
	</div>
		
</div>