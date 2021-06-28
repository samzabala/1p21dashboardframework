<!--
Imports JS:

Modal from framework/src/js/imports/modal
Calendar from framework/src/js/imports/form/form-calendar

-->
<div class="modal modal-board" data-modal-width="770px" id="mb-editor-contact-details" data-modal-title="Edit Contact">
    <form action="">

        <div class="flex-grid flex-grid-fixed">
            <div class="flex-col-2">
                <div class="flex-grid flex-grid-fixed align-items-center justify-content-center">
                    <div class="flex-child flex-0-0">
                        <?php app_get_component('components/profile-image-small') ?>
                    </div>
                </div>
            </div>
            <div class="flex-col-10">
                <div class="flex-grid flex-grid-fixed flex-grid-no-gutter-y">
                    <div class="flex-col-xs-12 flex-col-sm-4">
                        <div class="input-wrapper input-wrapper-block input-wrapper-vertical">
                            <label class="input-label" for="contact-firstname">First Name</label>
                            <input class="input input-single-line" type="text" name="contact-firstname" id="contact-firstname" value="Franziska">
                        </div>
                    </div>
                    <div class="flex-col-xs-12 flex-col-sm-4">
                        <div class="input-wrapper input-wrapper-block input-wrapper-vertical">
                            <label class="input-label" for="contact-lastname">Last Name</label>
                            <input class="input input-single-line" type="text" name="contact-lastname" id="contact-lastname" value="von Karma">
                        </div>
                    </div>
                    <div class="flex-col-xs-12 flex-col-sm-4">
                        <div class="input-wrapper input-wrapper-block input-wrapper-vertical">
                            <label class="input-label" for="contact-title">Title</label>
                            <input class="input input-single-line" type="text" name="contact-title" id="contact-title" value="Partner">
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex-col-xs-12 flex-col-sm-6">
                <div class="input-wrapper input-wrapper-block input-wrapper-vertical">
                    <label class="input-label" for="contact-company">Company</label>

                    <!-- @NOTE: options are placeholders. replace as needed -->
                    <datalist id="contact-company-available">
                        <option value="">Select Company...</option>
                        <option value="Wright & Co Law Offices">Wright & Co Law Offices</option>
                        <option value="Fey & Co Law Offices">Fey & Co Law Offices</option>
                        <option value="Wright Talent Agency">Wright Talent Agency</option>
                        <option value="Wright Anything Agency">Wright Anything Agency</option>
                        <option value="Gavin Law Offices">Gavin Law Offices</option>
                        <option value="Grossberg Law Offices">Grossberg Law Offices</option>
                        <option value="Edgeworth Law Offices">Edgeworth Law Offices</option>
                        <option value="Von Karma Law Offices">Von Karma Law Offices</option>
                    </datalist>
                    <input list="contact-company-available" class="input input-single-line" id="contact-company" name="contact-company" />
                </div>
            </div>

            <div class="flex-col-xs-12 flex-col-sm-6">
                <div class="input-wrapper input-wrapper-block input-wrapper-vertical">
                    <label class="input-label" for="contact-email">Email</label>
                    <input class="input input-single-line" type="email" name="contact-email" id="contact-email" value="REPLACE@email.com">
                </div>
            </div>
            <div class="flex-col-xs-12 flex-col-sm-6">
                <div class="input-wrapper input-wrapper-block input-wrapper-vertical position-relative">
                    <label for="contact-last-contact" class="input-label">Last Contact</label>
                    <a data-toggle-dropdown class="btn-group btn-block btn-group-horizontal btn-group-unite">
                        <div class="btn btn-default justify-content-flex-start">
                            <span class="REPLACE">Friday, April 20, 2069</span>
                        </div>
                        <div class="btn btn-symbol btn-default">
                            <i class="symbol symbol-calendar-alt"></i>
                        </div>
                    </a>
                    <div class="dropdown dropdown-top-flush dropdown-center-x no-padding" data-dropdown-width="100%">
                        <input type="text" name="contact-last-contact" id="contact-last-contact"  class="input input-calendar" value="2069-04-20"/>
                    </div>
                </div>
            </div>
            <div class="flex-col-xs-12 flex-col-sm-6">
                <div class="input-wrapper input-wrapper-block input-wrapper-vertical">
                    <label for="contact-status" class="input-label">Status</label>
                    <select name="contact-status" id="contact-status" class="input-select">
                        <option value="">Select</option>
                        <option value="client">Client</option>
                        <option value="lead">Lead</option>
                        <option value="prospect">Prospect</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="flex-grid flex-grid-fixed">
            <div class="flex-col-xs-12">
                <hr class="no-margin-top">
            </div>
            <div class="flex-col-xs-12">
                <div class="input-wrapper input-wrapper-block input-wrapper-responsive input-wrapper-horizontal">
                    <label for="contact-phone" class="input-label">Phone</label>
                    <input class="input input-single-line" type="text" name="contact-phone" id="contact-phone" placeholder="(***) ***-****" value="" />
                </div>
            </div> 
            <div class="flex-col-xs-12">
                <div class="input-wrapper input-wrapper-block input-wrapper-responsive input-wrapper-horizontal">
                    <label for="contact-cell" class="input-label">Cellphone</label>
                    <input class="input input-single-line" type="text" name="contact-cell" id="contact-cell" placeholder="(***) ***-****" value="" />
                </div>
            </div> 
            <div class="flex-col-xs-12">
                <div class="input-wrapper input-wrapper-block input-wrapper-responsive input-wrapper-horizontal">
                    <label for="contact-preferred" class="input-label">Preferred Contact Method</label>
                    <select name="contact-preferred" id="contact-preferred" class="input input-select">
                        <option value="">Select</option>
                        <option value="phone">Phone</option>
                        <option value="cell">Cell</option>
                    </select>
                </div> 
            </div> 
            <div class="flex-col-xs-12">
                <div class="input-wrapper input-wrapper-block input-wrapper-responsive input-wrapper-horizontal">
                    <label for="contact-undergrad" class="input-label">Undergrad</label>
                    <input class="input input-single-line" type="text" name="contact-undergrad" id="contact-undergrad" value="Ateneo De La Salle" />
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