<?php 

    require_once("../../controllers/awards_controller.php");

    $award_id = $_GET['award_id'];

    $result = deleteAward_ctr($award_id);

    if($result){
        echo "<script>alert('success')</script>";
    }else{
        echo "<script>alert('failed')</script>";
    }

?>