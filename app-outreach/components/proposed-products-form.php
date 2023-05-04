<form>
    <div class="grid grid-flex grid-flex-fixed grid-constricted-y">
        <div class="grid-col-xs-12">
            <div class="input-wrapper input-wrapper-vertical input-wrapper-block p">
                <label for="proposed-product-type" class="input input-label">Product</label>
                <select name="proposed-product-type" id="proposed-product-type" class="input input-box input-box-select">
                    <option value="">Select Product Type... </option>

                    <!-- @PLACEHOLDER: modify as needed -->
                        <option value="lawsite360">Lawsite 360</option>
                        <option value="seo">SEO</option>
                        <option value="ppc_setup">PPC Setup</option>
                        <option value="ppc_management">PPC Management</option>
                        <option value="chat_bot_setup">Chat Bot Setup</option>
                        <option value="chat_bot">Chat Bot</option>
                </select>
            </div>
        </div>
        <div class="grid-col-xs-12 grid-col-sm-4">
            <div class="input-wrapper input-wrapper-vertical input-wrapper-block p">
                <label for="proposed-product-price" class="input input-label">Price</label>
                <input type="text" name="proposed-product-price"  id="proposed-product-price" class="input input-box" placeholder="$XXXXX.XX" />
            </div>
        </div>
        <div class="grid-col-xs-12 grid-col-sm-4">
            <div class="input-wrapper input-wrapper-vertical input-wrapper-block p">
                <label for="proposed-product-recurrence" class="input input-label">Recurrence</label>
                <select name="proposed-product-recurrence" id="proposed-product-recurrence" class="input input-box input-box-select">
                    <option value="">Select Recurrence... </option>

                    <!-- @PLACEHOLDER: modify as needed -->
                        <option value="one_time">One-Time</option>
                        <option value="monthly">Monthly</option>
                        <option value="yearly">Yearly</option>
                </select>
            </div>
        </div>
        <div class="grid-col-xs-12 grid-col-sm-4">
            <div class="input-wrapper input-wrapper-vertical input-wrapper-block p">
                <label for="proposed-product-close-probability" class="input input-label">Close Probability %</label>
                <input type="text" name="proposed-product-probability"  id="proposed-product-probability" class="input input-box" min="0" max="100" />
            </div>
        </div>
        <div class="grid-col-xs-12">
            <div class="text-align-right">
                <button class="btn btn-primary-glassy">Save and Add Another</button>
                <button class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</form>