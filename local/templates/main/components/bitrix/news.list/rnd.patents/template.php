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
<?foreach ($arResult['ITEMS'] as $key => $arItem):?>
    <?if($key == 2):?>
        <div class="col-6 col-md-4">
            <div class="rnd-patents-list-item">
                <div class="rnd-patents-list-item__num"><?=getLangPhrase('COUNT_PATENTS_NUMBERS')?></div>
                <div class="rnd-patents-list-item__description"><?=getLangPhrase('COUNT_PATENTS_TITLE')?></div>
            </div>
        </div>
    <?endif;?>
    <?$APPLICATION->IncludeComponent("bitrix:news.detail","rnd.patents",Array(
            "IBLOCK_TYPE" => "content",
            "IBLOCK_ID" => "16",
            "ELEMENT_ID" => $arItem['ID'],
            "PROPERTY_CODE" => Array("PROPERTY_*"),
            "SET_TITLE" => "N",
            "SET_BROWSER_TITLE" => "N",
        )
    );?>
 <?endforeach;?>