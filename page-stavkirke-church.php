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
			<div class="hero stavkirkeHero">
			</div>
			<div class="navWidth heroHeadingWrap">
				<div class="waterColorWrapper">
					<img src="/wp-content/uploads/2019/03/Watercolorrectangle3tealSmall.png" class="image waterColor">
					<div class="headerWrap">
						<h1 class="whiteText heroHeading">Stavkirke Church</h1>
						<p class="whiteText">45°22'38.5"N, 86°55'26.7"W</p>
					</div>
				</div>
			</div>
		</section>
		<section id="pageContent">
			<section id ="stavkirkeDesc" class="paddedSection">
				<div class="pageWidth">
					<div class="limitWidth">
						<p>This dedicated Lutheran church is a wooden chapel built in 1995 to
							resemble an ancient Norwegian Borgund chapel of 1100 A.D. and pays
							tribute to the island’s Scandinavian roots. There is also a prayer path
							for meditation. The church is open daily for visitation, meditation
							and special events such as weddings (by permission). Managed by
							Trinity Lutheran Church. (Admission with a donation.)</p>
					</div>
				</div>
			</section>
			<?php get_template_part("/inc/sliders/stavkirkeSlideshow"); ?>
		</section>
	</main>
</div>
<?php
get_footer();
