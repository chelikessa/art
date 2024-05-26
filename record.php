<?php
    include 'vendor/components/core.php';

    if(!isset($_SESSION['user'])){
        header("location: index.php");
    }

    $course = $link -> query("SELECT * FROM `title_course`");

    include 'vendor/components/header.php';
?>

    <div class="record_page" id="margin_top">
        <div class="record_page_title" id="title">
            <p>Запись на занятие</p>
        </div>
        <div class="form_block">
            <div class="form">
                <form action="vendor/actions/record/record_course.php" method="post">
                    <select name="course">
                        <option value="" selected disabled>Выберите занятие</option>
                        <?php foreach ($course as $key => $value): ?>
                            <option value="<?= $value['id'] ?>"><?= $value['title'] ?></option>
                        <?php endforeach; ?>
                    </select>
                    <button name="rec_c">Записаться</button>
                    <p style="color: green" class="session_res"><?php
                        if(isset($_SESSION['success']['rec_c'])){
                            echo $_SESSION['success']['rec_c'];
                            unset ($_SESSION['success']['rec_c']);
                        }
                    ?></p>
                    <p class="desc_for_input">Отправляя данные, вы соглашаетесь с утверждённой <a href="data_processing_policy.php">Политикой обработки данных на сайте</a></p>
                </form>
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