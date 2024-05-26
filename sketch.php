<?php
    include 'vendor/components/core.php';
    include 'vendor/components/header.php';
?>

    <div class="iso_page_main_screen" id="margin_top">
        <div class="iso_page_main_title" id="big_title">
            <p>Скетчинг</p>
        </div>
        <div class="iso_page_main_desc">
            <p>Откройте для ребенка творческий мир!</p>
        </div>
        <?php if(!isset($_SESSION['user'])){ ?>
            <a href="auth.php">Записаться на бесплатное пробное занятие</a>
        <?php }else{?>
            <a href="record.php">Записаться на бесплатное пробное занятие</a>
        <?php } ?>
        <div class="sketch_page_main_img_block animated fadeIn slow">
            <div class="img">
                <img src="assets/img/sketch/sketch_img.svg" alt="sketch_img">
            </div>
            <div class="img">
                <img src="assets/img/sketch/sketch_img_2.svg" alt="sketch_img">
            </div>
            <div class="img">
                <img src="assets/img/sketch/sketch_img_3.svg" alt="sketch_img">
            </div>
        </div>
    </div>
    <div class="line">
        <p>Живопись это древнейшее и самое актуальное искусство, которое позволяет детям выражать свои мысли и чувства через творчество.</p>
    </div>
    <div class="iso_page_program">
        <div class="iso_page_program_text">
            <div class="iso_page_program_title">
                <p>Скетчинг</p>
            </div>
            <div class="iso_page_program_desc">
                <p>Скетчинг это быстрая зарисовка! В наше быстрое время, что может быть лучше? Сейчас мы всё хотим очень быстро: быстро научиться петь, танцевать, красиво фотографировать и, конечно, быстро рисовать!</p>
            </div>
            <div class="iso_page_program_desc">
                <p>Скетчинг был всегда, это эскиз, набросок, который необходим для любого творческого рисунка или картины. Но сегодня это отдельная область современного искусства!</p>
            </div>
            <div class="iso_page_program_desc">
                <p>Займёмся ею!</p>
            </div>
            <!-- <div class="iso_page_program_span">
                <p>Набор детей в возрасте от 9 лет</p>
            </div> -->
            <div class="iso_page_program_title">
                <p>Рисунок-это модель, живопись-целый мир. Пора с ним познакомиться!</p>
            </div>
            <div class="iso_page_program_desc">
                <ul>
                    <li>Краски делаются из гуммиарабика-камеди, или вязкого древесного сока маленьких колючих деревьев, растущих в Судане!</li>
                    <li>Изготовления акварели неровные кусочки застывшей смолы медового цвета растирают в порошок и растворяют в тёплой воде, а затем добавляют порошковый пигмент!</li>
                    <li>Сегодня эту краску делают почти так же, как и тысячу лет назад, поскольку синтетического аналога гуммиарабику до сих пор не найдено!</li>
                    <li>Гуммиарабик это - вещество уникальное. Он прозрачен и отражает свет. Это улучшает качество цвета. Высохший гуммиарабик водорастворим. И он не токсичен!</li>
                </ul>
            </div>
            <div class="iso_page_program_desc">
                <p>Так вот скетчинг и акварель не разделимы!</p>
            </div>
            <div class="iso_page_program_desc">
                <p>Нарисуйте карандашом печенье-и вы лишь передадите его форму, а напишите его акварелью - и у зрителей потекут слюнки!</p>
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
            <img src="assets/img/sketch/sketch_page_program_img.svg" alt="sketch_page_program_img">
        </div>
    </div>
    <div class="gallery" id="gallery">
        <div class="gallery_title" id="title">
            <p>Галерея работ</p>
        </div>
        <div class="carousel_container_sketch">
            <div class="carousel">
                <div class="item active">
                    <img src="assets/img/sketch/1.svg" alt="Image 1"/>
                </div>
                <div class="item">
                    <img src="assets/img/sketch/2.svg" alt="Image 2"/>
                </div>
                <div class="item">
                    <img src="assets/img/sketch/3.svg" alt="Image 2"/>
                </div>
                <div class="item">
                    <img src="assets/img/sketch/4.svg" alt="Image 2"/>
                </div>
                <div class="item">
                    <img src="assets/img/sketch/5.svg" alt="Image 2"/>
                </div>
                <div class="item">
                    <img src="assets/img/sketch/6.svg" alt="Image 2"/>
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
                <img src="assets\img\sketch/for_record.svg" alt="record">
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