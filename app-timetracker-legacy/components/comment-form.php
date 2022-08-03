<?php
$defs = array(
	//@param post - type of single achuchuchu
	'post' => 'task', //project,client,note,whatever
);

$args = app_parse_args($data,$defs);
?>

<form action="" class="commentes-editor">
	<div class="input-wrapper input-wrapper-vertical input-wrapper-block p">
		<textarea name="comment-REPLACESUFFIX" id="comment-REPLACESUFFIX" cols="30" rows="10" class="input input-multiple-line">Body comment. will be replaced by tinymce</textarea>
	</div>
	<div class="input-wrapper input-wrapper-vertical input-wrapper-block p">
		<label for="comment-attachments-REPLACESUFFIX" class="input-label">Add Attachments</label>
		<input type="file" name="comment-attachments-REPLACESUFFIX"  id="comment-attachments-REPLACESUFFIX" class="input input-single-line" />
	</div>


	<div class="text-align-right">
		<button  class="btn btn-primary " type="submit">Add Comment</button>
	</div>
</form>