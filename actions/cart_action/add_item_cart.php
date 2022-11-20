<?php 
    require_once dirname(__FILE__)."/../../controllers/cart_controller.php";

    $item_id = $_GET['item_id'];
    $item_qty = 1;
 
    $ip_address = $_SERVER['REMOTE_ADDR'];


    if(!isset($_SESSION['user_id'])){
        session_start();
    }
    $user_id = $_SESSION['user_id'];
    
    $result = addToItemsCart_ctr($item_id,$ip_address,$user_id,$item_qty);

    if($result){
        echo "<script>alert('success')</script>";
        header("location:../view/transport.php");
    }else{
        echo "<script>alert('failed')</script>";
    }


?>