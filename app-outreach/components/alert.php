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

		case 'reminder':
			$_palette_tag  = 'primary';
			$_symbol_tag  = 'check';
			$_alert_label = 'Reminder:';
			break;

		case 'due':
			$_palette_tag  = 'primary';
			$_symbol_tag  = 'calendar';
			$_alert_label = 'Due Date:';
			break;

		case 'activity':
			$_palette_tag  = 'primary';
			$_symbol_tag  = 'bell';
			$_alert_label = 'Notification:';
			break;
            

		case 'error':
			$_palette_tag  = 'error';
			$_symbol_tag  = 'error';
			$_alert_label = 'Error:';
			break;

		case 'caution':
			$_palette_tag  = 'caution';
			$_symbol_tag  = 'caution';
			$_alert_label = 'Oops!';
			break;

		case 'success':
			$_palette_tag  = 'success';
			$_symbol_tag  = 'success';
			$_alert_label = 'Success!';
			break;
		
		default:
			$_palette_tag  = 'neutral';
			$_symbol_tag  = 'info';
			$_alert_label = 'Info';
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

	<?php if($args['add_close_btn']): ?>
		<span class="alert-close" data-toggle-alert-close><i class="symbol symbol-close"></i></span></a>
	<?php endif; ?>

	<?php if($args['add_label']): ?>
		<i class="symbol symbol-<?=$_symbol_tag ?>"></i> 
        <?php if($_alert_label !== ''): ?>
            <strong class="outreach-alert-label text-transform-uppercase"><?= $_alert_label; ?></strong>
        <?php endif; ?>
	<?php endif; ?>

	<div class="outreach-alert-content display-inline">
		<?= $args['content']; ?>
	</div>

</div>
