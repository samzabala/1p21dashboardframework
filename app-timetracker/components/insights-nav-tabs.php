<ul class="tabs">
	<!-- @NOTE
		li	
			.classes to add:
				'active' => 'if current template matches the contained list item'
			
		-->

		<li class="<?= FWAPPS_TEMPLATE == 'insights-your-analytics' ? 'active' : ''; ?>">
			<a href="<?= app_create_link(array('template'=>'insights-your-analytics')); ?>">Your Analytics</a>
		</li>
		<li class="<?= FWAPPS_TEMPLATE == 'insights-compare' ? 'active' : ''; ?>">
			<a href="<?= app_create_link(array('template'=>'insights-compare')); ?>">Compare</a>
		</li>
		<li class="<?= FWAPPS_TEMPLATE == 'insights-team' ? 'active' : ''; ?>">
			<a href="<?= app_create_link(array('template'=>'insights-team')); ?>">Team</a>
		</li>
	</ul>