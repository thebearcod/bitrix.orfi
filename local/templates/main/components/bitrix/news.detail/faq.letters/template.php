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
<a class="pull-right" onclick="javascript:history.back(); return false;" href="<?=$arParams["BACK_URL"]?>">
    <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
    Вернуться назад
</a>
<div class="date-pub"><?=FormatDateFromDB($arResult['PROPERTIES']['DATE_QUESTION']['VALUE'], 'DD MMMM YYYY г.')?></div>
<h1><?=$arResult['NAME']?></h1>
<p><?=$arResult['PREVIEW_TEXT']?></p>
<div class="faq__answer">
    <span class="faq__title">Ответ:</span>
   <?=$arResult['DETAIL_TEXT']?>
</div>
<?php if ($arResult['PROPERTIES']['FILE_QUESTION']['VALUE']):?>
<div class="faq__file">
    <a target="_blank" class="asv" href="<?=CFile::GetPath($arResult['PROPERTIES']['FILE_QUESTION']['VALUE'])?>">
        <i class="fa fa-file-pdf-o fa-pdf fa-5x" aria-hidden="true"></i>
        Оригинал ответа на запрос от Ростехнадзора
    </a>
</div>
<?php endif; ?>

<hr>
<p><strong>Поделиться</strong></p>
<div id="share-btn" class="social-likes" data-url="<?=getFullUrl()?>" data-title="<?=$arResult['NAME']?>">
    <div class="facebook" title="Поделиться ссылкой на Фейсбуке">Facebook</div>
    <div class="twitter" title="Поделиться ссылкой в Твиттере">Twitter</div>
    <div class="vkontakte" title="Поделиться ссылкой во Вконтакте">Вконтакте</div>
</div>


