<?php
    include 'vendor/components/core.php';
    include 'vendor/components/header.php';
?>

    <div class="iso_page_main_screen" id="margin_top">
        <div class="iso_page_main_title" id="big_title">
            <p>ИЗО-интенсив</p>
        </div>
        <div class="iso_page_main_desc">
            <p>Для поступления в художественные и архитектурные ВУЗы</p>
        </div>
        <?php if(!isset($_SESSION['user'])){ ?>
            <a href="auth.php">Записаться на бесплатное пробное занятие</a>
        <?php }else{?>
            <a href="record.php">Записаться на бесплатное пробное занятие</a>
        <?php } ?>
        <div class="iso_page_main_img_block animated fadeIn slow">
            <div class="img">
                <img src="assets/img/iso_in/iso_in_img.svg" alt="iso_img">
            </div>
            <div class="img">
                <img src="assets/img/iso_in/iso_in_img_2.svg" alt="iso_img">
            </div>
            <div class="img">
                <img src="assets/img/iso_in/iso_in_img_3.svg" alt="iso_img">
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
                <p>Для поступления в ВУЗ на специальность, связаннуюс академическим рисунком и живописью, необходима подготовка. Без опытного преподавателя она может быть менее эффективной. В нашей арт-академии преподаватель Сергей Москалев поможет вам в этом вопросе.</p>
                <p>Благодаря огромному опыту, преподаватель поможет студентам, даже без начальных навыков, разобраться в сложностях построения, композиции, теории цвета, воздушной и линейной перспективы.</p>
                <p>Начав с простых форм, таких как куб, конус, цилиндр и шар, вы постепенно перейдете к более сложным натюрмортам и эскизам гипсовых фигур.</p>
                <p>Этот бесценный опыт необходим для достижения ваших целей - поступления в высшее учебное заведение!</p>
            </div>
            <div class="iso_page_program_title">
                <p>Программа обучения</p>
            </div>
            <div class="iso_page_program_desc">
                <ul>
                    <li>Основы техники рисования: изучение различных материалов и инструментов, базовых техник и приемов;</li>
                    <li>Построение геометрических форм: изучение форм и их сочетаний, пространственного мышления;</li>
                    <li>Изображение природы: изучение природы, цветов и текстур;</li>
                    <li>Портретное рисование;</li>
                    <li>Сюжетное рисование;</li>
                    <li>Творческие проекты;</li>
                    <li>Подготовка к выставкам;</li>
                    <li>Рисунок гипсовых геометрических тел: куб, призма, пирамида, шар, цилиндр, конус в различных ракурсах и на различных уровнях горизонта;</li>
                    <li>Рисунок натюрморта из гипсовых геометрических тел ниже линии горизонта с дополнительным освещением;</li>
                    <li>Рисунок натюрморта из гипсовых геометрических тел вращения (цилиндр, шар, конус) с использованием тона и искусственного освещения;</li>
                    <li>Рисунок натюрморта из предметов быта, контрастных по форме и по массе, расположенных ниже линии горизонта;</li>
                    <li>Рисунок натюрморта, контрастного по форме и по фактуре;</li>
                    <li>Рисунок натюрморта в интерьере (натюрморт на стуле, табуретке);</li>
                    <li>Рисунок драпировки со складками;</li>
                    <li>Построение гипсовой розетки;</li>
                    <li>Рисунок гипсовой античной капители;</li>
                    <li>Построение античного «ионика» в двух ракурсах;</li>
                    <li>Рисунок черепа человека в 2-3 ракурсах;</li>
                    <li>Рисунок обрубовки ( схематичная голова человека) в двух ракурсах; </li>
                    <li>Анатомический рисунок и ( экорил) головы человека в 2-х ракурсах;</li>
                    <li>Рисунок гипсовых слепков частей головы Давида;</li>
                    <li>Рисунок уха (1 ракурс);</li>
                    <li>Рисунок губ Давида;</li>
                    <li>Рисунок глаз (глаза) Давида;</li>
                    <li>Рисунок гипсовой головы Гаттамелата (3 ракурса: анфас, 3/4, профиль), выше и ниже линии горизонта;</li>
                    <li>Рисунки головы Аполлона, Венеры, Сократа, Антиной, Афродиты, Цезаря, молодого римлянина, Сенеки;</li>
                    <li>Рисунок интерьера с фронтальной перспективой (с одной точкой схода);</li>
                    <li>Рисунок интерьера с угловой перспективой (с двумя основными точками схода).</li>
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
            <img src="assets/img/iso_in/iso_in_page_program_img.svg" alt="iso_page_program_img">
        </div>
    </div>
    <div class="gallery" id="gallery">
        <div class="gallery_title" id="title">
            <p>Галерея работ</p>
        </div>
        <div class="carousel_container_iso_in">
            <div class="carousel">
                <div class="item active">
                    <img src="assets/img/iso_in/1.svg" alt="Image 1"/>
                </div>
                <div class="item">
                    <img src="assets/img/iso_in/2.svg" alt="Image 2"/>
                </div>
                <div class="item">
                    <img src="assets/img/iso_in/3.svg" alt="Image 2"/>
                </div>
                <div class="item">
                    <img src="assets/img/iso_in/4.svg" alt="Image 2"/>
                </div>
                <div class="item">
                    <img src="assets/img/iso_in/5.svg" alt="Image 2"/>
                </div>
                <div class="item">
                    <img src="assets/img/iso_in/6.svg" alt="Image 2"/>
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
            <h1><label for="faq-1">Что такое академический рисунок и для чего он нужен?</label></h1>
            <div class="p">
                <p>Академический рисунок - это техника рисования, которая используется в художественных учебных заведениях для обучения студентов. Она включает в себя изучение основ композиции, перспективы, светотени и других элементов, необходимых для создания реалистичных изображений.</p>
            </div>
        </div>
        <div class="accordion">
            <input type="checkbox" id="faq-2">
            <h1><label for="faq-2">Какова цель интенсива по академическому рисунку?</label></h1>
            <div class="p">
                <p>Основная цель интенсива - подготовить студентов к поступлению в высшее учебное заведение, связанное с изобразительным искусством. На занятиях студенты научатся правильно строить композицию, передавать объем и форму предметов, работать со светотенью и другими аспектами рисунка.</p>
            </div>
        </div>
        <div class="accordion">
            <input type="checkbox" id="faq-3">
            <h1><label for="faq-3">Сколько времени занимает интенсив по академическому рисунку?</label></h1>
            <div class="p">
                <p>Интенсив длится от нескольких недель до нескольких месяцев, в зависимости от программы и уровня подготовки студентов.</p>
            </div>
        </div>
        <div class="accordion">
            <input type="checkbox" id="faq-4">
            <h1><label for="faq-4">Нужно ли покупать специальные материалы для участия в интенсиве?</label></h1>
            <div class="p">
                <p>Нет, не нужно. Мы выдаем необходимые материалы нашим студентам для обучения академического рисунка.</p>
            </div>
        </div>
        <div class="accordion">
            <input type="checkbox" id="faq-6">
            <h1><label for="faq-6">Сколько длятся занятия?</label></h1>
            <div class="p">
                <p>Занятия длятся по 180 минут, проходят в пятницу и воскресенье с 10:00-13:00.</p>
            </div>
        </div>
        <div class="accordion">
            <input type="checkbox" id="faq-7">
            <h1><label for="faq-7">Стоимость занятий?</label></h1>
            <div class="p">
                <p>Стоимость 1400₽.</p>
            </div>
        </div>
        <div class="accordion">
            <input type="checkbox" id="faq-8">
            <h1><label for="faq-8">А если я не имею никакого опыта?</label></h1>
            <div class="p">
                <p>Самое главное иметь желание, а дальше преподаватель будет работать с вами индивидуально и давать те темы и упражнения, в которых вы хотите развиваться!</p>
            </div>
        </div>
    </div>
    <div class="record" id="record">
        <div class="record_block">
            <div class="img">
                <img src="assets\img\iso_in/for_record.svg" alt="record">
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