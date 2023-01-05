<div class="flex-grid">
	<div class="flex-child flex-col-xs-12 flex-col-md-6">
		<div class="h2 font-weight-300 no-margin-y">
			Jobs
		</div>
	</div>
	<div class="flex-child flex-col-xs-12 flex-col-md-6 text-align-right">
		<a href="<?=app_create_link(array('template'=> 'job-new')) ?>" class="btn btn-theme btn-block-mobile">Add new</a>
	</div>
</div>
<div class="module">
	<div class="module-content no-padding">

		<!-- @if has jobs -->
			<div class="table-wrapper">
				<table class="timetracker-table">
					<tr class="background-transparent">
						<th class="background-transparent no-border-top">Job Title</th>
						<th class="background-transparent no-border-top">Description</th>
						<th class="background-transparent no-border-top">Department</th>
						<th class="background-transparent no-border-top text-align-center">Task Categories</th>
						<th class="background-transparent no-border-top">Reports To</th>
						<th class="background-transparent no-border-top text-align-right">Actions</th>
					</tr>
					<!-- @loop tr -->
						<tr>

							<td>
								<div class="text-wrap-ellipsis">
									<a href="<?=app_create_link(array('template' => 'job-edit')) ?>">
										<span class="REPLACE">A Job Title</span>
									</a>
								</div>
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
							<td class="timetracker-td timetracker-td-w timetracker-td-w-200">
								<h6 class="hide-nonmobile no-margin-top">Department</h6>
								<!-- @if has department -->
									<a href="<?= app_create_link(array('template' => 'department-edit')) ?>" class="REPLACE">A Job department</a>
								<!-- @else -->
									<span class="font-style-italic color-neutral">Not Set</span>
							</td>
							
							<td class="text-align-center">
								<h6 class="hide-nonmobile no-margin-top">Task Categories</h6>
								<span class="REPLACE">69</span>
							</td>
							
							<td>
								<h6 class="hide-nonmobile no-margin-top">Reports To</h6>
								<!-- @if has a report to -->
									<span class="REPLACE">Somewhere to Report To</span>
								<!-- @else -->
									<span class="font-style-italic color-neutral">Not Set</span>
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

										<td>
											<div class="text-wrap-ellipsis">
												<a href="<?=app_create_link(array('template' => 'job-edit')) ?>">
													<span class="REPLACE">Jobby job job</span>
												</a>
											</div>
										</td>

										<td class="timetracker-td timetracker-td-w timetracker-td-w-300">
												<h6 class="hide-nonmobile no-margin-top">Description</h6>
											<!-- @if has description -->
												<div class="text-wrap-ellipsis">
													<span class="REPLACE">Seven a.m., waking up in the morning Gotta be fresh, gotta go downstairs Gotta have my bowl, gotta have cereal Seein' everything, the time is goin' Tickin' on and on, everybody's rushin' Gotta get down to the bus stop Gotta catch my bus, I see my friends (My friends) Kickin' in the front seat Sittin' in the back seat Gotta make my mind up Which seat can I take? It's Friday, Friday Gotta get down on Friday Everybody's lookin' forward to the weekend, weekend Friday, Friday Gettin' down on Friday Everybody's lookin' forward to the weekend Partyin', partyin' (Yeah) Partyin', partyin' (Yeah) Fun, fun, fun, fun Lookin' forward to the weekend 7: 45, we're drivin' on the highway Cruisin' so fast, I want time to fly Fun, fun, think about fun You know what it is I got this, you got this My friend is by my right, ay I got this, you got this Now you know it Kickin' in the front seat Sittin' in the back seat Gotta make my mind up Which seat can I take? It's Friday, Friday Gotta get down on Friday Everybody's lookin' forward to the weekend, weekend Friday, Friday Gettin' down on Friday Everybody's lookin' forward to the weekend Partyin', partyin' (Yeah) Partyin', partyin' (Yeah) Fun, fun, fun, fun Lookin' forward to the weekend Yesterday was Thursday, Thursday Today i-is Friday, Friday (Partyin') We-we-we so excited We so excited We gonna have a ball today Tomorrow is Saturday And Sunday comes after wards I don't want this weekend to end It's Friday, Friday Gotta get down on Friday Everybody's lookin' forward to the weekend, weekend Friday, Friday Gettin' down on Friday Everybody's lookin' forward to the weekend Partyin', partyin' (Yeah) Partyin', partyin' (Yeah) Fun, fun, fun, fun Lookin' forward to the weekend It's Friday, Friday Gotta get down on Friday Everybody's lookin' forward to the weekend, weekend Friday, Friday Gettin' down on Friday Everybody's lookin' forward to the weekend Partyin', partyin' (Yeah) Partyin', partyin' (Yeah) Fun, fun, fun, fun Lookin' forward to the weekend</span>
												</div>
										</td>
										<td class="timetracker-td timetracker-td-w timetracker-td-w-200">
											<h6 class="hide-nonmobile no-margin-top">Department</h6>
											<!-- @if has department -->
												<a href="<?= app_create_link(array('template' => 'department-edit')) ?>" class="REPLACE">Departamento</a>
										</td>
							
										<td class="text-align-center">
											<h6 class="hide-nonmobile no-margin-top">Task Categories</h6>
											<span class="REPLACE">420</span>
										</td>
										
										<td>
											<h6 class="hide-nonmobile no-margin-top">Reports To</h6>
											<!-- @if has a report to -->
												<span class="REPLACE">Report here</span>
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

										<td>
											<a href="<?=app_create_link(array('template' => 'job-edit')) ?>">
												<span class="REPLACE">Jobalobadubdub</span>
											</a>
										</td>
										<td class="timetracker-td timetracker-td-w timetracker-td-w-300">
												<h6 class="hide-nonmobile no-margin-top">Description</h6>
												<span class="font-style-italic color-neutral">Not Set</span>
										</td>
										<td class="timetracker-td timetracker-td-w timetracker-td-w-200">
											<h6 class="hide-nonmobile no-margin-top">Department</h6>
												<span class="font-style-italic color-neutral">Not Set</span>
										</td>

										<td class="text-align-center">
											<h6 class="hide-nonmobile no-margin-top">Task Categories</h6>
											<span class="REPLACE">0</span>
										</td>
										
										<td>
											<h6 class="hide-nonmobile no-margin-top">Reports To</h6>
												<span class="font-style-italic color-neutral">Not Set</span>
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