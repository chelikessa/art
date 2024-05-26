<?php
    session_start();
    include '../../components/core.php';

    if(isset($_POST['recovery'])){
        if(!empty($_POST['email'])){
            $user = $link -> query("SELECT * FROM `users` WHERE `email` = '{$_POST['email']}'");
            if($user -> num_rows < 0){
                $_SESSION['error']['email'] = "Пользователя с таким адресом электронной почты не существует!";
                header("location:" .$_SERVER['HTTP_REFERER']);
            }else{
                $_SESSION['password_recovery'] = rand(100000, 999999);

                $_SESSION['email_for_update'] = trim($_POST['email']);
                $create_code = trim($_POST['password_recovery']);

                require_once('../../../assets/scripts/PHPMailer-master/src/PHPMailer.php');
                require_once('../../../assets/scripts/PHPMailer-master/src/SMTP.php');
                require_once('../../../assets/scripts/PHPMailer-master/src/Exception.php');
                $mail = new PHPMailer\PHPMailer\PHPMailer(); 
                $mail->isSMTP();
                $mail->Host = 'ssl://smtp.mail.ru'; 
                $mail->SMTPAuth = true;
                $mail->Username = 'rnupogodi@mail.ru';
                $mail->Password = 'nNs8iNMvuH6ESpH1emY7';
                $mail->SMTPSecure = 'ssl';
                $mail->Port = '465';
                $mail->SMTPOptions = [ 'ssl' => [ 'verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true, ] ];
                $mail->From = 'rnupogodi@mail.ru'; 
                $mail->FromName = 'ОРХКОУ "Арт-галерея "Квадрат"'; 
                $mail->Subject = 'Восстановление пароля'; 
                $mail->Body = 'Код для восстановления пароля - ' . $_SESSION['password_recovery']; 
                $mail->CharSet = 'UTF-8';
                $mail->isHTML(false); 
                $mail->AddAddress("{$_SESSION['email_for_update']}");
                $mail->SMTPDebug = 0; 
                if($mail->send()){
                    $code = $_SESSION['password_recovery'];
                    header("location: ../../../code_password.php");
                }
            }
        }else{
            $_SESSION['error']['code'] = "Вы не ввели адрес электронной почты!";
            header("location:" .$_SERVER['HTTP_REFERER']);
        }
    }
?>