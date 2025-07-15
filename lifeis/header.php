<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="format-detection" content="telephone=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <title><?php bloginfo('name')?></title>
        <!-- Favicon設定 -->
        <!-- <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico"> -->
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/scss/style.css?<?php echo date('YmdHis'); ?>">
        <?php wp_head(); ?>
		<!-- Google tag (gtag.js) -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-980CY05FFZ"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());
		
		  gtag('config', 'G-980CY05FFZ');
		</script>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-67196245-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());
		
		  gtag('config', 'UA-67196245-1');
		</script>
    </head>

    <body <?php body_class(); ?>>

        <?php if ( is_home() || is_front_page() ) : ?>
            <div id="u-loading">
                <div id="loading__text"></div>
                <figure class="u-loading__logo">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/common/logo2.svg" alt="99% HOUSE 1% POWERED by LIFE IS inc." decoding="async">
                </figure>
           </div>
        <?php else : ?>
        <?php endif; ?>

        <main id="main" class="l-main">

            <header class="l-header">

                <div class="p-header">
                    <figure class="p-header__logo">
                        <a href="<?php echo esc_url( home_url( '//' ) ); ?>">
                            <img class="u-sp-none992" src="<?php echo get_template_directory_uri();?>/assets/img/common/logo.svg" alt="1% ARCHITECT LIFE IS" decoding="async">
                            <img class="u-pc-none992" src="<?php echo get_template_directory_uri();?>/assets/img/common/sp-logo.svg" alt="1% ARCHITECT LIFE IS" decoding="async">
                        </a>
                    </figure>
                </div>

            </header>

            <button type="button" id="js-buttonHamburger" class="c-button c-hamburger" aria-controls="globalNavSp" aria-expanded="false">
                <p class="js-buttonHamburger__text c-hamburger__text"></p>
                <span class="c-hamburger__line">
                    <span class="u-visuallyHidden">
                        メニューを開閉する
                    </span>
                </span>
            </button>

            <nav id="p-globalMenuSp">
                <ul class="p-header__list">
                    <li class="p-header__item">
                        <ul class="p-header__list2">
                            <li class="p-header__item2">
                                <a href="<?php echo esc_url( home_url( '//' ) ); ?>">TOP</a>
                            </li>
                            <li class="p-header__item2">
                                <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">ABOUT</a>
                            </li>
                            <li class="p-header__item2">
                                <ul class="p-header__list3">
                                    <li class="p-header__item4">
                                        <a href="<?php echo esc_url( home_url( '/service/' ) ); ?>">SERVICE</a>
                                    </li>
                                    <li class="p-header__item3">
                                        <a href="<?php echo esc_url( home_url( '/service#about' ) ); ?>">９９％HOUSEって？</a>
                                    </li>
                                    <li class="p-header__item3">
                                        <a href="<?php echo esc_url( home_url( '/service#flow' ) ); ?>">施工フロー</a>
                                    </li>
                                    <li class="p-header__item3">
                                        <a href="<?php echo esc_url( home_url( '/service#service' ) ); ?>">各サービス紹介</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="p-header__item2">
                                <ul class="p-header__list3">
                                    <li class="p-header__item4">
                                        <a href="<?php echo esc_url( home_url( '/special/' ) ); ?>">99% HOUSE LIFE</a>
                                    </li>
                                    <li class="p-header__item3">
                                        <a href="<?php echo esc_url( home_url( '/special' ) ); ?>">99% HOUSE LIFE ＃01</a>
                                    </li>
                                    <li class="p-header__item3">
                                        <a href="<?php echo esc_url( home_url( '/special02' ) ); ?>">99% HOUSE LIFE ＃02</a>
                                    </li>
                                    <li class="p-header__item3">
                                        <a href="<?php echo esc_url( home_url( '/special03' ) ); ?>">99% HOUSE LIFE ＃03</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="p-header__item">
                        <ul class="p-header__list2">
                            <li class="p-header__item2">
                                <a href="<?php echo esc_url( home_url( '/housearchive/' ) ); ?>">99% HOUSE事例</a>
                            </li>
                            <li class="p-header__item2">
                                <a href="<?php $args = array(
								'post_type' => 'log',
								'posts_per_page' => -1,
								);
								$logposts = get_posts($args);
								echo get_permalink($logposts[0]); ?>">99%LOG</a>
                            </li>
                            <li class="p-header__item2">
                                <a href="<?php echo esc_url( home_url( '/news/' ) ); ?>">NEWS/EVENT</a>
                            </li>
<!--
                            <li class="p-header__item2">
                                <a href="<?php echo esc_url( home_url( '/log/' ) ); ?>">99% LOG</a>
                            </li>
-->
                            <li class="p-header__item2">
                                <a href="<?php echo esc_url( home_url( '/form/' ) ); ?>">CONTACT</a>
                            </li>
                            <li class="p-header__item2">
                                <a style="color: rgba(0, 0, 0, 0);pointer-events: none;">CONTACT</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>

            <div class="l-siteWrapper">

                <article class="l-article">