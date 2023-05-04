
<div class=" outreach-kanban-card module border-color-neutral-alpha-5 p no-padding-x">
    <div class="module-content padding-small-left no-margin-x" data-toggle-modal-default>
        <div class="grid grid-flex flex-nowrap grid-constricted">
            <div class="flex-0-0 grid-col">
                <button class="
                    outreach-kanban-dragger
                    btn font-size-large no-padding-y no-padding-left padding-small-right color-neutral  align-items-flex-start color-theme-hover color-theme-active color-theme-focus no-shadow">
                    <i class="symbol symbol-drag"></i>
                </button>
            </div>
            <div class="flex-1-1 grid-col">
                <div class="position-relative padding-large-right">

                    <div class="card-client-owner position-absolute offset-0-right offset-0-top">
                        <a href="<?=app_create_link(array('template' => 'profile')); ?>" class="company-acct-owner text-align-center">
                            <?php app_get_component('components/profile-image-micro') ?>
                        </a>
                    </div>
                    <h5 class="card-client-name no-margin-y">
                        <span class="REPLACE">Wright & Co. Law Offices</span>
                    </h5>
                    <a href="#REPLACE" class="card-client-domain text-wrap-ellipsis">
                        <span class="REPLACE">ace-attorney.comace-attorney.comace-attorney.comace-attorney.comace-attorney.comace-attorney.comace-attorney.comace-attorney.comace-attorney.com</span>
                    </a>
                </div>
                <div class="grid grid-flex grid-compact justify-content-space-between">
                    <div class="grid-col">
                        <h6 class="no-margin">Last Activity Date:</h6>
                    </div>
                    <div class="grid-col">
                        <p class="no-margin">
                            <span class="REPLACE">4/20/69</span>
                        </p>
                    </div>
                </div>

                <!-- @if has tags -->
                    <!-- @loop .tag -->
                        <span class="tag tag-primary">
                            <span class="REPLACE">Tag content here</span>
                        </span>

                        <!-- @PLACEHOLDER: DELETE WHEN READY -->
                            <span class="tag tag-primary">Edible</span>
                            <span class="tag tag-primary">Incoming Edge Case Tag That has a lot of words in it We're no strangers to love You know the rules and so do I A full commitment's what I'm thinking of You wouldn't get this from any other guy  I just wanna tell you how I'm feeling Gotta make you understand  Never gonna give you up Never gonna let you down Never gonna run around and desert you Never gonna make you cry Never gonna say goodbye Never gonna tell a lie and hurt you  We've known each other for so long Your heart's been aching but you're too shy to say it Inside we both know what's been going on We know the game and we're gonna play it And if you ask me how I'm feeling Don't tell me you're too blind to see  Never gonna give you up Never gonna let you down Never gonna run around and desert you Never gonna make you cry Never gonna say goodbye Never gonna tell a lie and hurt you Never gonna give you up Never gonna let you down Never gonna run around and desert you Never gonna make you cry Never gonna say goodbye Never gonna tell a lie and hurt you  Ooh (Give you up) Ooh-ooh (Give you up) Ooh-ooh Never gonna give never gonna give (Give you up) Ooh-ooh Never gonna give never gonna give (Give you up) We've known each other for so long Your heart's been aching but you're too shy to say it Inside we both know what's been going on We know the game and we're gonna play it  I just wanna tell you how I'm feeling Gotta make you understand  Never gonna give you up Never gonna let you down Never gonna run around and desert you Never gonna make you cry Never gonna say goodbye Never gonna tell a lie and hurt you Never gonna give you up Never gonna let you down Never gonna run around and desert you Never gonna make you cry Never gonna say goodbye Never gonna tell a lie and hurt you Never gonna give you up Never gonna let you down Never gonna run around and desert you Never gonna make you cry Never gonna say goodbye Never gonna tell a lie and hurt you </span>
            </div>
        </div>
    </div>
    
    <div class="modal modal-default" data-modal-width="630px" data-modal-title="REPLACE Wright & Co. Law Offices">
        <p>
            <a href="#REPLACE" class="card-client-domain text-wrap-ellipsis">
                <span class="REPLACE">http://ace-attorney.com</span>
            </a>
        </p>

        <h5>
            Owner
        </h5>
        <div class="card-client-owner display-inline-flex align-items-cem">
            <a href="<?=app_create_link(array('template' => 'profile')); ?>" class="company-acct-owner text-align-center">
                <?php app_get_component('components/profile-image-micro') ?>
            </a>
            <span>
                <span class="REPLACE">Maya</span>
            </span>
        </div>

        <h5>Last Activity</h5>
            <!-- @if has lact activity -->
                <span class="REPLACE">4/20/69</span>


        <form action="">
            <label class="h5" for="card-client-stage" class="input input-label sr-only">Stage</label>
            <div class="input-wrapper input-wrapper-vertical input-wrapper-block p">
                <select id="card-client-stage" name="company-stage" id="" class="input-box input-box-select" style="max-width: 18em">
                    <option value="">Select</option>
                    <option value="outreach">Outreach</option>
                    <option value="pitched">Pitched</option>
                    <option value="proposal_sent">Proposal Sent</option>
                    <option value="contract_sent">Contract Sent</option>
                    <option value="closed_won">Closed & Won</option>
                    <option value="closed_lost">Closed & Lost</option>
                </select>
            </div>
        </form>
        

        <h5>Tags</h5>
            <!-- @if has tags -->
                <span class="tag outreach-palette-tag-company">
                    <span class="REPLACE">Tag content here</span>
                </span>

                <!-- @PLACEHOLDER: DELETE WHEN READY -->
                    <span class="tag outreach-palette-tag-company">Orca Whale Defense Attorney</span>
                    <span class="tag outreach-palette-tag-company">Incoming Edge Case Tag That has a lot of words in it We're no strangers to love You know the rules and so do I A full commitment's what I'm thinking of You wouldn't get this from any other guy  I just wanna tell you how I'm feeling Gotta make you understand  Never gonna give you up Never gonna let you down Never gonna run around and desert you Never gonna make you cry Never gonna say goodbye Never gonna tell a lie and hurt you  We've known each other for so long Your heart's been aching but you're too shy to say it Inside we both know what's been going on We know the game and we're gonna play it And if you ask me how I'm feeling Don't tell me you're too blind to see  Never gonna give you up Never gonna let you down Never gonna run around and desert you Never gonna make you cry Never gonna say goodbye Never gonna tell a lie and hurt you Never gonna give you up Never gonna let you down Never gonna run around and desert you Never gonna make you cry Never gonna say goodbye Never gonna tell a lie and hurt you  Ooh (Give you up) Ooh-ooh (Give you up) Ooh-ooh Never gonna give never gonna give (Give you up) Ooh-ooh Never gonna give never gonna give (Give you up) We've known each other for so long Your heart's been aching but you're too shy to say it Inside we both know what's been going on We know the game and we're gonna play it  I just wanna tell you how I'm feeling Gotta make you understand  Never gonna give you up Never gonna let you down Never gonna run around and desert you Never gonna make you cry Never gonna say goodbye Never gonna tell a lie and hurt you Never gonna give you up Never gonna let you down Never gonna run around and desert you Never gonna make you cry Never gonna say goodbye Never gonna tell a lie and hurt you Never gonna give you up Never gonna let you down Never gonna run around and desert you Never gonna make you cry Never gonna say goodbye Never gonna tell a lie and hurt you </span>

            <!-- @else -->
                <p class="color-neutral font-style-italic">
                    No tags yet
                </p>

        <h5>Latest Note</h5>
            <!-- @if has notes -->
                <div class="card-client-note-entry">
                    <small class="color-neutral">
                        <span class="REPLACE">4/20/69</span>
                    </small>
                    <p>
                        There's some weird red fog at the school and I just saved a ton of money on my car insurance by switching to Geico
                    </p>
                </div>
            <!-- @else -->
                <p class="color-neutral font-style-italic">
                    No notes yet
                </p>



        <h5>Scheduled Tasks</h5>

        <!-- @if has tasks -->
                <!-- @loop component -->
                    <?php app_get_component('components/event-row','',false,array(
                        'type' => 'task'
                    )); ?>
                <!-- @PLACEHOLDER: DELETE WHEN READY -->
                    <?php for($i=1; $i<=2; $i++){ ?>
                        <?php app_get_component('components/event-row','',false,array(
                            'type' => 'task'
                        )); ?>
                    <?php } ?>
        <!-- @else -->
            <p class="color-neutral font-style-italic">No scheduled events or tasks</p>


        <h5>Upcoming Events</h5>

        <!-- @if has tasks -->
                <!-- @loop component -->
                    <?php app_get_component('components/event-row','',false,array(
                        'type' => 'event'
                    )); ?>
                <!-- @PLACEHOLDER: DELETE WHEN READY -->
                    <?php for($i=1; $i<=2; $i++){ ?>
                        <?php app_get_component('components/event-row','',false,array(
                            'type' => 'event'
                        )); ?>
                    <?php } ?>
        <!-- @else -->
            <p class="color-neutral font-style-italic">No scheduled events or tasks</p>


        <p>
            <a href="#REPLACE" class="color-error">Remove from Prospecting Funnel</a>
        </p>
    </div>
</div>