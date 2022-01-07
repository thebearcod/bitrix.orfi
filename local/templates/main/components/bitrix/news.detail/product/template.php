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

<div class="widget product-hero">
    <div class="container-fluid">
        <div class="position-relative">
            <div class="widget-body bg-white product-hero-body">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumbs">
                            <ul class="breadcrumbs-list">
                                <li class="breadcrumbs-list-item">
                                    <a href="/products/">
                                        <svg class="icon icon-back ">
                                            <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/frontend/build/img/sprite.svg#icon-back"></use>
                                        </svg><?=getLangPhrase('RETURN_CATALOG')?></a>
                                </li>
                                <li class="breadcrumbs-list-item">
                                    <span><?=$arResult['BREADCRUMBS_ITEM_NAME']?></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-hero-slider swiper-container">
                        <div class="swiper-wrapper">
                            <?foreach($arResult['PROPERTIES']['PRODUCT_IMAGES']['SRC'] as $arItemImages):?>
                                <div class="swiper-slide">
                                    <div class="product-hero-card">
                                        <div class="row">
                                            <div class="col-md-10 offset-md-1">
                                                <div class="product-hero-card__name"><?=$arResult['NAME']?></div>
                                                <?=getImageTag($arItemImages, 'product-hero-card__image', $arResult['NAME'])?>
                                                <div class="category-list product-hero-card-categories">
                                                    <?foreach($arResult['INDUSTRIES'] as $arItemIndustries):?>
                                                        <a href="<?=$arItemIndustries['DETAIL_PAGE_URL']?>" class="category-list__item"><?=$arItemIndustries['NAME']?></a>
                                                    <?endforeach;?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?endforeach;?>
                        </div>
                        <div class="product-hero-pagination"></div>
                    </div>
                    <div class="product-hero-card__footer">
                        <div class="row">
                            <div class="col-md-5 col-lg-5 mb-4 mb-md-0"><?=$arResult['DETAIL_TEXT']?></div>
                            <div class="col-md-5 col-lg-5 offset-md-2">
                                <div class="row">
                                    <div class="col-md-12 col-lg-6 mb-2 mb-lg-0">
                                        <a href="<?=$arResult['PRESENTATION']['SRC']?>" class="mt-auto btn-circle ">
                            <span class="figure-circle">
                              <svg class="icon icon-document ">
                                <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/frontend/build/img/sprite.svg#icon-document"></use>
                              </svg>
                            </span>
                                            <span><?=getLangPhrase('DOWNLOAD_PRESENTATION')?></span>
                                        </a>
                                    </div>
                                    <div class="col-md-12 col-lg-6  mb-2 mb-lg-0">
                                        <a href="#callback-form" class="mt-auto btn-circle open-popup">
                            <span class="figure-circle">
                              <svg class="icon icon-arrow-diagonal ">
                                <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/frontend/build/img/sprite.svg#icon-arrow-diagonal"></use>
                              </svg>
                            </span>
                                            <span><?=getLangPhrase('SUBMIT_REQUEST')?></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="widget product-features">
    <div class="container-fluid">
        <div class="position-relative">
            <div class="widget-head">
                <div class="widget__title"><?=getLangPhrase('FEATURES')?></div>
            </div>
            <div class="widget-body product-features-body p-0">
                <div class="product-features-list">
                    <div class="row">
                        <?foreach($arResult['PROPERTIES']['FEATURES']['SRC'] as $key => $arItemFeatures):?>
                        <div class="col-6 col-md-4">
                            <div class="product-features-list-item">
                                <img src="<?=$arItemFeatures?>" alt="" class="product-features-list-item__icon">
                                <div class="product-features-list-item__name"><?=$arResult['PROPERTIES']['FEATURES']['DESCRIPTION'][$key]?></div>
                            </div>
                        </div>
                        <?endforeach;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="widget product-technology" id="technology">
    <div class="container-fluid">
        <div class="position-relative">
            <div class="widget-head">
                <div class="widget__title"><?=getLangPhrase('TECHNOLOGY')?></div>
            </div>
            <div class="widget-body bg-white product-technology-body">
                <div class="row no-gutters">
                    <div class="col-md-5 col-lg-4">
                        <div class="text30"><?=$arResult['PROPERTIES']['TECHNOLOGY_TITLE']['VALUE']['TEXT']?></div>
                    </div>
                    <div class="col-md-6 offset-md-1 offset-lg-2">
                        <div class="widget-right-col">
                            <p><?=$arResult['PROPERTIES']['TECHNOLOGY_DESC']['VALUE']['TEXT']?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="watch-video-block">
                <?=getImageTag($arResult['PROPERTIES']['TECHNOLOGY_PICTURE']['SRC'], 'watch-video-block__poster', $arResult['PROPERTIES']['TECHNOLOGY_TITLE']['VALUE']['TEXT'])?>
                <a href="#video-modal" class="btn-play btn-play-sm video-link" data-description="<?=getLangPhrase('TECHNOLOGY_STORY')?>" data-video="<?=$arResult['TECHNOLOGY_VIDEO']['SRC']?>"></a>
            </div>
        </div>
    </div>
</div>

<div class="widget product-development">
    <div class="container-fluid">
        <div class="position-relative">
            <div class="widget-head">
                <div class="widget__title"><?=getLangPhrase('DEVELOPMENT_TITLE')?></div>
            </div>
            <div class="product-development-list">
                <div class="row">
                    <div class="col-md-6">
                        <div class="widget-body bg-white product-development-body product-development__lead">
                            <div class="text50 mb-4 mb-md-0"><?=$arResult['PROPERTIES']['DEVELOPMENT_TEXT']['VALUE']['TEXT']?></div>
                            <a href="#video-modal" class="mt-auto btn-circle product-development__btn video-link" data-video="<?=$arResult['VIDEO_RND']['SRC']?>">
                      <span class="figure-circle">
                        <svg class="icon icon-arrow-diagonal ">
                          <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/frontend/build/img/sprite.svg#icon-arrow-diagonal"></use>
                        </svg>
                      </span>
                                <span><?=getLangPhrase('DEVELOPMENT_TITLE_LINK')?></span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <?foreach($arResult['PROPERTIES']['DEVELOPMENT']['SRC'] as $key => $arItemDevelopment):?>
                            <div class="col-6">
                                <div class="widget-body bg-white product-development-body product-development-advantage">
                                    <div class="product-development-advantage__name"><?=$arResult['PROPERTIES']['DEVELOPMENT']['DESCRIPTION'][$key]?></div>
                                    <img src="<?=$arItemDevelopment?>" class="product-development-advantage__icon" alt="<?=$arResult['PROPERTIES']['DEVELOPMENT']['DESCRIPTION'][$key]?>">
                                </div>
                            </div>
                            <?endforeach;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="widget product-standard">
    <div class="container-fluid">
        <div class="position-relative">
            <div class="widget-head">
                <div class="widget__title"><?=getLangPhrase('TYPESIZE_TITLE')?></div>
            </div>
            <div class="widget-body bg-white product-standard-body mb-0">
                <div class="product-standard__main">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="product-standard-counter">
                                <div class="product-standard-counter__num"><?=$arResult['PROPERTIES']['TYPESIZE_BIGTITLE']['VALUE']?></div>
                                <div class="product-standard-counter__desc"><?=$arResult['PROPERTIES']['TYPESIZE_BIGTITLE_DESC']['VALUE']?></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="product-standard-content pr-4">
                                <div class="text30 product-standard-content__title"><?=$arResult['PROPERTIES']['TYPESIZE_TITLE']['VALUE']['TEXT']?></div>
                                <p><?=$arResult['PROPERTIES']['TYPESIZE_TITLE']['VALUE']['TEXT']?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="widget-body bg-white product-standard-body p-0">
                <div class="product-standard-list">
                    <div class="row no-gutters">
                        <?foreach($arResult['PROPERTIES']['TYPESIZE']['SRC'] as $key => $arItem):?>
                        <div class="col-6 col-md-3">
                            <div class="product-standard-list-item">
                                <img src="<?=$arItem?>" alt="<?=$arResult['PROPERTIES']['TYPESIZE']['DESCRIPTION'][$key]?>" class="product-standard-list-item__image">
                                <div class="product-standard-list-item__name"><?=$arResult['PROPERTIES']['TYPESIZE']['DESCRIPTION'][$key]?></div>
                            </div>
                        </div>
                        <?endforeach;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?if(!empty($arResult['PROPERTIES']['PROJECTS']['VALUE'])):?>
    <?$APPLICATION->IncludeComponent("bitrix:news.list","projects",Array(
            "DISPLAY_NAME" => "Y",
            "DISPLAY_PICTURE" => "Y",
            "DISPLAY_PREVIEW_TEXT" => "Y",
            "IBLOCK_TYPE" => "content",
            "IBLOCK_ID" => IBLOCK_PROJECTS,
            "NEWS_COUNT" => "20",
            "SORT_BY1" => "SORT",
            "SORT_ORDER1" => "ASC",
            "SET_TITLE" => "N",
            "FIELD_CODE" => Array("ID"),
            "FILTER_NAME" => "projectsFilter",
        )
    );?>
<?endif;?>

<?if(!empty($arResult['PROPERTIES']['DOWNLOADS']['VALUE'])):?>
    <?$APPLICATION->IncludeComponent("bitrix:news.list","product.downloads",Array(
            "DISPLAY_NAME" => "Y",
            "DISPLAY_PICTURE" => "Y",
            "DISPLAY_PREVIEW_TEXT" => "Y",
            "IBLOCK_TYPE" => "content",
            "IBLOCK_ID" => IBLOCK_DOCUMENTS,
            "NEWS_COUNT" => "20",
            "SORT_BY1" => "SORT",
            "SORT_ORDER1" => "ASC",
            "SET_TITLE" => "N",
            "FIELD_CODE" => Array("ID"),
            "FILTER_NAME" => "downloadsFilter",
        )
    );?>
<?endif;?>

<?if(!empty($arResult['PROPERTIES']['CERTIFICATES']['VALUE'])):?>
    <?$APPLICATION->IncludeComponent("bitrix:news.list","product.certificates",Array(
            "DISPLAY_NAME" => "Y",
            "DISPLAY_PICTURE" => "Y",
            "DISPLAY_PREVIEW_TEXT" => "Y",
            "IBLOCK_TYPE" => "content",
            "IBLOCK_ID" => IBLOCK_DOCUMENTS,
            "NEWS_COUNT" => "20",
            "SORT_BY1" => "SORT",
            "SORT_ORDER1" => "ASC",
            "SET_TITLE" => "N",
            "FIELD_CODE" => Array("ID"),
            "FILTER_NAME" => "certificatesFilter",
        )
    );?>
<?endif;?>

<?if(!empty($arResult['PROPERTIES']['PRODUCT_TYPE']['VALUE'])):?>
    <?$APPLICATION->IncludeComponent(
        "bitrix:news.list",
        "product.other",
        Array(
            "DISPLAY_NAME" => "Y",
            "DISPLAY_PICTURE" => "Y",
            "DISPLAY_PREVIEW_TEXT" => "Y",
            "IBLOCK_TYPE" => "content",
            "IBLOCK_ID" => IBLOCK_PRODUCTS_TYPE,
            "PROPERTY_CODE" => Array("PROPERTY_*"),
            "SET_TITLE" => "N",
            "SET_BROWSER_TITLE" => "N",
            "NEWS_COUNT" => "20",
            "SORT_BY1" => "SORT",
            "SORT_ORDER1" => "ASC",
            "FIELD_CODE" => Array("ID"),
            "ACTIVE_TYPE_ID" => $arResult['PROPERTIES']['PRODUCT_TYPE']['VALUE'], // передаем связанную линейку продуктов для активного таба
            "CURRENT_ELEMENT_ID" => $arResult['ID'], // передаем ID текущего продукта для исключения из выборки
        )
    );?>
<?endif;?>

<div class="consult-form ">
    <div class="widget mt-0 ">
        <div class="container-fluid">
            <div class="position-relative">
                <div class="widget-head">
                    <div class="widget__title">Связаться с нами</div>
                </div>
                <div class="widget-body consult-form-body bg-dark">
                    <div class="row">
                        <div class="col-md-8 col-lg-6">
                            <div class="consult-form__content">
                                <div class="consult-form__title">Оставьте заявку</div>
                                <div class="consult-form__description">Напишите ваш вопрос или предложение и наши специалисты свяжутся с вами. Также, вы можете заполнить опросный лист и выслать его нам.</div>
                                <a href="javascript:void(0)" class="mt-auto btn-circle ">
                        <span class="figure-circle">
                          <svg class="icon icon-document ">
                            <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/frontend/build/img/sprite.svg#icon-document"></use>
                          </svg>
                        </span>
                                    <span>Скачать опросный лист</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="consult-form-send">
                                <form action="backend/send.php" method="POST" data-form-validate data-input-file>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="firstName" required placeholder="Имя" data-pristine-required-message="Поле имя обязательно">
                                    </div>
                                    <div class="form-group">
                                        <input type="tel" class="form-control" name="userPhone" required placeholder="Телефон" data-pristine-required-message="Поле телефон обязательно">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="userEmail" placeholder="Email" data-pristine-email-message="Поле должно быть в формате name@domen.ru" data-pristine-required-message="Поле email обязательно">
                                    </div>
                                    <div class="form-file-attach">
                                        <label for="inputFile">
                                            <svg class="icon icon-attach ">
                                                <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/frontend/build/img/sprite.svg#icon-attach"></use>
                                            </svg>
                                        </label>
                                        <input type="file" class="d-none" name="fileAttach" id="inputFile">
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control pr-5" placeholder="Ваш вопрос" name="userQuestion" rows="5" data-pristine-required-message="Поле обязательно"></textarea>
                                    </div>
                                    <div class="file-attach-group" style="display: none;">
                                        <a href="" data-file-remove="data-file-remove">
                                            <svg class="icon icon-cross ">
                                                <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/frontend/build/img/sprite.svg#icon-cross"></use>
                                            </svg>
                                        </a>
                                        <span data-file-attach="data-file-attach"></span>
                                    </div>
                                    <p class="form-success__message"></p>
                                    <div class="row align-items-center mt-md-5">
                                        <div class="col-md-6">
                                            <button type="submit" class="mt-auto btn-circle ">
                              <span class="figure-circle">
                                <svg class="icon icon-arrow-diagonal ">
                                  <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/frontend/build/img/sprite.svg#icon-arrow-diagonal"></use>
                                </svg>
                              </span>
                                                <span>Отправить</span>
                                            </button>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="consult-form-policy">Нажимая кнопку «отправить» я даю свое согласие на <a href="#">обработку персональных данных</a></div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>