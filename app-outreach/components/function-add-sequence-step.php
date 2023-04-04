
<div class="module-function function-add-note">
	<!-- @NOTE
		attributes 
			onclick => remove attribute and apply script so the page scrolls to the first step
	-->
	<a href="#step-new"
		data-toggle-switch-on class="btn btn-primary" onclick="scrollToModule(event)">
		Add Step <i class="symbol symbol-plus"></i>
	</a>
	<script>
		function scrollToModule(event){
			
			const $refNewStep = document.querySelector('#step-new'); // @NOTE ref of last or new step module
			$refNewStep.scrollIntoView();

		}
	</script>
</div>