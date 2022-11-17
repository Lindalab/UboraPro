<?php 
    require_once("../../controllers/cart_controller.php");

    $ticket_id = $_GET['ticket_id'];
    $ticket_qty = 1;
    $ip_address = $_SERVER['REMOTE_ADDR'];
    
    session_start();
    $user_id = $_SESSION['user_id'];

    $result = addToTicketCart($ticket_id,$ip_address,$user_id,$ticket_qty);

    if($result){
        echo "<script>alert('success')</script>";
    }else{
        echo "<script>alert('failed')</script>";
    }

?>