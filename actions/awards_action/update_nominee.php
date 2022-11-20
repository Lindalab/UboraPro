<?php 
    require_once("../../controllers/awards_controller.php");

    $award_id = $_GET['award_id'];
    $nominee_name = $_GET['nominee_name'];
    $nominee_description = $_GET['nominee_description'];
    $nominee_id = $_GET['nominee_id'];

    $user_file_name = $_FILES['nominee_image']['name'];
    $target_dir = "../images/nominees/";
    $nominee_image = $target_dir.$user_file_name;
    move_uploaded_file($_FILES["nominee_image"]['tmp_name'], $nominee_image);

    $result = updateANominee_ctr($nominee_id, $award_id, $nominee_name, $nominee_description, $nominee_image);

    if($result){
        echo "success";
        header("location: ./../../admin/admin.php");
    }else{
        echo "failed";
    }
?>