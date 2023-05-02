
<!-- 
@IMPORT

SCSS:
		@import 'framework/src/scss/_thumbnail';


-->
<!-- @PLACEHOLDER -->
<?php
//args. feel free to modify as needed
$defs = array(
	'image' => FWAPPS_ROOT_URL.'/placeholder/profiles/team-des-jenn.jpg',
	'initials' => 'PN'
);

$args = app_parse_args($data,$defs);
?>					
<div class="thumbnail thumbnail-micro">
	<!-- @IF has profile imahe -->
	<?php if($args['image']): ?>
		<div class="thumbnail-image">
			<img class="profile-image" src="<?=$args['image'] ?>" alt="">
		</div>
	
	<!-- @ELSE -->
	<?php else: ?>
		<span class="thumbnail-text profile-name-initial">
			<span class="REPLACE"><?= $args['initials'] ?></span>
		</span>

	<?php endif; ?>
</div>