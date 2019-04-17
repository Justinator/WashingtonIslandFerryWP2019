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

			<div class="hero webcamHero">

			</div>

			<div class="navWidth heroHeadingWrap">

				<div class="waterColorWrapper">

					<img src="/wp-content/uploads/2019/03/Watercolorrectangle3tealSmall.png" class="image waterColor">

					<div class="headerWrap">

						<h1 class="whiteText heroHeading">Dock Webcams</h1>

					</div>

				</div>

			</div>

		</section>

		<section id="pageContent">

			<div class="centerText paddedSection">

				<div class="pageWidth">

					<p>Get a 24/7 view of our Washington Island Ferry docks! Check weather
						conditions, watch ferry traffic and see our beautiful dock view.
						Updated every 15 seconds, our webcams feature time-lapse video of
						the last 15 minutes at multiple views of both Northport Pier and
						the Washington Island Ferry Dock. </p>

				</div>

				<!--<img id="webcamMap" src="/wp-content/uploads/2019/03/webcams-map.jpg" class="image">-->

				<div id="cameraWrapper" class="fullWidth cameraWrapper">

					<div class="limitWidth">

						<div class="smallPaddedWrapper">

							<h4 class="primaryText caps">Northport Pier Ferry Dock Camera (#1)</h4>

							<!-- webcam.io widget -->
							<script type="text/javascript">window.timelapseview_options=window.timelapseview_options || {};window.timelapseview_options["XM6Y3"] = {"e":"MwA8EP","t":"1","x":"680","y":"620"};</script><script src="https://webcam.io/s/widget-v1_03.load.js?i=XM6Y3" async></script>
							<!-- end webcam.io widget -->

						</div>

					</div>

					<div class="limitWidth">

						<div class="smallPaddedWrapper">

							<h4 class="primaryText caps">Northport Pier Ferry Dock Camera (#2)</h4>

							<!-- webcam.io widget -->
							<script type="text/javascript">window.timelapseview_options=window.timelapseview_options || {};window.timelapseview_options["eytXb"] = {"e":"zoyw09","t":"1","x":"680","y":"620"};</script><script src="https://webcam.io/s/widget-v1_03.load.js?i=eytXb" async></script>
							<!-- end webcam.io widget -->

						</div>

					</div>

				</div>

				<div id="cameraWrapper2" class="fullWidth cameraWrapper">

					<div class="limitWidth">

						<div class="smallPaddedWrapper">

							<h4 class="primaryText caps">Washington Island Ferry Dock Camera (#3)</h4>

							<!-- webcam.io widget -->
							<script type="text/javascript">window.timelapseview_options=window.timelapseview_options || {};window.timelapseview_options["0DKUz"] = {"e":"Pqxlk9","t":"1","x":"680","y":"620"};</script><script src="https://webcam.io/s/widget-v1_03.load.js?i=0DKUz" async></script>
							<!-- end webcam.io widget -->

						</div>

					</div>

				</div>

			</div>

		</section>

	</main>

</div>

<?php

get_footer();
