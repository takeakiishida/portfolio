<!DOCTYPE html>
<html lang="ja">
<head>
    <!-- ログインユーザーのアクセスはカウントしない -->
    <?php if ( !is_user_logged_in() ) : ?>
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-WPGSPHS');</script>
        <!-- End Google Tag Manager -->
    <?php endif; ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php if(is_home()): ?>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/multiscroll.js/0.2.2/jquery.multiscroll.css">
    <?php endif; ?>
    <link rel="icon" type="image/x-icon" href="<?= mypath(); ?>img/favicon.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <title>Takeaki ishida</title>
</head>
<body id="body">
    <!-- ログインユーザーのアクセスはカウントしない -->
    <?php if ( !is_user_logged_in() ) : ?>
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WPGSPHS"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
    <?php endif; ?>
    <header class="l-header <?php if(!is_home()):  echo("l-header--color"); endif;?>" id="header">
            <!-- TOPページのみ表示。ハンバーガーメニュー -->
            <?php if(is_home()): ?>
                <div class="l-header-hamburger__area">
                    <span class="l-header-hamburger__line"></span>
                    <span class="l-header-hamburger__line"></span>
                    <span class="l-header-hamburger__line"></span>
                </div>
                <nav class="l-header-hamburger__nav">
                    <ul>
                        <li><a href="<?= home_url(); ?>">TOP</a></li>
                        <li><a href="<?php the_permalink(10); ?>">Works</a></li>
                        <li><a href="<?php the_permalink(14); ?>">About</a></li>
                        <li><a href="<?php the_permalink(12); ?>">Contact</a></li>
                    </ul>
                </nav>
            <?php endif; ?>
            <!-- TOPページには表示しない -->
            <?php if(!is_home()): ?>
                <nav class="l-header-nav">
                    <div class="l-header-nav__logo">
                        <h1><a href="<?= home_url(); ?>">Takeaki ishida</a></h1>
                    </div>
                    <ul class="l-header-nav__list">
                        <li class="l-header-nav__item"><a href="<?= home_url(); ?>">Top</a></li>
                        <li class="l-header-nav__item"><a href="<?php the_permalink(10); ?>">Works</a></li>
                        <li class="l-header-nav__item"><a href="<?php the_permalink(14); ?>">About</a></li>
                        <li class="l-header-nav__item"><a href="<?php the_permalink(12); ?>">Contact</a></li>
                    </ul>
                </nav>
            <?php endif; ?>
            
            <!-- TOPページ以外で表示。ハンバーガーメニュー -->
            <?php if(!is_home()): ?>
                <div class="l-header-hamburger__area l-header-hamburger__area--pc">
                    <span class="l-header-hamburger__line"></span>
                    <span class="l-header-hamburger__line"></span>
                    <span class="l-header-hamburger__line"></span>
                </div>
                <nav class="l-header-hamburger__nav">
                    <ul>
                        <li><a href="<?= home_url(); ?>">TOP</a></li>
                        <li><a href="<?php the_permalink(10); ?>">Works</a></li>
                        <li><a href="<?php the_permalink(14); ?>">About</a></li>
                        <li><a href="<?php the_permalink(12); ?>">Contact</a></li>
                    </ul>
                </nav>
            <?php endif; ?>
            <?php wp_head(); ?>
    </header>
    <!-- /.header -->