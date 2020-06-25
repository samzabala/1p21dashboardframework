<div class="flex-grid flex-grid-no-gutter justify-content-space-between align-items-center">

	<!-- original design layout -->
	
		<div class="flex-col-xs-6">
			<h4 class="no-margin-y">
				Attachments
			</h4>
		</div>


		<div class="flex-col-xs-6 text-align-right">
			<a href="#" onClick="REPLACEfnToTriggertaskAttachmentsToAdd(event)" class="btn btn-primary-outline btn-small btn-round">Add Attachment <i class="symbol symbol-plus"></i></a>
		</div>
		

		<div class="flex-col-xs-12">
			<div class="zone zone-primary">

				<span class="zone-text">
					Drag and drop attachments here
				</span>
			</div>
		</div>


	<!-- stable layout -->

		<!-- @NOTE not sure if `.zone` setup from above may work out for attachments in a ux standpoint with how its built right now, but just in case not, use this alternative. replace grid children` -->


		<!-- <div class="flex-col-xs-12">
			<h4 class="no-margin-top">
				Attachments
			</h4>
		</div>

		
		<div class="flex-col-xs-12">
			<div class="input-wrapper input-wrapper-horizontal input-wrapper-block p">
				<label for="task-attachments-to-add"" class="input-label">Add Attachments</label>
				<input multiple id="task-attachments-to-add" name="task-attachments-to-add" type="file" class="input input-single-line" />
			</div>
		</div> -->
	
</div>