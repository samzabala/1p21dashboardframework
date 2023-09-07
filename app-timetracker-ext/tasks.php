<div id="timetracker-logs" class="timetracker-offset-wrapper margin-bottom">
	 <!-- @NOTE div
        classes to add
        `background-gradient-45-from-secondary-to-primary` => if timer is not active AND no task is actively selected
        `background-gradient-tt-active` => if timer is not active AND a task is actively selected
    -->
    <div class="
        background-gradient-45-from-secondary-to-primary
        timetracker-offset-block radius-large-bottom theme-inverse padding text-align-center">
    </div>
    <div class="timetracker-offset-adjacent">
        <div class="container padding-x">
                <?php app_get_component('components/form-filter-log'); ?>

				<?php app_get_component('components/module-tasks','',false,array(
					'title' => 'Current Active Tasks'
				)); ?>
                
        </div>
    </div>
    
</div>