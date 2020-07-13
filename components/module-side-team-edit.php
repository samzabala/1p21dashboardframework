<div class="module">
	<div class="module-content">
		<div class="input-wrapper input-wrapper-block input-wrapper-vertical">
			<label class="input-label" for="task-project" class="no-margin-y">Project</label>
			
			<input id="task-project" name="task-project" type="text" class="input input-single-line input-select" data-toggle="dropdown" placeholder="Type or select project..." />
			<div class="dropdown dropdown-top-flush dashboard-dropdown-maxed no-padding" data-dropdown-width="100%" data-dropdown-max-height="322px">
				<ul class="list-group">

					<!-- @PLACEHOLDER -->
						<li><a href="#">Project Name</a></li>
						<li><a href="#">Project Name</a></li>
						<li><a href="#">Project Name</a></li>
						<li><a href="#">Project Name</a></li>
						<li><a href="#">Project Name</a></li>
						<li><a href="#">Project Name</a></li>
						<li><a href="#">Project Name</a></li>
						<li><a href="#">Project Name</a></li>
						<li><a href="#">Project Name</a></li>
						<li><a href="#">Project Name</a></li>
	
				</ul>
				
			</div>
		</div>


		<div class="input-wrapper input-wrapper-block input-wrapper-vertical">
			<label class="input-label" for="task-client" class="no-margin-y">Client</label>
			
			<input id="task-client" name="task-client" type="text" class="input input-single-line input-select" data-toggle="dropdown" placeholder="Type or select client..." />
			<div class="dropdown dropdown-top-flush dashboard-dropdown-maxed no-padding" data-dropdown-width="100%" data-dropdown-max-height="322px">
				<ul class="list-group">

					<!-- @PLACEHOLDER -->
						<li><a href="#">client Name</a></li>
						<li><a href="#">client Name</a></li>
						<li><a href="#">client Name</a></li>
						<li><a href="#">client Name</a></li>
						<li><a href="#">client Name</a></li>
						<li><a href="#">client Name</a></li>
						<li><a href="#">client Name</a></li>
						<li><a href="#">client Name</a></li>
						<li><a href="#">client Name</a></li>
						<li><a href="#">client Name</a></li>
	
				</ul>
				
			</div>
		</div>

		<div class="input-wrapper input-wrapper-block input-wrapper-vertical">
			<span class="input-label" for="task-leads" class="no-margin-y">Team Leads</span>
			<input id="task-leads" name="task-leads" type="hidden" class="input input-single-line input-select" data-toggle="dropdown" placeholder="Type or select project..." />
			<div>
				<!-- @LOOP component -->
					<?php app_get_component('components/profile-titled-for-edit') ?>
						<!-- @PLACEHOLDER: DELETE WHEN READY -->
						<?php for($i=1; $i<9; $i++){ ?>
							<?php app_get_component('components/profile-titled-for-edit'); ?>
						<?php } ?>
			
			
				<a href="#" data-toggle="modal" class="btn btn-primary-outline btn-small">Edit team leads <i class="symbol symbol-plus"></i></a>
				<?php app_get_component('components/modal-users-multiple'); ?>
			</div>
		</div>



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
					</p>

					<a href="#" data-toggle="modal" class="btn btn-primary-outline btn-small">Edit assignees <i class="symbol symbol-plus"></i></a>
					<?php app_get_component('components/modal-users-multiple'); ?>

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


		<!--  -->
	</div>
</div>