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
							<div class="blockText">
								<div class="printWrapper">
									<?php get_template_part('/inc/svg-icons/print'); ?>
									<a href="/wp-content/uploads/2020/03/2020-Printable-Cherry-Train-Schedule.pdf" class="primaryLink printLink" target="_blank">View and print schedule</a>
								</div>
								<div class="printWrapper">
									<?php get_template_part('/inc/svg-icons/print'); ?>
									<a href="/wp-content/uploads/2020/03/2020-Printable-Washington-Island-Ferry-Brochure.pdf" class="primaryLink printLink" target="_blank">View and print 2020 brochure</a>
								</div>
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
					<h3 class="primaryText caps largeHeading noMargin">2020 Cherry Train Rates</h3>
					<p class="centerText"><em>Rates effective March 20, 2020</em></p>
				</div>
				<?php get_template_part("/inc/rates/cherryTrainRates"); ?>
				<div class="centerText">
					<img src="/wp-content/uploads/2019/03/CreditCardIcons-rgb.png" id="rockCredit" class="image">
					<p><em>Group tours by reservation, call <a href="tel:(800)223-2094" class="primaryLink">800-223-2094</a></em>.</p>
				</div>
			</section>
			<section id="cherryTrainPOI">
				<?php get_template_part("/inc/cherryTrainPOI"); ?>
			</section>
			<div class="pageWidth paddedSection">
				<div class="centerText">
					<h5 class="primaryText caps largeHeading">More questions about the Cherry Train?</h5>
					<a href="/faq/#cherryTrainFAQ" class="primaryButton caps">VIEW ALL FAQS</a>
				</div>
			</div>
		</section>
	</main>
</div>
<?php
get_footer();
