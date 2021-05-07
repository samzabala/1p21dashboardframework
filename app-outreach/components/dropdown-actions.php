
<!--
Imports JS:

Dropdown from framework/src/js/imports/dropdown

-->
<?php
$defs = array(
	'links' => array(
		'Link Text' => 'href="#"' //it just an array of link text and anchor attributes
	),
	'button_classes' => 'btn-link'
);

$args = app_parse_args($data,$defs);
?>
<button
	href="#"
	data-toggle-dropdown
	class="btn btn-symbol <?=$args['button_classes'] ?>"
	title="More options"
>
	<i class="symbol symbol-kebab-horizontal"></i>
</button>
<div class="dropdown dropdown-right text-align-left" data-dropdown-width="250px">
	<ul class='list-group list-group-small no-margin-y'>
		<? foreach($args['links'] as $link_text => $attrs): ?>
			<li>
				<a <?=($attrs)?>><?=($link_text)?></a>
			</li>
		<?php endforeach; ?>
	</ul>
</div>