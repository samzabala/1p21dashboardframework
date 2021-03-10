<?php
$defs = array(
	//@param post - type of single achuchuchu
	'has_add_event' => false, 
);

$args = app_parse_args($data,$defs);
?>
<div class="module" data-grid-area-md="auto / side">
	<div class="module-header module-header-break">
		<h3 class="module-title">Upcoming Events and Tasks</h3>
		<div class="module-functions">
			<?php if($args['has_add_event']): ?>
				<div class="nav-function">
					<a href="#mb-editor-task" data-toggle-modal-board data-modal-title="Add Task" class="btn btn-round btn-symbol btn-neutral">
						<i class="symbol symbol-plus"></i>
					</a>
				</div>
			<?php endif; ?>
		</div>
	</div>
	<div class="module-content">
	<!-- @if has events -->
		<!-- @loop component -->
			<?php app_get_component('components/event-row'); ?>

				<!-- @PLACEHOLDER: DELETE WHEN READY -->
					<?php for($i=1; $i<=4; $i++){ ?>
						<?php app_get_component('components/event-row'); ?>
					<?php } ?>
		<!-- @else -->
			<p class="color-neutral font-style-italic">No scheduled events or tasks</p>
	</div>
</div>