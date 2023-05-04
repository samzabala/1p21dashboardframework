<?php
$defs = array(
	//@param post - type of single achuchuchu
	//is_in_note_edit_form -> attributes/elements to add/remove whther or not the boi is within a note edit form
	'is_in_note_edit_form' => false, 
);

$args = app_parse_args($data,$defs);

?>
<div class="modal"
	<?php if(!$args['is_in_note_edit_form']): ?>
		id="share-note-REPLACEWithNoteId"
	<?php endif; ?>
	data-modal-width="700px"
	data-modal-close="false"
	data-modal-classes="dashboard-modal-gutterless dashboard-modal-share-notes"
>
	
	<!-- @if user has rights to share this notes -->
		<!-- Add Share -->
			<<?=$args['is_in_note_edit_form'] ? 'div' : 'form  method="get"' ?> class="share-note-with-add module p">
				<div class="grid grid-flex grid-constricted-x grid-compact grid-constricted-y align-items-center">
					<div class="grid-col flex-1-1">
						<h1 class="no-margin-y">Share Note</h1>
					</div>
					<div class="grid-col flex-0-0">
						<a class="modal-close" href="#" data-toggle="modal-close">
							<i class="symbol symbol-close"></i>
						</a>
					</div>
				</div>	

				<!-- @NOTE hidden input fields here for optimal layout -->

				<div class="input-wrapper input-wrapper-vertical input-wrapper-block p">
					<h5 class="font-weight-400 no-margin-bottom">Share this note with a group or person:</h5>
					<div class="grid grid-flex grid-fixed grid-compact">
						<div class="grid-col-xs-12 grid-col-sm-7 grid-col-md-8 position-relative">
							<input type="hidden" name="shareto-teammates-ids" />
							<input type="text" name="shareto-teammates" class="input input-tags" data-toggle="dropdown" placeholder="Type and search team members..." />
							<div class="dropdown" data-dropdown-width="100%">
								
								<ul>
									<!-- @DYNAMIC replace as needed -->
									<li><a href="#">Matching user name</a></li>
									<li><a href="#">Another matching user name</a></li>
									<li><a href="#">Other matching user name</a></li>
									<li><a href="#">Beyonce</a></li>
									<li><a href="#">Coco Martin</a></li>
									<li><a href="#">NoobMaster69</a></li>
									<li><a href="#">The Scottsman</a></li>
								</ul>
							</div>
						</div>
						<div class="grid-col-xs-12 grid-col-sm-5 grid-col-md-4">
							<select name="shareto-teammates-access-level" class="input-box input-box input-box-select">
								<option value="read-only">Viewer</option>
								<option value="read-write">Editor</option>
							</select>
						</div>
					</div>
				</div>

				

				<div class="input-wrapper p input-wrapper-vertical input-wrapper-block">
					<label class="input-toggle">
						<input type="checkbox" class="input" name="shareto-notify">
						<span class="input input-label input-toggle-label">
							Notify People
						</span>
					</label>
				</div>


				<!-- 

					@NOTE
						.input-wrapper
						classes to add
							`display-none` => if [name=shareto-notify] is checked
				-->
				<div class="input-wrapper p input-wrapper-vertical input-wrapper-block">
					<textarea name="shareto-notify-message" class="input-box input-box-multiline">Replace with tinymce</textarea>
				</div>

				
				<?php if(!$args['is_in_note_edit_form']): ?>
					<div class="text-align-right">
						<button type="submit" class="flex-0-0 btn btn-primary">Share</button>
					</div>
				<?php endif; ?>
			</<?=$args['is_in_note_edit_form'] ? 'div' : 'form' ?>>


		<!-- Edit share -->
			<<?=$args['is_in_note_edit_form'] ? 'div' : 'form  method="get"' ?> class="share-note-with-edit module">

				<!-- @NOTE hidden input fields here for optimal layout -->
				<input type="hidden" name="shareto-existing-delete-ids">

				<h2 class="no-margin-top font-weight-400">Already shared with</h2>
				
				<ul class="list-group">
				<!--
					@loop li

					@NOTE
						classes to add
							`display-none` if its descendant a[data-user-id-to-delete] is clicked and confirmed for deletion
				-->
					<li>
						<input type="hidden" name="shareto-existing[REPLACEWWithRowId]">
						<div class="grid grid-flex grid-fixed grid-constricted-y grid-compact align-items-center">
							<div class="grid-col-sm-8 grid-col-xs-6">
								<?php app_get_component('components/profile-named-for-share-notes') ?>
							</div>
							<div class="grid-col-sm-4 grid-col-xs-6">

								<!-- @if user is the author of the note -->
									<strong>Owner</strong>

								<!-- @else -->
									<div class="grid grid-flex grid-compact grid-constricted-y align-items-center justify-content-space-between">
										<div class="grid-col flex-1-1">
											<div class="input-wrapper input-wrapper-horizontal no-padding input-wrapper-block">
												<select name="shareto-existing[REPLACEWWithRowId][access-level]" class="input-box input-box input-box-select input-small">
													<option value="read-only">Viewer</option>
													<option value="read-write">Editor</option>
												</select>
											</div>
										</div>
										<div class="grid-col flex-0-0">
											<a href="#" class="color-neutral color-primary-focus color-primary-hover inline-flex-xs" data-user-id-to-delete="REPLACEWWithRowId">
												<i class="symbol symbol-delete"></i>
											</a>
										</div>
									</div>
							</div>
						</div>
					</li>


						<!-- @PLACEHOLDER delete when ready -->
							<?php for($i=1; $i<=3; $i++): ?>
							
								<li>
									<input type="hidden" name="shareto-existing[REPLACEWWithRowId]">
									<div class="grid grid-flex grid-fixed grid-constricted-y grid-compact align-items-center justify-content-space-between">
										<div class="grid-col-sm-8 grid-col-xs-6">
											<?php app_get_component('components/profile-named-for-share-notes') ?>
										</div>
										<div class="grid-col-sm-4 grid-col-xs-6">
										
											<!-- @if user is the author of the note -->
												<strong>Owner</strong>
										</div>
									</div>
								</li>
							
								<li>
									<input type="hidden" name="shareto-existing[REPLACEWWithRowId]">
									<div class="grid grid-flex grid-fixed grid-constricted-y grid-compact align-items-center">
										<div class="grid-col-sm-8 grid-col-xs-6">
											<?php app_get_component('components/profile-named-for-share-notes') ?>
										</div>
										<div class="grid-col-sm-4 grid-col-xs-6">
											<div class="grid grid-flex grid-compact grid-constricted-y align-items-center">
												<div class="grid-col flex-1-1">
													<div class="input-wrapper input-wrapper-horizontal no-padding input-wrapper-block">
														<select name="shareto-existing[REPLACEWWithRowId][access-level]" class="input-box input-box input-box-select input-small">
															<option value="read-only">Viewer</option>
															<option value="read-write">Editor</option>
														</select>
													</div>
												</div>
												<div class="grid-col flex-0-0">
													<a href="#" class="color-neutral color-primary-focus color-primary-hover inline-flex-xs" data-user-id-to-delete="REPLACEWWithRowId">
														<i class="symbol symbol-delete"></i>
													</a>
												</div>
											</div>
										</div>
									</div>
								</li>

							<?php endfor; ?>
				</ul>
				
				<?php if(!$args['is_in_note_edit_form']): ?>
					<div class="text-align-right">
						<button type="submit" class="flex-0-0 btn btn-primary">Save</button>
					</div>
				<?php endif; ?>
			</<?=$args['is_in_note_edit_form'] ? 'div' : 'form' ?>>
</div>