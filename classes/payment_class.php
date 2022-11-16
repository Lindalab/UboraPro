<?php 
    require_once("../settings/db_class.php");

    class Payment extends db_connection{

        function makePayment($amount, $user_id, $payment_reference, $payment_type){
            $sql = "";

            return $this->db_query($sql);
        }
    }




?>
