<?php
    include 'vendor/components/core.php';

    if($_SESSION['user']['isAdmin'] != 1){
        header("location: index.php");
    }

    $mc = $link->query("SELECT  `time_mc`.*, `title_mc`.*
    FROM `title_mc` 
        LEFT JOIN `time_mc` ON `title_mc`.`id_time` = `time_mc`.`id`
        ORDER BY `date`");

    $time = $link->query("SELECT * FROM `time_mc`");

    include 'vendor/components/header.php';
?>

    <div class="admin_mc" id="margin_top">
        <div class="admin_mc_title" id="title">
            <p>Добавить мастер-класс</p>
        </div>
        <div class="form_admin_с">
            <div class="column">
                <form action="vendor/actions/admin/add_mc.php" method="post" enctype="multipart/form-data" onsubmit="return(Validate_2());" name="add_mc">
                    <input type="text" name="lesson" placeholder="Введите название мастер-класса">
                    <input type="text" name="title" placeholder="Введите тему мастер-класса">
                    <input type="text" name="age" placeholder="Введите ограничение по возрасту">
                    <input type="text" name="price" placeholder="Введите цену">
                    <label for="date">Выберите дату мастер-класса</label>
                    <input type="date" name="date">
                    <label for="time">Выберите время мастер-класса</label>
                    <select name="time">
                        <option value="" selected disabled>-</option>
                        <?php foreach ($time as $key => $value):?>
                            <option value="<?= $value['id'] ?>"><?= $value['time'] ?></option>
                        <?php endforeach; ?>
                    </select>
                    <div id="name_error" style="color:red"></div>
                    <label for="img">Добавьте изображение для мастер-класса</label>
                    <input type="file" name="img" >
                    <button name="add_mc">Добавить</button>
                </form>
                <p style="color: red" class="session_res"><?php
                if(isset($_SESSION['error']['add_mc'])){
                    echo $_SESSION['error']['add_mc'];
                    unset ($_SESSION['error']['add_mc']);
                }
                ?>
                <p style="color: green" class="session_res"><?php
                if(isset($_SESSION['success']['add_mc'])){
                    echo $_SESSION['success']['add_mc'];
                    unset ($_SESSION['success']['add_mc']);
                }
                ?>
            </div>
        </div>
    </div>
    <div class="admin_mc_title_2" id="title">
        <p>Мастер-классы</p>
    </div>
    <p style="color: green" class="session_res_m_b"><?php
    if(isset($_SESSION['success']['delete_mc'])){
        echo $_SESSION['success']['delete_mc'];
        unset ($_SESSION['success']['delete_mc']);
    }
    ?>
    <div class="admin_mc_block">
        <?php foreach ($mc as $key => $value): ?>
            <div class="gap_p">
                <img src="assets/img/add_img/<?=$value['img']?>" alt="img" width="300px">
                <p><strong>Название МК: </strong><?= $value['lesson'] ?></p>
                <p><strong>Тема МК: </strong>"<?= $value['title'] ?>"</p>
                <p><strong>Ограничение по возрасту: </strong><?= $value['age'] ?>+</p>
                <p><strong>Цена: </strong><?= $value['price'] ?> руб.</p>
                <p><strong>Дата: </strong><?= $value['date'] ?></p>
                <p><strong>Время: </strong><?= $value['time'] ?></p>
                <form action="vendor/actions/admin/add_mc.php" method="post">
                    <input type="hidden" name="id" value="<?= $value['id']?>">
                    <button name="delete_mc">Удалить мастер-класс</button>
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