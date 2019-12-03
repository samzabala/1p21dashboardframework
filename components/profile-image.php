<!--
	@dynamic
	content:
		.profile-image
		.profile-name-initial

	@interactive .module-functions *
 -->

<a class="thumbnail" href="<?=DASHBOARD_ROOT_URL ?>?template=profile&env=<?=DASHBOARD_SLUG ?>">
	<!-- @if has profile imahe -->
	<img class="profile-image" data-src="#" alt="">

	<!-- @else -->
	<span class="thumbnail-text profile-name-initial">JA</span>
	<!--
		@dynamic
			class .badge-success
	-->
</a>