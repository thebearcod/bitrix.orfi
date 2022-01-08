//Данные и переменные для функци опредления города
var c;
var myMap;
var oren = "oren|51.825178,55.110888|Оренбург, пр. Дзержинского, 2/2|+7(3532)30-56-30|ntc@orfi.ru",
    msk = "msk|55.776537, 37.676062|Москва, ул. Бауманская, 7, стр 1|+7(495)320-00-20|msk@orfi.ru",
    orsk = "orsk|51.237195,58.475708|Орск, ул. Суворова, 8|+7(3537)37-22-36|orsk@orfi.ru",
    samara = "samara|53.1972,50.1172|Самара, ул. Ульяновская/Ярмарочная, 52/55|+7(846)244-43-50|samara@orfi.ru",
    astra = "astra|46.3420,48.0449|Астрахань, ул. Бакинская, 149, оф. 203|+7(927)282-80-16|astra@orfi.ru",
    ul = "ul|54.33977,48.39485|Ульяновск, ул. Федерации, 140, оф. 34|+7(917)624-98-33|ul@orfi.ru",
    penza = "penza|53.200722,45.006844|Пенза, ул.Суворова 111, оф. 207|+7(8412)99-80-05|penza@orfi.ru",
    tmn = "tmn|57.154108,65.490319|Тюмень, ул. Таврическая, 9, ст. 15, оф. 304|+7(987)847-92-89|tmn@orfi.ru",
    ufa = "ufa|54.78576,56.066768|Уфа, ул. Новоженова, 90/1, оф. 421|+7(347)262-91-77|ufa@orfi.ru",
    omsk = "omsk|54.972179,73.402608|Омск, ул. Маяковского, 81|+7(3812)29-41-67|omsk@orfi.ru",
    nsk = "nsk|no|Новосибирск|+7(383)227-98-49|nsk@orfi.ru",
    krsk = "krsk|no|Красноярск|+7(391)214-54-83|krsk@orfi.ru",
    irk = "irk|no|Иркутск|+7(3952)64-07-74|irk@orfi.ru",
    surgut = "surgut|no|Сургут|+7(3462)44-69-53|surgut@orfi.ru",
    ekb = "ekb|56.8360463744364,60.614739432540865|Екатеринбург, ул. Красноармейская,10, БЦ Антей|+7(343)319-51-79|ekb@orfi.ru",
    kurgan = "kurgan|no|Курган|+7(3532)30-56-30|kurgan@orfi.ru",
    orel = "orel|no|Орел|+7(4862)63-01-47|orel@orfi.ru",
    perm = "perm|no|Пермь|+7(342)204-13-12|perm@orfi.ru",
    krasnodar = "krasnodar|45.01828783, 39.02825294|Краснодар, ул. Димитрова 164/1 оф. 211|+7(928)210-11-04|krasnodar@orfi.ru",
    syktyvkar = "syktyvkar|61.65688643, 50.82012867|Сыктывкар, ул. Гаражная, 9, БЦ Союз|+7(8212)72-28-37|syktyvkar@orfi.ru",
    chel = "chel|55.16477324, 61.40117604|Челябинск, ул. Кирова 159, АКЦ Челябинск-СИТИ|+7(3517)50-00-59|chel@orfi.ru",
    volgograd = "volgograd|48.70315069, 44.49863031|Волгоград, ул. Канунникова, 23, БЦ Дельта|+7(8442)51-61-96|volgograd@orfi.ru",
    saratov = "saratov|51.53760798, 45.99876736|Саратов, ул. Аткарская, 66, ДЦ Спутник|+7(8452)77-08-93|saratov@orfi.ru",
    kzn = "kzn|55.79054006, 49.11044953|Казань, ул. Право-Булочная, 35/2|+7(843)239-41-67|kzn@orfi.ru",
    nnov = "nnov|56.30364338,43.98991516|Нижний Новгород, ул. Пушкина, 18|+7(831)283-04-11|nnov@orfi.ru",
    kaluga = "kaluga|54.51658447, 36.25939897|Калуга, ул. Суворова, 121, БЦ Московский|+7(4842)40-09-91|kaluga@orfi.ru",
    rzn = "rzn|54.63185469, 39.71464041|Рязань, ул. Вокзальная, 41, БЦ Европа|+7(4912)51-24-01|rzn@orfi.ru",
    arh = "arh|64.52747267, 40.55500682|Архангельск, ул. Урицкого, 1, БЦ Чайка|+7(8182)43-15-52|arh@orfi.ru",
    vologda = "vologda|59.21471381, 39.87319530|Вологда, ул. Мальцева, 52, БЦ Диалог|+7(8172)70-94-84|vologda@orfi.ru",
    vnovgorod = "vnovgorod|58.53851787, 31.26377756|В. Новгород, ул. Бол. Санкт-Петербургская, 39|+7(8162)90-93-18|vnovgorod@orfi.ru",
    klgd = "klgd|54.70940365, 20.50275053|Калининград, пр. Московский, 40|+7(4012)52-14-29|klgd@orfi.ru",
    yar = "yar|57.63234697, 39.87288716|Ярославль, ул.Некрасова, 40, БЦ Североход|+7(4852)68-34-16|yar@orfi.ru",
    voronezh = "voronezh|51.67169679, 39.20330169|Воронеж, ул. Комиссаржевской, 10|+7(473)229-33-47|voronezh@orfi.ru",
    magadan = "magadan|59.56755911, 150.81152852|Магадан, ул. Пролетарская, 11, АТЦ М-Сити|+7(4132)21-00-85|magadan@orfi.ru",
    krym = "krym|45.05019456, 35.37279878|Феодосия, бул. Старшинова, д. 27|+7(987)847-92-89|krym@orfi.ru",
    spb = "spb|no|Санкт-Петербург|+7(812)939-11-61|spb@orfi.ru",
    vl = "vl|43.1195,131.8866|Владивосток, Океанский пр-кт, 17|+7(423)424-04-38|vl@orfi.ru",
    habarovsk = "habarovsk|48.4813,135.0840|Хабаровск, ул. Постышева, 22А|+7(421)734-01-98|habarovsk@orfi.ru";

//Основная функция записи данных о городе в куки
var geo = function () {
    if (!$.cookie("location")) {
        var city = init();
        contact(city);
        $.cookie("location", city, {path: "/",});
    } else {
        var city = $.cookie('location');
        contact(city);
    }
};

// Установка нужных контактов в шапку и карты
var contact = function (n) {
    n = n.split('|');
    document.getElementById('h_phone').innerHTML = n[3];
    document.getElementById('h_adres').innerHTML = n[2];
    document.getElementById('h_email').innerHTML = n[4];
    document.getElementById('m_city').innerHTML = n[2].split(',')[0];
    if (~n[2].indexOf(',')) {
        document.getElementById('m_adres').innerHTML = n[2].slice(n[2].indexOf(',') + 2);
    } else {
        document.getElementById('m_adres').innerHTML = '';
    }
    document.getElementById('m_phone').innerHTML = n[3];
    document.getElementById('m_email').innerHTML = n[4];
    if (window.location.pathname == '/contacts/') {
        document.getElementById('h_adres_city').innerHTML = n[2].split(',')[0];
        document.getElementById('tab-' + n[0]).classList.add('active');
        if (n[1] !== 'no') {
            coord = n[1].split(',');
            maps(coord);
        }
    }
};

// Определение города посетителя
var init = function () {
    var geolocation = ymaps.geolocation,
        a = [geolocation.region],
        city = [geolocation.city];
     console.log(a);
     console.log(city);
    if (a == 'Оренбургская область' && city == 'Оренбург') {
        c = oren;
    } else if (a == 'Москва и Московская область' || city == 'Москва') {
        c = msk;
    } else if (a == 'Оренбургская область' && city == 'Орск') {
        c = orsk;
    } else if (a == 'Самарская область') {
        c = samara;
    } else if (a == 'Астраханская область') {
        c = astra;
    } else if (a == 'Ульяновская область') {
        c = ul;
    } else if (a == 'Пензенская область') {
        c = penza;
    } else if (a == 'Тюменская область') {
        c = tmn;
    } else if (a == 'Республика Башкортостан' || city == 'Уфа') {
        c = ufa;
    } else if (a == 'Омская область') {
        c = omsk;
    } else if (a == 'Новосибирская область') {
        c = nsk;
    } else if (a == 'Красноярский край') {
        c = krsk;
    } else if (a == 'Иркутская область') {
        c = irk;
    } else if (city == 'Сургут') {
        c = surgut;
    } else if (a == 'Свердловская область') {
        c = ekb;
    } else if (a == 'Курганская область') {
        c = kurgan;
    } else if (a == 'Орловская область') {
        c = orel;
    } else if (a == 'Ханты-Мансийский автономный округ' || city == 'Ханты-Мансийск') {
        c = hm;
    } else if (a == 'Пермский край' || city == 'Пермь') {
        c = perm;
    } else if (a == 'Краснодарский край' || city == 'Краснодар') {
        c = krasnodar;
    } else if (a == 'Республика Коми' || city == 'Сыктывкар') {
        c = syktyvkar;
    } else if (a == 'Челябинская область' || city == 'Челябинск') {
        c = chel;
    } else if (a == 'Волгоградская область' || city == 'Волгоград') {
        c = volgograd;
    } else if (a == 'Саратовская область' || city == 'Саратов') {
        c = saratov;
    } else if (a == 'Республика Татарстан' || city == 'Казань') {
        c = kzn;
    } else if (a == 'Нижегородская область' || city == 'Нижний Новгород') {
        c = nnov;
    } else if (a == 'Калужская область' || city == 'Калуга') {
        c = kaluga;
    } else if (a == 'Рязанская область' || city == 'Рязань') {
        c = rzn;
    } else if (a == 'Архангельская область' || city == 'Архангельск') {
        c = arh;
    } else if (a == 'Вологодская область' || city == 'Вологда') {
        c = vologda;
    } else if (a == 'Новгородская область' || city == 'Великий Новгород') {
        c = vnovgorod;
    } else if (a == 'Калининградская область' || city == 'Калининград') {
        c = klgd;
    } else if (a == 'Ярославская область' || city == 'Ярославль') {
        c = yar;
    } else if (a == 'Воронежская область' || city == 'Воронеж') {
        c = voronezh;
    } else if (a == 'Магаданская область' || city == 'Магадан') {
        c = magadan;
    } else if (a == 'Республика Крым') {
        c = krym;
    } else if (a == 'Ленинградская область' || city == 'Санкт-Петербург') {
        c = spb;
    } else if (a == 'Хабаровский край' || city == 'Хабаровск') {
        c = habarovsk;
    } else if (a == 'Приморский край' || city == 'Владивосток') {
        c = vl;
    } else {
        c = oren;
    }
    return c;
};

// Выбор города вручную
var chCity = function (c) {
    del = $.cookie('location');
    $.cookie("location", c, {path: "/",});
    if (window.location.pathname == '/contacts/') {
        del = del.split('|');
        document.getElementById('tab-' + del[0]).classList.remove('active');
        if (del[1] !== 'no') {
            myMap.destroy();
        }
    }
    contact(c);
    $('#modalGeo').modal('hide');
}

//Загрузка карты
var maps = function (n) {
    myMap = new ymaps.Map('maps', {center: n, zoom: 16, behaviors: ['default', 'scrollZoom'], controls: [],});
    myMap.geoObjects.add(new ymaps.Placemark(n));
};

//Установить Оренбург принудительно
var setOren = function () {
    $.cookie("location", oren, {path: "/",});
};

// Определение услуги в онлайн заявке
function ss() {
    $sel = window.location.pathname;
    let ss = 1;
    /*console.log($sel);*/
    switch ($sel) {
        case '/services/proektirovanie/':
            ss = '1';
            break;
        case '/services/proektirovanie/razdel_oos/':
            ss = '1-1';
            break;
        case '/services/proektirovanie/razdel_mpb/':
            ss = '1-2';
            break;
        case '/services/proektirovanie/razdel_itmgochs/':
            ss = '1-3';
            break;
        case '/services/proektirovanie/razrabotka-stu/':
            ss = '1-4';
            break;
        case '/services/proektirovanie/avtorskiy-nadzor/':
            ss = '1-5';
            break;
        case '/services/negos-ekspertiza/':
        case '/services/negos-ekspertiza/proyektnoy-dokumentatsii/':
        case '/services/negos-ekspertiza/inzhenernykh-izyskaniy/':
        case '/services/negos-ekspertiza/smet/':
            ss = '2';
            break;
        case '/services/expb/':
            ss = '3';
            break;
        case '/services/expb/zs/':
            ss = '4';
            break;
        case '/services/expb/pipe/':
            ss = '5';
            break;
        case '/services/expb/truba/':
            ss = '6';
            break;
        case '/services/expb/gd/':
            ss = '7';
            break;
        case '/services/expb/ekspertiza-promyshlennoy-bezopasnosti-proyektnoy-dokumentatsii/':
            ss = '8';
            break;
        case '/services/regopo/':
            ss = '10';
            break;
        case '/services/pekol/':
            ss = '11';
            break;
        case '/services/declpb/':
            ss = '12';
            break;
        case '/services/pasportb/':
            ss = '13';
            break;
        case '/services/pla/':
            ss = '14';
            break;
        case '/services/mpla/':
            ss = '15';
            break;
        case '/services/geofiz/':
            ss = '16';
            break;
        case '/services/geodez/':
            ss = '17';
            break;
        case '/services/stroitelnaya-laboratoriya/':
            ss = '18';
            break;
        case '/services/laboratoriya-nerazrushayushchego-kontrolya/':
            ss = '25';
            break;
        case '/services/deklaratsiya-pozharnoy-bezopasnosti/':
            ss = '21';
            break;
        case '/services/otsenka-pozharnogo-riska/':
            ss = '22';
            break;
        case '/services/ppk/':
            ss = '23';
            break;
        case '/services/ptr/':
            ss = '24';
            break;
    }
    /*console.log(ss);*/
    document.getElementById('s' + ss).selected = true;
}

// Маска-шаблон для ввода номера в форме
jQuery(function ($) {
    $(".mask-tphone").mask("8(999) 999-9999");
});

// Кнопка вверх
$(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $("#to_top").fadeIn();
        } else {
            $("#to_top").fadeOut();
        }
    });
    $("#to_top").click(function () {
        $("body,html").animate({scrollTop: 0}, 800);
        return false;
    });
});

// FancyBox для старых фото
$(document).ready(function () {
    $("a.asv").fancybox({loop: false,});
});
// FancyBox для раздела сми о нас
$(document).ready(function () {
    $("a.asv").fancybox({'titlePosition': 'inside'});
});

//Валидация email
function validateEmail(email) {
    var reg = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return reg.test(email);
}

//Popover bootstrap
$(function () {
    $('[data-toggle="popover"]').popover()
})

//Заявка на услугу
let files;
$('#contact input[type=file]').change(function () {
    files = this.files;
    //console.log(files);
    $('#contact .list-files').text('');
    $.each(files, function (key, value) {
        $('#contact .list-files').append('<span>' + (key + 1) + '. ' + value['name'] + '</span><br>');
    });
});

//$(".send_services").on("click", function () {
$(document).on("submit", "#contact", function (e) {
    e.preventDefault();
    $('#contact input[name=namePage]').val($('h1').text());
    let $form = $(this);

    let $name = $form.find("input[name=name]");
    let $phone = $form.find("input[name=phone]");
    let $email = $form.find("input[name=email]");

    let error = 0;

    const mailvalid = validateEmail($email.val());

    $form.find('.has-error').removeClass('has-error');

    if (mailvalid == false) {
        $email.addClass("has-error");
        error = 1;
    }

    if ($name.val() == "") {
        $name.addClass("has-error");
        error = 1;
    }

    if ($phone.val() == "") {
        $phone.addClass("has-error");
        error = 1;
    }

    if (!error) {
        // заполним массив $_FILES
        let postData = new FormData();
        $.each(files, function (key, value) {
            postData.append(key, value);
        });
        // заполним массив $_POST
        let formArray = $form.serializeArray();
        $.each(formArray, function (index, obj) {
            postData.append(obj.name, obj.value);
        });

        $.ajax({
            type: "POST",
            url: "/files/php/sendOrder.php",
            data: postData,
            async: false,
            cache: false,
            processData: false,
            contentType: false,
            success: function (data) {
                if (data == "true") {
                    $form.fadeOut("fast", function () {
                        $(this)[0].reset();
                        $("#contact span.errors").text("");
                        $('#contact .list-files').text('');
                        $(this).before("<p class='send-success'>Спасибо, Ваша заявка отправлена!<br>Мы стараемся быстро обрабатывать все поступающие заявки.<br>В ближайшее время наш специалист свяжется с Вами.</p>");
                        setTimeout(function () {
                            $('#modalOrder').modal('hide');
                            $("#contact").fadeIn("fast");
                            $("#contact").prev("p.send-success").remove();
                        }, 4000);
                    });
                    // тут код метрики
                    //yaCounter11524657.reachGoal('usluga'); return true;
                    if (typeof yaCounter11524657 !== "undefined") yaCounter11524657.reachGoal('usluga');
                } else $("#contact span.errors").text("Ошибка при отправки формы");
            },
            error: function (jqXHR, exception) {
                console.log(jqXHR);
                $("#contact span.errors").text(jqXHR.status + ": Ошибка при отправки формы");

            }
        });
    }
});

//Обратный звонок
//$("#send_phone").on("click", function(){
$(document).on("submit", "#contact2", function (e) {
    e.preventDefault();
    let cname2val = $("#cname2").val(),
        tphone2val = $("#tphone2").val();

    if (cname2val == "") {
        $("#cname2").addClass("has-error");
    } else if (cname2val != "") {
        $("#cname2").removeClass("has-error");
    }

    if (tphone2val == "") {
        $("#tphone2").addClass("has-error");
    } else if (tphone2val != "") {
        $("#tphone2").removeClass("has-error");
    }
    if (tphone2val != "" && cname2val != "") {
        // если обе проверки пройдены
        // сначала мы скрываем кнопку отправки
        //$("#send_phone").prop('disabled', true);
        //$("#send_phone").addClass("disabled");

        $.ajax({
            type: "POST",
            url: "/files/php/sendPhone.php",
            data: $("#contact2").serialize(),
            success: function (data) {

                if (data == "true") {
                    $("#contact2").fadeOut("fast", function () {
                        $(this)[0].reset();
                        $(this).before("<p class='send-success'>Спасибо, Ваша заявка отправлена<br>В ближайшее время наш специалист позвонит Вам.</p>");
                        setTimeout(function () {
                            $('#modalPhone').modal('hide');
                            $("#contact2").fadeIn("fast");
                            $("#contact2").prev("p.send-success").remove();
                            $("#contact2 span.errors").text("");
                        }, 4000);
                    });

                    // тут код метрики
                    //onclick="yaCounter11524657.reachGoal('zvonok'); return true;"
                    if (typeof yaCounter11524657 !== "undefined") yaCounter11524657.reachGoal('zvonok');
                } else {
                    console.log('success: Ошибка при отправки формы');
                    $("#contact2 span.errors").text("Ошибка при отправки формы");
                }
            },
            error: function (jqXHR, exception) {
                console.log(jqXHR);
                $("#contact2 span.errors").text(jqXHR.status + ": Ошибка при отправки формы");

            }
        });
    }
});


//Вопрос с сайта
$("#send_question").on("click", function () {

    var fioval = $("#fio").val(),
        orgval = $("#org").val(),
        qemailval = $("#qemail").val(),
        qmailvalid = validateEmail(qemailval),
        temaval = $("#tema").val(),
        factval = $("#fact").val();

    if (qmailvalid == false) {
        $("#qemail").addClass("has-error");
    } else if (qmailvalid == true) {
        $("#qemail").removeClass("has-error");
    }

    if (factval == "") {
        $("#fact").addClass("has-error");
    } else if (factval != "") {
        $("#fact").removeClass("has-error");
    }

    if (qmailvalid === true && factval != "") {
        // если обе проверки пройдены
        // сначала мы скрываем кнопку отправки
        $("#send_question").prop('disabled', true);
        $("#send_question").addClass("disabled");

        $.ajax({
            type: "POST",
            url: "/faq/q/sm/action.php",
            data: $("#form_question").serialize(),
            success: function (data) {
                if (data == "true") {
                    $("#form_question").replaceWith("<p class='send-success'>Спасибо, Ваш вопрос отправлен<br>В ближайшее время наш специалист ответит вам.<br><a href='/faq/q/sm/'>Задать еще один вопрос</a></p>");
                }
            }
        });
    }
});

//Обратная связь
$("#send_feedback").on("click", function () {

    var fioval = $("#fio").val(),
        femailval = $("#qemail").val(),
        qmailvalid = validateEmail(femailval),
        factval = $("#fact").val();
    no_bot = $("#no_bot").is(':checked');
    errors = new Array();
    message = "";

    if (qmailvalid == false) {
        $("#qemail").addClass("has-error");
        errors.push("* Поле &lt;e-mail&gt; заполнено некорректно<br>");
    } else if (qmailvalid == true) {
        $("#qemail").removeClass("has-error");
    }

    if (factval == "") {
        $("#fact").addClass("has-error");
        errors.push("* Поле &lt;сообщение&gt; заполнено некорректно<br>");
    } else if (factval != "") {
        $("#fact").removeClass("has-error");
    }

    if (no_bot == false) {
        errors.push("* Вы не прошли проверку<br>");
    }

    for (var i = 0; i < errors.length; i++) {
        message = message + errors[i];
    }
    $("#message").html(message);

    if (qmailvalid === true && factval != "") {
        // если обе проверки пройдены покажем успешное сообщение
        // сначала мы скрываем кнопку отправки
        //$("#send_feedback").prop('disabled', true); // *kms кнопка дисейблится после нажатия, убрал пока
        //$("#send_feedback").addClass("disabled");

        $.ajax({
            type: "POST",
            url: "/contacts/svyaz/action.php",
            data: $("#form_feedback").serialize(),
            success: function (data) {
                if (data == "true") {
                    $("#form_feedback").replaceWith("<p class='send-success'>Спасибо, Ваше сообщение отправлено<br>В ближайшее время наш специалист ответит вам.</p>");
                }
            }
        });
    }
});
//Cообщение в книге отзывов
$("#send_otzyv").on("click", function () {

    var no_bot = $("#no_bot").is(':checked');
    errors = new Array();
    message = "";

    if (no_bot == false) {
        errors.push("* Вы не прошли проверку<br>");
    }

    for (var i = 0; i < errors.length; i++) {
        message = message + errors[i];
    }
    $("#message").html(message);
    //$("#form_otzyv").replaceWith("<p class='send-success'>Спасибо, Ваш сообщение успешно отправлено.<br> Мы постараемся учесть в своей работе Ваши конструктивные комментарии и пожелания!</p>");
    if (no_bot == true) { // если проверки пройдены покажем успешное сообщение
        $.ajax({
            type: "POST",
            url: "/clients/book/action.php",
            data: $("#form_otzyv").serialize(),
            success: function (data) {
                if (data == "true") {
                    $("#form_otzyv").replaceWith("<p class='send-success'>Спасибо, Ваш сообщение успешно отправлено.<br> Мы постараемся учесть в своей работе Ваши конструктивные комментарии и пожелания!</p>");
                }
            }
        });
    }
});

//Mobile slidemenu
$(document).ready(function () {
    let $panel = document.getElementById('panel');
    if (typeof ($panel) != 'undefined' && $panel != null) {
        var slideout = new Slideout({
            'panel': document.getElementById('panel'),
            'menu': document.getElementById('menu'),
            'padding': 250,
            'tolerance': 50,
            'touch': false,
            'side': 'right',
        });

        // Toggle button for mobile slidemenu
        let $toggleButton = document.querySelector('.toggle-button');
        if (typeof ($toggleButton) != 'undefined' && $toggleButton != null) {
            $toggleButton.addEventListener('click', function () {
                slideout.toggle();
            });
        }

    }

});

//Фильтр на странице выполненных работ
function filter_work() {
    var sel = document.getElementById('region'),
        data1 = sel.value,
        data2 = sel.name;
    $.ajax({  // Отсылаем параметры
        type: "POST",
        url: "/work/filter.php",
        data: "data1=" + data1 + "&data2=" + data2,
        success: function (html) {  // Выводим то что вернул PHP
            $("#result").empty(); //предварительно очищаем нужный элемент страницы
            $("#result").append(html); //и выводим ответ php скрипта
        }
    });
}

/*Отображение скидки до определенной даты*/
function sale(n) {
    var now = new Date;
    var n = new Date(n);
    var sale = document.getElementsByClassName('sale');
    if (sale.length != 0) {
        if (now < n) {
            sale[0].style.display = 'block';
            sale[1].style.display = 'block'
        }
    }
}
