<?php
    include 'vendor/components/core.php';

    if(!isset($_SESSION['user'])){
        header("location: index.php");
    }

    $user = $link->query("SELECT * FROM `users` WHERE `id` = '{$_SESSION['user']['id']}'");

    $record_mc = $link->query("SELECT `title_mc`.*, `statuses`.*, `time_mc`.*, `record_mc`.*
    FROM `record_mc` 
        LEFT JOIN `title_mc` ON `record_mc`.`id_mc` = `title_mc`.`id` 
        LEFT JOIN `statuses` ON `record_mc`.`id_status` = `statuses`.`id` 
        LEFT JOIN `time_mc` ON `title_mc`.`id_time` = `time_mc`.`id`
        WHERE `id_user` = '{$_SESSION['user']['id']}'");

    $record_course = $link->query("SELECT  `users`.*, `statuses`.*, `title_course`.*, `record_course`.*
    FROM `record_course` 
        LEFT JOIN `users` ON `record_course`.`id_user` = `users`.`id` 
        LEFT JOIN `statuses` ON `record_course`.`id_status` = `statuses`.`id` 
        LEFT JOIN `title_course` ON `record_course`.`id_course` = `title_course`.`id`
        WHERE `id_user` = '{$_SESSION['user']['id']}'");

    include 'vendor/components/header.php';
?>

    <div class="private" id="margin_top">
        <div class="private_title" id="title">
            <p>Личный кабинет</p>
        </div>
        <div class="private_data">
            <?php foreach ($user as $key => $value): ?>
                <p><strong>Фамилия: </strong><?= $value ['surname'] ?></p>
                <p><strong>Имя: </strong><?= $value ['name'] ?></p>
                <p><strong>Отчество: </strong><?= $value ['patronimyc'] ?></p>
                <div class="form_admin">
                    <p><strong>Номер телефона: </strong><?= $value ['tel'] ?></p>
                    <form action="vendor/actions/update/tel.php" method="post">
                        <input type="tel" name="tel" id="phone">
                        <button name="tel_btn">Изменить</button>
                        <p style="color: green" class="session_res"><?php
                            if(isset($_SESSION['success']['new_tel'])){
                                echo $_SESSION['success']['new_tel'];
                                unset ($_SESSION['success']['new_tel']);
                            }
                        ?></p>
                        <p style="color: red" class="session_res"><?php
                            if(isset($_SESSION['error']['tel'])){
                                echo $_SESSION['error']['tel'];
                                unset ($_SESSION['error']['tel']);
                            }
                        ?></p>
                    </form>
                </div>
                <div class="form_admin">
                    <p><strong>Адрес электронной почты: </strong><?= $value ['email'] ?></p>
                    <form action="vendor/actions/update/email.php" method="post">
                        <input type="email" name="email" pattern="[a-zA-Z0-9._%+-]+@[a-z0-9.-]+\.[a-zA-Z]{2,4}" title="Введите корректный адрес своей электронной почты!">
                        <button name="email_btn">Изменить</button>
                        <p style="color: red" class="session_res"><?php
                            if(isset($_SESSION['error']['email'])){
                                echo $_SESSION['error']['email'];
                                unset ($_SESSION['error']['email']);
                            }
                        ?></p>
                        <p style="color: red" class="session_res"><?php
                            if(isset($_SESSION['error']['new_email'])){
                                echo $_SESSION['error']['new_email'];
                                unset ($_SESSION['error']['new_email']);
                            }
                        ?></p>
                    </form>
                </div>
                <div class="form_admin">
                <p><strong>Пароль:</strong></p>
                    <form action="vendor/actions/update/password.php" method="post">
                        <input type="password" name="old_password" placeholder="Старый пароль">
                        <input type="password" name="new_password" placeholder="Новый пароль" pattern="[A-Za-z0-9]{6,}" title="Пароль должен содержать не менее 6 латинских символов или цифр!">
                        <button name="new_password_btn">Изменить</button>
                        <p style="color: red" class="session_res"><?php
                            if(isset($_SESSION['error']['empty'])){
                                echo $_SESSION['error']['empty'];
                                unset ($_SESSION['error']['empty']);
                            }
                        ?></p>
                        <p style="color: red" class="session_res"><?php
                            if(isset($_SESSION['error']['old_password'])){
                                echo $_SESSION['error']['old_password'];
                                unset ($_SESSION['error']['old_password']);
                            }
                        ?></p>
                    </form>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="my_records">
            <div class="my_records_title" id="title">
                <p>Мои записи</p>
            </div>
            <div class="row">
                <div class="my_records_block">
                    <p style="color: green" class="session_res"><?php
                    if(isset($_SESSION['success']['delete_mc'])){
                        echo $_SESSION['success']['delete_mc'];
                        unset ($_SESSION['success']['delete_mc']);
                    }
                    ?>
                    <?php foreach ($record_mc as $key => $value):?>
                        <h3>Мастер-класс</h3>
                        <p><strong>Название: </strong><?= $value['lesson'] ?></p>
                        <p><strong>Тема: </strong>"<?= $value['title'] ?>"</p>
                        <p><strong>Возраст: </strong><?= $value['age'] ?>+</p>
                        <p><strong>Цена: </strong><?= $value['price'] ?>руб.</p>
                        <p><strong>Дата: </strong><?= $value['date'] ?></p>
                        <p><strong>Время: </strong><?= $value['time'] ?></p>
                        <p><strong>Статус: </strong><u><?= $value['status'] ?></u></p>
                        <form action="vendor/actions/delete.php" method="post">
                            <input type="hidden" name="id" value="<?= $value['id']?>">
                            <button name="delete_mc">Удалить запись</button>
                        </form>
                    <?php endforeach; ?>
                </div>
                <div class="my_records_block">
                    <p style="color: green" class="session_res"><?php
                    if(isset($_SESSION['success']['delete_c'])){
                        echo $_SESSION['success']['delete_c'];
                        unset ($_SESSION['success']['delete_c']);
                    }
                    ?>
                    <?php foreach ($record_course as $key => $value):?>
                        <h3>Занятие</h3>
                        <p><strong>Тема: </strong>"<?= $value['title'] ?>"</p>
                        <p><strong>Дата: </strong><?= $value['date'] ?></p>
                        <p><strong>Время: </strong><?= $value['time'] ?></p>
                        <p><strong>Статус: </strong><u><?= $value['status'] ?></u></p>
                        <form action="vendor/actions/delete.php" method="post">
                            <input type="hidden" name="id" value="<?= $value['id']?>" >
                            <button name="delete_c">Удалить запись</button>
                        </form>
                    <?php endforeach; ?>
                </div>
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