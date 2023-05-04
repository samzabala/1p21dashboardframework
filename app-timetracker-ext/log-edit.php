<div id="timetracker-log-edit" class="timetracker-offset-wrapper background-gradient-45-from-secondary-to-primary theme-inverse">
    <div class="timetracker-offset-block padding-large-y">
        <div class="container">
            <form action="">
                <div class="text-align-center">
                    <div class="h3 task-title no-margin-bottom grid grid-flex grid-constricted justify-content-center align-items-center text-align-center">
                        <div class="grid-col flex-0-0">
                            <!-- @note hidden fields here -->
                            <!-- @NOTE
                            a
                                classes to add
                                '' => if task is not a favorite
                                'active' => if task is a favorite
                        
                            -->
                            <a class="color-inherit vertical-align-middle" href="#">
                                <i class="symbol symbol-star-stroke symbol-star-active"></i>
                                <span class="sr-only">Toggle Favorite</span>
                            </a>
                        </div>
                        <div class="grid-col flex-1-1" style="max-width: 16em">
                            <h3 class="font-size-inherit no-margin">
                            <span class="text-wrap-ellipsis">
                                <span class="REPLACE">Task Title Task Title Task Title Task Title Task Title Task Title </span>
                            </span>
                            </h3>
                        </div>
                    </div>
                    <p class="task-tag text-wrap-ellipsis">
                        <span class="REPLACE">ace-attorney.com (SEO)</span>
                    </p>
                </div>



                <div class="grid grid-flex grid-compact grid-flex-fixed theme-default background-transparent">

                    <div class="grid-col-6">
                        <div class="input-wrapper input-wrapper-block input-wrapper-vertical position-relative">
                            <label for="task-time" class="sr-only">Task Time</label>
                            <input name="" id="task-time" type="text" class="text-align-center input input-large input-box" placeholder="00:00:00" />
                        </div>
                    </div>


                    <div class="grid-col-6">
                        
                        <div class="input-wrapper input-wrapper-block input-wrapper-vertical position-relative">
                            <label for="task-status" class="sr-only">Status</label>
                            <select name="" id="task-status" class="input input-large font-size-normalize input-box input-box-select">
                                    <option value="">Status</option>

                                <!-- @PLACEHOLDER. delete when ready -->
                                    <option value="">Backlog</option>
                                    <option value="">In Progress</option>
                                    <option value="">Review</option>
                                    <option value="">Completed</option>
                            </select>
                        </div>
                    </div>

                    <!-- @if edit log view is not limited -->
                        <div class="grid-col-12">
                            <?php app_get_component('components/input-task-client'); ?>
                        </div>

                    <!-- @if edit log view is not limited -->
                        <div class="grid-col-12">
                            <?php app_get_component('components/input-task-project'); ?>
                        </div>

                    <div class="grid-col-12">
                        <?php app_get_component('components/input-task-category'); ?>
                    </div>

                    <div class="grid-col-12">
                        <?php app_get_component('components/input-task-notes'); ?>
                    </div>

                    <div class="grid-col-12">
                        <button class="btn btn-theme btn-block" type="submit">Save</button>
                    </div>
                </div>

                <div class="margin-large-top padding-large-x">
                    <div class="text-align-center theme-default background-transparent margin-bottom grid grid-flex grid-constricted flex-nowrap">
                        <div class="grid-col-6">
                            <a href="#" class="btn btn-block btn-theme-polar-outline border-color-theme-polar-hover border-color-theme-polar-focus color-theme-polar-hover color-theme-polar-focus background-background-alpha-1-hover background-background-alpha-1-focus margin-right-small">Cancel</a>
                        </div>
                        <span class="spacer grid-col">&nbsp;</span>
                        <div class="grid-col-6">
                            <a href="#" class="btn btn-block btn-theme-polar-outline border-color-theme-polar-hover border-color-theme-polar-focus color-theme-polar-hover color-theme-polar-focus background-background-alpha-1-hover background-background-alpha-1-focus">Delete Entry</a>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
    
</div>