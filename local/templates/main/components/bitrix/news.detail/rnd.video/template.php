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
<div class="widget-body p-0">
    <div class="row">
        <div class="col-12">
            <div class="watch-video-block">
                <?=getImageTag($arResult['UF_POSTER_RND']['SRC'], 'watch-video-block__poster', $APPLICATION->IncludeFile("/include/rnd/rnd_video_desc".LANGUAGE.".html"))?>
                <?=$arResult['PROPERTIES']['VIDEO']['SRC']?>
                <a href="#video-modal" class="btn-play btn-play-sm video-link" data-description="<?$APPLICATION->IncludeFile("/include/rnd/rnd_video_desc".LANGUAGE.".html")?>" data-video="<?=$arResult['PROPERTIES']['VIDEO']['SRC']?>"></a>
            </div>
        </div>
    </div>
</div>
