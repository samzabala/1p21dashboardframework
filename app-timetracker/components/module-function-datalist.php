<?php
$defs = array(
	'label' => null,
	'title' => 'Title',
    'count' => 1,
    'slug' => '',
    'content' => '',
	'items' => array(

    ),
);

$args = app_parse_args($data,$defs);

 if($args['slug'] == ''):
    $args['slug'] = strtolower($args['title']);
 endif; 
?>

<div class="function-filter-<?=$args['slug']; ?> position-relative">
	<?php if($args['label']): ?>
		<div class="input-wrapper input-wrapper-vertical input-wrapper-block no-padding no-margin">
			<label for="filter-<?=$args['slug']; ?>" class="input-label no-padding-top padding-small-bottom"><?=$args['label']; ?></label>
		<?php endif; ?>
			
			<input id="filter-<?=$args['slug']; ?>" placeholder="<?=$args['title']; ?>" class="input input-single-line input-block" list="<?=$args['slug']; ?>"/>
			
			<datalist id="<?=$args['slug']; ?>">
				<!-- @PLACEHOLDER: Delete when ready -->
					<?php if($args['content']) echo $args['content'];
					foreach($args['items'] as $i => $item): ?>
						<option value="<?=$item ?>"> <?=$item ?></option>
					<?php endforeach; ?>
			</datalist>
     <?php if($args['label']): ?>
		</div>
    <?php endif; ?>
</div>