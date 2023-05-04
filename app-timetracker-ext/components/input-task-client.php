
<div class="input-wrapper input-wrapper-block input-wrapper-vertical position-relative">
    <!-- @note hidden fields here -->
    <label for="task-client" class="sr-only">Task Client</label>
    <input name="" id="task-client" type="text" class="input input-box" placeholder="Select Client" list="clients" />
    <datalist id="clients">
        <!-- @if has input value -->
            <option data-value="REPLACEWithInputValue" ref="createNew">Create new Client `REPLACEWithInputValue`</option>

        <!-- @loop option -->
            <option data-value="REPLACEWithClientName">REPLACEWithClientName</option>
                        
            <!-- @PLACEHOLDER. delete when ready -->
                <option data-value="Wright & Co Law Offices">Wright & Co Law Offices</option>
                <option data-value="1Point21 Internal">1Point21 Internal</option>
                <option data-value="Samurai Jack">Samurai Jack</option>
                <option data-value="Ghost Stories American English Dub">Ghost Stories American English Dub</option>
                <option data-value="Inuyasha">Inuyasha</option>
                <option data-value="Mang Inasal">Mang Inasal</option>
                <option data-value="Jollibee">Jollibee</option>
                <option data-value="The Mandalorian">The Mandalorian</option>
                <option data-value="Ranking of Kings">Ranking of Kings</option>
                <option data-value="Eren Yeager">Eren Yeager</option>
                <option data-value="Not Eren Yeager">Not Eren Yeager</option>
                <option data-value="Beyonce">Beyonce</option>
                <option data-value="Liza Soberano">Liza Soberano</option>
    </datalist>

    <?php /* <!--@ALTERNATE DROPDOWN SETUP-->
    <!--
    @Imports JS:

    Dropdown from framework/src/js/imports/dropdown

    -->
    <input name="" id="task-client" type="text" class="input input-box input-box-select" placeholder="Select Client" data-toggle-dropdown />
    <div class="dropdown dropdown-top-flush dropdown-left text-leading-expanded no-padding" data-dropdown-width="100%">


        <!-- @if has value -->
            <div class="padding-x padding-y-small border-color-neutral-alpha-2 border-style-solid border-width-thin-bottom">
                <a href="#">Create new client `REPLACEWithInputValue`</a>
            </div>

        <!-- @else -->
            <p class="padding-x padding-y-small no-margin color-neutral border-color-neutral-alpha-2 border-style-solid border-width-thin-bottom">Select Client</p>

        <div class="overflow-y-auto" style="max-height: 20vh;">
            <ul class="unstyled padding">
                <!-- @loop li -->
                    <li><a href="#" class="color-inherit"><span class="REPLACE">Client Name</span></a></li>
                    
                    <!-- @PLACEHOLDER. delete when ready -->
                        <li><a href="#" class="color-inherit">Wright & Co Law Offices</a></li>
                        <li><a href="#" class="color-inherit">1Point21 Internal</a></li>
                        <li><a href="#" class="color-inherit">Samurai Jack</a></li>
                        <li><a href="#" class="color-inherit">Ghost Stories American English Dub</a></li>
                        <li><a href="#" class="color-inherit">Inuyasha</a></li>
                        <li><a href="#" class="color-inherit">Mang Inasal</a></li>
                        <li><a href="#" class="color-inherit">Jollibee</a></li>
                        <li><a href="#" class="color-inherit">The Mandalorian</a></li>
                        <li><a href="#" class="color-inherit">Ranking of Kings</a></li>
                        <li><a href="#" class="color-inherit">Eren Yeager</a></li>
                        <li><a href="#" class="color-inherit">Not Eren Yeager</a></li>
                        <li><a href="#" class="color-inherit">Liza Soberano</a></li>
            </ul>
        </div>
    </div>

    */?>
</div>