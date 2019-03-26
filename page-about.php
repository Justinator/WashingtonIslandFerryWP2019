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

				<div class="smallWaterColor">

					<h1 class="whiteText heroHeading">About the Washington Island Ferry Line</h1>

				</div>

			</div>

		</section>

		<section id="pageContent">

			<section id ="washingtonSchedule">

				<div class="navWidth flex-container-schedule">

					<div class="ferryScheduleWrapper">

						<h2 class="primaryText caps">Ferry Schedule</h2>

						<?php echo do_shortcode('[MEC id="97"]'); ?>

					</div>

					<div class="ferryDesc">

						<div class="blockText">

							<p>

								Each ferry has ample deck space with open-air seating. A heated cabin on board provides shelter in bad weather and
								the winter. Photo opportunities abound on your trip through Death’s Door, so be sure to bring your camera!

							</p>

							<h3 class="primaryText caps">REMINDERS:</h3>

							<ul class="starredList">

								<li>Please be in line 15 minutes prior to departure</li>

								<li>Tickets are sold on a first-come, first-served basis</li>

								<li>Pets must be on a leash or in a vehicle</li>

								<li>If you are not taking your car to the island, please park at Northport Pier</li>

								<li>There is no smoking on board the ferry</li>

								<li>Not responsible for low exhaust systems</li>

							</ul>

						</div>

					</div>

				</div>

			</section>

			<section id="ferryRates" class="paddedSection ferryRates">

				<div class="pageWidth">

					<h5 class="primaryText centerText largeHeading">Ticket Rates</h5>

				</div>

				<?php get_template_part("/inc/ferryRates"); ?>

			</section>

			<section id="directions" class="paddedSection">

				<div class="navWidth flex-container">

					<div class="col50">

						<div class="blockText">

							<h3 class="primaryText caps largeHeading">Directions</h3>

							<div class="mapWrapper">

								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2806.88753139945!2d-86.97963308444835!3d45.29049437909929!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4d4d18e4d182ea0d%3A0xe3e1ba339daffd24!2sNorthport+Pier!5e0!3m2!1sen!2sus!4v1553188765935" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>

							</div>

							<p class="marginTop">
								The ferry to Washington Island is located on the tip of the Door Peninsula, in the Northeast corner of Wisconsin. Take
								Highway 57 North from Green Bay to Sturgeon Bay. From there, you can take either Hwy 42 or Hwy 57 to Sister Bay.
								Then, follow Hwy 42 to its end at Northport Pier.
							</p>

						</div>

					</div>

					<div class="col50">

						<div class="blockText">

							<h3 class="primaryText caps largeHeading">Parking</h3>

							<img src="/wp-content/uploads/2019/03/NorthportMapMedium70.jpg" class="image">

							<p class="marginTop">

								The best way to see all of Washington Island is with a vehicle, however, if you plan to visit Washington Island
								without your car, parking is available in our lots near N. Port Des Morts Dr. and behind the Visitor Center.

							</p>

						</div>

					</div>

				</div>

			</section>

			<section id="rockIsland" class="backgroundImage">

				<div id="rockIslandWrap" class="navWidth">

					<div id="rockIslandLead" class="background">

						<h4 class="caps whiteText noMargin">INTERESTED IN VISITING ROCK ISLAND STATE PARK?</h4>

						<p class="whiteText noMargin">

							You will need to take a second, passenger-only ferry, the Karfi Ferry, from Washington Island to Rock Island.

						</p>

						<div id="rockIslandCTABtn" class="centerButton">

							<a href="/#/" class="primaryButton caps">Learn more</a>

						</div>

					</div>

				</div>

			</section>

			<?php get_template_part("/inc/washingtonFeaturedDest"); ?>

		</section>

	</main>

</div>

<?php

get_footer();
