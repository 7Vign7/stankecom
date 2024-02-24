<?php
/**
 * The template for displaying all single posts
 *
 * Template Name: news-page
 * Template Post Type: page
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package stankecom
 */

get_header();
?>
    <h2 class="title_h2 news_title_h2 text-center">Новости и события</h2>
	<main id="primary" class="site-main">


        <?php
            if ( have_posts() ) : // если имеются записи в блоге.
              query_posts('cat=24');   // указываем ID рубрик, которые необходимо вывести.
              while (have_posts()) : the_post();  // запускаем цикл обхода материалов блога
        ?>
            <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
            <?php the_content();
              endwhile;  // завершаем цикл.
            endif;
            /* Сбрасываем настройки цикла. Если ниже по коду будет идти еще один цикл, чтобы не было сбоя. */
            wp_reset_query();
        ?>



        <?php the_posts_pagination(); ?>
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();