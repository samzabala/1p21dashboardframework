
<?php

//args. feel free to modify as needed
$defs = array(
	//@param href - duh
	'href' => app_create_link(array('template'=>'profile')),

	//@param data-toggle - duh
		'data-toggle' => false
);

$args = app_parse_args($data,$defs);
?>
 <a class="thumbnail thumbnail-micro" href="<?=$args['href'] ?>"
	<?php if($args['data-toggle']): ?>
		data-toggle="<?=$args['data-toggle'] ?>"
	<?php endif; ?>>
	<!-- @IF has profile imahe -->
	<div class="thumbnail-image">

		<img class="profile-image" data-src="<?=FWAPPS_ROOT_URL ?>/placeholder/profiles/team-des-jenn.jpg" alt="">
	</div>

	<!-- @ELSE -->
	<span class="thumbnail-text profile-name-initial">
		<span class="REPLACE">PN</span>
	</span>
</a>