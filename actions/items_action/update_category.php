<?php 

    require_once("../../controllers/item_controller.php");

    $category_id = $_GET['category_id'];
    $category_name = $_GET['category_name'];

    $result = updateCategory_ctr($cat_id,$cat_name);

    if($result){
        echo "success";
    }else{
        echo "failed";
    }

?>