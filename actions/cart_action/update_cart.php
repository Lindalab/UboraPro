<?php 
    require_once("../../controllers/cart_controller.php");

    $food_id = $_GET['food_id'];
    $food_qty = $_GET['food_qty'];
    $transport_id = $_GET['transport_id']; 
    $ticket_id = $_GET['ticket_id'];
    $ip_address = $_SERVER['REMOTE_ADDR'];
    $user_id = null;
    if(!isset($_SESSION['user_id'])){
        session_start();
    }

    $user_id = $_SESSION['user_id'];


    $result = updateCart_ctr($food_id, $food_qty, $transport_id, $ticket_id, $ip_address, $user_id);
    
    if($result){
        echo "success";
    }else{
        echo "failed";
    }
?>