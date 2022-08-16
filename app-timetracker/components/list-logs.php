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
			@loop template / tr and tbody
			:NOTE: tag is commented out for front end demo to work because tables are weird
			-->
			<!-- <template> -->
				<tr>
		
					<td class="hide-mobile no-border-bottom text-align-right timetracker-td timetracker-td-w timetracker-td-w-60">
					
						<!-- @if has multiple entries -->
							<a href="#entry-subentries-REPLACEID" class="btn btn-small btn-primary btn-symbol btn-round " data-toggle-accordion>
								<i class="symbol symbol-arrow-down symbol-arrow-up-toggle"></i>
							</a>
						<!-- @else -->
							<span class="spacer">&nbsp;</span>
					</td>
					<td class="no-border-bottom timetracker-td timetracker-td-w timetracker-td-w-800" colspan="2">
							
		
						<div class="entry-task-name h5 color-inherit no-margin-y display-inline vertical-align-middle">
							<!-- @if task is a favorite -->
								<i class="symbol symbol-star color-primary"></i>

							<span class="task-title no-margin">
								<span class="REPLACE">Make everything float left and clear none</span>
							</span>
						</div>
		
						<!-- @if has tags -->
		
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
		
						<!-- @if task has description -->
							<div class="entry-task-description text-wrap-ellipsis margin-small-top">
								<span class="REPLACE"> The coconut nut is a giant nut If you eat too much, you'll get very fat Now, the coconut nut is a big, big nut But this delicious nut is not a nut It's the coco fruit (it's the coco fruit) Of the coco tree (of the coco tree) From the coco palm family There are so many uses of the coconut tree You can build a big house for the family All you need is to find a coconut man If he cuts the tree, he gets the fruit free It's the coco fruit (it's the coco fruit) Of the coco tree (of the coco tree) From the coco palm family The coconut bark for the kitchen floor If you save some of it, you can build a door Now, the coconut trunk, do not throw this junk If you save some of it, you'll have the second floor The coconut wood is very good It can stand 20 years if you pray it would Now, the coconut root, to tell you the truth You can throw it or use it as firewood The coconut leaves, good shade it gives For the roof, for the walls up against the eaves Now, the coconut fruit, say my relatives Make good cannonballs up against the eaves It's the coco fruit (it's the coco fruit) Of the coco tree (of the coco tree) From the coco palm family The coconut nut is a giant nut If you eat too much, you'll get very fat Now, the coconut nut is a big, big nut But this delicious nut is not a nut It's the coco fruit (it's the coco fruit) Of the coco tree (of the coco tree) From the coco palm family It's the coco fruit (it's the coco fruit) Of the coco tree (of the coco tree) From the coco palm family It's the coco fruit (it's the coco fruit) Of the coco tree (of the coco tree) From the coco palm family Ole!</span>
							</div>
					</td>
					<td class="no-border-bottom color-neutral text-align-right timetracker-td timetracker-td-w timetracker-td-w-200">
						<!-- @if has NO multiple entries -->
							<span class="REPLACE">03:00AM</span> - <span class="REPLACE">09:00AM</span> 
						<!-- @else -->
							<span class="spacer">&nbsp;</span>
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
							<span class="entry-task-status tag no-margin-y
								tag-primary">
								<span class="REPLACE">In Progress</span>
							</span>
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
											<li><a href="#">Edit</a></li>
											<li><a href="#">View Details</a></li>
											<li><a href="#">Something else</a></li>
											<li><a href="#">Delete</a></li>
										</ul>
									</div>
							</div>
						</span>
					</td>
					<!-- @if has multiple entries -->
						<td class="no-border-bottom timetracker-td only-mobile">
					
							<a href="#entry-subentries-REPLACEID" class="hide-nonmobile btn btn-small btn-link no-padding-x" data-toggle-accordion>
								<i class="symbol symbol-arrow-down symbol-arrow-up-toggle"></i>
								&nbsp;
								View Detailed Entries
							</a>
						</td>
				</tr>
				<!-- @if has multiple entries in the task -->
				<tbody class="accordion" id="entry-subentries-REPLACEID">
					<!-- @loop tr -->
					<tr class="entry-subentries background-primary-alpha-1">
						<td class="hide-mobile">
							<span class="spacer">&nbsp;</span>
						</td>
						<td class="no-border-bottom timetracker-td timetracker-td-w timetracker-td-w-100">
							<!-- @if entry is done today -->
								<span class="REPLACE">Today</span>
							<!-- @else -->
								<span class="REPLACE">06/12/98</span>
						</td>
						<td class="no-border-bottom timetracker-td timetracker-td-w timetracker-td-w-700">
							
							<!-- @if entry has notes -->
								<div class="entry-notes text-wrap-ellipsis">
										<span class="REPLACE">At first I was afraid to eat a picha pie kept thinking this is not a good this is a picha pie and I spent oh so many nights just eating my tortang talong and I grew strong because of my tortang talong biglang may box, from outer space nakita ko sabay kinuha ko 'yung box from outer space binuksan ko at nasindak may picha pie sobrang laki! tinikman ko within 5 seconds, naubos ko parang mani! ngayon ako, ay ganito kung 'di ka picha hut o shakey's you're not welcome, ('tang) ina mo! ngayong sa akin picha pie ayoko nang mahiwalay para sa 'yo, handa kong magpakamatay 'cuz now I love picha pie as long as I eat picha pie I know i'll be alive i want all my garlic beef pepperoni, double cheese ang picha pie... oh, picha pie... penge! you took all the cash I have, naubos ng lahat gusto ko pa ng picha pie ngunit ang pera'y di sapat and so I spent so many nights just feeling sorry for myself it made me cry, wala na ba akong picha pie? ngayon ako ay nagipit! hindi na ako istupid person na hindi nag-iisip medyo mahal ang picha pie you can't expect it to be free that's why I'm saving all my money para mayroong pambili (look, it's not 'picha pie', it's 'pizza pie!) (huh? picha pie!) (no no no, say it like this 'pi-zza pie!) (pi-cha pie) (pi-) (pi-) (zza!) (cha!) (pizza!) (picha!) (nononono, nonono) [translations:] tortang talong - eggplant omelette biglang may box - there came a box nakita ko sabay kinuha ko - I saw it and I got it 'yung box - the box binuksan ko at nasindak - I opened it and i got scared may picha pie sobrang laki - there was a picha pie, so big! tinikman ko - I tasted/tried it naubos ko parang man I - I finished it like it was 'mani!' ngayon ako, ay ganito - now I'm like this kung 'di ka picha hut o shakey's - if you're not pizza hut or shakey's ('tang) ina mo! - (bitch/prostitute) your mother is...! ngayong sa akin picha pie - now the picha pie if mine ayoko nang mahiwalay - I don't want to share it para sa 'yo, handa ko magpakamatay - for you, I'll prepare it when i die ang picha pie - the picha pie penge! - give me! naubos ng lahat - it's all gone gusto ko pa ng picha pie - I still want picha pie ngunit ang pera'y di sapat - but my money's not enough wala na ba akong picha pie? - I don't have picha pie anymore? ngayon ako ay nagipit! - now I'm stressed out! hindi na ako istupid person na hindi nag-iisip - I'm not a stupid person who doesn't think medyo mahal ang picha pie - pizza pie's a little expensive para mayroong pambili - so that I can buy it</span>
									</div>
								<!-- @else -->
									<p class="font-style-italic color-neutral no-margin font-weight-400">
										No description available
									</p>
						</td>
						<td class="no-border-bottom timetracker-td timetracker-td-w timetracker-td-w-300 text-align-right color-neutral" colspan="2">
							
							<span class="REPLACE">03:00AM</span> - <span class="REPLACE">09:00AM</span> 
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
												<li><a href="#">Edit</a></li>
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
							<td class="hide-mobile no-border-bottom text-align-right timetracker-td timetracker-td-w timetracker-td-w-60">
							
								<?php if($has_sub): ?>
									<a href="#entry-subentries-<?= $h ?>-<?=$i ?>" class="btn btn-small btn-primary btn-symbol btn-round " data-toggle-accordion>
										<i class="symbol symbol-arrow-down symbol-arrow-up-toggle"></i>
									</a>
								<?php else: ?>
									<span class="spacer">&nbsp;</span>
								<?php endif; ?>
							</td>
							<td class="no-border-bottom timetracker-td timetracker-td-w timetracker-td-w-800" colspan="2">
									
				
								<div class="entry-task-name h5 color-inherit no-margin-y display-inline vertical-align-middle">
								<?php if($is_fave): ?>
									<i class="symbol symbol-star color-primary"></i>
								<?php endif; ?>
									<!-- @if task is a favorite -->

									<?php if($i == 3): ?>
										Yeahboogitadidggitdagoogitydigdigdigtikikiti!!
									<?php elseif($i % 2 == 0): ?>
										Leo! Leo! Leo! Goddammit! Goddammit! Goddammit! Goddammit!
									<?php else: ?>
										Oh my god they were roommates
									<?php endif; ?>
								</div>
				
								<!-- @if has tags -->
				
									<!-- @loop .tag -->
									<?php if($i == 3): ?>
											<span class="tag tag-neutral font-weight-400">
												<span class="REPLACE">Can defeat Thanos</span>
											</span>
											<span class="tag tag-neutral font-weight-400">
												<span class="REPLACE">Can be smol</span>
											</span>
											<span class="tag tag-neutral font-weight-400">
												<span class="REPLACE">Became tol</span>
											</span>
										<?php elseif($i % 4 == 0): ?>
											<span class="tag tag-neutral font-weight-400">
												<span class="REPLACE">Can defeat Thanos</span>
											</span>
											<span class="tag tag-neutral font-weight-400">
												<span class="REPLACE">is red</span>
											</span>
											<span class="tag tag-neutral font-weight-400">
												<span class="REPLACE">has weird book</span>
											</span>
										<?php elseif($i % 2 == 0): ?>
											<span class="tag tag-neutral font-weight-400">
												<span class="REPLACE">I am groot</span>
											</span>
											<span class="tag tag-neutral font-weight-400">
												<span class="REPLACE">tree</span>
											</span>
											<span class="tag tag-neutral font-weight-400">
												<span class="REPLACE">biodegradeable</span>
											</span>
										<?php else: ?>
										<?php endif; ?>
				
								<!-- @if task has description -->
								<?php if($i == 3): ?>
										<div class="entry-task-description text-wrap-ellipsis margin-small-top">
											Doobi-doobi, dapp-dapp, doobi-doobi, dapp-dapp Doobi-doobi, dapp-dapp, doobi-doobi, dipp-dipp Doobi-doobi, dapp-dapp, du-dapp, da-dapp Bee-beep, bee-beep, beep, beep, beep, beep, beep, beep Dabba-doobi, dooboo-dabba Dooboo-dabba, dooboo-dabba Beep, beep, bee-beep, bee-beep, beep, beep Sabi ng jeep, sabi ng jeep, sabi ng Bee-bee-bee-bee-bee-bee-bee-bee-bee-bee-bee-beep! Pabbo-purro, bap-bap Purro-pabb, bap-bap Beep, be-bee, be-bee, be-bee, be-bee Be-bee, be-bee, be-bee, be-bee Be-bee, be-bee, be-bee, be-bee Be, be, be, be, be, be, beep, beep, beep, beep
										</div>
									<?php elseif($i % 2 == 0): ?>

										<div class="entry-task-description text-wrap-ellipsis margin-small-top">
											Let's see… Purple. For your hair. *heh* Can't tell this is a goddamn anime.
										</div>
									<?php endif; ?>
							</td>
							<td class="no-border-bottom color-neutral text-align-right timetracker-td timetracker-td-w timetracker-td-w-200">
								<?php if(!$has_sub): ?>
									<span class="REPLACE">03:00AM</span> - <span class="REPLACE">09:00AM</span> 
								<?php else: ?>
									<span class="spacer">&nbsp;</span>
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
									<span class="tag no-margin-y tag-<?=$placeholder_color[$i]; ?>">
										<span class="REPLACE"><?=  $placeholder_stuff[ $placeholder_color[$i] ]; ?></span>
									</span>
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
													<li><a href="#">Edit</a></li>
													<li><a href="#">View Details</a></li>
													<li><a href="#">Something else</a></li>
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
						<!-- @if has multiple entries in the task -->
						<tbody class="accordion" id="entry-subentries-<?= $h ?>-<?=$i ?>">
							<?php for($j = 0; $j < 5; $j++): ?>
								<tr class="entry-subentries background-primary-alpha-1">
									<td class="hide-mobile">
										<span class="spacer">&nbsp;</span>
									</td>
									<td class="no-border-bottom timetracker-td timetracker-td-w timetracker-td-w-100">
										<!-- @else -->
											<span class="REPLACE">06/12/98</span>
									</td>
									<td class="no-border-bottom timetracker-td timetracker-td-w timetracker-td-w-700">
										
										<div class="entry-notes text-wrap-ellipsis">
											<?php if($j == 3): ?>
												<span class="REPLACE">Comin' over in my direction So thankful for that, it's such a blessin', yeah Turn every situation into heaven, yeah Oh-oh, you are My sunrise on the darkest day Got me feelin' some kind of way Make me wanna savor every moment slowly, slowly You fit me tailor-made, love how you put it on Got the only key, know how to turn it on The way you nibble on my ear, the only words I wanna hear Baby, take it slow so we can last long ¡Oh! Tú, tú eres el imán y yo soy el metal Me voy acercando y voy armando el plan Sólo con pensarlo se acelera el pulso (Oh, yeah) Ya, ya me está gustando más de lo normal Todos mis sentidos van pidiendo más Esto hay que tomarlo sin ningún apuro  Despacito Quiero respirar tu cuello despacito Deja que te diga cosas al oído Para que te acuerdes si no estás conmigo Despacito Quiero desnudarte a besos despacito Firmo en las paredes de tu laberinto Y hacer de tu cuerpo todo un manuscrito (Sube, sube, sube Sube, sube)  Quiero ver bailar tu pelo, quiero ser tu ritmo (Woah, woah) Que le enseñes a mi boca (Woah, woah) Tus lugares favoritos (Favorito, favorito, baby) Déjame sobrepasar tus zonas de peligro (Woah, woah) Hasta provocar tus gritos (Woah, woah) Y que olvides tu apellido Related Songs Rap God Eminem The Black Slim Shady The Game Luis Fonsi & Daddy Yankee - Despacito (Remix) ft. Justin Bieber (English Translation) Genius English Translations Si te pido un beso, ven, dámelo, yo sé que estás pensándolo Llevo tiempo intentándolo, mami, esto es dando y dándolo Sabes que tu corazón conmigo te hace bom, bom Sabes que esa beba está buscando de mi bom, bom Ven, prueba de mi boca para ver cómo te sabe Quiero, quiero, quiero ver cuánto amor a ti te cabe Yo no tengo prisa, yo me quiero dar el viaje Empecemos lento, después salvaje  Pasito a pasito, suave suavecito Nos vamos pegando, poquito a poquito Cuando tú me besas con esa destreza Veo que eres malicia con delicadeza Pasito a pasito, suave suavecito Nos vamos pegando, poquito a poquito Y es que esa belleza es un rompecabezas Pero pa' montarlo aquí tengo la pieza ¡Oye!  Despacito Quiero respirar tu cuello despacito Deja que te diga cosas al oído Para que te acuerdes si no estás conmigo Despacito Quiero desnudarte a besos despacito Firmo en las paredes de tu laberinto Y hacer de tu cuerpo todo un manuscrito (Sube, sube, sube Sube, sube) Quiero ver bailar tu pelo, quiero ser tu ritmo (Woah, woah) Que le enseñes a mi boca (Woah, woah) Tus lugares favoritos (Favorito, favorito, baby) Déjame sobrepasar tus zonas de peligro (Woah, woah) Hasta provocar tus gritos (Woah, woah) Y que olvides tu apellido  Despacito This is how we do it down in Puerto Rico I just wanna hear you screaming, "¡Ay, Bendito!" I can move forever cuando esté contigo ¡Báilalo!  Pasito a pasito, suave suavecito Nos vamos pegando, poquito a poquito Que le enseñes a mi boca Tus lugares favoritos (Favorito, favorito, baby) Pasito a pasito, suave suavecito Nos vamos pegando, poquito a poquito Hasta provocar tus gritos (Fonsi) Y que olvides tu apellido (D.Y.) Despacito</span>
											<?php elseif($j % 2 == 0): ?>
													Description boiiii
											<?php else: ?>
												<p class="font-style-italic color-neutral no-margin font-weight-400">
													No description available
												</p>
											<?php endif; ?>
										</div>
									</td>
									<td class="no-border-bottom timetracker-td timetracker-td-w timetracker-td-w-300 text-align-right color-neutral" colspan="2">
										
										<span class="REPLACE">03:00AM</span> - <span class="REPLACE">09:00AM</span> 
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
															<li><a href="#">Edit</a></li>
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