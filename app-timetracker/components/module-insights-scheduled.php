


<div class="module" data-grid-area="scheduled">
	<div class="module-content">
		<div class="flex-grid justify-content-space-between align-items-center flex-wrap">
			<div class="flex-child align-self-flex-start  flex-1-1 margin-right-auto">
				<h5 class="no-margin-y">Scheduled Hours</h5>
			</div>
			<div class="flex-child align-self-center">
				<i class="legend legend-primary"></i> Billable
			</div>
			<div class="flex-child align-self-center">
				<i class="legend background-theme-polar"></i> Non-Billable
			</div>
		</div>

		<p class="color-neutral margin-small-bottom">
			<span class="color-theme display-inline h2 no-margin">
				<span class="REPLACE">06:09</span>
			</span>
			<span>
				/
				40:00
			</span>
		</p>
		<div class="progress p">
			<!-- @NOTE
				.progress-bar.progress-bar-primary
					attrs
						style => width: string percentage of billable out of 100% (eg, 10%, 25%, 69%, etc. has to have percent sign)
				.progress-bar.background-theme-polar
					attrs
						style => width: string percentage of non-billable out of 100% (eg, 10%, 25%, 69%, etc. has to have percent sign)
			-->
			<div class="progress-bar progress-bar-primary"
				style="width: 46%;"
			></div>
			<div class="progress-bar background-theme-polar"
				style="width: 23%;"
			></div>
		</div>
	</div>
</div>