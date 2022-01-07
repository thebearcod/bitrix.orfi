<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
use Bitrix\Main\Page\Asset;
?>
</main>
<div class="modals">
    <div class="video-modal mfp-hide" id="video-modal">
        <video class="video-js vjs-16-9" controls preload="none" poster="<?= SITE_TEMPLATE_PATH ?>/frontend/build/img/content/engineering-video-dummy.jpg" data-setup='{"fluid": true}'>
            <source src="video/company.mp4" type="video/mp4" />
            <p class="vjs-no-js"> Ваш браузер не поддерживает видео </p>
        </video>
    </div>
    <?$APPLICATION->IncludeComponent(
        "bitrix:form.result.new",
        "form-modal",
        Array(
            "CACHE_TIME" => "3600",
            "CACHE_TYPE" => "A",
            "CHAIN_ITEM_LINK" => "",
            "CHAIN_ITEM_TEXT" => "",
            "EDIT_URL" => "result_edit.php",
            "IGNORE_CUSTOM_TEMPLATE" => "N",
            "LIST_URL" => "result_list.php",
            "SEF_MODE" => "N",
            "SUCCESS_URL" => "",
            "USE_EXTENDED_ERRORS" => "Y",
            "VARIABLE_ALIASES" => Array("RESULT_ID"=>"RESULT_ID","WEB_FORM_ID"=>"WEB_FORM_ID"),
            "WEB_FORM_ID" => "1"
        )
    );?>
</div>
<footer class="footer">
    <div class="container-fluid">
        <div class="footer-line footer-top">
            <div class="row align-items-center">
                <div class="col-md-7 col-lg-5">
                    <div class="row align-items-center">
                        <div class="col-6 col-md-4 col-lg-4">
                            <a href="/" class="footer-logotype">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/frontend/build/img/partials/logotype.svg" alt="Reinnolc">
                            </a>
                        </div>
                        <?$APPLICATION->IncludeComponent("bitrix:main.site.selector","footer",Array(
                                "SITE_LIST" => Array("*all*"),
                                "CACHE_TYPE" => "A",
                                "CACHE_TIME" => "3600"
                            )
                        );?>
                        <div class="col-12 col-md-5 col-lg-5">
                            <div class="social-list">
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
                <div class="col-md-5 col-lg-7 text-center text-md-right d-flex justify-content-center justify-content-md-end footer-top-contacts-end">
                    <div class="footer-top-contacts">
                        <a href="tel:+73433850801" class="footer-top-contacts-item">+7 (343) 385-08-01</a>
                        <a href="mailto:info@reinnolc.com" class="footer-top-contacts-item">info@reinnolc.com</a>
                    </div>
                    <a href="#callback-form" class="btn-consult open-popup footer-top-consult">Получить консультацию <svg class="icon icon-mail ">
                            <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/frontend/build/img/sprite.svg#icon-mail"></use>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="footer-line footer-middle">
            <div class="row">
                <div class="col-lg-2 footer-middle-col footer-middle-col-left">
                    <a href="http://sk.ru" target="_blank" class="footer-sk">
                        <svg class="icon icon-sk footer-sk__image">
                            <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/frontend/build/img/sprite.svg#icon-sk"></use>
                        </svg>
                    </a>
                </div>
                <div class="col-lg-10 footer-middle-col footer-middle-col-right">
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
        </div>
        <div class="footer-line footer-bottom">
            <div class="row">
                <div class="col-md-3">All Right Reserved. Reinnolc, 2020</div>
                <div class="col-md-6 text-md-center">
                    <div class="footer-bottom-links row justify-content-around">
                        <a class="footer-bottom-links-item" href="/contacts/">Политика конфиденциальности</a>
                        <a class="footer-bottom-links-item" href="/contacts/">Юридическая информация</a>
                    </div>
                </div>
                <div class="col-md-3 text-md-right">
                    <div class="website-author">
                        <span>Разработка</span>
                        <a href="https://pragmatica.design" target="_blank">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/frontend/build/img/partials/pragmatica.svg" alt="Разработка Pragmatica Design">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- END content -->
<!-- BEGIN scripts -->
<?php
// Подключаем скрипты
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/frontend/build/js/app.js");
// Устанавливаем мета-теги и OpenGraph из инфоблока с SEO фразами
setSeoValues();
?>
<!-- END scripts -->
</body>
</html>