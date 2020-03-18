<div class="modal-track-time module-function">

	<!--
		NOTE: switch out `btn-success` to `btn-secondary` when timer is running,
		if inactive, or paused, put back `btn-success`
	-->
	<div class="btn-group btn-group-horizontal btn-group-unite">
		<!-- <span class="btn btn-default btn-no-interaction"><strong class="profile-project-time"><span class="REPLACE">00:00</span> </strong>&nbsp;Hours</span> -->
	
		<a class="btn btn-success"  href="#modal-track-time" data-toggle="modal">
			<span class="text-active">Start new Timer</span>
		</a>
	</div>



	<div class="modal" id="modal-track-time" data-modal-max-width="960px" data-modal-title="Add new Entry">
		<div class="container">

			<form action="" class="add-new-timer">
				<div class="flex-grid flex-grid-fixed flex-grid-compact">


					<div class="flex-col-xs-12 flex-col-md-8">
						
							<div class="p input-wrapper input-wrapper-vertical input-wrapper-block">
								<label class="input-label">
									Client <span class="color-error field-required">*</span>
								</label>
								<input type="text" name="client-name" class="input input-single-line">
							</div>

						
							<div class="p input-wrapper input-wrapper-vertical input-wrapper-block">
								<div class="input-label">
									<span class="flex-grid flex-grid-fixed flex-grid-no-gutter-y flex-grid-compact">

										<label  class="flex-col-6">

											Task <span class="color-error field-required">*</span>
										</label>

										<span class="flex-col-6 text-transform-none text-align-right font-weight-400">

											<a href="#">Choose from unfinished tasks</a>
										</span>

									</span>
								</div>
								<input type="text" name="task-name" class="input input-single-line">
							</div>
							
						
							<div class="p input-wrapper input-wrapper-vertical input-wrapper-block">
								<label class="input-label">
									Project
								</label>
								<input type="text" name="project-name" class="input input-single-line">
							</div>


						
							<div class="p input-wrapper input-wrapper-vertical input-wrapper-block">
								<label class="input-label">
									Notes
								</label>
								<textarea type="text" name="project-name" class="input input-multiple-line"></textarea>
							</div>
					</div>




					<div class="flex-col-xs-12 flex-col-md-4">
						
						<div class="p input-wrapper input-wrapper-vertical input-wrapper-block">
							<label for="log-start-date" class="input-label">
								Start Date  <span class="color-error field-required">*</span>
							</label>
							<input type="date" name="log-start-date" class="input input-single-line">
						</div>

						
						<div class="p input-wrapper input-wrapper-vertical input-wrapper-block">
							<label for="log-start-time" class="input-label">
								Start Time  <span class="color-error field-required">*</span>
							</label>
							<input type="time" name="log-start-time" class="input input-single-line">
						</div>




						
						<div class="p input-wrapper input-wrapper-vertical input-wrapper-block">
							<label for="log-end-date" class="input-label">
								End Date
							</label>
							<input type="date" name="log-end-date" class="input input-single-line">
						</div>

						
						<div class="p input-wrapper input-wrapper-vertical input-wrapper-block">
							<label for="log-end-time" class="input-label">
								End Time
							</label>
							<input type="time" name="log-end-time" class="input input-single-line">
						</div>


						<div class="p input-wrapper input-wrapper-vertical input-wrapper-block">
							<label for="log-due-date" class="input-label">
								Due Date
							</label>
							<input type="date" name="log-due-date" class="input input-single-line">
						</div>
					
					</div>


					<div class="flex-col-xs-12 text-align-right">
						<button class="btn btn-primary" type="submit">Add Entry</button>
					
					</div>
				</div>

			</form>
		</div>

	</div>
</div>
