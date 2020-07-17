<div class="module">
	<div class="module-content">


		<!-- TIME TRACKING + ACC HEADER -->
			<div class="h5 no-margin-y">
				<div class="flex-grid flex-grid-compact flex-grid-no-gutter-y justify-content-space-between align-items-center">
					<div class="flex-child">
						<h5 class="no-margin-y">Time Tracking</h5>
					</div>
					<div class="flex-child">
						<a href="#"  data-toggle="modal" data-modal-title="REPLACwithTaskTitle" class="btn btn-primary-outline btn-small">Time <i class="symbol symbol-plus"></i></a>
						<?php app_get_component('components/modal-task-time') ?>
						&nbsp;
						<a href="#task-side-time-view" data-toggle="accordion" class="border-color-transparent btn no-padding-x btn-no-shadow btn-small color-neutral color-primary-hover open"><i class="symbol symbol-arrow-down symbol-arrow-up-toggle"></i></a>
					</div>
				</div>
			</div>

	
		<!-- ACC -->
			<div id="task-side-time-view" class="accordion open" data-accordion-change-hash="false">
				<br>

				<!-- @if mtime from modal-task-time was added-->
					<div class="alert alert-success alert-small p">
						<span class="alert-close" data-toggle="alert-close"><i class="symbol symbol-close"></i></span>
						Time entry for task has been added
					</div>
				

				<!-- WATCH -->
					<!-- @NOTE
					
					
						Classes to add
						.toolbar
							if timer is running => `theme-inverse background-gradient-225`
								if timer is running AND it doesnt match currently viewed task => `disabled`
							timer is not running => ``
					-->
					<div class="toolbar toolbar-horizontal toolbar-block justify-content-space-between p">

						<div class="toolbar-tile flex-1-1">
							<span class="special-secondary no-margin-y inline-flex">
								<span class="task-time-logged-hours">
									<span class="REPLACE">00</span>
								</span>

								<span>:</span>

								<span class="task-time-logged-minutes">
									<span class="REPLACE">00</span>
								</span>


								<span>:</span>

								<span class="task-time-logged-minutes">
									<span class="REPLACE">00</span>
								</span>
							</span>	
						</div>

						<div class="toolbar-tile">
							<!-- play butt..on -->
							<!-- @NOTE:
								classes to add:
									.watch-btn.workflow-toggle-play 
										when timer is running => `display-none`
										when timer is in default state/stopped => ``

							-->
							<a href="#"  class="watch-btn workflow-toggle-play btn-small btn btn-symbol  well well-compact btn-secondary background-gradient-45 background-image-none-hover background-primary-hover
								">
								<i class="symbol symbol-play"></i>
							</a>

							


							<!-- pause butt..on -->
							<!-- @NOTE:

							button commented out so it doesn't scare ppl. make sure to comment back in and modify when ready :)

							classes to add:
								.watch-btn.workflow-toggle-pause
									when timer is running => ``
									when timer is in default state/stopped  => `display-none`
							-->
							<!--
							<a href="#"class="watch-btn workflow-toggle-pause btn-small btn btn-symbol  well well-compact btn-secondary">
								<i class="symbol symbol-pause"></i>
							</a>
							-->


						</div>

						<div class="toolbar-tile">


							<!-- stop butt..on -->
							<!-- @NOTE:
							classes to add:
								.watch-btn.workflow-toggle-stop
									when timer is running => `btn-theme-outline`
									when timer is in default state/stopped  => `btn-neutral`
					
							-->
							<a href="#"class="watch-btn workflow-toggle-stop btn-small btn btn-symbol well well-compact
							btn-neutral
							">
								<i class="symbol symbol-stop"></i>
							</a>
						</div>
					</div>

					<!-- @if timer is currently running and does not match currently viewed task -->
						<p class="color-secondary">
							Timer is tracking time for <a href="#task-REPLACEwithPostTypeIDOfActiveTimer-view" data-toggle="board" class="color-inherit">another task</a>.
							<br><a href="#" class="font-weight-700 color-inherit">Pause active task timer <i class="symbol symbol-pause"></i></a>.
						</p>

						
				<!-- TIME LOGGED + ESTIMATE -->
					<div class="flex-grid flex-grid-compact flex-grid-fixed">
						<div class="flex-col-xs-6">
							<p class="task-time-logged no-margin">
								<span class="REPLACE">6h 9m</span>
							</p>
							<p class="font-size-small color-neutral">
								Time Logged
							</p>
						</div>


						<div class="flex-col-xs-6">
							<p class="task-time-estimate no-margin">
								<span class="REPLACE">9h 6m</span>
							</p>
							<p class="font-size-small color-neutral">
								Time Estimated
							</p>
						</div>
					</div>


					<div class="p progress progress-small">

						<!--
							@NOTE
								.progress-bar
									classes to add
										if time logged exceeds esitmate => `progress-secondary`
										if time logged is below estimate => `progress-primary`

									@dynamic
										style width of propgress bar by percentage of logged to estimate
						-->
						<p class="progress-bar
						progress-bar-primary"
						style="width: 50%;"
						>
						</p>
					</div>

				<!-- @PLACEHOLDER DEMO OF TOOLBAR STYLES -->
													<div>
														<pre>DEMO SECTION DO NOT COPY</pre>

														<h3>State a 1: timer not running</h3>

														<!-- @NOTE
														
														
															Classes to add
															.toolbar
																if timer is running => `theme-inverse background-gradient-225`
																timer is not running => ``
														-->
														<div class="toolbar toolbar-horizontal toolbar-block justify-content-space-between p">

															<div class="toolbar-tile flex-1-1">
																<span class="special-secondary no-margin-y inline-flex">
																	<span class="task-time-logged-hours">
																		<span class="REPLACE">00</span>
																	</span>

																	<span>:</span>

																	<span class="task-time-logged-minutes">
																		<span class="REPLACE">00</span>
																	</span>


																	<span>:</span>

																	<span class="task-time-logged-minutes">
																		<span class="REPLACE">00</span>
																	</span>
																</span>	
															</div>

															<div class="toolbar-tile">
																<!-- play butt..on -->
																<!-- @NOTE:
																	classes to add:
																		.watch-btn.workflow-toggle-play 
																			when timer is running => `display-none`
																			when timer is in default state/stopped => ``

																-->
																<a href="#"  class="watch-btn workflow-toggle-play btn-small btn btn-symbol  well well-compact btn-secondary background-gradient-45 background-image-none-hover background-primary-hover
																	">
																	<i class="symbol symbol-play"></i>
																</a>

																


																<!-- pause butt..on -->
																<!-- @NOTE:

																button commented out so it doesn't scare ppl. make sure to comment back in and modify when ready :)

																classes to add:
																	.watch-btn.workflow-toggle-pause
																		when timer is running => ``
																		when timer is in default state/stopped  => `display-none`
																-->
																
																<a href="#"class="watch-btn workflow-toggle-pause btn-small btn btn-symbol  well well-compact btn-secondary
																display-none">
																	<i class="symbol symbol-pause"></i>
																</a>


															</div>

															<div class="toolbar-tile">


																<!-- stop butt..on -->
																<!-- @NOTE:
																classes to add:
																	.watch-btn.workflow-toggle-stop
																		when timer is running => `btn-theme-outline`
																		when timer is in default state/stopped  => `btn-neutral`

																-->
																<a href="#"class="watch-btn workflow-toggle-stop btn-small btn btn-symbol well well-compact
																btn-neutral
																">
																	<i class="symbol symbol-stop"></i>
																</a>
															</div>
														</div>

														<h3>State a 2: timer running and matches currently opened task</h3>

														<!-- @NOTE
														
														
															Classes to add
															.toolbar
																if timer is running => `theme-inverse background-gradient-225`
																timer is not running => ``
														-->
														<div class="toolbar toolbar-horizontal toolbar-block justify-content-space-between p theme-inverse background-gradient-225">

															<div class="toolbar-tile flex-1-1">
																<span class="special-secondary no-margin-y inline-flex">
																	<span class="task-time-logged-hours">
																		<span class="REPLACE">00</span>
																	</span>

																	<span>:</span>

																	<span class="task-time-logged-minutes">
																		<span class="REPLACE">00</span>
																	</span>


																	<span>:</span>

																	<span class="task-time-logged-minutes">
																		<span class="REPLACE">00</span>
																	</span>
																</span>	
															</div>

															<div class="toolbar-tile">
																<!-- play butt..on -->
																<!-- @NOTE:
																	classes to add:
																		.watch-btn.workflow-toggle-play 
																			when timer is running => `display-none`
																			when timer is in default state/stopped => ``

																-->
																<a href="#"  class="watch-btn workflow-toggle-play btn-small btn btn-symbol  well well-compact btn-secondary background-gradient-45 background-image-none-hover background-primary-hover
																	display-none">
																	<i class="symbol symbol-play"></i>
																</a>

																


																<!-- pause butt..on -->
																<!-- @NOTE:

																button commented out so it doesn't scare ppl. make sure to comment back in and modify when ready :)

																classes to add:
																	.watch-btn.workflow-toggle-pause
																		when timer is running => ``
																		when timer is in default state/stopped  => `display-none`
																-->
																
																<a href="#"class="watch-btn workflow-toggle-pause btn-small btn btn-symbol  well well-compact btn-secondary ">
																	<i class="symbol symbol-pause"></i>
																</a>


															</div>

															<div class="toolbar-tile">


																<!-- stop butt..on -->
																<!-- @NOTE:
																classes to add:
																	.watch-btn.workflow-toggle-stop
																		when timer is running => `btn-theme-outline`
																		when timer is in default state/stopped  => `btn-neutral`

																-->
																<a href="#"class="watch-btn workflow-toggle-stop btn-small btn btn-symbol well well-compact
																btn-theme-outline
																">
																	<i class="symbol symbol-stop"></i>
																</a>
															</div>
														</div>

														<h3>State b: timer running and does not match currently opened task</h3>

														<!-- @NOTE
														
														
															Classes to add
															.toolbar
																if timer is running => `theme-inverse background-gradient-225`
																timer is not running => ``
														-->
														<div class="disabled toolbar toolbar-horizontal toolbar-block justify-content-space-between p theme-inverse background-gradient-225">

															<div class="toolbar-tile flex-1-1">
																<span class="special-secondary no-margin-y inline-flex">
																	<span class="task-time-logged-hours">
																		<span class="REPLACE">00</span>
																	</span>

																	<span>:</span>

																	<span class="task-time-logged-minutes">
																		<span class="REPLACE">00</span>
																	</span>


																	<span>:</span>

																	<span class="task-time-logged-minutes">
																		<span class="REPLACE">00</span>
																	</span>
																</span>	
															</div>

															<div class="toolbar-tile">
																<!-- play butt..on -->
																<!-- @NOTE:
																	classes to add:
																		.watch-btn.workflow-toggle-play 
																			when timer is running => `display-none`
																			when timer is in default state/stopped => ``

																-->
																<a href="#"  class="watch-btn workflow-toggle-play btn-small btn btn-symbol  well well-compact btn-secondary background-gradient-45 background-image-none-hover background-primary-hover
																	display-none">
																	<i class="symbol symbol-play"></i>
																</a>

																


																<!-- pause butt..on -->
																<!-- @NOTE:

																button commented out so it doesn't scare ppl. make sure to comment back in and modify when ready :)

																classes to add:
																	.watch-btn.workflow-toggle-pause
																		when timer is running => ``
																		when timer is in default state/stopped  => `display-none`
																-->
																
																<a href="#"class="watch-btn workflow-toggle-pause btn-small btn btn-symbol  well well-compact btn-secondary ">
																	<i class="symbol symbol-pause"></i>
																</a>


															</div>

															<div class="toolbar-tile">


																<!-- stop butt..on -->
																<!-- @NOTE:
																classes to add:
																	.watch-btn.workflow-toggle-stop
																		when timer is running => `btn-theme-outline`
																		when timer is in default state/stopped  => `btn-neutral`

																-->
																<a href="#"class="watch-btn workflow-toggle-stop btn-small btn btn-symbol well well-compact
																btn-theme-outline
																">
																	<i class="symbol symbol-stop"></i>
																</a>
															</div>
														</div>

														<!-- @if timer is currently running and does not match currently viewed task -->
														<p class="color-secondary">
															Timer is tracking time for <a href="#task-REPLACEwithPostTypeIDOfActiveTimer-view" data-toggle="board" class="color-inherit">another task</a>.
															<br><a href="#" class="font-weight-700 color-inherit">Pause active task timer <i class="symbol symbol-pause"></i></a>.
														</p>

														

														<h3>State c: timer entry was added from the modal successfully</h3>

														<div class="alert alert-success alert-small p">
															<span class="alert-close" data-toggle="alert-close"><i class="symbol symbol-close"></i></span>
															Time entry for task has been added
														</div>
														
														<!-- @NOTE


															Classes to add
															.toolbar
																if timer is running => `theme-inverse background-gradient-225`
																timer is not running => ``
														-->
														<div class="toolbar toolbar-horizontal toolbar-block justify-content-space-between p">

															<div class="toolbar-tile flex-1-1">
																<span class="special-secondary no-margin-y inline-flex">
																	<span class="task-time-logged-hours">
																		<span class="REPLACE">00</span>
																	</span>

																	<span>:</span>

																	<span class="task-time-logged-minutes">
																		<span class="REPLACE">00</span>
																	</span>


																	<span>:</span>

																	<span class="task-time-logged-minutes">
																		<span class="REPLACE">00</span>
																	</span>
																</span>	
															</div>

															<div class="toolbar-tile">
																<!-- play butt..on -->
																<!-- @NOTE:
																	classes to add:
																		.watch-btn.workflow-toggle-play 
																			when timer is running => `display-none`
																			when timer is in default state/stopped => ``

																-->
																<a href="#"  class="watch-btn workflow-toggle-play btn-small btn btn-symbol  well well-compact btn-secondary background-gradient-45 background-image-none-hover background-primary-hover
																	">
																	<i class="symbol symbol-play"></i>
																</a>

																


																<!-- pause butt..on -->
																<!-- @NOTE:

																button commented out so it doesn't scare ppl. make sure to comment back in and modify when ready :)

																classes to add:
																	.watch-btn.workflow-toggle-pause
																		when timer is running => ``
																		when timer is in default state/stopped  => `display-none`
																-->
																
																<a href="#"class="watch-btn workflow-toggle-pause btn-small btn btn-symbol  well well-compact btn-secondary
																display-none">
																	<i class="symbol symbol-pause"></i>
																</a>


															</div>

															<div class="toolbar-tile">


																<!-- stop butt..on -->
																<!-- @NOTE:
																classes to add:
																	.watch-btn.workflow-toggle-stop
																		when timer is running => `btn-theme-outline`
																		when timer is in default state/stopped  => `btn-neutral`

																-->
																<a href="#"class="watch-btn workflow-toggle-stop btn-small btn btn-symbol well well-compact
																btn-neutral
																">
																	<i class="symbol symbol-stop"></i>
																</a>
															</div>
														</div>



														<pre>END OF DEMO SECTION DO NOT COPY</pre>
													</div>
			</div>
	</div>
</div>