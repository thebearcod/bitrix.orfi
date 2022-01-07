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
<div class="other-products-slider swiper-container fade-in">
    <div class="swiper-wrapper">
        <?foreach($arResult["ITEMS"] as $arItem):?>
            <div class="swiper-slide">
                <div class="other-products-item">
                    <div class="other-products-item__header">
                        <div class="other-products-item__label"><?=$arItem['PROPERTIES']['SHORT_NAME']['VALUE']?></div>
                    </div>
                    <div class="other-products-item__body">
                        <a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="w-100">
                            <img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="<?=$arItem['NAME']?>" class="other-products-item__image">
                        </a>
                    </div>
                    <div class="other-products-item__footer">
                        <a href="#" class="d-inline-block">
                            <span class="other-products-item__name"><?=$arItem['NAME']?></span>
                        </a>
                    </div>
                </div>
            </div>
        <?endforeach;?>
    </div>
</div>
