<div id="timetracker-logs" class="timetracker-offset-wrapper margin-bottom">
    <!-- @NOTE div
        classes to add
        `background-gradient-45-from-secondary-to-primary` => if timer is not active AND no task is actively selected
        `background-gradient-tt-active` => if timer is not active AND a task is actively selected
    -->
    <div class="
        background-gradient-45-from-secondary-to-primary
        radius-large-bottom theme-inverse timetracker-offset-block padding-y">
        <div class="flex-grid flex-grid-no-gutter padding-small-y align-items-center text-align-center">
            <div class="flex-col-2">
                <div class="padding-x border-width-thin-right border-style-solid border-color-primary">
                    <div class="total-today lead no-margin-y font-weight-700">
                        <span class="REPLACE">8:00</span>
                    </div>
                    <span>Today</span>
                </div>
            </div>
            <div class="flex-col-2">
                <div class="padding-x">
                    <div class="total-week lead no-margin-y font-weight-700">
                        <span class="REPLACE">69:42</span>
                    </div>
                    <span>This Week</span>
                </div>
            </div>
        </div>
    </div>
    <div class="timetracker-offset-adjacent">
        <div class="container padding-x">
            <?php app_get_component('components/form-filter-log'); ?>
                
            <!-- @if has logs for today -->
            <?php app_get_component('components/module-entries','',false,array(
                'title' => 'Today',
                'no_radius_top' => true,
            )); ?>

            <!-- @if has entries for the past 7 days -->
                    <!-- @loop component -->
            <?php app_get_component('components/module-entries','',false,array(
                'title' => 'June 12, 1898'
            )); ?>
                
        </div>
    </div>
    
</div>