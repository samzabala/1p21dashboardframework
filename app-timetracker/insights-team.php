<!-- @PLACEHOLDER: Delete when ready -->
<?php $placeholder_users = array(
		array(
			'image' => FWAPPS_ROOT_URL.'/placeholder/profiles/team-des-jenn.jpg',
			'name' => 'Jenn Aquino',
			'title' => 'Associate Director'
		),

		array(
			'image' => FWAPPS_ROOT_URL.'/placeholder/profiles/team-dev-garrett.jpg',
			'name' => 'Garrett Cullen',
			'title' => 'Developer'
		),
		array(
			'image' => FWAPPS_ROOT_URL.'/placeholder/profiles/team-des-jenna.jpg',
			'name' => 'Jenna Edwards',
			'title' => 'Senior Designer'
		),
		array(
			'image' => FWAPPS_ROOT_URL.'/placeholder/profiles/team-des-stacy.jpg',
			'name' => 'Stacy Garcia',
			'title' => 'Designer'
		),

		array(
			'image' => FWAPPS_ROOT_URL.'/placeholder/files/shrek.jpg',
			'name' => 'Nikky Hwang',
			'title' => 'Developer'
		),

		array(
			'image' => FWAPPS_ROOT_URL.'/placeholder/profiles/team-des-chuy.jpg',
			'name' => 'Jesus Maldonado',
			'title' => 'Designer'
		),

		array(
			'image' => FWAPPS_ROOT_URL.'/placeholder/files/shrek.jpg',
			'name' => 'Paola Moreno',
			'title' => 'Designer'
		),

		array(
			'image' => FWAPPS_ROOT_URL.'/placeholder/profiles/team-dev-nadia.jpg',
			'name' => 'Nadia Rodriguez',
			'title' => 'Developer'
		),

		array(
			'image' => FWAPPS_ROOT_URL.'/placeholder/files/shrek.jpg',
			'name' => 'Mark Silva',
			'title' => 'Developer'
		),

		array(
			'image' => FWAPPS_ROOT_URL.'/placeholder/profiles/team-dev-sam.jpg',
			'name' => 'Sam Zabala',
			'title' => 'Developer'
		),

		array(
			'image' => FWAPPS_ROOT_URL.'/placeholder/files/donk.jpg',
			'name' => 'Shrek',
			'title' => 'Somebody'
		),
		array(
			'image' => FWAPPS_ROOT_URL.'/placeholder/files/wright.jpg',
			'name' => 'Phoenix Wright',
			'title' => 'Lawyer'
		),
		array(
			'image' => FWAPPS_ROOT_URL.'/placeholder/files/wright.jpg',
			'name' => 'Pigeon Wrong',
			'title' => 'Anti-Lawyer'
		),
		array(
			'image' => FWAPPS_ROOT_URL.'/placeholder/files/shrek.jpg',
			'name' => 'Miles Edgeworth',
			'title' => 'Alpha Prosecutor or something'
		),
		array(
			'image' => FWAPPS_ROOT_URL.'/placeholder/files/shrek.jpg',
			'name' => 'Kilometer Dulluselessness',
			'title' => 'Anti Prosecutor'
		),
		array(
			'image' => FWAPPS_ROOT_URL.'/placeholder/files/shrek.jpg',
			'name' => 'Piolo Pascual',
			'title' => 'Handsome Actor'
		),
		array(
			'image' => FWAPPS_ROOT_URL.'/placeholder/files/shrek.jpg',
			'name' => 'Pedro Pascal',
			'title' => 'Also Handsome Actor'
		),
		array(
			'image' => FWAPPS_ROOT_URL.'/placeholder/files/shrek.jpg',
			'name' => 'Loid Forger',
			'title' => 'Super Spy'
		),
		array(
			'image' => FWAPPS_ROOT_URL.'/placeholder/files/shrek.jpg',
			'name' => 'Yor Forger',
			'title' => 'Assassin'
		),
		array(
			'image' => FWAPPS_ROOT_URL.'/placeholder/files/shrek.jpg',
			'name' => 'Yuri Briar',
			'title' => 'Secret Polices'
		),
		array(
			'image' => FWAPPS_ROOT_URL.'/placeholder/files/shrek.jpg',
			'name' => 'Fiona Frost',
			'title' => 'Scary Spy'
		),
		array(
			'image' => FWAPPS_ROOT_URL.'/placeholder/files/shrek.jpg',
			'name' => 'Mario',
			'title' => 'Plumber and Expert Parkour Person'
		),
		array(
			'image' => FWAPPS_ROOT_URL.'/placeholder/files/shrek.jpg',
			'name' => 'Luigi',
			'title' => 'Also a Plumber and Expert Parkour Person though many say he\'s not as powerful as his kuya he actually jumps pretty high and he has this vacuum thing and apparently owns a mansion. Idk I believe in Luigi.'
		),
		array(
			'image' => FWAPPS_ROOT_URL.'/placeholder/files/shrek.jpg',
			'name' => 'Bowser',
			'title' => 'Peaches Peaches PeachesPeachesPeaches Peaches Peaches Peaches PeachesPeaches PeachesPeaches WaHH LAAAAHAAAVEYouuuu oOH'
		),
	);
?>


<div class="flex-grid">
	<div class="flex-col-xs-12 flex-col-md-5 flex-col-lg-6">
		<!-- Tabs -->
		<?php app_get_component('components/insights-nav-tabs') ?>
	</div>
	<div class="flex-col-xs-12 flex-col-md-7 flex-col-lg-6 text-align-right">
		<?php app_get_component('components/insights-export') ?>
	</div>
</div>


<div class="module module-expanded">
	<div class="module-header module-header-break">
		<h2 class="no-margin">Team Comparison</h2>
		<div class="module-functions">
			<div class="module-function padding-small-right input-wrapper input-wrapper-vertical">
				<label for="team_dep" class="input-label">Department</label>
				<select id="team_dep" class="input input-select"
					data-DEMOToggleUpdate
				>
					<option value="">Select Department</option>

					<!-- @PLACEHOLDER: Delete when ready -->
					<option value="seo">SEO</option>
					<option value="design">Design</option>
					<option value="development">Development</option>
					<option value="etc">Atbp.</option>
				</select>
			</div>

			<div class="module-function padding-small-right input-wrapper input-wrapper-vertical position-relative">
				<label data-toggle-dropdown class="input-label">Team Member</label>
				<div data-toggle-dropdown class="input input-single-line inline-flex-xs justify-content-space-between align-items-center"
					data-DEMOToggleUpdate
				>
					<span class="margin-right">
						<!-- @if has more than 1 selections -->
							<span class="REPLACE">69</span> Team Members
						<!-- @elseif just one -->
							<!-- <span class="REPLACE">Anya Forger</span> -->
								<!-- @NOTE Commented out because front end demo will look uglee -->
						<!-- @else -->
							<!-- Search Member -->
								<!-- @NOTE Commented out because front end demo will look uglee -->
					</span>
					<i class="symbol symbol-search"></i>
				</div>


				<?php app_get_component('components/dropdown-list-group-search','',false,array(
					'search_placeholder' => 'Search User',
					'allow_multiple' => true,
					'list' => array_map(function($item){
						return $item['name'];
					},$placeholder_users)
				)); ?>
			</div>

			<div class="module-function padding-small-right input-wrapper input-wrapper-vertical">
				<label for="team_dep" class="input-label">Time Range</label>
				<select id="team_dep" class="input input-select"
					data-DEMOToggleUpdate
				>
					<option value="">Select Time</option>

					<!-- @PLACEHOLDER: Delete when ready -->
					<option value="week">Week</option>
					<option value="month">Month</option>
					<option value="year">Year</option>
					<option value="all">All Time</option>
				</select>
			</div>
		</div>

	</div>
	<div class="module-content">
	<div class="table-wrapper ">
		<!-- @if has team members -->
			<table class="timetracker-table table-bordered text-vertical-align-middle">
				<tr>
					<th class="no-border-x" colspan="2">Team Member</th>
					<th class="no-border-x text-align-center" >Active</th>
					<th class="no-border-x" >Hours Logged</th>
					<th class="no-border-x" >
						&nbsp;
						<span class="sr-only">Total Hours</span>
					</th>
				</tr>

				<!-- @loop tr -->
					<!--
						 @NOTE classes to add
						 	background-primary-alpha-1 => when pinned
					-->
					<tr class="
						background-primary-alpha-1
					">
						
						<td class="no-border-left timetracker-td timetracker-td-w timetracker-td-w-50 text-align-center">
							
							<!-- @NOTE classes to add
									`active` => if pinned
							-->
							<span class="font-size-large color-neutral-darker">
								<i class="symbol symbol-pin-alt symbol-pin-toggle"></i>
							</span>

						</td>
						<td class="no-border-left timetracker-td timetracker-td-w timetracker-td-w-250">
							<div class="flex-xs align-items-center">
								<div class="flex-0-0">
									<?php app_get_component('components/thumbnail-small','',false,array(
										'image' => FWAPPS_ROOT_URL.'/placeholder/files/shrek.jpg',
									)); ?>
								</div>
								<div class="flex-1-1 padding-small-left">
									<p class="h4 no-margin font-weight-400">
										Shrek Somebody
									</p>
								</div>
							</div>
						</td>

						<td class="timetracker-td timetracker-td-w timetracker-td-w-100 text-align-center">
							<!-- @if is active -->
								<i class="font-size-large symbol symbol-time"></i>
							<!-- @else -->
								&nbsp;
						</td>
						<td class="timetracker-td timetracker-td-w padding-x">
							<div class="progress background-neutral-alpha-4">
								<!-- @NOTE
									inline styles to add
										width => string of percentage to total
								-->
								<div class="progress-bar background-primary-dark"
									style="width:69%;"
								></div>
							</div>
						</td>
						<td class="no-border-x timetracker-td timetracker-td-w timetracker-td-w-150 text-align-center">
							<span class="font-weight-700"></span>
							<span class="REPLACE">24</span>
							/
							<span class="REPLACE">40</span>	hrs
						</td>
					</tr>

						<!-- @PLACEHOLDER: Delete when ready -->
							<?php $h = 0; foreach($placeholder_users as $usr): $r = rand($h + 10, 100); ?>
								<tr class="
									<?=$h < 10 ? 'background-primary-alpha-1' : '' ?>
								">
									
									<td class="no-border-left timetracker-td timetracker-td-w timetracker-td-w-50 text-align-center">
										
										<!-- @NOTE classes to add
												`active` => if pinned
										-->
										<span class="font-size-large color-neutral-darker <?=$h < 10 ? 'active' : '' ?>">
											<i class="symbol symbol-pin-alt symbol-pin-toggle"></i>
										</span>

									</td>
									<td class="no-border-left timetracker-td timetracker-td-w timetracker-td-w-250">
										<div class="flex-xs align-items-center">
											<div class="flex-0-0">
												<?php app_get_component('components/thumbnail-small','',false,array(
													'image' => $usr['image'],
												)); ?>
											</div>
											<div class="flex-1-1 padding-small-left">
												<p class="h4 no-margin font-weight-400">
													<?= $usr['name']; ?>
												</p>
											</div>
										</div>
									</td>

									<td class="timetracker-td timetracker-td-w timetracker-td-w-100 text-align-center">
										<?php if($h % 2): ?>
											<i class="font-size-large symbol symbol-time"></i>
										<?php else: ?>
											&nbsp;
										<?php endif; ?>
									</td>
									<td class="timetracker-td timetracker-td-w padding-x">
										<div class="progress background-neutral-alpha-4">
											<!-- @NOTE
												inline styles to add
													width => string of percentage to total
											-->
											<div class="progress-bar background-primary-dark"
												style="width:<?= $r ?>%;"
											></div>
										</div>
									</td>
									<td class="no-border-x timetracker-td timetracker-td-w timetracker-td-w-150 text-align-center">
										<span class="font-weight-700"></span>
										<span class="REPLACE"><?= floor($r / 100 * 40)  ?></span>
										/
										<span class="REPLACE">40</span>	hrs
									</td>
								</tr>
							<?php  $h++; endforeach; ?>

			</table>

		<!-- @else -->
			<span class="font-style-italic color-neutral">Select Team members or a department....</span>
		</div>
	</div>
</div>