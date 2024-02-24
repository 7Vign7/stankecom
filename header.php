<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package stankecom
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'stankecom' ); ?></a>

	<header id="masthead" class="site-header">


	<div class="container logo-section">
		<div class="row align-items-center">
			<div class="col-md-3 d-flex h-logo"><?php the_custom_logo(); ?></div>
			<div class="col-md-3 d-flex num-block h-num">
				<p class="num-description">Бесплатный звонок по РФ  </p>
                <a class="phone-num" href="tel:+88002504720">8 (800) 250-47-20</a>
			</div>

			<div class="col-md-3">
			<form role="search" method="get" class="search-form" action="https://stankecom.ru/">
			    <div class="d-flex search__border">
			    	<input type="search" class="search-field" placeholder="Поиск…" value="" name="s">
			    	<input type="submit" class="search-submit" value="">
			    </div>
			</form>
			</div>

			<div class="col-md-3 d-flex h-butt">

				<!-- Button trigger modal -->
				<button type="button" class="btn btn-primary btn-modal" data-bs-toggle="modal" data-bs-target="#formModal">
					Обратная связь
				</button>

				<!-- Modal -->
				<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
				  <div class="modal-dialog modal-dialog-centered">
    				<div class="modal-content">
      					<div class="modal-header">
        					<h3 class="modal-title fs-5" id="formModalLabel">Обратная связь</h3>
        					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      					</div>
      					<div class="modal-body">
						  <?php echo do_shortcode('[contact-form-7 id="107abf1" title="Обратная связь"]'); ?>
      					</div>
    				</div>
				  </div>
				</div>
			</div>
		</div>
	</div>

		
		<div class="h-navigation">
			<nav id="site-navigation" class="main-navigation container">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Меню', 'stankecom' ); ?></button>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
			</nav><!-- #site-navigation -->
		</div>	
	</header><!-- #masthead -->
