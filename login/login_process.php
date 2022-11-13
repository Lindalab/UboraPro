<?php 
    require_once("../controllers/users_controller.php");

    if(isset($_POST['login'])){
        $user_email = $_POST['user_email'];
        $password = $_POST['password'];
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);

        $login = login($user_email, $hashed_password);

        $db_email = null;
        $db_password = null;

        if($login){
            foreach($login as $detail){
                $db_email = $detail['user_email'];
                $db_password = $detail['password'];
            }
        }

        if($db_email === $email && $db_password === $password){
            echo "success";
        }else{
            echo "failed";
        }
    }


?>