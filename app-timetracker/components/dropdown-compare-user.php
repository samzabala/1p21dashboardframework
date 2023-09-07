<!-- @PLACEHOLDER -->
<?php
//args. feel free to modify as needed
$defs = array(
	'image' => FWAPPS_ROOT_URL.'/placeholder/profiles/team-des-jenn.jpg',
	'initials' => 'PN',
	'has_user' => false,
);

$args = app_parse_args($data,$defs);
?>	
<div class="position-relative">
	<a href="#" data-toggle-dropdown class=" flex-xs align-items-center justify-content-center border-color-neutral-alpha-2 radius-small border-style-solid border-width-thin padding text-decoration-none color-inherit">
		<div class="flex-0-0">
			<!--  @if has user-->
			<?php if($args['has_user']): ?>
				<?php app_get_component('components/thumbnail-small','',false,array(
					'image' => $args['image']
				)); ?>
			<!-- @else -->
			<?php else: ?>
				<div class="thumbnail thumbnail-small">
					<div class="thumbnail-text">
						<i class="symbol symbol-search"></i>
					</div>
				</div>
			<?php endif; ?>
		</div>
		<div class="flex-1-1 padding-small-x">

			<!--  @if has user-->
			<?php if($args['has_user']): ?>
				<p class="h4 no-margin"><span class="REPLACE"><?= $args['name'] ?></span></p>
				<p class="no-margin"><?= $args['title'] ?></p>
			<!-- @else -->
			<?php else: ?>
				<p class="h4 no-margin font-weight-400">Search Member...</p>
			<?php endif; ?>
		</div>
		<div class="flex-0-0">
			<i class="font-size-large symbol symbol-arrow-down color-neutral"></i>
		</div>
	</a>
	
	<?php app_get_component('components/dropdown-list-users-search','',false,array(
		'position_placeholder' => 'Select Job Position',
		'list_position' => 
			false,	
			// array(
			// 	'Job Position',
			// 	'Another Position',
			// 	'Other Position',
			// 	'Account Manager',
			// 	'Super Spy',
			// 	'Assassin',
			// 	'Telepath',
			// 	'Lawyer',
			// 	'Writer',
			// 	'Judge',
			// 	'Diplomat',
			// 	'Nobel Prize Winner Physicist',
			// 	'President',
			// 	'Doctor',
			// 	'Beach',
			// 	'Reporter',
			// 	'Mermaid',
			// 	'Beach',
			// 	'Weird'
			// ),
		'search_placeholder' => 'Search Members',
		'allow_multiple' => false,
		'list_users' => array(
			array(
				'image' => FWAPPS_ROOT_URL.'/placeholder/profiles/team-des-jenn.jpg',
				'name' => 'Jenn Aquino',
				'title' => 'Associate Director'
			),
	
			array(
				'image' => FWAPPS_ROOT_URL.'/placeholder/profiles/team-dev-garrett.jpg',
				'name' => 'Garrett Cullen',
				'title' => 'Developer'
			),
			array(
				'image' => FWAPPS_ROOT_URL.'/placeholder/profiles/team-des-jenna.jpg',
				'name' => 'Jenna Edwards',
				'title' => 'Senior Designer'
			),
			array(
				'image' => FWAPPS_ROOT_URL.'/placeholder/profiles/team-des-stacy.jpg',
				'name' => 'Stacy Garcia',
				'title' => 'Designer'
			),
	
			array(
				'image' => FWAPPS_ROOT_URL.'/placeholder/files/shrek.jpg',
				'name' => 'Nikky Hwang',
				'title' => 'Developer'
			),
	
			array(
				'image' => FWAPPS_ROOT_URL.'/placeholder/profiles/team-des-chuy.jpg',
				'name' => 'Jesus Maldonado',
				'title' => 'Designer'
			),
	
			array(
				'image' => FWAPPS_ROOT_URL.'/placeholder/files/shrek.jpg',
				'name' => 'Paola Moreno',
				'title' => 'Designer'
			),
	
			array(
				'image' => FWAPPS_ROOT_URL.'/placeholder/profiles/team-dev-nadia.jpg',
				'name' => 'Nadia Rodriguez',
				'title' => 'Developer'
			),
	
			array(
				'image' => FWAPPS_ROOT_URL.'/placeholder/files/shrek.jpg',
				'name' => 'Mark Silva',
				'title' => 'Developer'
			),
	
			array(
				'image' => FWAPPS_ROOT_URL.'/placeholder/profiles/team-dev-sam.jpg',
				'name' => 'Sam Zabala',
				'title' => 'Developer'
			),
	
			array(
				'image' => FWAPPS_ROOT_URL.'/placeholder/files/donk.jpg',
				'name' => 'Shrek',
				'title' => 'Somebody'
			),
			array(
				'image' => FWAPPS_ROOT_URL.'/placeholder/files/wright.jpg',
				'name' => 'Phoenix Wright',
				'title' => 'Lawyer'
			),
			array(
				'image' => FWAPPS_ROOT_URL.'/placeholder/files/wright.jpg',
				'name' => 'Pigeon Wrong',
				'title' => 'Anti-Lawyer'
			),
			array(
				'image' => FWAPPS_ROOT_URL.'/placeholder/files/shrek.jpg',
				'name' => 'Miles Edgeworth',
				'title' => 'Alpha Prosecutor or something'
			),
			array(
				'image' => FWAPPS_ROOT_URL.'/placeholder/files/shrek.jpg',
				'name' => 'Kilometer Dulluselessness',
				'title' => 'Anti Prosecutor'
			),
			array(
				'image' => FWAPPS_ROOT_URL.'/placeholder/files/shrek.jpg',
				'name' => 'Piolo Pascual',
				'title' => 'Handsome Actor'
			),
			array(
				'image' => FWAPPS_ROOT_URL.'/placeholder/files/shrek.jpg',
				'name' => 'Pedro Pascal',
				'title' => 'Also Handsome Actor'
			),
			array(
				'image' => FWAPPS_ROOT_URL.'/placeholder/files/shrek.jpg',
				'name' => 'Loid Forger',
				'title' => 'Super Spy'
			),
			array(
				'image' => FWAPPS_ROOT_URL.'/placeholder/files/shrek.jpg',
				'name' => 'Yor Forger',
				'title' => 'Assassin'
			),
			array(
				'image' => FWAPPS_ROOT_URL.'/placeholder/files/shrek.jpg',
				'name' => 'Yuri Briar',
				'title' => 'Secret Polices'
			),
			array(
				'image' => FWAPPS_ROOT_URL.'/placeholder/files/shrek.jpg',
				'name' => 'Fiona Frost',
				'title' => 'Scary Spy'
			),
			array(
				'image' => FWAPPS_ROOT_URL.'/placeholder/files/shrek.jpg',
				'name' => 'Mario',
				'title' => 'Plumber and Expert Parkour Person'
			),
			array(
				'image' => FWAPPS_ROOT_URL.'/placeholder/files/shrek.jpg',
				'name' => 'Luigi',
				'title' => 'Also a Plumber and Expert Parkour Person though many say he\'s not as powerful as his kuya he actually jumps pretty high and he has this vacuum thing and apparently owns a mansion. Idk I believe in Luigi.'
			),
			array(
				'image' => FWAPPS_ROOT_URL.'/placeholder/files/shrek.jpg',
				'name' => 'Bowser',
				'title' => 'Peaches Peaches PeachesPeachesPeaches Peaches Peaches Peaches PeachesPeaches PeachesPeaches WaHH LAAAAHAAAVEYouuuu oOH'
			),
		)
	)); ?>
</div>


