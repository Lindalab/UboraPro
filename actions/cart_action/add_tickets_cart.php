<?php 
    require_once dirname(__FILE__)."/../controllers/cart_controller.php";

    $ticket_id = $_GET['ticket_id'];
    $ticket_qty = 1;
    $ip_address = $_SERVER['REMOTE_ADDR'];
    
    session_start();
    $user_id = $_SESSION['user_id'];

    $result = addToTicketCart($ticket_id,$ip_address,$user_id,$ticket_qty);

    if($result){
        echo "<script>alert('success')</script>";
        header("location:../view/food.php");
    }else{
        echo "<script>alert('failed')</script>";
    }

?>