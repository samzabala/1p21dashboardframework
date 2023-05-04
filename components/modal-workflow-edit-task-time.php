<div class="modal" data-modal-width="880px">
	<!-- @if error occured -->
		<?php app_get_component('components/alert','function',false,array(
			'type'		=> 'caution',
			'content'	=> '<span class="REPLACE">Error message here</span>'
		)); ?>

	<form class="grid grid-flex grid-compact no-margin-bottom">
			
		<!-- @if modal is triggered from task board -->
			<input type="hidden" name="entry-task-id" />
			<input type="hidden" name="entry-project-id" />
			<input type="hidden" name="entry-client-id" />
			
			<div class="grid-col-xs-12 position-relative">
			<input type="hidden" name="eentry-time-category-id" />
				<div class="input-group input-block input-group-horizontal">
					<label class="input input-label" for="entry-time-category" >Task Category</label>
					<input name="entry-time-category" id="entry-time-category" type="text" class="input input-box" placeholder="Start time" data-toggle="dropdown">

				</div>


				<div data-dropdown-width="100%" class="dropdown dropdown-top-flush" style="width: 100%;">

						<!-- @PLACEHOLDER$. replace as needed -->
							<li>
								<a href="#" class="js-task-cat-opt" data-task-cat-id="11">
									AC Tasks Management
								</a>
							</li>

							<li>
								<a href="#" class="js-task-cat-opt" data-task-cat-id="13">
									Bugherds
								</a>
							</li>

							<li>
								<a href="#" class="js-task-cat-opt" data-task-cat-id="7">

									Client Website Development
								</a>
							</li>

							<li>
								<a href="#" class="js-task-cat-opt" data-task-cat-id="40">

									Email Inbox Management
								</a>
							</li>

							<li>
								<a href="#" class="js-task-cat-opt" data-task-cat-id="46">

									Internal Project Development
								</a>
							</li>

							<li>
								<a href="#" class="js-task-cat-opt" data-task-cat-id="26">

									Maintenance Tasks
								</a>
							</li>

							<li>
								<a href="#" class="js-task-cat-opt" data-task-cat-id="15">

									Meetings
								</a>
							</li>

							<li>
								<a href="#" class="js-task-cat-opt" data-task-cat-id="24">

									Research, Education &amp; Training
								</a>
							</li>

							<li>
							<a href="#" class="js-task-cat-opt" data-task-cat-id="51">

								Server Configuration
							</a>
							</li>

							<li>
							<a href="#" class="js-task-cat-opt" data-task-cat-id="37">

								Software Development
							</a>
							</li>
				</div>

			</div>

		<hr>
		

		<div class="grid-col-xs-12 grid-col-md-4">
			<div class="input-group input-block input-group-horizontal">
				<label class="input input-label" for="entry-time-start" >Start Time</label>
				<input name="entry-time-start" id="entry-time-start" type="time" class="input input-box" placeholder="Start time">
			</div>
		</div>
		<div class="grid-col-xs-12 grid-col-md-4">
			<div class="input-group input-block input-group-horizontal">
				<label class="input input-label" for="entry-time-duration" >Duration</label>
				<input name="entry-time-duration" id="entry-time-duration" type="text" class="input input-box" size="5" placeholder="00:00">
			</div>
		</div>
		<div class="grid-col-xs-12 grid-col-md-4">

				<label class="display-block" for="entry-time-billable" >
					<input name="entry-time-billable" id="entry-time-billable" type="checkbox" class="input input-inline">
					<span>Billable</span>
				</label>

				<label class="display-block" for="entry-time-completed" >
					<input name="entry-time-completed" id="entry-time-completed" type="checkbox" class="input input-inline">
					<span>Completed</span>
				</label>
		</div>
		<div class="grid-col-xs-12 grid-col-md-8">
			<div class="input-group input-block input-group-horizontal flex-0-0">
				<label class="input input-label" for="entry-time-date">Entry Date</label>
				<input name="entry-time-date" id="entry-time-date" type="date" class="input input-box">
			</div>
		</div>


		<!--
			.grid-col-xs-12.grid-col-md-6
			classes to add

				if [ name="entry-time-billable"] is not checked => `display-none``
		-->
		<div class="grid-col-xs-12 grid-col-md-4">
			<div class="input-wrapper input-wrapper-block input-wrapper-horizontal">
				<div class="input-group input-block input-group-horizontal">
					<label class="input input-label"  for="entry-time-billable-duration">Billable Time</label>
					<input name="entry-time-billable-duration" id="entry-time-billable-duration" type="text" class="input input-box" size="5" placeholder="00:00">
				</div>
			</div>
		</div>


		<div class="grid-col-xs-12 flex-1-0">
			<div class="input-wrapper input-wrapper-block input-wrapper-horizontal">
				<div class="input-group input-block input-group-horizontal">
					<textarea  name="entry-time-comment" id="entry-time-comment" type="text" class="input input-box input-box-multiline" >replace with tinymce</textarea>
				</div>
			</div>
		</div>

		<div class="grid-col-xs-12 flex-1-0 text-align-right">
			<button class="btn btn-neutral-outline" data-toggle="modal-close">Cancel</button>
			<button class="btn btn-primary" type="submit">Add Time</button>
		</div>


	</form>
</div>