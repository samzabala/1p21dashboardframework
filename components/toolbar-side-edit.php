<div class="module no-padding background-transparent position-relative"
	grid-area-xs="toolbar"
	grid-area-md="none"
>
	<div class="flex-grid flex-grid-no-gutter-y flex-grid-compact justify-content-space-between">
		<div class="flex-col-xs-12 flex-col-sm-7">
			<!--
				@NOTE
				change `Create Task` if task alrerady exists and is just being edited
			-->
			<button type="submit" class="btn btn-primary btn-block">
				<!-- @if task is new -->
					Create Task
				<!-- @else if task already exists and is just being edited -->
					<!-- Save edits <i class="symbol symbol-edit"></i></button> -->
			</button>
		</div>
		<div class="flex-col-xs-12 flex-col-sm-5">

			<!-- @NOTE onclick event should revert to previous history state or previously viewed page. feel free modify as needed -->
			<button data-toggle="board" href="#" onclick="event.preventDefault(); console.log('work u sonofabitch'); history.back(); " class="btn btn-neutral-outline btn-block">Cancel</button>
		</div>
	</div>
</div>