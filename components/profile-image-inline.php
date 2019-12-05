<!--
	@dynamic
	content:
		.profile-image
		.profile-name-initial

	attr
		data-src -> profile image

	@interactive .module-functions *
 -->

 <a class="thumbnail thumbnail-small" href="<?=DASHBOARD_ROOT_URL ?>?template=profile&env=<?=DASHBOARD_SLUG ?>">
	<!-- @if has profile imahe -->
	<div class="thumbnail-image">

		<img class="profile-image" data-src="<?=DASHBOARD_ROOT_URL ?>/REPLACEs/profiles/team-des-jenn.jpg" alt="">
	</div>

	<!-- @else -->
	<span class="thumbnail-text profile-name-initial">
		<span class="REPLACE">PN</span>
	</span>
	<!--
		@dynamic
			class .badge-success
	-->
</a>