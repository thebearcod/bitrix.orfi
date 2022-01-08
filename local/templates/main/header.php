<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Main\Page\Asset;

?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8"/>
    <title><?
        $APPLICATION->ShowTitle(); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="theme-color" content="#fff"/>
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="/favicon.ico">
    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="icon" sizes="192x192" href="<?= SITE_TEMPLATE_PATH ?>/assets/img/icon/192.png">
    <link rel="apple-touch-icon-precomposed" sizes="180x180" href="<?= SITE_TEMPLATE_PATH ?>/assets/img/icon/180.png">
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?= SITE_TEMPLATE_PATH ?>/assets/img/icon/152.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= SITE_TEMPLATE_PATH ?>/assets/img/icon/144.png">
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?= SITE_TEMPLATE_PATH ?>/assets/img/icon/120.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= SITE_TEMPLATE_PATH ?>/assets/img/icon/114.png">
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?= SITE_TEMPLATE_PATH ?>/assets/img/icon/76.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?= SITE_TEMPLATE_PATH ?>/assets/img/icon/72.png">
    <link rel="apple-touch-icon-precomposed" href="<?= SITE_TEMPLATE_PATH ?>/assets/img/icon/57.png">
    <?
    /*<link rel="apple-touch-icon" sizes="180x180" href="<?= SITE_TEMPLATE_PATH ?>/frontend/build/img/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?= SITE_TEMPLATE_PATH ?>/frontend/build/img/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?= SITE_TEMPLATE_PATH ?>/frontend/build/img/favicons/favicon-16x16.png">
        <link rel="manifest" href="<?= SITE_TEMPLATE_PATH ?>/frontend/build/img/favicons/site.webmanifest">
        <link rel="mask-icon" href="<?= SITE_TEMPLATE_PATH ?>/frontend/build/img/favicons/safari-pinned-tab.svg" color="#000000">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="<?= SITE_TEMPLATE_PATH ?>/frontend/build/img/favicons/mstile-144x144.png">
        <?*/
    //Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/bootstrap.min.css");
    Asset::getInstance()->addString(
        '<link href="' . SITE_TEMPLATE_PATH . '/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="screen">'
    );
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/jquery.fancybox.min.css");
    //Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/owl.carousel.min.css");
    Asset::getInstance()->addString(
        '<link href="' . SITE_TEMPLATE_PATH . '/assets/css/owl.carousel.min.css" rel="stylesheet" type="text/css" media="screen">'
    );
    //Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/font-awesome.min.css");
    Asset::getInstance()->addString(
        '<link href="' . SITE_TEMPLATE_PATH . '/assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="screen">'
    );
    //Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/style.css");
    //Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/mobile.css");
    Asset::getInstance()->addString(
        '<link href="' . SITE_TEMPLATE_PATH . '/assets/css/style.css" rel="stylesheet" type="text/css" media="screen">'
    );
    Asset::getInstance()->addString(
        '<link href="' . SITE_TEMPLATE_PATH . '/assets/css/mobile.css" rel="stylesheet" type="text/css" media="only screen and (max-width: 767px)">'
    );


    ?>
    <?
    $APPLICATION->ShowHead(); ?>
</head>
<body>
<!-- BEGIN content -->
<div id="panel">

    <header class="header">
        <?
        $APPLICATION->ShowPanel(); ?>
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-xs-10">
                    <a class="logo" title="Официальный сайт НТЦ Промбезопасность - Главная страница" href="/">
                        <img class="logo__img" src="<?= SITE_TEMPLATE_PATH ?>/assets/img/logo.png"
                             alt="Логотип НТЦ Промбезопасность">
                        <?php
                        $logo = '<span class="logo__text-small">Научно-технический центр</span>	<span class="logo__text-big">Промбезопасность</span>';
                        if ($APPLICATION->GetCurPage(false) === '/'):?>
                            <h1 class="logo__text"><?= $logo ?></h1>
                        <?php
                        else: ?>
                            <div class="logo__text"><?= $logo ?></div>
                        <?php
                        endif;
                        ?>
                    </a>
                </div>
                <div class="mobile-menu">
                    <button class="navbar-toggle toggle-button">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="col-sm-4 col-sm-offset-1 hidden-xs">
                    <div class="header__contact">
                        <div data-toggle="modal" data-target="#modalGeo" class="header__contact-address header__link">
                            <?php
                            // var_dump($_COOKIE["location"]);
                            if (isset($_COOKIE["location"])) {
                                $n = explode('|', $_COOKIE["location"]);
                                $h_adres = $n[2];
                                $h_email = $n[4];
                                $h_phone = $n[3];
                            } else {
                                //oren|51.825178,55.110888|Оренбург, пр. Дзержинского, 2/2|+7(3532)30-56-30|ntc@orfi.ru
                                $h_adres = "Оренбург, пр. Дзержинского, 2/2";
                                $h_email = "ntc@orfi.ru";
                                $h_phone = "+7(3532)30-56-30";
                            }
                            ?>
                            <span id="h_adres"><?php
                                echo $h_adres; ?></span><span class="caret"></span>
                        </div>
                        <div id="h_email"><?php
                            echo $h_email; ?></div>
                    </div>
                </div>
                <div class="col-sm-3 hidden-xs">
                    <div class="header__phone">
                        <div id="h_phone" class="header__phone-num"><?php
                            echo $h_phone; ?></div>
                        <div data-toggle="modal" data-target="#modalPhone" class="header__link">Заказать звонок</div>
                    </div>
                </div>
            </div>
        </div>

    </header>

    <div class="container">
        <ul class="mainnav hidden-xs">
            <li><a href="/company/about/">О компании</a></li>
            <li><a href="/services/">Услуги</a></li>
            <li><a href="/work/">Работы</a></li>
            <li><a href="/uchcenter/about/us/">Учебный центр</a></li>
            <li><a href="/press/news/">Новости</a></li>
            <li><a href="/faq/pb/">Вопрос-ответ</a></li>
            <li><a href="/contacts/">Контакты</a></li>
        </ul>
        <ul class="social list-inline hidden-xs pull-right">
            <li><a title="YouTube" class="yt" target="_blank" href="https://www.youtube.com/c/OrfiRus"></a></li>
            <li><a title="Вконтакте" class="vk" target="_blank" href="https://vk.com/orfiru"></a></li>
            <li><a title="Facebook" class="fb" target="_blank" href="https://www.facebook.com/www.orfi.ru/"></a></li>
            <li><a title="Twitter" class="tw" target="_blank" href="https://twitter.com/orfiru"></a></li>
        </ul>
    </div>

    <div class="container">
        <div class="row">
            <main class="main">
                <?php
                $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    array(
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => SITE_DIR . "include/banner-header.php"
                    ),
                    false
                ); ?>
                <div class="row">
                    <div class="content col-sm-12">

