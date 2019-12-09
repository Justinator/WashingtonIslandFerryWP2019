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
			<div class="hero webcamHero">
			</div>
			<div class="navWidth heroHeadingWrap">
				<div class="waterColorWrapper">
					<img src="/wp-content/uploads/2019/03/Watercolorrectangle3tealSmall.png" class="image waterColor">
					<div class="headerWrap">
						<h1 class="whiteText heroHeading">Island Area Attractions </h1>
					</div>
				</div>
			</div>
		</section>
		<section id="pageContent">
			<div class="pageWidth">
				<div class="fullWidth flex-container paddedSection">
					<div class="col50">
						<div class="videoWrapper">
							<iframe width="90%" height="500px" src="https://www.youtube.com/embed/oUKVkQZZNYw?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
					</div>
					<div class="col50">
						<div class="videoWrapper">
							<iframe width="90%" height="500px" src="https://www.youtube.com/embed/1nzZD9-bJoc?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
					</div>
				</div>
				<div class="limitWidth">
					<div class="smallPaddedWrapper">
						<ul class="starredList">
							<li><a href="http://washingtonisland-wi.com/events/" class="primaryLink" target="_blank" rel="noreferrer">Island Chamber Event List</a></li>
							<li><a href="http://washingtonisland.com/visitors-guide/events/" class="primaryLink" target="_blank" rel="noreferrer">Island Visitors Guide</a></li>
							<li><a href="/bird-watching/" class="primaryLink">Bird Watching</a></li>
							<li><a href="/kayaking/" class="primaryLink">Kayaking</a></li>
							<li><a href="https://www.deathsdoorbbq.com/" class="primaryLink" target="_blank" rel="noreferrer">Death’s Door BBQ</a></li>
							<li><a href="https://www.doorcounty.com/dine/fish-boils/" class="primaryLink" target="_blank" rel="noreferrer">Fish Boils</a></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
	</main>
</div>
<?php
get_footer();
