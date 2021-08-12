<div
	id="outreach-calendar" class="">
		<!-- Plugin stuff -->
		<?php app_inline_style(FWAPPS_ROOT_PATH.'/app-'.FWAPPS_APP.'/assets/plugins/fullcalendar/main.css'); ?>
		<?php app_inline_script(FWAPPS_ROOT_PATH.'/app-'.FWAPPS_APP.'/assets/plugins/fullcalendar/main.js'); ?>
		<div id="outreach-calendar-wrapper" class="background-theme-contrast padding z-index-1">

			<!-- Actual Stuff -->
				<div id="calendar"></div>
					<script>
					const calendarEl = document.getElementById('calendar');
					const calendar = new FullCalendar.Calendar(calendarEl, {
						themeSystem: 'bootstrap',
						initialView: 'dayGridMonth',
						height: 'calc(100vh - 60px - (20px * 2))', /* NOTE: Set to the values $sidebar-slim and $gutter-base from framework/custom styles */
						events: [
						{
							id: '1',
							title: 'Entire-day task',
							start: '2021-07-15',
							end: '2021-07-16',
						},
						{
							id: '2',
							title: 'Task that spans 2 entire days',
							start: '2021-07-12',
							end: '2021-07-14',
						},
						],
						eventClick: info => {
						console.log(`Clicked on event: '${info.event.title}'`);
						console.table(info.event);
						},
					});
					calendar.render();
					</script>
		</div>
</div>