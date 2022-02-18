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