<?php
    include 'vendor/components/core.php';
    include 'vendor/components/header.php';
?>

    <div class="iso_page_main_screen" id="margin_top">
        <div class="iso_page_main_title" id="big_title">
            <p>ИЗО для детей</p>
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
                <img src="assets/img/iso_for_ch/iso_img.svg" alt="iso_img">
            </div>
            <div class="img">
                <img src="assets/img/iso_for_ch/iso_img_2.svg" alt="iso_img">
            </div>
            <div class="img">
                <img src="assets/img/iso_for_ch/iso_img_3.svg" alt="iso_img">
            </div>
        </div>
    </div>
    <div class="line">
        <p>Живопись это древнейшее и самое актуальное искусство, которое позволяет детям выражать свои мысли и чувства через творчество.</p>
    </div>
    <div class="iso_page_program">
        <div class="iso_page_program_text">
            <div class="iso_page_program_title">
                <p>Уникальные занятия</p>
            </div>
            <div class="iso_page_program_desc">
                <p>В нашей Арт-академии мы предлагаем вам авторские курсы и эксклюзивные мастер-классы по разным направлениям, которые помогут ребенку раскрыть свой талант и получить массу положительных эмоций!</p>
            </div>
            <div class="iso_page_program_span">
                <p>Набор детей в возрасте от 4 до 12 лет</p>
            </div>
            <div class="iso_page_program_title">
                <p>Программа обучения</p>
            </div>
            <div class="iso_page_program_desc">
                <ul>
                    <li>Знакомимся с различными материалами и инструментами, изучаем базовые техники, навыки и приемы рисования;</li>
                    <li>Изучаем основные геометрические фигуры и их сочетание, осваиваем пространственное мышление;</li>
                    <li>Развиваем наблюдательности и внимание к деталям через изучение природных форм, цветов и текстур;</li>
                    <li>Создаем сюжетные композиции на основе прочитанных книг, просмотренных мультфильмов и историй из личной жизни;</li>
                    <li>Разрабатываема и реализуем собственные творческие проекты, развиваем воображение, фантазию и креативность;</li>
                    <li>Учимся рисовать портреты, отмечаем особенности человеческого лица, передаем эмоции и характер через рисунок;</li>
                    <li>Готовимся к выставкам, обучаемся правилам оформления работ.</li>
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
            <img src="assets/img/iso_for_ch/iso_page_program_img.svg" alt="iso_page_program_img">
        </div>
    </div>
    <div class="gallery" id="gallery">
        <div class="gallery_title" id="title">
            <p>Галерея работ</p>
        </div>
        <div class="carousel_container_iso">
            <div class="carousel">
                <div class="item active">
                    <img src="assets/img/iso_for_ch/1.svg" alt="Image 1"/>
                </div>
                <div class="item">
                    <img src="assets/img/iso_for_ch/2.svg" alt="Image 2"/>
                </div>
                <div class="item">
                    <img src="assets/img/iso_for_ch/3.svg" alt="Image 2"/>
                </div>
                <div class="item">
                    <img src="assets/img/iso_for_ch/4.svg" alt="Image 2"/>
                </div>
                <div class="item">
                    <img src="assets/img/iso_for_ch/5.svg" alt="Image 2"/>
                </div>
                <div class="item">
                    <img src="assets/img/iso_for_ch/6.svg" alt="Image 2"/>
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
            <h1><label for="faq-1">Можно ли присоединиться к группе в течении года?</label></h1>
            <div class="p">
                <p>Да, конечно можно, программа построена так, что набор в группу идет круглый год! 
                <br>    
                Преподаватель работает с каждым учеником индивидуально, и у каждого ученика свое задание. На самом деле очень хорошо, что в группе ученики разного уровня, так как те, кто только пришли, могут видеть какого результата они смогут достигнуть.</p>
            </div>
        </div>
        <div class="accordion">
            <input type="checkbox" id="faq-2">
            <h1><label for="faq-2">Какие материалы используют?</label></h1>
            <div class="p">
                <p>Рисуют различными материалами: краски (гуашь, акварель) фломастеры, маркеры, линеры, цветные карандаши, уголь, скетч-маркеры. Мы используем только профессиональные художественные материалы!</p>
            </div>
        </div>
        <div class="accordion">
            <input type="checkbox" id="faq-3">
            <h1><label for="faq-3">Сколько раз рекомендуется посещать ребенку?</label></h1>
            <div class="p">
                <p>Оптимальное количество 2 раза в неделю.</p>
            </div>
        </div>
        <div class="accordion">
            <input type="checkbox" id="faq-4">
            <h1><label for="faq-4">Стоимость занятия?</label></h1>
            <div class="p">
                <p>90 минут - 600₽ при покупке абонемента (700₽ при разовом посещении), 
                <br>    
                120 минут - 650₽ при покупе абонемента (750₽ при разовом посещении). 
                <br>
                Имеется перерыв в котором мы угощаем детей чаем и печеньем.</p>
            </div>
        </div>
        <div class="accordion">
            <input type="checkbox" id="faq-5">
            <h1><label for="faq-5">Что нужно принести с собой?</label></h1>
            <div class="p">
                <p>Все материалы предоставляет студия. Единственное, что мы просим, это сменка.</p>
            </div>
        </div>
        <div class="accordion">
            <input type="checkbox" id="faq-6">
            <h1><label for="faq-6">Можно ли ходить к разным преподавателям?</label></h1>
            <div class="p">
                <p>Да, конечно можно, и даже приветствуется, так как у каждого преподавателя есть свои сильные стороны и необычные приемы!</p>
            </div>
        </div>
        <div class="accordion">
            <input type="checkbox" id="faq-7">
            <h1><label for="faq-7">За сколько уроков рисуют картину?</label></h1>
            <div class="p">
                <p>Как правило это 2-3 занятия, но иногда это может занять и более в зависимости от поставленной задачи!</p>
            </div>
        </div>
    </div>
    <div class="record" id="record">
        <div class="record_block">
            <div class="img">
                <img src="assets\img\iso_for_ch/for_record.svg" alt="record">
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