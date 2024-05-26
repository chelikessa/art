<?php
    include '../../components/core.php';

    if(isset($_POST['search'])){
        if(empty($_POST['number'])){
            $_SESSION['error']['empty']="Вы не ввели номер изделия";
            header('location:'.$_SERVER['HTTP_REFERER']);
        }
        else{
            $numder = $_POST['number'];
            $num_p = $link->query("SELECT * FROM `product` WHERE `number` = '%$number%'");
            if($num_p -> num_rows == 0){
                $_SESSION['error']['no']="Изделия с таким номером не существует";
                header('location:'.$_SERVER['HTTP_REFERER']);
            }
            // else{
            //     $res = $link->query("SELECT * FROM `product` WHERE `number` LIKE '%$number%'");
            //     $result = mysqli_fetch_array($res);
            //     $_SESSION['success']['number']="$result";
            //     header('location:'.$_SERVER['HTTP_REFERER']);
            // }
        }
    }
?>