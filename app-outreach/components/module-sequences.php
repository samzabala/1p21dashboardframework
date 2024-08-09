<div class="module">
	<div class="module-header">
		<h3 class="module-title">Upcoming Events and Tasks</h3>
	</div>
	<div class="module-content">
	<!-- @if has squences -->
		<!-- @loop component -->
			<div class="event-row flex-nowrap flex-grid flex-grid-compact">
				<div class="flex-child flex-0-0">
						<!-- 
							.btn
								classes to add
									'active' => if currently active
				
				
						-->
						<a href="#" class="btn btn-neutral-glassy btn-round btn-symbol">
							<i class="symbol symbol-play symbol-pause-toggle"></i>
						</a>
				</div>
				<div class="flex-child flex-1-1">
					<h5 class="no-margin-y">
						<a href="<?= app_create_link(array('template' => 'profile')) ?>">
							<span class="REPLACE">Yuji Itadori</span>
						</a>
						
						is enrolled in

						<a href="<?= app_create_link(array('template' => 'sequence-detail')) ?>">
							<span class="REPLACE">Culling Games</span>
						</a>

						sequence
					</h5>
					<p class="color-neutral no-margin-y">
						<span class="REPLACE">6 of 9</span> steps complete. Next Step: <span class="REPLACE">10/31/2018</span>
					</p>
				</div>
			</div>






				<!-- @PLACEHOLDER: DELETE WHEN READY -->
					<?php for($i=1; $i<=2; $i++){ ?>

						<div class="event-row flex-nowrap flex-grid flex-grid-compact">
							<div class="flex-child flex-0-0">
									<a href="#" class="active btn btn-neutral-glassy btn-round btn-symbol">
										<i class="symbol symbol-play symbol-pause-toggle"></i>
									</a>
							</div>
							<div class="flex-child flex-1-1">
								<h5 class="no-margin-y">
									<a href="<?= app_create_link(array('template' => 'profile')) ?>">
										<span class="REPLACE">Satoru Gojo</span>
									</a>
									
									is enrolled in

									<a href="<?= app_create_link(array('template' => 'sequence-detail')) ?>">
										<span class="REPLACE">Shinjuku Showdown</span>
									</a>

									sequence
								</h5>
								<p class="color-neutral no-margin-y">
									<span class="REPLACE">6 of 9</span> steps complete. Next Step: <span class="REPLACE">12/24/2018</span>
								</p>
							</div>
						</div>

						<div class="event-row flex-nowrap flex-grid flex-grid-compact">
							<div class="flex-child flex-0-0">
									<a href="#" class="btn btn-neutral-glassy btn-round btn-symbol">
										<i class="symbol symbol-play symbol-pause-toggle"></i>
									</a>
							</div>
							<div class="flex-child flex-1-1">
								<h5 class="no-margin-y">
									<a href="<?= app_create_link(array('template' => 'profile')) ?>">
										<span class="REPLACE">Suguru Geto</span>
									</a>
									
									is enrolled in

									<a href="<?= app_create_link(array('template' => 'sequence-detail')) ?>">
										<span class="REPLACE">Night Parade of a Hundred Demons</span>
									</a>

									sequence
								</h5>
								<p class="color-neutral no-margin-y">
									<span class="REPLACE">6 of 9</span> steps complete. Next Step: <span class="REPLACE">12/24/2017</span>
								</p>
							</div>
						</div>
					<?php } ?>


			
		<!-- @else -->
			<p class="color-neutral font-style-italic">No sequences yet</p>
	</div>
</div>