<!--
Imports JS:

Modal from framework/src/js/imports/modal

-->
<div class="modal modal-board" id="mb-advanced-search" data-modal-title="Advanced Search" data-modal-width="670px">
    <form action="">
        <div class="flex-grid flex-grid-fixed">
            <div class="flex-col-xs-12">
                <div class="input-wrapper input-wrapper-block input-wrapper-vertical">
                    <label for="as-title" class="input-label">Company Name</label>
                    <input type="text" id="as-title" name="title" class="input input-single-line" placeholder="Enter a company name">	
                </div>
            </div>
            <div class="flex-col-xs-12 flex-col-sm-6">
                <div class="input-wrapper input-wrapper-block input-wrapper-vertical">
                    <label for="as-list" class="input-label">List Type</label>
                    <select name="list" id="as-list" class="input input-single-line input-select">
                        <option value="">Select</option>

                        <!-- @NOTE: options are placeholders. replace as needed -->
                            <option value="prospect">Prospect</option>
                            <option value="hot_prospect">Hot Prospect</option>
                            <option value="lead">Lead</option>
                            <option value="client">Client</option>
                            <option value="former_client">Former Client</option>
                            <option value="not_contacted">Not Contacted</option>
                            <option value="unqualified">Unqualified</option>
                    </select>
                </div>
            </div>
            <div class="flex-col-xs-12 flex-col-sm-6">
                <div class="input-wrapper input-wrapper-block input-wrapper-vertical">
                    <label for="as-list" class="input-label">Business Type</label>
                    <select name="list" id="as-list" class="input input-single-line input-select">
                        <option value="">Select</option>

                        <!-- @NOTE: options are placeholders. replace as needed -->
                            <option value="">Personal Injury</option>
                            <option value="">Possession</option>
                            <option value="">Mass murder</option>
                            <option value="">Perjury</option>
                            <option value="">Malefic</option>
                            <option value="">Theft</option>
                            <option value="">Staged kidnapping</option>
                            <option value="">Enforced suicide</option>
                            <option value="">Incrimination</option>
                            <option value="">Abuse</option>
                            <option value="">Identity theft</option>
                            <option value="">Conspiracy</option>
                            <option value="">Tampering with a crime scene</option>
                            <option value="">Obstruction of justice</option>
                            <option value="">Assault</option>
                            <option value="">Arson</option>
                    </select>
                </div>
            </div>
            <div class="flex-col-xs-12 flex-col-sm-6">
                <div class="input-wrapper input-wrapper-block input-wrapper-vertical">
                    <label for="as-state" class="input-label">State</label>
                    <select name="state" id="as-state" class="input input-single-line input-select">
                        <option value="">Select</option>

                        <!-- @NOTE: options are placeholders. replace as needed -->
                            <option value="AL">Alabama</option>
                            <option value="AK">Alaska</option>
                            <option value="AZ">Arizona</option>
                            <option value="AR">Arkansas</option>
                            <option value="CA">California</option>
                            <option value="CO">Colorado</option>
                            <option value="CT">Connecticut</option>
                            <option value="DE">Delaware</option>
                            <option value="DC">District Of Columbia</option>
                            <option value="FL">Florida</option>
                            <option value="GA">Georgia</option>
                            <option value="HI">Hawaii</option>
                            <option value="ID">Idaho</option>
                            <option value="IL">Illinois</option>
                            <option value="IN">Indiana</option>
                            <option value="IA">Iowa</option>
                            <option value="KS">Kansas</option>
                            <option value="KY">Kentucky</option>
                            <option value="LA">Louisiana</option>
                            <option value="ME">Maine</option>
                            <option value="MD">Maryland</option>
                            <option value="MA">Massachusetts</option>
                            <option value="MI">Michigan</option>
                            <option value="MN">Minnesota</option>
                            <option value="MS">Mississippi</option>
                            <option value="MO">Missouri</option>
                            <option value="MT">Montana</option>
                            <option value="NE">Nebraska</option>
                            <option value="NV">Nevada</option>
                            <option value="NH">New Hampshire</option>
                            <option value="NJ">New Jersey</option>
                            <option value="NM">New Mexico</option>
                            <option value="NY">New York</option>
                            <option value="NC">North Carolina</option>
                            <option value="ND">North Dakota</option>
                            <option value="OH">Ohio</option>
                            <option value="OK">Oklahoma</option>
                            <option value="OR">Oregon</option>
                            <option value="PA">Pennsylvania</option>
                            <option value="RI">Rhode Island</option>
                            <option value="SC">South Carolina</option>
                            <option value="SD">South Dakota</option>
                            <option value="TN">Tennessee</option>
                            <option value="TX">Texas</option>
                            <option value="UT">Utah</option>
                            <option value="VT">Vermont</option>
                            <option value="VA">Virginia</option>
                            <option value="WA">Washington</option>
                            <option value="WV">West Virginia</option>
                            <option value="WI">Wisconsin</option>
                            <option value="WY">Wyoming</option>
                    </select>
                </div>
            </div>
            <div class="flex-col-xs-12 flex-col-sm-6">
                <div class="input-wrapper input-wrapper-block input-wrapper-vertical">
                    <label for="as-city" class="input-label">City</label>
                    <input type="text" id="as-city" name="city" class="input input-single-line" placeholder="Type a city" list="as-city-list">
                    <datalist id="as-city-list">

                        <!-- @NOTE: options are placeholders. replace as needed -->
                            <option value="Naga City">
                            <option value="Legazpi City">
                            <option value="Manila">
                            <option value="Sitti">
                            <option value="CD">
                            <option value="Seedy">
                            <option value="See tea">
                            <option value="Pili">
                            <option value="Tinambac">
                            <option value="Quezon">
                            <option value="Daet">
                            <option value="Barako">
                    </datalist>	
                </div>
            </div>
            <div class="flex-col-xs-12">
                <div class="input-wrapper input-wrapper-block input-wrapper-vertical">
                    <label class="input-label">Vendor History</label>
                    <div class="flex-grid flex-grid-fixed flex-grid-no-gutter-y">
                        <div class="flex-col-xs-4 flex-col-sm-3">
                            <select name="vendor-criteria" class="flex-1-3 input input-single-line input-select input-block">

                                <!-- @NOTE: options are placeholders. replace as needed -->
                                    <option value="">is</option>
                                    <option value="">not</option>
                                    <option value="">was</option>
                                    <option value="">maybe</option>
                                    <option value="">never</option>
                                    <option value="">gonna</option>
                                    <option value="">give</option>
                                    <option value="">you</option>
                                    <option value="">up</option>
                            </select>
                        </div>
                        <div class="flex-col-xs-8 flex-col-sm-9">

                            <!-- @NOTE hidden input field here if needed -->
                            <input  name="vendor-name" type="text" class="flex-3-0 input input-single-line input-select input-block" list="as-vendor-name-list">
                            <datalist class="input" id="as-vendor-name-list">

                                <!-- @NOTE: options are placeholders. replace as needed -->
                                <option value="Findlaw">
                                <option value="Jollibee">
                                <option value="Greenwhich">
                                <option value="Mang Inasal">
                                <option value="Chowking">
                                <option value="Potato Corner">
                            </datalist>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex-col-xs-12">
                <div class="input-wrapper input-wrapper-block input-wrapper-vertical">
                    <label class="input-label">ARC Score</label>
                    <div class="flex-grid flex-grid-fixed flex-grid-no-gutter-y">
                        <div class="flex-col-xs-4 flex-col-sm-3">
                            <select name="arc-criteria" class="flex-1-3 input input-single-line input-select input-block">

                                <!-- @NOTE: options are placeholders. replace as needed -->
                                    <option value="">is between</option>
                                    <option value="">is less than</option>
                                    <option value="">is greater than</option>
                            </select>
                        </div>
                            <div class="flex-col-xs-8 flex-col-sm-9">

                                <div class="flex-grid flex-grid-compact flex-grid-fixed flex-grid-no-gutter-y">
                                    <div class="flex-col-xs-5 flex-col-sm-3">
                                        <input name="arc-num-a" type="number" class="input input-single-line input-block" placehoder="000">
                                    </div>

                                    <!-- @if set to is between  -->
                                        <div class="flex-col-xs-2 flex-col-sm-1 align-self-center">
                                            <div class="text-align-center">
                                                and
                                            </div>
                                        </div>
                                        <div class="flex-col-xs-5 flex-col-sm-3">
                                            <input name="arc-num-b" type="number" class="input input-single-line input-block" placehoder="000">
                                        </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            <div class="flex-col-xs-12">
                <div class="input-wrapper input-wrapper-block input-wrapper-vertical">
                    <label for="as-lead" class="input-label">Lead Source</label>
                    <select name="lead" id="as-lead" class="flex-1-3 input input-single-line input-select input-block">
                            <option value="">Select from list</option>

                        <!-- @PLACEHOLDER: modify as needed -->
                            <option value="">Dahlia Hawthorne</option>
                            <option value="">Candice Arm</option>
                            <option value="">Bobby Fullbright</option>
                            <option value="">Trucy Wright</option>
                            <option value="">Laurice Deauxnim</option>
                            <option value="">Dee Vasquez</option>
                            <option value="">Will Powers</option>
                            <option value="">Wendy Oldbag</option>
                            <option value="">Simon Blackquill</option>
                            <option value="">Geiru Toneido</option>
                    </select>
                </div>
            </div>
            <div class="flex-col-12">
                <hr>
                <button class="btn-primary btn">Search</button>
            </div>
        </div>
        
    </form>
</div>