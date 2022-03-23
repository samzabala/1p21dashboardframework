	
			</main>
        
            <nav class="nav nav-sticky position-sticky offset-0-bottom offset-auto-top margin-top margin-auto-top" id="timetracker-nav">
                <?php app_get_nav(); ?>
            </nav>
		</div>
    

        <!-- @NOTE do not copy. this is my debug wonderland <3 -->
            <div class="position-fixed offset-0-bottom offset-0-right offset-0-left">
                <div class="text-align-right">
                    <a href="#samsdebugwonderlandnotouchy" class="btn btn-default btn-small" data-toggle-accordion title="dashboard debug"><i class="symbol symbol-robot"></i>Sam's Debug wonderland no touchy</a>
                </div>
                <div id="samsdebugwonderlandnotouchy" class="accordion background-theme">
                    <?php app_debug_block(); ?>
                </div>
            </div>
	</body>
</html>