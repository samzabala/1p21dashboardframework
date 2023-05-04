<?php
$defs = array(
	//@param post - type of single achuchuchu
	'post' => 'task', //project,client,note,whatever
);

$args = app_parse_args($data,$defs);
?>


<!-- @TODO finalize apporpriate or remove uneeded conditional statement here -->
<?php if($args['post'] == 'task' || $args['post'] == 'project'): ?>
<div class="module"
	data-grid-area-md="auto / side"
>
	<div class="module-content no-padding-y">

		<!-- TIME TRACKING + ACC HEADER -->
			<div class="h5 no-margin-y">
				<div class="grid grid-flex grid-compact grid-constricted-y justify-content-space-between align-items-center">
					<div class="grid-col">
						<h5 class="input input-label">Time Tracking</h5>
					</div>
					<div class="grid-col">
					
						<?php if($args['post'] == 'task'): ?>
							<a href="#"  data-toggle="modal" data-modal-title="REPLACwith<?=$args['post'];?>Title" class="btn btn-primary-outline btn-small">Time <i class="symbol symbol-plus"></i></a>
							<?php app_get_component('components/modal-workflow-edit-task-time') ?>
							&nbsp;
						<?php endif; ?>

						<a href="#<?=$args['post'] ?>-side-time-onpage" data-toggle="accordion" class="border-color-transparent btn no-padding-x btn-no-shadow btn-small color-neutral color-primary-hover open"><i class="symbol symbol-arrow-down symbol-arrow-up-toggle"></i></a>
					</div>
				</div>
			</div>

	
		<!-- ACC -->
			<div id="<?=$args['post'] ?>-side-time-onpage" class="accordion open" data-accordion-change-hash="false">
				<br>
				<!-- WATCH + Alert FEEDBACK -->
				<?php if($args['post'] == 'task'): ?>

					<!-- 
						@if mtime from modal-workflow-edit-task-time was added
						@NOTE: can be in alert-sticy component without `size` argument instead if executable
					-->
						<?php /*app_get_component('components/alert','function',false,array(
							'type'		=> 'success',
							'size'		=> 'small',
							'content'	=> 'Time entry for task has been added'
						));*/ ?>

					<!-- WATCH -->
						<!-- @NOTE
						
						
							Classes to add
							.toolbar
								if timer is running AND it matches current task => `theme-inverse background-gradient-225`
								
								if timer is running AND it doesnt match currently viewed task => `disabled`

								timer is not running => ``
						-->
						<div class="toolbar toolbar-horizontal toolbar-block justify-content-space-between p">

							<div class="toolbar-tile flex-1-1">
								<span class="lead no-margin-y inline-flex">
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

							
					
					
				<?php endif; ?>



				<!-- TIME LOGGED + ESTIMATE -->
					<div class="switch p switch-idle">

						<div class="switch-off pointer-reference position-relative">

							<div class="grid grid-flex grid-compact grid-fixed grid-constricted">
								<div class="grid-col-xs-6">
									<p class="<?=$args['post']?>-time-logged no-margin">
										<span class="REPLACE">6h 9m</span>
									</p>
									<p class="font-size-small color-neutral">
										Time Logged
									</p>
								</div>


								<div class="grid-col-xs-6" data-toggle="switch-on">
									<p class="<?=$args['post']?>-time-estimate no-margin">
										<span class="REPLACE">9h 6m</span>
										
										<span class="only-hover color-primary">
											<i class="symbol symbol-pencil"></i>
										</span>
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
							
						</div>
						<form class="switch-on">
							<!-- @HIDDEN INPUT TYPES HERE -->
							<div class="input-wrapper input-wrapper-horizontal input-wrapper-block p">
								<label class="input input-label flex-1-0" for="<?=$args['post']?>-time-estimate" class="no-margin-y flex-1-0">Time Estimated</label>

								<div class="input-group input-group-horizontal">

									<input type="text" name="<?=$args['post']?>-time-estimate" size="5" id="<?=$args['post']?>-time-estimate" class="input input-box" placeholder="00:00">

									<button type="submit" class="btn btn-primary btn-symbol" data-toggle="switch-off">
										<i class="symbol symbol-check"></i>
									</button>
								</div>
							</div>
						</form>
					</div>
					

				
			</div>
	</div>
</div>

<?php endif; ?>