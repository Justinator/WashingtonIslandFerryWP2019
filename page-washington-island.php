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
						<h2 class="primaryText caps">Washington Island Ferry Schedule</h2>
						<img src="https://wisferry.com/wp-content/uploads/2020/06/6-9-2020-WIF-Schedule-Update.jpg" class="image">
						<div class="scheduleInfo flex-container">
							<p class="noMargin"><em>Schedule is subject to change due to weather and traffic.</em></p>
						</div>
					</div>
					<div id="washDesc" class="ferryDesc">
						<div class="blockText">
							<p>
								Each ferry has ample deck space with open-air seating. A heated cabin on board provides shelter in bad weather and
								the winter. Photo opportunities abound on your trip through Death’s Door, so be sure to bring your camera!
							</p>
							<h3 class="primaryText caps largeHeading">REMINDERS:</h3>
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
					<h5 class="primaryText centerText largeHeading noMargin caps">2020 Rates</h5>
					<p class="centerText"><em>Rates effective March 20, 2020</em></p>
				</div>
				<?php get_template_part("/inc/rates/ferryRates"); ?>
			</section>
			<section id="directions" class="paddedSection">
				<div class="navWidth flex-container">
					<div class="col50">
						<div class="blockText">
							<h3 class="primaryText caps largeHeading">Directions</h3>
							<a href="https://goo.gl/maps/KgALREYf7gF2" target="_blank" rel="noreferrer">
								<img src="/wp-content/uploads/2019/12/mapCapture.jpg" class="image">
							</a>
							<p>
								<a href="https://goo.gl/maps/KgALREYf7gF2" class="primaryLink" target="_blank" rel="noreferrer">215 WI-42<br>
								Ellison Bay, WI 54210</a>
							</p>
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
							<a href="https://goo.gl/maps/KgALREYf7gF2" target="_blank" rel="noreferrer">
								<img src="/wp-content/uploads/2019/03/NorthportMapMedium70.jpg" class="image">
							</a>
							<p class="marginTop">
								The best way to see all of Washington Island is with a vehicle, however, if you plan to visit Washington Island
								without your car, parking is available in our lots near N. Port Des Morts Dr. and behind the Visitor Center.
							</p>
						</div>
					</div>
				</div>
			</section>
			<?php get_template_part("/inc/washingtonFeaturedDest"); ?>
			<div class="pageWidth paddedSection">
				<div class="centerText">
					<h5 class="primaryText caps largeHeading">More questions about Washington Island?</h5>
					<a href="/faq/" class="primaryButton caps">VIEW ALL FAQS</a>
				</div>
			</div>
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
		</section>
	</main>
</div>
<?php
get_footer();
