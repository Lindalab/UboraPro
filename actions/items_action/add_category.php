<?php 
    require_once("../../controllers/item_controller.php");

    $category_name = $_POST["category_name"];

    $result = createCategory_ctr($category_name);

    if($result){
        echo "success";
        header("location: ./../../admin/admin.php");
    }else{
        echo "failed";
    }


?>