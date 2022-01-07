<?if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();
/** @var array $arParams */
/** @var array $arResult */
CModule::IncludeModule("iblock");

$arResult = translateComponent($arResult);

$arParams['ACTIVE_ID'] = $_REQUEST['ACTIVE_ID'] ?? $arParams['ACTIVE_ID'];
// фильтр по линейке продуктов
//$GLOBALS["typeFilter"] = array("PROPERTY_PRODUCT_TYPE" => $arParams['ACTIVE_ID']);

// подсчитаем количество продуктов каждой линейки
foreach($arResult["ITEMS"] as $key => $arItem) {
    $arFilter = ["IBLOCK_ID" => IBLOCK_PRODUCTS, "ACTIVE" => "Y", "PROPERTY_PRODUCT_TYPE" => $arItem['ID']];
    // если в arGroupBy указать пустой массив вместо false, то метод вернет количество элементов CNT по фильтру
    $arResult["ITEMS"][$key]['COUNT'] = CIBlockElement::GetList(array(), $arFilter, array(), false, array());
}
// получим продукты линейки
$arFilter = [
    "IBLOCK_ID" => IBLOCK_PRODUCTS,
    "ACTIVE" => "Y",
    "PROPERTY_PRODUCT_TYPE" => $arParams['ACTIVE_ID']
];
//"SORT_BY1" => "SORT",
//            "SORT_ORDER1" => "ASC",

$res = CIBlockElement::GetList(array(), $arFilter, false, false, array());
while ($ar = $res->GetNext()) {
    $arItems[] = $ar;
}
$arResult['ITEMS_CURRENT'] = $arItems;
