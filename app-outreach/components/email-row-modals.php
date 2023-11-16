<?php 
$defs = array(
	// for when it's a new conversation or not
	'id' => 'REPLACEID',
);

$args = app_parse_args($data,$defs);
?>


<!--  Email Details: mb-email-row-details-ID -->
	<div id="mb-email-row-details-<?=$args['id'] ?>" class="modal modal-board" data-modal-width="960px" data-modal-close="true">
		<div class="outreach-modal-board-content-stretch">
			<div class="flex-grid flex-grid-fixed flex-nowrap">
				<div class="flex-child flex-1-1">
					<h3 class="no-margin-top">REPLACE With Email Subject</h3>
				</div>
				<div class="flex-child flex-0-0">
					<?php app_get_component('components/email-actions','',false,array(
						'id' => $args['id']
					)); ?>
				</div>
			</div>

			<!-- Attachments warning -->

			<div class="alert alert-error margin-y">
				<strong>[External Email]</strong> Do not click links or attachments unless you recognize the sender and know the content is safe.
			</div>
			

			<ul class="list-group">
				<li>
					<strong>From:&nbsp;</strong>
					<span class="REPLACE">phoenix-wright@ace-attorney.com</span>
				</li>
				<li v-if="message_obj.recipients.length">
					<strong>To:&nbsp;</strong>
					<span class="REPLACE">miles-edgeworth@chiefprosecutor.com</span>
				</li>
				<li v-if="message_obj.cc_recipients.length">
					<strong>CC:&nbsp;</strong>
					<span class="REPLACE">maya-fey@ace-attorney.com, pearl-fey@ace-attorney.com</span>
				</li>
				<li v-if="message_obj.bcc_recipients.length">
					<strong>BCC:&nbsp;</strong>
					<span class="REPLACE">mia-fey@ace-attorney.com, idk-souls-of-the-dead@gmail.com</span>
				</li>
				<li>
					<strong>Date:&nbsp;</strong>
					<span>06/12/1898</span>
				</li>
			</ul>

			<div class="text-leading-expanded">
				<!-- @PLACEHOLDER: Replace when ready -->
				<?php app_get_component('components/_DEMO-html-markup'); ?>


				<!-- rest of the thread -->
				<blockquote>
					<?php app_get_component('components/email-meta'); ?>
					<?php app_get_component('components/_DEMO-html-markup'); ?>
					<blockquote>
						<?php app_get_component('components/email-meta'); ?>
						<?php app_get_component('components/_DEMO-html-markup'); ?>
					
						</blockquote>
					</blockquote>
				</blockquote>
			</div>
		</div>
	</div>



<!--  Email Composers. Note: They could be consolidated into the same one email form modal board for each row, but for demo purposes, will need to separate  -->
		<div id="mb-email-row-form-<?=$args['id'] ?>" class="modal modal-constricted modal-board" data-modal-close="false" data-modal-width="960px" data-modal-fullscreen-content-display="flex">
			<div class="outreach-modal-board-content-stretch">
				<?php app_get_component('components/message-form','',false,array(
					'is_new' => false,
					'id' => $args['id'],
					'to' => array(
						'phoenix-wright@ace-attorney.com',
					),
					'subject' => 'RE: REPLACE With Email Subject',
				)); ?>
			</div>
		</div>