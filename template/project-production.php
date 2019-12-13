<div
	id="project-production"
	class="module-grid"
	data-grid-template-rows-md="repeat( auto-fit, minmax(130px, auto) )"
	data-grid-template-columns-md="1fr 370px"
	data-grid-template-areas-md="
		'info info'
		'days days'
		'notes team'
		'notes SPACER'"

	data-grid-template-columns-lg="1fr 420px">
		
	<!-- info -->
		<div
			id="project-production-info"
			class="module"
			data-grid-area-md="info">

			<div class="flex-grid flex-grid-fixed flex-grid-no-gutter-y">

				<div class="flex-col-lg-8 flex-col-md-6 align-self-center">
					<h3 class="special-secondary background-gradient text-clip-background project-site no-margin">
						<span class="REPLACE">sitedomainurlintheweb.com</span>
					</h3>
					<p class="color-neutral no-margin project-name"><span class="REPLACE">Client Name</span></p>
				</div>
				
				<div class="flex-col-lg-4 flex-col-md-6 flex-xs align-items-center">
					<ul class="project-meta unstyled flex-grid flex-grid-compact no-margin-y flex-grid-no-gutter-y justify-content-flex-end flex-1-1">
						<li class="flex-child text-wrap-nowrap project-meta-level">
							<span class="hide-mobile font-size-small color-neutral text-transform-uppercase font-weight-700">Level:</span>
							
							<span class="font-weight-700 project-level"><span class="REPLACE">Project Level</span></span>
						</li>

						<li class="flex-child text-wrap-nowrap project-meta-status">
							<span class="hide-mobile font-size-small color-neutral text-transform-uppercase font-weight-700">Status:</span>
							
							<!-- @NOTE .tag-COLOR_SCHEME will change to .task-status -->
							<span class="tag tag-accent">
								<span class="task-status"><span class="REPLACE">Task Status<span></span>
							</span>
						</li>
					</ul>
					
				</div>

			</div>

			
		</div>


		<!-- Days -->
			<div
				id="project-production-days"
				class="module"
				data-grid-area-md="days">
				<div class="module-header module-header-break">
				
				<?php app_get_component('components/module-functions-accordion-toggle'); ?>

				<h3 class="module-title">Days in Production:
						<span class="project-duration font-size-large font-weight-700 color-theme">
							<span class="REPLACE">69</span>
						</span>
					</h3>
					<div class="module-functions accordion accordion-mobile">
						<?php app_get_component('components/modal-generate-report') ?>
						<?php app_get_component('components/modal-track-time') ?>
					</div>
				</div>
				<div class="module-content">

					<!-- @IF assigned tasks are available -->
						<div class="flex-grid flex-grid-expanded flex-grid-no-gutter-y">
							<div class="flex-1-1 flex-col-md-2 block-left">
								
									<div class="table-wrapper">
										
										<table class="text-vertical-align-middle">
											
											
											
											<!-- @LOOP tr-->
											<tr>
												<!-- @NOTE table-label-COLOR will by @DYNAMIC based on projct-task-category of time track or  yeeee -->
												<td class="table-cell-no-gutter">
													<span class="table-label table-label-primary"></span>
												</td>

												<td>
													<span class="font-weight-600 project-milestone">
														<span class="REPLACE">Project Milestone</span>
													</span>
												</td>

												<td>
													<span class="project-milestone-duration">
														<span class="REPLACE">20</span> Days
													</span>
												</td>

												<td>
													<span class="project-milestone-date-start">
														<span class="REPLACE">04-20-69</span>
													</span>
												</td>

											</tr>


												<!-- @PLACEHOLDER: DELETE WHEN READY -->
													<?php for($i=1; $i<=4; $i++){ ?>
														
														<tr>
															<!-- @NOTE table-label-COLOR will by @DYNAMIC based on projct-task-category of time track or  yeeee -->
															<td class="table-cell-no-gutter">
																<span class="table-label table-label-accent"></span>
															</td>

															<td>
																<span class="font-weight-600 project-milestone">
																	<span class="REPLACE">Project Milestone</span>
																</span>
															</td>

															<td>
																<span class="project-milestone-duration">
																	<span class="REPLACE">20</span> Days
																</span>
															</td>

															<td>
																<span class="project-milestone-date-start">
																	<span class="REPLACE">04-20-69</span>
																</span>
															</td>

														</tr>
														
													<?php } ?>

										</table>
										
									</div>
							</div>

							<div class="flex-1-1 flex-col-md-2 block-right">

								<!-- Progress-stats -->
									<div class="project-progress-stats">
										<div class="progress-title no-margin-top">
											Project Time: <span class="project-duration"><span class="REPLACE">69</span> Days</span>
										</div>


										<div class="progress p">
											<!-- @DYNAMIC
													attr style->width
											-->
												
											<!-- Progress: PreProduction -->
											<div
												class="project-progress-pre progress-bar background-theme-contrast"
												style="width:5%"></div>

												
											<!-- Progress: Design -->
											<div
												class="project-progress-des progress-bar background-accent"
												style="width:45%"></div>

													
											<!-- Progress: dev -->
											<div
												class="project-progress-dev progress-bar background-primary"
												style="width:45%"></div>

													
											<!-- Progress: cient review -->
											<div
												class="project-progress-rev progress-bar background-caution"
												style="width:5%"></div>

										</div>

										
										<div class="project-milestone-time-legend list-group flex-grid">

											<div class="list-group-item flex-col-12 flex-col-md-6 flex-xs justify-content-space-between">
												<div class="project-milestone-time-label">
													<i class="symbol symbol-square color-theme-polar-contrast"></i>
													<span class="project-milestone">Pre-Production</span>
												</div>

												<div class="project-progress-pre-duration font-weight-700">
													<span class="REPLACE">22</span> Days
												</div>
											</div>
											
											<div class="list-group-item flex-col-12 flex-col-md-6 flex-xs justify-content-space-between">
												<div class="project-milestone-time-label">
													<i class="symbol symbol-square color-accent"></i>
													<span class="project-milestone">Design</span>
												</div>

												<div class="project-progress-des-duration font-weight-700">
													<span class="REPLACE">22</span> Days
												</div>
											</div>
											
											<div class="list-group-item flex-col-12 flex-col-md-6 flex-xs justify-content-space-between">
												<div class="project-milestone-time-label">
													<i class="symbol symbol-square color-primary"></i>
													<span class="project-milestone">Development</span>
												</div>

												<div class="project-progress-dev-duration font-weight-700">
													<span class="REPLACE">22</span> Days
												</div>
											</div>
											
											<div class="list-group-item flex-col-12 flex-col-md-6 flex-xs justify-content-space-between">
												<div class="project-milestone-time-label">
													<i class="symbol symbol-square color-caution"></i>
													<span class="project-milestone">Client Review</span>
												</div>

												<div class="project-progress-rev-duration font-weight-700">
													<span class="REPLACE">22</span> Days
												</div>
											</div>

										</div>

									</div>


								<!-- Progress-goal -->
									<div class="project-progress-goal">

										<div class="progress-title no-margin-top">
											Goal: <span class="project-progress-goal-duration"><span class="REPLACE">69</span> Days</span>
										</div>


										<div class="progress p">

											<!-- @DYNAMIC
													attr style->width
											-->
											<div
												class="project-progress-goal progress-bar background-gradient"
												style="width:100%">
											</div>

										</div>

									</div>

								<!-- Progress-goal -->
								<div class="project-progress-average">

									<div class="progress-title no-margin-top">
										Average: <span class="project-progress-goal-duration"><span class="REPLACE">69</span> Days</span>
									</div>


									<div class="progress">

										<!-- @DYNAMIC
												attr style->width
										-->
										<div
											class="project-progress-goal progress-bar background-gradient"
											style="width:0%">
										</div>

									</div>

								</div>



							</div>
						</div>

							

					<!-- @ELSE NO assigned tasks are available -->
						<p class="color-neutral">Oooh no progress yet:/</p>
				</div>
			</div>
	
	<!-- Notes -->
		<div
			id="project-production-notes"
			class="module"
			data-grid-area-md="notes">

			<div class="module-header">
				<h3 class="module-title">Notes</h3>
			</div>

			<div class="module-content">
				<!-- ADD NOTE -->
					<form id="project-production-add-note" class="p">
						<div class="special-form">

							<div class="input-wrapper input-wrapper-vertical input-wrapper-block">
								<input type="text" class="input input-large input-single-line font-weight-600" placeholder="Title your note here">
							</div>
							<div class="input-wrapper input-wrapper-vertical input-wrapper-block">

								<textarea name="content" id="content" class="input input-trumbowyg"></textarea>
							</div>
						</div>
						<div class="text-align-right">
							<button class="btn btn-primary" type="submit">Add Note</button>
						</div>
					</form>

				<!-- NOTES -->
					<!-- @if has notes -->
						<div class="project-notes accordion-group">

							<!-- @LOOP div -->
								<div class="project-note flex-grid flex-grid-compact flex-grid-no-gutter-y flex-nowrap">
									<div class="block-thumbnail flex-0-0 flex-child">
										<?php app_get_component('components/profile-image-small'); ?>
									</div>
									<div class="block-content flex-1-1 flex-child">
										<div data-toggle="accordion" class="flex-xs align-items-center text-leading-compact">
											<div class="flex-1-1">

												<p class="project-note-date color-neutral font-weight-700 no-margin-bottom">
													<span class="REPLACE">04-20-69</span>
												</p>
												<h2 class="project-note-title no-margin-top">
													<span class="REPLACE">Note Title goes here</span>
												</h2>
											</div>

											<i class="font-size-large color-primary symbol symbol-caret-down-toggle symbol-caret-right"></i>

										</div>

										<hr>
										

										<div class="project-note-content accordion text-leading-expanded">
											

											<div class="REPLACE">
											<ul>
												<li>List item one
												<ul>
												<li>List item one
												<ul>
												<li>List item one</li>
												<li>List item two</li>
												<li>List item three</li>
												<li>List item four</li>
												</ul>
												</li>
												<li>List item two</li>
												<li>List item three</li>
												<li>List item four</li>
												</ul>
												</li>
												<li>List item two</li>
												<li>List item three</li>
												<li>List item four</li>
												</ul>
												
												<ol>
												<li>List item one
												<ol>
												<li>List item one
												<ol>
												<li>List item one</li>
												<li>List item two</li>
												<li>List item three</li>
												<li>List item four</li>
												</ol>
												</li>
												<li>List item two</li>
												<li>List item three</li>
												<li>List item four</li>
												</ol>
												</li>
												<li>List item two</li>
												<li>List item three</li>
												<li>List item four</li>
												</ol>
												<p>People think focus means saying yes to the thing you’ve got to focus on. But that’s not what it means at all. It means saying no to the hundred other good ideas that there are. You have to pick carefully. I’m actually as proud of the things we haven’t done as the things I have done. Innovation is saying no to 1,000 things.</p>
											</div>
										</div>
									</div>
								</div>

									<!-- @PLACEHOLDER: DELETE WHEN READY -->

										<?php for($i=1; $i<=3; $i++){ ?>
											
											<div class="project-note flex-grid flex-grid-compact flex-grid-no-gutter-y flex-nowrap">
												<div class="block-thumbnail flex-0-0 flex-child">
													<?php app_get_component('components/profile-image-small'); ?>
												</div>
												<div class="block-content flex-1-1 flex-child">
													<div data-toggle="accordion" class="flex-xs align-items-center text-leading-compact">
														<div class="flex-1-1">

															<p class="project-note-date color-neutral font-weight-700 no-margin-bottom">
																<span class="REPLACE">04-20-69</span>
															</p>
															<h2 class="project-note-title no-margin-top">
																<span class="REPLACE">Note Title goes here</span>
															</h2>
														</div>

														<i class="font-size-large color-primary symbol symbol-caret-down-toggle symbol-caret-right"></i>

													</div>

													<hr>
													

													<div class="project-note-content accordion text-leading-expanded">
														

														<div class="REPLACE">
														<ul>
															<li>List item one
															<ul>
															<li>List item one
															<ul>
															<li>List item one</li>
															<li>List item two</li>
															<li>List item three</li>
															<li>List item four</li>
															</ul>
															</li>
															<li>List item two</li>
															<li>List item three</li>
															<li>List item four</li>
															</ul>
															</li>
															<li>List item two</li>
															<li>List item three</li>
															<li>List item four</li>
															</ul>
															
															<ol>
															<li>List item one
															<ol>
															<li>List item one
															<ol>
															<li>List item one</li>
															<li>List item two</li>
															<li>List item three</li>
															<li>List item four</li>
															</ol>
															</li>
															<li>List item two</li>
															<li>List item three</li>
															<li>List item four</li>
															</ol>
															</li>
															<li>List item two</li>
															<li>List item three</li>
															<li>List item four</li>
															</ol>
															<p>People think focus means saying yes to the thing you’ve got to focus on. But that’s not what it means at all. It means saying no to the hundred other good ideas that there are. You have to pick carefully. I’m actually as proud of the things we haven’t done as the things I have done. Innovation is saying no to 1,000 things.</p>
														</div>
													</div>
												</div>
											</div>
										<?php } ?>
									
						</div>

					<!-- @else -->
						<p class="color-neutral">Oooh no one's given notes yet :/</p>

				
			</div>
			<div class="module-footer">
				<?php app_get_component('components/pagination')?>
			</div>
		</div>


	

	<!-- Team -->
		<div
			id="project-production-team"
			class="module"
			data-grid-area-md="team">
			<div class="module-header">
				<div class="flex-xs justify-content-space-between align-items-center">
					<h3 class="module-title ">Project Team</h3>
					<?php app_get_component('components/modal-add-member')?>
				</div>
			</div>
			<div class="module-content">
				<div class="list-group text-leading-compact">
					<!-- @IF theres profiles -->
						<div class="list-group-item">
							<!-- @LOOP li -->
							<div class="flex-grid flex-grid-compact no-margin-y align-items-center">
								<div class="flex-child flex-0-0 no-margin-y">
									<?php app_get_component('components/profile-image-small'); ?>
								</div>

								<a href="<?= app_create_link(array('template' => 'profile')) ?>"class="flex-child flex-1-1 color-inherit color-primary-hover no-margin-y">
									<span class="font-size-small font-weight-700 color-neutral text-transform-uppercase profile-title">
										<span class="REPLACE">Profile Title</span>
									</span>
									<br>

									<span class="font-size-large font-weight-300 profile-name">
										<span class="REPLACE">Profile Name</span>
									</span>
								</a>
							</div>

						</div>





							<!-- @PLACEHOLDER: DELETE WHEN READY -->

								<?php for($i=1; $i<=3; $i++){ ?>
									<div class="list-group-item">
										<div class="flex-grid flex-grid-compact no-margin-y align-items-center">
											<div class="flex-child flex-0-0 no-margin-y">
												<?php app_get_component('components/profile-image-small'); ?>
											</div>

											<a href="<?= app_create_link(array('template' => 'profile')) ?>"class="flex-child flex-1-1 color-inherit color-primary-hover no-margin-y">
												<span class="font-size-small font-weight-700 color-neutral text-transform-uppercase profile-title">
													<span class="REPLACE">Profile Title</span>
												</span>
												<br>

												<span class="font-size-large font-weight-300 profile-name">
													<span class="REPLACE">Profile Name</span>
												</span>
											</a>
										</div>
									</div>
								<?php } ?>


					<!-- @else -->
						<p class="color-neutral">Oooh no one's here yet:/</p>

				</div>
			</div>
		</div>
</div>