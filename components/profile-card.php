<!--
	@dynamic
	content:
		.profile-name-full,
		.profile-name-first,
		.profile-name-last,

	@interactive .module-functions *
 -->


<div class="module"
	<?php if(DASHBOARD_SLUG == 'production'): ?>
		data-grid-area-md="profile-card"
	<?php endif; ?>


	<?php if(DASHBOARD_SLUG == 'scoreboard'): ?>
		data-grid-area="profile-card"
	<?php endif; ?>
	>
		<div class="module-content text-align-center flex-justify-content-center flex-direction-column flex-xs flex-align-items-center">

			<!--
				@dynamic:
				classes:  .btn-success, .badge-success
				attr .thumbnail -> href
				.profile-name -> href
			-->

			<?php //app_get_component_part('components/profile-image'); ?>

			<a class="thumbnail" href="<?=DASHBOARD_ROOT_URL ?>?template=profile&env=<?=DASHBOARD_SLUG ?>">
				<!-- @if has profile imahe -->
				<img class="profile-image" data-src="#" alt="">

				<!-- @else -->
				<span class="thumbnail-text profile-name-initial">PH</span>
				<!--
					@dynamic
						class .badge-success
				-->
				<span class="badge badge-success"></span>
			</a>
			
			<p class="h2 font-weight-500">
				<a href="<?=DASHBOARD_ROOT_URL ?>?template=profile&env=<?=DASHBOARD_SLUG ?>" class="profile-name-full  color-inherit">Profile Name</a>
			</p>
			<p class="profile-title color-primary font-weight-700 text-transform-uppercase">Profile Title</p>
			<ul class="list-group no-margin-bottom flex-align-self-stretch">

				<!-- @if profile is man,des,dev -->
						<!-- 
							@dynamic
							content: .status-*-value
						-->
					<li class="flex-xs flex-justify-content-space-between">
						<span class="status-avg-time-label">
							Avg Time Days 
						</span>
						<strong class="status-avg-time-value">
							25
						</strong>
					</li>
					<li class="flex-xs flex-justify-content-space-between">
						<span class="status-current-projects-label">
							Current Projects 
						</span>
						<strong class="status-current-projects-value">
							25
						</strong>
					</li>
					<li class="flex-xs flex-justify-content-space-between">
						<span class="status-ytd-label">
							Projects YTD
						</span>
						<strong class="status-ytd-value">
							25
						</strong>
					</li>





				<!-- @if profil is seo -->
						<!-- 
							@dynamic
							content: .status-*-value
						-->
					<!-- <li class="flex-xs flex-justify-content-space-between">
						<span class="status-total-accounts-label">
							Total Accounts 
						</span>
						<strong class="status-total-accounts-value">
							18
						</strong>
					</li>
					<li class="flex-xs flex-justify-content-space-between">
						<span class="status-avg-hr-rank-label">
							Avg. HR Rank
						</span>
						<strong class="status-avg-hr-rank-value">
							20.6
						</strong>
					</li>
					<li class="flex-xs flex-justify-content-space-between">
						<span class="status-avg-rank-label">
							Avg. Rank
						</span>
						<strong class="status-avg-rank-value">
							14.1
						</strong>
					</li> -->



			</ul>
		</div>
</div>