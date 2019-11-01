<div id="dashboard-block-main-nav" class="flex-xs nav nav-sticky">
	<form  id="nav-search" action="<?=DASHBOARD_ROOT_URL?>/" method="get">
	<label for="search"></label>
		<input class="input" type="text" name="search" id="search">
		<button type="submit" class="sr-only">Search</button>
	</form>
	<div id="nav-account" data-toggle="">
		
		<div id="nav-account-info">

		</div>

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


<!-- HANDLEBAR -->
<script id="nav-account-info-hb" type="text/x-handlebars-template">
	<div class="thumbnail thumbnail-inline">
			<img src="{{ profile[logged_in].profile_image }}" alt="">
		</div>
		<span id="nav-account-name"></span>
		<a href="#" class="btn" title="More" data-toggle="accordion">
			<i class="symbol symbol-kebab"></i>
		</a>

</script>

<script>
var source   = document.getElementById("entry-template").innerHTML;
var template = Handlebars.compile(source);
</script>