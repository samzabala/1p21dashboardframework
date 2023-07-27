<!-- @PLACEHOLDER delete when ready -->
	<?
	$placeholder_cli = array(
		'Wrong Only Law, LLP' => array(
			'asinine-attorney.com (SEO)',
			'stepladder.asinine-attorney.com (PPC)',
			'ladder.asinine-attorney.com (PPC)',
		),
		'WISE Agency' => array(
			'spy-family.net (SEO)',
		),
		'Super Mario Bros.' => array(
			'www.smashbros.com (SEO)',
			'mario.nintendo.com (PPC)',
			'nintendo.com (SEO)',
		),
		'Nook Inc.' => array(
			'animal-crossing.com (SEO)',
			'animalcrossingworld.com (SEO)',
			'ac-pocketcamp.com (SEO)',
		),
		'Jollibee Food Corporation' => array(
			'jollibee.com.ph (SEO)',
			'jollibeefoods.com (SEO)',
			'jollibeedelivery.com (SEO)',
			'jollibeemalaysia.com (SEO)',
			'jollibeeuae.com (SEO)',
			'jolliwasp.com (PPC)',
		),
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
					<span class="hide-nonmobile">Select all clients</span>
				</label>
			</th>
			<th class="font-weight-700 color-theme">
				Client
				<!-- a @NOTES: classes to add:
					'active' => when ascending order
					'' => when descending order
				-->
				<a href="#" class="color-inherit"><i class="symbol symbol-caret-down symbol-caret-up-toggle"></i></a>
			</th>
			<th class="font-weight-700 color-theme text-align-center no-border-bottom timetracker-td timetracker-td-w timetracker-td-w-150">
				Sales
			</th>
			<th class="font-weight-700 color-theme text-align-center no-border-bottom timetracker-td timetracker-td-w timetracker-td-w-150">
				Account Manager
			</th>
			<th class="font-weight-700 color-theme text-align-center no-border-bottom timetracker-td timetracker-td-w timetracker-td-w-150">
				Project Manager
			</th>
			<th class="font-weight-700 color-theme text-align-center no-border-bottom timetracker-td timetracker-td-w timetracker-td-w-150">
				SEO
			</th>
			<th class="font-weight-700 color-theme">Projects</th>
			<th class="no-border-bottom timetracker-td-actions text-align-center" width="50">
				<div class="bulk-actions position-relative">
					<?php app_get_component('components/modal-actions','',false,array(
						'links' => array(
							'Bulk delete'
								=> '#',
							'Bulk update'
								=> '#',
							'Bulk something'
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
						<span class="hide-nonmobile">Select client</span>
					</label>
				</td>
				<td class="no-border-bottom timetracker-td">
					<a href="<?= app_create_link(array('template' => 'client-detail')); ?>" class="h4 color-inherit font-weight-400 no-margin-y display-inline-block">
						<span class="REPLACE">
							Wright & Co. Law
						</span>	
					</a>
				</td>
				<td class="text-align-center no-border-bottom timetracker-td timetracker-td-w timetracker-td-w-150">
					<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Sales</span>
					<?php app_get_component('components/thumbnail-small'); ?>
				</td>
				<td class="text-align-center no-border-bottom timetracker-td timetracker-td-w timetracker-td-w-150">
					<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Account Manager</span>
					<?php app_get_component('components/thumbnail-small'); ?>
				</td>
				<td class="hide-mobile text-align-center no-border-bottom timetracker-td timetracker-td-w timetracker-td-w-150">
					<span class="spacer">&nbsp;</span>
				</td>
				<td class="hide-mobile text-align-center no-border-bottom timetracker-td timetracker-td-w timetracker-td-w-150">
					<span class="spacer">&nbsp;</span>
				</td>
				<td class="no-border-bottom timetracker-td timetracker-td-w timetracker-td-w-75 text-align-center">
					
					<!-- @if has projects -->
						<a class="hide-nonmobile" href="#entry-projects-REPLACEID"  data-toggle-accordion>
							<i class="symbol symbol-arrow-down symbol-arrow-up-toggle"></i> View projects
						</a>
						<a href="#entry-projects-REPLACEID" class="hide-mobile btn btn-small btn-primary-outline btn-symbol btn-round " data-toggle-accordion>
							<i class="symbol symbol-arrow-down symbol-arrow-up-toggle"></i>
						</a>
				</td>
				<td class="no-border-bottom timetracker-td-actions text-align-center" width="50">
					<div class="bulk-actions position-relative">
						<?php app_get_component('components/modal-actions','',false,array(
							'links' => array(
								'Edit'
									=> '#',
								'Delete'
									=> '#',
							)
						)) ?>
					</div>
				</td>
			</tr>
				<tbody class="accordion" id="entry-projects-REPLACEID">
					<!--@loop .tr  -->
						<tr class="background-primary-alpha-1">
							<td class="hide-mobile no-border-bottom timetracker-td text-align-center timetracker-td timetracker-td-w timetracker-td-w-50">
								<span class="spacer">&nbsp;</span>
							</td>
							<td class="timetracker-td">
								<span class="flex-md">
									<label class="input-label no-padding margin-right">
										<input type="checkbox" class="input-inline">
										<span class="hide-nonmobile">Select client</span>
									</label>
									<br class="hide-nonmobile">
									<br class="hide-nonmobile">
									<a href="<?= app_create_link(array('template' => 'project-detail')); ?>" class="no-margin-y display-inline-block color-inherit">
										<span class="REPLACE">
											ace-attorney.com
										</span>	
									</a>
								</span>
							</td>
							<td class="hide-mobile text-align-center no-border-bottom timetracker-td timetracker-td-w timetracker-td-w-150">
								<span class="spacer">&nbsp;</span>
							</td>
							<td class="hide-mobile text-align-center no-border-bottom timetracker-td timetracker-td-w timetracker-td-w-150">
								<span class="spacer">&nbsp;</span>
							</td>
							<td class="text-align-center no-border-bottom timetracker-td timetracker-td-w timetracker-td-w-150">
								<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Project Manager</span>
								<?php app_get_component('components/thumbnail-small'); ?>
							</td>
							<td class="text-align-center no-border-bottom timetracker-td timetracker-td-w timetracker-td-w-150">
								<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">SEO</span>
								<?php app_get_component('components/thumbnail-small'); ?>
							</td>
							<td class="no-border-bottom timetracker-td timetracker-td-w timetracker-td-w-75 text-align-center">
								<span class="spacer">&nbsp;</span>
							</td>
							<td class="no-border-bottom timetracker-td-actions text-align-center" width="50">
								<div class="bulk-actions position-relative">
									<?php app_get_component('components/modal-actions','',false,array(
										'links' => array(
											'Edit'
												=> '#',
											'Delete'
												=> '#',
										)
									)) ?>
								</div>
							</td>
						</tr>
				</tbody>



			<?php $h = 0; foreach($placeholder_cli as $cli => $projects): ?>
				<tr>
					<td class="text-align-center no-border-bottom timetracker-td text-align-center timetracker-td timetracker-td-w timetracker-td-w-50">
						<label class="input-label no-padding">
							<input type="checkbox" class="input-inline">
							<span class="hide-nonmobile">Select client</span>
						</label>
					</td>
					<td class="no-border-bottom timetracker-td">
						<a href="<?= app_create_link(array('template' => 'client-detail')); ?>" class="h4 color-inherit font-weight-400 no-margin-y display-inline-block">
							<span class="REPLACE">
								<?= $cli; ?>
							</span>	
						</a>
					</td>
					<td class="text-align-center no-border-bottom timetracker-td timetracker-td-w timetracker-td-w-150">
						<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Project Manager</span>
						<?php app_get_component('components/thumbnail-small','',false,array(
							'initials' => $placeholder_ppl[$h][0],
							'image' => $placeholder_ppl[$h][1]
						)); ?>
					</td>
					<td class="text-align-center no-border-bottom timetracker-td timetracker-td-w timetracker-td-w-150">
						<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Account Manager</span>
						<?php app_get_component('components/thumbnail-small','',false,array(
							'initials' => $placeholder_ppl[$h][0],
							'image' => $placeholder_ppl[$h][1]
						)); ?>
					</td>
					<td class="hide-mobile text-align-center no-border-bottom timetracker-td timetracker-td-w timetracker-td-w-150">
						<span class="spacer">&nbsp;</span>
					</td>
					<td class="hide-mobile text-align-center no-border-bottom timetracker-td timetracker-td-w timetracker-td-w-150">
						<span class="spacer">&nbsp;</span>
					</td>
					<td class="no-border-bottom timetracker-td timetracker-td-w timetracker-td-w-75 text-align-center">
						
							<a class="hide-nonmobile" href="#entry-projects-<?=$h ?>" data-toggle-accordion>
								<i class="symbol symbol-arrow-down symbol-arrow-up-toggle"></i> View projects
							</a>
							<a href="#entry-projects-<?=$h ?>" class="hide-mobile btn btn-small btn-primary-outline btn-symbol btn-round " data-toggle-accordion>
								<i class="symbol symbol-arrow-down symbol-arrow-up-toggle"></i>
							</a>
					</td>
					<td class="no-border-bottom timetracker-td-actions text-align-center" width="50">
						<div class="bulk-actions position-relative">
							<?php app_get_component('components/modal-actions','',false,array(
								'links' => array(
									'Edit'
										=> '#',
									'Delete'
										=> '#',
								)
							)) ?>
						</div>
					</td>
				</tr>
					<tbody class="accordion" id="entry-projects-<?=$h ?>">
					<?php $i = 0; foreach($projects as $proj): ?>
							<!--@loop .tr  -->
								<tr class="background-primary-alpha-1">
									<td class="hide-mobile padding-left">
										<span class="spacer">&nbsp;</span>
									</td>
									<td class="timetracker-td">
										<span class="flex-md">
											<label class="input-label no-padding margin-right">
												<input type="checkbox" class="input-inline">
												<span class="hide-nonmobile">Select client</span>
											</label>
											<br class="hide-nonmobile">
											<br class="hide-nonmobile">
											<a href="<?= app_create_link(array('template' => 'project-detail')); ?>" class="no-margin-y display-inline-block color-inherit">
												<span class="REPLACE">
													<?= $proj ?>
												</span>	
											</a>
										</span>
									</td>
									<td class="hide-mobile text-align-center no-border-bottom timetracker-td timetracker-td-w timetracker-td-w-150">
										<span class="spacer">&nbsp;</span>
									</td>
									<td class="hide-mobile text-align-center no-border-bottom timetracker-td timetracker-td-w timetracker-td-w-150">
										<span class="spacer">&nbsp;</span>
									</td>
									<td class="text-align-center no-border-bottom timetracker-td timetracker-td-w timetracker-td-w-150">
										<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Project Manager</span>
										<?php app_get_component('components/thumbnail-small','',false,array(
											'initials' => $placeholder_ppl[$h][0],
											'image' => $placeholder_ppl[$h][1]
										)); ?>
									</td>
									<td class="text-align-center no-border-bottom timetracker-td timetracker-td-w timetracker-td-w-150">
										<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">SEO</span>
										<?php app_get_component('components/thumbnail-small','',false,array(
											'initials' => $placeholder_ppl[$h][0],
											'image' => $placeholder_ppl[$h][1]
										)); ?>
									</td>
									<td class="no-border-bottom timetracker-td timetracker-td-w timetracker-td-w-75 text-align-center">
										<span class="spacer">&nbsp;</span>
									</td>
									<td class="no-border-bottom timetracker-td-actions text-align-center" width="50">
										<div class="bulk-actions position-relative">
											<?php app_get_component('components/modal-actions','',false,array(
												'links' => array(
													'Edit'
														=> '#',
													'Delete'
														=> '#',
												)
											)) ?>
										</div>
									</td>
								</tr>
						<?php endforeach; ?>
					</tbody>
			<?php $h++; endforeach; ?>

	</table>
</div>