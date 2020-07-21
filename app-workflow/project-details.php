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
                <div class="module">
                    a
                </div>
            </div>
            <div class="right">
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
                                    <h5>Due on</h5>
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
                                    <h5>Priority</h5>
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
                            <div class="flex-grid flex-grid-compact flex-grid-fixed">
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
                                <?php app_get_component('components/profile-fluxboard-titled') ?>
                                <!-- @PLACEHOLDER: DELETE WHEN READY -->
                                <?php for($i=1; $i<2; $i++){ ?>
                                    <?php app_get_component('components/profile-fluxboard-titled'); ?>
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
            </div>
        </div>
    </div>
</section>