<?if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();
/** @var array $arParams */
/** @var array $arResult */

$arResult = translateComponent($arResult);

// данные свойства Линейка продуктов / PRODUCT_TYPE
$elements = CIBlockElement::GetByID($arResult['PROPERTIES']['PRODUCT_TYPE']['VALUE']);
while ($objElement = $elements->GetNextElement()){
    // Получаем массив полей элемента
    $arElement = $objElement->GetFields();
    // Получаем все пользовательские свойства
    $arElement['PROPERTIES'] = $objElement->GetProperties();
    // формируем итоговый массив
    $arResult['PRODUCT_TYPE'] = translateItem($arElement);
}

// данные свойства Отрасли применения / INDUSTRIES
$elements = CIBlockElement::GetList(["SORT"=>"ASC"], ["ID"=>$arResult['PROPERTIES']['INDUSTRIES']['VALUE'], "ACTIVE"=>"Y"], false, false, ['*']);
while ($objElement = $elements->GetNextElement()){
    // Получаем массив полей элемента
    $arElement = $objElement->GetFields();
    // Получаем все пользовательские свойства
    $arElement['PROPERTIES'] = $objElement->GetProperties();
    // формируем итоговый массив отрослей применения / множественное поле
    $arResult['INDUSTRIES'][] = translateItem($arElement);
}

// название для текущего элемента хлебных крошек
$arResult['BREADCRUMBS_ITEM_NAME'] = $arResult['PRODUCT_TYPE']['NAME'].' '.$arResult['PROPERTIES']['SHORT_NAME']['VALUE'];

// получим путь к файлам у множественного свойства PRODUCT_IMAGES
foreach ($arResult['PROPERTIES']['PRODUCT_IMAGES']['VALUE'] as $item) {
    $arResult['PROPERTIES']['PRODUCT_IMAGES']['SRC'][] = CFile::GetPath($item);
}

// получим путь к файлам у множественного свойства FEATURES
foreach ($arResult['PROPERTIES']['FEATURES']['VALUE'] as $item) {
    $arResult['PROPERTIES']['FEATURES']['SRC'][] = CFile::GetPath($item);
}

// получим данные файла у свойства инфоблока PRESENTATION
$elements = CIBlockElement::GetByID($arResult['PROPERTIES']['PRESENTATION']['VALUE']);
if($objElement = $elements->GetNextElement()) {
    $arElement = $objElement->GetFields();
    $arElement['PROPERTIES'] = $objElement->GetProperties();
    $arElement = translateItem($arElement);
    $arResult['PRESENTATION']['SRC'] = CFile::GetPath($arElement['PROPERTIES']['FILE']['VALUE']);
}

// получим путь к изображению свойства TECHNOLOGY_PICTURE
$arResult['PROPERTIES']['TECHNOLOGY_PICTURE']['SRC'] = CFile::GetPath($arResult['PROPERTIES']['TECHNOLOGY_PICTURE']['VALUE']);

// получим данные файла у свойства инфоблока TECHNOLOGY_VIDEO
$elements = CIBlockElement::GetByID($arResult['PROPERTIES']['TECHNOLOGY_VIDEO']['VALUE']);
if($objElement = $elements->GetNextElement()) {
    $arElement = $objElement->GetFields();
    $arElement['PROPERTIES'] = $objElement->GetProperties();
    $arElement = translateItem($arElement);
    $arResult['TECHNOLOGY_VIDEO']['SRC'] = CFile::GetPath($arElement['PROPERTIES']['VIDEO']['VALUE']);
}

// получим данные файла у свойства настройки++ UF_VIDEO_RND
$idVideoRND = \Bitrix\Main\Config\Option::get( "askaron.settings", "UF_VIDEO_RND");
$elements = CIBlockElement::GetByID($idVideoRND);
if($objElement = $elements->GetNextElement()) {
    $arElement = $objElement->GetFields();
    $arElement['PROPERTIES'] = $objElement->GetProperties();
    $arElement = translateItem($arElement);
    $arResult['VIDEO_RND']['SRC'] = CFile::GetPath($arElement['PROPERTIES']['VIDEO']['VALUE']);
}

// получим путь к файлам у множественного свойства DEVELOPMENT
foreach ($arResult['PROPERTIES']['DEVELOPMENT']['VALUE'] as $item) {
    $arResult['PROPERTIES']['DEVELOPMENT']['SRC'][] = CFile::GetPath($item);
}

// получим путь к файлам у множественного свойства TYPESIZE
foreach ($arResult['PROPERTIES']['TYPESIZE']['VALUE'] as $item) {
    $arResult['PROPERTIES']['TYPESIZE']['SRC'][] = CFile::GetPath($item);
}

// фильтр для свойства Реализованные проекты / PROJECTS
$GLOBALS["projectsFilter"] = array("ID"=>$arResult['PROPERTIES']['PROJECTS']['VALUE']);

// фильтр для свойства Материалы для скачивания / DOWNLOADS
$GLOBALS["downloadsFilter"] = array("ID"=>$arResult['PROPERTIES']['DOWNLOADS']['VALUE']);

// фильтр для свойства Сертификаты / CERTIFICATES
$GLOBALS["certificatesFilter"] = array("ID"=>$arResult['PROPERTIES']['CERTIFICATES']['VALUE']);