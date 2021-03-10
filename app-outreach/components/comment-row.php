<?php
$defs = array(
	//@param post - type of single achuchuchu
	'is_pinned' => false, 
);

$args = app_parse_args($data,$defs);
?>
<!-- @NOTE
	classes to add
		`background-primary-alpha-1` => if comment is pinned

	@NOTE
		pinned comments are outputted first before u
 -->
<div
	class="comment-row padding border-color-theme-polar-contrast border-style-solid border-bottom border-width-thin-top
	<?= $args['is_pinned'] ? ' background-primary-alpha-1' : '' ?>
">
	<div class=" flex-grid flex-grid-compact align-items-flex-start flex-grid-fixed flex-nowrap position-relative">
		<div class="flex-child flex-0-0">
			<?php app_get_component('components/profile-image','micro'); ?>
		</div>
		<div class="flex-child flex-1-1">
			<p class="no-margin comment-row-meta">
				<a class="color-inherit font-weight-700" href="<?=app_create_link(array('template'=>'profile')) ?>">
					<span class="REPLACE">Profile name</span>
				</a>
				<span class="comment-row-meta-timespan color-neutral">
					<span class="REPLACE">2 hours ago</span>
				</span>
			</p>


			<div class="comment-body">
				<div class="REPLACE">
					<p>
						Tagged users like <a class="highlight highlight-primary" href="<?=app_create_link(array('template'=>'profile'))?>">@Beyonce Knowles</a> will be links to profiles with the classes <code>highlight highlight-primary</code> 
					</p>
					<p>
						Listen, Morty, I hate to break it to you, but what people call love is just a chemical reaction that compels animals to breed. It hits hard, Morty, then it slowly fades, leaving you stranded in a failing marriage. I did it. Your parents are gonna do it
					</p>
				</div>
			</div>
		</div>
			
		<div class="flex-child flex-0-0">
			<!-- @note
		
				classes to add
				`active` => when comment is pinned
			-->
			<div class="btn-group btn-group-toggle btn-group-horizontal btn-group-toggle-allow-no-active">
				<a href="" class="btn btn-symbol btn-default">
					<i class="symbol symbol-pin"></i>
				</a>
			</div>
		</div>
	</div>
</div>