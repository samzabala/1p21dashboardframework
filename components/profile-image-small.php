

 <a class="thumbnail thumbnail-small" href="<?=app_create_link(array('template'=>'profile')) ?>">
	<!-- @IF has profile imahe -->
	<div class="thumbnail-image">

		<img class="profile-image" data-src="<?=FWAPPS_ROOT_URL ?>/placeholder/profiles/team-des-jenn.jpg" alt="">
	</div>

	<!-- @ELSE -->
	<span class="thumbnail-text profile-name-initial">
		<span class="REPLACE">PN</span>
	</span>
</a>