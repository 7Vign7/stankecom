<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package stankecom
 */

?>

	<footer id="colophon" class="site-footer">
		
		<div class="container">
			<div class="row">
				<div class="col-lg-3 footer-logo">
					<?php the_custom_logo(); ?>
				</div>
				<div class="col-lg-3 footer__menu">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'footer-menu-3',
						'menu_id'        => 'primary-menu',
						'menu_class' => 'footer-menu-p'
					)
				);
				?>
				</div>
				 <div class="col-lg-3 footer__links">
                      <div class="footer__spb">
                          <p>САНКТ-ПЕТЕРБУРГ</p>
                          <a href="tel:+78126121190">+7 (812)612-11-90</a>
                      </div>
                      <div class="footer__mcs">
                          <p>МОСКВА</p>
                          <a href="tel:+74956405733">+7 (495) 640-57-33</a>
                      </div>
                      <div class="footer__sm">
                          <p>СОЦ.СЕТИ:</p>
                          <a href="https://www.youtube.com/channel/UCvsOY0OVmu7IuVqO1JInJqg"><img src="./wp-content/uploads/2023/11/free-icon-youtube-174883-1.png" alt="youtube"></a>
                      </div>
                 </div>
				<div class="col-lg-3 footer__menu">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'footer-menu-p',
						'menu_id'        => 'footer-menu-p',
						'menu_class' => 'footer-menu-p'
					)
				);
				?>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
