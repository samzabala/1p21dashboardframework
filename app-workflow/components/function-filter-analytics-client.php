
<div class="module-function filter-analytics-client-department position-relative">
    <div class="input-wrapper input-wrapper-horizontal input-wrapper-responsive no-padding-right">
        <label class="input-label">Filter By</label>
        <button data-toggle="dropdown" class="input input-block-mobile input-select">
            Department
            <!-- @if one or more status is checked -->
            <span class="filter-analytics-client-department-counter">
                <!-- @NOTE: counter will be rendered here -->
                (<span class="REPLACE">1</span>)
            </span>
        </button>
        <ul class="dropdown dropdown-top-flush dropdown-left" data-dropdown-width="200px">
            <li>
                <label class="input-label">
                    <input type="checkbox" name="filter-analytics-client-department" value="Production" class="input input-inline">
                    Production
                </label>
            </li>
            <li>
                <label class="input-label">
                    <input type="checkbox" name="filter-analytics-client-department" value="SEO" class="input input-inline">
                    SEO
                </label>
            </li>
            <li>
                <label class="input-label">
                    <input type="checkbox" name="filter-analytics-client-department" value="Sales" class="input input-inline">
                    Sales
                </label>
            </li>
        </ul>
    </div>
</div>

<div class="module-function function-filter-employee position-relative">
    <button data-toggle="dropdown" class="input input-select input-block-mobile">
        Employee
        <!-- @if one or more Owner is checked -->
        <span class="filter-companies-employee-active">
            <!-- @NOTE: acct owner name will be rendered here -->
            (<span class="REPLACE">Yanni Yogi</span>)
        </span>
    </button>
    <ul class="dropdown dropdown-top-flush dropdown-left" data-dropdown-width="200px">
        <!-- @LOOP li -->
            <li>
                <label class="input-label">
                    <input type="checkbox" name="filter-companies-employee" value="profile_name" class="input input-inline">
                    Profile Name
                </label>
            </li>

            <!-- @PLACEHOLDER delete when ready -->

                <li>
                    <label class="input-label">
                        <input type="checkbox" checked name="filter-companies-employee" value="Yanni Yogi" class="input input-inline">
                        Yanni Yogi
                    </label>
                </li>
                <li>
                    <label class="input-label">
                        <input type="checkbox" name="filter-companies-employee" value="El Tigre" class="input input-inline">
                        El Tigre
                    </label>
                </li>
                <li>
                    <label class="input-label">
                        <input type="checkbox" name="filter-companies-employee" value="Matt Engarde" class="input input-inline">
                        Matt Engarde
                    </label>
                </li>
                <li>
                    <label class="input-label">
                        <input type="checkbox" name="filter-companies-employee" value="Frank Sahwit" class="input input-inline">
                        Frank Sahwit
                    </label>
                </li>
                <li>
                    <label class="input-label">
                        <input type="checkbox" name="filter-companies-employee" value="Dee Vasquez" class="input input-inline">
                        Dee Vasquez
                    </label>
                </li>
    </ul>
</div>