<?php
/**
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WashingtonIslandResponsive
 */
get_header();

?>
<div id="barba-wrapper">

	<div class="barba-container">

		<div id="primary" class="content-area">

			<main id="main" class="site-main">

				<section id="sitemapEntry">

					<div>

						<div>

							<div class="pageWidth">


							<h1 class="primaryText">Sitemap</h1>

							</div>

						</div>

						</div>

						</section>

						<div class="pageWidth">

						<h3>Pages</h3>

							<?php wp_list_pages(array('sort_column' => 'post_title', 'exclude' => '419', 'title_li' => ' ', 'depth' => 0)); ?>

					</div>

			</main>

		</div>

	</div>

</div>

<?php

get_footer();
