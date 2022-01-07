<?if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();
/** @var array $arParams */
/** @var array $arResult */

// определяем активный таб
$arResult['ACTIVE_ID'] = $_REQUEST['ACTIVE_ID'] ?: $arResult['ITEMS'][0]['ID'];

$arResult = translateComponent($arResult);