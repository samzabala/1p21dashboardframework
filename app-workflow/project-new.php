<!-- 
<?php
app_get_component('components/board-add-edit-project');
app_get_component('components/board-view-task');
app_get_component('components/board-add-edit-task');
?> -->
<section id="workflow-project-detail">
    <div class="container">
        <div class="split-column">
            <div class="left">
                <div class="module-grid">
                    <div class="module">
                        <div class="module-content">                            
                            <form method="get" style="margin-top: 45px;">
                                <div class="container">
                                    <!-- New task vs edit task may look identical depending on how little input may have been made -->
                                    <input type="hidden" id="task-entry-mode" name="REPLACEMODE" />
                                    <!-- if editing existing task -->
                                    <input type="hidden" id="REPLACEMODE-REPLACEwithPostType-entry-id" name="task-entry-id" />
                                    <!-- Title -->
                                    <div class="task-heading">
                                        <div class="input-wrapper p input-wrapper-block input-wrapper-vertical">
                                            <label for="REPLACEMODE-REPLACEwithPostType-title" class="input-label sr-only">Title</label>
                                            <input type="text" placeholder="Add project title.." id="REPLACEMODE-REPLACEwithPostType-title" name="REPLACEMODE-REPLACEwithPostType-title" class=" input input-single-line input-large">
                                        </div>
                                    </div>
                                    <!-- Description -->
                                    <div class="task-description">
                                        <!-- @NOTE use tinymce here -->
                                        <div class="input-wrapper input-wrapper-block input-wrapper-vertical p">
                                            <label for="REPLACEMODE-REPLACEwithPostType-body" class="input-label sr-only">Description</label>
                                            <textarea name="REPLACEMODE-REPLACEwithPostType-body" id="REPLACEMODE-REPLACEwithPostType-body" cols="30" rows="10" class="input input-multiple-line">use tinymce in place</textarea>
                                        </div>
                                    </div>
                                        <!-- @NOTE .task-time-meta is not needed for now if not possible to program yet. ok to comment out for now -->
                                    <div class="task-time-meta">
                                        <div class="input-wrapper p input-wrapper-vertical input-wrapper-block" style="display: inline-flex">
                                            <div class="input-toggle input-toggle-reverse">
                                                <input type="checkbox" class="input" name="REPLACEMODE-REPLACEwithPostType-enable-delay" id="REPLACEMODE-REPLACEwithPostType-enable-delay">
                                                <label for="REPLACEMODE-REPLACEwithPostType-enable-delay" class="input-label input-toggle-label input-primary text-transform-uppercase">
                                                    Apply project template
                                                </label>
                                            </div>
                                        </div>
                                        <!-- 
                                        @NOTE
                                            .flex-grid
                                                classes to add
                                                    `input-disabled` => when input[name=task-enable-delay] is checked
                                        -->
                                        <div class="flex-grid flex-grid-compact flex-grid-no-gutter-y">
                                            <div class="flex-col-12">
                                                <div class="input-wrapper p input-wrapper-block input-wrapper-horizontal">
                                                    <button class="btn  btn-default  btn-block justify-content-space-between" data-toggle="dropdown">
                                                    <!-- @NOTE @DYNAMIC : update text to the value set to tthe input field -->
                                                        <span class="task-delay-date-value">
                                                            <span class="REPLACE">
                                                                Select template
                                                            </span>
                                                        </span>
                                                        <i class="symbol symbol-arrow-down color-primary"></i>
                                                    </button>
                                                    <!-- <div class="dropdown dropdown-top-flush dropdown-left no-padding"> -->
                                                        <!-- <input type="text" class="input-calendar border-color-transparent" name="REPLACEMODE-REPLACEwithPostType-delay-date" id="REPLACEMODE-REPLACEwithPostType-delay-date"> -->
                                                    <!-- </div> -->
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                    </div>
                                    <!-- Attachments -->
                                    <div class="task-attachments">
                                        <div class="flex-grid flex-grid-compact justify-content-space-between align-items-center">
                                            <div class="flex-grid flex-grid-compact flex-grid-no-gutter-y justify-content-space-between align-items-center no-margin-left">
                                                <div class="flex-child">
                                                    <h4 class="no-margin-y">
                                                        Attachments
                                                    </h4>
                                                </div>
                                                <div class="flex-child">
                                                    <a class="btn btn-primary-outline">
                                                        Attachment
                                                        <i class="symbol symbol-plus"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- <div class="flex-col-xs-6 text-align-right">
                                                <a href="#" onClick="REPLACEfnToTriggertaskAttachmentsToAdd(event)" class="btn btn-primary-outline btn-small ">Add Attachment <i class="symbol symbol-plus"></i></a>
                                            </div>
                                            -->
                                        </div>
                                        <!-- @if attachments have rows -->
                                        <div class="zone zone-primary" style="padding-top: 85px;padding-bottom: 85px;">
                                            <input type="file" placeholder="Add Attachments">
                                            <span class="zone-text">
                                                Drag your attachments here
                                            </span>	
                                        </div>
                                        <?php app_get_component('components/attachment-grid-for-edit'); ?>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right">
                <div class="module-grid">
                    <div class="module no-padding background-transparent position-relative no-border">
                        <div class="flex-grid flex-grid-no-gutter-y flex-grid-compact justify-content-space-between">
                            <div class="flex-col-xs-12 flex-col-sm-7" id="project-actions">
                                <!--
                                    @NOTE
                                    change `Create Task` if task alrerady exists and is just being edited
                                -->
                                <button type="submit" class="btn btn-primary btn-block soft-shadow">
                                    <!-- @if task is new -->
                                        Add Project
                                    <!-- @else if task already exists and is just being edited -->
                                        <!-- Save edits <i class="symbol symbol-edit"></i></button> -->
                                </button>
                                <!-- @NOTE onclick event should revert to previous history state or previously viewed page. feel free modify as needed -->
                                <button data-toggle="board" href="#" class="btn btn-neutral-outline btn-block soft-shadow no-border white-bg">
                                    Save Draft
                                </button>
                                <button class="btn btn-symbol btn-link soft-shadow" onclick="event.preventDefault(); console.log('work u sonofabitch'); history.back();">
                                    <i class="symbol symbol-close"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="module position-relative">
                        <div class="module-content">
                            <!-- CLIENT -->
                                <div class="input-wrapper input-wrapper-block input-wrapper-vertical p">
                                    <label class="input-label" for="REPLACEMODE-REPLACEwithPostType-client">Client</label>
                                    <input id="REPLACEMODE-REPLACEwithPostType-client-id" name="REPLACEMODE-REPLACEwithPostType-client-id" type="hidden" value="" />
                                    <input id="REPLACEMODE-REPLACEwithPostType-client" name="REPLACEMODE-REPLACEwithPostType-client" type="text" class="input input-single-line input-select" data-toggle="dropdown"  placeholder="Type and select client..." />
                                    <div class="dropdown dropdown-top-flush dashboard-dropdown-maxed no-padding" data-dropdown-width="100%" data-dropdown-max-height="322px">
                                        <ul class="list-group list-group-interactive list-group-toggle list-group-toggle-allow-no-active">
                                            <!--
                                                @NOTE Jenna took note of the ability to create new clients as well but the design includes redundant buttons if built out. This is a stable front end variation of the ui 

                                                How it functions:

                                                User clicks and the custom input is ni place
                                            -->
                                            <a href="#" class="list-group-item font-weight-700 color-primary task-project-new">
                                                Create new client
                                                `<span class="current-value"><span class="REPLACE">current input value</span></span>`
                                            </a>
                                            <!-- @PLACEHOLDER -->
                                            <!-- 
                                            @NOTE
                                                .list-group-item/li
                                                    classes to add
                                                        if project id is in the corresponding project id field => `active`

                                            -->
                                            <a href="#" class="list-group-item">Client Name</a>
                                            <a href="#" class="list-group-item">Client Name</a>
                                            <a href="#" class="list-group-item">Client Name</a>
                                            <a href="#" class="list-group-item">Client Name</a>
                                            <a href="#" class="list-group-item">Client Name</a>
                                        </ul>
                                    </div>
                                </div>
                                <!-- @if module is included in project board and not in task board -->
                                <!-- TEAM LEADS -->
                                <div class="input-wrapper input-wrapper-block input-wrapper-vertical p">
                                    <h5 class="input-label">Team Leads</h5>
                                    <div class="task-leads">
                                    <!-- @NOTE if using the design based layout, add hidden fields here -->
                                        <input id="REPLACEMODE-REPLACEwithPostType-leads-id" name="REPLACEMODE-REPLACEwithPostType-leads-id" type="hidden" value="" />
                                        <input id="REPLACEMODE-REPLACEwithPostType-leads-title" name="REPLACEMODE-REPLACEwithPostType-leads-title" type="hidden" value="" />
                                        <?php /* 
                                        <!-- @LOOP component -->
                                        <?php app_get_component('components/profile-titled-for-edit') ?>
                                        <!-- @PLACEHOLDER: DELETE WHEN READY -->
                                        <?php for($i=1; $i<3; $i++){ ?>
                                            <?php app_get_component('components/profile-titled-for-edit'); ?>
                                        <?php } ?>
                                        */ ?>
                                    </div>
                                    <!--
                                        NOTE:
                                        there's a layout based on the design with minor tweaks
                                        and one that full-proofs the profile and its related title.
                                        Not sure how team member titles will map out if each title will be a required data row or if it's an optional one
                                    -->
                                    <!-- design based layout -->
                                    <div>
                                        <a href="#" data-toggle="modal" class="btn btn-primary-outline">Team Member <i class="symbol symbol-plus"></i></a>
                                        <?php app_get_component('components/modal-workflow-edit-team-leads'); ?>
                                    </div>
                                </div>
                                <hr>
                                <!-- ASSIGNEES + DUE + PRIORITOOT-->
                                <div class="flex-grid flex-grid-fixed flex-grid-compact">
                                    <div class="flex-col-xs-6 flex-col-md-8 no-margin-top">
                                        <h5 class="input-label">Due on</h5>
                                        <div class="p color-neutral no-margin-bottom">
                                            <a href="#" data-toggle="dropdown">
                                                    <!-- @NOTE
                                                        .task-due
                                                            if no task due date AND no time => `display-none`
                                                            if due date or due time has value  => ``
                                                    -->
                                                    <span class="task-due">
                                                        <!--
                                                            @NOTE 
                                                            .task-due-* will contain dynamic text depending on their corresponding input field values
                                                        -->
                                                        <span class="task-due-date">
                                                            <span class="REPLACE">00/00/00</span>
                                                        </span>
                                                        <!-- at
                                                        <span class="task-due-time">
                                                            <span class="REPLACE">6:09pm</span>
                                                        </span> -->
                                                    </span>

                                                    <!-- @NOTE
                                                    .task-due-unset
                                                        if no task due date AND no time => ``
                                                        if due date or due time has value =>  `display-none`
                                                    -->
                                                    <!-- <span class="task-due-unset">
                                                        Set
                                                    </span> -->
                                            </a>
                                            <div class="dropdown dropdown-top-flush dropdown-center-x"  data-dropdown-width="100%">
                                                <div class="input-wrapper input-wrapper-vertical input-wrapper-block">
                                                    <label class="input-label sr-only" for="REPLACEMODE-REPLACEwithPostType-due-date">Date Due</label>
                                                    <input type="text" name="REPLACEMODE-REPLACEwithPostType-due-date" id="REPLACEMODE-REPLACEwithPostType-due-date" data-calendar-disabled-dates="past" class="no-padding-x input-calendar input-no-radius border-color-transparent input-block">
                                                    <button data-toggle="dropdown" class="btn btn-primary-outline btn-block ">Done</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-col-xs-6 flex-col-md-4 no-margin-top">
                                        <h5 class="input-label">Priority</h5>
                                        <div class="color-neutral no-margin-bottom">
                                            <input type="hidden" name="REPLACEMODE-REPLACEwithPostType-priority" id="REPLACEMODE-REPLACEwithPostType-priority">
                                            <a href="#" data-toggle="dropdown">
                                                <!-- @NOTE
                                                    .task-priority
                                                        if no priority => `display-none`
                                                        if task has priority set => ``
                                                -->
                                                <span class="task-priority">
                                                    <!-- @NOTE dynamic. text will change based on selected settngs -->
                                                    <span class="REPLACE">Low</span>
                                                </span>


                                                <!-- @NOTE
                                                    .task-priority-unset
                                                        if no priority => ``
                                                        if task has priority set => `display-none`
                                                -->
                                                <span class="task-priority-unset">
                                                    Set
                                                </span>
                                            </a>
                                            <div class="dropdown dropdown-top-flush dropdown-center-x no-padding" data-dropdown-width="100%">
                                                <div class="list-group list-group-interactive list-group-toggle">
                                                    <a class="list-group-item active">
                                                        <span>Low</span>
                                                        <i class="color-primary symbol float-right symbol-check-toggle font-size-normalize"></i>
                                                    </a>
                                                    <a class="list-group-item">
                                                        <span>Medium</span>
                                                        <i class="color-primary symbol float-right symbol-check-toggle font-size-normalize"></i>
                                                    </a>
                                                    <a class="list-group-item">
                                                        <span>High</span>
                                                        <i class="color-primary symbol float-right symbol-check-toggle font-size-normalize"></i>
                                                    </a>
                                                    <a class="list-group-item">
                                                        <span>Urgent</span>
                                                        <i class="color-primary symbol float-right symbol-check-toggle font-size-normalize"></i>
                                                    </a>
                                                </div>
                                                <button data-toggle="dropdown" class="btn btn-primary-outline btn-block btn-no-radius border-color-transparent">Done</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <!--  -->
                        </div>
                    </div>
                    <div class="module">
                        <div class="module-content">
                            <h5 class="input-label">Time Tracking</h5>
                            <div class="input-wrapper input-wrapper-horizontal input-wrapper-block" style="align-items:center;">
                                <label for="REPLACEMODE-REPLACEwithPostType-time-estimate" class="no-margin-y flex-1-0">Time Estimated</label>
                                <input type="text" name="REPLACEMODE-REPLACEwithPostType-time-estimate" size="5" id="REPLACEMODE-REPLACEwithPostType-time-estimate" class="input input-single-line" placeholder="00h 00m">
                            </div>
                        </div>
                    </div>
                    <div class="module">
                        <div class="module-content">
                            <!-- WORKFLUX BOARDS -->
                                <div class="flex-grid flex-grid-compact flex-grid-no-gutter-y justify-content-space-between align-items-center">
                                    <div class="flex-child">
                                        <h5 class="input-label">Workflux Boards</h5>
                                    </div>
                                    <div class="flex-child">
                                        <input id="REPLACEMODE-REPLACEwithPostType-workfluxs-id" name="REPLACEMODE-REPLACEwithPostType-workfluxs-id" type="hidden" />
                                        <input id="REPLACEMODE-REPLACEwithPostType-workfluxs-list" name="REPLACEMODE-REPLACEwithPostType-workfluxs-list" type="hidden" />
                                        <a href="#" data-toggle="modal" class="btn btn-primary-outline btn-small">Board <i class="symbol symbol-plus"></i></a>
                                        <?php app_get_component('components/modal-workflow-edit-workflux'); ?>
                                    </div>
                                </div>
                                <?php /* 
                                <div class="task-workflux">
                                    <!-- @LOOP component -->
                                    <?php app_get_component('components/profile-workflux-titled-for-edit') ?>
                                    <!-- @PLACEHOLDER: DELETE WHEN READY -->
                                    <?php for($i=1; $i<2; $i++){ ?>
                                        <?php app_get_component('components/profile-workflux-titled-for-edit'); ?>
                                    <?php } ?>
                                </div>
                                */ ?>
                            <hr>
                            <!-- TAGS -->
                            <div class="flex-grid flex-grid-compact flex-grid-no-gutter-y justify-content-space-between align-items-center">
                                <div class="flex-child">
                                    <h5 class="input-label">Labels &amp; Tags</h5>
                                </div>
                                <div class="flex-child">
                                    <input id="REPLACEMODE-REPLACEwithPostType-tags" name="REPLACEMODE-REPLACEwithPostType-tags" type="hidden" />
                                    <a href="#" data-toggle="modal" class="btn btn-primary-outline btn-small">Tags <i class="symbol symbol-plus"></i></a>
                                    <?php app_get_component('components/modal-workflow-edit-tags'); ?>
                                </div>
                            </div>
                            <?php
                            /* <div class="task-tags">
                                <!--
                                    AVAILABLE TAG SCHEMES:
                                    tag-default
                                    tag-primary
                                    tag-secondary
                                    tag-accent
                                    tag-neutral
                                    tag-success
                                    tag-caution
                                    tag-error
                                    tag-intensity-1
                                    tag-intensity-2
                                    tag-intensity-3
                                    tag-intensity-4
                                    tag-intensity-5
                                -->
                                    <!--
                                        @NOTE @dynamic class => tag-COLORSCHEME
                                        we may need to coordinate to have colors associated with certain tags.
                                        I would not recommend creating new classes by adding colors to the ui's color scheme so we can reduce the need of increasing the stylesheet's file size further.
                                        We can have an array of random colors much like the setup for the scoreboard charts and set them as inline background-color for `tag-default`
                                        If it gets too tedious, we can always just use `tag-primary` for all tags as fallback
                                    -->
                                <span class="p tag tag-primary">
                                    <span class="tag-text">
                                        <span class="REPLACE">Tag Text</span>
                                    </span>
                                    &nbsp;<a href="#" onclick="REPLACEfnToDeleteDisTag"><i class="symbol symbol-close"></i></a>
                                </span>
                                <!-- @PLACEHOLDER: DELETE WHEN READY -->
                                <?php 
                                $abilabol_tag = array(
                                    'tag-success',
                                    'tag-caution',
                                    'tag-error',
                                );
                                ?>
                                <?php for($i=0; $i<count($abilabol_tag); $i++){ ?>
                                    <?php $j = 1;?>
                                    <span class="p tag <?=$abilabol_tag[$i];?>">
                                        <span class="tag-text">
                                            <span class="REPLACE">Tag Te<?php while($j <= $i): echo 'e'; $j++; endwhile; ?>xt</span>
                                        </span>
                                        &nbsp;<a href="#" onclick="REPLACEfnToDeleteDisTag"><i class="symbol symbol-close"></i></a>
                                    </span>
                                <?php } ?>
                            </div> */ ?>
                        </div>
                    </div>
                    <div class="module">
                        <div class="module-content">
                            <!-- FOLLOWERS ?? -->
                                <div class="h5 no-margin-y">
                                    <div class="flex-grid flex-grid-compact flex-grid-no-gutter-y justify-content-space-between align-items-center">
                                        <div class="flex-child">
                                            <h5 class="input-label">Followers</h5>
                                        </div>
                                        <div class="flex-child">
                                            <input id="REPLACEMODE-REPLACEwithPostType-followers-id" name="REPLACEMODE-REPLACEwithPostType-followers-id" type="hidden" />
                                            <a href="#" data-toggle="modal" class="btn btn-primary-outline btn-small">Followers <i class="symbol symbol-edit"></i></a>
                                            <?php app_get_component('components/modal-workflow-edit-users-multiple'); ?>
                                        </div>
                                    </div>
                                </div>
                                <?php /*
                                <div class="task-followers">
                                    <?php app_get_component('components/profile-named-for-edit') ?>
                                        <!-- @PLACEHOLDER: DELETE WHEN READY -->
                                    <?php for($i=1; $i<=3; $i++){ ?>
                                        <?php app_get_component('components/profile-named-for-edit') ?>
                                    <?php } ?>
                                </div>
                                */ ?>
                            <hr>
                            <!-- WIKIS N HOW TOS -->
                            <div class="h5 no-margin-y">
                                <div class="flex-grid flex-grid-compact flex-grid-no-gutter-y justify-content-space-between align-items-center">
                                    <div class="flex-child">
                                        <h5 class="input-label">Wiki/How-Tos</h5>
                                    </div>
                                    <div class="flex-child">
                                        <input id="REPLACEMODE-REPLACEwithPostType-wiki-id" name="REPLACEMODE-REPLACEwithPostType-wiki-id" type="hidden" />
                                        <a href="#" data-toggle="modal" class="btn btn-primary-outline btn-small">Edit <i class="symbol symbol-edit"></i></a>
                                        <?php app_get_component('components/modal-workflow-edit-wiki-multiple'); ?>
                                    </div>
                                </div>
                            </div>
                            <?php /*
                            <!-- if has docs -->
                            <ul class="task-wiki unstyled">
                                <li>
                                    <div class="flex-grid flex-grid-compact flex-grid-fixed align-items-center flex-grid-no-gutter-y">
                                        <div class="flex-col-xs-9">
                                            <span class="wiki-title">Documentation title</span>
                                        </div>
                                        <div class="flex-col-xs-3 text-align-right">
                                            <a href="#" class="btn btn-symbol btn-small btn-link" onclick="REPLACEwithFnToDeleteSetProfile"><i class="symbol symbol-close"></i></a>
                                        </div>
                                    </div>
                                </li>
                                <!-- @PLACEHOLDER: DELETE WHEN READY -->
                                <?php for($i=1; $i<=3; $i++){ ?>
                                    <li>
                                        <div class="flex-grid flex-grid-compact flex-grid-fixed align-items-center flex-grid-no-gutter-y">
                                            <div class="flex-col-xs-9">
                                                <span class="wiki-title">Documentation title</span>
                                            </div>
                                            <div class="flex-col-xs-3 text-align-right">
                                                <a href="#" class="btn btn-symbol btn-small btn-link" onclick="REPLACEwithFnToDeleteSetProfile"><i class="symbol symbol-close"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                <?php } ?>
                            </ul>
                            */ ?>
                            <hr>
                            <!-- REMINDERS -->
                            <div class="h5 no-margin-y">
                                <div class="flex-grid flex-grid-compact flex-grid-no-gutter-y justify-content-space-between align-items-center">
                                    <div class="flex-child">
                                        <h5 class="input-label">Reminders</h5>
                                    </div>
                                    <div class="flex-child">
                                        <input id="REPLACEMODE-REPLACEwithPostType-followers-id" name="REPLACEMODE-REPLACEwithPostType-followers-id" type="hidden" />
                                        <a href="#" data-toggle="modal" data-modal-title="Add reminder" class="btn btn-primary-outline btn-small">Reminder <i class="symbol symbol-plus"></i></a>
                                        <?php app_get_component('components/modal-workflow-edit-reminder'); ?>
                                    </div>
                                </div>
                            </div>
                            <!-- if has reminders -->
                            <?php /*
                            <div class="task-reminders">
                                <?php app_get_component('components/block-reminder-for-edit'); ?>
                                <!-- @PLACEHOLDER: DELETE WHEN READY -->
                                <?php for($i=1; $i<=3; $i++){ ?>
                                    <?php app_get_component('components/block-reminder-for-edit'); ?>
                                <?php } ?>
                            </div>
                            */ ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>