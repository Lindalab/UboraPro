<?php 
    require_once("../../controllers/users_controller.php");

    $user_name = $_POST['user_name'];
    $user_email = $_POST['user_email'];
    $user_school_id = $_POST['user_school_id'];
    $phone_number = $_POST['phone_number'];
    $password = $_POST['password'];
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    $result = updateUser_ctr($user_id,$user_name, $user_email, $user_school_id, $password, $phone_number);

    if($result){
        echo "success";
    }else{
        echo "failed";
    }

?>