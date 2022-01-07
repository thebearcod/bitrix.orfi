<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php" );

/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */

// фильтр по линейке продуктов c исключением текущего продукта
$GLOBALS["typeFilter"] = array("!ID" => $_REQUEST['CURRENT_ELEMENT_ID'],"PROPERTY_PRODUCT_TYPE" => $_REQUEST['ACTIVE_TYPE_ID']);

$APPLICATION->IncludeComponent(
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
);
