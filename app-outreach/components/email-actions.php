<?php
$defs = array(
	// for when it's a new conversation or not
	'id' => 'REPLACEID',
);

$args = app_parse_args($data,$defs);
?>
<div class="inline-flex-md  align-items-center flex-grid-no-gutter-y flex-grid flex-grid-compact justify-content-space-between">
		<a href="#mb-email-row-form-<?=$args['id'] ?>" data-toggle-modal-board title="Reply" class="flex-0-0 flex-child display-block color-neutral-dark color-primary-hover">
			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor"  d="M21,19V15a4.993,4.993,0,0,0-5-5H6.825l3.6-3.6L9,5,3,11l6,6,1.425-1.4L6.825,12H16a2.988,2.988,0,0,1,3,3v4Z" /></svg>
		</a>
	
		<a href="#mb-email-row-form-<?=$args['id'] ?>" data-toggle-modal-board title="Reply All" class="flex-0-0 flex-child display-block color-neutral-dark color-primary-hover">
			<svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path fill="currentColor" d="M320-280 80-520l240-240 57 56-184 184 184 184-57 56Zm480 80v-160q0-50-35-85t-85-35H433l144 144-57 56-240-240 240-240 57 56-144 144h247q83 0 141.5 58.5T880-360v160h-80Z"/></svg>
		</a>

		<a href="#mb-email-row-form-<?=$args['id'] ?>" data-toggle-modal-board title="Forward" class="flex-0-0 flex-child display-block color-neutral-dark color-primary-hover">
			<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
			width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve"><path fill="currentColor" d="M3,19v-4c0-1.38333,0.4875-2.5625,1.4625-3.5375S6.61667,10,8,10h9.175l-3.6-3.6L15,5l6,6l-6,6l-1.425-1.4l3.6-3.6H8 c-0.83333,0-1.54167,0.29167-2.125,0.875C5.29167,13.45833,5,14.16667,5,15v4H3z"/>
			</svg>
		</a>

		<a href="#" title="Delete" class="flex-0-0 flex-child display-block color-neutral-dark color-primary-hover">
			<svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path fill="currentColor" d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z"/></svg>
		</a>
</div>