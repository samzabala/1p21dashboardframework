<!-- @NOTE
	classes to add
		`display-none` => initial load OR when login returns invalid
		`display-block` => on click for login

-->

<div id="timetracker-loader" class="
	display-none
	">
	<div class="theme-inverse position-fixed offset-0 flex-xs align-items-center justify-content-center background-accent-alpha-4">
		<div class="flex-0-0 ">

		<img src="<?=FWAPPS_ROOT_URL ?>/app-<?=FWAPPS_APP?>/assets/images/loading.svg" alt="">
		<!-- <svg
		version="1.1" 
		xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
		x="0px" y="0px"
		width="104px" height="104px" 
		viewBox="0 0 104 104"
		enable-background="new 0 0 104 104"
		xml:space="preserve">
			<rect
			width="100"
			height="100"
			x="2"
			y="2"
			rx="50"
			stroke="#fff" fill="none"
			stroke-dasharray="160"
			stroke-width="4"
			stroke-linejoin="round"
			stroke-linecap="round"
			>
			<animateTransform attributeType="xml" attributeName="transform" type="rotate" from="360 52 52" to="0 52 52" dur="1s" repeatCount="indefinite" />
			<animate 
				attributename="stroke-dasharray" 
				values="80,0,0 ; 0,80,0; 0,0,80 "
				keytimes="0; 0.5; 1"
				from="80,0" 
				to="80,0"  
				fill="freeze" 
				dur="2s" 
				repeatcount="indefinite">
			</animate>

			<animate 
				attributename="stroke-dashoffset" 
				values="160; 0; -160 "
				keytimes="0; 0.5; 1"
				from="160" 
				to="320"  
				fill="freeze" 
				dur="2s" 
				repeatcount="indefinite">
			</animate>
			</rect>
		</svg> -->
		
		</div>
	</div>
</div>





<!-- @DEMO ONLY DO NOT COPY -->
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			var links = document.querySelectorAll("[data-DEMO-replicate-login]");
			
			links.forEach(function(link) {
				link.addEventListener("click", function(evt) {
					evt.preventDefault();
					var linkHref = this.getAttribute("href");

					const loader = document.querySelector("#timetracker-loader");
					loader.classList.remove('display-none');
					loader.classList.add('display-block');

					if(window.location.href){
						setTimeout(()=> {
							window.location.href = linkHref;
						}, 1500);

					}
					
				});
			});
		});
	</script>