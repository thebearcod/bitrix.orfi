<nav id="menu">
    <ul class="nav nav-pills nav-stacked mainscroll">
        <?php //getNavMobile($arMainnav); ?>
    </ul>
    <ul class="mobile-contact list-unstyled">
        <li class="mobile-contact__city">
            <a data-toggle="modal" data-target="#modalGeo" href="#modalGeo">
                <span id="m_city">Оренбург</span> <span class="caret"></span>
            </a>
        </li>
        <li id="m_adres">пр. Дзержинского, 2/2</li>
        <li id="m_phone">+7(3532)30-56-30</li>
        <li id="m_email">ntc@orfi.ru</li>
    </ul>
    <div class="form-group">
        <button class="btn btn-default btn-block" data-toggle="modal" data-target="#modalPhone">Заказать звонок</button>
    </div>
    <div class="form-group">
        <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#modalOrder">Онлайн заявка</button>
    </div>
    <? //getSocial($arSocial,'v'); ?>
</nav>