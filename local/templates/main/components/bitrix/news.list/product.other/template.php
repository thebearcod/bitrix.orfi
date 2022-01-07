<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<div class="widget other-products">
    <div class="container-fluid">
        <div class="widget__title d-block d-md-none"><?=getLangPhrase('PRODUCTS_OTHER')?></div>
        <div class="widget-controls row justify-content-between">
            <div class="tab-controls swiper-container col-lg-10">
                <div class="swiper-wrapper">
                    <?foreach($arResult["ITEMS"] as $arItem):?>
                        <a href="javascript:void(0);"
                           class="btn-tab tab-controls-item swiper-slide ajax_load <?=$arParams['ACTIVE_TYPE_ID'] == $arItem['ID'] ? 'active': '' ?>"
                           data-ajax-from="<?= SITE_TEMPLATE_PATH ?>/components/bitrix/news.list/product.other/ajax.php?ACTIVE_TYPE_ID=<?=$arItem['ID']?>&CURRENT_ELEMENT_ID=<?=$arParams['CURRENT_ELEMENT_ID']?>&setlang=<?= LANGUAGE ?>"
                           data-ajax-to=".other-products-body" data-active-class="active"><?=$arItem['NAME']?>
                            <span class="badge badge-tab badge-light"><?=$arItem['COUNT']?></span>
                        </a>
                    <?endforeach;?>
                </div>
            </div>
            <div class="other-products-arrows col-lg-2 d-none d-lg-flex justify-content-end">
                <a href="javascript:void(0)" class="btn-arrow btn-arrow--reverse btn-arrow-prev">
                    <svg class="icon icon-arrow ">
                        <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/frontend/build/img/sprite.svg#icon-arrow"></use>
                    </svg>
                </a>
                <a href="javascript:void(0)" class="btn-arrow btn-arrow-next">
                    <svg class="icon icon-arrow ">
                        <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/frontend/build/img/sprite.svg#icon-arrow"></use>
                    </svg>
                </a>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="position-relative">
            <div class="widget-head">
                <div class="widget__title d-none d-md-flex"><?=getLangPhrase('PRODUCTS_OTHER')?></div>
            </div>
            <div class="widget-body other-products-body p-0">
                <?$APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "product.other.body",
                    Array(
                        "DISPLAY_NAME" => "Y",
                        "DISPLAY_PICTURE" => "Y",
                        "DISPLAY_PREVIEW_TEXT" => "Y",
                        "IBLOCK_TYPE" => "content",
                        "IBLOCK_ID" => IBLOCK_PRODUCTS,
                        "PROPERTY_CODE" => Array("PROPERTY_*"),
                        "SET_TITLE" => "N",
                        "SET_BROWSER_TITLE" => "N",
                        "NEWS_COUNT" => "20",
                        "SORT_BY1" => "SORT",
                        "SORT_ORDER1" => "ASC",
                        "FIELD_CODE" => Array("ID"),
                        "FILTER_NAME" => "typeFilter",
                    )
                );?>
            </div>
        </div>
    </div>
</div>