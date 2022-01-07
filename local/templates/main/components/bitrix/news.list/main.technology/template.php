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
<div class="container-fluid">
    <div class="widget__title d-block d-md-none"><?=getLangPhrase('engineering_technology')?></div>
    <div class="widget-controls row">
        <div class="tab-controls swiper-container col-lg-12">
            <div class="swiper-wrapper">
                <?foreach($arResult["ITEMS"] as $arItem):?>
                    <a href="javascript:void(0);" class="btn-tab tab-controls-item swiper-slide ajax_load <?=$arItem['ID'] == $arResult['ACTIVE_ID'] ? 'active':''?>" data-ajax-from="<?= SITE_TEMPLATE_PATH ?>/components/bitrix/news.detail/main.technology/ajax.php?ACTIVE_ID=<?=$arItem['ID']?>" data-ajax-to=".main-engineering-technology-body" data-active-class="active"><?=$arItem['PROPERTIES']['SHORT_NAME']['VALUE']?></a>
                <?endforeach;?>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="position-relative">
        <div class="widget-head">
            <div class="widget__title d-none d-md-flex"><?=getLangPhrase('engineering_technology')?></div>
        </div>
        <div class="widget-body bg-white main-engineering-technology-body">
            <?$APPLICATION->IncludeComponent("bitrix:news.detail","main.technology",Array(
                    "IBLOCK_TYPE" => "content",
                    "IBLOCK_ID" => "5",
                    "ELEMENT_ID" => $arResult['ACTIVE_ID'],
                    "FIELD_CODE" => Array("ID","PREVIEW_PICTURE"),
                    "PROPERTY_CODE" => Array("PROPERTY_*"),
                    "SET_TITLE" => "N",
                )
            );?>
        </div>
    </div>
</div>

