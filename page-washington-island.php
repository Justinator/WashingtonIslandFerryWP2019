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

				<div id="washingtonWaterColor" class="waterColorWrapper">

					<img src="/wp-content/uploads/2019/03/Watercolorrectangle3tealSmall.png" class="image waterColor">

					<div class="headerWrap">

						<h1 class="whiteText heroHeading">Washington Island Ferry</h1>

					</div>

				</div>

			</div>

		</section>

		<section id="pageContent">

			<section id ="washingtonSchedule" class="paddedSection">

				<div class="navWidth flex-container-schedule">

					<div class="ferryScheduleWrapper">

						<h2 class="primaryText caps">Schedule</h2>

						<?php echo do_shortcode('[MEC id="97"]'); ?>

						<div class="centerText">

							<p><em>Schedule is subject to change due to weather and traffic.</em></p>

						</div>

					</div>

					<div id="washDesc" class="ferryDesc">

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

						<div class="faqButtonWrap">

							<a href="/faq/#WashIslandFAQ/" class="primaryButton caps">Washington ISLAND FAQ</a>

						</div>

					</div>

				</div>

			</section>

			<section id="ferryRates" class="paddedSection ferryRates">

				<div class="pageWidth">

					<h5 class="primaryText centerText largeHeading">2019 Round Trip Rates</h5>

				</div>

				<?php get_template_part("/inc/ferryRates"); ?>

			</section>

			<section id="directions" class="paddedSection">

				<div class="navWidth flex-container">

					<div class="col50">

						<div class="blockText">

							<h3 class="primaryText caps largeHeading">Directions</h3>

							<div class="mapWrapper">

								<?php echo do_shortcode('[wpgmza id="1"]'); ?>

							</div>

							<h4 class="primaryText caps">215 WI-42<br>
								Ellison Bay, WI 54210</h4>

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

			<section id="rockIslandCTA" class="backgroundImage">

				<div id="rockIslandWrap" class="navWidth">

					<div class="waterColorOuter">

						<div class="waterColorWrapper2">

							<img src="/wp-content/uploads/2019/03/WatercolorRectangle2tealMedium.png" id="washWaterColor" class="image waterColor">

							<div class="headerWrap">

								<h4 class="caps whiteText noMargin">INTERESTED IN VISITING ROCK ISLAND STATE PARK?</h4>

								<p class="whiteText noMargin">

									You will need to take a second, passenger-only ferry, the Karfi Ferry, from Washington Island to Rock Island.

								</p>

							</div>

						</div>

						<div id="rockIslandCTABtn" class="centerButton">

							<a href="/rock-island/" class="primaryButton caps">Learn more<span class="screen-reader-text"> about Rock Island</span></a>

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
