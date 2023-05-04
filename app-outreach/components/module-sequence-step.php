<!--
Imports JS:

Accordion from framework/src/js/imports/switch


Imports CSS:

@import framework/src/scss/_switch

-->
<?php
	//args. feel free to modify as needed
	$defs = array(
		//@param info - string - alert type 
		'increment' => 1,
		'is_last' => false,
	);

	$args = app_parse_args($data,$defs);
?>
<div 
	<?php if($args['is_last']): ?>
		id="step-new"
	<?php endif; ?>
	class="module position-relative switch switch-idle no-padding-y margin-bottom"
>
	<div class="module-header module-end-break no-margin-y padding-small-y pointer-reference position-static">
		<div class="flex-xs align-items-center">
			<div class="outreach-module-sequence-insert margin-small-right">
				<!-- @if is the last step -->
				<?php if($args['is_last']): ?>
					<a data-toggle-switch-on title="Add Step" class="btn btn-symbol btn-small btn-round btn-primary"><i class="symbol symbol-plus"></i></a>
				<!-- @else -->
				<?php else: ?>
					<a href="#" title="Remove Step" class="btn btn-symbol btn-small btn-round btn-primary"><i class="symbol symbol-minus"></i></a>
				<?php endif; ?>
			</div>
			<span class="no-margin h3 display-inline-block color-primary text-decoration-none ">
				Step <span class="REPLACE"><?= $args['increment'] ?></span>
			</span>
		</div>
		<div class="module-functions">
			<div class="module-function">
				<a href="#sequence-step-<?=$args['increment'] ?>" data-toggle-switch  class="btn btn-link">Edit</a>
				<a href="" class="btn btn-link">Delete</a>
			</div>
		</div>
	</div>
	<div class="module-content no-margin-bottom padding-top border-width-thin-top border-style-solid-top border-color-theme-polar-contrast">
		<div class="switch-on">
			<div class="grid grid-flex grid-constricted grid-flex-fixed">
				<div class="grid-col-xs-12 grid-col-md-10 grid-col-lg-8">
					<?php app_get_component('components/sequence-step-form') ?>
				</div>
			</div>
		</div>
		<div class="switch-off">

			<?php if($args['is_last']): ?>
				<div class="text-align-center p">
					<a href="#" data-toggle-switch>
						<!-- @if steps exists -->
							<h4 class="colo-primary no-margin-top">Create another step</h4>
							<!-- @else if no steps yet -->
							<h4 class="colo-primary no-margin-top">Create first step</h4>
						<span class="btn btn-symbol btn-round btn-primary"><i class="symbol symbol-plus"></i></span>
					</a>
				</div>
			<?php else: ?>
				<div class="grid grid-flex grid-flex-fixed grid-constricted-y">
					<div class="grid-col-xs-12 grid-col-sm-4">
						<h5 class="no-margin-top">
							<span class="REPLACE">Scheduled Email</span>
						</h5>
						<p>
							<span class="REPLACE">Emails Automatically Delivered</span>
						</p>
					</div>
					<div class="grid-col-xs-12 grid-col-sm-4">
						<h5 class="no-margin-top">
							<span class="REPLACE">Template:</span>
						</h5>
						<p>
							<span class="REPLACE">Emails Automatically Delivered</span>
						</p>
					</div>
					<div class="grid-col-xs-12 grid-col-sm-4">
						<h5 class="no-margin-top">
							<span class="REPLACE">Schedule</span>
						</h5>
						<p>
							<span class="REPLACE">7 Days after enrollment</span>
						</p>
					</div>
				</div>
			<?php endif; ?>

		</div>
	</div>
</div>