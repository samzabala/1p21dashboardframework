
<?php
$defs = array(
	'links' => array(
		'Link Text' => 'href="#"' //it just an array of link text and anchor attributes
	),
);

$args = app_parse_args($data,$defs);
?>
<button
	href="#"
	data-toggle-tooltip-click
	data-tooltip-placement="bottom"
	data-tooltip-allow-interaction="true"
	data-tooltip-width="250px"
	data-tooltip-content="
	<ul class='list-group list-group-small no-margin-y'>
		<? foreach($args['links'] as $link_text => $attrs): ?>
			<li>
				<a <?=htmlentities($attrs)?>><?=htmlentities($link_text)?></a>
			</li>
		<?php endforeach; ?>
	</ul>
	"
	class="btn btn-link btn-symbol btn-link"
	title="More options"
>
	<i class="symbol symbol-kebab-horizontal"></i>
</button>