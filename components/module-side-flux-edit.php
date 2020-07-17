
<div class="module">
	<div class="module-content">
	
		<div class="flex-grid flex-grid-compact flex-grid-no-gutter-y justify-content-space-between align-items-center">
			<div class="flex-child">
				<h5 class="input-label">Workflux Boards</h5>
			</div>
			<div class="flex-child">
				<input id="REPLACEMODE-task-workfluxs-id" name="REPLACEMODE-task-workfluxs-id" type="hidden" />
				<input id="REPLACEMODE-task-workfluxs-list" name="REPLACEMODE-task-workfluxs-list" type="hidden" />
				<a href="#" data-toggle="modal" data-modal-title="Add to Workflux" class="btn btn-primary-outline btn-small">Board <i class="symbol symbol-plus"></i></a>
				<?php app_get_component('components/modal-workflux'); ?>
			</div>
		</div>

		<div class="task-workflux">
			<!-- @LOOP component -->
				<?php app_get_component('components/profile-workflux-titled-for-edit') ?>
					<!-- @PLACEHOLDER: DELETE WHEN READY -->
					<?php for($i=1; $i<2; $i++){ ?>
						<?php app_get_component('components/profile-workflux-titled-for-edit'); ?>
					<?php } ?>
		</div>

		<hr>


		<div class="flex-grid flex-grid-compact flex-grid-no-gutter-y justify-content-space-between align-items-center">
			<div class="flex-child">
				<h5 class="input-label">Labels &amp; Tags</h5>
			</div>
			<div class="flex-child">
				<input id="REPLACEMODE-task-tags" name="REPLACEMODE-task-tags" type="hidden" />
				<a href="#" data-toggle="modal" data-modal-title="Choose Tags"  class="btn btn-primary-outline btn-small">Tags <i class="symbol symbol-plus"></i></a>
				<?php app_get_component('components/modal-tags'); ?>
			</div>
		</div>

		<div class="task-tags">
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
				&nbsp;<a href="#" onclick="REPLACEfnToDeleteDisTag"><i class="symbol symbol-close"></i></a>
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
					<?php for($i=1; $i<count($abilabol_tag); $i++){ ?>
						<?php $j = 1;?>
						<span class="p tag <?=$abilabol_tag[$i];?>">
							<span class="tag-text">
								<span class="REPLACE">Tag Te<?php while($j <= $i): echo 'e'; $j++; endwhile; ?>xt</span>
							</span>
							&nbsp;<a href="#" onclick="REPLACEfnToDeleteDisTag"><i class="symbol symbol-close"></i></a>
						</span>
					<?php } ?>
		</div>



	</div>
</div>