<?php
/**
 * The template for displaying all single posts
 *
 * Template Name: shop-page
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

        <section class="categories categories__page">
            <h1 class="title_h2 categories_card__title text-center">Каталог</h1>
            <div class="container">
                 <?php echo do_shortcode('[product_categories IDs="17,18,19" number="12" columns="4" parent="0" hide_empty="0"]'); ?>
            </div>
        </section>
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
