<!doctype html>
<html lang="ru">
<head>
    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-NCF3JC3');</script>
    <!-- End Google Tag Manager -->
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php wp_title() ?></title>


    <?php
    if ( is_page_template('newdesigned.php') ) {
        ?>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

        <link rel="stylesheet" type="text/css" href="<?= bloginfo('template_directory'); ?>/css/newdesigned.css"/>
        <?php
    }else{
        ?>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
        <link rel="stylesheet" type="text/css" href="<?= bloginfo('template_directory'); ?>/css/grid.css"/>
    <?php
    }
    ?>
    <?php wp_head(); ?>
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NCF3JC3"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script>
(function(campaign, landing) 
{
document.write('<script src="' + (campaign) + (campaign.indexOf('?') == -1 ? '?' : '&') + (landing ? ('landing2=' + landing + '&') : '') 
+ (location.href.indexOf('?') > -1 ? location.href.substr(location.href.indexOf('?') + 1) : '') + '"></' + 'script>');
})
('https://qeqom.adsb4trk.com/o/a4253d935394bb73');
</script>

<div class="popup">
    <div class="offer-popup">
        <div class="offer-body">
            <div class="offer-top">
                <div class="offer_logo">
                    <img class="popup_img" src="img/credit1.jpg" alt="Лого">
                </div>
                <div class="offer_rating">
                    <div class="offer_rating_stars">
                        <div class="offer_rating_stars_icons" style="">
                            <i class="icon_star"></i>
                            <i class="icon_star"></i>
                            <i class="icon_star"></i>
                            <i class="icon_star"></i>
                            <i class="icon_star"></i>
                        </div>
                        <div class="offer_rating_stars_icons_outline">
                            <i class="icon_star_outline" ></i>
                            <i class="icon_star_outline"></i>
                            <i class="icon_star_outline"></i>
                            <i class="icon_star_outline"></i>
                            <i class="icon_star_outline"></i>
                        </div>
                    </div>
                    <div class="offer_rating_text">
                        <span class="popup_rating"></span>
                    </div>
                </div>
            </div>
            <div class="offer-text">
                <div class="offer-sum-text">
                    К выплате
                </div>
                <div class="offer-sum">
                   <span class="popup_first_sum"></span> <div class="offer-sum-rub">руб</div>
                </div>
            </div>
            <div class="offer-text d-flex justify-content-between">
                <div class="offer-sum-text-little">
                    Срок
                </div>
                <div class="offer-sum-little">
                   <span class="popup_time"></span> <div class="offer-sum-rub">дней</div>
                </div>
            </div>
        </div>
        <button class="offer-button">Получить займ</button>

    </div>
</div>

