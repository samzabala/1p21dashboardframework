<?php app_get_component('components/module-function-dropdown','',false,array(
	'label' => 'Filter By',
	'title' => 'Status',
    'count' => 1,
	'items' => array(
        'Prospect',
        'Hot Prospect',
        'Lead',
        'Client',
        'Former Client',
        'Not Contacted',
        'Unqualified',
        'Pitched and Lost',
        'Ghosted',
    ),
)) ?>

<?php app_get_component('components/module-function-dropdown','',false,array(
	'title' => 'Stage',
    'count' => 1,
	'items' => array(
        'Outreach',
        'Pitched',
        'Proposal Sent',
        'Contract Sent'
    ),
)) ?>

<?php app_get_component('components/module-function-dropdown','',false,array(
	'title' => 'Business Type',
    'count' => 1,
	'items' => array(
        'Personal Injury',
        'Possession',
        'Mass murder',
        'Perjury',
        'Malefic',
        'Theft',
        'Staged kidnapping',
        'Enforced suicide',
        'Incrimination',
        'Abuse',
        'Identity theft',
        'Conspiracy',
        'Tampering with a crime scene',
        'Obstruction of justice',
        'Assault',
        'Arson',
    ),
)) ?>


<?php app_get_component('components/module-function-dropdown','',false,array(
	'title' => 'Owner',
    'slug' => 'acctowner',
    'count' => 1,
	'items' => array(
        'All Users',
        'Yanni Yogi',
        'El Tigre',
        'Matt Engarde',
        'Frank Sahwit',
        'Dee Vasquez',
    ),
)) ?>

<?php app_get_component('components/module-function-dropdown','',false,array(
	'title' => 'State',
    'count' => 1,
	'items' => array(
        'California',
        'Everyone Else'
    ),
)) ?>

<?php app_get_component('components/module-function-dropdown','',false,array(
	'title' => 'Tag',
    'count' => 1,
	'items' => array(
        'Talent Agency',
        'Law Firm',
        'Japanifornia Locations',
        'Herlock Sholmes',
        'Metal Detector',
        'Spirit Medium Services',
        'Jollibee',
        'Eat your hamburgers Apollo',
        'Can defeat Thanos',
        'Defense Attorney for Orcas in Los Angeles California',
    ),
)) ?>


<div class="module-function function-filter-location position-relative">
        <button data-toggle-dropdown class="input input-select input-block-mobile">
            Locations
            <!-- @if one or more Owner is checked -->
            <span class="filter-companies-location-active">
                <!-- @NOTE: filter count -->
                (<span class="REPLACE">1</span>)
            </span>
        </button>
        <div class="dropdown dropdown-top-flush dropdown-right" data-dropdown-width="300px" data-dropdown-max-height="30em">
            <div class="input-wrapper input-wrapper-block input-wrapper-vertical margin-small-bottom">
                <label for="company-location-state" class="input-label">State</label>
                <select name="state" id="company-location-state" class="input input-single-line input-select">
                    <option value="">Select</option>
                    <!-- @NOTE: options are placeholders. replace as needed -->
                        <option value="AL">Alabama</option>
                        <option value="AK">Alaska</option>
                        <option value="AZ">Arizona</option>
                        <option value="AR">Arkansas</option>
                        <option value="CA">California</option>
                        <option value="CO">Colorado</option>
                        <option value="CT">Connecticut</option>
                        <option value="DE">Delaware</option>
                        <option value="DC">District Of Columbia</option>
                        <option value="FL">Florida</option>
                        <option value="GA">Georgia</option>
                        <option value="HI">Hawaii</option>
                        <option value="ID">Idaho</option>
                        <option value="IL">Illinois</option>
                        <option value="IN">Indiana</option>
                        <option value="IA">Iowa</option>
                        <option value="KS">Kansas</option>
                        <option value="KY">Kentucky</option>
                        <option value="LA">Louisiana</option>
                        <option value="ME">Maine</option>
                        <option value="MD">Maryland</option>
                        <option value="MA">Massachusetts</option>
                        <option value="MI">Michigan</option>
                        <option value="MN">Minnesota</option>
                        <option value="MS">Mississippi</option>
                        <option value="MO">Missouri</option>
                        <option value="MT">Montana</option>
                        <option value="NE">Nebraska</option>
                        <option value="NV">Nevada</option>
                        <option value="NH">New Hampshire</option>
                        <option value="NJ">New Jersey</option>
                        <option value="NM">New Mexico</option>
                        <option value="NY">New York</option>
                        <option value="NC">North Carolina</option>
                        <option value="ND">North Dakota</option>
                        <option value="OH">Ohio</option>
                        <option value="OK">Oklahoma</option>
                        <option value="OR">Oregon</option>
                        <option value="PA">Pennsylvania</option>
                        <option value="RI">Rhode Island</option>
                        <option value="SC">South Carolina</option>
                        <option value="SD">South Dakota</option>
                        <option value="TN">Tennessee</option>
                        <option value="TX">Texas</option>
                        <option value="UT">Utah</option>
                        <option value="VT">Vermont</option>
                        <option value="VA">Virginia</option>
                        <option value="WA">Washington</option>
                        <option value="WV">West Virginia</option>
                        <option value="WI">Wisconsin</option>
                        <option value="WY">Wyoming</option>
                </select>
            </div>

            <div class="input-wrapper input-wrapper-block input-wrapper-vertical p">
                <label for="company-location-city" class="input-label">City</label>
                <!-- @NOTE hidden input field here if needed -->
                <input  name="city" id="company-location-city" type="text" class="flex-3-0 input input-single-line input-select input-block" list="filter-companies-city-list">
                    <datalist id="filter-companies-city-list">

                        <!-- @NOTE: options are placeholders. replace as needed -->
                            <option value="Naga City">
                            <option value="Legazpi City">
                            <option value="Manila">
                            <option value="Sitti">
                            <option value="CD">
                            <option value="Seedy">
                            <option value="See tea">
                            <option value="Pili">
                            <option value="Tinambac">
                            <option value="Quezon">
                            <option value="Daet">
                            <option value="Barako">
                    </datalist>	
            </div>

            <div>
                <button type="submit" class="btn btn-primary">Add Location</button>
            </div>
        </div>
</div>