<!--
Imports JS:

Tooltip from framework/src/js/imports/tooltip

-->
<div class="toolbar-block justify-content-space-evenly toolbar toolbar-horizontal toolbar-small margin-auto-x border-color-transparent">
	<!-- @if sequences can be made -->
		<div
			class="toolbar-tile"
		>
			<a
				data-toggle-tooltip-hover
				data-tooltip-inverse="true"
				data-tooltip-size="small"
				data-tooltip-content="<span class='text-transform-uppercase font-weight-700'>Sequence</span>"
				data-tooltip-center-x="true"
				data-tooltip-placement="top"
				href="#m-sequence-addto" data-toggle-modal-default
				class="utility-sequence btn btn-accent-glassy btn-symbol btn-large">
				<i class="symbol symbol-sync-alt"></i>
			</a>
		</div>

	<!-- @if casn sms -->
	<div
			class="toolbar-tile"
		>
			<a
				data-toggle-tooltip-hover
				data-tooltip-inverse="true"
				data-tooltip-size="small"
				data-tooltip-content="<span class='text-transform-uppercase font-weight-700'>SMS</span>"
				data-tooltip-center-x="true"
				data-tooltip-placement="top"
				href="sms:+1REPLACE" data-toggle-modal-board
				class="utility-sequence btn outreach-btn-toolbarsms btn-symbol btn-large">
				<i class="symbol margin-small-bottom-negate">
					<!-- @NOTE: needs svg markup itself to show correct color -->
					<?php app_get_component('components/icon-toolbar-sms'); ?>
				</i>
			</a>
			<?php app_get_component('components/modal-board-sms-thread') ?>
		</div>
		
	<!-- @if email is available -->
		<div
			class="toolbar-tile"
		>
			<a
				data-toggle-tooltip-hover
				data-tooltip-inverse="true"
				data-tooltip-size="small"
				data-tooltip-content="<span class='text-transform-uppercase font-weight-700'>Email</span>"
				data-tooltip-center-x="true"
				data-tooltip-placement="top"
				href="#m-editor-email" data-toggle-modal-default
				class="utility-mail to btn btn-caution-glassy btn-symbol btn-large">
				<i class="symbol symbol-envelope-inverse"></i>
			</a>

			<?php app_get_component('components/modal-board-form-email') ?>
		</div>

	<!-- @if phone number is available -->
		<div class="toolbar-tile"
		>
			<a
				href="tel:REPLACE@email.com"
				data-toggle-tooltip-hover
				data-tooltip-inverse="true"
				data-tooltip-size="small"
				data-tooltip-content="<span class='text-transform-uppercase font-weight-700'>Call</span>"
				data-tooltip-center-x="true"
				data-tooltip-placement="top"
				class="utility-mail to btn btn-primary-glassy btn-symbol btn-large">
				<i class="symbol symbol-phone"></i>
			</a>
		</div>

	<!-- @if uswer can add new task -->
		<div
			class="toolbar-tile"
		>
			<a
				href="#mb-editor-task"
				data-toggle-modal-board
				data-modal-title="Add Task"
				data-toggle-tooltip-hover
				data-tooltip-inverse="true"
				data-tooltip-size="small"
				data-tooltip-content="<span class='text-transform-uppercase font-weight-700'>Add Task</span>"
				data-tooltip-center-x="true"
				data-tooltip-placement="top"
				class="utility-mail to btn btn-success-glassy btn-symbol btn-large">
				<i class="symbol symbol-check"></i>
			</a>
			<?php app_get_component('components/modal-board-form-task') ?>
		</div>

	<!-- @if uswer can add new event -->
		<div
			class="toolbar-tile"
		>
			<a
				href="#mb-editor-event"
				data-toggle-modal-board
				data-modal-title="Add Event"
				data-toggle-tooltip-hover
				data-tooltip-inverse="true"
				data-tooltip-size="small"
				data-tooltip-content="<span class='text-transform-uppercase font-weight-700'>Add Event</span>"
				data-tooltip-center-x="true"
				data-tooltip-placement="top"
				class="utility-mail to btn btn-error-glassy btn-symbol btn-large">
				<i class="symbol symbol-calendar-alt"></i>
			</a>
			<?php app_get_component('components/modal-board-form-event') ?>
		</div>
</div>