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
<?
$this->AddEditAction($arResult['ID'], $arResult['EDIT_LINK'], CIBlock::GetArrayByID($arResult["IBLOCK_ID"], "ELEMENT_EDIT"));
$this->AddDeleteAction($arResult['ID'], $arResult['DELETE_LINK'], CIBlock::GetArrayByID($arResult["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
?>
<div class="block-methods-list-item <?=$arParams['CLASS_FIRST_ITEM']?>" id="<?=$this->GetEditAreaId($arResult['ID']);?>">
    <div class="block-methods-list-item__head">
        <div class="row">
            <div class="col-2 col-md-6 d-flex position-static">
                <div class="arrow-circle">
                    <svg class="icon icon-arrow-short ">
                        <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/frontend/build/img/sprite.svg#icon-arrow-short"></use>
                    </svg>
                </div>
                <div class="block-methods-list-item-icon">
                    <img src="<?=$arResult['PROPERTIES']['ICON']['SRC']?>" alt="<?=$arResult["NAME"]?>" class="block-methods-list-item-icon__image">
                </div>
            </div>
            <div class="col-10 col-md-6">
                <div class="block-methods-list-item__title text50"><?=$arResult["NAME"]?></div>
                <p class="block-methods-list-item__description"><?=$arResult["PREVIEW_TEXT"]?> </p>
            </div>
        </div>
    </div>
    <div class="block-methods-list-item__body">
        <div class="block-methods-list-item-card__grid">
            <div class="row no-gutters">
                <?foreach ($arResult['PROPERTIES']['WORKING']['VALUE'] as $key => $value):?>
                <div class="col-md-6">
                    <a href="" class="block-methods-list-item-card">
                        <img src="<?=$arResult['PROPERTIES']['WORKING']['SRC'][$key]?>" alt="<?=$arResult['PROPERTIES']['WORKING']['DESCRIPTION'][$key]?>" class="block-methods-list-item-card__image">
                        <span class="block-methods-list-item-card__title"><?=$arResult['PROPERTIES']['WORKING']['DESCRIPTION'][$key]?></span>
                    </a>
                </div>
                <?endforeach;?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 offset-md-6">
                <a href="#callback-form" class="mt-auto btn-circle block-methods-btn open-popup">
                          <span class="figure-circle">
                            <svg class="icon icon-arrow-diagonal ">
                              <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/frontend/build/img/sprite.svg#icon-arrow-diagonal"></use>
                            </svg>
                          </span>
                    <span><?$APPLICATION->IncludeFile("/include/services/i_need_expertise".LANGUAGE.".html")?></span>
                </a>
            </div>
        </div>
    </div>
</div>
