<?php 
    require_once("../controllers/users_controller.php");

    if(isset($_POST['register'])){
        $user_name = $_POST['user_name'];
        $user_email = $_POST['user_email'];
        $user_school_id = $_POST['user_school_id'];
        $phone_number = $_POST['phone_number'];
        $password = $_POST['password'];
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);

        $check = checkEmail_ctr($user_email);

        if($check > 0){
            echo "email already exist";
        }

        $register = registerUser_ctr($user_name, $user_email, $user_school_id,$phone_number, $hashed_password);

        if($register){
            echo "success";

        }else{
            echo "failed";
        }
    }


?>