<?php

//константа SITE_TEMPLATE_PATH определяется только в прологе, поэтому не в init.php
define('TEXT_TERMS_OF_USE', 'Нажимая на кнопку вы подтверждаете, что ознакомились с <a target="_blank" href="'.SITE_TEMPLATE_PATH.'/assets/doc/terrm-of-use-orfiru.pdf">пользовательским соглашением</a> и принимаете его');
?>

<!-- ModalGeo -->
<div class="modal fade" id="modalGeo" tabindex="-1" role="dialog" aria-labelledby="modalGeoLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="modalGeoLabel">Выберите город</h4>
            </div>
            <div class="modal-body modalgeo">
                <div class="row">
                    <div class="col-sm-3 col-xs-6">
                        <ul class="list-unstyled">
                            <li><span onclick="chCity(arh)">Архангельск</span></li>
                            <li><span onclick="chCity(astra)">Астрахань</span></li>
                            <li><span onclick="chCity(vnovgorod)">Великий Новгород</span></li>
                            <li><span onclick="chCity(vl)">Владивосток</span></li>
                            <li><span onclick="chCity(volgograd)">Волгоград</span></li>
                            <li><span onclick="chCity(vologda)">Вологда</span></li>
                            <li><span onclick="chCity(voronezh)">Воронеж</span></li>
                            <li><span onclick="chCity(ekb)">Екатеринбург</span></li>
                            <li><span onclick="chCity(irk)">Иркутск</span></li>
                            <li><span onclick="chCity(kzn)">Казань</span></li>
                        </ul>
                    </div>
                    <div class="col-sm-3 col-xs-6">
                        <ul class="list-unstyled">
                            <li><span onclick="chCity(klgd)">Калининград</span></li>
                            <li><span onclick="chCity(kaluga)">Калуга</span></li>
                            <li><span onclick="chCity(krasnodar)">Краснодар</span></li>
                            <li><span onclick="chCity(krsk)">Красноярск</span></li>
                            <li><span onclick="chCity(krym)">Крым</span></li>
                            <li><span onclick="chCity(kurgan)">Курган</span></li>
                            <li><span onclick="chCity(magadan)">Магадан</span></li>
                            <li><span onclick="chCity(msk)"><b>Москва</b></span></li>
                            <li><span onclick="chCity(nnov)">Нижний Новгород</span></li>
                            <li><span onclick="chCity(nsk)">Новосибирск</span></li>
                        </ul>
                    </div>
                    <div class="col-sm-3 col-xs-6">
                        <ul class="list-unstyled">
                            <li><span onclick="chCity(omsk)">Омск</span></li>
                            <li><span onclick="chCity(orel)">Орел</span></li>
                            <li><span onclick="chCity(oren)"><b>Оренбург</b></span></li>
                            <li><span onclick="chCity(orsk)">Орск</span></li>
                            <li><span onclick="chCity(penza)">Пенза</span></li>
                            <li><span onclick="chCity(perm)">Пермь</span></li>
                            <li><span onclick="chCity(rzn)">Рязань</span></li>
                            <li><span onclick="chCity(samara)">Самара</span></li>
                            <li><span onclick="chCity(spb)">Санкт-Петербург</span></li>
                            <li><span onclick="chCity(saratov)">Саратов</span></li>
                        </ul>
                    </div>
                    <div class="col-sm-3 col-xs-6">
                        <ul class="list-unstyled">
                            <li><span onclick="chCity(surgut)">Сургут</span></li>
                            <li><span onclick="chCity(syktyvkar)">Сыктывкар</span></li>
                            <li><span onclick="chCity(tmn)">Тюмень</span></li>
                            <li><span onclick="chCity(ul)">Ульяновск</span></li>
                            <li><span onclick="chCity(ufa)">Уфа</span></li>
                            <li><span onclick="chCity(habarovsk)">Хабаровск</span></li>
                            <li><span onclick="chCity(chel)">Челябинск</span></li>
                            <li><span onclick="chCity(yar)">Ярославль</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ModalPhone -->
<div class="modal fade" id="modalPhone" tabindex="-1" role="dialog" aria-labelledby="modalPhoneLabel">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="modalPhoneLabel">Заказать звонок</h4>
            </div>
            <div class="modal-body modalphone">
                <form id="contact2" name="contact2" method="post">
                    <div class="form-group">
                        <label for="cname2">Как Вас зовут<sup class="text-warning">*</sup></label>
                        <input type="text" id="cname2" name="cname2" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="tphone2">Ваш номер телефона<sup class="text-warning">*</sup></label>
                        <input type="text" id="tphone2" name="tphone2" class="form-control mask-tphone">
                        <input type="text" id="title_page" name="title_page" class="hidden"
                               value="<?php// print $title; ?>">
                        <input type="text" id="url2" name="url2" class="hidden" value="<?php //utm_direct(); ?>">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-block btn-primary text-center" name="send" id="send_phone">
                            Отправить заявку
                        </button>
                        <p class="help-block"><?= TEXT_TERMS_OF_USE ?></p>

                    </div>
                    <div class="form-group text-center"><span class="errors"></span></div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- modalOrder -->
<div class="modal fade" id="modalOrder" tabindex="-1" role="dialog" aria-labelledby="modalOrderLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="modalOrderLabel">Онлайн заявка</h4>
            </div>
            <div class="modal-body modalOrder">
                <form id="contact" name="contact" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="orderService">Выберите услугу</label>
                                <select id="orderService" name="service" class="form-control">
                                    <option id="s1">Разработка проектной документации</option>
                                    <option id="s1-1">Разработка раздела ООС</option>
                                    <option id="s1-2">Разработка раздела ПБ</option>
                                    <option id="s1-3">Разработка раздела ИТМ ГОЧС</option>
                                    <option id="s1-4">Разработка СТУ</option>
                                    <option id="s1-5">Авторский надзор</option>
                                    <option id="s2">Негосударственная экспертиза</option>
                                    <option id="s3">Экспертиза промышленной безопасности</option>
                                    <option id="s4">ЭПБ зданий и сооружений</option>
                                    <option id="s5">ЭПБ технических устройств</option>
                                    <option id="s6">ЭПБ дымовых и вентиляционных труб</option>
                                    <option id="s7">ЭПБ объектов ж/д транспорта</option>
                                    <option id="s8">ЭПБ проектной документации</option>
                                    <option id="s10">Регистрация и перерегистрация ОПО</option>
                                    <?//<option id="s11">Промышленная экология</option>?>
                                    <?//<option id="s12">Декларация промышленной безопасности</option>?>
                                    <option id="s13">Паспорт безопасности опасного объекта</option>
                                    <option id="s14">Разработка плана ликвидации аварий</option>
                                    <option id="s15">Разработка плана мероприятий по ЛПА</option>
                                    <option id="s21">Декларация пожарной безопасности</option>
                                    <option id="s22">Расчет пожарного риска</option>
                                    <option id="s23">Положение о производственном контроле</option>
                                    <option id="s24">Положение о порядке расследовании аварий</option>
                                    <?/*<option id="s16">Геофизические исследования</option>
                                    <option id="s17">Геодезические и кадастров. работы</option>
                                    <option id="s18">Испытательная лаборатория</option>
                                    <option id="s25">Лаборатория неразрушающего контроля</option>*/?>
                                    <option id="s26">Акустико-эмиссионный контроль при испытаниях оборудования</option>
                                    <option id="s19">Учебный центр</option>
                                    <option id="s20">Другая услуга</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="orderName">ФИО<span class="text-warning">*</span></label>
                                <input type="text" id="orderName" name="name" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="name_org">Организация</label>
                                <input type="text" id="name_org" name="name_org" class="form-control"
                                       placeholder="Полное наименование или ИНН">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="orderPhone">Номер телефона<span class="text-warning">*</span></label>
                                <input type="text" id="orderPhone" name="phone" class="form-control mask-tphone">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="orderEmail">Email<span class="text-warning">*</span></label>
                                <input type="email" id="orderEmail" name="email" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="orderMessage">Дополнительная информация *</label>
                                <textarea rows="5" id="orderMessage" name="message" class="form-control"
                                          placeholder="Комментарий к заявке. Дополнительная информация об объекте. Должность контактного лица."></textarea>
                                <input type="text" id="url" name="url" style="display:none;"
                                       value="<?php //utm_direct(); ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input type="hidden" name="MAX_FILE_SIZE" value="30000">
                                <label for="orderFiles">Прикрепить файлы:</label>
                                <input type="file" id="orderFiles" multiple name="files[]">
                            </div>
                            <div class="form-group list-files"></div>
                            <span>* можно сразу приложить дополнительную информацию: задание на проектирование, сведения об опасном производственном объекте (наименование ОПО и наименование предприятия, которое эксплуатирует ОПО)</span>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col-sm-6 col-sm-offset-3">
                            <div class="form-group">
                                <button type="submit" class="btn btn-block btn-primary send_services" name="send"
                                        id="send_services"
                                >Отправить заявку
                                </button>
                                <p class="help-block"><?= TEXT_TERMS_OF_USE ?></p>
                            </div>
                            <div class="form-group text-center"><span class="errors"></span></div>
                        </div>
                    </div>
                    <input type="hidden" name="namePage">
                    <input type="hidden" name="urlPage" value="<?=$urlPage?>">
                </form>
            </div>
        </div>
    </div>
</div>

<!-- modalOrder sale 20 year -->
<div class="modal fade" id="modalOrderSale" tabindex="-1" role="dialog" aria-labelledby="modalOrderLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="modalOrderLabel">Заявка на услугу со скидкой</h4>
            </div>
            <div class="modal-body modalOrder">
                <form name="contact" action="javascript:;" method="post">
                    <input type="hidden" name="sale" value="1">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="msg">Выберите услугу</label>
                                <select id="msg" name="msg" class="form-control">
                                    <option id="s2">Негосударственная экспертиза</option>
                                    <option id="s8">ЭПБ проектной документации</option>
                                    <option id="s12">Декларация промышленной безопасности</option>
                                    <option id="s13">Паспорт безопасности опасного объекта</option>
                                    <option id="s14">Разработка плана ликвидации аварий</option>
                                    <option id="s15">Разработка плана мероприятий по ЛПА</option>
                                    <option id="s1-2">Разработка раздела ПБ</option>
                                    <option id="s1-3">Разработка раздела ИТМ ГОЧС</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="cname">ФИО<span class="text-warning">*</span></label>
                                <input type="text" id="cname" name="cname" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="name_org">Организация</label>
                                <input type="text" id="name_org" name="name_org" class="form-control"
                                       placeholder="Полное наименование или ИНН">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="tphone">Номер телефона<span class="text-warning">*</span></label>
                                <input type="text" id="tphone" name="tphone" class="form-control mask-tphone">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="email">Email<span class="text-warning">*</span></label>
                                <input type="email" id="email" name="email" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="org">Дополнительная информация</label>
                                <textarea rows="5" id="org" name="org" class="form-control"
                                          placeholder="Комментарий к заявке. Дополнительная информация об объекте. Должность контактного лица."></textarea>
                                <input type="text" id="url" name="url" style="display:none;"
                                       value="<?php //utm_direct(); ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col-sm-6 col-sm-offset-3">
                            <div class="form-group">
                                <button type="submit" class="btn btn-block btn-primary send_services" name="send"
                                        id="send_services_sale"
                                        onclick="ym(11524657,'reachGoal','order-sale'); return true;">Отправить заявку
                                </button>
                                <p class="help-block"><?= TEXT_TERMS_OF_USE ?></p>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>