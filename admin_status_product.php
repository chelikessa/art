<?php
    include 'vendor/components/core.php';

    if($_SESSION['user']['isAdmin'] != 1){
        header("location: index.php");
    }

    // $product = $link->query("SELECT `users`.*, `statuses_product`.*, `product`.* 
    // FROM `product` 
    //     LEFT JOIN `users` ON `product`.`id_user` = `users`.`id` 
    //     LEFT JOIN `statuses_product` ON `product`.`id_status` = `statuses_product`.`id`
    //     WHERE `number` LIKE '%{$_POST['number']}%'
    //     ORDER BY `number`");

    $product_1 = $link->query("SELECT `statuses_product`.*, `type_activity`.*, `product`.*
    FROM `product` 
        LEFT JOIN `statuses_product` ON `product`.`id_status` = `statuses_product`.`id` 
        LEFT JOIN `type_activity` ON `product`.`id_type` = `type_activity`.`id`
        WHERE `id_type` < 3
        ORDER BY `number`");
    $product_2 = $link->query("SELECT `statuses_product`.*, `type_activity`.*, `product`.*
    FROM `product` 
        LEFT JOIN `statuses_product` ON `product`.`id_status` = `statuses_product`.`id` 
        LEFT JOIN `type_activity` ON `product`.`id_type` = `type_activity`.`id`
        WHERE `id_type` > 2
        ORDER BY `number`");

    include 'vendor/components/header.php';
?>

    <div class="admin_panel" id="margin_top">
        <div class="admin_panel_title" id="title">
            <p>Изменение статуса изделия</p>
        </div>
        <p style="color: green" class="session_res"><?php
        if(isset($_SESSION['success']['status'])){
            echo $_SESSION['success']['status'];
            unset ($_SESSION['success']['status']);
        }
        ?>
        <h2 class="admin_mc_title_3">Глина</h2>
        <?php foreach($product_1 as $key => $value): ?>
            <div class="list_product_div">
                <p>Изделие № <strong><?= $value ['number'] ?></strong></p>
                <p>Занятие <strong><?= $value ['title_type'] ?></strong></p>
                <p>Статус: <b><?= $value ['status'] ?></b></p>
                <form action="vendor/actions/admin/status_product.php" method="post">
                    <input type="hidden" name="id" value=<?= $value['id'] ?>>
                    <button name="1">На просушке</button>
                    <button name="2">Проходит обжиг</button>
                    <button name="3">Готово</button>
                    <button name="4">Выдано</button>
                </form>
            </div>
        <?php endforeach; ?>
        <h2 class="admin_mc_title_3">Живопись</h2>
        <?php foreach($product_2 as $key => $value): ?>
            <div class="list_product_div">
                <p>Изделие № <strong><?= $value ['number'] ?></strong></p>
                <p>Занятие <strong><?= $value ['title_type'] ?></strong></p>
                <p>Статус: <b><?= $value ['status'] ?></b></p>
                <form action="vendor/actions/admin/status_product.php" method="post">
                    <input type="hidden" name="id" value=<?= $value['id'] ?>>
                    <button name="1">На просушке</button>
                    <button name="3">Готово</button>
                    <button name="4">Выдано</button>
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