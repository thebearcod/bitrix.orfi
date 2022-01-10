<?php
global $STATUS_404;
$arrExcludeShowBanner = [];
//var_dump($arParams);
//if (ERROR_404 == 'Y')
//    return '';

if ($APPLICATION->GetCurPage(false) != "/"): ?>
    <div class="head-banner">
		<div class="head-banner__cnt">
            <p class="head-banner__title"><?$APPLICATION->ShowProperty('BANNER_TITLE')?></p>
            <p class="head-banner__text"><?$APPLICATION->ShowProperty('BANNER_TEXT')?></p>
		</div>
	</div>
<?php else: ?>
    <div class="slider owl-carousel">
    <div class="item">
        <div class="slider__item">
            <img class="slider__img" alt="НТЦ Промбезопасность"
                 src="<?= SITE_TEMPLATE_PATH ?>/assets/img/slide/bnrmain.png">
            <div class="slider__text">
                <h2><small>Научно-технический центр</small>Промбезопасность</h2>
                <p>Наши знания - ключ к вашей безопасности</p>
            </div>
        </div>
    </div>
    <div class="item">
        <a class="slider__item" href="/services/expb/">
            <img class="slider__img" alt="Экспертиза промышленной безопасности"
                 src="<?= SITE_TEMPLATE_PATH ?>/assets/img/slide/bnrexpb.png">
            <div class="slider__text">
                <h2>Экспертиза промышленной безопасности</h2>
                <p>Зданий и сооружений, технических устройств, проектной&nbsp;документации, декларации</p>
            </div>
        </a>
    </div>
    <div class="item">
        <a class="slider__item" href="/services/nexppb/">
            <img class="slider__img" alt="Негосударственная экспертиза"
                 src="<?= SITE_TEMPLATE_PATH ?>/assets/img/slide/bnrne.png">
            <div class="slider__text">
                <h2>Негосударственная экспертиза</h2>
                <p>Проводим экспертизу проектной документации и результатов инженерных изысканий</p>
            </div>
        </a>
    </div>
    <div class="item">
        <a class="slider__item" href="/services/proektirovanie/">
            <img class="slider__img" alt="Разработка проектной документации"
                 src="<?= SITE_TEMPLATE_PATH ?>/assets/img/slide/bnrproekt.png">
            <div class="slider__text">
                <h2>Разработка проектной документации</h2>
                <p>Проектируем здания, заводы, цеха, трубопроводы, линии&nbsp;электропередач и опасные объекты</p>
            </div>
        </a>
    </div>
    <div class="item">
        <a class="slider__item" href="/uchcenter/about/us/">
            <img class="slider__img" alt="Учебный центр в Оренбурге"
                 src="<?= SITE_TEMPLATE_PATH ?>/assets/img/slide/bnruc.png">
            <div class="slider__text">
                <h2>Учебный центр</h2>
                <p>Предаттестационная подготовка,<br>обучение рабочих и повышение<br>квалификации персонала</p>
            </div>
        </a>
    </div>
</div>
<?php endif; ?>