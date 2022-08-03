
	<div class="comment-replies p">
		<a href="#" data-toggle="accordion">
			<!-- @NOTE .REPLACE will have number of replies instead -->
			<i class="symbol symbol-arrow-down"></i> View <span class="comment-reply-count"><span class="REPLACE">69</span></span> Replies
		</a>
		<div class="accordion dashboard-comment-replies-wrapper">

			<!-- @LOOP: hr and component  -->
				<hr>
				<?php app_get_component('components/comment-row-type-comment'); ?>

				<!-- @PLACEHOLDER: DELETE WHEN READY -->
					<?php for($i=1; $i<2; $i++){ ?>
						<hr>
						<?php app_get_component('components/comment-row-type-comment'); ?>
					<?php } ?>
		</div>
			 
	</div>