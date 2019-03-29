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

			<div class="hero washingtonHero">

			</div>

			<div class="navWidth heroHeadingWrap">

				<div class="waterColorWrapper">

					<img src="/wp-content/uploads/2019/03/Watercolorrectangle3tealSmall.png" class="image waterColor">

					<div class="headerWrap">

						<h1 class="whiteText heroHeading">About the Washington Island Ferry Line</h1>

					</div>

				</div>

			</div>

		</section>

		<section id="pageContent">

			<section id="ferryHistory" class="paddedSection">

				<div class="navWidth flex-container">

					<div class="col50">

						<div class="blockText">

							<h2 class="primaryText caps">Ferry History</h2>

							<p>When you reach the end of Highway 42, at the tip of Wisconsin’s Door County
								peninsula, you’ll find Northport Pier and the Washington Island Ferry Line.</p>

							<p>The Washington Island Ferry Line was started in 1940 with two existing wooden
								ferries. Over the years steel ferries were added and today the line boasts
								modern, Coast Guard-approved vessels that make up to 25 round trips a day during
								high season and two round trips per day in winter.</p>

							<p>After vehicles and passengers are safely on board at the Northport ferry dock,
								the ferry will embark on a 30-minute ride past Plum, Pilot and Detroit Islands.
								This area is filled with history. You will be making the same passage as the
								Native Americans who paddled their canoes from island to island, French explorers
								who came to the area and schooners that traveled this passage a century ago.
								Relax and enjoy the ride!</p>

						</div>

					</div>

					<div class="col50">

						<img src="/wp-content/uploads/2019/03/About-1943.jpeg" class="image">

					</div>

				</div>

			</section>

			<section id="fleet">

				<div class="limitWidth smallPaddedWrapper">

					<h2 class="primaryText caps centerText">Washington Island Ferry Fleet</h2>

					<p>There are four ferries that make up the current Washington Island Ferry fleet.
						Each ferry can carry 150 passengers and 18-21 vehicles. The fleet includes the
						Arni J. Richter, a unique four-season ferry built for the Washington Island
						Ferry Line in 2003. </p>

				</div>

				<?php get_template_part("/inc/arniJRichter"); ?>

				<?php get_template_part("/inc/eyrarbakki"); ?>

				<?php get_template_part("/inc/robertNoble"); ?>

				<?php get_template_part("/inc/washington"); ?>

			</section>

		</section>

	</main>

</div>

<?php

get_footer();
