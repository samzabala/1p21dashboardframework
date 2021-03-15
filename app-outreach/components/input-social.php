<?php
$defs = array(
	//@param post - type of single achuchuchu
	'type' => 'other',
);

$args = app_parse_args($data,$defs);
?>
<div class="position-relative input-social">

	<div class="flex-grid flex-grid-compact flex-grid-fixed">
		<div class="flex-col-3">
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
						<img class="lazy lazy-svg hide-hover" data-src="<?=app_get_uri(); ?>/assets/images/icon-facebook-currentColor.svg" alt="" />
						&nbsp;Facebook
					</span>


					<span class="
					contact-social-btn-content
					contact-social-btn-content-linkedin
					<?= $args['type'] !== 'linkedin' ? 'display-none' : '' ?>
					">
						<img class="lazy lazy-svg hide-hover" data-src="<?=app_get_uri(); ?>/assets/images/icon-linkedin-currentColor.svg" alt="" />
						&nbsp;Linkedin
					</span>


					<span class="
					contact-social-btn-content
					contact-social-btn-content-twitter
					<?= $args['type'] !== 'twitter' ? 'display-none' : '' ?>
					">
						<img class="lazy lazy-svg hide-hover" data-src="<?=app_get_uri(); ?>/assets/images/icon-twitter-currentColor.svg" alt="" />
						&nbsp;Twitter
					</span>

					<span class="
					contact-social-btn-content
					contact-social-btn-content-google
					<?= $args['type'] !== 'google' ? 'display-none' : '' ?>
					">
						<img class="lazy lazy-svg hide-hover" data-src="<?=app_get_uri(); ?>/assets/images/icon-google-currentColor.svg" alt="" />
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
		<div class="flex-col-9">

			<input type="hidden" name="contact-social[REPLACEINDEX]-type">
			<input type="url" class="input input-single-line input-block" name="contact-social[REPLACEINDEX]-url" value="REPLACE">
		</div>
	</div>
</div>