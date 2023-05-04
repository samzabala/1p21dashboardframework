
<div class="board" id="board-track-time" data-board-width="700px" data-board-title="Add new Entry">
	<form action="" class="add-new-timer">
		
		<div class="p input-wrapper input-wrapper-vertical input-wrapper-block">
			<label for="log-client" class="input input-label">
				Client <span class="color-error field-required">*</span>
			</label>
			<div class="position-relative flex-xs">

				<input placeholder="Select a client" type="text" id="log-client" name="log-client" class="input input-box input-box input-box-select" value="um" data-toggle="dropdown">
				<div data-dropdown-width="100%" class="dropdown dropdown-top-flush">
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
				<label for="log-project" class="input input-label">
					Project<span class="color-error field-required">*</span>
				</label>
				<div class="position-relative flex-xs">

					<input placeholder="Select a project" type="text" id="log-project" name="log-project" class="input input-box input-box input-box-select" value="r" data-toggle="dropdown">
					<div data-dropdown-width="100%" class="dropdown dropdown-top-flush">
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
			<label for="log-task-cat" class="input input-label">
				Task Category
			</label>
			<div class="position-relative flex-xs">

				<input placeholder="Select a category" type="text" id="log-task-cat" name="log-task-cat" class="input input-box input-box input-box-select" value="no" data-toggle="dropdown">
				<div data-dropdown-width="100%" class="dropdown dropdown-top-flush">
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
			<label for="log-task-name" class="input input-label">
				Task <span class="color-error field-required">*</span>
			</label>
			<div class="position-relative flex-xs">

				<input placeholder="Select a task" type="text" id="log-task-name" name="log-task-name" class="input input-box input-box input-box-select" value="no" data-toggle="dropdown">
				<div data-dropdown-width="100%" class="dropdown dropdown-top-flush">
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
			<label for="log-notes" class="input input-label">
				Notes
			</label>

			<!-- @NOTE. this has tinymce naw -->
			<div class="REPLACE">

				<textarea type="text" id ="log-notes" name="log-notes" class="input input-box input-box-multiline">@PLACEHOLDER replace with tinymce</textarea>
			</div>
		</div>

		<div class="p input-wrapper input-wrapper-vertical input-wrapper-block">
			<label class="input input-label" for="attachments">Attachments</label>
			<input class="input input-box" id="attachments" multiple="" name="attachments" type="file">
		</div>

		<div class="grid grid-flex grid-constricted-y grid-compact">
			<div class="grid-col-xs-12 grid-col-sm-6">
				<div class="input-wrapper input-wrapper-vertical input-wrapper-block p">
					<label for="sdate" class="input input-label">
						Start Date <span class="color-error field-required">*</span>
					</label>

					<input type="date" id="sdate" name="sdate" class="input input-box" value="2020-07-01" min="2020-06-24" disabled="" required="">
					<input id="start_date" name="start_date" required="" type="hidden" value="2020-07-01">
				</div>
			</div>

			<div class="grid-col-xs-12 grid-col-sm-6">
				<div class="input-wrapper input-wrapper-vertical input-wrapper-block p">
					<label for="start_time" class="input input-label">
						Start Time <span class="color-error field-required">*</span>
					</label>

					<input class="input input-box" id="start_time" name="start_time" required="" type="time" value="">
				</div>
			</div>

			<div class="grid-col-xs-12 grid-col-sm-6 display-none">
				<div class="input-wrapper input-wrapper-vertical input-wrapper-block p ">
					<label for="duration" class="input input-label">
					Duration <span class="color-error field-required">*</span>
					</label>

					<input class="input input-box input-inline" id="duration" name="duration" pattern="(?:[0-1]?\d:[0-5]\d|\d+)" placeholder="00:00" size="2" title="m or hh:mm" type="text" value="" witdth="70px"> 
				</div>
			</div>
			
			<div class="grid-col-xs-12 grid-col-sm-6">
				<div class="input-wrapper input-wrapper-vertical input-wrapper-block p">
					<span class="input input-label">Status</span>

					<label for="billable">
					<input class="input input-inline" id="billable" name="billable" type="checkbox" value="y">
						&nbsp;
						Billable?
					</label>

					<label for="completed" class="display-none">
					<input class="input input-inline" id="completed" name="completed" type="checkbox" value="y">
						&nbsp;
						Completed?
					</label>
				</div>
			</div>
			

			<div class="grid-col-xs-12 grid-col-sm-6 grid-col-md-8">
				<div id="billable-time-wrap" class="input-wrapper input-wrapper-vertical input-wrapper-block p">

					<label for="billable_time" class="input input-label">
						Billable Time <span class="color-error field-required">*</span>
					</label>

					<input class="input input-box input-inline" id="billable_time" name="billable_time" pattern="(?:[0-1]?\d:[0-5]\d|\d+)" placeholder="00:00" size="2" title="m or h:mm" type="text" value="" witdth="70px">
				</div>
			
			</div>

			<div class="grid-col-xs-12 grid-col-sm-6">
			
				<div class="input-wrapper input-wrapper-vertical input-wrapper-block p">
					<label class="input input-label" for="due_date">Due Date</label>
					<input class="input input-box" id="due_date" min="2020-07-01" name="due_date" type="date" value="">
				</div>
			
			</div>
		</div>


		<p class="text-align-right">

			<input multiple id="log-attachments" name="log-attachments" type="file" class="display-none" />
			<button class="btn btn-neutral-outline" onclick="REPLACEtriggerLogAttachments(event)">Attach File</button>
			<button class="btn btn-primary">
				<!-- @if start timer  -->
					Start Timer
				<!-- @if add entry -->
					<!-- Add Entry -->
			</button>
		</p>

	</form>
</div>