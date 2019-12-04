<!--
	@dynamic
	content:
		.profile-image
		.profile-name-initial

	attr
		data-src -> profile image
	@interactive .module-functions *
 -->

<a class="thumbnail" href="<?=DASHBOARD_ROOT_URL ?>?template=profile&env=<?=DASHBOARD_SLUG ?>">
	<!-- @if has profile imahe -->
		<!-- <img class="profile-image" data-src="<?=DASHBOARD_ROOT_URL ?>/REPLACE/profiles/team-des-jenn.jpg" alt=""> -->

	<!-- @else -->
		<span class="thumbnail-text profile-name-initial">
			<span class="REPLACE">PN</span>
		</span>


	<!--
		@dynamic
			class .badge-success
	-->

	<span class="badge badge-success"></span>
</a>