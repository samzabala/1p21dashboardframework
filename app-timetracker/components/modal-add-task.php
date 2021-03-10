<div class="module-function modal-add-task">
	<a href="#modal-add-task" data-toggle="modal" class=" btn btn-primary"><span>Add Task</span> <i class="symbol symbol-plus"></i></a>

	<div class="modal" id="modal-add-task" data-modal-width="800px" data-modal-disable-overlay="true" data-modal-title="Add New Task">
							
		<form method="get">
			<div class="special-form">

				<div class="input-wrapper input-wrapper-vertical input-wrapper-block">

					<label for="task-title" class="sr-only">Title</label>
					<input id="task-title" type="text" class="input input-large input-single-line font-weight-600" placeholder="Enter title here">
				</div>


				<div class="input-wrapper input-wrapper-vertical input-wrapper-block">
					<label for="task-description" class="sr-only">Content</label>

					<textarea id="task-description" class="input input-multiple-line">
					</textarea>
				</div>
			</div>
			<div class="text-align-right">
				

			<button class="btn btn-primary" type="submit">Post</button>
			<button class="btn btn-default" data-toggle="modal-close">Cancel</button>
			</div>
		</form>

	</div>
</div>


