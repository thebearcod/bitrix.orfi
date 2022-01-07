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
 <div class="swiper-slide">
    <div class="projects-completed-item">
        <div class="projects-completed-item__head">
            <div class="row">
                <div class="col-md-6">
                    <div class="projects-completed-item__name"><?=$arResult['NAME']?></div>
                </div>
                <div class="col-md-6">
                    <div class="projects-completed-item-images">
                        <div class="projects-completed-item-images__logo">
                            <img src="<?=$arResult['PREVIEW_PICTURE']['SRC']?>" alt="<?=$arResult['NAME']?>">
                        </div>
                        <div class="projects-completed-item-images__photo">
                            <img src="<?=$arResult['DETAIL_PICTURE']['SRC']?>" alt="<?=$arResult['NAME']?>">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <div class="projects-completed-item__body">
    <a href="#" class="text30 projects-completed-item__title"><?=$arResult['PREVIEW_TEXT']?></a>
</div>
        <div class="projects-completed-item__controls">
            <a href="<?=$arResult['PRESENTATION']['SRC']?>" class="mt-auto btn-circle ">
                                  <span class="figure-circle">
                                    <svg class="icon icon-arrow-diagonal ">
                                      <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/frontend/build/img/sprite.svg#icon-arrow-diagonal"></use>
                                    </svg>
                                  </span>
                <span><?=getLangPhrase('PROJECTS_LINK_TITLE')?></span>
            </a>
        </div>
    </div>
</div>