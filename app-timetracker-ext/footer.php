<?php if(FWAPPS_TEMPLATE !== 'login' ): ?>
	
			</main>
        
            <nav class="nav nav-sticky position-sticky offset-0-bottom offset-auto-top margin-top margin-auto-top" id="timetracker-nav">
                <?php app_get_nav(); ?>
            </nav>
		</div>
    

        <!-- @NOTE do not copy. this is my debug wonderland <3 -->
            <div class="position-fixed offset-0-bottom offset-0-right offset-0-left">
                <div class="text-align-left">
                    <a href="#" onclick="event.preventDefault();window.open(window.location,'Size emulator','width=476,height=601,directories=no,titlebar=no,toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no');" class="btn btn-primary "><i class="symbol symbol-expand"></i>&nbsp;Emulate Extension size</a>
                    <a href="#samsdebugwonderlandnotouchy" class="btn btn-default btn-small" data-toggle-accordion title="dashboard debug"><i class="symbol symbol-robot"></i>Sam's button</a>
                </div>
                <div id="samsdebugwonderlandnotouchy" class="accordion background-theme">
                    <?php app_debug_block(); ?>
                </div>
            </div>
<?php endif; ?>

	</body>
</html>