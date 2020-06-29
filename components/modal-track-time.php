<div class="modal-track-time module-function">



<!-- @NOTE:

please update the btn-group only. actual is modal is on hold and will be updated later

-->

	<div class="btn-group btn-group-horizontal">

		<!--
			add entry 
	-->
		<a class="btn btn-primary-outline" href="#modal-track-time" data-toggle="modal">
			Add Entry <i class="symbol symbol-plus"></i>
		</a>

		<!--
			start timer
			NOTE: render only when timer is paused
		-->
		<a class="btn btn-primary" href="#modal-track-time" data-toggle="modal">
			Start Timer <i class="symbol symbol-play"></i>
		</a>


		<!--
			pause timer
			NOTE: render only when timer is active
		-->
		<a class="btn btn-secondary" href="#modal-track-time" data-toggle="modal">
			Pause Timer <i class="symbol symbol-pause"></i>
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
							<div class="position-relative flex-xs">

								<input type="text" name="client-name" class="input input-single-line" value="um" data-toggle="dropdown">
								<div data-dropdown-width="100%" class="dropdown client-name-dropdown dropdown-top-flush">
									<li >
										<a class="font-size-smaller font-weight-700 color-primary text-decoration-underline" href="#">Create a new `um` client</a>
									</li>

									<li >
										<hr class="dropdown-separator">
									</li>

									<!-- DYNAMIC ITEMS -->
										<li class="dashboard-dropdown-dynamic-item">
											<a href="#" class="js-client-opt">Umbridge</a>
										</li>
										<li class="dashboard-dropdown-dynamic-item">
											<a href="#" class="js-client-opt">Umami</a>
										</li>
								</div>
							</div>
						</div>

					
						<div class="p input-wrapper input-wrapper-vertical input-wrapper-block">
							<div class="input-label">
								<span class="flex-grid flex-grid-fixed flex-grid-no-gutter-y flex-grid-compact">

									<label  class="flex-col-6">

										Task <span class="color-error field-required">*</span>
									</label>

									<span class="flex-col-6 text-transform-none text-align-right font-weight-400">

										<a href="#" class="js-client-opt">Choose from unfinished tasks</a>
									</span>

								</span>
							</div>
							<div class="position-relative flex-xs">

								<input type="text" name="task-name" class="input input-single-line" value="no" data-toggle="dropdown">
								<div data-dropdown-width="100%" class="dropdown client-name-dropdown dropdown-top-flush">
									<li >
										<a class="font-size-smaller font-weight-700 color-primary text-decoration-underline" href="#">Create a new `no` client</a>
									</li>

									<li >
										<hr class="dropdown-separator">
									</li>




									<!-- DYNAMIC ITEMS -->
										<li class="dashboard-dropdown-dynamic-item">
											<a href="#" class="js-client-opt">Noah's Ark</a>
										</li>
										<li class="dashboard-dropdown-dynamic-item">
											<a href="#" class="js-client-opt">No Doubt</a>
										</li>
										<li class="dashboard-dropdown-dynamic-item">
											<a href="#" class="js-client-opt">Nordstrom Rack</a>
										</li>
								</div>
							</div>
						</div>
						
					
						<div class="p input-wrapper input-wrapper-vertical input-wrapper-block">
							<label class="input-label">
								Project
							</label>
							<div class="position-relative flex-xs">

								<input type="text" name="project-name" class="input input-single-line" value="r" data-toggle="dropdown">
								<div data-dropdown-width="100%" class="dropdown client-name-dropdown dropdown-top-flush">
									<li >
										<a class="font-size-smaller font-weight-700 color-primary text-decoration-underline" href="#">Create a new `r` client</a>
									</li>

									<li >
										<hr class="dropdown-separator">
									</li>




									<!-- DYNAMIC ITEMS -->
										<li class="dashboard-dropdown-dynamic-item">
											<a href="#" class="js-client-opt">Ergonomics</a>
										</li>
										<li class="dashboard-dropdown-dynamic-item">
											<a href="#" class="js-client-opt">Urban Outfitters</a>
										</li>
										<li class="dashboard-dropdown-dynamic-item">
											<a href="#" class="js-client-opt">UrCool</a>
										</li>
								</div>
						</div>
					</div>


						
						<div class="p input-wrapper input-wrapper-vertical input-wrapper-block">
							<label class="input-label">
								Notes
							</label>

							<!-- @NOTE. this has tinymce naw -->
							<div class="REPLACE">

								<textarea type="text" name="project-name" class="input input-multiple-line">
								</textarea>
							</div>
						</div>

						<div class="p input-wrapper input-wrapper-vertical input-wrapper-block">
							<label class="input-label" for="attachments">Attachments</label>
							<input class="input input-single-line" id="attachments" multiple="" name="attachments" type="file">
						</div>
					</div>




					<div class="flex-col-xs-12 flex-col-md-4">
						
						<div class="p input-wrapper input-wrapper-vertical input-wrapper-block">
							<label class="input-label">
								Start Date  <span class="color-error field-required">*</span>
							</label>
							<input type="date" name="log-start-date" class="input input-single-line">
						</div>

						
						<div class="p input-wrapper input-wrapper-vertical input-wrapper-block">
							<label class="input-label">
								Start Time  <span class="color-error field-required">*</span>
							</label>
							<input type="time" name="log-start-time" class="input input-single-line">
						</div>




						
						<div class="p">
							<label class="input-label">
								Duration <span class="color-error field-required">*</span>
							</label>
							<div>
								<input width="70px" type="text" step=1" size="2" pattern="[0-9]{2}" placeholder="00" name="log-duration-hours" class="input input-single-line input-inline">
								
								<span class="input input-inline">
									:
								</span>
								
								<input width="70px" type="text" step=1" size="2" pattern="[0-9]{2}" placeholder="00" name="log-duration-minutes" class="input input-single-line input-inline">

							</div>
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
