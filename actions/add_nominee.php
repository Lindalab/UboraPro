<?php 
    require_once("../controllers/awards_controller.php");

    $award_id = $_GET['award_id'];
    $nominee_name = $_GET['nominee_name'];
    $nominee_description = $_GET['nominee_description'];
    $nominee_image = $_GET['nominee_image'];

    $result = addNominee($award_id, $nominee_name, $nominee_description, $nominee_image);

    if($result){
        echo "success";
    }else{
        echo "failed";
    }


?>