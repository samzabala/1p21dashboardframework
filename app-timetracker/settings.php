

<h1>Settings</h1>

<div class="module">
	<div class="module-content">

		<div class="flex-grid flex-grid-fixed">
			<div class="flex-col-xs-12 flex-col-md-8">


				<form action="">

					<h2 class="margin-small-top">Global Settings</h2>

					<!-- Client Jobs -->
						<label class="input-label display-block padding-small-bottom">Default Client Jobs</label>
						<div class="p">
							<!-- @if has client jobs -->
								<!-- @loop .highlight -->
									<span class="color-inherit highlight highlight-neutral display-inline-block">Sales</span>

									<!-- @PLACEHOLDER: Delete when ready -->
										<span class="color-inherit highlight highlight-neutral display-inline-block">Account Manager</span>
										<span class="color-inherit highlight highlight-neutral display-inline-block">Super Spy</span>
										<span class="color-inherit highlight highlight-neutral display-inline-block">Assassin</span>
										<span class="color-inherit highlight highlight-neutral display-inline-block">Telepath</span>
										<span class="color-inherit highlight highlight-neutral display-inline-block">Lawyer</span>
										<span class="color-inherit highlight highlight-neutral display-inline-block">Writer</span>
										<span class="color-inherit highlight highlight-neutral display-inline-block">Judge</span>
										<span class="color-inherit highlight highlight-neutral display-inline-block">Diplomat</span>
										<span class="color-inherit highlight highlight-neutral display-inline-block">Nobel Prize Winner Physicist</span>
										<span class="color-inherit highlight highlight-neutral display-inline-block">President</span>
										<span class="color-inherit highlight highlight-neutral display-inline-block">Doctor</span>
										<span class="color-inherit highlight highlight-neutral display-inline-block">Beach</span>
										<span class="color-inherit highlight highlight-neutral display-inline-block">Reporter</span>
										<span class="color-inherit highlight highlight-neutral display-inline-block">Mermaid</span>
										<span class="color-inherit highlight highlight-neutral display-inline-block">Beach</span>
										<span class="color-inherit highlight highlight-neutral display-inline-block">Weird</span>

							<div class="inline-flex-xs align-items-stretch position-relative">


								<!-- @if has client jobs -->
									<a href="#" data-toggle-dropdown class="font-size-large color-neutral-dark"><span class="sr-only">Add Client Job +</span> <i class="symbol symbol-plus"></i></a>

								<!-- @else -->
									<a href="#" data-toggle-dropdown class="color-inherit highlight highlight-neutral margin-small-right">Add Client Job +</a>

								<?php app_get_component('components/dropdown-list-group-search','',false,array(
									'search_placeholder' => 'Find Jobs',
									'allow_multiple' => true,
									'list' => array(
										'Designer',
										'Sales',
										'Account Manager',
										'Developer',
										'SEO',
										'Product Manager',
									)
								)); ?>
							</div>
							<?php app_get_component('components/input-custom-description'); ?>
						</div>

					<!-- Project Jobs -->
						<label class="input-label display-block padding-small-bottom">Default Project Jobs</label>
						<div class="p">
							<!-- @if has project jobs -->
								<!-- @loop .highlight -->
									<span class="color-inherit highlight highlight-neutral display-inline-block">Sales</span>

									<!-- @PLACEHOLDER: Delete when ready -->
										<span class="color-inherit highlight highlight-neutral display-inline-block">Account Manager</span>
										<span class="color-inherit highlight highlight-neutral display-inline-block">Super Spy</span>
										<span class="color-inherit highlight highlight-neutral display-inline-block">Assassin</span>
										<span class="color-inherit highlight highlight-neutral display-inline-block">Telepath</span>
										<span class="color-inherit highlight highlight-neutral display-inline-block">Lawyer</span>
										<span class="color-inherit highlight highlight-neutral display-inline-block">Writer</span>
										<span class="color-inherit highlight highlight-neutral display-inline-block">Judge</span>
										<span class="color-inherit highlight highlight-neutral display-inline-block">Diplomat</span>
										<span class="color-inherit highlight highlight-neutral display-inline-block">Nobel Prize Winner Physicist</span>
										<span class="color-inherit highlight highlight-neutral display-inline-block">President</span>
										<span class="color-inherit highlight highlight-neutral display-inline-block">Doctor</span>
										<span class="color-inherit highlight highlight-neutral display-inline-block">Beach</span>
										<span class="color-inherit highlight highlight-neutral display-inline-block">Reporter</span>
										<span class="color-inherit highlight highlight-neutral display-inline-block">Mermaid</span>
										<span class="color-inherit highlight highlight-neutral display-inline-block">Beach</span>
										<span class="color-inherit highlight highlight-neutral display-inline-block">Weird</span>


							<div class="inline-flex-xs align-items-stretch position-relative">


								<!-- @if has project jobs -->
									<a href="#" data-toggle-dropdown class="font-size-large color-neutral-dark"><span class="sr-only">Add Project Job +</span> <i class="symbol symbol-plus"></i></a>

								<!-- @else -->
									<a href="#" data-toggle-dropdown class="color-inherit highlight highlight-neutral margin-small-right">Add Project Job +</a>

								<?php app_get_component('components/dropdown-list-group-search','',false,array(
									'search_placeholder' => 'Find Jobs',
									'allow_multiple' => true,
									'list' => array(
										'Designer',
										'Sales',
										'Account Manager',
										'Developer',
										'SEO',
										'Product Manager',
									)
								)); ?>
							</div>
							<?php app_get_component('components/input-custom-description'); ?>
						</div>

					<!-- Groups -->
						<label class="input-label display-block padding-small-bottom">Groups with Fixed Tasks</label>
						<div class="p">
							<!-- @if has project jobs -->
								<!-- @loop .highlight -->
									<span class="color-inherit highlight highlight-neutral display-inline-block">An example group</span>

									<!-- @PLACEHOLDER: Delete when ready -->
										<span class="color-inherit highlight highlight-neutral display-inline-block">Justice League</span>
										<span class="color-inherit highlight highlight-neutral display-inline-block">Avengers</span>
										<span class="color-inherit highlight highlight-neutral display-inline-block">Legion of Doom</span>
										<span class="color-inherit highlight highlight-neutral display-inline-block">Super Junior</span>
										<span class="color-inherit highlight highlight-neutral display-inline-block">Wonder Girls</span>
										<span class="color-inherit highlight highlight-neutral display-inline-block">2NE1</span>
										<span class="color-inherit highlight highlight-neutral display-inline-block">SB19</span>
										<span class="color-inherit highlight highlight-neutral display-inline-block">Silk Sonic</span>
										<span class="color-inherit highlight highlight-neutral display-inline-block">Black Eyed Peas</span>


							<div class="inline-flex-xs align-items-stretch position-relative">


								<!-- @if has project jobs -->
									<a href="#" data-toggle-dropdown class="font-size-large color-neutral-dark"><span class="sr-only">Add Group +</span> <i class="symbol symbol-plus"></i></a>

								<!-- @else -->
									<a href="#" data-toggle-dropdown class="color-inherit highlight highlight-neutral margin-small-right">Add Group +</a>

								<?php app_get_component('components/dropdown-list-group-search','',false,array(
									'search_placeholder' => 'Find Jobs',
									'allow_multiple' => true,
									'list' => array(
										'Legion of Doom',
										'Super Junior',
										'Wonder Girls',
										'2NE1',
										'BTS',
										'SB19',
										'Alamat',
										'BINI',
										'Silk Sonic',
									)
								)); ?>
							</div>
							<?php app_get_component('components/input-custom-description'); ?>
						</div>


					<!-- Hours -->
						<div class="p">
							<label for="hour_num" class="input-label display-block padding-small-bottom">Number of Hours worked per day</label>
							<input id="hour_num" name="" type="number" placeholder="ex. 8" class="input input-single-line" width="2">
							<?php app_get_component('components/input-custom-description'); ?>
						</div>


					<!-- Overdue Project -->
						<div class="p">
							<label for="overdue_proj_num" class="input-label display-block padding-small-bottom">Hidden Overdue Projects Threshold</label>
							<input id="overdue_proj_num" name="" type="number" placeholder="ex. 7" class="input input-single-line" width="2">
							<?php app_get_component('components/input-custom-description'); ?>
						</div>


					<!-- Overdue Task -->
						<div class="p">
							<label for="overdue_task_num" class="input-label display-block padding-small-bottom">Hidden Overdue Tasks Threshold</label>
							<input id="overdue_task_num" name="" type="number" placeholder="ex. 7" class="input input-single-line" width="2">
							<?php app_get_component('components/input-custom-description'); ?>
						</div>


					<!-- User Adjust Duration -->
						<div class="p">
							<!-- @hidden inputs here -->
							<label class="input-label display-block padding-small-bottom">Users Can Adjust Time Log Duration</label>
							<div class="btn btn-group btn-group-horizontal btn-group-toggle btn-group-interactive">
								<a href="#" class="btn border-color-neutral-alpha-3 background-theme-contrast color-neutral font-weight-inherit background-theme-active color-theme-active active">On</a>
								<a href="#" class="btn border-color-neutral-alpha-3 background-theme-contrast color-neutral font-weight-inherit background-theme-active color-theme-active">Off</a>
							</div>
							<?php app_get_component('components/input-custom-description'); ?>
						</div>


					<!-- User Adjust Duration -->
						<div class="p">
							<!-- @hidden inputs here -->
							<label class="input-label display-block padding-small-bottom">Users Can Adjust Time Log Start Time</label>
							<div class="btn btn-group btn-group-horizontal btn-group-toggle btn-group-interactive">
								<a href="#" class="btn border-color-neutral-alpha-3 background-theme-contrast color-neutral font-weight-inherit background-theme-active color-theme-active active">On</a>
								<a href="#" class="btn border-color-neutral-alpha-3 background-theme-contrast color-neutral font-weight-inherit background-theme-active color-theme-active">Off</a>
							</div>
							<?php app_get_component('components/input-custom-description'); ?>
						</div>

						


					<h2>Wrike Settings</h2>
					<!-- Custom status -->
						<div class="input-wrapper input-wrapper-block input-wrapper-vertical p">
							<!-- @hidden inputs here -->
							<label class="input-label display-block padding-small-bottom">Project Custom Status</label>

							<select class="input input-select" name="" id="">
								<option value="">Select</option>
								<!-- @PLACEHOLDER. delete when ready -->
								<option value="">Backlog</option>
								<option value="" selected>In Progress</option>
								<option value="">Review</option>
								<option value="">On Hold</option>
								<option value="">Completed</option>
							</select>
							<?php app_get_component('components/input-custom-description'); ?>
						</div>

					<!-- Custom status name -->
						<div class="input-wrapper input-wrapper-block input-wrapper-vertical p">
							<!-- @hidden inputs here -->
							<label class="input-label display-block padding-small-bottom">Project Custom Status</label>

							<select class="input input-select" name="" id="">
								<option value="">Select</option>
								<!-- @PLACEHOLDER. delete when ready -->
								<option value="">Backlog</option>
								<option value="" selected>In Progress</option>
								<option value="">Review</option>
								<option value="">On Hold</option>
								<option value="">Completed</option>
							</select>
							<?php app_get_component('components/input-custom-description'); ?>
						</div>
				</form>
			</div>
		</div>



		<button class="btn btn-theme">Save</button>
	</div>
</div>