<?php
$defs = array(
	//@param post - type of single achuchuchu
	'type' => 'other',
);

$args = app_parse_args($data,$defs);
?>
<div class="position-relative input-social">

	<div class="grid grid-flex grid-compact grid-flex-fixed">
		<div class="grid-col-3">
			<a data-toggle-dropdown class="flex-1-1 btn btn-block btn-primary-outline">
				<!-- 
					@NOTE
					.contact-social-btn-content.contact-social-btn-content-[SOCIALMEDIATYPE]
						
					classes to remove
						`display-none` => if contact-social[REPLACEINDEX]-type matches classes type
					-->
					<span class="
					contact-social-btn-content
					contact-social-btn-content-facebook
					<?= $args['type'] !== 'facebook' ? 'display-none' : '' ?>
					">
						<img src="<?=app_get_uri(); ?>/assets/images/icon-facebook.svg" alt="" />
						&nbsp;Facebook
					</span>


					<span class="
					contact-social-btn-content
					contact-social-btn-content-linkedin
					<?= $args['type'] !== 'linkedin' ? 'display-none' : '' ?>
					">
						<img src="<?=app_get_uri(); ?>/assets/images/icon-linkedin.svg" alt="" />
						&nbsp;Linkedin
					</span>


					<span class="
					contact-social-btn-content
					contact-social-btn-content-twitter
					<?= $args['type'] !== 'twitter' ? 'display-none' : '' ?>
					">
						<img src="<?=app_get_uri(); ?>/assets/images/icon-twitter.svg" alt="" />
						&nbsp;Twitter
					</span>

					<span class="
					contact-social-btn-content
					contact-social-btn-content-google
					<?= $args['type'] !== 'google' ? 'display-none' : '' ?>
					">
						<img src="<?=app_get_uri(); ?>/assets/images/icon-google.svg" alt="" />
						&nbsp;Google
					</span>

					<span class="
					contact-social-btn-content
					contact-social-btn-content-other
					<?= $args['type'] !== 'other' ? 'display-none' : '' ?>
					">
						<i class="symbol symbol-hyperlink"></i>
						&nbsp;Other
					</span>

				<i class="symbol symbol-caret-down"></i>
			</a>
			<div class="dropdown">
				<ul class="list-group list-group-toggle">

					<li class="dropdown-purger <?= $args['type'] == 'faceook' ? 'active' : '' ?>">
						<a href="#">Facebook</a>
					</li>

					<li class="dropdown-purger <?= $args['type'] == 'linkedin' ? 'active' : '' ?>">
						<a href="#">Linkedin</a>
					</li>

					<li class="dropdown-purger <?= $args['type'] == 'twitter' ? 'active' : '' ?>">
						<a href="#">Twitter</a>
					</li>

					<li class="dropdown-purger <?= $args['type'] == 'google' ? 'active' : '' ?>">
						<a href="#">Google</a>
					</li>

					<li class="dropdown-purger <?= $args['type'] == 'other' ? 'active' : '' ?>">
						<a href="#">Other</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="grid-col-9">

			<input type="hidden" name="contact-social[REPLACEINDEX]-type">
			<input type="url" class="input input-box input-block" name="contact-social[REPLACEINDEX]-url" value="REPLACE">
		</div>
	</div>
</div>