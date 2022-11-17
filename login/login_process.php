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
            session_start();
            $user_detail =  getAUserDetails($user_email);
            foreach($user_detail as $user){
                $_SESSION['user_id'] = $user['user_id'];
                $_SESSION['user_name'] = $user['user_name'];
                $_SESSION['user_email'] = $user['user_email'];
                $_SESSION['user_school_id'] = $user['user_school_id'];
                $_SESSION['phone_number'] = $user['phone_number'];
                $_SESSION['password'] = $user['password'];
                $_SESSION['user_role'] = $user['user_role'];       
            }    
            echo "success";
        }else{
            echo "failed";
        }
    }

?>