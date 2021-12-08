
<!--
Imports JS:

Dropdown from framework/src/js/imports/dropdown

-->
<?php
$defs = array(
	'links' => array(
		'Link Text' => 'href="#"' //it just an array of link text and anchor attributes
	),
	'button_classes' => 'btn-link',
    'title' => 'Options'
);

$args = app_parse_args($data,$defs);
?>
<button
	href="#"
	data-toggle-modal-default
    data-modal-disable-overlay="false"
    data-modal-close="false"
	class="btn btn-symbol <?=$args['button_classes'] ?>"
    data-modal-center-y="true"
	title="More options"
>
	<i class="symbol symbol-kebab-horizontal"></i>
</button>
<div class="modal modal-default" data-modal-width="360px">
    <div class="text-align-center">
        <h1 class="no-margin-top"><?=$args['title'] ?></h1>
        <ul class='list-group list-group-small no-margin-y'>
            <? foreach($args['links'] as $link_text => $attrs): ?>
                <li>
                    <a <?=($attrs)?>><?=($link_text)?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>