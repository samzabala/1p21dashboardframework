
    <form action="" class="bulk-editor">
        <h1 class="no-margin-y">Import List</h1>
        <p>Import companies from a file</p>
        <!-- Form -->
            <div class="input-wrapper input-wrapper-vertical input-wrapper-block p">
                <label for="bulk-file" class="input-label">CSV or Excel File</label>
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

                <!-- @if has successful rows -->
                    <h5 class="no-margin-top color-success">
                        <i class="symbol symbol-success"></i> <span class="REPLACE">420</span> Companies successfully imported
                    </h5>
                <!-- @if has failed rows -->
                    <h5 class="no-margin-top color-error">
                        <i class="symbol symbol-error"></i> <span class="REPLACE">69</span> Companies failed to import due to errors
                    </h5>


                <!-- @if failed rows -->
                <p>The following records failed to import</p>
                <div class="overflow-y-auto list-group list-group-striped border-style-solid border-width-thin border-color-neutral-alpha-2" style="max-height: 30rem;">
                    <!-- @loop -->
                        <div class="list-group-item padding no-border-bottom">

                            <pre class=" background-transparent no-padding"><b>Row:</b><br>Wright Anything Agency,+1234567890,Phoenix Wright,Other info</pre>

                            <ul class="bulk-error-info">
                                <li><a href="#">'Wright Anything Agency'</a> is already taken</li>
                                <!-- @placeholder -->
                                    <li><a href="#">'Wright Anything Agency'</a> has another error</li>
                                    <li>Bruno was mentioned. we don't talk about Bruno no no no...</li>
                            </ul>
                        </div>


                        <?php for($i=1; $i<=4; $i++){ ?>
                            <div class="list-group-item padding no-border-bottom">

                                <pre class="bulk-error-row background-transparent no-padding"><b>Row:</b><br>Wright Anything Agency,+1234567890,Phoenix Wright,Other info</pre>

                                <ul class="bulk-error-info">
                                    <li>Huwag banggitin si Bruno 'wag 'wag 'wag</li>
                                    <li>ᜑᜓᜏᜄ᜔ ᜊᜅ᜔ᜄᜒᜆᜒᜈ᜔ ᜐᜒ ᜊ᜔ᜍᜓᜈ᜔o ᜏᜄ᜔ ᜏᜄ᜔ ᜏᜄ᜔</li>
                                    <li>입에 담지마 브루노 노노노</li>
                                    <li>No corran in the hospital Bruno</li>
                                </ul>
                            </div>
                        <?php } ?>
                </div>
</form>
    <!-- Modal Close -->
        <div class="text-align-right margin-top">
            <button class="btn btn-primary btn-block" data-toggle-modal-default-close  data-toggle-alert-close-all >Ok, I'm done</button>
        </div>