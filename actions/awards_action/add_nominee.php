<?php 
    require_once dirname(__FILE__)."/../../controllers/awards_controller.php";;

    $award_id = $_POST['award_id'];
    $nominee_name = $_POST['nominee_name'];
    $nominee_description = $_POST['nominee_description'];

    $root_dir = ".\\..\\..\\images\\nominees\\";
    $upload_root_dir = "./../../images/nominees/";
    $file = $_FILES["nominee_image"];
    $file_dest = $root_dir . basename($file["name"]);
    $upload_file_dest = $upload_root_dir . basename($file["name"]);
    $file_type = strtolower(pathinfo($file_dest, PATHINFO_EXTENSION));

    $move = move_uploaded_file($file["tmp_name"], $file_dest);
    if ($move) {
        $result = addNominee_ctr($award_id, $nominee_name, $nominee_description, $upload_file_dest);
    
        if($result){
            echo "success";
        }else{
            echo "failed";
        }
    }


?>