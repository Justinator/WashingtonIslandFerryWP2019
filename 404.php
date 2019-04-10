<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WashingtonIslandResponsive
 */

get_header();
?>

<div id="primary" class="content-area">

	<main id="main" class="site-main">

		<section>

			<div class="hero homeHero">

			</div>

			<div class="navWidth heroHeadingWrap">

				<div id="homeWaterColor" class="waterColorWrapper">

					<img src="/wp-content/uploads/2019/03/Watercolorrectangle3tealSmall.png" class="image waterColor">

					<div class="headerWrap">

						<h1 class="whiteText heroHeading">404 - Sorry, that page must have missed the ferry!</h1>

					</div>

				</div>

			</div>

		</section>

		<section id="pageContent">

			<?php get_template_part("/inc/schedules"); ?>

			<section id="aboutFerry" class="paddedSection">

				<div class="pageWidth flex-container centerAlignedContainer">

					<div id="islandWrapper" class="col20">

						<img src="/wp-content/uploads/2019/04/1.0-WatercolorIsland-1.jpg" id="watercolorIsland" class="image">

					</div>

				</div>

			</section>

			<section id="shortcodeTest">

				<div class="pageWidth paddedSection">

					<h2 class="centerText caps primaryText">Upcoming Washington Island Ferry Trips</h2>

					<?php echo do_shortcode('[MEC id="117"]'); ?>

				</div>

			</section>

		</section>

	</main>

</div>

<?php

get_footer();
