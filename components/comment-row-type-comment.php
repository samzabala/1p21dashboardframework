<div
class="comment-header flex-grid flex-grid-compact align-items-center flex-grid-fixed flex-nowrap align-items-center">
	<div class="flex-child flex-1-1 no-margin-top">
		<div
		class="flex-grid flex-grid-compact flex-grid-fixed flex-nowrap align-items-space-around flex-grid-no-gutter-y">
			<div class="no-margin-top flex-child">
				<?php app_get_component('components/profile-image-small'); ?>
			</div>
			<div class="no-margin-top flex-child text-wrap-ellipsis font-weight-400 no-margin-y color-primary-hover">
				<a class="color-inherit font-weight-700" href="<?=app_create_link(array('template'=>'profile')) ?>">
					<span class="REPLACE">Profile name</span>
				</a>
				<p class="no-margin comment-row-meta color-neutral">
					<span class="comment-row-meta-date">
						<span class="REPLACE">4/20/69</span>
					</span>
					at
					<span class="comment-row-meta-time">
						<span class="REPLACE">6:66 pm</span>
					</span>
				</p>
			</div>
		</div>
	</div>

	<!-- @if user can edit comment -->
	<div class="flex-child flex-0-0 no-margin-top">
		<?php app_get_component('components/tooltip-action'); ?>
	</div>
</div>

<div class="comment-body p">
			
	<div class="REPLACE">
		<p>
			Listen, Morty, I hate to break it to you, but what people call love is just a chemical reaction that compels animals to breed. It hits hard, Morty, then it slowly fades, leaving you stranded in a failing marriage. I did it. Your parents are gonna do it
		</p>
	</div>
</div>