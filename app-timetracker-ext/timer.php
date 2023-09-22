<!-- 
    @NOTE: will be the landing page when the timer is running
 -->
<div id="timetracker-home" class="timetracker-offset-wrapper">
	<form action="" class="margin-bottom">

		<!-- @NOTE div
			classes to add
			`background-gradient-45-from-secondary-to-primary` => if timer is not active AND no task is actively selected
			`background-gradient-tt-active` => if timer is not active AND a task is actively selected
		-->
		<div class="
			background-gradient-45-from-secondary-to-primary
			radius-large-bottom theme-inverse padding-large-top">
			<div class="container">
			
			
				<div class="timetracker-timer-wrapper padding-large-top padding-small-bottom margin-top text-align-center">
					<div class="flex-xs justify-content-center align-items-center margin-small-bottom">
						<!-- @hidden input fields here -->

        
                        <!-- 
                            @NOTE
                                button
                                    classes to add
                                    `active` => if favorite
        
                        -->
                        <a href="#" class="flex-0-0 font-size-large color-caution">
                            <i class="symbol symbol-star-stroke symbol-star-toggle"></i>
                        </a>

						<span class="margin-small-left flex-0-1">
							<span class="h4 no-margin-y text-wrap-ellipsis color-theme">
								<span class="REPLACE">Float everything to the left</span>
							</span>
						</span>

					</div>
					<div class="flex-grid flex-grid-no-gutter-y justify-content-center align-items-center">
						<div class="flex-child">

							<!-- @if current time is active and is shorter than 60 seconds -->
								<a href="#" class="timetracker-timer-toggle btn btn-theme btn-large btn-symbol btn-round well"
									data-toggle-modal-default
								>
									<i class="symbol symbol-square"></i>
								</a>
								<div class="theme-default modal modal-default" data-modal-width="315px">
									<div class="text-align-center">
										<div class="special-secondary color-caution no-margin"><i class="symbol symbol-caution-inverse"></i></div>
										<h2 class="margin-micro-top">Hold it!</h2>
										<p>
											Your current time entry is less than 1 minute long. Do you want to round it up to a whole minute or discard it?
										</p>
										<p class="margin-small-bottom">
											<button class="btn-block btn btn-large btn-accent">
												Round up and Add entry
											</button>
										</p>
										<p class="margin-small-bottom">
											<a href="#" class="btn-block btn btn-large btn-accent-outline">
												Discard entry
											</a>
										</p>
										<p class="margin-small-bottom">
											<button class="btn btn-large btn-link font-weight-500" data-toggle-modal-default-close>
												Go back
											</button>
										</p>
									</div>
								</div>

							<!--  @else -->


								<!-- @NOTE: original button but commented out for front end demo -->
								<!-- @classes to add
									`active` => when timer running
								-->
								<!-- 
								<button class="timetracker-timer-toggle btn btn-theme btn-large btn-symbol btn-round well"
									data-toggle-modal-default
								>
									<i class="symbol symbol-play symbol-square-toggle"></i>
								</button>
								-->
						</div>
						<div class="flex-child">
							<div class="special-secondary text-leading-whole inline-flex no-margin ">
								<div class="hours">
									<span class="REPLACE">00</span>
								</div>
								:<div class="minutes">
									<span class="REPLACE">00</span>
								</div>
								:<div class="seconds">
									<span class="REPLACE">00</span>
								</div>
							</div>
						</div>
					</div>
					<div class="padding-y">
						<p class="h5 no-margin-y color-theme">
							<span class="REPLACE">ace-attorney.com</span>
						</p>
						<p class="no-margin-y">
							<span class="REPLACE">Wright & Co Law</span>
						</p>
					</div>
				</div>

			</div>
			<div class="border-style-solid-top border-width-thin-top border-color-neutral-lightest padding">
				<div class="flex-grid flex-grid-compact flex-grid-no-gutter-y">
					<div class="flex-col-6">
						<label for="task_category" class="sr-only"></label>
						<input name="task_category" type="text" class="input input-single-line input-block background-transparent border-color-theme input-round" placeholder="Task Category" list="categories" />
						<datalist id="categories">
							<!-- @if has input value -->
								<option data-value="REPLACEWithInputValue" ref="createNew">Create new Category `REPLACEWithInputValue`</option>

							<!-- @loop option -->
								<option data-value="REPLACEWithTaskCategory">REPLACEWithTaskCategory</option>
										
								<!-- @PLACEHOLDER. delete when ready -->
											<option data-value="SEO">SEO</optioon>
											<option data-value="Design">Design</optioon>
											<option data-value="Dev">Dev</optioon>
											<option data-value="Meeting">Meeting</optioon>
											<option data-value="Other stuff I can't think of at the moment">Other stuff I can't think of at the moment</optioon>
						</datalist>
					</div>
					<div class="flex-col-6">
						<label for="task_status" class="sr-only"></label>
						<select name="task_status" class="input input-select input-block background-transparent border-color-theme input-round">
							<option value="">Task Status</option>

							<!-- @PLACEHOLDER. Delete when ready -->
								<option value="Backlog">Backlog</optioon>
								<option value="In Progress">In Progress</optioon>
								<option value="Review">Review</optioon>
								<option value="Blocked">Blocked</optioon>
								<option value="Completed">Completed</optioon>
						</select>
					</div>
				</div>
			</div>
		</div>
		<div class="timetracker-offset-adjacent">
			<div class="container">
				<div class="padding-y">
					<label for="task_notes" class="h5 no-margin-top margin-small-bottom">Task Notes</label>
					<p class="lead no-margin-y">
						<textarea name="task_notes" rows="4"class="input input-blend input-block" placeholder="Start typing here..."></textarea>
					</p>
				</div>
				
			</div>
		</div>
	</form>

	<!-- @if timer is not active -->
		<div class="timetracker-stats background-background">
			<div class="background-primary-alpha-1">
				<?php app_get_component('components/grid-stats'); ?>
			</div>
		</div>
    
</div>

<!-- @DEMO only. do not Copy -->
	<h1>Demo: Original state</h1>
	<div id="timetracker-home" class="timetracker-offset-wrapper">
		<form action="" class="margin-bottom">

			<!-- @NOTE div
				classes to add
				`background-gradient-45-from-secondary-to-primary` => if timer is not active AND no task is actively selected
				`background-gradient-tt-active` => if timer is not active AND a task is actively selected
			-->
			<div class="
				background-gradient-45-from-secondary-to-primary
				radius-large-bottom theme-inverse padding-large-top">
				<div class="container">
				
				
					<div class="timetracker-timer-wrapper padding-large-top padding-small-bottom margin-top text-align-center">
						<div class="flex-xs justify-content-center align-items-center margin-small-bottom">
							<!-- @hidden input fields here -->

			
							<!-- 
								@NOTE
									button
										classes to add
										`active` => if favorite
			
							-->
							<a href="#" class="flex-0-0 font-size-large color-caution">
								<i class="symbol symbol-star-stroke symbol-star-toggle"></i>
							</a>

							<span class="margin-small-left flex-0-1">
								<span class="h4 no-margin-y text-wrap-ellipsis color-theme">
									<span class="REPLACE">Float everything to the left</span>
								</span>
							</span>

						</div>
						<div class="flex-grid flex-grid-no-gutter-y justify-content-center align-items-center">
							<div class="flex-child">
									<button class="timetracker-timer-toggle btn btn-theme btn-large btn-symbol btn-round well"
										data-toggle-modal-default
									>
										<i class="symbol symbol-play symbol-square-toggle"></i>
									</button>
							</div>
							<div class="flex-child">
								<div class="special-secondary text-leading-whole inline-flex no-margin ">
									<div class="hours">
										<span class="REPLACE">00</span>
									</div>
									:<div class="minutes">
										<span class="REPLACE">00</span>
									</div>
									:<div class="seconds">
										<span class="REPLACE">00</span>
									</div>
								</div>
							</div>
						</div>
						<div class="padding-y">
							<p class="h5 no-margin-y color-theme">
								<span class="REPLACE">ace-attorney.com</span>
							</p>
							<p class="no-margin-y">
								<span class="REPLACE">Wright & Co Law</span>
							</p>
						</div>
					</div>

				</div>
				<div class="border-style-solid-top border-width-thin-top border-color-neutral-lightest padding">
					<div class="flex-grid flex-grid-compact flex-grid-no-gutter-y">
						<div class="flex-col-6">
							<label for="task_category" class="sr-only"></label>
							<input name="task_category" type="text" class="input input-single-line input-block background-transparent border-color-theme input-round" placeholder="Task Category" list="categories" />
							<datalist id="categories">
								<!-- @if has input value -->
									<option data-value="REPLACEWithInputValue" ref="createNew">Create new Category `REPLACEWithInputValue`</option>

								<!-- @loop option -->
									<option data-value="REPLACEWithTaskCategory">REPLACEWithTaskCategory</option>
											
									<!-- @PLACEHOLDER. delete when ready -->
												<option data-value="SEO">SEO</optioon>
												<option data-value="Design">Design</optioon>
												<option data-value="Dev">Dev</optioon>
												<option data-value="Meeting">Meeting</optioon>
												<option data-value="Other stuff I can't think of at the moment">Other stuff I can't think of at the moment</optioon>
							</datalist>
						</div>
						<div class="flex-col-6">
							<label for="task_status" class="sr-only"></label>
							<select name="task_status" class="input input-select input-block background-transparent border-color-theme input-round">
								<option value="">Task Status</option>

								<!-- @PLACEHOLDER. Delete when ready -->
									<option value="Backlog">Backlog</optioon>
									<option value="In Progress">In Progress</optioon>
									<option value="Review">Review</optioon>
									<option value="Blocked">Blocked</optioon>
									<option value="Completed">Completed</optioon>
							</select>
						</div>
					</div>
				</div>
			</div>
			<div class="timetracker-offset-adjacent">
				<div class="container">
					<div class="padding-y">
						<label for="task_notes" class="h5 no-margin-top margin-small-bottom">Task Notes</label>
						<p class="lead no-margin-y">
							<textarea name="task_notes" rows="4"class="input input-blend input-block" placeholder="Start typing here..."></textarea>
						</p>
					</div>
					
				</div>
			</div>
		</form>

		<!-- @if timer is not active -->
			<div class="timetracker-stats background-background">
				<div class="background-primary-alpha-1">
					<?php app_get_component('components/grid-stats'); ?>
				</div>
			</div>
		
	</div>
	<h1>Demo: Active + with filled in values</h1>


	<div id="timetracker-home" class="timetracker-offset-wrapper">
		<form action="" class="margin-bottom">

			<div class="
				background-gradient-tt-active
				radius-large-bottom theme-inverse padding-large-top">
				<div class="container">
				
				
					<div class="timetracker-timer-wrapper padding-large-top padding-small-bottom margin-top text-align-center">
						<div class="flex-xs justify-content-center align-items-center margin-small-bottom">
							<!-- @hidden input fields here -->

			
							<!-- 
								@NOTE
									button
										classes to add
										`active` => if favorite
			
							-->
							<a href="#" class="flex-0-0 font-size-large color-caution active">
								<i class="symbol symbol-star-stroke symbol-star-toggle"></i>
							</a>

							<span class="margin-small-left flex-0-1">
								<span class="h4 no-margin-y text-wrap-ellipsis color-theme">
									<span class="REPLACE">Float everything to the left</span>
								</span>
							</span>

						</div>
						<div class="flex-grid flex-grid-no-gutter-y justify-content-center align-items-center">
							<div class="flex-child">
								<a href="<?= app_create_link(array('template' => 'timer-success')) ?>"  class="timetracker-timer-toggle btn btn-theme btn-large btn-symbol btn-round well active"><i class="symbol symbol-play symbol-square-toggle"></i></a>
							</div>
							<div class="flex-child">
								<div class="special-secondary text-leading-whole inline-flex no-margin ">
									<div class="hours">
										<span class="REPLACE">04</span>
									</div>
									:<div class="minutes">
										<span class="REPLACE">20</span>
									</div>
									:<div class="seconds">
										<span class="REPLACE">09</span>
									</div>
								</div>
							</div>
						</div>
						<div class="padding-y">
							<p class="h5 no-margin-y color-theme">
								<span class="REPLACE">ace-attorney.com</span>
							</p>
							<p class="no-margin-y">
								<span class="REPLACE">Wright & Co Law</span>
							</p>
						</div>
					</div>

				</div>
				<div class="border-style-solid-top border-width-thin-top border-color-neutral-lightest padding">
					<div class="flex-grid flex-grid-compact flex-grid-no-gutter-y">
						<div class="flex-col-6">
							<label for="task_category" class="sr-only"></label>
							<input name="task_category" type="text" class="input input-single-line input-block background-transparent border-color-theme input-round" placeholder="Task Category" list="categories" value="Design" />
							<datalist id="categories">
								<!-- @if has input value -->
									<option data-value="REPLACEWithInputValue" ref="createNew">Create new Category `REPLACEWithInputValue`</option>

								<!-- @loop option -->
									<option data-value="REPLACEWithTaskCategory">REPLACEWithTaskCategory</option>
											
									<!-- @PLACEHOLDER. delete when ready -->
												<option data-value="SEO">SEO</optioon>
												<option data-value="Design">Design</optioon>
												<option data-value="Dev">Dev</optioon>
												<option data-value="Meeting">Meeting</optioon>
												<option data-value="Other stuff I can't think of at the moment">Other stuff I can't think of at the moment</optioon>
							</datalist>
						</div>
						<div class="flex-col-6">
							<label for="task_status" class="sr-only"></label>
							<select name="task_status" class="input input-select input-block background-transparent border-color-theme input-round">
								<option value="">Task Status</option>

								<!-- @PLACEHOLDER. Delete when ready -->
									<option value="Backlog">Backlog</optioon>
									<option value="In Progress" selected>In Progress</optioon>
									<option value="Review">Review</optioon>
									<option value="Blocked">Blocked</optioon>
									<option value="Completed">Completed</optioon>
							</select>
						</div>
					</div>
				</div>
			</div>
			<div class="timetracker-offset-adjacent">
				<div class="container">
					<div class="padding-y">
						<label for="task_notes" class="h5 no-margin-top margin-small-bottom">Task Notes</label>
						<p class="lead no-margin-y">
							<textarea name="task_notes" rows="4"class="input input-blend input-block" placeholder="Start typing here...">But then everything was already reversed, which world would be the real world? Would it be the mirror world or this one? Maybe the reflection we see is real. Ever thought of that? Isn't that just freaking you out? I mean, seriously, isn't that just whack crap? I'm playin' with your mind, man. And you know what the weird part is? I'm not even high! Not a bit. Totally sober.</textarea>
						</p>
					</div>
					
				</div>
			</div>
		</form>

	</div>