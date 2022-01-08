<?php

/**
 * Вспомогательные функции и хелперы
 */

/**
 * Функция для построения строки размера файла
 * @param $bytes
 * @return string
 */
function get_size($bytes) {
    if ( $bytes < 1000 * 1024 ) {
        return number_format( $bytes / 1024, 2 ) . " kb";
    }
    elseif ( $bytes < 1000 * 1048576 ) {
        return number_format( $bytes / 1048576, 2 ) . " mb";
    }
    elseif ( $bytes < 1000 * 1073741824 ) {
        return number_format( $bytes / 1073741824, 2 ) . " gb";
    }
    else {
        return number_format( $bytes / 1099511627776, 2 ) . " tb";
    }
}

/**
 * Функиця ищет в строке специальные символы, установленные в настройках и делает их надстрочными
 * @param string $string
 * @return string
 */
function specSymbolsSup($string) {
    $arSpecSymbols =  \Bitrix\Main\Config\Option::get( "askaron.settings", "UF_SPEC_SYMBOL");
    if(!empty($arSpecSymbols)){
        foreach ($arSpecSymbols as $symbol){
            $pattern = "/". $symbol."/";
            if(preg_match($pattern, $string)){
                $replacement = "<sup>". $symbol . "</sup>";
                $string = preg_replace($pattern, $replacement, $string);
            }
        }
    }
    return $string;
}

/**
 * Функция формирует блок с тегом picture, который содержит информацию на разные версии изображений для разных разрешений.
 * @param string $original Путь к оригинальной картинке
 * @param string $class Класс, который будет установлен в тег picture
 * @param string $alt ALT картинки
 * @return string
 */
function getImageTag($original = '', $class = '', $alt = '') : string {
    $return = '';
    if($original) {
        $fileName = str_replace('/', '', strrchr($original, '/'));
        $fileArr = explode('.',$fileName); //делим имя файла на имя и расширение
        $path = str_replace($fileName, '', $original); // путь до файла
        foreach (FORMATS_SIZE as $format => $width) {
             if (!file_exists(rtrim($_SERVER['DOCUMENT_ROOT'],'/').$path.$fileArr[0]."_$format.".$fileArr[1])) {
                 $formatFile = CFile::MakeFileArray($original);
                 $size = getimagesize($formatFile['tmp_name']);
                 resizeImage($formatFile, $width, $size[1]);
                 copy($formatFile['tmp_name'], rtrim($_SERVER['DOCUMENT_ROOT'],'/').$path.$fileArr[0]."_$format.$fileArr[1]");
             }
        }
        $normal = $path.$fileArr[0].'_laptop.'.$fileArr[1];
        $tablet = $path.$fileArr[0].'_tablet.'.$fileArr[1];
        $mobile = $path.$fileArr[0].'_mobile.'.$fileArr[1];
        $return = '<picture class="'.$class.'">
                        <source media="(min-width: 1700px)" srcset="'.$original.'">
                        <source media="(min-width: 1199px)" srcset="'.$normal.'">
                        <source media="(min-width: 768px)" srcset="'.$tablet.'">
                        <source srcset="'.$mobile.'">
                        <img src="'.$original.'" alt="'.$alt.'">
                    </picture>';
    }
    return $return;
}

/**
 * Изменение размеров изображения
 * @param $arFile
 * @param $width
 * @param $height
 */
function resizeImage(&$arFile, $width, $height)
{
    CAllFile::ResizeImage(
        $arFile,
        array(
            "width" => $width,
            "height" => $height
        )
    );
}


/**
 * Возвращает нужную позицию в URL
 * @param $url
 * @param $position
 * @return mixed|string
 */
function slashPosition($url, $position) {
    $arr = explode("/", $url);
    return $arr[$position];
};