<!-- Main -->
<div
	class="module"
>
	<div class="module-content">

        <div class="flex-grid flex-grid-fixed flex-grid-no-gutter-y align-items-center position-relative">
            <div class="flex-col-xs12 flex-col-sm-6 flex-col-md-8">
                <div class="flex-grid flex-nowrap align-items-center flex-grid-no-gutter-y">
                    <div class="flex-child flex-0-0">
                        <?php app_get_component('components/profile-image-small') ?>
                    </div>
                    <div class="flex-child flex-1-1">

                        <span class="contact-status tag tag-primary">
                            <span class="REPLACE">Client</span>
                        </span>

                        <p class="h1 no-margin-y">
                            <span class="contact-name">
                                <span class="REPLACE">Phoenix Wright</span>
                            </span>
                        </p>

                        <div class="p no-margin-bottom">
                            <a href="<?=app_create_link(array('template'=>'company-detail')) ?>" class="contact-company no-margin">
                                Wright &amp; Co Law Offices
                            </a>
                            <span class="separator">|</span>
                            <a href="#mb-editor-email" data-toggle-modal-board class="contact-email">
                                <span class="REPLACE">REPLACE@email.com</span>
                            </a>
                        </div>


                        <div class="position-absolute btn-symbol position-absolute offset-0-right offset-0-top">
                            <a data-toggle-dropdown class="btn btn-neutral-glassy">
                                <span class="sr-only">Edit</span>
                                <i class="symbol symbol-kebab-horizontal"></i>
                            </a>
                            <div class="dropdown dropdown-top-flush dropdown-right" data-dropdown-width="200px">
                                <ul class="list-group">
                                    <li><a href="#mb-editor-contact-details" data-toggle-modal-board>Edit</a></li>
                                    <li><a href="#">Delete</a></li>
                                </ul>
                            </div>
                        </div>
                        <?php app_get_component('components/modal-board-form-contact-details') ?>
                    </div>
                </div>
            </div>
            <div class="flex-col-xs12 flex-col-sm-6 flex-col-md-4">
                <div class="flex-grid flex-grid-compact flex-grid-no-gutter-y">
                    <div class="flex-child flex-0-0">
                            <span class="btn-no-interaction btn btn-success-glassy btn-round btn-symbol">
                                <i class="symbol symbol-calendar-alt"></i>
                            </span>
                    </div>
                    <div class="flex-child flex-1-1">
                        <!-- @if last contact available -->
                            <strong class="font-size-small color-neutral">Last Contacted</strong>
                            <h5 class="no-margin-y">
                                <span class="REPLACE">June 12, 1898</span>
                            </h5>
                        <!-- @else -->

                            <p class="color-neutral no-margin-y">
                                <span class="REPLACE">Not contacted yet</span>
                            </p>
                    </div>
                </div>
            </div>
        </div>
	</div>

	
</div>