<?php
    include '../../components/core.php';

    if(isset($_POST['1'])){
        $link->query("UPDATE `product` SET `id_status`='1'
        WHERE `id` = '{$_POST['id']}'");
        $_SESSION['success']['status'] = "Статус запроса успешно изменен!";
        header('location:'.$_SERVER['HTTP_REFERER']);
    }
    if(isset($_POST['2'])){
        $link->query("UPDATE `product` SET `id_status`='2'
        WHERE `id` = '{$_POST['id']}'");
        $_SESSION['success']['status'] = "Статус запроса успешно изменен!";
        header('location:'.$_SERVER['HTTP_REFERER']);
    }
    if(isset($_POST['3'])){
        $link->query("UPDATE `product` SET `id_status`='3'
        WHERE `id` = '{$_POST['id']}'");
        $_SESSION['success']['status'] = "Статус запроса успешно изменен!";
        header('location:'.$_SERVER['HTTP_REFERER']);
    }
    if(isset($_POST['4'])){
        $link->query("UPDATE `product` SET `id_status`='4'
        WHERE `id` = '{$_POST['id']}'");
        $_SESSION['success']['status'] = "Статус запроса успешно изменен!";
        header('location:'.$_SERVER['HTTP_REFERER']);
    }
?>