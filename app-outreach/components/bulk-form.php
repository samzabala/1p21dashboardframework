
    <form action="" class="bulk-editor">
        <h1 class="no-margin-y">Import List</h1>
        <div class="flex-grid flex-grid-no-gutter-y justify-content-space-between">
            <div class="flex-child">

                <p>Import companies from a file</p>
            </div>
            <div class="flex-child">
                <p>
                    <a href="#REPLACE">Download sample file</a>
                </p>
            </div>
        </div>
        <!-- Form -->
            <div class="input-wrapper input-wrapper-vertical input-wrapper-block p">
                <label for="bulk-file" class="input-label">CSV or Excel File</label>
                <div class="input-group input-group-responsive input-group-horizontal">
                    <input type="file" name="bulk-file"  id="bulk-file" class="text-align-center input input-single-line" />
                    <button type="submit" class="btn btn-primary">Import File</button>
                </div>
            </div>
        <!-- Submit -->

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
                    <div class="padding background-theme-contrast p">
                            <strong>The following records below failed to import.</strong> You can <a href="#REPLACE">download a file of the failures here</a> so you can correct and re-upload the problematic records.
                    </div>

                <div class="error-container overflow-auto" style="max-height: 30em">

                    <!-- @loop div -->
                    <?php for($i = 1; $i <3; $i++): ?>
                    <div class="p">

                        <h5 class="no-margin-top color-error">
                            <span class="REPLACE">Accounts with this name already exist</span>
                        </h5>

                        <div class="table-wrapper" style="max-height: 10em">
                            <table class="text-nowrap">
                                <thead>
                                    <tr class="position-sticky offset-0-top">
                                        <th class="background-theme-contrast">&nbsp; <span class="sr-only">Row Number</span></th>
                                        <th class="background-theme-contrast">Company</th>
                                        <th class="background-theme-contrast">Stage</th>
                                        <th class="background-theme-contrast">Website</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- @loop tr -->
                                    <tr>
                                        <td>
                                            <span class="REPLACE">69</span>
                                        </td>
                                        <td>
                                            <a class="color-inherit" href="<?= app_create_link(array('template'=>'company-detail')) ?>">
                                                <span class="REPLACE">Wright Anything Agency</span>
                                            </a>
                                        </td>
                                        <td>
                                            <span class="REPLACE">Lorem Ipsum</span>
                                        </td>
                                        <td>
                                            <span class="REPLACE">ace-attorney.com</span>
                                        </td>
                                    </tr>
                                        <PLACEHOLDER>
                                            
                                        <tr>
                                                <td>
                                                    <span class="REPLACE">69</span>
                                                </td>
                                                <td>
                                                    <a class="color-inherit" href="<?= app_create_link(array('template'=>'company-detail')) ?>">
                                                        <span class="REPLACE">Wright Anything Agency</span>
                                                    </a>
                                                </td>
                                                <td>
                                                    <span class="REPLACE">Lorem Ipsum</span>
                                                </td>
                                                <td>
                                                    <span class="REPLACE">ace-attorney.com</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="REPLACE">69</span>
                                                </td>
                                                <td>
                                                    <a class="color-inherit" href="<?= app_create_link(array('template'=>'company-detail')) ?>">
                                                        <span class="REPLACE">Wright Anything Agency</span>
                                                    </a>
                                                </td>
                                                <td>
                                                    <span class="REPLACE">Lorem Ipsum</span>
                                                </td>
                                                <td>
                                                    <span class="REPLACE">ace-attorney.com</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="REPLACE">69</span>
                                                </td>
                                                <td>
                                                    <a class="color-inherit" href="<?= app_create_link(array('template'=>'company-detail')) ?>">
                                                        <span class="REPLACE">Wright Anything Agency</span>
                                                    </a>
                                                </td>
                                                <td>
                                                    <span class="REPLACE">Lorem Ipsum</span>
                                                </td>
                                                <td>
                                                    <span class="REPLACE">ace-attorney.com</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="REPLACE">69</span>
                                                </td>
                                                <td>
                                                    <a class="color-inherit" href="<?= app_create_link(array('template'=>'company-detail')) ?>">
                                                        <span class="REPLACE">Wright Anything Agency</span>
                                                    </a>
                                                </td>
                                                <td>
                                                    <span class="REPLACE">Lorem Ipsum</span>
                                                </td>
                                                <td>
                                                    <span class="REPLACE">ace-attorney.com</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="REPLACE">69</span>
                                                </td>
                                                <td>
                                                    <a class="color-inherit" href="<?= app_create_link(array('template'=>'company-detail')) ?>">
                                                        <span class="REPLACE">Wright Anything Agency</span>
                                                    </a>
                                                </td>
                                                <td>
                                                    <span class="REPLACE">Lorem Ipsum</span>
                                                </td>
                                                <td>
                                                    <span class="REPLACE">ace-attorney.com</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="REPLACE">69</span>
                                                </td>
                                                <td>
                                                    <a class="color-inherit" href="<?= app_create_link(array('template'=>'company-detail')) ?>">
                                                        <span class="REPLACE">Wright Anything Agency</span>
                                                    </a>
                                                </td>
                                                <td>
                                                    <span class="REPLACE">Lorem Ipsum</span>
                                                </td>
                                                <td>
                                                    <span class="REPLACE">ace-attorney.com</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="REPLACE">69</span>
                                                </td>
                                                <td>
                                                    <a class="color-inherit" href="<?= app_create_link(array('template'=>'company-detail')) ?>">
                                                        <span class="REPLACE">Wright Anything Agency</span>
                                                    </a>
                                                </td>
                                                <td>
                                                    <span class="REPLACE">Lorem Ipsum</span>
                                                </td>
                                                <td>
                                                    <span class="REPLACE">ace-attorney.com</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="REPLACE">69</span>
                                                </td>
                                                <td>
                                                    <a class="color-inherit" href="<?= app_create_link(array('template'=>'company-detail')) ?>">
                                                        <span class="REPLACE">Wright Anything Agency</span>
                                                    </a>
                                                </td>
                                                <td>
                                                    <span class="REPLACE">Lorem Ipsum</span>
                                                </td>
                                                <td>
                                                    <span class="REPLACE">ace-attorney.com</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="REPLACE">69</span>
                                                </td>
                                                <td>
                                                    <a class="color-inherit" href="<?= app_create_link(array('template'=>'company-detail')) ?>">
                                                        <span class="REPLACE">Wright Anything Agency</span>
                                                    </a>
                                                </td>
                                                <td>
                                                    <span class="REPLACE">Lorem Ipsum</span>
                                                </td>
                                                <td>
                                                    <span class="REPLACE">ace-attorney.com</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="REPLACE">69</span>
                                                </td>
                                                <td>
                                                    <a class="color-inherit" href="<?= app_create_link(array('template'=>'company-detail')) ?>">
                                                        <span class="REPLACE">Wright Anything Agency</span>
                                                    </a>
                                                </td>
                                                <td>
                                                    <span class="REPLACE">Lorem Ipsum</span>
                                                </td>
                                                <td>
                                                    <span class="REPLACE">ace-attorney.com</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="REPLACE">69</span>
                                                </td>
                                                <td>
                                                    <a class="color-inherit" href="<?= app_create_link(array('template'=>'company-detail')) ?>">
                                                        <span class="REPLACE">Wright Anything Agency</span>
                                                    </a>
                                                </td>
                                                <td>
                                                    <span class="REPLACE">Lorem Ipsum</span>
                                                </td>
                                                <td>
                                                    <span class="REPLACE">ace-attorney.com</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="REPLACE">69</span>
                                                </td>
                                                <td>
                                                    <a class="color-inherit" href="<?= app_create_link(array('template'=>'company-detail')) ?>">
                                                        <span class="REPLACE">Wright Anything Agency</span>
                                                    </a>
                                                </td>
                                                <td>
                                                    <span class="REPLACE">Lorem Ipsum</span>
                                                </td>
                                                <td>
                                                    <span class="REPLACE">ace-attorney.com</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="REPLACE">69</span>
                                                </td>
                                                <td>
                                                    <a class="color-inherit" href="<?= app_create_link(array('template'=>'company-detail')) ?>">
                                                        <span class="REPLACE">Wright Anything Agency</span>
                                                    </a>
                                                </td>
                                                <td>
                                                    <span class="REPLACE">Lorem Ipsum</span>
                                                </td>
                                                <td>
                                                    <span class="REPLACE">ace-attorney.com</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="REPLACE">69</span>
                                                </td>
                                                <td>
                                                    <a class="color-inherit" href="<?= app_create_link(array('template'=>'company-detail')) ?>">
                                                        <span class="REPLACE">Wright Anything Agency</span>
                                                    </a>
                                                </td>
                                                <td>
                                                    <span class="REPLACE">Lorem Ipsum</span>
                                                </td>
                                                <td>
                                                    <span class="REPLACE">ace-attorney.com</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="REPLACE">69</span>
                                                </td>
                                                <td>
                                                    <a class="color-inherit" href="<?= app_create_link(array('template'=>'company-detail')) ?>">
                                                        <span class="REPLACE">Wright Anything Agency</span>
                                                    </a>
                                                </td>
                                                <td>
                                                    <span class="REPLACE">Lorem Ipsum</span>
                                                </td>
                                                <td>
                                                    <span class="REPLACE">ace-attorney.com</span>
                                                </td>
                                            </tr>
                                        </PLACEHOLDER>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <?php endfor; ?>
                </div>
</form>