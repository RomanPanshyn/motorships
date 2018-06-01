<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Теплоходы';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Теплоходы Блог</h1>

        <p class="lead">Бронируйте теплоходы на нашем сайте!</p>
        <br><br>
        <p>
        <?= Html::a('Забронировать теплоход', ['/site/book'], ['class' => 'btn btn-lg btn-success']) ?>
        </p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <a href="#"><img src="images/motorships01.jpg" width="300" height="200"></a>
                <h2>Киев</h2>

                <p><b>Перевозчик:</b> "Риверест"<br>
                   <b>Точки старта:</b> Речной вокзал (Почтовая пл.), причалы №№ 7, 8, 9<br>
                   <b>Маршруты:</b> панорама Киева, устье Десны, Киевское море<br>
                   <b>Цены:</b> 100–350 грн<br>
                   <b>Сайт:</b> riverest.kiev.ua</p>

                <p><a class="btn btn-default" href="#">Забронировать &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <a href="#"><img src="images/motorships02.jpg" width="300" height="200"></a>
                <h2>Киев</h2>

                <p><b>Перевозчик:</b> Пароходная компания "Гидропарк"
                    <b>Точки старта:</b> Гидропарк (левее Детского пляжа); мост Метро (ст. метро "Днепр")
                    <b>Маршруты:</b> панорама Киева, Киевское море
                    <b>Цены:</b> 80–250 грн
                    <b>Сайт:</b> teplohod-prokat.kiev.ua</p>

                <p><a class="btn btn-default" href="#">Забронировать &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <a href="#"><img src="images/motorships03.jpg" width="300" height="200"></a>
                <h2>Киев</h2>

                <p><b>Перевозчик:</b> "ПоліссяONE"
                    <b>Точка старта:</b> Речной вокзал (Почтовая пл.), причал №6
                    <b>Маршруты:</b> Межигорье, устье Десны, Канев
                    <b>Цены:</b> 200–1000 грн
                    <b>Сайт:</b> facebook.com/polissyaone</p>

                <p><a class="btn btn-default" href="#">Забронировать &raquo;</a></p>
            </div>
        </div>
        <br><br><br><br>
        <div class="row">
            <div class="col-lg-4">
                <a href="#"><img src="images/motorships04.jpg" width="300" height="200"></a>
                <h2>Черкассы</h2>

                <p><b>Точка старта:</b> Речной вокзал (ул. Героев Сталинграда, 1)
                    <b>Маршрут:</b> прогулка по Днепру
                    <b>Цены:</b> 65–110 грн
                    <b>Сайт:</b> cherkasy.net/progulki-dnepr-teplohod.html</p>

                <p><a class="btn btn-default" href="#">Забронировать &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <a href="#"><img src="images/motorships05.jpg" width="300" height="200"></a>
                <h2>Днепр</h2>

                <p><b>Точки старта:</b> Фестивальный причал
                    <b>Маршруты:</b> прогулка по Днепру, Орель, Тягинка
                    <b>Цены:</b> до 100 грн</p>

                <p><a class="btn btn-default" href="#">Забронировать &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <a href="#"><img src="images/motorships06.jpg" width="300" height="200"></a>
                <h2>Запорожье</h2>

                <p><b>Перевозчик:</b> "Речной трамвайчик"
                    <b>Точки старта:</b> Речной вокзал (Дубовая роща), Речной порт
                    <b>Маршруты:</b> вокруг о. Хортица, вдоль линии Набережной
                    <b>Цены:</b> 100–140 грн
                    <b>Сайт:</b> teplohod.zp.ua</p>

                <p><a class="btn btn-default" href="#">Забронировать &raquo;</a></p>
            </div>
        </div>
        <br><br><br><br>
        <div class="row">
            <div class="col-lg-4">
                <a href="#"><img src="images/motorships07.jpg" width="300" height="200"></a>
                <h2>Никополь</h2>

                <p><b>Перевозчик:</b> паром через Днепр
                    <b>Точка старта:</b> спасательная станция возле детского пляжа
                    <b>Маршрут:</b> Каменка-Днепровская
                    <b>Цена:</b> 100 грн</p>

                <p><a class="btn btn-default" href="#">Забронировать &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <a href="#"><img src="images/motorships08.jpg" width="300" height="200"></a>
                <h2>Новая Каховка</h2>

                <p><b>Перевозчик:</b> "Нибулон"
                    <b>Точка старта:</b> просп. Днепровский, 55
                    <b>Маршрут:</b> Херсон, Голая Пристань
                    <b>Цены:</b> 60–102 грн</p>

                <p><a class="btn btn-default" href="#">Забронировать &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <a href="#"><img src="images/motorships09.jpg" width="300" height="200"></a>
                <h2>Херсон</h2>

                <p><b>Перевозчик:</b> Администрация речных портов
                    <b>Точка старта:</b> Речной вокзал (Одесская пл., 4)
                    <b>Маршруты:</b> Голая Пристань, Кардашинка, Антоновка
                    <b>Цена:</b> 20 грн</p>

                <p><a class="btn btn-default" href="#">Забронировать &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
