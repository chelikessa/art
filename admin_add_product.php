<?php
    include 'vendor/components/core.php';

    if($_SESSION['user']['isAdmin'] != 1){
        header("location: index.php");
    }

    $user = $link->query("SELECT * FROM `users` WHERE `isAdmin` != 1");

    $type = $link->query("SELECT * FROM `type_activity`");

    $product = $link->query("SELECT  `users`.*, `statuses_product`.*, `type_activity`.*, `product`.*
    FROM `product` 
        LEFT JOIN `users` ON `product`.`id_user` = `users`.`id` 
        LEFT JOIN `statuses_product` ON `product`.`id_status` = `statuses_product`.`id` 
        LEFT JOIN `type_activity` ON `product`.`id_type` = `type_activity`.`id`
        ORDER BY `number`");

    include 'vendor/components/header.php';
?>

    <div class="admin_panel" id="margin_top">
        <div class="admin_panel_title" id="title">
            <p>Добавить изделие</p>
        </div>
        <div class="form_admin_с">
            <div class="column">
                <form action="vendor/actions/admin/add_product.php" method="post" onsubmit="return(Validate_3());" name="add_product">
                    <select name="user">
                        <option value="" selected disabled>Выберите ученика</option>
                        <?php foreach ($user as $key => $value):?>
                            <option value="<?= $value['id'] ?>"><?= $value['surname'] ?> <?= $value['name'] ?> <?= $value['patronimyc'] ?></option>
                        <?php endforeach; ?>
                    </select>
                    <select name="type">
                        <option value="" selected disabled>Выберите вид занятия</option>
                        <?php foreach ($type as $key => $value):?>
                            <option value="<?= $value['id'] ?>"><?= $value['title_type'] ?></option>
                        <?php endforeach; ?>
                    </select>
                    <input type="text" name="number_product" id="number_product" placeholder="Введите номер его изделия">
                    <button name="add_product">Добавить</button>
                    <div id="name_error" style="color:red"></div>
                </form>
                <p style="color: red" class="session_res"><?php
                    if(isset($_SESSION['error']['number'])){
                        echo $_SESSION['error']['number'];
                        unset ($_SESSION['error']['number']);
                    }
                    ?>
                    <p style="color: red" class="session_res"><?php
                    if(isset($_SESSION['error']['product'])){
                        echo $_SESSION['error']['product'];
                        unset ($_SESSION['error']['product']);
                    }
                    ?>
                    <p style="color: green" class="session_res"><?php
                    if(isset($_SESSION['success']['product'])){
                        echo $_SESSION['success']['product'];
                        unset ($_SESSION['success']['product']);
                    }
                    ?>
            </div>
        </div>
        <div class="admin_mc_title_2" id="title">
            <p>Список изделий</p>
        </div>
        <table class="list_product" rules="all">
            <thead>
                <tr>
                    <th>Номер изделия</th>
                    <th>ФИО ученика</th>
                    <th>Контактный номер телефона</th>
                    <th>Занятие</th>
                    <th>Статус готовности изделия</th>
                    <!-- <th>Изменить статус изделия</th> -->
                </tr>
            </thead>
            <tbody>
                <?php foreach ($product as $key => $value):?>
                    <tr>
                        <th><?= $value['number'] ?></th>
                        <th><?= $value['surname'] ?> <?= $value['name'] ?> <?= $value['patronimyc'] ?></th>
                        <th><u><a href="tel:<?= $value['tel'] ?>"><?= $value['tel'] ?></a></u></th>
                        <th><?= $value['title_type'] ?></th>
                        <th><?= $value['status'] ?></th>
                        <!-- <th><form action="vendor/action/product_status.php" method="post">
                            <input type="hidden" name="id" value=<?= $value['id'] ?>>
                            <button name="1">На просушке</button>
                            <button name="2">Проходит обжиг</button>
                            <button name="3">Готово</button>
                            <button name="4">Выдано</button>
                        </form></th> -->
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <!-- <?php foreach ($product as $key => $value):?>
            <div class="list_product">
                <p><strong>Номер изделия: </strong><?= $value['number'] ?></p>
                <p><strong>ФИО ученика: </strong><?= $value['surname'] ?> <?= $value['name'] ?> <?= $value['patronimyc'] ?></p>
                <p><strong>Номер телефона: </strong><u><a href="tel:<?= $value['tel'] ?>"><?= $value['tel'] ?></a></u></p>
                <p><strong>Статус готовности изделия: </strong><?= $value['status'] ?></p>
            </div>
        <?php endforeach; ?> -->
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