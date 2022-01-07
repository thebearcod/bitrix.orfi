<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<div class="col-6 col-md-4">
    <div class="rnd-patents-list-item">
        <a href="<?=$arResult['PROPERTIES']['FILE']['SRC']?>" class="rnd-patents-list-item__name"><?=$arResult['NAME']?></a>
        <a href="<?=$arResult['PROPERTIES']['FILE']['SRC']?>" class="rnd-patents-list-item__file"><?=$arResult['PROPERTIES']['FILE']['EXT_SIZE']?></a>
    </div>
</div>