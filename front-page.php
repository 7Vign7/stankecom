<?php
/**
 * The template for displaying all single posts
 *
 * Template Name: front-page
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

        <div class="">
          <?php
          echo do_shortcode('[smartslider3 slider="3"]');
          ?>
        </div>


        <section class="categories">
            <div class="container">
                <?php echo do_shortcode('[product_categories IDs="17,18,19,20,21,41" orderby="include" hide_empty="0"]');?>
            </div>
        </section>
		<section class="about">
			<div class="container ">
				<div class="row company__left animate__animated animate__fadeInLeft">
					<div class="col-md-6"><h2 class="about-h">
						<?php the_field('about-h'); ?>
					</h2>
					<p class="about-sub-h">
						<?php the_field('about-sub-h'); ?>
					</p>
				</div>
					<div class="col-md-6 company__right">
						<p class="about-text">
						<?php the_field('about-text'); ?>
						</p>
					</div>
				</div>
			</div>
		</section>



		<section class="service">
        	<div class="container text-center">
        	    <div class="row">
					<div class="col">
        	        	<h2 class="title_h2 service__title_h2">
        	        	    Сервис «СТАНКЕ»
        	        	</h2>
					</div>
				</div>
				<div class="row">
        	        <div class="col">
        	            <p class="service__p">
        	                Компания «Станке» как производитель и поставщик станочного оборудования и инструмента предоставляет своим заказчикам качественный и профессиональный сервис.
        	            </p>
        	        </div>
				</div>
				<div class="card__item row">
        	        <div class="card__item_list col-xl-3 col-md-6 d-flex justify-content-center">
        	         <a href="./product-category/services/commissioning-works/">
        	            <div class="card__list card_promo">
        	                <div class="card__body service_card__body">
        	                    <img src="./wp-content/uploads/2023/11/Vectorgrean-1.png" class="service__vector1">
        	                    <h2 class="card__title">
        	                        Пусконаладочные</br> Работы
        	                    </h2>
        	                </div>
        	            </div>
        	         </a>
        	        </div>
        	        <div class="card__item_list col-xl-3 col-md-6 d-flex justify-content-center">
        	          <a href="./product-category/services/third-party-orders/">
        	            <div class="card__list card_promo">
        	                <div class="card__body service_card__body">
        	                    <img src="./wp-content/uploads/2023/11/Vectorgrean2.png" class="service__vector2">
        	                    <h2 class="card__title">
        	                        Строение</br> Заказы
        	                    </h2>
        	                </div>
        	          </a>
        	            </div>
        	        </div>
        	        <div class="card__item_list col-xl-3 col-md-6 d-flex justify-content-center">
        	          <a href="./product-category/services/tumbling-services/">
        	            <div class="card__list card_promo">
        	                <div class="card__body service_card__body">
        	                    <img src="./wp-content/uploads/2023/11/Vectorgrean3.png" class="service__vector3">
        	                    <h2 class="card__title">
        	                        Услуги</br> По галтовке
        	                    </h2>
        	                </div>
        	          </a>
        	            </div>
        	        </div>
        	        <div class="card__item_list col-xl-3 col-md-6 d-flex justify-content-center">
        	          <a href="./product-category/services/processing-on-grinding-machines/">
        	            <div class="card__list card_promo">
        	                <div class="card__body service_card__body">
        	                    <img src="./wp-content/uploads/2023/11/Vectorgrean4.png" class="service__vector4">
        	                    <h2 class="card__title">
        	                        Обработка на</br> Шлифовальных</br> Станках
        	                    </h2>
        	                </div>
        	          </a>
        	            </div>
        	        </div>
        	    </div>
        	</div>
	    </section>

	<section class="brands">
        <div class="container text-center">
            <div class="row">
             <h2  class="col title_h2 brands__title_h2  text-center">
                 Бренды
             </h2>
                <div class="card__item row">
                    <div class="card__item_list col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class=" brands_card__list">

                            <div class="card__body brands_card__body">
                                <a href="./o-kompanii/">
                                    <img src="./wp-content/uploads/2023/11/stanke.png" class="brands__stanke">
                                </a>
                                <h2 class="brands__h2 card__title">
                                    <a href="./o-kompanii/">
                                     СТАНКЕ
                                    </a>
                                </h2>
                                <p>
                                    Российский производитель виброгалтовочного оборудования.
                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="card__item_list col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class=" brands_card__list">
                            <div class="card__body brands_card__body">
                                <a href="./product-category/promyshlennyj-pnevmo-i-elektroinstru/dynabrade-pneumatic-polishers/">
                                    <img src="./wp-content/uploads/2023/11/Dynabrade.png">
                                </a>
                                <h2 class="brands__h2 card__title">
                                   <a href="./product-category/promyshlennyj-pnevmo-i-elektroinstru/dynabrade-pneumatic-polishers/">
                                        DYNABRADE
                                   </a>
                                </h2>
                                <p>
                                    Шлифовальные машинки, портативные пневматические машинки, инструменты
                                    для шлифовки.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card__item_list col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class=" brands_card__list">
                            <div class="card__body brands_card__body">
                                <a href="./product-category/promyshlennyj-pnevmo-i-elektroinstru/fein-angle-grinders/">
                                     <img src="./wp-content/uploads/2023/11/Fein-e1700865098489.png">
                                </a>
                                <h2 class="brands__h2 card__title">
                                   <a href="./product-category/promyshlennyj-pnevmo-i-elektroinstru/fein-angle-grinders/">
                                        FEIN
                                   </a>
                                </h2>
                                <p>
                                    Промышленный электроинструмент
                                    для металлообработки,
                                    ручной электроинструмент.
                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="card__item_list col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class=" brands_card__list">
                            <div class="card__body brands_card__body">
                                <a href="./product-category/promyshlennyj-pnevmo-i-elektroinstru/suhner-grinding-and-polishing-machines/">
                                    <img src="./wp-content/uploads/2023/11/Suhner.png">
                                </a>
                                <h2 class="brands__h2 card__title">
                                    <a href="./product-category/promyshlennyj-pnevmo-i-elektroinstru/suhner-grinding-and-polishing-machines/">
                                        SUHNER
                                    </a>
                                </h2>
                                <p>
                                    Электрические
                                    и пневматические шлифовальные машины, машины с гибким валом, шлифовальные круги.
                                </p>
                            </a>
                            </div>
                        </div>
                    </div>
                    <div class="card__item_list col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class=" brands_card__list">
                            <div class="card__body brands_card__body">

                                <img src="./wp-content/uploads/2023/11/Norton.png">

                                <h2 class="brands__h2 card__title">
                                    NORTON
                                </h2>
                                <p>
                                    Абразивный инструмент, абразивы для авторемонта, круги, диски.
                                </p>
                             </a>
                            </div>
                        </div>
                    </div>
                    <div class="card__item_list col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class=" brands_card__list">
                            <div class="card__body brands_card__body">
                                <a href="#">
                                    <img src="./wp-content/uploads/2023/11/3m.png">
                                </a>
                                <h2 class="brands__h2 card__title">
                                    <a href="./3m-2/">
                                        3M
                                    </a>
                                </h2>
                                <p>
                                    Шлифовальные ленты, круги, щётки. Scotch-Brite Bristle, материалы для полировки.
                                </p>
                            </a>
                            </div>
                        </div>
                    </div>
                </div>
        	</div>
		</div>
    </section>

	<section class="news">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<h2 class="title_h2 news_title_h2 text-center">Новости и события</h2>
				</div>
			</div>
			<div class="row">
				<div class="col reduction">
					<?php echo do_shortcode('[sp_wpcarousel id="70"]'); ?>
				</div>
		</div>
		</div>
		
	</section>

























        
		

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
