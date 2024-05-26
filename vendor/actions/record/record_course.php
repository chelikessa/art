<?php
    include '../../components/core.php';

    if(isset($_POST['rec_c'])){
        $id_course = $_POST['course']; 
        $link->query("INSERT INTO `record_course`(`id_user`, `id_course`, `id_status`)
        VALUES ('{$_SESSION['user']['id']}', '$id_course', '2')");

        $_SESSION['success']['rec_c']="Ваша запись в обработке! Ожидайте звонка в течении дня!";
        header('location:'.$_SERVER['HTTP_REFERER']);
    }
?>