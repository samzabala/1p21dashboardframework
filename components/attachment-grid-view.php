
<div class="flex-grid justify-content-flex-start">
	
	<!-- @LOOP component .flex-child  -->
		<!-- <div class="flex-child"> -->
			<?php app_get_component('components/attachment'); ?>
		<!-- </div> -->

		<!-- @PLACEHOLDER: DELETE WHEN READY -->
			<?php for($i=1; $i<6; $i++){ ?>
				
				<!-- <div class="flex-child"> -->
					<?php app_get_component('components/attachment'); ?>
				<!-- </div> -->
			<?php } ?>

</div>