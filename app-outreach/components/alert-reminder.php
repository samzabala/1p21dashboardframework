<?php
//args. feel free to modify as needed
	$defs = array(
		//@param info - string - alert type 
		'type' => '', //reminder,error,caution,success

		//@param size - string - alert size 
			'size' => false,  //small,large

		//@param content - string(html) - alert text 
			'content' => 'Reminding you for something here',

		//@param date - string(html) - formatted date 
			'date' => 'June 12, 1898',

		//@param date - string(html) - formatted time 
			'time' => '5:00pm',

		//@param contact - string(html) - contact
			'contact' => 'Dick Gumshoe',

		//@param company_domain - string(html) - company_domain 
			'company_domain' => 'bluebadger.com',


		//@param add_close_btn - bool - add an alert close
			'add_close_btn' => true
	);

	$args = app_parse_args($data,$defs);

//setup labels, classes and other stuff associated with type
	$_palette_tag  = null; //color tag to use for coloring our boi
	$_alert_symbol = ''; //label text for alert

	switch($args['type']):

		case 'event':
			$_palette_tag  = 'error';
			$_alert_symbol = 'calendar-alt';
			break;

		case 'task':
			$_palette_tag  = 'success';
			$_alert_symbol = 'check';
			break;

		case 'call':
			$_palette_tag  = 'primary';
			$_alert_symbol = 'phone';
			break;
		
		default:
		$_palette_tag  = 'neutral';
		$_alert_symbol = 'bell';
			break;

	endswitch;


?>
<div class="
	p
	alert
	alert-default
	no-border-top
	no-padding
	<?= ($args['size']) ?
			"alert-{$args['size']}" 
		: '';
	?>
">
	<div class="padding-small no-border-x no-border-bottom border-style-solid-top
    border-width-thick-top
    border-color-<?=$_palette_tag?>">
		
		<div class="flex-grid flex-grid-compact flex-nowrap">
			<div class="flex-child flex-0-0">
				<button class="btn btn-<?=$_palette_tag; ?>-glassy btn-round btn-large btn-symbol">
					<i class="symbol symbol-<?=$_alert_symbol?>"></i>
				</button>
			</div>
			<div class="flex-child flex-1-1">
				<h4 class="reminder-datetime no-margin-y">
					<!-- @if link to detail page is available -->
						<a href="#REPLACEwithDetailLink">

					<span class="REPLACE"><?= $args['date']; ?> at <?= $args['time']; ?></span>

					<!-- @if link to detail page is available -->
						</a>
				</h4>

				<div class="reminder-content text-wrap-ellipsis-multiple p">
					<?= $args['content']; ?>
				</div>
				
				<div class="reminder-source color-neutral font-size-small text-wrap-ellipsis">
					<div class="flex-xs flex-nowrap">

					<!-- @if has contact -->
					<span class="reminder-source-contact font-weight-700 flex-0-1 text-wrap-ellipsis">
							<span class="REPLACE"><?= $args['contact']; ?></span>
						</span>

					<!-- @if has contact AND company_domain -->
						<span class="spacer">&nbsp;|&nbsp;</span>


					<!-- @if has company_domain -->
						<a href="https://<?= $args['company_domain']; ?>" target="_blank" rel="noopener" class="reminder-source-company font-weight-700 flex-0-3 text-wrap-ellipsis">
							<span class="REPLACE"><?= $args['company_domain']; ?></span>
						</a>
					</div>
				</div>
			</div>

			<?php if($args['add_close_btn']): ?>
				<div class="flex-0-0">
					<span class="alert-close" data-toggle-alert-close><i class="symbol symbol-close"></i></span></a>
				</div>
			<?php endif; ?>
		</div>
	</div>
</div>
