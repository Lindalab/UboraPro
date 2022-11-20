<?php 
<<<<<<< HEAD
    require_once dirname(__FILE__)."/../controllers/cart_controller.php";
=======
    require_once dirname(__FILE__)."/../../controllers/cart_controller.php";
>>>>>>> 254e7fd6173974745db5d4a9a9e83aa611203d4d

    $ticket_id = $_GET['ticket_id'];
    $ticket_qty = 1;
    $ip_address = $_SERVER['REMOTE_ADDR'];
    
    session_start();
    $user_id = $_SESSION['user_id'];

    $result = addToTicketCart($ticket_id,$ip_address,$user_id,$ticket_qty);

    if($result){
        echo "<script>alert('success')</script>";
        header("location: ./../../admin/admin.php");
    }else{
        echo "<script>alert('failed')</script>";
    }

?>