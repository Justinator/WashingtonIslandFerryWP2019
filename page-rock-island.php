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

			<div class="hero rockHero">

			</div>

			<div class="navWidth heroHeadingWrap">

				<div class="waterColorWrapper">

					<img src="/wp-content/uploads/2019/03/Watercolorrectangle3tealSmall.png" class="image waterColor">

					<div class="headerWrap">

						<h1 class="whiteText heroHeading">Rock Island Ferry</h1>

					</div>

				</div>

			</div>

		</section>

		<section id="pageContent">

			<section id ="rockSchedule2" class="paddedSection">

				<div class="navWidth flex-container-schedule">

					<div class="ferryScheduleWrapper">

						<h2 class="primaryText caps">Rock Island Ferry Schedule</h2>

						<p><em>The Rock Island Ferry operates May 24 through October 14.</em></p>

						<?php echo do_shortcode('[MEC id="134"]'); ?>

						<div class="scheduleInfo flex-container">

							<p class="noMargin"><em>Schedule is subject to change due to weather and traffic.</em></p>

							<div class="printWrapper">

								<svg class="blueIcon" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">

						      <defs>

						        <symbol id="icon-print" viewBox="0 0 26 28">

						          <title>print</title>

						          <path d="M6 24h14v-4h-14v4zM6 14h14v-6h-2.5c-0.828 0-1.5-0.672-1.5-1.5v-2.5h-10v10zM24 15c0-0.547-0.453-1-1-1s-1 0.453-1 1 0.453 1 1 1 1-0.453 1-1zM26 15v6.5c0 0.266-0.234 0.5-0.5 0.5h-3.5v2.5c0 0.828-0.672 1.5-1.5 1.5h-15c-0.828 0-1.5-0.672-1.5-1.5v-2.5h-3.5c-0.266 0-0.5-0.234-0.5-0.5v-6.5c0-1.641 1.359-3 3-3h1v-8.5c0-0.828 0.672-1.5 1.5-1.5h10.5c0.828 0 1.969 0.469 2.562 1.062l2.375 2.375c0.594 0.594 1.062 1.734 1.062 2.562v4h1c1.641 0 3 1.359 3 3z"></path>

						        </symbol>

						      </defs>

						    </svg>

						  <svg class="blueIcon icon-print"><use xlink:href="#icon-print"></use></svg>

							<a href="/wp-content/uploads/2019/04/2019PrintableRockIslandSchedule.pdf" class="primaryLink printLink" target="_blank">View and print schedule</a>

							</div>

						</div>

					</div>

					<div class="ferryDesc">

						<div class="blockText">

							<p>

								Take a trip out of the ordinary when you visit beautiful Rock Island State Park, a 912-acre island
								situated northeast of Washington Island in Lake Michigan. Vehicles are not allowed on the island,
								making it a unique Wisconsin State Park experience.

							</p>

							<h3 class="primaryText caps largeHeading">Reminders:</h3>

							<ul class="starredList">

								<li>Arrive at Jackson Harbor early to park and unload your gear</li>

								<li>Rock Island does not permit vehicles or bicycles</li>

								<li>Tickets are sold on a first-come, first-served basis</li>

								<li>Pets must be on a leash</li>

								<li>There is no smoking aboard the ferry</li>

								<li>Schedule is subject to weather and traffic</li>

							</ul>

						</div>

					</div>

				</div>

			</section>

			<section id="roundTripsRock" class="paddedSection paperback">

				<div class="pageWidth centerText">

					<h3 class="primaryText caps largeHeading">2019 Round Trip Rates</h3>

				</div>

				<?php get_template_part("/inc/roundTripRock"); ?>

				<div class="centerText">

					<img src="/wp-content/uploads/2019/03/CreditCardIcons-rgb.png" id="rockCredit" class="image">

					<p>

						<em>(Accepted at Northport Pier Ticket Booth ONLY. Credit cards are <strong>NOT</strong> accepted on board the
							Rock Island Ferry.)</em>

					</p>

				</div>

			</section>

			<section id="directions" class="paddedSection">

				<div class="navWidth flex-container">

					<div class="col50">

						<div class="blockText">

							<h3 class="primaryText caps largeHeading noMargin">Directions</h3>

							<p >
								The drive from the Washington Island Ferry dock to the Rock Island Ferry dock at Jackson
								Harbor follows County Road W across Washington Island about 8.4 miles and should take about
								20 minutes. Allow time for parking your car and unloading before boarding the passenger-only
								Rock Island Ferry.
							</p>

						</div>

					</div>

					<div class="col50">

						<div class="blockText">

							<h3 class="primaryText caps largeHeading noMargin">Features:</h3>

							<ul class="starredList">

								<li>Rustic sites for tent camping</li>

								<li>Superb hiking, beaches and scenery</li>

								<li>Pottawatomie Lighthouse, the oldest in northern Lake Michigan, restored and open to visitors</li>

								<li>C. H. Thordarson Boathouse and exhibits</li>

								<li>Glimpse at pioneer life of early island township</li>

							</ul>

						</div>

					</div>

				</div>

			</section>

			<div class="pageWidth paddedSection">

				<div class="centerText">

					<h5 class="primaryText caps largeHeading">More questions about Rock Island?</h5>

					<a href="/faq/#rockIslandFAQ" class="primaryButton caps">VIEW ALL FAQS</a>

				</div>

			</div>

		</section>

	</main>

</div>

<?php

get_footer();
