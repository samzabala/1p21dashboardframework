<!-- 
@NOTE
not sure if user feedback with interaction would be enough but just in case, we can use this component to create toaster like notifications with this component. Reword as needed

 -->
<div id="dashboard-dynamic-alert-container" class="position-fixed">

<!-- @if there are alerts based on changes or whatevs on the following fields (based on ui titles/labels):
	&lt;that one field&gt; => ...


-->
<!-- Basic successful message -->
	<?php app_get_component('components/alert','function',false,array(
		'type' => 'success',
		'content' => '&lt;that one field&gt; is saved'
	)); ?>




<!-- @if Time Tracking from modal-workflow-edit-task-time was added-->
	<?php app_get_component('components/alert','function',false,array(
		'type'		=> 'success',
		'content'	=> 'Time entry for task has been added'
	)); ?>





	<?php app_get_component('components/alert','function',false,array(
		'type' => 'caution',
		'content' => 'Invalid input for &lt;that one field&gt;'
	)); ?>

	<?php app_get_component('components/alert','function',false,array(
		'type' => 'error',
		'content' => 'An error occured. please try again later.'
	)); ?>
</div>