<h1 class="no-margin-top">
	<span class="REPLACE">Note title </span>
</h1>
<!-- Description -->
	<div class="note-description overflow-hidden" style="height: 69em;">
		<!-- @if description it has -->
			<?php app_get_component('components/_DEMO-html-markup') ?>
		<!-- @else -->
			<p class="color-neutral font-style-italic">No description available.</p>
	</div>

<!-- Attachments -->
	<div class="note-attachments" id="attachments">
		<div class="flex-grid flex-grid-compact justify-content-space-between align-items-center">
			<div class="flex-col-xs-6">
				<h4 class="no-margin-y">
					Attachments
				</h4>
			</div>
			<!-- @if there are attachemtns -->
				<div class="flex-col-xs-6 text-align-right">
					<a href="#" class="task-attachments-downloader" ><i class="symbol symbol-download"></i> Download All</a>
				</div>
		</div>

		<!-- @if attachments have rows -->
			<?php app_get_component('components/attachment','grid-masonry') ?>

		<!-- @else no attachments -->
			<p class="color-neutral font-style-italic">No attachments available</p>
		
		
	</div>