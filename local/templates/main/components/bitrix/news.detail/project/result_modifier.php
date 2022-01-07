<?if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();
/** @var array $arParams */
/** @var array $arResult */


$arResult = translateComponent($arResult);

// получим данные файла у свойства инфоблока PRESENTATION
$elements = CIBlockElement::GetByID($arResult['PROPERTIES']['PRESENTATION']['VALUE']);
if($objElement = $elements->GetNextElement()) {
    $arElement = $objElement->GetFields();
    $arElement['PROPERTIES'] = $objElement->GetProperties();
    $arElement = translateItem($arElement);
    $arResult['PRESENTATION']['SRC'] = CFile::GetPath($arElement['PROPERTIES']['FILE']['VALUE']);
}
