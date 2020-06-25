<div class="module-grid">
	<div class="module">
		This is only for demonstration. for the bitches to work, simply include the components before body closes and add toggles that link directly to them....
		<a href="#task-view-REPLACEwithTaskId" data-toggle="board">Toggle task modallyu view board</a>
		<a href="#task-edit-REPLACEwithTaskId" data-toggle="board">Toggle task modallyu add/edit board</a>
	</div>
</div>





<?php
app_get_component('components/board-add-edit-project');
app_get_component('components/board-view-task');
app_get_component('components/board-add-edit-task');
?>