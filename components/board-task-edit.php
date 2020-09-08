<!-- EDIT -->

	<!-- 

	@NOTE change `task-REPLACEwithPostTypeID-edit` to `task-new` if task to edit is new/

	For board to render for new tasks, feel free to copy paste if needed. This board will have the exact markup structure but attributes will change, particularly these on the `.board` block:
			id => `task-new-edit` // feel free to change as fit

			There will be comments along the way as well
	-->

	<div id="task-REPLACEwithPostTypeID-edit" data-board-align="left" class="board" data-board-classes="dashboard-board-column-layout" data-board-resize="true"  data-board-width="1240px">
		<?php app_get_component('components/boards-task-form') ?>
	</div>
