
<!-- @NOTE I realized this means the list column where the task is set, much like trello. -->
<div class="list-group list-group-toggle list-group-toggle-allow-no-active">

	<!-- @if workflux board has lists -->
		<a href="#" class="list-group-item flex-xs flex-wrap align-items-center justify-content-space-between active">
			<span class="flex-1-1">
				<span class="REPLACE">Workflux board list name</span>
			</span>
			<i class="color-primary symbol float-right symbol-check-toggle font-size-normalize"></i>
		</a>

		<?php for($i=1; $i<10; $i++){ ?>
			<a href="#" class="list-group-item flex-xs flex-wrap align-items-center justify-content-space-between">
				<span class="flex-1-1">
					<span class="REPLACE">Backlog</span>
				</span>
				<i class="color-primary symbol float-right symbol-check-toggle font-size-normalize"></i>
			</a>
			<a href="#" class="list-group-item flex-xs flex-wrap align-items-center justify-content-space-between">
				<span class="flex-1-1">
					<span class="REPLACE">In Progress</span>
				</span>
				<i class="color-primary symbol float-right symbol-check-toggle font-size-normalize"></i>
			</a>
			<a href="#" class="list-group-item flex-xs flex-wrap align-items-center justify-content-space-between">
				<span class="flex-1-1">
					<span class="REPLACE">Review</span>
				</span>
				<i class="color-primary symbol float-right symbol-check-toggle font-size-normalize"></i>
			</a>
			<a href="#" class="list-group-item flex-xs flex-wrap align-items-center justify-content-space-between">
				<span class="flex-1-1">
					<span class="REPLACE">Done</span>
				</span>
				<i class="color-primary symbol float-right symbol-check-toggle font-size-normalize"></i>
			</a>


		<?php } ?>

	<!-- else -->
		<span href="#" class="list-group-item list-group-item-no-interaction color-neutral font-style-italic">
			No lists Available
		</span>
</div>