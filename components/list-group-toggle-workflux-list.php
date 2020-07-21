
<!-- @NOTE I realized this means the list column where the task is set, much like trello. -->
<div class="list-group list-group-toggle list-group-toggle-allow-no-active">

	<!-- @if workflux board has lists -->
		<!-- 
		@NOTE
			.list-group-item/li
				classes to add
					if workflux id is in the corresponding workflux id field => `active`

		-->
		<a href="#" class="list-group-item flex-xs flex-wrap align-items-center justify-content-space-between active">
			<span class="flex-1-1">
				<span class="REPLACE">Workflux board list name</span>
			</span>
			<i class="color-primary symbol float-right symbol-check-toggle font-size-normalize"></i>
		</a>
			<!-- @PLACEHOLDER DELETE WHEN READY -->
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

	<!-- else -->
		<span href="#" class="list-group-item list-group-item-no-interaction color-neutral font-style-italic">
			No lists Available
		</span>
</div>