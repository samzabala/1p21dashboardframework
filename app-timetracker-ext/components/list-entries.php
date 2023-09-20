
<ul class="list-group list-group-expanded no-margin-bottom">
    <!-- @loop li -->
        <li class="list-group-item background-transparent no-padding">
            <div class="padding">
                <div class="flex-grid flex-grid-fixed flex-grid-compact flex-grid-no-gutter-y align-items-center flex-nowrap">
                    <div class="flex-0-0 flex-child">
        
                        <!-- 
                            @NOTE
                                button
                                    classes to add
                                    `active` => if favorite
        
                        -->
                        <a href="#" class="font-size-large color-neutral color-caution-active">
                            <i class="symbol symbol-star-stroke symbol-star-toggle"></i>
                        </a>
                    </div>
                    <div class="flex-0-0 flex-child">
        
                        <a href="#entries-REPLACEID" data-toggle-accordion class="btn btn-small btn-primary-outline btn-symbol btn-round">
                            <i class="symbol symbol-arrow-down symbol-arrow-up-toggle"></i>
                        </a>
                    </div>
                    <div class="flex-1-1 flex-child">

                        <a href="<?= app_create_link(array('template' => 'task-detail')) ?>" class="color-inherit text-decoration-none color-primary-dark-hover">
                            <h5 class="text-wrap-ellipsis no-margin-y color-inherit font-weight-600 color-inherit"
                                data-toggle-tooltip-hover data-tooltip-placement="top"
                                data-tooltip-content="Float Everything Left"
                            >
                                <span class="REPLACE">Float Everything Left</span>
                            </h5>
                            <p class="text-wrap-ellipsis no-margin-y font-size-small color-neutral">
                                <span class="REPLACE">ace-attorney.com</span>
                            </p>
                        </a>
                    </div>
                    <div class="flex-col-3 text-align-right">
                        <p class="no-margin-y font-weight-500">
                            <span class="REPLACE">4:20</span>
                        </p>

                        <!-- @if has status -->
                            <!-- @NOTE
                                .tag
                                    classes to add
                                        `neutral` => backlog/maintenance backlog/production backlog
                                        `primary` => when in progress/production
                                        `secondary` => when in review
                                        `error` => when on hold
                                        `success` => completed
                            -->
                            <span class="tag tag-small tag-primary">
                                <span class="REPLACE">In Progress</span>
                            </span>
                    </div>

                </div>
            </div>
            <div id="entries-REPLACEID" class="accordion">
                <?php app_get_component('components/list-sub-entries'); ?>
            </div>
        </li>


        <!-- @PLACEHOLDER delete when ready -->
            <? $placeholder_color = array(
                'neutral',
                'primary',
                'secondary',
                'error',
                // 'success',
            ); ?>
            <? $placeholder_stuff = array(
                'neutral' => 'Backlog',
                'primary' => 'In Progress',
                'secondary' => 'Review',
                'error' => 'On Hold',
                // 'success' => 'Complete',
            ); ?><?php

            $placeholder_tasks = array(
                'Homepage Design' => 'asinine-attorney.com',
                'Program Website' => 'spy-family.net',
                'Bugherd' => 'www.smashbros.com',
                'Pre-Launch QC' => 'animal-crossing.com',
                'Content Integration' => 'jollibeefoods.com',
            );

            if(!isset($i)){
                static $i = 0;
            }
        ?>
            <?php $h = 0; foreach($placeholder_tasks as $tsk => $cli): ?>
                    
                    
            <li class="list-group-item background-transparent no-padding">
                <div class="padding">
                    <div class="flex-grid flex-grid-fixed flex-grid-compact flex-grid-no-gutter-y align-items-center flex-nowrap">
                        <div class="flex-0-0 flex-child">
            
                            <!-- 
                                @NOTE
                                    button
                                        classes to add
                                        `active` => if favorite
            
                            -->
                            <a href="#" class="font-size-large color-neutral color-caution-active <?= $i % 2 == 0 ? 'active' : '' ?>">
                                <i class="symbol symbol-star-stroke symbol-star-toggle"></i>
                            </a>
                        </div>
                        <div class="flex-0-0 flex-child">
            
                            <a href="#entries-<?=$i; ?>" data-toggle-accordion class="btn btn-small btn-primary-outline btn-symbol btn-round">
                                <i class="symbol symbol-arrow-down symbol-arrow-up-toggle"></i>
                            </a>
                        </div>
                        <div class="flex-1-1 flex-child">

                            <a href="<?= app_create_link(array('template' => 'task-detail')) ?>" class="color-inherit text-decoration-none color-primary-dark-hover">
                                <h5 class="text-wrap-ellipsis no-margin-y color-inherit font-weight-600 color-inherit"
                                    data-toggle-tooltip-hover data-tooltip-placement="top"
                                    data-tooltip-content="Float Everything Left"
                                    >
                                    <span class="REPLACE"><?=$tsk ?></span>
                                </h5>
                                <p class="text-wrap-ellipsis no-margin-y font-size-small">
                                    <span class="REPLACE"><?=$cli ?></span>
                                </p>
                            </a>
                        </div>
                        <div class="flex-col-3 text-align-right">
                            <p class="no-margin-y font-weight-500">
                                <span class="REPLACE">4:20</span>
                            </p>


                            <!-- @if has status -->
                                <span class="tag tag-small tag-<?=$placeholder_color[$h]; ?>">
                                    <span class="REPLACE"><?=  $placeholder_stuff[ $placeholder_color[$h] ]; ?></span>
                                </span>
                        </div>

                    </div>
                </div>
                <div id="entries-<?=$i; ?>" class="accordion">
                    <?php app_get_component('components/list-sub-entries'); ?>
                </div>
            </li>
        <?php if($h >= count($placeholder_stuff) - 1) $h = 0; $h++; $i++; endforeach; ?>
    
</ul>