<div class="grid grid-flex">
	<div class="grid-col grid-col-xs-12 grid-col-md-6">
		<div class="h2 font-weight-300 no-margin-y">
			Team Members
		</div>
	</div>
	<div class="grid-col grid-col-xs-12 grid-col-md-6 text-align-right">
		<a href="<?=app_create_link(array('template'=> 'team-member-new')) ?>" class="btn btn-theme btn-block-mobile">Add new</a>
	</div>
</div>
<div class="module">
	<div class="module-content no-padding">

		<!-- @if has jobs -->
			<div class="table-wrapper">
				<table class="timetracker-table">
					<tr class="background-transparent">
						<th class="background-transparent no-border-top">First Name</th>
						<th class="background-transparent no-border-top">Last Name</th>
						<th class="background-transparent no-border-top">Email</th>
						<th class="background-transparent no-border-top">Job Title</th>
						<th class="background-transparent no-border-top text-align-center">Is Active?</th>
						<th class="background-transparent no-border-top text-align-center">Is Superuser?</th>
						<th class="background-transparent no-border-top text-align-center">Viewers</th>
						<th class="background-transparent no-border-top text-align-right">Actions</th>
					</tr>
					<!-- @loop tr -->
						<tr>

							<td class="only-mobile">
								<a href="<?=app_create_link(array('template' => 'team-member-edit')) ?>">
									<span class="REPLACE">First Name</span> <span class="REPLACE">Last Name</span>
								</a>
							</td>
							<td class="hide-mobile">
								<a href="<?=app_create_link(array('template' => 'team-member-edit')) ?>">
									<span class="REPLACE">First Name</span>
								</a>
							</td>
							<td class="hide-mobile">
								<a href="<?=app_create_link(array('template' => 'team-member-edit')) ?>">
									<span class="REPLACE">Last Name</span>
								</a>
							</td>
							
							<td class="timetracker-td timetracker-td-w timetracker-td-w-300">
								<h6 class="hide-nonmobile no-margin-top">Email</h6>
								<a href="<?=app_create_link(array('template' => 'team-member-edit')) ?>">
									<span class="REPLACE">name@email.com</span>
								</a>
							</td>
							<td class="timetracker-td timetracker-td-w timetracker-td-w-200">
								<h6 class="hide-nonmobile no-margin-top">Job Title</h6>
								<!-- @if has job title -->
									<a href="<?= app_create_link(array('template' => 'job-edit')) ?>" class="REPLACE">A Job Title</a>
								<!-- @else -->
									<span class="font-style-italic color-neutral">Not Set</span>
							</td>
							
							<td class="text-align-center">
								<h6 class="hide-nonmobile no-margin-top">Is Active?</h6>
								<!-- @if active -->
									<i class="symbol symbol-check color-success"></i>
								<!-- @else -->
									<span class="disabled color-neutral">&ndash;</span>
							</td>
							
							<td class="text-align-center">
								<h6 class="hide-nonmobile no-margin-top">Is Superuser?</h6>
								<!-- @if superuser -->
									<i class="symbol symbol-check color-success"></i>
								<!-- @else -->
									<span class="disabled color-neutral">&ndash;</span>
							</td>
							
							<td class="text-align-center">
								<h6 class="hide-nonmobile no-margin-top">Viewers</h6>
								<span class="REPLACE">69</span>
							</td>
							<td class="timetracker-td-actions text-align-right">
								<form action="">
									<button href="" class="btn btn-link btn-symbol" title="Delete">
										<i class="symbol symbol-delete"></i>
									</button>
								</form>
							</td>
						</tr>

							<!-- @PLACEHOLDER: Delete when ready -->
								<?php for($i = 0; $i < 6; $i++): ?>

									<tr>

										<td class="only-mobile">
											<a href="<?=app_create_link(array('template' => 'team-member-edit')) ?>">
												<span class="REPLACE">Phoenix</span> <span class="REPLACE">Wright</span>
											</a>
										</td>
										<td class="hide-mobile">
											<a href="<?=app_create_link(array('template' => 'team-member-edit')) ?>">
												<span class="REPLACE">Phoenix</span>
											</a>
										</td>
										<td class="hide-mobile">
											<a href="<?=app_create_link(array('template' => 'team-member-edit')) ?>">
												<span class="REPLACE">Wright</span>
											</a>
										</td>
										
										<td class="timetracker-td timetracker-td-w timetracker-td-w-300">
											<h6 class="hide-nonmobile no-margin-top">Email</h6>
											<a href="<?=app_create_link(array('template' => 'team-member-edit')) ?>">
												<span class="REPLACE">hello@ace-attorney.com</span>
											</a>
										</td>
										<td class="timetracker-td timetracker-td-w timetracker-td-w-200">
											<h6 class="hide-nonmobile no-margin-top">Job Title</h6>
											<a href="<?= app_create_link(array('template' => 'job-edit')) ?>" class="REPLACE">Lawyer</a>
										</td>
										
										<td class="text-align-center">
											<h6 class="hide-nonmobile no-margin-top">Is Active?</h6>
												<i class="symbol symbol-check color-success"></i>
										</td>
										
										<td class="text-align-center">
											<h6 class="hide-nonmobile no-margin-top">Is Superuser?</h6>
												<i class="symbol symbol-check color-success"></i>
										</td>
										
										<td class="text-align-center">
											<h6 class="hide-nonmobile no-margin-top">Viewers</h6>
											<span class="REPLACE">0</span>
										</td>
										<td class="timetracker-td-actions text-align-right">
											<form action="">
												<button href="" class="btn btn-link btn-symbol" title="Delete">
													<i class="symbol symbol-delete"></i>
												</button>
											</form>
										</td>
									</tr>

									<tr>

										<td class="only-mobile">
											<a href="<?=app_create_link(array('template' => 'team-member-edit')) ?>">
												<span class="REPLACE">Maya</span> <span class="REPLACE">Fey</span>
											</a>
										</td>
										<td class="hide-mobile">
											<a href="<?=app_create_link(array('template' => 'team-member-edit')) ?>">
												<span class="REPLACE">Maya</span>
											</a>
										</td>
										<td class="hide-mobile">
											<a href="<?=app_create_link(array('template' => 'team-member-edit')) ?>">
												<span class="REPLACE">Fey</span>
											</a>
										</td>
										
										<td class="timetracker-td timetracker-td-w timetracker-td-w-300">
											<h6 class="hide-nonmobile no-margin-top">Email</h6>
											<a href="<?=app_create_link(array('template' => 'team-member-edit')) ?>">
												<span class="REPLACE">hello@ace-attorney.com</span>
											</a>
										</td>
										<td class="timetracker-td timetracker-td-w timetracker-td-w-200">
											<h6 class="hide-nonmobile no-margin-top">Job Title</h6>
											<a href="<?= app_create_link(array('template' => 'job-edit')) ?>" class="REPLACE">Can talk to ghosts</a>
										</td>
										
										<td class="text-align-center">
											<h6 class="hide-nonmobile no-margin-top">Is Active?</h6>
												<i class="symbol symbol-check color-success"></i>
										</td>
										
										<td class="text-align-center">
											<h6 class="hide-nonmobile no-margin-top">Is Superuser?</h6>
												<span class="disabled color-neutral">&ndash;</span>
										</td>
										
										<td class="text-align-center">
											<h6 class="hide-nonmobile no-margin-top">Viewers</h6>
											<span class="REPLACE">1</span>
										</td>
										<td class="timetracker-td-actions text-align-right">
											<form action="">
												<button href="" class="btn btn-link btn-symbol" title="Delete">
													<i class="symbol symbol-delete"></i>
												</button>
											</form>
										</td>
									</tr>

									<tr>

										<td class="only-mobile">
											<a href="<?=app_create_link(array('template' => 'team-member-edit')) ?>">
												<span class="REPLACE">Mia</span> <span class="REPLACE">Fey</span>
											</a>
										</td>
										<td class="hide-mobile">
											<a href="<?=app_create_link(array('template' => 'team-member-edit')) ?>">
												<span class="REPLACE">Mia</span>
											</a>
										</td>
										<td class="hide-mobile">
											<a href="<?=app_create_link(array('template' => 'team-member-edit')) ?>">
												<span class="REPLACE">Fey</span>
											</a>
										</td>
										
										<td class="timetracker-td timetracker-td-w timetracker-td-w-300">
											<h6 class="hide-nonmobile no-margin-top">Email</h6>
											<a href="<?=app_create_link(array('template' => 'team-member-edit')) ?>">
												<span class="REPLACE">hello@og-ace-attorney.com</span>
											</a>
										</td>
										<td class="timetracker-td timetracker-td-w timetracker-td-w-200">
											<h6 class="hide-nonmobile no-margin-top">Job Title</h6>
											<a href="<?= app_create_link(array('template' => 'job-edit')) ?>" class="REPLACE">Ghost</a>
										</td>
										
										<td class="text-align-center">
											<h6 class="hide-nonmobile no-margin-top">Is Active?</h6>
												<span class="disabled color-neutral">&ndash;</span>
										</td>
										
										<td class="text-align-center">
											<h6 class="hide-nonmobile no-margin-top">Is Superuser?</h6>
												<span class="disabled color-neutral">&ndash;</span>
										</td>
										
										<td class="text-align-center">
											<h6 class="hide-nonmobile no-margin-top">Viewers</h6>
											<span class="REPLACE">0</span>
										</td>
										<td class="timetracker-td-actions text-align-right">
											<form action="">
												<button href="" class="btn btn-link btn-symbol" title="Delete">
													<i class="symbol symbol-delete"></i>
												</button>
											</form>
										</td>
									</tr>

									<tr>

										<td class="only-mobile">
											<a href="<?=app_create_link(array('template' => 'team-member-edit')) ?>">
												<span class="REPLACE">Miles</span> <span class="REPLACE">Edgeworth</span>
											</a>
										</td>
										<td class="hide-mobile">
											<a href="<?=app_create_link(array('template' => 'team-member-edit')) ?>">
												<span class="REPLACE">Miles</span>
											</a>
										</td>
										<td class="hide-mobile">
											<a href="<?=app_create_link(array('template' => 'team-member-edit')) ?>">
												<span class="REPLACE">Edgeworth</span>
											</a>
										</td>
										
										<td class="timetracker-td timetracker-td-w timetracker-td-w-300">
											<h6 class="hide-nonmobile no-margin-top">Email</h6>
											<a href="<?=app_create_link(array('template' => 'team-member-edit')) ?>">
												<span class="REPLACE">hello@other-ace-attorney.com</span>
											</a>
										</td>
										<td class="timetracker-td timetracker-td-w timetracker-td-w-200">
											<h6 class="hide-nonmobile no-margin-top">Job Title</h6>
											<a href="<?= app_create_link(array('template' => 'job-edit')) ?>" class="REPLACE">Can't talk to ghosts</a>
										</td>
										
										<td class="text-align-center">
											<h6 class="hide-nonmobile no-margin-top">Is Active?</h6>
												<i class="symbol symbol-check color-success"></i>
										</td>
										
										<td class="text-align-center">
											<h6 class="hide-nonmobile no-margin-top">Is Superuser?</h6>
												<span class="disabled color-neutral">&ndash;</span>
										</td>
										
										<td class="text-align-center">
											<h6 class="hide-nonmobile no-margin-top">Viewers</h6>
											<span class="REPLACE">544836</span>
										</td>
										<td class="timetracker-td-actions text-align-right">
											<form action="">
												<button href="" class="btn btn-link btn-symbol" title="Delete">
													<i class="symbol symbol-delete"></i>
												</button>
											</form>
										</td>
									</tr>
								<?php endfor; ?>

				</table>
			</div>
		<!-- @else -->
			<div class="font-style-italic color-neutral padding">
				<span class="hide-mobile">&nbsp;</span>o Jobs set up yet.<span class="hide-nonmobile color-neutral">No</span>
			</div>
	</div>
</div>