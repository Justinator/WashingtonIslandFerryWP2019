<?php
/**
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WashingtonIslandResponsive
 */
get_header();
?>
<div id="primary" class="content-area sitemap">
	<main id="main" class="site-main">
		<section id="sitemapEntry">
			<div class="pageWidth">
			<h1 class="primaryText">Sitemap</h1>
			</div>
		</section>
		<div class="pageWidth">
			<h3>Pages</h3>
				<?php wp_list_pages(array('sort_column' => 'post_title', 'exclude' => '419', 'title_li' => ' ', 'depth' => 0)); ?>
		</div>
	</main>
</div>
<?php
get_footer();
