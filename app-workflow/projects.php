
<div id="workflow-dash-projects-heading" class="position-relative">
	<div class="flex-grid flex-grid-compact justify-content-space-between">
		<div class="flex-child">
			<p class="no-margin special-secondary text-clip-background background-gradient">
				Projects
			</p>
		</div>
		<div class="flex-child align-items-center position-relative  flex-md flex-direction-row-reverse">

			<a href="<?=app_create_link(array('template'=>'project-edit')) ?>" class="btn btn-primary btn-block-mobile " title="Add Project">
				Add Project&nbsp;<i class="symbol symbol-plus"></i>
			</a>
			<span class="hide-mobile spacer">&nbsp;&nbsp;</span>
			<?= app_get_component('components/filter-dropdown-projects-workflow'); ?>
		</div>
	</div>
</div>

<div id="workflow-projects" class="module-grid">
	<div
		id="workflow-dash-fav-projects"
		class="module">
		<div class="module-header">
			<h3 class="module-title open" data-toggle="accordion" data-href="#favorite-projects">
				Favorite Projects <i class="symbol symbol-caret-down symbol-caret-up-toggle"></i>
			</h3>
		</div>
		<div class="module-content accordion open" id="favorite-projects">
			<!-- @if there are entries -->
				<div class="table-wrapper dashboard-table-wrapper-gutterless">
					<table class="table-small data-fave-projects text-vertical-align-middle">
						<tr>
							<th class="text-nowrap table-cell-no-gutter" >&nbsp;</th>
							<th class="dashboard-table-cell-max text-nowrap">Project</th>
							<th class="dashboard-table-cell-max text-nowrap">Client</th>
							<th class="text-nowrap">Type</th>
							<th class="text-nowrap">Tags</th>
							<th class="dashboard-table-cell-thumbnail text-nowrap text-align-center">PM</th>
							<th class="dashboard-table-cell-thumbnail text-nowrap text-align-center">AM</th>
						</tr>

						<!-- @loop TR -->
							<tr>
								<td class="dashboard-table-cell-fave">
									<!-- 

									@NOTE
									classes to add
										.project-favorite
											if it is a fave => `active`
											if not			=> ''
									-->
									<a href="#" class="project-favorite color-primary-hover color-neutral color-primary-active" >
										<i class="symbol symbol-star-stroke symbol-star-toggle"></i>
									</a>
								</td>
								<td class="dashboard-table-cell-max">
									<a href="<?=app_create_link(array('template'=>'project-view')) ?>" class="≈-name text-wrap-ellipsis">
										<span class="REPLACE">Project with a really long name Project with a really long name Project with a really long name Project with a really long name Project with a really long name Project with a really long name Project with a really long name Project with a really long name Project with a really long name Project with a really long name Project with a really long name Project with a really long name Project with a really long name Project with a really long name Project with a really long name Project with a really long name Project with a really long name </span>
									</a>
								</td>
								<td class="dashboard-table-cell-max">
									<!-- @NOTE nbote sure where too link yet -->
									<a href="<?=app_create_link(array('template'=>'client-view')) ?>" class="project-client text-wrap-ellipsis project-client">
										<span class="REPLACE">Client with a really long name Client with a really long name Client with a really long name Client with a really long name Client with a really long name Client with a really long name Client with a really long name Client with a really long name Client with a really long name Client with a really long name Client with a really long name Client with a really long name Client with a really long name Client with a really long name Client with a really long name Client with a really long name  </span>
									</a>
								</td>
								<td class="dashboard-table-cell-max">
									<!-- @if project has type -->
									<span href="<?=app_create_link(array('template'=>'project-view')) ?>" class="project-type text-wrap-ellipsis">
										<span class="REPLACE">LS360 SEO</span>
									</span>
									<!-- @else -->
									&nbsp;
								</td>
								<td class="dashboard-table-cell-max">
									<!-- @if project has tags -->
										<div class="project-tags">
											<!-- @loop span.tag -->
												<!--
													AVAILABLE TAG SCHEMES:
													tag-default
													tag-primary
													tag-secondary
													tag-accent
													tag-neutral
													tag-success
													tag-caution
													tag-error
													tag-intensity-1
													tag-intensity-2
													tag-intensity-3
													tag-intensity-4
													tag-intensity-5
												-->
													<!--
														@NOTE @dynamic class => tag-COLORSCHEME
														we may need to coordinate to have colors associated with certain tags.
														I would not recommend creating new classes by adding colors to the ui's color scheme so we can reduce the need of increasing the stylesheet's file size further.
														We can have an array of random colors much like the setup for the scoreboard charts and set them as inline background-color for `tag-default`
														If it gets too tedious, we can always just use `tag-primary` for all tags as fallback
													-->

													<span class="p tag tag-primary">
													<span class="tag-text">
														<span class="REPLACE">Tag Text</span>
													</span>
												</span>

												
													<!-- @PLACEHOLDER: DELETE WHEN READY -->
														<?php 
														$abilabol_tag = array(
															'tag-default',
															'tag-primary',
															'tag-secondary',
															'tag-accent',
															'tag-neutral',
															'tag-success',
															'tag-caution',
															'tag-error',
															'tag-intensity-1',
															'tag-intensity-2',
															'tag-intensity-3',
															'tag-intensity-4',
															'tag-intensity-5',
														);
														?>
														<?php for($i=0; $i<1; $i++){ ?>
															<?php $j = 1;?>
															<span class="p tag <?=$abilabol_tag[$i];?>">
																<span class="tag-text">
																	<span class="REPLACE">Tag Te<?php while($j <= $i): echo 'e'; $j++; endwhile; ?>xt</span>
																</span>
															</span>
														<?php } ?>
											<!-- @else -->
												<span class="color-neutral font-style-italic">Untagged</span>
										</div>
								</td>
								<td class="dashboard-table-cell-thumbnail text-align-center position-relative">
									<!-- @if has project manager -->
										<?php app_get_component('components/profile-image-small') ?>
									<!-- @else -->
										<span class="color-neutral font-style-italic">Not set</span>
								</td>
								<td class="dashboard-table-cell-thumbnail text-align-center position-relative">
									<!-- @if has account manager -->
										<?php app_get_component('components/profile-image-small') ?>
									<!-- @else -->
										<span class="color-neutral font-style-italic">Not set</span>
								</td>
							</tr>


								<!-- @PLACEHOLDER: DELETE WHEN READY -->
									<?php for($h=1; $h<=7; $h++){ ?>
										<tr>
											<td class="dashboard-table-cell-fave">
												<!-- 

												@NOTE
												classes to add
													.project-favorite
														if it is a fave => `active`
														if not			=> ''
												-->
												<a href="#" class="project-favorite color-primary-hover color-neutral color-primary-active" >
													<i class="symbol symbol-star-stroke symbol-star-toggle"></i>
												</a>
											</td>
											<td class="dashboard-table-cell-max">
												<a href="<?=app_create_link(array('template'=>'project-view')) ?>" class="≈-name text-wrap-ellipsis">
													<span class="REPLACE">Project with a really long name Project with a really long name Project with a really long name Project with a really long name Project with a really long name Project with a really long name Project with a really long name Project with a really long name Project with a really long name Project with a really long name Project with a really long name Project with a really long name Project with a really long name Project with a really long name Project with a really long name Project with a really long name Project with a really long name </span>
												</a>
											</td>
											<td class="dashboard-table-cell-max">
												<!-- @NOTE nbote sure where too link yet -->
												<a href="<?=app_create_link(array('template'=>'client-view')) ?>" class="project-client text-wrap-ellipsis project-client">
													<span class="REPLACE">Client with a really long name Client with a really long name Client with a really long name Client with a really long name Client with a really long name Client with a really long name Client with a really long name Client with a really long name Client with a really long name Client with a really long name Client with a really long name Client with a really long name Client with a really long name Client with a really long name Client with a really long name Client with a really long name  </span>
												</a>
											</td>
											<td class="dashboard-table-cell-max">
												<!-- @if project has type -->
												<span href="<?=app_create_link(array('template'=>'project-view')) ?>" class="project-type text-wrap-ellipsis">
													<span class="REPLACE">LS360 SEO</span>
												</span>
												<!-- @else -->
												&nbsp;
											</td>
											<td class="dashboard-table-cell-max">
												<!-- @if project has tags -->
													<div class="project-tags">
														<!-- @loop span.tag -->
															<!--
																AVAILABLE TAG SCHEMES:
																tag-default
																tag-primary
																tag-secondary
																tag-accent
																tag-neutral
																tag-success
																tag-caution
																tag-error
																tag-intensity-1
																tag-intensity-2
																tag-intensity-3
																tag-intensity-4
																tag-intensity-5
															-->
																<!--
																	@NOTE @dynamic class => tag-COLORSCHEME
																	we may need to coordinate to have colors associated with certain tags.
																	I would not recommend creating new classes by adding colors to the ui's color scheme so we can reduce the need of increasing the stylesheet's file size further.
																	We can have an array of random colors much like the setup for the scoreboard charts and set them as inline background-color for `tag-default`
																	If it gets too tedious, we can always just use `tag-primary` for all tags as fallback
																-->

																<span class="p tag tag-primary">
																<span class="tag-text">
																	<span class="REPLACE">Tag Text</span>
																</span>
															</span>

															
																<!-- @PLACEHOLDER: DELETE WHEN READY -->
																	<?php 
																	$abilabol_tag = array(
																		'tag-default',
																		'tag-primary',
																		'tag-secondary',
																		'tag-accent',
																		'tag-neutral',
																		'tag-success',
																		'tag-caution',
																		'tag-error',
																		'tag-intensity-1',
																		'tag-intensity-2',
																		'tag-intensity-3',
																		'tag-intensity-4',
																		'tag-intensity-5',
																	);
																	?>
																	<?php for($i=0; $i<1; $i++){ ?>
																		<?php $j = 1;?>
																		<span class="p tag <?=$abilabol_tag[$i];?>">
																			<span class="tag-text">
																				<span class="REPLACE">Tag Te<?php while($j <= $i): echo 'e'; $j++; endwhile; ?>xt</span>
																			</span>
																		</span>
																	<?php } ?>
														<!-- @else -->
															<span class="color-neutral font-style-italic">Untagged</span>
													</div>
											</td>
											<td class="dashboard-table-cell-thumbnail text-align-center position-relative">
												<!-- @if has project manager -->
													<?php app_get_component('components/profile-image-small') ?>
												<!-- @else -->
													<span class="color-neutral font-style-italic">Not set</span>
											</td>
											<td class="dashboard-table-cell-thumbnail text-align-center position-relative">
												<!-- @if has account manager -->
													<?php app_get_component('components/profile-image-small') ?>
												<!-- @else -->
													<span class="color-neutral font-style-italic">Not set</span>
											</td>
										</tr>
									<?php } ?>
					</table>
				</div>
			<!-- @else no entries -->
				<p class="p color-neutral font-style-italic">No favorites yet.</p>
		</div>
	</div>
	<div
		id="workflow-dash-projects"
		class="module">
		<div class="module-header">
			<h3 class="module-title open" data-toggle="accordion" data-href="#projects">
				Projects <i class="symbol symbol-caret-down symbol-caret-up-toggle"></i>
			</h3>
		</div>
		<div class="module-content accordion open" id="projects">
			<!-- @if there are entries -->
				<div class="table-wrapper dashboard-table-wrapper-gutterless">
					<table class="table-small data-fave-projects text-vertical-align-middle">
						<tr>
							<th class="text-nowrap table-cell-no-gutter" >&nbsp;</th>
							<th class="dashboard-table-cell-max text-nowrap">Project</th>
							<th class="dashboard-table-cell-max text-nowrap">Client</th>
							<th class="text-nowrap">Type</th>
							<th class="text-nowrap">Tags</th>
							<th class="dashboard-table-cell-thumbnail text-nowrap text-align-center">PM</th>
							<th class="dashboard-table-cell-thumbnail text-nowrap text-align-center">AM</th>
						</tr>

						<!-- @loop TR -->
							<tr>
								<td class="dashboard-table-cell-fave">
									<!-- 

									@NOTE
									classes to add
										.project-favorite
											if it is a fave => `active`
											if not			=> ''
									-->
									<a href="#" class="project-favorite color-primary-hover color-neutral color-primary-active" >
										<i class="symbol symbol-star-stroke symbol-star-toggle"></i>
									</a>
								</td>
								<td class="dashboard-table-cell-max">
									<a href="<?=app_create_link(array('template'=>'project-view')) ?>" class="≈-name text-wrap-ellipsis">
										<span class="REPLACE">Project with a really long name Project with a really long name Project with a really long name Project with a really long name Project with a really long name Project with a really long name Project with a really long name Project with a really long name Project with a really long name Project with a really long name Project with a really long name Project with a really long name Project with a really long name Project with a really long name Project with a really long name Project with a really long name Project with a really long name </span>
									</a>
								</td>
								<td class="dashboard-table-cell-max">
									<!-- @NOTE nbote sure where too link yet -->
									<a href="<?=app_create_link(array('template'=>'client-view')) ?>" class="project-client text-wrap-ellipsis project-client">
										<span class="REPLACE">Client with a really long name Client with a really long name Client with a really long name Client with a really long name Client with a really long name Client with a really long name Client with a really long name Client with a really long name Client with a really long name Client with a really long name Client with a really long name Client with a really long name Client with a really long name Client with a really long name Client with a really long name Client with a really long name  </span>
									</a>
								</td>
								<td class="dashboard-table-cell-max">
									<!-- @if project has type -->
									<span href="<?=app_create_link(array('template'=>'project-view')) ?>" class="project-type text-wrap-ellipsis">
										<span class="REPLACE">LS360 SEO</span>
									</span>
									<!-- @else -->
									&nbsp;
								</td>
								<td class="dashboard-table-cell-max">
									<!-- @if project has tags -->
										<div class="project-tags">
											<!-- @loop span.tag -->
												<!--
													AVAILABLE TAG SCHEMES:
													tag-default
													tag-primary
													tag-secondary
													tag-accent
													tag-neutral
													tag-success
													tag-caution
													tag-error
													tag-intensity-1
													tag-intensity-2
													tag-intensity-3
													tag-intensity-4
													tag-intensity-5
												-->
													<!--
														@NOTE @dynamic class => tag-COLORSCHEME
														we may need to coordinate to have colors associated with certain tags.
														I would not recommend creating new classes by adding colors to the ui's color scheme so we can reduce the need of increasing the stylesheet's file size further.
														We can have an array of random colors much like the setup for the scoreboard charts and set them as inline background-color for `tag-default`
														If it gets too tedious, we can always just use `tag-primary` for all tags as fallback
													-->

													<span class="p tag tag-primary">
													<span class="tag-text">
														<span class="REPLACE">Tag Text</span>
													</span>
												</span>

												
													<!-- @PLACEHOLDER: DELETE WHEN READY -->
														<?php 
														$abilabol_tag = array(
															'tag-default',
															'tag-primary',
															'tag-secondary',
															'tag-accent',
															'tag-neutral',
															'tag-success',
															'tag-caution',
															'tag-error',
															'tag-intensity-1',
															'tag-intensity-2',
															'tag-intensity-3',
															'tag-intensity-4',
															'tag-intensity-5',
														);
														?>
														<?php for($i=0; $i<1; $i++){ ?>
															<?php $j = 1;?>
															<span class="p tag <?=$abilabol_tag[$i];?>">
																<span class="tag-text">
																	<span class="REPLACE">Tag Te<?php while($j <= $i): echo 'e'; $j++; endwhile; ?>xt</span>
																</span>
															</span>
														<?php } ?>
											<!-- @else -->
												<span class="color-neutral font-style-italic">Untagged</span>
										</div>
								</td>
								<td class="dashboard-table-cell-thumbnail text-align-center position-relative">
									<!-- @if has project manager -->
										<?php app_get_component('components/profile-image-small') ?>
									<!-- @else -->
										<span class="color-neutral font-style-italic">Not set</span>
								</td>
								<td class="dashboard-table-cell-thumbnail text-align-center position-relative">
									<!-- @if has account manager -->
										<?php app_get_component('components/profile-image-small') ?>
									<!-- @else -->
										<span class="color-neutral font-style-italic">Not set</span>
								</td>
							</tr>


								<!-- @PLACEHOLDER: DELETE WHEN READY -->
									<?php for($h=1; $h<=7; $h++){ ?>
										<tr>
											<td class="dashboard-table-cell-fave">
												<!-- 

												@NOTE
												classes to add
													.project-favorite
														if it is a fave => `active`
														if not			=> ''
												-->
												<a href="#" class="project-favorite color-primary-hover color-neutral color-primary-active" >
													<i class="symbol symbol-star-stroke symbol-star-toggle"></i>
												</a>
											</td>
											<td class="dashboard-table-cell-max">
												<a href="<?=app_create_link(array('template'=>'project-view')) ?>" class="≈-name text-wrap-ellipsis">
													<span class="REPLACE">Project with a really long name Project with a really long name Project with a really long name Project with a really long name Project with a really long name Project with a really long name Project with a really long name Project with a really long name Project with a really long name Project with a really long name Project with a really long name Project with a really long name Project with a really long name Project with a really long name Project with a really long name Project with a really long name Project with a really long name </span>
												</a>
											</td>
											<td class="dashboard-table-cell-max">
												<!-- @NOTE nbote sure where too link yet -->
												<a href="<?=app_create_link(array('template'=>'client-view')) ?>" class="project-client text-wrap-ellipsis project-client">
													<span class="REPLACE">Client with a really long name Client with a really long name Client with a really long name Client with a really long name Client with a really long name Client with a really long name Client with a really long name Client with a really long name Client with a really long name Client with a really long name Client with a really long name Client with a really long name Client with a really long name Client with a really long name Client with a really long name Client with a really long name  </span>
												</a>
											</td>
											<td class="dashboard-table-cell-max">
												<!-- @if project has type -->
												<span href="<?=app_create_link(array('template'=>'project-view')) ?>" class="project-type text-wrap-ellipsis">
													<span class="REPLACE">LS360 SEO</span>
												</span>
												<!-- @else -->
												&nbsp;
											</td>
											<td class="dashboard-table-cell-max">
												<!-- @if project has tags -->
													<div class="project-tags">
														<!-- @loop span.tag -->
															<!--
																AVAILABLE TAG SCHEMES:
																tag-default
																tag-primary
																tag-secondary
																tag-accent
																tag-neutral
																tag-success
																tag-caution
																tag-error
																tag-intensity-1
																tag-intensity-2
																tag-intensity-3
																tag-intensity-4
																tag-intensity-5
															-->
																<!--
																	@NOTE @dynamic class => tag-COLORSCHEME
																	we may need to coordinate to have colors associated with certain tags.
																	I would not recommend creating new classes by adding colors to the ui's color scheme so we can reduce the need of increasing the stylesheet's file size further.
																	We can have an array of random colors much like the setup for the scoreboard charts and set them as inline background-color for `tag-default`
																	If it gets too tedious, we can always just use `tag-primary` for all tags as fallback
																-->

																<span class="p tag tag-primary">
																<span class="tag-text">
																	<span class="REPLACE">Tag Text</span>
																</span>
															</span>

															
																<!-- @PLACEHOLDER: DELETE WHEN READY -->
																	<?php 
																	$abilabol_tag = array(
																		'tag-default',
																		'tag-primary',
																		'tag-secondary',
																		'tag-accent',
																		'tag-neutral',
																		'tag-success',
																		'tag-caution',
																		'tag-error',
																		'tag-intensity-1',
																		'tag-intensity-2',
																		'tag-intensity-3',
																		'tag-intensity-4',
																		'tag-intensity-5',
																	);
																	?>
																	<?php for($i=0; $i<1; $i++){ ?>
																		<?php $j = 1;?>
																		<span class="p tag <?=$abilabol_tag[$i];?>">
																			<span class="tag-text">
																				<span class="REPLACE">Tag Te<?php while($j <= $i): echo 'e'; $j++; endwhile; ?>xt</span>
																			</span>
																		</span>
																	<?php } ?>
														<!-- @else -->
															<span class="color-neutral font-style-italic">Untagged</span>
													</div>
											</td>
											<td class="dashboard-table-cell-thumbnail text-align-center position-relative">
												<!-- @if has project manager -->
													<?php app_get_component('components/profile-image-small') ?>
												<!-- @else -->
													<span class="color-neutral font-style-italic">Not set</span>
											</td>
											<td class="dashboard-table-cell-thumbnail text-align-center position-relative">
												<!-- @if has account manager -->
													<?php app_get_component('components/profile-image-small') ?>
												<!-- @else -->
													<span class="color-neutral font-style-italic">Not set</span>
											</td>
										</tr>
									<?php } ?>
					</table>
				</div>
			<!-- @else no entries -->
				<p class="p color-neutral font-style-italic">No projects available yet.</p>
		</div>
	</div>
</div>