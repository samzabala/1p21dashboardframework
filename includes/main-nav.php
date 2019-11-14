

<div id="dashboard-block-main-nav" class="nav nav-sticky">
	<form  id="nav-search" action="<?=DASHBOARD_ROOT_URL?>/" method="get">
	<label for="search"></label>
		<i class="symbol symbol-search"></i>
		<input class="input input-single-line" type="text" name="search" placeholder="Search Projects" id="search">
		<button type="submit" class="sr-only">Search</button>
	</form>
	<div id="nav-account">
		<div id="nav-account-info">
		</div>

		
		<?php
		
		app_render_handlebars_module(
			'nav-account-info',
			app_get_file_content_as_string(DASHBOARD_ROOT_PATH.'/placeholder/data/loggedin.json'),
			app_get_file_content_as_string(DASHBOARD_ROOT_PATH.'/handlebars/nav-account.hbs')
		);
		
		?>

		<a href="#nav-account-dropdown" class="btn btn-link btn-symbol"  data-toggle="dropdown" title="More"> 
			<i class="symbol symbol-kebab symbol-kebab-vertical"></i>
		</a>
			


		<ul id="nav-account-dropdown" class="dropdown dropdown-right dropdown-top-flush">
			<!-- PLACEHOLDEr -->
			<li class=""><a href="#">Account</a></li>
			<li class=""><a href="#">Item</a></li>
			<li class=""><a href="#">Item</a></li>
			<li class=""><a href="#">Item</a></li>
			<li class=""><a href="#">Item</a></li>
			<li class=""><a href="#">Logout</a></li>
		</ul>
	</div>
</div>

