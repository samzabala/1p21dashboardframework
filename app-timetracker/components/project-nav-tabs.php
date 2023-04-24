<ul class="tabs">
<!-- @NOTE
	li	
		.classes to add:
			'active' => 'if current template matches the contained list item'
		
	-->

	<li class="<?= FWAPPS_TEMPLATE == 'project-detail' ? 'active' : ''; ?>">
		<a href="<?= app_create_link(array('template'=> 'project-detail')); ?>">Details</a>
	</li>
	<li class="<?= FWAPPS_TEMPLATE == 'project-detail-tasks' ? 'active' : ''; ?>">
		<a href="<?= app_create_link(array('template'=>'project-detail-tasks')); ?>">Tasks</a>
	</li>
</ul>