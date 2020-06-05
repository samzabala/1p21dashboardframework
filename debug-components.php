<div class="module">
	<div class="module-header"><h3 class="module-title">Components</h3>
		<div class="module-content">
			<p>
				For your dashboard utility needs
			</p>
			<?php
			$avail_components = scandir(FWAPPS_ROOT_PATH.'/components');
			foreach($avail_components as $filename) {
				if (strpos($filename, '.php') !== false) {
				?>
					<div class="position-relative">

						<h3><code><?=$filename ?></code></h3>
						<?php app_get_component('components/'. str_replace('.php','',$filename)); ?>
					</div>
				<?php
				}
			}

			?>
			
		</div>
	</div>
</div>