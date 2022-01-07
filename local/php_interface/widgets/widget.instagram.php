<?php
$TokenGenerated =
    'IGQVJXVHdObDhwZAHZA6eFkzWlBNMmo0Sm9CWXVwYy1FSlBSZAGdVSlVQaGhxOFVRLWMzNzA4OHZAyNjBRSHczdU9Lckl2Rm83QVc3b0RjTlRfSTlYRENLN1ZAIZAVFjY2lpMGN1ZADdEQmRaS3ZADbGNMWUJ6UQZDZD';


$accessToken = $TokenGenerated; // получаем токен из базы
$tokenDate = "date_from"; // получаем дату создания из базы

// Вычисляем сколько полных дней прошло с даты создания токена
$tokenTimestamp = strtotime($tokenDate);
$curTimestamp = time();
$dayDiff = ($curTimestamp - $tokenTimestamp) / 86400;

if (!empty($accessToken)) {
    /*if ($dayDiff > 50) { // Если токену уже более 50 дней, то обновляем его

        // Запрос на обновление токена
        $url = "https://graph.instagram.com/refresh_access_token?grant_type=ig_refresh_token&access_token=" . $accessToken;
        $instagramCnct = curl_init(); // инициализация cURL подключения
        curl_setopt($instagramCnct, CURLOPT_URL, $url); // адрес запроса
        curl_setopt($instagramCnct, CURLOPT_RETURNTRANSFER, 1); // просим вернуть результат
        $response = json_decode(curl_exec($instagramCnct)); // получаем и декодируем данные из JSON
        curl_close($instagramCnct); // закрываем соединение

        // обновляем токен и дату его создания в базе

        $accessToken = $response->access_token; // обновленный токен
    }*/

    // Получаем ленту
    $url = "https://graph.instagram.com/me/media?fields=id,media_type,media_url,caption,timestamp,thumbnail_url,permalink,children{fields=id,media_url,thumbnail_url,permalink}&limit=10&access_token=" . $accessToken;
    $instagramCnct = curl_init(); // инициализация cURL подключения
    curl_setopt($instagramCnct, CURLOPT_URL, $url); // подключаемся
    curl_setopt($instagramCnct, CURLOPT_RETURNTRANSFER, 1); // просим вернуть результат
    $media = json_decode(curl_exec($instagramCnct)); // получаем и декодируем данные из JSON
    curl_close($instagramCnct); // закрываем соединение
    //var_dump($media);

    $instaFeed = array();
    foreach ($media->data as $mediaObj) {
        if (!empty($mediaObj->children->data)) {
            foreach ($mediaObj->children->data as $children) {
                $instaFeed[$children->id]['img'] = $children->thumbnail_url ?: $children->media_url;
                $instaFeed[$children->id]['link'] = $children->permalink;
                $instaFeed[$children->id]['caption'] = $mediaObj->caption;
                $instaFeed[$children->id]['timestamp'] = $mediaObj->timestamp;
                $instaFeed[$children->id]['media_type'] = $mediaObj->media_type;
            }
        } else {
            $instaFeed[$mediaObj->id]['img'] = $mediaObj->thumbnail_url ?: $mediaObj->media_url;
            $instaFeed[$mediaObj->id]['link'] = $mediaObj->permalink;
            $instaFeed[$mediaObj->id]['caption'] = $mediaObj->caption;
            $instaFeed[$mediaObj->id]['timestamp'] = $mediaObj->timestamp;
            $instaFeed[$mediaObj->id]['media_type'] = $mediaObj->media_type;
        }
    }
}?>

<?/* ---> Instagram Widget start */?>
<section class="section social">
    <div class="container-big">
        <div id="js-social-slider" class="social-slider swiper-container" data-count="<?=count($instaFeed)?>">
            <div class="swiper-wrapper">
                <?foreach ($instaFeed as $insta):?>
                <a data-timestamp="<?=$insta['timestamp']?>" href="<?=$insta['img']?>" data-fancybox="gallery" class="swiper-slide">
                    <img src="<?=$insta['img']?>" alt="<?=$insta['timestamp']?>">
                </a>
                <?endforeach;?>

            </div>
        </div>
    </div>
</section>
<?/* <--- Instagram Widget end */?>