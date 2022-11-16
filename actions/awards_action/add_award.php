<?php 
    require_once("../../controllers/awards_controller.php");

    $award_name = $_GET['award_name'];
    $award_description = $_GET['award_description'];
    $ward_image = $_GET['award_image'];

    $checkAwardName=checkAward_ctr($award_name);
    if($checkAwardName == 0){
        $result = createAward_ctr($award_name, $award_description, $award_image);
        if($result){
            echo "success";
        }else{
            echo "failed";
        }

    }
    else{
        echo "<script>
        alert('Award is already created')
        </script>";
    }


    ?>
