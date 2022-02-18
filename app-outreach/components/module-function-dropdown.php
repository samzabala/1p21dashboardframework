<?php
$defs = array(
	'label' => null,
	'title' => 'Title',
    'count' => 1,
    'slug' => '',
    'dropdown_x_offset' => 'right',
    'content' => '',
	'items' => array(

    ),
);

$args = app_parse_args($data,$defs);

 if($args['slug'] == ''):
    $args['slug'] = strtolower($args['title']);
 endif; 
?>

<div class="module-function function-filter-<?=$args['slug']; ?> position-relative">
    <?php if($args['label']): ?>
        <div class="input-wrapper input-wrapper-horizontal input-wrapper-block-mobile input-wrapper-responsive no-padding-right">
        <label class="input-label"><?=$args['label']; ?></label>
    <?php endif; ?>
        <button data-toggle-dropdown class="input input-select input-block-mobile">
            <?=$args['title']; ?>
            <!-- @if one or more Owner is checked -->
            <span class="filter-companies-<?=$args['slug']; ?>-active">
                <!-- @NOTE: filter count -->
                (<span class="REPLACE"><?=$args['count'] ?></span>)
            </span>
        </button>
        <ul class="dropdown dropdown-top-flush dropdown-<?= $args['dropdown_x_offset'] ?>" data-dropdown-width="200px" data-dropdown-max-height="30em">
            <?php if($args['content']) echo $args['content'];
            foreach($args['items'] as $i => $item): ?>
                <li>
                    <label class="input-label">
                        <input type="checkbox"
                            <?=$i == 1 ? 'checked' : '' ?>
                            name="filter-companies-<?=$args['slug']; ?>"
                            value="<?= str_replace(' ','_',strtolower($item)) ?>"
                            class="input input-inline">
                        <?=$item ?>
                    </label>
                </li>
            <?php endforeach; ?>
        </ul>
     <?php if($args['label']): ?>
     </div>
    <?php endif; ?>
</div>