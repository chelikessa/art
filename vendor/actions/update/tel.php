<?php
    session_start();
    include '../../components/core.php';

        
    if(isset($_POST["tel_btn"])){
        if(!empty($_POST['tel'])){
            $user = $link -> query("UPDATE `users` SET `tel` = '{$_POST['tel']}'
            WHERE `id` = '{$_SESSION['user']['id']}'");
            $_SESSION['success']['new_tel'] = "Ваш номер телефона изменен!";
            header("Location:".$_SERVER['HTTP_REFERER']);
        }
        else{
            $_SESSION['error']['tel'] = "Вы не ввели новый номер телефона!";
            header("Location:".$_SERVER['HTTP_REFERER']);
        }
        
    }
?>