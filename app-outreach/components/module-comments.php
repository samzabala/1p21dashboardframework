<?php
$defs = array(
	//@param post - type of single achuchuchu
	'has_add_comment' => false, 
);

$args = app_parse_args($data,$defs);
?>

	<div class="module module-large background-neutral-alpha-2">
		<div class="module-header module-header-break margin-bottom">
			<h3 class="module-title">Activities &amp; Notes</h3>
			<div class="module-functions">

				<?php app_get_component('components/function-select-by-type') ?>

				<?php if($args['has_add_comment']): ?>
					<?php app_get_component('components/function-add-comment') ?>
				<?php endif; ?>
			</div>
		</div>
		<div class="module-content background-theme no-padding">
		<!-- @if has comments -->
			<!-- @if has pinned -->
				<!-- @loop .comment-row PINNED -->
					<?php app_get_component('components/comment-row','',false,array(
						'is_pinned' => true
					)) ?>

				<!-- @loop .comment-row NOT_PINNED -->
					<?php app_get_component('components/comment-row','',false,array(
						'is_pinned' => false
					)) ?>

				<?php for($i=1; $i<=4; $i++){ ?>
					<?php app_get_component('components/comment-row') ?>
				<?php } ?>

		<!-- @else -->
			<p class="padding color-neutral font-style-italic">
				No comments yet.
			</p>
		</div>
	</div>