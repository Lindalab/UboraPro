<?php

require_once("../../controllers/awards_controller.php");

 $nominee_id = $_GET['nominee_id'];

 $result = deleteANominee_ctr($nominee_id);
 if($result){
   echo "<script>alert('success')</script>";
 }else{
   echo "<script>alert('success')</script>";
 }

?>