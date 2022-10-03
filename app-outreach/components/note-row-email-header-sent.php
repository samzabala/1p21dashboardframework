
<!-- @PLACEHOLDER delete when ready -->
	<?php
	$disable_butt = array(
		random_int(1,100),
		random_int(1,100),
		random_int(1,100),
	);
	?>
<div class="padding-small-x radius-small text-wrap-ellipsis margin-y background-caution-alpha-2">
	<div class="flex-grid flex-grid-constricted-y flex-grid-compact flex-nowrap align-items-center ">
		<div class="flex-child flex-0-0">
			<div class="padding-y">
				<strong class="color-caution-dark">
					<span class="btn btn-symbol btn-no-interaction btn-default background-transparent color-inherit no-border">
						<i class="symbol symbol-envelope"></i> 
					</span>
					Email sent <span class="hide-nonmobile">:</span>
				</strong>
			</div>
		</div>
		<div class="flex-child flex-1-1">
			<div class="padding-y">
				<div class="text-wrap-ellipsis font-weight-700">
					<strong class="hide-mobile">Subject:</strong>
					<a href="#">
						<span class="REPLACE">Subject for the email but let's make it longer Doobi-doobi, dapp-dapp, doobi-doobi, dapp-dapp Doobi-doobi, dapp-dapp, doobi-doobi, dipp-dipp Doobi-doobi, dapp-dapp, du-dapp, da-dapp Bee-beep, bee-beep, beep, beep, beep, beep, beep, beep Dabba-doobi, dooboo-dabba Dooboo-dabba, dooboo-dabba Beep, beep, bee-beep, bee-beep, beep, beep Sabi ng jeep, sabi ng jeep, sabi ng Bee-bee-bee-bee-bee-bee-bee-bee-bee-bee-bee-beep! Pabbo-purro, bap-bap Purro-pabb, bap-bap Beep, be-bee, be-bee, be-bee, be-bee Be-bee, be-bee, be-bee, be-bee Be-bee, be-bee, be-bee, be-bee Be, be, be, be, be, be, beep, beep, beep, beep</span>
					</a>
				</div>
			</div>

		</div>

		
		<div class="flex-child flex-0-0">
			<!-- @NOTE:
			attributes
				title
					'Email not opened yet' => if email was not opened
					'Email opened' => if email was opened
					
			classes to add:
				'btn-neutral disabled' => if email was not opened
				'btn-primary' => if email was opened

			-->
			<span class="btn btn-symbol btn-small font-size-large btn-no-interaction btn-round
				<?= $disable_butt[0] > 50 ? 'btn-neutral disabled' : ' btn-primary' ?>
			"
			 title="<?= $disable_butt[0] > 50 ? 'Email not opened yet' : 'Email opened' ?>"
			>
				<i class="symbol symbol-envelope-open"></i>
			</span>


			<!-- @NOTE:
			attributes
				title
					'Email Link not opened yet' => if email link was not opened
					'Email Link opened' => if email link was opened
					
			classes to add:
				'btn-neutral disabled' => if email link was not opened
				'btn-accent' => if email link was opened

			-->
			<span class="btn btn-symbol btn-small font-size-large btn-no-interaction btn-round margin-micro-left
				<?= $disable_butt[1] > 50 ? 'btn-neutral disabled' : ' btn-accent' ?>
			"
			 title="<?= $disable_butt[1] > 50 ? 'Email Link not opened yet' : 'Email Link opened' ?>"
			>
				<i class="symbol symbol-hyperlink"></i>
			</span>


			<!-- @NOTE:
			attributes
				title
					'No response yet' => if email link was not opened
					'Email was replied to' => if email link was opened
					
			classes to add:
				'btn-neutral disabled' => if email link was not opened
				'btn-success' => if email link was opened

			-->
			<span class="btn btn-symbol btn-small font-size-large btn-no-interaction btn-round margin-micro-left
				<?= $disable_butt[2] > 50 ? 'btn-neutral disabled' : ' btn-success' ?>
			"
			 title="<?= $disable_butt[2] > 50 ? 'No response yet' : 'Email was replied to' ?>"
			>
				<i class="symbol symbol-reply"></i>
			</span>
		</div>

	</div>
</div>