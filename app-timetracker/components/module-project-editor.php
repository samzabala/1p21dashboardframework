<div class="module margin-large-top margin-bottom">
	<div class="module-header module-header-break padding-top no-margin-bottom padding-bottom align-items-center">
		<div class="flex-1-1 padding-right"> <!-- flex-xs -->
			<form class="h3 color-theme flex-1-1 no-margin-y">
				<!-- @if can edit -->
					<label for="project-name" class="sr-only">Project Name</label>
					<input id="project-name" value="almost-christmas-means-it-wasnt-christmas.ace-attorney.com (PPC)" type="text" placeholder="Click here to add a project name" class="input input-blend input-block" />
				<!-- @else -->
					<!-- <span class="REPLACE">ace-attorney.com (PPC)</span> -->
				
			</form>
			<?php app_get_component('components/detail-tags'); ?>
		</div>
		<div class="module-functions flex-0-0 flex-nowrap flex-xs align-items-center justyify-content-space-between">
			<div class="module-function">
				<div class="color-neutral text-nowrap">
					Created on <span class="REPLACE">April 20, 1969</span>
				</div>
			</div>

			<!-- @if can do actions -->
				<div class="module-function text-align-right">
					<div class="display-inline-block position-relative">
						<?php app_get_component('components/dropdown-actions','',false,array(
							'links' => array(
								'<i class="symbol symbol-hyperlink"></i> Copy Link'
									=> 'class="dropdown-purger" href="#"',
								'<i class="symbol symbol-delete"></i> Delete'
									=> 'class="dropdown-purger" href="#m-delete-project" data-toggle-modal-default ',
							)
						)) ?>
					</div>
				</div>
		</div>
	</div>
	<div class="module-content no-padding-x no-padding-bottom">
		<?php app_get_component('components/detail-subheader'); ?>
		<form action="">
			<textarea class="input input-multiple-line input-block" rows="25">REPLACE With TinyMCE</textarea>
		</form>
	</div>
</div>



<!-- @if new Project -->
<form class="margin-top text-align-right">
		
		<!-- @NOTE hidden input types here -->

		<a href="#" class="btn btn-theme-outline">Cancel</a>
		&nbsp;
		<button href="#" class="btn btn-theme">Create Project</button>
	</form>
