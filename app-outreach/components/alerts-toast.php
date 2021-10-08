<!-- @if there are notifications -->
    <div class="outreach-alert-container alert-container offset-nav-sticky alert-container-top alert-container-right">
        <!-- reminders -->
            <?php app_get_component('components/alert','reminder',false,array(
                'type' => 'event',
                'content' => 'short. Tumututol Ako! Ayan! Sandali!',
                'contact' => 'Piniks Rayt',
                'company_domain' => 'ace-attorney.com',
                'date' => 'June 12, 1898',
                'time' => '4:00pm',
            )); ?>

            <?php app_get_component('components/alert','reminder',false,array(
                'type' => 'task',
                'content' => 'long. What If everything was already reversed which world would be the real world? Would it be the mirrored world or the real world? Maybe the reflection we see is real. Ever though of that? Isn\'t that just freaking you out? Isn\'t that just whack crap? I\'m blowin yo mind man. And you know what the weird part is? I\'m not even high. Not a bit. Totally sober.',
                'contact' => 'Larry Harry Rumi Butz-Knowles-Carter Esq.',
                'company_domain' => 'ace-attorney.com/steel/samurai/samurai-with-guitar/oomuch-long/',
                'date' => 'April 20, 2069',
                'time' => '4:20pm'
            )); ?>
            
            <?php app_get_component('components/alert','reminder',false,array(
                'type' => 'call',
                'content' => 'sapat. Drop the Krispy Kremes, Serpico! We need your help here! Yeeeeaaaah boogita didggitda googity dig dig dig tikikiti!',
                'contact' => 'Mia Fey',
                'company_domain' => 'jollibeeusa.com/what-its-like-to-be-a-jolly-bee/',
                'date' => 'August 30, 2021',
                'time' => '3:00am',
            )); ?>


        <!-- Other basic user feedback -->
            <!--`error`: for fatal error user feedback -->
                <?php app_get_component('components/alert','basic',false,array(
                    'type'		=> 'error',
                    'content'	=> 'Something went wrong. Please try again later.',
                )); ?>

            <!--`caution`: for non-fatal error user feedback -->
                <?php app_get_component('components/alert','basic',false,array(
                    'type'		=> 'caution',
                    'content'	=> 'That\'s an invalid email yo'
                )); ?>

            <!--`success`: for important and successful user feedback -->
                <?php app_get_component('components/alert','basic',false,array(
                    'type'		=> 'success',
                    'content'	=> 'Something good happened!'
                )); ?>

            <!--`info`: for minor things/ default alert type -->
                <?php app_get_component('components/alert','basic',false,array(
                    'content'	=> 'fyi pretty neutral and not that critical.'
                )); ?>


    </div>