	<div class="btn-group btn-group-horizontal">

		<!--
			add entry 
	-->
		<a class="btn btn-primary-outline" href="#board-track-time" data-toggle="board">
			Add Entry <i class="symbol symbol-plus"></i>
		</a>

		<!--
			start timer
			NOTE: render only when timer is paused
		-->
		<a class="btn btn-primary" href="#board-track-time" data-toggle="board">
			Start Timer <i class="symbol symbol-play"></i>
		</a>


		<!--
			pause timer
			NOTE: render only when timer is active
		-->
		<a class="btn btn-secondary" href="#board-track-time" data-toggle="board">
			Pause Timer <i class="symbol symbol-pause"></i>
		</a>

	</div>

	<div class="board" id="board-track-time" data-board-max-width="800px" data-board-title="Add new Entry">
		<form action="" class="add-new-timer">
			
		
			<div class="p input-wrapper input-wrapper-vertical input-wrapper-block">
				<label for="client-name" class="input-label">
					Client <span class="color-error field-required">*</span>
				</label>
				<div class="position-relative flex-xs">

					<input placeholder="Select a client" type="text" id="client-name" name="client-name" class="input input-single-line input-select" value="um" data-toggle="dropdown">
					<div data-dropdown-width="100%" class="dropdown client-name-dropdown dropdown-top-flush">
						<li >
							<a class="font-size-smaller font-weight-700 color-primary text-decoration-underline" href="javascript:;">Create a new `um` client</a>
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
					<label for="project-name" class="input-label">
						Project
					</label>
					<div class="position-relative flex-xs">

						<input placeholder="Select a project" type="text" id="project-name" name="project-name" class="input input-single-line input-select" value="r" data-toggle="dropdown">
						<div data-dropdown-width="100%" class="dropdown client-name-dropdown dropdown-top-flush">
							<li >
								<a class="font-size-smaller font-weight-700 color-primary text-decoration-underline" href="javascript:;">Create a new `r` client</a>
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
				<label for="task-cat" class="input-label">
					Task Category<span class="color-error field-required">*</span>
				</label>
				<div class="position-relative flex-xs">

					<input placeholder="Select a category" type="text" id="task-cat" name="task-cat" class="input input-single-line input-select" value="no" data-toggle="dropdown">
					<div data-dropdown-width="100%" class="dropdown client-name-dropdown dropdown-top-flush">
						<li >
							<a class="font-size-smaller font-weight-700 color-primary text-decoration-underline" href="javascript:;">Create a new `no` client</a>
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
				<label for="task-name" class="input-label">
					Task <span class="color-error field-required">*</span>
				</label>
				<div class="position-relative flex-xs">

					<input placeholder="Select a task" type="text" id="task-name" name="task-name" class="input input-single-line input-select" value="no" data-toggle="dropdown">
					<div data-dropdown-width="100%" class="dropdown client-name-dropdown dropdown-top-flush">
						<li >
							<a class="font-size-smaller font-weight-700 color-primary text-decoration-underline" href="javascript:;">Create a new `no` client</a>
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
				<label for="project-name" class="input-label">
					Notes
				</label>

				<!-- @NOTE. this has tinymce naw -->
				<div class="REPLACE">

					<textarea type="text" id ="project-name" name="project-name" class="input input-multiple-line">@PLACEHOLDER replace with tinymce</textarea>
				</div>
			</div>

			<div class="flex-grid flex-grid-fixed flex-grid-no-gutter-y">
				<div class="flex-col-xs-6 flex-col-md-3">
					<div class="input-wrapper input-wrapper-vertical input-wrapper-block p">
						<label for="log-start-date" class="input-label">
							Start Date  <span class="color-error field-required">*</span>
						</label>
						<input type="date" id="log-start-date" name="log-start-date" class="input input-single-line">
					</div>
				</div>
				<div class="flex-col-xs-6 flex-col-md-3">
					<div class="input-wrapper input-wrapper-vertical input-wrapper-block p">
						<label for="log-start-time" class="input-label">
							Start Time  <span class="color-error field-required">*</span>
						</label>
						<input type="time" id="log-start-time" name="log-start-time" class="input input-single-line">
					</div>
				</div>
				<div class="flex-col-xs-6 flex-col-md-3">
					<div class="input-wrapper input-wrapper-vertical input-wrapper-block p">
					
						
						<label for="log-start-time" class="input-label">
							Duration  <span class="color-error field-required">*</span>
						</label>
						<input width="70px" type="text" step=1" size="2" pattern="[0-9]{2}" placeholder="00:00" pattern="([01]?[0-9]{1}|2[0-3]{1}):[0-5]{1}[0-9]{1}" id="log-duration-time" name="log-duration-time" class="input input-single-line input-inline">
					</div>
				</div>
				<div class="flex-col-xs-6 flex-col-md-3">
					<div class="input-wrapper input-wrapper-vertical input-wrapper-block p">
						<span class="input-label">
							Status
						</span>
						
						<label for="log-billable">
							<input type="checkbox" class="input input-inline" id="log-billable"  name="log-billable" /> Billable
						</label>
						
						<label for="log-completed">
							<input type="checkbox" class="input input-inline" id="log-completed"  name="log-completed" /> Completed
						</label>
					</div>
				</div>
			</div>

		</form>
	</div>