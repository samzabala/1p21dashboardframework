

<div id="dashboard-block-main-nav" class="nav nav-sticky">
	<a href="#" class="btn btn-default btn-symbol btn-no-radius dashboard-sidenav-toggle btn-no-shadow btn-large desktop-hide laptop-hide nav-toggle">
		<i class="symbol symbol-burger"></i>
	</a>
	<form  id="nav-search" action="<?=DASHBOARD_ROOT_URL?>/" method="get" class="input-group">
		
		<input class="input input-single-line input-no-radius input-no-shadow font-weight-500" type="text" name="search" placeholder="Search projects..." id="search">
		<button type="submit" class="btn btn-no-radius btn-no-shadow" title="Search"><i class="color-primary symbol symbol-search"></i></i></button>
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

