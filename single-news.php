<?php
/**
 * Template post type: post
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package stankecom
 */

?>

    <div class="container">
        <article id="post-<?php the_ID(); ?>" class="news__blocks"<?php post_class(); ?>>
        	<div class="news__block">
                <div class="news__imgData">
                	<?php stankecom_post_thumbnail(); ?>
                	<p><?php the_date(); ?></p>
                </div>
        	    <div class="entry-content news__text page_text">
        	        <h2>
        	            <?php the_title( '<h2 class="title__about">', '</h2>' ); ?>
        	        </h2>
        	    	<p>
        	    	    <?php the_excerpt(); ?>
        	    	</p>
        	    	<a class="news__verbose" href="<?php echo get_the_permalink(); ?>">Читать статью</a>
        	    </div><!-- .entry-content -->
        	</div>

        </article><!-- #post-<?php the_ID(); ?> -->
    </div>