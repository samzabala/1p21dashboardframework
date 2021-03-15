<?php
$defs = array(
	//@param post - type of single achuchuchu
	'has_add_note' => false, 
);

$args = app_parse_args($data,$defs);
?>

	<div class="module module-large background-neutral-alpha-2">
		<div class="module-header module-header-break margin-bottom">
			<h3 class="module-title">Activities &amp; Notes</h3>
			<div class="module-functions">

				<?php app_get_component('components/function-select-by-type') ?>

				<?php if($args['has_add_note']): ?>
					<?php app_get_component('components/function-add-note') ?>
				<?php endif; ?>
			</div>
		</div>
		<div class="module-content background-theme no-padding">
		<!-- @if has notes -->
			<!-- @if has pinned -->
				<!-- @loop .note-row PINNED -->
					<?php app_get_component('components/note-row','',false,array(
						'is_pinned' => true
					)) ?>

				<!-- @loop .note-row NOT_PINNED -->
					<?php app_get_component('components/note-row','',false,array(
						'is_pinned' => false
					)) ?>

				<?php for($i=1; $i<=4; $i++){ ?>
					<?php app_get_component('components/note-row') ?>
				<?php } ?>

		<!-- @else -->
			<p class="padding color-neutral font-style-italic">
				No notes yet.
			</p>
		</div>
	</div>