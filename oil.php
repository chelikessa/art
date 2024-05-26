<?php
    include 'vendor/components/core.php';
    include 'vendor/components/header.php';
?>

    <div class="iso_page_main_screen" id="margin_top">
        <div class="iso_page_main_title" id="big_title">
            <p>Масло для детей</p>
        </div>
        <div class="iso_page_main_desc">
            <p>Откройте для ребенка творческий мир!</p>
        </div>
        <?php if(!isset($_SESSION['user'])){ ?>
            <a href="auth.php">Записаться на бесплатное пробное занятие</a>
        <?php }else{?>
            <a href="record.php">Записаться на бесплатное пробное занятие</a>
        <?php } ?>
        <div class="oil_page_main_img_block animated fadeIn slow">
            <div class="img">
                <img src="assets/img/oil/oil_img.svg" alt="oil_img">
            </div>
            <div class="img">
                <img src="assets/img/oil/oil_img_2.svg" alt="oil_img">
            </div>
            <div class="img">
                <img src="assets/img/oil/oil_img_3.svg" alt="oil_img">
            </div>
        </div>
    </div>
    <div class="line">
        <p>Живопись это древнейшее и самое актуальное искусство, которое позволяет детям выражать свои мысли и чувства через творчество.</p>
    </div>
    <div class="iso_page_program">
        <div class="iso_page_program_text">
            <div class="iso_page_program_title">
                <p>Масло для детей</p>
            </div>
            <div class="iso_page_program_desc">
                <p>Если ребенок действительно полюбил занятия живописью и достиг определенных успехов, ему есть смысл попробовать поработать маслом на холсте!</p>
            </div>
            <div class="iso_page_program_span">
                <p>Набор детей в возрасте от 9 лет</p>
            </div>
            <div class="iso_page_program_title">
                <p>Программа обучения</p>
            </div>
            <div class="iso_page_program_desc">
                <p>Курс «Живопись маслом для детей» включает в себя как изучение классической базы, так и эксперименты с самыми необычными техниками!</p>
                <p>С большим желанием дети изучают форму предмета «вылепливая» его пастозными мазками.</p>
                <p>Масло приятно в работе-это отдельная медитация в современном напряжённом ритме, даже у детей!</p>
                <p>При этом мы опытно сбалансировали курс до того, что за 8 занятий дети уверенно и увлекательно изучают базу.</p>
                <p>На данном курсе дети получают пищу для ума и уверенный толчок к дальнейшему творческому развитию, как в живописи, так и в прочих видах искусства.</p>
                <p>После прохождения курса вы можете не захотеть покинуть данное направление!</p>
                <p>Поэтому, сразу после, мы выходим на свободные форматы и темы, где каждый учащийся индивидуально продолжает углублённое развитие в наиболее интересных для него сюжетах, техниках.</p>
                <p>Все материалы: холсты, краски, кисти, мастихины, разбавитель-предоставляются!</p>
                <p>На уроках дети узнают:</p>
            </div>
            <div class="iso_page_program_desc">
                <ul>
                    <li>Как подготовиться к работе</li>
                    <li>Инструменты и материалы</li>
                    <li>Основы рисования: как работаем с красками, как наносим, как смешиваем</li>
                    <li>Сколько ждать, пока застынут краски</li>
                    <li>Последовательность рисования</li>
                    <li>Как хранить масляные краски и готовые картины</li>
                    <li>Готовимся к выставкам, обучаемся правилам оформления работ.</li>
                </ul>
            </div>
            <div class="iso_page_program_desc">
                <p>На каждом занятии ученик сделает законченный авторский этюд маслом!</p>
            </div>
            <div class="mc_1_a">
                <a href="https://wa.me/79012623728" class="white">Написать в WhatsApp</a>
            </div>
            <div class="mc_1_a wow pulse slow infinite">
                <?php if(!isset($_SESSION['user'])){ ?>
                    <a href="auth.php" class="green">Записаться</a>
                <?php }else{?>
                    <a href="record.php" class="green">Записаться</a>
                <?php } ?>
            </div>
        </div>
        <div class="iso_page_program_img wow animated fadeIn slow">
            <img src="assets/img/oil/oil_page_program_img.svg" alt="oil_page_program_img">
        </div>
    </div>
    <div class="gallery" id="gallery">
        <div class="gallery_title" id="title">
            <p>Галерея работ</p>
        </div>
        <div class="carousel_container_oil">
            <div class="carousel">
                <div class="item active">
                    <img src="assets/img/oil/1.svg" alt="Image 1"/>
                </div>
                <div class="item">
                    <img src="assets/img/oil/2.svg" alt="Image 2"/>
                </div>
                <div class="item">
                    <img src="assets/img/oil/3.svg" alt="Image 2"/>
                </div>
                <div class="item">
                    <img src="assets/img/oil/4.svg" alt="Image 2"/>
                </div>
                <div class="item">
                    <img src="assets/img/oil/5.svg" alt="Image 2"/>
                </div>
                <div class="item">
                    <img src="assets/img/oil/6.svg" alt="Image 2"/>
                </div>
            </div>
            <button class="btn prev">Пред</button>
            <button class="btn next">Далее</button>
            <div class="dots"></div>
        </div>
    </div>
    <div class="record" id="record">
        <div class="record_block">
            <div class="img">
                <img src="assets\img\oil/for_record.svg" alt="record">
            </div>
            <div class="title_record">
                <p>Запишитесь на бесплатное пробное занятие уже сейчас!</p>
                <?php if(!isset($_SESSION['user'])){ ?>
                    <a href="auth.php">Записаться</a>
                <?php }else{?>
                    <a href="record.php">Записаться</a>
                <?php } ?>
            </div>
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