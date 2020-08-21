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
                            <h1 class="no-margin REPLACE">sedationdentistryphoenix.com (Quicklaunch SEO)</h1>
                            <p class="text-wrap-ellipsis color-neutral">
                                <span class="REPLACE">Dental on Central (DEC)</span> | 
                                <span class="REPLACE">Project #0000</span> | 
                                Created by <span class="REPLACE">Derrick Tran</span> on <span class="REPLACE">05/29/20</span>
                            </p>
                            <div class="accordion-group accordion-group-no-close">
                                <!-- @NOTE: on of the .tabs li  along with paired `.accordion` must be `.open`. in this case today is default. modify if needed -->
                                <ul class="tabs	tabs-responsive no-border">
                                    <li class="tab open" data-toggle="accordion" data-href="#activity-log-today"> 
                                        <a href="#activity-log-today" >Details</a>
                                    </li>
                                    <li class="tab" data-toggle="accordion" data-href="#activity-log-week">
                                        <a href="#activity-log-week" >Wiki/How-Tos, Documents & Notes</a>
                                    </li>
                                </ul>
                                <br>
                                <div class="accordion open" id="activity-log-today">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehendert in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </p>
                                </div>
                                <div class="accordion" id="activity-log-week">
                                    <div class="module-header">
                                        <div class="flex-grid flex-grid-compact flex-grid-no-gutter-y justify-content-space-between align-items-center">
                                            <div class="flex-child">
                                                <h3 class="module-title open" data-toggle="accordion" data-href="#wiki-how-tos">
                                                    Wiki/How-Tos <i class="symbol symbol-caret-down symbol-caret-up-toggle"></i>
                                                </h3>
                                            </div>
                                            <div class="flex-child">
                                                <a href="#" data-toggle="modal" class="btn btn-primary-outline">
                                                    Add Wiki/How-Tos 
                                                    <i class="symbol symbol-plus"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="module-content accordion open no-padding" id="wiki-how-tos">
                                        <div class="table-wrapper dashboard-table-wrapper-gutterless no-margin">
                                            <table class="data-open-tasks">
                                                <tr>
                                                    <th class="text-nowrap">Name</th>
                                                    <th class="text-nowrap text-align-center">Created</th>
                                                    <th class="text-nowrap text-align-center">Updated</th>
                                                </tr>
                                                <?php for($i=1; $i<=2; $i++){ ?>
                                                    <tr>
                                                        <td>
                                                            <a href="<?=app_create_link(array('template'=>'project')); ?>" class="open-task text-wrap-ellipsis">
                                                                <span class="REPLACE">Dental on Central Long Form</span>
                                                            </a>
                                                        </td>
                                                        <td class="dashboard-table-cell-max text-align-center">
                                                            <span class="REPLACE">5/29/20</span>
                                                        </td>
                                                        <td class="dashboard-table-cell-max text-align-center">
                                                            <span class="REPLACE">5/29/20</span>
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="module-header">
                                        <div class="flex-grid flex-grid-compact flex-grid-no-gutter-y justify-content-space-between align-items-center">
                                            <div class="flex-child">
                                                <h3 class="module-title open" data-toggle="accordion" data-href="#documents-files">
                                                    Documents & Files <i class="symbol symbol-caret-down symbol-caret-up-toggle"></i>
                                                </h3>
                                            </div>
                                            <div class="flex-child">
                                                <a href="#" data-toggle="modal" class="btn btn-primary-outline">
                                                    Add Documents
                                                    <i class="symbol symbol-plus"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="module-content accordion open no-padding" id="documents-files">
                                        <div class="table-wrapper dashboard-table-wrapper-gutterless no-margin">
                                            <table class="data-open-tasks">
                                                <tr>
                                                    <th class="text-nowrap">Name</th>
                                                    <th class="text-nowrap text-align-center">Origin</th>
                                                    <th class="text-nowrap text-align-center">Uploaded</th>
                                                </tr>
                                                <?php for($i=1; $i<=2; $i++){ ?>
                                                    <tr>
                                                        <td>
                                                            <a href="<?=app_create_link(array('template'=>'project')); ?>" class="open-task text-wrap-ellipsis">
                                                                <span class="REPLACE">Dental on Central Long Form</span>
                                                            </a>
                                                        </td>
                                                        <td class="dashboard-table-cell-max text-align-center">
                                                            <span class="REPLACE">Task #0000</span>
                                                        </td>
                                                        <td class="dashboard-table-cell-max text-align-center">
                                                            <span class="REPLACE">5/29/20</span>
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="module-header">
                                        <div class="flex-grid flex-grid-compact flex-grid-no-gutter-y justify-content-space-between align-items-center">
                                            <div class="flex-child">
                                                <h3 class="module-title open" data-toggle="accordion" data-href="#project-notes">
                                                    Project Notes <i class="symbol symbol-caret-down symbol-caret-up-toggle"></i>
                                                </h3>
                                            </div>
                                            <div class="flex-child">
                                                <a href="#" data-toggle="modal" class="btn btn-primary-outline">
                                                    Add Note
                                                    <i class="symbol symbol-plus"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="module-content accordion open no-padding" id="project-notes">
                                        <div class="table-wrapper dashboard-table-wrapper-gutterless no-margin">
                                            <table class="data-open-tasks">
                                                <tr>
                                                    <th class="text-nowrap text-align-center">Created</th>
                                                    <th class="text-nowrap text-align-center">Author</th>
                                                    <th class="text-nowrap">Task</th>
                                                    <th class="text-nowrap">Note Title</th>
                                                    <th class="text-nowrap table-cell-no-gutter">&nbsp;</th>
                                                </tr>
                                                <?php for($i=1; $i<=2; $i++){ ?>
                                                    <tr>
                                                        <td class="text-align-center">
                                                            <a href="<?=app_create_link(array('template'=>'project')); ?>" class="open-task text-wrap-ellipsis">
                                                                <span class="REPLACE">5/12/20</span>
                                                            </a>
                                                        </td>
                                                        <td class="text-align-center dashboard-table-cell-thumbnail">
                                                            <a class="thumbnail thumbnail-small" href="<?=app_create_link(array('template'=>'profile')) ?>">
                                                                <div class="thumbnail-image">
                                                                    <img class="profile-image" data-src="<?=FWAPPS_ROOT_URL ?>/placeholder/profiles/team-des-jenn.jpg" alt="">
                                                                </div>
                                                                <span class="thumbnail-text profile-name-initial">
                                                                    <span class="REPLACE">PN</span>
                                                                </span>
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a href="<?=app_create_link(array('template'=>'project')) ?>" class="open-project text-wrap-ellipsis">
                                                                <span class="REPLACE">Transfer Content</span>
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <span href="<?=app_create_link(array('template'=>'project')) ?>" class="open-client text-wrap-ellipsis">
                                                                <span class="REPLACE">Duis aute irure dolor in reprehendert </span>
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <?php app_get_component('components/tooltip-action'); ?>
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="module">
                        <div class="module-header">
                            <h3 class="module-title open" data-toggle="accordion" data-href="#open-tasks">
                                Favorite Projects <i class="symbol symbol-caret-down symbol-caret-up-toggle"></i>
                            </h3>
                        </div>
                        <div class="module-content no-padding">
                            <div class="accordion-group accordion-group-no-close">
                                <!-- @NOTE: on of the .tabs li  along with paired `.accordion` must be `.open`. in this case today is default. modify if needed -->
                                <ul class="tabs	tabs-responsive no-border" style="padding-left:40px;padding-right:40px;">
                                    <li class="tab open" data-toggle="accordion" data-href="#open-tasks"> 
                                        <a href="#open-tasks" >Open Tasks</a>
                                    </li>
                                    <li class="tab" data-toggle="accordion" data-href="#closed-tasks">
                                        <a href="#closed-tasks">Closed & Archived Tasks</a>
                                    </li>
                                </ul>
                                <br>
                                <div class="accordion open" id="open-tasks">
                                    <div class="table-wrapper dashboard-table-wrapper-gutterless no-margin">
                                        <table class="data-open-tasks">
                                            <tr>
                                                <th class="text-nowrap">Name</th>
                                                <th class="text-nowrap">Status</th>
                                                <th class="text-nowrap">Assignee</th>
                                                <th class="text-nowrap text-align-center">Assigned On</th>
                                                <th class="text-nowrap text-align-center">Created By</th>
                                            </tr>
                                            <?php for($i=1; $i<=2; $i++){ ?>
                                                <tr>
                                                    <td>
                                                        <a href="<?=app_create_link(array('template'=>'project')); ?>" class="open-task text-wrap-ellipsis">
                                                            <span class="REPLACE">Dental on Central Long Form</span>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="<?=app_create_link(array('template'=>'project')) ?>" class="open-project text-wrap-ellipsis">
                                                            <span class="REPLACE">Backlog</span>
                                                        </a>
                                                    </td>
                                                    <td class="dashboard-table-cell-thumbnail text-align-center position-relative">
                                                        <a class="thumbnail thumbnail-small" href="<?=app_create_link(array('template'=>'profile')) ?>">
                                                            <div class="thumbnail-image">
                                                                <img class="profile-image" data-src="<?=FWAPPS_ROOT_URL ?>/placeholder/profiles/team-des-jenn.jpg" alt="">
                                                            </div>
                                                            <span class="thumbnail-text profile-name-initial">
                                                                <span class="REPLACE">PN</span>
                                                            </span>
                                                        </a>
                                                    </td>
                                                    <td class="dashboard-table-cell-max text-align-center">
                                                        <span href="<?=app_create_link(array('template'=>'project')) ?>" class="open-client text-wrap-ellipsis">
                                                            <span class="REPLACE">5/29/20</span>
                                                        </span>
                                                    </td>
                                                    <td class="dashboard-table-cell-thumbnail text-align-center position-relative">
                                                        <a class="thumbnail thumbnail-small" href="<?=app_create_link(array('template'=>'profile')) ?>">
                                                            <div class="thumbnail-image">
                                                                <img class="profile-image" data-src="<?=FWAPPS_ROOT_URL ?>/placeholder/profiles/team-des-jenn.jpg" alt="">
                                                            </div>
                                                            <span class="thumbnail-text profile-name-initial">
                                                                <span class="REPLACE">PN</span>
                                                            </span>
                                                        </a>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </table>
                                    </div>
                                </div>
                                <div class="accordion" id="closed-tasks">
                                    <div class="table-wrapper dashboard-table-wrapper-gutterless no-margin">
                                        <table class="data-closed-tasks">
                                            <tr>
                                                <th class="text-nowrap">Name</th>
                                                <th class="text-nowrap">Status</th>
                                                <th class="text-nowrap">Assignee</th>
                                                <th class="text-nowrap text-align-center">Assigned On</th>
                                                <th class="text-nowrap text-align-center">Created By</th>
                                            </tr>
                                            <?php for($i=1; $i<=2; $i++){ ?>
                                                <tr>
                                                    <td>
                                                        <a href="<?=app_create_link(array('template'=>'project')); ?>" class="open-task text-wrap-ellipsis">
                                                            <span class="REPLACE">Dental on Central Long Form</span>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="<?=app_create_link(array('template'=>'project')) ?>" class="open-project text-wrap-ellipsis">
                                                            <span class="REPLACE">Backlog</span>
                                                        </a>
                                                    </td>
                                                    <td class="dashboard-table-cell-thumbnail text-align-center position-relative">
                                                        <a class="thumbnail thumbnail-small" href="<?=app_create_link(array('template'=>'profile')) ?>">
                                                            <div class="thumbnail-image">
                                                                <img class="profile-image" data-src="<?=FWAPPS_ROOT_URL ?>/placeholder/profiles/team-des-jenn.jpg" alt="">
                                                            </div>
                                                            <span class="thumbnail-text profile-name-initial">
                                                                <span class="REPLACE">PN</span>
                                                            </span>
                                                        </a>
                                                    </td>
                                                    <td class="dashboard-table-cell-max text-align-center">
                                                        <span href="<?=app_create_link(array('template'=>'project')) ?>" class="open-client text-wrap-ellipsis">
                                                            <span class="REPLACE">5/29/20</span>
                                                        </span>
                                                    </td>
                                                    <td class="dashboard-table-cell-thumbnail text-align-center position-relative">
                                                        <a class="thumbnail thumbnail-small" href="<?=app_create_link(array('template'=>'profile')) ?>">
                                                            <div class="thumbnail-image">
                                                                <img class="profile-image" data-src="<?=FWAPPS_ROOT_URL ?>/placeholder/profiles/team-des-jenn.jpg" alt="">
                                                            </div>
                                                            <span class="thumbnail-text profile-name-initial">
                                                                <span class="REPLACE">PN</span>
                                                            </span>
                                                        </a>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="module">
                        <div class="module-content">
                            <h3>Activity & Comments</h3>
                            <?php app_get_component('components/comment-form'); ?>
                            <?php app_get_component('components/comment-row'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right">
                <div class="module-grid">
                    <div class="flex-grid flex-grid-compact task-complete-toggle justify-content-space-between flex-grid-no-gutter-y">
                        <div class="flex-child">
                            <!-- @if task is not marked as complete yet -->
                            <a href="#" class="toolbar toolbar-small toolbar-horizontal toolbar-block color-inherit">
                                <div class="toolbar-tile">
                                    <span class="well well-compact btn btn-symbol btn-small btn-neutral background-success-hover">
                                        <i class="symbol symbol-check"></i>
                                    </span>
                                </div>
                                <div class="toolbar-tile flex-1-1 ">
                                    <span class="flex-1-1 btn-no-shadow btn">
                                            Mark task as complete
                                    </span>
                                </div>
                            </a>
                            <!-- @else task marked as complete -->
                            <!-- <span class="toolbar toolbar-small toolbar-horizontal toolbar-block color-inherit ">
                                <div class="toolbar-tile flex-1-1">
                                    <span class="well well-compact btn btn-symbol btn-small btn-success btn-no-interaction">
                                        <i class="symbol symbol-check"></i>
                                    </span>
                                </div>
                                <div class="toolbar-tile">
                                    <span class="flex-1-1 btn-no-shadow btn">
                                        Marked task complete
                                    </span>
                                </div>
                            </span> -->
                        </div>
                        <div class="flex-child">
                            <a data-toggle="dropdown" class="btn btn-default background-theme btn-symbol open">
                                <i class="symbol symbol-kebab-horizontal"></i>
                            </a>
                            <ul class="dropdown dropdown-top-flush dropdown-center-x" data-dropdown-width="100%" style="width: 100%;">
                                <li>
                                    <a class="color-inherit color-primary-hover js-edit-time-record" href="#task-REPLACEwithPostTypeID-edit" data-toggle="board" data-record-id="REPLACEwithPostTypeID">
                                        Edit
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="color-inherit color-primary-hover js-edit-time-record" data-record-id="REPLACEwithPostTypeID" data-record-idx="REPLACEwithPostTypeIDX">
                                        Delete
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="module">
                        <div class="module-content">
                            <div id="task-side-team-view-REPLACEwithTaskId" class="accordion open" data-accordion-change-hash="false">
                                <h5>Team Leads</h5>
                                    <!-- @if hasteam leads -->
                                    <div class="project-leads">
                                        <!-- @LOOP component -->
                                        <?php app_get_component('components/profile-titled') ?>
                                            <!-- @PLACEHOLDER: DELETE WHEN READY -->
                                            <?php for($i=1; $i<5; $i++){ ?>
                                                <?php app_get_component('components/profile-titled'); ?>
                                            <?php } ?>
                                        </div>
                                    <!-- @else -->
                                    <p class="color-neutral font-style-italic">
                                        No team leads.
                                        <!-- @if user can edit task -->
                                        <br>
                                        <a class="color-inherit" href="#task-editor-REPLACEwithTaskId" data-toggle="board">Edit task to add team leads.</a>
                                    </p>
                                <hr>
                                <div class="flex-grid flex-grid-fixed flex-grid-no-gutter">
                                    <div class="flex-col-xs-6 flex-col-md-7">
                                        <h5 class="no-margin-top">Due on</h5>
                                        <p class="color-neutral task-due-date no-margin-bottom">
                                            <!-- @if has due date -->
                                                <span class="REPLACE">
                                                    4/20/69 at 6:09pm
                                                </span>
                                            <!-- @else -->
                                                Unspecified
                                        </p>
                                    </div>
                                    <div class="flex-col-xs-6 flex-col-md-5">
                                        <h5 class="no-margin-top">Priority</h5>
                                        <p class="color-neutral task-priority no-margin-bottom">
                                            <span class="REPLACE">
                                                Low
                                            </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="module">
                        <div class="module-content">
                            <div class="h5 no-margin-y">
                                <div class="flex-grid flex-grid-compact flex-grid-no-gutter-y justify-content-space-between align-items-center">
                                    <div class="flex-child">
                                        <h5 class="no-margin-y">Time Tracking</h5>
                                    </div>
                                    <div class="flex-child">
                                        <a href="#board-track-time"  data-toggle="board" data-board-title="Add Time Entry" class="btn btn-primary-outline btn-small">Time <i class="symbol symbol-plus"></i></a>
                                        &nbsp;
                                        <a href="#task-side-time-view-REPLACEwithTaskId" data-toggle="accordion" class="color-neutral open display-inline-block"><i class="symbol symbol-arrow-down symbol-arrow-up-toggle"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div id="task-side-time-view-REPLACEwithTaskId" class="accordion open" data-accordion-change-hash="false">
                                <br>
                                <div class="flex-grid flex-grid-compact flex-grid-fixed no-margin-bottom">
                                    <div class="flex-col-xs-6">
                                        <p class="task-time-logged no-margin">
                                            <span class="REPLACE">6h 9m</span>
                                        </p>
                                        <p class="font-size-small color-neutral">
                                            Time Logged
                                        </p>
                                    </div>
                                    <div class="flex-col-xs-6">
                                        <p class="task-time-estimate no-margin">
                                            <span class="REPLACE">9h 6m</span>
                                        </p>
                                        <p class="font-size-small color-neutral">
                                            Time Estimated
                                        </p>
                                    </div>
                                </div>
                                <div class="p progress progress-small">

                                    <!--
                                        @NOTE
                                            .progress-bar
                                                classes to add
                                                    if time logged exceeds esitmate => `progress-secondary`
                                                    if time logged is below estimate => `progress-primary`

                                                @dynamic
                                                    style width of propgress bar by percentage of logged to estimate
                                    -->
                                    <p class="progress-bar
                                    progress-bar-primary"
                                    style="width: 50%;"
                                    >
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="module">
                        <div class="module-content">
                            <div class="h5 no-margin-top">
                                <div class="flex-grid flex-grid-compact flex-grid-no-gutter-y justify-content-space-between align-items-center">
                                    <div class="flex-child">
                                        <h5 class="no-margin-y">Workflux Boards</h5>
                                    </div>
                                    <div class="flex-child">
                                        <a href="#task-side-flux-view-REPLACEwithTaskId" data-toggle="accordion" class="color-neutral open display-inline-block"><i class="symbol symbol-arrow-down symbol-arrow-up-toggle"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div id="task-side-flux-view-REPLACEwithTaskId" class="accordion open" data-accordion-change-hash="false">
                                <!-- @if hasteam leads -->
                                <div class="task-fluxboards">
                                    <!-- @LOOP component -->
                                    <?php app_get_component('components/profile-workflux-titled') ?>
                                    <!-- @PLACEHOLDER: DELETE WHEN READY -->
                                    <?php for($i=1; $i<2; $i++){ ?>
                                        <?php app_get_component('components/profile-workflux-titled'); ?>
                                    <?php } ?>
                                </div>
                                <!-- @else -->
                                <!-- <p class="color-neutral font-style-italic">
                                    No associated workflux boards. -->
                                    <!-- @if user can edit task -->
                                    <!-- <br>
                                    <a class="color-inherit" href="#task-editor-REPLACEwithTaskId" data-toggle="board">Edit task to add to boards.</a>
                                </p> -->
                            </div>
                            <hr>
                            <div class="h5 no-margin-y">
                                <div class="flex-grid flex-grid-compact flex-grid-no-gutter-y justify-content-space-between align-items-center">
                                    <div class="flex-child">
                                        <h5 class="no-margin-y">Labels &amp; Tags</h5>
                                    </div>
                                    <div class="flex-child">
                                        <a href="#task-side-tags-view-REPLACEwithTaskId" data-toggle="accordion" class="color-neutral open display-inline-block"><i class="symbol symbol-arrow-down symbol-arrow-up-toggle"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div id="task-side-tags-view-REPLACEwithTaskId" class="accordion open" data-accordion-change-hash="false">
                                <!-- @if has tags -->
                                <br>
                                <div class="task-tags">
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
                                    <span class="p tag tag-success">
                                        <span class="tag-text">
                                            <span class="REPLACE">In Progress</span>
                                        </span>
                                    </span>
                                    <span class="p tag tag-accent">
                                        <span class="tag-text">
                                            <span class="REPLACE">POD 3</span>
                                        </span>
                                    </span>
                                    <span class="p tag tag-caution">
                                        <span class="tag-text">
                                            <span class="REPLACE">LS360</span>
                                        </span>
                                    </span>
                                    <span class="p tag tag-error">
                                        <span class="tag-text">
                                            <span class="REPLACE">Design</span>
                                        </span>
                                    </span>
                                    <span class="p tag tag-primary">
                                        <span class="tag-text">
                                            <span class="REPLACE">2020</span>
                                        </span>
                                    </span>
                                        <!-- @PLACEHOLDER: DELETE WHEN READY -->
                                    <!-- <?php 
                                        $abilabol_tag = array(
                                            'tag-default',
                                            'tag-primary',
                                            'tag-secondary',
                                            'tag-accent',
                                            'tag-neutral',
                                            'tag-success',
                                            'tag-caution',
                                            'tag-error',
                                            'tag-intensity-1',
                                            'tag-intensity-2',
                                            'tag-intensity-3',
                                            'tag-intensity-4',
                                            'tag-intensity-5',
                                        );
                                    ?>
                                    <?php for($i=1; $i<count($abilabol_tag); $i++){ ?>
                                        <?php $j = 1;?>
                                        <span class="p tag <?=$abilabol_tag[$i];?>">
                                            <span class="tag-text">
                                                <span class="REPLACE">Tag Te<?php while($j <= $i): echo 'e'; $j++; endwhile; ?>xt</span>
                                            </span>
                                        </span>
                                    <?php } ?> -->
                                </div>
                                <!-- @else -->
                                <!-- <p class="color-neutral font-style-italic">
                                    No set tags. -->
                                    <!-- @if user can edit task -->
                                    <!-- <br>    
                                    <a class="color-inherit" href="#task-editor-REPLACEwithTaskId" data-toggle="board">Edit task to add to add tags.</a>
                                </p> -->
                            </div>
                        </div>
                    </div>
                    <div class="module">
                        <div class="module-content">
                            <!-- FOLLOWERS -->
                                <div class="h5 no-margin-top">
                                    <div class="flex-grid flex-grid-compact flex-grid-no-gutter-y justify-content-space-between align-items-center">
                                        <div class="flex-child">
                                            <h5 class="no-margin-y">Followers</h5>
                                        </div>
                                        <div class="flex-child">
                                            <div class="btn-group btn-group-toggle btn-group-horizontal btn-group-toggle-allow-no-active">

                                            <!-- @NOTE
                                                .btn
                                                    classes to add
                                                        if user follows task => `active`
                                                        if user doesnt follow task => ``
                                        -->
                                                <a href="#" data-board-title="Add Time Entry" class="btn btn-primary-outline btn-small">
                                                    <span class="hide-toggle">Follow</span>
                                                    <i class="hide-toggle symbol symbol-plus"></i>

                                                    <span class="hide-not-toggle only-not-hover">Followed</span>
                                                    <i class="hide-not-toggle only-not-hover symbol symbol-check"></i>

                                                    <span class="hide-not-toggle only-hover">Unfollow</span>
                                                    <i class="hide-not-toggle only-hover symbol symbol-minus"></i>
                                                </a>
                                            </div>
                                            &nbsp;
                                            <a href="#task-side-followers-view" data-toggle="accordion" class="border-color-transparent btn no-padding-x btn-no-shadow btn-small color-neutral color-primary-hover open"><i class="symbol symbol-arrow-down symbol-arrow-up-toggle"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div id="task-side-followers-view" class="accordion open" data-accordion-change-hash="false">
                                    <!-- if has followers -->
                                    <div class="task-followers">
                                        
                                        <?php app_get_component('components/profile-named') ?>
                                            <!-- @PLACEHOLDER: DELETE WHEN READY -->
                                            <?php for($i=1; $i<=3; $i++){ ?>
                                        <?php app_get_component('components/profile-named') ?>
                                            <?php } ?>
                                    </div>
                                    <!-- @else -->
                                    <p>
                                        <span class="color-neutral font-style-italic">
                                            No followers yet.
                                        </span>
                                    </p>
                                </div>
                            <hr>
                            <!-- REMINDERS -->
                            <div class="h5 no-margin-top">
                                <div class="flex-grid flex-grid-compact flex-grid-no-gutter-y justify-content-space-between align-items-center">
                                    <div class="flex-child">
                                        <h5 class="no-margin-y">Reminders</h5>
                                    </div>
                                    <div class="flex-child">
                                        <a href="#task-side-reminders-view" data-toggle="accordion" class="border-color-transparent btn no-padding-x btn-no-shadow btn-small color-neutral color-primary-hover open"><i class="symbol symbol-arrow-down symbol-arrow-up-toggle"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div id="task-side-reminders-view" class="accordion open" data-accordion-change-hash="false">
                                <!-- if has reminders -->
                                    <div class="task-reminders">
                                        <!-- @PLACEHOLDER: DELETE WHEN READY -->
                                        <?php for($i=1; $i<=2; $i++){ ?>
                                            <?php app_get_component('components/block-reminder'); ?>
                                        <?php } ?>
                                    </div>
                                <!-- @else -->
                                <p>
                                    <span class="color-neutral font-style-italic">
                                        No reminders set.
                                    </span>
                                    <!-- @if user can edit task -->
                                    <br>
                                    <a  href="#task-REPLACEwithPostTypeID-edit" data-toggle="board">Edit task to add reminders.</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>