<!-- Tabs -->
<?php app_get_component('components/timer-nav-tabs') ?>

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
	'task_status' => 'inprogress',
)) ?>