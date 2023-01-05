
	<div class="flex-grid flex-grid-fixed">
		<div class="flex-col-xs-12 flex-col-sm-9 flex-col-md-7">
			<form action="">
				<div class="input-wrapper input-wrapper-vertical input-wrapper-block p">
					<label for="job-name" class="input-label font-weight-700">Name</label>
					
					<!-- @NOTE .input
						classes to add:
							input-error => if field has an error
					-->
					<input id="job-name" placeholder="Enter a Job name" class="input input-single-line" />

					<!-- @if has error -->
						<div class="input-info color-error font-weight-700">Error description here</div>
				</div>

				<div class="input-wrapper input-wrapper-vertical input-wrapper-block p">
					<label for="job-description" class="input-label font-weight-700">Description</label>
					
					<!-- @NOTE .input
						classes to add:
							input-error => if field has an error
					-->
					<textarea name="" placeholder="Enter a description" id="job-description" rows="3" class="input input-multiple-line input-block"></textarea>


					<!-- @if has error -->
						<div class="input-info color-error font-weight-700">Error description here</div>
				</div>


				<div class="input-wrapper input-wrapper-vertical input-wrapper-block p">
					<label for="job-department" class="input-label font-weight-700">Department</label>			
					<datalist id="departments">
						<option value="SEO">SEO</option>
						<option value="Design">Design</option>
						<option value="Development">Development</option>
						<option value="Other departments I can't remember at the moment">Other departments I can't remember at the moment</option>
					</datalist>
					
					<!-- @NOTE .input
						classes to add:
							input-error => if field has an error
					-->
					<input id="job-department" placeholder="Enter a Job department" class="input input-single-line" list="departments" />


					<!-- @if has error -->
						<div class="input-info color-error font-weight-700">Error description here</div>
				</div>



				<div class="input-wrapper input-wrapper-vertical input-wrapper-block p">
					<label for="job-description" class="input-label font-weight-700">Task Categories</label>
					<div class="flex-1-1">
						<!-- @loop .flex-grid -->
							<div class="flex-grid flex-grid-compact flex-grid-fixed flex-nowrap">
								<div class="flex-child flex-1-1 no-margin-top">

									<label for="department-task-categories-[REPLACE]" class="sr-only">Task Category Entry</label>
									
									<!-- @NOTE .input
										classes to add:
											input-error => if field has an error
									-->
									<input id="department-task-categories-[REPLACE]" placeholder="Enter a Task Category" class="input input-single-line input-block" />


									<!-- @if has error -->
										<div class="input-info color-error font-weight-700">Error description here</div>
								</div>
								<div class="flex-child flex-0-0 no-margin-top flex-xs">
									<!-- @if it is a new entry -->
										<button title="Add" class="btn btn-primary-glassy btn-symbol">
											<i class="symbol symbol-plus"></i>
										</button>	
									<!-- @else -->
										<button title="Add" class="btn btn-neutral-glassy btn-symbol">
											<i class="symbol symbol-minus"></i>
										</button>
								</div>
							</div>


								<!-- @PLACEHOLDER: Delete when ready -->

									<?php for($i = 0; $i < 6; $i++): ?>

										<div class="flex-grid flex-grid-compact flex-grid-fixed flex-nowrap">
											<div class="flex-child flex-1-1 no-margin-top">

												<label for="department-task-categories-<?=$i ?>" class="sr-only">Task Category Entry</label>
												<input id="department-task-categories-<?=$i ?>" placeholder="Enter a Task Category" class="input-error input input-single-line input-block" />

												<!-- @if has error -->
													<div class="input-info color-error font-weight-700">Error description here</div>
											</div>
											<div class="flex-child flex-0-0 no-margin-top flex-xs">
													<button title="Add" class="btn btn-neutral-glassy btn-symbol">
														<i class="symbol symbol-minus"></i>
													</button>
											</div>
										</div>
									<?php endfor; ?>


									<div class="flex-grid flex-grid-compact flex-grid-fixed flex-nowrap">
										<div class="flex-child flex-1-1 no-margin-top">

											<label for="department-task-categories-<?=$i + 1 ?>" class="sr-only">Task Category Entry</label>
											<input id="department-task-categories-<?=$i + 1 ?>" placeholder="Enter a Task Category" class="input input-single-line input-block" />
										</div>
										<div class="flex-child flex-0-0 no-margin-top flex-xs">
											<!-- @if it is a new entry -->
												<button title="Add" class="btn btn-primary-glassy btn-symbol">
													<i class="symbol symbol-plus"></i>
												</button>
										</div>
									</div>
					</div>
					
				</div>

				<div class="input-wrapper input-wrapper-vertical input-wrapper-block p">
					<label for="job-report-to" class="input-label font-weight-700">Reports to</label>

				
					<datalist id="report-to">
						<option value="Director of Paid Search">Director of Paid Search</option>
						<option value="Director of Another thing">Director of Another thing</option>
						<option value="Director of Other Thing">Director of Other Thing</option>
						<option value="Director it all">Director it all</option>
					</datalist>
					
					<!-- @NOTE .input
						classes to add:
							input-error => if field has an error
					-->
					<input id="job-report-to" placeholder="Enter a Job department" class="input input-single-line" list="report-to" />
				</div>


				<hr class="margin-large-y">

				<div class="margin-large-top">
					<button class="btn btn-theme" type="submit">Save Job</button>
					<a href="#" class="btn btn-neutral-glassy margin-left" type="submit">Go Back</a>
				</div>
			</form>
		</div>
	</div>