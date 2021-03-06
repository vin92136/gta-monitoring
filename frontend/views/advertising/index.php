<?php

use common\models\AdvertisingBanners;
use yii\helpers\Url;

$this->title = Yii::t('main', 'Реклама на сайте');
Yii::$app->params['breadcrumbs'][] = $this->title;

Yii::$app->params['description'] = Yii::t('main', 'Лучшая реклама SAMP, CRMP, MTA, FiveM, RAGE Multiplayer серверов: поднятие в топ, выделение цветом, массовая рассылка, покупка бннеров и ссылок!');
$banners = AdvertisingBanners::find()
    ->orderBy('id')
    ->all();
?>
<p class="text-muted">
    <b>Servers.Fun</b> <?= Yii::t('main', 'предлагает обширный функционал для рекламы Ваших проектов. Выберите ниже интересующий Вас способ и сможете решить проблему рекламы раз и навсегда!') ?>
</p>
<div class="card">
    <div class="card-body">
        <h3 class="card-title"><?= Yii::t('main', 'Закрепление в ТОП') ?></h3>
        <p class="card-text"><?= Yii::t('main', 'Если Ваш сервер еще не успел заработать много положительных оценок - наверняка он далеко от первых позиций. И у вас есть возможность это исправить!') ?>
            >
        </p>
        <h4 class="card-title"><?= Yii::t('main', 'Как заказать закрепление сервера?') ?></h4>
        <p class="card-text"><?= Yii::t('main', 'Для заказа закрепления сервера Вам достаточно зайти на страничку интересующего Вас сервера, и нажать кнопку "Купить закрепление в ТОПе". Во всплываещем окне Вам выбрать количество дней, на которое Вы желаете закрепить сервер и оплатить услугу.') ?></p>
        <h4 class="card-title"><?= Yii::t('main', 'Как это работает?') ?></h4>
        <p class="card-text"><?= Yii::t('main', 'После заказа данной услуги сервер автоматически поднимается на первые позиции рейтинга. Обратите внимание! Несмотря на то, что сервер имеет преимущество перед серверами без закрепления в ТОПе, это не гарантирует, что Ваш сервер всегда будет на первом месте. Даже среди закрепленных серверов происходит сортировка по рейтингу.') ?></p>
        <h4 class="card-title"><?= Yii::t('main', 'Стоимость закрепления сервера?') ?></h4>
        <p class="card-text"><?= Yii::t('main', 'Актуальная стоимость закрепления сервера составляет <u>10р. в день</u>.') ?></p>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <h3 class="card-title"><?= Yii::t('main', 'Выделение сервера цветом') ?></h3>
        <p class="card-text"><?= Yii::t('main', 'Выделение цветом положительно влияет на привлечение новых игроков, благодаря своему броскому виду.') ?></p>
        <h4 class="card-title"><?= Yii::t('main', 'Как заказать выделение цветом?') ?></h4>
        <p class="card-text"><?= Yii::t('main', 'Для заказа выделения цветом Вам достаточно зайти на страничку интересующего Вас сервера, и нажать кнопку "Купить выделение цветом". Во всплываещем окне Вам достаточно выбрать цвет, которым Вы хотите выделить сервер, а так же выбрать количество дней.') ?></p>
        <h4 class="card-title"><?= Yii::t('main', 'Стоимость выделения цветом?') ?></h4>
        <p class="card-text"><?= Yii::t('main', 'Актуальная стоимость выделения цветом составляет <u>5р. в день</u>.') ?></p>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <h3 class="card-title"><?= Yii::t('main', 'Аренда баннеров') ?></h3>
        <p class="card-text"><?= Yii::t('main', 'Всего на сайте доступно 6 мест, которые Вы можете арендовать и разместить свои баннера. Для каждого места система автоматически формирует цену в зависимости от спроса и позиции относительно контента.') ?>
            <br>
            <small class="pull-right"><?= Yii::t('main', 'Обратите внимание! На некоторых страницах баннеры не отображаются.') ?></small>
        </p>
        <h4 class="card-title"><?= Yii::t('main', 'Как арендовать баннер?') ?></h4>
        <p class="card-text"><?= Yii::t('main', 'Если баннер свободен - Вам достаточно нажать по нему, и после переадресации будет доступна форма покупки бампера.') ?></p>
        <h4 class="card-title"><?= Yii::t('main', 'Актуальная цена аренды?') ?></h4>
        <p class="card-text">
        <ul>
            <?php foreach ($banners AS $banner): ?>
                <li><?= Yii::t('main', 'Баннер') ?> №<?= $banner->id ?> (<?= $banner->size ?>
                    ): <?= Yii::t('main', 'цена аренды') ?> <u><?= $banner->price ?></b><?= Yii::t('main', 'р.') ?>
                        <?= Yii::t('main', 'в день') ?></u>.
                </li>
            <?php endforeach; ?>
        </ul>
        </p>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <h3 class="card-title"><?= Yii::t('main', 'Покупка ссылок') ?></h3>
        <p class="card-text"><?= Yii::t('main', 'На некоторых страницах Servers.Fun отображается блок ссылок, который представляет собой отличный способ для рекламы, в связи со своим отличным расположением. При покупке ссылки она будет отображаться в самом верху, однако когда кто-то купит ссылки - Ваша подвинеться вниз.') ?>
            <br>
            <small class="pull-right"><?= Yii::t('main', 'Обратите внимание! На некоторых страницах ссылки не отображаются.') ?></small>
        </p>
        <h4 class="card-title"><?= Yii::t('main', 'Как купить ссылку?') ?></h4>
        <p class="card-text"><?= Yii::t('main', 'Количество ссылок неограниченно, потому Вы можете купить ссылку в любой момент') ?>
            <a
                    href="<?= Url::to(['/advertising/link/buy']) ?>"><?= Yii::t('main', 'используя данную форму') ?></a>.
        </p>
        <h4 class="card-title"><?= Yii::t('main', 'Почему покупка обычных ссылок может принести успех?') ?></h4>
        <p class="card-text">
            <?= Yii::t('main', 'При покупке ссылки Вы можете сменить цвет фона, и цвет текста (включено в цену), а учитывая местоположение блока ссылок - Servers.Fun гарантирует, что именно Вашу ссылку - заметят!') ?>
        </p>
        <h4 class="card-title"><?= Yii::t('main', 'Стоимость покупки ссылки?') ?></h4>
        <p class="card-text">
            <?= Yii::t('main', 'Актуальная цена на одну ссылку - <u>20р. в день</u>.') ?>
        </p>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <h3 class="card-title"><?= Yii::t('main', 'Массовая рассылка') ?></h3>
        <p class="card-text"><?= Yii::t('main', 'Servers.Fun предоставляет обширный функционал, обеспечивающий комфортное общение своих пользователей. Именно система личных сообщений и мгновенных уведомлений является идеальным способом для рекламы <u>любого</u> проекта.') ?>
        </p>
        <h4 class="card-title"><?= Yii::t('main', 'Как заказать массовую рассылку?') ?></h4>
        <p class="card-text"><?= Yii::t('main', 'Для избежания возможности рассылки плохого контента нашим пользователям - весь текст рассылки проходить тщательную модерацию, потому для заказа Вам следует обратиться в поддержку пользователей используя E-Mail:') ?> <a href="mailto:servers.fun@gmail.com">servers.fun@gmail.com</a>.</p>
        <h4 class="card-title"><?= Yii::t('main', 'Стоимость массовой рассылки?') ?></h4>
        <p class="card-text"><?= Yii::t('main', 'Цены на массовую рассылку рассчитываются индивидуально в зависимости от объема текста, его наполненности, а так же проекта.') ?></p>
    </div>
</div>