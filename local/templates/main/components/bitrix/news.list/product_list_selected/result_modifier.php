<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");

$arResult = translateComponent($arResult);

// путь к файлам
foreach ($arResult['ITEMS'] as &$item) {

    // иконка продукта
    $item['PROPERTIES']['PRODUCT_ICON']['SRC'] = CFile::getPath($item['PROPERTIES']['PRODUCT_ICON']['VALUE']);

    // алт для изображения анонса
    $item['PREVIEW_PICTURE']['ALT'] = $item['NAME'];
}
//Тут лежит ID выбранной линейки продуктов, если значение = false, то значит выбран пункт "Другое"
$arParams['SELECTED_TYPE_OF_PRODUCTS'];

// данные Линейки продукта / PRODUCT_TYPE
$elements = CIBlockElement::GetByID($arParams['SELECTED_TYPE_OF_PRODUCTS']);
while ($objElement = $elements->GetNextElement()){
    // Получаем массив полей элемента
    $arElement = $objElement->GetFields();
    // Получаем все пользовательские свойства
    $arElement['PROPERTIES'] = $objElement->GetProperties();
    // формируем итоговый массив
    $arResult['PRODUCT_TYPE'] = translateItem($arElement);

}

$arResult['PRODUCT_TYPE']['PROPERTIES']['ICON']['SRC'] = CFile::getPath($arResult['PRODUCT_TYPE']['PROPERTIES']['ICON']['VALUE']);
