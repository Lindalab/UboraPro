<?php 
    require_once("../../controllers/awards_controller.php");

    $award_name = $_GET['award_name'];
    $award_description = $_GET['award_description'];
    // $award_image = $_GET['award_image'];

    $destinationfolder="image/";
    $imgname=  basename($_FILES['award_image']['name']);
    $tempname = $_FILES["file"]["tmp_name"];
    $award_image = $destinationfolder.$imgname;




    $checkAwardName=checkAward_ctr($award_name);
    if($checkAwardName == 0){
        move_uploaded_file($tempname, $award_image);
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
