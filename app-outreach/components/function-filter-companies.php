
<div class="module-function function-filter-companies-status">
    <div class="input-wrapper input-wrapper-horizontal input-wrapper-block-mobile input-wrapper-responsive position-relative no-padding-right">
        <label class="input-label">Filter By</label>
        <button data-toggle-dropdown class="input input-block-mobile input-select">
            Status
            <!-- @if one or more status is checked -->
            <span class="filter-companies-status-counter">
                <!-- @NOTE: counter will be rendered here -->
                (<span class="REPLACE">1</span>)
            </span>
        </button>
        <ul class="dropdown dropdown-top-flush dropdown-left" data-dropdown-width="200px">
            <li>
                <label class="input-label">
                    <input type="checkbox" name="filter-companies-status" value="prospect" class="input input-inline">
                    Prospect
                </label>
            </li>
            <li>
                <label class="input-label">
                    <input type="checkbox" name="filter-companies-status" value="hot_prospect" class="input input-inline">
                    Hot Prospect
                </label>
            </li>
            <li>
                <label class="input-label">
                    <input type="checkbox" name="filter-companies-status" value="lead" class="input input-inline">
                    Lead
                </label>
            </li>
            <li>
                <label class="input-label">
                    <input type="checkbox" checked name="filter-companies-status" value="client" class="input input-inline">
                    Client
                </label>
            </li>
            <li>
                <label class="input-label">
                    <input type="checkbox" name="filter-companies-status" value="former_client" class="input input-inline">
                    Former Client
                </label>
            </li>
            <li>
                <label class="input-label">
                    <input type="checkbox" name="filter-companies-status" value="not_contacted" class="input input-inline">
                    Not Contacted
                </label>
            </li>
            <li>
                <label class="input-label">
                    <input type="checkbox" name="filter-companies-status" value="unqualified" class="input input-inline">
                    Unqualified
                </label>
            </li>
        </ul>
    </div>
</div>

<div class="module-function function-filter-companies-acctowner position-relative">
    <button data-toggle-dropdown class="input input-select input-block-mobile">
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
                <label class="input-label">
                    <input type="checkbox" name="filter-companies-acctowner" value="profile_name" class="input input-inline">
                    Profile Name
                </label>
            </li>

            <!-- @PLACEHOLDER delete when ready -->

                <li>
                    <label class="input-label">
                        <input type="checkbox" checked name="filter-companies-acctowner" value="Yanni Yogi" class="input input-inline">
                        Yanni Yogi
                    </label>
                </li>
                <li>
                    <label class="input-label">
                        <input type="checkbox" name="filter-companies-acctowner" value="El Tigre" class="input input-inline">
                        El Tigre
                    </label>
                </li>
                <li>
                    <label class="input-label">
                        <input type="checkbox" name="filter-companies-acctowner" value="Matt Engarde" class="input input-inline">
                        Matt Engarde
                    </label>
                </li>
                <li>
                    <label class="input-label">
                        <input type="checkbox" name="filter-companies-acctowner" value="Frank Sahwit" class="input input-inline">
                        Frank Sahwit
                    </label>
                </li>
                <li>
                    <label class="input-label">
                        <input type="checkbox" name="filter-companies-acctowner" value="Dee Vasquez" class="input input-inline">
                        Dee Vasquez
                    </label>
                </li>
    </ul>
</div>