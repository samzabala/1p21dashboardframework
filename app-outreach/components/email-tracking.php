<!-- @PLACEHOLDER delete when ready -->
<?php
	$disable_butt = array(
		random_int(1,100),
		random_int(1,100),
		random_int(1,100),
	);
	?>
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