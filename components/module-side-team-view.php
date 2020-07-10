<div class="module">
	<div class="module-content">
		<div class="flex-grid flex-grid-compact flex-grid-no-gutter-y justify-content-space-between align-items-center">
			<div class="flex-child">
				<h5 class="no-margin-y">Project</h5>
			</div>
			<div class="flex-child">
				<a href="#task-side-team-view" data-toggle="accordion" class="color-neutral"><i class="symbol symbol-arrow-down"></i></a>
			</div>
		</div>

	
		<p class="task-project">
			<a href="#REPLACElinkToProject" class="">
				<span class="REPLACE">flux.1p21.io/project-name</span>
			</a>
		</p>
		<div id="task-side-team-view" class="accordion" data-accordion-change-hash="false">

			<h5 class="no-margin-y">Client</h5>
			<p class="task-client">
				
				<a href="#REPLACElinkToClient" class="color-neutral color-secondary-hover">
					<span class="REPLACE">Client Name</span>
				</a>
			</p>


			<h5 class="no-margin-y">Team Leads</h5>

			<!-- @if hasteam leads -->
			<!-- @LOOP -->
				<div class="team-member flex-grid flex-grid-compact">
				
				
				
				</div>
				
				<!-- @else -->
				<p class="color-neutral font-style-italic">
					No team leads.

					<!-- @if user can edit task -->
					<a class="color-inherit" href="#task-editor-REPLACEwithTaskId" data-toggle="board">Add members +</a>
				</p>

		</div>

		<!--  -->
	</div>
</div>