


<!-- NOTE this field is an extension of the editor's fields -->
<div class="modal" data-modal-max-width="800px">

	<!-- @NOTE might need to have suffixes appended to input field name to avoid conflicting other innstances of user filter components -->

	<div class="p">

		<!-- @dynamic/loop .workflux-row -->
			<div class="workflux-row no-margin-y flex-grid flex-grid-fixed flex-grid-compact justify-content-space-between align-items-center">

				<div class="flex-child flex-1-1 position-relative ">
					<div class="input-group input-group-block input-group-horizontal">
						
						<button href="#" id="REPLACEMODE-task-worfklux-board-name[ROWINDEX]" name="REPLACEMODE-task-worfklux-board-name[ROWINDEX]"  type="text" class="input input-select" data-toggle="dropdown">
							<!-- @if workflux board is selected -->
								<span class="workflux-board-name">
									Workflux board name
								</span>
							<!-- @else -->
								<span class="workflux-board-name">
									Select a workflux board
								</span>
						</button>
						<input id="REPLACEMODE-task-worfklux-board-id[ROWINDEX]" name="REPLACEMODE-task-worfklux-board-id[ROWINDEX]" type="hidden" />


						<input id="REPLACEMODE-task-worfklux-list-id[ROWINDEX]" name="REPLACEMODE-task-worfklux-list-id[ROWINDEX]" type="hidden" />
						<select href="#" id="REPLACEMODE-task-worfklux-list-name[ROWINDEX]" name="REPLACEMODE-task-worfklux-list-name[ROWINDEX]"  class="input input-select">

						<!-- PLACEHOLDER: @NOTE i realized this might mean the list like how trello is setup -->
							<option value="">Select workflux board List</option>
							<option value="">To Do</option>
							<option value="">In Progress</option>
							<option value="">To Review</option>
							<option value="">Completed</option>
							<option value="">Icebox</option>
							<option value="">Documentation</option>
							<option value="">Ideas</option>
						</select>

					</div>
					<div class="dropdown no-padding dropdown-left dropdown-top-flush" data-dropdown-width="100%">
						<?php app_get_component('components/list-group-toggle-workflux-small'); ?>
					</div>
				</div>
				<div class="flex-child flex-0-0 text-align-right">
					<button class="btn btn-symbol btn-small btn-primary" title="add new row after"><i class="symbol symbol-plus"></i></button>


					<!-- @if row is not the first entry -->
						<button class="btn btn-symbol btn-small  btn-secondary" title="delete row"><i class="symbol symbol-minus"></i></button>
				</div>
			</div>


				<!-- @PLACEHOLDER -->
					<?php for($i=1; $i<3; $i++){ ?>
						<div class="workflux-row no-margin-y flex-grid flex-grid-fixed flex-grid-compact justify-content-space-between align-items-center">

							<div class="flex-child flex-1-1 position-relative ">
								<div class="input-group input-group-block input-group-horizontal">
									
									<button href="#" id="REPLACEMODE-task-worfklux-board-name[ROWINDEX]" name="REPLACEMODE-task-worfklux-board-name[ROWINDEX]"  type="text" class="input input-select" data-toggle="dropdown">
										<!-- @else -->
											<span class="workflux-board-name">
												Select a workflux board
											</span>
									</button>
									<input id="REPLACEMODE-task-worfklux-board-id[ROWINDEX]" name="REPLACEMODE-task-worfklux-board-id[ROWINDEX]" type="hidden" />


									<input id="REPLACEMODE-task-worfklux-list-id[ROWINDEX]" name="REPLACEMODE-task-worfklux-list-id[ROWINDEX]" type="hidden" />
									<select href="#" id="REPLACEMODE-task-worfklux-list-name[ROWINDEX]" name="REPLACEMODE-task-worfklux-list-name[ROWINDEX]"  class="input input-select">

									<!-- PLACEHOLDER: @NOTE i realized this might mean the list like how trello is setup -->
										<option value="">Select workflux board List</option>
										<option value="">To Do</option>
										<option value="">In Progress</option>
										<option value="">To Review</option>
										<option value="">Completed</option>
										<option value="">Icebox</option>
										<option value="">Documentation</option>
										<option value="">Ideas</option>
									</select>

								</div>
								<div class="dropdown no-padding dropdown-left dropdown-top-flush" data-dropdown-width="100%">
									<?php app_get_component('components/list-group-toggle-workflux-small'); ?>
								</div>
							</div>
							<div class="flex-child flex-0-0 text-align-right">
								<button class="btn btn-symbol btn-small btn-primary" title="add new row after"><i class="symbol symbol-plus"></i></button>


								<!-- @if row is not the first entry -->
									<button class="btn btn-symbol btn-small  btn-secondary" title="delete row"><i class="symbol symbol-minus"></i></button>
							</div>
						</div>
					<?php } ?>


	</div>

	<div data-toggle="modal-close" class="btn btn-primary-outline btn-block"  onclick="REPLACEWithFnThatMakesChangesToCorrespondingInputFieldName">Done</div>
</div>