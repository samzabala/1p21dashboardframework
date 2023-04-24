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
					
					<!-- @if has projects -->
						<a href="#entry-projects-REPLACEID" class="btn btn-small btn-primary-outline btn-symbol btn-round " data-toggle-accordion>
							<i class="symbol symbol-arrow-down symbol-arrow-up-toggle"></i>
						</a>
				</td>
				<td class="no-border-bottom timetracker-td">
					<a href="<?= app_create_link(array('template' => 'client-detail')); ?>" class="h4 color-inherit font-weight-400 no-margin-y display-inline-block">
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
			</tr>
				<tbody class="accordion" id="entry-projects-REPLACEID">
					<!--@loop .tr  -->
						<tr>
							<td class="hide-mobile padding-left">
								<span class="spacer">&nbsp;</span>
							</td>
							<td class="timetracker-td">
								<a href="<?= app_create_link(array('template' => 'project-detail')); ?>" class="no-margin-y display-inline-block color-inherit">
									<span class="REPLACE">
										ace-attorney.com
									</span>	
								</a>
							</td>
							<td class="no-border-bottom timetracker-td timetracker-td-w timetracker-td-w-150">
								<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Date Created</span>
								<i class="symbol symbol-file"></i>
								<span class="REPLACE">April 20</span>
							</td>
						</tr>
				</tbody>



			<?php $h = 0; foreach($placeholder_cli as $cli => $projects): ?>
				<tr>
					<td class="hide-mobile no-border-bottom timetracker-td timetracker-td-w timetracker-td-w-75 padding-left">
						
							<a href="#entry-projects-<?=$h ?>" class="btn btn-small btn-primary-outline btn-symbol btn-round " data-toggle-accordion>
								<i class="symbol symbol-arrow-down symbol-arrow-up-toggle"></i>
							</a>
					</td>
					<td class="no-border-bottom timetracker-td">
						<a href="<?= app_create_link(array('template' => 'client-detail')); ?>" class="h4 color-inherit font-weight-400 no-margin-y display-inline-block">
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
				</tr>
					<tbody class="accordion" id="entry-projects-<?=$h ?>">
					<?php $i = 0; foreach($projects as $proj): ?>
							<!--@loop .tr  -->
								<tr>
									<td class="hide-mobile padding-left">
										<span class="spacer">&nbsp;</span>
									</td>
									<td class="timetracker-td">
										<a href="<?= app_create_link(array('template' => 'project-detail')); ?>" class="no-margin-y display-inline-block color-inherit">
											<span class="REPLACE">
												<?= $proj ?>
											</span>	
										</a>
									</td>
									<td class="no-border-bottom timetracker-td timetracker-td-w timetracker-td-w-150">
										<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Date Created</span>
										<i class="symbol symbol-file"></i>
										<span class="REPLACE">April 20</span>
									</td>
								</tr>
						<?php endforeach; ?>
					</tbody>
			<?php $h++; endforeach; ?>

	</table>
</div>