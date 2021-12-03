<div class="modal modal-board" id="mb-detail-task" data-modal-width="670px">
    <div class="task-header">
        <h1 class="no-margin-bottom position-relative">
            <!-- @if task is incomplete/active -->
            <!-- 
                @NOTE
                classes to add
                    color-error => when task is past due date
                    color-primary => default

             -->
                <i class="badge badge-primary badge-small no-border position-absolute offset-right-flush offset-y-0 margin-auto-y margin-small-right"></i>

            <span class="REPLACE">Task Title Here</span>
        </h1>
        <p class="color-neutral">
            Created by <span class="REPLACE">Herlock Sholmes</span> on <span class="REPLACE">4/20/69</span>
        </p>
    </div>
    <div class="background-theme-contrast padding-x">
        <div class="flex-grid flex-grid-fixed">
            <div class="flex-col-xs-12 flex-col-sm-6 flex-col-md-3">
                <h5 class="color-neutral no-margin">Due Date</h5>
                <p>
                    <i class="symbol symbol-calendar-alt color-primary"></i>
                    <!-- @if has due date-->
                        <span class="REPLACE">June 12, 1898</span>
                    <!-- @else -->
                        <span class="color-neutral font-style-italic">
                            N/A
                        </span>
                </p>
            </div>
            <div class="flex-col-xs-12 flex-col-sm-6 flex-col-md-3">
                <h5 class="color-neutral no-margin">Time</h5>
                <p>
                    <i class="symbol symbol-watch color-primary"></i>
                    <!-- @if has due time-->
                        <span class="REPLACE">4:00pm</span>
                    <!-- @else -->
                        <span class="color-neutral font-style-italic">
                            N/A
                        </span>
                </p>
            </div>
            <div class="flex-col-xs-12 flex-col-sm-6 flex-col-md-3">
                <h5 class="color-neutral no-margin">Duration</h5>
                <p>
                    <!-- @if an hour or more -->
                        <span class="REPLACE">4:20</span> hours
                    <!-- @else if less -->
                        <span class="REPLACE">15</span> minutes
                    <!-- @else -->
                        <span class="color-neutral font-style-italic">
                            N/A
                        </span>
                </p>
            </div>
            <div class="flex-col-xs-12 flex-col-sm-6 flex-col-md-3">
                <h5 class="color-neutral no-margin">Type</h5>
                <p>
                    <span class="REPLACE">Company</span>
                </p>
            </div>
        </div>
    </div>
    <div class="task-detail-outline">
            
        <h5 class="color-neutral">Company</h5>
        <p>
            <span class="REPLACE">Wright Anything Agency</span>
        </p>

        <h5 class="color-neutral">Description</h5>
        <div class="REPLACE" style="height: 6rem; overflow:hidden;">
            <?php app_get_component('components/_DEMO-html-markup'); ?>
        </div>
    </div>

    <div class="task-detail-attachments">
        <h5 class="color-neutral">Attachments</h5>

        <?php app_get_component('components/attachments-grid-detailed-view'); ?>
    </div>
    <div class="task-detail-reminder">    
        <h5 class="color-neutral">Company</h5>
        <p>
            <!-- @NOTE
                .symbol
                    classes to add
                    `sy`mbol-bell` => completed
                    `color-error symbol-bell-active` => past due
                    `col`or-primary symbol-bell` => incomplete/default

            -->
            <i class="symbol symbol-bell"></i>
            <span class="REPLACE">Sunday, June 12, 1898 at 4:00pm</span>
        </p>
    </div>
    <div class="task-detail-utility">    
        <!-- @if can edit -->
            <a href="#mb-editor-task" data-toggle-modal-board data-modal-title="Edit task">Edit Task</a>
    </div>
</div>