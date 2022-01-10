<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&apikey=6c099149-30e4-4d93-b8c6-fe75254672ae"></script>

<script>/* ymaps.ready(geo);
        sale("2020-09-31");*/
</script>

<?php
$url = strtolower($_SERVER["REQUEST_URI"]);
$host = 'https://'.$_SERVER['HTTP_HOST'];

if ($url == "/") { ?>
    <script>
        $(".slider").owlCarousel({
            animateOut: "fadeOut",
            items: 1,
            loop: true,
            margin: 10,
            autoplay: true,
            dots: true,
            autoplayHoverPause: true,
        });
        $(".mainwork").owlCarousel({
            items: 1,
            loop: true,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 5000,
            dots: false,
            navContainerClass: "owl-nav pull-right",
            nav: true,
            navText: ["<i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i>", "<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>"],
            autoplayHoverPause: true,
            autoHeight: true,
        });
        $(".mainotzivi").owlCarousel({
            items: 1,
            loop: true,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 6000,
            dots: false,
            navContainerClass: "owl-nav pull-right",
            nav: true,
            navText: ["<i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i>", "<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>"],
            autoplayHoverPause: true,
            autoHeight: true,
        });
        $(".owl-plus").owlCarousel({
            items: 5,
            loop: false,
            margin: 20,
            nav: true,
            navContainerClass: "owl-nav text-center",
            navText: ["<i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i>", "<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>"],
            autoplay: true,
            autoplayHoverPause: true,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 2,
                },
                768: {
                    items: 5,
                },
            }
        });
    </script>
    <?
}
if (slashPosition($url, 1) == "work" || slashPosition($url, 1) == "services") {
    ?>
    <script>
        if ($('.reviews-list').length > 0) {
            $(".reviews-list").owlCarousel({
                items: 1,
                loop: true,
                margin: 10,
                autoplay: true,
                autoplayTimeout: 6000,
                dots: false,
                navContainerClass: "owl-nav pull-right",
                nav: true,
                navText: ["<i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i>", "<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>"],
                autoplayHoverPause: true,
                autoHeight: true,
            });
        }

        $(".mainwork").owlCarousel({
            items: 1,
            loop: true,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 5000,
            dots: false,
            navContainerClass: "owl-nav pull-right",
            nav: true,
            navText: ["<i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i>", "<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>"],
            autoplayHoverPause: true,
            autoHeight: true,
        });
    </script>
    <?
}
if (slashPosition($url, 1) == "negosudarstvennaya-ekspertiza") {
    echo '<script src="/files/js/landing.js"></script>';
}
if (slashPosition($url, 2) == "otzivi") {
    echo '<script src="/files/js/loadotzivi.js"></script>';
} ?>
<?php
//подключаем виджет bitrix24 только на проде
if ($host == "https://orfi.ru"): ?>
    <script>
        //виджет
        (function (w, d, u) {
            var s = d.createElement('script');
            s.async = true;
            s.src = u + '?' + (Date.now() / 60000 | 0);
            var h = d.getElementsByTagName('script')[0];
            h.parentNode.insertBefore(s, h);
        })(window, document, 'https://cdn-ru.bitrix24.ru/b19399730/crm/site_button/loader_2_0ytpv8.js');
    </script>
<?
endif; ?>