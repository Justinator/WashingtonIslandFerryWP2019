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

				<div class="smallWaterColor">

					<h1 class="whiteText heroHeading">Frequently Asked Questions</h1>

				</div>

			</div>

		</section>

		<section id="pageContent">
			<!-- Accordion 1 -->
	    <section class="accordion" role="tablist" aria-live="polite" data-behavior="accordion">

	      <article class="accordion__item js-show-item-default" data-binding="expand-accordion-item">
	        <span id="tab1" tabindex="0" class="accordion__title" aria-controls="panel1" role="tab" aria-selected="false" aria-expanded="false" data-binding="expand-accordion-trigger">
	          <h5>Use the tab key to navigate...</h5>
	        </span>

	        <div id="panel1" class="accordion__content" role="tabpanel" aria-hidden="true" aria-labelledby="tab1" data-binding="expand-accordion-container">
	          <div class="accordion__content-inner">
	            <p>You can cycle through all the different accordion items through tabbing.</p>
	          </div>
	        </div>

	      </article>

	      <article class="accordion__item js-show-item-default" data-binding="expand-accordion-item">
	        <span id="tab2" tabindex="0" class="accordion__title" aria-controls="panel2" role="tab" aria-selected="false" aria-expanded="false" data-binding="expand-accordion-trigger">
	          <h5>Or, you can use your mouse.</h5>
	        </span>

	        <div id="panel2" class="accordion__content" role="tabpanel" aria-hidden="true" aria-labelledby="tab2" data-binding="expand-accordion-container">
	          <div class="accordion__content-inner">
	            <p>This accordion can be used by both mouse and keyboard-only users.</p>
	          </div>
	        </div>
	      </article>

	      <article class="accordion__item js-show-item-default" data-binding="expand-accordion-item">
	        <span id="tab3" tabindex="0" class="accordion__title" aria-controls="panel3" role="tab" aria-selected="false" aria-expanded="false" data-binding="expand-accordion-trigger">
	          <h5>Click here to view more</h5>
	        </span>

	        <div id="panel3" class="accordion__content" role="tabpanel" aria-hidden="true" aria-labelledby="tab3" data-binding="expand-accordion-container">
	          <div class="accordion__content-inner">
	            <p>You can also use either the space bar or enter key to expand/collapse these panels.</p>
	          </div>
	        </div>
	      </article>

	      <article class="accordion__item js-show-item-default" data-binding="expand-accordion-item">
	        <span id="tab4" tabindex="0" class="accordion__title" aria-controls="panel4" role="tab" aria-selected="false" aria-expanded="false" data-binding="expand-accordion-trigger">
	          <h5>ARIA</h5>
	        </span>

	        <div id="panel4" class="accordion__content" role="tabpanel" aria-hidden="true" aria-labelledby="tab4" data-binding="expand-accordion-container">
	          <div class="accordion__content-inner">
	            <p>This accordion makes use of ARIA tags which help aid accessibility.</p>
	          </div>
	        </div>
	      </article>

	    </section>

	    <!-- Accordion 2 -->
	    <section class="accordion" role="tablist" aria-live="polite" data-behavior="accordion">
	      <article class="accordion__item js-show-item-default" data-binding="expand-accordion-item">
	        <span id="tab5" tabindex="0" class="accordion__title" aria-controls="panel5" role="tab" aria-selected="false" aria-expanded="false" data-binding="expand-accordion-trigger">
	          <h5>Heading 1</h5>
	        </span>

	        <div id="panel5" class="accordion__content" role="tabpanel" aria-hidden="true" aria-labelledby="tab5" data-binding="expand-accordion-container">
	          <div class="accordion__content-inner">
	            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
	          </div>
	        </div>

	      </article>

	      <article class="accordion__item js-show-item-default" data-binding="expand-accordion-item">
	        <span id="tab6" tabindex="0" class="accordion__title" aria-controls="panel6" role="tab" aria-selected="false" aria-expanded="false" data-binding="expand-accordion-trigger">
	          <h5>Heading 2</h5>
	        </span>

	        <div id="panel6" class="accordion__content" role="tabpanel" aria-hidden="true" aria-labelledby="tab6" data-binding="expand-accordion-container">
	          <div class="accordion__content-inner">
	            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
	          </div>
	        </div>
	      </article>

			</section>

		</section>

	</main>

</div>

<?php

get_footer();
