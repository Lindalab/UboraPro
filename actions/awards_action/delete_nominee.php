<?php

require_once dirname(__FILE__)."/../../controllers/awards_controller.php";

 $nominee_id = $_GET['nominee_id'];

 $result = deleteANominee_ctr($nominee_id);
 if($result){
   echo "<script>alert('success')</script>";
   header("location: ./../../admin/adminnominee.php");
 }else{
   echo "<script>alert('failed')</script>";
 }

?>