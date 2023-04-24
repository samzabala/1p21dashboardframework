<div class="h6 color-neutral-dark font-weight-400">

	<!--
		@NOTE
	

		classes to add:

		`font-weight-700` => if href matches current page
	-->


	
	<!-- All Clients -->
		<a class="color-inherit"
			href="<?= app_create_link(array('template' => 'clients')); ?>"
		>Clients</a>
		
	<!-- This client -->
		<span class="separator">&gt;</span>
		<a class="color-inherit
			<?= str_contains(FWAPPS_TEMPLATE,'client-detail') ? 'font-weight-700' : '' //PLACEHOLDER ?>
			"
			href="<?= app_create_link(array('template' => 'client-detail')); ?>"
		>
			<span class="REPLACE">Wright &amp; Co. Law</span>
		</a>

	<!-- This project -->
		<?php if(str_contains(FWAPPS_TEMPLATE,'client-detail') == false): ?>
			<span class="separator">&gt;</span>
			<a class="color-inherit
			<?= str_contains(FWAPPS_TEMPLATE,'project-detail') ? 'font-weight-700' : '' //PLACEHOLDER ?>"
				href="<?= app_create_link(array('template' => 'project-detail')); ?>"
			>
			<span class="REPLACE">ace-attorney.com (SEO)</span>
			</a>
		<?php endif; ?>

	<!-- This task -->
		<?php if(
			str_contains(FWAPPS_TEMPLATE,'client-detail') == false
			&& str_contains(FWAPPS_TEMPLATE,'project-detail') == false
		): ?>
			<span class="separator">&gt;</span>
			<a class="color-inherit
			<?=  str_contains(FWAPPS_TEMPLATE,'task-detail') ? 'font-weight-700' : '' //PLACEHOLDER ?>"
				href="<?= app_create_link(array('template' => 'task-detail')); ?>"
			>
			<span class="REPLACE">Bugherds</span>
			</a>
		<?php endif; ?>
</div>
