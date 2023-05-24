
<div class="flex-grid">
	<div class="flex-child flex-col-xs-12 flex-col-md-6">
		<h1 class="h2 font-weight-300 no-margin-y">
			Insights
		</h1>
	</div>
	<div class="flex-child flex-col-xs-12 flex-col-md-6 text-align-right">
		<a href="#" class="btn btn-neutral-glassy btn-block-mobile">Back</a>
	</div>
</div>

<!-- Overview -->
	<div class="module module-large margin-large-y">
		<div class="module-content">

			<div class="flex-grid align-items-center">
				<div class="flex-col-xs-12 flex-col-lg-3">
					<div class="padding-large-right">
						<p class="h1 font-weight-400 no-margin-y">
							<strong class="sr-only">Name</strong>
							<span class="font-weight-400">
								<span class="REPLACE">Loid Forger</span></span>
							</span>
						</p>
						<p class="no-margin-y">
							<strong>Job Title:</strong>
							<span class="REPLACE">Yes</span></span>
						</p>
					</div>
				</div>
				<div class="flex-child flex-1-1">
					<form action="">
						<div class="flex-grid flex-grid-fixed flex-grid-expanded flex-grid-no-gutter-y align-items-center">
							<div class="flex-child flex-1-1">
								<div class="flex-grid flex-nowrap flex-grid-no-gutter-y flex-grid-compact">
									<div class="flex-child flex-1-1">
										<div class="flex-sm">
											<label for="time-adjust-min" class="input-label">From</label>
											<input id="time-adjust-min" type="date" name="period-min" class="input input-single-line input-block">
										</div>
									</div>
									<div class="flex-child flex-1-1">
										<div class="flex-sm">
											<label for="time-adjust-max" class="input-label">To</label>
											<input id="time-adjust-max" type="date" name="period-max" class="input input-single-line input-block">
										</div>
									</div>
								</div>
							</div>
							<div class="flex-col-xs-12 flex-col-md-3 ">
								<hr class="only-mobile">
								<button class="btn btn-theme btn-block no-padding-x">Adjust</button>
							</div>
						</div>
						<div class="input-group input-group-horizontal input-group-responsive input-block">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

<!-- Task Category / Time Dist. -->
	<div class="h4 margin-bottom">
		Time Distribution
	</div>
	<div class="module p">
		<div class="module-content no-padding">

			<!-- @if has rows -->
				<div class="table-wrapper">
					<table class="timetracker-table">
						<tr class="background-transparent">
							<th class="background-transparent no-border-top">Task Category</th>
							<th class="background-transparent no-border-top text-align-center">Hours</th>
							<th class="background-transparent no-border-top text-align-center">Hours Rank</th>
							<th class="background-transparent no-border-top text-align-center">% Time</th>
							<th class="background-transparent no-border-top text-align-center">% Time Rank</th>
							<th class="background-transparent no-border-top">Time Distribution</th>
							<th class="background-transparent no-border-top text-align-right">Actions</th>
						</tr>
						<!-- @loop tr -->
							<tr>

								<td class="timetracker-td timetracker-td-w timetracker-td-w-250">
									<span class="REPLACE">A Task Category</span>
								</td>
								
								<td class="text-align-center timetracker-td">
									<h6 class="hide-nonmobile no-margin-top">Hours</h6>

									<span class="REPLACE">06:09</span>
								</td>
								
								<td class="text-align-center timetracker-td">
									<h6 class="hide-nonmobile no-margin-top">Hours Rank</h6>

									<span class="REPLACE">1 of 2</span>
								</td>
								
								<td class="text-align-center timetracker-td">
									<h6 class="hide-nonmobile no-margin-top">% Time</h6>

									<span class="REPLACE">31%</span>
								</td>
								
								<td class="text-align-center timetracker-td">
									<h6 class="hide-nonmobile no-margin-top">% Time Rank</h6>

									<span class="REPLACE">2 of 2</span>
								</td>
								
								<td class=" timetracker-td">
									<h6 class="hide-nonmobile no-margin-top">Time Distribution</h6>

									<?php app_get_component('components/chart-time-distribution','',false,array(
										'id' => 'REPLACEID',
										'val' => 36,
									)); ?>
								</td>

								<td class="timetracker-td-actions text-align-right">
									<form action="">
										<a href="<?= app_create_link(array('template' => 'home')) ?>" class="btn btn-link btn-symbol" title="View">
											<i class="symbol symbol-visible"></i>
										</a>
									</form>
								</td>
							</tr>

								<!-- @PLACEHOLDER: Delete when ready -->
									<?php for($i = 0; $i < 6; $i++): ?>

										
										<tr>

											<td class="timetracker-td timetracker-td-w timetracker-td-w-250">
												<span class="REPLACE">Another Category</span>
											</td>
											
											<td class="text-align-center timetracker-td">
												<h6 class="hide-nonmobile no-margin-top">Hours</h6>

												<span class="REPLACE">06:09</span>
											</td>
											
											<td class="text-align-center timetracker-td">
												<h6 class="hide-nonmobile no-margin-top">Hours Rank</h6>

												<span class="REPLACE">1 of 2</span>
											</td>
											
											<td class="text-align-center timetracker-td">
												<h6 class="hide-nonmobile no-margin-top">% Time</h6>

												<span class="REPLACE">69%</span>
											</td>
											
											<td class="text-align-center timetracker-td">
												<h6 class="hide-nonmobile no-margin-top">Hours Rank</h6>

												<span class="REPLACE">2 of 2</span>
											</td>
											
											
								
											<td class=" timetracker-td">
												<h6 class="hide-nonmobile no-margin-top">Time Distribution</h6>

												<?php app_get_component('components/chart-time-distribution','',false,array(
													'id' => $i,
													'min' => random_int(0,20),
													'max' => random_int(21,40),
												)); ?>
											</td>

											<td class="timetracker-td-actions text-align-right">
												<form action="">
													<a href="<?= app_create_link(array('template' => 'home')) ?>" class="btn btn-link btn-symbol" title="View">
														<i class="symbol symbol-visible"></i>
													</a>
												</form>
											</td>
										</tr>
										<tr>

											<td class="timetracker-td timetracker-td-w timetracker-td-w-250">
												<span class="REPLACE">Other Category</span>
											</td>
											
											<td class="text-align-center timetracker-td">
												<h6 class="hide-nonmobile no-margin-top">Hours</h6>

												<span class="REPLACE">06:09</span>
											</td>
											
											<td class="text-align-center timetracker-td">
												<h6 class="hide-nonmobile no-margin-top">Hours Rank</h6>

												<span class="REPLACE">1 of 2</span>
											</td>
											
											<td class="text-align-center timetracker-td">
												<h6 class="hide-nonmobile no-margin-top">% Time</h6>

												<span class="REPLACE">31%</span>
											</td>
											
											<td class="text-align-center timetracker-td">
												<h6 class="hide-nonmobile no-margin-top">Hours Rank</h6>

												<span class="REPLACE">2 of 2</span>
											</td>
											
											
								
											<td class=" timetracker-td">
												<h6 class="hide-nonmobile no-margin-top">Time Distribution</h6>

												<?php app_get_component('components/chart-time-distribution','',false,array(
													'id' => $i.'-2',
													'val' => random_int(0,100),
												)); ?>
											</td>

											<td class="timetracker-td-actions text-align-right">
												<form action="">
													<a href="<?= app_create_link(array('template' => 'home')) ?>" class="btn btn-link btn-symbol" title="View">
														<i class="symbol symbol-visible"></i>
													</a>
												</form>
											</td>
										</tr>
									<?php endfor; ?>
					</table>
				</div>
			<!-- @else -->
				<div class="font-style-italic color-neutral padding">
					No info available
				</div>
		</div>
	</div>

<!-- Projects -->
	<div class="h4 margin-bottom">
		Projects
	</div>
	<div class="module p">
		<div class="module-content no-padding">

			<!-- @if has rows -->
				<div class="table-wrapper">
					<table class="timetracker-table">
						<tr class="background-transparent">
							<th class="background-transparent no-border-top">Project Name</th>
							<th class="background-transparent no-border-top text-align-center">Hours</th>
							<th class="background-transparent no-border-top text-align-center">&nbsp;<div class="sr-only">Stats</div></th>
							<th class="background-transparent no-border-top text-align-center">% Time</th>
							<th class="background-transparent no-border-top text-align-right">Actions</th>
						</tr>
						<!-- @loop tr -->
							<tr>

								<td class="timetracker-td timetracker-td-w timetracker-td-w-250">
									<div class="text-wrap-ellipsis">
										<span class="REPLACE">Project Apple</span>
									</div>
								</td>
								
								<td class="text-align-center timetracker-td">
									<h6 class="hide-nonmobile no-margin-top">Hours</h6>

									<span class="REPLACE">06:09</span>
								</td>
								
								<td class="text-align-center timetracker-td">
									<h6 class="hide-nonmobile no-margin-top sr-only">Stats</h6>
									<progress value="69" max="100"></progress>
								</td>
								
								<td class="text-align-center timetracker-td">
									<h6 class="hide-nonmobile no-margin-top">% Time</h6>

									<span class="REPLACE">31%</span>
								</td>

								<td class="timetracker-td-actions text-align-right">
									<form action="">
										<a href="<?= app_create_link(array('template' => 'home')) ?>" class="btn btn-link btn-symbol" title="View">
											<i class="symbol symbol-visible"></i>
										</a>
									</form>
								</td>
							</tr>

								<!-- @PLACEHOLDER: Delete when ready -->
									<?php for($i = 0; $i < 6; $i++): ?>
										

										<tr>

											<td class="timetracker-td timetracker-td-w timetracker-td-w-250">
												<div class="text-wrap-ellipsis">
													<span class="REPLACE">Operation Strix</span>
												</div>
											</td>
											
											<td class="text-align-center timetracker-td">
												<h6 class="hide-nonmobile no-margin-top">Hours</h6>

												<span class="REPLACE">06:09</span>
											</td>
											
											<td class="text-align-center timetracker-td">
												<h6 class="hide-nonmobile no-margin-top sr-only">Stats</h6>
												<progress value="31" max="100"></progress>
											</td>
											
											<td class="text-align-center timetracker-td">
												<h6 class="hide-nonmobile no-margin-top">% Time</h6>

												<span class="REPLACE">69%</span>
											</td>

											<td class="timetracker-td-actions text-align-right">
												<form action="">
													<a href="<?= app_create_link(array('template' => 'home')) ?>" class="btn btn-link btn-symbol" title="View">
														<i class="symbol symbol-visible"></i>
													</a>
												</form>
											</td>
										</tr>


										<tr>

											<td class="timetracker-td timetracker-td-w timetracker-td-w-250">
												<div class="text-wrap-ellipsis">
													<span class="REPLACE">Friendship Scheme</span>
												</div>
											</td>
											
											<td class="text-align-center timetracker-td">
												<h6 class="hide-nonmobile no-margin-top">Hours</h6>

												<span class="REPLACE">06:09</span>
											</td>
											
											<td class="text-align-center timetracker-td">
												<h6 class="hide-nonmobile no-margin-top sr-only">Stats</h6>
												<progress value="2" max="100"></progress>
											</td>
											
											<td class="text-align-center timetracker-td">
												<h6 class="hide-nonmobile no-margin-top">% Time</h6>

												<span class="REPLACE">2%</span>
											</td>

											<td class="timetracker-td-actions text-align-right">
												<form action="">
													<a href="<?= app_create_link(array('template' => 'home')) ?>" class="btn btn-link btn-symbol" title="View">
														<i class="symbol symbol-visible"></i>
													</a>
												</form>
											</td>
										</tr>


										<tr>

											<td class="timetracker-td timetracker-td-w timetracker-td-w-250">
												<div class="text-wrap-ellipsis">
													<span class="REPLACE">Mommy Friends Scheme</span>
												</div>
											</td>
											
											<td class="text-align-center timetracker-td">
												<h6 class="hide-nonmobile no-margin-top">Hours</h6>

												<span class="REPLACE">06:09</span>
											</td>
											
											<td class="text-align-center timetracker-td">
												<h6 class="hide-nonmobile no-margin-top sr-only">Stats</h6>
												<progress value="69" max="100"></progress>
											</td>
											
											<td class="text-align-center timetracker-td">
												<h6 class="hide-nonmobile no-margin-top">% Time</h6>

												<span class="REPLACE">31%</span>
											</td>

											<td class="timetracker-td-actions text-align-right">
												<form action="">
													<a href="<?= app_create_link(array('template' => 'home')) ?>" class="btn btn-link btn-symbol" title="View">
														<i class="symbol symbol-visible"></i>
													</a>
												</form>
											</td>
										</tr>

										<tr>

											<td class="timetracker-td timetracker-td-w timetracker-td-w-250">
												<div class="text-wrap-ellipsis">
													<span class="REPLACE">Snatch Karen's Dad's pal's photos of his weave falling off and rescue Anya but do it with a disguise and then adopt the said Anya but with less diguise like wearing my hair up most of the time or something and fake marry a stranger but not know that she is an assassin and then finally adopt a dog, aka also Operation Strix but with other details</span>
												</div>
											</td>
											
											<td class="text-align-center timetracker-td">
												<h6 class="hide-nonmobile no-margin-top">Hours</h6>

												<span class="REPLACE">06:09</span>
											</td>
											
											<td class="text-align-center timetracker-td">
												<h6 class="hide-nonmobile no-margin-top sr-only">Stats</h6>
												<progress value="99" max="100"></progress>
											</td>
											
											<td class="text-align-center timetracker-td">
												<h6 class="hide-nonmobile no-margin-top">% Time</h6>

												<span class="REPLACE">100%</span>
											</td>

											<td class="timetracker-td-actions text-align-right">
												<form action="">
													<a href="<?= app_create_link(array('template' => 'home')) ?>" class="btn btn-link btn-symbol" title="View">
														<i class="symbol symbol-visible"></i>
													</a>
												</form>
											</td>
										</tr>

									<?php endfor; ?>
					</table>
				</div>
			<!-- @else -->
				<div class="font-style-italic color-neutral padding">
					No info available
				</div>
		</div>
	</div>


	
<!-- Tasks -->
	<div class="h4 margin-bottom">
		Tasks
	</div>
	<div class="module">
		<div class="module-content no-padding">

			<!-- @if has rows -->
				<div class="table-wrapper">
					<table class="timetracker-table">
						<tr class="background-transparent">
							<th class="background-transparent no-border-top">Task Name</th>
							<th class="background-transparent no-border-top">Category</th>
							<th class="background-transparent no-border-top text-align-center">Hours</th>
							<th class="background-transparent no-border-top text-align-center">&nbsp;<div class="sr-only">Stats</div></th>
							<th class="background-transparent no-border-top text-align-center">% Time</th>
						</tr>
						<!-- @loop tr -->
							<tr>

								<td class="timetracker-td timetracker-td-w timetracker-td-w-250">
									<div class="text-wrap-ellipsis">
										<span class="REPLACE">Task Name</span>
									</div>
								</td>
								
								<td>
									<h6 class="hide-nonmobile no-margin-top">Category</h6>
									<span class="REPLACE">A Task Category</span>
								</td>
								
								<td class="text-align-center timetracker-td">
									<h6 class="hide-nonmobile no-margin-top">Hours</h6>

									<span class="REPLACE">06:09</span>
								</td>
								
								
								<td class="text-align-center timetracker-td">
									<h6 class="hide-nonmobile no-margin-top sr-only">Stats</h6>
									<progress value="69" max="100"></progress>
								</td>
								
								<td class="text-align-center timetracker-td">
									<h6 class="hide-nonmobile no-margin-top">% Time</h6>

									<span class="REPLACE">31%</span>
								</td>
							</tr>

								<!-- @PLACEHOLDER: Delete when ready -->
									<?php for($i = 0; $i < 6; $i++): ?>

										<tr>

											<td class="timetracker-td timetracker-td-w timetracker-td-w-250">
												<div class="text-wrap-ellipsis">
													<span class="REPLACE">Get adopted but then kidnapped by father's ex's dad because he snatched his pal's weave but get rescued by adoptive father except he has to be in disguise</span>
												</div>
											</td>
											
											<td>
												<h6 class="hide-nonmobile no-margin-top">Category</h6>
												<span class="REPLACE">Category name </span>
											</td>
											
											<td class="text-align-center timetracker-td">
												<h6 class="hide-nonmobile no-margin-top">Hours</h6>

												<span class="REPLACE">06:09</span>
											</td>
											
											
											<td class="text-align-center timetracker-td">
												<h6 class="hide-nonmobile no-margin-top sr-only">Stats</h6>
												<progress value="69" max="100"></progress>
											</td>
											
											<td class="text-align-center timetracker-td">
												<h6 class="hide-nonmobile no-margin-top">% Time</h6>

												<span class="REPLACE">31%</span>
											</td>
										</tr>


										<tr>

											<td class="timetracker-td timetracker-td-w timetracker-td-w-250">
												<div class="text-wrap-ellipsis">
													<span class="REPLACE">Take entrance exams</span>
												</div>
											</td>
											
											<td>
												<h6 class="hide-nonmobile no-margin-top">Category</h6>
												<span class="REPLACE">Category name </span>
											</td>
											
											<td class="text-align-center timetracker-td">
												<h6 class="hide-nonmobile no-margin-top">Hours</h6>

												<span class="REPLACE">06:09</span>
											</td>
											
											
											<td class="text-align-center timetracker-td">
												<h6 class="hide-nonmobile no-margin-top sr-only">Stats</h6>
												<progress value="69" max="100"></progress>
											</td>
											
											<td class="text-align-center timetracker-td">
												<h6 class="hide-nonmobile no-margin-top">% Time</h6>

												<span class="REPLACE">31%</span>
											</td>
										</tr>

										<tr>

											<td class="timetracker-td timetracker-td-w timetracker-td-w-250">
												<div class="text-wrap-ellipsis">
													<span class="REPLACE">Do the interview</span>
												</div>
											</td>
											
											<td>
												<h6 class="hide-nonmobile no-margin-top">Category</h6>
												<span class="REPLACE">Category name </span>
											</td>
											
											<td class="text-align-center timetracker-td">
												<h6 class="hide-nonmobile no-margin-top">Hours</h6>

												<span class="REPLACE">06:09</span>
											</td>
											
											
											<td class="text-align-center timetracker-td">
												<h6 class="hide-nonmobile no-margin-top sr-only">Stats</h6>
												<progress value="69" max="100"></progress>
											</td>
											
											<td class="text-align-center timetracker-td">
												<h6 class="hide-nonmobile no-margin-top">% Time</h6>

												<span class="REPLACE">31%</span>
											</td>
										</tr>

										<tr>

											<td class="timetracker-td timetracker-td-w timetracker-td-w-250">
												<div class="text-wrap-ellipsis">
													<span class="REPLACE">Step on poop</span>
												</div>
											</td>
											
											<td>
												<h6 class="hide-nonmobile no-margin-top">Category</h6>
												<span class="REPLACE">Category name </span>
											</td>
											
											<td class="text-align-center timetracker-td">
												<h6 class="hide-nonmobile no-margin-top">Hours</h6>

												<span class="REPLACE">06:09</span>
											</td>
											
											
											<td class="text-align-center timetracker-td">
												<h6 class="hide-nonmobile no-margin-top sr-only">Stats</h6>
												<progress value="69" max="100"></progress>
											</td>
											
											<td class="text-align-center timetracker-td">
												<h6 class="hide-nonmobile no-margin-top">% Time</h6>

												<span class="REPLACE">31%</span>
											</td>
										</tr>

										<tr>

											<td class="timetracker-td timetracker-td-w timetracker-td-w-250">
												<div class="text-wrap-ellipsis">
													<span class="REPLACE">Get accepted in Eden College</span>
												</div>
											</td>
											
											<td>
												<h6 class="hide-nonmobile no-margin-top">Category</h6>
												<span class="REPLACE">Category name </span>
											</td>
											
											<td class="text-align-center timetracker-td">
												<h6 class="hide-nonmobile no-margin-top">Hours</h6>

												<span class="REPLACE">06:09</span>
											</td>
											
											
											<td class="text-align-center timetracker-td">
												<h6 class="hide-nonmobile no-margin-top sr-only">Stats</h6>
												<progress value="69" max="100"></progress>
											</td>
											
											<td class="text-align-center timetracker-td">
												<h6 class="hide-nonmobile no-margin-top">% Time</h6>

												<span class="REPLACE">31%</span>
											</td>
										</tr>
										
										<tr>

											<td class="timetracker-td timetracker-td-w timetracker-td-w-250">
												<div class="text-wrap-ellipsis">
													<span class="REPLACE">Punch a kid on the first day of school</span>
												</div>
											</td>
											
											<td>
												<h6 class="hide-nonmobile no-margin-top">Category</h6>
												<span class="REPLACE">Category name </span>
											</td>
											
											<td class="text-align-center timetracker-td">
												<h6 class="hide-nonmobile no-margin-top">Hours</h6>

												<span class="REPLACE">06:09</span>
											</td>
											
											
											<td class="text-align-center timetracker-td">
												<h6 class="hide-nonmobile no-margin-top sr-only">Stats</h6>
												<progress value="69" max="100"></progress>
											</td>
											
											<td class="text-align-center timetracker-td">
												<h6 class="hide-nonmobile no-margin-top">% Time</h6>

												<span class="REPLACE">31%</span>
											</td>
										</tr>
										
									<?php endfor; ?>
					</table>
				</div>
			<!-- @else -->
				<div class="font-style-italic color-neutral padding">
					No info available
				</div>
		</div>
	</div>