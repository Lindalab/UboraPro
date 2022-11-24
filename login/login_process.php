<?php
session_start();
unset($_SESSION["log_msg"]);
require_once("../controllers/users_controller.php");

if (isset($_POST['login'])) {
    $user_email = $_POST['user_email'];
    $password = $_POST['user_password'];
    $hashed_password = base64_encode($password);

    $login = login_ctr($user_email, $hashed_password);

    if ($login) {
        $_SESSION['user_id'] = $login['user_id'];
        $_SESSION['user_name'] = $login['fname'] . " " . $login['lname'];
        $_SESSION['user_email'] = $login['user_email'];
        $_SESSION['user_school_id'] = $login['user_school_id'];
        $_SESSION['phone_number'] = $login['phone_number'];
        $_SESSION['password'] = $login['password'];
        $_SESSION['user_role'] = $login['user_role'];
        $_SESSION['userLogin']=true;   
       
        header("Location: ../index.php");
    } else {
        $_SESSION["log_msg"] = "Invalid Credentials. Please try again!";
        header("Location: Login.php");
        }

       
    
}


