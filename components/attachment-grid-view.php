
<div class="grid grid-flex justify-content-flex-start grid-constricted-y">
	
	<!-- @LOOP component .grid-col  -->
		<!-- <div class="grid-col"> -->
			<?php app_get_component('components/attachment'); ?>
		<!-- </div> -->

		<!-- @PLACEHOLDER: DELETE WHEN READY -->
			<?php for($i=1; $i<6; $i++){ ?>
				
				<!-- <div class="grid-col"> -->
					<?php app_get_component('components/attachment'); ?>
				<!-- </div> -->
			<?php } ?>

</div>