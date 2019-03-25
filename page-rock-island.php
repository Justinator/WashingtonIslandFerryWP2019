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

			<div class="navWidth heroHeadingWrap flex-container">

				<div class="smallWaterColor">

					<h1 class="whiteText heroHeading">Rock Island Ferry</h1>

				</div>

			</div>

		</section>

		<section id="pageContent">

			<section id ="rockSchedule" class="paddedSection">

				<div class="navWidth flex-container-reverse">

					<div class="col50">

						<div class="blockText">

							<h2 class="primaryText caps">Visit Rock Island State Park via the Karfi</h2>

							<p>

								Take a trip out of the ordinary when you visit beautiful Rock Island State Park, a 912-acre island
								situated northeast of Washington Island in Lake Michigan. Vehicles are not allowed on the island,
								making it a unique Wisconsin State Park experience.

							</p>

						</div>

					</div>

					<div class="col50">

						<?php get_template_part("/inc/rockIslandSchedule"); ?>

					</div>

				</div>

			</section>

			<section id="roundTripsRock">

				<div class="pageWidth centerText">

					<h3 class="primaryText caps largeHeading">2019 Round Trip Rates</h3>

					<img src="/wp-content/uploads/2019/03/CreditCardIcons-rgb.png" id="rockCredit" class="image">

					<p>

						(Accepted at Northport Pier Ticket Booth ONLY. Credit cards are NOT accepted on board the Rock Island Ferry.)

					</p>

				</div>

				<div class="pageWidth">

					<?php get_template_part("/inc/roundTripRock"); ?>

				</div>

			</section>

			<section id="directions" class="paddedSection">

				<div class="navWidth flex-container">

					<div class="col50">

						<div class="blockText">

							<h3 class="primaryText caps largeHeading">Directions</h3>

							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2806.88753139945!2d-86.97963308444835!3d45.29049437909929!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4d4d18e4d182ea0d%3A0xe3e1ba339daffd24!2sNorthport+Pier!5e0!3m2!1sen!2sus!4v1553188765935" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>

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

					<div class="rockIslandLead">

						<h4 class="caps whiteText">INTERESTED IN VISITING ROCK ISLAND STATE PARK?</h4>

						<p class="whiteText">

							You will need to take a second, passenger-only ferry, the Karfi Ferry, from Washington Island to Rock Island.

						</p>

						<div class="centerButton">

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
