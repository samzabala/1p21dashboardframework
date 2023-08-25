<div id="timetracker-logs" class="timetracker-offset-wrapper background-gradient-45-from-secondary-to-primary">
    <div class="
        background-gradient-45-from-secondary-to-primary
		timetracker-offset-block padding-small-top padding-large-bottom">
		<div class="container">
			<div class="theme-inverse background-transparent">
				<div class="text-align-center">
					<h4>Please fill out the form fields below</h4>
				</div>
	
				<form action="">
	
					<div class="flex-grid flex-grid-constricted flex-grid-fixed margin-bottom color-theme font-weight-700">
		
						<!-- @if team member can add client -->
							<div class="flex-col-12">
								<?php app_get_component('components/input-task-client'); ?>
							</div>
		
						<!-- @if team member can add project -->
							<div class="flex-col-12">
								<?php app_get_component('components/input-task-project'); ?>
							</div>
		
						<!-- @if team member can add name -->
							<div class="flex-col-12">
								<?php app_get_component('components/input-task-name'); ?>
							</div>
		
						<!-- @if team member can add task category -->
							<div class="flex-col-12">
								<?php app_get_component('components/input-task-category'); ?>
							</div>
		
						<!-- @if team member can add task status -->
							<div class="flex-col-12">
								<?php app_get_component('components/input-task-status'); ?>
							</div>
		
					</div>
					<div class="text-align-center theme-default background-transparent margin-top">
	
						<!-- @DEMO only because front end demo will be ugly. use markup after instead -->
							<a href="<?= app_create_link(array('template' => 'timer')) ?>" class="btn btn-large btn-accent">Start Timer</a>
							
						<!-- <button class="btn btn-large btn-accent">Start Timer</button> -->
					</div>
				</form>
	
			</div>
		</div>
	</div>
</div>