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
<div class="widget product-files">
    <div class="container-fluid">
        <div class="position-relative">
            <div class="widget-head">
                <div class="widget__title"><?=getLangPhrase('DOWNLOADS_TITLE')?></div>
            </div>
            <div class="widget-body product-files-body p-0">
                <div class="product-files-list">
                    <div class="row">
                        <?foreach($arResult["ITEMS"] as $arItem):?>
                            <?$APPLICATION->IncludeComponent("bitrix:news.detail","product.downloads",Array(
                                    "IBLOCK_TYPE" => "content",
                                    "IBLOCK_ID" => "16",
                                    "ELEMENT_ID" => $arItem['ID'],
                                    "FIELD_CODE" => Array("ID","PREVIEW_PICTURE"),
                                    "PROPERTY_CODE" => Array("PROPERTY_*"),
                                    "SET_TITLE" => "N",
                                )
                            );?>
                        <?endforeach;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>