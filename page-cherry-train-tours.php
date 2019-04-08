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

				<div class="waterColorWrapper">

					<img src="/wp-content/uploads/2019/03/Watercolorrectangle3tealSmall.png" class="image waterColor">

					<div class="headerWrap">

						<h1 class="whiteText heroHeading">Cherry Train Tours</h1>

					</div>

				</div>

			</div>

		</section>

		<section id="pageContent">

			<section id ="cherrySchedule" class="paddedSection">

				<div class="navWidth flex-container-schedule">

					<div class="ferryScheduleWrapper">

						<h2 class="primaryText caps">Cherry Train Schedule</h2>

						<p><em>The Cherry Train operates May 18 through October 20.</em></p>

						<?php echo do_shortcode('[MEC id="361"]'); ?>

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

							<a href="/wp-content/uploads/2019/04/2019PrintableCherryTrainSchedule.pdf" class="primaryLink printLink" target="_blank">View and print schedule</a>

							</div>

						</div>

					</div>

					<div class="ferryDesc">

						<div class="blockText">

							<p>

								During your visit to Washington Island, enjoy our 2-hour narrated tour of the
								island’s features and attractions.

							</p>

							<h4 class="primaryText caps largeHeading">Reminders:</h4>

							<ul class="starredList">

								<li>Open air tram tours begin and end at the Washington Island Ferry dock</li>

								<li>Up to four stops along route, each 10-15 minutes</li>

								<li>Please allow 30 minutes for ferry crossing</li>

								<li>No pets, please!</li>

							</ul>

						</div>

					</div>

				</div>

			</section>

			<section id="roundTripsCherry" class="paddedSection paperback">

				<div class="pageWidth centerText">

					<h3 class="primaryText caps largeHeading">2019 Cherry Train Rates</h3>

				</div>

				<?php get_template_part("/inc/cherryTrain"); ?>

				<div class="centerText">

					<img src="/wp-content/uploads/2019/03/CreditCardIcons-rgb.png" id="rockCredit" class="image">

					<p><em>Group tours by reservation, call <a href="tel:(800)223-2094" class="primaryLink">800-223-2094</a></em>.</p>

				</div>

			</section>

			<section id="cherryTrainPOI">

				<?php get_template_part("/inc/cherryTrainPOI"); ?>

			</section>

			<!--<section id="groupTours">

				<div class="pageWidth">

					<div class="centerText">

						<h5 class="largeHeading primaryText caps">Charter Tour Information</h5>

					</div>

					<div class="limitWidth">

						<p>The Cherry Train offers the choice of charter reservations for bus
							tours, weddings, business tours, family reunions/outings, Boy/Girl
							Scout trips, school functions, international touring groups, office
							parties, anniversary gatherings, seminars, surprise party tours,
							sports groups, conventions, etc.</p>

						<p>We offer customized tours for any size group. We also provide
							Step-On-Guides for your bus tour to our island. Washington
							Island Ferry Lines will transport your bus and passengers while
							they relax on the bus enjoying the gorgeous view, colors and
							beauty of spring, summer and fall! An island experience is
							truly the highlight of any tour. Our native island guides
							provide history, legend and folklore...along with earthy
							island humor and stories you won't believe!</p>

						<p>Contact the Cherry Train Tour Office at <a href="tel:(920)847-2546" class="primaryLink">(920) 847-2546</a> for more information.</p>

					</div>

				</div>

			</section>-->

			<div class="pageWidth paddedSection">

				<div class="centerText">

					<h5 class="primaryText caps largeHeading">More questions about Cherry Train Tours?</h5>

					<a href="/faq/#cherryTrainFAQ" class="primaryButton caps">VIEW ALL FAQS</a>

				</div>

			</div>

		</section>

	</main>

</div>

<?php

get_footer();
