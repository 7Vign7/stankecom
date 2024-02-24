<?php
/**
 * The template for displaying all single posts
 *
 * Template Name: services-page
 * Template Post Type: page
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package stankecom
 */

get_header();
?>
	<main id="primary" class="site-main">

        <section>
            <h1 class="title_h2 text-center">Услуги</h1>
            <div class="container">
                <div class="page_text services__text">
                    <?php the_content(); ?>
                </div>
                 <?php echo do_shortcode('[product_categories IDs="39,40,38,41,42" number="12" orderby="include" columns="4" hide_empty="0"]'); ?>
            </div>
        </section>
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
