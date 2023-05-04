<!--
Imports JS:

Accordion from framework/src/js/imports/accordion


Imports CSS:

@import framework/src/scss/_accordion

-->
<div class="module switch switch-idle  no-padding-y margin-bottom">
	<div class="module-header module-end-break no-margin-y padding-small-y pointer-reference">
		<a href="#sequence-settings" class="no-margin h4 color-primary text-decoration-none "  data-toggle-accordion>Sequence Settings <i class="symbol symbol-arrow-down symbol-arrow-up-toggle only-hover"></i></a>
		<div class="module-functions">
			<div class="module-function">
				<a href="#sequence-settings" data-toggle-accordion  class="btn btn-link">Edit</a>
				<a href="" class="btn btn-link">Delete</a>
			</div>
		</div>
	</div>
    <div id="sequence-settings" class="module-content accordion no-margin-bottom padding-top border-width-thin-top border-style-solid-top border-color-theme-polar-contrast">
		<div class="input-wrapper input-wrapper-block input-wrapper-vertical p">
			<label for="sequence-name" class="input input-label">Sequence Name</label>
			<input type="text" name=""  id="sequence-name" class=" input input-box" placeholder="Type a sequence name " />
		</div>


		<div class="grid grid-flex grid-compact align-items-center">
			<div class="grid-col flex-1-1">
				
				<p for="sequence-name" class="input input-label display-block">Sharing Options</p>
				<label class="margin-right">
					Personal&nbsp;
					<input type="checkbox" name="">
				</label>
				<label class="">
					Shared&nbsp;
					<input type="checkbox" name="">
				</label>
			</div>
			<div class="grid-col flex-1-0 text-align-right">

				<a href="#sequence-settings" data-toggle-accordion class="btn btn-link">Cancel</a>
				<button class="btn btn-primary">Save</button>
			</div>
		</div>
    </div>
</div>