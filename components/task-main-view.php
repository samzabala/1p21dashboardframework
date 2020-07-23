<!-- Title -->
<div class="task-heading">

<!-- @IF state is view -->
<h1 class="task-title no-margin-top">
	<span class="replace">Project Title</span>
</h1>

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

<!-- @IF there is a description -->

	<!-- @PLACEHOLDER delete when ready -->
		<div class="REPLACE">
			<div>

				<?php app_get_component('components/_DEMO-html-markup'); ?>
			</div>

		</div>

	<!--@ELSE no description  -->
		<p class="color-neutral font-style-italic">No description available</p>

</div>


<hr class="no-margin-bottom">

<!-- Attachments -->

<div class="task-attachments">

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
	<?php app_get_component('components/attachment-grid-view'); ?>

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