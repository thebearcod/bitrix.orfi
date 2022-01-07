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
<div class="col-6 col-md-3">
    <div class="product-files-list-item">
        <a href="<?=$arResult['PROPERTIES']['FILE']['SRC']?>">
            <img src="<?=$arResult['PREVIEW_PICTURE']['SRC']?>" alt="" class="product-files-list-item__image">
        </a>
        <a href="<?=$arResult['PROPERTIES']['FILE']['SRC']?>" class="product-files-list-item__download">
            <div class="product-files-list-item-icon">
                <svg class="icon icon-arrow ">
                    <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/frontend/build/img/sprite.svg#icon-arrow"></use>
                </svg>
            </div>
            <div class="product-files-list-item-data">
                <div class="product-files-list-item-data__name"><?=$arResult['NAME']?></div>
                <div class="product-files-list-item-data__size"><?=$arResult['PROPERTIES']['FILE']['EXT_SIZE']?></div>
            </div>
        </a>
    </div>
</div>