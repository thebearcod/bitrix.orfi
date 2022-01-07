<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");

$arResult = translateComponent($arResult);

// путь к файлам
foreach ($arResult['ITEMS'] as &$item) {

    // иконка продукта
    $item['PROPERTIES']['PRODUCT_ICON']['SRC'] = CFile::getPath($item['PROPERTIES']['PRODUCT_ICON']['VALUE']);

    // алт для изображения анонса
    $item['PREVIEW_PICTURE']['ALT'] = $item['NAME'];
}


// соберем массив линейки продукции с сортировкой по SORT
$elements = CIBlockElement::GetList(["SORT"=>"ASC"], ["ACTIVE"=>"Y","IBLOCK_ID"=> IBLOCK_PRODUCTS_TYPE], false, false, ['*']);
while ($objElement = $elements->GetNextElement()){
    $arElement = $objElement->GetFields();
    $arElement['PROPERTIES'] = $objElement->GetProperties();
    $arType[] = translateItem($arElement);
}

// другие - продукты без линийки
$arType[] = [
    'ID' => '',
    'NAME' => getLangPhrase('productions_types_filter_other'),
];

// собираем  массив из линеек продуктов (групп) и элементов
foreach ($arType as $arItemType) {
    //var_dump($arItemType['ID']);
    $arItemGroup = [];
    $arItemGroup['NAME'] = $arItemType['NAME'];
    foreach ($arResult["ITEMS"] as $arItem) {
        //echo '<pre>';
        //echo $arItem['ID'].' => '.$arItem['PROPERTIES']['PRODUCT_TYPE']['VALUE'];
        //echo '</pre>';
        //var_dump($arItem['PROPERTIES']['PRODUCT_TYPE']['VALUE'] == $arItemType['ID']);
        if ($arItem['PROPERTIES']['PRODUCT_TYPE']['VALUE'] == $arItemType['ID']) {
            $arItemGroup['ITEMS'][] = $arItem;
        }
    }
    // пропускаем пустые линейки продукции
    if (!empty($arItemGroup['ITEMS'])) {
        $arItemsGroups[$arItemType['ID']] = $arItemGroup;
    }
}
$arResult['ITEMS'] = $arItemsGroups;
//var_dump($arItemsGroups['']);
