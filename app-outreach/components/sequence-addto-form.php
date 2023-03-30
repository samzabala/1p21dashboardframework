<form action="">
	<div class="input-wrapper input-wrapper-block input-wrapper-vertical p">
		<label for="addto-sequences" class="input-label">Select from your Sequences</label>
		<input type="text" name=""  id="addto-sequences" class=" input input-single-line" list="addto-sequences-list" placeholder="Type to search " />
		<datalist id="addto-sequences-list">
			<option>This one sequence</option>
			<option>This other sequence</option>
			<option>Another sequence</option>
		</datalist>
	</div>
	<div class="input-wrapper input-wrapper-block input-wrapper-vertical p">
		<label for="addto-recipient" class="input-label">Select recipients</label>
		<input type="text" name=""  id="addto-recipient" class=" input input-single-line" list="addto-recipient-list" placeholder="Type to search " />
		<datalist id="addto-recipient-list">
			<option>hello@ace-attorney.com</option>
			<option>bye@asinine-attorney.com</option>
			<option>email@domain.com</option>
		</datalist>
	</div>
	<div class="text-align-right">
		<button class="btn btn-primary">Add</button>
	</div>
</form>