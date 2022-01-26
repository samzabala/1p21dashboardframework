
    <form action="" class="bulk-editor text-align-center">
        <h1 class="no-margin-y">Import List</h1>
        <!-- Form -->
            <div class="input-wrapper input-wrapper-vertical input-wrapper-block p">
                <label for="bulk-file" class="input-label">Import companies from a file</label>
                <div class="input-group input-group-responsive input-group-horizontal">
                    <input type="file" name="bulk-file"  id="bulk-file" class="text-align-center input input-single-line" />
                </div>
            </div>
        <!-- Sample -->
            <p>
                <a href="#REPLACE">Download sample file</a>
            </p>
        <!-- Submit -->
            <button type="submit" class="btn btn-primary">Upload File</button>

        <!-- Notification scroll -->
            <!-- @if has notifications -->
                <hr>
                <div class="overflow-y-auto text-align-initial" style="max-height: 16rem;">
                    <!-- @alert: info -->
                        <?php app_get_component('components/alert-basic','',false,array(
                            'type' => 'info',
                            'content' => 'Basic. not that important but just so you know',
                        )); ?>
                    <!-- @alert: error -->
                        <?php app_get_component('components/alert-basic','',false,array(
                            'type' => 'error',
                            'content' => 'File type not accepted.',
                        )); ?>
                    <!-- @alert: caution -->
                        <?php app_get_component('components/alert-basic','',false,array(
                            'type' => 'caution',
                            'content' => 'Unrecognized character on line 420',
                        )); ?>
                    <!-- @alert: success -->
                        <?php app_get_component('components/alert-basic','',false,array(
                            'type' => 'success',
                            'content' => 'CSV import completed!',
                        )); ?>



                            <?php app_get_component('components/alert-basic','',false,array(
                                'type' => 'error',
                                'content' => 'Hot mess express at line 69',
                            )); ?>
                            <?php app_get_component('components/alert-basic','',false,array(
                                'type' => 'caution',
                                'content' => 'Bruno mention on row 9. we don\'t talk about Bruno no no no...',
                            )); ?>
                            <?php app_get_component('components/alert-basic','',false,array(
                                'type' => 'success',
                                'content' => 'I\'m just trying to fill this up so you can see the scrolly boi work',
                            )); ?>
                            <?php app_get_component('components/alert-basic','',false,array(
                                'type' => 'caution',
                                'content' => 'Huwag banggitin si Bruno \'wag \'wag \'wag... Huwag banggitin si Bruno.. ',
                            )); ?>
                            <?php app_get_component('components/alert-basic','',false,array(
                                'type' => 'success',
                                'content' => 'BUTT',
                            )); ?>
                            <?php app_get_component('components/alert-basic','',false,array(
                                'type' => 'info',
                                'content' => 'Noong kasalan day',
                            )); ?>
                            <?php app_get_component('components/alert-basic','',false,array(
                                'type' => 'success',
                                'content' => '(shet babe ang wedding day)',
                            )); ?>
                            <?php app_get_component('components/alert-basic','',false,array(
                                'type' => 'info',
                                'content' => 'We were making ready at wala nung ulap sa may sky',
                            )); ?>
                            <?php app_get_component('components/alert-basic','',false,array(
                                'type' => 'success',
                                'content' => '(Bawal ang ulap sa sky)',
                            )); ?>
                            <?php app_get_component('components/alert-basic','',false,array(
                                'type' => 'caution',
                                'content' => 'Siya\'y dumating na may mischievous grin',
                            )); ?>
                            <?php app_get_component('components/alert-basic','',false,array(
                                'type' => 'success',
                                'content' => 'BAGYERRRRRR',
                            )); ?>
                            <?php app_get_component('components/alert-basic','',false,array(
                                'type' => 'error',
                                'content' => 'You telling this story or am I?',
                            )); ?>
                            <?php app_get_component('components/alert-basic','',false,array(
                                'type' => 'success',
                                'content' => 'I\'m sorry, mi vida, go on',
                            )); ?>
                            <?php app_get_component('components/alert-basic','',false,array(
                                'type' => 'caution',
                                'content' => 'ᜐᜊᜒ ᜈ᜔ᜌ ᜋᜓᜃ᜔ᜑᜅ᜔ ᜋᜌ᜔ rain',
                            )); ?>
                            <?php app_get_component('components/alert-basic','',false,array(
                                'type' => 'success',
                                'content' => 'why did he tell us?',
                            )); ?>
                            <?php app_get_component('components/alert-basic','',false,array(
                                'type' => 'caution',
                                'content' => 'at binaha ang aking brain',
                            )); ?>
                            <?php app_get_component('components/alert-basic','',false,array(
                                'type' => 'success',
                                'content' => 'Abuela, get the umbrellas',
                            )); ?>
                            <?php app_get_component('components/alert-basic','',false,array(
                                'type' => 'error',
                                'content' => 'Kinasal, may hurricane',
                            )); ?>
                            <?php app_get_component('components/alert-basic','',false,array(
                                'type' => 'info',
                                'content' => 'sobrang joyous day, pero anyway',
                            )); ?>
                            <?php app_get_component('components/alert-basic','',false,array(
                                'type' => 'error',
                                'content' => 'ᜑᜓᜏᜄ᜔ ᜊᜅ᜔ᜄᜒᜆᜒᜈ᜔ ᜐᜒ ᜊ᜔ᜍᜓᜈ᜔o ᜏᜄ᜔ ᜏᜄ᜔ ᜏᜄ᜔',
                            )); ?>
                            <?php app_get_component('components/alert-basic','',false,array(
                                'type' => 'error',
                                'content' => 'WE DON\'T TALK ABOUT BRUNO SABI',
                            )); ?>
                </div>
</form>
    <!-- Modal Close -->
        <div class="text-align-right margin-top">
            <button class="btn btn-primary btn-block" data-toggle-modal-default-close  data-toggle-alert-close-all >Ok, I'm done</button>
        </div>