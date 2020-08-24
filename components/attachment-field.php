

	<!-- original design layout -->
		

			<!-- <div class="zone zone-primary">

				<input multiple id="<?=$args['post']?>-attachments-to-add" name="<?=$args['post']?>-attachments-to-add" type="file" />
				<span class="zone-text">
					Drag and drop attachments here
				</span>
			</div> -->


	<!-- stable layout -->

		<!-- @NOTE not sure if `.zone` setup from above may work out for attachments in a ux standpoint with how its built right now, but just in case not, use this alternative -->


		
			<div class="input-wrapper input-wrapper-vertical input-wrapper-block p">
				<label for="<?=$args['post']?>-attachments-to-add" class="input-label">Add Attachments</label>
				<input multiple id="<?=$args['post']?>-attachments-to-add" name="<?=$args['post']?>-attachments-to-add" type="file" class="input input-single-line" />
			</div>
	