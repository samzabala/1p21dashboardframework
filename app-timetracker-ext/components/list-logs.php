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
        <li class="list-group-item no-padding background-transparent">
            <div class="padding">
                <div class="grid grid-flex grid-constricted grid-flex-fixed align-items-center justify-content-space-between">
                    <?php if($args['has_toggle']): ?>
                        <div class="grid-col-2">
                            <form action="">
                                <!-- @note hidden fields here -->
                                <!-- 
                                    @NOTE
                                        button
                                            classes to add
                                            `btn-theme`              => if not active
                                            `btn-gradient active background-image-none-hover background-image-none-focus`   => if currently active

                                -->
                                <button class="btn btn-round btn-symbol well
                                btn-theme">
                                    <i class="symbol symbol-play symbol-pause-toggle"></i>
                                </button>
                            </form>
                        </div>
                    <?php else: ?>
                        <!-- @if has multiple entries -->
                            <div class="grid-col-2">
                                <a href="#entry-REPLACEID" data-toggle-accordion class="btn btn-small btn-theme btn-round btn-symbol ">
                                    <i class="symbol symbol-arrow-down symbol-arrow-up-toggle"></i>
                                </a>
                            </div>
                    <?php endif; ?>
                    <div class="grid-col-7 flex-1-1">
                        <a href="<?= app_create_link(array('template' => 'log-edit')) ?>" class="text-decoration-none color-inherit flex-xs flex-direction-column justify-content-center">
                            <p class="text-wrap-ellipsis no-margin">
                                <span class="REPLACE">Task Name Task Name Task Name Task Name Task Name Task Name Task Name Task Name Task Name </span>
                            </p>
                            <p class="text-wrap-ellipsis no-margin font-size-small color-neutral">
                                <span class="REPLACE">Client Name</span>
                            </p>
                        </a>
                    </div>
                    <div class="grid-col-3 text-align-right">
                        <span class="REPLACE">06:09:01</span>
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
            <div id="entry-REPLACEID" class="accordion">
                <div class="background-intensity-3-alpha-1 color-neutral-dark">
                    <!-- @loop div -->
                        <div class="border-color-neutral-alpha-1 border-width-thin-top border-style-solid padding-x padding-small-y">
                            <div class="grid grid-flex grid-flex-fixed grid-constricted-y align-items-center">
                                <div class="grid-col-8">
                                    <span class="REPLACE">4/20/2069</span>
                                </div>
                                <div class="grid-col-2 text-align-right">
                                    <a href="#REPLACEToHyperLinkToTimeTrackerNote" target="_blank" class="tag color-background background-base-alpha-5"><i class="symbol symbol-text-left"></i></a>
                                </div>
                                <div class="grid-col-2 text-align-right">
                                    <span class="REPLACE">4:20</span>
                                </div>
                            </div>
                        </div>

                        <!-- @PLACEHOLDER delete when ready -->
                            <?php for($g = 0; $g < 9; $g++): ?>
                                <div class="border-color-neutral-alpha-1 border-width-thin-top border-style-solid padding-x padding-small-y">
                                    <div class="grid grid-flex grid-flex-fixed grid-constricted-y align-items-center">
                                        <div class="grid-col-8">
                                            <span class="REPLACE">4/20/2069</span>
                                        </div>
                                        <div class="grid-col-2 text-align-right">
                                            <a href="#REPLACEToHyperLinkToTimeTrackerNote" target="_blank" class="tag color-background background-base-alpha-5"><i class="symbol symbol-text-left"></i></a>
                                        </div>
                                        <div class="grid-col-2 text-align-right">
                                            <span class="REPLACE">4:20</span>
                                        </div>
                                    </div>
                                </div>
                            <?php endfor; ?>

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
            ); ?>
            <?php for($h = 0; $h < 4; $h++): ?>
                <?php for($i = 0; $i < count($placeholder_stuff); $i++): ?>
                    <li class="list-group-item no-padding background-transparent">
                        <div class="padding">
                            <div class="grid grid-flex grid-constricted grid-flex-fixed align-items-center justify-content-space-between">
                                <?php if($args['has_toggle']): ?>
                                    <div class="grid-col-2">
                                        <form action="">
                                            <!-- @note hidden fields here -->
                                            <!-- 
                                                @NOTE
                                                    button
                                                        classes to add
                                                        `btn-theme`              => if not active
                                                        `btn-gradient active background-image-none-hover background-image-none-focus`   => if currently active

                                            -->
                                            <button class="btn btn-round btn-symbol well
                                            <?= $i % 2 == 0 ? 'btn-gradient active background-image-none-hover background-image-none-focus' : 'btn-theme'?>">
                                                <i class="symbol symbol-play symbol-pause-toggle"></i>
                                            </button>
                                        </form>
                                    </div>
                                <?php else: ?>
                                    <!-- @if has multiple entries -->
                                        <?php if($i > 0): ?>
                                            <div class="grid-col-2">
                                                <a href="#entry-<?=$h ?>-<?=$i ?>" data-toggle-accordion class="btn btn-small btn-theme btn-round btn-symbol ">
                                                    <i class="symbol symbol-arrow-down symbol-arrow-up-toggle"></i>
                                                </a>
                                            </div>
                                        <?php endif; ?>
                                <?php endif; ?>
                                <div class="grid-col-7">
                                    <a href="<?= app_create_link(array('template' => 'log-edit')) ?>" class="text-decoration-none color-inherit flex-xs flex-direction-column justify-content-center">
                                        <p class="text-wrap-ellipsis no-margin">
                                            <span class="REPLACE">Task Name Task Name Task Name Task Name Task Name Task Name Task Name Task Name Task Name </span>
                                        </p>
                                        <p class="text-wrap-ellipsis no-margin font-size-small color-neutral">
                                            <span class="REPLACE">Client Name</span>
                                        </p>
                                    </a>
                                </div>
                                <div class="grid-col-3 text-align-right">
                                    <span class="REPLACE">06:09:01</span>
                                    <!-- @if has status -->
                                        <span class="tag tag-small tag-<?=$placeholder_color[$i]; ?>">
                                            <span class="REPLACE"><?=  $placeholder_stuff[ $placeholder_color[$i] ]; ?></span>
                                        </span>
                                </div>
                            </div>
                        </div>
                        <div id="entry-<?=$h ?>-<?=$i ?>" class="accordion">
                            <div class="background-intensity-3-alpha-1 color-neutral-dark">
                                <!-- @loop div -->
                                    <div class="border-color-neutral-alpha-1 border-width-thin-top border-style-solid padding-x padding-small-y">
                                        <div class="grid grid-flex grid-flex-fixed grid-constricted-y align-items-center">
                                            <div class="grid-col-8">
                                                <span class="REPLACE">4/20/2069</span>
                                            </div>
                                            <div class="grid-col-2 text-align-right">
                                                <a href="#REPLACEToHyperLinkToTimeTrackerNote" target="_blank" class="tag color-background background-base-alpha-5"><i class="symbol symbol-text-left"></i></a>
                                            </div>
                                            <div class="grid-col-2 text-align-right">
                                                <span class="REPLACE">4:20</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- @PLACEHOLDER delete when ready -->
                                        <?php for($g = 0; $g < 9; $g++): ?>
                                            <div class="border-color-neutral-alpha-1 border-width-thin-top border-style-solid padding-x padding-small-y">
                                                <div class="grid grid-flex grid-flex-fixed grid-constricted-y align-items-center">
                                                    <div class="grid-col-8">
                                                        <span class="REPLACE">4/20/2069</span>
                                                    </div>
                                                    <div class="grid-col-2 text-align-right">
                                                        <a href="#REPLACEToHyperLinkToTimeTrackerNote" target="_blank" class="tag color-background background-base-alpha-5"><i class="symbol symbol-text-left"></i></a>
                                                    </div>
                                                    <div class="grid-col-2 text-align-right">
                                                        <span class="REPLACE">4:20</span>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endfor; ?>

                            </div>
                        </div>
                    </li>
                <?php endfor; ?>
            <?php endfor; ?>
    
</ul>