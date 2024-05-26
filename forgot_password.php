<?php
    include 'vendor/components/core.php';

    if(isset($_SESSION['user'])){
        header("location: index.php");
    }

    include 'vendor/components/header.php';
?>
    <div class="reg" id="margin_top">
        <div class="reg_title" id="title">
            <p>Восстановление пароля</p>
        </div>
        <div class="form_block">
            <div class="form">
                <form action="vendor/actions/recovery_pass/password_recovery.php" method="post">
                    <input type="email" name="email" placeholder="Введите почту" pattern="[a-zA-Z0-9._%+-]+@[a-z0-9.-]+\.[a-zA-Z]{2,4}" title="Введите корректный адрес своей электронной почты!">
                    <button name="recovery">Отправить код на почту</button>
                </form>
                <p class="desc_for_form"><a href="auth.php">Вернуться назад</a></p>
                <p style="color: red" class="session_res"><?php
                    if(isset($_SESSION['error']['email'])){
                        echo $_SESSION['error']['email'];
                        unset ($_SESSION['error']['email']);
                    }
                ?></p>
                <p style="color: red" class="session_res"><?php
                    if(isset($_SESSION['error']['code'])){
                        echo $_SESSION['error']['code'];
                        unset ($_SESSION['error']['code']);
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