<?php
/**
 * 
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package stankecom
 */
get_header();
?>
    <h2 class="title_h2 news_title_h2 text-center">Новости и события</h2>
	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.

		the_posts_pagination();
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();