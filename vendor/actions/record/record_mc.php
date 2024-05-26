<?php
    include '../../components/core.php';

    if(isset($_POST['rec_mc'])){
        $id_mc = $_POST['mc']; 
        $link->query("INSERT INTO `record_mc`(`id_user`, `id_mc`, `id_status`)
        VALUES ('{$_SESSION['user']['id']}', '$id_mc', '2')");

        $_SESSION['success']['rec_mc']="Ваша запись в обработке! Ожидайте звонка в течении дня!";
        header('location:'.$_SERVER['HTTP_REFERER'].'#record');
    }
?>