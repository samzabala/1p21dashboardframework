
	<a class="thumbnail" href="<?=DASHBOARD_ROOT_URL ?>?template=profile&env=<?=DASHBOARD_SLUG ?>">
		<!-- @IF has profile imahe -->
		<div class="thumbnail-image">
			<img class="profile-image" data-src="<?=DASHBOARD_ROOT_URL ?>/PLACEHOLDER/profiles/team-des-jenn.jpg" alt="">
		</div>

		<!-- @ELSE -->
			<span class="thumbnail-text profile-name-initial">
				<span class="REPLACE">PN</span>
			</span>


		<!--
			@DYNAMIC
				class .badge-success
		-->
		<span class="badge badge-success"></span>

	</a>
