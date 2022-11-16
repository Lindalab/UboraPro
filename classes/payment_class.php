<?php 
    require_once("../settings/db_class.php");

    class Payment extends db_connection{

        function makePayment($paid_amt,$user_id,$order_id,$currency,$payment_date){
            $sql = "INSERT INTO `payment`(`paid_amt`, `user_id`, `order_id`, `currency`, `payment_date`) VALUES ('$paid_amt','$user_id','$order_id','$currency','$payment_date')";

            return $this->db_query($sql);
        }
    }




?>
