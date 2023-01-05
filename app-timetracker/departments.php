<div class="flex-grid">
	<div class="flex-child flex-col-xs-12 flex-col-md-6">
		<div class="h2 font-weight-300 no-margin-y">
			Departments
		</div>
	</div>
	<div class="flex-child flex-col-xs-12 flex-col-md-6 text-align-right">
		<a href="<?=app_create_link(array('template'=> 'department-new')) ?>" class="btn btn-theme btn-block-mobile">Add new</a>
	</div>
</div>
<div class="module">
	<div class="module-content no-padding">

		<!-- @if has jobs -->
			<div class="table-wrapper">
				<table class="timetracker-table">
					<tr class="background-transparent">
						<th class="background-transparent no-border-top">Department</th>
						<th class="background-transparent no-border-top">Description</th>
						<th class="background-transparent no-border-top text-align-center">Jobs</th>
						<th class="background-transparent no-border-top text-align-center">Members</th>
						<th class="background-transparent no-border-top text-align-right">Actions</th>
					</tr>
					<!-- @loop tr -->
						<tr>
							<td class="hide-mobile">
								<a href="<?=app_create_link(array('template' => 'department-edit')) ?>">
									<span class="REPLACE">Department name</span>
								</a>
							</td>
							
							<td class="timetracker-td timetracker-td-w timetracker-td-w-300">
								<h6 class="hide-nonmobile no-margin-top">Description</h6>

								<!-- @if has description -->
									<div class="text-wrap-ellipsis">
										<span class="REPLACE">A description for ya boi</span>
									</div>
								<!-- @else -->
									<span class="font-style-italic color-neutral">Not Set</span>
							</td>

							<td class="text-align-center">
								<h5 class="hide-nonmobile no-margin-top">Jobs</h5>
								<span class="REPLACE">5</span>
							</td>

							<td class="text-align-center">
								<h5 class="hide-nonmobile no-margin-top">Members</h5>
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
										<td class="hide-mobile">
											<a href="<?=app_create_link(array('template' => 'department-edit')) ?>">
												<span class="REPLACE">Designa</span>
											</a>
										</td>
										
										<td class="timetracker-td timetracker-td-w timetracker-td-w-300">
											<h6 class="hide-nonmobile no-margin-top">Description</h6>

											<!-- @if has description -->
												<div class="text-wrap-ellipsis">
													<span class="REPLACE">We're no strangers to love You know the rules and so do I (do I) A full commitment's what I'm thinking of You wouldn't get this from any other guy I just wanna tell you how I'm feeling Gotta make you understand Never gonna give you up Never gonna let you down Never gonna run around and desert you Never gonna make you cry Never gonna say goodbye Never gonna tell a lie and hurt you We've known each other for so long Your heart's been aching, but you're too shy to say it (say it) Inside, we both know what's been going on (going on) We know the game and we're gonna play it And if you ask me how I'm feeling Don't tell me you're too blind to see Never gonna give you up Never gonna let you down Never gonna run around and desert you Never gonna make you cry Never gonna say goodbye Never gonna tell a lie and hurt you Never gonna give you up Never gonna let you down Never gonna run around and desert you Never gonna make you cry Never gonna say goodbye Never gonna tell a lie and hurt you We've known each other for so long Your heart's been aching, but you're too shy to say it (to say it) Inside, we both know what's been going on (going on) We know the game and we're gonna play it I just wanna tell you how I'm feeling Gotta make you understand Never gonna give you up Never gonna let you down Never gonna run around and desert you Never gonna make you cry Never gonna say goodbye Never gonna tell a lie and hurt you Never gonna give you up Never gonna let you down Never gonna run around and desert you Never gonna make you cry Never gonna say goodbye Never gonna tell a lie and hurt you Never gonna give you up Never gonna let you down Never gonna run around and desert you Never gonna make you cry Never gonna say goodbye Never gonna tell a lie and hurt you</span>
												</div>
										</td>

										<td class="text-align-center">
											<h5 class="hide-nonmobile no-margin-top">Jobs</h5>
											<span class="REPLACE">69</span>
										</td>

										<td class="text-align-center">
											<h5 class="hide-nonmobile no-margin-top">Members</h5>
											<span class="REPLACE">2</span>
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
									<td class="hide-mobile">
										<a href="<?=app_create_link(array('template' => 'department-edit')) ?>">
											<span class="REPLACE">Developa</span>
										</a>
									</td>
									
									<td class="timetracker-td timetracker-td-w timetracker-td-w-300">
										<h6 class="hide-nonmobile no-margin-top">Description</h6>

											<span class="font-style-italic color-neutral">Not Set</span>
									</td>

									<td class="text-align-center">
										<h5 class="hide-nonmobile no-margin-top">Jobs</h5>
										<span class="REPLACE">69</span>
									</td>

									<td class="text-align-center">
										<h5 class="hide-nonmobile no-margin-top">Members</h5>
										<span class="REPLACE">2</span>
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
				No Jobs set up yet.
			</div>
	</div>
</div>