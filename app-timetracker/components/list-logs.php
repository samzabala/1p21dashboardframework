<!-- 
@IMPORTS
	js
		import Accordion from './../../../assets/plugins/framework/src/js/imports/modal';


	scss

		@import './../../../assets/plugins/framework/src/scss/imports/_modal';
 -->
<div class="table-wrapper">
	<table class="timetracker-table">
	
			<!--
			@if this task has entries
			@loop template / tr and tbody
			:NOTE: tag is commented out for front end demo to work because tables are weird
			-->
			<!-- <template> -->
				<tr>
					<td class="no-border-bottom timetracker-td timetracker-td-w timetracker-td-w-40 text-align-center no-padding-right" v-if="status">
						<div class="draggable-task btn font-size-large no-padding color-neutral align-items-flex-start color-theme-hover color-theme-active color-theme-focus no-shadow cursor-grab cursor-grabbing-active">
							<i class="symbol symbol-drag"></i>
						</div>
					</td>
		
					<td class="hide-mobile no-border-bottom text-align-right timetracker-td timetracker-td-w timetracker-td-w-60">
					
						<!-- @if has entries -->
							<a href="#entry-subentries-REPLACEID" class="btn btn-small btn-primary btn-symbol btn-round " data-toggle-accordion>
								<i class="symbol symbol-arrow-down symbol-arrow-up-toggle"></i>
							</a>
						<!-- @else -->
							<span class="spacer">&nbsp;</span>
					</td>
					<td class="no-border-bottom timetracker-td" colspan="2">
							
		
						<form class="entry-task-name h5 color-inherit no-margin-y flex-xs align-items-center">
							<!-- @if task is a favorite -->
								<i class="symbol symbol-star color-primary"></i>
							<!-- @if can edit -->
								<!-- <input class="no-margin input input-blend input-block flex-1-1" placeholder="Type Task Title" value="REPLACE Make everything float left and clear none" /> -->
							<!-- @else -->
								<span class="REPLACE">Make everything float left and clear none</span>
						</form>
		
						<!-- @if has tags -->
		
							<div class="margin-small-top">
								<!-- @loop .tag -->
									<span class="tag tag-neutral font-weight-400">
										<span class="REPLACE">Tag Text</span>
									</span>
				
				
										<!-- @PLACEHOLDER delete when ready -->
											<span class="tag tag-neutral font-weight-400">
												Almost christmas means it wasn't christmas
											</span>
											<span class="tag tag-neutral font-weight-400">
												Incoming very long tag, Reese's Puffs! Eat 'em up, Eat 'em up, Eat 'em up, Eat 'em up!
												Reese's Puffs, Reese's Puffs! Eat 'em up, Eat 'em up, Eat 'em up, Eat 'em up!
												Reese's Puffs, Reese's Puffs! Eat 'em up, Eat 'em up, Eat 'em up, Eat 'em up!
												Reese's Puffs, Reese's Puffs! Eat 'em up, Eat 'em up, Eat 'em up, Eat 'em up!
												Reese's Puffs, Reese's Puffs! Eat 'em up, Eat 'em up, Eat 'em up, Eat 'em up!
												Reese's Puffs, Reese's Puffs! Eat 'em up, Eat 'em up, Eat 'em up, Eat 'em up!
												Reese's Puffs, Reese's Puffs! Eat 'em up, Eat 'em up, Eat 'em up, Eat 'em up!
											</span>
							</div>
					</td>
					<td class="no-border-bottom text-align-right timetracker-td timetracker-td-w timetracker-td-w-300">
							
							<h5 class="hide-nonmobile no-margin-top">
								Status:
							</h5>
							<?php app_get_component('components/task-status-dropdown','',false,array('can_edit' => true)); ?>
					</td>
					<td class="no-border-bottom timetracker-td timetracker-td-w timetracker-td-w-100">
						<h5 class="hide-nonmobile no-margin-top">
							Total Time:
						</h5>
						<span class="entry-total font-weight-700">
							<span class="REPLACE">04:20</span>
						</span>
					</td>
					<td class="no-border-bottom timetracker-td timetracker-td-w-100 timetracker-td-actions text-align-right">
						<!-- @if can toggle -->
							<form class="display-inline margin-right" action="">
								<button href="" class="btn btn-link no-padding font-size-large">
									<i class="symbol symbol-play symbol-stop-toggle"></i>
									<span class="sr-only">Toggle Entry</span>
								</button>
							</form>
						<span class="position-relative ">
							<button href="#m-entry-options-REPLACEID" data-toggle-modal-default class="btn btn-link no-padding font-size-large">
								<i class="symbol symbol-kebab-horizontal"></i>
								<span class="sr-only">More options</span>
							</button>
		
							<div class="modal modal-default" id="m-entry-options-REPLACEID" data-modal-width="400px">
									<div class="text-align-center">
										<h1 class="no-margin-top color-inherit">Options</h1>
										<ul class="list-group list-group-compact">
											<li><a href="<?= app_create_link(array('template' => 'task-detail')) ?>">View or Edit</a></li>
											<li><a href="#">Favorite</a></li>
											<li><a href="#">Delete</a></li>
										</ul>
									</div>
							</div>
						</span>
					</td>
					<!-- @if has entries -->
						<td class="no-border-bottom timetracker-td only-mobile">
					
							<a href="#entry-subentries-REPLACEID" class="hide-nonmobile btn btn-small btn-link no-padding-x" data-toggle-accordion>
								<i class="symbol symbol-arrow-down symbol-arrow-up-toggle"></i>
								&nbsp;
								View Detailed Entries
							</a>
						</td>
				</tr>
				<!-- @if has entries in the task -->
					<tbody class="accordion" id="entry-subentries-REPLACEID">
						<!-- @loop tr -->
						<tr class="entry-subentries background-primary-alpha-1">
							<td class="no-border-bottom hide-mobile">
								<span class="spacer">&nbsp;</span>
							</td>
							<td class="no-border-bottom hide-mobile">
								<span class="spacer">&nbsp;</span>
							</td>
							<!-- timetracker-td-w-200 -->
							<td class="no-border-bottom timetracker-td timetracker-td-w timetracker-td-w-200">
								<!-- @if entry is done today -->
									<span class="REPLACE">Today</span>
								<!-- @else -->
									<span class="REPLACE">June 12, 1989</span>
							</td>
							<td class="no-border-bottom timetracker-td">
								<form action="" class="entry-notes">
									<input class="no-margin input input-blend input-block" placeholder="No description available" value="REPLACE You took all the cash I have, naubos ng lahat Gusto ko pa ng picha pie Ngunit ang pera'y di sapat And so I spent so many nights Just feeling sorry for myself It made me cry, wala na ba akong picha pie? Ngayon ako ay nagipit! Hindi na ako istupid person na hindi nag-iisip Medyo mahal ang picha pie You can't expect it to be free That's why I'm saving all my money Para mayroong pambili" />
								</form>
							</td>
							<td class="no-border-bottom timetracker-td timetracker-td-w timetracker-td-w-300 text-align-right color-neutral-darker">
								<form action="" class="font-weight-700">
									<!-- @if can edit -->
										<!-- <input class="no-margin input input-blend padding-small-x border-color-neutral-alpha-5 border-style-solid border-width-thin border-color-neutral-focus radius-small" placeholder="00:00 --" type="time" value="03:00" /> -->
									<!-- @else -->
										<span class="REPLACE">03:00 AM</span>
									-
									<!-- @if can edit -->
										<!-- <input class="no-margin input input-blend padding-small-x border-color-neutral-alpha-5 border-style-solid border-width-thin border-color-neutral-focus radius-small" placeholder="00:00 --" type="time" value="18:00" /> -->
									<!-- @else -->
										<span class="REPLACE">06:00</span>
								</form>
							</td>
							<td class="no-border-bottom timetracker-td timetracker-td-w timetracker-td-w-100">
								<h5 class="hide-nonmobile no-margin-top">
									Total Time:
								</h5>
								<form>
										<!-- @if can edit -->
											<!-- <input class="no-margin input input-blend padding-micro-x border-color-neutral-alpha-5 border-style-solid border-width-thin border-color-neutral-focus radius-small" size="5" type="text" placeholder="00:00" value="04:20" /> -->
										<!-- @else -->
											<span class="REPLACE">04:20</span>
								</form>
							</td>
							<td class="no-border-bottom timetracker-td timetracker-td-w timetracker-td-w-100 timetracker-td-actions text-align-right">
								<span class="position-relative ">
									<button href="#m-entry-options-REPLACEID" data-toggle-modal-default class="btn btn-link no-padding font-size-large">
										<i class="symbol symbol-kebab-horizontal"></i>
										<span class="sr-only">More options</span>
									</button>
				
									<div class="modal modal-default" id="m-entry-options-REPLACEID" data-modal-width="400px">
											<div class="text-align-center">
												<h1 class="no-margin-top color-inherit">Options</h1>
												<ul class="list-group">
													<li><a href="<?= app_create_link(array('template' => 'task-detail')) ?>">View or Edit</a></li>
													<li><a href="#">Something else</a></li>
													<li><a href="#">Delete</a></li>
												</ul>
											</div>
									</div>
								</span>
							</td>
						</tr>
					</tbody>
			<!-- </template> -->


			 <!-- @PLACEHOLDER delete when ready -->
				<? $placeholder_color = array(
					'neutral',
					'primary',
					'secondary',
					'error',
					'success',
				); ?>
				<? $placeholder_stuff = array(
					'neutral' => 'Backlog',
					'primary' => 'In Progress',
					'secondary' => 'Review',
					'error' => 'On Hold',
					'success' => 'Completed',
				); ?>

				<?php for($h = 0; $h < 6; $h++): ?>
					<?php for($i = 0; $i < count($placeholder_stuff); $i++): ?>
						<?php $has_sub = ($i % 2 == 0);  ?>
						<?php $is_fave = ($i % 3 == 0);  ?>

						<tr>

							<td class="no-border-bottom timetracker-td timetracker-td-w timetracker-td-w-40 text-align-center no-padding-right" v-if="status">
								<div class="draggable-task btn font-size-large no-padding color-neutral align-items-flex-start color-theme-hover color-theme-active color-theme-focus no-shadow cursor-grab cursor-grabbing-active">
									<i class="symbol symbol-drag"></i>
								</div>
							</td>
							
							<td class="hide-mobile no-border-bottom text-align-right timetracker-td timetracker-td-w timetracker-td-w-60">
							
								<?php if($has_sub): ?>
									<a href="#entry-subentries-<?= $h ?>-<?=$i ?>" class="btn btn-small btn-primary btn-symbol btn-round " data-toggle-accordion>
										<i class="symbol symbol-arrow-down symbol-arrow-up-toggle"></i>
									</a>
								<?php else: ?>
									<span class="spacer">&nbsp;</span>
								<?php endif; ?>
							</td>
							<td class="no-border-bottom timetracker-td" colspan="2">

								<?php $REPLACE_task = ($i == 3) ? 'Yeahboogitadidggitdagoogitydigdigdigtikikiti!!' : (($i % 2 == 0) ? 'Leo! Leo! Leo! Goddammit! Goddammit! Goddammit! Goddammit!' : 'Oh my god they were roommates'); ?>
										
								<form class="entry-task-name h5 color-inherit no-margin-y flex-xs align-items-center">
									<?php if($is_fave): ?>
										<i class="symbol symbol-star color-primary"></i>
									<?php endif; ?>
									<?php if($h % 2 == 0): ?>
										<input class="no-margin input input-blend input-block flex-1-1" placeholder="Type Task Title" value="<?=$REPLACE_task ?>" />
									<?php else: ?>
										<span class="REPLACE"><?=$REPLACE_task ?></span>
									<?php endif; ?>
								</form>
				
							
								<?php if($i == 3): ?>
									<div class="margin-small-top">
										<span class="tag tag-neutral font-weight-400">
											<span class="REPLACE">Can defeat Thanos</span>
										</span>
										<span class="tag tag-neutral font-weight-400">
											<span class="REPLACE">Can be smol</span>
										</span>
										<span class="tag tag-neutral font-weight-400">
											<span class="REPLACE">Became tol</span>
										</span>
									</div>
								<?php elseif($i % 4 == 0): ?>
									<div class="margin-small-top">
										<span class="tag tag-neutral font-weight-400">
											<span class="REPLACE">Can defeat Thanos</span>
										</span>
										<span class="tag tag-neutral font-weight-400">
											<span class="REPLACE">is red</span>
										</span>
										<span class="tag tag-neutral font-weight-400">
											<span class="REPLACE">has weird book</span>
										</span>
									</div>
								<?php elseif($i % 2 == 0): ?>
									<div class="margin-small-top">
										<span class="tag tag-neutral font-weight-400">
											<span class="REPLACE">I am groot</span>
										</span>
										<span class="tag tag-neutral font-weight-400">
											<span class="REPLACE">tree</span>
										</span>
										<span class="tag tag-neutral font-weight-400">
											<span class="REPLACE">biodegradeable</span>
										</span>
									</div>
								<?php else: ?>
								<?php endif; ?>
										
							</td>
							<!-- text-nowrap but risks overlaps -->
							<td class="no-border-bottom text-align-right timetracker-td timetracker-td-w timetracker-td-w-300">
				
									<h5 class="hide-nonmobile no-margin-top">
										Status:
									</h5>

									
									<?php app_get_component('components/task-status-dropdown','',false,
										array( 'status' => $placeholder_stuff[ $placeholder_color[$i] ], 'can_edit' => ($h % 2 == 0) )
									); ?>
							</td>
							<td class="no-border-bottom timetracker-td timetracker-td-w timetracker-td-w-100">
								<h5 class="hide-nonmobile no-margin-top">
									Total Time:
								</h5>
								<span class="entry-total font-weight-700">
									<span class="REPLACE">04:20</span>
								</span>
							</td>
							<td class="no-border-bottom timetracker-td timetracker-td-w-100 timetracker-td-actions text-align-right">
								<!-- @if can toggle -->
									<form class="display-inline margin-right" action="">
										<button href="" class="btn btn-link no-padding font-size-large">
											<i class="symbol symbol-play symbol-pause-toggle"></i>
											<span class="sr-only">Toggle Entry</span>
										</button>
									</form>
								<span class="position-relative ">
									<button href="#m-entry-options-<?= $h ?>-<?=$i ?>" data-toggle-modal-default class="btn btn-link no-padding font-size-large">
										<i class="symbol symbol-kebab-horizontal"></i>
										<span class="sr-only">More options</span>
									</button>
				
									<div class="modal modal-default" id="m-entry-options-<?= $h ?>-<?=$i ?>" data-modal-width="400px">
											<div class="text-align-center">
												<h1 class="no-margin-top color-inherit">Options</h1>
												<ul class="list-group">
													<li><a href="#">Edit Task</a></li>
													<li><a href="#">View Details</a></li>
													<li><a href="#">Favorite</a></li>
													<li><a href="#">Delete</a></li>
												</ul>
											</div>
									</div>
								</span>
							</td>
							<?php if($has_sub): ?>
								<td class="no-border-bottom timetracker-td only-mobile">
								
									
										<a href="#entry-subentries-<?= $h ?>-<?=$i ?>" class="hide-nonmobile btn btn-small btn-link no-padding-x" data-toggle-accordion>
											<i class="symbol symbol-arrow-down symbol-arrow-up-toggle"></i>
											&nbsp;
											View Detailed Entries
										</a>
								</td>
							<?php endif; ?>
						</tr>
						<!-- @if has entries in the task -->
						<tbody class="accordion" id="entry-subentries-<?= $h ?>-<?=$i ?>">
							<?php for($j = 0; $j < 5; $j++): ?>
								<tr class="entry-subentries background-primary-alpha-1">
									<td class="no-border-bottom hide-mobile">
										<span class="spacer">&nbsp;</span>
									</td>
									<td class="no-border-bottom hide-mobile">
										<span class="spacer">&nbsp;</span>
									</td>
									<td class="no-border-bottom timetracker-td timetracker-td-w timetracker-td-w-200">
										<!-- @else -->
											<span class="REPLACE">June 12, 1989</span>
									</td>
									<td class="no-border-bottom timetracker-td">
										<form action="" class="entry-notes">
											<input class="no-margin input input-blend input-block" placeholder="No description available" value="<?= ($j == 3) ? 'Despacito This is how we do it down in Puerto Rico I just wanna hear you screaming, ¡Ay, Bendito! I can move forever cuando esté contigo ¡Báilalo!  Pasito a pasito, suave suavecito Nos vamos pegando, poquito a poquito Que le enseñes a mi boca Tus lugares favoritos (Favorito, favorito, baby) Pasito a pasito, suave suavecito Nos vamos pegando, poquito a poquito Hasta provocar tus gritos (Fonsi) Y que olvides tu apellido (D.Y.) Despacito' :( ($j % 2 == 0) ? 'Description boiiii' : ''); ?>" />
										</form>
									</td>
									<td class="no-border-bottom timetracker-td timetracker-td-w timetracker-td-w-300 text-align-right color-neutral-darker">
										<form action="" class="font-weight-700">
											<?php if($j % 2 == 0): ?>
												<input class="entry-time-start no-margin input input-blend padding-small-x border-color-neutral-alpha-5 border-style-solid border-width-thin border-color-neutral-focus radius-small" placeholder="00:00 --" type="time" value="03:00" />
											<?php else: ?>
												<span class="REPLACE">03:00 AM</span>
											<?php endif; ?>
											-
											<?php if($j % 2 == 0): ?>
												<input class="entry-time-start no-margin input input-blend padding-small-x border-color-neutral-alpha-5 border-style-solid border-width-thin border-color-neutral-focus radius-small" placeholder="00:00 --" type="time" value="18:00" />
											<?php else: ?>
												<span class="REPLACE">06:00 PM</span>
											<?php endif; ?>
										</form>
									</td>
									<td class="no-border-bottom timetracker-td timetracker-td-w timetracker-td-w-100">
										<h5 class="hide-nonmobile no-margin-top">
											Total Time:
										</h5>

										<form>
											<?php if($j % 2 == 0): ?>
												<input class="no-margin input input-blend padding-micro-x border-color-neutral-alpha-5 border-style-solid border-width-thin border-color-neutral-focus radius-small" size="5" type="text" placeholder="00:00" value="04:20" />
											<?php else: ?>
												<span class="REPLACE">04:20</span>
											<?php endif; ?>
										</form>
									</td>
									<td class="no-border-bottom timetracker-td timetracker-td-w timetracker-td-w-100 timetracker-td-actions text-align-right">
										<span class="position-relative ">
											<button href="#m-entry-options-<?= $h ?>-<?=$i ?>-subentry-<?= $j ?>" data-toggle-modal-default class="btn btn-link no-padding font-size-large">
												<i class="symbol symbol-kebab-horizontal"></i>
												<span class="sr-only">More options</span>
											</button>
						
											<div class="modal modal-default" id="m-entry-options-<?= $h ?>-<?=$i ?>-subentry-<?= $j ?>" data-modal-width="400px">
													<div class="text-align-center">
														<h1 class="no-margin-top color-inherit">Options</h1>
														<ul class="list-group">
															<li><a href="#">View Details</a></li>
															<li><a href="#">Something else</a></li>
															<li><a href="#">Delete</a></li>
														</ul>
													</div>
											</div>
										</span>
									</td>
								</tr>
							<?php endfor; ?>
						</tbody>
					<?php endfor; ?>
				<?php endfor; ?>



	</table>
</div>