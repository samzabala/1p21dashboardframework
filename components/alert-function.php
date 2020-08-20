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
			$_palette_tag  = 'secondary';
			$_alert_label = 'Reminder';
			break;

		case 'error':
			$_palette_tag  = 'error';
			$_alert_label = 'Error';
			break;

		case 'caution':
			$_palette_tag  = 'caution';
			$_alert_label = 'Oops!';
			break;

		case 'success':
			$_palette_tag  = 'success';
			$_alert_label = 'Success!';
			break;
		
		default:
			$_palette_tag  = 'primary';
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
		<span class="alert-close" data-toggle="alert-close"><i class="symbol symbol-close"></i></span></a>
	<?php endif; ?>

	<span class="dashboard-alert-icon text-vertical-align-middle">
		<img data-src="<?=FWAPPS_ROOT_URL ?>/app-<?=FWAPPS_APP;?>/assets/images/icon-alert-<?=$args['type'] ?>.svg" alt="" />
	</span>

	<?php if($args['add_label']): ?>
		<strong class="dashboard-alert-label text-transform-uppercase"><?= $_alert_label; ?></strong>
	<?php endif; ?>

	<div class="dashboard-alert-content display-inline">
		<?= $args['content']; ?>
	</div>

</div>
