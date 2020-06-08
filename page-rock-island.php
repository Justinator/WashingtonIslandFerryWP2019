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
						<h2 class="primaryText caps">Schedule update</h2>
						<p>Trips to and from Rock Island are on hold until further notice due to high lake levels and pending guidelines for both State Park and vessel operations during COVID-19. Please check back after June 15th for further information.</p>
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
					<h3 class="primaryText caps largeHeading noMargin">2020 Round Trip Rates</h3>
					<p class="centerText"><em>Rates effective March 20, 2020</em></p>
				</div>
				<?php get_template_part("/inc/rates/rockIslandRates"); ?>
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
							<p>
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
