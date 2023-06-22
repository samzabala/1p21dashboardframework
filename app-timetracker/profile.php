
<div id="timetracker-heading" class="flex-grid justify-content-space-between align-items-center">
	<div class="flex-col-xs-12">
		<h1 class="no-margin">
			Edit Profile
		</h1>
	</div>
</div>

<form id="timetracker-profile" class="module module-expanded">
	

	<div class="module-content padding-large-y">
		
		<!-- Overview -->
			<div class="module module-expanded margin-large-bottom">
				<div class="module-content padding-large">
					<div class="flex-grid align-items-center ">
						<div class="flex-child flex-0-0">

							<!-- 
								@classes to add
								`` => if no profile image available
								'background-transparent' => if profile image available
							-->
							<span class="thumbnail pointer-reference" >
								<!-- @IF has profile imahe -->
									<div class="thumbnail-image">
										<img class="profile-image" src="<?=FWAPPS_ROOT_URL ?>/placeholder/profiles/team-dev-nadia.jpg" alt="">
									</div>

								<!-- @ELSE -->
									<span class="thumbnail-text profile-name-initial">
										<span class="REPLACE">PN</span>
									</span>


								<a href="" class="btn btn-small btn-symbol btn-theme btn-round only-hover margin-auto-left" data-toggle-modal-default>
									<i class="symbol symbol-pencil"></i>
								</a>
								<div data-modal-title="Upload Profile Image" class="modal modal-default font-size-normalize">

									<div class="input-wrapper input-wrapper-block input-wrapper-vertical p">
										<label for="profile-image" class="sr-only">Upload Image</label>
										<input id="profile-image" name="" type="file" class="input input-single-line">
									</div>
									<div class="text-align-right">
										<a href="#" data-toggle-modal-default-close class="btn btn-theme">Apply</a>
										<span class="spacer">&nbsp;</span>
										<a href="#" data-toggle-modal-default-close class="btn btn-neutral-glassy">Cancel</a>
									</div>
								</div>

							</span>
						</div>
						<div class="flex-child flex-1-1">
							<h1 class="no-margin-y">
								<span class="REPLACE">Nadia Rodriguez</span>
							</h1>
							<p>
								<!-- @if has title -->
									<span class="REPLACE">Web Developer</span>
								<!-- @else -->
									<span class="color-neutral font-style-italic">Not Set</span>
							</p>
							<!-- @if has location -->
							<p class="no-margin-bottom">
								<i class="symbol symbol-map"></i>
								<span class="REPLACE">Planet Earth, Milky Way</span>
							</p>
						</div>
						<div class="flex-child flex-1-0 text-align-right">
							<a href="<?= app_create_link(array('template' => 'insights')) ?>" class="btn btn-block-mobile btn-theme-outline">View My stats</a>
						</div>
					</div>
				</div>
			</div>

			<div class="flex-grid flex-grid-fixed flex-grid-expanded flex-grid-no-gutter-y margin-large-bottom">
				<div class="flex-col-xs-12 flex-col-md-6">
					<div class="input-wrapper input-wrapper-block input-wrapper-vertical p">
						<label for="profile-first-name" class="input-label font-weight-700">First Name</label>
						<input id="profile-first-name" name="" type="text" placeholder="John" class="input input-single-line">
					</div>
				</div>
				<div class="flex-col-xs-12 flex-col-md-6">
					<div class="input-wrapper input-wrapper-block input-wrapper-vertical p">
						<label for="profile-last-name" class="input-label font-weight-700">Last Name</label>
						<input id="profile-last-name" name="" type="text" placeholder="Doe" class="input input-single-line">
					</div>
				</div>
				<div class="flex-col-xs-12 flex-col-md-6">
					<div class="input-wrapper input-wrapper-block input-wrapper-vertical p">
						<label for="profile-email" class="input-label font-weight-700">Email</label>
						<input id="profile-email" name="" type="email" placeholder="email@domain.com" class="input input-single-line">
					</div>
				</div>
				<div class="flex-col-xs-12 flex-col-md-6">
					<div class="input-wrapper input-wrapper-block input-wrapper-vertical p">
						<label for="profile-phone" class="input-label font-weight-700">Phone</label>
						<input id="profile-phone" name="" type="tel" placeholder="John" class="input input-single-line">
					</div>
				</div>
			</div>

			<div class="margin-large-bottom">
				<h1>Change Password</h1>
				<div class="input-wrapper input-wrapper-block input-wrapper-vertical p">
					<label for="profile-password" class="input-label font-weight-700">New Password</label>
					<input id="profile-password" name="" type="password" placeholder="********" class="input input-single-line">
				</div>
				<div class="input-wrapper input-wrapper-block input-wrapper-vertical p">
					<label for="profile-password" class="input-label font-weight-700">New Password Confirmation</label>
					<input id="profile-password" name="" type="password" placeholder="********" class="input input-single-line">
				</div>
			</div>

			<div>
				<button class="btn btn-theme btn-block-mobile">Save</button>
				<span class="spacer">&nbsp;</span>
				<button class="btn btn-link color-inherit font-weight-400 btn-block-mobile" data-toggle-modal-default>Delete Account</button>
				<div class="modal modal-default" data-modal-title="Delete Account" data-modal-width="450px">
					<p>Are you sure? this will disable your account.</p>

				<a href="#" data-toggle-modal-default-close class="btn btn-theme btn-block margin-small-bottom">Cancel</a>
				<button class="btn btn-error btn-block">Yes, delete account</button>
				</div>
			</div>
	</div>
	
</form>