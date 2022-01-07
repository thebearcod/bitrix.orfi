<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
use Bitrix\Main\Page\Asset;
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8" />
    <title><? $APPLICATION->ShowTitle(); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#fff" />
    <meta name="format-detection" content="telephone=no" />
    <link rel="apple-touch-icon" sizes="180x180" href="<?= SITE_TEMPLATE_PATH ?>/frontend/build/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= SITE_TEMPLATE_PATH ?>/frontend/build/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= SITE_TEMPLATE_PATH ?>/frontend/build/img/favicons/favicon-16x16.png">
    <link rel="manifest" href="<?= SITE_TEMPLATE_PATH ?>/frontend/build/img/favicons/site.webmanifest">
    <link rel="mask-icon" href="<?= SITE_TEMPLATE_PATH ?>/frontend/build/img/favicons/safari-pinned-tab.svg" color="#000000">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?= SITE_TEMPLATE_PATH ?>/frontend/build/img/favicons/mstile-144x144.png">
    <?
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/frontend/build/css/app.css");
    ?>
    <link rel="preload" href="<?= SITE_TEMPLATE_PATH ?>/frontend/src/fonts/Navigo-Light.woff2" as="font" crossorigin="anonymous">
    <link rel="preload" href="<?= SITE_TEMPLATE_PATH ?>/frontend/src/fonts/Navigo-Medium.woff2" as="font" crossorigin="anonymous">
    <?$APPLICATION->ShowHead();?>
</head>
<body>
<!-- BEGIN content -->
<header class="header test">
    <?$APPLICATION->ShowPanel();?>
    <div class="header-wrapper row align-items-center">
        <div class="col-4 col-md-1">
            <a href="javascript:void(0)" class="menu-toggle">
                <svg width="24" height="23" viewBox="0 0 24 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="0.539062" y="0.615234" width="3" height="3" fill="black" />
                    <rect x="10.5391" y="0.615234" width="3" height="3" fill="black" />
                    <rect x="20.5391" y="0.615234" width="3" height="3" fill="black" />
                    <rect x="0.539062" y="10.1211" width="3" height="3" fill="black" />
                    <rect x="10.5391" y="10.1211" width="3" height="3" fill="black" />
                    <rect x="20.5391" y="10.1211" width="3" height="3" fill="black" />
                    <rect x="0.539062" y="19.8037" width="3" height="3" fill="black" />
                    <rect x="10.5391" y="19.8037" width="3" height="3" fill="black" />
                    <rect x="20.5391" y="19.8037" width="3" height="3" fill="black" />
                </svg>
            </a>
        </div>
        <?$APPLICATION->IncludeComponent("bitrix:main.site.selector","header",Array(
                "SITE_LIST" => Array("*all*"),
                "CACHE_TYPE" => "A",
                "CACHE_TIME" => "3600"
            )
        );?>
        <div class="col-4 offset-md-2 text-center">
            <a href="/" class="header-logotype">
                <img src="<?= SITE_TEMPLATE_PATH ?>/frontend/build/img/partials/logotype.svg" alt="Reinnolc">
            </a>
        </div>
        <div class="col-4 text-right">
            <a href="#callback-form" class="btn-consult open-popup">Получить консультацию <svg class="icon icon-mail ">
                    <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/frontend/build/img/sprite.svg#icon-mail"></use>
                </svg>
            </a>
        </div>
    </div>
    <div class="navigation-popup">
        <div class="widget w-100 mt-0">
            <div class="container-fluid">
                <div class="position-relative pb-4">
                    <div class="widget-head">
                        <div class="widget__title">Меню</div>
                    </div>
                    <div class="widget-body main-partners-body p-0">
                        <div class="row">
                            <div class="col-md-12 col-lg-8">
                                <div class="bg-white navigation-popup-col">
                                    <div class="full-navigation">
                                        <div class="full-navigation-category">
                                            <a href="/contacts/" class="full-navigation-category__link">Продукция</a>
                                            <div class="full-navigation-category-subcategory">
                                                <a href="/contacts/" class="full-navigation-category-subcategory__link">GreenTube</a>
                                                <a href="/contacts/" class="full-navigation-category-subcategory__link">Exerger</a>
                                                <a href="/contacts/" class="full-navigation-category-subcategory__link">DeGasExer</a>
                                                <a href="/contacts/" class="full-navigation-category-subcategory__link">GreenVessel</a>
                                            </div>
                                        </div>
                                        <div class="full-navigation-category">
                                            <a href="/contacts/" class="full-navigation-category__link">Технологии</a>
                                            <div class="full-navigation-category-subcategory">
                                                <a href="/contacts/" class="full-navigation-category-subcategory__link">TDU</a>
                                                <a href="/contacts/" class="full-navigation-category-subcategory__link">SDP</a>
                                                <a href="/contacts/" class="full-navigation-category-subcategory__link">WTU</a>
                                                <a href="/contacts/" class="full-navigation-category-subcategory__link">FVC</a>
                                            </div>
                                        </div>
                                        <div class="full-navigation-category">
                                            <a href="/contacts/" class="full-navigation-category__link">Компания</a>
                                            <div class="full-navigation-category-subcategory">
                                                <a href="/contacts/" class="full-navigation-category-subcategory__link">Компетенции</a>
                                                <a href="/contacts/" class="full-navigation-category-subcategory__link">История</a>
                                                <a href="/contacts/" class="full-navigation-category-subcategory__link">Ценности</a>
                                                <a href="/contacts/" class="full-navigation-category-subcategory__link">Команда</a>
                                                <a href="/contacts/" class="full-navigation-category-subcategory__link">Вакансии</a>
                                            </div>
                                        </div>
                                        <div class="full-navigation-category">
                                            <a href="/contacts/" class="full-navigation-category__link">Услуги</a>
                                            <div class="full-navigation-category-subcategory">
                                                <a href="/contacts/" class="full-navigation-category-subcategory__link">Вальцовка</a>
                                                <a href="/contacts/" class="full-navigation-category-subcategory__link">Сварка</a>
                                                <a href="/contacts/" class="full-navigation-category-subcategory__link">Мехобработка</a>
                                                <a href="/contacts/" class="full-navigation-category-subcategory__link">НМК</a>
                                                <a href="/contacts/" class="full-navigation-category-subcategory__link">Производство</a>
                                                <a href="/contacts/" class="full-navigation-category-subcategory__link">Реализация складских остатков</a>
                                            </div>
                                        </div>
                                        <div class="full-navigation-category">
                                            <a href="/contacts/" class="full-navigation-category__link">R&amp;D центр</a>
                                            <div class="full-navigation-category-subcategory">
                                                <a href="/contacts/" class="full-navigation-category-subcategory__link">О центре</a>
                                                <a href="/contacts/" class="full-navigation-category-subcategory__link">Методы и подходы</a>
                                                <a href="/contacts/" class="full-navigation-category-subcategory__link">Сертификаты</a>
                                            </div>
                                        </div>
                                        <div class="full-navigation-category">
                                            <a href="/contacts/" class="full-navigation-category__link">Контакты</a>
                                            <div class="full-navigation-category-subcategory">
                                                <a href="/contacts/" class="full-navigation-category-subcategory__link">Адреса</a>
                                                <a href="/contacts/" class="full-navigation-category-subcategory__link">Расположение</a>
                                            </div>
                                        </div>
                                        <div class="full-navigation-category">
                                            <a href="/contacts/" class="full-navigation-category__link">Инвесторам</a>
                                            <div class="full-navigation-category-subcategory">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-4">
                                <div class="navigation-popup-sidebar">
                                    <div class="navigation-popup-sidebar-item bg-white">
                                        <div class="row h-100">
                                            <div class="col-md-6 mb-5 mb-md-0">
                                                <div class="navigation-popup-sidebar-item__container">
                                                    <div class="navigation-popup-sidebar-item__header">Телефон</div>
                                                    <div class="navigation-popup-sidebar-item__value">
                                                        <a href="tel:+73433850801" class="navigation-popup-sidebar-item__link">+7 (343) 385 08 01</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="navigation-popup-sidebar-item__container">
                                                    <div class="navigation-popup-sidebar-item__header">Почта</div>
                                                    <div class="navigation-popup-sidebar-item__value">
                                                        <a href="mailto:info@reinnolc.com" class="navigation-popup-sidebar-item__link">info@reinnolc.com</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="navigation-popup-sidebar-item bg-white">
                                        <div class="row h-100">
                                            <div class="col-12">
                                                <div class="navigation-popup-sidebar-item__container">
                                                    <div class="navigation-popup-sidebar-item__header">Инжиниринг технологий ReinnolC</div>
                                                    <div class="navigation-popup-sidebar-item__value">
                                                        <a href="/contacts/" class="navigation-popup-sidebar-item__link">Екатеринбург, Технопарк высоких технологий, ул. Конструкторов, д.5</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="navigation-popup-sidebar-item bg-white">
                                        <div class="row h-100">
                                            <div class="col-12">
                                                <div class="navigation-popup-sidebar-item__container">
                                                    <div class="navigation-popup-sidebar-item__header">Инжиниринг продуктов ReinnolC Lab</div>
                                                    <div class="navigation-popup-sidebar-item__value">
                                                        <a href="/contacts/" class="navigation-popup-sidebar-item__link">Москва, Инновационный Центр Сколково, Большой б-р, дом № 42, строение 1</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="navigation-popup-sidebar-item bg-white">
                                        <div class="row h-100">
                                            <div class="col-12">
                                                <div class="navigation-popup-sidebar-item__container contacts-list-item">
                                                    <div class="navigation-popup-sidebar-item__header">Социальные сети</div>
                                                    <div class="navigation-popup-sidebar-item__value">
                                                        <div class="contacts-list-social social-list social-list-md">
                                                            <a href="/contacts/" class="social-list-item">
                                                                <svg class="icon icon-insta ">
                                                                    <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/frontend/build/img/sprite.svg#icon-insta"></use>
                                                                </svg>
                                                            </a>
                                                            <a href="/contacts/" class="social-list-item">
                                                                <svg class="icon icon-fb ">
                                                                    <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/frontend/build/img/sprite.svg#icon-fb"></use>
                                                                </svg>
                                                            </a>
                                                            <a href="/contacts/" class="social-list-item">
                                                                <svg class="icon icon-in ">
                                                                    <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/frontend/build/img/sprite.svg#icon-in"></use>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<main class="main">