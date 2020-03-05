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
				<div class="waterColorWrapper">
					<img src="/wp-content/uploads/2019/03/Watercolorrectangle3tealSmall.png" class="image waterColor">
					<div class="headerWrap">
						<h1 class="whiteText heroHeading">Frequently Asked Questions</h1>
					</div>
				</div>
			</div>
		</section>
		<section id="pageContent">
			<section id="accordions" class="paddedSection limitWidth">
				<div id="faqWrapper">
					<?php get_template_part("/inc/faqs/washingtonIslandFAQ"); ?>
			    <?php get_template_part("/inc/faqs/rockIslandFAQ"); ?>
					<?php get_template_part("/inc/faqs/cherryTrainFAQ"); ?>
					<?php get_template_part("/inc/faqs/birdingFAQ"); ?>
				</div>
			</section>
		</section>
	</main>
</div>
<?php
get_footer();
