<?php 
    require_once("../../controllers/item_controller.php");

    $category_id = $_GET['category_id'];
    $item_name = $_GET['item_name'];
    $item_price = $_GET['item_price'];
    $item_description = $_GET['item_decription'];
    
    $destinationfolder="../images/items/";
    $imgname=  basename($_FILES['item_image']['name']);
    $tempname = $_FILES["file"]["tmp_name"];
    $item_image = $destinationfolder.$imgname;
    move_uploaded_file($tempname, $item_image);
    $item_keyword = $_GET['item_keywords'];

    $result = addToItem_ctr($item_cat,$item_name,$item_price,$item_description,$item_image,$item_keyword);

    if($result){
        echo "success";
    }else{
        echo "failed";
    }
?>