<div id="timetracker-analytics" class="timetracker-offset-wrapper margin-bottom">
    <div class="
        background-gradient-45-from-secondary-to-primary
        radius-large-bottom theme-inverse timetracker-offset-block padding-large-y"></div>
    <div class="timetracker-offset-adjacent">
        <div class="container padding-x timetracker-offset-adjacent-crossover">
            <div class="module">
                <div class="module-header position-relative">
                    <div class="module-title text-align-center flex-1-1">Focus</div>
                    <div class="module-functions">
                        <div class="module-function position-absolute offset-0-right offset-0-y margin-auto">
                            <button class="btn no-padding-y padding-small-x color-neutral-alpha-8 color-inherit-hover color-inherit-focus">
                                <i class="symbol symbol-sync"></i> <div class="sr-only">Sync</div>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="module-content flex-xs flex-direction-column justify-content-center text-align-center
                    border-style-solid-y border-width-thin-y border-color-theme-polar-contrast
                ">
                    <div class="padding-large-y padding-x">
                        <form action="">
                            <!-- @hidden fields here -->
                            <!-- @NOTE button
                                classes to add

                                ``          => if timer is not active
                                `active`    => if timer is active 
                            -->
                            <button class="btn btn-round btn-tt-fancy-gradient background-gradient-90 ">
                                <i class="symbol symbol-play symbol-pause-toggle"></i>
                            </button>
                            <h1 class="special-primary margin-large-top margin-bottom">
                                <span class="REPLACE">00:00</span>
                            </h1>
                            <p class="margin-large-bottom padding-large-bottom">
                                <!-- @if started AND mode is working -->
                                    <?php app_get_component('components/icon-focus'); ?>
                                    <span>Working</span>
                                <!-- @else if started AND mode is break -->
                                    <?php app_get_component('components/icon-break'); ?>
                                    <span>Break</span>
                                <!-- @else if not started yet -->
                                    <?php app_get_component('components/icon-focus'); ?>
                                    <span>Start Working</span>
                            </p>



                            <div class="progress progress-small position-relative">
                                
                                <!-- @NOTE .progress-bar
                                    attributes to replace
                                        `style` => `width: REPLACEWithPercentOfPRogressOutOfTotalTime`
                                -->
                                <div class="progress-bar background-gradient-90" style="width: 87%"></div>


                                <div class="progress-tt-mask progress progress-small ">
                                    <!-- @loop .progress-tt-mask-bar -->
                                    <!-- @NOTE .progress-tt-mask-bar
                                        attributes to replace
                                            `style` => `--mask-item-width: REPLACEWithPercentOfTimeChunkOutOfTotalTime` 
                                    -->

                                    <div class="progress-tt-mask-bar progress-bar" style="--mask-item-width: 20%"></div>

                                    <!-- @PLACEHOLDER: delete when ready -->
                                        <?php for($i = 0; $i <= 2; $i++): ?>
                                            <div class="progress-tt-mask-bar progress-bar" style="--mask-item-width: 10%"></div>
                                            <div class="progress-tt-mask-bar progress-bar" style="--mask-item-width: 30%"></div>
                                        <?php endfor; ?>
                                    
                                </div>
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    
</div>