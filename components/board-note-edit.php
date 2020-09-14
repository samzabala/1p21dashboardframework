<!-- EDIT -->

	<!-- 

	@NOTE change `note-REPLACEwithPostTypeID-edit` to `note-new` if note to edit is new/

	For board to render for new notes, feel free to copy paste if needed. This board will have the exact markup structure but attributes will change, particularly these on the `.board` block:
			id => `note-new-edit` // feel free to change as fit

			There will be comments along the way as well
	-->

	<div id="note-REPLACEwithPostTypeID-edit" data-board-align="left" class="board" data-board-classes="dashboard-board-column-layout" data-board-resize="true"  data-board-width="1240px">
		<form method="get" class="dashboard-board-column-layout-container  background-theme-contrast">
			<div class="no-scrollbar dashboard-board-partition dashboard-board-column-layout-main  background-theme">
				<div class="container">

					<?php app_get_component('components/note-main-edit')?>
						
				</div>
			</div>
			<div class="no-scrollbar dashboard-board-partition dashboard-board-column-layout-side">
				<div class="container container-wide">

					<div class="module-grid">
						<!-- Toolbar -->
						<?php app_get_component('components/toolbar-side-note-edit','',false,array(
								'is_in_board_modal' => true
							)); ?>
						<!-- Side stuff -->
							<?php app_get_component('components/module-side-note-overview-edit','',false,array(
								'is_in_board_modal' => true
							)); ?>
					</div>

				</div>
			</div>
		</form>
	</div>