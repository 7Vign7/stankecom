<?php
/**
 * The template for displaying all single posts
 *
 * Template Name: media-page
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
        <h1 class="title_h2 text-center">Медиа</h1>
        <div class="container media__page page_text">
            <?php the_content(); ?>
        </div>
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
