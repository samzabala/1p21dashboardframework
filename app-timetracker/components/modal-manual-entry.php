<div id="m-manual-entry" class="modal modal-default" data-modal-width="900px">
	<h2 class="no-margin-top margin-small-bottom">Manual Time Entry</h2>
	<p class="no-margin-y">Add your time entry below</p>
	<div class="flex-grid flex-grid-fixed flex-grid-compact">
		<div class="flex-col-xs-12 flex-col-md-6">
			<div class="input-wrapper input-wrapper-vertical input-wrapper-block">
				<label for="manual-client" class="input-label font-weight-600">Client</label>
				<input id="manual-client" placeholder="Enter Client Name" type="text" list="clients" class="input input-single-line" />

				<datalist id="clients">
					<!-- @if has input value -->
						<option data-value="REPLACEWithInputValue" ref="createNew">Create new Client `REPLACEWithInputValue`</option>

					<!-- @loop option -->
						<option data-value="REPLACEWithClientName">REPLACEWithClientName</option>
									
						<!-- @PLACEHOLDER. delete when ready -->
							<option data-value="Wright & Co Law Offices">Wright & Co Law Offices</option>
							<option data-value="1Point21 Internal">1Point21 Internal</option>
							<option data-value="Samurai Jack">Samurai Jack</option>
							<option data-value="Ghost Stories American Dub">Ghost Stories American Dub</option>
							<option data-value="Inuyasha">Inuyasha</option>
							<option data-value="Mang Inasal">Mang Inasal</option>
							<option data-value="Jollibee">Jollibee</option>
							<option data-value="The Mandalorian">The Mandalorian</option>
							<option data-value="Ranking of Kings">Ranking of Kings</option>
							<option data-value="Eren Yeager">Eren Yeager</option>
							<option data-value="Not Eren Yeager">Not Eren Yeager</option>
							<option data-value="Beyonce">Beyonce</option>
							<option data-value="Liza Soberano">Liza Soberano</option>
				</datalist>
			</div>
		</div>
		<div class="flex-col-xs-12 flex-col-md-6">
			<div class="input-wrapper input-wrapper-vertical input-wrapper-block">
				<label for="manual-project" class="input-label font-weight-600">Project</label>
				<input id="manual-project" type="text" placeholder="Enter Project Name" list="projects" class="input input-single-line" />

				<datalist id="projects">
					<!-- @if has input value -->
						<option data-value="REPLACEWithInputValue" ref="createNew">Create new Project `REPLACEWithInputValue`</option>

					<!-- @loop option -->
						<option data-value="REPLACEWithProjectName">REPLACEWithProjectName</option>
											
						<!-- @PLACEHOLDER. delete when ready -->
							<option data-value="A Project">A Project</a></li>
							<option data-value="Another Project">Another Project</a></li>
							<option data-value="This other Project">This other Project</a></li>
							<option data-value="Other Other Project">Other Other Project</a></li>
							<option data-value="Oh Lordy that's a lot of Projects">Oh Lordy that's a lot of Projects</a></li>
							<option data-value="Chemical X">Chemical X</a></li>
							<option data-value="Mekeni Mekeni Dugdug Doremi (Repeat)">Mekeni Mekeni Dugdug Doremi (Repeat)</a></li>
							<option data-value="Tongtongtongtongpakitongkitong">Tongtongtongtongpakitongkitong</a></li>
							<option data-value="Bababa ba? Bababa!">Bababa ba? Bababa!</a></li>
				</datalist>
			</div>
		</div>
		<div class="flex-col-xs-12 flex-col-md-6">
			<div class="input-wrapper input-wrapper-vertical input-wrapper-block">
				<label for="manual-category" class="input-label font-weight-600">Task Category</label>
				<input id="manual-category" placeholder="Click Here to Enter Category" type="text" list="tasks" class="input input-single-line" />
		
				<datalist id="tasks">
					<!-- @if has input value -->
						<option data-value="REPLACEWithInputValue" ref="createNew">Create new Category `REPLACEWithInputValue`</option>

					<!-- @loop option -->
						<option data-value="REPLACEWithTaskName">REPLACEWithTaskName</option>
								
						<!-- @PLACEHOLDER. delete when ready -->
							<option data-value="A Task">A Category</a></li>
							<option data-value="Another Category">Another Category</a></li>
							<option data-value="This other Category">This other Category</a></li>
							<option data-value="Other Other Category">Other Other Category</a></li>
				</datalist>
			</div>
		</div>
		<div class="flex-col-xs-12 flex-col-md-6">
			<div class="input-wrapper input-wrapper-vertical input-wrapper-block">
				<label for="manual-tasks" class="input-label font-weight-600">Task</label>
				<input id="manual-tasks" placeholder="Click Here to Enter Task Title" type="text" list="tasks" class="input input-single-line" />
		
				<datalist id="tasks">
					<!-- @if has input value -->
						<option data-value="REPLACEWithInputValue" ref="createNew">Create new Task `REPLACEWithInputValue`</option>

					<!-- @loop option -->
						<option data-value="REPLACEWithTaskName">REPLACEWithTaskName</option>
								
						<!-- @PLACEHOLDER. delete when ready -->
							<option data-value="A Task">A Task</a></li>
							<option data-value="Another Task">Another Task</a></li>
							<option data-value="This other Task">This other Task</a></li>
							<option data-value="Other Other Task">Other Other Task</a></li>
							<option data-value="Oh Lordy that's a lot of Tasks">Oh Lordy that's a lot of Tasks</a></li>
							<option data-value="Make the walls go RUMBLING. RUMBLING">Make the walls go RUMBLING. RUMBLING</a></li>
							<option data-value="Float left everything">Float left everything</a></li>
							<option data-value="Suntukan sa Ace Hardware">Suntukan sa Ace Hardware</a></li>
							<option data-value="Poop">Poop</a></li>
				</datalist>
			</div>
		</div>
		<div class="flex-col-xs-12">
			<div class="input-wrapper input-wrapper-vertical input-wrapper-block">
				<label for="manual-task-notes" class="input-label font-weight-600">Description</label>
				<textarea id="manual-task-notes" placeholder="Add task description here." class="input input-multiple-line"></textarea>
			</div>
		</div>
		<div class="flex-col-xs-12">
			<div class="flex-grid flex-grid-fixed flex-grid-no-gutter-y">
				<div class="flex-col-xs-12 flex-col-md-5">
					<div class="flex-grid flex-grid-fixed flex-grid-compact">
						<div class="flex-col-xs-12 flex-col-sm-7">
							<div class="input-wrapper input-wrapper-vertical input-wrapper-block">
								<label for="manual-start-date" class="input-label font-weight-600">Start Date</label>
								<input id="manual-start-date" type="date" class="input input-single-line" />
							</div>
						</div>
						<div class="flex-col-xs-12 flex-col-sm-5">
							<div class="input-wrapper input-wrapper-vertical input-wrapper-block">
								<label for="manual-start-time" class="input-label font-weight-600">Start Time</label>
								<input id="manual-start-time" type="time" class="input input-single-line" />
							</div>
						</div>
					</div>
				</div>
				<div class="flex-col-xs-12 flex-col-md-5">
					<div class="flex-grid flex-grid-fixed flex-grid-compact">
						<div class="flex-col-xs-12 flex-col-sm-7">
							<div class="input-wrapper input-wrapper-vertical input-wrapper-block">
								<label for="manual-end-date" class="input-label font-weight-600">End Date</label>
								<input id="manual-end-date" type="date" class="input input-single-line" />
							</div>
						</div>
						<div class="flex-col-xs-12 flex-col-sm-5">
							<div class="input-wrapper input-wrapper-vertical input-wrapper-block">
								<label for="manual-end-time" class="input-label font-weight-600">End Time</label>
								<input id="manual-end-time" type="time" class="input input-single-line" />
							</div>
						</div>
					</div>
				</div>
				<div class="flex-col-xs-12 flex-col-md-2">
					<div class="flex-grid flex-grid-fixed flex-grid-compact">
						<div class="flex-col-xs-12">
							<div class="input-wrapper input-wrapper-vertical input-wrapper-block">
								<label for="manual-total-time" class="input-label font-weight-600">Total Time</label>
								<input id="manual-total-time" type="text" placeholder="HH:MM" class="input input-single-line" />
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="flex-col-xs-12 hide-mobile">
			<span class="spacer"></span>
		</div>
		<div class="flex-col-xs-12 flex-col-md-8 align-self-center">
			<label class="input-toggle input-toggle-block-mobile">
				<input type="checkbox" class="input">
				<span class="input-label input-toggle-label">
					Sync to wrike
				</span>
			</label>
			<label class="input-toggle input-toggle-block-mobile">
				<input type="checkbox" class="input">
				<span class="input-label input-toggle-label">
					Billable
				</span>
			</label>
		</div>
		<div class="flex-col-xs-12 hide-nonmobile">
			<span class="spacer"></span>
		</div>
		<div class="flex-col-xs-12 flex-col-md-4 text-align-right align-self-center">
			<button class="btn btn-theme btn-block-mobile">Add Time Entry</button>
		</div>
	</div>
</div>