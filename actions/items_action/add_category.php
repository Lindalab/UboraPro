<?php 
    require_once("../../controllers/item_controller.php");

    $category_name = $_GET["category_name"];

    $result = createCategory_ctr($cat_name);

    if($result){
        echo "success";
    }else{
        echo "failed";
    }


?>