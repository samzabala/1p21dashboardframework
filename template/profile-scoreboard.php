<!--

	@interactive
		.module-functions *,
	@dynamic
		content
			.count-*
		dom element
			.progress-bar
 -->
 <div id="profile-scoreboard" class="module-grid"
	data-grid-template-columns="1fr 1fr 1fr"
	data-grid-template-rows="minmax(330px, auto) 180px repeat( auto-fit, minmax(330px, auto) )"
	data-grid-template-areas="
		'profile-card profile-card profile-card'
		'linksbuilt onpage todos'
		'overall overall overall'
		'distribution distribution distribution'
		'clientkey clientkey clientkey'
		'campaign campaign campaign'
		'average average average'
		'account account account'"


	data-grid-template-rows-md="repeat( 3, minmax(180px, auto) ) repeat( auto-fit, minmax(330px, auto) )"
	data-grid-template-columns-md="350px 1fr 1fr 150px"
	data-grid-template-areas-md="
		'profile-card overall overall linksbuilt'
		'profile-card overall overall onpage'
		'profile-card overall overall todos'
		'distribution distribution clientkey clientkey'
		'campaign campaign clientkey clientkey'
		'average average average average'
		'account account account account'"
		
	data-grid-template-columns-lg="350px 3fr 2fr 150px"
	>

	<!-- Profile card -->
		<?php app_get_component_part('components/profile-card',DASHBOARD_SLUG); ?>

	<!-- Links Built -->
		<div
			id="links-built"
			class="module module-no-gutter"
			data-grid-area="linksbuilt">
			
			<div class="
				module-content
				module-no-gutter
				flex
				flex-direction-column
				flex-justify-content-center
				flex-align-items-center">
				<span class="special-primary count-links-built">88</span>
				<span class="text-small color-neutral">Links Built</span>
			</div>
		</div>

	<!-- On Page -->
		<div
			id="on-page"
			class="module module-no-gutter"
			data-grid-area="onpage">
			
			<div class="
				module-content
				module-no-gutter
				flex
				flex-direction-column
				flex-justify-content-center
				flex-align-items-center">
				<span class="special-primary count-on-page">88</span>
				<span class="text-small color-neutral">On-Page</span>
			</div>
		</div>


	<!-- Todos -->
		<div
			id="to-dos"
			class="module module-no-gutter"
			data-grid-area="todos">
			
			<div class="
				module-content
				module-no-gutter
				flex
				flex-direction-column
				flex-justify-content-center
				flex-align-items-center">
				<span class="special-primary count-to-dos">88</span>
				<span class="text-small color-neutral">To-Dos</span>
			</div>
		</div>

	<!-- Overall Actions -->
		<div
			id="overall-actions"
			class="module"
			data-grid-area="overall">
				<div class="module-header module-header-break">
					<h3 class="module-title">Overall Actions</h3>
					
					<div class="module-functions">


						<div class="input-wrapper filter-date">
							<button class="btn-group btn-group-block-mobile btn-group-horizontal btn-group-unite" data-dropdown-width="100%" data-toggle="dropdown">
								<span class="btn btn-default">Jan 2018</span>
								<span class="btn btn-primary btn-symbol"><i class="symbol symbol-arrow-down"></i></span>
							</button>
							<!-- @placeholder  #profile-assigned-date > li -->
							<ul class="text-align-left dropdown dropdown-top-flush dropdown-center-x">
								<li>
									Dates here
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="module-content flex-xs flex-wrap flex-align-items-center">
					<!--
					@placeholder:
					attributes to keep: class
					-->
					<img style="width: 100%;margin:0 auto" src="/placeholder/charts/seo/chart-03.png" alt="">
				</div>
				<div class="module-footer">
					
				</div>
		</div>





	
	<!-- Activity Distribution -->
		<div
			id="activity-distribution"
			class="module"
			data-grid-area="distribution">
				<div class="module-header module-header-break">
					<div class="module-title">Activity Distribution</div>
					<div class="module-functions">
						<a href="#modal-last-activity" data-toggle="modal" class="btn btn-primary">
							<span>Last Activity</span>
							<i class="symbol symbol-plus"></i>
						</a>
					</div>
				</div>
				<div class="module-content">
					<p class="font-weight-900 text-transform-uppercase text-block progress-title">Link Activity Distribution</p>
					<div class="progress">
						<!--
							@loop link activity distribution
							@dynamic all attrbutes EXCEPT class
						-->


						<div class="progress-bar"

							style="width: 20%; background-color:#fb1818;"

							data-toggle="tooltip-hover"
							data-tooltip-placement="top"
							data-tooltip-badge="true"
							data-tooltip-classes="text-align-center"
							data-tooltip-center-y="true"
							data-tooltip-center-x="true"
							data-tooltip-badge-background="#fb1818"
							data-tooltip-content="<strong>Percentage</strong><br><span class='text-small'>Client Name</span>"></div>







						<!-- @placeholder delete everything here -->

							<div class="progress-bar"
							
								style="width: 10%; background-color:#fd7f03;"

								data-toggle="tooltip-hover"
								data-tooltip-placement="top"
								data-tooltip-badge="true"
								data-tooltip-classes="text-align-center"
								data-tooltip-center-y="true"
								data-tooltip-center-x="true"
								data-tooltip-badge-background="#fd7f03"
								data-tooltip-content="<strong>6.8%</strong><br><span class='text-small'>Paulson Coletti</span>"></div>

							<div class="progress-bar"
								
								style="width: 5%; background-color:#f7bc00;"

								data-toggle="tooltip-hover"
								data-tooltip-placement="top"
								data-tooltip-badge="true"
								data-tooltip-classes="text-align-center"
								data-tooltip-center-y="true"
								data-tooltip-center-x="true"
								data-tooltip-badge-background="#f7bc00"
								data-tooltip-content="<strong>6.8%</strong><br><span class='text-small'>Paulson Coletti</span>"></div>

							<div class="progress-bar"
								
								style="width: 5%; background-color:#16b900;"

								data-toggle="tooltip-hover"
								data-tooltip-placement="top"
								data-tooltip-badge="true"
								data-tooltip-classes="text-align-center"
								data-tooltip-center-y="true"
								data-tooltip-center-x="true"
								data-tooltip-badge-background="#16b900"
								data-tooltip-content="<strong>6.8%</strong><br><span class='text-small'>Paulson Coletti</span>"></div>

							<div class="progress-bar"
								
								style="width: 5%; background-color:#006943;"

								data-toggle="tooltip-hover"
								data-tooltip-placement="top"
								data-tooltip-badge="true"
								data-tooltip-classes="text-align-center"
								data-tooltip-center-y="true"
								data-tooltip-center-x="true"
								data-tooltip-badge-background="#006943"
								data-tooltip-content="<strong>6.8%</strong><br><span class='text-small'>Paulson Coletti</span>"></div>

							<div class="progress-bar"
								
								style="width: 6%; background-color:#b6e4b6;"

								data-toggle="tooltip-hover"
								data-tooltip-placement="top"
								data-tooltip-badge="true"
								data-tooltip-classes="text-align-center"
								data-tooltip-center-y="true"
								data-tooltip-center-x="true"
								data-tooltip-badge-background="#b6e4b6"
								data-tooltip-content="<strong>6.8%</strong><br><span class='text-small'>Paulson Coletti</span>"></div>

							<div class="progress-bar"
								
								style="width: 4%; background-color:#0037b4;"

								data-toggle="tooltip-hover"
								data-tooltip-placement="top"
								data-tooltip-badge="true"
								data-tooltip-classes="text-align-center"
								data-tooltip-center-y="true"
								data-tooltip-center-x="true"
								data-tooltip-badge-background="#0037b4"
								data-tooltip-content="<strong>6.8%</strong><br><span class='text-small'>Paulson Coletti</span>"></div>

							<div class="progress-bar"
								
								style="width: 10%; background-color:#0480fe;"

								data-toggle="tooltip-hover"
								data-tooltip-placement="top"
								data-tooltip-badge="true"
								data-tooltip-classes="text-align-center"
								data-tooltip-center-y="true"
								data-tooltip-center-x="true"
								data-tooltip-badge-background="#0480fe"
								data-tooltip-content="<strong>6.8%</strong><br><span class='text-small'>Paulson Coletti</span>"></div>

							<div class="progress-bar"
								
								style="width: 3%; background-color:#5e01a8;"

								data-toggle="tooltip-hover"
								data-tooltip-placement="top"
								data-tooltip-badge="true"
								data-tooltip-classes="text-align-center"
								data-tooltip-center-y="true"
								data-tooltip-center-x="true"
								data-tooltip-badge-background="#5e01a8"
								data-tooltip-content="<strong>6.8%</strong><br><span class='text-small'>Paulson Coletti</span>"></div>

							<div class="progress-bar"
								
								style="width: 2%; background-color:#a168d9;"

								data-toggle="tooltip-hover"
								data-tooltip-placement="top"
								data-tooltip-badge="true"
								data-tooltip-classes="text-align-center"
								data-tooltip-center-y="true"
								data-tooltip-center-x="true"
								data-tooltip-badge-background="#a168d9"
								data-tooltip-content="<strong>6.8%</strong><br><span class='text-small'>Paulson Coletti</span>"></div>

							<div class="progress-bar"
								
								style="width: 10%; background-color:#fe85d6;"

								data-toggle="tooltip-hover"
								data-tooltip-placement="top"
								data-tooltip-badge="true"
								data-tooltip-classes="text-align-center"
								data-tooltip-center-y="true"
								data-tooltip-center-x="true"
								data-tooltip-badge-background="#fe85d6"
								data-tooltip-content="<strong>6.8%</strong><br><span class='text-small'>Paulson Coletti</span>"></div>

							<div class="progress-bar"
								
								style="width: 5%; background-color:#f124b5;"

								data-toggle="tooltip-hover"
								data-tooltip-placement="top"
								data-tooltip-badge="true"
								data-tooltip-classes="text-align-center"
								data-tooltip-center-y="true"
								data-tooltip-center-x="true"
								data-tooltip-badge-background="#f124b5"
								data-tooltip-content="<strong>6.8%</strong><br><span class='text-small'>Paulson Coletti</span>"></div>

							<div class="progress-bar"
								
								style="width: 5%; background-color:#ca8a01;"

								data-toggle="tooltip-hover"
								data-tooltip-placement="top"
								data-tooltip-badge="true"
								data-tooltip-classes="text-align-center"
								data-tooltip-center-y="true"
								data-tooltip-center-x="true"
								data-tooltip-badge-background="#ca8a01"
								data-tooltip-content="<strong>6.8%</strong><br><span class='text-small'>Paulson Coletti</span>"></div>

							<div class="progress-bar"
								
								style="width: 5%; background-color:#d7c368;"

								data-toggle="tooltip-hover"
								data-tooltip-placement="top"
								data-tooltip-badge="true"
								data-tooltip-classes="text-align-center"
								data-tooltip-center-y="true"
								data-tooltip-center-x="true"
								data-tooltip-badge-background="#d7c368"
								data-tooltip-content="<strong>6.8%</strong><br><span class='text-small'>Paulson Coletti</span>"></div>

							<div class="progress-bar"
								
								style="width: 2%; background-color:#4cd9db;"

								data-toggle="tooltip-hover"
								data-tooltip-placement="top"
								data-tooltip-badge="true"
								data-tooltip-classes="text-align-center"
								data-tooltip-center-y="true"
								data-tooltip-center-x="true"
								data-tooltip-badge-background="#4cd9db"
								data-tooltip-content="<strong>6.8%</strong><br><span class='text-small'>Paulson Coletti</span>"></div>

							<div class="progress-bar"
								
								style="width: 3%; background-color:#0d95a5;"

								data-toggle="tooltip-hover"
								data-tooltip-placement="top"
								data-tooltip-badge="true"
								data-tooltip-classes="text-align-center"
								data-tooltip-center-y="true"
								data-tooltip-center-x="true"
								data-tooltip-badge-background="#0d95a5"
								data-tooltip-content="<strong>6.8%</strong><br><span class='text-small'>Paulson Coletti</span>"></div>

							



					</div>



					<p class="font-weight-900 text-transform-uppercase text-block progress-title">Link On-Page Distribution</p>
					<div class="progress">
						<!--
							@loop link activity distribution
							@dynamic all attrbutes EXCEPT class
						-->


						<div class="progress-bar"

							style="width: 30%; background-color:#fb1818;"

							data-toggle="tooltip-hover"
							data-tooltip-placement="top"
							data-tooltip-badge="true"
							data-tooltip-classes="text-align-center"
							data-tooltip-center-y="true"
							data-tooltip-center-x="true"
							data-tooltip-badge-background="#fb1818"
							data-tooltip-content="<strong>Percentage</strong><br><span class='text-small'>Client Name</span>"></div>





						<!-- @placeholder delete everything here -->

							<div class="progress-bar"
							
								style="width: 5%; background-color:#fd7f03;"

								data-toggle="tooltip-hover"
								data-tooltip-placement="top"
								data-tooltip-badge="true"
								data-tooltip-classes="text-align-center"
								data-tooltip-center-y="true"
								data-tooltip-center-x="true"
								data-tooltip-badge-background="#fd7f03"
								data-tooltip-content="<strong>6.8%</strong><br><span class='text-small'>Paulson Coletti</span>"></div>

							<div class="progress-bar"
								
								style="width: 5%; background-color:#f7bc00;"

								data-toggle="tooltip-hover"
								data-tooltip-placement="top"
								data-tooltip-badge="true"
								data-tooltip-classes="text-align-center"
								data-tooltip-center-y="true"
								data-tooltip-center-x="true"
								data-tooltip-badge-background="#f7bc00"
								data-tooltip-content="<strong>6.8%</strong><br><span class='text-small'>Paulson Coletti</span>"></div>

							<div class="progress-bar"
								
								style="width: 5%; background-color:#16b900;"

								data-toggle="tooltip-hover"
								data-tooltip-placement="top"
								data-tooltip-badge="true"
								data-tooltip-classes="text-align-center"
								data-tooltip-center-y="true"
								data-tooltip-center-x="true"
								data-tooltip-badge-background="#16b900"
								data-tooltip-content="<strong>6.8%</strong><br><span class='text-small'>Paulson Coletti</span>"></div>

							<div class="progress-bar"
								
								style="width: 5%; background-color:#006943;"

								data-toggle="tooltip-hover"
								data-tooltip-placement="top"
								data-tooltip-badge="true"
								data-tooltip-classes="text-align-center"
								data-tooltip-center-y="true"
								data-tooltip-center-x="true"
								data-tooltip-badge-background="#006943"
								data-tooltip-content="<strong>6.8%</strong><br><span class='text-small'>Paulson Coletti</span>"></div>

							<div class="progress-bar"
								
								style="width: 6%; background-color:#b6e4b6;"

								data-toggle="tooltip-hover"
								data-tooltip-placement="top"
								data-tooltip-badge="true"
								data-tooltip-classes="text-align-center"
								data-tooltip-center-y="true"
								data-tooltip-center-x="true"
								data-tooltip-badge-background="#b6e4b6"
								data-tooltip-content="<strong>6.8%</strong><br><span class='text-small'>Paulson Coletti</span>"></div>

							<div class="progress-bar"
								
								style="width: 4%; background-color:#0037b4;"

								data-toggle="tooltip-hover"
								data-tooltip-placement="top"
								data-tooltip-badge="true"
								data-tooltip-classes="text-align-center"
								data-tooltip-center-y="true"
								data-tooltip-center-x="true"
								data-tooltip-badge-background="#0037b4"
								data-tooltip-content="<strong>6.8%</strong><br><span class='text-small'>Paulson Coletti</span>"></div>

							<div class="progress-bar"
								
								style="width: 5%; background-color:#0480fe;"

								data-toggle="tooltip-hover"
								data-tooltip-placement="top"
								data-tooltip-badge="true"
								data-tooltip-classes="text-align-center"
								data-tooltip-center-y="true"
								data-tooltip-center-x="true"
								data-tooltip-badge-background="#0480fe"
								data-tooltip-content="<strong>6.8%</strong><br><span class='text-small'>Paulson Coletti</span>"></div>

							<div class="progress-bar"
								
								style="width: 3%; background-color:#5e01a8;"

								data-toggle="tooltip-hover"
								data-tooltip-placement="top"
								data-tooltip-badge="true"
								data-tooltip-classes="text-align-center"
								data-tooltip-center-y="true"
								data-tooltip-center-x="true"
								data-tooltip-badge-background="#5e01a8"
								data-tooltip-content="<strong>6.8%</strong><br><span class='text-small'>Paulson Coletti</span>"></div>

							<div class="progress-bar"
								
								style="width: 2%; background-color:#a168d9;"

								data-toggle="tooltip-hover"
								data-tooltip-placement="top"
								data-tooltip-badge="true"
								data-tooltip-classes="text-align-center"
								data-tooltip-center-y="true"
								data-tooltip-center-x="true"
								data-tooltip-badge-background="#a168d9"
								data-tooltip-content="<strong>6.8%</strong><br><span class='text-small'>Paulson Coletti</span>"></div>

							<div class="progress-bar"
								
								style="width: 10%; background-color:#fe85d6;"

								data-toggle="tooltip-hover"
								data-tooltip-placement="top"
								data-tooltip-badge="true"
								data-tooltip-classes="text-align-center"
								data-tooltip-center-y="true"
								data-tooltip-center-x="true"
								data-tooltip-badge-background="#fe85d6"
								data-tooltip-content="<strong>6.8%</strong><br><span class='text-small'>Paulson Coletti</span>"></div>

							<div class="progress-bar"
								
								style="width: 5%; background-color:#f124b5;"

								data-toggle="tooltip-hover"
								data-tooltip-placement="top"
								data-tooltip-badge="true"
								data-tooltip-classes="text-align-center"
								data-tooltip-center-y="true"
								data-tooltip-center-x="true"
								data-tooltip-badge-background="#f124b5"
								data-tooltip-content="<strong>6.8%</strong><br><span class='text-small'>Paulson Coletti</span>"></div>

							<div class="progress-bar"
								
								style="width: 5%; background-color:#ca8a01;"

								data-toggle="tooltip-hover"
								data-tooltip-placement="top"
								data-tooltip-badge="true"
								data-tooltip-classes="text-align-center"
								data-tooltip-center-y="true"
								data-tooltip-center-x="true"
								data-tooltip-badge-background="#ca8a01"
								data-tooltip-content="<strong>6.8%</strong><br><span class='text-small'>Paulson Coletti</span>"></div>

							<div class="progress-bar"
								
								style="width: 5%; background-color:#d7c368;"

								data-toggle="tooltip-hover"
								data-tooltip-placement="top"
								data-tooltip-badge="true"
								data-tooltip-classes="text-align-center"
								data-tooltip-center-y="true"
								data-tooltip-center-x="true"
								data-tooltip-badge-background="#d7c368"
								data-tooltip-content="<strong>6.8%</strong><br><span class='text-small'>Paulson Coletti</span>"></div>

							<div class="progress-bar"
								
								style="width: 2%; background-color:#4cd9db;"

								data-toggle="tooltip-hover"
								data-tooltip-placement="top"
								data-tooltip-badge="true"
								data-tooltip-classes="text-align-center"
								data-tooltip-center-y="true"
								data-tooltip-center-x="true"
								data-tooltip-badge-background="#4cd9db"
								data-tooltip-content="<strong>6.8%</strong><br><span class='text-small'>Paulson Coletti</span>"></div>

							<div class="progress-bar"
								
								style="width: 3%; background-color:#0d95a5;"

								data-toggle="tooltip-hover"
								data-tooltip-placement="top"
								data-tooltip-badge="true"
								data-tooltip-classes="text-align-center"
								data-tooltip-center-y="true"
								data-tooltip-center-x="true"
								data-tooltip-badge-background="#0d95a5"
								data-tooltip-content="<strong>6.8%</strong><br><span class='text-small'>Paulson Coletti</span>"></div>

							



					</div>
				</div>
		</div>

	<!-- Client Key -->

		<div
			id="client-key"
			class="module"
			data-grid-area="clientkey">
			<div class="module-header module-header-break">
				<h3 class="module-title">Client Key</h3>
			</div>
			<div class="module-content">
				<ul class="unstyled">
					<!-- @loop li 
						@dynamic
							attr style background color
					-->
					<li>
						<span class="legend" style="background-color:#ca8a01"></span>
						<span class="client-name">
							Client Name
						</span>
					</li>
				</ul>
			</div>
		</div>



	<!-- Campaign Actions -->
		<div
		id="campaign-actions"
			class="module"
			data-grid-area="campaign">
				<div class="module-header module-header-break">
					<h3 class="module-title">Campaign Actions</h3>
				</div>
				<div class="module-content">
				<img style="width: 100%;margin:0 auto" src="/placeholder/charts/seo/chart-05.png" alt="">
				</div>
		</div>


	
	<!-- Average Rank By Account -->
		<div
			class="module"
			data-grid-area="average">
				<div class="module-header module-header-break">
					<h3 class="module-title">Average Rank By Account</h3>
					<div class="module-functions">

						<div class="filter-rank-toggle input-wrapper">
							<div class="input-label">HR Rank:</div>
							<div class="btn-group btn-group-horizontal btn-group-toggle">
								<a href="#" class="btn btn-default active">On</a>
								<a href="#" class="btn btn-default">Off</a>
							</div>
						</div>

						<div class="input-wrapper filter-accounts">
							<button class="btn-group btn-group-block-mobile btn-group-horizontal btn-group-unite" data-dropdown-width="100%" data-toggle="dropdown">
								<span class="btn btn-default">All Acounts</span>
								<span class="btn btn-primary btn-symbol"><i class="symbol symbol-arrow-down"></i></span>
							</button>
							<!-- @placeholder  #profile-assigned-date > li -->
							<ul class="text-align-left dropdown dropdown-top-flush dropdown-center-x">
								<li>
									Accounts here
								</li>
							</ul>
						</div>

						<div class="input-wrapper filter-date">
							<button class="btn-group btn-group-block-mobile btn-group-horizontal btn-group-unite" data-dropdown-width="100%" data-toggle="dropdown">
								<span class="btn btn-default">Jan 2018</span>
								<span class="btn btn-primary btn-symbol"><i class="symbol symbol-arrow-down"></i></span>
							</button>
							<!-- @placeholder  #profile-assigned-date > li -->
							<ul class="text-align-left dropdown dropdown-top-flush dropdown-center-x">
								<li>
									Dates here
								</li>
							</ul>
						</div>


						<div class="filter-year-span input-wrapper">
							<div class="btn-group btn-group-horizontal btn-group-toggle">
								<a href="#" class="btn btn-default active">Month</a>
								<a href="#" class="btn btn-default">Year</a>
							</div>
						</div>
					</div>
				</div>
				<div class="module-content">
					

					<img style="width: 100%;margin:0 auto" src="/placeholder/charts/seo/chart-09.png" alt="" />
				</div>
				<div class="module-footer">
					
				</div>
		</div>



</div>




	<!-- Overall Actions -->
	<div
		class="module"
		data-grid-area="">
			<div class="module-header module-header-break">
				<h3 class="module-title"></h3>
				<div class="module-functions"></div>
			</div>
			<div class="module-content">
				
			</div>
			<div class="module-footer">
				
			</div>
	</div>