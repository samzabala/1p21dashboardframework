<!--
Imports JS:

Button from framework/src/js/imports/button

-->
<?php
$defs = array(
	//@param post - type of single achuchuchu
	'is_pinned' => false, 
	'is_task' => false,
	'is_sms' => false,
	'is_my_sms' => false,
	'is_email_sent' => false,
	'is_email_received' => false,
	'has_attachments' => false,
	'has_long_body' => false,
);

$args = app_parse_args($data,$defs);
?>
<!-- @NOTE
	classes to add
		`background-primary-alpha-1` => if note is pinned

	@NOTE
		pinned notes are outputted first before u
 -->
<div
	class="note-row padding border-color-neutral-alpha-3 border-style-solid border-bottom border-width-thin-top pointer-reference
	<?= $args['is_pinned'] ? ' background-primary-alpha-1' : '' ?>
">
	<div class=" flex-grid flex-grid-compact align-items-flex-start flex-grid-fixed flex-nowrap position-relative">
		<div class="flex-child flex-0-0">
			<?php app_get_component('components/profile-image','micro'); ?>
		</div>
		<div class="flex-child flex-1-1">
			<div class="flex-grid flex-grid-no-gutter-y justify-content-space-between">
				<div class="flex-col-8">
					<p class="margin-small-top no-margin-bottom note-row-meta">
						<a class="color-inherit font-weight-700" href="<?=app_create_link(array('template'=>'profile')) ?>">
							<span class="REPLACE">Profile name</span>
						</a>
						<span class="note-row-meta-timespan color-neutral">
							<span class="REPLACE">2 hours ago</span>
						</span>
					</p>
				</div>
				<div class="flex-col-4 position-relative">

					<div class=" position-absolute offset-0-bottom offset-0-right">
						<span class="hide-not-hover">
							<?php app_get_component('components/dropdown-actions','',false,array(
								'button_classes' => 'btn-neutral-glassy',
								'links' => array(
									'Edit'
										=> 'class="dropdown-purger" href="#"',

									'Delete'
										=> 'class="dropdown-purger" href="#"',
										
									'&lt;Unpin | Pin&gt; note'
										=> 'class="dropdown-purger" href="#"',
								)
							)) ?>

						</span>
						
						<?php if($args['is_pinned']): ?>

							<span class="spacer">&nbsp;</span>

							<div class="btn-group btn-group-toggle btn-group-horizontal btn-group-toggle-allow-no-active">
								<a href="#" class="btn btn-symbol btn-neutral-glassy
								<?= $args['is_pinned'] ? ' active' : '' ?>
								">
									<i class="symbol symbol-pin"></i>
								</a>
							</div>
						<?php endif; ?>
					</div>
				</div>
			</div>


			<div class="note-body margin-large-top">
				<?php if($args['is_task']): ?>
					<?php app_get_component('components/note-row-task-header'); ?>
				<?php endif; ?>
				<?php if($args['is_sms'] || $args['is_my_sms']): ?>
					<?php app_get_component('components/note-row-sms-header'); ?>
				<?php endif; ?>
				<?php if($args['is_email_sent']): ?>
					<?php app_get_component('components/note-row-email-header-sent'); ?>
				<?php endif; ?>
				<?php if($args['is_email_received']): ?>
					<?php app_get_component('components/note-row-email-header-received'); ?>
				<?php endif; ?>

				
				<?php if($args['is_sms']): ?>
					<div class="flex-grid flex-grid-compact justify-content-flex-start">
						<div class="flex-child flex-0-0">
							<div class="outreach-sms-bubble outreach-sms-bubble-left radius-small background-theme-contrast">
								<span class="REPLACE">I will become hokage</span>
							</div>
		
						</div>
					</div>
				<?php elseif($args['is_my_sms']): ?>
					<div class="flex-grid flex-grid-compact justify-content-flex-start">
						<div class="flex-child flex-0-0">
							<div class="outreach-sms-bubble outreach-sms-bubble-left radius-small background-primary color-background">
								<span class="REPLACE">My text</span>
							</div>
		
						</div>
					</div>
				<?php else: ?>
					<div class="REPLACE">
						<p>
							Tagged users like <a class="highlight highlight-primary" href="<?=app_create_link(array('template'=>'profile'))?>">@Beyonce Knowles</a> will be links to profiles with the classes <code>highlight highlight-primary</code> 
						</p>
						<p>
							Listen, Morty, I hate to break it to you, but what people call love is just a chemical reaction that compels animals to breed. It hits hard, Morty, then it slowly fades, leaving you stranded in a failing marriage. I did it. Your parents are gonna do it
	
							<?php if($args['has_long_body']): ?>
								<span>&hellip;</span>
							<?php endif; ?>
						</p>
					</div>
				<?php endif; ?>


				<?php if($args['has_long_body']): ?>
					<?php app_get_component('components/note-row-read-more'); ?>
				<?php endif; ?>
				<?php if($args['has_attachments']): ?>
					<?php app_get_component('components/attachments-grid-columns'); ?>
				<?php endif; ?>
				

				<?php if($args['is_task']): ?>
					<?php app_get_component('components/note-row-task-footer'); ?>
				<?php endif; ?>
				<?php if($args['is_sms'] || $args['is_my_sms']): ?>
					<?php app_get_component('components/note-row-sms-footer'); ?>
				<?php endif; ?>
				<?php if($args['is_email_sent']): ?>
					<!-- none :3 -->
				<?php endif; ?>
				<?php if($args['is_email_received']): ?>
					<?php app_get_component('components/note-row-email-footer-received'); ?>
				<?php endif; ?>
			</div>

		</div>
	</div>
</div>