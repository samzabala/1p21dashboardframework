	<div
		class="attachment-grid-masonry display-none"
	>
		<?php 
		//commented to make infinite scroll work because javascript is weird. but this the component u need :')
		// app_get_component('components/attachment-masonry');
		?>

		<!-- @PLACEHOLDER: DELETE WHEN READY -->
			<?php
			
				$fake_pagination = 1;

				if(isset($_GET['attachment_page'])){
					$fake_pagination = filter_var(
						$_GET['attachment_page'],
						FILTER_VALIDATE_INT
					);
				}

				for($i=1; $i<10; $i++){
					$rand_width = rand ( 1,9 );
					$rand_height = rand ( 1,9 );
				?>
			
				<?php app_get_component('components/attachment','masonry',false,array(
					'placeholder_width' => $rand_width * 100,
					'placeholder_height' => $rand_height * 100,
					'placeholder_img_only' => true
				)); ?>

				
			<?php } ?>
	</div>

<!-- endless scroll status -->
	<div class="attachment-grid-status text-align-center">
		<p class="color-neutral infinite-scroll-request">Loading...</p>
		<p class="color-neutral infinite-scroll-last">End of Attachments</p>
		<!-- <p class="color-neutral infinite-scroll-last">No more pages to load</p> -->
	</div>


<!-- deps -->
<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"  data-turbolinks-track="reload"></script>
<script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"  data-turbolinks-track="reload"></script>
<script src="https://unpkg.com/infinite-scroll@4/dist/infinite-scroll.pkgd.min.js"  data-turbolinks-track="reload"></script>

<!--
	deps to make it work
	- Masonry v4
	- imagesLoaded v4
	- Infinite Scroll v4?? (if theres too many attachments or needed)

-->
<script  data-turbolinks-track="reload">
	// code based off of this boi: https://codepen.io/desandro/pen/XgRpNr
	// modify as needed
	const initMasonry = () => {

		const SELECTOR  = '.attachment-grid-masonry';
		const STATUS  = '.attachment-grid-status';
		const ITEMS = '.asset';

		//render all dem grids
		document.querySelectorAll(SELECTOR).forEach((grid)=>{

			var msnry = new Masonry( grid, {
				itemSelector: ITEMS,
				columnWidth: ITEMS,
				gutter: 20,
				stagger: 30,
				fitWidth: true,
				initLayout: true,
				visibleStyle: { transform: 'translateY(0)', opacity: 1 },
				hiddenStyle: { transform: 'translateY(100px)', opacity: 0 },
			});


			imagesLoaded( grid ).on( 'progress', function() {
				// layout Masonry after each image loads
				grid.classList.remove('display-none');
				grid.style.marginLeft = 'auto';
				grid.style.marginRight = 'auto';

				msnry.layout();
			});

			

			// endless scroll for cases where theres like 9989999 attachments on the note. can comment this part out if uneccesary

				//@NOTE modify this to retrieve the true url to display the next pagination set of attachments. for front end build purposes this script is just a fake bitch
				function nextPageUrlRetriever(){
					return window.location.toString().replace(
						/attachment_page\=[0-9]+/g,
						(
							'&attachment_page='+(
								this.loadCount
								? this.loadCount
								: ''
							)
						)
					)
				}
				let infScroll = new InfiniteScroll( grid, {
					path: nextPageUrlRetriever,
					append: ITEMS,
					outlayer: msnry,
					status: STATUS,
				});
		})
	}
	
		

		initMasonry();
</script>