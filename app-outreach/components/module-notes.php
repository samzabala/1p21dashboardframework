<?php
$defs = array(
	//@param post - type of single achuchuchu
	'has_add_note' => false, 
);

$args = app_parse_args($data,$defs);
?>

	<div class="module module-expanded background-neutral-alpha-2 position-relative">
		<div class="module-header padding-top module-end-break margin-bottom">
			<h3 class="module-title">Activities &amp; Notes</h3>
			<div class="module-functions justify-content-space-between">

				<?php app_get_component('components/function-select-by-type') ?>
				<?php app_get_component('components/function-add-note') ?>

			</div>
		</div>
		<div class="module-content background-theme no-padding">
		<!-- @if has notes -->
			<!-- @if has pinned -->
				<!-- @loop .note-row PINNED -->
					<!-- @if a task type -->
						<?php app_get_component('components/note-row','',false,array(
							'is_task' => false,
							'is_pinned' => true
						)) ?>
					<!-- @else if is an email sent -->
						<?php app_get_component('components/note-row','',false,array(
							'is_email_sent' => true,
							'has_long_body' => true, //if note has extra extra long content
							'is_pinned' => true,
						)) ?>
					<!-- @else if is an email received -->
						<?php app_get_component('components/note-row','',false,array(
							'is_email_received' => true,
							'has_long_body' => true, //if note has extra extra long content
							'is_pinned' => true,
						)) ?>
					<!-- @else -->
						<?php app_get_component('components/note-row','',false,array(
							'is_task' => false,
							'is_pinned' => true,
							'has_attachments' => true //@if has attachments
						)) ?>

				<!-- @loop .note-row NOT_PINNED -->
				
					<!-- @if a task type -->
						<?php app_get_component('components/note-row','',false,array(
							'is_task' => true
						)) ?>
					<!-- @else if is an email sent -->
						<?php app_get_component('components/note-row','',false,array(
							'is_email_sent' => true,
							'has_long_body' => true, //if note has extra extra long content
						)) ?>
					<!-- @else if is an email received -->
						<?php app_get_component('components/note-row','',false,array(
							'is_email_received' => true,
							'has_long_body' => true, //if note has extra extra long content
						)) ?>
					<!-- @else -->
						<?php app_get_component('components/note-row','',false,array(
							'is_task' => false,
							'has_attachments' => true, //if note has attachments
						)) ?>

						<?php for($i=1; $i<=4; $i++){ ?>
							<?php app_get_component('components/note-row','',false,array(
								'is_task' => true
							)) ?>
							<?php if($i % 2 !== 0): ?>
								<?php app_get_component('components/note-row','',false,array(
									'is_email_sent' => true,
									'has_long_body' => $i % 2 == 0, 
								)) ?>
							<?php else: ?>
								<?php app_get_component('components/note-row','',false,array(
									'is_email_received' => true,
									'has_long_body' => $i % 2 == 0,
								)) ?>
							<?php endif; ?>
							<?php app_get_component('components/note-row','',false,array(
								'is_task' => false,
								'has_attachments' => true, //if note has attachments
							)) ?>

						<?php } ?>

		<!-- @else -->
			<p class="padding color-neutral font-style-italic">
				No notes yet.
			</p>


		<?php if($args['has_add_note']): ?>
			<?php app_get_component('components/module-add-notes') ?>
		<?php endif; ?>
		</div>
	</div>