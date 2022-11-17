<?php 
    require_once("../../controllers/awards_controller.php");

    $award_id = $_GET['award_id'];
    $award_name = $_GET['award_name'];
    $award_description = $_GET['award_description'];

    $award_image = $_GET['award_image'];

    $user_file_name = $_FILES['award_image']['name'];
    $target_dir = "../images/nominees/";
    $award_image = $target_dir.$user_file_name;
    move_uploaded_file($_FILES["award_image"]['tmp_name'], $award_image);

    $result = updateAward_ctr($award_id, $award_name, $award_description, $award_image);

    if($result){
        echo "success";
    }else{ 
        echo "failed";
    }
?>