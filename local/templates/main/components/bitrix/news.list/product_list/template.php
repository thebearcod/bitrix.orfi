<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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

<?php if(!empty($arResult['ITEMS'])):?>
    <div class="widget widget-sm production-list">
        <?foreach($arResult['ITEMS'] as $arItemType):?>
        <div class="widget widget-sm production-list-row">
            <div class="container-fluid">
                <div class="position-relative">
                    <div class="widget-head">
                        <div class="widget__title"><?=$arItemType['NAME']?></div>
                    </div>
                    <div class="widget-body production-list-body p-0">
                        <div class="row">
                            <?foreach($arItemType['ITEMS'] as $arItem):?>
                                <?
                                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                                ?>
                                <div class="col-12 col-md-6 col-lg-4" id="<?=$this->GetEditAreaID($arItem['ID'])?>">
                                <div class="production-list-item bg-white">
                                    <div class="production-list-item__head">
                                        <div class="row align-items-center justify-content-between">
                                            <div class="col-5">
                                                <div class="production-list-item-label"><?=$arItem['PROPERTIES']['SHORT_NAME']['VALUE']?></div>
                                            </div>
                                            <div class="col-auto">
                                                <?if($arItem['PROPERTIES']['PRODUCT_ICON']['SRC']):?>
                                                    <img src="<?=$arItem['PROPERTIES']['PRODUCT_ICON']['SRC']?>" alt="icon" class="production-list-item__icon">
                                                <?endif;?>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="mt-auto mb-auto">
                                        <?=getImageTag($arItem['PREVIEW_PICTURE']['SRC'], 'production-list-item__image', $arItem['PREVIEW_PICTURE']['ALT'])?>
                                    </a>
                                    <div class="production-list-item__footer">
                                        <div class="row align-items-center">
                                            <div class="col-8">
                                                <a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="production-list-item__description text16"><?=$arItem['NAME']?></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?endforeach;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?endforeach;?>
    </div>
<?php endif; ?>