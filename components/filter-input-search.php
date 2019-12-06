

<div class="module-function filter-search">
    <form
		action="<? app_create_link( array('template' => 'projects') ); ?>"
        method="get"
        class="input-group input-group-horizontal text-align-left">
        <input type="text" placeholder="Search" name="search" class="input input-single-line font-weight-600" />
        <input type="hidden" name="is_searching" value="1" />
        <button type="submit" class="btn btn-symbol btn-primary"><i class="symbol symbol-search"></i></button>
    </form>
</div>