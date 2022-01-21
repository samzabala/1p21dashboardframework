
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
    <div class="dropdown dropdown-top-flush dropdown-left" data-dropdown-width="200px" >
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
    </div>
</div>


<div class="module-function function-filter-client position-static">
    
    <button data-toggle="dropdown" data-dropdown-width="100%"  class="input input-block-mobile input-select">
        Client
        <!-- @if one or more status is checked -->
        <span class="filter-analytics-client-name-counter">
            <!-- @NOTE: counter will be rendered here -->
            (<span class="REPLACE">1</span>)
        </span>
    </button>
    <div class="dropdown dropdown-left dropdown-top-flush">
        <div class="module background-theme-contrast padding-small p flex-0-0 position-sticky offset-0-top offset-0-right offset-0-left">
            <div class="flex-grid flex-grid-fixed flex-grid-compact flex-grid-no-gutter-y">
                <div class="flex-col-xs-12 flex-col-md-3  flex-col-lg-6">
                    <input type="text" id="cli_ui_search" class="input input-block input-single-line" placeholder="Search to filter list" />
                </div>
                <div class="flex-col-xs-12 flex-col-md-3 flex-col-lg-2">
                    <label for="cli_ui_selectall" class="input-label">
                        <input type="checkbox" id="cli_ui_selectall" name="cli_ui_selectall" class="input input-inline" />
                        Select All
                    </label>
                </div>
                <div class="flex-col-xs-12 flex-col-md-3 flex-col-lg-2">
                    <label for="cli_ui_selectclient" class="input-label">
                        <input type="checkbox" id="cli_ui_selectclient" name="cli_ui_selectclient" class="input input-inline" />
                        Select all client projects
                    </label>
                </div>
                <div class="flex-col-xs-12 flex-col-md-3 flex-col-lg-2">
                    <label for="cli_ui_selectint" class="input-label">
                        <input type="checkbox" id="cli_ui_selectint" name="cli_ui_selectint" class="input input-inline" />
                        Select all internal projects
                    </label>
                </div>
            </div>
        </div>
        <div class=" margin-large-top flex-1-1 overflow-y-scroll" style="max-height: 420px">

            <div class="flex-grid flex-grid-fixed flex-grid-no-gutter-y">
                <div class="flex-col-xs-12 flex-col-sm-6 flex-col-md-3">
                    <label for="cli_ui_id_1" class="input-label">
                        <input type="checkbox" id="cli_ui_id_1" name="cli_ui_ids[]" value="1" data-cli-internal class="input input-inline" value="1" />
                        Client Internal
                    </label>
                </div>
                <?php for($i=2; $i<=70; $i+=2){ ?>
                    <div class="flex-col-xs-12 flex-col-sm-6 flex-col-md-3">
                        <label for="cli_ui_id_<?=$i ?>" class="input-label">
                            <input type="checkbox" id="cli_ui_id_<?=$i ?>" value="<?=$i ?>" name="cli_ui_ids[]" class="input input-inline" />
                            Client not internal
                        </label>
                    </div>
                    <div class="flex-col-xs-12 flex-col-sm-6 flex-col-md-3">
                        <label for="cli_ui_id_<?=$i + 1 ?>" class="input-label">
                            <input type="checkbox" id="cli_ui_id_<?=$i + 1 ?>" value="<?=$i + 1 ?>" name="cli_ui_ids[]" data-cli-internal class="input input-inline" />
                            Client internal
                        </label>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
