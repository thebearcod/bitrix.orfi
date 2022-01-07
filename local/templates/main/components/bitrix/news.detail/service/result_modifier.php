<?if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();
/** @var array $arParams */
/** @var array $arResult */

$arResult = translateComponent($arResult);

// получим путь к файлам у свойства ICON
$arResult['PROPERTIES']['ICON']['SRC'] = CFile::GetPath($arResult['PROPERTIES']['ICON']['VALUE']);

// получим путь к файлам у множественного свойства WORKING
foreach ($arResult['PROPERTIES']['WORKING']['VALUE'] as $item) {
    $arResult['PROPERTIES']['WORKING']['SRC'][] = CFile::GetPath($item);
}