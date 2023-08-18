<?php 
//args. feel free to modify as needed
$defs = array(
	//@param list - array - list of data to search from
	'list_users' => array(

	),
	//@param list - array - list of data to search from
	'list_position' => array(

	),
	//@param search_placeholder - string - placeholder for search field
	'position_placeholder' => 'Select Position',
	//@param search_placeholder - string - placeholder for search field
	'search_placeholder' => 'Search Members',

	//@param allow_multiple - bool - can take multiple items or nah
	'allow_multiple' => false
);

$args = app_parse_args($data,$defs);
?>
<div class="dropdown dropdown-top-flush dropdown-left no-padding" data-dropdown-width="max(100%,300px)" data-dropdown-max-height="400px">
	<div class="padding-small position-sticky background-theme z-index-1 offset-0-x offset-0-top">
		<?php if($args['list_position']) : ?>
			<select type="text" placeholder="<?= $args['position_placeholder']; ?>" class="font-size-normalize input input-select input-small input-block font-weight-600 margin-small-bottom">
				<option value=""><?= $args['position_placeholder']; ?></option>

				<!-- @PLACHOLDER: Delete when ready -->
				<?php foreach( $args['list_position'] as $item ): ?>
					<option value=""><?= $item; ?></option>
				<?php endforeach; ?>
			</select>
		<?php endif; ?>
		<div class="input-group input-block input-group-horizontal">
			<input type="text" placeholder="<?= $args['search_placeholder']; ?>" class="font-size-normalize input input-single-line input-small input-block font-weight-600 no-border-right" />
			<label for="" class="font-size-normalize btn btn-symbol btn-small btn-default">
				<span class="sr-only">Search</span>
				<i class="symbol symbol-search"></i>
			</label>
		</div>
	</div>
	<div class="list-group list-group-interactive
		<?= 'list-group-toggle list-group-toggle-allow-no-active '.($args['allow_multiple'] ? 'list-group-toggle-multiple' : '');  //@PLACEHOLDER: DO NOT include this line of code, this is for demo purposes only ?>
	">
		<?php foreach( $args['list_users'] as $item ): ?>
			<!--
				@NOTE

				.list-group-item
					classes to add:
						`active` => when the contained input field is checked or has value
			-->
			<label class="list-group-item pointer-reference dropdown-purger">
				<span class=" flex-grid flex-nowrap flex-grid-no-gutter justify-content-space-between flex-wrap align-items-center">
					<div class="flex-0-0">
						<?php app_get_component('components/thumbnail-small','',false,array(
							'image' => $item['image'],
						)); ?>
					</div>
					<span class="flex-child flex-1-1 padding-small-left ">
						<?php if($args['allow_multiple']): ?>
							<input type="checkbox" class="sr-only">
						<?php else: ?>
							<input type="radio" class="sr-only">
						<?php endif; ?>
						<p class="no-margin text-wrap-ellipsis">
							<span class="REPLACE"><?= $item['name']; ?></span>
						</p>
						<p class="no-margin text-wrap-ellipsis color-neutral">
							<span class="REPLACE"><?= $item['title']; ?></span>
						</p>
					</span>
					<span class="flex-child flex-0-0">
						<i class="symbol symbol-check only-toggle flex-0-0"></i>
					</span>
				</span>
			</label>
		<?php endforeach; ?>
		<script></script>
	</div>
</div>