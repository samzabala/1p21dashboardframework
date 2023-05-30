
	<div class="grid grid-flex grid-flex-fixed">
		<div class="grid-col-xs-12 grid-col-sm-9 grid-col-md-7">
			<form action="">
				<div class="input-wrapper input-wrapper-vertical input-wrapper-block p">
					<label class="input input-label font-weight-700">Name</label>
					<div>
						<div class="grid grid-flex grid-constricted-y glex-grid-compact">
							<div class="grid-col-6">

								<!-- @NOTE .input
									classes to add:
										input-error => if field has an error
								-->
								<input id="team-first-name" placeholder="First Name" class="input input-box input-block" />

							</div>
							<div class="grid-col-6">

								<!-- @NOTE .input
									classes to add:
										input-error => if field has an error
								-->
								<input id="team-last-name" placeholder="Last Name" class="input input-box input-block" />
							</div>
						</div>
					</div>

					<!-- @if has error -->
						<div class="input input-info color-error font-weight-700">Error description here</div>
				</div>


				<div class="input-wrapper input-wrapper-vertical input-wrapper-block p">
					<label for="team-job-title" class="input input-label font-weight-700">Viewers</label>		
					<datalist id="job-titles">
						<option value="Web Developer">Web Developer</option>
						<option value="Jr Web Developer">Jr Web Developer</option>
						<option value="Sr Web Developer">Sr Web Developer</option>
						<option value="Software Engineer">Software Engineer</option>
						<option value="Yes">Yes</option>
					</datalist>

					<!-- @NOTE .input
						classes to add:
							input-error => if field has an error
					-->
					<input id="team-job-title" placeholder="Enter a Job department" class="input input-box" list="job-titles" />


					<!-- @if has error -->
						<div class="input input-info color-error font-weight-700">Error description here</div>
				</div>


				<div class="input-wrapper input-wrapper-vertical input-wrapper-block p">
					<label for="team-report-to" class="input input-label font-weight-700">Reports to</label>

				
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
					<input id="team-report-to" placeholder="Enter a report to" class="input input-box" list="report-to" />


					<!-- @if has error -->
						<div class="input input-info color-error font-weight-700">Error description here</div>
				</div>



				<label for="job-description" class="input input-label font-weight-700">Viewers</label>
				<datalist id="viewers">
					<option value="Loid Forger">Loid Forger</option>
					<option value="Yor Forger">Yor Forger</option>
					<option value="Anya Forger">Anya Forger</option>
					<option value="Bond Forger">Bond Forger</option>
					<option value="Franky scruffydude I can't remember his last name">Franky scruffydude I can't remember his last name</option>
					<option value="Henry Henderson">Henry Henderson</option>
					<option value="Becky Blackbell">Becky Blackbell</option>
					<option value="Damian Desmond">Damian Desmond</option>
					<option value="Father Desmond">Father Desmond</option>
					<option value="Mother Desmond">Mother Desmond</option>
					<option value="Child in the sewer">Child in the sewer</option>
					<option value="The Cow that looks like a Kiss band member">The Cow that looks like a Kiss band member</option>
					<option value="Yuri Briar">Yuri Briar</option>
					<option value="Yuri Briar's boss">Yuri Briar's boss</option>
					<option value="Fiona Frost">Fiona Frost</option>
					<option value="Eren Yeager">Eren Yeager</option>
				</datalist>

				<!-- @loop .grid grid-flex -->
					<div class="grid grid-flex grid-compact grid-flex-fixed flex-nowrap">
						<div class="grid-col flex-1-1 no-margin-top">

							<label for="team-viewers-[REPLACE]" class="sr-only">Viewers Entry</label>

							<!-- @NOTE .input
								classes to add:
									input-error => if field has an error
							-->
							<input id="team-viewers-[REPLACE]" placeholder="Enter a Viewer" class="input input-box input-block" list="viewers" />

							<!-- @if has error -->
								<div class="input input-info color-error font-weight-700">Error description here</div>
						</div>
						<div class="grid-col flex-0-0 no-margin-top flex-xs">
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

								<div class="grid grid-flex grid-compact grid-flex-fixed flex-nowrap">
									<div class="grid-col flex-1-1 no-margin-top">

										<label for="team-viewers-<?=$i ?>" class="sr-only">Viewers Entry</label>
										<input id="team-viewers-<?=$i ?>" placeholder="Enter a Viewer" class="input-error input input-box input-block" list="viewers" />
										<!-- @if has error -->
											<div class="input input-info color-error font-weight-700">Error description here</div>
									</div>
									<div class="grid-col flex-0-0 no-margin-top flex-xs">
											<button title="Add" class="btn btn-neutral-glassy btn-symbol">
												<i class="symbol symbol-minus"></i>
											</button>
									</div>
								</div>
							<?php endfor; ?>


							<div class="grid grid-flex grid-compact grid-flex-fixed flex-nowrap">
								<div class="grid-col flex-1-1 no-margin-top">

									<label for="team-viewers-<?=$i + 1 ?>" class="sr-only">Viewers Entry</label>
									<input id="team-viewers-<?=$i + 1 ?>" placeholder="Enter a Viewer" class="input input-box input-block" list="viewers" />
								</div>
								<div class="grid-col flex-0-0 no-margin-top flex-xs">
									<!-- @if it is a new entry -->
										<button title="Add" class="btn btn-primary-glassy btn-symbol">
											<i class="symbol symbol-plus"></i>
										</button>
								</div>
							</div>
					



				<div class="p">
					<label class="input input-label font-weight-700">More Team Member Options</label>
	
					<div class="input-wrapper input-wrapper-vertical input-wrapper-block">
						<label class="input-toggle input-block p">
							<input type="checkbox" class="input">
							<span class="input input-label input-toggle-label">
								Set as Active
							</span>
						</label>
					</div>
					<div class="input-wrapper input-wrapper-vertical input-wrapper-block">
						<label class="input-toggle input-block p">
							<input type="checkbox" class="input">
							<span class="input input-label input-toggle-label">
								Set as Superuser
							</span>
						</label>
					</div>
				</div>
				
				<hr class="margin-large-y">

				<div class="margin-large-top">
					<button class="btn btn-theme" type="submit">Save Team Member</button>
					<a href="#" class="btn btn-neutral-glassy margin-left" type="submit">Go Back</a>
				</div>
			</form>
		</div>
	</div>