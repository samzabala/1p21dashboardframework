
<div id="outreach-sequence-detail-heading" class="flex-grid justify-content-space-between align-items-center">
	<div class="flex-col-12  flex-col-md-8">
		<h1 class="no-margin">
			Sequence: <span class="REPLACE">My favorite Sequence</span>
		</h1>
	</div>
	<div class="flex-col-12  flex-col-md-4 text-align-right">
		<?php app_get_component('components/function-add-sequence-step') ?>
	</div>
</div>

<?php app_get_component('components/module-sequence-settings') ?>
<div class="position-relative">
	<!-- @if has steps -->
		<?php app_get_component('components/module-sequence-step') ?>
			<!-- @PLACEHOLDER: DELETE WHEN READY -->
				
				<?php for($i=2; $i<=4; $i++){; ?>
					<?php app_get_component('components/module-sequence-step','',false,array(
						'increment' => $i
					)) ?>
				<?php } ?>

	<!-- New step -->
		<?php app_get_component('components/module-sequence-step','',false,array(
			'increment' => 5, //@PLACEHOLDER set based on last increment
			'is_last' => true,
		)) ?>

</div>


<div class="text-align-right padding-small-y">
	<button class="btn btn-primary ">Save Changes</button>
</div>
