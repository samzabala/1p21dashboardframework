<?php
$defs = array(
	'href' => '#',
	'attrs' => '',
	'classes' => '',
);

$args = app_parse_args($data,$defs);
?>
<a
	href="<?=$args['href'] ?>"
	<?=$args['attrs'] ?>
	class="display-inline-block text-decoration-none<?=$args['classes'] ?> pointer-reference">
	<span class="hide-toggle">
		<span class="btn btn-symbol btn-neutral btn-round">
			<i class="symbol symbol-plus"></i>
		</span>
		<span class="color-neutral text-transform-uppercase">Add</span>
	</span>
	<span class="hide-not-toggle">
		<span class="btn btn-symbol btn-neutral btn-round">
			<i class="symbol symbol-close"></i>
		</span>
		<span class="color-neutral text-transform-uppercase">Cancel</span>
	</span>
</a>