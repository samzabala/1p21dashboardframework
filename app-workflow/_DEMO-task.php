<div class="module-grid">
	<div class="module">
		This is only for demonstration. for the bitches to work, simply include the components before body closes and add toggles that link directly to them....
		
		<h2>Board modal version</h2>
		<a href="#task-REPLACEwithPostTypeID-view" data-toggle="board">Toggle task mudal view board</a>
		<a href="#task-REPLACEwithPostTypeID-edit" data-toggle="board">Toggle task mudal add/edit board</a>
		<a href="#task-new" data-toggle="board">Make a new task</a>

		<h2>static boi version</h2>
		<a href="<?= app_create_link(array('template'=>'task-view')) ?>">Toggle task mudal view board</a>
		<a href="<?= app_create_link(array('template'=>'task-edit')) ?>">Toggle task mudal add/edit board</a>
		<a href="<?= app_create_link(array('template'=>'task-edit')) ?>">Make a new task</a>
	</div>
</div>





<?php
app_get_component('components/boards-project');
app_get_component('components/boards-task');
app_get_component('components/board-track-time');
?>