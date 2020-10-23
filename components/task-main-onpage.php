

<!-- Title -->
	<div class="task-heading">
		
		<div class="switch p">
			<div class="switch-off">
				<h1 class="task-title no-margin-top pointer-reference position-relative" data-toggle="switch-on">
					
					<span class="replace">Task Title - Make everything float left</span>
					
					<span class="only-hover color-primary">
						<i class="symbol symbol-pencil"></i>
					</span>
				</h1>
			</div>
			<form class="switch-on">
				<!-- @HIDDEN INPUT TYPES HERE -->
				<div class="input-wrapper input-wrapper-block input-wrapper-vertical">
					<label for="task-title" class="input-label sr-only">Title</label>
					<div class="input-group input-block input-group-horizontal">
						<input type="text" placeholder="Enter title" id="task-title" name="task-title" class=" input input-single-line input-large">
							<button type="submit" class="btn btn-primary" data-toggle="switch-off">
								Save<span class="hide-xs">&nbsp;title</span>
							</button>
					</div>
				</div>
			</form>
		</div>

		<p class="color-neutral">
			Task #<span class="task-id"><span class="REPLACE">69</span></span>
			|
			<span class="task-meta">
				Created by
				<a href="<?=app_create_link(array('template'=>'profile')) ?>" class="color-inherit"><span class="REPLACE">Profile Name</span></a>
				on <span class="task-date"><span class="REPLACE">4/40/69</span></span>
			</span>
		</p>
	</div>
	
<!-- Description -->
	<div class="task-description">
		<div class="switch p">

			<div class="switch-off pointer-reference position-relative">
				
				<!-- @IF there is a description -->
					<!-- @PLACEHOLDER delete when ready -->
					<div class="REPLACE">
							<div class="overflow-hidden" style="height:1000px;">
								<?php app_get_component('components/_DEMO-html-markup'); ?>
							</div>

						</div>

				<!--@ELSE no description  -->
					<p class="color-neutral font-style-italic">No description available</p>

					
				<div class="only-hover position-absolute offset-right-0 offset-top-0  background-theme">
					<button class="btn btn-small btn-primary-outline" data-toggle="switch-on">
						Edit Description <i class="symbol symbol-pencil"></i>
					</button>
				</div>
			</div>
			<form class="switch-on">
				<!-- @HIDDEN INPUT TYPES HERE -->
				<div class="input-wrapper input-wrapper-block input-wrapper-vertical p">
					<label for="task-body" class="input-label sr-only">Description</label>
					<textarea name="task-body" id="task-body" cols="30" rows="10" class="input input-multiple-line">use tinymce in place</textarea>
				</div>

				<div class="text-align-right">
					<a href="#" class="btn btn-neutral-outline" data-toggle="switch-off">
						Cancel
					</a>
					<button type="submit" class="btn btn-primary" data-toggle="switch-off">
						Save
					</button>
					
				</div>
			</form>
		</div>
		<hr>
	</div>

<!-- Attachments -->
	<div class="task-attachments">
		<div class="flex-grid flex-grid-compact justify-content-space-between align-items-center">
			<div class="flex-col-xs-6">
				<h4 class="no-margin-top">
					Attachments
				</h4>
			</div>
			<!-- @if there are attachemtns -->
				<div class="flex-col-xs-6 text-align-right">
					<a href="#" class="task-attachments-downloader btn btn-link btn-small" >
						Download All <i class="symbol symbol-download"></i>
					</a>
					<span class="spacer">
						&nbsp;
					</span>
					<a href="#add-attacment" data-toggle="modal" class="btn btn-primary-outline btn-small">
						Add attachment <i class="symbol symbol-plus"></i>
					</a>
					<?php app_get_component('components/modal-attachment-field', null, false, array('post'=>'task')); ?>
				</div>
		</div>

		
				
		<!-- @if attachments have rows -->
			<?php app_get_component('components/attachment-grid-for-edit', null, false, array('post'=>'task')); ?>

		<!-- @else no attachments -->
			<p class="color-neutral font-style-italic">No attachments available</p>
		
		
		
	</div>


<hr class="no-margin-bottom">

<!-- Comments -->
	<div class="task-comments-form" id="task-comments-form">
		<h4>Activities &amp; Comments</h4>
		<?php app_get_component('components/comment-form'); ?>
	</div>

	<!-- @if comments -->
		<div class="task-comments">
			<!-- @LOOP component comment-row  -->
			<?php app_get_component('components/comment-row'); ?>

			<!-- @PLACEHOLDER: DELETE WHEN READY -->
				<?php for($i=1; $i<9; $i++){ ?>
					<?php app_get_component('components/comment-row'); ?>
				<?php } ?>

		</div>

	<!-- @else no comments -->
		<p class="color-neutral font-style-italic">No comments yet.</p>