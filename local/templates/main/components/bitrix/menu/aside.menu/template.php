<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
} ?>

<?php if (!empty($arResult)): ?>

    <?php foreach ($arResult as $arItem):
        if (!$arItem["SELECTED"]) {
            continue;
        } ?>
        <button type="button" class="btn btn-block btn-collapsemenu collapsed visible-xs"
                data-toggle="collapse" data-target="#collapseMenu" aria-expanded="false"><i
                    class="fa fa-bars" aria-hidden="true"></i><?= $arItem["TEXT"] ?>
        </button>
    <?php endforeach ?>

    <div class="collapse navbar-collapse" id="collapseMenu">
        <ul class="aside__menu">
            <?php foreach ($arResult as $arItem):
                $classActive = $arItem["SELECTED"] ? 'class="active"' : ''; ?>
                <li <?= $classActive ?>><a href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a></li>
            <?php endforeach ?>
        </ul>
    </div>

<? endif; ?>