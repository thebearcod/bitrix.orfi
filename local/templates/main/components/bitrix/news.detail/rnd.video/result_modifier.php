<?if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();
/** @var array $arParams */
/** @var array $arResult */

$arResult = translateComponent($arResult);

// получим путь к файлам у свойства VIDEO
$arResult['PROPERTIES']['VIDEO']['SRC'] = CFile::GetPath($arResult['PROPERTIES']['VIDEO']['VALUE']);

// получим данные и путь к файлу у свойства Настройки++ UF_POSTER_RND
$arResult['UF_POSTER_RND']['SRC'] = CFile::GetPath(\Bitrix\Main\Config\Option::get( "askaron.settings", "UF_POSTER_RND"));

