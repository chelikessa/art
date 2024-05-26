<?php
    include 'vendor/components/core.php';
    include 'vendor/components/header.php';
?>

    <div class="iso_page_main_screen" id="margin_top">
        <div class="iso_page_main_title" id="big_title">
            <p>Гончарное мастерство</p>
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
                <img src="assets/img/krug/krug_img.svg" alt="iso_img">
            </div>
            <div class="img">
                <img src="assets/img/krug/krug_img_2.svg" alt="iso_img">
            </div>
            <div class="img">
                <img src="assets/img/krug/krug_img_3.svg" alt="iso_img">
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
                <p>Занятия гончарным ремеслом помогут вам развить моторику, реализовать свои творческие способности, снять стресс и научиться новым навыкам.</p>
                <p>Главное преимущество этого направления в том, что оно подходит для всех возрастов — от детей до взрослых.</p>
            </div>
            <div class="iso_page_program_title">
                <p>Программа обучения</p>
            </div>
            <div class="iso_page_program_desc">
                <ul>
                    <li>Все о глине: виды, свойства и применение;</li>
                    <li>Как подготовить глину для работы на гончарном круге;</li>
                    <li>Особенности процесса центровки глины;</li>
                    <li>Особенности формировании дна изделия;</li>
                    <li>Методы вытягивания стенок изделия, их сужения и расширения формы;</li>
                    <li>Как обтачивать изделия;</li>
                    <li>О различных способах декорирование готовых изделий с помощью глазури и ангобов.</li>
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
            <img src="assets/img/krug/krug_page_program_img.svg" alt="iso_page_program_img">
        </div>
    </div>
    <div class="gallery" id="gallery">
        <div class="gallery_title" id="title">
            <p>Галерея работ</p>
        </div>
        <div class="carousel_container_iso_in">
            <div class="carousel">
                <div class="item active">
                    <img src="assets/img/krug/1.svg" alt="Image 1"/>
                </div>
                <div class="item">
                    <img src="assets/img/krug/2.svg" alt="Image 2"/>
                </div>
                <div class="item">
                    <img src="assets/img/krug/3.svg" alt="Image 2"/>
                </div>
                <div class="item">
                    <img src="assets/img/krug/4.svg" alt="Image 2"/>
                </div>
                <div class="item">
                    <img src="assets/img/krug/5.svg" alt="Image 2"/>
                </div>
                <div class="item">
                    <img src="assets/img/krug/6.svg" alt="Image 2"/>
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
            <h1><label for="faq-1">Сколько времени занимает обучение гончарному искусству?</label></h1>
            <div class="p">
                <p>Обучение гончарному искусству занимает от нескольких часов до нескольких месяцев в зависимости от уровня подготовки и индивидуальных способностей ученика.</p>
            </div>
        </div>
        <div class="accordion">
            <input type="checkbox" id="faq-2">
            <h1><label for="faq-2">Какие материалы и инструменты нужны для занятий гончарным мастерством? Нужно что-то покупать?</label></h1>
            <div class="p">
                <p>Для занятий гончарным мастерством необходимы: глина, гончарный круг или скалка для лепки, вода для смачивания глины, а также различные инструменты для декорирования изделий. Все материалы и инструменты, необходимые для обучения, мы предоставляем.</p>
            </div>
        </div>
        <div class="accordion">
            <input type="checkbox" id="faq-3">
            <h1><label for="faq-3">С какого возраста можно начать заниматься гончарным мастерством?</label></h1>
            <div class="p">
                <p>На занятия по гончарному мастерству мы принимаем детей с 7 лет. Наши преподаватели, готовы помочь маленьким детям в работе с глиной и инструментами.</p>
            </div>
        </div>
        <div class="accordion">
            <input type="checkbox" id="faq-4">
            <h1><label for="faq-4">Можно ли провести тимбилдинг компанией?</label></h1>
            <div class="p">
                <p>Да, мы рады организовать для вас любое мероприятие (день рождения, девичник, тимбилдинг, и так далее)</p>
                <p>Зачастую оно состоит из презентации (представление нового товара или методики, совмещенное с чаепитием и легким фуршетом), а далее вступаем мы с заранее выбранным и согласованным мастер-классом (гончарный круг, либо гончарный круг и ручная лепка).</p>
            </div>
        </div>
        <div class="accordion">
            <input type="checkbox" id="faq-5">
            <h1><label for="faq-5">Получится ли сделать какое-нибудь изделие на первом уроке?</label></h1>
            <div class="p">
                <p>На первом уроке ученики как правило выполняют простые изделия например: небольшие вазочки, пиалы, чайная пара.</p>
            </div>
        </div>
        <div class="accordion">
            <input type="checkbox" id="faq-6">
            <h1><label for="faq-6">Отдаете ли вы изделия?</label></h1>
            <div class="p">
                <p>Да, конечно! После того как изделие выполнено, оно остается на просушке в мастерской, обычно это занимает 7-10 дней. После мы производим утильный обжиг и уведомляем Вас о том, что изделие готово.</p>
            </div>
        </div>
        <div class="accordion">
            <input type="checkbox" id="faq-7">
            <h1><label for="faq-7">Сколько необходимо посетить занятий?</label></h1>
            <div class="p">
                <p>Если Вы хотите просто познакомиться с работой за гончарным кругом, то одного-двух занятий достаточно, уже на первом занятие у Вас получится небольшое изделие.</p>
                <p>Если Вы хотите овладеть гончарным мастерством и создавать самостоятельно изделия по собственному дизайну, то потребуется больше времени (от 5 занятий).</p>
            </div>
        </div>
        <div class="accordion">
            <input type="checkbox" id="faq-8">
            <h1><label for="faq-8">Сколько человек в группе, всем ли хватит внимания?</label></h1>
            <div class="p">
                <p>В группе от 1 до 5 человек, внимания хватит всем. Преподаватель поочередно подходит к каждому, помогает и объясняет.</p>
            </div>
        </div>
        <div class="accordion">
            <input type="checkbox" id="faq-9">
            <h1><label for="faq-9">Стоимость занятий и продолжительность?</label></h1>
            <div class="p">
                <p>Стоимость 1 090₽, продолжительность 1,5 часа.</p>
            </div>
        </div>
    </div>
    <div class="record" id="record">
        <div class="record_block">
            <div class="img">
                <img src="assets\img\krug/for_record.svg" alt="record">
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