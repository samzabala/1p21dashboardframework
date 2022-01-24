<?php

//args. feel free to modify as needed
$defs = array(
    //@param info - string - title 
        'title' => 'New Kanban Column', //reminder,error,caution,success

    //@param size - int - number of cards + 1 u need to mockup placeholders
        'placeholder_amount' => 0 
);
$args = app_parse_args($data,$defs);

?>
<div class="outreach-kanban module module-compact">
    <div
        class="
        module-header no-margin-bottom padding-small-y background-neutral color-background module-header-break">
        <h3 class="
        module-title color-inherit
        ">
            <?=$args['title'] ?>
            <span class="font-weight-300">
                <span class="REPLACE"><?= $args['placeholder_amount'] ?></span>
            </span>
        </h3>
        <div class="mofule-functions">
            <div class="module-function">

                <a href="#m-editor-swimlane" class="color-inherit" data-toggle-modal-default title="Edit Swimlane" data-modal-title="Edit Swimlane"><i class="symbol symbol-edit"></i></a>
            </div>
        </div>
    </div>
    <!-- 
        @NOTES for draggable.module-content
            @demo reference from: https://sortablejs.github.io/Vue.Draggable/#/simple
            @markup: reference from https://github.com/SortableJS/Vue.Draggable/blob/master/example/components/simple.vue

        remaining attributes to add that will be based on data
            :list="list"
            :disabled="!enabled"
            :move="checkMove"
            @start="dragging = true"
            @end="dragging = false"
    -->
    <draggable
    class="module-content overflow-y-auto padding-small-top"
    draggable=".outreach-kanban-card"
    ghost-class="disabled"
    >
        <?php app_get_component('components/kanban-card'); ?>

            <!-- @PLACEHOLDER: delete when ready -->
            <?php for($i=1; $i<=$args['placeholder_amount']; $i++){ ?>
            
                <?php app_get_component('components/kanban-card'); ?>
            <?php } ?>
    </draggable>
</div>