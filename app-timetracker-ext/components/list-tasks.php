<?php
//args. feel free to modify as needed
	$defs = array(
		//@param info - string - alert type 
		'has_toggle' => true,
	);

	$args = app_parse_args($data,$defs);
?>
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
                    <div class="flex-1-1 flex-child">
                        <a href="<?= app_create_link(array('template' => 'task-detail')) ?>" class="color-inherit text-decoration-none color-primary-dark-hover">
                            <h5 class="text-wrap-ellipsis no-margin-y color-inherit font-weight-600 color-inherit">
                                <span class="REPLACE">Float Everything Left</span>
                            </h5>
                            <p class="text-wrap-ellipsis no-margin-top margin-small-bottom font-size-small color-neutral">
                                <span class="REPLACE">ace-attorney.com</span>
                            </p>
                        </a>

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


                        <div class="flex-grid flex-nowrap flex-grid-compact font-size-small flex-no-gutter-y">
                            <span class="flex-child flex-0-0">
                                Created: <span class="color-accent font-weight-600"><span class="REPLACE">Jun 12, 1898</span></span>
                            </span>
                            <span class="flex-child flex-0-0">
                                Due: <span class="color-accent font-weight-600"><span class="REPLACE">Jun 12, 1898</span></span>
                            </span>
                        </div>
                    </div>
                    <div class="flex-0-0 text-align-right">
                        <p class="no-margin-y font-weight-500">
                            <span class="REPLACE">4:20</span>
                        </p>
                    </div>
                    <div class="flex-child flex-0-0 padding-small-left">
                        <form action="">
                            <!-- @note hidden fields here -->
                            <!-- 
                                @NOTE
                                    button
                                        classes to add
                                        `btn-accent`              => if not active
                                        `btn-gradient active background-image-none-hover background-image-none-focus`   => if currently active
                                    
                                        href attribute for demo  purposes only

                            -->

                            <!-- @DEMO only because front end demo will be ugly. use markup after instead -->

                                <a href="<?= app_create_link(array('template' => 'timer')) ?>"
                                class="btn btn-round btn-symbol well no-border
                                btn-accent">
                                    <i class="symbol symbol-play symbol-pause-toggle"></i>
                                </a>

                            <!-- <button 
                            class="btn btn-round btn-symbol well no-border
                            btn-accent">
                                <i class="symbol symbol-play symbol-pause-toggle"></i>
                            </button> -->
                        </form>
                    </div>
                </div>
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
                            <div class="flex-1-1 flex-child">
                                <a href="<?= app_create_link(array('template' => 'task-detail')) ?>" class="color-inherit text-decoration-none color-primary-dark-hover">
                                    <h5 class="text-wrap-ellipsis no-margin-y color-inherit font-weight-600 color-inherit">
                                        <span class="REPLACE"><?= $tsk; ?></span>
                                    </h5>
                                    <p class="text-wrap-ellipsis no-margin-top margin-small-bottom font-size-small color-neutral">
                                        <span class="REPLACE"><?= $cli; ?></span>
                                    </p>
                                </a>

                                <!-- @if has status -->
                                    <span class="tag tag-small tag-<?=$placeholder_color[$h]; ?>">
                                        <span class="REPLACE"><?=  $placeholder_stuff[ $placeholder_color[$h] ]; ?></span>
                                    </span>


                                <div class="flex-grid flex-nowrap flex-grid-compact font-size-small flex-no-gutter-y">
                                    <span class="flex-child flex-0-0">
                                        Created: <span class="color-accent font-weight-600"><span class="REPLACE">Jun 12, 1898</span></span>
                                    </span>
                                    <span class="flex-child flex-0-0">
                                        Due: <span class="color-accent font-weight-600"><span class="REPLACE">Jun 12, 1898</span></span>
                                    </span>
                                </div>
                            </div>
                            <div class="flex-col-3 text-align-right">
                                <p class="no-margin-y font-weight-500">
                                    <span class="REPLACE">4:20</span>
                                </p>
                            </div>
                            <div class="flex-child flex-0-0 padding-small-left">
                                <a href="<?= app_create_link(array('template' => 'timer')) ?>"
                                class="btn btn-round btn-symbol well no-border
                                <?= $i == 2 ? 'btn-gradient active background-image-none-hover background-image-none-focus' : 'btn-accent' ?>">
                                    <i class="symbol symbol-play symbol-pause-toggle"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
            <?php if($h >= count($placeholder_stuff) - 1) $h = 0; $h++; $i++; endforeach; ?>
    
</ul>