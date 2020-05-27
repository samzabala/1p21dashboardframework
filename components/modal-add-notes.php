<div class="module-function modal-add-task">
	<a href="#modal-add-notes" data-toggle="modal" class=" btn btn-primary"><span>Add Notes</span> <i class="symbol symbol-plus"></i></a>

	<div class="modal" id="modal-add-notes" data-modal-max-width="800px" data-modal-disable-overlay="true" data-modal-title="It's actually a placeholder but feel free to use">
							
		<form method="get">

			<div class="input-wrapper input-wrapper-vertical input-wrapper-block p">

				<label for="task-title" class="input-label">Task</label>
				<input id="task-title" type="text" class="input input-single-line" placeholder="Enter title here">
			</div>

			<div class="input-wrapper input-wrapper-vertical input-wrapper-block p">
				<label for="notes" class="input-label">Notes</label>

				<!-- @NOTE replace with tinymce -->
				<textarea id="notes" id="task-description" class="input input-multiple-line"></textarea>
			</div>


			<div class="input-wrapper input-wrapper-vertical input-wrapper-block p">
				<label for="task-title" class="input-label">Share with:</label>

				<input id="share-with" class="input input-single-line" />
			</div>

			<div class="text-align-right">
				

				<button class="btn btn-primary" type="submit">Post</button>
				<button class="btn btn-default" data-toggle="modal-close">Cancel</button>
			</div>
		</form>
	</div>
</div>


