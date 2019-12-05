<div
	id="project-scoreboard"
	class="module-grid"
	data-grid-template-rows-md="repeat( auto-fit, minmax(130px, auto) )"
	data-grid-template-columns-md="1fr 150px"
	data-grid-template-areas-md="
		'info info'
		'days days'
		'notes team'
		'notes SPACER'"

	data-grid-template-columns-lg="1fr 260px">
		
	<!-- info -->
		<div
			id="project-scoreboard-info"
			class="module"
			data-grid-area-md="info">



			<div class="flex-grid flex-grid-no-gutter-y">

				<div class="flex-col-md-5 flex-col-lg-6 flex-align-self-center">
					<p class="special-secondary background-gradient text-clip-background project-site no-margin"><span class="REPLACE">site.com</span></p>
					<p class="color-neutral no-margin project-name"><span class="REPLACE">Client Name</span></p>
				</div>
				
				<div class="flex-col-md-7 flex-col-lg-6 text-align-right flex-xs flex-align-items-center">
					
				
					<div class="project-meta flex-grid flex-grid-compact flex-grid-no-gutter flex-1-1 flex-align-items-center">
						<ul class="project-meta-traffic no-margin-bottom unstyled flex-col-12 flex-col-md-6">

						<!-- Search Traffic -->
							<li class="text-wrap-nowrap">
								<span class="font-size-small color-neutral text-transform-uppercase font-weight-700">Organic Search Traffic:</span>
								&nbsp;
								<span class="font-weight-700 project-search-traffic"><span class="REPLACE">0</span></span>
							</li>


						<!-- Search Traffic Change-->
							<li class="text-wrap-nowrap">
								<span class="font-size-small color-neutral text-transform-uppercase font-weight-700">Organic Search Traffic Change:</span>
								&nbsp;
								<span class="font-weight-700 project-search-traffic"><span class="REPLACE">0.0%</span></span>
							</li>

						</ul>

						<ul class="project-meta-keywords no-margin-bottom unstyled flex-col-12 flex-col-md-6">


						<!-- Keywords moved + -->
							<li class="text-wrap-nowrap">
								<span class="font-size-small color-neutral text-transform-uppercase font-weight-700">Keywords Moved <span class="change-indicator color-success">+</span> :</span>
								&nbsp;
								<span class="font-weight-700 project-search-traffic"><span class="REPLACE">0</span></span>
							</li>

						<!-- Keywords moved - -->
							<li class="text-wrap-nowrap">
								<span class="font-size-small color-neutral text-transform-uppercase font-weight-700">Keywords Moved <span class="change-indicator color-error">-</span> :</span>
								&nbsp;
								<span class="font-weight-700 project-search-traffic"><span class="REPLACE">0</span></span>
							</li>

						</ul>
					</div>
					
				</div>

			</div>




		</div>
</div>

<style>
	.project-meta {
		max-width: 700px;
	}
</style>