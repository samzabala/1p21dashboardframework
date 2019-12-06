<!-- @NOTE this is also the template for new-content, on-page, and social media -->
<div id="projects-scoreboard" class="module-grid">
	<!-- TABLE -->
        <div
			class="module">
			<div class="module-content">
                <div class="module-header module-header-break">
                    <div class="flex-0-0 no-margin-x special-secondary text-clip-background background-gradient">
                        New Content / On Page / Social Media
                    </div>
                    <div class="module-functions">
                        <?php app_get_component('components/filter-input-search'); ?>
                        <?php app_get_component('components/modal-export'); ?>
                    </div>
                </div>

			<!-- @if associated projects  are available -->
				<div class="table-wrapper">
					<table class="text-vertical-align-middle">
						<tr>
							<th class="dashboard-table-cell-name">Client Name</th>
                            
                            <th>
                                <a href="#" class="color-inherit">Date <i class="symbol symbol-caret-down symbol-caret-toggle-up"></i></a>
                            </th>

                            <th class="dashboard-table-cell-url">Page Title &amp; Url</th>
                            
                            <th>Content Type</th>
                            
                            <th>
                                Anchor &amp; Linking To
                            </th>

							<th class="dashboard-table-cell-thumbnail text-align-center">SEO</th>
						</tr>


						<tr>
							<td class="dashboard-table-cell-name">
								<?php app_get_component('components/project-link') ?>
                            </td>

                            <td>
                                
								<span class="project-date">
									<span class="REPLACE">04-20-69</span>
								</span>
                            </td>

							<td class="dashboard-table-cell-url">
                                <span class="project-page-title">
                                    <span class="REPLACE">Page Title</span>
                                </span>
								<a class="project-page-link text-leading-compact text-wrap-ellipsis-multiple" href="#REPLACE-project-page-url" target="_blank" >
									<span class="REPLACE">#REPLACE-project-page-url-project-page-url-project-page-url-project-page-url-project-page-url-page-urg-page-url-page-url-page-url</span>
								</a>
                            </td>
                            
							<td>
                                <span class="project-content-type">
                                    <span class="REPLACE">Type</span>
                                </span>
                            </td>
                            
							<td class="dashboard-table-cell-url">
                                <span class="project-page-title">
                                    <span class="REPLACE">Page Title</span>
                                </span>
								<a class="project-page-link text-leading-compact text-wrap-ellipsis-multiple" href="#REPLACE-project-page-url" target="_blank" >
									<span class="REPLACE">#REPLACE-project-page-url-project-page-url-project-page-url-project-page-url-project-page-url-page-urg-page-url-page-url-page-url</span>
								</a>
                            </td>

                            <td class="dashboard-table-cell-tdumbnail text-align-center">
                                <?php app_get_component('components/profile-image-small') ?>
                            </th>
							
						</tr>



						<!-- @PLACEHOLDER duplicate of above delete everything below when ready -->
							<?php for($i=1; $i<=4; $i++){ ?>
                                
                                
							<?php } ?>
					</table>
					
				</div>


			<!-- @else NO assigned tasks are available -->
				<p class="color-neutral notification-no-result no-margin-y">Oooh nothing here :/</p>

			</div>
			<div class="module-footer">
				<?php app_get_component('components/pagination') ?>
			</div>
		</div>
</div>