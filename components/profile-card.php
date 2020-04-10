
<div class="module  <?= (DASHBOARD_TEMPLATE == 'profiles') ? 'module-interactive' : ''; ?>"
	<?php if(DASHBOARD_SLUG == 'production' && DASHBOARD_TEMPLATE == 'profile'): ?>
		data-grid-area-md="profile-card"
	<?php endif; ?>


	<?php if(DASHBOARD_SLUG == 'scoreboard' && DASHBOARD_TEMPLATE == 'profile'): ?>
		data-grid-area="profile-card"
	<?php endif; ?>
	>
		<div class="module-content text-align-center justify-content-center flex-direction-column flex-xs align-items-center">


			<?php app_get_component('components/profile-image'); ?>
			
			<p class="h2 font-weight-500 no-margin-bottom">
				<a href="<?=DASHBOARD_ROOT_URL ?>?template=profile&env=<?=DASHBOARD_SLUG ?>" class="profile-name-full  color-inherit">
					<span class="REPLACE">Profile Name</span>
				</a>
			</p>

			<p class="profile-title color-primary font-weight-700 text-transform-uppercase">
				<span class="REPLACE">Profile Title</span>
			</p>
			
			<ul class="list-group no-margin-bottom align-self-stretch">

				<!-- @IF profile is man,des,dev -->
					<li class="flex-xs justify-content-space-between">
						<span class="status-avg-time-label">
							Avg Time Days 
						</span>
						<strong class="status-avg-time-value">
							<span class="REPLACE">25</span>
						</strong>
					</li>
					<li class="flex-xs justify-content-space-between">
						<span class="status-current-projects-label">
							Current Projects 
						</span>
						<strong class="status-current-projects-value">
							<span class="REPLACE">25</span>
						</strong>
					</li>
					<li class="flex-xs justify-content-space-between">
						<span class="status-ytd-label">
							Projects YTD
						</span>
						<strong class="status-ytd-value">
							<span class="REPLACE">285</span>
						</strong>
					</li>





				<!-- @IF profil is seo -->
					<!-- <li class="flex-xs justify-content-space-between">
						<span class="status-total-accounts-label">
							Total Accounts 
						</span>
						<strong class="status-total-accounts-value">
							<span class="REPLACE">18</span>
						</strong>
					</li>
					<li class="flex-xs justify-content-space-between">
						<span class="status-avg-hr-rank-label">
							Avg. HR Rank
						</span>
						<strong class="status-avg-hr-rank-value">
							<span class="REPLACE">20.6</span>
						</strong>
					</li>
					<li class="flex-xs justify-content-space-between">
						<span class="status-avg-rank-label">
							Avg. Rank
						</span>
						<strong class="status-avg-rank-value">
							<span class="REPLACE">14.1</span>
						</strong>
					</li> -->



			</ul>
		</div>
</div>