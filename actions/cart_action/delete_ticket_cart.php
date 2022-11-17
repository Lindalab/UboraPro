<?php 
    require_once("../../controllers/cart_controller.php");

    $ticket_id = $_GET['ticket_id'];

    session_start();
    $user_id = $_SESSION['user_id'];
    $ip_address = $_SERVER['REMOTE_ADDR'];

    $result = deleteTicketCart_ctr($ticket_id,$ip_address,$user_id,$item_qty);

    if($result){
        echo "<script>alert('success')</script>";
    }else{
        echo "<script>alert('failed')</script>";
    }

    
?>