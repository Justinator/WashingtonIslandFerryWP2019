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

			<div class="hero cherryHero">

			</div>

			<div class="navWidth heroHeadingWrap">

				<div class="smallWaterColor">

					<h1 class="whiteText heroHeading">Cherry Train Tours</h1>

				</div>

			</div>

		</section>

		<section id="pageContent">

			<section id ="cherrySchedule" class="paddedSection">

				<div class="navWidth flex-container-schedule">

					<div class="ferryDesc">

						<div class="blockText">

							<h2 class="primaryText caps">Take a Guided Tour of Washington Island!</h2>

							<p>

								During your visit to Washington Island, enjoy our 2-hour narrated tour of the
								island’s features and attractions.

							</p>

						</div>

					</div>

					<div class="ferryScheduleWrapper">

						<?php echo do_shortcode('[MEC id="134"]'); ?>

					</div>

				</div>

			</section>

			<section id="cherryTrips" class="paddedSection">

				<div class="navWidth centerText">

					<h3 class="primaryText caps largeHeading noMargin">2019 Cherry Train Rates</h3>

					<img src="/wp-content/uploads/2019/03/CreditCardIcons-rgb.png" id="rockCredit" class="image">

				</div>

				<div class="navWidth flex-container">

					<div class="col50">

						<?php get_template_part("/inc/cherryTrain"); ?>

						<div class="centerText">

							<p><em>Group tours by reservation, call <a href="tel:(800)223-2094" class="primaryLink">800-223-2094</a></em>.</p>

						</div>

					</div>

					<div class="col50">

						<h4 class="primaryText caps largeHeading noMargin">Reminders:</h4>

							<div class="blockText">

								<ul class="starredList">

									<li>Open air tram tours begin and end at the Washington Island Ferry dock</li>

									<li>Four stops along route, each 10-15 minutes</li>

									<li>Please allow 30 minutes for ferry crossing</li>

									<li>No pets, please!</li>

								</ul>

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
