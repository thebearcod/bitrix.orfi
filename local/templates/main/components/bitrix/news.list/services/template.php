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
<div class="widget block-methods">
    <div class="container-fluid">
        <div class="position-relative">
            <div class="widget-head">
                <div class="widget__title"><?=getLangPhrase($arParams['LANG_PHRASE_TITLE_TAB'])?></div>
            </div>
            <div class="widget-body block-methods-body p-0">
                <div class="block-methods-list">
                    <?foreach($arResult["ITEMS"] as $key => $arItem):?>
                        <?$APPLICATION->IncludeComponent("bitrix:news.detail","service",Array(
                                "IBLOCK_TYPE" => "content",
                                "ELEMENT_ID" => $arItem['ID'],
                                "FIELD_CODE" => Array("ID","PREVIEW_PICTURE"),
                                "PROPERTY_CODE" => Array("PROPERTY_*"),
                                "SET_TITLE" => "N",
                                "SET_BROWSER_TITLE" => "N",
                                "CLASS_FIRST_ITEM" => $key == 0 ? "opened" : "", // передаем класс для первого элемента
                            )
                        );?>
                    <?endforeach;?>

                </div>
            </div>
        </div>
    </div>
</div>

