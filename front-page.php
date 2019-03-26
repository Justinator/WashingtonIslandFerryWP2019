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

			<div class="hero homeHero">

			</div>

			<div class="navWidth heroHeadingWrap flex-container">

				<div id="homeWaterColor" class="waterColorBackground">

					<h1 class="whiteText heroHeading">At the tip of the Door County peninsula, you’ll find Washington Island and the Washington Island Ferry!</h1>

				</div>

			</div>

		</section>

		<section id="pageContent">

			<section id ="schedules">

				<div class="navWidth">

					<h2 class="centerText caps primaryText">Schedules and Rates</h2>

				</div>

				<div class="navWidth wrappedFlexContainer">

					<div class="blockWrapper">

						<a href="/washington-island/">

							<div class="blockOverlay"></div>

							<div class="blockContent">

								<img src="/wp-content/uploads/2019/03/WIF-BucketMedium.jpg" class="blockImage">

								<h5 class="blockTitle"><span class="blockTitleSpan">Washington Island Ferry</span></h5>

							</div>

						</a>

					</div>

					<div class="blockWrapper">

						<a href="/washington-island/">

							<div class="blockOverlay"></div>

							<div class="blockContent">

								<img src="/wp-content/uploads/2019/03/RockIslandBucketMedium.jpg" class="blockImage">

								<h5 class="blockTitle"><span class="blockTitleSpan">Rock Island Ferry</span></h5>

							</div>

						</a>

					</div>

					<div class="blockWrapper">

						<a href="/washington-island/">

							<div class="blockOverlay"></div>

							<div class="blockContent">

								<img src="/wp-content/uploads/2019/03/CherryTrainBucketMedium.jpg" class="blockImage">

								<h5 class="blockTitle"><span class="blockTitleSpan">Cherry Train Tours</span></h5>

							</div>

						</a>

					</div>

				</div>

			</section>

			<section id="aboutFerry" class="paddedSection">

				<div class="pageWidth flex-container centerAlignedContainer">

					<div id="islandWrapper" class="col20">

						<img src="/wp-content/uploads/2019/03/1.0-WatercolorIsland.png" id="watercolorIsland" class="image">

					</div>

					<div id="islandIntro" class="col80">

						<p>

							Washington Island is a 35-square mile, year-round home to 700 people and a destination for thousands of visitors annually. The Washington Island
							Ferry is a vital, year-round mode of transportation, crossing Death’s Door passage on the way to the island. The island offers a variety
							of indoor and outdoor activities suitable for warm or cool weather.

						</p>

						<div class="centerButton">

							<a href="/about/" class="primaryButton centerButton caps">About Us</a>

						</div>

					</div>

				</div>

			</section>

			<section id="gettingHere" class="paddedSection paperback">

				<div class="navWidth flex-container centerAlignedContainer">

					<div class="col50">

						<div class="blockText">

							<h3 class="primaryText caps">Getting Here</h3>

							<p>
								The ferry to Washington Island is located on the tip of the Door Peninsula, in the Northeast
								corner of Wisconsin. Take Highway 57 North from Green Bay to Sturgeon Bay. From there, you can
								take either Hwy 42 or Hwy 57 to Sister Bay. Then, follow Hwy 42 to its end at Northport Pier.
								Once you’re on the ferry, we’ll take it from there!
							</p>

							<div class="buttonContainer">

								<div class="buttonWrapper">

									<a href="/#/" class="primaryButton caps">get directions</a>

								</div>

								<div class="buttonWrapper">

									<a href="/#/" class="primaryButton caps">Where do i park?</a>

								</div>

							</div>

						</div>

					</div>

					<div class="col50">

						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2806.88753139945!2d-86.97963308444835!3d45.29049437909929!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4d4d18e4d182ea0d%3A0xe3e1ba339daffd24!2sNorthport+Pier!5e0!3m2!1sen!2sus!4v1553188765935" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

					</div>

				</div>

			</section>

			<section id="shortcodeTest">

				<div class="pageWidth paddedSection">

					<h2 class="centerText caps primaryText">Upcoming Trips</h2>

					<?php echo do_shortcode('[MEC id="117"]'); ?>

				</div>

			</section>

			<section id="faq" class="paddedSection">

				<div class="navWidth flex-container">

					<div class="faqWrapper">

						<img src="/wp-content/uploads/2019/03/FAQDogSmall.png" class="image">

						<h4 class="primaryText centerText">Can I take my pet on the ferry?</h4>

						<p>
							<strong>Yes!</strong> Leashed pets are allowed on the Washington Island Ferry and the Rock Island Ferry
							free of charge. Don’t forget to share! We love seeing photos of you and your pets taking
							the ferry on social media!
						</p>

					</div>

					<div class="faqWrapper">

						<img src="/wp-content/uploads/2019/03/FAQCarsSmall.png" class="image">

						<h4 class="primaryText centerText">Do I need my car on the Island?</h4>

						<p>
							Yes. There are over 100 miles of paved roads on Washington Island. Some
							distances from the main ferry dock are: Downtown - 3 miles; Jackson Harbor (to
							Rock Island) - 8 miles; Schoolhouse Beach - 6.5 miles. See a detailed map of
							Washington Island <a href="#" class="primaryLink">here</a>.
						</p>

					</div>

					<div class="faqWrapper">

						<img src="/wp-content/uploads/2019/03/FAQToDoSmall.png" class="image">

						<h4 class="primaryText centerText">What is there to do on the island?</h4>

						<p>
							From hiking trails, campsites, beaches and wildlife to the rich history, local
							shops and eateries, there’s something here for everyone! You can find a full list
							of Washington Island activities and attractions <a href="#" class="primaryLink">here</a>.
						</p>

					</div>

				</div>

				<div class="navWidth centerButton">

					<a href="#" class="primaryButton caps">View all faqs</a>

				</div>

			</section>

			<?php get_template_part("/inc/homepageFeaturedDestinations"); ?>

			<?php get_template_part("/inc/contact"); ?>

		</section>

	</main>

</div>

<?php

get_footer();
