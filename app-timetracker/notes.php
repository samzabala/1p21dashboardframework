<div
	id="timetracker-team"
	class="module-grid">

	<!-- activity log -->
	<div
		id="timetracker-team-activity-log"
		class="module"
		>
		<div class="module-header module-header-break">

			<?php app_get_component('components/module-functions-accordion-toggle'); ?>

			<div class="flex-0-0">
			
				<h3 class="no-margin special-secondary text-clip-background background-gradient">
					<a href="<?php app_create_link(array('template'=>'profile')) ?>" class="no-margin color-neutral color-primary-hover no-margin profile-name">
						Notes
					</a>
				</h3>
				
			</div>
			<div class="module-functions no-margin-top accordion accordion-mobile">
				<?php app_get_component('components/filter-input-group-timetracked'); ?>
				<?php app_get_component('components/modal-add-notes'); ?>
			</div>
		</div>
		<div class="module-content accordion open">
			<!-- @if there are entries -->
		
				<div class="table-wrapper">

					<table class="text-vertical-align-middle">
						<tr>
							<th class="text-nowrap">Date</th>
							<th class="text-nowrap text-align-center">Author</th>
							<th class="text-nowrap">Task</th>
							<th class="text-nowrap">Client</th>
							<th class="text-nowrap dashboard-table-cell-max">Notes</th>

							<!-- @NOTE this relates to this task: https://trello.com/c/1K23xO7W/664-time-tracker-add-ability-to-share-notes uncomment the whole td/th while not ready for now-->
							<th class="text-nowrap">Shared</th>

							<th class="dashboard-table-cell-action text-align-center position-relative">&nbsp; <span class="sr-only">Actions</span></th>
						</tr>
						
						<!-- @LOOP TR-->
							<tr>
								<td>
									<span class="note-entry-span">
										<span class="REPLACE">
											4/20/20
										</span>
									</span>
								</td>
								<td class=" text-align-center">
									<?php app_get_component('components/profile-image-small'); ?>
								</td>
								<td class="dashboard-table-cell-max">
									<span href="<?=app_create_link(array('template'=>'project')) ?>" class="open-client text-wrap-ellipsis font-weight-700">
										<span class="REPLACE">Model code in this row Model code in this row Model code in this row Model code in this row Model code in this row </span>
									</span>
								</td>

								<td class="dashboard-table-cell-max">
									<a href="<?=app_create_link(array('template'=>'project')) ?>" class="open-task text-wrap-ellipsis">
										<span class="REPLACE">Task Name but really long Task Name but really long Task Name but really long Task Name but really long Task Name but really long Task Name but really long </span>
									</a>
								</td>
								
								<td class="dashboard-table-cell-max">
									<div class="flex-grid flex-grid-no-gutter flex-grid-fixed align-items-center justify-content-space-between">
										
										<div class="flex-child flex-col-10">
											<a data-toggle="modal" href="#task-notes-ID" class="open-client text-wrap-ellipsis">
												<span class="REPLACE">This is gonna be some long note but whatever you can toggle it with the butt next to me try me boiii</span>
											</a>
										</div>
										
										<div class="flex-child flex-col-2">
											<?php app_get_component('components/table-modal-notes') ?>
										</div>
									</div>
								</td>


								<!-- @NOTE this relates to this task: https://trello.com/c/1K23xO7W/664-time-tracker-add-ability-to-share-notes uncomment the whole td/th while not ready for now-->
								<td  class="dashboard-table-cell-max">

										<!-- @if only shared to one person -->
											<?php app_get_component('components/profile-image-small') ?>

										<!-- @elseif more than one -->
											<?php app_get_component('components/profile-image-small-multiple') ?>

										<!-- @else if therese no one -->
											<span class="font-style-italic color-neutral">
												Not shared yet
											</span>


								</td>

								<td class="dashboard-table-cell-action text-align-center position-relative">
									<!-- @NOTE this relates to this task: https://trello.com/c/1K23xO7W/664-time-tracker-add-ability-to-share-notes. replace with components/tooltip-action while not ready for now-->
									<!-- @if user has rights to share, edit or delete -->
										<?php app_get_component('components/tooltip-action-with-share') ?>
									<!-- @else  -->
										&nbsp;
								</td>
							</tr>



								<!-- @PLACEHOLDER: DELETE WHEN READY -->
									<?php for($j=1; $j<=2; $j++){ ?>
										<tr>
											<td>
												<span class="note-entry-span">
													<span class="REPLACE">
														4/20/20
													</span>
												</span>
											</td>
											<td class="text-align-center">
												<?php app_get_component('components/profile-image-small'); ?>
											</td>
											<td class="dashboard-table-cell-max">
												<span href="<?=app_create_link(array('template'=>'project')) ?>" class="open-client text-wrap-ellipsis font-weight-700">
													<span class="REPLACE">Client Name  but really long Client Name  but really long Client Name  but really long Client Name  but really long Client Name  but really long Client Name  but really long Client Name  but really long Client Name  but really long </span>
												</span>
											</td>

											<td class="dashboard-table-cell-max">
												<a href="<?=app_create_link(array('template'=>'project')) ?>" class="open-task text-wrap-ellipsis">
													<span class="REPLACE">Task Name but really long Task Name but really long Task Name but really long Task Name but really long Task Name but really long Task Name but really long </span>
												</a>
											</td>
											
											<td class="dashboard-table-cell-max">
												<div class="flex-grid flex-grid-no-gutter flex-grid-fixed align-items-center justify-content-space-between">
													
													<div class="flex-child flex-col-10">
														<a data-toggle="modal" href="#task-notes-ID" class="open-client text-wrap-ellipsis">
															<span class="REPLACE">DEMO Shared with one person</span>
														</a>
													</div>
													
													<div class="flex-child flex-col-2">
														<?php app_get_component('components/table-modal-notes') ?>
													</div>
												</div>
											</td>


											<!-- @NOTE this relates to this task: https://trello.com/c/1K23xO7W/664-time-tracker-add-ability-to-share-notes uncomment the whole td/th while not ready for now-->
											<td  class="dashboard-table-cell-max">

													<!-- @if only shared to one person -->
														<?php app_get_component('components/profile-image-small') ?>


											</td>

											<td class="dashboard-table-cell-action text-align-center position-relative">
												<!-- @NOTE this relates to this task: https://trello.com/c/1K23xO7W/664-time-tracker-add-ability-to-share-notes. replace with components/tooltip-action while not ready for now-->
												<!-- @if user has rights to share, edit or delete -->
													<?php app_get_component('components/tooltip-action-with-share') ?>
												<!-- @else  -->
													&nbsp;
											</td>
										</tr>
										
										<tr>
											<td>
												<span class="note-entry-span">
													<span class="REPLACE">
														4/20/20
													</span>
												</span>
											</td>
											<td class="text-align-center">
												<?php app_get_component('components/profile-image-small'); ?>
											</td>
											<td class="dashboard-table-cell-max">
												<span href="<?=app_create_link(array('template'=>'project')) ?>" class="open-client text-wrap-ellipsis font-weight-700">
													<span class="REPLACE">Client Name  but really long Client Name  but really long Client Name  but really long Client Name  but really long Client Name  but really long Client Name  but really long Client Name  but really long Client Name  but really long </span>
												</span>
											</td>

											<td class="dashboard-table-cell-max">
												<a href="<?=app_create_link(array('template'=>'project')) ?>" class="open-task text-wrap-ellipsis">
													<span class="REPLACE">Task Name but really long Task Name but really long Task Name but really long Task Name but really long Task Name but really long Task Name but really long </span>
												</a>
											</td>
											
											<td class="dashboard-table-cell-max">
												<div class="flex-grid flex-grid-no-gutter flex-grid-fixed align-items-center justify-content-space-between">
													
													<div class="flex-child flex-col-10">
														<a data-toggle="modal" href="#task-notes-ID" class="open-client text-wrap-ellipsis">
															<span class="REPLACE">Demo shared w/ 1 <= x <= 3 </span>
														</a>
													</div>
													
													<div class="flex-child flex-col-2">
														<?php app_get_component('components/table-modal-notes') ?>
													</div>
												</div>
											</td>


											<!-- @NOTE this relates to this task: https://trello.com/c/1K23xO7W/664-time-tracker-add-ability-to-share-notes uncomment the whole td/th while not ready for now-->
											<td  class="dashboard-table-cell-max">

											<div class="profile-image-multiple">
												<a class="thumbnail-cluster" href="#modal-more-members">
													<!-- @while profiles are < 3 : loop until it hits max number of dom items, 3 -->
														<span class="thumbnail thumbnail-small">
															<!-- @IF has profile imahe -->
															<div class="thumbnail-image">

																<img class="profile-image" data-src="<?=FWAPPS_ROOT_URL ?>/placeholder/profiles/team-des-jenn.jpg" alt="">
															</div>

															<!-- @ELSE -->
															<span class="thumbnail-text profile-name-initial">
																<span class="REPLACE">PN</span>
															</span>
														</span>

														<span class="thumbnail thumbnail-small">
															<!-- @IF has profile imahe -->
															<div class="thumbnail-image">

																<img class="profile-image" data-src="<?=FWAPPS_ROOT_URL ?>/placeholder/profiles/team-des-jenn.jpg" alt="">
															</div>

															<!-- @ELSE -->
															<span class="thumbnail-text profile-name-initial">
																<span class="REPLACE">PN</span>
															</span>
														</span>

															<!-- @PLACEHOLDER: DELETE WHEN READY -->
																<?php if($j % 2 == 0){ ?>
																
																	<span class="thumbnail thumbnail-small">
																		<!-- @IF has profile imahe -->
																		<div class="thumbnail-image">

																			<img class="profile-image" data-src="<?=FWAPPS_ROOT_URL ?>/placeholder/profiles/team-des-jenn.jpg" alt="">
																		</div>

																		<!-- @ELSE -->
																		<span class="thumbnail-text profile-name-initial">
																			<span class="REPLACE">PN</span>
																		</span>
																	</span>


																<?php } ?>


												</a>

												<!-- @note this should be reusable. replace title appropriately -->
												<div class="modal" id="modal-more-members" data-modal-max-width="400px" data-modal-title="Shared with...">
													<ul class="list-group">
														<li>
															<?php app_get_component('components/table-profile-named') ?>
														</li>

															<!-- @PLACEHOLDER: DELETE WHEN READY -->
																<?php for($i=1; $i<=10; $i++){ ?>
																	<li>
																		<?php app_get_component('components/table-profile-named') ?>
																	</li>
																<?php } ?>
													</ul>
												</div>
											</div>


											</td>

											<td class="dashboard-table-cell-action text-align-center position-relative">
												<!-- @NOTE this relates to this task: https://trello.com/c/1K23xO7W/664-time-tracker-add-ability-to-share-notes. replace with components/tooltip-action while not ready for now-->
												<!-- @if user has rights to share, edit or delete -->
													<?php app_get_component('components/tooltip-action-with-share') ?>
												<!-- @else  -->
													&nbsp;
											</td>
										</tr>

										<tr>
											<td>
												<span class="note-entry-span">
													<span class="REPLACE">
														4/20/20
													</span>
												</span>
											</td>
											<td class="text-align-center">
												<?php app_get_component('components/profile-image-small'); ?>
											</td>
											<td class="dashboard-table-cell-max">
												<span href="<?=app_create_link(array('template'=>'project')) ?>" class="open-client text-wrap-ellipsis font-weight-700">
													<span class="REPLACE">Client Name  but really long Client Name  but really long Client Name  but really long Client Name  but really long Client Name  but really long Client Name  but really long Client Name  but really long Client Name  but really long </span>
												</span>
											</td>

											<td class="dashboard-table-cell-max">
												<a href="<?=app_create_link(array('template'=>'project')) ?>" class="open-task text-wrap-ellipsis">
													<span class="REPLACE">Task Name but really long Task Name but really long Task Name but really long Task Name but really long Task Name but really long Task Name but really long </span>
												</a>
											</td>
											
											<td class="dashboard-table-cell-max">
												<div class="flex-grid flex-grid-no-gutter flex-grid-fixed align-items-center justify-content-space-between">
													
													<div class="flex-child flex-col-10">
														<a data-toggle="modal" href="#task-notes-ID" class="open-client text-wrap-ellipsis">
															<span class="REPLACE">Demo shared more than 3</span>
														</a>
													</div>
													
													<div class="flex-child flex-col-2">
														<?php app_get_component('components/table-modal-notes') ?>
													</div>
												</div>
											</td>


											<!-- @NOTE this relates to this task: https://trello.com/c/1K23xO7W/664-time-tracker-add-ability-to-share-notes uncomment the whole td/th while not ready for now-->
											<td  class="dashboard-table-cell-max">

													<!-- @elseif more than one -->
														<?php app_get_component('components/profile-image-small-multiple') ?>


											</td>

											<td class="dashboard-table-cell-action text-align-center position-relative">
												<!-- @NOTE this relates to this task: https://trello.com/c/1K23xO7W/664-time-tracker-add-ability-to-share-notes. replace with components/tooltip-action while not ready for now-->
												<!-- @if user has rights to share, edit or delete -->
													<?php app_get_component('components/tooltip-action-with-share') ?>
												<!-- @else  -->
													&nbsp;
											</td>
										</tr>

										<tr>
											<td>
												<span class="note-entry-span">
													<span class="REPLACE">
														4/20/20
													</span>
												</span>
											</td>
											<td class="text-align-center">
												<?php app_get_component('components/profile-image-small'); ?>
											</td>
											<td class="dashboard-table-cell-max">
												<span href="<?=app_create_link(array('template'=>'project')) ?>" class="open-client text-wrap-ellipsis font-weight-700">
													<span class="REPLACE">Client Name  but really long Client Name  but really long Client Name  but really long Client Name  but really long Client Name  but really long Client Name  but really long Client Name  but really long Client Name  but really long </span>
												</span>
											</td>
											<td class="dashboard-table-cell-max">
												<a href="<?=app_create_link(array('template'=>'project')) ?>" class="open-task text-wrap-ellipsis">
													<span class="REPLACE">Task Name but really long Task Name but really long Task Name but really long Task Name but really long Task Name but really long Task Name but really long </span>
												</a>
											</td>
											
											<td class="dashboard-table-cell-max">
												<div class="flex-grid flex-grid-no-gutter flex-grid-fixed align-items-center justify-content-space-between">
													
													<div class="flex-child flex-col-10">
														<a data-toggle="modal" href="#task-notes-ID" class="open-client text-wrap-ellipsis">
															<span class="REPLACE">Demo shared w/ no one</span>
														</a>
													</div>
													
													<div class="flex-child flex-col-2">
														<?php app_get_component('components/table-modal-notes') ?>
													</div>
												</div>
											</td>


											<!-- @NOTE this relates to this task: https://trello.com/c/1K23xO7W/664-time-tracker-add-ability-to-share-notes uncomment the whole td/th while not ready for now-->
											<td  class="dashboard-table-cell-max">

													<span class="font-style-italic color-neutral">
														Not shared yet
													</span>


											</td>

											<td class="dashboard-table-cell-action text-align-center position-relative">
												<!-- @NOTE this relates to this task: https://trello.com/c/1K23xO7W/664-time-tracker-add-ability-to-share-notes. replace with components/tooltip-action while not ready for now-->
												<!-- @if user has rights to share, edit or delete -->
													<?php app_get_component('components/tooltip-action-with-share') ?>
												<!-- @else  -->
													&nbsp;
											</td>
										</tr>
										
									<?php } ?>





					</table>
				</div>
			<!-- @else no entries -->
				<a href="#modal-track-time" class="zone zone-primary">
					You have no notes yet. Click here to add some <i class="symbol symbol-plus"></i>
				</a>



			<!-- PAGINATION -->
		</div>
		<!-- @if pagination is needed -->
		<div class="module-footer text-align-right">
			<div class="module-functions">
				<?php app_get_component('components/pagination') ?>
				<?php app_get_component('components/pagination-view-per-page') ?>
			</div>
		</div>
	</div>
</div>