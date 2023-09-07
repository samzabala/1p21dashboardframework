<div id="timetracker-favorites" class="timetracker-offset-wrapper margin-bottom">
    <!-- @NOTE div
        classes to add
        `background-gradient-45-from-secondary-to-primary` => if timer is not active AND no task is actively selected
        `background-gradient-tt-active` => if timer is not active AND a task is actively selected
    -->
    <div class="
        background-gradient-45-from-secondary-to-primary
        radius-large-bottom theme-inverse padding-large-y">
        <div class="container text-align-center">

            <div class="padding-large-top">

                <!-- @NOTE
                    classes to add:
                        `padding-small-y padding-x border-style-solid border-color-background-alpha-2 border-width-thin radius-small` => if can edit
                        `` => if not
        
                -->
                <div class="lead
                    padding-small-y padding-x border-style-solid border-color-background-alpha-2 border-width-thin radius-small
                ">
                    <!-- @if can edit -->
                        <input type="text" class="input input-blend input-block text-align-inherit no-border" placeholder="Enter Task Title..."
                            value="Float Everything Left"
                        >
                    <!-- @else -->
                        <!-- @NOTE front end markup commented out so it doesnt look ugly -->
                        <!-- <span class="REPLACE">Float Everything Left</span> -->
                    </div>
        
                <p class="no-margin-y font-weight-600">
                    <span class="REPLACE">ace-attorney.com</span>
                    |
                    <span class="REPLACE">Wright & Co. Law</span>
                </p>
            </div>



        </div>
	</div>
    <div class="timetracker-offset-adjacent">
        <div class="container padding-x timetracker-offset-adjacent-crossover">
            <form action="">
                <div class="flex-grid flex-grid-fixed">
                    <div class="flex-col-6">
                        <?php app_get_component('components/input-task-category'); ?>
                    </div>
                    <div class="flex-col-6">
                        <?php app_get_component('components/input-task-status'); ?>
                    </div>
                    <div class="flex-col-12">
                        <?php app_get_component('components/input-task-entry'); ?>
                    </div>
                    <div class="flex-col-12">
                        <?php app_get_component('components/input-task-notes'); ?>
                    </div>
                    <div class="flex-col-12">
                        <div class="padding-y text-align-center">
                            <!-- @DEMO only because front end demo will be ugly. use markup after instead -->
                                <a href="<?= app_create_link(array('template' => 'tasks')) ?>" class="btn btn-large btn-accent btn-block">Save</a>
							
                            <!-- <button class="btn btn-large btn-accent">Start Timer</button> -->
                            <div class="margin-small-top">
                                <a href="#" class="btn btn-large btn-accent-outline btn-block">Go Back</a>
                            </div>

                            <div class="margin-top">
                                <a href="#" class="color-inherit color-error-hover">
                                    Delete Entry
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
</div>