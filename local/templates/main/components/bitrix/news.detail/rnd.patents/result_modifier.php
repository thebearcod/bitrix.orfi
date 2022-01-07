<?if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();
use Bitrix\Main\IO;

/** @var array $arParams */
/** @var array $arResult */

$arResult = translateComponent($arResult);

// получим данные файла у свойства инфоблока FILE
$arResult['PROPERTIES']['FILE']['SRC'] = CFile::GetPath($arResult['PROPERTIES']['FILE']['VALUE']);
$arResult['PROPERTIES']['FILE']['OBJECT'] = CFile::GetByID($arResult['PROPERTIES']['FILE']['VALUE'])->Fetch();
$arResult['PROPERTIES']['FILE']['SIZE'] = get_size($arResult['PROPERTIES']['FILE']['OBJECT']['FILE_SIZE']);
$arResult['PROPERTIES']['FILE']['EXT'] = mb_strtoupper(IO\Path::getExtension($arResult['PROPERTIES']['FILE']['SRC']));
$arResult['PROPERTIES']['FILE']['EXT_SIZE'] = $arResult['PROPERTIES']['FILE']['EXT'].' '.$arResult['PROPERTIES']['FILE']['SIZE'];