<?php
    include '../components/core.php';

    if(isset($_POST['delete_mc'])){
        $link->query("DELETE FROM `record_mc` WHERE `id` = '{$_POST['id']}'");
        $_SESSION['success']['delete_mc'] = "Запись успешно удалена";
        header('location:'.$_SERVER['HTTP_REFERER']);
    }
    if(isset($_POST['delete_c'])){
        $link->query("DELETE FROM `record_course` WHERE `id` = '{$_POST['id']}'");
        $_SESSION['success']['delete_c'] = "Запись успешно удалена";
        header('location:'.$_SERVER['HTTP_REFERER']);
    }
?>