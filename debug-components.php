<div class="module">
	<div class="module-header"><h3 class="module-title">Components</h3>
		<div class="module-content">
			<p>
				For your dashboard utility needs
			</p>
			<?php
			if($_GET['component']){
				$filename = filter_var($_GET['component']);
				$avail_components = array(
					$filename
				);
			}else{
				if(is_dir(FWAPPS_ROOT_PATH.'/app-'.FWAPPS_APP.'/components')){
					$avail_components = scandir(FWAPPS_ROOT_PATH.'/app-'.FWAPPS_APP.'/components');

				}else{
					$avail_components = scandir(FWAPPS_ROOT_PATH.'/components');

				}
			}
				foreach($avail_components as $filename) {
					if (strpos($filename, '.php') !== false && strpos($filename, '_DEMO') === false ) {
					?>
						<div class="position-relative">
	
							<h3><code><?=$filename ?></code></h3>
							<div class="border-style-dotted border-color-neutral background-theme-contrast-hover border-width-thin position-relative component-container">
								<?php app_get_component('components/'. str_replace('.php','',$filename)); ?>
							</div>
						</div>
					<?php
					}
				}

			?>
			
		</div>
	</div>
</div>