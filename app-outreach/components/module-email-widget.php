<div class="module">
    <div class="module-header">
    <div class="module-header module-header-break">
		<h3 class="module-title">Email Validator</h3>
	</div>
    </div>
    <div class="module-content">

		<form action="">

			<p>
				<input type="text" class="input input-single-line input-large font-size-normalize input-block">
			</p>
		
			<div class="flex-sm justify-content-flex-end align-items-center">
				<!-- @if validation message -->
				<div class="flex-1-1">
					<!-- @if success -->
						<span class="color-success">
							<strong>Valid:</strong> Email address confirmed. It is safe to email this address
						</span>
					<!-- @if error -->
						<span class="color-error">
							<strong>Invalid:</strong> Email address not confirmed. It might not be safe to email this address
						</span>
				</div>

				<div class="flex-0-0">
					<button class="btn btn-primary">Check</button>
				</div>
			</div>
		</form>
       
    </div>
</div>