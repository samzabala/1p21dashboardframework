<!-- 


@IMPORTS
	js
		import Accordion from './../../../assets/plugins/framework/src/js/imports/modal';


	scss

		@import './../../../assets/plugins/framework/src/scss/imports/_modal';
		@import './../../../assets/plugins/framework/src/scss/imports/_list-group';
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

							<input class="no-margin input input-blend input-block flex-1-1" placeholder="Type Task Title" value="REPLACE Make everything float left and clear none" />
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
					<td class="no-border-bottom text-align-right timetracker-td timetracker-td-w timetracker-td-w-100">
							<!-- @NOTE
								.tag
									classes to add
										`neutral` => default/backlog/maintenance backlog/production backlog
										`primary` => when in progress/production
										`secondary` => when in review
										`error` => when on hold
										`success` => completed
							-->
							<h5 class="hide-nonmobile no-margin-top">
								Status:
							</h5>
							<form class="entry-task-status tag no-margin-y
								tag-primary">
								<select class="input input-blend no-border-bottom text-align-center" name="" id="">
									<!-- @PLACEHOLDER. delete when ready -->
									<option value="">Backlog</option>
									<option value="" selected>In Progress</option>
									<option value="">Review</option>
									<option value="">On Hold</option>
									<option value="">Completed</option>
								</select>
							</form>
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
											<li><a href="#">Edit Task</a></li>
											<li><a href="#">View Details</a></li>
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
							<td class="hide-mobile">
								<span class="spacer">&nbsp;</span>
							</td>
							<td class="hide-mobile">
								<span class="spacer">&nbsp;</span>
							</td>
							<td class="no-border-bottom timetracker-td timetracker-td-w timetracker-td-w-100">
								<!-- @if entry is done today -->
									<span class="REPLACE">Today</span>
								<!-- @else -->
									<span class="REPLACE">06/12/98</span>
							</td>
							<td class="no-border-bottom timetracker-td">
								<form action="" class="entry-notes">
									<input class="no-margin input input-blend input-block" placeholder="No description available" value="REPLACE You took all the cash I have, naubos ng lahat Gusto ko pa ng picha pie Ngunit ang pera'y di sapat And so I spent so many nights Just feeling sorry for myself It made me cry, wala na ba akong picha pie? Ngayon ako ay nagipit! Hindi na ako istupid person na hindi nag-iisip Medyo mahal ang picha pie You can't expect it to be free That's why I'm saving all my money Para mayroong pambili" />
								</form>
							</td>
							<td class="no-border-bottom timetracker-td timetracker-td-w timetracker-td-w-200 text-align-right color-neutral">	
								<form action="">
									<input class="entry-time-start no-margin input input-blend" placeholder="00:00 --" type="time" value="03:00" />
									-
									<input class="entry-time-start no-margin input input-blend" placeholder="00:00 --" type="time" value="18:00" />
								</form>
							</td>
							<td class="no-border-bottom timetracker-td timetracker-td-w timetracker-td-w-100">
								<h5 class="hide-nonmobile no-margin-top">
									Total Time:
								</h5>
								<span class="entry-total font-weight-700">
									<span class="REPLACE">04:20</span>
								</span>
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
												<ul class="list-group list-group-compact">
													<li><a href="#">View Details</a></li>
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
					'success' => 'Complete',
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
									
				
								<form class="entry-task-name h5 color-inherit no-margin-y flex-xs align-items-center">
									<?php if($is_fave): ?>
										<i class="symbol symbol-star color-primary"></i>
									<?php endif; ?>
									
									<input class="no-margin input input-blend input-block flex-1-1" placeholder="Type Task Title" 
										value="<?= ($i == 3) ? 'Yeahboogitadidggitdagoogitydigdigdigtikikiti!!' : (($i % 2 == 0) ? 'Leo! Leo! Leo! Goddammit! Goddammit! Goddammit! Goddammit!' : 'Oh my god they were roommates'); ?>" />
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
							<td class="no-border-bottom text-align-right timetracker-td timetracker-td-w timetracker-td-w-100">
				
													
								<!-- @if has status -->
									<!-- @NOTE
										.tag
											classes to add
												`neutral` => backlog/maintenance backlog/production backlog
												`primary` => when in progress/production
												`secondary` => when in review
												`error` => when on hold
												`success` => completed
									-->
									<h5 class="hide-nonmobile no-margin-top">
										Status:
									</h5>

								<form class="entry-task-status tag no-margin-y
									tag-<?=$placeholder_color[$i]; ?>">
									<select class="input input-blend no-border-bottom text-align-center" name="" id="">
										<?php foreach($placeholder_color as $l=>$pco): ?>
											<option value="" <?= $l == $i ? 'selected' : '' ?>><?= $placeholder_stuff[ $pco ] ?></option>
										<?php endforeach; ?>
									</select>
								</form>
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
												<ul class="list-group list-group-compact">
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
									<td class="hide-mobile">
										<span class="spacer">&nbsp;</span>
									</td>
									<td class="hide-mobile">
										<span class="spacer">&nbsp;</span>
									</td>
									<td class="no-border-bottom timetracker-td timetracker-td-w timetracker-td-w-100">
										<!-- @else -->
											<span class="REPLACE">06/12/98</span>
									</td>
									<td class="no-border-bottom timetracker-td">
										<form action="" class="entry-notes">
											<input class="no-margin input input-blend input-block" placeholder="No description available" value="<?= ($j == 3) ? 'Despacito This is how we do it down in Puerto Rico I just wanna hear you screaming, ¡Ay, Bendito! I can move forever cuando esté contigo ¡Báilalo!  Pasito a pasito, suave suavecito Nos vamos pegando, poquito a poquito Que le enseñes a mi boca Tus lugares favoritos (Favorito, favorito, baby) Pasito a pasito, suave suavecito Nos vamos pegando, poquito a poquito Hasta provocar tus gritos (Fonsi) Y que olvides tu apellido (D.Y.) Despacito' :( ($j % 2 == 0) ? 'Description boiiii' : ''); ?>" />
										</form>
									</td>
									<td class="no-border-bottom timetracker-td timetracker-td-w timetracker-td-w-200 text-align-right color-neutral">
										<form action="">
											<input class="entry-time-start no-margin input input-blend" placeholder="00:00 --" type="time" value="03:00" />
											-
											<input class="entry-time-start no-margin input input-blend" placeholder="00:00 --" type="time" value="18:00" />
										</form>
									</td>
									<td class="no-border-bottom timetracker-td timetracker-td-w timetracker-td-w-100">
										<h5 class="hide-nonmobile no-margin-top">
											Total Time:
										</h5>
										<span class="entry-total font-weight-700">
											<span class="REPLACE">04:20</span>
										</span>
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
														<ul class="list-group list-group-compact">
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