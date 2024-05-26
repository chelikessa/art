<?php 
    session_start();
    include '../../components/core.php';

    if(isset($_POST['add_product'])){
        $type = $_POST['type'];
        $user = $_POST['user'];
        if(!empty($_POST['number_product'])){
            $product = $link -> query("SELECT * FROM `product` 
            WHERE `number` = '{$_POST['number_product']}'");
            if($product -> num_rows > 0){
                $_SESSION['error']['number'] = "Изделие с таким номером уже существует!";
                header("location:" .$_SERVER['HTTP_REFERER']);
            }else{
                $link -> query("INSERT INTO `product` (`id_status`, `id_type`, `id_user`, `number`)
                VALUES ('1', '$type', '$user', '{$_POST['number_product']}')");
                $_SESSION['success']['product'] = "Изделие добавлено!";
                header('location:'.$_SERVER['HTTP_REFERER']);
            }
        }
        else{
            $_SESSION['error']['product'] = "Заполните поле!";
            header('location:'.$_SERVER['HTTP_REFERER']);
        }
    }
?>