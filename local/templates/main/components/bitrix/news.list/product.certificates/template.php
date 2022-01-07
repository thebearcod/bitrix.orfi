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
<div class="widget rnd-patents">
    <div class="container-fluid">
        <div class="position-relative">
            <div class="widget-head">
                <div class="widget__title"><?=getLangPhrase('CERTIFICATES_TITLE')?></div>
            </div>
            <div class="widget-body bg-white rnd-patents-body">
                <div class="rnd-patents-list">
                    <div class="row no-gutters">
                        <?foreach($arResult["ITEMS"] as $arItem):?>
                            <?$APPLICATION->IncludeComponent("bitrix:news.detail","product.certificates",Array(
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