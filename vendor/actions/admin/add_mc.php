<?php
    include '../../components/core.php';

    if(isset($_POST['add_mc'])){
        $img = $_FILES['img'];
        $time = $_POST['time'];
        if(empty($_POST['lesson'] || $_POST['title'] || $_POST['age'] || $_POST['price'] || $_POST['date'] ||$_POST['img'])){
            $_SESSION['error']['add_mc'] = "Заполните все поля!";
            header("location: ".$_SERVER['HTTP_REFERER']);
        }else{
        if("image" == substr($img['type'], 0, 5)){
            $name_img = uniqid().".".substr($img['type'], 6);
            move_uploaded_file($img['tmp_name'], "../../../assets/img/add_img/".$name_img);
            $link->query("INSERT INTO `title_mc` (`lesson`, `title`, `age`, `price`, `date`, `id_time`, `img`) VALUES ('{$_POST['lesson']}', '{$_POST['title']}', '{$_POST['age']}', '{$_POST['price']}', '{$_POST['date']}', '$time', '$name_img')");
            $_SESSION['success']['add_mc'] = "Мастер-класс успешно добавлен";
            header("location: ".$_SERVER['HTTP_REFERER']);
            }
        }
    }

    if(isset($_POST['delete_mc'])){
        $id = $_POST['id'];
        $link->query("DELETE FROM `title_mc` WHERE `id` = '$id'");
        $_SESSION['success']['delete_mc'] = "Мастер-класс успешно удален";
        header("location: ".$_SERVER['HTTP_REFERER']);
    }
?>