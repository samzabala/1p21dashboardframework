<?php
//args. feel free to modify as needed
	$defs = array(
		//@param info - string - alert type 
		'type' => 'info', //reminder,error,caution,success

		//@param size - string - alert size 
			'size' => false,  //small,large

		//@param content - string(html) - alert text 
			'content' => '',

		//@param label - bool - add text label after icon
			'add_label' => true,

		//@param add_close_btn - bool - add an alert close
			'add_close_btn' => true
	);

	$args = app_parse_args($data,$defs);

//setup labels, classes and other stuff associated with type
	$_palette_tag  = null; //color tag to use for coloring our boi
	$_alert_label = ''; //label text for alert
	switch($args['type']):

		case 'error':
			$_palette_tag  = 'error';
			$_symbol_tag  = 'error';
			break;

		case 'caution':
			$_palette_tag  = 'caution';
			$_symbol_tag  = 'caution';
			break;

		case 'success':
			$_palette_tag  = 'success';
			$_symbol_tag  = 'success';
			break;
		
		default:
			$_palette_tag  = 'primary';
			$_symbol_tag  = 'info';
			break;

	endswitch;


?>
<div class="
	p
	alert
	alert-<?=$_palette_tag ?>
	<?= ($args['size']) ?
			"alert-{$args['size']}" 
		: '';
	?>
">

	<span class="alert-close btn btn-no-interaction color-inherit btn-symbol order-99" data-toggle-alert-close><i class="symbol symbol-close"></i></span>
	
	<span class="btn btn-large btn-symbol btn-round btn-no-interaction margin-small-right color-background
		background-<?=$_palette_tag ?>
	">
		<i class="symbol symbol-<?=$_symbol_tag ?>"></i> 
	</span>

	<div class="outreach-alert-content display-inline">
		<?= $args['content']; ?>
	</div>

</div>
