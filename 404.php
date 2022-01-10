<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
$APPLICATION->SetPageProperty("BANNER_TITLE", "404");
$APPLICATION->SetPageProperty("BANNER_TEXT", "Страница не найдена");
$APPLICATION->SetPageProperty("title", "Страница не найдена");
$APPLICATION->SetTitle("404 Not Found");

/*$APPLICATION->IncludeComponent("bitrix:main.map", ".default", Array(
	"LEVEL"	=>	"3",
	"COL_NUM"	=>	"2",
	"SHOW_DESCRIPTION"	=>	"Y",
	"SET_TITLE"	=>	"Y",
	"CACHE_TIME"	=>	"36000000"
	)
);*/
?>

    <div class="error-page-wrapper">
        <div class="error-wrapper">
            <div class="container-big">
                <div class="row align-items-center">
                    <?/*<div class="col-lg-12">
                        <h1 class="error-title">404</h1>
                    </div>*/?>
                    <div class="col-lg-12 error-info-wrapper">
                        <div class="error-info">
                            <?/*<h2 class="error-info-title">Страница не&nbsp;найдена!</h2>*/?>
                            <p>Страница, на&nbsp;которую вы пытаетесь попасть, не&nbsp;существует или&nbsp;была удалена.</p>
                            <p>Перейдите на&nbsp;<a href="<?=SITE_DIR?>" class="error-info-link">главную страницу!</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
$STATUS_404 = false;?>