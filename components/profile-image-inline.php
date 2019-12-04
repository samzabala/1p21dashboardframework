<!--
	@dynamic
	content:
		.profile-image
		.profile-name-initial

	attr
		data-src -> profile image

	@interactive .module-functions *
 -->

 <a class="thumbnail thumbnail-inline" href="<?=DASHBOARD_ROOT_URL ?>?template=profile&env=<?=DASHBOARD_SLUG ?>">
	<!-- @if has profile imahe -->
	<img class="profile-image" data-src="<?=DASHBOARD_ROOT_URL ?>/REPLACEs/profiles/team-des-jenn.jpg" alt="">

	<!-- @else -->
	<span class="thumbnail-text profile-name-initial">
		<span class="REPLACE">PN</span>
	</span>
	<!--
		@dynamic
			class .badge-success
	-->
</a>