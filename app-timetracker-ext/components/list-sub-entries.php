<div class="background-primary-alpha-1 color-neutral-dark">
	<!-- @loop div -->
		<div class="border-color-neutral-alpha-1 border-width-thin-top border-style-solid padding-x background-primary-alpha-1-hover">
			<div class="flex-grid flex-grid-fixed flex-grid-no-gutter-y align-items-center flex-nowrap">
				<div class="flex-child flex-1-1 padding-small-y">
					<div class="color-theme-contrast">
						<span class="REPLACE">4/20/2069</span>
					</div>
				</div>
				<div class="flex-child flex-0-0 padding-small-y text-align-right">
					<span class="color-neutral-dark">
						<span class="REPLACE">06:00AM</span>-<span class="REPLACE">09:00AM</span>
					</span>
				</div>
				<div class="flex-col-2 text-align-center">
					<a href="#" data-toggle-modal-default class="tag background-primary"><i class="symbol symbol-text-left"></i></a>
					<div class="modal modal-default" data-modal-width="100%" data-modal-title="Entry Notes">
						<?php app_get_component('components/_DEMO-html-markup'); ?>
					</div>
				</div>
				<div class="flex-col-2 text-align-right justify-content-flex-end flex-xs align-items-center">
					
					<div class="padding-small-y font-weight-700 color-theme-contrast">
						<span class="REPLACE">4:20</span>
					</div>

					<a href="<?=app_create_link(array('template' => 'log-edit')) ?>" class="margin-small-left font-size-large"><i class="symbol symbol-pencil"></i></a>
				</div>
			</div>
		</div>

			<!-- @PLACEHOLDER: Delete when ready -->
				<?php for($g = 0; $g < 9; $g++): ?>
					<div class="border-color-neutral-alpha-1 border-width-thin-top border-style-solid padding-x background-primary-alpha-1-hover">
						<div class="flex-grid flex-grid-fixed flex-grid-no-gutter-y align-items-center">
							<div class="flex-child flex-1-1 padding-small-y">
								<div class="color-theme-contrast">
									<span class="REPLACE">4/20/2069</span>
								</div>
							</div>
							<div class="flex-child flex-0-0 padding-small-y text-align-right">
								<span class="color-neutral-dark">
									<span class="REPLACE">06:00AM</span>-<span class="REPLACE">09:00AM</span>
								</span>
							</div>
							<div class="flex-col-2 text-align-center">
								<a href="#" data-toggle-modal-default class="tag background-primary"><i class="symbol symbol-text-left"></i></a>
								<div class="modal modal-default" data-modal-width="100%" data-modal-title="Entry Notes">
									<?php app_get_component('components/_DEMO-html-markup'); ?>
								</div>
							</div>
							<div class="flex-col-2 text-align-right justify-content-flex-end flex-xs align-items-center">
								
								<div class="padding-small-y font-weight-700 color-theme-contrast">
									<span class="REPLACE">4:20</span>
								</div>

								<a href="<?=app_create_link(array('template' => 'log-edit')) ?>" class="margin-small-left font-size-large"><i class="symbol symbol-pencil"></i></a>
							</div>
						</div>
					</div>
				<?php endfor; ?>

</div>