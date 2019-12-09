<?php
/**
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WashingtonIslandResponsive
 */
get_header();
?>
<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<section>
			<div class="hero tripHero">
			</div>
			<div class="navWidth heroHeadingWrap">
				<div class="waterColorWrapper">
					<img src="/wp-content/uploads/2019/03/Watercolorrectangle3tealSmall.png" class="image waterColor">
					<div class="headerWrap">
						<h1 class="whiteText heroHeading">Plan a Trip</h1>
					</div>
				</div>
			</div>
		</section>
		<section id="pageContent">
			<section id ="islandSeasons" class="paddedSection removeBottomPadding">
				<div class="pageWidth">
					<div class="limitWidth">
						<h2 class="primaryText caps centerText">An Island for All Seasons</h2>
						<p>
							Whether you are a kayak enthusiast, <a href="/bird-watching/" class="primaryLink">bird watcher<span class="screen-reader-text"> Go to the bird watching page</span></a>
							or just want to explore, you will enjoy the beauty of Washington Island.
						</p>
					</div>
					<div class="fullWidth flex-container paddedSection">
						<div class="col50">
							<div class="videoWrapper">
								<iframe width="90%" height="500px" src="https://www.youtube.com/embed/oUKVkQZZNYw?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
						</div>
						<div class="col50">
							<div class="videoWrapper">
								<iframe width="90%" height="500px" src="https://www.youtube.com/embed/1nzZD9-bJoc?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
						</div>
					</div>
				</div>
			</section>
			<?php get_template_part("/inc/planTrip"); ?>
			<section id="gettingAround" class="paddedSection paperback">
				<div class="pageWidth">
					<h5 class="primaryText centerText largeHeading">Getting Around</h5>
				</div>
				<div class="pageWidth">
					<div class="limitWidth">
						<p>
						Transportation is recommended on Washington Island. You can bring your vehicle,
						motorcycle or bicycle on the Washington Island Ferry. Bicycle and moped rentals
						are available adjacent to the Washington Island Ferry dock once you arrive.
						</p>
						<div class="smallPaddedWrapper">
							<ul class="starredList">
								<li>Bike Rental: available on island dock</li>
								<li>Moped Rental: available near island dock</li>
								<li>UTV Rental: available near island dock</li>
							</ul>
						</div>
					</div>
				</div>
			</section>
			<section id="planMaps">
				<div class="pageWidth flex-container">
					<div class="col50">
						<div class="smallPaddedWrapper">
							<h4 class="primaryText caps">NORTHPORT PIER/WASHINGTON ISLAND FERRY</h4>
							<p>
								<a href="https://goo.gl/maps/KgALREYf7gF2" class="primaryLink" target="_blank" rel="noreferrer">215 WI-42<br>
								Ellison Bay, WI 54210</a>
							</p>
							<a href="https://goo.gl/maps/KgALREYf7gF2" class="primaryLink" target="_blank" rel="noreferrer">
								<img src="/wp-content/uploads/2019/12/northportPierCapture.jpg" class="image">
							</a>
						</div>
					</div>
					<div class="col50">
						<div class="smallPaddedWrapper">
							<h4 class="primaryText caps">JACKSON HARBOR/ROCK ISLAND FERRY</h4>
							<p>
								<a href="https://goo.gl/maps/rivqZvyTSbJ2" class="primaryLink" target="_blank" rel="noreferrer">1924 Indian Point Road<br>
								Washington, WI 54246</a>
							</p>
							<a href="https://goo.gl/maps/rivqZvyTSbJ2" class="primaryLink" target="_blank" rel="noreferrer">
								<img src="/wp-content/uploads/2019/12/jacksonHarborCapture.jpg" class="image">
							</a>
						</div>
					</div>
				</div>
			</section>
		</section>
	</main>
</div>
<?php
get_footer();
