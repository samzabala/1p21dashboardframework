<div id="timetracker-favorites" class="timetracker-offset-wrapper">
    <!-- @NOTE div
        classes to add
        `background-gradient-45-from-secondary-to-primary` => if timer is not active AND no task is actively selected
        `background-gradient-tt-active` => if timer is not active AND a task is actively selected
    -->
    <div class="
        background-gradient-45-from-secondary-to-primary
        radius-large-bottom theme-inverse padding-large-y">
        <div class="container text-align-center">

            <div class="padding-large-top">
                <div class="lead">
				
					<span class="REPLACE">Float Everything Left</span>
				</div>
        
                <p class="no-margin-y font-weight-600">
                    <span class="REPLACE">ace-attorney.com</span>
                    |
                    <span class="REPLACE">Wright & Co. Law</span>
                </p>
            </div>



        </div>
	</div>
	<div class="padding-y">
		<?php app_get_component('components/grid-stats'); ?>
	</div>
    <div class="timetracker-offset-adjacent ">
		<div class="padding-x">
			<!-- @if has logs for tasks -->
				<?php app_get_component('components/module-sub-entries','',false,array(
					'title' => 'Time Logs for This Task',
				)); ?>

				<div class="text-align-center padding-large-bottom">
					<a href="<?= app_create_link(array('template' => 'tasks')) ?>" class="btn btn-large btn-accent-outline">Go Back</a>
				</div>

		</div>
    </div>
    
</div>