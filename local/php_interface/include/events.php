<?php

/**
 * Необходимые обработки событий
 */

/*
AddEventHandler("main", "OnEndBufferContent", "deleteKernelCss");
function deleteKernelCss(&$content) {
    global $USER, $APPLICATION;
    if(strpos($APPLICATION->GetCurDir(), "/bitrix/")!==false) return;
    if($APPLICATION->GetProperty("save_kernel") == "Y") return;
    $arPatternsToRemove = Array(
        '/<link.+?href=".+?bitrix\/css\/main\/bootstrap.css[^"]+"[^>]+>/',
        '/<link.+?href=".+?bitrix\/css\/main\/bootstrap.min.css[^"]+"[^>]+>/',
    );
    $content = preg_replace($arPatternsToRemove, "", $content);
    $content = preg_replace("/\n{2,}/", "\n\n", $content);
}*/

/*
AddEventHandler("main", 'OnAfterFileSave', 'OnAfterFileSave');
AddEventHandler("main", 'OnFileSave', 'OnFileSave');
AddEventHandler("iblock", "OnBeforeIBlockElementAdd", "OnBeforeIBlockElementUpdateAndAdd");
AddEventHandler("iblock", "OnBeforeIBlockElementUpdate", "OnBeforeIBlockElementUpdateAndAdd");


function OnFileSave(&$arFile, $fileName, $module)
{
    $info = new SplFileInfo($arFile['name']);
    if (!in_array($info->getExtension(), ['jpg', 'jpeg', 'png', 'webp', 'bmp', 'gif'])) {
        return;
    }
    $size = getimagesize($arFile['tmp_name']);
    resizeImage($arFile, SIZE_FOR_ORIGINAL, $size[1]);
}

function OnAfterFileSave($arFile)
{
    $info = new SplFileInfo($arFile['FILE_NAME']);
    if (!in_array($info->getExtension(), ['jpg', 'jpeg', 'png', 'webp', 'bmp', 'gif'])) {
        return;
    }
    $pathFile = CFile::GetPath($arFile['ID']);
    $path = str_replace($arFile['FILE_NAME'], '', $pathFile);
    $size = getimagesize($_SERVER['DOCUMENT_ROOT'] . $pathFile);
    $laptopImg = CFile::MakeFileArray($arFile['ID']);
    $tabletImg = CFile::MakeFileArray($arFile['ID']);
    $mobileImg = CFile::MakeFileArray($arFile['ID']);

    resizeImage($laptopImg, SIZE_FOR_LAPTOP, $size[1]);
    resizeImage($tabletImg, SIZE_FOR_TABLET, $size[1]);
    resizeImage($mobileImg, SIZE_FOR_MOBILE, $size[1]);

    $fileNameArr = explode('.', $arFile['FILE_NAME']);
    copy($laptopImg['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . $path . $fileNameArr[0] . "_laptop.$fileNameArr[1]");
    copy($tabletImg['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . $path . $fileNameArr[0] . "_tablet.$fileNameArr[1]");
    copy($mobileImg['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . $path . $fileNameArr[0] . "_mobile.$fileNameArr[1]");
}

function OnBeforeIBlockElementUpdateAndAdd(&$arFields)
{

    if ($arFields ['IBLOCK_ID'] ==IBLOCK_COMAND) {
        $id = $arFields['ID'];//id изменяемого элемента
        $propss = ($arFields["PROPERTY_VALUES"][161]);
        $invest = 0;
        foreach ($propss as $pr)
        {
            $invest = (int)$pr['VALUE'];//просто по-другому никак не получить изменение значения PAGE_INVESTORAM
        }
        if ($invest == 1) {
            $arFilter = array(
                'IBLOCK_ID' => IBLOCK_COMAND, // выборка элементов из инфоблока с ИД равным «9»
                'ACTIVE' => 'Y',
                'PROPERTY_PAGE_INVESTORAM' => 1// выборка только элементов показанных на странице Инвесторам
            );
            $res = CIBlockElement::GetList(array(), $arFilter, false, false);
            while ($element = $res->GetNextElement()) {
                $el = $element->GetFields();
                /*При событии "Добавление нового элемента инфоблока" $id = $arFields['ID'] == null
                 $el["ID"] != null
                 так что здесь((int)$el['ID'] != $id) -- будет true все равно и эта строчка пригодна
                 для обоих событий - "OnBeforeIBlockElementAdd" и "OnBeforeIBlockElementUpdate"*/
/*
                if ((int)$el['ID'] != $id)// если это не изменяемый элемент
                {
                    CIBlockElement::SetPropertyValues(
                        (int)$el['ID'],
                        IBLOCK_COMAND,
                        [0],
                        'PAGE_INVESTORAM');// меняем значения свойства PAGE_INVESTORAM всем элтам иблока кроме изменяемого
                }
            }
        }
    }
}*/
