<form action="" class="commentes-editor">
	<div class="input-wrapper input-wrapper-vertical input-wrapper-block p">
		<textarea name="comment" id="comment" cols="30" rows="10" class="input input-multiple-line">Body comment. will be replaced by tinymce</textarea>
	</div>

	<input type="file" name="comment-attachments"  id="comment-attachments" class="display-none" />

	<div class="text-align-right">
		<button  class="btn btn-neutral-outline " onclick="REPLACEfnToTriggercommentsAttachmentsToAdd(event)" type="submit">Attach Files</button>
		<button  class="btn btn-primary " type="submit">Add Comment</button>
	</div>
	
</form>