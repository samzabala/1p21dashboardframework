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

	<div class="board" id="board-track-time" data-modal-max-width="800px" data-modal-title="Add new Entry">
		<form action="" class="add-new-timer">
		<div class="p input-wrapper input-wrapper-vertical input-wrapper-block">
			<label class="input-label">
				Client <span class="color-error field-required">*</span>
			</label>
			<div class="position-relative flex-xs">

				<input type="text" id="client-name" name="client-name" class="input input-single-line" value="um" data-toggle="dropdown">
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
		</form>
	</div>