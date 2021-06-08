<div class="module background-theme-contrast position-sticky offset-bottom-0 no-radius-top no-border-x no-border-bottom z-index-5">
    <div class="module-content">
        <div class="accordion-group">
            <div class="accordion open text-align-right" data-accordion-change-hash="false" id="close-add-note">
                <a href="#add-note" data-toggle-accordion class="btn btn-neutral-glassy">
                    Add Note&nbsp;<i class="symbol symbol-plus"></i>
                </a>
            </div>
            <div class="accordion" data-accordion-change-hash="false" id="add-note">
                <div class=" flex-grid flex-grid-compact align-items-flex-start flex-grid-fixed flex-nowrap position-relative">
                    <div class="flex-child flex-0-0">
                        <?php app_get_component('components/profile-image','micro'); ?>
                    </div>
                    <div class="flex-child flex-1-1">
                        <?php app_get_component('components/note-form','simple',false,array(
                            'add_close_btn' => true
                        )) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>