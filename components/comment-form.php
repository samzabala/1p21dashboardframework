<!-- @note
REPLACESUFFIX => something to make the form specific to what the comment form would be for eg:
@if replying
	`COMMENTID-reply`
@if editing
	`COMMENTID-edit
@if new
	`new`


-->
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