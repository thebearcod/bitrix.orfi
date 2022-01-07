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
<div class="row fade-in">
    <div class="col-lg-4">
        <div class="main-engineering-technology-content">
            <div>
                <div class="main-engineering-technology-content__title text30"><?=$arResult['NAME']?></div>
            </div>
            <div class="main-engineering-technology-content__footer">
                <div class="text16"><?=$arResult['PREVIEW_TEXT']?></div>
                <hr>
                <a href="<?=$arResult['DETAIL_PAGE_URL']?>" class="mt-auto btn-circle ">
                    <span class="figure-circle">
                      <svg class="icon icon-arrow-diagonal ">
                        <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/frontend/build/img/sprite.svg#icon-arrow-diagonal"></use>
                      </svg>
                    </span>
                    <span><?=getLangPhrase('technology_detail')?></span>
                </a>
            </div>
        </div>
    </div>
    <div class="col-lg-8">
        <div class="main-engineering-technology-video position-relative">
            <a href="#video-modal" class="btn-play video-link"></a>
            <?=getImageTag($arResult['VIDEO']['PROPERTIES']['POSTER']['SRC'], 'main-engineering-technology-video__image', $arResult['VIDEO']['NAME'])?>

            <video class="video-poster main-engineering-technology-video__poster" preload="auto" muted loop playsinline>
                <source src="<?=$arResult['VIDEO']['PROPERTIES']['VIDEO']['SRC']?>" type="video/mp4" />
                <p class="vjs-no-js"> Your browser does not support video </p>
            </video>
        </div>
    </div>
</div>
