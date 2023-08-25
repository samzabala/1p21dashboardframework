<!-- 
    @NOTE: will be the landing page when the timer is not running
 -->
<div id="timetracker-logs" class="timetracker-offset-wrapper margin-bottom">
    <div class="
        background-gradient-45-from-secondary-to-primary
        timetracker-offset-block radius-large-bottom theme-inverse padding-small text-align-center">
			<!-- @if successful entry -->
				<?php if(FWAPPS_TEMPLATE == 'timer-success'): ?>
					<p class="lead no-margin-bottom">Your time was added!</p>
				<?php endif; ?>
			<h4 class="margin-top-small">Select an existing task below</h4>
    </div>
    <div class="timetracker-offset-adjacent">
        <div class="container padding-x">

				<?php app_get_component('components/module-tasks','',false,array(
					'title' => 'Recently Worked On'
				)); ?>
                
        </div>
    </div>
    
</div>