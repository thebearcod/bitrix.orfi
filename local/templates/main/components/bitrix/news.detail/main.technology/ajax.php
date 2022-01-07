<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php" );

/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */

$APPLICATION->IncludeComponent("bitrix:news.detail","main.technology",Array(
        "IBLOCK_TYPE" => "content",
        "IBLOCK_ID" => "5",
        "ELEMENT_ID" => $_REQUEST['ACTIVE_ID'],
        "FIELD_CODE" => Array("ID","PREVIEW_PICTURE"),
        "PROPERTY_CODE" => Array("PROPERTY_*"),
        "SET_TITLE" => "N",
    )
);
