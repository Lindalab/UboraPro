<?php 
   
    require_once dirname(__FILE__)."/../controllers/users_controller.php";
    session_start();
    if(isset($_POST['register'])){
        $user_name = $_POST['user_name'];
        $user_email = $_POST['user_email'];
        $user_school_id = $_POST['user_school_id'];
        $phone_number = $_POST['phone_number'];
        $password = $_POST['password'];
        $confirm_password = $_POST['conf_password'];

        if ($password == $confirm_password) {
            $hashed_password = base64_encode($password);
        }
        else {
            $_SESSION["reg_msg"] = "Wrong password confirmed";
            header("Location: Register.php");
        }

        

        $check = checkEmail_ctr($user_email);

        if($check > 0){
            $_SESSION["reg_msg"] = "User already exist";
            header("Location: Register.php");
            echo "email already exist";
            return;
        }
        else {
            $register = registerUser_ctr($user_name, $user_email, $user_school_id,$phone_number, $hashed_password);

            if($register){
                echo "success";
                header("Location: Login.php");

            }else{
                $_SESSION["reg_msg"] = "Registration failed";
                header("Location: Register.php");
            }
        }
    }


?>