<?php
    include 'vendor/components/core.php';

    $up_e = $link->query("SELECT  `time_mc`.*, `title_up_events`.*
    FROM `title_up_events` 
        LEFT JOIN `time_mc` ON `title_up_events`.`id_time` = `time_mc`.`id`");

    include 'vendor/components/header.php';
?>

    <div class="main_screen" id="margin_top">
        <div class="block_image_main_screen">
            <div class="img_red">
                <div class="animated bounceInLeft slow">
                    <div class="img">
                        <img src="assets/img/red.svg" alt="red">
                    </div>
                </div>
            </div>
            <div class="img_green">
                <div class="animated bounceInLeft slow" data-wow-delay="0.5s">
                    <div class="img">
                        <img src="assets/img/green.svg" alt="green">
                    </div>
                </div>
            </div>
            <div class="img_main">
                <div class="img">
                    <img src="assets/img/main.svg" alt="main_screen">
                </div>
            </div>
        </div>
        <div class="animated fadeInRight slow">
            <div class="block_text_main_screen">
                <p>Курсы,
                <br>мастер-классы 
                <br>и выставки в Омске</p>
                <a href="master_class.php" class="animated pulse slow delay-3s infinite">
                    <button>Выбрать мастер-класс</button>
                </a>
            </div>
        </div>
    </div>
    <div class="upcoming_events">
            <div class="upcoming_events_title" id="title">
                <p>Ближайшие события в арт-галерее "Квадрат"</p>
            </div>
            <div class="admin_mc_block">
                <?php foreach ($up_e as $key => $value): ?>
                    <div class="gap_p green_gap" style="width: 340px; height: 550px; justify-content: space-between">
                        <img src="assets/img/add_img/<?=$value['img']?>" alt="img" width="300px">
                        <p><?= $value['visible'] ?></p>
                        <p><strong>Цена: </strong><?= $value['price'] ?> руб.</p>
                        <p><strong>Дата: </strong><?= $value['date'] ?></p>
                        <p><strong>Время: </strong><?= $value['time'] ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="upcoming_events_inscription">
                <p>Все подробности вы можете узнать по <a href="tel:+79012623728">телефону</a> или в <a href="https://wa.me/79012623728">WhatsApp!</a></p>
            </div>
    </div>
    <div class="our_courses" id="our_courses">
        <div class="our_courses_title" id="title">
            <p>Наши курсы</p>
        </div>
        <div class="our_courses_block">
            <div class="our_courses_block_2">
                <div class="iso_for_ch" id="our_courses_block_1">
                    <p>ИЗО для детей</p>
                    <a href="iso.php">Подробнее</a>
                </div>
                <div class="lepka" id="our_courses_block_1_big">
                    <p>Ручная лепка</p>
                    <a href="lepka.php">Подробнее</a>
                </div>
            </div>
            <div class="our_courses_block_2">
                <div class="gonchar" id="our_courses_block_1_big">
                    <p>Гончарное мастерство</p>
                    <a href="krug.php">Подробнее</a>
                </div>
                <div class="maslo" id="our_courses_block_1">
                    <p>Масло для детей 9+</p>
                    <a href="oil.php">Подробнее</a>
                </div>
            </div>
            <div class="our_courses_block_2">
                <div class="sketch" id="our_courses_block_1">
                    <p>Скетчинг</p>
                    <a href="sketch.php">Подробнее</a>
                </div>
                <div class="iso_in" id="our_courses_block_1_big">
                    <p>ИЗО - интенсив</p>
                    <a href="iso_in.php">Подробнее</a>
                </div>
            </div>
        </div>
        <!-- <div class="dop_courses_block">
            <div class="chess" id="our_courses_block_1">
                <p>Шахматы для детей</p>
                <a href="">Подробнее</a>
            </div>
            <div class="digital" id="our_courses_block_1">
                <p>DIGITAL</p>
                <a href="">Подробнее</a>
            </div>
        </div> -->
    </div>
    <div class="events">
        <div class="events_title" id="title">
            <p>Хотите устроить праздник в "Квадрате"?</p>
        </div>
        <div class="events_desc">
            <p>У нас Вы можете:</p>
        </div>
        <div class="events_block">
            <a href="">
                <div class="events_block_1 wow fadeInDown">
                    <div class="img">
                        <img src="assets/img/icons/hbd.svg" alt="hbd">
                    </div>
                    <p>Отметить день рождения</p>
                    <span>Узнать больше</span>
                </div>
            </a>
            <a href="">
                <div class="events_block_1 wow fadeInDown">
                    <div class="img">
                        <img src="assets/img/icons/date.svg" alt="date">
                    </div>
                    <p>Устроить творческое свидание</p>
                    <span>Узнать больше</span>
                </div>
            </a>
            <a href="">
                <div class="events_block_1 wow fadeInDown">
                    <div class="img">
                        <img src="assets/img/icons/party.svg" alt="party">
                    </div>
                    <p>Провести частную вечеринку</p>
                    <span>Узнать больше</span>
                </div>
            </a>
        </div>
    </div>
    <div class="why_we">
        <div class="why_we_title" id="title">
            <p>Почему нам доверяют?</p>
        </div>
        <!-- <div class="wow fadeInLeft slow"> -->
            <div class="why_we_block">
                <div class="why_we_block_1">
                    <div class="why_we_block_1_title">
                        <p>Качественные программы</p>
                    </div>
                    <div class="why_we_block_1_desc">
                        <p> - Разработаны индивидуально в соответствии с современными требованиями и тенденциями.</p>
                        <p> - Абитуриенты, занимающиеся в  Арт-Академии "Квадрат" успешно поступают в художественные ВУЗы.</p>
                    </div>
                </div>
                <div class="why_we_block_1">
                    <div class="why_we_block_1_title">
                        <p>Атмосфера</p>
                    </div>
                    <div class="why_we_block_1_desc">
                        <p> - Настроит вас на воодушевленный лад, и вам захочется творить, как великие деятели искусства.</p>
                        <p> - Занятия проводятся в действующей галерее.</p>
                        <p> - Наша любимая радио волна "Jazz Radio".</p>
                        <p> - Угостим Вас чаем и кофе, детей печеньем.</p>
                    </div>
                </div>
                <div class="why_we_block_1">
                    <div class="why_we_block_1_title">
                        <p>Выставки</p>
                    </div>
                    <div class="why_we_block_1_desc">
                        <p> - Ежегодная выставка для учеников взрослой школы Арт-Академии "Квадрат".</p>
                        <p> - Выставка детских работ два раза в год.</p>
                    </div>
                </div>
                <div class="why_we_block_1">
                    <div class="why_we_block_1_title">
                        <p>Условия и расписание</p>
                    </div>
                    <div class="why_we_block_1_desc">
                        <p> - Предоставляем скидки при покупки абонементов (без права переноса).</p>
                        <p> - Все материалы включены в стоимость занятий.</p>
                        <p> - Расписание составляется в соответствии с возможностями пожеланиями учеников.</p>
                    </div>
                </div>
                <div class="why_we_block_1">
                    <div class="why_we_block_1_title">
                        <p>Команда</p>
                    </div>
                    <div class="why_we_block_1_desc">
                        <p> - Мы собрали  команду профессионалов,  среди которых  действующие доценты кафедр художественных вузов, заслуженные художники России, преподаватели с многолетним стажем.</p>
                        <p> - Профессиональные художники с большим опытом любят своё дело и с удовольствием делятся своим опытом и знаниями с вами.</p>
                    </div>
                </div>
                <div class="why_we_block_1">
                    <div class="why_we_block_1_title">
                        <p>Удобное местоположение</p>
                    </div>
                    <div class="why_we_block_1_desc">
                        <p> - Находимся в самом центре г. Омска по адресу ул. Победы 1А (сквер Флора).</p>
                    </div>
                </div>
            </div>
        <!-- </div> -->
    </div>
    <div class="gallery" id="gallery">
        <div class="gallery_title" id="title">
            <p>Наша галерея</p>
        </div>
        <div class="gallery_desc">
            <p>Атмосфера галереи располагает к работе и творчеству. Приходите на пробное занятие и убедитесь в этом сами!</p>
            <div class="gallery_desc_a">
                <a href="master_class.php">Предварительная запись обязательна!</a>
            </div>
        </div>
        <div class="carousel_container">
            <div class="carousel">
                <div class="item active">
                    <img src="assets/img/view_gallery/1.png" alt="Image 1"/>
                </div>
                <div class="item">
                    <img src="assets/img/view_gallery/2.png" alt="Image 2"/>
                </div>
                <div class="item">
                    <img src="assets/img/view_gallery/3.png" alt="Image 3"/>
                </div>
                <div class="item">
                    <img src="assets/img/view_gallery/5.png" alt="Image 4"/>
                </div>
                <div class="item">
                    <img src="assets/img/view_gallery/4.png" alt="Image 5"/>
                </div>
                <div class="item">
                    <img src="assets/img/view_gallery/6.png" alt="Image 6"/>
                </div>
            </div>
            <button class="btn prev">Пред</button>
            <button class="btn next">Далее</button>
            <div class="dots"></div>
        </div>
    </div>

<?php
    include 'vendor/components/footer.php';
?>
<script src="assets/scripts/jquery.js"></script>
<script src="assets/scripts/maskedinput.js"></script>
<script src="assets/scripts/headroom/js/headroom.js"></script>
<script src="assets/scripts/script.js"></script>
<script src="assets/scripts/WOW-master/dist/wow.min.js"></script>
<script type="text/javascript">
    new WOW().init();
    var myElement = document.querySelector("header");
    // запуск конструктора
    var headroom = new Headroom(myElement);
    // инициализация
    headroom.init();  
</script>