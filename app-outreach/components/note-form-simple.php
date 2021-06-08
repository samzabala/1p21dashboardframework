<?php
$defs = array(
	'add_close_btn' => false,
);

$args = app_parse_args($data,$defs);
?>
<form action="" class="notes-editor">
	<div class="input-wrapper input-wrapper-vertical input-wrapper-block p">
        <label for="note" class="input-label sr-only">Add Note</label>
		<textarea name="note" id="note" cols="30" rows="2" class="input input-multiple-line">Body note. will be replaced by tinymce</textarea>
	</div>

	<div class="text-align-right">
		<?php if($args['add_close_btn']): ?>
			<a href="#close-add-note" data-toggle-accordion class="btn btn-link">
				Cancel 
			</a>
		<?php endif; ?>
		<button  class="btn btn-primary " type="submit">Add</button>
	</div>
</form>