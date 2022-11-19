<?php 
    require_once("../../controllers/item_controller.php");

    $item_id = $_GET['item_id'];
    $item_cat = $_GET['item_cat'];
    $item_price = $_GET['item_price'];$item_description = $_GET['item_description'];

    $destinationfolder="../images/items/";
    $imgname=  basename($_FILES['item_image']['name']);
    $tempname = $_FILES["file"]["tmp_name"];
    $item_image = $destinationfolder.$imgname;
    move_uploaded_file($tempname, $item_image);
    $item_keyword = $_GET['item_keywords'];
    
    $result = updateItem_ctr($item_id,$item_cat,$item_price,$item_description,$item_image,$item_keyword);

    if($result){
        echo "<script>alert('success');</script>";
    }else{
        echo "<script>alert('failed');</script>";
    }

?>