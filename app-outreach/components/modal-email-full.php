<div class="modal modal-default" data-modal-title="REPLACE With Email Subject" data-modal-width="800px" data-modal-close="true">


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
		<?php app_get_component('components/_DEMO-html-markup'); ?>
	</div>
</div>