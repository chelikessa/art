<?php
    include '../../components/core.php';

    if(isset($_POST['add_up_events'])){
        $img = $_FILES['img'];
        $time = $_POST['time'];
        if(empty($_POST['visible'] || $_POST['price'] || $_POST['date'] ||$_POST['img'])){
            $_SESSION['error']['add_up_events'] = "Заполните все поля!";
            header("location: ".$_SERVER['HTTP_REFERER']);
        }else{
        if("image" == substr($img['type'], 0, 5)){
            $name_img = uniqid().".".substr($img['type'], 6);
            move_uploaded_file($img['tmp_name'], "../../../assets/img/add_img/".$name_img);
            $link->query("INSERT INTO `title_up_events` (`visible`, `price`, `date`, `id_time`, `img`) VALUES ('{$_POST['visible']}', '{$_POST['price']}', '{$_POST['date']}', '$time', '$name_img')");
            $_SESSION['success']['add_up_events'] = "Событие успешно добавлено";
            header("location: ".$_SERVER['HTTP_REFERER']);
            }
        }
    }

    if(isset($_POST['delete_up_events'])){
        $id = $_POST['id'];
        $link->query("DELETE FROM `title_up_events` WHERE `id` = '$id'");
        $_SESSION['success']['delete_up_events'] = "Событие успешно удалено";
        header("location: ".$_SERVER['HTTP_REFERER']);
    }
?>