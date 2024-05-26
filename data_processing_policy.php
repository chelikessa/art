<?php
    include 'vendor/components/core.php';
    include 'vendor/components/header.php';
?>

    <div class="data_processing_policy" id="margin_top">
        <div class="data_processing_policy_title" id="title">
            <p>Политика в отношении обработки персональных данных</p>
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