<?php
    include 'vendor/components/core.php';

    if($_SESSION['user']['isAdmin'] != 1){
        header("location: index.php");
    }

    include 'vendor/components/header.php';
?>

    <div class="admin_panel" id="margin_top">
        <div class="admin_panel_title" id="title">
            <p>Админ-панель</p>
        </div>
        <div class="admin_panel_block">
            <a href="admin_up_events.php"><button>Ближайшие события</button></a>
            <a href="admin_mc.php"><button>Мастер-классы</button></a>
            <a href="admin_add_product.php"><button>Добавить изделие</button></a>
            <a href="admin_status_product.php"><button>Статус изделий</button></a>
            <a href="admin_confirm_mc.php"><button>Подтверждение записи на мастер-класс</button></a>
            <a href="admin_confirm_c.php"><button>Подтверждение записи на занятие</button></a>
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