<?php
/**
 * The template for displaying all single posts
 *
 * Template Name: about-page
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
    <h1 class="title_h2 text-center">О компании "Станке"</h1>
    <div class="container">
        <div class="row about_page">
            <div class="col-md-3">
                <div class="processing__link_outline">
                    <a href="./proizvodstvo-stanke/">
                             Производство «Станке»
                    </a>
                </div>
                <div class="processing__link_outline">
                    <a href="./informaciya-o-garantii/">
                            Информация о гарантии
                    </a>
                </div>
                <div class="processing__link_outline">
                    <a href="./sertifikaty/">
                             Сертификаты
                    </a>
                </div>
                <div class="processing__link_outline">
                    <a href="./delivery/">
                            Доставка и оплата
                    </a>
                </div>
                <div class="processing__link_outline">
                    <a href="./requisites/">
                             Реквизиты
                    </a>
                </div>
            </div>
            <div class="page_text col-md-9">
                   <?php the_content(); ?>
            </div>
        </div>
    </div>
</main><!-- #main -->

<?php
get_sidebar();
get_footer();
