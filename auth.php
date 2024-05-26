<?php
    include 'vendor/components/core.php';

    if(isset($_SESSION['user'])){
        header("location: index.php");
    }

    include 'vendor/components/header.php';
?>
    <div class="reg" id="margin_top">
        <div class="reg_title" id="title">
            <p>Авторизация</p>
        </div>
        <div class="form_block">
            <div class="form">
                <form action="vendor/actions/auth.php" method="post">
                    <input type="hidden" name="redirurl" value="<? echo $_SERVER['HTTP_REFERER']; ?>" />
                    <input type="email" name="email" placeholder="Введите почту" required pattern="[a-zA-Z0-9._%+-]+@[a-z0-9.-]+\.[a-zA-Z]{2,4}" title="Введите корректный адрес своей электронной почты!">
                    <div>
                        <input type="password" name="password" placeholder="Введите пароль" required>
                        <p class="desc_for_password"><a href="forgot_password.php">Забыли пароль?</a></p>
                    </div>
                    <button name="auth">Авторизоваться</button>
                </form>
                <p style="color: green" class="session_res"><?php
                if(isset($_SESSION['success']['reg'])){
                    echo $_SESSION['success']['reg'];
                    unset ($_SESSION['success']['reg']);
                }
                ?>
                <p style="color: red" class="session_res"><?php
                if(isset($_SESSION['error']['email'])){
                    echo $_SESSION['error']['email'];
                    unset ($_SESSION['error']['email']);
                }
                ?>
                <p style="color: red" class="session_res"><?php
                if(isset($_SESSION['error']['auth'])){
                    echo $_SESSION['error']['auth'];
                    unset ($_SESSION['error']['auth']);
                }
                ?>
                <p style="color: green" class="session_res"><?php
                if(isset($_SESSION['success']['new_email'])){
                    echo $_SESSION['success']['new_email'];
                    unset ($_SESSION['success']['new_email']);
                }
                ?></p>
                <p style="color: green" class="session_res"><?php
                if(isset($_SESSION['success']['new_password'])){
                    echo $_SESSION['success']['new_password'];
                    unset ($_SESSION['success']['new_password']);
                }
                ?></p>
                <p style="color: green" class="session_res"><?php
                if(isset($_SESSION['success']['save_new_pass'])){
                    echo $_SESSION['success']['save_new_pass'];
                    unset ($_SESSION['success']['save_new_pass']);
                }
                ?></p>
                <p class="desc_for_form">Нет аккаунта? <a href="reg.php">Зарегистрироваться</a></p>
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