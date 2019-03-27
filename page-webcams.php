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

						<h1 class="whiteText heroHeading">Washington Island Ferry Docks Webcams</h1>

					</div>

				</div>

			</div>

		</section>

		<section id="pageContent">

			<div class="pageWidth centerText">

				<img id="webcamMap" src="/wp-content/uploads/2019/03/webcams-map.jpg" class="image">

				<p>Get a 24/7 view of our Washington Island Ferry docks. Check weather conditions,
					watch ferry traffic and see our beautiful dock view. </p>

				<div id="cameraWrapper" class="fullWidth flex-container">

					<div class="col50">

						<h3 class="primaryText caps">Northport Pier Ferry Dock Camera #1</h3>

						<!-- webcam.io widget -->
						<script type="text/javascript">window.timelapseview_options=window.timelapseview_options || {};window.timelapseview_options["41Qic"] = {"e":"9bbWg9","t":"1","x":"100%","y":"620"};</script><script src="https://webcam.io/s/widget-v1_03.load.js?i=41Qic" async></script>
						<!-- end webcam.io widget -->

					</div>

					<div class="col50">

						<h3 class="primaryText caps">Northport Pier Ferry Dock Camera #2</h3>

						<!-- webcam.io widget -->
						<script type="text/javascript">window.timelapseview_options=window.timelapseview_options || {};window.timelapseview_options["41Qic"] = {"e":"9bbWg9","t":"1","x":"100%","y":"620"};</script><script src="https://webcam.io/s/widget-v1_03.load.js?i=41Qic" async></script>
						<!-- end webcam.io widget -->

					</div>

				</div>

			</div>

		</section>

	</main>

</div>

<?php

get_footer();
