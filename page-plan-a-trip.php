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

								<a href="https://www.google.com/maps/dir//northport+pier+door+county/data=!4m6!4m5!1m1!4e2!1m2!1m1!1s0x4d4d18e4d182ea0d:0xe3e1ba339daffd24?sa=X&ved=2ahUKEwiHqYOk3KfhAhUSCawKHT18BwsQ9RcwEXoECAwQDw" class="primaryLink" target="_blank" rel="noreferrer">215 WI-42<br>
								Ellison Bay, WI 54210</a>

							</p>

							<div class="mapWrapper">

								<?php echo do_shortcode('[wpgmza id="2"]'); ?>

							</div>

						</div>

					</div>

					<div class="col50">

						<div class="smallPaddedWrapper">

							<h4 class="primaryText caps">JACKSON HARBOR/ROCK ISLAND FERRY</h4>

							<p>

								<a href="https://www.google.com/maps/dir/44.4858368,-88.0017408/JACKSON+HARBOR%2FROCK+ISLAND+FERRY/@44.9388371,-87.9893972,9z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x4d4d1d57af1229e3:0xa520e1b0b639592!2m2!1d-86.8563167!2d45.3991096" class="primaryLink" target="_blank" rel="noreferrer">1924 Indian Point Road<br>
								Washington, WI 54246</a>

							</p>

							<div class="mapWrapper">

								<?php echo do_shortcode('[wpgmza id="4"]'); ?>

							</div>

						</div>

					</div>

				</div>

			</section>

		</section>

	</main>

</div>

<?php

get_footer();
