<?php
//args. feel free to modify as needed
	$defs = array(
		//@param info - string - alert type 
		'type' => 'event',
	);

	$args = app_parse_args($data,$defs);
?>
<div class="event-row grid grid-flex grid-compact">
	<div class="grid-col flex-0-0">
		<?php if($args['type'] == 'event'): ?>
			<span class="btn-no-interaction btn btn-error-glassy btn-round btn-symbol">
				<i class="symbol symbol-calendar-alt"></i>
			</span>
		<?php elseif($args['type'] == 'task'): ?>
			<span class="btn-no-interaction btn  btn-success-glassy btn-round btn-symbol">
				<i class="symbol symbol-check"></i>
			</span>
		<?php endif; ?>
	</div>
	<div class="grid-col flex-1-1">
		<h5 class="event-date no-margin-y">
			<span class="REPLACE">June 12, 1898</span>
		</h5>
		<p class="event-description no-margin-y">
			<span class="REPLACE">Philippine independence day</span>
		</p>
		<p class="event-time color-neutral no-margin-y">
			<span class="REPLACE">4:00pm</span>
		</p>
	</div>
</div>