<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
use Bitrix\Main\Page\Asset;
?>

                    </div>
                </div>
            </main>
        </div>
    </div>
    <footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-push-4 text-right">
                <ul class="list-inline">
                    <li><a href="/company/about/">О компании</a></li>
                    <li><a href="/services/">Услуги</a></li>
                    <li><a href="/company/docs/">Документы</a></li>
                    <li><a href="/contacts/">Контакты</a></li>
                    <li><a href="/contacts/svyaz/">Обратная связь</a></li>
                    <li><a href="/about/mapsite/">Карта сайта</a></li>
                </ul>
            </div>
            <div class="col-sm-4 col-sm-pull-8">
                <span>© 2005-<?= date('Y')?> ООО "НТЦ "Промбезопасность"</span>
                <p><a href="/files/doc/terrm-of-use-orfiru.pdf" target="_blank">Пользовательское соглашение</a></p>
            </div>
            <div class="divup">
                <div title="Вверх" class="up" id="to_top"></div>
            </div>
        </div>
    </div>
</footer>
</div>
<!-- END content -->
<!-- BEGIN scripts -->
<?php
// Подключаем скрипты
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/assets/js/jquery.min.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/assets/js/bootstrap.min.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/assets/js/jquery.fancybox.min.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/assets/js/slideout.min.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/assets/js/add.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/assets/js/main.js");

$APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "",
    array(
        "AREA_FILE_SHOW" => "file",
        "PATH" => SITE_DIR . "include/modal-footer.php"
    ),
    false
);

$APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "",
    array(
        "AREA_FILE_SHOW" => "file",
        "PATH" => SITE_DIR . "include/scripts-footer.php"
    ),
    false
);

$APPLICATION->IncludeComponent("bitrix:main.include","",
    array(
        "AREA_FILE_SHOW" => "file",
        "PATH" => SITE_DIR . "include/mobilenav.php"
    ),
    false
);


?>

<!-- END scripts -->
</body>
</html>