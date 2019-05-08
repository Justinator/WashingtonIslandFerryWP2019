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

			<div class="navWidth heroHeadingWrap">

				<div id="homeWaterColor" class="waterColorWrapper">

					<img src="/wp-content/uploads/2019/03/Watercolorrectangle3tealSmall.png" class="image waterColor">

					<div class="headerWrap">

						<h1 class="whiteText heroHeading">At the tip of the Door County peninsula, you’ll find Washington Island and the Washington Island Ferry!</h1>

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

					<div id="islandIntro" class="col80">

						<p>

							Washington Island is a 22-square mile, year-round home to over 700 people and a destination for thousands of visitors annually. The Washington Island
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

							<h3 class="primaryText caps largeHeading">Getting to washington Island</h3>

							<p>
								The Washington Island Ferry is located at the tip of the Door Peninsula, in the Northeast
								corner of Wisconsin. Take Highway 57 North from Green Bay to Sturgeon Bay. From there, you can
								take either Hwy 42 or Hwy 57 to Sister Bay. Then, follow Hwy 42 to its end at Northport Pier.
								If you plan to visit Washington Island without your vehicle, parking is available on the
								mainland. Once you board the Washington Island Ferry, we’ll take it from there!
							</p>

							<div class="buttonContainer">

								<div class="buttonWrapper">

									<a href="https://goo.gl/maps/KgALREYf7gF2" class="primaryButton caps" target="_blank" rel="noreferrer">get directions</a>

								</div>

							</div>

						</div>

					</div>

					<div class="col50">

						<div class="mapWrapper" aria-hidden="true">

							<?php echo do_shortcode('[wpgmza id="1"]'); ?>

						</div>

					</div>

				</div>

			</section>

			<section id="shortcodeTest">

				<div class="pageWidth paddedSection">

					<h2 class="centerText caps primaryText">Upcoming Washington Island Ferry Trips</h2>

					<?php echo do_shortcode('[MEC id="117"]'); ?>

				</div>

			</section>

			<section id="faq" class="paddedSection">

				<div class="navWidth flex-container">

					<div class="faqWrapper">

						<img
						sizes="(max-width: 800px) 30vw, 800px"
	          srcset="
	            /wp-content/uploads/2019/05/FAQDogSmall-1_optimized_w_400.jpg 400w,
	            /wp-content/uploads/2019/05/FAQDogSmall-1_optimized_w_600.jpg 600w"
						src="/wp-content/uploads/2019/04/FAQDogSmall.jpg" class="image">

						<h4 class="primaryText centerText">Can I take my pet on the ferry?</h4>

						<p>
							Yes! Leashed pets are allowed on the Washington Island Ferry and the Rock Island Ferry
							free of charge. Don’t forget to share photos of you and your pets taking
							the ferry on social media!
						</p>

					</div>

					<div class="faqWrapper">

						<img
						sizes="(max-width: 800px) 30vw, 800px"
	          srcset="
	            /wp-content/uploads/2019/05/FAQCarsSmall_optimized_w_400.jpg 400w,
	            /wp-content/uploads/2019/05/FAQCarsSmall_optimized_w_600.jpg 600w"
						src="/wp-content/uploads/2019/04/FAQCarsSmall.jpg" class="image">

						<h4 class="primaryText centerText">Do I need my car on Washington Island?</h4>

						<p>Transportation is recommended on Washington Island. You can bring your vehicle,
							motorcycle or bicycle on the Washington Island Ferry. Once you arrive, bicycle, UTV and moped
							rentals are available adjacent to the Washington Island Ferry dock. You can find more information
							<a href="/plan-a-trip/" class="primaryLink">here.<span class="screen-reader-text">Opens the plan a trip page</span></a></p>

					</div>

					<div class="faqWrapper">

						<img
						sizes="(max-width: 800px) 30vw, 800px"
	          srcset="
	            /wp-content/uploads/2019/05/FAQToDoSmall_optimized_w_400.jpg 400w,
	            /wp-content/uploads/2019/05/FAQToDoSmall_optimized_w_600.jpg 600w"
						src="/wp-content/uploads/2019/04/FAQToDoSmall.jpg" class="image">

						<h4 class="primaryText centerText">What can I do on Washington Island?</h4>

						<p>
							From hiking trails, campsites, beaches and wildlife to the rich history, local
							shops and eateries, there’s something here for everyone! You can find a full list
							of Washington Island activities and attractions <a href="/plan-a-trip/" class="primaryLink"><span class="screen-reader-text">Go to the plan a trip page</span>here</a>.
						</p>

					</div>

				</div>

				<div class="navWidth centerButton">

					<a href="/faq/" class="primaryButton caps">View all faqs</a>

				</div>

			</section>

			<?php get_template_part("/inc/homepageFeaturedDestinations"); ?>

			<?php get_template_part("/inc/contact"); ?>

		</section>

	</main>

</div>

<?php

get_footer();
