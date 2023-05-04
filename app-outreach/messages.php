
<div id="outreach-messages-heading">
	<div  class="grid grid-flex justify-content-space-between align-items-center">
		<div class="grid-col-xs-12">
			<p class="font-weight-700 text-transform-uppercase no-margin-bottom">Sales Outreach</p>
			<h1 class="no-margin">
				<?= 
					FWAPPS_TEMPLATE == 'messages-sent' ? 'Sent' :
					(FWAPPS_TEMPLATE == 'messages-scheduled' ? 'Scheduled' :
					(FWAPPS_TEMPLATE == 'messages-unmatched' ? 'Unmatched Emails' :
					'Inbox' )); ?>
			</h1>
		</div>
		<div class="grid-col-xs-12 grid-col-md-3">
			<?php app_get_component('components/function-input-search') ?>
		</div>
		<div class="grid-col-xs-12 grid-col-md-9 text-align-right">
			<?php app_get_component('components/function-filter-messages') ?>
			<div class="module-function function-add margin-large-left">
				<a  href="#m-editor-email" data-toggle-modal-default class="btn btn-primary btn-block-mobile">
					Compose <i class="symbol symbol-paperplane"></i>
				</a>
			</div>
		</div>
	</div>
</div>



<div id="outreach-messages" class="module">

	<div class="module-header">
		<div class="module-functions no-margin no-padding flex-xs flex-wrap justify-content-space-between">
			<?php app_get_component('components/pagination-view-per-page') ?>
			<?php app_get_component('components/pagination') ?>
		</div>
	</div>
	<table class="table-fixed outreach-table">
		<tr>
			<th class="text-nowrap text-align-center" width="75">User</th>
			<th class="text-nowrap" width="250">From</th>
			<th class="text-nowrap">Subject</th>
			<th class="text-nowrap" width="100">Date</th>
			<th class="text-nowrap" width="175">Tracking</th>
			<th class="text-nowrap" width="150">Detailed View</th>
			<th class="text-nowrap text-align-center" width="50">&nbsp;<span class="sr-only">Actions</span></th>
		</tr>

		<!-- @loop tr -->
			<tr>
				
				<td class="text-align-center" width="75">
					<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">User</span>
					<a href="<?=app_create_link(array('template' => 'profile')); ?>" class="contact-acct-owner text-align-center">
						<?php app_get_component('components/profile-image-micro') ?>
					</a>
				</td>
				<td>
					<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">From</span>
						<h5 class="contact-name no-margin-y">
							<a class="color-inherit" href="<?= app_create_link(array('template'=>'contact-detail')) ?>">
								<span class="REPLACE">Phoenix Wright</span>
							</a>
						</h5>
						<div class="contact-domain text-wrap-ellipsis">
							<a href="<?= app_create_link(array('template'=>'company-detail')) ?>">
								<span class="REPLACE">ace-attorney.comace-attorney.comace-attorney.comace-attorney.comace-attorney.comace-attorney.comace-attorney.comace-attorney.comace-attorney.com</span>
							</a>
						</div>
				</td>
				<td>

					<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Subject</span>
					<!-- @if has subject line -->
						<div class="text-wrap-ellipsis">
							<strong>
								<span class="REPLACE">HOLD IT! the one who actually committed the crime.. IS YOU!</span>
							</strong>
						</div>
					<!-- @if has message body -->
						<div class="text-wrap-ellipsis">
							<span class="REPLACE">
								The coconut nut is a giant nut If you eat too much, you'll get very fat Now, the coconut nut is a big, big nut But this delicious nut is not a nut It's the coco fruit (it's the coco fruit) Of the coco tree (of the coco tree) From the coco palm family There are so many uses of the coconut tree You can build a big house for the family All you need is to find a coconut man If he cuts the tree, he gets the fruit free It's the coco fruit (it's the coco fruit) Of the coco tree (of the coco tree) From the coco palm family The coconut bark for the kitchen floor If you save some of it, you can build a door Now, the coconut trunk, do not throw this junk If you save some of it, you'll have the second floor The coconut wood is very good It can stand 20 years if you pray it would Now, the coconut root, to tell you the truth You can throw it or use it as firewood The coconut leaves, good shade it gives For the roof, for the walls up against the eaves Now, the coconut fruit, say my relatives Make good cannonballs up against the eaves It's the coco fruit (it's the coco fruit) Of the coco tree (of the coco tree) From the coco palm family The coconut nut is a giant nut If you eat too much, you'll get very fat Now, the coconut nut is a big, big nut But this delicious nut is not a nut It's the coco fruit (it's the coco fruit) Of the coco tree (of the coco tree) From the coco palm family It's the coco fruit (it's the coco fruit) Of the coco tree (of the coco tree) From the coco palm family It's the coco fruit (it's the coco fruit) Of the coco tree (of the coco tree) From the coco palm family Ole!
							</span>
						</div>
				</td>
				<td>
					<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Date</span>
					<span class="REPLACE">06/12/98</span>
				</td>
				
				<td>

					<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Tracking</span>
					<?php app_get_component('components/email-tracking'); ?>
				</td>
				<td>
					<a href="#" data-toggle-modal-default class="btn btn-primary">
						View Details
					</a>
					<?php app_get_component('components/modal-email-full'); ?>
				</td>
				
				<td class="outreach-table-cell-actions text-align-center">
					<div class="email-actions position-relative">
						<?php app_get_component('components/modal-actions','',false,array(
							'links' => array(
								'View Company'
									=> 'href="'.app_create_link(array('template' => 'company-detail')).'"',
								'Delete'
									=> 'href="#"',
								'Change Status'
									=> 'href="#m-contact-status-REPLACEWITHID" data-toggle-modal-default ',
								'Delete'
									=> 'href="#"'
							)
						)) ?>

						<div class="modal modal-default" id="m-contact-status-REPLACEWITHID" data-modal-width="400px" data-modal-title="Set Status to">
							<form action="">
								<div class="input-wrapper input-wrapper-block input-wrapper-vertical p">
									<label for="" class="input input-label sr-only">Change Status To</label>
									<select name="contact-status" id="" class="input-box input-box-select">
										<option value="">Select</option>
										<option value="client">Client</option>
										<option value="lead">Lead</option>
										<option value="prospect">Prospect</option>
									</select>
								</div>
								<button class="btn btn-primary btn-block">Save</button>
							</form>
						</div>
					</div>
				</td>
			</tr>

				<!-- @PLACEHOLDER: DELETE WHEN READY -->
					<?php for($i=1; $i<=24; $i++){ ?>
						<tr>
							<td class="text-align-center" width="75">
								<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">User</span>
								<a href="<?=app_create_link(array('template' => 'profile')); ?>" class="contact-acct-owner text-align-center">
									<?php app_get_component('components/profile-image-micro') ?>
								</a>
							</td>
							<td>
								<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">From</span>
									<h5 class="contact-name no-margin-y">
										<a class="color-inherit" href="<?= app_create_link(array('template'=>'contact-detail')) ?>">
											<span class="REPLACE">Phoenix Wright</span>
										</a>
									</h5>
									<div class="contact-domain text-wrap-ellipsis">
										<a href="<?= app_create_link(array('template'=>'company-detail')) ?>">
											<span class="REPLACE">ace-attorney.comace-attorney.comace-attorney.comace-attorney.comace-attorney.comace-attorney.comace-attorney.comace-attorney.comace-attorney.com</span>
										</a>
									</div>
							</td>
							<td>

								<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Subject</span>
								<!-- @if has subject line -->
									<div class="text-wrap-ellipsis">
										<strong>
											<span class="REPLACE">HOLD IT! the one who actually committed the crime.. IS YOU!</span>
										</strong>
									</div>
								<!-- @if has message body -->
									<div class="text-wrap-ellipsis">
										<span class="REPLACE">
											The coconut nut is a giant nut If you eat too much, you'll get very fat Now, the coconut nut is a big, big nut But this delicious nut is not a nut It's the coco fruit (it's the coco fruit) Of the coco tree (of the coco tree) From the coco palm family There are so many uses of the coconut tree You can build a big house for the family All you need is to find a coconut man If he cuts the tree, he gets the fruit free It's the coco fruit (it's the coco fruit) Of the coco tree (of the coco tree) From the coco palm family The coconut bark for the kitchen floor If you save some of it, you can build a door Now, the coconut trunk, do not throw this junk If you save some of it, you'll have the second floor The coconut wood is very good It can stand 20 years if you pray it would Now, the coconut root, to tell you the truth You can throw it or use it as firewood The coconut leaves, good shade it gives For the roof, for the walls up against the eaves Now, the coconut fruit, say my relatives Make good cannonballs up against the eaves It's the coco fruit (it's the coco fruit) Of the coco tree (of the coco tree) From the coco palm family The coconut nut is a giant nut If you eat too much, you'll get very fat Now, the coconut nut is a big, big nut But this delicious nut is not a nut It's the coco fruit (it's the coco fruit) Of the coco tree (of the coco tree) From the coco palm family It's the coco fruit (it's the coco fruit) Of the coco tree (of the coco tree) From the coco palm family It's the coco fruit (it's the coco fruit) Of the coco tree (of the coco tree) From the coco palm family Ole!
										</span>
									</div>
							</td>
							<td>
								<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Date</span>
								<span class="REPLACE">06/12/98</span>
							</td>
							
							<td>

								<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Tracking</span>
								<?php app_get_component('components/email-tracking'); ?>
							</td>
							<td>
								<a href="#" data-toggle-modal-default class="btn btn-primary">
									View Details
								</a>
								<?php app_get_component('components/modal-email-full'); ?>
							</td>
							
							<td class="outreach-table-cell-actions text-align-center">
								<div class="email-actions position-relative">
									<?php app_get_component('components/modal-actions','',false,array(
										'links' => array(
											'View Company'
												=> 'href="'.app_create_link(array('template' => 'company-detail')).'"',
											'Delete'
												=> 'href="#"',
											'Change Status'
												=> 'href="#m-contact-status-'.$i.'" data-toggle-modal-default ',
											'Delete'
												=> 'href="#"'
										)
									)) ?>

									<div class="modal modal-default" id="m-contact-status-<?= $i ?>" data-modal-width="400px" data-modal-title="Set Status to">
										<form action="">
											<div class="input-wrapper input-wrapper-block input-wrapper-vertical p">
												<label for="" class="input input-label sr-only">Change Status To</label>
												<select name="contact-status" id="" class="input-box input-box-select">
													<option value="">Select</option>
													<option value="client">Client</option>
													<option value="lead">Lead</option>
													<option value="prospect">Prospect</option>
												</select>
											</div>
											<button class="btn btn-primary btn-block">Save</button>
										</form>
									</div>
								</div>
							</td>
						</tr>
					<?php } ?>
	</table>

	<div class="module-footer">
		<div class="module-functions no-margin no-padding flex-xs flex-wrap justify-content-space-between">
			<?php app_get_component('components/pagination-view-per-page') ?>
			<?php app_get_component('components/pagination') ?>
		</div>
	</div>
</div>