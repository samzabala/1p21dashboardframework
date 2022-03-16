<div id="timetracker-favorites" class="timetracker-offset-wrapper margin-bottom">
    <div class="
        background-gradient-45-from-secondary-to-primary
        radius-large-bottom theme-inverse timetracker-offset-block padding-large-y"></div>
    <div class="timetracker-offset-adjacent">
        <div class="container padding-x timetracker-offset-adjacent-crossover">
            <div class="module">
                <div class="module-header">
                    <div class="module-title text-align-center">My Favorites</div>
                </div>
                <div class="module-content no-padding-x no-padding-bottom">
                    <!-- @if has logs -->
                        <?php app_get_component('components/list-logs','',false,array(
                            'has_toggle' => true
                        )) ?>
                    <!-- @else -->
                        <div class="text-align-center font-style-italic color-neutral padding">
                            No favorites yet
                        </div>
                </div>
            </div>
        </div>
    </div>
    
</div>