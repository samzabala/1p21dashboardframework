<ul class="tabs">
<!-- @NOTE
	li	
		.classes to add:
			'active' => 'if current template matches the contained list item'
		
	-->

	<li class="<?= FWAPPS_TEMPLATE == 'task-detail' ? 'active' : ''; ?>">
		<a href="<?= app_create_link(array('template'=> 'task-detail')); ?>">Details</a>
	</li>
	<li class="<?= FWAPPS_TEMPLATE == 'task-detail-time' ? 'active' : ''; ?>">
		<a href="<?= app_create_link(array('template'=>'task-detail-time')); ?>">Time</a>
	</li>
</ul>