<div class="alert-container offset-nav-sticky alert-container-top alert-container-right">
    <?php app_get_component('components/alert','',false,array(
        'type'		=> 'reminder',
        'content'	=> 'Reminder for <a href="'.app_create_link(array('template'=>'project')).'">Task Description</a>'
    )); ?>

    <?php app_get_component('components/alert','',false,array(
        'type'		=> 'due',
        'content'	=> '<a href="'.app_create_link(array('template'=>'project')).'">Task Description</a> is due within 3 days on 10/10/20 '
    )); ?>

    <?php app_get_component('components/alert','',false,array(
        'type'		=> 'activity',
        'content'	=> '<a href="'.app_create_link(array('template'=>'profile')).'">Username</a> added a note for <a href="'.app_create_link(array('template'=>'project')).'">Task Description</a>'
    )); ?>

    <!-- Other basic user feedback -->
        <!--`error`: for fatal error user feedback -->
            <?php app_get_component('components/alert','',false,array(
                'type'		=> 'error',
                'content'	=> 'Something went wrong. Please try again later.'
            )); ?>

        <!--`caution`: for non-fatal error user feedback -->
            <?php app_get_component('components/alert','',false,array(
                'type'		=> 'caution',
                'content'	=> 'That\'s an invalid email yo'
            )); ?>

        <!--`success`: for important and successful user feedback -->
            <?php app_get_component('components/alert','',false,array(
                'type'		=> 'success',
                'content'	=> 'Something good happened!'
            )); ?>

        <!--`info`: for minor things/ default alert type -->
            <?php app_get_component('components/alert','',false,array(
                'content'	=> 'I\'m pretty neutral and not that critical. meh.'
            )); ?>


</div>