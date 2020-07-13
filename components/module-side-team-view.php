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
		<div id="task-side-team-view" class="accordion open" data-accordion-change-hash="false">



			<h5>Client</h5>
				<p class="task-client">
					
					<a href="#REPLACElinkToClient" class="color-neutral color-secondary-hover">
						<span class="REPLACE">Client Name</span>
					</a>
				</p>



			<h5>Team Leads</h5>
				<!-- @if hasteam leads -->
				<div class="project-leads">

					<!-- @LOOP component -->
					<?php app_get_component('components/profile-titled') ?>
						<!-- @PLACEHOLDER: DELETE WHEN READY -->
						<?php for($i=1; $i<9; $i++){ ?>
							<?php app_get_component('components/profile-titled'); ?>
						<?php } ?>
				</div>
						
				<!-- @else -->
				<p class="color-neutral font-style-italic">
					No team leads.

					<!-- @if user can edit task -->
					<a class="color-inherit" href="#task-editor-REPLACEwithTaskId" data-toggle="board">Edit task to add team leads.</a>
				</p>


			<hr>


				<div class="flex-grid flex-grid-fixed flex-grid-no-gutter">
					<div class="flex-col-xs-12">
						
						<h5>Assigned To</h5>
						<p class="task-assignees">
							<!-- @if assigned to anyone -->
								<!-- @LOOP a w/ conditional comma -->
								<a href="<?= app_create_link(array('template'=>'profile')); ?>"><span class="REPLACE">Profile Name</span></a>
								,
										<!-- @PLACEHOLDER: DELETE WHEN READY -->
										<?php for($i=1; $i<=3; $i++){ ?>
											<a href="<?= app_create_link(array('template'=>'profile')); ?>"><span class="REPLACE">Profile Name</span></a><?=$i < 3 ? ',' : '' ?>
										<?php } ?>
										
							<!-- @else unassigned -->
								<span class="color-neutral font-style-italic">Unassigned. <a class="color-inherit" href="#task-editor-REPLACEwithTaskId" data-toggle="board">Edit task to assign to members.</a></span>
						</p>

					</div>

					<div class="flex-col-xs-6 flex-col-md-8">
						<h5>Due on</h5>
						<p class="color-neutral task-due-date no-margin-bottom">
							<!-- @if has due date -->
								<span class="REPLACE">
									4/20/69 at 6:09pm
								</span>
							<!-- @else -->
								Unspecified
						</p>
					</div>

					<div class="flex-col-xs-6 flex-col-md-4">
						
						<h5>Priority</h5>
						<p class="color-neutral task-priority no-margin-bottom">
							<span class="REPLACE">
								Low
							</span>
						</p>
					</div>
				
				</div>

		</div>

		<!--  -->
	</div>
</div>