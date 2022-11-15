<?php 
    require_once("../../controllers/admin_controller.php");

    $user_id = $_GET['user_id'];

    if(!isset($_SESSION['user_id'])){
        session_start();
    }
    $admin_id = $_SESSION['user_id'];

    $result = deleteUser_ctr($user_id, $admin_id);

    if($result){
        echo "success";
    }else{
        echo "failed";
    }


?>