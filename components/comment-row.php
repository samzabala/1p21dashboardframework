<!-- @if data is comment -->
<div class="comment-row p">
	<?php app_get_component('components/comment-row-type-comment'); ?>
	<!-- 
		@if comment has replies
		@NOTE should allow the ui to appear like youtube's comment section
		-->
		<?php app_get_component('components/comment-replies'); ?>

	<hr>
</div>
<!-- @else if data is time tracking activity -->

<div class="timetrack-activity p">
	
	<?php app_get_component('components/comment-row-type-log'); ?>

	<hr>
</div>