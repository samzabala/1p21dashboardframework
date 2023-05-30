
<div class="input-wrapper input-wrapper-block input-wrapper-vertical position-relative">
    <!-- @note hidden fields here -->
    <label for="task-project" class="sr-only">Task Project</label>
    <input name="" id="task-project" type="text" class="input input-box" placeholder="Select Project" list="projects" />
    <datalist id="projects">
        <!-- @if has input value -->
            <option data-value="REPLACEWithInputValue" ref="createNew">Create new Project `REPLACEWithInputValue`</option>

        <!-- @loop option -->
            <option data-value="REPLACEWithProjectName">REPLACEWithClientName</option>
                    
            <!-- @PLACEHOLDER. delete when ready -->
                <option data-value="A Project">A Project</a></li>
                <option data-value="Another Project">Another Project</a></li>
                <option data-value="This other Project">This other Project</a></li>
                <option data-value="Other Other Project">Other Other Project</a></li>
                <option data-value="Oh Lordy that's a lot of Projects">Oh Lordy that's a lot of Projects</a></li>
                <option data-value="Chemical X">Chemical X</a></li>
                <option data-value="Mekeni Mekeni Dugdug Doremi (Repeat)">Mekeni Mekeni Dugdug Doremi (Repeat)</a></li>
                <option data-value="Tongtongtongtongpakitongkitong">Tongtongtongtongpakitongkitong</a></li>
                <option data-value="Bababa ba? Bababa!">Bababa ba? Bababa!</a></li>
    </datalist>

    <?php /* <!--@ALTERNATE DROPDOWN SETUP-->
    <!--
    @Imports JS:

    Dropdown from framework/src/js/imports/dropdown

    -->
    <input name="" id="task-project" type="text" class="input input-box input-box-select" placeholder="Select Project" data-toggle-dropdown />
    <div class="dropdown dropdown-top-flush dropdown-left text-leading-expanded no-padding" data-dropdown-width="100%">


        <!-- @if has value -->
            <div class="padding-x padding-y-small border-color-neutral-alpha-2 border-style-solid border-width-thin-bottom">
                <a href="#">Create new project `REPLACEWithInputValue`</a>
            </div>

        <!-- @else -->
            <p class="padding-x padding-y-small no-margin color-neutral border-color-neutral-alpha-2 border-style-solid border-width-thin-bottom">Select Project</p>

        <div class="overflow-y-auto" style="max-height: 20vh;">
            <ul class="unstyled padding">
                <!-- @loop li -->
                    <li><a href="#" class="color-inherit"><span class="REPLACE">Project Name</span></a></li>

                    <!-- @PLACEHOLDER. delete when ready -->
                        <li><a href="#" class="color-inherit">A Project</a></li>
                        <li><a href="#" class="color-inherit">Another Project</a></li>
                        <li><a href="#" class="color-inherit">This other Project</a></li>
                        <li><a href="#" class="color-inherit">Other Other Project</a></li>
                        <li><a href="#" class="color-inherit">Oh Lordy that's a lot of Projects</a></li>
                        <li><a href="#" class="color-inherit">A Project</a></li>
                        <li><a href="#" class="color-inherit">A Project</a></li>
                        <li><a href="#" class="color-inherit">Another Project</a></li>
                        <li><a href="#" class="color-inherit">This other Project</a></li>
                        <li><a href="#" class="color-inherit">Other Other Project</a></li>
                        <li><a href="#" class="color-inherit">Oh Lordy that's a lot of Projects</a></li>
                        <li><a href="#" class="color-inherit">A Project</a></li>
                        <li><a href="#" class="color-inherit">A Project</a></li>
                        <li><a href="#" class="color-inherit">Another Project</a></li>
                        <li><a href="#" class="color-inherit">This other Project</a></li>
                        <li><a href="#" class="color-inherit">Other Other Project</a></li>
                        <li><a href="#" class="color-inherit">Oh Lordy that's a lot of Projects</a></li>
            </ul>
        </div>
    </div>
    */?>
</div>