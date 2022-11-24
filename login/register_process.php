<?php 
   
    require_once dirname(__FILE__)."/../controllers/users_controller.php";
    session_start();
    unset($_SESSION["reg_msg"]);
    require_once("../controllers/users_controller.php");

    if(isset($_POST['register'])){
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $user_email = $_POST['user_email'];
        $user_school_id = $_POST['user_school_id'];
        $phone_number = $_POST['phone_number'];
        $password = $_POST['password'];
        $confirm_password = $_POST['conf_password'];

        if ($password == $confirm_password) {
            $hashed_password = base64_encode($password);
            $check = checkEmail_ctr($user_email);

            if($check > 0){
                $_SESSION["reg_msg"] = "User already exist";
                header("Location: Register.php");
            }
            else {
                $register = registerUser_ctr($first_name, $last_name, $user_email, $user_school_id,$phone_number, $hashed_password);
    
                if($register){
                    header("Location: Login.php");
    
                }else{
                    $_SESSION["reg_msg"] = "Registration failed";
                    header("Location: Register.php");
                }
            }
        }
        else {
            $_SESSION["reg_msg"] = "Confirmation password does not match original!";
            header("Location: Register.php");
        }

    }


?>