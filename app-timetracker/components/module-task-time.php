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
	<div class="module-header module-header-break padding-top no-margin-bottom padding-bottom align-items-center">
		<div class="flex-1-1 padding-right"> <!-- flex-xs -->
			<p class="h3 color-theme flex-1-1 no-margin-y">
				<span class="REPLACE">Float left everything</span>				
			</p>
		</div>
		<div class="module-functions flex-0-0 flex-nowrap flex-xs align-items-center justyify-content-space-between">
			<div class="module-function">
				<div class="color-neutral text-nowrap">
					Created on <span class="REPLACE">April 20, 1969</span>
				</div>
			</div>
		</div>
	</div>
	<div class="module-content no-padding-x no-padding-bottom">
			<!-- @if days happen -->
				<hr class="no-margin-y">
				<!-- @loop table -->
					<table class="margin-top">
						<tr>
							<th class="padding-x no-border-top" colspan="2">
								<div class="h4 no-margin-y">
									<span class="REPLACE">Today</span>
								</div>
							</th>
							<th class="padding-x no-border-top text-align-right">
								<div class="h4 no-margin-y">
									<span class="REPLACE">04:20</span>
								</div>
							</th>
						</tr>

						<!-- @ loop TR -->
							<tr>
								<td class="padding-left no-padding-right timetracker-td timetracker-td-w timetracker-td-w-60">
									<div class="position-relative margin-small-right">
										<?php app_get_component('components/thumbnail-micro','',false,array(
											'image' => FWAPPS_ROOT_URL.'/placeholder/profiles/team-des-jenn.jpg',
										)); ?>
									</div>
								</td>
								<td class="padding-x">
									<span class="REPLACE">03:00 AM</span>
									-
									<span class="REPLACE">06:00 PM</span>
								</td>
								<td class="padding-x text-align-right">
									<span class="entry-total font-weight-700">
										<span class="REPLACE">04:20</span>
									</span>
								</td>
							</tr>
					</table>





					<!-- @PLACEHOLDER: Delete when ready -->
						<?php for($h = 0; $h < 6; $h++): ?>
							<table class="margin-top">
								<tr>
									<th class="padding-x no-border-top" colspan="2">
										<div class="h4 no-margin-y">
											<span class="REPLACE">June 12, 1898</span>
										</div>
									</th>
									<th class="padding-x no-border-top text-align-right">
										<div class="h4 no-margin-y">
											<span class="REPLACE">04:20</span>
										</div>
									</th>
								</tr>

								<!-- @ loop TR -->
									<tr>
										<td class="padding-left no-padding-right timetracker-td timetracker-td-w timetracker-td-w-60">
											<div class="position-relative margin-small-right">
												<?php app_get_component('components/thumbnail-micro','',false,array(
													'image' => FWAPPS_ROOT_URL.'/placeholder/profiles/team-des-jenn.jpg',
												)); ?>
											</div>
										</td>
										<td class="padding-x">
											<span class="REPLACE">03:00 AM</span>
											-
											<span class="REPLACE">06:00 PM</span>
										</td>
										<td class="padding-x text-align-right">
											<span class="entry-total font-weight-700">
												<span class="REPLACE">04:20</span>
											</span>
										</td>
									</tr>



										<!-- @PLACEHOLDER: Delete when ready -->
										<?php for($i = 1; $i <= 6; $i++): ?>
											<tr>
												<td class="padding-left no-padding-right timetracker-td timetracker-td-w timetracker-td-w-60">
													<div class="position-relative margin-small-right">
														<?php app_get_component('components/thumbnail-micro','',false,array(
															'image' => FWAPPS_ROOT_URL.'/placeholder/profiles/team-'.(
																$i % 3 == 0 ?
																	'des-jenn.jpg' :
																	( $i % 2 == 0 ? 'des-jenna.jpg' :  'dev-garrett.jpg')
															)
														)); ?>
													</div>
												</td>
												<td class="padding-x">
													<span class="REPLACE">03:00 AM</span>
													-
													<span class="REPLACE">06:00 PM</span>
												</td>
												<td class="padding-x text-align-right">
													<span class="entry-total font-weight-700">
														<span class="REPLACE">04:20</span>
													</span>
												</td>
											</tr>
										<?php endfor; ?>
							</table>
						<?php endfor; ?>

	</div>
</div>

