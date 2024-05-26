<?php
    include '../../components/core.php';

    if(isset($_POST['-'])){
        $link->query("UPDATE `record_mc` SET `id_status`='2' WHERE `id` = '{$_POST['id']}'");
        $_SESSION['success']['status'] = "Статус запроса успешно изменен";
        header('location:'.$_SERVER['HTTP_REFERER']);
    }
    if(isset($_POST['+'])){
        $link->query("UPDATE `record_mc` SET `id_status`='1' WHERE `id` = '{$_POST['id']}'");
        $_SESSION['success']['status'] = "Статус запроса успешно изменен";
        header('location:'.$_SERVER['HTTP_REFERER']);
    }
    if(isset($_POST['--'])){
        $link->query("DELETE FROM `record_mc` WHERE `id` = '{$_POST['id']}'");
        $_SESSION['success']['delete'] = "Запись успешно удалена";
        header('location:'.$_SERVER['HTTP_REFERER']);
    }
?>