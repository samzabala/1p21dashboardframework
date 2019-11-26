<div class="module-grid"
	data-grid-template-rows-lg="75px repeat( auto-fit, minmax(75px, auto) )"
	data-grid-template-columns-lg="350px 1fr 1fr"
	data-grid-template-areas-lg="
		'thumbnail avgtime availability'
		'thumbnail avgtime updated'
		'assigned assigned assigned'
		'ass ass ass'"
	data-grid-template-rows-md=" repeat( auto-fit, minmax(75px, auto) )"
	data-grid-template-columns-md="350px 1fr"
	data-grid-template-areas-md="
		'thumbnail availability'
		'thumbnail avgtime'
		'updated updated'
		'assigned assigned'
		'ass ass'"
		>


		<div
			class="module
			module-no-gutter
			flex-xs
			flex-wrap"
			data-grid-area-md="availability">
		
			<div
				class="module-header
				flex-sm
				flex-align-items-center
				mobile-hide">

				<h3
				class="module-title text-align-center">Availability</h3>
			</div>
			<div class="btn btn-large btn-success font-weight-500 btn-no-interaction btn-no-shadow btn-no-radius flex-1-1">
				<span class="badge badge-large badge-success"></span> Available for Project</span>
			</div>
		</div>


	<div class="module" data-grid-area-md="thumbnail">
		<div class="module-content text-align-center flex-justify-content-center flex-direction-column flex-xs flex-align-items-center">
			<div class="thumbnail">
				<img data-src="<?=DASHBOARD_ROOT_URL ?>/placeholder/profiles/team-des-jenn.jpg" alt="">
				<span class="badge badge-success"></span>
			</div>
			<h1 class="profile-name h2 font-weight-500">Jenn Aquino</h1>
			<p class="profile-title color-primary font-weight-700 text-transform-uppercase">Senior Designer</p>
			<ul class="list-group no-margin-bottom flex-align-self-stretch">
				<li class="flex-xs flex-justify-content-space-between">
					<span class="">
						Avg Time Days 
					</span>
					<strong>
						25
					</strong>
				</li>
				<li class="flex-xs flex-justify-content-space-between">
					<span class="">
						Current Projects 
					</span>
					<strong>
						25
					</strong>
				</li>
				<li class="flex-xs flex-justify-content-space-between">
					<span class="">
						Projects YTD
					</span>
					<strong>
						25
					</strong>
				</li>
			</ul>
		</div>
	</div>
	<div class="module" data-grid-area-md="avgtime">
		<div class="module-header">
			<h3 class="module-title">
				Jenn's Average Time
			</h3>
		</div>
		<div class="module-content flex-xs flex-align-items-center">
			<img class="flex-0-0" style="width: 400px;margin:0 auto" src="/placeholder/charts/prod/chart-03.png" alt="">
		</div>
	</div>
	<div class="module" data-grid-area-md="updated">
		<div class="module-header">
			<h3 class="module-title">
				Recent Updates
			</h3>
		</div>
		<div class="module-content">
			<table class="table-small">
				
				<tr>
					<td class="text-align-left">
						<a href="#" class="color-inherit">

							<span class="text-block text-no-margin">site.com</span>
							<span class="text-block text-small color-neutral">Client Name</span>
						</a>
					</td>
					<td class="text-align-right text-vertical-align-middle">
						<span>04-20-19</span>
					</td>
				</tr>

				
			</table>
		</div>
	</div>
	<div class="module" data-grid-area-md="assigned">
		<div class="module-header">
			<div class="module-title">
				Assigned Tasks
			</div>
			<div class="module-functions">
				<div class="btn-group btn-group-horizontal btn-group-toggle">
					<a href="#" class="btn btn-default active">Current</a>
					<a href="#" class="btn btn-default">Completed</a>
				</div>
			</div>
		</div>
		<div class="module-content">
			<p class="color-neutral">Oooh nothing here :/</p>
		</div>
		<div class="module-footer">
			<div class="pagination">
				<a href="#" title="next"><i class="symbol symbol-caret symbol-caret-left"></i></a>
				<span class="status text-small">
					<span>01</span> | <span>20</span>
				</span>

				<a href="#" title="prev"><i class="symbol symbol-caret symbol-caret-right"></i></a>
			</div>
		</div>
	</div>
	<div class="module" data-grid-area-md="ass">
		ass
	</div>

</div>