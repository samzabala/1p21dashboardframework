
<div id="outreach-settings-heading" class="flex-grid justify-content-space-between align-items-center">
	<div class="flex-col-xs-12">
		<h1 class="no-margin">New Prospect List</h1>
	</div>
</div>
<div class="module module-expanded">
	<div class="module-content">
		
			<form action="">
	
				<div class="flex-grid flex-grid-fixed">
					<div class="flex-col-xs-12 flex-col-sm-7">
						<div class="input-wrapper input-wrapper-block input-wrapper-vertical">
							<label class="input-label" for="name">Name</label>
							<input type="text"  name="name" id="name" class=" input input-single-line" placeholder="Name">
						</div>
					</div>
					<div class="flex-col-xs-12 flex-col-sm-7">
						<label class="input-label" for="share_with">Share With</label>

						<ul class="list-group">
							<!-- @if has items -->
								<!-- @loop li -->
									<li>
										<div class="flex-xs align-items-center">
											<div class="flex-1-1">
												<div class="text-wrap-ellispis">
													<span class="REPLACE">First Name Last Name</span>
												</div>
											</div>
											<div class="flex-0-0">
												<a href="#" title="Delete">
													<i class="symbol symbol-close"></i>
												</a>
											</div>
										</div>
									</li>
										<!-- @PLACEHOLDER -->
										<?php for($i=1; $i<=4; $i++){ ?>

											<li>
												<div class="flex-xs align-items-center">
													<div class="flex-1-1">
														<div class="text-wrap-ellispis">
															<span class="REPLACE">First Name Last Name</span>
														</div>
													</div>
													<div class="flex-0-0">
														<a href="#" title="Delete">
															<i class="symbol symbol-close"></i>
														</a>
													</div>
												</div>
											</li>
										<?php } ?>

							<li class="no-border-bottom">
								<input type="text"  name="share_with" id="share_with" class=" input input-single-line input-block" placeholder="Share With" list="users">
								<datalist id="users">
									<option value="A User" />
									<option value="Another User" />
									<option value="Other User" />
								</datalist>
							</li>
						</ul>
					</div>
					<div class="flex-col-xs-12">
						<button class="btn btn-large btn-primary-gradient font-size-normalize">Create</button>
					</div>
				</div>
			</form>
	</div>
</div>