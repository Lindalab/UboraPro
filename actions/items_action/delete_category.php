<?php 
    require_once("../../controllers/item_controller.php");

    $cat_id = $_GET["id"];

    $result = deleteItemCategory_ctr($cat_id);

    if($result){
        echo "success";
        header("location: ./../../admin/admin.php");
    }else{
        echo "failed";
    }


?>