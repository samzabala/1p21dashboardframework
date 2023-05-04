<?php
$defs = array(
	'add_close_btn' => false,
);

$args = app_parse_args($data,$defs);
?>
<form action="" class="notes-editor">
	<div class="input-wrapper input-wrapper-vertical input-wrapper-block p">
		<label for="note" class="input input-label sr-only">Add Note</label>
		<textarea name="note" id="note" cols="30" rows="2" class="input input-box input-box-multiline">Body note. will be replaced by tinymce</textarea>
	</div>

	<div class=" p">
		<a class="input input-label text-decoration-none no-padding-top" data-toggle-accordion>
			Attachments Options <i class="symbol symbol-plus"></i>
		</a>
		<div class="accordion">

			<div class="p">
				<div class="input-group input-block input-group-horizontal">
					<label for="note-attachment" class="btn btn-primary-glassy border-color-neutral-alpha-3">Add Attachments</label>
					<input type="file" name="attachment" id="note-attachment" class="sr-only text-align-center input input-box" />
					<label for="note-attachment" class="input input-box">
						<!-- @if has file -->
							<span class="REPLACE">filename.virus</span>
						<!-- @else -->
							No files chosen
					</label>
				</div>

			</div>

				<!-- @if edit note -->
					<p class="input input-label">Edit Attachments</p>
					<div class="p overflow-y-auto" style="max-height:18em;">
						<?php app_get_component('components/attachments-grid-simple'); ?>
					</div>	
		</div>
	</div>
	<hr>
	<div class="grid grid-flex grid-flex-fixed grid-constricted-y">
		<div class="grid-col-xs-12 grid-col-sm-6 grid-col-lg-7">
			<div class="grid grid-flex grid-compact grid-constricted-y align-items-center">
				<div class="grid-col flex-0-0">
					<div class="p input-wrapper input-wrapper-horizontal input-wrapper-block">
						<label class="input-toggle">
							<input type="checkbox" name="notify_users" class="input input-inline">
							<span class="input input-label input-toggle-label font-weight-inherit">
								Notify Users
							</span>
						</label>
					</div>
				</div>
				<div class="grid-col flex-1-1">
					<!-- @if notify_users is checked -->
						<div class="p input-wrapper input-wrapper-horizontal input-wrapper-block position-relative">
							<button href="#" data-toggle-dropdown class="input input-box input-box-select">
								<!-- @if has selected -->
									<span class="REPLACE">69</span> Selected Users
								<!-- @else -->
									<!-- @NOTE commented out only for front end demo to not look ugly -->
									<!-- Select User(s) -->
							</button>
							<ul class="dropdown dropdown-bottom-flush dropdown-left" data-dropdown-width="100%" data-dropdown-max-height="20em">
								<!-- @LOOP li -->
									<li>
										<label class="input input-label">
											<input type="checkbox" name="filter-companies-employee" value="profile_name" class="input input-inline">
											Profile Name
										</label>
									</li>

									<!-- @PLACEHOLDER delete when ready -->

										<li>
											<label class="input input-label">
												<input type="checkbox" checked name="filter-companies-employee" value="Yanni Yogi" class="input input-inline">
												Yanni Yogi
											</label>
										</li>
										<li>
											<label class="input input-label">
												<input type="checkbox" name="filter-companies-employee" value="El Tigre" class="input input-inline">
												El Tigre
											</label>
										</li>
										<li>
											<label class="input input-label">
												<input type="checkbox" name="filter-companies-employee" value="Matt Engarde" class="input input-inline">
												Matt Engarde
											</label>
										</li>
										<li>
											<label class="input input-label">
												<input type="checkbox" name="filter-companies-employee" value="Frank Sahwit" class="input input-inline">
												Frank Sahwit
											</label>
										</li>
										<li>
											<label class="input input-label">
												<input type="checkbox" name="filter-companies-employee" value="Dee Vasquez" class="input input-inline">
												Dee Vasquez
											</label>
										</li>
							</ul>
						</div>
				</div>
			</div>
		</div>
		<div class="grid-col-xs-12 grid-col-sm-6 grid-col-lg-5">
			<div class="text-align-right p">
				<?php if($args['add_close_btn']): ?>
					<a href="#close-add-note" data-toggle-accordion class="btn btn-link">
						Cancel 
					</a>
				<?php endif; ?>
				<button  class="btn btn-primary " type="submit">Add</button>
			</div>
		</div>
	</div>
</form>