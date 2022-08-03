<div class="module-function">
	<div class="btn-group btn-group-horizontal btn-group-responsive">

		<!--
			add entry 
		-->
		<a class="btn btn-primary-outline" href="#board-track-time" data-toggle="board" data-board-title="Add new Entry">
			Add Entry <i class="symbol symbol-plus"></i>
		</a>

		<!--
			start timer
			NOTE: render only when timer is paused
		-->
		<a class="btn btn-primary" href="#board-track-time" data-toggle="board" data-board-title="Start new Timer">
			Start Timer <i class="symbol symbol-play"></i>
		</a>


		<!--
			pause timer
			NOTE: render only when timer is active
		-->
		<a class="btn btn-secondary" href="#" onclick="REPLACEsomethingTopauseTimer(event)" >
			Pause Timer <i class="symbol symbol-pause"></i>
		</a>

	</div>
</div>