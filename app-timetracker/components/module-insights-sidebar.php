<div class="module" data-grid-area="sidebar">
	<div class="module-content padding-large-y text-align-center align-self-stretch">
			
		<!-- @if can edit -->

			<div class="flex-grid flex-grid-fixed text-align-center">
				<div class="flex-col-xs-12">
					<span class="thumbnail pointer-reference" >
						<!-- @IF has profile imahe -->
							<div class="thumbnail-image">
								<img class="profile-image" src="<?=FWAPPS_ROOT_URL ?>/placeholder/profiles/team-dev-nadia.jpg" alt="">
							</div>

						<!-- @ELSE -->
							<span class="thumbnail-text profile-name-initial">
								<span class="REPLACE">PN</span>
							</span>

						<!-- @if online -->
							<span class="badge badge-success"></span>

					</span>

					<h2 class="no-margin-bottom color-inherit text-leading-compact">
						<span class="REPLACE">Nadia Rodriguez</span>
					</h2>
					<p>
						<!-- @if has title -->
							<span class="REPLACE">Web Developer</span>
						<!-- @else -->
							<span class="color-neutral font-style-italic">Not Set</span>
					</p>
					<a href="<?= app_create_link(array('template' => 'profile' )); ?>" class="btn btn-theme-outline btn-round btn-small">Edit</a>
				</div>
				<div class="flex-col-xs-6 flex-col-md-12">
					<span class="btn btn-symbol btn-small btn-error-glassy font-size-large btn-round">
						<i class="symbol symbol-map"></i>
					</span>
					<p class="no-margin-bottom margin-small-top">
						<strong>Location</strong><br>
						<!-- @if has location -->
							<span class="REPLACE">Planet Earth, Milky Way</span>
						<!-- @else -->
							<span class="color-neutral font-style-italic">Not Set</span>
					</p>

				</div>
				<div class="flex-col-xs-6 flex-col-md-12">
					<span class="btn btn-symbol btn-small btn-primary-glassy font-size-large btn-round">
						<i class="symbol symbol-time"></i>
					</span>
					<p class="no-margin-bottom margin-small-top">
						<strong>Typical Hours</strong><br>
						<!-- @if has location -->
							<span class="REPLACE">M-F 9am-5pm PST</span>
						<!-- @else -->
							<span class="color-neutral font-style-italic">Not Available</span>
					</p>

				</div>
				<div class="flex-col-xs-6 flex-col-md-12">
					<span class="btn btn-symbol btn-small btn-success-glassy font-size-large btn-round">
						<i class="symbol symbol-calendar"></i>
					</span>
					<p class="no-margin-bottom margin-small-top">
						<strong>Project Availability</strong><br>
						<!-- @if has hours -->
							Available
						<!-- @else -->
							Not Available
					</p>

				</div>
				<div class="flex-col-xs-6 flex-col-md-12">
					<span class="btn btn-symbol btn-small btn-caution-glassy font-size-large btn-round">
						<i class="symbol symbol-sun"></i>
					</span>
					<p class="no-margin-bottom margin-small-top">
						<strong>Upcoming Vacations</strong><br>
						<!-- @if has hours -->
							<span class="REPLACE">Feb 22, 1986 – Feb 25, 1986</span>
						<!-- @else -->
							<span class="color-neutral font-style-italic">Not Available</span>
					</p>

				</div>
			</div>
	</div>
</div>