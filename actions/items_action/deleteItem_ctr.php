<?php 
    require_once("../../controllers/item_controller.php");

    $item_id = $_GET['item_id'];

    $result = deleteItem_ctr($item_id);

    if($result){
        echo "<script>alert('success');</script>";
        header("location: ../../admin/adminfood.php");
    }else{
        echo "<script>alert('failed');</script>";
    }

?>