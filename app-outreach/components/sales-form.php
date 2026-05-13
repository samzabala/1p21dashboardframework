<form>
    <div class="flex-grid flex-grid-fixed flex-grid-no-gutter-y">
        <div class="flex-col-xs-12">
            <div class="input-wrapper input-wrapper-vertical input-wrapper-block p">
                <label for="sales-product-id" class="input-label">Product</label>
                <select name="sales-product-id" id="sales-product-id" class="input input-select">
                    <option value="">Select Product Type... </option>

                    <!-- @PLACEHOLDER: modify as needed -->
                        <option value="seo">SEO</option>
                        <option value="website_design">Website Design</option>
                        <option value="ppc">PPC</option>
                        <option value="ppc_setup_fee">PPC Setup Fee</option>
                        <option value="ppc_management_fee">PPC Management Fee</option>
                </select>
            </div>
        </div>
        <div class="flex-col-xs-12 flex-col-sm-3">
            <div class="input-wrapper input-wrapper-vertical input-wrapper-block p">
                <label for="sales-dollar-amount" class="input-label">Dollar Amount</label>
                <input type="text" name="sales-dollar-amount"  id="sales-dollar-amount" class="input input-single-line" placeholder="$XXXXX.XX" />
            </div>
        </div>
        <div class="flex-col-xs-12 flex-col-sm-3">
            <div class="input-wrapper input-wrapper-vertical input-wrapper-block p">
                <label for="sales-percentage" class="input-label">Percentage</label>
                <input type="text" name="sales-percentage"  id="sales-percentage" class="input input-single-line" placeholder="XX.XX%" />
            </div>
        </div>
        <div class="flex-col-xs-12 flex-col-sm-3">
            <div class="input-wrapper input-wrapper-vertical input-wrapper-block p">
                <label for="sales-recurrence" class="input-label">Recurrence</label>
                <select name="sales-recurrence" id="sales-recurrence" class="input input-select">
                    <option value="">Select Recurrence... </option>

                    <!-- @PLACEHOLDER: modify as needed -->
                        <option value="one_time">One-Time</option>
                        <option value="monthly">Monthly</option>
                        <option value="yearly">Yearly</option>
                </select>
            </div>
        </div>
        <div class="flex-col-xs-12 flex-col-sm-3">
            <div class="input-wrapper input-wrapper-vertical input-wrapper-block p">
                <label for="sale-instalments" class="input-label">Instalments</label>
                <select name="sale-instalments" id="sale-instalments" class="input input-select">
                <option value="">Select instalments</option>
                </select>
            </div>
        </div>
        <div class="flex-col-xs-12 flex-col-sm-3">
            <div class="input-wrapper input-wrapper-vertical input-wrapper-block p">
               <label for="sale-sales-rep-id" class="input-label">Sales rep</label>
                <select name="sale-sales-rep-id" id="sale-sales-rep-id" class="input input-select">
                    <option value="" selected>Select Sales Rep... </option>

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
        <div class="flex-col-xs-12 flex-col-sm-3">
            <div class="input-wrapper input-wrapper-vertical input-wrapper-block p">
                <label for="sale-date" class="input-label">Sale date</label>
                <input type="date" name="sale-date" id="sale-date" class="input input-single-line" placeholder="mm/dd/yyyy">
            </div>
        </div>
        <div class="flex-col-xs-12 flex-col-sm-3">
            <div class="input-wrapper input-wrapper-vertical input-wrapper-block p">
                <label for="sale-launch-date" class="input-label">Launch date</label>
                <input type="date" name="sale-launch-date" id="sale-launch-date" class="input input-single-line" placeholder="mm/dd/yyyy" />
            </div>
        </div>
        <div class="flex-col-xs-12 flex-col-sm-3">
            <div class="input-wrapper input-wrapper-vertical input-wrapper-block p">
                <label for="sale-type" class="input-label">Sale type</label>
                <select name="sale-type" id="sale-type" class="input input-select">
                <option value="">Select type</option>
                </select>
            </div>
        </div>
        <div class="flex-col-xs-12 flex-col-sm-4">
            <div class="input-wrapper input-wrapper-vertical input-wrapper-block p">
                <label for="sold-by-sales-rep" class="input-label">Sold by sales rep</label>
                <select name="sold-by-sales-rep" id="sold-by-sales-rep" class="input input-select" required>
                    <option value="0">Select user</option>
                </select>
            </div>
        </div>

        <div class="flex-col-xs-12 flex-col-sm-4">
            <div class="input-wrapper input-wrapper-vertical input-wrapper-block p position-relative">
                <label for="team-sale" class="input-label">Team sale</label>
                <!-- @note hidden input here if needed -->
                <input type="hidden">
                <a href="#" class="input input-select text-decoration-none color-inherit" data-toggle-dropdown>
                    <!-- @if has input -->
                        <span class="REPLACE">Jinseok Kim</span>
                    <!-- @else -->
                        Select user
                </a>
                <ul class="dropdown dropdown-top-flush dropdown-right" data-dropdown-width="100%" data-dropdown-max-height="200px">
                    <li>
                        <label class="input-label">
                            <input type="checkbox" name="team-sale" value="all_users" class="input input-inline">
                            All Users
                        </label>
                    </li>


                    <li>
                        <label class="input-label">
                            <input type="checkbox" name="team-sale" value="REPLACEWithUserValue" class="input input-inline">
                            <span class="REPLACE">User Name</span>
                        </label>
                    </li>

                    <!-- @PLACEHOLDER: modify as needed -->
                        <li>
                            <label class="input-label">
                                <input type="checkbox" name="team-sale" value="Kim Namjoon" class="input input-inline">
                                Kim Namjoon
                            </label>
                        </li>

                        <li>
                            <label class="input-label">
                                <input type="checkbox" checked name="team-sale" value="Kim Seokjin" class="input input-inline">
                                Kim Seokjin
                            </label>
                        </li>

                        <li>
                            <label class="input-label">
                                <input type="checkbox" name="team-sale" value="Min Yoongi" class="input input-inline">
                                Min Yoongi
                            </label>
                        </li>

                        <li>
                            <label class="input-label">
                                <input type="checkbox" name="team-sale" value="Jung Hoseok" class="input input-inline">
                                Jung Hoseok
                            </label>
                        </li>

                        <li>
                            <label class="input-label">
                                <input type="checkbox" name="team-sale" value="Park Jimin" class="input input-inline">
                                Park Jimin
                            </label>
                        </li>

                        <li>
                            <label class="input-label">
                                <input type="checkbox" name="team-sale" value="Kim Taehyung" class="input input-inline">
                                Kim Taehyung
                            </label>
                        </li>

                        <li>
                            <label class="input-label">
                                <input type="checkbox" name="team-sale" value="Jeon Jungkook" class="input input-inline">
                                Jeon Jungkook
                            </label>
                        </li>
                        
                </ul>
            </div>
        </div>

        <div class="flex-col-xs-12 flex-col-sm-4">
            <div class="input-wrapper input-wrapper-vertical input-wrapper-block p">
                <label for="sold-by-admin" class="input-label">Sold by admin</label>
                <select name="sold-by-admin" id="sold-by-admin" class="input input-select">
                    <option value="0">Select user</option>
                </select>
            </div>
        </div>
        <div class="flex-col-xs-12">
            <div class="input-wrapper input-wrapper-vertical input-wrapper-block p">
                <label for="sale-notes" class="input-label">Notes</label>
                <textarea name="sale-notes" id="sale-notes" class="input input-multiple-line" >Body note. will be replaced by tinymce</textarea>
            </div>
        </div>
        <div class="flex-col-xs-12">
            <div class="input-wrapper input-wrapper-vertical input-wrapper-block p">
                <label for="sale-is-active" class="input-label">
                    <input type="checkbox" name="sale-is-active" id="sale-is-active" class="input input-inline">
                    <span>Is active?</span>
                </label>
            </div>
        </div>
        <div class="flex-col-xs-6">
            <a href="#" class="btn btn-link float-left color-error">
                Delete
            </a>
        </div>
        <div class="flex-col-xs-6">
            <div class="text-align-right">
                <button class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</form>