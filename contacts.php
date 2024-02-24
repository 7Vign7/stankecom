<?php
/**
 * The template for displaying all single posts
 *
 * Template Name: contact-page
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
        <h1 class="title_h2 text-center">Контактная информация</h1>
        <div class="container contact__page page_text">
            <?php the_content(); ?>
            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Abb4add5f3bab24f2cd68b2454c1eeadcd9da665952129619a97fbd7bc0ea7f61&amp;width=100%25&amp;height=500&amp;lang=ru_RU&amp;scroll=true"></script>
        </div>
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
