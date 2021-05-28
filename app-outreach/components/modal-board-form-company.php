<!--
Imports JS:

Modal from framework/src/js/imports/modal
Modal from framework/src/js/imports/form/form-tags

-->
<div class="modal modal-board" id="mb-editor-company" data-modal-title="Edit Company" data-modal-width="770px">

        <form action="" class="flex-grid flex-grid-fixed">
            <div class="flex-col-12">
                <div class="input-wrapper input-wrapper-block input-wrapper-vertical">
                    <label class="input-label" for="company-name">Company Name</label>
                    <input class="input input-single-line" type="text" name="company-name" id="company-name" />
                </div>
            </div>


            <div class="flex-col-xs-12 flex-col-sm-6">
                <div class="input-wrapper input-wrapper-block input-wrapper-vertical">
                    <label class="input-label" for="company-lead-source">Lead Source</label>
                    <select class="input input-single-line input-select" type="text" name="company-lead-source" id="company-lead-source">

                        <!-- @NOTE: options are placeholders. replace as needed -->
                        <option value="">Select lead source...</option>
                        <option value="">Lead Source Name</option>
                        <option value="">Another Lead Source Name</option>
                        <option value="">Other Lead Source Name</option>
                    </select>
                </div>
            </div>

            <div class="flex-col-xs-12 flex-col-sm-6">
                <div class="input-wrapper input-wrapper-block input-wrapper-vertical">
                    <label class="input-label" for="company-status">Status</label>
                    <select class="input input-single-line input-select" type="text" name="company-status" id="company-status">

                        <!-- @NOTE: options are placeholders. replace as needed -->
                        
                        <option value="">Select status...</option>
                        <option value="client">Client</option>
                        <option value="lead">Lead</option>
                        <option value="prospect">Prospect</option>
                    </select>
                </div>
            </div>

            <div class="flex-col-xs-12 flex-col-sm-6">
                <div class="input-wrapper input-wrapper-block input-wrapper-vertical">
                    <label class="input-label" for="company-type">Business Type</label>
                    <select class="input input-single-line input-select" type="text" name="company-type" id="company-type">

                        <!-- @NOTE: options are placeholders. replace as needed -->
                        
                        <option value="">Select type...</option>
                        <option value="client">A type</option>
                        <option value="lead">Another Type</option>
                        <option value="prospect">Other type</option>
                    </select>
                </div>
            </div>



            <div class="flex-col-xs-12 flex-col-sm-6">
                <div class="input-wrapper input-wrapper-block input-wrapper-vertical">
                    <label class="input-label">Marketing Budget</label>
                    <div class="input-group input-group-horizontal input-block">
                        
                    <input class="input input-single-line" type="number" name="company-budget-min"  placeholder="Min" id="company-budget-min" />
                    <input class="input input-single-line" type="number" name="company-budget-max"  placeholder="Max" id="company-budget-max" />
                    </div>
                </div>
            </div>

            <script>
                const REPLACEFilterWithRealOne = function(value){
                    console.log('filtered',value);
                    return value;
                }
            </script>

            
            <div class="flex-col-xs-12">
                <div class="input-wrapper input-wrapper-block input-wrapper-vertical">
                    <label class="input-label" for="company-emails">Emails</label>
                    
                    <input class="input input-tags" type="text" name="company-emails" id="company-emails"
                        data-tags-multiple-lines="true"
                        data-tags-multiple-lines-break="true"
                        data-tags-filter="REPLACEFilterWithRealOne"
                        placeholder="Please enter an email and separate them by comma"
                        value="REPLACEwithvalidValues@emailplace.com,PhoenixWright@ace-attorney.com,MiaFey@ace-attorney.com,ApolloJustic@ace-attorney.com,MilesEdgeworth@ace-attorney.com" />
                </div>
            </div>

            
            <div class="flex-col-xs-12">
                <div class="input-wrapper input-wrapper-block input-wrapper-vertical">
                    <label class="input-label" for="company-phone-numbers">Phone Numbers</label>
                    
                    <input class="input input-tags" type="text" name="company-phone-numbers" id="company-phone-numbers"
                        data-tags-multiple-lines="true"
                        data-tags-multiple-lines-break="true"
                        data-tags-filter="REPLACEFilterWithRealOne"
                        placeholder="Please enter an email and separate them by comma"
                        value="(555) REPLACE,(555) 555-0001,(555) 555-0002,(555) 555-0003,(555) 555-0004,(555) 555-0005,(555) 555-0006,(555) 555-0007," />
                </div>
            </div>

            
            <div class="flex-col-xs-12">
                <div class="input-wrapper input-wrapper-block input-wrapper-vertical">
                    <label class="input-label" for="company-websites">Websites</label>
                    
                    <input class="input input-tags" type="text" name="company-websites" id="company-websites"
                        data-tags-multiple-lines="true"
                        data-tags-multiple-lines-break="true"
                        data-tags-filter="REPLACEFilterWithRealOne"
                        placeholder="Please enter an email and separate them by comma"
                        value="http://ace-attorney.com/REPLACE,http://ace-attorney.com,http://ace-attorney.com/get-some-water/dasani,http://ace-attorney.com/jollibee" />
                </div>
            </div>

            <div class="flex-col-12 text-align-right">
                <button data-toggle-modal-default-close class="btn btn-link">Cancel</button>
                <button href="" class="btn btn-primary">Save</button>
            </div>
        </form>
</div>