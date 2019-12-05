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

			<div class="flex-grid no-margin-bottom">

				<div class="flex-col-xs-16 flex-col-sm-8  flex-1-1 flex-align-self-center no-margin-top">
					<p class="special-secondary background-gradient text-clip-background project-site no-margin"><span class="REPLACE">site.com</span></p>
					<p class="color-neutral no-margin project-name"><span class="REPLACE">Client Name</span></p>
				</div>
				
				<div class="flex-col-xs-16 flex-col-sm-8 flex-1-1 mobile-hide text-align-right">
					<div class="project-meta flex-grid flex-grid-compact flex-grid-no-gutter">
						<div class="project-meta-traffic flex-col-xs-1 flex-col-md-2">

						<!-- Search Traffic -->
							<div class="text-wrap-nowrap">
								<span class="font-size-small color-neutral text-transform-uppercase font-weight-700">Organic Search Traffic:</span>
								&nbsp;
								<span class="font-weight-700 project-search-traffic"><span class="REPLACE">0</span></span>
							</div>


						<!-- Search Traffic Change-->
							<div class="text-wrap-nowrap">
								<span class="font-size-small color-neutral text-transform-uppercase font-weight-700">Organic Search Traffic Change:</span>
								&nbsp;
								<span class="font-weight-700 project-search-traffic"><span class="REPLACE">0.0%</span></span>
							</div>

						</div>

						<div class="project-meta-keywords flex-col-xs-1 flex-col-md-2">


						<!-- Keywords moved + -->
							<div class="text-wrap-nowrap">
								<span class="font-size-small color-neutral text-transform-uppercase font-weight-700">Keywords Moved <span class="change-indicator color-success">+</span> :</span>
								&nbsp;
								<span class="font-weight-700 project-search-traffic"><span class="REPLACE">0</span></span>
							</div>

						<!-- Keywords moved - -->
							<div class="text-wrap-nowrap">
								<span class="font-size-small color-neutral text-transform-uppercase font-weight-700">Keywords Moved <span class="change-indicator color-error">-</span> :</span>
								&nbsp;
								<span class="font-weight-700 project-search-traffic"><span class="REPLACE">0</span></span>
							</div>

						</div>
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