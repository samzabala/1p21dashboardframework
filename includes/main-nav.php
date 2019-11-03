

<div id="dashboard-block-main-nav" class="flex-xs nav nav-sticky">
	<form  id="nav-search" action="<?=DASHBOARD_ROOT_URL?>/" method="get">
	<label for="search"></label>
		<input class="input" type="text" name="search" id="search">
		<button type="submit" class="sr-only">Search</button>
	</form>
	<div id="nav-account">


		<?php
		
		app_render_handlebars_module(
			'nav-account',
			app_get_file_content_as_string(DASHBOARD_ROOT_PATH.'/placeholder/data/loggedin.json'),
			app_get_file_content_as_string(DASHBOARD_ROOT_PATH.'/handlebars/nav-account.hbs')
		);
		
		?>

		<a href="#nav-account-dropdown" class="btn btn-link"  data-toggle="accordion"> 
			<i class="symbol symbol-kebab symbole-kebab-vertical"></i> <span class="sr-only">More</span>
		</a>
			


		<ul class=" nav-dropdown popper popper-caret popper-caret-top toggle-accordion">
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

