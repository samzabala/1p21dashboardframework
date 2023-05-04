
<div class="module-function function-filter-acctowner position-relative">

    <div class="input-wrapper input-wrapper-horizontal input-wrapper-block-mobile input-wrapper-responsive no-padding-right">
        <label class="input input-label">Filter By</label>
        <button data-toggle-dropdown class="input input-box input-box-select input-block-mobile">
            Owner
            <!-- @if one or more Owner is checked -->
            <span class="filter-companies-acctowner-active">
                <!-- @NOTE: acct owner name will be rendered here -->
                (<span class="REPLACE">Yanni Yogi</span>)
            </span>
        </button>
        <ul class="dropdown dropdown-top-flush dropdown-left" data-dropdown-width="200px">
            <!-- @LOOP li -->
                <li>
                    <label class="input input-label">
                        <input type="checkbox" name="filter-companies-acctowner" value="profile_name" class="input input-inline">
                        Profile Name
                    </label>
                </li>

                <!-- @PLACEHOLDER delete when ready -->

                    <li>
                        <label class="input input-label">
                            <input type="checkbox" checked name="filter-companies-acctowner" value="Yanni Yogi" class="input input-inline">
                            Yanni Yogi
                        </label>
                    </li>
                    <li>
                        <label class="input input-label">
                            <input type="checkbox" name="filter-companies-acctowner" value="El Tigre" class="input input-inline">
                            El Tigre
                        </label>
                    </li>
                    <li>
                        <label class="input input-label">
                            <input type="checkbox" name="filter-companies-acctowner" value="Matt Engarde" class="input input-inline">
                            Matt Engarde
                        </label>
                    </li>
                    <li>
                        <label class="input input-label">
                            <input type="checkbox" name="filter-companies-acctowner" value="Frank Sahwit" class="input input-inline">
                            Frank Sahwit
                        </label>
                    </li>
                    <li>
                        <label class="input input-label">
                            <input type="checkbox" name="filter-companies-acctowner" value="Dee Vasquez" class="input input-inline">
                            Dee Vasquez
                        </label>
                    </li>
        </ul>
    </div>
</div>