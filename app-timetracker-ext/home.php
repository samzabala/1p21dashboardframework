<div id="timetracker-home" class="timetracker-offset-wrapper margin-bottom">
    <!-- @NOTE div
        classes to add
        `background-gradient-45-from-secondary-to-primary` => if timer is not active AND no task is actively selected
        `background-gradient-tt-pause-active-task` => if timer is not active AND a task is actively selected
        `background-gradient-45-from-secondary-to-accent` => if timer is active AND a task is actively selected
    -->
    <div class="
        background-gradient-45-from-secondary-to-primary
        radius-large-bottom theme-inverse timetracker-offset-block padding-large-y">
        <div class="container">
            <form action="">
                <div class="timetracker-timer-wrapper padding-large-y">
                    <div class="grid grid-flex grid-constricted-y justify-content-space-between align-items-center">
                        <div class="grid-col">
                            <div class="special-secondary text-leading-constricted inline-flex no-margin ">
                                <div class="hours">
                                    <span class="REPLACE">00</span>
                                </div>
                                :<div class="minutes">
                                    <span class="REPLACE">00</span>
                                </div>
                                :<div class="seconds">
                                    <span class="REPLACE">00</span>
                                </div>
                            </div>
                        </div>
                        <div class="grid-col">
                            <!-- @NOTE button
                        
                                classes to add

                                'active' => if timer is active
                                '' => if timer is NOT active
                            -->
                            <button class="timetracker-timer-toggle btn btn-round btn-symbol color-theme color-theme-polar-hover color-theme-polar-focus border-color-background background-background-alpha-2 background-background-focus background-background-hover background-theme-polar-active color-accent-alpha-8-active">
                                <i class="symbol symbol-play symbol-pause-toggle"></i>
                            </button>
                        </div>

                    </div>
                </div>
                    

                <!-- @if team member is Production Team -->

                    <!-- @if has selected task -->
                        <div class="text-align-center">
                            <!-- @if has selected task -->
                            <h3 class="task-title no-margin-y text-wrap-ellipsis">
                                <span class="REPLACE">Task Title Task Title Task Title Task Title Task Title Task Title </span>
                            </h3>
                            <p class="task-tag text-wrap-ellipsis">
                                <span class="REPLACE">ace-attorney.com (SEO)</span>
                            </p>
                        </div>

                    <!-- else -->
                        <div class="text-align-center">
                                <h3 class="no-margin-y">
                                    <span class="REPLACE">Please select an active task below</span>
                                </h3>
                                <p>
                                    <span class="REPLACE">Scroll down to view your current tasks</span>
                                </p>
                        </div>


                <div class="grid grid-flex grid-compact grid-flex-fixed theme-default background-transparent margin-bottom">

                    <!-- @if team member is seo -->
                        <div class="grid-col-12">
                            <?php app_get_component('components/input-task-client'); ?>
                        </div>

                    <!-- @if team member is seo -->
                        <div class="grid-col-12">
                            <?php app_get_component('components/input-task-project'); ?>
                        </div>
                    
                    <div class="grid-col-12">
                        <?php app_get_component('components/input-task-category'); ?>
                    </div>

                    <!-- @if team member is seo -->
                        <div class="grid-col-12">
                            <?php app_get_component('components/input-task-name'); ?>
                        </div>

                    <!-- @if team member is Production Team -->
                        <div class="grid-col-12">
                            <?php app_get_component('components/input-task-notes'); ?>
                        </div>
                </div>


                <div class="text-align-center theme-default background-transparent">
                    <button class="btn btn-theme" type="submit">Add Entry</button>
                    <span class="spacer">&nbsp;</span>
                    <button type="reset" class="btn btn-theme-polar-outline border-color-theme-polar-hover border-color-theme-polar-focus color-theme-polar-hover color-theme-polar-focus background-background-alpha-1-hover background-background-alpha-1-focus">Discard Time</button>
                </div>

            </form>
        </div>
    </div>
    <div class="timetracker-offset-adjacent">
        <div class="container padding-x">
            <?php app_get_component('components/form-filter-log'); ?>
            <div class="module no-radius-top">
                <div class="module-header">
                    <div class="module-title text-align-center">
                        <span class="REPLACE">Today</span>
                    </div>
                </div>
                <div class="module-content no-padding-x no-padding-bottom">
                    <!-- @if has logs -->
                        <?php app_get_component('components/list-logs','',false,array(
                            'has_toggle' => true
                        )) ?>
                    <!-- @else -->
                        <div class="text-align-center font-style-italic color-neutral padding">
                            No entries yet
                        </div>
                </div>
            </div>
        </div>
    </div>
    
</div>