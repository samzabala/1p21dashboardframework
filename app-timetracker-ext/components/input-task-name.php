
<div class="input-wrapper input-wrapper-block input-wrapper-vertical position-relative">
    <!-- @note hidden fields here -->
    <label for="task-name" class="sr-only">Task Name</label>
    <input name="" id="task-name" type="text" class="input input-box" placeholder="Enter Task Name or Notes" list="tasks" />
    <datalist id="tasks">
        <!-- @if has input value -->
            <option data-value="REPLACEWithInputValue" ref="createNew">Create new Task `REPLACEWithInputValue`</option>

        <!-- @loop option -->
            <option data-value="REPLACEWithTaskName">REPLACEWithTaskName</option>
                    
            <!-- @PLACEHOLDER. delete when ready -->
                <option data-value="A Task">A Task</a></li>
                <option data-value="Another Task">Another Task</a></li>
                <option data-value="This other Task">This other Task</a></li>
                <option data-value="Other Other Task">Other Other Task</a></li>
                <option data-value="Oh Lordy that's a lot of Tasks">Oh Lordy that's a lot of Tasks</a></li>
                <option data-value="Make the walls go RUMBLING. RUMBLING">Make the walls go RUMBLING. RUMBLING</a></li>
                <option data-value="Float left everything">Float left everything</a></li>
                <option data-value="Suntukan sa Ace Hardware">Suntukan sa Ace Hardware</a></li>
                <option data-value="Poop">Poop</a></li>
    </datalist>

    <?php /* <!--@ALTERNATE DROPDOWN SETUP-->
    <!--
    @Imports JS:

    Dropdown from framework/src/js/imports/dropdown

    -->
    <input name="" id="task-name" type="text" class="input input-box input-box-select" placeholder="Enter Task Name or Notes" data-toggle-dropdown />
    <div class="dropdown dropdown-top-flush dropdown-left text-leading-expanded no-padding" data-dropdown-width="100%">


        <!-- @if has value -->
            <div class="padding-x padding-y-small border-color-neutral-alpha-2 border-style-solid border-width-thin-bottom">
                <a href="#">Create new task `REPLACEWithInputValue`</a>
            </div>

        <!-- @else -->
            <p class="padding-x padding-y-small no-margin color-neutral border-color-neutral-alpha-2 border-style-solid border-width-thin-bottom">Select Name</p>

        <div class="overflow-y-auto" style="max-height: 20vh;">
            <ul class="unstyled padding">
                <!-- @loop li -->
                    <li><a href="#" class="color-inherit"><span class="REPLACE">Task Name</span></a></li>
                    
                    <!-- @PLACEHOLDER. delete when ready -->
                        <li><a href="#" class="color-inherit">A Task</a></li>
                        <li><a href="#" class="color-inherit">Another Task</a></li>
                        <li><a href="#" class="color-inherit">This other Task</a></li>
                        <li><a href="#" class="color-inherit">Other Other Task</a></li>
                        <li><a href="#" class="color-inherit">Oh Lordy that's a lot of Tasks</a></li>
                        <li><a href="#" class="color-inherit">A Task</a></li>
                        <li><a href="#" class="color-inherit">A Task</a></li>
                        <li><a href="#" class="color-inherit">Another Task</a></li>
                        <li><a href="#" class="color-inherit">This other Task</a></li>
                        <li><a href="#" class="color-inherit">Other Other Task</a></li>
                        <li><a href="#" class="color-inherit">Oh Lordy that's a lot of Tasks</a></li>
                        <li><a href="#" class="color-inherit">A Task</a></li>
                        <li><a href="#" class="color-inherit">A Task</a></li>
                        <li><a href="#" class="color-inherit">Another Task</a></li>
                        <li><a href="#" class="color-inherit">This other Task</a></li>
                        <li><a href="#" class="color-inherit">Other Other Task</a></li>
                        <li><a href="#" class="color-inherit">Oh Lordy that's a lot of Tasks</a></li>
            </ul>
        </div>
    </div>
    */?>
</div>