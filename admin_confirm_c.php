<?php
    include 'vendor/components/core.php';

    if($_SESSION['user']['isAdmin'] != 1){
        header("location: index.php");
    }

    $course = $link->query("SELECT  `users`.*, `statuses`.*, `title_course`.*, `record_course`.*
    FROM `record_course` 
        LEFT JOIN `users` ON `record_course`.`id_user` = `users`.`id` 
        LEFT JOIN `statuses` ON `record_course`.`id_status` = `statuses`.`id` 
        LEFT JOIN `title_course` ON `record_course`.`id_course` = `title_course`.`id`;");

    include 'vendor/components/header.php';
?>

    <div class="admin_panel" id="margin_top">
        <div class="admin_panel_title" id="title">
            <p>Подтверждение записи на занятие</p>
        </div>
        <p style="color: green" class="session_res"><?php
        if(isset($_SESSION['success']['status'])){
            echo $_SESSION['success']['status'];
            unset ($_SESSION['success']['status']);
        }
        ?>
        <p style="color: green" class="session_res"><?php
        if(isset($_SESSION['success']['delete'])){
            echo $_SESSION['success']['delete'];
            unset ($_SESSION['success']['delete']);
        }
        ?>
        <p style="color: red" class="session_res"><?php
        if(isset($_SESSION['error']['empty'])){
            echo $_SESSION['error']['empty'];
            unset ($_SESSION['error']['empty']);
        }
        ?>
        <?php foreach($course as $key => $value): ?>
            <div class="list_product_div" style="margin-top: 20px">
                <p><strong>ФИО ученика: </strong><?= $value['surname'] ?> <?= $value['name'] ?> <?= $value['patronimyc'] ?></p>
                <p><strong>Контактный номер телефона: </strong><u><a href="tel:<?= $value['tel'] ?>"><?= $value['tel'] ?></a></u></p>
                <p><strong>Занятие: </strong><?= $value['title'] ?></p>
                <p><strong>Статус: </strong><?= $value['status'] ?></p>
                <form action="vendor/actions/admin/confirm_course.php" method="post">
                    <input type="text" name="id" value="<?= $value['id']?>" hidden>
                    <p><strong>Дата: </strong><input type="date" id="date" name="date" value="<?= $value ['date'] ?>"></p>
                    <p><strong>Время: </strong><input type="time" id="time" name="time" value="<?= $value ['time'] ?>"></p>
                    <button name="+">Подтверждено</button>
                    <button name="-">Не подтверждено</button>
                    <button name="--">Удалить</button>
                </form>
            </div>
        <?php endforeach; ?>
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