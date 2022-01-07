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

<div class="widget projects-completed">
    <div class="container-fluid">
        <div class="position-relative">
            <div class="widget-head">
                <div class="widget__title"><?=getLangPhrase('PROJECTS_TITLE')?></div>
            </div>
            <div class="widget-body projects-completed-body p-0">
                <div class="projects-completed-slider swiper-container">
                    <div class="swiper-wrapper">
                        <?foreach($arResult["ITEMS"] as $arItem):?>
                            <?$APPLICATION->IncludeComponent("bitrix:news.detail","project",Array(
                                    "IBLOCK_TYPE" => "content",
                                    "IBLOCK_ID" => "17",
                                    "ELEMENT_ID" => $arItem['ID'],
                                    "FIELD_CODE" => Array("ID","PREVIEW_PICTURE"),
                                    "PROPERTY_CODE" => Array("PROPERTY_*"),
                                    "SET_TITLE" => "N",
                                )
                            );?>
                        <?endforeach;?>
                    </div>
                </div>
            </div>
        </div>
        <div class="projects-completed-arrows col-auto  d-none d-lg-block">
            <a href="javascript:void(0)" class="btn-arrow btn-arrow--reverse btn-arrow-prev">
                <svg class="icon icon-arrow ">
                    <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/frontend/build/img/sprite.svg#icon-arrow"></use>
                </svg>
            </a>
            <a href="javascript:void(0)" class="btn-arrow btn-arrow-next">
                <svg class="icon icon-arrow ">
                    <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/frontend/build/img/sprite.svg#icon-arrow"></use>
                </svg>
            </a>
        </div>
        <div class="projects-completed-pagination text-center mt-3 mb-3"></div>
    </div>
</div>