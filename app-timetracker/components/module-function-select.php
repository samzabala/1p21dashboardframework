<?php
$defs = array(
	'label' => null,
	'title' => 'Title',
    'count' => 1,
    'slug' => '',
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
			<label for="filter-<?=$args['slug']; ?>" class="input input-label no-padding-top padding-small-bottom"><?=$args['label']; ?></label>
		<?php endif; ?>
			
			<select id="filter-<?=$args['slug']; ?>" placeholder="<?=$args['title']; ?>" class="input input-box input-block" list="<?=$args['slug']; ?>">
				<option value=""><?=$args['title']; ?></option>
					<!-- @PLACEHOLDER: Delete when ready -->
					<?php foreach($args['items'] as $i => $item): ?>
						<option> <?=$item ?></option>
					<?php endforeach; ?>

			</select>
     <?php if($args['label']): ?>
		</div>
    <?php endif; ?>
</div>