<div class="profile-image-multiple">
	<a class="thumbnail-cluster" href="#modal-more-members">
		<!-- @while profiles are < 3 : loop until it hits max number of dom items, 3 -->
			<span class="thumbnail thumbnail-small">
				<!-- @IF has profile imahe -->
				<div class="thumbnail-image">

					<img class="profile-image" data-src="<?=FWAPPS_ROOT_URL ?>/placeholder/profiles/team-des-jenn.jpg" alt="">
				</div>

				<!-- @ELSE -->
				<span class="thumbnail-text profile-name-initial">
					<span class="REPLACE">PN</span>
				</span>
			</span>

				<!-- @PLACEHOLDER: DELETE WHEN READY -->
					<?php for($i=1; $i<3; $i++){ ?>
					
						<span class="thumbnail thumbnail-small">
							<!-- @IF has profile imahe -->
							<div class="thumbnail-image">

								<img class="profile-image" data-src="<?=FWAPPS_ROOT_URL ?>/placeholder/profiles/team-des-jenn.jpg" alt="">
							</div>

							<!-- @ELSE -->
							<span class="thumbnail-text profile-name-initial">
								<span class="REPLACE">PN</span>
							</span>
						</span>


					<?php } ?>




		<!-- @if theres more than 3 -->
			<span class="thumbnail thumbnail-small">

				<!-- @ELSE -->
				<span class="thumbnail-text profile-extra-amount">
					<span class="REPLACE">69</span> + 
				</span>
			</span>


	</a>

	<!-- @note this should be reusable. replace title appropriately -->
	<div class="modal" id="modal-more-members" data-modal-max-width="400px" data-modal-title="Shared with...">
		<ul class="list-group">
			<li>
				<?php app_get_component('components/table-profile-named') ?>
			</li>

				<!-- @PLACEHOLDER: DELETE WHEN READY -->
					<?php for($i=1; $i<=10; $i++){ ?>
						<li>
							<?php app_get_component('components/table-profile-named') ?>
						</li>
					<?php } ?>
		</ul>
	</div>
</div>