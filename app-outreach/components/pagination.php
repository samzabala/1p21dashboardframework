<div class="outreach-pagination outreach-pagination-default module-function">

	<div class="btn-group btn-block-mobile btn-group-horizontal">
		<!-- 

			@NOTE classes to add
				if skipping to previous page is impossible => `.btn-disabled`

		 -->
		<a href="#" title="prev" class="btn btn-default btn-symbol"><i class="symbol symbol-arrow-left"></i> </a>


		<!-- 
			@MODEL CODE

			@NOTE
				- designers would like a 0 prepended to digits less than 10.
				- !important: please make sure only 2 instances of page number digits after previous button and 2 digits before to next button are visible. if this exceeds. but an ellisis in place. this is so smaller screens dont get the overflow scrollbar as much as possible

					code: for ellipsis butt:

						<span class="btn btn-default btn-no-interaction page-number">...</span>

					this also displays in placeholder demo


			classes to add:
				if current page =>   `color-primary btn-no-interaction`
				default state  =>   `page-number background-primary-hover color-background-hover background-primary-focus color-background-focus`


				
				
		 -->
		<a href="#" class="btn
		btn-default page-number background-primary-hover color-background-hover background-primary-focus color-background-focus">
			<span class="REPLACE">01</span>
		</a>

		<!-- @PLACEHOLDER DELETE WHEN READY -->

		
		<?php $no_ellipsis_yet = true; for($j=2; $j<10; $j++){ ?>
			<?php  if($j>2 && $j<8): if( $no_ellipsis_yet ):?>
				<span class="btn btn-default btn-no-interaction page-number">
					...
				</span>
			<?php $no_ellipsis_yet = false; endif; else: ?>
				<a href="#" class="btn btn-default <?= ($j == 2 ? 'color-primary btn-no-interaction' : 'page-number background-primary-hover color-background-hover background-primary-focus color-background-focus') ?>">
					<span class="REPLACE"><?= $j <= 9 ? '0'.$j : $j ?></span>
				</a>
			<?php endif; ?>
		<?php } ?>

		
		<!-- 

			@NOTE classes to add
				if skipping to next page is impossible => `.btn-disabled`

		 -->
		<a href="#" title="next" class="btn btn-default btn-symbol"> <i class="symbol symbol-arrow-right"></i></a>

	</div>


</div>