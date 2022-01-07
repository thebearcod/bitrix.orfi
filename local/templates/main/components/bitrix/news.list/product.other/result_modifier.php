<?if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();
/** @var array $arParams */
/** @var array $arResult */
CModule::IncludeModule("iblock");

$arResult = translateComponent($arResult);

// фильтр по линейке продуктов c исключением текущего продукта
$GLOBALS["typeFilter"] = array("!ID" => $arParams['CURRENT_ELEMENT_ID'],"PROPERTY_PRODUCT_TYPE" => $arParams['ACTIVE_TYPE_ID']);

// подсчитаем количество продуктов каждой линейки
foreach($arResult["ITEMS"] as $key => $arItem) {
    $arFilter = ["IBLOCK_ID" => IBLOCK_PRODUCTS, "ACTIVE" => "Y", "PROPERTY_PRODUCT_TYPE" => $arItem['ID']];
    // если в arGroupBy указать пустой массив вместо false, то метод вернет количество элементов CNT по фильтру
    $arResult["ITEMS"][$key]['COUNT'] = CIBlockElement::GetList(array(), $arFilter, array(), false, array());
}