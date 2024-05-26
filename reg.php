<?php
    include 'vendor/components/core.php';

    if(isset($_SESSION['user'])){
        header("location: index.php");
    }

    include 'vendor/components/header.php';
?>
    <div class="reg" id="margin_top">
        <div class="reg_title" id="title">
            <p>Регистрация</p>
        </div>
        <div class="form_block">
            <div class="form">
                <form action="vendor/actions/reg.php" method="post">
                    <input type="text" name="surname" placeholder="Введите фамилию" required pattern="[а-яА-Я\s\-]+" title="Введите фамилию на русском языке">
                    <input type="text" name="name" placeholder="Введите имя" required pattern="[а-яА-Я\s\-]+" title="Введите имя на русском языке">
                    <input type="text" name="patronimyc" placeholder="Введите отчество" required pattern="[а-яА-Я\s\-]+" title="Введите отчество на русском языке">
                    <input type="tel" name="tel" placeholder="Введите номер телефона" required id="phone">
                    <input type="email" name="email" placeholder="Введите почту" required pattern="[a-zA-Z0-9._%+-]+@[a-z0-9.-]+\.[a-zA-Z]{2,4}" title="Введите корректный адрес своей электронной почты!">
                    <input type="password" name="password" placeholder="Введите пароль" required pattern="[A-Za-z0-9]{6,}" title="Пароль должен содержать не менее 6 латинских символов или цифр!">
                    <p class="desc_for_input">*Пароль должен содержать не менее 6 латинских символов или цифр!</p>
                    <button name="reg">Зарегистрироваться</button>
                </form>
                <p style="color: red" class="session_res"><?php
                if(isset($_SESSION['error']['reg'])){
                    echo $_SESSION['error']['reg'];
                    unset ($_SESSION['error']['reg']);
                }
                ?>
                <p style="color: red" class="session_res"><?php
                    if(isset($_SESSION['error']['email'])){
                        echo $_SESSION['error']['email'];
                        unset ($_SESSION['error']['email']);
                    }
                ?>
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