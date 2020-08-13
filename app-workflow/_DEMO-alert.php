<h2>Types of alerts</h2>
<h3> <code>`reminder`</code>: for reminder alerts</h3>
<?php app_get_component('components/alert','function',false,array(
		'type'		=> 'reminder',
		'content'	=> 'Due within 3 days on 10/10/20 <a href="'.app_create_link(array('template'=>'project')).'">Project Title</a>'
	)); ?>

<h3> <code>`error`</code>: for fatal error user feedback</h3>
	<?php app_get_component('components/alert','function',false,array(
		'type'		=> 'error',
		'content'	=> 'Something went wrong. The time tracker does not support this function.'
	)); ?>

<h3> <code>`caution`</code>: for non-fatal error user feedback</h3>
	<?php app_get_component('components/alert','function',false,array(
		'type'		=> 'caution',
		'content'	=> 'End time cannot be in the future. Please fix your time.'
	)); ?>

<h3> <code>`success`</code>: for important and successful user feedback</h3>
	<?php app_get_component('components/alert','function',false,array(
		'type'		=> 'success',
		'content'	=> 'Entering your time was successful! Way to go!'
	)); ?>

<h3> <code>`info`</code>: for minor things/ default alert type</h3>
	<?php app_get_component('components/alert','function',false,array(
		'content'	=> 'Here\'s a neutral software note'
	)); ?>


<h2>Sizes</h2>
<h3> <code>`small`</code>: like the instance in `module-side-time-view` component</h3>
<!-- @if mtime from modal-workflow-edit-task-time was added-->
<?php app_get_component('components/alert','function',false,array(
	'type'		=> 'success',
	'size'		=> 'small',
	'content'	=> 'Time entry for task has been added'
)); ?>

<h3> <code>`large`</code>: we don't have an instance like this yet, but maybe someday</h3>
<!-- @if mtime from modal-workflow-edit-task-time was added-->
<?php app_get_component('components/alert','function',false,array(
	'type'		=> 'info',
	'size'		=> 'large',
	'content'	=> '"I think you’ve got several options. They’re all terrible…but you have them." - Chris Traeger'
)); ?>