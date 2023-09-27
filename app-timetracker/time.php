<!-- Tabs -->
<div class="flex-grid flex-grid-fixed align-items-center">
	<div class="flex-col-xs-12 flex-col-sm-8 flex-col-md-6">
		<?php app_get_component('components/timer-nav-tabs') ?>
	</div>
	<div class="flex-col-xs-12 flex-col-sm-4 flex-col-md-6 flex-md text-align-center text-decoration-line-under justify-content-flex-end">
		<a href="#m-manual-entry" data-toggle-modal-default class="color-neutral-dark text-decoration-underline color-theme-hover">Add Manual Entry +</a>
		<?php app_get_component('components/modal-manual-entry') ?>
	</div>
</div>

<!-- Timer -->
<?php app_get_component('components/module-time-timer') ?>

<!-- Overview -->
<?php app_get_component('components/module-time-overview') ?>

<!-- Logs -->
<?php app_get_component('components/module-logs') ?>




<!-- @PLACEHOLDER: Demo only: delete when ready -->


<h1>DO NOT COPY OVER - Demo: Timer when active</h1>
<?php app_get_component('components/module-time-timer','',false,array(
	'is_active' => true,
	'task_notes' => "But then everything was already reversed, which world would be the real world? Would it be the mirror world or this one? Maybe the reflection we see is real. Ever thought of that? Isn't that just freaking you out? I mean, seriously, isn't that just whack crap? I'm playin' with your mind, man. And you know what the weird part is? I'm not even high! Not a bit. Totally sober.",
	'task_name' => 'Float left everything',
	'task_project' => 'Ghost Stories American Dub',
	'task_client' => 'Not Eren Yeager',
	'task_category' => 'Dev',
	'task_status' => 'In Progress',
)) ?>