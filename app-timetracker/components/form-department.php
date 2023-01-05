
	<div class="flex-grid flex-grid-fixed">
		<div class="flex-col-xs-12 flex-col-sm-9 flex-col-md-7">
			<form action="">
				
				<div class="input-wrapper input-wrapper-vertical input-wrapper-block p">
					<label for="department-name" class="input-label font-weight-700">Name</label>

					<!-- @NOTE .input
						classes to add:
							input-error => if field has an error
					-->
					<input id="department-name" placeholder="Enter a Department name" class="input input-single-line" />

					<!-- @if has error -->
						<div class="input-info color-error font-weight-700">Error description here</div>
				</div>
				
				<div class="input-wrapper input-wrapper-vertical input-wrapper-block p">
					<label for="department-description" class="input-label font-weight-700">Description</label>
					

					<!-- @NOTE .input
						classes to add:
							input-error => if field has an error
					-->
					<textarea name="" placeholder="Enter a description" id="department-description" rows="3" class="input input-multiple-line input-block"></textarea>

					<!-- @if has error -->
						<div class="input-info color-error font-weight-700">Error description here</div>
				</div>

				<label class="input-label font-weight-700">Job Titles</label>
				<datalist id="job-titles">
					<option value="Web Developer">Web Developer</option>
					<option value="Jr Web Developer">Jr Web Developer</option>
					<option value="Sr Web Developer">Sr Web Developer</option>
					<option value="Software Engineer">Software Engineer</option>
					<option value="Yes">Yes</option>
				</datalist>
				<!-- @loop .flex-grid -->
					<div class="flex-grid flex-grid-compact flex-grid-fixed flex-nowrap">
						<div class="flex-child flex-1-1 no-margin-top">
							
							<label for="department-job-title-[REPLACE]" class="sr-only">Job Title Entry</label>
							
							<!-- @NOTE .input
								classes to add:
									input-error => if field has an error
							-->
							<input id="department-job-title-[REPLACE]" placeholder="Enter a Job Title" class="input input-single-line input-block" list="job-titles" />
							
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

							<?php for($i = 0; $i < 6; $i++): ?>

								<div class="flex-grid flex-grid-compact flex-grid-fixed flex-nowrap">
									<div class="flex-child flex-1-1 no-margin-top">

										<label for="department-job-title-<?=$i ?>" class="sr-only">Job Title Entry</label>
										<input id="department-job-title-<?=$i ?>" placeholder="Enter a Job Title" class="input-error input input-single-line input-block" list="job-titles" />
										
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

									<label for="department-job-title-<?=$i + 1 ?>" class="sr-only">Job Title Entry</label>
									<input id="department-job-title-<?=$i + 1 ?>" placeholder="Enter a Job Title" class="input input-single-line input-block" list="job-titles" />
								</div>
								<div class="flex-child flex-0-0 no-margin-top flex-xs">
									<!-- @if it is a new entry -->
										<button title="Add" class="btn btn-primary-glassy btn-symbol">
											<i class="symbol symbol-plus"></i>
										</button>	
								</div>
							</div>

				<hr class="margin-large-y">

				<div class="margin-large-top">
					<button class="btn btn-theme" type="submit">Save Department</button>
					<a href="#" class="btn btn-neutral-glassy margin-left" type="submit">Go Back</a>
				</div>
			</form>
		</div>
	</div>