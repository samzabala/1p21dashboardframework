<?php 
//args. feel free to modify as needed
$defs = array(
	//@param id - string - id for data toggles to identify specific dropdown. useful for complex layouts
	'id' => null,
	
	//@param id - string - css width for dropdown
	'width' => 'max(100%,300px)',
	
	//@param list - array - list of data to search from
	'list' => array(

	),
	//@param allow_multiple - bool - can take multiple items or nah
	'allow_multiple' => false
);

$args = app_parse_args($data,$defs);
?>
<div class="dropdown dropdown-top-flush dropdown-left no-padding" data-dropdown-width="<?= $args['width'] ?>" data-dropdown-max-height="400px"
	<?php if($args['id']): ?>
		id="<?= $args['id']; ?>"
	<?php endif; ?>
>
	<div class="list-group list-group-interactive
		<?= 'list-group-toggle list-group-toggle-allow-no-active '.($args['allow_multiple'] ? 'list-group-toggle-multiple' : '');  //@PLACEHOLDER: DO NOT include this line of code, this is for demo purposes only ?>
	">
		<?php foreach( $args['list'] as $item ): ?>
			<!--
				@NOTE

				.list-group-item
					classes to add:
						`active` => when the contained input field is checked or has value
			-->
			<label class="list-group-item pointer-reference">
				<span class=" flex-grid flex-nowrap flex-grid-no-gutter justify-content-space-between flex-wrap align-items-center">
					<span class="flex-child flex-1-1">
						<?php if($args['allow_multiple']): ?>
							<input type="checkbox" class="sr-only">
						<?php else: ?>
							<input type="radio" class="sr-only">
						<?php endif; ?>
						<span class="text-wrap-ellipsis">
							<span class="REPLACE"><?= $item; ?></span>
						</span>
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