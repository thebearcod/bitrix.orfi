<div class="aside col-sm-4">
    <div class="aside__wrap">
        <?php $APPLICATION->IncludeComponent(
            "bitrix:menu",
            "aside.menu",
            array(
                "ROOT_MENU_TYPE" => "left",
                "MAX_LEVEL" => "1",
            )
        ); ?>
    </div>

    <?php
    $page = $APPLICATION->GetCurPage(false);
    if (mb_stripos($page,"/faq/") !== false): ?>
        <div class="aside-block">
            <p class="aside-block__title">Вопрос эксперту</p>
            <p class="aside-block__txt">Получите ответ от опытных специалистов на интересующий
                вопрос</p>
            <a class="btn btn-primary btn-block" href="/faq/q/sm/">Задать вопрос</a>
        </div>
    <?php endif; ?>
</div>
