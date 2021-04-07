
<span class="thumbnail">
	<!-- @IF has profile imahe -->
	<div class="thumbnail-image">
		<img class="profile-image" src="<?=FWAPPS_ROOT_URL ?>/placeholder/profiles/team-des-jenn.jpg" alt="">
	</div>

	<!-- @ELSE -->
		<span class="thumbnail-text profile-name-initial">
			<span class="REPLACE">PN</span>
		</span>


	<!--
		@IF user is online 
			
	-->
	<?php if(FWAPPS_APP == 'dashboard'): ?>
		<span class="badge badge-success badge-large"></span>
	<?php endif; ?>

</span>