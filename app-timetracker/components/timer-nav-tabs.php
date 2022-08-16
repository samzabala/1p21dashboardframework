<ul class="tabs">
	<!-- @NOTE
		li	
			.classes to add:
				'active' => 'if current template matches the contained list item'
			
		-->

		<li class="<?= FWAPPS_TEMPLATE == 'time' || FWAPPS_TEMPLATE == 'timer' || FWAPPS_TEMPLATE == 'home' ? 'active' : ''; ?>">
			<a href="<?= app_create_link(array('template'=>'time')); ?>">Time</a>
		</li>
		<li class="<?= FWAPPS_TEMPLATE == 'my-tasks' ? 'active' : ''; ?>">
			<a href="<?= app_create_link(array('template'=>'my-tasks')); ?>">My Tasks</a>
		</li>
		<li class="<?= FWAPPS_TEMPLATE == 'favorites' ? 'active' : ''; ?>">
			<a href="<?= app_create_link(array('template'=>'favorites')); ?>">Favorites</a>
		</li>
	</ul>