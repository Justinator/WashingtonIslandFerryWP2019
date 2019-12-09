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
			<div class="hero farmHero">
			</div>
			<div class="navWidth heroHeadingWrap">
				<div class="waterColorWrapper">
					<img src="/wp-content/uploads/2019/03/Watercolorrectangle3tealSmall.png" class="image waterColor">
					<div class="headerWrap">
						<h1 class="whiteText heroHeading">Farm Museum</h1>
						<p class="whiteText">45°23'55.8"N, 86°51'23.6"W</p>
					</div>
				</div>
			</div>
		</section>
		<section id="pageContent">
			<section id ="stavkirkeDesc" class="paddedSection">
				<div class="pageWidth">
					<div class="limitWidth">
						<p>See pioneer farm buildings, tools and equipment, small farm
							animals and exhibits representing Washington Island’s pioneer
							farming, in particular the horse-drawn era. Costumed re-enactors
							demonstrate pioneer skills on special days such as Farm Market
							Thursday afternoons and special events during the season.</p>
					</div>
				</div>
			</section>
			<?php get_template_part("/inc/farmSlideshow"); ?>
		</section>
	</main>
</div>
<?php
get_footer();
