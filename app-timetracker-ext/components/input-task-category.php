
<div class="input-wrapper input-wrapper-block input-wrapper-vertical position-relative">
    <!-- @note hidden fields here -->
    <label for="task-category" class="input-label padding-small-bottom color-inherit font-weight-inherit">Task Category</label>
    <input name="" id="task-category" type="text" class="input input-single-line theme-default color-theme font-weight-400" placeholder="Select Task Category" list="categories" />
    <datalist id="categories">
        <!-- @if has input value -->
            <option data-value="REPLACEWithInputValue" ref="createNew">Create new Category `REPLACEWithInputValue`</option>

        <!-- @loop option -->
            <option data-value="REPLACEWithTaskCategory">REPLACEWithTaskCategory</option>
                    
            <!-- @PLACEHOLDER. delete when ready -->
                        <option data-calue="SEO">SEO</optioon>
                        <option data-calue="Design">Design</optioon>
                        <option data-calue="Dev">Dev</optioon>
                        <option data-calue="Meeting">Meeting</optioon>
                        <option data-calue="Other stuff I can't think of at the moment">Other stuff I can't think of at the moment</optioon>
    </datalist>

    
    <?php /* <!--@ALTERNATE DROPDOWN SETUP-->
    <!--
    @Imports JS:

    Dropdown from framework/src/js/imports/dropdown

    -->
    <input name="" id="task-category" type="text" class="input input-select" placeholder="Select Task Category" data-toggle-dropdown />
    <div class="dropdown dropdown-top-flush dropdown-left text-leading-expanded no-padding" data-dropdown-width="100%">


        <!-- @else -->
            <p class="padding-x padding-y-small no-margin color-neutral border-color-neutral-alpha-2 border-style-solid border-width-thin-bottom">Select Category</p>

        <div class="overflow-y-auto" style="max-height: 20vh;">
            <ul class="unstyled padding">
                <!-- @loop li -->                    
                    <!-- @PLACEHOLDER. delete when ready -->
                        <li><a href="#" class="color-inherit">SEO</a></li>
                        <li><a href="#" class="color-inherit">Design</a></li>
                        <li><a href="#" class="color-inherit">Dev</a></li>
                        <li><a href="#" class="color-inherit">Meeting</a></li>
                        <li><a href="#" class="color-inherit">Other stuff I can't think of at the moment</a></li>
            </ul>
        </div>
    </div>
    */?>
</div>