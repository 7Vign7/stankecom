<?php
/**
 * The template for displaying all single posts
 *
 * Template Name: warranty-info-page
 * Template Post Type: page
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package stankecom
 */

get_header();
?>
<div class="cat__main_content">
    <div class="container">
        <a href="./">Главная</a> / <a href="./o-kompanii/">О компании</a>
    </div>
 </div>
<main id="primary" class="site-main">
    <h1 class="title_h2 text-center">Информация о гарантии</h1>
    <div class="container">
         <div class="page_text ">
             <?php the_content(); ?>
         </div>
    </div>
</main><!-- #main -->

<?php
get_sidebar();
get_footer();