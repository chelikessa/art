<?php
    include 'vendor/components/core.php';
    include 'vendor/components/header.php';
?>

    <div class="iso_page_main_screen" id="margin_top">
        <div class="iso_page_main_title" id="big_title">
            <p>Ручная лепка</p>
        </div>
        <div class="iso_page_main_desc">
            <p>Откройте для ребенка творческий мир!</p>
        </div>
        <?php if(!isset($_SESSION['user'])){ ?>
            <a href="auth.php">Записаться на бесплатное пробное занятие</a>
        <?php }else{?>
            <a href="record.php">Записаться на бесплатное пробное занятие</a>
        <?php } ?>
        <div class="iso_page_main_img_block animated fadeIn slow">
            <div class="img">
                <img src="assets/img/lepka/lepka_img.svg" alt="iso_img">
            </div>
            <div class="img">
                <img src="assets/img/lepka/lepka_img_2.svg" alt="iso_img">
            </div>
            <div class="img">
                <img src="assets/img/lepka/lepka_img_3.svg" alt="iso_img">
            </div>
        </div>
    </div>
    <div class="line">
        <p>Гончарное мастерство - это древнейшее ремесло создания посуды и других предметов из глины, которое не теряет своей актуальности.</p>
    </div>
    <div class="iso_page_program">
        <div class="iso_page_program_text">
            <div class="iso_page_program_title">
                <p>Уникальные занятия</p>
            </div>
            <div class="iso_page_program_desc">
                <p>Создание уникальных предметов из податливой массы, строение форм своими руками и превращение их в полезные или декоративные предметы приносит удовольствие и расслабление.</p>
                <p>Глина - это натуральный и пластичный материал, который позволяет создавать предметы любых форм и размеров.</p>
                <p>Работая с глиной, вы не только развиваете свои творческие способности, но и получаете удовольствие от процесса.</p>
            </div>
            <div class="iso_page_program_title">
                <p>9 причин начать заниматься ручной лепкой</p>
            </div>
            <div class="iso_page_program_desc">
                <ul>
                    <li>Развитие мускулатуры кистей и пальцев;</li>
                    <li>Развитие мелкой моторики рук;</li>
                    <li>Ускорение процесса мышления;</li>
                    <li>Развитие логического мышления и воображения;</li>
                    <li>Прокачивание творческих способностей и образного мышления;</li>
                    <li>Стабилизация психического здоровья;</li>
                    <li>Релаксация всего организма;</li>
                    <li>Развитие памяти и расширение кругозора;</li>
                    <li>Развивает усидчивость, терпение и умение доводить работу до конца.</li>
                </ul>
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
            <img src="assets/img/lepka/lepka_page_program_img.svg" alt="iso_page_program_img">
        </div>
    </div>
    <div class="gallery" id="gallery">
        <div class="gallery_title" id="title">
            <p>Галерея работ</p>
        </div>
        <div class="carousel_container_iso_in">
            <div class="carousel">
                <div class="item active">
                    <img src="assets/img/lepka/1.svg" alt="Image 1"/>
                </div>
                <div class="item">
                    <img src="assets/img/lepka/2.svg" alt="Image 2"/>
                </div>
                <div class="item">
                    <img src="assets/img/lepka/3.svg" alt="Image 2"/>
                </div>
                <div class="item">
                    <img src="assets/img/lepka/4.svg" alt="Image 2"/>
                </div>
                <div class="item">
                    <img src="assets/img/lepka/5.svg" alt="Image 2"/>
                </div>
                <div class="item">
                    <img src="assets/img/lepka/6.svg" alt="Image 2"/>
                </div>
            </div>
            <button class="btn prev">Пред</button>
            <button class="btn next">Далее</button>
            <div class="dots"></div>
        </div>
    </div>
    <div class="accordion_block">
        <div class="accordion_block_title" id="title">
            <p>У вас остались вопросы?</p>
        </div>
        <div class="gallery_desc">
            <p>Мы собрали самые частые, возможно, вы найдете ответ на свой!</p>
        </div>
        <div class="accordion">
            <input type="checkbox" id="faq-1">
            <h1><label for="faq-1">С какого возраста можно начать заниматься ручной лепкой?</label></h1>
            <div class="p">
                <p>На уроки по лепке мы берем детей с 4-х лет. Наши преподаватели, готовы помочь маленьким детям в работе с глиной и инструментами.</p>
            </div>
        </div>
        <div class="accordion">
            <input type="checkbox" id="faq-2">
            <h1><label for="faq-2">Какие материалы используются при ручной лепке?</label></h1>
            <div class="p">
                <p>Всем материалы и инструменты, необходимые для обучения мы предоставляем. На наших занятиях дети лепят их только из глины.</p>
            </div>
        </div>
        <div class="accordion">
            <input type="checkbox" id="faq-3">
            <h1><label for="faq-3">Что именно дети лепят на ваших занятиях?</label></h1>
            <div class="p">
                <p>Для детей младшего возраста предлагаются плоскостные работы с декором из жгутов и штампиков, несложные объёмные изделия - фигурки животных и птиц. Для детей старшего возраста предлагаются работы как плоскостные, так и объёмные с более сложным декором и пластикой.</p>
            </div>
        </div>
        <div class="accordion">
            <input type="checkbox" id="faq-4">
            <h1><label for="faq-4">Отдаете ли Вы изделия?</label></h1>
            <div class="p">
                <p>Да, конечно мы отдаём изделия, но так как мы лепим из глины, она должна просохнуть естественным путём (приблизительно 7 дней), потом мы производим утильный обжиг и теперь изделие можно расписать акриловыми красками, либо глазурями и забирать. Но бывают и такие случаи, что ребёнок не хочет ждать и забирает изделие без обжига и просушки.</p>
            </div>
        </div>
        <div class="accordion">
            <input type="checkbox" id="faq-5">
            <h1><label for="faq-5">Стоимость занятий?</label></h1>
            <div class="p">
                <p>600₽ при покупке абонемента, 700₽ при разовой оплате.</p>
            </div>
        </div>
        <div class="accordion">
            <input type="checkbox" id="faq-6">
            <h1><label for="faq-6">Что нужно иметь с собой?</label></h1>
            <div class="p">
                <p>Все материалы для занятий мы предоставляем, с собой необходимо иметь сменную обувь.</p>
            </div>
        </div>
    </div>
    <div class="record" id="record">
        <div class="record_block">
            <div class="img">
                <img src="assets\img\lepka/for_record.svg" alt="record">
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