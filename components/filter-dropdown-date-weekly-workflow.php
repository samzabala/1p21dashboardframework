<div class="weekly-hours-control position-relative">
	<!-- <div class="btn-group btn-group-horizontal btn-block   btn-small"> -->
	<div class="grid grid-flex grid-compact grid-constricted-x flex-wrap justify-content-space-between flex-1-1">
		<div class="grid-col">

			<button class="weekly-previous btn btn-default  btn-symbol weekly-previous ">
				<i class="symbol symbol-arrow-left"></i>
			</button>
		</div>

		<div class="grid-col flex-1-1 text-align-center">

			<button data-toggle="dropdown" class="weekly-range btn btn-default   weekly-previous  ">
				<!-- @PLACEHOLDER . on change of dathe, the range will update -->
				<span class="REPLACE">
					Apr 20 - Apr 27
				</span>
			</button>

			<div class="dropdown dropdown-center-x dropdown-top-flush no-padding overflow-hidden">
				<div class="input-wrapper input-wrapper-vertical input-wrapper-block">
					<label class="input input-label text-align-center no-padding-x">Week starting from:</label>
					<input type="text" class="input-calendar input input-no-radius  border-color-transparent input-no-shadow no-paddinhg-y" />
				</div>
				<button class="btn btn-block no-radius btn-primary-outline border-color-transparent" data-toggle="dropdown">Done</button>
			</div>
		</div>

		<div class="grid-col">

			<button class="weekly-next btn btn-default btn-symbol weekly-previous ">
				<i class="symbol symbol-arrow-right"></i>
			</button>
		</div>
	</div>
</div>