<form action="">
    <div class="input-wrapper input-vertical p">

                            
        <!-- @hidden here input fields -->

        <!-- @if has tags -->
            <!-- @loop .btn -->
                <span class="btn btn-primary-glassy margin-micro-right margin-micro-top btn-no-interaction">
                    <span class="text-wrap-ellipsis margin-small-right">
                        <span class="REPLACE">Tag text</span>
                    </span>
                    <a href="#" class="outreach-tag-action input input-blend"><i class="symbol symbol-close"></i></a>
                </span>
                
                    <!-- @PLACHOLDER DELETE WHEN READY -->

                        <?php
                        $placeholder_tags = array(
                            "Tag content here","Talent Agency","Law Firm","Japanifornia Locations","Herlock Sholmes","Metal Detector","Spirit Medium Services","Jollibee","Eat your hamburgers Apollo","Can defeat Thanos","Defense Attorney for Orcas in Los Angeles California","Incoming Edge Case Tag That has a lot of words in it We're no strangers to love You know the rules and so do I A full commitment's what I'm thinking of You wouldn't get this from any other guy  I just wanna tell you how I'm feeling Gotta make you understand  Never gonna give you up Never gonna let you down Never gonna run around and desert you Never gonna make you cry Never gonna say goodbye Never gonna tell a lie and hurt you  We've known each other for so long Your heart's been aching but you're too shy to say it Inside we both know what's been going on We know the game and we're gonna play it And if you ask me how I'm feeling Don't tell me you're too blind to see  Never gonna give you up Never gonna let you down Never gonna run around and desert you Never gonna make you cry Never gonna say goodbye Never gonna tell a lie and hurt you Never gonna give you up Never gonna let you down Never gonna run around and desert you Never gonna make you cry Never gonna say goodbye Never gonna tell a lie and hurt you  Ooh (Give you up) Ooh-ooh (Give you up) Ooh-ooh Never gonna give never gonna give (Give you up) Ooh-ooh Never gonna give never gonna give (Give you up) We've known each other for so long Your heart's been aching but you're too shy to say it Inside we both know what's been going on We know the game and we're gonna play it  I just wanna tell you how I'm feeling Gotta make you understand  Never gonna give you up Never gonna let you down Never gonna run around and desert you Never gonna make you cry Never gonna say goodbye Never gonna tell a lie and hurt you Never gonna give you up Never gonna let you down Never gonna run around and desert you Never gonna make you cry Never gonna say goodbye Never gonna tell a lie and hurt you Never gonna give you up Never gonna let you down Never gonna run around and desert you Never gonna make you cry Never gonna say goodbye Never gonna tell a lie and hurt you"
                        );

                        for($i=0; $i<count($placeholder_tags); $i++){ ?>

                            <span class="btn btn-primary-glassy margin-micro-right margin-micro-top btn-no-interaction">
                                <span class="text-wrap-ellipsis margin-small-right">
                                    <span class="REPLACE"><?=$placeholder_tags[$i]; ?></span>
                                </span>
                                <a href="#" class="outreach-tag-action input input-blend"><i class="symbol symbol-close"></i></a>
                            </span>
                        <?php } ?>

        <div class="margin-top">
            <label class="input input-label sr-only">Tags</label>
            <input type="text" class="input input-blend input-block no-border" placeholder="Type to search or add tags...">
        </div>
    </div>
    <hr>

    <h5 class="no-margin color-neutral">Previously used tags:</h5>

    <!-- @LOOP a.btn -->
    <a href="#" class="btn btn-primary-outline margin-small-right margin-small-top">
        <div class="text-wrap-ellipsis margin-small-right">
            <span class="REPLACE">Tag content hereTag content hereTag content hereTag content hereTag content hereTag content hereTag content hereTag content hereTag content hereTag content hereTag content hereTag content hereTag content hereTag content hereTag content hereTag content hereTag content hereTag content hereTag content hereTag content hereTag content here</span>
        </div>
        <i class="symbol symbol-plus"></i>
    </a>

    <!-- @PLACEHOLDER. delete when ready -->
        <a href="#" class="btn btn-primary-outline margin-small-right margin-small-top">
            <div class="text-wrap-ellipsis margin-small-right">
                <span class="REPLACE">Talent Agency</span>
            </div>
            <i class="symbol symbol-plus"></i>
        </a>
        <a href="#" class="btn btn-primary-outline margin-small-right margin-small-top">
            <div class="text-wrap-ellipsis margin-small-right">
                <span class="REPLACE">Law Firm</span>
            </div>
            <i class="symbol symbol-plus"></i>
        </a>
        <a href="#" class="btn btn-primary-outline margin-small-right margin-small-top">
            <div class="text-wrap-ellipsis margin-small-right">
                <span class="REPLACE">Japanifornia Locations</span>
            </div>
            <i class="symbol symbol-plus"></i>
        </a>
        <a href="#" class="btn btn-primary-outline margin-small-right margin-small-top">
            <div class="text-wrap-ellipsis margin-small-right">
                <span class="REPLACE">Herlock Sholmes</span>
            </div>
            <i class="symbol symbol-plus"></i>
        </a>
        <a href="#" class="btn btn-primary-outline margin-small-right margin-small-top">
            <div class="text-wrap-ellipsis margin-small-right">
                <span class="REPLACE">Metal Detector</span>
            </div>
            <i class="symbol symbol-plus"></i>
        </a>
        <a href="#" class="btn btn-primary-outline margin-small-right margin-small-top">
            <div class="text-wrap-ellipsis margin-small-right">
                <span class="REPLACE">Spirit Medium Services</span>
            </div>
            <i class="symbol symbol-plus"></i>
        </a>
        <a href="#" class="btn btn-primary-outline margin-small-right margin-small-top">
            <div class="text-wrap-ellipsis margin-small-right">
                <span class="REPLACE">Jollibee</span>
            </div>
            <i class="symbol symbol-plus"></i>
        </a>
        <a href="#" class="btn btn-primary-outline margin-small-right margin-small-top">
            <div class="text-wrap-ellipsis margin-small-right">
                <span class="REPLACE">Eat your hamburgers Apollo</span>
            </div>
            <i class="symbol symbol-plus"></i>
        </a>
        <a href="#" class="btn btn-primary-outline margin-small-right margin-small-top">
            <div class="text-wrap-ellipsis margin-small-right">
                <span class="REPLACE">Can defeat Thanos</span>
            </div>
            <i class="symbol symbol-plus"></i>
        </a>

    <div class="text-align-right">
        <button class="btn btn-primary">Save</button>
    </div>
</form>
