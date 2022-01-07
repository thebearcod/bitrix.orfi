<?if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();
/** @var array $arParams */
/** @var array $arResult */

$arResult = translateComponent($arResult);

$elements = CIBlockElement::GetList(["SORT"=>"ASC"], ["ID"=>$arResult['PROPERTIES']['VIDEO']['VALUE'], "ACTIVE"=>"Y"], false, false, ['*']);
while ($objElement = $elements->GetNextElement()){
    // Получаем массив полей элемента
    $arResult['VIDEO'] = $objElement->GetFields();
    // Получаем все пользовательские свойства
    $arResult['VIDEO']['PROPERTIES'] = $objElement->GetProperties();

    $arResult['VIDEO'] = translateItem($arResult['VIDEO']);

}
$arResult['VIDEO']['PROPERTIES']['POSTER']['SRC'] = CFile::GetPath($arResult['VIDEO']['PROPERTIES']['POSTER']['VALUE']);
$arResult['VIDEO']['PROPERTIES']['VIDEO']['SRC'] = CFile::GetPath($arResult['VIDEO']['PROPERTIES']['VIDEO']['VALUE']);