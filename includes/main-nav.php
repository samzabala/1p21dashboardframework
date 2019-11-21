

<div id="dashboard-block-main-nav" class="nav nav-sticky">
	<a href="#"
		id="dashboard-block-main-nav-toggle"
		
		class="btn
		color-primary-hover
		color-primary-active
		color-primary-focus
		background-primary-open
		color-global-background-open
		btn-symbol
		btn-no-radius
		dashboard-sidenav-toggle
		btn-no-shadow
		btn-large
		tablet-hide
		desktop-hide
		laptop-hide
		nav-toggle"

		:class="{open:sideNav.open}"
		
		@click="_1p21.db.sideNav.$data.open = !_1p21.db.sideNav.$data.open">
		<i class="symbol symbol-burger"></i>
	</a>
	<form  id="nav-search" action="<?=DASHBOARD_ROOT_URL?>/" method="get" class="input-group">
		<label for="search" class="btn btn-no-radius btn-no-shadow" title="Search"><i class="color-primary symbol symbol-search"></i></i></label>
		<input class="input input-single-line input-no-radius input-no-shadow font-weight-500 flex-1-1" type="text" name="search" placeholder="Search projects..." id="search">
	</form>
	<div id="nav-account">
		<div id="nav-account-info">
									
			<a href="#profile" class="thumbnail thumbnail-inline">
				<!-- <img src="" alt="{{ loggedIn.name }}"> -->
				<span class="thumbnail-text">MP</span>
			</a>
			<a href="#" id="nav-account-name" class="color-inherit font-weight-500 mobile-hide tablet-hide">Testing</a>
		</div>

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

