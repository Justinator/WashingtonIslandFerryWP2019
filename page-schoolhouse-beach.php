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
			<div class="hero tripHero">
			</div>
			<div class="navWidth heroHeadingWrap">
				<div class="waterColorWrapper">
					<img src="/wp-content/uploads/2019/03/Watercolorrectangle3tealSmall.png" class="image waterColor">
					<div class="headerWrap">
						<h1 class="whiteText heroHeading">Schoolhouse Beach</h1>
						<p class="whiteText">45°23'53.2"N, 86°55'38.4"W</p>
					</div>
				</div>
			</div>
		</section>
		<section id="pageContent">
			<section id ="stavkirkeDesc" class="paddedSection">
				<div class="pageWidth">
					<div class="limitWidth">
						<p>The most popular swim beach and picnic area on Washington
							Island, this beach features white, polished limestone rocks.
							The stones are unique and limited, and are
							for viewing and appreciation only!</p>
					</div>
				</div>
			</section>
			<?php get_template_part("/inc/schoolhouseSlideshow"); ?>
		</section>
	</main>
</div>
<?php
get_footer();
