<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>

<form id="questions-form" class="request-manager-form" action="<?=POST_FORM_ACTION_URI?>" method="POST">
    <?=bitrix_sessid_post()?>
    <div class="row">
        <div class="col-lg-4 col-xl-3">
            <div class="form-group">
                <input
                    name="user_name"
                    type="text"
                    class="form-control"
                    placeholder="<?=GetMessage("MFT_NAME_QUESTION")?><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("NAME", $arParams["REQUIRED_FIELDS"])):?>*<?endif?>"
                    value="<?=$arResult["AUTHOR_NAME"]?>"
                    >
            </div>
            <div class="form-group">
                <input
                    name="user_phone"
                    type="text"
                    class="form-control"
                    placeholder="<?=GetMessage("MFT_PHONE_QUESTION")?><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("PHONE", $arParams["REQUIRED_FIELDS"])):?>*<?endif?>"
                    value="<?=$arResult["AUTHOR_PHONE"]?>"
                    >
            </div>
            <div class="form-group">
                <input
                    name="user_email"
                    type="text"
                    class="form-control"
                    placeholder="<?=GetMessage("MFT_EMAIL_QUESTION")?><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("EMAIL", $arParams["REQUIRED_FIELDS"])):?>*<?endif?>"
                    value="<?=$arResult["AUTHOR_EMAIL"]?>"
                    >
            </div>
        </div>
        <div class="col-lg-8 col-xl-9">
            <div class="form-group">
            <textarea name="MESSAGE"
                    class="form-control"
                    placeholder="<?=GetMessage("MFT_MESSAGE_QUESTION")?><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("MESSAGE", $arParams["REQUIRED_FIELDS"])):?>*<?endif?>"
            ></textarea>
            </div>
        </div>
    </div>
    <div class="row align-items-center">
        <div class="col-lg-4 col-xl-3">
            <button class="btn btn-block" type="submit" name="submit" value="<?=GetMessage("MFT_SUBMIT_QUESTION")?>"><?=GetMessage("MFT_SUBMIT_QUESTION")?></button>
            <?if(!empty($arResult["ERROR_MESSAGE"])) {
                foreach($arResult["ERROR_MESSAGE"] as $v)
                    ShowError($v);
            }
            if($arResult["OK_MESSAGE"] <> '') {
                ?>
                <div class="mf-ok-text"><?=$arResult["OK_MESSAGE"]?></div>
            <?
            }
            ?>
        </div>
        <div class="col-lg-8 col-xl-9">
            <p class="form-disclaimer">Нажимая &laquo;Оставить заявку&raquo; Вы даете согласие на&nbsp;обработку
                персональных данных и&nbsp;соглашаетесь c&nbsp;<a target="_blank" href="/privacy/">пользовательским соглашением и&nbsp;политикой
                    конфиденциальности</a>.</p>
        </div>
    </div>
    <input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
</form>