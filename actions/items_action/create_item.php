<?php 
    require_once dirname(__FILE__)."/../../controllers/item_controller.php";

    // $category_id = $_GET['category_id'];
    $item_name = $_POST['item_name'];
    $item_price = $_POST['item_price'];
    $item_description = $_POST['item_description'];
    $item_cat= $_POST['category_name'];
    
    $root_dir = ".\\..\\..\\images\\awards\\";
    $upload_root_dir = "./../images/awards/";
    $file = $_FILES["item_image"];
    $file_dest = $root_dir . basename($file["name"]);
    $upload_file_dest = $upload_root_dir . basename($file["name"]);
    $file_type = strtolower(pathinfo($file_dest, PATHINFO_EXTENSION));

    $move = move_uploaded_file($file["tmp_name"], $file_dest);
    $item_keyword = $_POST['item_keywords'];

    if ($move) {
        $result = addToItem_ctr($item_cat,$item_name,$item_price,$item_description,$upload_file_dest,$item_keyword);
    
        if($result){
            echo "success";
            if($item_cat == 1){
            header("location: ./../../admin/adminfood.php");
            }else{
                header("location: ./../../admin/adminTicket.php");
            }
        }else{
            echo "failed";
        }
    }
?>