<?php
//args. feel free to modify as needed
$defs = array(
	'links' => array(
		'Link Text' => 'href="#"' //it just an array of link text and anchor attributes
	),
	'button_classes' => 'btn-link'
);

$args = app_parse_args($data,$defs);
?>
<a
	href="#"
	data-toggle-dropdown
	class="btn padding-small font-size-large <?=$args['button_classes'] ?>"
	title="More options"
>
	<i class="symbol symbol-kebab-horizontal"></i>
</a>
<div class="dropdown dropdown-right dropdown-top-flush text-align-left" data-dropdown-width="200px">
	<ul class='list-group list-group-small no-margin-y'>
		<? foreach($args['links'] as $link_text => $attrs): ?>
			<li class="no-border">
				<a <?=($attrs)?> class="display-block"><?=($link_text)?></a>
			</li>
		<?php endforeach; ?>
	</ul>
</div>