

	<form
		id="nav-search"
		action="<?php app_create_link( array('template' => 'projects') ); ?>"
		method="get"
		class="input-group">

			<!-- templating/placeholder -->
			<input type="hidden" name="env" value="<?=FWAPPS_SLUG; ?>">
			<input type="hidden" name="template" value="projects">


			<label for="search" class="btn btn-no-radius btn-no-shadow" title="Search"><i class="color-primary symbol symbol-search"></i></i></label>
			<input
				id="search"
				class="input input-single-line input-no-radius input-no-shadow font-weight-500 flex-1-1"
				type="text"
				name="search"
				placeholder="Search projects..."
				value="<?php echo ( isset($_GET['search'] )) ? $_GET['search'] : ''; ?>" />
			<input type="hidden" value="1" name="is_searching">
			
	</form>

	<div id="nav-account">

		<div id="nav-account-info">
									
			
			<?php app_get_component('components/profile-image-small');?>

			<a href="<?=app_create_link( array('template'=>'profile') ); ?>" id="nav-account-name" class="btn btn-no-shadow btn-small color-inherit font-weight-500 hide-xs profile-name hide-sm no-padding-x">
				<span class="REPLACE">Place Name</span>
			</a>
			
		</div>

		<a href="#nav-account-dropdown" class="btn btn-link btn-symbol"  data-toggle="dropdown" title="More"> 
			<i class="symbol symbol-kebab-vertical"></i>
		</a>

		<ul data-dropdown-width="200px" id="nav-account-dropdown" class="dropdown dropdown-right dropdown-top-flush">
			
			<!-- @PLACEHOLDER: DELETE QWHEN READY-->
				<?php app_debug_li() ?>
				<li class="REPLACE"><a href="#">Item</a></li>
				<li class="REPLACE"><a href="#">Item</a></li>
				<li class="REPLACE"><a href="#">Logout</a></li>
		</ul>

	</div>
