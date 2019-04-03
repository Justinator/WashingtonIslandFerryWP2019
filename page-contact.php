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

			<div class="hero contactHero">

			</div>

			<div class="navWidth heroHeadingWrap">

				<div class="waterColorWrapper">

					<img src="/wp-content/uploads/2019/03/Watercolorrectangle3tealSmall.png" class="image waterColor">

					<div class="headerWrap">

						<h1 class="whiteText heroHeading">Contact the Washington Island Ferry</h1>

					</div>

				</div>

			</div>

		</section>

		<section id="pageContent">

			<section id ="contactWISFerry">

				<div class="pageWidth flex-container paddedSection">

					<div class="col60">

						<div id="contactInfoWrapper">

							<h3 class="primaryText caps">Contact us with any questions or comments about our ferry service, Washington Island,
								Rock Island or the Cherry Train.</h3>

								<?php echo do_shortcode('[caldera_form id="CF5c9ac7d6773cf"]'); ?>

							<div class="marginTop">

								<h3 class="primaryText caps">Washington Island Ferry Line</h3>

								<p>

									Phone: <a href="tel:(800)223-2094" class="primaryLink">(800) 223-2094</a> or <a href="tel:(920)847-2546" class="primaryLink">(920) 847-2546</a><br>
									Fax: (920) 847-2807<br>
									Email: <a href="mailto:info@wisferry.com" class="primaryLink">info@wisferry.com</a><br>
									Address:<br>
									P.O. Box 39<br>
									Washington Island, WI 54246

								</p>

								<h3 class="primaryText caps">Driving Directions</h3>

								<p>

									The ferry is located on the tip of the Door Peninsula, which is the northeast corner of Wisconsin.
									Take Highway 57 North from Green Bay to Sturgeon Bay. From there, you can take either Hwy
									42 or Hwy 57 to Sister Bay. Then, follow Hwy 42 to its end at Northport Pier.

								</p>

							</div>

						</div>

					</div>

					<div class="col40">

						<h4 class="primaryText caps">NORTHPORT PIER/WASHINGTON ISLAND FERRY</h4>

						<p>

							<a href="https://www.google.com/maps/dir//northport+pier+door+county/data=!4m6!4m5!1m1!4e2!1m2!1m1!1s0x4d4d18e4d182ea0d:0xe3e1ba339daffd24?sa=X&ved=2ahUKEwiHqYOk3KfhAhUSCawKHT18BwsQ9RcwEXoECAwQDw" class="primaryLink" target="_blank" rel="noreferrer">215 WI-42<br>
							Ellison Bay, WI 54210</a>

						</p>

						<div class="mapWrapper">

							<?php echo do_shortcode('[wpgmza id="2"]'); ?>

						</div>

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

			</section>

		</section>

	</main>

</div>

<?php

get_footer();
