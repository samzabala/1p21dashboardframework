<!--
Imports JS:

Modal from framework/src/js/imports/modal
Calendar from framework/src/js/imports/form/form-calendar

-->
<div class="modal modal-board" data-modal-width="770px" id="mb-editor-company-details" data-modal-title="Edit Company">
    <form action="">
        <div class="flex-grid flex-grid-fixed">

            <div class="flex-col-12">
                <div class="input-wrapper input-wrapper-block input-wrapper-vertical">
                    <label class="input-label" for="company-name">Company Name</label>
                    <input class="input input-single-line" type="text" name="company-name" id="company-name" />
                </div>
            </div>

            <div class="flex-col-xs-12 flex-col-sm-6">
                <div class="input-wrapper input-wrapper-block input-wrapper-vertical">
                    <label for="company-status" class="input-label">Status</label>
                    <select name="company-status" id="company-status" class="input-select">
                        <option value="">Select</option>
                        <option value="client">Client</option>
                        <option value="lead">Lead</option>
                        <option value="prospect">Prospect</option>
                    </select>
                </div>
            </div>

            <div class="flex-col-xs-12 flex-col-sm-6">
                <div class="input-wrapper input-wrapper-block input-wrapper-vertical">
                    <label class="input-label" for="company-acct-owners">Acct Owner</label>

                    <!-- @NOTE: options are placeholders. replace as needed -->
                    <datalist id="company-acct-owners-available">
                        <option value="">Select Owner...</option>
                        <option value="Satsuki Miyanoshita">Satsuki Miyanoshita</option>
                        <option value="Hannah Habagat">Hannah Habagat</option>
                        <option value="Ammie Amihan">Ammie Amihan</option>
                        <option value="Alexandra Trese">Alexandra Trese</option>
                        <option value="Bagyon Kulimlim">Bagyon Kulimlim</option>
                        <option value="Bagyon Zuko">Bagyon Zuko</option>
                        <option value="Jean Kirstein">Jean Kirstein</option>
                        <option value="Maliksi Kirstein">Maliksi Kirstein</option>
                    </datalist>
                    <input list="company-acct-owners-available" class="input input-single-line" id="company-acct-owners" name="company-acct-owners" />
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
                <div class="input-wrapper input-wrapper-block input-wrapper-vertical position-relative">
                    <label for="company-last-contact" class="input-label">Last Contact</label>
                    <a data-toggle-dropdown class="btn-group btn-block btn-group-horizontal btn-group-unite">
                        <div class="btn btn-default justify-content-flex-start">
                            <span class="REPLACE">Friday, April 20, 2069</span>
                        </div>
                        <div class="btn btn-symbol btn-default">
                            <i class="symbol symbol-calendar-alt"></i>
                        </div>
                    </a>
                    <div class="dropdown dropdown-top-flush dropdown-center-x no-padding" data-dropdown-width="100%">
                        <input type="text" name="company-last-contact" id="company-last-contact"  class="input input-calendar" value="2069-04-20"/>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex-grid flex-grid-fixed">
            <div class="flex-col-xs-12">
                <hr class="no-margin-top">
            </div>
            <div class="flex-col-12">
                <div class="input-wrapper input-wrapper-block input-wrapper-horizontal">
                    <label class="input-label" for="company-address">Company Address</label>
                    <textarea class="input input-multiple-line" type="text" address="company-address" id="company-address"></textarea>
                </div>
            </div>
            <div class="flex-col-xs-12">
                <div class="input-wrapper input-wrapper-block input-wrapper-responsive input-wrapper-horizontal">
                    <label for="company-phone" class="input-label">Phone</label>
                    <input class="input input-single-line" type="text" name="contact-phone" id="contact-phone" placeholder="(***) ***-****" value="" />
                </div>
            </div> 
            <div class="flex-col-xs-12">
                <div class="input-wrapper input-wrapper-block input-wrapper-responsive input-wrapper-horizontal">
                    <label for="company-fax" class="input-label">Fax</label>
                    <input class="input input-single-line" type="text" name="contact-fax" id="contact-fax" placeholder="(***) ***-****" value="" />
                </div>
            </div> 
            <div class="flex-col-xs-12">
                <div class="input-wrapper input-wrapper-block input-wrapper-responsive input-wrapper-horizontal">
                    <label for="company-domain" class="input-label">Domain</label>
                    <input class="input input-single-line" type="url" name="contact-domain" id="contact-domain" placeholder="http://domain.com" value="" />
                </div>
            </div> 

            <div class="flex-col-xs-12">
                <div class="input-wrapper input-wrapper-block input-wrapper-responsive input-wrapper-horizontal">
                    <label class="input-label" for="company-primary">Primary Contact</label>

                    <!-- @NOTE: options are placeholders. replace as needed -->
                    <datalist id="company-primary-available">
                        <option value="">Select Contact...</option>
                        <option value="Phoenix Wright">Phoenix Wright</option>
                        <option value="Miles Edgeworth">Miles Edgeworth</option>
                        <option value="Eren Yaeger">Eren Yaeger</option>
                        <option value="Sasha Braus">Sasha Braus</option>
                        <option value="Harambe">Harambe</option>
                        <option value="Inuyasha">Inuyasha</option>
                        <option value="Batman">Batman</option>
                        <option value="Zack Snyder">Zack Snyder</option>
                    </datalist>
                    <input list="company-primary-available" class="input input-single-line" id="company-primary" name="company-primary" />
                </div>
            </div>
            
            <div class="flex-col-12">
                <hr>
                <span class="input-label">Social</span>
                <?php app_get_component('components/input-social','',false,array(
                    'type' => 'facebook'
                )) ?>
                <?php app_get_component('components/input-social','',false,array(
                    'type' => 'linkedin'
                )) ?>
                <?php app_get_component('components/input-social','',false,array(
                    'type' => 'twitter'
                )) ?>
                <?php app_get_component('components/input-social','',false,array(
                    'type' => 'google'
                )) ?>
                <?php app_get_component('components/input-social','',false,array(
                    'type' => 'other'
                )) ?>
            </div>
        </div>

        <div class="text-align-right">
            <a href="" class="btn btn-link" data-toggle-modal-default-close>Cancel</a>
            <button class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>