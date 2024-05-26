<?php
    include 'core.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles/style.css">
    <link rel="stylesheet" href="assets/styles/media.css">
    <link rel="stylesheet" href="assets/styles/animate.css">
    <link rel="stylesheet" href="assets/styles/simple-adaptive-slider.css">
    <title>Арт-галерея "Квадрат"</title>
</head>
<body>
    <div class="wrapper">
        <header class="headroom headroom--unpinned headroom--pinned" id="header">
            <div class="header">
                <div class="header_account">
                    <div class="logo_mini">
                        <img src="assets/img/logo.svg" alt="logo_mini">
                    </div>
                    <?php if(!isset($_SESSION['user'])){ ?>
                        <a href="././auth.php"><p>Войти</p></a>
                        <?php }else{ ?>
                        <a href="././private.php"><p>Личный кабинет</p></a>
                        <?php if($_SESSION['user']['isAdmin'] == 1){ ?>
                            <a href="././admin_panel.php"><p>Админ панель</p></a>
                            <?php } ?>
                        <a href="././logout.php"><p>Выйти</p></a>
                    <?php } ?>
                    <div class="burger_menu" id="burger_menu">
                        <span id="span1"></span>
                        <span id="span2"></span>
                        <span id="span3"></span>
                    </div>
                </div>
                    <div class="top_nav">
                        <div class="logo_top_nav"><a href="././index.php">
                            <img src="assets/img/logo.svg" alt="logo">
                        </a></div>
                        <div class="title_top_nav"><a href="././index.php">Арт-галерея "Квадрат"</a></div>
                        <span class="span_top_nav"></span>
                        <div class="nav_top_nav">
                            <a href="././index.php#our_courses">Курсы</a>
                            <a href="././master_class.php">Мастер-классы</a>
                            <a href="././schedule.php">Расписание и цены</a>
                            <a href="">Праздник в "Квадрате"</a>
                            <a href="././index.php#gallery">Галерея</a>
                            <a href="././index.php#footer">Контакты</a>
                        </div>
                        <span class="span_top_nav"></span>
                        <div class="account_top_nav">
                            <?php if(!isset($_SESSION['user'])): ?>
                                <a href="././auth.php" class="bi">Войти</a>
                                <?php else: ?>
                                    <a href="././private.php" class="b" >Личный кабинет</a>
                                <?php if($_SESSION['user']['isAdmin'] == '1'): ?>   
                                    <a href="././admin_panel.php" class="b">Админ панель</a>
                                <?php endif; ?>
                                <a href="././logout.php" class="bi">Выход</a>
                            <?php endif; ?>
                        </div>
                        <span class="span_top_nav"></span>
                        <div class="info_top_nav">
                            <a href="mailto:info@kvadratart.ru">info@kvadratart.ru</a>
                            <a href="tel:+79012623728">+7-901-262-37-28</a>
                            <a href="https://yandex.ru/maps/-/CDV-r8zk">ул. Победы 1А (сквер Флора)</a>
                        </div>
                    </div>
                <div class="header_main">
                    <div class="header_left">
                        <div class="dropdown">
                            <a href="././index.php#our_courses"><p>Курсы</p></a>
                            <div class="dropdown_content">
                                <a href="././iso.php">ИЗО для детей</a>
                                <a href="././oil.php">Масло для детей 9+</a>
                                <a href="././sketch.php">Скетчинг</a>
                                <a href="././iso_intensive.php">ИЗО-интенсив</a>
                                <a href="././krug.php">Обучение гончарному мастерству</a>
                                <a href="././lepka.php">Обучение ручной лепке</a>
                            </div>
                        </div>
                        <a href="././master_class.php"><p>Мастер-классы</p></a>
                        <a href="././schedule.php"><p>Расписание и цены</p></a>
                    </div>
                    <div class="header_logo">
                        <div class="img">
                            <a href="././index.php"><img src="assets/img/logo.svg" alt="logo"></div></a>
                        </div>
                    <div class="header_right">
                        <a href=""><p>Праздник в "Квадрате"</p></a>
                        <a href="././index.php#gallery"><p>Галерея</p></a>
                        <a href="././index.php#footer"><p>Контакты</p></a>
                    </div>
                </div>
            </div>
        </header>
        <main>
            <div class="container">