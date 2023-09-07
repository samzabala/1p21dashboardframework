<?php
//args. feel free to modify as needed
$defs = array(
	//@param title - string - module title
		'title' => 'Today', //reminder,error,caution,success,

	//@param no_radius_top - string - bool if radius-top is disabled
		'no_radius_top' => false,
);

$args = app_parse_args($data,$defs);

?>
<div class="
	<?= $args['no_radius_top'] ? 'no-radius-top' : '' ?>
	module p
">
	<!-- @if has logs for today -->
		<div class="module-header">
			<div class="h6 no-margin-y text-align-center">
				<span class="REPLACE"><?= $args['title']; ?></span>
			</div>
		</div>
		<div class="module-content no-padding-x no-padding-bottom">
			<?php app_get_component('components/list-sub-entries') ?>
		</div>
			
	<!-- @else -->
		<div class="text-align-center font-style-italic color-neutral padding">
			No entries
		</div>

</div>