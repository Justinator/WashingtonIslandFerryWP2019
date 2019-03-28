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

				<div class="pageWidth flex-container">

					<div class="col60">

						<h2 class="primaryText caps">Contact us with any questions or comments about our ferry service, Washington Island,
							Rock Island or the Cherry Train.</h2>

							<?php echo do_shortcode('[caldera_form id="CF5c9ac7d6773cf"]'); ?>

							<h3 class="primaryText caps">Washington Island Ferry Line</h3>

							<p>

								Phone: <a href="tel:(800)223-2094" class="primaryLink">(800) 223-2094</a> or <a href="tel:(920)847-2546" class="primaryLink">(920) 847-2546</a><br>
								Fax: (920) 847-2807<br>
								Email: <a href="mailto:info@wisferry.com" class="primaryLink">info@wisferry.com</a><br>
								Address:<br>
								P.O. Box 39<br>
								Washington Island, WI 54246

							</p>

					</div>

					<div class="col40">

						<div class="mapWrapper">

							<div id="map2"></div>

						</div>

						<p>

							<a href="#" class="primaryLink">215 WI-42<br>
							Ellison Bay, WI 54210</a>

						</p>

						<div class="mapWrapper">

							<div id="map"></div>

						</div>

						<p>

							<a href="#" class="primaryLink">1924 Indian Point Road<br>
							Washington, WI 54246</a>

						</p>

					</div>

				</div>

			</section>

			<section id="drivingDirections" class="paddedSection">

				<div class="pageWidth centerText">

					<h3 class="primaryText caps">Driving Directions</h3>

				</div>

				<div class="limitWidth">

					<div class="smallPaddedWrapper">

						<p>

							The ferry is located on the tip of the Door Peninsula, which is the northeast corner of Wisconsin.
							Take Highway 57 North from Green Bay to Sturgeon Bay. From there, you can take either Hwy
							42 or Hwy 57 to Sister Bay. Then, follow Hwy 42 to its end at Northport Pier.

						</p>

					</div>

				</div>

			</section>

		</section>

	</main>

</div>

<?php

get_footer();
