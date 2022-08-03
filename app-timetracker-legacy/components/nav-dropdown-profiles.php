
<ul class="dropdown">
	
	<!-- @LOOP li -->
	<li>
		<a href="<?=app_create_link( array('template'=>'profile') ); ?>"><span class="profile-name"><span class="REPLACE">Profile Name</span></span></a>
	</li>
	

	<!-- @PLACEHOLDER -->
		<?php for($i=1; $i<=10; $i++){ ?>
			<li>
				<a href="<?=app_create_link( array('template'=>'profile') ); ?>"><span class="profile-name"><span class="REPLACE">Profile loop <?= $i * $i + 10 * 13 / 5 + 6 * $i; ?> </span></span></a>
			</li>
		<?php } ?>



	<li>
		<a href="<?=app_create_link( array('template'=>'profiles') ); ?>">View All+</a>
	</li>
</ul>