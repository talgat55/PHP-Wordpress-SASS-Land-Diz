<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <title>
        <?php
        if (is_home()) {
            bloginfo('name');
        } else {
            wp_title('');
        }
        ?>
    </title>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="shortcut icon" href="<?php echo get_theme_file_uri('/favicon.png?v=1.1') ?>"
          type="image/x-icon"/>

    <?php wp_head(); ?>
    <!--  Critical css -->
    <style>
        @media (min-width:1200px){.container{max-width:1140px}}.row{display:-ms-flexbox;display:-webkit-box;display:-webkit-flex;display:flex;-ms-flex-wrap:wrap;-webkit-flex-wrap:wrap;flex-wrap:wrap;margin-right:-15px;margin-left:-15px}@media (min-width:576px){.col-sm-7{-ms-flex:0 0 58.333333%;-webkit-box-flex:0;-webkit-flex:0 0 58.333333%;flex:0 0 58.333333%;max-width:58.333333%}.col-sm-5{-ms-flex:0 0 41.666667%;-webkit-box-flex:0;-webkit-flex:0 0 41.666667%;flex:0 0 41.666667%;max-width:41.666667%}.col-sm-8{-ms-flex:0 0 66.666667%;-webkit-box-flex:0;-webkit-flex:0 0 66.666667%;flex:0 0 66.666667%;max-width:66.666667%}.col-sm-4{-ms-flex:0 0 33.333333%;-webkit-box-flex:0;-webkit-flex:0 0 33.333333%;flex:0 0 33.333333%;max-width:33.333333%}}header{-webkit-box-shadow:0 4px 4px rgba(0,0,0,.25);box-shadow:0 4px 4px rgba(0,0,0,.25);font-family:"Ubuntu"}header .top-header{overflow:hidden}header .top-header .first-row.flex-container-row{-webkit-box-pack:start!important;-webkit-justify-content:flex-start!important;-ms-flex-pack:start!important;justify-content:flex-start!important}header .top-header .second-row{position:relative}header .top-header .second-row::before{content:"";position:absolute;top:0;left:0;width:250%;height:100%;background-color:#F8F8F8;z-index:-1}header #logo-img img{display:inline-block;vertical-align:middle}header #logo-text .first{color:#67686A;font-weight:300;padding-right:15px;position:relative}header #logo-text .first span{font-weight:700;display:block;width:100%;text-transform:uppercase}header #logo-text .first:after{content:"";display:block;width:1px;height:34px;background:#67686A;position:absolute;right:0;top:50%;-webkit-transform:translateY(-50%);-ms-transform:translateY(-50%);transform:translateY(-50%)}header #logo-text .second{text-transform:uppercase;padding-left:15px;font-weight:700;color:#67686A}header #logo-text .second span{font-weight:300}header #top-info-list .phones .list{padding:0 0 0 15px;margin:0}header #top-info-list .phones .list li{list-style:none}header #top-info-list .phones .list li a{text-decoration:none;color:#67686A;-webkit-transition:all .3s;-o-transition:all .3s;transition:all .3s}header #top-info-list .phones .list li a:hover{color:#9CCC51;text-decoration:none}header #top-info-list .phones .list li a span{font-weight:700}header #top-info-list .email{padding-left:40px}header #top-info-list .email a{padding-left:17px;color:#67686A;-webkit-transition:all .3s;-o-transition:all .3s;transition:all .3s}header #top-info-list .email a:hover{text-decoration:none;color:#9CCC51}header #top-info-list .email a span{font-weight:700}.bottom-header{background:rgba(16,123,119,.65);position:absolute;top:98px;left:0;width:100%}.bottom-header .link-call{text-decoration:none;padding:7px 0;margin:0 0 0 auto;width:309px}.bottom-header .link-call span{padding:23px 27px;background-color:#85B23E;border-radius:50%;position:relative;z-index:2;-webkit-transition:all .3s;-o-transition:all .3s;transition:all .3s;left:18px}.bottom-header .link-call p{margin-bottom:0;color:#466712;z-index:1;padding:18px 37px;background-color:#9CCC51;border-top-right-radius:40px;border-bottom-right-radius:40px;position:relative;font-weight:500;text-transform:uppercase;-webkit-transition:all .3s;-o-transition:all .3s;transition:all .3s}.bottom-header .link-call:hover p{background-color:#14918D;color:#fff}.bottom-header .navigation .nav-bar-custom{margin:0;padding:0}.bottom-header .navigation .nav-bar-custom li{list-style:none;display:inline-block;padding-left:55px}.bottom-header .navigation .nav-bar-custom li a{color:#fff;line-height:87px;-webkit-transition:all .3s;-o-transition:all .3s;transition:all .3s}.bottom-header .navigation .nav-bar-custom li a:hover{color:#9CCC51;text-decoration:none}.bottom-header .navigation .nav-bar-custom li:first-child{padding-left:0}.hide-title{margin:0;height:0;overflow:hidden}#slider{height:850px;background-color:#14918D;background-image:url(/wp-content/themes/asmart/assets/images/home-slide.jpg);background-size:cover!important}#slider .content{margin-top:87px}#slider .content p{margin-top:51px;display:inline-block;margin-bottom:5px;color:#fff;text-transform:uppercase}#slider .content .title-sub{color:#fff;font-size:25px;text-transform:uppercase;line-height:40px;margin-bottom:0}#slider .content .title-sub span{font-weight:700;width:100%;display:block}#slider .list-service{margin:0 -30px;padding:145px 0 0 0}#slider .list-service li{text-align:center;list-style:none;display:inline-block}#slider .list-service li img{width:auto}#slider .list-service li .title{margin-top:42px;margin-bottom:0;color:#fff;font-size:16px}.flex-container-row{display:-ms-flexbox;display:-webkit-flex;display:-webkit-box;display:flex;-webkit-flex-direction:row;-ms-flex-direction:row;-webkit-box-orient:horizontal;-webkit-box-direction:normal;flex-direction:row;-webkit-flex-wrap:nowrap;-ms-flex-wrap:nowrap;flex-wrap:nowrap;-webkit-justify-content:center;-ms-flex-pack:center;-webkit-box-pack:center;justify-content:center;-webkit-align-content:stretch;-ms-flex-line-pack:stretch;align-content:stretch;-webkit-align-items:center;-ms-flex-align:center;-webkit-box-align:center;align-items:center}
    </style>
</head>

<body <?php body_class(); ?>>
<div class="wrap  <?= get_locale(); ?>">
    <header>
        <?php
        $phone = get_field('phone_theme', 'option');
        $redyPhone = $phone ? pregPhone($phone) : '';


        ?>
        <div class="top-header">
            <div class="container">
                <div class="row">
                    <div class="first-row  flex-container-row col-sm-7 col-xs-12">
                        <a href="<?php echo home_url(); ?>" id="logo-img">
                            <img src="<?php echo get_theme_file_uri('/assets/images/logo.png') ?>" alt="Логотип">
                        </a>
                        <div id="logo-text" class="flex-container-row">
                            <div class="first">
                                <span>дизельное топливо</span>
                                с доставкой по омску и области

                            </div>
                            <div class="second">
                                <span>ООО</span> Дизель Транс
                            </div>
                        </div>
                    </div>
                    <div class="second-row  flex-container-row col-sm-5 col-xs-12">
                        <div id="top-info-list" class="flex-container-row">
                            <div class="phones flex-container-row">
                                <img src="<?php echo get_theme_file_uri('/assets/images/mobile.png') ?>" alt="иконка">
                                <ul class="list">
                                    <li>
                                        <a href="tel:+79131482031">
                                            +7(913) <span>148-20-31</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="tel:+73812482030">
                                            +7(3812) <span>48-20-30</span>
                                        </a>
                                    </li>
                                </ul>

                            </div>
                            <div class="email">
                                <img src="<?php echo get_theme_file_uri('/assets/images/email.png') ?>" alt="иконка">
                                <a href="mailto:diesel-grupp@yandex.ru">
                                    <span>diesel-grupp</span>@yandex.ru
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>



        <!--    --><?php //wp_nav_menu('container=div&menu_id=menu-main&menu_class=mobile-main-container clearfix&theme_location=top_menu'); ?>

    </header>
    <div class="bottom-header">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-xs-12">
                    <nav class="navigation">
                        <ul class="nav-bar-custom">
                            <li class="item">
                                <a href="#">Цена</a>
                            </li>
                            <li class="item">
                                <a href="#">Этапы работы </a>
                            </li>
                            <li class="item">
                                <a href="#">Доставка </a>
                            </li>
                            <li class="item">
                                <a href="#">Отзывы и сертификаты </a>
                            </li>
                            <li class="item">
                                <a href="#">Контакты</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <a href="#" class="link-call flex-container-row">
                            <span>
                                <img src="<?php echo get_theme_file_uri('/assets/images/blob.png') ?>" alt="иконка">
                            </span>
                        <p>
                            Заказать онлайн
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </div>

