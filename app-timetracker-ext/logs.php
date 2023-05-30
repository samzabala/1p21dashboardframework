<div id="timetracker-logs" class="timetracker-offset-wrapper margin-bottom">
    <div class="
        background-gradient-45-from-secondary-to-primary
        radius-large-bottom theme-inverse timetracker-offset-block padding-large-y"">
        <div class="flex-grid flex-grid-no-gutter padding-y align-items-center text-align-center">
            <div class="padding-x border-width-thin-right border-style-solid-right border-color-primary">
                    <div class="total-today lead no-margin-y">
                        <span class="REPLACE">8:00</span>
                    </div>
                    <span>Today</span>
                </div>
            </div>
            <div class="flex-col-2">
                <div class="padding-x">
                    <div class="total-week lead no-margin-y">
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
                <div class="module no-radius-top p">
                        <div class="module-header">
                            <div class="module-title text-align-center">Today</div>
                        </div>
                        <!-- @if has logs for today -->
                            <div class="module-content no-padding-x no-padding-bottom">
                                <?php app_get_component('components/list-logs','',false,array(
                                    'has_toggle' => false
                                )) ?>
                            </div>
                        <!-- @else -->
                            <div class="text-align-center font-style-italic color-neutral padding">
                                No entries for today yet
                            </div>
                    </div>

                <!-- @if has entries for the past 7 days -->
                    <!-- @loop .module -->
                        <div class="module p">
                            <div class="module-header">
                                <div class="module-title text-align-center">
                                    <span class="REPLACE">Sunday, June 12, 1898</span>
                                </div>
                            </div>
                            <!-- @if has logs for the day -->
                                <div class="module-content no-padding-x no-padding-bottom">
                                    <?php app_get_component('components/list-logs','',false,array(
                                        'has_toggle' => false
                                    )) ?>
                                </div>
                            <!-- @else -->
                                <div class="text-align-center font-style-italic color-neutral padding">
                                    No entries for the day
                                </div>
                        </div>

                    <!-- @PLACEHOLDER: Delete when ready -->
                        <?php for($i = 1; $i < 12; $i++): ?>
                            <div class="module p">
                                <div class="module-header">
                                    <div class="module-title text-align-center">
                                        <span class="REPLACE">Sunday, June 12, 1898</span>
                                    </div>
                                </div>
                                <div class="module-content no-padding-x no-padding-bottom">
                                    <?php app_get_component('components/list-logs','',false,array(
                                        'has_toggle' => false
                                    )) ?>
                                </div>
                            </div>
                            <div class="module p">
                                <div class="module-header">
                                    <div class="module-title text-align-center">
                                        <span class="REPLACE">Sunday, June 13, 1898</span>
                                    </div>
                                </div>
                                <div class="text-align-center font-style-italic color-neutral padding">
                                    No entries for the day
                                </div>
                            </div>
                        <?php endfor; ?>
                
        </div>
    </div>
    
</div>