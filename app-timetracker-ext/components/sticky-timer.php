
    <div id="timetracker-timer-sticky" class="position-sticky theme-inverse background-theme-contrast  offset-0-top offset-0-left offset-0-right z-index-1000 flex-xs flex-direction-column justify-content-center">
        <div class=" padding-small-x">

            <div class="grid grid-flex grid-flex-fixed grid-compact grid-constricted-y justify-content-space-between align-items-center">
                <div class="grid-col-8">

                    <p class="font-weight-700 timer-active-task-name no-margin-y text-wrap-ellipsis">
                    Really long task name here Really long task name here Really long task name here Really long task name here 
                    </p>
                </div>
                <div class="grid-col-4 text-align-right">
                    <!-- @NOTE button
                
                        classes to add

                        'active' => if timer is active
                        '' => if timer is NOT active
                    -->
                    <button class="timetracker-timer-toggle timetracker-timer-toggle-mini btn btn-round btn-symbol btn-small btn-theme">
                        <i class="symbol symbol-play symbol-pause-toggle"></i>
                    </button>
                    <div class="text-leading-constricted inline-flex no-margin-y">
                        <span class="spacer">&nbsp;</span>
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
            </div>
        </div>
    </div>