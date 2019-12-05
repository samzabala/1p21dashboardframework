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

			<div class="flex-grid no-margin-bottom">

				<div class="flex-col-xs-1 flex-col-sm-2  flex-1-1 flex-align-self-center no-margin-top">
					<p class="special-secondary background-gradient text-clip-background project-site no-margin"><span class="REPLACE">site.com</span></p>
					<p class="color-neutral no-margin project-name"><span class="REPLACE">Client Name</span></p>
				</div>
				
				<div class="flex-col-xs-1 flex-col-sm-2 flex-col-md-3 flex-1-1 mobile-hide text-align-right">
					<ul class="project-meta inline no-margin-top">
						<li class="text-wrap-nowrap project-meta-level">
							<span class="font-size-small color-neutral text-transform-uppercase font-weight-700">Level:</span>
							&nbsp;
							<span class="font-weight-700 project-level"><span class="REPLACE">Project Level</span></span>
						</li>

						<li class="text-wrap-nowrap project-meta-status">
							<span class="font-size-small color-neutral text-transform-uppercase font-weight-700">Status:</span>
							&nbsp;
							<!-- @NOTE .tag-COLOR_SCHEME will change to .task-status -->
							<a href="<?=app_create_link(array('template'=>'projects')); ?>" class="tag tag-accent">
								<span class="task-status">Task Status</span>
							</a>
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
					<h3 class="module-title">Days in Production: <span class="project-count-days font-size-large font-weight-700 color-base"><span class="REPLACE">69</span></span></h3>
					<div class="module-functions">
						<?php app_get_component('components/modal-generate-report') ?>
						<?php app_get_component('components/modal-track-time') ?>
					</div>
				</div>
				<div class="module-content">

					<!-- @if assigned tasks are available -->
						<div class="flex-grid">
							<div class="flex-1-1 flex-col-md-2 block-left">
								
									<div class="table-wrapper">
										
										<table class="text-vertical-align-middle">
											
											
											
											<!--
												@loop tr
												@dynamic 
												content
													.project-task-name.
													.project-name
													.task-date
													.task-status
											-->
											<tr>
												<!-- @NOTE table-label-COLOR will by @dynamic based on projct-task-category of time track or  yeeee -->
												<td class="table-cell-no-gutter">
													<span class="table-label table-label-primary"></span>
												</td>

												<td>
													<span class="font-weight-600 project-milestone">
														<span class="REPLACE">Project Milestone</span>
													</span>
												</td>

												<td>
													<span class="project-milestone-time">
														<span class="REPLACE">20</span> Days
													</span>
												</td>

												<td>
													<span class="project-milestone-start">
														<span class="REPLACE">04-20-69</span>
													</span>
												</td>

											</tr>


											<!-- @PLACEHOLDER: DELETE WHEN READY -->
												<?php for($i=1; $i<=4; $i++){ ?>
													
													<tr>
														<!-- @NOTE table-label-COLOR will by @dynamic based on projct-task-category of time track or  yeeee -->
														<td class="table-cell-no-gutter">
															<span class="table-label table-label-accent"></span>
														</td>

														<td>
															<span class="font-weight-600 project-milestone">
																<span class="REPLACE">Project Milestone</span>
															</span>
														</td>

														<td>
															<span class="project-milestone-time">
																<span class="REPLACE">20</span> Days
															</span>
														</td>

														<td>
															<span class="project-milestone-start">
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
											Project Time: <span class="project-count-days"><span class="REPLACE">69</span> Days</span>
										</div>


										<div class="progress">
											<!-- @dynamic
													attr style->width
											-->
												
											<!-- Progress: PreProduction -->
											<div
												class="project-progress-pre progress-bar background-global-contrast"
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

											<div class="list-group-item flex-col-xs-1 flex-col-md-2 flex-xs flex-justify-content-space-between">
												<div class="project-milestone-time-label">
													<i class="symbol symbol-square color-global-background-contrast"></i>
													<span class="project-milestone">Pre-Production</span>
												</div>

												<div class="project-progress-pre-days font-weight-700">
													<span class="REPLACE">22</span> Days
												</div>
											</div>
											
											<div class="list-group-item flex-col-xs-1 flex-col-md-2 flex-xs flex-justify-content-space-between">
												<div class="project-milestone-time-label">
													<i class="symbol symbol-square color-accent"></i>
													<span class="project-milestone">Design</span>
												</div>

												<div class="project-progress-des-days font-weight-700">
													<span class="REPLACE">22</span> Days
												</div>
											</div>
											
											<div class="list-group-item flex-col-xs-1 flex-col-md-2 flex-xs flex-justify-content-space-between">
												<div class="project-milestone-time-label">
													<i class="symbol symbol-square color-primary"></i>
													<span class="project-milestone">Development</span>
												</div>

												<div class="project-progress-dev-days font-weight-700">
													<span class="REPLACE">22</span> Days
												</div>
											</div>
											
											<div class="list-group-item flex-col-xs-1 flex-col-md-2 flex-xs flex-justify-content-space-between">
												<div class="project-milestone-time-label">
													<i class="symbol symbol-square color-caution"></i>
													<span class="project-milestone">Client Review</span>
												</div>

												<div class="project-progress-rev-days font-weight-700">
													<span class="REPLACE">22</span> Days
												</div>
											</div>

										</div>

									</div>


								<!-- Progress-goal -->
									<div class="project-progress-goal">

										<div class="progress-title no-margin-top">
											Goal: <span class="project-progress-goal-count"><span class="REPLACE">69</span> Days</span>
										</div>


										<div class="progress">

											<!-- @dynamic
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
										Average: <span class="project-progress-goal-count"><span class="REPLACE">69</span> Days</span>
									</div>


									<div class="progress">

										<!-- @dynamic
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

							

					<!-- @else NO assigned tasks are available -->
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
					<form class="special-form" id="project-production-add-note">
						<div class="input-wrapper input-wrapper-vertical input-wrapper-block">
							<input type="text" class="input input-large input-single-line font-weight-600" placeholder="Title your note here">
						</div>
						<div class="input-wrapper input-wrapper-vertical input-wrapper-block">

							<textarea name="content" id="content" class="input input-trumbowyg"></textarea>
						</div>
						<input type="hidden" value="production-add-note">
						<button class="btn btn-primary">Add Note</button>
					</form>

				<!-- NOTES -->
					<div class="project-notes accordion-group">
						<div class="project-note flex-grid flex-grid-compact flex-nowrap">
							<div class="block-thumbnail flex-0-0 flex-child">
								<?php app_get_component('components/profile-image-inline'); ?>
							</div>
							<div class="block-content flex-1-1 flex-child">
								<div data-toggle="accordion" class="flex-xs flex-align-items-center text-leading-compact">
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
								

								<div class="project-note-content accordion">
									

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
								
								<div class="project-note flex-grid flex-grid-compact flex-nowrap">
									<div class="block-thumbnail flex-0-0 flex-child">
										<?php app_get_component('components/profile-image-inline'); ?>
									</div>
									<div class="block-content flex-1-1 flex-child">
										<div data-toggle="accordion" class="flex-xs flex-align-items-center text-leading-compact">
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
										

										<div class="project-note-content accordion">
											

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
			<div class="module-header module-header-break">
				<h3 class="module-title">Project Team</h3>
				<div class="module-functions">
					<?php app_get_component('components/modal-add-member')?>
				</div>
			</div>
			<div class="module-content">
				<div class="list-group text-leading-compact">
					<div class="list-group-item">
						<div class="flex-grid flex-grid-compact no-margin-y flex-align-items-center">
							<div class="flex-child flex-0-0 no-margin-y">
								<?php app_get_component('components/profile-image-inline'); ?>
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
								<div class="flex-grid flex-grid-compact no-margin-y flex-align-items-center">
									<div class="flex-child flex-0-0 no-margin-y">
										<?php app_get_component('components/profile-image-inline'); ?>
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





				</div>

			</div>
		</div>
</div>