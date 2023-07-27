
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

<button href="#" data-toggle-modal-default class="btn <?=$args['button_classes'] ?> no-padding font-size-large">
	<i class="symbol symbol-kebab-horizontal"></i>
	<span class="sr-only">More options</span>
</button>
<div class="modal modal-default" id="m-entry-options-REPLACEID" data-modal-width="400px">
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