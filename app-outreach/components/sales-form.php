<form>
    <div class="grid grid-flex grid-flex-fixed grid-constricted-y">
        <div class="grid-col-xs-12">
            <div class="input-wrapper input-wrapper-vertical input-wrapper-block p">
                <label for="sales-product-type" class="input input-label">Product</label>
                <select name="sales-product-type" id="sales-product-type" class="input input-box input-box-select">
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
        <div class="grid-col-xs-12 grid-col-sm-4">
            <div class="input-wrapper input-wrapper-vertical input-wrapper-block p">
                <label for="sales-product-amount" class="input input-label">Dollar Amount</label>
                <input type="text" name="sales-product-amount"  id="sales-product-amount" class="input input-box" placeholder="$XXXXX.XX" />
            </div>
        </div>
        <div class="grid-col-xs-12 grid-col-sm-4">
            <div class="input-wrapper input-wrapper-vertical input-wrapper-block p">
                <label for="sales-product-percentage" class="input input-label">Percentage</label>
                <input type="text" name="sales-product-percentage"  id="sales-product-percentage" class="input input-box" placeholder="XX.XX%" />
            </div>
        </div>
        <div class="grid-col-xs-12 grid-col-sm-4">
            <div class="input-wrapper input-wrapper-vertical input-wrapper-block p">
                <label for="sales-product-recurrence" class="input input-label">Recurrence</label>
                <select name="sales-product-recurrence" id="sales-product-recurrence" class="input input-box input-box-select">
                    <option value="">Select Recurrence... </option>

                    <!-- @PLACEHOLDER: modify as needed -->
                        <option value="one_time">One-Time</option>
                        <option value="monthly">Monthly</option>
                        <option value="yearly">Yearly</option>
                </select>
            </div>
        </div>
        <div class="grid-col-xs-12 grid-col-sm-6">
            <div class="input-wrapper input-wrapper-vertical input-wrapper-block p">
                <label for="sales-product-salesrep" class="input input-label">Sales Rep</label>
                <select name="sales-product-salesrep" id="sales-product-salesrep" class="input input-box input-box-select">
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
        <div class="grid-col-xs-12 grid-col-sm-3">
            <div class="input-wrapper input-wrapper-vertical input-wrapper-block p">
                <label for="sales-product-sales-date" class="input input-label">Sales Date</label>
                
                <input type="date" name="sales-product-sales-date"  id="sales-product-sales-date" class="input input-box" placeholder="mm/dd/yyyy" />
            </div>
        </div>
        <div class="grid-col-xs-12 grid-col-sm-3">
            <div class="input-wrapper input-wrapper-vertical input-wrapper-block p">
                <label for="sales-product-launch" class="input input-label">Product Launch</label>
                
                <input type="date" name="sales-product-launch"  id="sales-product-launch" class="input input-box" placeholder="mm/dd/yyyy" />
            </div>
        </div>
        <div class="grid-col-xs-12">
            <div class="input-wrapper input-wrapper-vertical input-wrapper-block p">
                <label for="sales-product-launch" class="input input-label">Notes</label>
                
                <textarea name="sales-product-notes"  id="sales-product-notes" class="input input-box input-box-multiline" placeholder="mm/dd/yyyy" >Body note. will be replaced by tinymce</textarea>
            </div>
        </div>
        <div class="grid-col-xs-12">
            <div class="input-wrapper input-wrapper-vertical input-wrapper-block p">
                <label class="input input-label">
                    <input type="checkbox" name="sales-product-isActive"  id="sales-product-isActive" class="input input-inline" placeholder="mm/dd/yyyy" />
                    <span>Is Active?</span>
                </label>
            </div>
        </div>
        <div class="grid-col-xs-12">
            <div class="text-align-right">
                <button class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</form>