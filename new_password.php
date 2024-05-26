<?php
    include 'vendor/components/core.php';

    if(isset($_SESSION['user'])){
        header("location: index.php");
    }

    include 'vendor/components/header.php';
?>
    <div class="reg" id="margin_top">
        <div class="reg_title" id="title">
            <p>Придумайте новый пароль</p>
        </div>
        <div class="form_block">
            <div class="form">
                <form action="vendor/actions/recovery_pass/save_new_pass.php" method="post">
                    <input type="password" name="password" pattern="[A-Za-z0-9]{6,}" title="Пароль должен содержать не менее 6 латинских символов или цифр!">
                    <button name="password_btn">Сохранить</button>
                </form>
                <p class="desc_for_form"><a href="auth.php">Вернуться назад</a></p>
                <p style="color: red" class="session_res"><?php
                    if(isset($_SESSION['error']['empty'])){
                        echo $_SESSION['error']['empty'];
                        unset ($_SESSION['error']['empty']);
                    }
                ?></p>
                <p style="color: red" class="session_res"><?php
                    if(isset($_SESSION['error']['empty_code'])){
                        echo $_SESSION['error']['empty_code'];
                        unset ($_SESSION['error']['empty_code']);
                    }
                ?></p>
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
<script>
    var myElement = document.querySelector("header");
    // запуск конструктора
    var headroom = new Headroom(myElement);
    // инициализация
    headroom.init();  
</script>
<script src="assets/scripts/WOW-master/dist/wow.min.js"></script>
<script type="text/javascript">
    new WOW().init();
</script>