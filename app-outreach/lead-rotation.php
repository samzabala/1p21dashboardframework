
<div id="outreach-leads-rotation-heading" class="flex-grid justify-content-space-between align-items-center">
	<div class="flex-col-12  flex-col-md-8">
		<h1 class="no-margin">
			<?= ucwords(str_replace('-',' ',FWAPPS_TEMPLATE)) ?>
		</h1>
		<p>Configure automatic assignment of incoming leads to your sales team.</p>
	</div>
</div>


<div id="outreach-lead-rotation" class="module">
	<div class="module-content no-padding-y">
		<div class="flex-grid justify-content-space-between align-items-center">

			<div class="flex-col-12  flex-col-md-8">
				<h2 class="no-margin-y">
					Distribution method
				</h2>
				<p class="no-margin-y color-neutral">How leads are assigned when they come in</p>
			</div>
			<div class="flex-col-12 flex-col-md-4 text-align-right">

				<div class="display-inline-block position-relative">
					<div class="btn btn-neutral-outline" data-toggle-dropdown="">Default lead owner</div>
					<ul class="dropdown dropdown-right">
						<li>Item</li>
						<li>Item</li>
						<li>Item</li>
						<li>Item</li>
						<li>Item</li>
						<li>Item</li>
					</ul>
				</div>

				
				<!-- @classes to add
					
					a.btn
						`btn-primary-glassy border-color-primary background-primary-active background-primary-hover` => if weighted is toggled
						`btn-neutral-outline` => if weighted is disabled
				-->
				<a href="#" class="btn btn-large font-size-normalize btn-block-mobile
					btn-neutral-outline
				">
					Weighted
				</a>	
				
				<!-- @classes to add
					
					a.btn
						`btn-primary-glassy border-color-primary background-primary-active background-primary-hover` => if round robin is toggled
						`btn-neutral-outline` => if round robin is disabled
				-->
				<a href="#" class="btn btn-large font-size-normalize btn-block-mobile
					btn-primary-glassy border-color-primary background-primary-active background-primary-hover
				">
					Round Robin
				</a>		
			</div>
			<div class="flex-col-12">
				<!-- @if weighted mode -->
					<div class="module border-color-success-light color-success-dark background-success-alpha-1">

						<!-- @REPLACE with feedback based on toggled control -->
						 <div class="">
							<strong>Round-robin mode:</strong> Leads cycle evenly through active reps in order. When ignored - all active reps get equal distribution

						 </div>
					</div>
				<!-- @else if robin mode -->

					<div class="module border-color-primary-light color-primary-dark background-primary-alpha-1">

						<!-- @REPLACE with feedback based on toggled control -->
						 <div class="">
							<strong>Weighted mode:</strong> Leads are distributed proportionally based on each rep's weight. Higher weight = more leads. Set weights below then save.

						 </div>
					</div>
			</div>
		</div>
	</div>
</div>

<h5 class="color-neutral margin-large-y text-transform-uppercase">
	In Rotation
	(<span class="REPLACE">4</span>)
</h5>


<form action="">

	<!-- @LOOP .module -->

				
		<!-- @classes to add
			
			a.module
				`disabled` => if disabled
		-->
		<div id="outreach-lead-rotation" class="module margin-bottom">

			<div class="module-content no-margin-x no-padding">

				<div class="flex-grid align-items-center flex-grid-fixed">
					<div class="flex-child flex-0-0">

						<a href="<?=app_create_link(array('template' => 'profile')); ?>" class="company-acct-owner text-align-center">
							<?php app_get_component('components/profile-image-micro') ?>
						</a>
					</div>
					<div class="flex-child flex-1-1">
						<a class="color-inherit" href="<?= app_create_link(array('template'=>'profile')) ?>">

							<h5 class="no-margin-y">
								<span class="REPLACE">Qin Che</span>
							</h5>
							<div class="company-domain text-wrap-ellipsis">
								<span class="REPLACE">Senior AE</span>
							</div>
						</a>
					</div>


			<!-- @classes to add
				
				div.flex-child
					`disabled` => if robin mode
			-->
					<div class="flex-child flex-0-0 text-align-right">
						<div class="flex-grid align-items-center flex-grid-fixed flex-grid-no-gutter-y flex-nowrap justify-content-flex-end">
							<div class="flex-child flex-0-0">
								<label class="font-weight-400 text-nowrap">% of leads: </label>
							</div>

							<div class="flex-col-xs-3 text-align-left">
								<input class="input input-single-line input-block " maxlength="6" placeholder="00" type="number">
							</div>
							<div class="flex-child flex-0-0 text-align-right">
								<div class="input-toggle input-large">
									<input type="checkbox" class="input">
									<span class="input-label input-toggle-label">
										&nbsp;
									</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>

		<?php for($j=1; $j<=12; $j++){ ?>
			<div id="outreach-lead-rotation" class="module margin-bottom
				<?= $j % 2 == 0 ? 'disabled' : ''; ?>
			">

				<div class="module-content no-margin-x no-padding">

					<div class="flex-grid align-items-center flex-grid-fixed">
						<div class="flex-child flex-0-0">

							<a href="<?=app_create_link(array('template' => 'profile')); ?>" class="company-acct-owner text-align-center">
								<?php app_get_component('components/profile-image-micro') ?>
							</a>
						</div>
						<div class="flex-child flex-1-1">
							<a class="color-inherit" href="<?= app_create_link(array('template'=>'profile')) ?>">

								<h5 class="no-margin-y">
									<span class="REPLACE"><?= $j % 4 == 0 ? 'Li Shen' : 'Qin Che'; ?></span>
								</h5>
								<div class="company-domain text-wrap-ellipsis">
									<span class="REPLACE">Senior AE</span>
								</div>
							</a>
						</div>


				<!-- @classes to add
					
					div.flex-child
						`disabled` => if robin mode
				-->
						<div class="flex-child flex-0-0 text-align-right
						<?= $j % 3 == 0 ? 'disabled' : ''; ?>
						">
							<div class="flex-grid align-items-center flex-grid-fixed flex-grid-no-gutter-y flex-nowrap">
								<div class="flex-grid align-items-center flex-grid-fixed flex-grid-no-gutter-y flex-nowrap justify-content-flex-end">
									<div class="flex-child flex-0-0">
										<label class="font-weight-400 text-nowrap">% of leads: </label>
									</div>

									<div class="flex-col-xs-3 text-align-left">
										<input class="input input-single-line input-block " maxlength="6" placeholder="00" type="number">
									</div>
									<div class="flex-child flex-0-0 text-align-right">
										<div class="input-toggle input-large">
											<input type="checkbox" class="input">
											<span class="input-label input-toggle-label">
												&nbsp;
											</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		<?php } ?>

		<p class="margin-y text-align-right">
			<button class="btn btn-primary btn-large">Save configuration</button>
		</p>

</form>