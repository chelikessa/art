<?php
    include 'vendor/components/core.php';

    if($_SESSION['user']['isAdmin'] != 1){
        header("location: index.php");
    }

    $up_e = $link->query("SELECT  `time_mc`.*, `title_up_events`.*
    FROM `title_up_events` 
        LEFT JOIN `time_mc` ON `title_up_events`.`id_time` = `time_mc`.`id`
        ORDER BY `date`");

    $time = $link->query("SELECT * FROM `time_mc`");

    include 'vendor/components/header.php';
?>

    <div class="admin_mc" id="margin_top">
        <div class="admin_mc_title" id="title">
            <p>Добавить событие</p>
        </div>
        <div class="form_admin_с">
            <div class="column">
                <form action="vendor/actions/admin/add_up_events.php" method="post" enctype="multipart/form-data" onsubmit="return(Validate_4());" name="add_up_events">
                    <textarea rows="5" name="visible" placeholder="Введите видимое описание" maxlength="255"></textarea>
                    <!-- <textarea rows="7" name="hidden" placeholder="Введите скрытое описание" maxlength="255"></textarea> -->
                    <input type="text" name="price" placeholder="Введите цену участия">
                    <label for="date">Выберите дату события</label>
                    <input type="date" name="date">
                    <label for="time">Выберите время события</label>
                    <select name="time">
                        <option value="" selected disabled>-</option>
                        <?php foreach ($time as $key => $value):?>
                            <option value="<?= $value['id'] ?>"><?= $value['time'] ?></option>
                        <?php endforeach; ?>
                    </select>
                    <div id="name_error" style="color:red"></div>
                    <label for="img">Добавьте изображение для события</label>
                    <input type="file" name="img" >
                    <button name="add_up_events">Добавить</button>
                </form>
                <p style="color: red" class="session_res"><?php
                if(isset($_SESSION['error']['add_up_events'])){
                    echo $_SESSION['error']['add_up_events'];
                    unset ($_SESSION['error']['add_up_events']);
                }
                ?>
                <p style="color: green" class="session_res"><?php
                if(isset($_SESSION['success']['add_up_events'])){
                    echo $_SESSION['success']['add_up_events'];
                    unset ($_SESSION['success']['add_up_events']);
                }
                ?>
            </div>
        </div>
    </div>
    <div class="admin_mc_title_2" id="title">
        <p>Ближайшие события</p>
    </div>
    <p style="color: green" class="session_res_m_b"><?php
        if(isset($_SESSION['success']['delete_up_events'])){
            echo $_SESSION['success']['delete_up_events'];
            unset ($_SESSION['success']['delete_up_events']);
        }
    ?>
    <div class="admin_mc_block">
        <?php foreach ($up_e as $key => $value): ?>
            <div class="gap_p" style="width: 300px; height: 550px; justify-content: space-between">
                <img src="assets/img/add_img/<?=$value['img']?>" alt="img" width="300px">
                <p><?= $value['visible'] ?></p>
                <p><strong>Цена: </strong><?= $value['price'] ?> руб.</p>
                <p><strong>Дата: </strong><?= $value['date'] ?></p>
                <p><strong>Время: </strong><?= $value['time'] ?></p>
                <form action="vendor/actions/admin/add_up_events.php" method="post">
                    <input type="hidden" name="id" value="<?= $value['id']?>">
                    <button name="delete_up_events">Удалить событие</button>
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