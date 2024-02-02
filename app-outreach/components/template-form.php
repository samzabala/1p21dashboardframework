
<form action="" class="template-editor">
	<div class="input-wrapper input-wrapper-block input-wrapper-vertical p">
		<label class="input-label">Template Name</label>
		<input type="text" class="input input-single-line" placeholder="Type a name for the template">
	</div>
	<?php /* <div class="input-wrapper input-wrapper-vertical p">
		<label class="input-label">Template Type</label>
		<select class="input input-select">
			<option value="">Select Type...</option>
			<!-- @PLACEHOLDER: Delete when ready -->
			<option value="">Company</option>
			<option value="">Another template type</option>
			<option value="">Other Template Type</option>
		</select>
	</div> */ ?>

	<div class="input-wrapper input-wrapper-block input-wrapper-vertical p">
		<label class="input-label">Subject</label>
		<input type="text" class="input input-single-line" placeholder="Type a name for the template">
	</div>

	<div class="input-wrapper input-wrapper-block input-wrapper-vertical p">
		<label class="input-label">Message</label>
		<textarea name="" id="" class="input input-multiple-line"  cols="30" rows="10"></textarea>
	</div>

	<div class="flex-grid flex-grid-compact align-items-flex-end">
		<div class="flex-child flex-1-0">
			<h5 class="no-margin-y">Customizeable Fields</h5>

			<!-- hidden input fields here if needed -->

			<a href="#" class="btn btn-small btn-primary-glassy margin-micro-top">Primary Contact First Name</a>
			<a href="#" class="btn btn-small btn-primary-glassy margin-micro-top">Primary Contact Last Name</a>
			<a href="#" class="btn btn-small btn-primary-glassy margin-micro-top">Company Name</a>
			<a href="#" class="btn btn-small btn-primary-glassy margin-micro-top">Domain Name</a>
			<a href="#" class="btn btn-small btn-primary-glassy margin-micro-top">Company Website</a>
			<a href="#" class="btn btn-small btn-primary-glassy margin-micro-top">City</a>
			<a href="#" class="btn btn-small btn-primary-glassy margin-micro-top">State</a>
			<a href="#" class="btn btn-small btn-primary-glassy margin-micro-top">ARC Score</a>

		</div>
	</div>

	<div class="flex-grid flex-grid-fixed flex-grid-compact margin-large-top align-items-center">
		<div class="flex-child flex-0-0">
			<div class="flex-sm align-items-center">
				<h5 class="no-margin-y margin-small-right">Share With:</h5>
				<label for="" class="margin-small-right">
					<span>None</span>
					<input type="radio" name="template-share-to">
				</label>
				<label for="" class="margin-small-right">
					<span>All</span>
					<input type="radio" name="template-share-to">
				</label>
				<label for="" class="margin-small-right">
					<span>Select Users</span>
					<input type="radio" name="template-share-to">
				</label>
			</div>
		</div>
		<!-- @if selected users -->
			<div class="flex-child flex-1-1">
				<div class="input-wrapper input-wrapper input-wrapper-horizontal">
					<label for="template-share" class="input-label font-weight-400 color-neutral">Type in name and hit enter/return to select</label>
					<input id="template-share" type="text" class="input input-single-line" placeholder="Type a name for the template" list="template-share-users">
					<datalist id="template-share-users">
						<option value="Phoenix Wright"></option>
						<option value="Miles Edgeworth"></option>
						<option value="Maya Fey"></option>
						<option value="Mia Fey"></option>
					</datalist>
				</div>
			</div>
	</div>

	<!-- @if has selected users -->
		<!-- @loop div -->
			<div class="tag tag-primary text-transform-none font-size-normalize font-weight-400">
				<span class="REPLACE">Phoenix Wright</span>
				<a href="" class="color-inherit"><i class="symbol symbol-close"></i></a>
			</div>

			<!-- @PLACEHOLDER: DELETE WHEN READY -->
				<div class="tag tag-primary text-transform-none font-size-normalize font-weight-400">
					<span class="REPLACE">Phoenix Wright</span>
					<a href="" class="color-inherit"><i class="symbol symbol-close"></i></a>
				</div>
				<div class="tag tag-primary text-transform-none font-size-normalize font-weight-400">
					<span class="REPLACE">Miles Edgeworth</span>
					<a href="" class="color-inherit"><i class="symbol symbol-close"></i></a>
				</div>
				<div class="tag tag-primary text-transform-none font-size-normalize font-weight-400">
					<span class="REPLACE">Maya Fey</span>
					<a href="" class="color-inherit"><i class="symbol symbol-close"></i></a>
				</div>
				<div class="tag tag-primary text-transform-none font-size-normalize font-weight-400">
					<span class="REPLACE">Mia Fey</span>
					<a href="" class="color-inherit"><i class="symbol symbol-close"></i></a>
				</div>
				<div class="tag tag-primary text-transform-none font-size-normalize font-weight-400">
					<span class="REPLACE">Apollo Justice</span>
					<a href="" class="color-inherit"><i class="symbol symbol-close"></i></a>
				</div>
				<div class="tag tag-primary text-transform-none font-size-normalize font-weight-400">
					<span class="REPLACE">Mia Fey</span>
					<a href="" class="color-inherit"><i class="symbol symbol-close"></i></a>
				</div>
				<div class="tag tag-primary text-transform-none font-size-normalize font-weight-400">
					<span class="REPLACE">Mia Fey</span>
					<a href="" class="color-inherit"><i class="symbol symbol-close"></i></a>
				</div>
				


	<div class="text-align-right">
		<button  class="btn btn-primary " type="submit">Save Template</button>
	</div>
</form>