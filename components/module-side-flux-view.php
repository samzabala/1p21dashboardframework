<?php
$defs = array(
	//@param post - type of single achuchuchu
	'post' => 'task', //project,client,note,whatever
);

$args = app_parse_args($data,$defs);


?>
<div class="module"
	data-grid-area-md="auto / side"
>
	<div class="module-content">
	
			<!-- WORKFLUX BOARDS -->
				<div class="h5 no-margin-top">
					<div class="flex-grid flex-grid-compact flex-grid-no-gutter-y justify-content-space-between align-items-center">
						<div class="flex-child">
							<h5 class="no-margin-y">Workflux Boards</h5>
						</div>
						<div class="flex-child">
							<a href="#post-side-flux-view" data-toggle="accordion" class="border-color-transparent btn no-padding-x btn-no-shadow btn-small color-neutral color-primary-hover open"><i class="symbol symbol-arrow-down symbol-arrow-up-toggle"></i></a>
						</div>
					</div>
				</div>

			
				
				<div id="post-side-flux-view" class="accordion open" data-accordion-change-hash="false">
			
					<!-- @if hasteam leads -->
					<div class="single-workflux">

						<!-- @LOOP component -->
						<?php app_get_component('components/profile-workflux-titled') ?>
							<!-- @PLACEHOLDER: DELETE WHEN READY -->
							<?php for($i=1; $i<2; $i++){ ?>
								<?php app_get_component('components/profile-workflux-titled'); ?>
							<?php } ?>
					</div>
							
					<!-- @else -->
						<p>
							<span class="color-neutral font-style-italic">
								No associated workflux boards.
							</span>

							<!-- @if user can edit task -->
								<br>
								<a
								href="<?=app_create_link(array('template'=>$args['post'].'-edit')) ?>"
								>Edit <?=$args['post']?> to add to boards.</a>
						</p>
				</div>

			<hr>


		<!-- TAGS -->
			<div class="h5 no-margin-y">
				<div class="flex-grid flex-grid-compact flex-grid-no-gutter-y justify-content-space-between align-items-center">
					<div class="flex-child">
						<h5 class="no-margin-y">Label &amp; Tags</h5>
					</div>
					<div class="flex-child">
						<a href="#post-side-tags-view" data-toggle="accordion" class="border-color-transparent btn no-padding-x btn-no-shadow btn-small color-neutral color-primary-hover open"><i class="symbol symbol-arrow-down symbol-arrow-up-toggle"></i></a>
					</div>
				</div>
			</div>

		
			
			<div id="post-side-tags-view" class="accordion open" data-accordion-change-hash="false">
				<!-- @if has tags -->
					<br>
					<div class="single-tags">
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
								<?php for($i=0; $i<count($abilabol_tag); $i++){ ?>
									<?php $j = 1;?>
									<span class="p tag <?=$abilabol_tag[$i];?>">
										<span class="tag-text">
											<span class="REPLACE">Tag Te<?php while($j <= $i): echo 'e'; $j++; endwhile; ?>xt</span>
										</span>
									</span>
								<?php } ?>
					</div>

						
				<!-- @else -->
					<p>
						<span class="color-neutral font-style-italic">
							No set tags.
						</span>

						<!-- @if user can edit task -->
							<br>
							<a
								href="<?=app_create_link(array('template'=>$args['post'].'-edit')) ?>"
							>Edit <?=$args['post']?> to add tags.</a>
					</p>
			</div>
			
	</div>
</div>